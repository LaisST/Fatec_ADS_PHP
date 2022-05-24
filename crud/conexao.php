<?php 
define('HOST', 'localhost');
define('USUARIO', 'id18842267_root');
define('SENHA','%]&SdJ>Eb_jYC$s0');
define('DB','id18842267_db_login');

$conexao =mysqli_connect(HOST,USUARIO,SENHA,DB)
or 
die ('Não foi possivel conectar');

echo "A conexão foi efetuada com sucesso!";

?>