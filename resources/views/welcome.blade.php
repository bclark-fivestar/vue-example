<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vue Component Examples</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
        <div id="app">
            {{-- <vue-component-ajax></vue-component-ajax> --}}
            <vue-component-backend
                :initial-items="{{ json_encode($data) }}"
            ></vue-component-backend>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
