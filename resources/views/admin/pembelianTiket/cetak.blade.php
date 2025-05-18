<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Buku</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .periode {
            font-weight: normal;
            font-size: 16px;
            margin-left: 20px;
            color: #555;
        }
    </style>
</head>

<body>
    <div align="center">
        <h1>Laporan Data Pembelian</h1>
    </div>
    <h3>
        <!-- Keterangan Periode -->
        @if ($periode == 'hari')
            Laporan hari ini: {{ $tanggalAwal->format('d-m-Y') }}
        @elseif ($periode == 'minggu')
            Laporan minggu ini: {{ $tanggalAwal->format('d-m-Y') }} sampai {{ $tanggalAkhir->format('d-m-Y') }}
        @elseif ($periode == 'bulan')
            Laporan bulan ini: {{ $tanggalAwal->format('F Y') }}, dari {{ $tanggalAwal->format('d-m-Y') }} sampai
            {{ $tanggalAkhir->format('d-m-Y') }}
        @elseif ($periode == 'tahun')
            Laporan tahun ini: {{ $tanggalAwal->format('Y') }}, dari {{ $tanggalAwal->format('d-m-Y') }} sampai
            {{ $tanggalAkhir->format('d-m-Y') }}
        @endif
    </h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Total</th>
                <th>Tanggal Pembelian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarPembayaran as $key => $pembayaran)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pembayaran->pesanan->customer->nama_222086 }}</td>
                    <td>{{'Rp ' . number_format($pembayaran->pesanan->total_222086,'0',',', '.')}}</td>
                    <td>{{ $pembayaran->tanggal_222086 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
