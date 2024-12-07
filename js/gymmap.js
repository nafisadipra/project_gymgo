document.addEventListener("DOMContentLoaded", function () {
    const map = L.map('map').setView([0, 0], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let currentMarker;

    function addMarker(coords) {
        if (currentMarker) {
            currentMarker.setLatLng(coords);
        } else {
            currentMarker = L.marker(coords, { draggable: true }).addTo(map);
            currentMarker.bindPopup('You selected this location.').openPopup();
        }

        updateCoordinates(coords);

        currentMarker.on('dragend', () => {
            const { lat, lng } = currentMarker.getLatLng();
            updateCoordinates([lat, lng]);
        });
    }

    function updateCoordinates([lat, lng]) {
        document.getElementById('latitude').textContent = lat.toFixed(6);
        document.getElementById('longitude').textContent = lng.toFixed(6);
        fetchAreaName(lat, lng);
        console.log(`Selected Coordinates: Latitude ${lat}, Longitude ${lng}`);
    }

    async function fetchAreaName(lat, lng) {
        const response = await fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`);
        const data = await response.json();

        const areaName = data.display_name || 'Unknown location';
        document.getElementById('areaName').textContent = areaName;
        console.log(`Selected Area: ${areaName}`);
    }

    document.getElementById('areaInput').addEventListener('input', async (event) => {
        const query = event.target.value;
        const suggestionsList = document.getElementById('suggestions');

        if (query.length < 3) {
            suggestionsList.innerHTML = '';
            return;
        }

        const response = await fetch(`https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(query)}&format=json&addressdetails=1`);
        const results = await response.json();

        suggestionsList.innerHTML = '';
        results.forEach((result) => {
            const li = document.createElement('li');
            li.textContent = result.display_name;
            li.classList.add('list-group-item');
            li.addEventListener('click', () => selectSuggestion(result));
            suggestionsList.appendChild(li);
        });
    });

    function selectSuggestion(result) {
        const coords = [parseFloat(result.lat), parseFloat(result.lon)];
        addMarker(coords);
        map.setView(coords, 15);
        document.getElementById('suggestions').innerHTML = '';
        document.getElementById('areaInput').value = result.display_name;
    }

    map.on('click', (e) => {
        const coords = [e.latlng.lat, e.latlng.lng];
        addMarker(coords);
    });

    function displayGymDetails(gym) {
        const sec1 = document.querySelector('.sec1');
        sec1.innerHTML = `
            <div class="gym-details" style="background-image: url(${gym.image}); background-size: cover;">
                <h3>${gym.name}</h3>
                <p>${gym.address}</p>
            </div>
        `;
    }

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;

                map.setView([lat, lon], 12);

                const gymIcon = L.icon({
                    iconUrl: '../img/dumbbell-gym-svgrepo-com.svg',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -32]
                });
                
                const gyms = [
                    { 
                        coords: [23.7808, 90.4195], 
                        name: "Fitness Club Banani", 
                        address: "Banani, Dhaka", 
                        image: "../images/g3.png" 
                    },
                    { 
                        coords: [23.7980, 90.4134], 
                        name: "Muscle Mania Gym", 
                        address: "Gulshan, Dhaka", 
                        image: "../images/g2.png" 
                    },
                    { 
                        coords: [23.8093, 90.4267], 
                        name: "Dhaka Gym Center", 
                        address: "Badda, Dhaka", 
                        image: "../images/g4.png" 
                    },
                    { 
                        coords: [23.8179, 90.3654], 
                        name: "Flex Gym Dhanmondi", 
                        address: "Dhanmondi, Dhaka", 
                        image: "../images/risen-wang-20jX9b35r_M-unsplash.jpg" 
                    },
                    { 
                        coords: [23.7762, 90.3847], 
                        name: "Workout Zone Mohammadpur", 
                        address: "Mohammadpur, Dhaka", 
                        image: "../images/g5.png" 
                    },
                    { 
                        coords: [23.7941, 90.4072], 
                        name: "Gymplex Gulshan", 
                        address: "Gulshan 1, Dhaka", 
                        image: "../images/g6.png" 
                    },
                    { 
                        coords: [23.7683, 90.4004], 
                        name: "Pulse Fitness Center", 
                        address: "Shahbagh, Dhaka", 
                        image: "../images/g7.png" 
                    },
                    { 
                        coords: [23.8144, 90.4248], 
                        name: "Supreme Gym Badda", 
                        address: "Middle Badda, Dhaka", 
                        image: "./Images/gym8.jpg" 
                    },
                    { 
                        coords: [23.7456, 90.3742], 
                        name: "Elite Fitness Studio", 
                        address: "Lalmatia, Dhaka", 
                        image: "./Images/gym9.jpg" 
                    },
                    { 
                        coords: [23.7927, 90.4262], 
                        name: "SkyFit Gym", 
                        address: "Baridhara, Dhaka", 
                        image: "./Images/gym10.jpg" 
                    },
                    { 
                        coords: [23.7341, 90.3923], 
                        name: "Dynamic Gym Mirpur", 
                        address: "Mirpur 10, Dhaka", 
                        image: "./Images/gym11.jpg" 
                    },
                    { 
                        coords: [23.7605, 90.3762], 
                        name: "Infinity Gym", 
                        address: "Science Lab, Dhaka", 
                        image: "./Images/gym12.jpg" 
                    },
                    { 
                        coords: [23.7507, 90.3708], 
                        name: "PrimeFit Dhanmondi", 
                        address: "Dhanmondi 32, Dhaka", 
                        image: "./Images/gym13.jpg" 
                    },
                    { 
                        coords: [23.7938, 90.4090], 
                        name: "Vitality Zone Gym", 
                        address: "Tejgaon, Dhaka", 
                        image: "./Images/gym14.jpg" 
                    },
                    { 
                        coords: [23.7734, 90.4121], 
                        name: "Champion Fitness Banani", 
                        address: "Banani, Dhaka", 
                        image: "./Images/gym15.jpg" 
                    },
                    { 
                        coords: [23.7272, 90.4108], 
                        name: "The Fit Space", 
                        address: "Motijheel, Dhaka", 
                        image: "./Images/gym16.jpg" 
                    },
                    { 
                        coords: [23.7876, 90.4305], 
                        name: "Baridhara Gym Hub", 
                        address: "Baridhara DOHS, Dhaka", 
                        image: "./Images/gym17.jpg" 
                    },
                    { 
                        coords: [23.7328, 90.3714], 
                        name: "Oxygen Gym Lalmatia", 
                        address: "Lalmatia, Dhaka", 
                        image: "./Images/gym18.jpg" 
                    },
                    { 
                        coords: [23.7632, 90.4281], 
                        name: "Ripped Fitness Center", 
                        address: "Khilgaon, Dhaka", 
                        image: "./Images/gym19.jpg" 
                    },
                    { 
                        coords: [23.7501, 90.3945], 
                        name: "Fusion Fitness Studio", 
                        address: "Green Road, Dhaka", 
                        image: "./Images/gym20.jpg" 
                    },
                    { 
                        coords: [23.7940, 90.3893], 
                        name: "Active Gym Mohakhali", 
                        address: "Mohakhali, Dhaka", 
                        image: "./Images/gym21.jpg" 
                    },
                    { 
                        coords: [23.7786, 90.4039], 
                        name: "Balance Fitness Center", 
                        address: "Gulshan Link Road, Dhaka", 
                        image: "./Images/gym22.jpg" 
                    },
                    { 
                        coords: [23.7598, 90.4102], 
                        name: "Perfect Shape Gym", 
                        address: "Malibagh, Dhaka", 
                        image: "./Images/gym23.jpg" 
                    },
                    { 
                        coords: [23.7722, 90.3843], 
                        name: "Fitness World Shyamoli", 
                        address: "Shyamoli, Dhaka", 
                        image: "./Images/gym24.jpg" 
                    },
                    { 
                        coords: [23.8197, 90.4056], 
                        name: "Core Gym Uttara", 
                        address: "Sector 6, Uttara, Dhaka", 
                        image: "./Images/gym25.jpg" 
                    }
                ];
                

                gyms.forEach((gym) => {
                    const marker = L.marker(gym.coords, { icon: gymIcon })
                        .addTo(map)
                        .bindPopup(`<b>${gym.name}</b><br>${gym.address}`);

                    marker.on('click', () => {
                        displayGymDetails(gym);
                    });
                });

                L.marker([lat, lon]).addTo(map)
                    .bindPopup("You are here!")
                    .openPopup();
            },
            function (error) {
                alert("Geolocation failed: " + error.message);
            }
        );
    } else {
        alert("Geolocation is not supported by this browser.");
    }
});
