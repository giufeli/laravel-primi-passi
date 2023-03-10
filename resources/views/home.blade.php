<!DOCTYPE html>
<?php

$info = "Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony. "
/*
$array = array(
    "sito" => "https://laravel.com/",
    "foto" => "https://www.google.com/search?q=laravel&rlz=1C1ONGR_itIT993IT993&source=lnms&tbm=isch&sa=X&ved=2ahUKEwis4Zu7psL8AhVhSfEDHRoGAx4Q_AUoAnoECAEQBA&biw=1920&bih=937&dpr=1",,
);
*/
?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 20px;
                height: 100vh;
                margin: auto;
                width: 90%;
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
                font-weight: 200;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
            }

            a:hover{
                color: rgb(33, 33, 33);
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            div{
                font-size: 25px;
                margin-bottom: 25px
             }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hello World questo è Laravel !
                </div>
                <div>Ma cos'è Laravel?</div>
                <div>{{ $info }}</div>
                {{-- <ul>
                    @foreach ($fruits as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul> --}}
                <div>Quali siti utilizzano questo Framework?</div>
                <div class="links">
                    <a href="http://127.0.0.1:8000/boolean" >Boolean</a>
                    <a href="http://127.0.0.1:8000/youtube" >Youtube</a>
                    <a href="http://127.0.0.1:8000/apple" >Apple</a>
                </div>
            </div>
        </div>
    </body>
</html>
