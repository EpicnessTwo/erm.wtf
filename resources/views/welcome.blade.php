<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENHANCE</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            @keyframes lol {
                0% {filter: hue-rotate(0deg)}
                100% {filter: hue-rotate(360deg)}
            }

            .full {
                height: 100vh;
                width: 100vw;
                animation: lol 5s infinite;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <img class="full" src="//media0.giphy.com/gifsu/XpicQZ05Em67URdzAk/giphy-enhance-0.gif" alt="ENHANCE">
        </div>
    </body>
</html>
