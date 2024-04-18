@extends('layouts.main')
@section('content')
    <!-- start page content wrapper-->
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
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary">
                            Settings
                        </button>
                        <button type="button"
                            class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Text Input</h6>
                </div>
                <div class="card-body">
                    <input class="form-control mb-3" type="text" placeholder="Default input"
                        aria-label="default input example" />

                    <input class="form-control mb-3" type="text" placeholder="Disabled readonly input"
                        aria-label="Disabled input example" disabled="" readonly="" />
                    <input class="form-control" type="text" placeholder="Readonly input here..."
                        aria-label="readonly input example" readonly="" />
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">Select Input</h6>
                </div>
                <div class="card-body">
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0">File Input</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile" />
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple="" />
                    </div>
                </div>
            </div>


        </div>



        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Input Mask</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Date:</label>
                        <input type="date" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date time:</label>
                        <input type="datetime-local" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" value="........" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Input File:</label>
                        <input type="file" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Month:</label>
                        <input type="month" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Search:</label>
                        <input type="search" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tel:</label>
                        <input type="tel" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time:</label>
                        <input type="time" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Url:</label>
                        <input type="url" class="form-control" placeholder="https://example.com/users/" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Week:</label>
                        <input type="week" class="form-control" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end page content-->
    </div>
@endsection