<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tab = [
        1, 2, 3, 4, 5, 6, 7, 8
    ]
    ?>
    <table>
        <thead>

        </thead>
        <tbody>
            <?php
            foreach ($tab as $val) {
            ?>
                <tr>
                    <?php
                    for ($i = 0; $i < $val; $i++) {
                    ?>
                        <td style="border: 1px solid black;"><?= $val ?></td>
                    <?php
                    }
                    ?>
                </tr>


            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>