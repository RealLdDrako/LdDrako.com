// Define your data
var locations = {
    "Stanton-->Hurston": ["-->Arial", "-->Aberdeen", "-->Magda", "-->Ita", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->Crusader": ["-->Cellin", "-->Daymar", "-->Yela", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->ArcCorp": ["-->Lyria", "-->Wala", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"],
    "Stanton-->MicroTech": ["-->Calliope", "-->Clio", "-->Euterpe", "-->L1", "-->L2", "-->L3", "-->L4", "-->L5"]
};

// Listen for changes on the location dropdown
document.getElementById('location').addEventListener('change', function() {
    // Get the selected location
    var selectedLocation = this.value;

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
});
