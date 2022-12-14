<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $trid       = $_POST["trid"];
    $cname       = $_POST["cname"];
    $av  = $_POST["av"];
    $st = $_POST["st"];
    $ft  = $_POST["ft"];
    $date   = $_POST["date"];
    $dp     = $_POST["dp"];
    $ttype     = $_POST["ttype"];
    $type     = $_POST["type"];
    $tp = $_POST["tp"];
    $sql2       = "INSERT INTO `transport` (`Transport_ID`, `Company`, `Available_Tickets`, 
    `Start_Dest`, `Final_Dest`, `Journey_date`, `Leave_Time`, `Transport_Type`,`Type`,`Ticket_Price`)
     VALUES ('$trid', '$cname', '$av', '$st', '$ft', '$date', '$dp', '$ttype','$type','$tp');";
    $result   = mysqli_query($conn, $sql2);
}
?>
<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/custom.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Confirmation</title>

</head>
<body class="">

  <?php




?>

    <!-- Main Section-->
    <section class="mt-0 ">
        

        <div class="container mt-5">

            <!-- Order Success Checkmark -->
            <div class="checkmark-wrapper mt-5">
                <span class="checkmark"></span>
            </div>
            <!-- Order Success Checkmark -->

            <!-- Order Success Message -->
            <div class="my-5 text-center min-vh-50">
                <h2 class="display-3 mb-4">Transport Added</h2>
                <p class="lead fw-bolder mx-auto col-6">Added Transport ID: <span class="fw-bold"><?php echo $trid ?></span></p>
                <a href="http://localhost/Project370/admin" class="btn btn-dark mt-4">Return to Dashboard</a>
            </div>
            <!-- /Order Success Message -->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    
    <!-- / Footer-->  

    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/custom.js"></script>

</body>

</html>
