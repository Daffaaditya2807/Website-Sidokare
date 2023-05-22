<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluhan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/berita.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
     <!--- header  -->
     <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>E- <span>Sidokare</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Cari Keluhan">
                <button> <i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <!-- <div class="picon bell">
                    <i class="ri-notification-2-line"></i> -->
                </div>
                <div class="picon profile">
                    <img src="{{ asset('frontend/assets/img/1.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>
     <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">  
                <li>
                    <a href="{{ url('') }}" >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                        <a href="/formpengajuan">
                            <span class="icon icon-2"><i class="ri-bar-chart-grouped-line"></i></span>
                            <span class="sidebar--item">Pengajuan PPID</span>
                        </a>
                    </li>
                    <li>
                        <a href="/aspirasi">
                            <span class="icon icon-2"><i class="ri-bar-chart-box-line"></i></span>
                            <span class="sidebar--item">Pengajuan Aspirasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/keluhan" id="active--link">
                            <span class="icon icon-2"><i class="ri-file-chart-line"></i></span>
                            <span class="sidebar--item">Pengajuan Keluhan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/berita">
                            <span class="icon icon-3"><i class="ri-customer-service-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Upload Berita</span>
                        </a>
                    </li>
                <!-- <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Profil Pengguna</span>
                    </a>
                </li>  -->
                <li>
                        <a href="/akun">
                            <span class="icon icon-5"><i class="ri-folder-user-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Daftar Akun</span>
                        </a>
                    </li> 
                    @guest
                        <!-- Pengguna adalah role pegawai -->
                    @else
                        <!-- Pengguna adalah role admin -->
                        @if(auth()->user()->role === 'Admin')
                            <li>
                                <a href="/users">
                                    <span class="icon icon-4"><i class="ri-database-line"></i></span>
                                    <span class="sidebar--item" style="white-space: nowrap;">Daftar Pegawai</span>
                                </a>
                            </li>
                        @endif
                    @endguest

            </ul>
            <ul class="sidebar--bottom-items">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li> 
                </ul>

        </div>
        <div class="main--content">
                <div class="overview">
                    <!-- <h1>Edit Berita</h1> -->
                    <div class="title">
                   <div class="container">
                    <header>Edit Keluhan</header>
        
                   
                        <div class="row">
                             <div class="column">
                                 <label for="judul">ID Laporan</label>
                                 <input type="text" class="form-control" id="id" name="judul_berita" disabled>
                             </div>
                        </div>
                         <div class="row">
                             <div class="column">
                                 <label for="judul">Lokasi Kejadian</label>
                                 <input type="text" class="form-control" id="lokasi_kejadian" name="judul_berita" value="" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="isi_berita">Kategori Keluhan</label>
                             <input type="text" class="form-control" id="kategori_laporan" value="" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="isi_berita">RT</label>
                             <input type="text" class="form-control" id="RT" value="" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="isi_berita">RW</label>
                             <input type="text" class="form-control" id="RW" value="" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="id_kategori">Status</label>
                                 <select class="form-control" id="status" name="status" required>
                                 <option value="diterima">Diterima</option>
                                <option value="diproses">Diproses</option>
                                <option value="dikerjakan"></option>
                                <option value="ditolak">Ditolak</option>
                                <option value="selesai" >Selesai</option>
                                <option value="Revisi1">Revisi1</option>
                                </select>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="foto">Foto</label>
                                 <input type="file" class="form-control" id="file" value="" required>
                                 
                             </div>

                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="isi_berita">Upload Hasil PPID</label>
                                 <input type="file" class="form-control" id="file" value="" required>
                                 
                             </div>

                         </div>
                         <button type="submit" id="btnSimpan" class="btn btn-primary">Simpan</button>
                     </form>
                       
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/stylesheet.js') }}"></script>
            @push('js')
                <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
                <script src="{{ asset('assets/js/custom.js') }}"></script>
            @endpush
       </body>
       </html>
 