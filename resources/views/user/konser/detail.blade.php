@extends('user.layout.index')
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">

        <!-- Inner Row to center content -->
        <div class="row no-gutters justify-content-center">

            <!-- Kolom Daftar Konser -->
            <div class="col-md-8 d-flex">
                <!-- Gambar Konser -->
                <div class="col-md-5">
                    <img src="{{asset('assetsUser/images/konser3.svg')}}" class="img-fluid" alt="Festival Musik">
                </div>
                
                <!-- Deskripsi Konser -->
                <div class="col-md-9">
                    <div class="card-body">
                        <h4 class="card-title">Konser</h4>
                        <p class="card-text">Nikmati pengalaman musik luar biasa di festival musik tahunan kami. Dapatkan tiketmu sekarang!</p>
                        <p class="card-text">
                            Harga Tiket VIP : 
                            <strong>Rp 150.000</strong>
                        </p>
                        <p class="card-text">
                            Harga Tiket Reguler : 
                            <strong>Rp 150.000</strong>
                        </p>
                        <p class="card-text">Tanggal: <strong>25 Mei 2025</strong></p>
                        <p class="card-text">Quota: <strong>100</strong></p>
                        <p class="card-text">Lokasi: <strong>Jakarta Convention Center</strong></p>
                        <p class="card-text">Rating: 
						    <span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
						    <span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
						    <span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
						    <span class="fa fa-star text-muted"></span> <!-- Bintang kosong -->
						    <span class="fa fa-star text-muted"></span> <!-- Bintang kosong -->
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kolom Form Pemesanan Tiket (Ditaruh di bawah) -->
            <div class="col-md-8 mt-4">
                <!-- Form Pemesanan Tiket -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Tiket</h5>
                        <form>
                            <div class="form-group">
                                <label for="ticketQuantity">Jumlah Tiket</label>
                                <input type="number" class="form-control" id="ticketQuantity" value="1" min="1" max="100" required>
                            </div>
                            <div class="form-group">
                                <label for="ticketType">Jenis Tiket</label>
                                <select class="form-control" id="ticketType" required>
                                    <option value="regular">Tiket Reguler</option>
                                    <option value="vip">Tiket VIP</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tombol Checkout -->
                <button class="btn btn-primary btn-block">Beli</button>
                <button class="btn btn-primary btn-block">Masukkan Keranjang</button>
            </div>

        </div>
    </div>
@endsection
