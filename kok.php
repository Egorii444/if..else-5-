<!DOCTYPE html>
<html>
<head>
    <title>Сравнение трех чисел</title>
</head>
<body>
<h2>Сравнение трех чисел</h2>
<form method="post">
    <label>Введите первое число:</label><br>
    <input type="text" name="num1"><br><br>
    <label>Введите второе число:</label><br>
    <input type="text" name="num2"><br><br>
    <label>Введите третье число:</label><br>
    <input type="text" name="num3"><br><br>
    <input type="submit" value="Сравнить">
</form>

<?php
// Проверяем, были ли отправлены три числа из формы
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
    // Получаем три числа из формы
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $num3 = floatval($_POST['num3']);

    // Находим наибольшее число
    $max = $num1;
    if ($num2 > $max) {
        $max = $num2;
    }
    if ($num3 > $max) {
        $max = $num3;
    }

    // Находим наименьшее число
    $min = $num1;
    if ($num2 < $min) {
        $min = $num2;
    }
    if ($num3 < $min) {
        $min = $num3;
    }

    echo "<p>Наибольшее число: $max</p>";
    echo "<p>Наименьшее число: $min</p>";
}
?>
</body>
</html>