@extends('mahasiswa/layout')

@section('title')
    <title>Mahasiswa - Jadwal Seminar Hasil</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_sempro" class='sidebar-link'>

            <span>Pra Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Pra Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Pra Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pasca_meja_hijau" class='sidebar-link'>

            <span>Pasca Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('profile_mhs') }}" class='sidebar-link'>

            <span>Profil</span>
        </a>
    </li>
@endsection

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Seminar Hasil</h3>
                        <p class="text-subtitle text-muted">Berita Acara Seminar Hasil</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/pra_semhas">Pra Seminar Hasil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>NAMA / NIM</th>
                                            <th>JUDUL SKRIPSI</th>
                                            <th>PEMBIMBING I / II</th>
                                            <th>PEMBANDING I / II</th>
                                            <th>TANGGAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <tr>
                                            <td class="text-smf">{{ $i }}</td>
                                            <td class="text-smf">{{ $data->nama }} {{ $data->nim }}</td>
                                            <td class="text-smf">{{ $data->judul_skripsi }}</td>
                                            <td class="text-smf">1. {{ $data->nama_dosbing1 }} <br> 2.
                                                {{ $data->nama_dosbing2 }}</td>
                                            <td class="text-smf">1. {{ $data->nama_dosen_penguji1 }} <br> 2.
                                                {{ $data->nama_dosen_penguji2 }}</td>
                                            <td class="text-smf">{{ $tanggal }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
