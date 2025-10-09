```php
<?php
// quote_generator.php
$quotes = [
    "The best way to get started is to quit talking and begin doing.",
    "Dream it. Believe it. Build it.",
    "Success is not for the lazy.",
    "Do something today that your future self will thank you for.",
    "Push yourself, because no one else is going to do it for you."
];
$random_quote = $quotes[array_rand($quotes)];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Motivational Quote</title>
    <style>
        body { font-family: Arial; background: #f3f3f3; text-align: center; padding: 60px; }
        .quote { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; display: inline-block; }
    </style>
</head>
<body>
    <div class="quote">
        <h2>"<?= $random_quote ?>"</h2>
        <p>✨ Refresh the page for a new quote!</p>
    </div>
</body>
</html>
```
