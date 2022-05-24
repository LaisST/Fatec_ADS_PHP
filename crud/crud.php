<?php
#Chamando o arquivo conexao.php
include_once"conexao.php";
#pegando o valor da ação via URL
$acao = $_GET['acao'];
#Comparando se o valor da URL é do tipo GET
if(isset($_GET['id'])){
    #Criando uma variavel para armazenar o valor obtido no GET
    $id = $_GET['id'];
}

switch($acao){
    case 'inserir':
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $mensagem = $_POST['mensagem'];

    $sqlInsert = "INSERT INTO users (user_name,user_email, user_date, user_mensagem) 
    values ('$nome', '$email', '$data', '$mensagem')";
        
    if (!mysqli_query($conexao,$sqlInsert)) {
        die("Erro ao inserir as informações do formulario na tabela users: ".mysqli_error($conexao));
    }else{
        echo "<script language='javascript' type='text/javascript'>
    alert('Dados cadastrados com sucesso!')
    window.location.href='crud.php?acao=selecionar'</script>";
    }

        
        break;
    
    case 'montar':
        
        break;
        
    case 'atualizar':
        
        break;
        
    case 'deletar':
        $sqlDelete = "DELETE FROM users WHERE user_id = '" . $id . "'";
        
        if (!mysqli_query($conexao, $sqlDelete)){
            die ('Error: '.mysqli_error($conexao));
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados excluídos com sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        mysqli_close($conexao);
        header("Location:crud.php?acao=selecionar");
        
        break;
        
    case 'selecionar':
        date_default_timezone_set('America/Sao_Paulo');
        #header("Content-type: text/html;charset=utf-8");
        include_once "conexao.php";
        
        echo "<meta charset='UTF-8'>";
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>CÓDIGO</th>";
        echo "<th>NOME</th>";
        echo "<th>EMAIL</th>";
        echo "<th>DATA CADASTRO</th>";
        echo "<th>MENSAGEM</th>";
        echo "<th>AÇÃO</th>";
        echo "</tr>";
        
        $sqlSelect = "SELECT * FROM users";
        $resultado = mysqli_query($conexao, $sqlSelect) or die ("Erro ao retornar dados");
        
        echo "<CENTER>Registro cadastrados na base de dados.</br></CENTER>";
        echo "</br>";
        
        while ($registro = mysqli_fetch_array($resultado)){
            $id = $registro['user_id'];
            $nome = $registro['user_name'];
            $email = $registro['user_email'];
            $data = $registro['user_date'];
            $mensagem = $registro['user_mensagem'];
            
            echo "<tr>";
            echo "<td>". $id . "</td>";
            echo "<td>". $nome . "</td>";
            echo "<td>". $email . "</td>";
            echo "<td>". date("d/m/y", strtotime($data)) . "</td>";
            echo "<td>". $mensagem . "</td>";
            echo "<td><a href='crud.php?acao=deletar&id=$id'><img src='delete.png' alt='Deletar' title='Deletar registro'></a>
            <a href='crud.php?acao=montar&id=$id'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a>
            <a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>";
            
            echo "</tr>";
        }
        
        mysqli_close($conexao);
        
        
        break;
        
default:
    header("Location:index.php");
    break;
}


?>