@extends('mainPages.templates.master-main')

@section('title-page', 'Halaman Beranda')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card">
            <img src=".." class="card-img-top" alt="..." height="200">
            <div class="card-body">
                <a href=".." class="text-reset">
                    <h5 class="card-title"></h5>Title Article in here
                </a>
            </div>
            <div class="card-footer bg-transparent d-inline">
                <a href="#" class="text-reset">Profile</a>
                <small class="text-muted text-right d-block">19 Agustus 2021</small>
            </div>
        </div>
    </div>

</div>


<!-- Pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

<!-- Link untuk mengarah ke semua artikel berdasarkan kategori yang dipilih user -->
<div class="row">
    <div class="col-12" style="display: contents;">
        <a href="" class="btn btn-primary m-auto">Lihat Semua Artikel</a>
    </div>
</div>


@endsection