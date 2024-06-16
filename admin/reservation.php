<form?php include('db.php'); ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biryani Shop</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="css/payment.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <style>
        li form input {
            position: relative;
            left: 30px;
        }

        .cart-container {
            margin-top: 20px;
        }

        .meal-row {
            margin-bottom: 10px;
        }

        li form label {
            line-height: 40px;
            color: white;
            position: relative;
            left: 40px;

        }

        li form button {
            padding: 7px;
            background-color: green;
            color: white;
            border: 1px solid green;
            border-radius: 36px;
            position: relative;
            left: 70px;
        }

        /* 
    .dropdown-checkboxes {
        position: relative;
        display: inline-block;
        width: 100%;
    } */
        .dropdown-checkboxes {
            position: relative;
            display: inline-block;
        }

        .dropdown-checkboxes button {
            padding: 11px;
            width: 10vw;

            height: 38px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #e9e9ed;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;

        }

        .dropdown-content div {
            padding: 12px 16px;
            cursor: pointer;
        }

        .dropdown-content div:hover {
            background-color: #f1f1f1;
        }

        .show {
            display: block;
        }

        .dropdown-checkboxes {
            position: relative;
            display: inline-block;
        }

        .dropdown-checkboxes button {
            padding: 11px;
            width: 200px;
            height: 38px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #e9e9ed;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content label {
            display: block;
            padding: 8px;
            cursor: pointer;
        }

        .dropdown-content label:hover {
            background-color: #f1f1f1;
        }

        .dropdown-checkboxes .show {
            display: block;
        }

        .cart-container {
            margin-top: 20px;
            border: 1px solid beige;
            padding: 10px;
            border-radius: 5px;
            background-color: beige;
        }

        .cart-container h4 {
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        #cart-items {
            list-style-type: none;
            padding: 0;
            margin: 10px 0;
        }

        #cart-items li {
            padding: 5px 0;
            border-bottom: 1px solid #ccc;
        }

        #totalAmount {
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }

        .dropdown-checkboxes .dropdown-content label {
            display: block;
            padding: 8px;
            cursor: pointer;
        }

        .dropdown-checkboxes .dropdown-content label:hover {
            background-color: #f1f1f1;
        }

        .dropdown-checkboxes .dropdown-content input {
            margin-right: 8px;
        }

        .dropdown-checkboxes .show {
            display: block;
        }
    
    </style>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li>
                            <a href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="fa fa-user"></i> Admin</a>
                        </li>
                        <li>
                            <div class="payment-container">

                                <form id="payment-form" required>
                                    <div class="payment-option">
                                        <input type="radio" id="upi" name="paymentMethod" value="upi">
                                        <label for="upi"><i>UPI</i></label>
                                    </div>
                                    <div class="payment-option">
                                        <input type="radio" id="cod" name="paymentMethod" value="cod">
                                        <label for="cod"></i>Cash on Delivery</i></label>
                                    </div>
                                    <button type="submit">Proceed</button>
                                </form>
                                <div id="payment-details"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Order <small></small>
                                <a href="login.php">Admin</a>
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <form name="form" method="post">
                            <div class="col-md-5 col-sm-5">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        PERSONAL INFORMATION
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Bulk Biryani Order</label>
                                            <input name="bulk" type="text" class="form-control " placeholder='e.g 1kg or 10kg of biryani etc' >
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            ORDER INFORMATION
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="mealInput">Enter Quantities for Each Meal</label>
                                                <div class="meal-options">
                                                    <div class="meal-row">
                                                        <label>Biryani ₹70</label>
                                                        <input type="number" name="biryani" data-price="70" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                    <div class="meal-row">
                                                        <label>Chicken Lolipop ₹20</label>
                                                        <input type="number" name="lolipop" data-price="20" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                    <div class="meal-row">
                                                        <label>Chicken Samosa ₹10</label>
                                                        <input type="number" name="samosa" data-price="10" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                    <div class="meal-row">
                                                        <label>Chicken Masala ₹60</label>
                                                        <input type="number" name="masala" data-price="60" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                    <div class="meal-row">
                                                        <label>Chicken Tikka-Half ₹50</label>
                                                        <input type="number" name="tikka-half" data-price="50" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                    <div class="meal-row">
                                                        <label>Chicken Tikka-Full ₹100</label>
                                                        <input type="number" name="tikka-full" data-price="100" class="meal-quantity" min="0" value="0">
                                                    </div>
                                                </div>
                                                <div class="cart-container">
                                                    <h4>Cart</h4>
                                                    <ul id="cart-items"></ul>
                                                    <div id="totalAmount">Total Amount: ₹0</div>
                                                </div>
                                                <input type="hidden" name="totalAmount" id="totalAmountInput">

                                            </div>
                                            <div class="form-group">
                                                <label>Order Time</label>
                                                <input type="time" name="otime" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Order</label>
                                                <input name="cin" type="date" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">

                                    <h4>HUMAN VERIFICATION</h4>
                                    <p>Type Below this code <?php $Random_code = rand();
                                                            echo $Random_code; ?> </p><br />
                                    <p>Enter the random code<br /></p>
                                    <input type="text" name="code1" title="random code" required />
                                    <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                    <input type="submit" name="submit" class="btn btn-primary">
                        </form>
                        <?php
if (isset($_POST['submit'])) {
    $code1 = $_POST['code1'];
    $code = $_POST['code'];

    if ($code1 != $code) {
        $msg = "Invalid code";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    } else {
        $conn = @mysqli_connect("localhost", "root", "bc", "hotel");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $bulk = $_POST['bulk'];
        $otime = $_POST['otime'];
        $cin = $_POST['cin'];
        $address = $_POST['address'];
        $meals = $_POST['meals'];

        $totalAmount = 0; // Initialize total amount

        foreach ($meals as $mealName => $quantity) {
            $mealName = $conn->real_escape_string($mealName);
            $quantity = intval($quantity);
            $price = 0;

            // Determine price based on meal name
            switch ($mealName) {
                case 'biryani':
                    $price = 70;
                    break;
                case 'lolipop':
                    $price = 20;
                    break;
                case 'samosa':
                    $price = 10;
                    break;
                case 'masala':
                    $price = 60;
                    break;
                case 'tikka-half':
                    $price = 50;
                    break;
                case 'tikka-full':
                    $price = 100;
                    break;
            }

            // Calculate total price for each meal
            $totalMealPrice = $quantity * $price;
            $totalAmount += $totalMealPrice; // Add to total amount

            // Insert meal into database along with total amount
            $sql = "INSERT INTO mealbook (FName, LName, Email, mobile, Meal, Bulk, Addres, OrderTime, OrderDate, total) 
                    VALUES ('$fname', '$lname', '$email', '$phone', '$mealName', '$bulk', '$address', '$otime', '$cin', '$totalMealPrice')";

            if (mysqli_query($conn, $sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Insert the total amount
        $sql_total = "INSERT INTO mealbook (FName, LName, Email, mobile,Meal, Bulk, Addres, OrderTime, OrderDate, total) 
                      VALUES ('$fname', '$lname', '$email', '$phone','Total / Only Bulk Order:
                      ','$bulk', '$address', '$otime', '$cin', '$totalAmount')";

        if (mysqli_query($conn, $sql_total) === TRUE) {
            echo "<script>alert('Your data stored successfully');</script>";
        } else {
            echo "Error: " . $sql_total . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>


                    </div>
                </div>

            </div>
        </div>

        </div>

        <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <script>
            document.getElementById('payment-form').addEventListener('submit', function(event) {
                event.preventDefault();

                const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                const paymentDetails = document.getElementById('payment-details');
                const qrcodeContainer = document.createElement('div');
                qrcodeContainer.id = 'qrcode';

                // Clear previous content
                paymentDetails.innerHTML = '';
                if (document.getElementById('qrcode')) {
                    document.getElementById('qrcode').remove();
                }

                if (selectedPaymentMethod === 'upi') {
                    paymentDetails.innerHTML = '<p style="color:white";>You have selected <strong>UPI</strong> as your payment method. You Pick your Order From hotel and show us payment </p>';
                    paymentDetails.appendChild(qrcodeContainer);
                    generateQRCode('upi://pay?pa=example@upi&pn=Example+Merchant&am=100.00');
                } else if (selectedPaymentMethod === 'cod') {
                    paymentDetails.innerHTML = '<p style="color:white";>You have selected <strong>Cash on Delivery</strong> as your payment method.</p>';
                } else {
                    paymentDetails.innerHTML = '<p>Please select a payment method.</p>';
                }
            });

            function generateQRCode(url) {
                var qrcode = new QRCode(document.getElementById('qrcode'), {
                    text: url,
                    width: 128,
                    height: 128
                });
                document.getElementById('qrcode').style.display = 'block';
            }
        </script>

        <!-- jQuery Js -->
        <script>
            const mealQuantities = document.querySelectorAll(".meal-quantity");
            const cartItems = document.getElementById("cart-items");
            const totalAmountDisplay = document.getElementById("totalAmount");
            const totalAmountInput = document.getElementById("totalAmountInput");

            mealQuantities.forEach(input => {
                input.addEventListener("input", updateCart);
            });

            function updateCart() {
                cartItems.innerHTML = "";
                let totalAmount = 0;

                mealQuantities.forEach(input => {
                    const quantity = parseInt(input.value);
                    const price = parseInt(input.getAttribute("data-price"));
                    const name = input.name;

                    if (quantity > 0) {
                        const itemTotal = quantity * price;

                        // Update cart items list
                        const listItem = document.createElement("li");
                        listItem.textContent = `${name} x${quantity} ₹${itemTotal}`;
                        cartItems.appendChild(listItem);

                        // Update hidden fields
                        const hiddenField = document.createElement("input");
                        hiddenField.type = "hidden";
                        hiddenField.name = `meals[${name}]`;
                        hiddenField.value = quantity;
                        cartItems.appendChild(hiddenField);

                        // Calculate total amount
                        totalAmount += itemTotal;
                    }
                });

                // Update total amount display and hidden input
                totalAmountDisplay.textContent = `Total Amount: ₹${totalAmount}`;
                totalAmountInput.value = totalAmount;
            }
        </script>


        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
    </body>

    </html>