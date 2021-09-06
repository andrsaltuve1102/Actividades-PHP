<?php
//Definicion
class Persona{
    //Propiedades
    private $dni;
    private $nombre;
    private $edad;
    private $nacionalidad;

    public function getDni(){ return $this->dni; }
    public function setDni($dni){$this->dni = $dni; }

    public function getNombre(){ return $this->nombre; }
    public function setNombre($nombre){$this->nombre = $nombre; }

    public function getEdad(){ return $this->edad; }
    public function setEdad($edad){$this->edad = $edad; }
    
    public function getNacionalidad(){ return $this->nacionalidad; }
    public function setNacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad; }

    public function imprimir(){
        echo "DNI:$this->dni<br>";
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        echo "Nacionalidad: $this->nacionalidad<br><br>";
    }

    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
     }

}


class Alumno extends Persona
{
    //Propiedades
    private $legajo;
    
    //Métodos o funciones
    public function __construct(){
	    $this->nota_Portfolio = 0.0;
	    $this->nota_PHP = 0.0;
        $this->nota_proyecto = 0.0;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "<br>Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "<br>Nota Portfolio: " . $this->nota_Portfolio . "<br>";
        echo "<br>Nota PHP: " . $this->nota_PHP . "<br>";
        echo "<br>Nota Proyecto: " . $this->nota_Proyecto . "<br>";
        echo "<br>Promedio: " .  number_format($this->calcularPromedio(), 2, ',','.') . "<br><br>";
        echo "<br><br>";
    }

    public function calcularPromedio(){
        $promedio = ($this->nota_Portfolio + $this->nota_Php + $this->nota_Proyecto)/3;
        return $promedio;
    }
    
    public function __destruct() {
       print "Destruyendo el objeto " . $this->nombre . "<br>";
    }

}


class Docente extends Persona {
    private $especialidad;
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    public function imprimir(){
        echo "DNI = " . $this->dni . "<br>";
        echo "Nombre = " . $this->nombre . "<br>";
        echo "Edad = " . $this->edad . "<br><br>";
        echo "Nacionalidad = " . $this->nacionalidad . "<br><br>";
        echo "Especialidad = " . $this->especialidad . "<br><br>";
    }

    public function imprimirEspecialidadesHabilitadas(){
        echo "Las especialidades habilitadas son:<br>";
        echo self::ESPECIALIDAD_BBDD . "<br>";
        echo self::ESPECIALIDAD_ECO . "<br>";
        echo self::ESPECIALIDAD_WP . "<br>";
    }
  
    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
}

//Programa
$persona1 = new Persona();
$persona1->setDni("35678321");
$persona1->setNombre("Juan Perez");
$persona1->setEdad(30);
$persona1->setNacionalidad("Argentina");
$persona1->imprimir();
exit;

$alumno1 = new Alumno();
$alumno1->nombre = "Julia Lopez";
$alumno1->dni = "38979977";
$alumno1->nacionalidad = "Argentina";
$alumno1->legajo = 7898;
$alumno1->notaPhp = 8.5;
$alumno1->notaPortfolio = 7.5;
$alumno1->notaProyecto = 8;
$alumno1->imprimir();

$alumno2 = new Alumno();
$alumno2->nombre = "Matías Diaz";
$alumno2->nacionalidad = "Colombiano";
$alumno2->notaPortfolio = 9;
$alumno2->notaPhp = 9;
$alumno1->notaProyecto = 8;
$alumno2->imprimir();

$docente1 = new Docente();
$docente1->nombre = "Juan Carlos Rosales";
$docente1->imprimir();

?>