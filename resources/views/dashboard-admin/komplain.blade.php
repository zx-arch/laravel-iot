@extends('dashboard-admin.layouts.main')
@section('container')
<div class="dropdown mb-2 col d-flex justify-content-end align-items-end">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Cari Berdasarkan
    </button>
    <ul class="dropdown-menu dropdown-menu-dark">
        <li><a class="dropdown-item" href="#">Komplain Baru</a></li>
        <li><a class="dropdown-item" href="#">Komplain Dikonfirmasi</a></li>
        <li><a class="dropdown-item" href="#">Komplain Selesai</a></li>
        <li><a class="dropdown-item" href="#">Komplain Dihapus</a></li>
        <li><a class="dropdown-item" href="#">Komplain Tanggal Terbaru</a></li>
        <li><a class="dropdown-item" href="#">Komplain Tanggal Terlama</a></li>
    </ul>
</div>
<div class="alert alert-primary mb-3" role="alert">
    <p style="float:right;text-align:right;">10/10/2022 09:00 WIB</p>
    <p>Pengirim : Ardi Yusuf</p>
    <p>Lokasi : Lab Big Data</p>
    <p>Pesan : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    <button type="button" class="btn btn-warning">Konfirmasi</button>
    <button type="button" class="btn btn-success">Selesai</button>
    <button type="button" class="btn btn-danger">Delete</button>
    <p style="float:right;text-align:right;">New</p>
</div>
<div class="alert alert-warning mb-3" role="alert">
    <p style="float:right;text-align:right;">10/10/2022 12:00 WIB</p>
    <p>Pengirim : Dito Setiawan</p>
    <p>Lokasi : Lab AI</p>
    <p style="white-space: pre-line;">Pesan : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    <button type="button" class="btn btn-warning disabled">Konfirmasi</button>
    <button type="button" class="btn btn-success">Selesai</button>
    <button type="button" class="btn btn-danger">Delete</button>
    <p style="float:right;text-align:right;">Confirmed</p>
</div>
<div class="alert alert-success mb-3" role="alert">
    <p style="float:right;text-align:right;">11/10/2022 11:00 WIB</p>
    <p>Pengirim : Tono Ardiawan</p>
    <p>Lokasi : Lab AI</p>
    <p>Pesan : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    <button type="button" class="btn btn-warning disabled">Konfirmasi</button>
    <button type="button" class="btn btn-success disabled">Selesai</button>
    <button type="button" class="btn btn-danger">Delete</button>
    <p style="float:right;text-align:right;">Done</p>
</div>
<div class="alert alert-danger mb-3" role="alert">
    <p style="float:right;text-align:right;">12/10/2022 14:00 WIB</p>
    <p>Pengirim : Jonathan Ardi Setiawan</p>
    <p>Lokasi : Lab A</p>
    <p>Pesan : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    <button type="button" class="btn btn-warning disabled">Konfirmasi</button>
    <button type="button" class="btn btn-success disabled">Selesai</button>
    <button type="button" class="btn btn-danger disabled">Delete</button>
    <p style="float:right;text-align:right;">Deleted</p>
</div>
@endsection