<!--resources/views/akun/edit.blade.php -->



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
        <title>Edit Akun</title>
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
                
                <div class="">
                    <!-- <input type="text" placeholder="Cari Pengajuan">
                    <button> <i class="ri-search-2-line"></i></button> -->
                </div>
                <div class="notification--profile">
                    <div class="">
                        <!-- <i class="ri-notification-2-line"></i> -->
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
                        <a href="/aspirasi">
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
                        <a href="/akun"id="active--link">
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
                <div class="title">
                   <!-- <h2 title="section--title">Formulir Pengajuan </h2> -->
                   <div class="container">
                    <header>Edit Akun</header>
               
            
           
            
                    <form action="{{ route('akun.update', $akun->id_akun) }}" method="POST">
        @csrf
        @method('PUT')
                        <form>
                         <div class="row">
                             <div class="column">
                                 <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $akun->email }}" required>
                             </div>
                             <div class="column">
                             <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="User">User</option>
                            </select>
                                 
                             </div>
                             <div class="column">
                             <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $akun->nama }}" required>
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                             <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" value="{{ $akun->nomor_telepon }}" required>
                             </div>
                             <input type="hidden" name="status_verif" value="{{ $akun->status_verif }}">
                         </div>
                         <button type="submit" class="btn btn-primary">Simpan</button>

                     </form>
          

 
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>
