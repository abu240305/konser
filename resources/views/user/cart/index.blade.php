@extends('user.layout.index')
@section('content')
    <!-- Start Hero Section -->
     
		<!-- End Hero Section -->

		

		<form action="/checkout" method="GET" class="my-5">
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
                          name="id_tikets[]" 
                          value="{{ $data->id }}" 
                          id="flexCheckChecked{{ $data->id }}">
                      </div>
                    </td>
                    <td>
                        <a href="/cart/delete/{{$data->id}}">X</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>      
        <div class="row">
          <div class="col-md-12 mb-4">
            <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Checkout</button>
          </div>
        </div>
      </div>
    </form>
    
@endsection