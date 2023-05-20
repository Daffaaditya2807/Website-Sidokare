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
                    <form action="{{ route('berita.index') }}" method="GET">
                        
                     
                        <input type="text" name="query" placeholder="Cari Pengajuan" value="{{ $query }}" class="search-input"   <button type="submit" class="search-button"><i class="ri-search-2-line"></i></button>
                    </form>
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
        @include('sidebar.sidebar')
            <div class="main--content">
                <div class="overview">
                <div class="title">
                   <h2 title="section--title">Berita </h2>
                   @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{route('berita.create')}}" class="button1">Tambah Berita</a>
                </div>
  
    
    <div class="table">
        <table>
        <thead>
            <tr>
                <th>  No</th>
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