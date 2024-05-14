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
        <label for="">Email Address</label>
        <br>
        <input type="email" name="emailAddress" id="" style="padding: .5rem">
        <br>

        <label for="">Pesan</label>
        <br>
        <textarea name="body" cols="50" rows="10" style="padding: .5rem"></textarea>
        <br>

        <button type="submit" style="padding: .3rem .7rem">Kirim</button>
    </form>
</body>
</html>