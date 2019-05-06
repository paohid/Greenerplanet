
<?php

include ('header.php');
include ('function.php');

?>
<body>
<h2>Welcome to Recycle Me!</h2>
<div class="div">
  <h3>Mission Statement</h3>
  <h5>Help the environment while helping a neighbor.</h5>
</div>
<br /><br /><br />

<img src="images/recycle.png" class="displayed" alt="Mom and Child">

<p>
Florida is the paradise for many retirees and entrepeneurs. The many beautiful beaches
and different ecosystems make Florida top on the list for many tourists.</p>

<p>The sunshine state as commonly called offers non residents the vacation of their dreams.
As permanent residents is our job to protect the lives and future of all living beings. 
We can help our residents at the same time that we improve our environment. 
Say no to waste, we want your garbage.</p>


<p>We have partnered with dozens of residents who collect cans, cardboard, plastics and more 
to help the community in finding drop sites.
We provide large containers to be placed on collection sites. We are working with the city and 
many volunteers to get the garbage to the collection sites</p>
<br>
   
<p style="font-size: 18px">Find a near station or individual near you neighborhood. If a location a more than 10 miles away we can drive to you</p>

<div class="container">
      <center><h1>Drop Off Locations</h1></center>
      <div id="map"></div>
</div>      

<br><br><br>

<h3>Let keep our beautiful state clean!</h3>
<img src="images/floridabeach.jpeg" class="pcenter"/>

</body>

<script type="text/javascript">
  var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 25.76, lng: -80.19},
          zoom: 12

        });

        var marker = new google.maps.Marker({
          position:{lat: 25.8106, lng: -80.2251},
          map:map

        });

        var marker = new google.maps.Marker({
          position:{lat: 25.7701, lng: -80.2360},
          map:map

        });

        var marker = new google.maps.Marker({
          position:{lat: 25.7776, lng: -80.2302},
          map:map

        });

        var marker = new google.maps.Marker({
          position:{lat: 25.7870, lng: -80.3808},
          map:map

        });

        var marker = new google.maps.Marker({
          position:{lat: 25.7052, lng: -80.2865},
          map:map

        });
  
      }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw4HwQCzwDLv-_iQRhUcgL8ztpOeICwpA&callback=initMap" async defer>
    
</script>
    

</html>

<?php

include ('footer.php');
?>
