<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<style>

body{

    font-family: DejaVu Sans, sans-serif;

    color:#333;

    font-size:12px;

}

.header{

    text-align:center;

    border-bottom:3px solid #2563eb;

    padding-bottom:15px;

    margin-bottom:25px;

}

.logo{

    font-size:22px;

    font-weight:bold;

    color:#2563eb;

}

.title{

    font-size:22px;

    font-weight:bold;

    margin-top:8px;

}

.subtitle{

    color:#666;

    margin-top:5px;

}

.info{

    margin-bottom:20px;

    font-size:11px;

}

.info table{

    border:none;

}

.info td{

    border:none;

    padding:3px 0;

}

table{

    width:100%;

    border-collapse:collapse;

}

th{

    background:#2563eb;

    color:white;

    padding:10px;

    border:1px solid #d9d9d9;

    text-align:center;

}

td{

    border:1px solid #d9d9d9;

    padding:8px;

}

tbody tr:nth-child(even){

    background:#f7f9fc;

}

.text-center{

    text-align:center;

}

.footer{

    margin-top:35px;

    border-top:1px solid #ccc;

    padding-top:10px;

    font-size:11px;

    color:#666;

}

.signature{

    margin-top:45px;

    width:250px;

    float:right;

    text-align:center;

}

</style>

</head>

<body>

<div class="header">

<div class="logo">

🎓 WORKSHOP IT

</div>

<div class="title">

LAPORAN DATA WORKSHOP

</div>

<div class="subtitle">

Platform Informasi Workshop Teknologi Informasi

</div>

</div>

<div class="info">

<table width="100%">

<tr>

<td>

<b>Tanggal Cetak</b><br>

{{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}

</td>

<td align="right">

<b>Total Workshop</b><br>

{{ $workshops->count() }} Data

</td>

</tr>

</table>

</div>

<table>

<thead>

<tr>

<th width="6%">No</th>

<th width="25%">Judul</th>

<th width="18%">Pembicara</th>

<th width="15%">Lokasi</th>

<th width="22%">Penyelenggara</th>

<th width="14%">Tanggal</th>

</tr>

</thead>

<tbody>

@foreach($workshops as $workshop)

<tr>

<td class="text-center">

{{ $loop->iteration }}

</td>

<td>

{{ $workshop->judul }}

</td>

<td>

{{ $workshop->pembicara }}

</td>

<td>

{{ $workshop->lokasi }}

</td>

<td>

{{ $workshop->penyelenggara }}

</td>

<td class="text-center">

{{ \Carbon\Carbon::parse($workshop->tanggal)->translatedFormat('d M Y') }}

</td>

</tr>

@endforeach

</tbody>

</table>

<div class="signature">

Mengetahui,

<br><br><br><br>

<b>Administrator</b>

</div>

<div class="footer">

Laporan ini dibuat secara otomatis oleh sistem

<b>Workshop IT</b>

pada

{{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i') }}

WIB.

</div>

</body>

</html>