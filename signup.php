<?php 
  require "header.php";
?>
<main>
    <section class="signup-form">
    <h1>Signup</h1>
    <?php
    if(isset($_GET['error'])){
      if($_GET['error'] =="emptyfields"){
        echo "<p class='signerror'>Fill in all fields!</p>";
      }
      else if($_GET['error'] =="invalidemailuid" ){
        echo "<p class='signerror'>Invalid email name!</p>";
      }
      else if($_GET['error'] =="invalidemail" ){
        echo "<p class='signerror'>Invalid email name!</p>";
      }
      else if($_GET['error'] =="invaliduid" ){
        echo "<p class='signerror'>Invalid username!</p>";
      }
      else if($_GET['error'] =="passwordcheck" ){
        echo "<p class='signerror'>Password doesn't match!</p>";
      }
      else if($_GET['error'] =="usertaken" ){
        echo "<p class='signerror'>Yousername already taken!</p>";
      }
      
     
    }
    else if($_GET['signup'] =="success" ){
      echo "<p class='signsuccess'>Signup sucessfully!</p>";
    }
    
    ?>
    <form  class="form-signup"action="includes/signup.inc.php"method="POST">
        <input type="text" name="uid" placeholder="Username..."><br>
        <input type="text" name="mail" placeholder="E-mail..."><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwd-repeat" placeholder="Re-password"><br>
         <button  class="btn" type="submit"name="signup-submit">Signup</button>

    </form>

    </section>
   

</main>
<?php 
  require "footer.php";
?>