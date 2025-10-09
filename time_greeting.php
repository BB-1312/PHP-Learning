```php
<?php
// time_greeting.php
$hour = date("H");
if ($hour < 12) $greeting = "Good Morning 🌅";
elseif ($hour < 17) $greeting = "Good Afternoon ☀️";
elseif ($hour < 21) $greeting = "Good Evening 🌇";
else $greeting = "Good Night 🌙";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Time Greeting</title>
    <style>
        body { font-family: Arial; text-align: center; background: #eef; padding: 100px; }
    </style>
</head>
<body>
    <h1><?= $greeting ?></h1>
    <p>The current time is <?= date("h:i A") ?></p>
</body>
</html>
```
