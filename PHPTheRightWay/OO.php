<?php
  class A{
    public $var = "Valor padrão teste";

    function __get($prop){
      return $this->$prop;
    }
  }

  $a = new A;
  echo $a->var;

 ?>
