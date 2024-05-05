// public/js/users.js

$(document).ready(function() {
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/users',
        type: 'GET',
        success: function(data) {
            var tableBody = $('.photos-table tbody');
 
            $.each(data, function(index, row) {
                tableBody.append('<tr><td>' + row.id 
                                + '</td><td>' + row.name 
                                + '</td><td>' + row.username
                                + '</td><td>' + row.email
                                + '</td><td>' + 
                                '<ul>' +
                                '<li>Calle: ' + row.address.street + '</li>' +
                                '<li>Suite: ' + row.address.suite + '</li>' +
                                '<li>Ciudad: ' + row.address.city + '</li>' +
                                '<li>Código Postal: ' + row.address.zipcode + '</li>' +
                                '<li>Latitud: ' + row.address.geo.lat + '</li>' +
                                '<li>Longitud: ' + row.address.geo.lng + '</li>' +
                                '</ul>' +
                                '</td></tr>');
                console.log({row});
            });
        }
    });
});
