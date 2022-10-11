<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Krishi Life</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style= "display:none;z-index:2;background-color: cadetblue;width:20%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#crop" onclick="w3_close()" class="w3-bar-item w3-button">Crop Information</a>
  <a href= "logout.php"onclick="w3_close()" class="w3-bar-item w3-button">>Logout</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-green w3-xlarge" style="max-width:1400px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class=" w3-right w3-padding-16"><a href="mailto:cse038.tanjim@gmail.com"><p style="font-size:20px;">Mail</a></p></div>
    

    <div class="w3-center w3-padding-16"><b> ফসলের তথ</b> </div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="background-color: rgb(14, 233, 160);max-width:1300px;margin-top:80px">

  <!-- First Photo Grid-->
  
  <div class="w3-slide w3-row-padding w3-padding-16 w3-center" id="crops">
    <div class="w3-quarter">
      <img src="/Tomato.jpg" alt="Tomato" style="width: 150px;height: 150px;">
      <h3>Tomato </h3>
      <p>Tomato can be grown on a wide range of soils from sandy to heavy clay. However, well-drained, sandy or red loam soils rich in organic matter with a pH range of 6.0-7.0 are considered as ideal. Tomato is a warm season crop.<a href="https://en.wikipedia.org/wiki/Tomato"style="color:blue;">More</a></p>
     
    </div>
    <div class="w3-quarter">
      <img src="Eggplant.jpg" alt="Eggplant
      " style="width: 150px;height: 150px;">
      <h3>Eggplant</h3>
    <p>Eggplant (US, Canada, Australia), aubergine (UK, Ireland) or brinjal (Indian subcontinent, Singapore, Malaysia, South Africa) is a plant species in the nightshade family Solanaceae. 
      Vitamin C: 3% 2.2 mg
      Phosphorus: 3% 24 mg
      Calcium: 1% 9 mg
      Minerals: Quantity %DV†<a href="https://en.wikipedia.org/wiki/Eggplant#:~:text=Eggplant%20(US%2C%20Canada%2C%20Australia,worldwide%20for%20its%20edible%20fruit."style="color:blue;">More</a></p>
    </div>
    <div class="w3-quarter">
      <img src="cherry.jpg" alt="Cherries" style="width: 150px;height: 150px;">
      <h3>Cherries</h3>
      <p>Cherry fruits are grown successfully at the height of 2500 meters above sea level. In India, cherry commercial cultivation is carried in the states of Himachal Pradesh, Jammu & Kashmir and Uttar Pradesh due to suitable climate. An annual rainfall of 100 to 125 cm is required for its growth.<a href="https://www.agrifarming.in/cherry-fruit-cultivation#:~:text=Cherry%20fruits%20are%20grown%20successfully,is%20required%20for%20its%20growth."style="color:blue;">More</a></p>
      
    </div>
    <div class="w3-quarter">
      <img src="chili.jpg" alt="Green Chilli" style="width: 150px;height:150px;">
      <h3>Green Chilli</h3>
      <p>The green Chilli crops can be sown in the months of July and August as rabi crop and in October and November as Rabi Chilli crop. Sowing is done in transplanting method where the seeds are transplanted from nursery seedbed after 25 days after sowing.<a href="https://www.agrifarming.in/chilli-farming-profit-cost-project-report-pepper#:~:text=The%20green%20Chilli%20crops%20can,after%2025%20days%20after%20sowing."style="color:blue;">More</a></p>
    </div>
  </div>
  
   <!-- Second Photo Grid-->
  <!-- Sidebar -->
  <div class="w3-slide w3-row-padding w3-padding-16 w3-center" id="crops">
    <div class="w3-third">
      <img src="califlower.jpg" alt="Cauliflower" style="width: 150px;height: 150px;">
      <h3>Cauliflower </h3>
      <p>Cauliflower is one of several vegetables in the species Brassica oleracea in the genus Brassica, which is in the Brassicaceae (or mustard) family.
        Origin: Northeast Mediterranean
        Cultivar group: Botrytis Group
        Cultivar group members: Many; see text
        Species: Brassica oleracea<a href="https://en.wikipedia.org/wiki/Cauliflower"style="color:blue;">More</a></p>
     
    </div>
    <div class="w3-third">
      <img src="cabbage.jpg" alt="cabbage" style="width: 150px;height: 150px;">
      <h3>Cabbage</h3>
      <p>It is leafy green or purple plant grown as annual vegetable crop. These are rich source of vitamin A and C also it contains minerals like phosphorus, potassium, calcium, sodium and iron. Cabbage can be eaten as raw as well as in cook form. In India, cabbage is grown mainly in winter in the plains region.<a href="https://www.apnikheti.com/en/pn/agriculture/horticulture/vegetable-crops/cabbage#:~:text=It%20is%20leafy%20green%20or,winter%20in%20the%20plains%20region."style="color:blue;">More</a></p>
      
    </div>
    <div class="w3-third">
      <img src="capsicum.jpg" alt="ca" style="width: 150px;height:150px;">
      <h3>Green Capsicum</h3>
      <p>Capsicum is a genus of flowering plants in the nightshade family Solanaceae, native to the Americas, cultivated worldwide for their chili pepper or bell pepper fruit<a href="https://en.wikipedia.org/wiki/Capsicum"style="color:blue;">More</a></p>
    </div>
  </div>
  
  

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#about" class="w3-bar-item w3-button w3-button">2</a>
      <a href="second.html" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3><p style="font-size:30px;"><b> About</b></h3><br>
    <img src="vegies.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>It's all about farming</b></h4>
      <h6><i>"Farming looks mighty easy when your plow is a pencil, and you're a thousand miles from the corn field.”</i></h6>
      <p>Agriculture is the art and science of cultivating the soil, growing crops and raising livestock. It includes the preparation of plant and animal products for people to use and their distribution to markets. Agriculture provides most of the world's food and fabrics.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="blg1.png" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">QuickTrials</span><br>
          <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi6lre-3ar5AhV-nUsFHaxKBVYYABABGgJzZg&ohost=www.google.com&cid=CAESbOD21hkrMa0N88uFobuwlc2NC6Jk8xU3t3PGzeI1wmYEoNmXPYFrVCPvjMVyMCip-kHSP0aIMfkvqhGGrTrwkTGrhOXr95qtNAsSoHLAecUSd63rDn4aLORyacN_CHsUE1K_y62pb_amBvQ9cQ&sig=AOD64_1NfyTSBrEgcuHrHFiUIPkuoPiMLA&q&adurl&ved=2ahUKEwiNx7C-3ar5AhULR2wGHSefDUUQ0Qx6BAgEEAE"><p style="font-size:15px;">Agriculture - Fertiliser trials</a></p></span>
        </li>
        <li class="w3-padding-16">
          <img src="blog1.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">FoodTank</span><br>
          <span><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi6lre-3ar5AhV-nUsFHaxKBVYYABADGgJzZg&ohost=www.google.com&cid=CAESbOD21hkrMa0N88uFobuwlc2NC6Jk8xU3t3PGzeI1wmYEoNmXPYFrVCPvjMVyMCip-kHSP0aIMfkvqhGGrTrwkTGrhOXr95qtNAsSoHLAecUSd63rDn4aLORyacN_CHsUE1K_y62pb_amBvQ9cQ&sig=AOD64_0VdgqA9fnyxyuRuIbfLC8NFS3ChA&q&adurl&ved=2ahUKEwiNx7C-3ar5AhULR2wGHSefDUUQ0Qx6BAgFEAE"> <p style="font-size:15px;">Agriculture News - Articles, Photos & Events - FoodTank.com</a></p></span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Soil</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"></span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
    <div class="w3-third w3-serif">
      <h3>Contacts</h3>
      <img src="whatsapp1.jpg" class="w3-left w3-margin-right" style="width:16px">
            <span class="w3-small w3 w3-margin-right">         +8801759388572</span><br>
            <img src="whatsapp1.jpg" class="w3-left w3-margin-right" style="width:16px">
            <span class="w3-small w3 w3-margin-right">         +8801938096200</span><br>
  
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
