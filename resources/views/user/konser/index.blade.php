@extends('user.layout.index')
@section('content')
        <div class="untree_co-section product-section before-footer-section">
			<div class="container">
				<div class="row">
					@foreach($dataKonser as $konser)
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="/detail/{{$konser->id}}">
							{{-- <p>{{$konser->id}}</p> --}}
							<img src="{{asset('storage/images/'.$konser->foto_222086)}}" class="img-fluid product-thumbnail" style="width:300px; height:300px; object-fit:cover;">
							<h4>{{$konser->nama_konser_222086}}</h4>

							<div class="product-rating">
								<span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
								<span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
								<span class="fa fa-star text-warning"></span> <!-- Bintang penuh -->
								<span class="fa fa-star text-muted"></span> <!-- Bintang kosong -->
								<span class="fa fa-star text-muted"></span> <!-- Bintang kosong -->
							</div>

							<span class="icon-cross">
								<img src="{{asset('assetsUser/images/cross.svg')}}" class="img-fluid">
							</span>
						</a>
					</div> 
					@endforeach
		    	</div>
		    </div>
		</div>
@endsection