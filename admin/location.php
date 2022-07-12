<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['pgasaid']==0)) {
    header('location:logout.php');
} else{

    ?>
    <!DOCTYPE html>
    <html>
    <body>

    <h1>My First Google Map</h1>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script>
        function myMap() {
            const marker = new google.maps.Marker({
                position: 31.5774744+","+74.3704655,
                map: map,
            });
            var mapProp= {
                center:new google.maps.LatLng(31.5774744,74.3704655),
                zoom:12,
                marker
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOhXakJ7moQu1f1BWVwmzm-wLdBvf5toQ&callback=myMap"></script>

    </body>
    </html>

<?php }  ?>