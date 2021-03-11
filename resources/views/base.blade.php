<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OHR Practical Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #333333;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .text-center {
                text-align: center;
            }

            .content {
				width: 70%;
				margin: 20px auto;
                text-align: justify;
            }
			
			.content form {
				text-align: center;
			}
			
			h1 {
				margin-top: 30px;
			}
			
			.testlink {
				text-align: center;
			}

			table {
				border-collapse: collapse;
				border: 1px solid #636b6f;
				margin: 0 auto;
			}

			table td, table th {
				border-collapse: collapse;
				border: 1px solid #636b6f;
				padding: 5px;
			}

        </style>

    </head>
    <body>
        <div class="text-center">
			<a href='/'>Back to the menu</a>
			<h1>@yield('title')</h1>

            <div class="content">
				@yield('content')
            </div>
        </div>
    </body>
</html>
