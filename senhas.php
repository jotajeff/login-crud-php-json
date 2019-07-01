<?php 

$senha1 = 'admin';

echo "Senha 1 sem segurança >".$senha1;

$senha1crip = md5($senha1);

echo "<br>Senha 1 SEGURA >".$senha1crip;

echo "<hr>";

$senha2 = 'user';

echo "Senha 2 sem segurança > ".$senha2;

$senha2crip = md5($senha2);

echo "<BR> Senha 2 SEGURA >".$senha2crip;


 ?>

