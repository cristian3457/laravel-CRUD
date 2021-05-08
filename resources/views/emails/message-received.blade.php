<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recibido</title>
</head>
<body>
    <p><strong>Recibiste un mensaje de:</strong> {{$msg['nombre']}} - {{$msg['email']}}</p>
    <p><strong>Asunto:</strong> {{$msg['subject']}}</p>
    <p><strong>Mensaje:</strong> {{$msg['content']}}</p>
</body>
</html>