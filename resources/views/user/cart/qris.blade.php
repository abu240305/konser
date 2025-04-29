
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
    <div class="container mt-5">
        <div class="text-center">
            <h2>QRIS Pembayaran</h2>
            <p>Silakan scan QR Code di bawah ini untuk melakukan pembayaran.</p>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <img src="{{ asset('assetsUser/images/qris.jpeg') }}" alt="QRIS Code" class="img-fluid" style="max-width: 300px;">
        </div>
        <div class="text-center mt-4">
            <p>Total Pembayaran: <strong>Rp {{ number_format((float) $total, 0, ',', '.') }}</strong></p>
            <p>Pastikan Anda melakukan pembayaran sebelum waktu yang ditentukan.</p>
        </div>
        <div class="text-center mt-4">
            <form action="/selesai" method="POST">
                @csrf
                @foreach($idTiketsFromKeranjang as $idTiket)
                    <input type="hidden" name="id_tikets[]" value="{{ $idTiket }}">
                @endforeach
                <input type="number" name="total" hidden value="{{$total}}">
                <button type="submit" class="btn btn-primary">Lihat Status</button>
            </form>
        </div>
    </div>
</body>
</html>