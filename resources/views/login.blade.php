<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- link awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Link file CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/login.css') }}">
</head>
<body>
    <div class="contanier">

        <div class="text">
            <img src="{{ asset('frontend/assets/img/kisspng-nganjuk-regency-logo-sedudo-waterfall-5b3b9825ec1874.8963461115306322299671.png') }}" alt="">
        </div>

        <div class="box-login">
            <div class="login">
                <div class="header">
                    <h2>Selamat Datang Kembali</h2>
                    <p>Mari mulai aktivitasmu kembali, selamat bekerja!</p>
                </div>

                <form action="">

                    <label for="email">Email</label>
                    <div class="inp">
                        <input type="Email" placeholder="rama@gmail.com" minlength="8">
                    </div>

                    <label for="password">Password</label>
                    <div class="inp1">
                        <input type="Password" placeholder="*********" minlength="8">
                       
                    </div>
                  
                </form>
                <button>Masuk</button>
               
            </div>
        </div>
    </div>
</body>
</html>