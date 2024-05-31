@extends('layouts.main')
@section('content')
{{-- <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Forms</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item">
                                <a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Elements
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>


            <div class="card">
                <form action="{{ route('dashboard.upload') }}" id="uploadForm" method="post" enctype="multipart/form-data"
class="mt-6">
@csrf
<div class="card-header">
    <h6 class="mb-0">File Input</h6>
</div>
<div class="card-body">
    <div class="mb-3">
        <label for="formFile" class="form-label">supported formats: mp4, quicktime, webm,
            matroska</label>
        <input type="file" name="file" onchange="uploadImage()" accept="video/mp4,video/quicktime,video/webm,video/x-matroska" class="form-control" type="file" />


    </div>
</div>
</form>
</div>
</div>




</div>
<!-- end page content-->
</div> --}}



<div class="projects-section">


    <div class="upload-field">
        <div class="image-upload">
            <img src="{{ asset('assets/images/upload.svg') }}" alt="">
        </div>
        <form action="{{ route('dashboard.upload') }}" id="uploadForm" method="post" enctype="multipart/form-data" class="mt-6">
            @csrf
            <div class="upload-card">
                <p>supported formats: mp4, quicktime, webm,
                    matroska</p>
                <label for="file" class="upload-btn offset">Upload <span></span></label>
                <input type="file" id="file" name="file" onchange="uploadImage()" accept="video/mp4,video/quicktime,video/webm,video/x-matroska" class="form-control" type="file" />

            </div>
        </form>
    </div>
</div>

<script>
    function uploadImage() {
        document.getElementById('uploadForm').submit();
    }
</script>
@endsection