<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }

        .kop-table {
            width: 100%;
            margin-bottom: 10px;
            border: none;
        }

        .kop-table td {
            vertical-align: middle;
            border: none;
        }

        .nama-perusahaan {
            font-size: 22px;
            font-weight: bold;
        }

        .logo img {
            width: 80px;
            height: auto;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0 20px 0;
        }

        h3 {
            text-align: center;
            margin: 0 0 10px 0;
            font-size: 16px;
        }

        .periode {
            margin-bottom: 15px;
            font-size: 13px;
        }

        .table1 {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .table1 thead {
            background-color: #3b82f6;
            color: #fff;
        }

        .table1 th,
        .table1 td {
            border: 1px solid #000;
            padding: 8px 10px;
            text-align: left;
        }

        .table1 tbody tr:nth-child(even) {
            background-color: #f1f5f9;
        }

        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: #f1f5f9;
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

    <table class="kop-table">
        <tr>
            <td class="nama-perusahaan">TIXGO</td>
            <td class="logo" style="text-align: right;">
                <img src="{{ public_path('assets/images/logos/logoweb1.png') }}" alt="Logo">
            </td>
        </tr>
    </table>

    <div class="line"></div>

    <h3>Laporan Data Pembelian</h3>

    <div class="periode">
        @if ($periode == 'hari')
            Laporan hari ini: {{ $tanggalAwal->format('d-m-Y') }}
        @elseif ($periode == 'minggu')
            Laporan periode ini: {{ $tanggalAwal->format('d-m-Y') }} sampai {{ $tanggalAkhir->format('d-m-Y') }}
        @elseif ($periode == 'bulan')
            Laporan periode ini: {{ $tanggalAwal->format('F Y') }}, dari {{ $tanggalAwal->format('d-m-Y') }} sampai {{ $tanggalAkhir->format('d-m-Y') }}
        @elseif ($periode == 'tahun')
            Laporan periode ini: {{ $tanggalAwal->format('Y') }}, dari {{ $tanggalAwal->format('d-m-Y') }} sampai {{ $tanggalAkhir->format('d-m-Y') }}
        @endif
    </div>

    <table class="table1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Total Pembelian</th>
                <th>Tanggal Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarPembayaran as $key => $pembayaran)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pembayaran->pesanan->customer->nama_222086 }}</td>
                    <td>{{ 'Rp ' . number_format($pembayaran->pesanan->total_222086, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($pembayaran->tanggal_222086)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        &copy; {{ date('Y') }} TIXGO. Semua Hak Dilindungi.
    </div>

</body>
</html>
