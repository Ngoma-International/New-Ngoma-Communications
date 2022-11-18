"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_backend_util_seminar_js"],{

/***/ "./resources/js/backend/util/seminar.js":
/*!**********************************************!*\
  !*** ./resources/js/backend/util/seminar.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "uploadImages": () => (/* binding */ uploadImages)
/* harmony export */ });
/* harmony import */ var filepond__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! filepond */ "./node_modules/filepond/dist/filepond.js");
/* harmony import */ var filepond__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(filepond__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var filepond_plugin_image_crop__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! filepond-plugin-image-crop */ "./node_modules/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js");
/* harmony import */ var filepond_plugin_image_crop__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(filepond_plugin_image_crop__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var filepond_plugin_image_preview__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! filepond-plugin-image-preview */ "./node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js");
/* harmony import */ var filepond_plugin_image_preview__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(filepond_plugin_image_preview__WEBPACK_IMPORTED_MODULE_2__);



/**
 * @param elements
 */

var uploadImages = function uploadImages(elements) {
  filepond__WEBPACK_IMPORTED_MODULE_0__.registerPlugin((filepond_plugin_image_preview__WEBPACK_IMPORTED_MODULE_2___default()), (filepond_plugin_image_crop__WEBPACK_IMPORTED_MODULE_1___default()));

  var _token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  var pond = filepond__WEBPACK_IMPORTED_MODULE_0__.create(elements, {
    labelIdle: "Glissez et d\xE9posez vos fichiers",
    labelFileLoading: 'Chargement ...',
    allowImageCrop: true,
    acceptedFileTypes: ['image/*']
  });
  pond.setOptions({
    server: {
      url: '/admins/upload-seminar',
      revert: "/admins/remove-seminar",
      headers: {
        'X-CSRF-Token': _token
      }
    }
  });
};

/***/ })

}]);