<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turno</td>
            <td>Início</td>
            <td>Ações</td>
        </tr>';

        <?php
        foreach($alunos as $aluno){

            echo "<tr>
                    <td>{$registro['id']}</td>
                    <td>{$registro['nome']}</td>
                    <td>{$registro['turno']}</td>
                    <td>{$registro['inicio']}</td>
                 </tr>";

        }
        ?>

    </table>

</body>
</html>
