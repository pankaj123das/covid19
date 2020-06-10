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

<!-------jharkhand --->

<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF JHARKHAND</h3>
  </div>
  <div class="text-center mb-5">
  <button type="button" class="btn btn-outline-primary"><a href="jharkhand.php" class="btn">Refresh</a></button>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <tr>
        <th class="text-capitalize">District</th>
        <th class="text-capitalize">Confirmed</th>
        <th class="text-capitalize">Active</th>
        <th class="text-capitalize">Recovered</th>
     
      </tr>

<?php

$data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
$coronaindia = json_decode($data, true);

?>
  <tr>
    <td>Bokaro</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Bokaro']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Bokaro']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Bokaro']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Chatra</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Chatra']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Chatra']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Chatra']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Deoghar</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Deoghar']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Deoghar']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Deoghar']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Dhanbad</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dhanbad']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dhanbad']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dhanbad']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Dumka</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dumka']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dumka']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Dumka']['recovered'] ?></td>
  </tr>
  <tr>
    <td>East Singhbhum</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['East Singhbhum']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['East Singhbhum']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['East Singhbhum']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Garhwa</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Garhwa']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Garhwa']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Garhwa']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Giridih</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Giridih']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Giridih']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Giridih']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Godda</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Godda']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Godda']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Godda']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Gumla</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Gumla']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Gumla']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Gumla']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Hazaribagh</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Hazaribagh']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Hazaribagh']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Hazaribagh']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Jamtara</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Jamtara']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Jamtara']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Jamtara']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Khunti</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Khunti']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Khunti']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Khunti']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Koderma</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Koderma']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Koderma']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Koderma']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Latehar</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Latehar']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Latehar']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Latehar']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Lohardaga</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Lohardaga']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Lohardaga']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Lohardaga']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Pakur</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Pakur']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Pakur']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Pakur']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Palamu</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Palamu']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Palamu']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Palamu']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Ramgarh</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ramgarh']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ramgarh']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ramgarh']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Ranchi</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ranchi']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ranchi']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Ranchi']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Sahibganj</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Sahibganj']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Sahibganj']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Sahibganj']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Saraikela-Kharsawan</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Saraikela-Kharsawan']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Saraikela-Kharsawan']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Saraikela-Kharsawan']['recovered'] ?></td>
  </tr>
  <tr>
    <td>Simdega</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Simdega']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Simdega']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['Simdega']['recovered'] ?></td>
  </tr>
  <tr>
    <td>West Singhbhum</td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['West Singhbhum']['confirmed'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['West Singhbhum']['active'] ?></td>
    <td><?php echo $coronaindia['Jharkhand']['districtData']['West Singhbhum']['recovered'] ?></td>
  </tr>

    </table>
  </div>

</section>


<!----- footer--->

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