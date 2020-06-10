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
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF INDIA</h3>
  </div>
  <div class="text-center mb-5">
  <button type="button" class="btn btn-outline-primary"><a href="indiacorona.php" class="btn">Refresh</a></button>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <tr>
        <th class="text-capitalize">Lastupdatedtime</th>
        <th class="text-capitalize">State</th>
        <th class="text-capitalize">Confirmed</th>
        <th class="text-capitalize">Active</th>
        <th class="text-capitalize">Recovered</th>
        <th class="text-capitalize">Deaths</th>
      </tr>
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronaindia = json_decode($data, true);

$statescount = count($coronaindia['statewise']);

$i=1;
while($i < $statescount){

?>
  <tr>
    <td><?php echo $coronaindia['statewise'][$i]['lastupdatedtime'] ?></td>
    <td><?php echo $coronaindia['statewise'][$i]['state'] ?></td>
    <td><?php echo $coronaindia['statewise'][$i]['confirmed'] ?></td>
    <td><?php echo $coronaindia['statewise'][$i]['active'] ?></td>
    <td><?php echo $coronaindia['statewise'][$i]['recovered'] ?></td>
    <td><?php echo $coronaindia['statewise'][$i]['deaths'] ?></td>

  </tr>

<?php

  $i++;
}


?>
    </table>
  </div>

</section>

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

</body>
</html>