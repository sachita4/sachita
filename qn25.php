<?php
$info = [
    'name' => 'sachita thapa',
    'address' => 'balaju',
    'email' => 'info@sachita.com',
    'phone' => 9811215761,
    'website' => 'www.sachita.com'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array in Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
       
        <tbody>
            <?php
          
            foreach ($info as $key => $value) {
                echo "<tr>";
                echo "<td>" . ucfirst($key) . "</td>";
                echo "<td>" . ($value) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
