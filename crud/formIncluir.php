<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cadastro</title>
</head>
<body>
    <form action="gravar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome">
        <br><br>
        <label for="turno">Turno: </labe>
        <select name="turno">
            <option value="">Escolha</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>
        </select>
        <br><br>
        <label for="inicio">Inicio </label>
        <input type="date" name="inicio" id="inicio">
        <br><br>
        <input type="submit" value="gravar">
    </form>
</body>
</html>