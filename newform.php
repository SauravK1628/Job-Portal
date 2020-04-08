<?php 
include"popup.php";
include"alert.php";
?>
<html>
<head>
<title>
Career Point
</title>
<style type="text/css">
body
{
	font-family: sans-serif;
	background-image:url(hiring.jpg);
	background-repeat: no-repeat;
	background-size: 100% 125%;
}
div
{
	color: white;
	font-size: 18px;
	font-weight: 500;

}
input[type="text"],input[type="password"],select
{
	width: 100%;
	padding: 10px;
	border-radius: 4px;
	border: none;
	font-size: 17px;
}
input[type="submit"],input[type="reset"]
{
width: 100px;
text-align: center;
border: none;
border-radius: 4px;
padding: 7px;
color: white;
font-size: 17px;
box-shadow: 0 0px 12px black;
}
</style>
</head>
<body>
<center><label style="font-size:60px;color:#193f63;font-weight:700">Career Point</label><br>
	<div style="text-align:left;width:400px;background-color:rgba(0,0,0,0.6);border-radius:5px;padding:20px">
<center>
<form>
<label style="color:white;font-size:22px;border-bottom:2px solid white"> &nbsp Register &nbsp </label></center><br><br>
<input type="text" name="a" placeholder="Enter Your First Name" minlength="3" maxlength="30" required><br><br>
<input type="text" placeholder="Enter Your Last Name" maxlength="30" minlength="2" name="b" required><br><br>
Gender &nbsp &nbsp
<input type="radio" name="c" value="male" required>Male &nbsp 
<input type="radio" name="c" value="female" required>Female<br><br>

<input type="text" name="d" minlength="10" maxlength="10"  placeholder="Enter Your Contact Number" required><br><br>

<select name="e">
	<option selected disabled>Select State</option>
<option value="punjab">Punjab</option>
<option value="Haryana">Haryana</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Delhi">Delhi</option>
</select><br><br>

<input type="password" name="f" minlength="6" maxlength="10" placeholder="Enter Password ******" required><br><br><br>
<center><input style="background-color:orange" type="submit" value="Submit"><br>
<input style="background-color:rgb(17, 85, 204);float:right" type="reset" value="Reset"><br>
</form></center>
</div>
</center>
<script>
      $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'user-db.php',
            data: $('form').serialize(),
            success: function (data) {
            $('.loader').hide();
            $('#live').fadeIn('slow');
            $('#live').html(data);
            setTimeout(function(){
            $('#live').fadeOut('slow');
            location.href='skill.php';
            },2000);
            }
          });

        });

      });
    </script>
</body>
</html>