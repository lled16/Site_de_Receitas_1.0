<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Passion+One:wght@900&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="img/moo.ico" style="border-radius:500px;">
    <title>MOOG</title>
</head>

<body>
    
 <!-- <nav class="navbar fixed-top navbar-expand-lg nav">
  <div class="container-fluid" >
    <a class="navbar-brand" href="cadastro-receita.php" style="position:relative;left:90vw;top:5px; color:white;"><span class="material-icons"title="Cadastrar Nova Receita" style="font-size:35px;position:relative;right:50%;BOTTOM:30%;">add</span></a>
     
    
  </div>
</nav>  -->



        <div class="row-fluid apresentacao" >


           <div class="row"> 
            <div clas="col-12 col-md-12" style="text-align:center;">
                

                 
                <a href="index.php" style="font-size:60px;text-decoration:none;position:relative;top:13vh;color:#E9C46A;font-family: 'Zen Old Mincho';font-weight: 1000; text-decoration:none;"> Receitas Moog</a></p>
            </div> 
          </div> 



         

            <div  style="display:flex;	flex-wrap: wrap;justify-content: center;">
            <form method="post"  name="searchform" action="results.php">
                <input class="busca"  type="text" name="buscar" id="pesquisa"  style="position:relative;left:0.1vw;top:20vh;"> <br> 
                

    
               <a href="cadastro-receita.php" <button type="button" title="Cadastrar nova receita" href="cadastro-receita.php" style="position:relative;left:1vw;top:30vh;width:17vw;font-size:23px;" class="btn btn-warning"><b> <span class="material-icons busca3" >add</span></button></a>

                <BUTTON type="submit"  title="Buscar"  value="" style="position:relative;left:5vw;top:30vh;width:17vw;font-size:23px;" class="btn btn-warning"><b> <span class="material-icons busca3" >search</span></b></button> 
             
             
              </form> 
        
            <script type="text/javascript" src="ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <script type="text/javascript" src="personalizado.js"></script>
                <!-- <button type="button" class="btn btn-success botao-cadastrar" style="position: relative;top: 32vh;width:300px;height:40px;"><B>CADASTRAR RECEITA</B></button> -->
</div>
         


        </div>
        <div class="row" style="text-align:center;">
            <p STYLE="PADDING-TOP:20PX;font-size:40px;font-family: 'Zen Old Mincho';color:black;"><b style="background-color:#264653; color:#E9C46A;-webkit-box-shadow: 0px 0px 50px -15px rgba(0,0,0,0.76); box-shadow: 0px 0px 50px -15px rgba(0,0,0,0.76);">Minhas Receitas</b></p>
        </div>

        <div class="row" style="padding:15px;text-align:center;flex-direction: row;justify-content:center;display: flex;" >

        <?php
          include("conexao.php");
         

          $pegar = mysqli_query($conexao, "SELECT * FROM receitas");



          // A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona
          while($campo = mysqli_fetch_array($pegar)){ 
            
           
            
        ?>
          
          <div class=" col-xl-3 col-lg-4  col-md-6 col-sm-6 col-xs-10 col-10" style="flex-direction: row;align-content:center;display: flex; padding-top:10px;">
            <div class="cartao" style="width: 80vw;TEXT-ALIGN:CENTER;">
              <img src="arquivos/<?php echo $campo["img"];?>" class="card-img-top" style="position:relative;top:-20px;height:250px;border-top-left-radius:10px;border-top-right-radius:10px;">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $campo["titulo"];?></h5>
                    <li class="list-group-item"><b><?php echo $campo["id"]; ?></b></li>
                    <ul class="list-group list-group-flush">
                <li class="list-group-item"><b><?php echo $campo["rendimento"]; ?></b></li>
                <li class="list-group-item"><b><?php echo $campo["tempoPreparo"]; ?></b></li>  
              </ul>
                  </div>
             
            <div class="card-body acao"  STYLE="text-decoration:none;color:white;background-color:#2A9D8F;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
              <a href="visualizar.php?id_receita=<?php echo  $campo['id']; ?>" class="card-link " style="color:white;"><b>VER RECEITA</b></a>
            </div>
            
          </div>
        </div>
        
       
            
       <?php     } ?>

          </div>
        </div>

        <DIV class="row" style="height:60px; background-color:#264653;">
          <DIV class="col" style="display:flex;justify-content:center;">
          <p style="color:#E9C46A;font-size:15px;padding-top:20px;"><b>© Copyright 2021 - Todos os direitos reservados</b></p>

        
        </DIV>
          
        </DIV>
        
    
</body>
</html>