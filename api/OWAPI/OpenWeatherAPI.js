document.getElementById("submit").addEventListener('click', function(name) {
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + document.getElementById("city").value + '&appid=97f22a67241a67289efed587f6be89d3')
        .then(response => response.json())
        .then(data => {
            document.getElementById("name").innerHTML = data['name']
            document.getElementById("longitude").value = data['coord']['lon']
            document.getElementById("latitude").value = data['coord']['lat']
            document.getElementById("temperature").value = data['main']['temp'] + " F"
            document.getElementById("humidity").value = data['main']['humidity'] + " %"
            document.getElementById("pressure").value = data['main']['pressure'] + " hPa"
            document.getElementById("weather").value = data['weather'][0]['description']
            document.getElementById("wind").value = data['wind']['speed'] + " m/s"
            document.getElementById("city").value = ""
        })
        .catch(err => alert("Wrong City Name! Try Again!"));
})