
<!-- PHP -->
<?php

class Vista {
    public function mostrarResultado($resultado) {
        echo "Su sueldo actual es de: $" . number_format($resultado, 2);
    }
}
?>
