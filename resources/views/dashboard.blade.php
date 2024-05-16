@extends('layouts.main')
@section('content')
    <div class="projects-section">
        <div class="projects-section-header">
            <p>Dashboard</p>
            <div class="circle">
                <div class="circles"></div>
                <div class="circles"></div>
                <div class="circles"></div>
            </div>

        </div>

        <div class="projects-section-line">

            <div class="projects-status">
                <div class="item-status">
                    <span class="status-number">{{ $totalVideos }}</span>
                    <span class="status-type">Videos</span>
                </div>
            </div>
        </div>
        <div class="project-boxes jsGridView" style=" margin-top: 1rem">
            <div class="project-box-wrapper" style="max-width: 25%;">
                <a href="{{ route('profile.show') }}">
                    <div class="project-box" style="background-color: #C9C0FC">
                        <figure class="img-container">
                            <img src="{{ asset('assets/images/profile.svg') }}" id="img-hover" />
                            <figcaption class="img-content">
                                <h2 class="title">Profile</h2>

                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">Profile</h2>
                            </span>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="project-box-wrapper" style="max-width: 25%;">
                <a href="{{ route('dashboard.upload') }}">
                    <div class="project-box" style="background-color: #f8b1c9">
                        <figure class="img-container">
                            <img src="{{ asset('assets/images/upload-icon.svg') }}" id="img-hover" />
                            <figcaption class="img-content">
                                <h2 class="title">Upload</h2>

                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">Upload</h2>
                            </span>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="project-box-wrapper" style="max-width: 25%;">
                <a href="{{ route('dashboard.history') }}">
                    <div class="project-box" style="background-color: #87CEDA">
                        <figure class="img-container">
                            <img src="{{ asset('assets/images/history.svg') }}" id="img-hover" />
                            <figcaption class="img-content">
                                <h2 class="title">History</h2>

                            </figcaption>
                            <span class="img-content-hover">
                                <h2 class="title">History</h2>
                            </span>
                        </figure>
                    </div>
                </a>
            </div>

            <div class="project-box-wrapper" style="max-width: 25%;">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <div class="project-box" style="background-color: #F6F7A5">
                            <figure class="img-container">
                                <img src="{{ asset('assets/images/logout.svg') }}" id="img-hover" />
                                <figcaption class="img-content">
                                    <h2 class="title">Logout</h2>

                                </figcaption>
                                <span class="img-content-hover">
                                    <h2 class="title">Logout</h2>
                                </span>
                            </figure>
                        </div>
                    </a>
                </form>
            </div>

        </div>
    </div>

    <script>
        const imgContent = document.querySelectorAll('.img-content-hover');

        function showImgContent(e) {
            for (var i = 0; i < imgContent.length; i++) {
                x = e.pageX;
                y = e.pageY;
                imgContent[i].style.transform = `translate3d(${x}px, ${y}px, 0)`;
            }
        };

        document.addEventListener('mousemove', showImgContent);
    </script>
@endsection
