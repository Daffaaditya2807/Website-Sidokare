<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    .charts-card {
        width: 100%;
        max-width: 980px; /* Atur lebar sesuai kebutuhan */
        height: 280px; /* Atur tinggi sesuai kebutuhan */
        background-color: #f0f0f0;
        /* border: 1px solid #ccc; */
        border-radius: 5px;
        /* padding: 10px; */
    }
    .charts {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    #myChart {
        position: absolute;
        width: 100%;
        height: 100%;
    }
</style>
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
        <div class="main--content">
            <div class="overview">
                <div class="title">
                   <h2 title="section--title">Jumlah Pengajuan</h2>
                </div>
                <div class="cards">
                  <div class="card card-1">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Pengajuan PPID</h5>
                            <h1>{{ $total_ppid }}</h1>
                        </div>
                        <i class="ri-bar-chart-fill card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class=""></i></span>
                    </div>
                  </div>
                  <div class="card card-2">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Pengajuan Aspirasi</h5>
                            <h1>{{ $total_aspirasi }}</h1>
                        </div>
                        <i class="ri-bar-chart-fill card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class=""></i></span>
                    </div>
                  </div><div class="card card-3">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Pengajuan Keluhan</h5>
                            <h1>{{ $total_keluhan }}</h1>
                        </div>
                        <i class="ri-bar-chart-fill card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class=""></i></span>
                    </div>
                  </div><div class="card card-4">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Pengguna</h5>
                            <h1>{{ $total_akun }}</h1>
                        </div>
                        <i class="ri-bar-chart-fill card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class=""></i></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="charts">

                <div class="charts-card" >
                  <p class="chart-title">Grafik Keluhan</p>
                  <canvas id="myChart"  ></canvas>
                    <script>
                        var data = <?php echo json_encode($data); ?>;
                        var labels = data.map(function(item) {
                            return item.bulan;
                        });
                        var values = data.map(function(item) {
                            return item.amount;
                        });
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Grafik',
                                    data: values,
                                    backgroundColor: 'rgba(196, 226, 229)',
                                    // borderColor: 'rgba(255, 99, 132, 1)',
                                    borderWidth: 1,
                                   
                                }]
                            },
                            
                            options: {
                                
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
        </div>
     
  
     </section>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
     <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>