<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
    <link href="{{asset('assetsUser/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assetsUser/css/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assetsUser/css/style.css')}}" rel="stylesheet">
    <title>Pemesanan tiket konser</title>
</head>
<body>
    <!-- Start Hero Section -->
    <section class="hero-section text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-4">Struk Pemesanan Tiket</h1>
            <p class="lead">Terima kasih telah memesan tiket konser bersama kami!</p>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Struk Section -->
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Detail tiket</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Nama Konser:</strong></p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>{{$data->tiket->konser->nama_konser_222086}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Jumlah Tiket:</strong></p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>{{$data->jumlah_222086}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Tanggal Pemesanan:</strong></p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>{{$data->pesanan->tanggal_222086}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Total Harga:</strong></p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>
                            @if ($data->tiket->type_222086 == 'vip')
                                {{'Rp ' . number_format($data->jumlah_222086 * $data->tiket->vip_222086,'0',',', '.')}}
                                
                            @else
                                {{'Rp ' . number_format($data->jumlah_222086 * $data->tiket->reguler_222086,'0',',', '.')}}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center bg-light">
                <form action="/struk/cetak" method="POST">
                    @csrf
                    <input type="hidden" name="idTiket" value="{{ $data->id }}">
                    <button type="submit" class="btn btn-primary">Cetak Tiket</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Struk Section -->
</body>
</html>