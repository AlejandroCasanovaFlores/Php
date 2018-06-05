<?php
class Persona
{
  private $nombre;
  
  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }
  
  public function SetNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  
  public function GetNombre()
  {
    return $this->nombre;  
  }
}

class Html
{
  public function cabeza($titulo='Sin titulo', $javascript='')
  {
    echo "<!DOCTYPE html><head>";
    echo $javascript;
    echo "<title>$titulo</title>";
    echo "</head>";
  }
  
  public function abrirCuerpo()
  {
    echo "<body>";
  }
  
  public function cerrarCuerpo()
  {
    echo "</body>";
  }
  
  public function pie()
  {
    echo "</html>";
  }
}

$persona1 = new Persona('Alejandro');
$persona2 = new Persona('Macarena');
$persona3 = new Persona('Isidora');
$persona4 = new Persona('Tomas');
$persona5 = new Persona('Mirsha');

$objetoHTML = new Html();

$js = '<script>alert("Hola desde Alert");</script>';

$objetoHTML->cabeza('Modificador éxitoso!', $js);
$objetoHTML->abrirCuerpo();

$arr = array($persona1, $persona2, $persona3, $persona4, $persona5);
foreach($arr as $indice => $value)
{
  echo "Objeto ".($indice+1)." => ".$value->GetNombre()."<br>";
}

$objetoHTML->cerrarCuerpo();
$objetoHTML->pie();
