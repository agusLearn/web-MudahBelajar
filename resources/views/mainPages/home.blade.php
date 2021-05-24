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
    <div class="col-12 col-md-3">
        <div class="card" style="width: 17rem;">
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
    <div class="col-12 col-md-3">
        <div class="card" style="width: 17rem;">
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
    <div class="col-12 col-md-3">
        <div class="card" style="width: 17rem;">
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
    <div class="col-12 col-md-3">
        <div class="card" style="width: 17rem;">
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


@endsection