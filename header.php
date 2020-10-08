<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is tha first login projectr by the php">
    <meta name=viewport content="width=device-width, initial-scale=1">
      <link rel="stylesheet"  type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php"> <img class="logo" src="img/logo.jpg" alt="logo image"></a>
             <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Portfolio</a></li>
                 <li><a href="#">About me</a></li>
                 <li><a href="#">Contact</a></li>
             </ul>
             <div class="nav-div">
             <?php
                        if(isset($_SESSION['userId']))
                        {
                        echo '           <form action="includes/logout.inc.php" method="POST">
                     
                                             <button class="btn" type="submit" name="logout-submit">Logout</button>
                                         </form>';
                        }
                        else{
                        echo '   <form action="includes/login.inc.php" method="POST">
                                          <input type="text" name="mailuid"  placeholder="E-mail/Username...">
                                    <input type="password" name="pwd"  placeholder="Password...">
                                  <button class="btn"type="submit" name="login-submit">Login</button>
                                 </form>
                                <a href="signup.php">Signup</a>';
                        }
    
                    ?>
                
             </div>
        </nav>
    </header>