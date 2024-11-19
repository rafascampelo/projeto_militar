<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>

<link rel="stylesheet" href="estilo.css" type="text/css">

<BODY class="tela2" text="white" style type="text/css"  >
<?php
$idade= $_POST['idade'];
$mh = $_POST['mh'];
 
 if ($idade >18) {
    echo "voce nao pode se alistar mais";
} elseif ($idade == 18) {
    echo "voce pode se alistar com $idade";
} else {
    echo "voce ainda é menor de idade";
}

 echo "<br>voce e $mh";
  
 ?>
 </BODY>
 </HTML>