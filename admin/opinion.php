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
    <script>
        $(document).ready(function() {
            $("button#userInfo").click(function() {
                $.ajax({
                    url: "display.php", // Path to the server-side script to fetch user info
                    type: "GET",
                    success: function(response) {
                        $("#userInfoTable").html(response); // Update the HTML content with fetched user info
                    }
                });
            });
        });

        function showVisitors() {
            // Make an AJAX request to fetch the visitor count from the server
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the visitor count on the page
                    document.getElementById("visitorCount").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "visitor.php", true);
            xhr.send();
        }
    </script>
    <style>
        .buttons button {
            padding: 13px;
            font-size: 22px;
            border: 2px solid #09192a;
            border-radius: 49px;
            width: 13rem;
            background: #e5ebf2;
        }
        
        .buttons button:hover{
            background-color: #09192a;
            color: white;
        }
        #visitorCount{
            font-family: fantasy;
            font-size: 25px;
            color: #09192a;
        }
    </style>
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
                    <!-- <div class="col-md-12">
                        <h1 class="page-header">Visitors<small></small></h1>
                    </div> -->
                    <div class="col-md-12 buttons">
                        <button class="page-header" onclick="showVisitors()">Visitors</button>
                    </div>

                    <div class="col-md-12" id="visitorCount"></div>
                    <hr>
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
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Email Address</th>
                                                <th>Opinion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                
                                            $conn = @mysqli_connect("localhost", "root", "bc", "hotel");
                                            if (!$conn) {
                                                die("Connection failed: " . mysqli_connect_error());
                                            }
                                            $sql = "SELECT * FROM opinions";
                                            $result = mysqli_query($conn, $sql);

                                            // Check if there are any opinions
                                            if (mysqli_num_rows($result) > 0) {
                            
                                                // Output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . $row['name'] . "</td>
                                                    <td>" . $row['phone'] . "</td>
                                                    <td>" . $row['email'] . "</td>
                                                    <td>" . $row['opinion'] . "</td>
                                                    </tr>";
                                                }
                                                echo "</table>";
                                            } else {
                                                echo "No opinions found.";
                                            }
                                     
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