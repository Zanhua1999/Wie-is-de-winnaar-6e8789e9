<?php

 if (isset($_POST['sub'])) {
  $what = $_POST['what'];
  
  $my_array = array("schaar","steen","papier");
  
  $guize = array(array("schaar","papier"),array("papier","steen"),array("steen","schaar"));
  
  $rand_keys = array_rand($my_array);
  $computer = $my_array[$rand_keys];
  echo " Jouw ".$what." VS ".$computer. "<br/>";
    $input = array($computer,$what);
    
    if (!(in_array($what,$my_array))) {
      echo "Steen, schaar, papier";
      header("location:game.php");
    }
    if ($computer == $what) {
      echo "draw";
    }elseif (in_array($input,$guize)) {
      echo "computer win";
    }else {
      echo "you win";
    }
    header("refresh:1; url=game.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Steen, shaar, papier</title>
</head>
<body>
 <form action="#" method="post">
 <div align="center">Maak je keuze<br/>
 <input type="radio" name="what" value="schaar"/>schaar<br/>
 <input type="radio" name="what" value="steen"/>steen<br/>
 <input type="radio" name="what" value="papier"/>papier<br/>
 </div>
 <p align="center">
 <input type="submit" name="sub" value="start" />
 </p>
 </form>
</body>
</html>