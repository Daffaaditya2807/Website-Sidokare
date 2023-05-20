<!--resources/views/akun/edit.blade.php -->



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      </head>
        <title>Edit Akun</title>
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
                        <a href="/formpengajuan">
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
                                <a href="/users"id="active--link">
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

    <h1>Edit Akun</h1>

    <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $users->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $users->name }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="Admin" {{ $users->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Pegawai" {{ $users->role == 'Pegawai' ? 'selected' : '' }}>Pegawai</option>
            </select>
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
