
<?php
class Trabajador{
    private $nombre;
    private $horas;
    private $sueldo;
          function __construct($n,$h,$s){
            $this->nombre = $n;
            $this->horas = $h;
            $this->sueldo = $s;
          }
  
    public function getNombre()
    {return $this->nombre;}

    public function getHoras()
    {return $this->horas;}

    public function getSueldo()
    {return $this->sueldo;}

    public function calcularSueldoxh()
    {return $this->horas * $this->sueldo;}

  }

  $trabajador = new Trabajador($_POST['nombre'], $_POST['nhoras'], $_POST['sueldoxh']);
  
  echo "Ingrese su nombre: ".$trabajador->getNombre()."<br>";

  echo "Ingrese su nombre: " .$trabajador->getHoras()."<br>";

  echo "Ingrese sueldo por hora: ".$trabajador->getSueldo()."<br>";

  echo "Sueldo total empleado ".$trabajador->getNombre()." : ".$trabajador->calcularSueldoxh()."<br>";

?>