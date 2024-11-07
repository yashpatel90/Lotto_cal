<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Counter Daily Calculation</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fc;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

h3 {
    font-size: 22px;
    color: #444;
    margin-bottom: 20px;
    text-align: center;
}

table {
    width: 100%;
    margin-bottom: 30px;
    border-collapse: collapse;
}

th, td {
    padding: 12px 15px;
    text-align: center;
}

th {
    background-color: #4CAF50;
    color: white;
}

td {
    border: 1px solid #ddd;
}

input[type="number"], input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
    background-color: #fafafa;
}

input[type="number"]:focus {
    border-color: #4CAF50;
    outline: none;
    background-color: #fff;
}

.result-section {
    margin-top: 20px;
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.result-section p {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

.result-section strong {
    color: #4CAF50;
}

span {
    font-weight: bold;
    color: #333;
}

@media screen and (max-width: 768px) {
    .container {
        padding: 20px;
    }

    table {
        font-size: 14px;
    }

    h1 {
        font-size: 24px;
    }

    h3 {
        font-size: 20px;
    }

    .result-section p {
        font-size: 16px;
    }
}

input[type="number"], input[type="text"], span {
    width: 100%;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    display: block;
    color: #555;
}

input[type="number"]#opening_balance, 
input[type="number"]#activated_books,
input[type="number"]#net_sales_credit {
    width: calc(50% - 10px);
    margin-right: 20px;
    display: inline-block;
}

input[type="number"]#net_sales_credit {
    margin-right: 0;
}

#total_sum, #total_balance, #instant_sold, #final_amount {
    font-size: 20px;
    font-weight: bold;
    padding: 10px;
    color: white;
    background-color: #4CAF50;
    border-radius: 5px;
    display: inline-block;
    min-width: 150px;
    text-align: center;
}

#total_sum {
    background-color: #2196F3;
}

#total_balance {
    background-color: #ff9800;
}

#instant_sold {
    background-color: #9c27b0;
}

#final_amount {
    background-color: #f44336;
}

@media (max-width: 600px) {
    input[type="number"]#opening_balance, 
    input[type="number"]#activated_books,
    input[type="number"]#net_sales_credit {
        width: 100%;
        margin-right: 0;
    }
    
    .result-section {
        padding: 10px;
    }

    #total_sum, #total_balance, #instant_sold, #final_amount {
        width: 100%;
        text-align: center;
    }
}

    </style>
    <script>
        // Function to update the total for a specific range based on the count entered
        function calculateTotal() {
            // Define values based on index ranges
            const values = [
                [30, 10], // Index 1-10
                [20, 25], // Index 11-25
                [10, 40], // Index 26-40
                [5, 60],  // Index 41-60
                [3, 65],  // Index 61-65
                [2, 78],  // Index 66-78
                [1, 80],  // Index 79-80
            ];

            let totalSum = 0;

            // Loop through each index range and calculate the total
            for (let i = 0; i < values.length; i++) {
                const value = values[i][0];
                const endIndex = values[i][1];

                // Calculate total for each index in this range
                for (let index = (i == 0 ? 1 : (values[i-1][1] + 1)); index <= endIndex; index++) {
                    const count = parseInt(document.getElementById('count_' + index).value) || 0;
                    const total = count * value;
                    document.getElementById('total_' + index).value = total;

                    totalSum += total;
                }
            }

            // Update total sum
            document.getElementById('total_sum').innerText = totalSum.toFixed(2);
        }

        // Function to update the total balance (Opening + Activated) and calculate instant tickets sold
        function updateBalance() {
            const openingBalance = parseFloat(document.getElementById('opening_balance').value) || 0;
            const activatedBooks = parseFloat(document.getElementById('activated_books').value) || 0;
            const totalBalance = openingBalance + activatedBooks;

            document.getElementById('total_balance').innerText = totalBalance.toFixed(2);

            // Now, calculate instant tickets sold
            const totalSum = parseFloat(document.getElementById('total_sum').innerText) || 0;
            const instantSold = totalBalance - totalSum;
            document.getElementById('instant_sold').innerText = instantSold.toFixed(2);
        }

        // Function to update the final amount after adding/subtracting net sales/credit
        function updateFinalAmount() {
            const netSalesCredit = parseFloat(document.getElementById('net_sales_credit').value) || 0;
            const instantSold = parseFloat(document.getElementById('instant_sold').innerText) || 0;

            const finalAmount = instantSold + netSalesCredit;
            document.getElementById('final_amount').innerText = finalAmount.toFixed(2);
        }

        // Set up event listeners for all relevant inputs
        window.onload = function() {
            // Add event listeners to count inputs
            for (let i = 1; i <= 80; i++) {
                document.getElementById('count_' + i).addEventListener('input', calculateTotal);
            }

            // Add event listeners to balance and net sales inputs
            document.getElementById('opening_balance').addEventListener('input', updateBalance);
            document.getElementById('activated_books').addEventListener('input', updateBalance);
            document.getElementById('net_sales_credit').addEventListener('input', updateFinalAmount);
        };
    </script>
</head>
<body>
    <div class="container">
        <h1>Lotto Counter Daily Calculation</h1>
        <form>
            <h3>Enter the Counts for the Books (Values will be applied based on indices)</h3>
            <table>
                <tr>
                    <th>Index</th>
                    <th>Counts</th>
                    <th>Value</th>
                    <th>Total</th>
                </tr>
                <?php
                $ranges = [
                    [1, 15, 30],
                    [16, 30, 20],
                    [31, 45, 10],
                    [46, 65, 5],
                    [66, 70, 3],
                    [71, 80, 2],
                    [81, 90, 1]
                ];

                foreach ($ranges as $range) {
                    $start = $range[0];
                    $end = $range[1];
                    $value = $range[2];

                    for ($i = $start; $i <= $end; $i++) {
                        echo "<tr>
                            <td>$i</td>
                            <td><input type='number' id='count_$i' min='0' value='0' required></td>
                            <td>$value</td>
                            <td><input type='number' id='total_$i' readonly></td>
                        </tr>";
                    }
                }
                ?>
            </table>

            <h3>Balance and Sales Information</h3>
            <label for="opening_balance">Opening Balance (Yesterday's Closing Balance):</label>
            <input type="number" id="opening_balance" value="0"><br>

            <label for="activated_books">Activated Lotto Books (New Balance for Today):</label>
            <input type="number" id="activated_books" value="0"><br>

            <label for="net_sales_credit">Net Sales & Credit (+/-):</label>
            <input type="number" id="net_sales_credit" value="0"><br>

            <div class="result-section">
                <p><strong>Total Sum of All Indexes: </strong><span id="total_sum">0.00</span></p>
                <p><strong>Total Balance (Opening + Activated): </strong><span id="total_balance">0.00</span></p>
                <p><strong>Instant Tickets Sold: </strong><span id="instant_sold">0.00</span></p>
                <p><strong>All Total</strong><span id="final_amount">0.00</span></p>
            </div>
        </form>
    </div>
</body>
</html>
