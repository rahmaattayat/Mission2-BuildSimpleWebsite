<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Umur</td>
        </tr>
        <?php
        $i = 1;
        while ($i <= 5) {
        ?>
            <tr>
                <td>99001</td>
                <td>Ali</td>
                <td>21</td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>
</html>