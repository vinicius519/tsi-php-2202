<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form action="atualizar.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"value="<?php echo $alunos['nome'];?>">>
        <br><br>
        <label for="turno">Turno: </label>
        <select name="turno" id="turno">
            <option value="">Escolha</option>
            <option value="matutino"
            <?php echo $alunos['turno'] == 'Matutino' ? 'selected' : ''; ?>
            >Matutino</option>
            <option value="vespertino"
            <?php echo $alunos['turno'] == 'Vespertino' ? 'selected' : ''; ?>
            >Vespertino</option>
            <option value="noturno"
            <?php echo $alunos['turno'] == 'Noturno' ? 'selected' : ''; ?>
            >Noturno</option>
        </select>
        <br><br>
        <label for="inicio">Início</label>
        <input type="date" name="inicio" id="inicio" value="<?php echo $alunos['inicio'];?>">
        <br><br>
        <input type="hidden" name="id" value="<?php echo $alunos['id'];?>">
        <input class="btn" type="submit" value="Gravar">
    </form>    
</body>
</html>