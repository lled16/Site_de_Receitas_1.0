<?php

include_once("conexao.php");


 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = uniqid() . $ext; //Definindo um novo nome para o arquivo
    $dir = './arquivos/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./arquivos/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
 } 
$nomeNovo = $new_name;
$id = filter_input(INPUT_POST, 'id');
$titulo = filter_input(INPUT_POST, 'titulo');
$rendimento = filter_input(INPUT_POST, 'rendimento');
$tempoPreparo = filter_input(INPUT_POST, 'tempoPreparo');
$ingredientes = filter_input(INPUT_POST, 'ingredientes');
$ingredientesRecheio = filter_input(INPUT_POST, 'ingredientesRecheio');
$ingredientesCobertura = filter_input(INPUT_POST, 'ingredientesCobertura');
$modoPreparo = filter_input(INPUT_POST, 'modoPreparo');






// echo "Titulo: $modoPreparo <br>";

$result_receitas = "UPDATE receitas SET titulo = '$titulo', rendimento = '$rendimento', tempoPreparo = '$tempoPreparo', ingredientes = '$ingredientes', ingredientesRecheio = '$ingredientesRecheio', ingredientesCobertura = '$ingredientesCobertura', modoPreparo = '$modoPreparo', img = '$nomeNovo' WHERE id ='$id' ";
$resultado_receitas = mysqli_query ($conexao, $result_receitas);

if(mysqli_affected_rows($conexao)){
    header('Location: carregamento.php');
}else{
    echo "Não foi possível alterar esta receita ...";
}