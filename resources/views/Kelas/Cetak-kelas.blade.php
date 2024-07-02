<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Kelas</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Kelas</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Fasilitas</th>
            </tr>
            @foreach ($dtCetak as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Nama_Kelas }}</td>
                <td>{{ $item->Fasilitas }}</td>
            </tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>