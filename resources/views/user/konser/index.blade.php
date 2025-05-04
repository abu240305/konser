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

							@php
								$avgRating = $konser->ulasan->avg('rating_222086');
							@endphp
							<p class="text-warning">
								{{ $avgRating ? rtrim(rtrim(number_format($avgRating, 1), '0'), '.') . '/5' : 'Belum ada rating' }}
							</p>



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