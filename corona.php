<!DOCYYPE html>
<html>
<head>
	<title>covid19tracker</title>
	<?php include 'links/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-light navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
<!------- project done start -------->
<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF WORLD</h3>
  </div>
  <div class="text-center mb-5">
	<button type="button" class="btn btn-outline-primary"><a href="corona.php" class="btn">Refresh</a></button>
	</div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th class="text-capitalize">Country</th>
        <th class="text-capitalize">TotalConfirmed</th>
        <th class="text-capitalize">TotalRecovered</th>
        <th class="text-capitalize">TotalDeaths</th>
        <th class="text-capitalize">NewConfirmed</th>
        <th class="text-capitalize">NewRecovered</th>
        <th class="text-capitalize">NewDeaths</th>
      </tr>
  </table>
  </div>

</section>


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

function fetch(){
	$.get("https://api.covid19api.com/summary",
      
      function (data){
      	var tbval = document.getElementById('tbval');

      	for(var i = 1; i<(data['Countries'].length); i++){
      		var x = tbval.insertRow();
      		x.insertCell(0);
      		tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
      		tbval.rows[i].cells[0].style.background = '#cc0000';
      		tbval.rows[i].cells[0].style.color = '#fff';

      		x.insertCell(1);
      		tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
      		tbval.rows[i].cells[1].style.background = '#f';

      		x.insertCell(2);
      		tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
      		tbval.rows[i].cells[2].style.background = '#f';

      		x.insertCell(3);
      		tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
      		tbval.rows[i].cells[3].style.background = '#f';

      		x.insertCell(4);
      		tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
      		tbval.rows[i].cells[4].style.background = '#f';

      		x.insertCell(5);
      		tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
      		tbval.rows[i].cells[5].style.background = '#f';

      		x.insertCell(6);
      		tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
      		tbval.rows[i].cells[6].style.background = '#f';


      	}
      }
	);
}


</script>


</body>
</html>










<?php
/*
$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data);

echo "<pre>";

print_r($coronadata);

echo "</pre>";

#echo " pankaj das";
*/
?>