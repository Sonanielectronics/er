<?php

include 'connection.php' ;

// $otpverify = $_POST['otp'] ;

// $a = 1; 
// echo($a);

// run javascript with condition

if(isset($_POST['submit'])){

    $idupdate= $_GET['id'];
    $otpverify = $_POST['otp'] ;

    echo("$otpverify");

    $showquery = "SELECT * FROM 23-05-202 where id={$ids}";

    $showdata = mysqli_query($con,$showquery);

    $arrdata = mysqli_fetch_array($showdata);

    $query = "UPDATE `23-05-2022` SET `otp verify`='$otpverify' where id=$idupdate ";
   
    mysqli_query($con,$insertquery);
}

?>


<script type="text/javascript">
    <?php
 echo("Hi");
?>

  const btn = document.getElementById("button")
  btn.addEventListener("click", function() {
    if (document.getElementById("welcome1").value === $otp) {
      alert("Welcome");
    } else {
      alert("See you later");
    }
  })
</script>