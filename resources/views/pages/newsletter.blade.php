@extends('layouts.common_page')
@section('page-content')

<div
    class="relative overflow-hidden rounded-[2rem] border border-amber-900/10 bg-gradient-to-br from-white via-orange-50 to-amber-100/70 shadow-[0_24px_80px_rgba(120,53,15,0.08)]">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-saffron-500/10 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-28 h-80 w-80 rounded-full bg-amber-500/10 blur-3xl"></div>
    </div>

    <div class="relative px-6 py-10 md:px-10 md:py-14 lg:px-12 lg:py-16">
        <div class="max-w-3xl">
            <p class="text-[10px] md:text-xs font-bold tracking-[0.35em] uppercase text-saffron-700 mb-4">
                Newsletter Archive
            </p>
            <h1 class="text-4xl md:text-6xl font-semibold leading-tight text-amber-950 mb-6">
                Every update, collected in one place.
            </h1>
            <p class="text-base md:text-lg leading-relaxed text-stone-700 max-w-2xl">
                These newsletters keep donors and well-wishers connected to the progress of the Birnagar Temple Project. Each issue shares milestones, project updates, and the momentum made possible by your support.
            </p>
        </div>

        <!-- <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="rounded-2xl border border-amber-900/10 bg-white/80 backdrop-blur px-5 py-4 shadow-sm">
                <p class="text-[10px] uppercase tracking-[0.3em] text-stone-500 mb-2">Published issues</p>
                <p class="text-3xl font-semibold text-amber-950">3</p>
            </div>
            <div class="rounded-2xl border border-amber-900/10 bg-white/80 backdrop-blur px-5 py-4 shadow-sm">
                <p class="text-[10px] uppercase tracking-[0.3em] text-stone-500 mb-2">What they cover</p>
                <p class="text-lg font-medium text-amber-950">Progress, gratitude, and next steps</p>
            </div>
            <div class="rounded-2xl border border-amber-900/10 bg-white/80 backdrop-blur px-5 py-4 shadow-sm">
                <p class="text-[10px] uppercase tracking-[0.3em] text-stone-500 mb-2">Format</p>
                <p class="text-lg font-medium text-amber-950">Fast preview and full PDF access</p>
            </div>
        </div> -->
    </div>
</div>

<div
    class="mt-10 lg:mt-12 grid grid-cols-1 lg:grid-cols-[0.95fr_1.25fr] gap-6 lg:gap-8"
    x-data="{
		selectedIndex: 0,
		newsletters: [
			{
                title: 'August Issue 2026',
				filename: 'newsletter3.pdf',
				path: '{{ asset('newsletter3.pdf') }}',
				summary: 'The latest issue captures the most recent developments and keeps supporters aligned with the mission.',
				accent: 'from-orange-500 to-red-400',
			},
			{
				title: 'July Issue 2026',
				filename: 'newsletter2.pdf',
				path: '{{ asset('newsletter2.pdf') }}',
				summary: 'The second issue focuses on project progress, practical updates, and the growing support network.',
				accent: 'from-saffron-500 to-amber-500',
			},
			{
				title: 'June Issue 2026',
				filename: 'newsletter1.pdf',
				path: '{{ asset('newsletter1.pdf') }}',
				summary: 'The first archive issue introduces the project story and the early donor journey.',
				accent: 'from-amber-500 to-orange-500',
			},
		],
	}">
    <div class="space-y-4">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-[10px] uppercase tracking-[0.3em] text-stone-500">Archive</p>
                <h2 class="text-2xl md:text-3xl font-semibold text-amber-950 mt-1">Select an issue</h2>
            </div>
        </div>

        <template x-for="(newsletter, index) in newsletters" :key="newsletter.filename">
            <div class="rounded-[1.5rem] border border-amber-900/10 bg-white/80 backdrop-blur p-4 md:p-5 lg:p-0 lg:bg-transparent lg:border-0 lg:backdrop-blur-none">
                <button
                    type="button"
                    @click="selectedIndex = index"
                    class="hidden lg:block group w-full text-left rounded-[1.5rem] border p-4 md:p-5 transition-all duration-300 bg-white/80 backdrop-blur hover:-translate-y-0.5 hover:shadow-[0_18px_45px_rgba(120,53,15,0.08)]"
                    :class="selectedIndex === index ? 'border-saffron-500/40 ring-2 ring-saffron-500/15 shadow-[0_18px_45px_rgba(245,158,11,0.12)]' : 'border-amber-900/10'">
                    <div class="flex items-start gap-4">
                        <div class="relative shrink-0">
                            <div class="h-14 w-14 rounded-2xl bg-gradient-to-br shadow-lg" :class="newsletter.accent"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-lg">
                                <span x-text="index + 1"></span>
                            </div>
                        </div>

                        <div class="min-w-0 flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-2">
                                <h3 class="text-lg md:text-xl font-semibold text-amber-950" x-text="newsletter.title"></h3>
                                <span class="rounded-full border border-amber-900/10 bg-amber-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-stone-500">
                                    PDF
                                </span>
                            </div>
                            <p class="text-sm md:text-base leading-relaxed text-stone-600" x-text="newsletter.summary"></p>
                            <div class="mt-4 flex flex-wrap items-center gap-3">
                                <span class="text-xs text-saffron-700 font-medium" x-show="selectedIndex === index">Currently selected</span>
                            </div>
                        </div>
                    </div>
                </button>

                <div class="lg:hidden">
                    <div class="flex items-start gap-4">
                        <div class="relative shrink-0">
                            <div class="h-14 w-14 rounded-2xl bg-gradient-to-br shadow-lg" :class="newsletter.accent"></div>
                            <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-lg">
                                <span x-text="index + 1"></span>
                            </div>
                        </div>

                        <div class="min-w-0 flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-2">
                                <h3 class="text-lg md:text-xl font-semibold text-amber-950" x-text="newsletter.title"></h3>
                                <span class="rounded-full border border-amber-900/10 bg-amber-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-stone-500">
                                    PDF
                                </span>
                            </div>
                            <p class="text-sm md:text-base leading-relaxed text-stone-600" x-text="newsletter.summary"></p>

                            <div class="mt-4 flex flex-wrap gap-3">
                                <a
                                    :href="newsletter.path"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center rounded-full bg-saffron-500 px-4 py-2 text-sm font-semibold text-stone-950 transition hover:bg-saffron-400">
                                    View
                                </a>
                                <a
                                    :href="newsletter.path"
                                    download
                                    class="inline-flex items-center justify-center rounded-full border border-amber-900/10 bg-white px-4 py-2 text-sm font-semibold text-amber-950 transition hover:bg-amber-50">
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <div class="hidden lg:block rounded-[1.75rem] border border-amber-900/10 bg-stone-950 text-stone-100 shadow-[0_24px_80px_rgba(0,0,0,0.18)] overflow-hidden">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 px-6 py-5 border-b border-white/10 bg-white/5">
            <div>
                <p class="text-[10px] uppercase tracking-[0.35em] text-stone-400">Featured issue</p>
                <h3 class="text-2xl font-semibold mt-1" x-text="newsletters[selectedIndex].title"></h3>
            </div>

            <div class="flex flex-wrap gap-3">
                <a
                    :href="newsletters[selectedIndex].path"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center rounded-full bg-saffron-500 px-4 py-2 text-sm font-semibold text-stone-950 transition hover:bg-saffron-400">
                    Open PDF
                </a>
                <a
                    :href="newsletters[selectedIndex].path"
                    download
                    class="inline-flex items-center justify-center rounded-full border border-white/15 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/10">
                    Download
                </a>
            </div>
        </div>

        <div class="p-4 md:p-6">
            <div class="rounded-[1.5rem] overflow-hidden border border-white/10 bg-black/20">
                <iframe
                    class="h-[72vh] min-h-[520px] w-full"
                    :src="newsletters[selectedIndex].path"
                    title="Newsletter PDF preview"></iframe>
            </div>
        </div>
    </div>
</div>


@endsection