<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
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
                    <form action="/formpengajuan/search" method="GET">
                        <input type="search" name="search" placeholder="Cari Pengajuan" required>
                    </form>
                
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                
                
                <div class="col-md-2">
                    <form method="GET" action="/formpengajuan/filter">
                    <label>Mulai Tanggal</label>
                    <input type="date" name="start_date" class="form-control" required>
                   </div>
                   <div class="col-md-2">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="end_date" class="form-control" required>
                    
                </div>
                <div class="col-md-1 pt-4"><button type="submit">cari</button></div>
            </form>
                <div class="notification--profile">
                        
                    
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
                        <a href="/formpengajuan"id="active--link">
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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <div class="main--content">
                <div class="overview">
                    <div class="title">
                       <h2 title="section--title">Tabel Pengajuan </h2>
                    </div>

                    {{-- <a href="/formpengajuan/create">add</a> --}}
                    <div class="table">
                        <table>
                            <thead>
                                    <tr>
                                    
                                    <th>Id Akun</th>
                                    <th>Nama Pelapor</th>
                                    <th>judul laporan</th>
                                    <th>status</th>
                                    <th>Kategori ppid</th>
                                    <th>Tindak lanjut</th>
                                </tr>
                                @foreach ($ppid as $w)
                                <tr>
                                    <td>{{ $w->id_akun }}</td>
                                    <td>{{ $w->nama_pelapor }}</td>
                                    <td>{{ $w->judul_laporan }}</td>
                                    <td>{{ $w->status }}</td>
                                    <td>{{ $w->kategori_ppid }}</td>
                                    @if ($w->status== "Revisi1")
                                        <td><span><a class="rejected" href="/ppid/{{ $w->id }}/revisi">keberatan</a></span></td> @endif 
                                  
                                    <td><span><a  class="ri-edit-line edit" href="/ppid/{{ $w->id }}/edit">Detail</a></span>
                                    <td><span><a  class="ri-edit-line edit" href="/ppid/{{ $w->id }}/export"  target="_blank">Export</a></span>
                                        <span>
                                            <button class="ri-delete-bin-line delete" data-bs-toggle="modal" data-bs-target="#exampleModal" ></button>
                                            <!-- Button trigger modal --></button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data akan dihapus secara permanen</h1>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <form action="{{ route('ppid.destroy', $w->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    @php
                        $ppidId = $w->id; // Simpan nilai ID dalam variabel $ppidId
                    @endphp
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@php
    $ppidId = $w->id; // Simpan nilai ID dalam variabel $ppidId
@endphp
@if($errors->has('error') && old('target_id') == $ppidId)
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
@endif

                                        </form>
                                        
                                        </span></td>
                                                    </tr>
                                                    @endforeach
                                                  </div>
                                                </div>
                                              </div>
                                            </div></span>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         </section>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
         <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
    </body>
    </html>
</x-app-layout>