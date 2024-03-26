"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _styles_stile_admin_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/stile_admin.css */ "./assets/styles/stile_admin.css");
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)



var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
// create global $ and jQuery variables
__webpack_require__.g.$ = __webpack_require__.g.jQuery = $;
// start the Stimulus application
__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
__webpack_require__(/*! @fortawesome/fontawesome-free/css/all.min.css */ "./node_modules/@fortawesome/fontawesome-free/css/all.min.css");
__webpack_require__.g.bootbox = __webpack_require__(/*! bootbox */ "./node_modules/bootbox/bootbox.js");
$(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    if ($('#sidebar').hasClass('active')) {
      $('#sidebarCollapseCaption').html(' Mostra il Menu');
    } else {
      $('#sidebarCollapseCaption').html(' Nascondi il Menu');
    }
  });
});

/***/ }),

/***/ "./assets/styles/stile_admin.css":
/*!***************************************!*\
  !*** ./assets/styles/stile_admin.css ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_bootbox_bootbox_js-node_modules_bootstrap_dist_js_bootstrap_esm_js-node_-e5715c"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFMkI7QUFDTztBQUVsQyxJQUFNQSxDQUFDLEdBQUdDLG1CQUFPLENBQUMsb0RBQVEsQ0FBQztBQUMzQjtBQUNBQyxxQkFBTSxDQUFDRixDQUFDLEdBQUdFLHFCQUFNLENBQUNDLE1BQU0sR0FBR0gsQ0FBQztBQUM1QjtBQUNBQyxtQkFBTyxDQUFDLG9FQUFXLENBQUM7QUFDcEJBLG1CQUFPLENBQUMsbUhBQStDLENBQUM7QUFDeERDLHFCQUFNLENBQUNFLE9BQU8sR0FBR0gsbUJBQU8sQ0FBQyxrREFBUyxDQUFDO0FBS25DRCxDQUFDLENBQUNLLFFBQVEsQ0FBQyxDQUFDQyxLQUFLLENBQUMsWUFBVztFQUN6Qk4sQ0FBQyxDQUFDLGtCQUFrQixDQUFDLENBQUNPLEVBQUUsQ0FBQyxPQUFPLEVBQUUsWUFBVztJQUN6Q1AsQ0FBQyxDQUFDLFVBQVUsQ0FBQyxDQUFDUSxXQUFXLENBQUMsUUFBUSxDQUFDO0lBQ25DLElBQUlSLENBQUMsQ0FBQyxVQUFVLENBQUMsQ0FBQ1MsUUFBUSxDQUFDLFFBQVEsQ0FBQyxFQUFFO01BQ2xDVCxDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ1UsSUFBSSxDQUFDLGlCQUFpQixDQUFDO0lBQ3hELENBQUMsTUFBTTtNQUNIVixDQUFDLENBQUMseUJBQXlCLENBQUMsQ0FBQ1UsSUFBSSxDQUFDLG1CQUFtQixDQUFDO0lBQzFEO0VBSUosQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQ25DRjs7Ozs7Ozs7Ozs7O0FDQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvc3RpbGVfYWRtaW4uY3NzPzdhYzkiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2Nzcz84ZjU5Il0sInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5pbXBvcnQgJy4vc3R5bGVzL3N0aWxlX2FkbWluLmNzcyc7XHJcblxyXG5jb25zdCAkID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XHJcbi8vIGNyZWF0ZSBnbG9iYWwgJCBhbmQgalF1ZXJ5IHZhcmlhYmxlc1xyXG5nbG9iYWwuJCA9IGdsb2JhbC5qUXVlcnkgPSAkO1xyXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cclxucmVxdWlyZSgnYm9vdHN0cmFwJyk7XHJcbnJlcXVpcmUoJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2Nzcy9hbGwubWluLmNzcycpO1xyXG5nbG9iYWwuYm9vdGJveCA9IHJlcXVpcmUoJ2Jvb3Rib3gnKTtcclxuXHJcblxyXG5cclxuXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnI3NpZGViYXJDb2xsYXBzZScpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoJyNzaWRlYmFyJykudG9nZ2xlQ2xhc3MoJ2FjdGl2ZScpO1xyXG4gICAgICAgIGlmICgkKCcjc2lkZWJhcicpLmhhc0NsYXNzKCdhY3RpdmUnKSkge1xyXG4gICAgICAgICAgICAkKCcjc2lkZWJhckNvbGxhcHNlQ2FwdGlvbicpLmh0bWwoJyBNb3N0cmEgaWwgTWVudScpO1xyXG4gICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICQoJyNzaWRlYmFyQ29sbGFwc2VDYXB0aW9uJykuaHRtbCgnIE5hc2NvbmRpIGlsIE1lbnUnKTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICBcclxuXHJcbiAgICB9KTtcclxufSk7XHJcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyIkIiwicmVxdWlyZSIsImdsb2JhbCIsImpRdWVyeSIsImJvb3Rib3giLCJkb2N1bWVudCIsInJlYWR5Iiwib24iLCJ0b2dnbGVDbGFzcyIsImhhc0NsYXNzIiwiaHRtbCJdLCJzb3VyY2VSb290IjoiIn0=