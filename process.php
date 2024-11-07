<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $counts = $_POST['counts'];
    $ranges = [
        [1, 10, 30],
        [11, 25, 20],
        [26, 40, 10],
        [41, 60, 5],
        [61, 65, 3],
        [66, 78, 2],
        [79, 90, 1]
    ];
    
    // Initialize total sum
    $total_sum = 0;
    $totals = [];
    
    // Step 1: Loop through each range and calculate total based on counts and values
    foreach ($ranges as $range) {
        $start = $range[0];
        $end = $range[1];
        $value = $range[2];
        
        // Calculate the total for each index in this range
        for ($i = $start; $i <= $end; $i++) {
            if (isset($counts[$i]) && $counts[$i] > 0) {
                $total = $counts[$i] * $value;
                $totals[$i] = $total;  // Store the calculated total
                $total_sum += $total;  // Add to overall sum
            } else {
                $totals[$i] = 0;  // If no count is entered, set total to 0
            }
        }
    }

    // Step 2: Get balance details
    $opening_balance = $_POST['opening_balance'];
    $activated_books = $_POST['activated_books'];
    $net_sales_credit = $_POST['net_sales_credit'];

    // Calculate total balance
    $total_balance = $opening_balance + $activated_books;
    
    // Step 3: Calculate Instant Tickets Sold (Total Balance - Total Sum)
    $instant_sold = $total_balance - $total_sum;

    // Step 4: Add or subtract net sales & credit
    $final_amount = $instant_sold + $net_sales_credit;

    // Store values in session for showing the results on the form
    $_SESSION['totals'] = $totals;
    $_SESSION['total_sum'] = $total_sum;
    $_SESSION['total_balance'] = $total_balance;
    $_SESSION['instant_sold'] = $instant_sold;
    $_SESSION['final_amount'] = $final_amount;

    // Redirect to results page
    header('Location: results.php');
    exit;
}
?>
