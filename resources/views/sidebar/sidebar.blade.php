<section class="main">
    <div class="sidebar">
        <ul class="sidebar--items">  
            <li>
                <a href="{{ url('') }}" id="active--link">
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
                <a href="/berita/index">
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

            @guest
                <!-- Pengguna adalah role pegawai -->
            @else
                <!-- Pengguna adalah role admin -->
                @if(auth()->user()->role === 'admin')
                    <li>
                        <a href="{{ url('') }}">
                            <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Daftar Akun</span>
                        </a>
                    </li>
                @endif
            @endguest

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
</section>
    