<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="nome">nome:</label>
        <input type="text" name="nomeUsuario" id ="nome">
        <label for="idade">idade:</label>
        <input type="number" name="idadeUsuario" id ="Usuario">
        <label for="cpf">CPF:</label>
        <input type="number" name="cpfUsuario" id ="cpf">
        <input type="submit" value="Enviar">
        <label for="periodo">PERIODO:</label>
        <select name="periodoUsuario" id="periodo">
            <option value="">escolha</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>



        </select>
   

    </form>    
    
</body>
</html>