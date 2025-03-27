@extends('admin.layout.index')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
        
        <div class="container-fluid">
            {{-- tambah --}}
            <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit tiket</h5>
                    <div class="card">
                    <div class="card-body">
                        <form action="/admin/tiket/edit/proses" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" value="{{$tiket->id}}" name="idTiket" hidden>
                            <label for="exampleInputEmail1" class="form-label">Pilih Konser</label>
                            <select name="konser_id" id="" class="form-select">
                            <option value="">Pilih Konser</option> 
                            @foreach ($konser as $item)
                            <option value="{{$item->id}}" {{ $item->id == $tiket->konser_id ? 'selected' : '' }}>{{$item->nama_konser}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Input Harga</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Harga" name="harga" value="{{$tiket->harga}}">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Quota</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Quota" name="quota" value="{{$tiket->quota}}">
                        </div> 
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Type</label>
                            <select name="type" id="type" class="form-select">
                                <option value="">Pilih Type</option>
                                <option value="VIP" {{ $tiket->type == 'VIP' ? 'selected' : '' }}>VIP</option>
                                <option value="Regular" {{ $tiket->type == 'Regular' ? 'selected' : '' }}>Regular</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
            {{-- akhir --}}
        </div>
        </div>
    </div>
@endsection