<?php

class Persona{
  Private $apellidos;
  Private $nombres;
  Private $estadoCivil;
  Private $numeroHijos;
  Private $telefono;

  //Métodos magicos
  public function __GET($atributo){
    return $this->$atributo;
  }

  public function __SET($atributo, $valor){
    $this->$atributo = $valor;
  }

}

$persona1 = new Persona();

$persona1->__SET("apellidos", "QUESADA NOLASCO");
$persona1->__SET("nombres", "POOL");
$persona1->__SET("telefono", "902206063");

echo $persona1->__GET("apellidos");
echo $persona1->__GET("nombres");
echo $persona1->__GET("telefono");