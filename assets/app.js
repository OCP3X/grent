/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import './styles/app.scss';
import './styles/stile_admin.css';

const $ = require('jquery');
// create global $ and jQuery variables
global.$ = global.jQuery = $;
// start the Stimulus application
require('bootstrap');
require('@fortawesome/fontawesome-free/css/all.min.css');
global.bootbox = require('bootbox');




$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
        if ($('#sidebar').hasClass('active')) {
            $('#sidebarCollapseCaption').html(' Mostra il Menu');
        } else {
            $('#sidebarCollapseCaption').html(' Nascondi il Menu');
        }

      

    });
});
