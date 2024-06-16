<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .receipt-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .receipt-header img {
            max-width: 150px;
            margin-bottom: 10px;
        }

        .receipt-header h2 {
            color: #333;
            margin: 0;
        }

        .receipt-details {
            margin-bottom: 20px;
        }

        .receipt-details p {
            margin: 5px 0;
            color: #555;
        }

        .receipt-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .receipt-table th,
        .receipt-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .receipt-table th {
            background-color: #f2f2f2;
            text-align: left;
            color: #333;
        }

        .receipt-table td:last-child {
            text-align: right;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }

        .total span {
            color: #e74c3c;
        }

        .print-btn {
            text-align: center;
            margin-top: 30px;
        }

        .print-btn button {
            padding: 10px 20px;
            background-color: #27ae60;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .print-btn button:hover {
            background-color: #219653;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .receipt-container,
            .receipt-container * {
                visibility: visible;
            }

            .receipt-container {
                position: absolute;
                left: 0;
                top: 0;
            }

            .print-btn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <?php
    include('db.php');

    $pid = $_GET['pid'];

    $sql = "SELECT * FROM mealbook WHERE ID = '$pid'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fullName = $row['FName'] . " " . $row['LName'];
        $mobile = $row['mobile'];
        $orderDate = $row['OrderDate'];
        $address = $row['Addres'];
        $meal = $row['Meal'];
        $bulkOrder = $row['Bulk'];
        $price = $row['total'];
    ?>
        <div class="receipt-container">
            <div class="receipt-header">
                <h1> A1 Receipt</h1>
            </div>
            <div class="receipt-details">
                <p><strong>Name:</strong> <?php echo $fullName; ?></p>
                <p><strong>Mobile:</strong> <?php echo $mobile; ?></p>
                <p><strong>Date:</strong> <?php echo $orderDate; ?></p>
                <p><strong>Address:</strong> <?php echo $address; ?></p>
            </div>
            <table class="receipt-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Bulk charges will be taken separately</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $meal; ?></td>
                        <td><?php echo $bulkOrder; ?></td>
                        <td>₹<?php echo $price; ?></td>
                    </tr>
                    <!-- You can add more rows here if needed -->
                </tbody>
                <tfoot>
                    <tr class="total">
                        <td colspan="2"><strong>Total</strong></td>
                        <td><span>₹<?php echo $price; ?></span></td>
                    </tr>
                </tfoot>
            </table>
            <div class="print-btn">
                <button onclick="window.print()">Print Receipt</button>
            </div>
        </div>
    <?php
    } else {
        echo "No records found";
    }
    ?>
</body>

</html>
