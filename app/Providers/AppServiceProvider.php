<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $galleryEventGroups = [
            [
                'title' => 'Preaching Hall Inauguration 2026',
                'description' => 'The grand opening of our new preaching hall in Birnagar.',
                'images' => [
                    ['src' => 'images/preaching_hall_1.jpg', 'alt' => 'Preaching hall inauguration moment'],
                    ['src' => 'images/preaching_hall_2.jpg', 'alt' => 'Preaching hall devotional gathering'],
                    ['src' => 'images/preaching_hall_3.png', 'alt' => 'Preaching hall ceremonial presentation'],
                    ['src' => 'images/preaching_hall_4.png', 'alt' => 'Preaching hall blessing scene'],
                    ['src' => 'images/preaching_hall_5.png', 'alt' => 'Preaching hall community celebration'],
                    ['src' => 'images/preaching_hall_6.png', 'alt' => 'Preaching hall evening view'],
                ],
            ],
            [
                'title' => 'Bhumi Puja 2025',
                'description' => 'The grand celebration of land inauguration and Silanyasa festival.',
                'images' => [
                    ['src' => 'images/image_2.jpg', 'alt' => 'Bhumi puja ritual offering'],
                    ['src' => 'images/image_3.jpg', 'alt' => 'Bhumi puja devotional assembly'],
                    ['src' => 'images/image_4.jpg', 'alt' => 'Bhumi puja ceremonial moment'],
                    ['src' => 'images/image_5.jpg', 'alt' => 'Bhumi puja sacred gathering'],
                    ['src' => 'images/image_6.jpg', 'alt' => 'Bhumi puja blessing in progress'],
                ],
            ],
            [
                'title' => 'Land Registration 2025',
                'description' => 'HH Jayapataka Swami blessing the land registration papers.',
                'images' => [
                    ['src' => 'images/image_1a.jpg', 'alt' => 'Land registration blessing moment'],
                    ['src' => 'images/image_1b.jpg', 'alt' => 'Land registration document signing'],
                    ['src' => 'images/image_1c.jpg', 'alt' => 'Land registration ceremonial blessing'],
                    ['src' => 'images/heritage.jpg', 'alt' => 'Land registration heritage gathering'],
                ],
            ],
        ];

        View::share('galleryEventGroups', $galleryEventGroups);
        View::share('galleryHighlights', collect($galleryEventGroups)
            ->flatMap(fn(array $group) => $group['images'])
            ->shuffle()
            ->take(6)
            ->values()
            ->all());
    }
}
