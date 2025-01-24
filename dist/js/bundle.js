/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./frontend/src/scss/styles.scss":
/*!***************************************!*\
  !*** ./frontend/src/scss/styles.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack:///./frontend/src/scss/styles.scss?");

/***/ }),

/***/ "./frontend/src/js/menu.js":
/*!*********************************!*\
  !*** ./frontend/src/js/menu.js ***!
  \*********************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\ndocument.addEventListener(\"DOMContentLoaded\", () => {\n  const submenuTrigger = document.getElementById('submenu-contain');\n  const submenuSource = document.getElementById('submenu');\n  const submenuContainer = document.getElementById('submenu-container');\n  const submenuDynamic = document.getElementById('submenu-dynamic');\n  if (submenuTrigger && submenuSource && submenuDynamic) {\n    submenuTrigger.addEventListener('mouseover', () => {\n      submenuContainer.style.display = 'flex';\n      submenuDynamic.innerHTML = submenuSource.innerHTML;\n      submenuDynamic.style.display = 'flex';\n    });\n    submenuTrigger.addEventListener('mouseleave', () => {\n      setTimeout(() => {\n        if (!submenuContainer.matches(':hover')) {\n          submenuContainer.style.display = 'none';\n          submenuDynamic.style.display = 'none';\n          submenuDynamic.innerHTML = '';\n        }\n      }, 300);\n    });\n    submenuContainer.addEventListener('mouseleave', () => {\n      submenuContainer.style.display = 'none';\n      submenuDynamic.style.display = 'none';\n      submenuDynamic.innerHTML = '';\n    });\n  }\n});\n\n//# sourceURL=webpack:///./frontend/src/js/menu.js?");

/***/ }),

/***/ "./frontend/src/js/scripts.js":
/*!************************************!*\
  !*** ./frontend/src/js/scripts.js ***!
  \************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/styles.scss */ \"./frontend/src/scss/styles.scss\");\n/* harmony import */ var _menu_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./menu.js */ \"./frontend/src/js/menu.js\");\n\n\n\n//js working\ndocument.addEventListener('DOMContentLoaded', () => {\n  console.log('JavaScript is loaded and ready!');\n});\n\n//# sourceURL=webpack:///./frontend/src/js/scripts.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./frontend/src/js/scripts.js");
/******/ 	
/******/ })()
;