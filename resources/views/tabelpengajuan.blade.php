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
    @include('sidebar.sidebar')
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                   <h2 title="section--title">Tabel Pengajuan </h2>
                   <select name="date" id="date" class="dropdown">
                    <option value="today">Hari Ini</option>
                    <option value="lastmonth">Bulan lalu</option>
                    <option value="lastyaer">Tahun Ini</option>
                   </select>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Waktu</th>
                                <th>Pengajuan</th>
                                <th>Status</th>
                                <th>Tindak lanjut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="pending">proses</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="confirmed">Diterima</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="rejected">Ditolak</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="rejected">Ditolak</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>  <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="rejected">Ditolak</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>  <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="rejected">Ditolak</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>  <tr>
                                <td>1</td>
                                <td>Morgan</td>
                                <td>23:00 2023-04-01</td>
                                <td>PPID</td>
                                <td class="rejected">Ditolak</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
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