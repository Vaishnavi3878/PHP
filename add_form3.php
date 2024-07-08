<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></link>
<style>
.t2
{
   color:khaki;
   font-size:25;
}
.t1
{
   border-radius:50%;
}
.menu-bar a
{
     color:white;
     font-family:Bell MT;
     text-align:left;
     text-decoration:none;
     margin:10px;
     padding:0;
   }
.sub-menu a
{
     color:white;
     font-family:Bell MT;
     text-decoration:none;
   }
.menu-bar table td
{
   font-size:17;
}
.menu-bar table td:hover
{
   background-color:steelblue;
   border-radius:3px;
}
.sub-menu
{
   display:none;
}
.menu-bar table td:hover .sub-menu
{
   display:block;
   position:absolute;
   background:rgb(70,130,180);
   margin-top:13px;
   margin-left:-18px;
}
.menu-bar table td:hover .sub-menu ul
{
   display:block;
   margin:10px;
   list-style:none;
}
.menu-bar table td:hover .sub-menu ul li
{
   width:150px;
   padding:10px;
   background:transparent;
   text-align:left;
   font-size:13;
}
.menu-bar table td:hover .sub-menu ul li a:hover
{
   color:cyan;
}
.a1{
      color:black;
     font-family:Bell MT;
     font-size:28;
   }
.a2{
     font-family:Bell MT;
     font-size:23;
     background-color:#ddd;
     background:#f1f1f1;
     border:none;
     padding:10px;
   }
.a3{
     font-family:Bell MT;
     font-size:30;
   }
.a4{
     background-color:dodgerblue;
     color: white;
     border: none;
     font-size:25;
    }
.a5{
      align:center;
      width:55%;
      height:50%;
      padding-left:22%;
   }
</style>
</head>
<body style="background-image:url(background1.jpg)"> 
<div class="menu-bar">
<table width="85%" height="50" style="background-image:url(background1.jpg);color:white" align="left">
<tr>
<td><a href="Home.html">HOME</a>
<td><a href="About.html">ABOUT US</a>
<td><a href="Facilities.html">FACILITIES</a>
<td><a href="Activities.html">ACTIVITIES</a>
<td><a href="strength.html">STRENGTH</a>
<td><a href="committee.html">COMMITTEE</a>
<td><a href="rules.html">RULES AND REGULATIONS</a>
<td><a href="#"><i class="fa-solid fa-bars"></i></a>
<div class="sub-menu">
<ul>
  <li><a href="s_profile.html">My Profile</a></li>
  <li><a href="add_form.html">Addmission Form</a></li>
  <li><a href="leave.html">View My Form</a></li>
  <li><a href="home.html">Log Out</a></li>
</ul>
</div>
</tr>
</table>
</div>
<table width="100%">
<tr>
<img src="background2.jpg" width="100%" height="7">
</tr>
</table>
<br><br>
<div class="a5">
<form method="post" action="add_form3.php" enctype="multipart/form-data" align="center" style="background-color:white">
<br>
<h1 align="center" class="a1">DOCUMENTS</h1>
<lable for="img1" class="a3">Student Photo&nbsp&nbsp</lable>
<input type="file" name="img1" id="img1" class="a2" style="padding-right:17%" required><br><br>
<lable for="img1" class="a3">Student Photo&nbsp&nbsp</lable>
<input type="file" name="img2" id="img2" class="a2" style="padding-right:17%" required><br><br>
<input type="submit" name="s3" class="a4"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" class="a4">
<br><br>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['s3']) && isset($_FILES['img1'])){
echo "<pre>";
	print_r($_FILES['img1']);
	echo "</pre>";	
$img_name = $_FILES['img1']['name'];
	$img_size = $_FILES['img1']['size'];
	$tmp_name = $_FILES['img1']['tmp_name'];
	$error = $_FILES['img1']['error'];

	if ($error === 0) 
        {
		if ($img_size > 625000) 
                {
			$em = "Sorry, your file is too large.";
                        echo($em);
		}
                else 
                {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) 
                        {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploaded_img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                                echo("Insert Successfully");

			}
                        else 
                        {
				$em = "You can't upload files of this type";
                                echo($em);
			}
		}
	}
        else 
        {
		$em = "unknown error occurred!";
                echo($em);
	}

}else {
	header("Location: register.php");
}
?>


