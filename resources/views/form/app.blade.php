<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .d-flex {
            display: flex
        }

        .flex-col {
            flex-direction: column
        }
    </style>
</head>

<body>
    <form action="{{ route('index.create.store') }}" method="POST" class="d-flex flex-col">
        @csrf
        <input type="text" name="name" placeholder="Masukan nama disini">
        <input type="email" name="email" placeholder="Masukan email disini">
        <input type="password" name="password" placeholder="Masukan password disini">
        <input type="number" name="phone" placeholder="Masukan nomor telepon disini">
        <input type="submit" value="Send data">
    </form>
</body>

</html>
