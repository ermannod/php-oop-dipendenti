<?php

class Operaio extends Dipendenti{
  public $shift;

  public function __contruct($_id, $_name, $_last_name, $_pay,$_shift){
    parent::__contruct($_id, $_name, $_last_name, $_pay);
    $this->shift = $_shift;
  }
}

?>
