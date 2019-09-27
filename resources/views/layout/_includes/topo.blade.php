<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            .hex {
              float: left;
              margin-right: -26px;
              margin-bottom: -50px;
            }

            .hex .left {
              float: left;
              width: 0;
              border-right: 30px solid #6C6;
              border-top: 52px solid transparent;
              border-bottom: 52px solid transparent;
            }

            .hex .middle {
              float: left;
              width: 60px;
              height: 104px;
              background: #6C6;
              display: flex;
              -webkit-align-items: center;
              align-items: center;
              -webkit-justify-content: center;
              justify-content: center;
            }

            .hex .right {
              float: left;
              width: 0;
              border-left: 30px solid #6C6;
              border-top: 52px solid transparent;
              border-bottom: 52px solid transparent;
            }

            .hex-row {
              clear: left;
            }

            .hex:nth-child(even) {
              margin-top: 53px;
            }

            .atual {
                width: 100%;
                height: 100%;
                background: url('/img/token1.png') no-repeat;
                background-size: contain;
            }
        </style>
    </head>
    <body>
        <header class="sticky-top">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <span>HP = 30</span>
                    <span>ATK = 1</span>
                    <span>DEF = 1</span>
                    <span>GOLD = 8</span>
                    <a class="btn btn-warning" id="roll" style="cursor: pointer">rolar</a>
                </a>
            </nav>
        </header>
