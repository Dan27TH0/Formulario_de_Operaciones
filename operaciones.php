<?php
function suma($num1, $num2)
{
    return $num1 + $num2;
}

function resta($num1, $num2)
{
    return $num1 - $num2;
}

function multiplicacion($num1, $num2)
{
    return $num1 * $num2;
}

function division($num1, $num2)
{
    if ($num2 == 0) {
        return 'Error: No se puede dividir entre 0';
    } else {
        return $num1 / $num2;
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (!empty($operacion)) {
        switch ($operacion) {
            case 'suma':
                echo "El resultado de la suma es igual a: " . suma($num1, $num2);
                break;
            case 'resta':
                echo "El resultado de " . $num1 . " - " . $num2 . " es igual a: " . resta($num1, $num2);
                break;
            case 'multiplicacion':
                echo "El resultado de " . $num1 . " * " . $num2 . " es igual a: " . multiplicacion($num1, $num2);
                break;
            case 'division':
                echo "El resultado de " . $num1 . " / " . $num2 . " es igual a: " . division($num1, $num2);
                break;
            default:
                echo "Operación no reconocida";
        }
    } else {
        echo "Verifica haber seleccionado una opción";
    }
}
?>