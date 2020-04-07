<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
        <title>nazo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                position: relative;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
				word-break:break-all;
                font-size: 0.5rem;
				display:none;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .01rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: .6rem;
            }
			.m-b-md2 {
                margin-bottom: 30px;
            }
			.bottons{
				position: relative;
				left:50%;
				width: 3rem;
				margin-left: -1.5rem;
				height: .5rem;
				border: 0px solid #c3c3c3;
				display: -webkit-flex; /* Safari */
				-webkit-justify-content: space-around; /* Safari 6.1+ */
				display: flex;
				justify-content: space-around;
			}
			.bottons > a{
                background-color: #e7e7e7;
                border: none;
				color: black;
				padding: .125rem .3rem;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-family:   sans-serif;
				font-size: .16rem;
                font-weight: 100;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
					nazo_game<br>
                    1.建议用电脑哦，不然有可能过不了~<br>
					2.也许会涉及到一点点很简单的计算机知识<br>
					（就是浏览器的各种用法啦）<br>
					3.请各位大开自己的脑洞吧<br>
                </div>
				<div class="title m-b-md2">
                    <div class="bottons">
						<a href="continue" class="botton">继续</a>
						<a href="level-1" class="botton">开始</a>
					</div>

                </div>
				<div class="links">
                    <a href="https://github.com/Danthology">@Danthology</a>
                </div>
                
            </div>
        </div>
		<script src="{{ URL::asset('js/common.js') }}"></script>
		<script src="{{ URL::asset('js/level1.js') }}"></script>

    </body>
</html>
