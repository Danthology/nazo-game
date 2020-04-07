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
			.bottons{
				position: relative;
				left:50%;
				width: 3rem;
				margin-left: -1.5rem;
				height: .5rem;
				border: none;
				display: -webkit-flex; /* Safari */
				-webkit-justify-content: space-around; /* Safari 6.1+ */
				display: flex;
				justify-content: space-around;
				font-family:   sans-serif;
				font-size: .16rem;
                font-weight: 100;
			}
			.hint{
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

            <div class="content">
                <div class="title m-b-md">
                    level-13<br>
					巨蟒剧团之飞翔的马戏团<br>
					<button id=u type="button" class=hint onclick="fun()">hint</button>
                </div>
				<div class="links">
                    <a href="https://github.com/Danthology">@Danthology</a>
                </div>
                
            </div>
        </div>
		<script src="{{ URL::asset('js/common.js') }}"></script>
		<script src="{{ URL::asset('js/level13.js') }}"></script>
    </body>
</html>