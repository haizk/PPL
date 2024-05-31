{{-- <x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-medium text-gray-900">
                        history
                    </h1>
                    @if ($videos->count() == 0)
                    <p class="mt-6 text-gray-500 leading-relaxed">
                        no videos found
                    </p>
                    @else
                    @foreach ($videos as $video)
                    <div class="mt-4">
                        <a href="{{ route('dashboard.details', $video) }}">
                            <h2 class="text-xl font-medium text-gray-900">{{ $video->title }}</h2>
                        </a>
                        <p class="text-gray-500 leading-relaxed">{{ $video->created_at->timezone('Etc/GMT-7') }}</p>
                        <video class="mt-4 w-full" controls style="max-height: 500px" controls>
                            <source src="{{ asset('storage/' . $video->path) }}">
                            Your browser does not support the video tag.
                        </video>
                        <p class="mt-4 text-gray-500 leading-relaxed">{{ $video->path }}</p>
                        <p class="mt-4 text-gray-500 leading-relaxed">{{ $video->result }}</p>
                        <br>
                        <hr>
                    </div>
                    @endforeach
                    <br>
                    {{ $videos->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.main')
@section('content')



    <div class="projects-section">
        <div class="projects-section-line">
            <div class="projects-status">
                <div class="item-status">
                    <span class="status-number">History</span>
                    <span class="status-type">45 Videos</span>
                </div>
            </div>
            <div class="view-actions">
                <button class="view-btn list-view" title="List View">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-list">
                        <line x1="8" y1="6" x2="21" y2="6" />
                        <line x1="8" y1="12" x2="21" y2="12" />
                        <line x1="8" y1="18" x2="21" y2="18" />
                        <line x1="3" y1="6" x2="3.01" y2="6" />
                        <line x1="3" y1="12" x2="3.01" y2="12" />
                        <line x1="3" y1="18" x2="3.01" y2="18" />
                    </svg>
                </button>
                <button class="view-btn grid-view active" title="Grid View">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7" />
                        <rect x="14" y="3" width="7" height="7" />
                        <rect x="14" y="14" width="7" height="7" />
                        <rect x="3" y="14" width="7" height="7" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="project-boxes jsGridView">
            @if ($videos->count() == 0)
                <p class="mt-6 text-gray-500 leading-relaxed">
                    no videos found
                </p>
            @else
                @foreach ($videos as $video)
                    @php
                        $result = json_decode($video->result, true); // Decode the JSON string
                    @endphp
                    @if ($result)
                        @php

                            $rawConfidence = number_format($result['confidence'] * 100, 2);

                            $displayConfidence = $rawConfidence . '%';

                            $label = $result['label'] == 0 ? 'Dribbling' : 'Dunk';

                        @endphp
                    @endif
                    <div class="project-box-wrapper">
                        <a href="{{ route('dashboard.details', $video) }}">
                            <div class="project-box" style="background-color: #d5deff">
                                <div class="project-box-header">
                                    <video style="width: 100%; border-radius:1rem;" controls>
                                        <source type="video/mp4" src="{{ asset('storage/' . $video->path) }}">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="project-box-content-header">
                                    <p class="box-content-header">{{ $video->title }}</p>
                                    <p class="box-content-subheader">{{ $video->created_at->timezone('Etc/GMT-7') }}</p>
                                </div>
                                <div class="box-progress-wrapper">
                                    <p class="box-progress-header">Confidence</p>
                                    @if ($rawConfidence >= 99)
                                        <div class="box-progress-bar">
                                            <span class="box-progress"
                                                style="width: 100%; height: 10px; background-color: #afeca6; border: 1px solid #000000"></span>
                                        </div>
                                        <p class="box-progress-percentage">{{ $displayConfidence }}</p>
                                    @elseif ($rawConfidence >= 90)
                                        <div class="box-progress-bar">
                                            <span class="box-progress"
                                                style="height: 10px border: 1px solid width: 90%; background-color: #4067f9"></span>
                                        </div>
                                        <p class="box-progress-percentage">{{ $displayConfidence }}</p>
                                    @else
                                        <div class="box-progress-bar">
                                            <span class="box-progress"
                                                style="height: 10px border: 1px solid width: 80%; background-color: #dd6422"></span>
                                            <!-- Adjusted width from 500% to a feasible 80% -->
                                        </div>
                                        <p class="box-progress-percentage">{{ $displayConfidence }}</p>
                                    @endif


                                </div>

                                <div class="project-box-footer">
                                    <div class="days-left" style="color: #4067f9">{{ $label }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>
        {{ $videos->links() }}
    </div>
@endsection
