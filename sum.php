<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<form action="" method="post">

feild1<input id="myTextBox" type="text" name="no1"><br>

feild2<input id="myTextBoxs" type="text" name="no2"><br>
<input type="submit"  name="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$sum="";
if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;
	
}
?>

Result:<input type="text"  value="<?php echo $sum; ?>">	
<script>
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#myTextBox").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
		alert("Enter only numeric value");
               return false;
    }
   });
});

$(document).ready(function () {
  //called when key is pressed in textbox
  $("#myTextBoxs").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
alert("Enter only numeric value");
               return false;
    }
   });
});
</script>