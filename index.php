<!DOCYYPE html>
<html>
<head>
	<title>covid19tracker</title>
	<?php include 'links/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="jharkhand.php">jharkhandcoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacorona.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="corona.php">worldcoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/unity.png" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="images/virus.png" width="50" height="50"></span> na Virous</h1>
				
			</div>
		</div>
		
	</div>
</div>
<!-------------------------- corona latest update ---------------->
<section class="corona_update">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">global covid-19 updates</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center count_style">
<!------------ php ----->
<?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data, true);

?>
		<div>
			<h1 class="count"><?php echo $coronadata['Global']['TotalConfirmed']?></h1>
			<p>Total cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadata['Global']['NewConfirmed']?></h1>
			<p>Active COVID-19 cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadata['Global']['TotalRecovered']?></h1>
			<p>Total Recovered</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadata['Global']['TotalDeaths']?></h1>
			<p>Total Death</p>
		</div>
		<div class="text-center">
		<button type="button" class="btn btn-outline-info"><a href="corona.php" class="btn">Click Me</a></button>
	    </div>
	</div>
</section>
<!----------world data ------->
<?php

$dataindia = file_get_contents('https://api.covid19india.org/data.json');
$coronadataindia = json_decode($dataindia, true);

?>

<section class="corona_update">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">india covid-19 updates</h3>
	</div>
	<div class="d-flex justify-content-around align-items-center count_style">
<!------------ php ----->
		<div>
			<h1 class="count"><?php echo $coronadataindia['statewise'][0]['confirmed']?></h1>
			<p>Total cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadataindia['statewise'][0]['active']?></h1>
			<p>Active COVID-19 cases</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadataindia['statewise'][0]['recovered']?></h1>
			<p>Total Recovered</p>
		</div>
		<div>
			<h1 class="count"><?php echo $coronadataindia['statewise'][0]['deaths']?></h1>
			<p>Total Death</p>
		</div>
		<div class="text-center">
		<button type="button" class="btn btn-outline-info"><a href="indiacorona.php" class="btn">Click Me</a></button>
	    </div>

	</div>
</section>

<section class="corona_update">
	<div class="d-flex justify-content-around align-items-center count_style">
		<div>
			<h1><?php echo $coronadataindia['statewise'][0]['lastupdatedtime']?></h1>
			<p>Last update</p>
		</div>
		<div class="text-center">
		<button type="button" class="btn btn-outline-primary"><a href="index.php" class="btn">Refresh</a></button>
	    </div>
	</div>
</section>


<!-- ********** about  ********----->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mp-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12">
			<img src="images/abut_corona.jpg" class="img-fluid">
		</div>
		<div class="col-lg-5 col-md-6 col-12">
			<h2>What is COVID-19(Corona-Virus)</h2>
			<p>COVID-19 is the infectious disease caused by the most recenty discovered coronavirus. The new virus and disease were unknown before the outbreak began in wuhan, China, in December 2019</p>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals and humans. In humans, sevral coronaviruses are known to couse respiratory infections ranging from the common cold to more severe disease such as Middle East Respiratory Syndrome (MERS) and Sever Acute Respiratory Syndrome (SARS). The most recently discovered coronavirous causes coronavirus disease COVID-19. </p>
        </div>
	</div>	
</div>
<!-----------********* corona symptoms ****************--->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mp-5 mt-4">
		<h1> Coronavirus symptoms </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cough.png" class="img-fluid" width="120" height="120">
					<figcaption> cough </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
					<figcaption> runny nose </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/fever.png" class="img-fluid" width="120" height="120">
					<figcaption> fever </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cold.png" class="img-fluid" width="120" height="120">
					<figcaption> cold </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/tiredness.png" class="img-fluid" width="120" height="120">
					<figcaption> tiredness </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/difficulty.png" class="img-fluid" width="120" height="120">
					<figcaption> difficulty breathing (sever cases) </figcaption>
				</figure>
			</div>	
		</div>
	</div>
</div>

<!-----------********* corona privention ****************--->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mp-5 mt-4">
		<h1> 6 Steps Prevention Against Coronavirus </h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/handgel.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alcohal-based hand rub</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/medicalmask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you couch or sneeze</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/distance.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/newsreport.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/man.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever,cough and difficulty breathing. seek medical care early</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-----------********* contact us ****************--->
<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mp-5 mt-4">
		<h1> Contact Us </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
 <form action="" method="POST">
  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  <div class="form-group">
  	<label>Select Symptoms</label><br>
  	
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">fever</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">diffiulty in breath</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">feeling weak</label>
  	</div>

  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
			</div>
		</div>
	</div>
</div>
<!-------- top cursor ---->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBttn"></i>
</div>

<!------footer------>
<footer class="mt-5">
	<div class="footer_style bg-dark text-white text-center container-fluid">
		<p>&copy Copyright: 2020@Pankaj Das</p>
		<div class="centerdiv">
		<a href="https://www.facebook.com/profile.php?id=100007411391260" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="https://www.linkedin.com/in/pankaj-das-41a795187/" target="_blank">
			<i class="fa fa-linkedin"></i>
		</a>
		<a href="#">
			<i class="fa fa-github"></i>
		</a>
	   </div>
	</div>
</footer>

<script type="text/javascript">
	mybutton = document.getElementById("myBttn");

	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}

</script>

<script type="text/javascript">
	$('.count').counterUp({
    delay: 10,
    time: 3000
});

</script>

</body>
</html>



<?php
/*

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$check = "";

	foreach($symp as $check1){
		$check .= $check1.",";
	}

	$insertquery = " insert into coronacase(username,email,mobile,symp,msg) values('$username','$email','$mobile','$check','$msg')";
	$query = mysqli_query($con, $insertquery);

	if($query){
	?>
	<script type="text/javascript">
		alert("inserted successfull");
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		alert("no inserted ");
	</script>
	<?php
}

}

*/

?>

