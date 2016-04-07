<?php
  // String -> strlen, str_pad, str_replace, str_repeat, substr, strrev, strstr, strcasecmp, ucwords, strpos
  // Array -> count, array_shift, array_unshit, sort (sem indice), asort (com indice), rsort, array_push, array_slice, array_pop
  // Xml -> simplexml_load_file -> children()
  // stdClass -> classe para colocar atributos
  // parse_ini_file -> pegar um ini e transformar em array
  // move_uploaded_file -> mover arquivos
  // __clone,__call, __destruct, __autoload == spl_autoload_register -> funcoes mágicas!

  // Interfaces podem ter constates

  // Traits sao como interfaces, só que implementam métodos:
    // Trait "t" {function "..."} -> na classe que usa coloca: use "t" '{visibilidade "metodo"}'
    // Podem ter variaveis, statics, abstracts
                // sao usadas sem $

  // Recurso: Late Static Bindings:
    // chama static::var ou metodo -> o self é limitado à propria classe
    // se tiver sobrescrito o static:: chama o debaixo

  // serialize e unserialize

  // -------------------------------------------

  // High order functions: funcoes passadas à outras funcoes
  // Suporte à programação funcional
  // Variaveis podem ser funcoes

  // ------------------------------------------

  // Namespaces: modo de encapsular items
    // Namespaces PHP ou php gerarao conflitos
 ?>
