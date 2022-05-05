function myFunction() {
    let input = document.getElementById("mySearch");
    let filter = input.value.toUpperCase();
    let ul = document.getElementById("myMenu");
    let li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function LA() {
    document.getElementById('location').value = 'Los Angeles'
    document.getElementById('longitude').value = '-118.243683'
    document.getElementById('latitude').value = '34.052235'
    document.getElementById('temperature').value = '55°F'
    document.getElementById('humidity').value = '37%'
    document.getElementById('pressure').value = '1019 hPa'
    document.getElementById('wind').value = '5.14 m/s'
    document.getElementById('fire').value = '2 %'
}

function SD() {
    document.getElementById('location').value = 'San Diego'
    document.getElementById('longitude').value = '-117.161087'
    document.getElementById('latitude').value = '32.715736'
    document.getElementById('temperature').value = '55°F'
    document.getElementById('humidity').value = '70%'
    document.getElementById('pressure').value = '1019 hPa'
    document.getElementById('wind').value = '3.6 m/s'
    document.getElementById('fire').value = '1 %'
}

function SJ() {
    document.getElementById('location').value = 'San Jose'
    document.getElementById('longitude').value = '-121.893028'
    document.getElementById('latitude').value = '37.33548'
    document.getElementById('temperature').value = '46°F'
    document.getElementById('humidity').value = '70%'
    document.getElementById('pressure').value = '1025 hPa'
    document.getElementById('wind').value = '2.57 m/s'
    document.getElementById('fire').value = '0.9 %'
}

function SF() {
    document.getElementById('location').value = 'San Francisco'
    document.getElementById('longitude').value = '-122.446747'
    document.getElementById('latitude').value = '37.733795'
    document.getElementById('temperature').value = '47°F'
    document.getElementById('humidity').value = '75%'
    document.getElementById('pressure').value = '1025 hPa'
    document.getElementById('wind').value = '3.6 m/s'
    document.getElementById('fire').value = '0.75 %'
}

function Fresno() {
    document.getElementById('location').value = 'Fresno'
    document.getElementById('longitude').value = '-119.772591'
    document.getElementById('latitude').value = '36.746841'
    document.getElementById('temperature').value = '50°F'
    document.getElementById('humidity').value = '75%'
    document.getElementById('pressure').value = '1024 hPa'
    document.getElementById('wind').value = '4.63 m/s'
    document.getElementById('fire').value = '4 %'
}

function Sacramento() {
    document.getElementById('location').value = 'Sacramento'
    document.getElementById('longitude').value = '-121.478851'
    document.getElementById('latitude').value = '38.575764'
    document.getElementById('temperature').value = '56°F'
    document.getElementById('humidity').value = '47%'
    document.getElementById('pressure').value = '1025 hPa'
    document.getElementById('wind').value = '4.63 m/s'
    document.getElementById('fire').value = '2.3 %'
}

function LB() {
    document.getElementById('location').value = 'Long Beach'
    document.getElementById('longitude').value = '-118.193741'
    document.getElementById('latitude').value = '33.770050'
    document.getElementById('temperature').value = '65°F'
    document.getElementById('humidity').value = '29%'
    document.getElementById('pressure').value = '1020 hPa'
    document.getElementById('wind').value = '2.24 m/s'
    document.getElementById('fire').value = '3.7 %'
}

function Oakland() {
    document.getElementById('location').value = 'Oakland'
    document.getElementById('longitude').value = '-122.271111'
    document.getElementById('latitude').value = '37.804363'
    document.getElementById('temperature').value = '54°F'
    document.getElementById('humidity').value = '67%'
    document.getElementById('pressure').value = '1025 hPa'
    document.getElementById('wind').value = '3.09 m/s'
    document.getElementById('fire').value = '5.8 %'
}

function Bakersfield() {
    document.getElementById('location').value = 'Bakersfield'
    document.getElementById('longitude').value = '-119.018715'
    document.getElementById('latitude').value = '35.373291'
    document.getElementById('temperature').value = '54°F'
    document.getElementById('humidity').value = '47%'
    document.getElementById('pressure').value = '1023 hPa'
    document.getElementById('wind').value = '1.79 m/s'
    document.getElementById('fire').value = '0.04 %'
}

function Anaheim() {
    document.getElementById('location').value = 'Anaheim'
    document.getElementById('longitude').value = '-117.914299'
    document.getElementById('latitude').value = '33.836594'
    document.getElementById('temperature').value = '65°F'
    document.getElementById('humidity').value = '32%'
    document.getElementById('pressure').value = '1020 hPa'
    document.getElementById('wind').value = '5.14 m/s'
    document.getElementById('fire').value = '7.2 %'
}