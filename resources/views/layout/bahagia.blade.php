<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
        </script>

    <style>
        .isi {
            align-items: center;
            justify-content: center;
            background-color: whitesmoke;
            padding: 10px 40px;
            border-radius: 10px;
            margin: 20px auto;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid">

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/pegawai">Pegawai</a>
            <a href="/absen">Absen</a>
            <a href="/mouse">Mouse</a>
            <a href="/keranjangbelanja">Keranjang Belanja</a>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

        <header class="p-3 mb-3 border-bottom">
            <div class="d-flex align-items-center">
                <div class="p-2 mr-auto"><span style="cursor:pointer" onclick="openNav()">&#9776; MENU</span></div>
                <div class="p-2">AWLIYA HANUN IZDIHAR</div>
                <div class="p-2">5026201017</div>
                <div class="p-2"><img src="/images/pas11.jpg" class="rounded-circle" alt="Foto diri mahasiswa"
                        height="50"></div>
            </div>
        </header>

        <div class="container isi text-center">

            <h1>@yield('judulhalaman')</h1>

            @section('konten')

            @show

        </div>
    </div>

    <footer class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Hak Cipta oleh 5026201017 - Awliya Hanun Izdihar</small>
        </div>
    </footer>

</body>

</html>
