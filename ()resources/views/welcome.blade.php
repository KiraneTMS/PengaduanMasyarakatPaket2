<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer{
                height: 20px;
                width: 100%;
                position: absolute;
                display: inline;
                bottom: 0;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
      
                <div class="top-right links">
                    <a href="{{url('masyarakat/login')}}">Login</a>
                    <a href="{{url('masyarakat/register')}}">Register</a>
                </div>

            <div class="content">
                <div class="title m-b-md">
                    PENGADUAN MASYARAKAT JELATA
                </div>

                <div class="links">
                    <a href="">P</a>
                    <a href="">E</a>
                    <a href="">M</a>
                    <a href="">E</a>
                    <a href="{{url('login')}}">R</a>
                    <a href="">I</a>
                    <a href="">N</a>
                    <a href="">T</a>
                    <a href="">A</a>
                    <a href="">H</a>
                </div>
                <div class="links">
                    <a href="">A</a>
                    <a href="">N</a>
                    <a href="">J</a>
                    <a href="">I</a>
                    <a href="">G</a>
                </div>
                <div class="links">
                    <a href="">G</a>
                    <a href="">O</a>
                    <a href="">B</a>
                    <a href="">L</a>
                    <a href="">O</a>
                    <a href="">G</a>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="links">
                <a href="{{url('admin/login')}}" 
                    style="right: 0;
                        position: absolute;" >
                    admin
                </a>

                <a href="{{url('petugas/login')}}" 
                    style="left: 0;
                           position: absolute;" >
                    petugas
                </a>
            </div>
        </footer>

    </body>
</html>
