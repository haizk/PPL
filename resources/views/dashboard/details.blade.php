@extends('layouts.main')
@section('content')
    <div class="projects-section">
        <div class="detail-boxes jsGridView">
            <div class="detail-box-wrapper">
                <div class="detail-box" style="background-color: #d5deff" id="img-detail">
                    <div class="detail-box-header">
                        <video controls style="width: 100%; border-radius: 20px;">
                            <source src="{{ asset('storage/' . $video->path) }}">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="detail">
                @php
                    $result = json_decode($video->result, true); // Decode the JSON string
                @endphp
                <h2>{{ $video->title }}</h2>
                <div class="content">
                    <div class="right">
                        <p class="detail-progress-header">Confidence</p>
                        @if ($result)
                            @php
                                $label = $result['label'] == 0 ? 'dribbling' : 'dunk';
                                // Ubah confidence ke format persen
                                $confidence = number_format($result['confidence'] * 100, 2) . '%';
                            @endphp
                            <div class="detail-progress-bar">
                                <span class="detail-progress" style="width: 100%; background-color: #4067f9"></span>
                            </div>
                            <p class="detail-progress-percentage">100%</p>
                            <p>{{ $label }}</p>
                        @endif
                    </div>
                    <div class="left">
                        <p>Upload TIme : {{ $video->user->name }}</p>
                        <p>Upload TIme : {{ $video->id }}</p>
                        <p>Upload TIme :</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="messages-section">
        <button class="messages-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x-circle">
                <circle cx="12" cy="12" r="10" />
                <line x1="15" y1="9" x2="9" y2="15" />
                <line x1="9" y1="9" x2="15" y2="15" />
            </svg>
        </button>
        <div class="projects-section-header">
            <p>Kolom Diskusi</p>
        </div>
        <div class="messages">
            <div class="message-box">
                <div class="message-content">
                    <div class="message-header">
                        <div class="name">Tulis Komentar</div>
                    </div>

                    <form class="form-body p-3 rounded border bg-light" action="{{ route('dashboard.upload_response') }}"
                        method="POST">
                        @csrf

                        <input type="hidden" name="video_id" value="{{ $video->id }}">
                        <div class="mb-3">

                            <textarea id="response" name="response" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="comment offset">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
            @foreach ($comments as $comment)
                <div class="message-box">
                    @php
                        $userId = $comment->user->id; // Ambil id pengguna
                        $bgColors = [
                            '#007bff',
                            '#6610f2',
                            '#6f42c1',
                            '#e83e8c',
                            '#fd7e14',
                            '#ffc107',
                            '#28a745',
                            '#20c997',
                            '#17a2b8',
                            '#dc3545',
                        ];
                        $bgColor = $bgColors[$userId % count($bgColors)]; // Pilih warna latar belakang sesuai dengan id pengguna
                    @endphp
                    <div
                        style="background-color: {{ $bgColor }}; width: 30px; height: 30px; text-align: center; line-height: 30px; color: #fff; border-radius: 50%;">
                        {{ strtoupper(substr($comment->user->name, 0, 1)) }}
                        {{-- Tampilkan huruf pertama dari nama pengguna --}}
                    </div>

                    <div class="message-content">
                        <div class="message-header">
                            <div class="name">{{ $comment->user->name }} | {{ $comment->user->role }}</div>
                        </div>
                        <p class="message-line">{{ $comment->content }}</p>
                        <p class="message-line time">{{ $comment->created_at->format('F d, Y') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
