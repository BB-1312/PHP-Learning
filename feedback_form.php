```php
<?php
// feedback_form.php
$name = $feedback = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body { font-family: Arial; background: #e9f5ff; text-align: center; padding: 60px; }
        form { background: #fff; padding: 20px; display: inline-block; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
        textarea { width: 250px; height: 80px; }
    </style>
</head>
<body>
    <h2>💬 Share Your Feedback</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <textarea name="feedback" placeholder="Your Feedback" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php if ($name && $feedback): ?>
        <h3>Thank you, <?= $name ?>!</h3>
        <p>Your feedback: "<?= $feedback ?>"</p>
    <?php endif; ?>
</body>
</html>
```
