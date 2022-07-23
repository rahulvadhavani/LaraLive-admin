<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name')}}</title>
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            body {
                background: linear-gradient(-45deg, #f3344d,#9953ea,#4a38d2,#421af5);
                background-size: 700% 700%;
                animation: gradient 15s ease infinite;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }
            

            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }
            .main_row{
                width: 50%;
                height: 300px;
                text-align: center;
                color:white;
            }
            @media screen and (max-width: 6424px) {
                .main_row h1{
                    font-size: 70px;
                }
                .main_row p{
                    font-size: 20px;
                }
                
            }
            @media screen and (max-width: 950px) {
                .main_row h1{
                    font-size: 30px;
                }
                .main_row p{
                    font-size: 15px;
                }
            }
            @media screen and (max-width: 650px) {
                .main_row h1{
                    font-size: 20px;
                }
                .main_row p{
                    font-size: 15px;
                }
            }
            
            .btn {
                background: #615cfd!important;
                padding: 7px 12px!important;
                font-size: 14px!important;
                font-weight: 500!important;
                border: 1px solid transparent!important;
                color: #fff!important;
                border-radius: 0px!important;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="main_row">
            <div class="column">
                <h1>Congratulations</h1>
                @if(!empty($message))
                <p class=""> {{ $message }}</p>
                @endif
            </div><br>
            <div class="column">
            <a href="/login" class="btn" data-toggle="collapse" aria-current="page">Login</a>
            </div>
        </div>
    </body>
</html>
