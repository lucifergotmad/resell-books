<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            width: 80vw;
            height: 100vh;
            margin: 0 auto;
        }

    </style>

</head>

<body>
    <div class="container">
        <h1>Laporan Penjualan</h1>
        <table border="1" cellspadding="0">
            <thead>
                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                    <th>
                        No
                    </th>
                    <th>No Penjualan</th>
                    <th>Kode Member</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-bold">
                @foreach ($penjualan as $index => $penjualan)
                    <tr class={{ ($index + 1) % 2 ? 'odd' : 'even' }}>
                        <td>
                            {{ $index + 1 }}
                        </td>
                        <td>{{ $penjualan->no_penjualan }}</td>
                        <td>{{ $penjualan->kode_member }}</td>
                        <td>{{ $penjualan->tanggal }}</td>
                        <td>Rp. {{ $penjualan->total_harga }},00</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
