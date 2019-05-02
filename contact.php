<?php

include ('header.php');
include ('function.php');

?>
<body>
<link rel="stylesheet" href="stylesheet.css">
<script>
function validateForm() {
if (document.forms[0].userName.value == "") {
    alert("Name field cannot be empty.");
	return false;
} //end if
if (document.forms[0].userLastName.value == "") {
    alert("Last Name field cannot be empty.");
    return false;
} // end if
if (document.forms[0].userEmail.value == "") {
    alert("Email field cannot be empty.");
    return false;
} // end if
alert ("Name, Last Name and Email are valid..");
return true;
} //end function validateForm
</script>
</head>
<body>
    <br>
    <br>
<?php
    

if($conn->connect_error) {
    die("connection failed: ".$conn->connect_errno.':'.$conn->connect_error);
}

  if (isset($_POST['submit'])){
       
        $sql = "INSERT INTO contact (userName, userLastName, userEmail) VALUES ('".($_POST['userName'])."', '".($_POST['userLastName'])."', '".($_POST['userEmail'])."')";
        $insert = $conn->query($sql);
        
    }
    
    $conn->close();
    ?>


    <form method="post" onsubmit="return validateForm();" action="">
       <fieldset style="width:900px; margin:auto;"> 
       <legend class="center">Subscribe for updates</legend>
<label for="userName">Name: </label><br />
<input type="text" name="userName" id="userName"><br /><br />
<label for="userLastName">Last Name: </label><br />
<input type="text" name="userLastName" id="userLastName"><br /><br />
<label for="userEmail">Email: </label><br />
<input type="text" name="userEmail" id="userEmail">
<br /><br />
<input type="submit" name="submit" id="submit"><br />
</fieldset> 
</form>
    
 
<br><br>
<fieldset style="width:900px; margin:auto;">
<legend class="center">You can also</legend>
<a href="https://twitter.com/">Follow us on Twitter</a>
<br />
<a href="https://www.facebook.com/">Add us on LinkedIn</a>
<br/>
<a href="mailto:" target="_top" >Send us an E-mail</a>
</fieldset>
<br>
</body>
</html> 	  



<?php

include ('footer.php');

?>