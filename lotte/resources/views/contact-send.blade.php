<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Họ và tên: {{ $sentData['name'] }}</p>
    <p>Email: {{ $sentData['email'] }}</p>
    <p>Nội dung: {{ $sentData['message'] }}</p>

</body>

</html>