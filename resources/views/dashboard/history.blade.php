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
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <!--start shop area-->
            <section class="shop-page">
                <div class="shop-container">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-xl">
                                    <div class="product-wrapper">
                                        <div class="product-grid">
                                            @if ($videos->count() == 0)
                                                <p class="mt-6 text-gray-500 leading-relaxed">
                                                    no videos found
                                                </p>
                                            @else
                                                @foreach ($videos as $video)
                                                    
                                                    <div class="card product-card">
                                                        <a href="javascript:;" class="position-absolute end-0 top-0 m-3">
                                                            {{-- <div class="product-wishlist">
                                                        <i class="bx bx-heart"></i>
                                                    </div> --}}
                                                        </a>
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <div class="p-3">
                                                                    <video controls class="img-fluid rounded">
                                                                        <source
                                                                            src="{{ asset('storage/' . $video->path) }}">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">

                                                                <div class="card-body">
                                                                    <div class="product-info">
                                                                        <h5>{{ $video->title }}</h5>
                                                                            <h6 class="product-name mb-2">
                                                                                Deskripsi
                                                                            </h6>
                                                                        <p class="card-text">
                                                                            Lorem ipsum dolor sit amet consectetur
                                                                            adipisicing elit.
                                                                            Dolor beatae illo sapiente accusantium ipsam eos
                                                                            cum
                                                                            tenetur hic molestias error, iure id nihil
                                                                            itaque
                                                                            deleniti maxime maiores voluptatibus et fugit.
                                                                        </p>

                                                                        <h6>Diupload Oleh</h6>
                                                                        <p>{{ $video->user->name }}</p>
                                                                        <h6>Tanggal Upload</h6>
                                                                        <p>{{ $video->created_at->timezone('Etc/GMT-7') }}
                                                                        </p>


                                                                        <div class="product-action mt-2">
                                                                            <div class="d-flex gap-2">
                                                                                <a href="{{ route('edit') }}"
                                                                                    class="btn btn-primary btn-ecomm">
                                                                                    <i class="bx bxs-cart-add"></i>Edit</a>
                                                                                <a href="{{ route('dashboard.details', $video) }}"
                                                                                    class="btn btn-primary btn-ecomm">
                                                                                    <i
                                                                                        class="bx bxs-cart-add"></i>Detail</a>
                                                                                <a href="javascript:;"
                                                                                    class="btn btn-light btn-ecomm">
                                                                                    <i
                                                                                        class="bx bx-shopping-bag"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <br>
                                            {{ $videos->links() }}
                                        </div>
                                        <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:;"><i
                                                            class="bx bx-chevron-left"></i>
                                                        Prev</a>
                                                </li>
                                            </ul>
                                            <ul class="pagination">
                                                <li class="page-item active d-none d-sm-block" aria-current="page">
                                                    <span class="page-link">1<span
                                                            class="visually-hidden">(current)</span></span>
                                                </li>
                                                <li class="page-item d-none d-sm-block">
                                                    <a class="page-link" href="javascript:;">2</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block">
                                                    <a class="page-link" href="javascript:;">3</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block">
                                                    <a class="page-link" href="javascript:;">4</a>
                                                </li>
                                                <li class="page-item d-none d-sm-block">
                                                    <a class="page-link" href="javascript:;">5</a>
                                                </li>
                                            </ul>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:;" aria-label="Next">Next <i
                                                            class="bx bx-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </section>
            <!--end shop area-->
        </div>
        <!-- end page content-->
    </div>
@endsection
