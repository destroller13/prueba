<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title> php </title>
	</head>
	<body>

		<form method="post" action="proceso2.php">

	     <?php

          if(!isset($_POST['min'])){
            echo "falta numero";
          }

          else if(!isset($_POST['max'])){
            echo "falta numero";
          }

          else if(!isset($_POST['ordenacion'])){
            echo "Error, no recibo tipo de ordenacion";
          }

          else if(!is_numeric($_POST['min'])){
            echo "el numero minimo no es numero";
          }

          else if(!is_numeric($_POST['max'])){
            echo "el numero maximo no es numero";
          }
          else {
            $min=$_POST['min'];
            $max=$_POST['max'];
            $ordenacion=$_POST['ordenacion'];

            $v=array();
            for($i=$min;$i<=$max;$i++){
                $v[]=$i;
            }

              if($ordenacion=="des"){
                rsort($v);

                }
                for($i=0;$i<count($v);$i++)

                  echo $v[$i]." ";
                }

	    ?>
		<br/>
</form>

	</body>
</html>
