<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h2>Calculadora</h2>
    <form action="calculadora.php" method="post" class="m-2 col-6">
        <label class="form-label">Numero 1</label>
        <input class="form-control" type="text" name="Numero 1">
        <br />
        <label class="form-label">Numero 2</label>
        <input class="form-control" type="text" name="Numero 2">
        <select name="opt" class="mt-2 form-select" form-select">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicaci&oacute;n</option>
            <option value="4">Divisi&oacute;n</option>
        </select>
        <br>
        <input type="submit" value="calcular" class="btn btn-primary">
    </form>
    <b class="m-2">
        <?php
        // print_r($_POST);
        $a = $_POST['Numero_1'];
        $b = $_POST['Numero_2'];
        $opt = $_POST['opt'];

        switch ($opt) {
            case '1': // suma
                $r = 'Resultado: ' . $a + $b;
                break;

            case '2'; // resta
                $r = 'Resultado: ' . $a - $b;
                break;

            case '3'; // multiplicacion
                $r = 'Resultado: ' . $a * $b;
                break;

            case '4'; // divsion
                if ($b != 0) {

                    $r = 'Resultado: ' . $a / $b;
                } else {
                    $r = 'No se puede divir entre 0';
                }
                break;

            default:
                echo ("Opcion invalida");
                break;
        }
        echo ($r);
        ?>
    </b>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>