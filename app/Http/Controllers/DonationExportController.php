<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Read-only export of the donations table for the Wall of Legacy reconciliation
 * dashboard (the-wall-next). Server-to-server only — guarded by a static shared
 * secret in the X-Export-Key header, constant-time compared. No writes.
 */
class DonationExportController extends Controller
{
    private const PAGE_SIZE = 500;

    public function donations(Request $request): JsonResponse
    {
        $expected = (string) config('services.wall.export_key');
        $provided = (string) $request->header('X-Export-Key', '');

        if ($expected === '' || ! hash_equals($expected, $provided)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Cursor on id (stable, gapless pagination); optional `since` ISO filter.
        $after = (int) $request->query('after', 0);
        $since = $request->query('since');

        $query = Donation::query()
            ->where('id', '>', $after)
            ->orderBy('id');

        if (is_string($since) && $since !== '') {
            $ts = strtotime($since);
            if ($ts !== false) {
                $query->where('created_at', '>=', date('Y-m-d H:i:s', $ts));
            }
        }

        $rows = $query->limit(self::PAGE_SIZE + 1)->get([
            'id',
            'source',
            'txn_id',
            'name',
            'initiated_name',
            'birthdate',
            'email',
            'mobile',
            'amount',
            'status',
            'created_at',
            'address',
            'city',
            'state',
            'pincode',
            'pan',
            'donation_type',
        ]);

        $hasMore = $rows->count() > self::PAGE_SIZE;
        $page = $rows->take(self::PAGE_SIZE);

        $donations = $page->map(fn(Donation $d) => [
            'id' => $d->id,
            'source' => $d->source,
            'txn_id' => $d->txn_id,
            'name' => $d->name,
            'initiated_name' => $d->initiated_name,
            'birthdate' => optional($d->birthdate)->toDateString(),
            'email' => $d->email,
            'phone' => $d->mobile,
            'amount' => (string) $d->amount,
            'status' => $d->status,
            'created_at' => optional($d->created_at)->toIso8601String(),
            'address' => $d->address,
            'city' => $d->city,
            'state' => $d->state,
            'pincode' => $d->pincode,
            'pan' => $d->pan,
            'donation_type' => $d->donation_type,
        ])->values();

        return response()->json([
            'donations' => $donations,
            'nextAfter' => $hasMore ? $page->last()->id : null,
        ]);
    }
}
