function initMap () {
    var miami = {lat: 25.7617, lng: 80.1918};
    var map = new google.maps.Map(document.getElementByID('map'), {
        zoom: 4,
        center: miami
    });


}