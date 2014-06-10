/*
 * jQuery File Upload Plugin JS Example 8.9.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global $, window */

var url = [];

$(function() {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'http://localhost/tsi-php/protected/modules/imageHandler/',
        dataType: 'json',
    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    $('#fileupload').bind('fileuploaddone', function (e, data) {
        // Log the current bitrate for this upload:
        //console.log(data);
        $.each(data.files, function (index, file) {
            //console.log('Selected file: ' + file.name);
            url.push(file.name);
        });

        document.getElementById('Imagen_url').value = JSON.stringify(url);
    });

});