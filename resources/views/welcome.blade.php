<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f2f2f2;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                background-color: #ffffff;
                max-width: 840px;
                min-height: 200px;
                width: 100%;
                margin: 50px auto;
                padding: 20px;
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

            section img {
                display: inline-block;;
                max-width: 100%;
            }

            section header h2 {
                margin-top: 0;
                padding-top: 0;
            }
            section header span {
                font-size: smaller;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="content">
                @foreach ($posts as $post)
                <section>
                    <header>
                        <span>{{ Carbon\Carbon::parse($post['publish_date'])->format('M d, Y') }}</span>
                        <h2><a href="{{ url('/posts/'. $post['id']) }}">{{$post['title']}}</a></h2>
                    </header>
                </section>
                @endforeach
            </div>
        </div>
    </body>
</html>
