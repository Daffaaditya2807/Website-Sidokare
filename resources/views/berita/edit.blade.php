<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>edit Berita</title>
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
                <div class=>
                    <!-- <input type="text" placeholder="Cari Pengajuan">
                    <button> <i class="ri-search-2-line"></i></button> -->
                </div>
                <div class="notification--profile">
                    <div class="picon bell">
                        <i class="ri-notification-2-line"></i>
                    </div>
                    <div class="picon profile">
                        <img src="{{ asset('img/1.png') }}" alt="">
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
                        <a href="{{ url('') }}">
                            <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                            <span class="sidebar--item">Pengajuan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('') }}"id="active--link">
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
                    <!-- <h1>Edit Berita</h1> -->
                    <div class="title">
                   <div class="container">
                    <header>Formulir Pembuatan Berita Desa Sidokare</header>
            
                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <form>
                         <div class="row">
                             <div class="column">
                                 <label for="judul">Judul Berita</label>
                                 <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="{{ $berita->judul_berita }}" required>
                             </div>
                             <div class="column">
                                 <label for="tanggal_publikasi">Tanggal Terbit</label>
                                 <input type="datetime-local" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" value="{{ date('Y-m-d\TH:i', strtotime($berita->tanggal_publikasi)) }}" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="id_kategori">Kategori Berita</label>
                                 <select class="form-control" id="id_kategori" name="id_kategori" required>
                                 <option value="">Pilih Kategori</option>
                                @for ($i = 1; $i <= 7; $i++)
                                    @php
                                        $kategoriValue = 'ktg_berita' . str_pad($i, 2, '0', STR_PAD_LEFT);
                                        $kategoriText = '';
                                        if ($kategoriValue === 'ktg_berita01') {
                                            $kategoriText = 'BUM Desa';
                                        }
                                        if ($kategoriValue === 'ktg_berita02') {
                                            $kategoriText = 'PKK';
                                        }
                                        if ($kategoriValue === 'ktg_berita03') {
                                            $kategoriText = 'Pemerintah Desa';
                                        }
                                        if ($kategoriValue === 'ktg_berita04') {
                                            $kategoriText = 'Potensi Desa';
                                        }
                                        if ($kategoriValue === 'ktg_berita05') {
                                            $kategoriText = 'Pembangunan Masyarakat';
                                        }
                                        if ($kategoriValue === 'ktg_berita06') {
                                            $kategoriText = 'Pemberdayaan Masyarakat';
                                        }
                                        if ($kategoriValue === 'ktg_berita07') {
                                            $kategoriText = 'Pembinaan Masyarakat';
                                        }
                                    @endphp
                                    <option value="{{ $kategoriValue }}" @if ($berita->id_kategori === $kategoriValue) selected @endif>{{ $kategoriText }}</option>
                                @endfor
                            </select>
                                 
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="isi_berita">Isi Berita</label>
                            <textarea class="form-control" id="isi_berita" name="isi_berita" required>{{ $berita->isi_berita }}</textarea>
                             </div>
                             <div class="form-outline mb-4">
                             <div class="form-foto">
                            <label for="foto" class="form-label">Foto</label>
                        
                                @if ($berita->foto)
                                    <img src="{{ asset('storage/berita/'.$berita->foto) }}" alt="{{ $berita->foto }}">
                                @endif
                                <input type="file" id="foto" name="foto" style="display: none;">
                            </div>
                            <br>
                            <input type="text" name="foto" id="foto" disabled class="form-control mt-2" value="{{ $berita->foto }}">
                            <br>
                            <button class="btn btn-secondary" onclick="document.getElementById('foto').disabled = true; document.getElementById('foto').value = ''; document.getElementById('ganti-foto').click(); event.preventDefault();">Ganti Foto</button>
                            <input type="file" id="ganti-foto" name="ganti-foto" style="display: none;">
                          
                            <button class="btn btn-secondary" onclick="document.getElementById('ganti-foto').disabled = true; document.getElementById('ganti-foto').value = ''; document.getElementById('foto').disabled = false; document.getElementById('foto').click(); event.preventDefault();">Ganti File Foto</button>
                        </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </form>
            
                      
                        
                        {{-- <div class="form-group">
                            <label for="unggah_file_lain">Unggah File Lain</label>
                            @if ($berita->unggah_file_lain)
                                <p><a href="{{ asset('file/' . $berita->unggah_file_lain) }}">Unduh File</a></p>
                            @endif
                            <input type="file" class="form-control-file" id="unggah_file_lain" name="unggah_file_lain">
                        </div> --}}
                        
                    </form>
                </div>
            </div>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
            </body>
            </html>