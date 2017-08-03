<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div style="margin-top: 300px;margin-left: 50%;">
                <form action="/upload" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="file">
                    <br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </body>
</html>
