@extends('layouts.app')

@section('content')
    <section class="bg-white py-10 sm:py-12 lg:py-16">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="grid gap-8 lg:grid-cols-3 xl:gap-12">
                <div class="lg:col-span-2">
                    <div class="rounded-3xl border border-[#4B77FF] bg-[#FFF9A6] p-5 shadow-xl/30 sm:p-8">
                        <div class="space-y-6">
                            @forelse ($announcements as $announcement)
                                <article class="rounded-2xl border border-[#CCB300] bg-[#FFFDC8] p-5 shadow-sm sm:p-6">
                                    <h2 class="text-lg font-semibold text-gray-900 sm:text-xl">
                                        {{ $announcement->title }}
                                    </h2>

                                    <div class="mt-4 space-y-3 text-sm text-gray-700 leading-relaxed">
                                        @if ($announcement->date)
                                            <p class="flex items-center gap-2 font-medium text-gray-800">
                                                <svg class="h-4 w-4 text-gray-700" viewBox="0 0 20 20"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2h1V3a1 1 0 112 0v1zm-2 5v7a1 1 0 001 1h10a1 1 0 001-1V7H4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <span>{{ \Illuminate\Support\Carbon::parse($announcement->date)->format('d F Y') }}</span>
                                            </p>
                                        @endif

                                        @if (!empty($announcement->image_url))
                                            <div class="mt-3">
                                                <img src="{{ asset('storage/' . $announcement->image_url) }}" alt="{{ $announcement->title }}"
                                                    class="w-full rounded-xl border border-[#CCB300]/40 object-cover" />
                                            </div>
                                        @endif

                                        @if (!empty($announcement->content))
                                            <div>{!! str($announcement->content)->sanitizeHtml() !!}</div>
                                        @endif
                                    </div>
                                </article>
                            @empty
                                <p class="text-sm text-gray-600">Belum ada pengumuman yang tersedia.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <aside class="space-y-6 lg:col-span-1">
                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                        <header class="flex items-center justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-wide text-gray-500">Kalender</p>
                                <h3 class="text-lg font-semibold text-gray-900">
                                    {{ $calendarFirstOfMonth->format('F Y') }}
                                </h3>
                            </div>
                            <div class="flex items-center gap-2 text-gray-400">
                                <button type="button" class="rounded-full p-1 hover:bg-gray-100">
                                    <span class="sr-only">Bulan sebelumnya</span>
                                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button type="button" class="rounded-full p-1 hover:bg-gray-100">
                                    <span class="sr-only">Bulan berikutnya</span>
                                    <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </header>

                        <div class="mt-6">
                            <div class="grid grid-cols-7 gap-2 text-center text-xs font-semibold uppercase text-gray-500">
                                <span>Sen</span>
                                <span>Sel</span>
                                <span>Rab</span>
                                <span>Kam</span>
                                <span>Jum</span>
                                <span>Sab</span>
                                <span>Min</span>
                            </div>
                            <div class="mt-3 grid grid-cols-7 gap-2 text-sm">
                                @foreach ($calendarWeeks as $week)
                                    @foreach ($week as $index => $day)
                                        @php
                                            $isHighlighted = $day && in_array($day, $highlightedDays, true);
                                        @endphp
                                        <div
                                            class="{{ $day ? 'rounded-lg border border-transparent py-2' : 'py-2' }} {{ $isHighlighted ? 'bg-[#334B49] font-semibold text-white' : 'text-gray-700' }}">
                                            {{ $day ?? '' }}
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                        <h3 class="text-sm font-semibold text-gray-900">Unduh Surat Pernyataan</h3>
                        <p class="mt-2 text-sm text-gray-600">Silakan unduh berkas surat pernyataan pendaftaran santri.</p>
                        <a href="#" class="mt-4 inline-flex items-center gap-2 rounded-lg bg-[#334B49] px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-[#263533]">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 011-1h4a1 1 0 110 2H5v12h10V4h-3a1 1 0 110-2h4a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm6 2a1 1 0 10-2 0v6.586L6.707 10.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L9 11.586V5z"
                                    clip-rule="evenodd" />
                            </svg>
                            Unduh File
                        </a>
                    </div>

                    <div class="rounded-2xl border border-[#334B49] bg-white p-6 shadow-sm">
                        <div class="flex items-start gap-3">
                            <div class="rounded-full bg-red-100 p-2 text-red-600">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2a10 10 0 100 20 10 10 0 000-20zm.75 14.5h-1.5v-1.5h1.5v1.5zm0-3h-1.5v-6h1.5v6z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-900">Ada pertanyaan? Hubungi admin:</p>
                                <p class="mt-1 flex items-center gap-2 text-sm text-gray-700">
                                    <svg class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884l2-3.5A1 1 0 014.894 2h2.212a1 1 0 01.948.684l1.105 3.316a1 1 0 01-.502 1.21l-1.518.76a11.037 11.037 0 005.177 5.177l.76-1.518a1 1 0 011.21-.502l3.316 1.105A1 1 0 0118 12.894v2.212a1 1 0 01-.384.782l-3.5 2a1 1 0 01-1.016.054A17.944 17.944 0 012.059 6.9a1 1 0 01-.056-1.016z" />
                                    </svg>
                                    08xxxxxxxx (WhatsApp)
                                </p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
