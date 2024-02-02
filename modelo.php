<?php
class Empleado {
    private $sueldoBase = 40000;
    public function calcularSueldo($aniosEnlaEmpresa) {
        $aumento = 0;

        if ($aniosEnlaEmpresa > 10) 
        {
            $aumento = 0.10;
        } elseif ($aniosEnlaEmpresa > 5) 
        {
            $aumento = 0.07;
        } elseif ($aniosEnlaEmpresa > 3) 
        {
            $aumento = 0.05;
        } else 
        {
            $aumento = 0.03;
        }
        return $this->sueldoBase * (1 + $aumento);
    }
}
?>
