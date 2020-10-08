<?php 
  require "header.php";
?>
<main>
    <section class="section-default"></section>
    <?php
    if(isset($_SESSION['userId']))
    {
      echo ' <p class="logout-status">You are loged in!......</p>';
    }
    else{
      echo '  <p class="login-status">You are loged out!......</p>';
    }
    
    ?>
   
  

</main>
<?php 
  require "footer.php";
?>