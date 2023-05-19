<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berita</title>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
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
                    <input type="text" placeholder="Cari Berita">
                    <button> <i class="ri-search-2-line"></i></button>
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
                        <a href="{{ url('') }} "id="active--link">
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
                   <h2 title="section--title">Berita </h2>
                   @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('berita.create')}}" class="btn btn-primary mb-3">Tambah Berita</a>
                </div>
  
    
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Tanggal Publikasi</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $index => $berita)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $berita->judul_berita }}</td>
                <td>{{ $berita->tanggal_publikasi }}</td>
                <td>
                    @if ($berita->id_kategori === 'ktg_berita01')
                        BUM Desa
                    @elseif ($berita->id_kategori === 'ktg_berita02')
                        PKK
                    @elseif ($berita->id_kategori === 'ktg_berita03')
                        Pemerintah Desa
                    @elseif ($berita->id_kategori === 'ktg_berita04')
                        Potensi Desa
                    @elseif ($berita->id_kategori === 'ktg_berita05')
                        Pembangunan Masyarakat
                    @elseif ($berita->id_kategori === 'ktg_berita06')
                        Pemberdayaan Masyarakat
                    @elseif ($berita->id_kategori === 'ktg_berita07')
                        Pembinaan Masyarakat
                    @endif
                </td>
                
              <td>
    <div class="button-container">
        <a href="{{ route('berita.edit', $berita->id) }}" class="ri-edit-line edit"></a>
        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="ri-delete-bin-line delete" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')"></button>
        </form>
    </div>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>