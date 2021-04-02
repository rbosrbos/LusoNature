async function getCity(cityID) {
    let city = {};
    let response = await fetch('https://api.ipma.pt/open-data/distrits-islands.json');
    let data = await response.json();
    data.data.forEach(el => {
        if (el.globalIdLocal == cityID) {
            city = el;
        }
    });
    return city;
}

async function getWeather(cityID) {
    let weather = {};
    let response = await fetch('https://api.ipma.pt/open-data/forecast/meteorology/cities/daily/' + cityID + '.json');
    let data = await response.json();
    return data.data;
}

async function getWeatherType(weatherID) {
    let weather = {};
    let response = await fetch('https://api.ipma.pt/open-data/weather-type-classe.json');
    let data = await response.json();
    data.data.forEach(el => {
        if (el.idWeatherType == weatherID) {
            weather = el;
        }
    });
    return weather;
}
async function getWeatherTypes() {
    let response = await fetch('https://api.ipma.pt/open-data/weather-type-classe.json');
    let data = await response.json();
    return data;
}

$('path').click(function (e) {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    $('#forecast').addClass('offscreen');
    setTimeout(function () {
        const cityID = e.target.dataset.city;

        getCity(cityID).then(function (data) {
            let html = '<thead><tr><th colspan="5"><h1 class="text-gray-800 p-2">';
            html += data.local;
            html += '</h1></th></tr></thead><tbody><tr><th class="pl-5 py-5">Day</th><th class="py-5">Min</th><th class="py-5">Max</th><th class="py-5">Rain Prob.</th><th class="pr-5 py-5">Weather</th></tr>';
            $('#forecast table').html(html);
        });

        getWeather(cityID).then(function (data) {
            getWeatherTypes().then(function (datatypes) {
                let tr = '';
                // data.forEach(el => {
                for (let i = 0; i < data.length; i++) {
                    tr += '<tr><td class="pl-5';
                    if (i == (data.length - 1)) tr += ' pb-5';
                    tr += '">' + data[i].forecastDate.substring(8, 10) + '/' + data[i].forecastDate.substring(5, 7) + '</td><td';
                    if (i == (data.length - 1)) tr += ' pb-5';
                    tr += '>' + data[i].tMin + '&deg;</td><td';
                    if (i == (data.length - 1)) tr += ' pb-5';
                    tr += '>' + data[i].tMax + '&deg;</td><td';
                    if (i == (data.length - 1)) tr += ' pb-5';
                    tr += '>' + data[i].precipitaProb + '</td><td class="pr-5';
                    if (i == (data.length - 1)) tr += ' pb-5';
                    tr += '"><img width="50" class="d-inline-block" src="https://www.ipma.pt/bin/icons/svg/weather/w_ic_d_';
                    if (data[i].idWeatherType < 10) {
                        tr += '0' + data[i].idWeatherType;
                    } else {
                        tr += data[i].idWeatherType;
                    }
                    tr += 'anim.svg"></td></tr>';
                    $('#forecast table tbody:last-child').append(tr);
                    tr = '';
                    // });
                }
                $('#forecast table').append('</tbody>');
                $('#forecast').removeClass('offscreen');
            });
        });
    }, 300);
});
