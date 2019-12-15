<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ΟΑΣΑ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/header_footer.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="../../index.php"><img src="../images/logo.png" alt="Αρχική"></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li ><a href="../../index.php">Υπολογισμός Διαδρομής</a></li>
                    <li><a href="./coming_soon.php">Εισιτήρια</a></li>
                    <li><a href="./coming_soon.php">Δρομολόγια</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Πληροφορίες</a>
                            <div class="dropdown-content">
                                <a href="./coming_soon.php">Σταθμοί</a>
                                <a href="./amea.php">ΑμεΑ</a>
                                <a href="./coming_soon.php">Νέα & Ανακοινώσεις</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn">Επικοινωνία</a>
                            <div class="dropdown-content">
                                <a href="./coming_soon.php">Επικοινωνία με τον ΟΑΣΑ</a>
                                <a href="./coming_soon.php">Συχνές Ερωτήσεις</a>
                                <a href="./coming_soon.php">Σχετικά με τον ΟΑΣΑ</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="header-right">
                <div class="user-access">
                    <a href="./coming_soon.php">Εγγραφή/</a>
                    <a href="./coming_soon.php">Σύνδεση</a>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <!-- <section class="hero-section set-bg2">
    </section> -->
    <!-- Hero Section End -->

    <!-- Cards Section -->
    <div class="container-fluid" style="padding: 14rem 8rem 12rem 8rem; background-color: #1d1d1d; background-position: center center;background-repeat: no-repeat; background-image: url('../images/login-background.jpg')">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="cardlogin">
                        <div class="card-header" style="color: white">
                            <h3>Sign In</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- <span style="color:white">ATH.ENA Card Number*</span> -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card" title="ATH.ENA Card Number"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" placeholder="ATH.ENA Card Number" pattern=".{16}" required title="ATH.ENA Card has 16 digits" >
                                    
                                </div>
                                <!-- <span style="color:white">Password*</span> -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key" title="Password"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Remember Me
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Don't have an account?<a href="#">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
	            </div>
            </div>
		</div>
    </div>
    <!-- Cards -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="newslatter-form">
                        <input type="text"
                            placeholder="Εισάγετε το email σας για να λαμβάνετε ενημερώσεις σχετικά με τον ΟΑΣΑ">
                        <button id="button" type="submit">Εγγραφή</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h4>Usefull Links</h4>
                        <ul>
                            <li>About us</li>
                            <li>Testimonials</li>
                            <li>How it works</li>
                            <li>Create an account</li>
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="footer-widget">
                        <h4>Usefull Links</h4>
                        <ul>
                            <li>About us</li>
                            <li>Testimonials</li>
                            <li>How it works</li>
                            <li>Create an account</li>
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="last">
                            <h4>Social Media</h4>
                            <ul>
                                <li>Instagram</li>
                                <li>Facebook</li>
                                <li>YouTube</li>
                                <li>Twitter</li>
                                <li>SoundCloud</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <img src="../images/email_subscription.png" alt="Email Subscription">
            <h3>Ευχαριστούμε για την εγγραφή!</h3>
        </div>
    </div>

</body>

<script>
    document.getElementById('button').addEventListener('click',
    function() {
        document.querySelector('.bg-modal').style.display = 'flex';
    });

    document.querySelector('.close').addEventListener('click',
    function() {
        document.querySelector('.bg-modal').style.display = 'none';
    });
</script>

</html>

<?php
    print "hey\n";
    echo "hello?";
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="oasa";
    
    $connection=new mysqli($servername,$username,$password,$dbname);
    
    if($connection->connect_error)
    {
        die("Connection failed: ".$connection->connect_error);
    }
    print "ok";

    $sql="SELECT * FROM users";
    $result=$connection->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $connection->close();
?>