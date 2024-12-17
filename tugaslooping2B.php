<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            text-align: center;
            border: 1px solid black;
            margin: 2px;
            line-height: 30px;
        }
    </style>
</head>
<body>

<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='box'>$j</div>";
    }
    echo "<br>";
}
?>

</body>
</html>