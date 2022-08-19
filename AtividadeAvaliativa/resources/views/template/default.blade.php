<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>Document</title>
</head>

<body>

    <header>
        <a href="/Categoria" > Categoria </a>
        <a href="/Cliente" > Cliente </a>
        <a href="/Pedido" > Pedido </a>
        <a href="/Produto" > Produto </a>
    </header>

    @yield("content")

    <footer>
        <p> Rodapé </p>
    </footer>

</body>

</html>