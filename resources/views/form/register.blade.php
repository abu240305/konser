<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pemesanan tiket konser</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logoweb.svg" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <style>
    body {
      background-color: #3b5d50;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('assets/images/logos/logoweb1.png')}}" width="150" alt="">
                </a>
                <p class="text-center">Silahkan Registrasi</p>
                <form action="/register/proses" method="POST">
                  @csrf
                  <div class="mb-2">
                    <label for="exampleInputtext1" class="form-label">Nama lengkap</label>
                    <input value="{{old('nama_222086')}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="nama_222086">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputtext1" class="form-label">Alamat</label>
                    <input value="{{old('alamat_222086')}}" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" name="alamat_222086">
                  </div>
                  <div class="mb-2">
                    <label for="jenisKelamin" class="form-label">Jenis kelamin</label>
                    <select class="form-control" id="jenisKelamin" name="jenisKelamin_222086">
                        <option @if (old('jenisKelamin_222086' == ''))
                            selected
                        @endif value="">Pilih jenis kelamin</option>
                        <option @if (old('jenisKelamin_222086' == 'L'))
                            selected
                        @endif value="L">Laki-laki</option>
                        <option @if (old('jenisKelamin_222086' == 'P'))
                            selected  
                        @endif value="P">Perempuan</option>
                    </select>
                  </div>                
                  <div class="mb-2">
                    <label for="exampleInputtext1" class="form-label">Tanggal Lahir</label>
                    <input value="{{old('tanggalLahir_222086')}}" type="date" class="form-control" id="exampleInputtext1"  name="tanggalLahir_222086">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input value="{{old('email_222086')}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_222086">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_222086">
                    @if ($errors->has('password_222086'))
                        <small class="text-danger">Password minimal 6 karakter</small>
                    @endif
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar</button> 
                </form>
                <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun?</p>
                  <a class="text-primary fw-bold ms-2" href="/login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>