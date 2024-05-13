// Define your data
var locations = {
    "Stanton-->Hurston": ["-->Arial", "-->Aberdeen", "-->Magda", "-->Ita", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->Crusader": ["-->Cellin", "-->Daymar", "-->Yela", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->ArcCorp": ["-->Lyria", "-->Wala", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->MicroTech": ["-->Calliope", "-->Clio", "-->Euterpe", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"]
};

// Function to populate locationM dropdown
function populateLocationM(selectedLocation) {
    // Get the locationMoon dropdown
    var locationMoonDropdown = document.getElementById('locationM');

    // Clear the locationMoon dropdown
    while (locationMoonDropdown.firstChild) {
        locationMoonDropdown.removeChild(locationMoonDropdown.firstChild);
    }

    // Add new options to the locationMoon dropdown
    if (locations[selectedLocation]) {
        locations[selectedLocation].forEach(function(moon) {
            var option = document.createElement('option');
            option.value = selectedLocation + moon;
            option.textContent = moon;
            locationMoonDropdown.appendChild(option);
        });
    }
}

// Listen for changes on the location dropdown
document.getElementById('location').addEventListener('change', function() {
    // Get the selected location
    var selectedLocation = this.value;

    // Populate locationM dropdown
    populateLocationM(selectedLocation);
});

// Populate locationM dropdown with Hurston moons when the page loads
window.onload = function() {
    populateLocationM('Stanton-->Hurston');

    // Get current date and time
    var now = new Date();

    // Format date and time
    var year = now.getFullYear();
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var day = ("0" + now.getDate()).slice(-2);
    var hours = ("0" + now.getHours()).slice(-2);
    var minutes = ("0" + now.getMinutes()).slice(-2);

    var date = year + "-" + month + "-" + day;
    var time = hours + ":" + minutes;

    // Set 'startTime' and 'endTime' to current date and time
    document.getElementById('startTime').value = date + "T" + time;
    document.getElementById('endTime').value = date + "T" + time;
};

