<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Location Card</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .card {
        width: 300px;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    #map {
        width: 100%;
        height: 200px;
        border-radius: 10px;
        margin-bottom: 10px;
    }
    .timestamp {
        font-size: 12px;
        color: #666;
        text-align: center;
    }
</style>
</head>
<body>

<?php
// Sample latitude and longitude (replace with your actual values)
$latitude = 18.54315900;
$longitude = 73.87717860;

// Sample timestamp (replace with your actual timestamp logic)
$timestamp = date("Y-m-d H:i:s");

echo '<div class="card">';
echo '<div id="map"></div>';
echo '<div class="timestamp">' . $timestamp . '</div>';
echo '</div>';
?>

<!-- Include Google Maps JavaScript API -->
<script>
function initMap() {
    var location = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 12, center: location});
    var marker = new google.maps.Marker({position: location, map: map});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATMVHOvVmJmzNhIK9n8hl9isZdkOKYt2o&callback=initMap" async defer></script>

</body>
</html>
