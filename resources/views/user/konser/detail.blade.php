@extends('user.layout.index')
@section('content')
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">

        <!-- Inner Row to center content -->
        <div class="row no-gutters justify-content-center">

            @csrf
            <div class="col-md-8 d-flex">
                <!-- Gambar Konser -->
                {{-- <p>{{$dataKonser->id}}</p> --}}
                <div class="col-md-5">
                    <p>{{$dataKonser->konser->foto_222086}}</p>
                    <p class="mt-2 mb-0">Deskripsi: </p>
                    <p> {{$dataKonser->konser->deskripsi_222086}}</p>
                </div>
                
                <!-- Deskripsi Konser -->
                <div class="col-md-9 mt-3">
                    <div class="card-body p-2">
                        <h4 class="card-title mb-3">{{$dataKonser->konser->nama_konser_222086}}</h4>
                        <p class="card-text mb-2">
                            Harga Tiket VIP: 
                            <strong>{{ 'Rp ' . number_format($dataKonser->vip_222086, 0, ',', '.') }}</strong>
                        </p>
                        <p class="card-text mb-2">
                            Harga Tiket Reguler: 
                            <strong>{{ 'Rp ' . number_format($dataKonser->reguler_222086, 0, ',', '.') }}</strong>
                        </p>
                        <p class="card-text mb-2">Quota VIP: <strong>{{$dataKonser->quota_vip_222086}}</strong></p>
                        <p class="card-text mb-2">Quota Reguler: <strong>{{$dataKonser->quota_reguler_222086}}</strong></p>
                        <p class="card-text mb-2">Tanggal: <strong>{{$dataKonser->konser->tanggal_222086}}</strong></p>
                        <p class="card-text mb-2">Jam: <strong>{{$dataKonser->konser->jam_222086}}</strong></p>
                        <p class="card-text mb-2">Lokasi: <strong>{{$dataKonser->konser->tempat_222086}}</strong></p>
                        <p class="card-text mb-2">Rating: 
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-muted"></span>
                            <span class="fa fa-star text-muted"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 ">
                <!-- Form Pemesanan Tiket -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Tiket</h5>
                        <form action="{{route('store.keranjang')}}" method="POST"> 
                            @csrf
                            <input type="hidden" name="tiket_id_222086" value="{{ $dataKonser->id }}" >
                            <input type="hidden" name="customer_id_222086" value="1" >
                            <div class="form-group"> 
                                <label for="ticketQuantity">Jumlah Tiket</label>
                                <input type="number" class="form-control" name="jumlah" id="ticketQuantity" value="1" min="1" max="1000000" required>
                            </div>
                            <div class="form-group">
                                <label for="ticketType">Jenis Tiket</label>
                                <select class="form-control" id="ticketType" name="type_222086" required>
                                    <option value="" disabled selected>Pilih Jenis Tiket</option>
                                    <option value="reguler">Tiket Reguler</option>
                                    <option value="vip">Tiket VIP</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block">Masukkan Keranjang</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <a href="/cart/{{$dataKonser->id}}"><button class="btn btn-primary btn-block">Beli</button></a> --}}

                <!-- Tombol Checkout -->
                {{-- <a href=""></a> --}}
            </div>
            <!-- Kolom Daftar Konser -->
            

            <!-- Kolom Form Pemesanan Tiket (Ditaruh di bawah) -->
            

        </div>
    </div>
@endsection
