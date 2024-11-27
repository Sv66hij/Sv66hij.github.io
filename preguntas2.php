<?php
include("preguntas.php");

if (isset($_POST['registro'])) {
    $transporte = trim($_POST['transporte']);
    $gasto = trim($_POST['gasto']);
    $tiempo = trim($_POST['tiempo']);
    $fechareg = date("Y-m-d");

    // Validar que las variables no estén vacías
    if (!empty($transporte) && !empty($gasto) && !empty($tiempo)) {
        // Evitar inyección SQL con consultas preparadas
        $consulta = "INSERT INTO respuestas (transporte, gasto, tiempo, fecha) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);
        mysqli_stmt_bind_param($stmt, "ssss", $transporte, $gasto, $tiempo, $fechareg);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>Gracias, tus respuestas han sido registradas.</h3>";
        } else {
            echo "<h3>Error al guardar las respuestas: " . mysqli_error($conex) . "</h3>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<h3>Por favor, completa todos los campos.</h3>";
    }
}
?>
