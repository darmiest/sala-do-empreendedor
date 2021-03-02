<?php


  $id=$_GET["id"];
  $num=$_GET["num"];
  $vnome=$_GET["f_nome"];
  $vemail=$_GET["f_email"];
  $vtelefone=$_GET["f_telefone"];
  $vendereco=$_GET["f_endereco"];

  $data=$_GET["data"];
  $hora=$_GET["hora"];

echo "Identificador: ".$id."<br/>Numero: ".$num."<br/>Nome: ".$vnome."<br/> E-mail: ".$vemail.
"<br/> Telefone: ".$vtelefone."<br/> Endereco: ".$vendereco."<br/> Data: ".
$data."<br/> Hora: ".$hora."<br/>";

?>