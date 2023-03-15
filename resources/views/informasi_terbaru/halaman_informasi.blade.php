<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    @include('Informasi_terbaru.navbar_informasi')
    @include('Informasi_terbaru.list_informasi')
    @include('landing_page.footer')
</body>

</html>