<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing Request</title>
    <style>
        body div {
            display: grid;
            place-content: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>

        <marquee>
            <h1>Hai Selamat Datang! :)</h1>
        </marquee>
        <h3>Ini kata dari route : {{ $url }}</h3>
        <h3>{{ $kata }}</h3>
    </div>
</body>

</html>
