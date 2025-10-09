```php
<?php
// mini_calculator.php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation'];
    switch ($op) {
        case '+': $result = $num1 + $num2; break;
        case '-': $result = $num1 - $num2; break;
        case '*': $result = $num1 * $num2; break;
        case '/': $result = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero"; break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini Calculator</title>
    <style>
        body { font-family: Arial; background: #f7f7ff; text-align: center; padding: 60px; }
        form { background: #fff; padding: 20px; border-radius: 10px; display: inline-block; box-shadow: 0 0 10px #ccc; }
    </style>
</head>
<body>
    <h2>🧮 Mini Calculator</h2>
    <form method="POST">
        <input type="number" name="num1" placeholder="First number" required>
        <select name="operation">
            <option>+</option><option>-</option><option>*</option><option>/</option>
        </select>
        <input type="number" name="num2" placeholder="Second number" required>
        <button type="submit">Calculate</button>
    </form>
    <?php if ($result !== ""): ?>
        <h3>Result: <?= $result ?></h3>
    <?php endif; ?>
</body>
</html>
```
