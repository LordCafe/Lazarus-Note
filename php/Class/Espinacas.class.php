<?php

// ampliar la clase base
class Espinacas extends Verdura {

 function __construct(){
  parent::__construct();
  $this->cocinada = false;
  $this->Verdura(true, "verde");
  $this->name = 'Espinaca';
  $this->type ='hoja';
  $this->Caduce(5);
 }


 public function cocinarla()
 {
   $this->cocinada = true;
 }

 public function está_cocinada()
 {
   return $this->cocinada;
 }

 public function ReportEspinaca(){
  $status = ( empty( $this->cocinada)) ? 'cruda':'Cocinada';
  return $this->name."  esta ".$status;
 }

} // fin de la clase Espinacas
