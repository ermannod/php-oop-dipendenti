<?php


class Dirigente extends Dipendenti{
  public $settore;

  public function __construct($_id, $_name, $_last_name, $_pay, $_settore){
    parent::__construct($_id, $_name, $_last_name, $_pay);
    $this->settore = $_settore;
  }
}
?>
