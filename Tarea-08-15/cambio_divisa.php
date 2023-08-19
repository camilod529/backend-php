<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio divisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h2>Cambio divisa</h2>
    <form action="cambio_divisa.php" method="post" class="m-2 col-6">
        <label class="form-label">Valor (COP)</label>
        <input class="form-control" type="text" name="cop">
        <br />
        <select name="opt" class="mt-2 form-select" form-select">
            <option value="1">D&oacute;lares</option>
            <option value="2">Euros</option>
            <option value="3">Rupia India</option>
        </select>
        <br>
        <input type="submit" value="convertir" class="btn btn-primary">
    </form>
    <b class="m-2">
        <?php
        $cop = $_POST['cop'];
        $opt = $_POST['opt'];
        switch ($opt) {
            case '1': // dolares = 0.00024
                $r = $cop * 0.00024;
                echo("$cop COP son $r USD");
                break;
            case '2': // euros = 0.00022 
                $r = $cop * 0.00022;
                echo("$cop COP son $r EUR");
                break;
            case '3': // rupias = 0.020
                $r = $cop * 0.020;
                echo("$cop COP son $r Rupias Indias");
                break;
            
            default:
                echo("Opcion invalida");
                break;
        }
        ?>
    </b>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>