<!DOCTYPE html>
<?php

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
                font-weight: 300;
                font-size: 20px;
                height: 100vh;
                margin: 0;
                width: 90%;
                margin: auto
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Youtube
                </div>
                <div>Ma cos'è Youtube?</div>
                <div>
                    YouTube è una piattaforma web 2.0 che consente la condivisione e visualizzazione in rete di contenuti multimediali: sul sito è possibile vedere videoclip, trailer, cortometraggi, notizie, live streaming, shorts (tradotto dall'italiano video brevi) e slideshow e altri contenuti come video blog, brevi video originali, video didattici e altro ancora, classificabili anche per età, con gli utenti che possono anche interagire votando, commentando, aggiungendo ai preferiti e, nei casi ove necessario, segnalando i video.
                </div>
            </div>
        </div>
    </body>
</html>
