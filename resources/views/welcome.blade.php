<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <textarea name="body" cols="50" rows="10" style="padding: .5rem"></textarea>
        <br>
        <button type="submit" style="padding: .3rem .7rem">Kirim</button>
    </form>
</body>
</html>