
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Autor</h1>

    <form action="index.php?classe=autor&acao=editar" method="POST">

        <input type="hidden" name="id_autor" value="<?=$dados['id_autor'];?>">

        <label> Nome </label>
        <input type="text" id="nome" name="nome" value="<?=$dados['nome'];?>">

        <label> E-mail </label>
        <input type="text" id="email" name="email"  value="<?=$dados['email'];?>">

        <label> Fone </label>
        <input type="text" id="fone" name="fone"  value="<?=$dados['fone'];?>">

        <label> Nacionalidade </label>
        <input type="text" id="pais" name="pais"  value="<?=$dados['nacionalidade'];?>">

        <input type="submit" name="cadastrar" value="Salvar">
    </form>
</body>
</html>