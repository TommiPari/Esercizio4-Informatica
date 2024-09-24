<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, fuga quae. Facere doloremque architecto debitis. Quos, praesentium. Quia accusantium voluptatum minima, nemo minus assumenda eum reiciendis eveniet blanditiis, similique mollitia?";
        echo "<p style='color:green'>$str</p>";
        echo "<p style='color:blue'>". strtoupper($str) ."</p>";
        echo "<span style='color:red'>". strlen($str) ."</span>";
        echo "<span style='color:yellow'>". str_word_count($str) ."</span>";
    ?>
</body>
</html>