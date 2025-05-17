<nav class="custom-navbar navbar navbar-expand-md navbar-light bg-light" aria-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logos/logoweb1.png') }}" alt="Furni Logo" height="40">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li><a class="nav-link" href="/">Konser</a></li>
                @guest('customer_222086')
                    <li><a class="nav-link" href="#" onclick="return showLoginModal()">Tiket</a></li>
                    <li><a class="nav-link" href="#" onclick="return showLoginModal()">Ulasan</a></li>
                @else
                    <li><a class="nav-link" href="/tiket">Tiket</a></li>
                    <li><a class="nav-link" href="/ulasan">Ulasan</a></li>
                @endguest
            </ul>
            
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                @guest('customer_222086')
                    <li><a class="nav-link" href="#" onclick="return showLoginModal()">
                        <img src="{{ asset('assetsUser/images/user.svg') }}">
                    </a></li>
                    <li><a class="nav-link" href="#" onclick="return showLoginModal()">
                        <img src="{{ asset('assetsUser/images/cart.svg') }}">
                    </a></li>
                @else
                    <li><a class="nav-link" href="/customer"><img src="{{ asset('assetsUser/images/user.svg') }}"></a></li>
                    <li><a class="nav-link" href="/cart"><img src="{{ asset('assetsUser/images/cart.svg') }}"></a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@guest('customer_222086')
<!-- Modal -->
<div class="modal fade" id="loginConfirmModal" tabindex="-1" aria-labelledby="loginConfirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginConfirmModalLabel">Perlu Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        Anda harus login terlebih dahulu untuk mengakses halaman ini. Ingin login sekarang?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" id="btnLoginRedirect" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

<script>
  function showLoginModal() {
    var loginModal = new bootstrap.Modal(document.getElementById('loginConfirmModal'));
    loginModal.show();
    return false; // prevent default link action
  }

  document.getElementById('btnLoginRedirect').addEventListener('click', function() {
    window.location.href = "{{ route('login') }}";
  });
</script>
@endguest
