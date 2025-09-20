<!DOCTYPE html>
<html>
<head>
    <title>Teszt</title>
</head>
<body>
    <h1>Szia!</h1>
    <p>
        Ez egy  e-mail küldése Laravel alkalmazásból mert felvették a kapcsolatot a szlovák oldalon.
        @foreach ($data as $inputs => $value)
            <br>
            {{ $inputs }} : {{ $value }}
            
        @endforeach
    </p>
</body>
</html>