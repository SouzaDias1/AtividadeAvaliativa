@extends('template/default')
@section('content')

<section>
<h1>Categoria</h1>
<h1>Cliente</h1>
<h1>Pedido</h1>
<h1>Produto</h1>
</section>

<form action="/pagina-processa-dados-do-form" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>

    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>

</form>

@endsection

