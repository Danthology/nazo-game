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
			.m-b-md2 {
                margin-bottom: 30px;
            }
			input{
                border: 1px solid #ccc; 
                padding: 10px 3px;
                border-radius: 5px;
                padding-left:5px; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
					新的关卡还在制作，有什么建议的话请联系我吧~
                </div>
				
				<div class="links">
                    <a href="https://github.com/Danthology">@Danthology</a>
                </div>
                
            </div>
        </div>
		<script src="{{ URL::asset('js/common.js') }}"></script>
    </body>
</html>
