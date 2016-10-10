<html>
  <head>
    <title></title>
    <style type="text/css">
input {
  display: block;
}

th,td {
  border: 1px solid #000;
  padding: 30px;
}

.filas,.columnas{
   padding: 10px;
}

.filasPos{
   display: flex;
   justify-content:center;
   clear: both;
}

.colPos{
   display: flex;
   align-items: center;
}

table{
   float: left;
}

form{
   display: inline-block;
   text-align: center;
   float: left;
}

    </style>
  </head>
  <body>
<form name="form1" method="GET" action="<?php $_PHP_SELF ?>">
   <table border="1" class="table">
    <?php
            //Si no esta definida incializa los valores a 2,2
            if(!isset($_GET['countcolumn']) && !isset($_GET['countrow'])){
               $arrayFilCol = array(2,2);
            }else{
               $arrayFilCol = array($_GET['countcolumn'],$_GET['countrow']);
            }

            //Si pulsa el botn "btnaddrow" añadirá una fila
            if((!empty($_GET["btnaddrow"])) == "+") {
               $arrayFilCol[1] = $_GET['countrow'] + 1;
               //Evitamos que el numero de filas sea mayor a 8
               if ($arrayFilCol[1] > 8){
                  $arrayFilCol[1] = 8;
               }
            }
            //Si pulsa el botn "btnremoverow" quitará una fila
            if((!empty($_GET["btnremoverow"])) == "-") {
               $arrayFilCol[1] = $_GET['countrow'] - 1;
               //Evitamos que el numero de filas sea menor a 1
               if ($arrayFilCol[1] < 1){
                  $arrayFilCol[1] = 1;
               }
            }
            //Si pulsa el botn "btnremoverow" quitará una fila
            if((!empty($_GET["btnaddcolumn"])) == "+") {
               $arrayFilCol[0] = $_GET['countcolumn'] + 1;
               //Evitamos que el numero de columnas sea mayor a 8
               if ($arrayFilCol[0] > 8){
                  $arrayFilCol[0] = 8;
               }
            }
            //Si pulsa el botn "btnremovecolumn" quitará una columna
            if((!empty($_GET["btnremovecolumn"])) == "-") {
               $arrayFilCol[0] = $_GET['countcolumn'] - 1;
               //Evitamos que el numero de columnas sea menor a 1
               if ($arrayFilCol[0] < 1){
                  $arrayFilCol[0] = 1;
               }
            }

            //Pintamos la tabla dependiendo de lo valores obtenidos
            for ($i=1; $i<=$arrayFilCol[1]; $i++) {
               echo "<tr>";
               for ($c=1; $c<=$arrayFilCol[0]; $c++) {
               echo "<td></td>";
               }
               echo "</tr>";
            }

            //Guardamos los valores en la array en los inputs "countrow" y "countcolumn"
            echo "<input type='hidden' name='countrow' value='".$arrayFilCol[1]."'>";
            echo "<input type='hidden' name='countcolumn' value='".$arrayFilCol[0]."'>";
   ?>
   </table>

      <div class="colPos">
            <input class="columnas" type="submit" name="btnaddcolumn" value="+">
            <input class="columnas" type="submit" name="btnremovecolumn" value="-">
      </div>
      <div class="filasPos">
         <input class="filas" type="submit" name="btnaddrow"  value="+">
         <input class="filas" type="submit" name="btnremoverow"  value="-">
      </div>


    </form>
  </body>
</html>
