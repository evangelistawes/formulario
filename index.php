<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para assinaturas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
<img src="https://ci5.googleusercontent.com/proxy/C7ZWYCRCoL5tCoY6lyzB291clonMblpC_ryjZ4J70FMrdv8pk7gzJieBWKM8hVOkGif5e4vYX_m3tWT_i2fIRv3xtOM27NjlqVA2xBztqaqwogTcOKXR81KqHYcV9TSC=s0-d-e1-ft#https://storage.googleapis.com/imgs.medway.com.br/2021/11/b49fbf4d-medway.png" style="width: 25vw; min-width: 140px;"/>
<h1 id="titulo">Gerador de assinatura</h1>

<p id="subtitulo">Digite suas informações para a assinatura ser gerada.</p>
<hr>

<fieldset class="grupo">
<form name ="Form" method = "GET" action="dados.php">   

<div class="campo">
    

    <label>Nome: </label><br/><input type="text" name="nome" id="name" required><br>
</div>
    

    <div class="campo">
    <label>Cargo: </label><br/><input type="text" name="cargo" id="cargo" required><br>

</div>

<div class="campo">
    <label>Telefone: </label><br/> <input type="number" name="fone" id="fone" required><br><br/>
</div>
</fieldset>
    

<fieldset>
     <div>
         <input class="button" type="submit"  value="Enviar"><br><br>
    </div>

    <div>
    <input class="button" type="reset" value = "Limpar"><br><br>
    </div>
</fieldset>




</form>



    
</body>
</html>