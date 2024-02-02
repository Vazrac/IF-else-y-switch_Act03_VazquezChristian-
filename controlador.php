<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else y switch </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1 class="titulo">Calculador de Sueldo</h1>
    <form method="post" action="">
        <label for="anios">Años en la empresa:</label>
        <input type="number" id="anios" name="anios" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>

<!-- PHP -->
<?php
require_once 'modelo.php';
require_once 'vista.php';

class Controlador {
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista) {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function calcularSueldo($aniosEnlaEmpresa) {
        $sueldo = $this->modelo->calcularSueldo($aniosEnlaEmpresa);
        $this->vista->mostrarResultado($sueldo);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aniosUsuario = isset($_POST['anios']) ? (int)$_POST['anios'] : 0;

    
    $modelo = new Empleado();
    $vista = new Vista();
    $controlador = new Controlador($modelo, $vista);

    $controlador->calcularSueldo($aniosUsuario);
}
?>


