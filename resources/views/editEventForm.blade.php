<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE4IoA-9bevn2eIc5f-Ikd7yGNQhASebw&libraries=places,marker&callback=initMap&solution_channel=GMP_QB_addressselection_v2_cABC" async defer loading="async"></script>

<script>
    "use strict";


    const CONFIGURATION = {
        "ctaTitle": "Checkout",
        "mapOptions": { "center": { "lat": 37.4221, "lng": -122.0841 }, "fullscreenControl": true, "mapTypeControl": false, "streetViewControl": true, "zoom": 11, "zoomControl": true, "maxZoom": 22, "mapId": "" },
        "mapsApiKey": "AIzaSyDE4IoA-9bevn2eIc5f-Ikd7yGNQhASebw",
        "capabilities": { "addressAutocompleteControl": true, "mapDisplayControl": true, "ctaControl": true }
    };

    const SHORT_NAME_ADDRESS_COMPONENT_TYPES =
        new Set(['street_number', 'administrative_area_level_1', 'postal_code']);

    const ADDRESS_COMPONENT_TYPES_IN_FORM = [
        'location',
        'locality',
        'administrative_area_level_1',
        'postal_code',
        'country',
    ];

    function getFormInputElement(componentType) {
        return document.getElementById(`${componentType}-input`);
    }

    function fillInAddress(place) {
        function getComponentName(componentType) {
            for (const component of place.address_components || []) {
                if (component.types[0] === componentType) {
                    return SHORT_NAME_ADDRESS_COMPONENT_TYPES.has(componentType) ?
                        component.short_name :
                        component.long_name;
                }
            }
            return '';
        }

        function getComponentText(componentType) {
            return (componentType === 'location') ?
                `${getComponentName('street_number')} ${getComponentName('route')}` :
                getComponentName(componentType);
        }

        for (const componentType of ADDRESS_COMPONENT_TYPES_IN_FORM) {
            getFormInputElement(componentType).value = getComponentText(componentType);
        }
    }

    function renderAddress(place, map, marker) {
        if (place.geometry && place.geometry.location) {
            map.setCenter(place.geometry.location);
            marker.position = place.geometry.location;
        } else {
            marker.position = null;
        }
    }

    async function initMap() {
        const { Map } = google.maps;
        const { AdvancedMarkerElement } = google.maps.marker;
        const { Autocomplete } = google.maps.places;

        const mapOptions = CONFIGURATION.mapOptions;
        mapOptions.mapId = mapOptions.mapId || 'DEMO_MAP_ID';
        mapOptions.center = mapOptions.center || { lat: 37.4221, lng: -122.0841 };

        const map = new Map(document.getElementById('gmp-map'), mapOptions);
        const marker = new AdvancedMarkerElement({ map });
        const autocomplete = new Autocomplete(getFormInputElement('location'), {
            fields: ['address_components', 'geometry', 'name'],
            types: ['address'],
        });

        autocomplete.addListener('place_changed', () => {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert(`No details available for input: '${place.name}'`);
                return;
            }
            renderAddress(place, map, marker);
            fillInAddress(place);
        });
    }

    function validateForm() {
        // Get all input fields
        const inputs = document.querySelectorAll('input[type="text"], input[type="datetime-local"], textarea, select');

        // Check if any input field is empty
        for (let i = 0; i < inputs.length; i++) {
            if (!inputs[i].value.trim()) {
                alert("Please fill in all fields.");
                return false;
            }
        }

        // If all fields are filled, show success message
        alert("Event created successfully");
        return true;
    }
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:500&amp;lang=en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Roboto", sans-serif;
    }

    .w3-sidebar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
    }

    body {
        margin: 0;
    }

    .sb-title {
        position: relative;
        top: -12px;
        font-family: Roboto, sans-serif;
        font-weight: 500;
    }

    .sb-title-icon {
        position: relative;
        top: -5px;
    }

    .card-container {
        display: flex;
        height: 500px;
        width: 600px;
    }

    .panel {
        background: white;
        width: 300px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .half-input-container {
        display: flex;
        justify-content: space-between;
    }

    .half-input {
        max-width: 120px;
    }

    .map {
        width: 300px;
    }

    h2 {
        margin: 0;
        font-family: Roboto, sans-serif;
    }

    input {
        height: 30px;
    }

    input {
        border: 0;
        border-bottom: 1px solid black;
        font-size: 14px;
        font-family: Roboto, sans-serif;
        font-style: normal;
        font-weight: normal;
    }

    input:focus::placeholder {
        color: white;
    }

    .button-cta {
        align-self: start;
        background-color: #1976d2;
        border: 0;
        border-radius: 21px;
        color: white;
        cursor: pointer;
        font-family: "Google Sans Text", sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 27px;
        padding: 3.5px 10.5px;
    }
</style>

    
    <div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
        <a class="w3-bar-item w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
            href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <a class="w3-bar-item w3-theme-l1">
                <img src="/images/image.png" alt="Logo" style="max-width: 100px; height: auto;">
            </a>
            <a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
            <a href="joinEvent" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Join Event</a>
            <a href="createEvent" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Host Event</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
            <a href="home"class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">{{ Auth::user()->name }}</a>
        </div>
    </div>

<header class="w3-container w3-teal w3-padding-top-32">
    <h1>Update Event</h1>
</header>

<div class="w3-container w3-half w3-margin-top">

    <form action="{{ route('updateEvent', ['id' => $event->Event_ID]) }}" class="w3-container w3-card-4" method="POST" onsubmit="return validateForm()">
        @csrf
        <p>
            <input class="w3-input" type="text" name="Event_name" style="width:90%" required>
            <label>Event name</label>
        </p>
        <p>
            <textarea class="w3-input" name="Event_description" rows="4" cols="50" style="width:90%"
                required></textarea>
            <label>Event description</label>
        </p>

        <p>
            <select class="w3-select" name="Type_of_event">
                <option value="corporate">Corporate</option>
                <option value="social">Social</option>
                <option value="recreation">Recreation</option>
            </select>
            <label>Type of event</label>
        </p>

        <p>
            <input class="w3-input" type="datetime-local" name="Date_and_time">
            <label>Date and Time</label>
        </p>

        <p>
            <label>Venue</label>
            <div class="card-container">
                <div class="panel">
                    <div>
                        <img class="sb-title-icon"
                            src="https://fonts.gstatic.com/s/i/googlematerialicons/location_pin/v5/24px.svg"
                            alt="">
                        <span class="sb-title">Address Selection</span>
                    </div>
                    <input type="text" placeholder="Address" name="Address" id="location-input" />
                    <input type="text" placeholder="City" name="City" id="locality-input" />
                    <div class="half-input-container">
                        <input type="text" class="half-input" placeholder="State/Province"
                            name="State_Province" id="administrative_area_level_1-input" />
                        <input type="text" class="half-input" placeholder="Zip/Postal Code"
                            name="Zip_Postal_Code" id="postal_code-input" />
                    </div>
                    <input type="text" placeholder="Country" name="Country" id="country-input" />
                </div>
                <div class="map" id="gmp-map"></div>
            </div>
        </p>

        <p>
            <input class="w3-input" type="text" value="{{ Auth::user()->name }}"  name="Organizer_name" readonly>
            <label>Organiser name</label>
        </p>
        <input class="w3-input" type="text" name="Contact">
        <label>Contact number</label>
        <p>

        </p>

        <p>
            <button class="w3-button w3-section w3-teal w3-ripple" type="submit">Update event</button>
        </p>
    </form>

</div>

</body>

</html>
