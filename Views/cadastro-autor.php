
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Autor</h1>

    <form action="index.php?classe=autor&acao=cadastrar" method="POST">

        <label> Nome </label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome">

        <label> E-mail </label>
        <input type="text" id="email" name="email" placeholder="Digite seu e-mail">

        <label> Fone </label>
        <input type="text" id="fone" name="fone" placeholder="Digite o seu fone">

        <label> Nacionalidade </label>
        <input type="text" id="pais" name="pais" placeholder="Digite a sua nacionalidade">

        <input type="submit" name="cadastrar" value="cadastrar">
    </form>
</body>
</html>