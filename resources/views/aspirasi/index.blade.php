<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
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
                        <a href="/aspirasi"id="active--link">
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

        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                   <h2 title="section--title">Tabel Aspirasi </h2>
                   <select name="date" id="date" class="dropdown">
                    <option value="today">Hari Ini</option>
                    <option value="lastmonth">Bulan lalu</option>
                    <option value="lastyaer">Tahun Ini</option>
                   </select>
                </div>

                <div class="table">
                <table 
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelapor</th>
                            <th>Judul Aspirasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($aspirasi as $index => $aspirasi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $aspirasi->nama }}</td>
                        <td>{{ $aspirasi->judul_aspirasi }}</td>
                        <td>{{ $aspirasi->status }}</td>
                        <td>
                        <div class="button-container">
                            @if($aspirasi->status == 'Revisi 1')
                            <a href="{{ route('aspirasi.edit', $aspirasi->id_pengajuan_aspirasi) }}" class="ri-edit-line edit"></a>
                            @endif
                            @if ($aspirasi->status == 'Revisi 2')
                            <a href="{{ route('aspirasi.edit', $aspirasi->id_pengajuan_aspirasi) }}" class="ri-edit-line edit"></a>
                            @endif
                            <a href="{{ route('aspirasi.edit', $aspirasi->id_pengajuan_aspirasi) }}" class="ri-edit-line edit"></a>
                            <form action="{{ route('aspirasi.destroy', $aspirasi->id_pengajuan_aspirasi) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ri-delete-bin-line delete" onclick="return confirm('Apakah Anda yakin ingin menghapus aspirasi ini?')"></button>
                            </form>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
               
            </div>
           
        </div>
     
  
     </section>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
     <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>