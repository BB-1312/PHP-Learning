```php
<?php

$color = $_POST['color'] ?? '#ffffff';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Color Picker</title>
</head>
<body style="background-color: <?= $color ?>; text-align:center; font-family:Arial;">
    <h2>🎨 Pick a Background Color</h2>
    <form method="POST">
        <input type="color" name="color" value="<?= $color ?>">
        <button type="submit">Apply</button>
    </form>
    <p>Current color: <strong><?= $color ?></strong></p>
</body>
</html>
```
