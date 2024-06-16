<?php
include('db.php');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><a href="../index.php"><i class="fa fa-home"></i> Homepage</a></li>
                    <li><a href="home.php"><i class="fa fa-user"></i> Admin</a></li>
                    <li><a href="payment.php"><i class="fa fa-qrcode"></i>Payment & Invoice</a></li>
                    <li>
                        <a href="opinion.php"><i class="fa fa-book"></i>Feedback And Visitors</a>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Payment Details<small></small></h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Mobile Number</th>
                                                <th>Date</th>
                                                <th>Address</th>
                                                <th>Meals</th>
                                                <th>BulkOrder</th>
                                                <th>Price</th>
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM mealbook WHERE stat='confirmed'";
                                            $result = mysqli_query($con, $sql); // $con should be $conn


                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $row['ID'];

                                                echo "<tr>";
                                                echo "<td>" . $row['ID'] . "</td>";
                                                echo "<td>" . $row['FName'] . " " . $row['LName'] . "</td>";
                                                echo "<td>" . $row['mobile'] . "</td>";
                                                echo "<td>" . $row['OrderDate'] . "</td>";
                                                echo "<td>" . $row['Addres'] . "</td>";
                                                echo "<td>" . $row['Meal'] . "</td>";
                                                echo "<td>" . $row['Bulk'] . "</td>";
                                                echo "<td>" . $row['total'] . "</td>";
                                                echo "<td><a href='print.php?pid=$id' class='btn btn-primary'><i class='fa fa-print'></i> Print</a></td>";
                                                echo "</tr>";
                                            }
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
    </div>

    <!-- JS Scripts-->
    <!-- jQuery Js -->
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
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>

</html>