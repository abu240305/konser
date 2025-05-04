@extends('user.layout.index')
@section('content')

<section class="offer_section layout_padding-bottom">
    <h1 class="text-center mb-5" style="font-weight: bold;">Daftar Ulasan Anda</h1>
    <div class="container">
        <div class="row">
            @foreach ($dataPesanan as $detail)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="review-item p-3 border rounded shadow-sm h-100">
                        <div class="review-header text-center mb-2">
                            <h5 class="review-title text-primary" style="font-size: 1rem;">{{ $detail->tiket->konser->nama_konser_222086 }}</h5>
                        </div>
                        <div class="review-body">
                            <p class="mb-1" style="font-size: 0.9rem;">
                                <strong>Tanggal Tiket:</strong> {{ $detail->created_at->format('d-m-Y') }}
                            </p>
                            @if ($detail->ulasan)
                                <p class="mb-1" style="font-size: 0.9rem;">
                                    <strong>Rating:</strong> 
                                    <span class="badge bg-success p-1">{{ $detail->ulasan->rating_222086 }}/5</span>
                                </p>
                                <p class="mb-1" style="font-size: 0.9rem;">
                                    <strong>Nama Pengulas:</strong> {{ $detail->ulasan->customer->nama_222086 ?? 'User' }}
                                </p>
                                <p><strong>Ulasan:</strong></p>
                                <div class="bg-light p-2 rounded mb-2">
                                    <textarea class="form-control" style="resize: none; font-size: 0.9rem;" rows="5" readonly>{{ $detail->ulasan->ulasan_222086 }}</textarea>
                                </div>
                                <small class="text-muted d-block" style="font-size: 0.8rem;">
                                    <strong>Tanggal Ulasan:</strong> 
                                    {{ \Carbon\Carbon::parse($detail->ulasan->tanggal_222086)->format('d-m-Y') }}
                                </small>
                            @else
                                <a href="{{ route('ulasan.tambah', $detail->id) }}" class="btn btn-warning mt-2 w-100" style="font-size: 0.9rem;">Tulis Ulasan</a>
                            @endif
                        </div>
                        <div class="review-footer text-center mt-2">
                            <small class="text-muted" style="font-size: 0.8rem;">Terima kasih telah menonton konser ini!</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
