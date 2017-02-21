var locations = [
  ['<span class="fifa">THREE<em>38</em> inc</span><br><p>#323, Defence Avenue <br> K Narayanpura,<br> Bengaluru - 77</p>', 13.056934,77.644260, 1]
                        // 13.0570833,77.642728
];

var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    scrollwheel: false,
    styles: [{
                "featureType": "landscape",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 65
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "poi",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 51
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 30
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 40
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -100
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#ffff00"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -97
                    }
                ]
            }],
        center: new google.maps.LatLng(13.057085,77.6427203)
    });

    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    var markers = new Array();

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
      markers.push(marker);
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    function AutoCenter() {
      var bounds = new google.maps.LatLngBounds();
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      map.fitBounds(bounds);
    }
    //AutoCenter();








/*

Add A CUSTOM CONTENT IN INFO WINDOW AND APPEAR

IT WHEEN CLICK ON A MARKER

ABOVE CODE REF: http://stackoverflow.com/questions/3059044/google-maps-js-api-v3-simple-multiple-marker-example?rq=1
BELLOW CODE REF: http://www.sanwebe.com/2013/10/google-map-v3-markers-and-infowindow-with-jquery

*/

// $(document).ready(function() {
// var mapCenter = new google.maps.LatLng(47.6145, -122.3418); //Google map Coordinates
// var map;
// map_initialize(); // load map
// function map_initialize(){
//     //Google map option
//     var googleMapOptions =
//     {
//         center: mapCenter, // map center
//         zoom: 17, //zoom level, 0 = earth view to higher value
//         panControl: true, //enable pan Control
//         zoomControl: true, //enable zoom control
//         zoomControlOptions: {
//         style: google.maps.ZoomControlStyle.SMALL //zoom control size
//         },
//         scaleControl: true, // enable scale control
//         mapTypeId: google.maps.MapTypeId.ROADMAP // google map type
//     };
//     map = new google.maps.Map(document.getElementById("google_map"), googleMapOptions);

//     //##### drop a new marker on right click ######
//     google.maps.event.addListener(map, 'rightclick', function(event) {
//         var marker = new google.maps.Marker({
//             position: event.latLng, //map Coordinates where user right clicked
//             map: map,
//             draggable:true, //set marker draggable
//             animation: google.maps.Animation.DROP, //bounce animation
//             title:"Hello World!",
//             icon: "http://PATH-TO-YOUR-WEBSITE-ICON/icons/pin_green.png" //custom pin icon
//         });

//         //Content structure of info Window for the Markers
//         var contentString = $('<div class="marker-info-win">'+
//         '<div class="marker-inner-win"><span class="info-content">'+
//         '<h1 class="marker-heading">New Marker</h1>'+
//         'This is a new marker infoWindow'+
//         '</span>'+
//         '<br /><button name="remove-marker" class="remove-marker" title="Remove Marker">Remove Marker</button></div></div>');

//         //Create an infoWindow
//         var infowindow = new google.maps.InfoWindow();

//         //set the content of infoWindow
//         infowindow.setContent(contentString[0]);

//         //add click listner to marker which will open infoWindow
//         google.maps.event.addListener(marker, 'click', function() {
//                 infowindow.open(map,marker); // click on marker opens info window
//         });


//         //###### remove marker #########/
//         var removeBtn   = contentString.find('button.remove-marker')[0];
//         google.maps.event.addDomListener(removeBtn, "click", function(event) {
//             marker.setMap(null);
//         });
//     });
// }
// });
