@extends('user.layout.index')
@section('content')

<section class="offer_section layout_padding-bottom">
    <div class="container">
        <h2 class="text-center mb-4" style="font-weight: bold;">Ulasan Konser Anda</h2>

        {{-- ✅ Konser yang Sudah Diulas --}}
        <div class="mb-5">
            <h4 class="text-success mb-3">✅ Konser yang Sudah Diulas</h4>
            <div class="row">
                @forelse ($ulasanUser as $ulasan)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="p-3 border rounded shadow-sm h-100">
                            <h5 class="text-primary">{{ $ulasan->konser->nama_konser_222086 ?? 'Konser Tidak Ditemukan' }}</h5>
                            <p class="mb-1"><strong>Rating:</strong> {{ $ulasan->rating_222086 }}/5</p>
                            <p><strong>Ulasan:</strong></p>
                            <div class="bg-light p-2 rounded mb-2">
                                <textarea class="form-control" rows="4" readonly>{{ $ulasan->ulasan_222086 }}</textarea>
                            </div>
                            <small class="text-muted">Tanggal: {{ \Carbon\Carbon::parse($ulasan->tanggal_222086)->format('d-m-Y') }}</small>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada konser yang Anda ulas.</p>
                @endforelse
            </div>
        </div>

        {{-- ⚠️ Konser yang Belum Diulas --}}
        <div>
            <h4 class="text-warning mb-3">⚠️ Konser yang Belum Anda Ulas</h4>
            <div class="row">
                @forelse ($belumDiulas as $detail)
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="p-3 border rounded shadow-sm h-100">
                            <h5 class="text-secondary">{{ $detail->tiket->konser->nama_konser_222086 ?? 'Konser Tidak Ditemukan' }}</h5>
                            <p><strong>Tanggal Tiket:</strong> {{ $detail->created_at->format('d-m-Y') }}</p>
                            <a href="{{ route('ulasan.tambah', $detail->id) }}" class="btn btn-warning w-100 mt-2">Tulis Ulasan</a>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Semua konser telah Anda ulas. Terima kasih!</p>
                @endforelse
            </div>
        </div>
    </div>
</section>

@endsection
