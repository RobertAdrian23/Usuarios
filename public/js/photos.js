// public/js/photos.js

$(document).ready(function() {
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/photos',
        type: 'GET',
        success: function(data) {
            var tableBody = $('.photos-table tbody');
 
            $.each(data, function(index, row) {
                tableBody.append('<tr><td>' + row.id 
                                + '</td><td>' + row.title 
                                + '</td><td><img src="' + 
                                
                                    row.thumbnailUrl + '" /></td></tr>');
                console.log({row});
            });
        }
    });
 });
 