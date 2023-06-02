<?php

    require '../dompdf/vendor/autoload.php';
    require_once '../dompdf/autoload.inc.php';

    $fecha = date('Y-m-d');

    $user_data_str = $_GET['user_data'];
    $products_str = $_GET['productos'];

    $user_data = json_decode($user_data_str, true);
    $products = json_decode($products_str, true);

    $total = 0;

    foreach ($products as $product) {

        $precio = $product['precio'] * $product['cantidad'];
        $total += $precio;

    }

    $impuesto = $total * 0.18;

    $total_a_pagar = $total +  $impuesto;

    // Ruta de archivo local al archivo boleta_compra.php
    $boleta_compra_file = '../templates/boleta_compra.php';

    // Renderizar el archivo PHP y obtener el contenido
    ob_start();
    include $boleta_compra_file;
    $html = ob_get_clean();

    // Referenciar el espacio de nombres Dompdf
    use Dompdf\Dompdf;
    use Dompdf\Options;

    $options = new Options();
    $options->set('chroot', realpath(''));

    // Instanciar y utilizar la clase Dompdf
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);

    // (Opcional) Configurar el tamaño y la orientación del papel
    $dompdf->setPaper('A4', 'landscape');

    // Renderizar el HTML como PDF
    $dompdf->render();

    // Enviar el PDF generado al navegador
    $dompdf->stream('Boleta de Compra');

?>