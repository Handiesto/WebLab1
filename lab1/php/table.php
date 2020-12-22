<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <style type="text/css">
        html {
    color: purple;
    font-family: 'Kurale', cursive;
            margin: 0;
            font-size: 10px;
}

.vText{
    font-size: 28px;
     padding-left: 25%;
    }


        body {
            
            font-family: monospace;
            
        }
        table {
            border-collapse: collapse; 
            border: 1px solid grey; 
            width: 100%;
            margin: 0 auto;
            border: 1;
}
        
       

    </style>
</head>
<body>
    <table class="">
        <tr>
            <span class = "vText">
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>Ответ</td>
            <td>Время</td>
            <td>Время работы скрипта (мс)</td>
        </span>
        </tr>

        <!-- TABLE.PHP -->
        <?php
        $history = $_SESSION['history'];
        <span class = "vText">
        foreach ($history as $raw) {
        echo '<tr> <td>' . $raw[0] . '</td><td>' . $raw[1] . '</td><td>' . $raw[2] . '</td><td>' . $raw[3] . '</td><td>' . $raw[4] . ' ' . $raw[5] . '</td><td>' . 
            $raw[6] . '</td></tr>';
        }
         </span>
        ?>
        </table>
    </div>
</body>
</html>