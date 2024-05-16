@extends('layouts.main')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <!--start product detail-->
            <section class="shop-page">
                <div class="shop-container">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="product-detail-card">
                                <div class="product-detail-body">
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-5">
                                            <div class="image-zoom-section">
                                                <div class="product-gallery owl-carousel owl-theme border rounded mb-3 p-3"
                                                    data-slider-id="1">
                                                    <div class="item">

                                                        <video class="mt-4 w-full" controls class="img-fluid">
                                                            <source src="{{ asset('storage/' . $video->path) }}">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="product-info-section p-3">
                                                <h3 class="mt-3 mt-lg-0 mb-0">
                                                    {{ $video->title }}
                                                </h3>


                                                <div class="mt-3">
                                                    <h6>Deskripsi :</h6>
                                                    <p class="mb-0">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
                                                        quisquam debitis ullam! Ratione labore ullam, minus a rerum sed
                                                        optio nihil rem pariatur unde voluptatum repellendus ipsam beatae
                                                        quos minima.
                                                    </p>
                                                </div>
                                                <dl class="row mt-3">
                                                    <dt class="col-sm-3">Id Video</dt>
                                                    <dd class="col-sm-9">{{ $video->id }}</dd>
                                                    <dt class="col-sm-3">Nama Pengirim</dt>
                                                    <dd class="col-sm-9">Lorem</dd>
                                                    <dt class="col-sm-3">Id Video</dt>
                                                    <dd class="col-sm-9">{{ $video->result }}</dd>
                                                </dl>

                                                <!--end row-->
                                                <div class="d-flex gap-2 mt-3">
                                                    <a href="{{ route('edit') }}" class="btn btn-primary btn-ecomm">
                                                        <i class="bx bxs-cart-add"></i>Edit</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm"><i
                                                            class="bx bx-heart"></i>Hapus</a>
                                                </div>
                                                <hr />

                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>

                            <!--start product more info-->
                            <div class="product-more-info mt-4">
                                <ul class="nav nav-tabs mb-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#discription" role="tab"
                                            aria-selected="true">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-title text-uppercase fw-500">
                                                    Deskripsi
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#more-info" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-title text-uppercase fw-500">
                                                    Penilaian
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#reviews" role="tab"
                                            aria-selected="false">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-title text-uppercase fw-500">
                                                    {{-- (3)  --}}
                                                    Diskusi
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane fade" id="discription" role="tabpanel">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero quam quos, ab
                                            facilis voluptatibus excepturi dicta aliquid accusantium est deleniti at
                                            possimus nihil eaque quo id illum aut voluptatum distinctio.Porro consectetur
                                            enim delectus eos blanditiis atque libero repudiandae, eveniet temporibus
                                            quidem. Provident dolorem assumenda fugiat ducimus, at magni sed exercitationem
                                            natus dolorum sit officia fugit aperiam adipisci facilis maiores.</p>
                                    </div>
                                    <div class="tab-pane fade" id="more-info" role="tabpanel">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat, ipsa
                                            dolor, eius eligendi numquam omnis praesentium in ab mollitia accusantium
                                            pariatur fuga, quos temporibus quas nesciunt. Eaque, quaerat quis.
                                        </p>
                                    </div>

                                    <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                                        <div class="row">
                                            <div class="col col-lg-8">
                                                <div class="product-review">
                                                    <h5 class="mb-4">Kolom Diskusi</h5>
                                                    <div class="review-list">
                                                        <div class="d-flex align-items-start">
                                                            <div class="review-user">
                                                                <img src="assets/images/avatars/01.png" width="65"
                                                                    height="65" class="rounded-circle" alt="" />
                                                            </div>
                                                            <div class="review-content ms-3">
                                                                <div class="rates cursor-pointer fs-6">
                                                                    <p>Pengupload</p>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <h6 class="mb-0">Nama</h6>
                                                                    <p class="mb-0 ms-auto">
                                                                        February 16, 2021
                                                                    </p>
                                                                </div>
                                                                <p>
                                                                    Nesciunt tofu stumptown aliqua, retro
                                                                    synth master cleanse. Mustache cliche
                                                                    tempor, williamsburg carles vegan
                                                                    helvetica. Reprehenderit butcher retro
                                                                    keffiyeh dreamcatcher synth. Cosby sweater
                                                                    eu banh mi, qui irure terry richardson ex
                                                                    squid. Aliquip placeat salvia cillum
                                                                    iphone. Seitan aliquip quis cardigan
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="d-flex align-items-start">
                                                            <div class="review-user">
                                                                <img src="assets/images/avatars/02.png" width="65"
                                                                    height="65" class="rounded-circle" alt="" />
                                                            </div>
                                                            <div class="review-content ms-3">
                                                                <div class="rates cursor-pointer fs-6">
                                                                    <p>Penilai</p>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <h6 class="mb-0">Nama</h6>
                                                                    <p class="mb-0 ms-auto">
                                                                        February 22, 2021
                                                                    </p>
                                                                </div>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                    Possimus ea earum quos? Placeat consequuntur temporibus
                                                                    quidem voluptates quas perferendis, reiciendis dicta!
                                                                    Facere, laudantium. Hic ex explicabo sapiente debitis
                                                                    odio sint.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <hr />

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-4">
                                                <div class="add-review">
                                                    <div class="form-body p-3 rounded border bg-light">
                                                        <h5 class="mb-4">Tulis Tanggapan</h5>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggapan</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                        </div>
                                                        <div class="d-grid">
                                                            <button type="button" class="btn btn-primary btn-ecomm">
                                                                Kirim
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                            <!--end product more info-->



                            <!--end similar products-->
                        </div>
                    </div>
                </div>
            </section>
            <!--end product detail-->
        </div>
        <!-- end page content-->
    </div>
@endsection