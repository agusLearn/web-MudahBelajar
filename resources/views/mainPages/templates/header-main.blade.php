<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="{{ route('beranda') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="{{ route('detailArtikel') }}">DetailArtikel</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</nav>