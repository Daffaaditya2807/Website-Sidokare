<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit aspirasi</title>
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
                <input type="text" placeholder="Cari Pengajuan">
                <button> <i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
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
                        <a href="/dashboard" >
                            <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                            <span class="sidebar--item">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/formpengajuan">
                            <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                            <span class="sidebar--item">Pengajuan PPID</span>
                        </a>
                    </li>
                    <li>
                        <a href="/formpengajuan"id="active--link">
                            <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                            <span class="sidebar--item">Pengajuan Aspirasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/formpengajuan">
                            <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                            <span class="sidebar--item">Pengajuan Keluhan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/berita">
                            <span class="icon icon-3"><i class="ri-customer-service-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Upload Berita</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Profil Pengguna</span>
                        </a>
                    </li> 
        
                    <li>
                        <a href="/akun">
                            <span class="icon icon-5"><i class="ri-user-2-line"></i></span>
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
                                    <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
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
                    <header>Formulir Edit Aspirasi Desa Sidokare</header>
            
                    <form action="{{ route('aspirasi.update', $aspirasi->id_pengajuan_aspirasi) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <form>
                         <div class="row">
                             <div class="column">
                                 <label for="judul">Judul Aspirasi</label>
                                 <input type="text" class="form-control" id="judul_aspirasi" name="judul_aspirasi" value="{{ $aspirasi->judul_aspirasi }}" required>
                             </div>
                             <div class="column">
                                 <label for="tanggal_publikasi">Status</label>
                                 <input type="text" class="form-control" id="status_aspirasi" name="status_aspirasi" value="{{ $aspirasi->status }}" required>
                             </div>
                         </div>

                         <div class="row">
                            <div class="column">
                                <label for="isi_berita">Isi Aspirasi</label>
                               <textarea class="form-control" id="isi_aspirasi" name="isi_aspirasi" required>{{ $aspirasi->isi_aspirasi }}</textarea>
                            </div>
                        <div class="form-foto">
                            <label for="foto" class="form-label">Foto</label>
                        
                                @if ($aspirasi->upload_file_pendukung)
                                    <img src="{{ asset('storage/aspirasi/'.$aspirasi->upload_file_pendukung) }}" alt="{{ $aspirasi->upload_file_pendukung }}">
                                @endif
                                <input type="file" id="foto" name="foto" style="display: none;">
                        </div>
                        <br>
                            <input type="text" name="foto" id="foto" disabled class="form-control mt-2" value="{{ $aspirasi->upload_file_pendukung }}">
                        <br>
                        <input type="file" name="dokumen">
                         <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>      
                               
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
       </body>
       </html>