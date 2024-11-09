 <?php
 include('config/conexao.php');
// $pesquisa = $_GET['busca'];
// $conexao = "SELECT*FROM estudante WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR periodo LIKE '%$pesquisa$' ";
// $result = $pesquisa->query($conexao) or die("Erro ao pesquisar!" .$pesquisa->error);


$nome

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesuisar aqui</title>
</head>
<body>
<h1>Lista Dos Alunos</h1>
    <form action="">
    <input type="text" name="busca">
    <button type="submit">Pesquisar</button>
    </form>
    <br>
    <table while="600px;" border="1">
    <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Turno</th>
    </tr>
    <tr>
    <td colspan="3">digite algo para pesquisar</td>
    </tr>
    </table>
</body>
</html>