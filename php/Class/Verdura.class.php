<?php
// clase base con propiedades y métodos miembro
class Verdura {

  public  $comestible;
  public  $color;
  protected $name ='';
  protected $type  = false;
  private   $cosechada_en = false;
  protected $caduce = false;

  function __construct(){
    $this->cosechada_en = date("Y-m-d");
  }

  public function  Verdura($comestible, $color="verde")
  {
   $this->comestible = $comestible;
   $this->color = $color;
 }

 public function es_comestible()
 {
   return $this->comestible;
 }

 public  function  color()
 {
   return $this->color;
 }

 public function  Report_propertys(){
  return get_object_vars( $this);
}

public function Report_methods(){
  return get_class_methods($this);
}

protected function  Caduce ( $dias ){
  $mod_date = strtotime($this->cosechada_en."+ ".$dias." days");
  $this->caduce = date("Y-m-d",$mod_date);
}

} // fin de la clase Verdura
