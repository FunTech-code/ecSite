@extends('common/header')
@extends('common/footer')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/96039f7fbe.js" crossorigin="anonymous"></script>
    <title>Funtech</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body class="container">
@yield('header')
    <div>
        @yield('contents')
    </div>
@yield('footer')
</body>
</html>