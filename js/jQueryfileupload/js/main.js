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

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'http://localhost/tsi-php/protected/modules/imageHandler/',
        dataType: 'json',
        disableImageResize: false,
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        imageMaxWidth: 600,
        imageMaxHeight: 400,
        imageCrop: true,
    }).bind('fileuploaddone', function (e, data) {
        // Log the current bitrate for this upload:
        //console.log(data);
        $.each(data.files, function (index, file) {
            //console.log('Selected file: ' + file.name);
            url.push(file.name);
        });

        document.getElementById('Imagen_url').value = JSON.stringify(url);
        //$.notify(url.length.toString(), "info");
    }).bind('fileuploadstop', function () {
        // Log the current bitrate for this upload:
        //console.log(data);
        $.notify('Se han ingresado: ' + url.length.toString() + ' fotos.', {
            globalPosition: 'right bottom',
            className: 'success'
        });

        //$('#btnModal i').removeClass('glyphicon glyphicon-ban-circle').addClass('glyphicon glyphicon-ok');
        
        $('#btnModalCancelar').addClass('btn-invisible');
        $('#btnModalAceptar').removeClass('btn-invisible').removeAttr('style');
        
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

});