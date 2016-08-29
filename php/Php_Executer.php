<?php
require_once 'Class/Verdura.class.php';
require_once 'Class/Espinacas.class.php';

$example = new Verdura();
$Espinaca = new Espinacas();


function fatalErrorHandler()
{
    # Getting last error
  $error = error_get_last();

    # Checking if last error is a fatal error
  if(($error['type'] === E_ERROR) || ($error['type'] === E_USER_ERROR))
  {
        # Here we handle the error, displaying HTML, logging, ...
    echo 'Sorry, a serious error has occured in ' . $error['file'];
  }
}

# Registering shutdown function
register_shutdown_function('fatalErrorHandler');

function ReportMethodsTypes( $class, $types ){
  $report = array();
  foreach ( $types  as $key => $value) {
    $reflection = new ReflectionMethod( $class , $value);
    if ($reflection->isPublic()) {
       $report[$value] = "Public method";
    }
    if ($reflection->isPrivate()) {
      $report[$value] = "Private method";
    }
    if ($reflection->isProtected()) {
      $report[$value] = "Protected method";
    }
    # code...
  }

  return $report;
}
