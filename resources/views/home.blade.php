<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <h3> {{$car}} {{$model}} </h3>

    @if($car === 'Bugatti')
        <h4>'Auto più veloce del mondo'</h4>
    @else
        <h4>'Non è l'auto più veloce del mondo'</h4>
    @endif

    <ul>
    @foreach($cars as $car)
        <li>{{$car}}</li>
    @endforeach
    </ul>
</body>
</html>