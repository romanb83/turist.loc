window.addEventListener('DOMContentLoaded', function () {

    'use strict';

    const urlRegion = '/regions',
        urlCity = '/cities',
        countries = document.getElementById('country'),
        region = document.getElementById('region'),
        city = document.getElementById('city'),
        defaultCountry = {
            [countries.name]: 1
        };

    function statusResponse(response) {
        if (response.status >= 200 && response.status < 300) {
            return Promise.resolve(response)
        }
        return Promise.reject(new Error(response.statusText))
    }

    function jsonResponse(response) {

        return response.json();
    }

    function defaultOption(param, str) {
        const opt = document.createElement('option')
        opt.value = 9999999
        opt.innerHTML = str
        param.appendChild(opt)
    }

    // function fetchUrl(url, nameParamInDB, location, initLocation) {
    //     fetch(url, {
    //             method: 'POST',
    //             headers: {
    //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    //                 'Content-Type': 'application/json'
    //             },
    //             body: JSON.stringify(initLocation),
    //         })
    //         .then(statusResponse)
    //         .then(jsonResponse)
    //         .then(function (data) {
    //             for (let i = 0; i < data.length; i++) {
    //                 let opt = document.createElement('option');
    //                 opt.value = data[i].id;
    //                 opt.innerHTML = data[i].nameParamInDB;
    //                 location.appendChild(opt);
    //             }
    //         })
    //         .catch(function (error) {
    //             console.log('request failed', error);
    //         })
    // }

    defaultOption(region, 'Выберите регион')

    // fetchUrl(urlRegion, 'region_ru', region, defaultCountry)

    fetch(urlRegion, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(defaultCountry),
        })
        .then(statusResponse)
        .then(jsonResponse)
        .then(function (data) {
            for (let i = 0; i < data.length; i++) {
                let opt = document.createElement('option');
                opt.value = data[i].id;
                opt.innerHTML = data[i].region_ru;
                region.appendChild(opt);
            }
        })
        .catch(function (error) {
            console.log('request failed', error);
        })



    countries.addEventListener('change', () => {
        let dataCountry = {
            [countries.name]: countries.value
        };

        region.options.length = 0;
        city.options.length = 0;
        defaultOption(region, 'Выберите регион')
        // fetchUrl(urlRegion, 'region_ru', region, dataCountry)

        fetch(urlRegion, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dataCountry),
            })
            .then(statusResponse)
            .then(jsonResponse)
            .then(function (data) {
                for (let i = 0; i < data.length; i++) {
                    let opt = document.createElement('option');
                    opt.value = data[i].id;
                    opt.innerHTML = data[i].region_ru;
                    region.appendChild(opt);
                }
            })
            .catch(function (error) {
                console.log('request failed', error);
            })
    });

    region.addEventListener('change', () => {
        let dataRegion = {
            [region.name]: +region.value
        };

        city.options.length = 0;
        defaultOption(city, 'Выберите город')

        fetch(urlCity, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dataRegion),
            })
            .then(statusResponse)
            .then(jsonResponse)
            .then(function (data) {
                for (let i = 0; i < data.length; i++) {
                    let opt = document.createElement('option');
                    opt.value = data[i].id;
                    opt.innerHTML = data[i].city_ru;
                    city.appendChild(opt);
                }
            })
            .catch(function (error) {
                console.log('request failed', error);
            })
    });

    // const myObj = {
    //     name: 'Roman',
    //     age: 39,
    //     location: 'Russian'
    // }

    // const {
    //     name,
    //     age,
    //     location
    // } = myObj;
    // console.log(name);
    // console.log(age);
    // console.log(location);

    // const fnWithError = () => {
    //     throw new Error('Some error');
    // }

    // try {
    //     fnWithError();
    // } catch (error) {
    //     console.error(error);
    //     console.log(error.message);
    // }


    // console.log('Continue...');

});
