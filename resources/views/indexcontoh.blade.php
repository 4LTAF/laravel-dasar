@php
$halo = 'Halo';
$nama = 'Altaf';
$kelas = 'XII RPL 2';
$absen = 'Absen 3';
$alamat = 'Banjaran';

$status = 2;
@endphp

<h1>{{ $halo }}, {{ $nama }}, {{ $kelas }}, {{ $absen }}, {{ $alamat }}</h1>
<br>
@if ($status == 1)
    Status kamu lulus
@elseif($status == 2)
    Status kamu lulus 100%
@else
    Status kamu tidak lulus
@endif
<br><br>
@for ($angka = 1; $angka <= 10; $angka++)
    @if ($angka % 2)
        Angka {{ $angka }} adalah Ganjil<br>
    @else
        Angka {{ $angka }} adalah Genap<br>
    @endif
@endfor
