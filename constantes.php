<?php

const IVA = 21;
define("FACTURA", 'A');

echo IVA;
$fact = FACTURA;
echo '<br>';
echo "otra forma de concatenar " . FACTURA . '<br>';
echo "Esta factura es del tipo $fact";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
<script>
    let precios = [20,60,30];

    console.log(precios[1]);
</script>
</body>
</html>