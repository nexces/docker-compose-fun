<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html { font-size: 8pt; }
        body { font-family: sans-serif; }
        h1 { text-align: center; }
    </style>
</head>
<body>
<h1><?= date('Y/m/d H:i:s.u') ?></h1>
<pre>
<?php
$db = new PDO('mysql:host=mysql', 'root', 'pass');
$result = $db->query('SHOW DATABASES');
print_r($result->fetchAll(PDO::FETCH_COLUMN, 0));
?>
</pre>
    
</body>
</html>