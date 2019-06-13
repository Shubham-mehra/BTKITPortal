<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>B.T.Kumaon Institute of Technology || https:// www.kecua.ac.in</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/stylus.css" rel="stylesheet">

<link href="css/responsive.css" rel="stylesheet">
<link rel="icon"  href="images/favicon.png" type="image/x-icon">

</head>
<style>
.marquee {
  background-image: url(images/2.jpg);
  width:600px;
  height: 500px;
  -webkit-animation: marquee 4s infinite linear;
  margin: 40px;
  border-radius:10px;
  outline:1px blue;
}

@-webkit-keyframes marquee {
  0% {
    background-position: 0;
  }

  100% {
    background-position: -1190px;
  }
}

</style>
	
<!-- page wrapper -->
<body class="page-wrapper" style="background-image: url(images/background.png);-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

  
    <!-- .preloader -->
    

    
    <!-- main header area -->
		<?php
			include 'headertop.php';
		?>
		
		<?php
			include 'header.php';
		?>
	
	
    <!-- end main header area -->

	<div class = "container" style = "margin-top:200px; >
		<div class = "row" >
			<div class = "col-md-6 col-sm-12 col-xs-12" style="background: rgba(128, 128, 128, 0.7); border-radius:20px;  color:white;"><br><br>
				<form action="libraryentry.php" method="POST" enctype="multipart/form-data">
								<center><label style="font-size:20px; color:white;">Student Registration</label></center>
								<div class="form-group">
									<label for="Sname">Student Name:</label><input type="text" class="form-control" id="Sname" name="studentName" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="Rno">Roll Number:</label>
									<input type="number" class="form-control" id="Rno" name="rollNo"placeholder="Roll Number of the student">
								</div>
								<div class="form-group">
									<label for="Rno">Father's Name:</label>
									<input type="text" class="form-control" name="fatherName"id="Rno" placeholder="Father's Name">
								</div>
								<div class="form-group">
									<label for="Rno">Mother's Name:</label>
									<input type="text" class="form-control" name="motherName"id="Rno" placeholder="Mother's name">
								</div>
								<div class="form-group">
										<label for="Branch">Branch:</label>
										<select name="studentBranch" class="form-control" id="Branch">
											<option class="active">select option</option>
											<option class="active">Computer Science and Engineering</option>
											<option value="Civil Engineering">Civil Engineering</option>
											<option value="Electical and Communication Engineering">Electical and Communication Engineering</option>
											<option value="Electical Engineering" >Electical Engineering</option>
											<option value="Bio-Chemical Engineering">Bio-Chemical Engineering</option>
											<option value="Chemical Engineering">Chemical Engineering</option>
											<option value=" Machanical Engineering"> Machanical Engineering</option>
										</select>
								</div>
								<div class="form-group">
										<label for="semester">Semester:</label>
										<select  name="studentSemester"class="form-control" id="semester">
											<option class="active">select option</option>
											<option value="1">I<sub>st</sub> Semester</option>
											<option value="2">II<sub>nd</sub> Semester</option>
											<option value="3">III<sub>rd</sub> Semester</option>
											<option value="4">IV<sub>th</sub> Semester</option>
											<option value="5">V<sub>th</sub> Semester</option>
											<option value="6">VI<sub>th</sub> Semester</option>
											<option value="7">VII<sub>th</sub> Semester</option>
											<option value="8">VIII<sub>th</sub> Semester</option>
										</select>
								</div>
								
								
								
								
								<div >
									<label>Choose Profile:</label>
           
										<div class="file-loading">
											<input name="profilePicture" id="profile-picture"  type="file" required>
										</div>
									
									<div class="hint"><small>Select file < 1500 KB</small></div>
								</div>
								
								
								
								
								
								
								
								
								<div class="form-group">
										<label for="year">Year:</label>
										<select name="studentYear" class="form-control" id="year">
											<option class="active">select option</option>
											<option value="1">1st </option>
											<option value="2">2nd </option>
											<option value="3">3rd</option>
											<option value="4">4th</option>
										</select>
								</div>
								<div class="form-group">
										<label for="sel1">Gender:</label>
										<select  name="studentGender"class="form-control" id="sel1">
											<option class="active">select option</option>
											<option>Male</option>
											<option>Female</option>
											<option>Others</option>
										</select>
								</div>
								
								
								<div class="form-group">
									<label for="Rno">DOB:</label>
									<input type="date"  name="studentDob"class="form-control" id="bday" placeholder="DOB">
								</div>
								<div class="form-group">
									<label for="Rno">Email:</label>
									<input type="email" name="studentEmail" class="form-control" id="Rno" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="Rno">Contact:</label>
									<input type="text" name="studentContact" class="form-control" id="Rno" placeholder="Contact no">
								</div>
								<div class="form-group">
									<label for="Rno">Postal Address:</label>
									<input type="text" name="postalAddress"class="form-control" id="Address" placeholder="Address">
								</div>
							
								
								<button type="submit" class="btn btn-info">Submit</button>
					</form><br><br>
			</div>
		
			<div class = "col-md-6 col-sm-12 col-xs-12" style="margin-top:-34px;">
			<div id="marquee" class="marquee">
			<center>
			<br>
		<!-- this is crousal code-->
		<div class="carousel">
  <input type="checkbox" class="faux-ui-facia"> 
  <div class="slide" slide="5" annot="This is the fifth slide title. Photo by David Marcu.">
    <img src="https://ununsplash.imgix.net/uploads/141223808515744db9995/3361b5e1?q=75&fm=jpg&w=602" alt="Slide 5">
  </div>
  
  
  <input type="checkbox" class="faux-ui-facia"> 
  <div class="slide" slide="4" annot="This is the fourth slide title. Photo by Ryan Lum.">
    <img src="https://unsplash.imgix.net/photo-1415356838286-df6fd593e8b3?q=75&fm=jpg&w=600" alt="Slide 4">
  </div>

  <input type="checkbox" class="faux-ui-facia"> 
  <div class="slide" slide="3" annot="This is the third slide title. Photo by Tomasz Paciorek.">
    <img src="https://ununsplash.imgix.net/reserve/JaI1BywIT5Or8Jfmci1E_zakopane.jpg?q=75&fm=jpg&w=600"  alt="Slide 3">
  </div>

  <input type="checkbox" class="faux-ui-facia">
  <div class="slide" slide="2" annot="This is the second slide title. Photo by S Charles.">
    <img src="https://ununsplash.imgix.net/uploads/1413387158190559d80f7/6108b580?fit=crop&fm=jpg&q=75&w=600"  alt="Slide 2">
  </div>

  <input type="checkbox" class="faux-ui-facia">

  <div class="slide" slide="1" annot="First slide title. Photo by Forrest Cavale.">
    <img src="https://ununsplash.imgix.net/uploads/1413399939678471ea070/2c0343f7?q=75&fm=jpg&w=601" alt="Slide 1">
  </div>
   
  <div class="counter" count="5"> / 5</div>
 
</div>
<!-- end of the crousla code _-->
		
		
		
					</center>
					<br>
					<br><br>
					<center><div style="align:bottom;">
					<button class="btn btn-info">Permission
					</button>&nbsp &nbsp &nbsp <button class="btn btn-info">Detail
					</button></center>
					</div>
					</div>
					
					
					
					
				
			
			</div>
			
			
		</div>
		</div>
	
		
	
	<br>
	

	

		

    
    <!-- main footer area -->
    
    <!-- footer bottom -->
      <?php
	   include 'footer1.php';
	   ?>
		      <?php
	   include 'footer2.php';
	   ?>

    
    
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->


<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script src="js/html5lightbox/html5lightbox.js"></script> 
<script src="js/circle-progress.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.appear.js"></script>

<!-- revolution -->
<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="vendor/revolution/revolution.extension.migration.min.js"></script>

<script src="js/script.js"></script>


<!-- End of .page_wrapper -->
</body>
</html>
