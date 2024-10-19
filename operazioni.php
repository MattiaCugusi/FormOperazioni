<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
</head>
<body>
    <?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];

    if ($n1 == "" || $n2 == ""){
        echo "<p style='color: red'>ERRORE: ALMENO UNO DEI 2 NUMERI E' VUOTO!</p>";
        echo "<p><a href= './numeri.html'>rinserisci i dati</a></p>";
    }else{
       echo "<ul>
               <li>" . $n1 . "</li>
               <li>" . $n2 . "</li>
            </ul>";

       $num1 = intval($n1);
       $num2 = intval($n2);

       $addizione = $num1 + $num2;
       $sottrazione = $num1 - $num2;
       $moltiplicazione = $num1 * $num2;

       if ($n2 == 0){
        $divisione = "<p style= 'color: red'>IMPOSSIBILE!!</p>";
       }else{
        $divisione = $num1/$num2;
       }

       echo "<table style='border: 1px solid black; border-collapse: collapse; text-align:center' >
               <tr>
                <th style='border: 1px solid black'>Operazione</th>
                <th style='border: 1px solid black'>Risultato</th>
                </tr>

                <tr>
                 <td style='border: 1px solid black'>" . $num1 . "+" . $num2 . "</td>
                 <td style='border: 1px solid black'>" . $addizione . "</td>
                </tr>

                <tr>
                 <td style='border: 1px solid black'>" . $num1 . "-" . $num2 . "</td>
                 <td style='border: 1px solid black'>" . $sottrazione . "</td>
                </tr>

                 <tr>
                 <td style='border: 1px solid black'>" . $num1 . "*" . $num2 . "</td>
                 <td style='border: 1px solid black'>" . $moltiplicazione . "</td>
                </tr>

                 <tr>
                 <td style='border: 1px solid black'>" . $num1 . "/" . $num2 . "</td>
                 <td style='border: 1px solid black'>" . $divisione . "</td>
                </tr>

                </table>";
          
       
    }

    ?>
</body>
</html>