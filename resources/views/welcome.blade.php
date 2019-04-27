<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="blog">
            <div style="margin: 0 auto; max-width: 1000px">
                <div>
                    <h1>
                        Listagem posts
                    </h1>
                </div>
                <ul style="">
                    @for ($i = 0; $i < 100; $i++)
                    <li style="float: left; width: 20%;list-style-type: none; margin: 1%">
                        <a href="/blog">
                            <div class="image">
                                <img style="max-width: 100%" src="http://superstorm.com.br/wp-content/uploads/2017/07/marca-identidade-brand-tania-avila-750x422.gif" alt="Image">
                            </div>
                            <div class="name">
                                Nome post
                            </div>
                        </a>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
    </body>
</html>
