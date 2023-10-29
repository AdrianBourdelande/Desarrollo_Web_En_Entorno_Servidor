<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejemplo 29</title>
</head>
<body>
<?php
function sumaVariable() {
   $total=0;
   for($i=0;$i<func_num_args();$i++) {
       $total=$total+func_get_arg($i);
   }
   return $total;
}
echo sumaVariable(1,2,3)."<br/>";
echo sumaVariable(1,10)."<br/>";
echo sumaVariable(5,8,1,10,11,8,3)."<br/>";
?>
</body>
</html>