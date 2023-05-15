<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/formulir.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                    <a href="{{ url('') }}" >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}"id="active--link">
                        <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">Pengajuan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-3"><i class="ri-customer-service-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Upload Berita</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Profil Pengguna</span>
                    </a>
                </li> 

            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-5"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li> 
            </ul>

        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    
                   <div class="container">
                    <a href="/formpengajuan">< Kembali</a>
                    <header>Formulir Pengajuan Desa Sidokare</header>
                    <form action="{{ route('ppid.update', $ppid->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                
                        <div class="form-group">
                            <label for="judul_berita">NIK</label>
                            <input type="text" class="form-control" id="NIK" value="{{ $ppid->NIK }}" disabled>
                        </div>
                
                        <div class="form-group">
                            <label for="tanggal_publikasi">Nama</label>
                            <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" value="{{ $ppid->nama_pelapor }}" disabled>
                        </div>
                
                        
                
                        <div class="form-group">
                            <label for="isi_berita">No Telfon</label>
                            <textarea class="form-control" id="no_telfon" name="no_telfon" disabled>{{ $ppid->no_telfon }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Judul Laporan</label>
                            <textarea class="form-control" id="judul_laporan" name="judul_laporan" disabled>{{ $ppid->judul_laporan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Isi Berita</label>
                            <textarea class="form-control" id="isi_laporan" name="isi_laporan" disabled>{{ $ppid->isi_laporan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" value="{{ $ppid->Alamat }}" disabled>
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="diterima" @if ($ppid->status== "diterima")selected @endif>Diterima</option>
                                <option value="ditolak"  @if ($ppid->status== "ditolak")selected @endif>Ditolak</option>
                                <option value="diproses" @if ($ppid->status== "diproses")selected @endif>Diproses</option>
                                <option value="selesai"  @if ($ppid->status== "selesai")selected @endif>selesai</option>
                                
                            </select>
                        </div>
                <div class="mb-2">
                    <label for="photo">photo</label>
                    <input type="file" name="upload_file_pendukung" id="upload_file_pendukung" class="form-control">
                    
                </div>
                <div class="mt-2"><img src="" id="img-view" width="100" class="mt-1"></div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
            @push('js')
                <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
                <script src="{{ asset('assets/js/custom.js') }}"></script>
            @endpush
       </body>
       </html>
 