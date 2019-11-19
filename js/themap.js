var lat;
var lng;

function initMap(){
  var myLatLng = new google.maps.LatLng(lat,lng);
  var myOptions = {
    zoom:12,
    center: myLatLng,
    mapTyptId: google.maps.MapTypeId.ROADMAP
  };

  $('#map').fadeOut(0,function(){
    var map = new google.maps.Map(document.getElementById('map'), myOptions);
    var marker = new google.maps.Marker({
      position: myLatLng
    });
    marker.setMap(map);
    $(this).fadeIn(300);
  });

}
function fetchAndInit(){
  var pc = $('#city').val();
  $.getJSON('/API/GooglePostcode2LatLng/'+pc, function(data){
    lat = data.lat;
    lng = data.lng;
    initMap();
  });
  oldcity = pc;
}

$(document).ready(function(){
	//initial map display
	fetchAndInit();

	$('#city').change(function(){
		fetchAndInit()
	});
});