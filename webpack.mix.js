const mix = require('laravel-mix');

// require('laravel-mix-scrollmagic-gsap');

// mix.scrollmagicGSAP();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.webpackConfig({
// 	// module:{
// 		plugins:[
// 			   new webpack.LoaderOptionsPlugin({
//          // test: /\.xxx$/, // may apply this only for some modules
//          options: {
// 			loaders:[
// 					{
// 						test: /\.js$/, loader: 'imports-loader?define=>false' 
// 					}]
// 				}
//        })
//      ]
		
		
// 	// }
// //     resolve: {
// //     alias: {
// //         "TweenLite": path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
// //         "TweenMax": path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
// //         "TimelineLite": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineLite.js'),
// //         "TimelineMax": path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
// //         "ScrollMagic": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
// //         "animation.gsap": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
// //         "debug.addIndicators": path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
// //     },
// //   }
// });

mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css');