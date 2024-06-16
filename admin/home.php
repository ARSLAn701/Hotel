<?php
include('db.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - View Submissions</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="css/payment.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-default {
            background-color: #343a40;
            border-color: #343a40;
        }

        .navbar-default .navbar-brand,
        .navbar-default .navbar-nav>li>a {
            color: #ffffff;
        }

        .navbar-side {
            background-color: #343a40;
        }

        .navbar-side .nav>li>a {
            color: #ffffff;
        }

        .width-form {
            width: 125%;
        }

        .page-header {
            margin-top: 0;
            padding-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .panel {
            border-radius: 0;
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .confirm-btn {
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }

        .confirm-btn:hover {
            background-color: #28a745;
            color: #fff;
        }

        .search-bar {
            margin-bottom: 20px;
        }
        #page-wrapper{
   
                width: 100%;
        }

        #window {

            width: 100%;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    <li>
                        <a href="home.php"><i class="fa fa-user"></i> Admin</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i>Payment & Invoice</a>
                    </li>
                    <li>
                        <a href="opinion.php"><i class="fa fa-book"></i>Feedback And Visitors</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Order<small> All The Order Are Here</small></h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12" id="window">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Meal</th>
                                                <th>Bulk</th>
                                                <th>Status</th>
                                                <th>Meals ki Total </th>
                                                <th>Address</th>
                                                <th>Order Time</th>
                                                <th>Order Date</th>
                                                <th>Action</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php
                                            // Establishing connection to the database
                                            $conn = mysqli_connect('localhost', 'root', 'bc', 'hotel');
                                            if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                            }

                                            $search = isset($_POST['search']) ? mysqli_real_escape_string($conn, $_POST['search']) : '';
                                            $query = "SELECT * FROM mealbook WHERE FName LIKE '%$search%' OR LName LIKE '%$search%' OR Email LIKE '%$search%'";

                                            // Execute the query
                                            $result = mysqli_query($conn, $query);
                                            if (mysqli_num_rows($result) > 0) {
                                                // Looping through the results and displaying them
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['ID'] . "</td>";
                                                    echo "<td>" . $row['FName'] . "</td>";
                                                    echo "<td>" . $row['LName'] . "</td>";
                                                    echo "<td>" . $row['Email'] . "</td>";
                                                    echo "<td>" . $row['mobile'] . "</td>";
                                                    echo "<td>" . $row['Meal'] . "</td>";
                                                    echo "<td>" . $row['Bulk'] . "</td>";
                                                    echo "<td id='stat" . $row['ID'] . "'>" . ($row['stat'] ?? '') . "</td>";
                                                    echo "<td>" . $row['total'] . "</td>";
                                                    echo "<td>" . $row['Addres'] . "</td>";
                                                    echo "<td>" . $row['OrderTime'] . "</td>";
                                                    echo "<td>" . $row['OrderDate'] . "</td>";
                                                    echo "<td><button type='button' class='btn btn-success confirm-btn' data-order-id='" . $row['ID'] . "'>Confirm</button></td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='12'>No orders found.</td></tr>";
                                            }

                                            // Freeing the result set
                                            mysqli_free_result($result);

                                            // Closing the database connection
                                            mysqli_close($conn);
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script>
        // Function to handle form submission and AJAX request
        function search() {
            // Get the search query from the input field
            var searchQuery = document.querySelector('input[name="search"]').value;

            // Create an AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'search.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the table body with the search results
                    document.getElementById('searchResults').innerHTML = xhr.responseText;
                }
            };

            // Send the request with the search query as parameter
            xhr.send('search=' + encodeURIComponent(searchQuery));

            // Prevent the form from submitting and page reload
            return false;
        }

        // Add event listener to the form for submitting the search
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            search(); // Call the search function
        });
    </script>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>

    
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to handle order confirmation
        function confirmOrder(orderId, button) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'confirm_order.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        if (response.success) {
                            const statusElement = document.getElementById('stat' + orderId);
                            statusElement.textContent = 'Confirmed';
                            button.disabled = true;
                        } else {
                            alert('Error: ' + response.error);
                        }
                    } else {
                        alert('An error occurred while processing the request.');
                    }
                }
            };
            xhr.send('orderId=' + orderId);
        }

        // Add event listener to the table body to handle button clicks dynamically
        document.querySelector('#dataTables-example tbody').addEventListener('click', function(event) {
            if (event.target && event.target.matches('.confirm-btn')) {
                const button = event.target;
                const orderId = button.getAttribute('data-order-id');
                confirmOrder(orderId, button);
            }
        });
    });
</script>

</body>

</html>