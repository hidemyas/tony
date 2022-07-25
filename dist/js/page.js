/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/page.js":
/*!*********************!*\
  !*** ./src/page.js ***!
  \*********************/
/***/ (() => {

eval("$(document).ready(function() {\r\n\r\n\r\n    var post_info = new Vue({\r\n        el: '#load',\r\n        data() {\r\n            return {\r\n                site_url: window.site_url,\r\n                post_id: window.post_id,\r\n                posts: null,\r\n                loading: true,\r\n                errored: true\r\n            }\r\n        },\r\n        mounted() {\r\n\r\n\r\n            axios.get(this.site_url + '/wp-json/wp/v2/pages/' + this.post_id)\r\n                .then(response => {\r\n                    this.posts = response.data;\r\n                })\r\n                .catch(e => {\r\n                    this.errored = false\r\n                })\r\n                .then(() => {\r\n                    this.loading = false;\r\n                    $('.real').css('display', 'block');\r\n                    $('.article-content').html(this.posts.content.rendered).attr('style', '');\r\n                    $('.single-h2').html(this.posts.title.rendered).attr('style', '');\r\n                    $('.article-list-footer').html('<span class=\"article-list-date\">' + this.posts.post_date + '</span><span class=\"article-list-divider\">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class=\"article-list-minutes\">' + this.posts.post_metas.views + '&nbsp;Views</span>').attr('style', '');\r\n\r\n                })\r\n        }\r\n    });\r\n\r\n\r\n})\n\n//# sourceURL=webpack://tony/./src/page.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/page.js"]();
/******/ 	
/******/ })()
;