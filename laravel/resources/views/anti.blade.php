<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
        <title>Azurak</title>

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
                font-size: 0.8rem;
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
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
			@if (rand(1,3)==1)
                <div class="title m-b-md">
                    要乖哦，不要作弊
                </div>
			@elseif(rand(1,3)==2)
				<div class="title m-b-md">
                    呜呜呜，反作弊系统终于派上用场了
                </div>
			@else
				<div class="title m-b-md">
                    我XXX没有开挂
                </div>
            @endif
				<div class="links">
                    <a href="https://github.com/Danthology">@Danthology</a>
                </div>
                
            </div>
        </div>
		<script src="{{ URL::asset('js/common.js') }}"></script>
		<script src="{{ URL::asset('js/level1.js') }}"></script>

    </body>
</html>
