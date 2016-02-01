<!DOCTYPE html>
<html>
    <head>
        <title>Berbageek</title>

        <link rel="stylesheet" href="{{ asset('css/aleo-webfont.min.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <style>
            html, body {
                height: 100%;
                background-color: #2D325B;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                color: #ffffff;
                font-family: 'Lato', Arial, sans-serif;
                font-weight: 300;

                font-size: 18px;
                line-height: 27px;
            }

            .container {
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .chest {
                margin: -100px 0 50px;
            }

            h1 {
                font-family: inherit;
                font-weight: 300;
                font-style: inherit;
                font-size: 68px;
                line-height: 24px;
                margin-top: 24px;
                margin-bottom: 0px;
                font-family: 'Aleo', sans-serif;
            }
            h3 {
                font-family: inherit;
                font-weight: 300;
                font-style: inherit;
                font-size: 26px;
                line-height: 48px;
                margin-top: 24px;
                margin-bottom: 0px;
                font-family: 'Aleo', sans-serif;
            }
            h1 strong, h3 strong {
                font-weight: 400;
            }

            .headline {
                margin-bottom: 50px;
            }
            p {
                max-width: 720px;
                color: rgba(255,255,255, 0.5);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="chest">
                <img src="{{ asset('img/chest.png') }}" alt="Berbageek chest">
            </div>

            <div class="content">
                <div class="headline">
                    <h1 class="title"><strong>Sharing</strong> is natural calling.</h1>
                    <h3 class="subtitle">The day you stop <strong>sharing</strong>, you are dying.</h3>
                </div>

                <p class="message">
                    Seorang superhero itu, tidak harus memiliki kekuatan super.
                    <br>Seorang superhero itu, bukan berarti harus menyelamatkan nyawa ratusan orang.

                    <br>Ketika kita <strong>berbagi</strong> apa yang kita punya, apa yang kita anggap biasa-biasa saja, bisa jadi saat itulah kita telah menjadi superhero bagi orang lain.
                </p>

                <p>
                    Berbageek adalah tempat untuk tanya jawab, saling berbagi, dan saling mengapresiasi.
                    <br><strong>Berbageek, berbagi ala geek.</strong>
                </p>
            </div>
        </div>
    </body>
</html>
