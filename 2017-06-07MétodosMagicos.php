<?php
class Persona
{
  public $edad = 26;
  
  //Metodo magico que salta cuando se llama una funcion que no existe en la clase.
  public function __call($nameMetodo, $args)
  {
    if($nameMetodo == 'suma')
    {
      if(count($args) == 0)
        return;
        
      $resultado = 0;
      foreach($args as $indice => $valor)
      {
        $tipo = gettype($valor);
        if($tipo == 'integer')
        {
          $resultado += $valor;
        }
      }
      
      return $resultado;
    }
  }
  
  //Salta cuando queremos acceder a una propiedad que no existe
  public function __get($name)
  {
    echo "Estas tratando de obtener el valor de $name, pero esta propiedad no existe.<br>";
  }
  
  //Salta cuando queremos setear una propiedad que no existe.
  public function __set($name, $value)
  {
    echo "Quieres modificar la propiedad $name colocando el valor de $value, pero esta propiedad no esta definida<br>";
  }
}

$p = new Persona();
echo $p->suma(5, 15, 30, "Hola mundo");
echo $p->edad.'<br>';
echo $p->altura.'<br>';
$p->altura = 180;
$p->edad = 50;
