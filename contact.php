<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>UBUNTU</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
    <!-- Add your head content here -->
</head>

<body class="main-layout contact-page">
    <!-- Add your header content here -->

    <div class="contactbg pt-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contacttitlepage">
                        <h2>THANK YOU FOR CONTACTING!!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="address">

                    <?php
                    // Check if the form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Get form data
                        $name = $_POST["Name"]??'';
                        $phone = $_POST["Phone"]??'';
                        $email = $_POST["Email"]??'';
                        $message = $_POST["Message"]??'';

                        // Validate form fields (you can add more validation if needed)
                        if (empty($name) || empty($email) || empty($message)) {
                            echo '<p class="text-danger">Please fill in all required fields.</p>';
                        } else {
                            // Add your email processing logic here
                            // For demonstration purposes, we'll just print the form data
                    
                            // Replace the following line with your email processing logic
                            echo '<p class="text-success">Thank you for your message. We have received your details:</p>';
                            echo '<p>Name: ' . htmlspecialchars($name) . '</p>';
                            echo '<p>Phone: ' . htmlspecialchars($phone) . '</p>';
                            echo '<p>Email: ' . htmlspecialchars($email) . '</p>';
                            echo '<p>Message: ' . htmlspecialchars($message) . '</p>';
                        }
                    }
                    ?>

               
    <!--  footer -->

    <!-- Add your footer content here -->

    <!-- Javascript files-->
    <!-- Add your script imports here -->
</body>

</html>