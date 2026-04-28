<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Move</title>
</head>
<body>
    <div class="title"><h1>Cadastre sua movimentação</h1></div>

    <div>
        <form action="/exepenses/store" method="post">
            @csrf
            <label><h2>Nome do lançamento</h2></label>
            <input type="text" name="name" required> 

            <label><h3>Descrição</h3></label>
            <input type="text" name="description">

            <label><h3>Valor</h3></label>
            <input type="number" name="value">

            <label><h3>Data</h3></label>
            <input type="date" name="date_launch">

            <label><h3>Categoria</h3></label>
            <input type="text" name="category">
            <br>
            <input type="submit">

        </form>
    </div>
</body>
</html>
