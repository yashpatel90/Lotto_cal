<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Counter Results</title>
</head>
<body>
    <div class="container">
        <h1>Calculation Results</h1>

        <h3>Totals for each index:</h3>
        <table>
            <tr>
                <th>Index</th>
                <th>Count</th>
                <th>Value</th>
                <th>Total</th>
            </tr>
            <?php
            if (isset($_SESSION['totals'])) {
                foreach ($_SESSION['totals'] as $index => $total) {
                    // Get the value for this index based on its range
                    if ($index >= 1 && $index <= 10) {
                        $value = 30;
                    } elseif ($index >= 11 && $index <= 25) {
                        $value = 20;
                    } elseif ($index >= 26 && $index <= 40) {
                        $value = 10;
                    } elseif ($index >= 41 && $index <= 60) {
                        $value = 5;
                    } elseif ($index >= 61 && $index <= 65) {
                        $value = 3;
                    } elseif ($index >= 66 && $index <= 78) {
                        $value = 2;
                    } else {
                        $value = 1;
                    }

                    echo "<tr>
                        <td>Index $index</td>
                        <td>" . ($_SESSION['counts'][$index] ?? 0) . "</td>
                        <td>$value</td>
                        <td>$total</td>
                    </tr>";
                }
            }
            ?>
        </table>

        <h3>Summary:</h3>
        <p>Total Sum of All Indexes: <?php echo $_SESSION['total_sum']; ?></p>
        <p>Total Balance (Opening + Activated): <?php echo $_SESSION['total_balance']; ?></p>
        <p>Instant Tickets Sold: <?php echo $_SESSION['instant_sold']; ?></p>
        <p>Net Sales & Credit: <?php echo $_SESSION['final_amount']; ?></p>

        <a href="index.php">Go back to the form</a>
    </div>
</body>
</html>
