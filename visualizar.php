<?php
  include("conexao.php");

  $id = filter_input(INPUT_GET, "id_receita");  

  if(empty($id)){
        
        header('Location: index.php');
        exit;
  } 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>       
    <link  href="/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link  href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script  src="/bootstrap/js/bootstrap.min.js"></script>
    <script  src="/bootstrap/js/bootstrap.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Passion+One:wght@900&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" type="imagex/png" href="img/moo.ico" style="border-radius:500px;">
    <title>Receita</title>
</head>
<body>

<?php
    include("conexao.php");
  
   $busca = mysqli_query($conexao, "SELECT * FROM receitas WHERE id = '$id'");

   $dado = mysqli_fetch_array($busca);

  
  


?>


  <!-- <nav class="navbar navbar-expand-lg nav">
  <div class="container-fluid" >
    <a class="navbar-brand" href="index.php" style="position:relative;left:90vw;top:0px; color:white;"><span class="material-icons" style="font-size:40px;">home</span></a>
     
  </div>
</nav> -->
<nav class="navbar" style="background-color:#264653;display:flex;justify-content:center;">
  <a class="navbar-brand" href="index.php"><span class="material-icons" style="font-size:40px;color:#E9C46A;">home</span></a>
</nav>

<div class="row" STYLE="display:flex;justify-content:center;padding-top:5vh;text-align:center;">


<pre><h3 class="card-title" style="font-family: 'Zen Old Mincho', serif;color:#E9C46A;"><b style="background-color:#264653;"><?php echo $dado['titulo'];?></b></h3></pre>

</div>


<div class="card-body">
<div class="row" style="display:flex;justify-content:center;padding-top:2vh;text-align:center;">
  <div class="col-12">

  <img src="arquivos/<?php echo $dado["img"];?>" class="card-img-top" style="width:30vw;height:30vh;position:relative;-webkit-box-shadow: 0px 5px 15px 5px #595959; box-shadow: 0px 5px 15px 5px #595959;">
  
</div>
</div>  

 

  <div class="card-body" style="padding-top:10vh;">
    
        <div class="row card-body" style="display:flex;justify-content:center;text-align:center;">
                <div class="col-md-6 " style="padding-top:2vh;">
                <h4 style="font-family: 'Zen Old Mincho', serif;"><b><span style="font-size:50px;color:#264653;" class="material-icons">restaurant</span></b></h4><br>
                     <a style="font-size:13px;white-space: pre-wrap;"><b> <?php echo $dado['rendimento'];?></b></a>
                </div>
                <div class="col-md-6" style="padding-top:2vh;">
                <h4 style="font-family: 'Zen Old Mincho', serif;"><b><span style="font-size:50px;color:#264653;" class="material-icons">alarm</span></b></h4><br>
                       <a style="font-size:13px;white-space: pre-wrap;"><b><?php echo $dado['tempoPreparo'];?></b></a>
                </div>
                
        </div>


        <div class="row card-body" style="text-align:center;">
                <div class="col-md-4" style="border-top:dashed 1px black;"><br>
                        <h4 style="font-family: 'Zen Old Mincho', serif;"><b>Ingredientes</b></h4><BR>
                       <p style="font-size:13px;text-align:justify;white-space: pre-wrap;"><?php echo $dado['ingredientes'];?></p></pre>
                </div>
                <div class="col-md-4" style="border-top:dashed 1px black;"><br>
                <h4 style="font-family: 'Zen Old Mincho', serif;"><b>Recheio</b></h4><BR>
                       <p style="font-size:13px;text-align:justify;white-space: pre-wrap;"><?php echo $dado['ingredientesRecheio'];?></p></pre>
                </div>
                <div class="col-md-4" style="border-top:dashed 1px black;"><br>
                <h4 style="font-family: 'Zen Old Mincho', serif;"><b>Cobertura</b></H4><BR>
                      <p style="font-size:13px;text-align:justify;white-space: pre-wrap;"><?php echo $dado['ingredientesCobertura'];?></p></pre>
                </div>
                
        </div>


        <div class="row card-body" style="text-align:center;">
                
                <div class="col-md-12" style="border-top:dashed 1px black;">
                        <h4 style="font-family: 'Zen Old Mincho', serif;"><BR></BR><b>Modo de Preparo</b></h4>

                        </div>
                <div class="col-md-12"  style="text-align:justify;" >
                    
                     <a style="font-size:13px;text-align:justify;white-space: pre-wrap;"><BR></BR><?php echo $dado['modoPreparo'];?></a>
                </div>
                
        </div>
<div class="row" style="flex-wrap:wrap;padding-top:2vh;text-align:center;" >
<div class="col-6" style="display:flex;justify-content:right;padding-top:2vh;text-align:center;">
  
    <a href="edit_receita.php?id=<?php echo  $dado['id']; ?>" class="btn" style="position:relative;laft:50vw;background-color:#264653;color:#E9C46A;"><b>Editar Receita</b></a>

</div>


    <?php
          include("conexao.php");
          $id_receita = $id;  
        ?>
    <div class="col-6" style="display:flex;justify-content:left;padding-top:2vh;text-align:center;">
    <a href="deletarReceita.php?id=<?php echo  $id; ?>" class="btn" style="position:relative;laft:50vw;background-color:#E76F51;color:white;"><b>Apagar Receita</B></a>
</div>
</div>
  </div>
</div>



</div><!-- FECHA A ROW PRINCIPAL -->

<div class="row" style="height:20px;">
        <div class="col">

        </div>
</div>



<DIV class="row" style="height:70px; background-color:#264653;">
          <DIV class="col" style="display:flex;justify-content:right;">
          <p style="color:#E9C46A;font-size:15px;padding-top:20px;"><b>© Copyright 2021 - Todos os direitos reservados</b></p>

        
        </DIV>


        <DIV class="col" style="display:flex;justify-content:center;">
          <p style="color:#E9C46A;padding-top:15px;"><a TARGET="blank" href="https://www.instagram.com/stories/highlights/17915936935976778/" style="color:#E9C46A;"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg></a></p>

        
        </DIV>
          
        </DIV>
    
</body>
</html>