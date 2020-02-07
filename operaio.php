<?php

class Operaio extends Dipendenti{
  public $shift;

  public function __construct($_id, $_name, $_last_name, $_pay, $_shift){
    parent::__construct($_id, $_name, $_last_name, $_pay);
    $this->shift = $_shift;
  }
}

?>
