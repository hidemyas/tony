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

/***/ "./src/posts.js":
/*!**********************!*\
  !*** ./src/posts.js ***!
  \**********************/
/***/ (() => {

eval("window.onload = function(){\r\n\r\n\r\n    $('.grid-centered').css({'max-width':'660px','padding': '0px 20px','margin-top': '80px'});\r\n    $('.article-list').css('opacity','1');\r\n    $('#header-div').css('opacity', '1');\r\n    $('#header_info').css('opacity', '1');\r\n    $('.cat-real').attr('style','display:inline-block');\r\n\r\n\r\n    \r\n    new Vue({\r\n        el : '#grid-cell',\r\n        data() {\r\n            return {\r\n                site_url : window.site_url,\r\n                flag: false,\r\n                posts: null,\r\n                loading: true,\r\n                loading_des: false,\r\n                last_year: 0,\r\n                posts_array: [],\r\n            }\r\n        },\r\n        mounted () {\r\n            //获取文章列表\r\n            axios.get(this.site_url + '/wp-json/wp/v2/posts?per_page='+ window.post_count)\r\n             .then(response => {\r\n                 this.posts = response.data;\r\n             })\r\n             .then(() => {\r\n                 var k = -1;\r\n                 var i = 0;\r\n                 for(i=0;i<(this.posts).length;i++){\r\n                     if( ((this.posts[i].date.split('T'))[0].split('-'))[0] !== this.last_year ){\r\n                         this.posts_array[k += 1] = [];\r\n                         this.posts_array[k]['posts'] = [];\r\n                         this.posts_array[k]['year'] = parseInt(((this.posts[i].date.split('T'))[0].split('-'))[0]);\r\n                         this.posts_array[k]['posts'][(this.posts_array[k]['posts']).length] = this.posts[i];\r\n                         this.last_year = ((this.posts[i].date.split('T'))[0].split('-'))[0];\r\n                     }else{\r\n                        this.posts_array[k]['posts'][(this.posts_array[k]['posts']).length] = this.posts[i];\r\n                     }\r\n                 }\r\n                 this.loading = false;\r\n            })\r\n        }\r\n    });\r\n    \r\n    \r\n}\n\n//# sourceURL=webpack://tony/./src/posts.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/posts.js"]();
/******/ 	
/******/ })()
;