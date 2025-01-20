<?php
$arg1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$arg2 = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae eaque cumque iusto ipsam libero pariatur quibusdam consectetur unde, illo nulla!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color:red;
            padding: 10px;`
            width: 800px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1><?php echo($arg1) ?></h1>
        <p><?php echo($arg2) ?></p>
    </div>
</body>
</html>