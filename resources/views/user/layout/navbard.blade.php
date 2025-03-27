<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/images/logos/logoweb1.png') }}" alt="Furni Logo" height="40">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li><a class="nav-link" href="/">Konser</a></li>
                <li><a class="nav-link" href="/tiket">Tiket</a></li>
                <li><a class="nav-link" href="/ulasan">Ulasan</a></li>
            </ul>
            
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="#"><img src="{{ asset('assetsUser/images/user.svg') }}"></a></li>
                <li><a class="nav-link" href="/cart"><img src="{{ asset('assetsUser/images/cart.svg') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>
