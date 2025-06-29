<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Tiket</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            font-size: 11px;
            margin: 0;
            padding: 0;
            background: #fff;
        }
        .container {
            width: 220px;
            margin: 0 auto;
            padding: 10px;
            border: 1px dashed #999;
        }
        .text-center {
            text-align: center;
        }
        .logo {
            width: 40px;
            margin-bottom: 5px;
        }
        .title {
            font-size: 13px;
            font-weight: bold;
        }
        .subtitle {
            font-size: 10px;
            color: #555;
            margin-bottom: 10px;
        }
        .divider {
            border-top: 1px dashed #aaa;
            margin: 6px 0;
        }
        table {
            width: 100%;
        }
        td {
            vertical-align: top;
            line-height: 1.5;
        }
        .label {
            text-align: left;
            width: 75px;
            font-weight: bold;
        }
        .value {
            text-align: left;
        }
        .footer {
            font-size: 9px;
            text-align: center;
            color: #666;
            margin-top: 8px;
            line-height: 1.4;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center">
        <img src="{{ public_path('assets/images/logos/logoweb1.png') }}" class="logo" alt="Logo">
        <div class="title">TIKET KONSER</div>
        <div class="subtitle">Struk Pemesanan Resmi</div>
    </div>

    <div class="divider"></div>

    <table>
        <tr><td class="label">Nama</td><td class="value">: {{ $data->pesanan->customer->nama_222086 }}</td></tr>
        <tr><td class="label">Konser</td><td class="value">: {{ $data->tiket->konser->nama_konser_222086 }}</td></tr>
        <tr><td class="label">Tipe Tiket</td><td class="value">: {{ strtoupper($data->type_222086) }}</td></tr>
        <tr><td class="label">Jumlah</td><td class="value">: {{ $data->jumlah_222086 }}</td></tr>
        <tr>
            <td class="label">Total Harga</td>
            <td class="value">
                : Rp {{ number_format($data->jumlah_222086 * ($data->type_222086 === 'vip' ? $data->tiket->vip_222086 : $data->tiket->reguler_222086), 0, ',', '.') }}
            </td>
        </tr>
    </table>

    <div class="divider"></div>

    <table>
        <tr><td class="label">Tanggal</td><td class="value">: {{ \Carbon\Carbon::parse($data->tiket->konser->tanggal_222086)->format('d M Y') }}</td></tr>
        <tr><td class="label">Waktu</td><td class="value">: {{ $data->tiket->konser->jam_222086 }}</td></tr>
        <tr><td class="label">Tempat</td><td class="value">: {{ $data->tiket->konser->tempat_222086 }}</td></tr>
        <tr><td class="label">Dipesan</td><td class="value">: {{ $data->created_at->format('d/m/Y H:i') }}</td></tr>
    </table>

    <div class="divider"></div>

    <div class="footer">
        Terima kasih atas kepercayaan Anda.<br>
        Tiket ini sah digunakan tanpa tanda tangan.<br>
        — TIXGO —
    </div>
</div>

</body>
</html>
