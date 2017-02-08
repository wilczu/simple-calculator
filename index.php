<?php
    session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Prosty kalkulator</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fontello.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</head>
<body>
<div class="container">   
    <div class="center">        
        <br />
        <i class="demo-icon icon-calc"></i>
        <h3>Prosty kalkulator</h3>
        
<form action="liczba.php" method="POST">
    
<div class="row">
  <div class="col-xs-6 col-sm-5">
      <input type="text" id="inputWarning" name="liczba1" class="form-control" placeholder="podaj liczbe" maxlength="10"/>
  </div>
    
  <div class="col-xs-6 col-sm-2">
    <div class="form-group">
        <select id="mySelect" class="form-control" name="funkcja">
            <option value="dodaj">Plus</option>
            <option value="odejmij">Minus</option>
            <option value="mnoz">Mnozenie</option>
            <option value="dziel">Dzielenie</option>          
        </select>
    </div>    
  </div>

  <div class="clearfix visible-xs-block"></div>

  <div class="col-xs-6 col-sm-5">
      <input type="text" id="inputWarning" name="liczba2" class="form-control" placeholder="podaj liczbe" maxlength="10"/>
  </div>
    
</div>
  <input type="submit" value="Wyslij !" class="btn btn-info" style="width: 100%; margin-bottom: 10px;"/>
</form>             
        
        <?php
            if(isset($_SESSION['error']))
            { 
                echo '<div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button><i class="demo-icon icon-emo-angry"></i><h1>'.$_SESSION['error'].'</h1></div>';            
            }
            if(isset($_SESSION['equals']))
            { 

                echo '<div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button><h1>'
                .$_SESSION['equals'].'</h1></div>';
                
            }
        ?>
    </div>    
</div>    
</body>
</html>