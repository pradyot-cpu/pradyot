<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="tb1" id="tb1" 
        placeholder="Enter 1st value" value="<?php echo isset($_POST['tb1']) ? $_POST['tb1'] : ''; ?>" />
        
        <input type="text" name="tb2" id="tb2" 
        placeholder="Enter 2nd value" value="<?php echo isset($_POST['tb2']) ? $_POST['tb2'] : ''; ?>" />

        <button type="submit" name="action" value="sum">Sum</button>
        <button type="submit" name="action" value="difference">Difference</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['tb1']) && isset($_POST['tb2'])) {
            $a = floatval($_POST['tb1']);
            $b = floatval($_POST['tb2']);
            $result = 0;

            if ($_POST['action'] == 'sum') {
                $result = $a + $b;
                echo "<p>Sum: $result</p>";
            } elseif ($_POST['action'] == 'difference') {
                $result = $a - $b;
                echo "<p>Difference: $result</p>";
            }
        } else {
            echo "<p>Please enter both values.</p>";
        }
    }
    ?>
</body>
</html>
