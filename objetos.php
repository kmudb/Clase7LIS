<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php 
    $d= new Datos();
    $listadatos = $d->getDatos();
    echo '<hr/>';
    foreach($listadatos as $valores){
        echo "  <div class='card' style='width: 18rem;''>";
        echo "  <img class='card-img-top' src='http://geekazos.com/wp-content/uploads/2015/02/fb2.jpg' alt='Card image cap'>";
        echo "  <div class='card-body'>";
        echo "    <h5 class='card-title'>Usuarios</h5>";
        echo "    <p class='card-text'>";
        echo "       Id:". $valores->get_id();
        echo '       <br>';
        echo "       Nombre:".$valores->get_nombre();
        echo '       <br>';
        echo "       Pwd:".$valores->get_pwd();
        echo "    </p>";
        echo "  </div>";
        echo "</div>";
    }
    ?>

</div>
</body>
</html>

<?php 
class Usuario{
    public $id;
    public $nombre;
    public $pwd;

    //constructor
    public function __construct($id,$nombre,$pwd)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->pwd=$pwd;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_pwd(){
        return $this->pwd;
    }
}

class Datos{
    function getDatos(){
        $lista=array();
        $u=new Usuario(1,"Pedro","pwd");
        array_push($lista,$u);

        $u=new Usuario(2,"Mario","pwd");
        array_push($lista,$u);

        $u=new Usuario(3,"Ana","pwd");
        array_push($lista,$u);

        $u=new Usuario(4,"Ricardo","pwd");
        array_push($lista,$u);
        return $lista;
    }
}
?>