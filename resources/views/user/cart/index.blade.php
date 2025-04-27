@extends('user.layout.index')
@section('content')
    <!-- Start Hero Section -->
     
		<!-- End Hero Section -->

		

		<form action="/checkout" method="GET">
      <div class="container">
        <div class="row mb-5">
          <div class="site-blocks-table">
            <table class="table">
              <thead>
                <tr>
                  <th>Konser</th>
                  <th>Type</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Total</th>
                  <th>Pilih</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                @foreach($datacart as $data)
                  <tr>
                    <td>{{ $data->tiket->konser->nama_konser_222086 }}</td>
                    <td>{{ $data->type_222086 }}</td>
                    <td>
                      @if($data->type_222086 === 'vip')
                        Rp {{ number_format((float) $data->tiket->vip_222086, 0, ',', '.') }}
                      @else
                        Rp {{ number_format((float) $data->tiket->reguler_222086, 0, ',', '.') }}
                      @endif
                    </td>
                    <td>
                      <input type="number" class="form-control" value="{{ $data->jumlah_222086 }}">
                    </td>
                    <td>
                      @if($data->type_222086 === 'vip')
                        Rp {{ number_format((float) ($data->tiket->vip_222086 * $data->jumlah_222086), 0, ',', '.') }}
                      @else
                        Rp {{ number_format((float) ($data->tiket->reguler_222086 * $data->jumlah_222086), 0, ',', '.') }}
                      @endif
                    </td>
                    <td style="justify-items: center">
                      <div class="form-check text-center">
                        <input class="form-check-input" 
                          type="checkbox" 
                          name="tiket_id_222086[]" 
                          value="{{ $data->tiket_id_222086 }}" 
                          id="flexCheckChecked{{ $data->id }}">
                      </div>
                    </td>
                    <td>
                      <form action="/cart/delete" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tiket ini?')">
                        @csrf
                        <input type="hidden" name="idcart" value="{{ $data->id }}">
                        <button type="submit">X</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    
        <div class="row justify-content-end">
          <div class="col-md-6 text-right">
            <strong class="text-black">
              @php
                $total = 0;
                foreach ($datacart as $data) {
                  $price = $data->type_222086 === 'vip' ? $data->tiket->vip_222086 : $data->tiket->reguler_222086;
                  $total += $price * $data->jumlah_222086;
                }
              @endphp
              Rp {{ number_format((float) $total, 0, ',', '.') }}
            </strong>
          </div>
        </div>
    
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Checkout</button>
          </div>
        </div>
      </div>
    </form>
    
@endsection