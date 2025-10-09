```php
<?php
// visit_counter.php
$file = "counter.txt";

if (!file_exists($file)) {
    file_put_contents($file, 0);
}

$visits = (int)file_get_contents($file);
$visits++;
file_put_contents($file, $visits);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Visit Counter</title>
    <style>
        body { font-family: Arial; text-align: center; background: #fdf6e3; padding: 60px; }
        .box { background: #fff; padding: 20px; border-radius: 10px; display: inline-block; box-shadow: 0 0 10px #ccc; }
    </style>
</head>
<body>
    <div class="box">
        <h2>👋 Welcome Visitor</h2>
        <p>This page has been visited <strong><?= $visits ?></strong> times!</p>
    </div>
</body>
</html>
```
