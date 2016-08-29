<?php
require_once 'php/Php_Executer.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Title of the document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/prism.css">
  <script type="text/javascript" src="js/prism.js"></script>
</head>

<body>

  <div class="jumbotron text-center">
    <h1>Verduras</h1>
    <p> y la espinaca</p>
  </div>
  <div class="container">
    <div class="row">
      <h1>Class Verdura </h1>
      <div class="col-sm-4">
 <span class="label label-danger">Metodos</span>
        <pre class="language-php">
          <code class="language-php" >
            <?php print_r($example->Report_methods());?>
          </code>
        </pre>
      </div>
      <div class="col-sm-4">
       <span class="label label-danger">Propiedades</span>
        <pre class="language-php">
          <code class="language-php" >
            <?php print_r($example->Report_propertys());?>
          </code>
        </pre>

      </div>
      <div class="col-sm-4">
             <span class="label label-danger">Reportes de tipos metodos</span>
       <pre class="language-php prism-show-language">
        <code class="language-php" >
          <?php print_r(  ReportMethodsTypes('Verdura',$example->Report_methods()));;?>
        </code>
      </pre>

    </div>
  </div>


  <div class="row">
    <h1>Class Espinaca </h1>
    <div class="col-sm-4">
    <span class="label label-danger">Metodos</span>
      <pre class="language-php">
        <code class="language-php" >
          <?php print_r($Espinaca->Report_methods());?>
        </code>
      </pre>
    </div>
    <div class="col-sm-4">
    <span class="label label-danger">Propiedades</span>
      <pre class="language-php">
        <code class="language-php" >
          <?php print_r( $Espinaca->Report_propertys());?>
        </code>
      </pre>

    </div>
    <div class="col-sm-4">
    <span class="label label-danger">Reporte de tipos de metodos</span>
     <pre class="language-php">
      <code class="language-php" >
        <?php print_r(  ReportMethodsTypes('Espinacas',$Espinaca->Report_methods()));?>
      </code>
    </pre>

  </div>


  <div class="col-sm-4">

    <span class="label label-danger">Ejecutando la cocinada</span>
    <pre class="language-php">
      <code class="language-php" >
        <?php
        $Espinaca->cocinarla();
         print_r( $Espinaca->Report_propertys());?>
      </code>
    </pre>

  </div>



</div>



   <div class="row">
  <div class="col-sm-9">

    <h1 ><?php print $Espinaca->ReportEspinaca();?></h1>
  </div>


  </div>

</div>


</body>

</html>
