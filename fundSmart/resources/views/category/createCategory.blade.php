<h1>Categorias</h1>

<form action="/category/store" method="post">
    @csrf
    <label for="name">Nome</label>
        <input type="text" name="name" required>
    
    <br>   
    
    <label for="type">Tipo</label>
        <select name="type" id="typeId" required>
            <option value="0">Receita (Entrada de dinheiro)</option>
            <option value="1">Despesa (Saída de dinheiro)</option>
        </select>

        <br>

        <input type="submit">
</form>