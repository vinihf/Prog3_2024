<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: index.php");
}

    //Conexão com o banco de dados
    $db = new mysqli("localhost", "root", "", "colecao_livros");
    
    //Query de consulta
    $stmt = $db->prepare("select * from livros where id_pessoa = ?");
    $stmt->bind_param("i",$_SESSION['id']);
    $stmt->execute();
    //Executa a consulta e armazena o resultado
    $resultado = $stmt->get_result();

    echo "<table>";
    echo "<tr>
            <td>Título</td>
            <td>Ano</td>
            <td>Autor(a)</td>
            <td>Ações</td>
          </tr>";

    if($resultado->num_rows==0){
        echo "Não há livros cadastrados";
    }else{
        $livros = $resultado->fetch_all(MYSQLI_ASSOC);
        foreach($livros as $linha){
            echo "<tr>";
                echo "<td>{$linha['titulo']}</td>";
                echo "<td>{$linha['ano']}</td>";
                echo "<td>{$linha['autor']}</td>";
                echo "<td><a href='deleteLivro.php?idlivro={$linha['idLivro']}'>Apagar</a>
                          <a href='form_editar.php?idlivro={$linha['idLivro']}'>Editar</a>
                     </td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    echo "<a href='form_adicionar.php'>Adicionar novo livro</a>";
    


?>