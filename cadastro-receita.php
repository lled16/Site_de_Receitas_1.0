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
    <link rel="stylesheet" href="estilo2.css">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho:wght@900&display=swap" rel="stylesheet">

    <title>Cadastrar Receita</title>
</head>


<body>



<!-- <nav class="navbar  nav">
  <div class="container-fluid" >
    <a class="navbar-brand" href="index.php" style="position:relative;left:80vw;top:-8px; color:white;"><span class="material-icons" style="font-size:40px;">home</span></a>
     
  </div>
</nav> -->

<div class="row" style="height:15px;">

</div>


<div class="container" style="position:relative;padding-top: 2vh;width:90%;border:solid 2px rgb(241, 237, 237); border-radius:5px; -webkit-box-shadow: 0px 1px 13px -3px #2A9D8F; box-shadow: 0px 1px 13px -3px #2A9D8F;background-image:url(img/banner-comida.jpg);background-repeat:no-repeat;baackground-size:100%;">
<form  method="POST" action="processa.php" enctype="multipart/form-data" style="text-align:center;">
    <div class="row" STYLE="text-align:center;">
<a  href="index.php" style="position:relative;left:35vw; color:black;top:50px;"><span class="material-icons" style="font-size:40px;color:#264653">home</span></a>        <p style="font-size:30px;font-family: 'Zen Old Mincho', serif;padding-bottom:5vh;color:black"><b style="background-color:white;">CADASTRO DE RECEITA</b></p>
    </div>

   


  <div class="row  meio" >
    <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Título</label>
      <input type="text" class="form-control" name="titulo" style="background-color:transparent;color:white;" required requiredMessage placeholder="Título">
    </div>
</div>

    <div class="row meio">
      <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Rendimento</label>
      <input type="text" class="form-control" name="rendimento" style="background-color:transparent;color:white;" required  requiredMessage placeholder="Rendimento">
    </div>
    </div>



    <div class="row meio">
    <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Tempo de Preparo</label>
      <input type="text" class="form-control"  name="tempoPreparo" style="background-color:transparent;color:white;" required requiredMessage placeholder="Tempo de Preparo">
    </div>
    </div>
  


  <div class="row meio">
    <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Ingredientes</label>
      <textarea type="text" class="form-control" name="ingredientes" style="background-color:transparent;color:white;" required requiredMessage placeholder="Ingredientes"></textarea>
    </div>
</div>
<div class="row meio">
    <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Ingredientes do Recheio</label>
      <textarea type="text" class="form-control" name="ingredientesRecheio" style="background-color:transparent;color:white;" placeholder="Ingredientes do Recheio"></textarea>
    </div>
    </div>


    <div class="row meio">
    <div class="col-8 esquerda">
        <label for="exampleFormControlTextarea1">Ingredientes da Cobertura</label>
      <textarea type="text" class="form-control" name="ingredientesCobertura" style="background-color:transparent;color:white;" placeholder="Ingredientes da Cobertura"></textarea>
    </div>
  </div>
 
 <div class="row meio">
   <div class="col-8 esquerda">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Modo de Preparo</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="background-color:transparent;color:white;" required requiredMessage name="modoPreparo" placeholder="Modo de Preparo"></textarea>
  </div>
</div>
</div>




<div class="row meio">
   <div class="col-8 esquerda">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">ENVIE SUA IMAGEM</label>

    <input type="file" name="pic" accept="image/*" class="form-control" required>
          

  </div>
</div>
</div>
  <br>
   <button type="submit" class="btn  botao-cadastrar" name="enviar-formulario" style="position:relative;width:30vw;height:60px;background-color:#264653;color:white;" ><B>CADASTRAR RECEITA</B></button>

   <div class="row" style="height:20px;">

</div>
  </form>

</div>

<div class="row" style="height:50px;">

</div>




</body>
</html>