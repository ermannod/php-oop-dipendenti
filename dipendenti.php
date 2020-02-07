<?php

class Dipendenti {
  public $id;
  public $name;
  public $last_name;
  public $age;
  public $pay;

  public function __construct($_id, $_name, $_last_name, $_pay){
    $this->id = $_id;
    $this->name = $_name;
    $this->last_name = $_last_name;
    $this->pay = $_pay;
  }

  public function payCacl($gross){
    if (!is_int($this->pay)) {
      throw new Exception('Is not a number');
    } elseif ($this->pay < 0) {
      throw new Exception('No negative number allowed');
    } else{
    $gross = $this->pay * 12;
    return $gross;
    }
  }
}


?>
