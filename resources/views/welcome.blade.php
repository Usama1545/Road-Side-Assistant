<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> -->

<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" class="ltr" lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ushine</title>
<meta name="ROBOTS" content="INDEX, FOLLOW, all" />
<meta name="language" content="English" />
<meta name="organization" content="Ushine" />
<meta name="author" content="Ushine" />
<meta name="title" content="Ushine" />
<meta name="Category" content="Education,University,College,Student" />
<meta name="rating" content="General" />
<meta name="distribution" content="Local, Global" />
<meta name="city" content="Kolkata" />
<meta property="og:type" content="website"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="media/logo/logo.png" rel="icon" />
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
 <!-- CSS here -->
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/animate.min.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/magnific-popup.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/all.min.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/flaticon.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/dripicons.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/flaticon.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/meanmenu.css">
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/select2.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://designslab.net/demo/ushine/css/default.css">
<link rel="stylesheet" href="https://designslab.net/demo/ushine/css/style2.css">
<link rel="stylesheet" href="https://designslab.net/demo/ushine/css/responsive.css">
  <!--CSS for Light Gallery Manufacturer Page-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/css/lightgallery.css">
  <script src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/js/vendor/jquery-1.12.4.min.js"></script>
<!-- FONT -->

    <!-- FONT -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-219966278-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-219966278-1');
</script>

<!--End Menu Section Style-->
<!--Chatbot Script-->
<!--<script src="https://gateway.myella.co.uk/assets/launcher/widget.js"></script>-->

<!--<script src="https://gateway.myella.co.uk/widget.js"></script>-->

  </head>
  <style>
    .ss-btn
    {
      @media(min-width: 600px;)
      {
        margin: top 200px;
      }
    }
    </style>
  <body class="common-home page-home layout-fullwidth version-3" style="background-color: ">
 <!--<START Loader>-->

 <!--<END Loader>-->
    <div class="row-offcanvas row-offcanvas-left">
      <div id="page">
        <!-- header -->

        <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"><img style="height: 50px; margin-left: 30px;" src="{{ asset('assets/img/logo/1.png')}}"></a>
    <form class="d-flex" role="search">
      @if (Route::has('login'))
        <li class="sub text-left">
          @auth
              <a href="{{ url('/home') }}" class="active-register btn-sm text-gray-700 underline">Home</a>
          @else
              <a href="{{ route('login') }}" style="line-height:0;font-size:10px" class="btn ss-btn active-register btn-sm text-gray-700 underline">Login/Register</a>
          @endauth
        </li>
      @endif
    </form>
  </div>
</nav>
 <!-- header -->


  <script src="https://designslab.net/demo/ushine/js/modernizr-3.5.0.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/popper.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/bootstrap.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/one-page-nav-min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/slick.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/ajax-form.js"></script>
  <script src="https://designslab.net/demo/ushine/js/paroller.js"></script>
  <script src="https://designslab.net/demo/ushine/js/wow.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/js_isotope.pkgd.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/imagesloaded.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/parallax.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/jquery.waypoints.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/jquery.counterup.min.js"></script>
  <script src="https://designslab.net/demo/jquery.scrollUp.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/jquery.meanmenu.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/parallax-scroll.js"></script>
  <script src="https://designslab.net/demo/ushine/js/jquery.magnific-popup.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/select2.min.js"></script>
  <script src="https://designslab.net/demo/ushine/js/element-in-view.js"></script>
  <script src="https://designslab.net/demo/ushine/js/main.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  <script>
  $(document).ready(function () {
     var url = window.location.href;
	// alert(url);
	/*if(url.search(/test\/$/) >= 0) {
		alert("Do redirect!");
	}*/
});
  </script>
  <!-- header-end -->


        <!-- /header -->

        <!-- sys-notification -->
        <div id="sys-notification">
          <div class="container">
            <div id="notification"></div>
        </div>
        </div>
        <!-- /sys-notification -->



<div class="main-columns container-full">


	    <div id="content">  <!-- main-area -->
  <main>

    <!-- slider-area -->
    <section id="home">
      <div class="container">
        <div class="bnnerDiv-rht bnnerDiv-rht-mbl">
          <div class="slider6-img">
            <div class="row-one">
              <ul>
                <li> <span> </span> </li>
                <li>
                  <div class="full quotes11"> <img src="https://ushine.ca/public_html/img/1.PNG" alt="img"> </div>
                  <div class="full quotes11"> <img src="https://ushine.ca/public_html/img/2.PNG" alt="img"> </div>
                  <div class="full quotes11"> <img src="https://ushine.ca/public_html/img/3.jpg" alt="img"> </div>
                </li>
                <li> <span> </span> </li>
                <li>
                  <div class="full quotes22"> <img src="https://designslab.net/demo/slider/4.jpg" alt="img"> </div>
                  <div class="full quotes22"> <img src="https://designslab.net/demo/slider/5.png" alt="img"> </div>
                  <div class="full quotes22"> <img src="https://designslab.net/demo/slider/6.png" alt="img"> </div>
                </li>
              </ul>
            </div>
            <div class="row-two">
              <ul>
                <li>
                  <div class="full quotes33"> <img src="https://designslab.net/demo/slider/7.png" alt="img"> </div>
                  <div class="full quotes33"> <img src="https://designslab.net/demo/slider/8.png" alt="img"> </div>
                  <div class="full quotes33"> <img src="https://designslab.net/demo/slider/9.png" alt="img"> </div>
                </li>
                <li>
                				<span> 80,000+ <br>
                <small> Courses </small> </span>
                                </li>
                <li>
                  <div class="full quotes44"> <img src="https://designslab.net/demo/slider/10.jpg" alt="img"> </div>
                  <div class="full quotes44"> <img src="https://designslab.net/demo/slider/11.png" alt="img"> </div>
                  <div class="full quotes44"> <img src="https://designslab.net/demo/slider/12.png" alt="img"> </div>
                </li>

              </ul>
            </div>
            <div class="row-four">
              <ul>
                <li>
                  <div class="full quotes88"> <img src="https://designslab.net/demo/slider/19.png" alt="img"> </div>
                  <div class="full quotes88"> <img src="https://designslab.net/demo/slider/20.png" alt="img"> </div>
                  <div class="full quotes88"> <img src="https://designslab.net/demo/slider/21.png" alt="img"> </div>
                </li>
                <li> </li>
                <li>
                				<span> 500,000+ <br>
                <small> Drivers </small> </span>

                </li>
                <li>
                  <div class="full quotes77"> <img src="https://designslab.net/demo/slider/22.png" alt="img"> </div>
                  <div class="full quotes77"> <img src="https://designslab.net/demo/slider/23.png" alt="img"> </div>
                  <div class="full quotes77"> <img src="https://designslab.net/demo/slider/24.png" alt="img"> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bnnerDiv-lft">
          <h2 style="color:#fec663">Since 2010 we are experts in the global industry  </h2>
          <h1> One-Stop Solution for <br>
             Students & Agents </h1>
          <p> We help the Universities and Agents to connect with the eligible students from all across the
            world and make the recruitment procedure effortless. </p>

        </div>
        <div class="bnnerDiv-rht bnnerDiv-rht-desktop">
          <div class="slider6-img">
            <div class="row-one">
              <ul>
                <li> <span> </span> </li>
                <li>
                  <div class="full quotes"> <img src="https://ushine.ca/img/1.PNG" alt="img"> </div>
                  <div class="full quotes"> <img src="https://ushine.ca/img/2.PNG" alt="img"> </div>
                  <div class="full quotes"> <img src="https://ushine.ca/img/3.jpg" alt="img"> </div>
                </li>
                <li> <span> </span> </li>
                <li>
                  <div class="full quotes2"> <img src="https://ushine.ca/img/4.jpg" alt="img"> </div>
                  <div class="full quotes2"> <img src="https://ushine.ca/img/5.jpg" alt="img"> </div>
                  <div class="full quotes2"> <img src="https://ushine.ca/img/6.jpg" alt="img"> </div>
                </li>
              </ul>
            </div>
            <div class="row-two">
              <ul>
                <li>
                  <div class="full quotes3"> <img src="https://ushine.ca/img/7.jpg" alt="img"> </div>
                  <div class="full quotes3"> <img src="https://ushine.ca/img/8.jpg" alt="img"> </div>
                  <div class="full quotes3"> <img src="https://ushine.ca/img/9.jpg" alt="img"> </div>
                </li>
                <li>
                				<span> 1,000+ <br>
                <small> Agents </small> </span>
                                </li>
                <li>
                  <div class="full quotes4"> <img src="https://ushine.ca/img/10.jpg" alt="img"> </div>
                  <div class="full quotes4"> <img src="https://ushine.ca/img/11.jpg" alt="img"> </div>
                  <div class="full quotes4"> <img src="https://ushine.ca/img/12.png" alt="img"> </div>
                </li>
                <li>
                				<span style=" background: linear-gradient( 45deg, #0046fe 19%, #0f4ff1 48%, #245be6 100%);"> 100+ <br>
                <small> Reviews </small> </span>
                                </li>
              </ul>
            </div>
            <div class="row-three">
              <ul>
                <li></li>
                <li>
                  <div class="full quotes666"> <img src="https://ushine.ca/img/13.png" alt="img"> </div>
                  <div class="full quotes666"> <img src="https://ushine.ca/img/14.png" alt="img"> </div>
                  <div class="full quotes666"> <img src="https://ushine.ca/img/15.png" alt="img"> </div>
                </li>
                <li> </li>
                <li>
                  <div class="full quotes6"> <img src="https://ushine.ca/img/16.png" alt="img"> </div>
                  <div class="full quotes6"> <img src="https://ushine.ca/img/17.jpg" alt="img"> </div>
                  <div class="full quotes6"> <img src="https://ushine.ca/img/18.jpg" alt="img"> </div>
                </li>
              </ul>
            </div>
            <div class="row-four">
              <ul>
                <li>
                  <div class="full quotes7"> <img src="https://ushine.ca/img/19.jpg" alt="img"> </div>
                  <div class="full quotes7"> <img src="https://ushine.ca/img/20.jpg" alt="img"> </div>
                  <div class="full quotes7"> <img src="https://ushine.ca/img/21.jpg" alt="img"> </div>
                </li>
                <li> </li>
                <li>
                  <div class="full quotes8"> <img src="https://ushine.ca/img/22.jpg" alt="img"> </div>
                  <div class="full quotes8"> <img src="https://ushine.ca/img/23.jpg" alt="img"> </div>
                  <div class="full quotes8"> <img src="https://ushine.ca/img/24.jpg" alt="img"> </div>
                </li>
                <li>
                				<span> 10,000+ <br>
                <small> Users </small> </span>
                                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="cta-box cta-laptop-dk mobile-cta-set position-relative fix pb-150" >
      <div class="container container-bg d-lg-block d-none "  style=" background: linear-gradient( 45deg, #fec663 19%, #0f4ff1 48%, #245be6 100%);">
        <div class="row">
          <div class="col-lg-12 pl-0 pr-0">
            <div class="section-title cta-heading text-white center-align text-center mb-30">
              <h2> Why Road Side Assistance </h2>
              <p>With the experience of more than a decade, THE SUNSHINE IMMIGRATION CONSULTANCY has met customer’s requirements and providing the
                right guidance, career counselling, & Study Abroad Services for Canada, Australia, UK &USA. We are considerably one of the best
                immigration consultants in Chandigarh, Mohali and Zirakpur.</p>
            </div>
          </div>
          <div class="full">
            <div class="slider-btn"> <a href="{{ route('register') }}" class="btn ss-btn-cta-join" data-animation="fadeInRight"
                data-delay=".8s">Join Us</a> </div>
            <div class="slider-btn "> <a href="{{ route('login') }}" class="btn ss-btn-cta-signin" style="background:#0046fe" data-animation="fadeInRight"
                data-delay=".8s">sign in</a> </div>
          </div>
        </div>
      </div>
      <div class="container container-bg d-lg-none d-block " style=" background: linear-gradient( 45deg, #fec663 19%, #0f4ff1 48%, #245be6 100%);">
        <div class="row">
          <div class="col-lg-12 pl-0 pr-0">
            <div class="section-title cta-heading text-white center-align text-center mb-30">
              <h2> We Are Here For You </h2>
              <p>Get connected with us today to lay the foundation for a profitable venture together. Let
                us carve your identity on the Global Education Platform with our unique and dynamic
                business approach and round the clock boutique services. </p>
            </div>
          </div>
          <div class="full">
            <div class="slider-btn"> <a href="{{ route('register') }}" class="btn ss-btn-cta-join" data-animation="fadeInRight"
                data-delay=".8s">Join Us
                us </a> </div>
            <div class="slider-btn "> <a href="{{ route('login') }}" class="btn ss-btn-cta-signin" data-animation="fadeInRight"
                data-delay=".8s">sign in</a> </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about-area-end -->

    <section id="about" class="about-area how-crizac about-p p-relative pb-150">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title center-align text-center">
                          <h2 class="d-lg-block d-none"> What makes Our Platform user friendly for everyone</h2>
              <h2 class="d-lg-none d-block"> What makes Our Platform user friendly for everyone </h2>
                          </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
            <div class="s-about-img p-relative mt-3 mt-lg-0"> <img class="consortium-image"
                src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/for-our-channel-partners.svg" alt="img">
              <div class="cream-bg"></div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 pl-0 pr-0">
            <div class="about-content s-about-content  wow fadeInRight  animated mt-5 mt-lg-0"
              data-animation="fadeInRight" data-delay=".4s"> <img class="img-fluid mb-lg-3 responsive-icon-size"
                src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/consortium-icon.png" alt="">
              <div class="about-title second-atitle">
                <h3>For our Aspirants</h3>
              </div>
              <div class="about-content3">
                <div class="row">
                  <div class="col-md-12 pr-0 pl-0 pl-lg-3">
                    <ul class="green">
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Get Connected with Agents Any time Any where.</h4>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> User-Friendly Portal for easy applications. </h4>
                          </div>
                        </div>
                      </li>
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Scope to expand your service near you. </h4>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Frequent User and Agents Check </h4>
                          </div>
                        </div>
                      </li>
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Best Commission Structure in the Industry. </h4>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Round the clock assistance with requests. </h4>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row align-items-center mt-120">
          <div class="col-lg-6 col-md-12 col-sm-12 order-lg-1 order-2 pl-0 pr-0">
            <div class="about-content s-about-content mt-5 mt-lg-0 wow fadeInLeft animated" data-animation="fadeInLeft"
              data-delay=".4s"> <img class="img-fluid mb-lg-3 responsive-icon-size"
                src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/institution-icon.png" alt="">
              <div class="about-title second-atitle">
                <h3>For our Users</h3>
              </div>
              <div class="about-content3" data-delay=".4s">
                <div class="row">
                  <div class="col-md-12 pr-0 pl-0 pl-lg-3">
                    <ul class="green">
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1">Get Connected with 1500+ trusted Agents.</h4>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Verified User consulted by Experts.</h4>
                          </div>
                        </div>
                      </li>
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1">Get connected with Pakistans Most trusted Service Provider Platform</h4>
                          </div>
                        </div>
                      </li>
                      <!--<li>
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Dedicated University Representatives. </h4>
                          </div>
                        </div>
                      </li>--->
                      <li class="gradient-bg">
                        <div class="media"> <img class="mr-3 mt-2 arrow-image-mobile" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/arrow-blue.png"
                            alt="arrow image">
                          <div class="media-body media-consortiuom">
                            <h4 class="mt-1"> Round-the-clock Request Process Management. </h4>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 pr-30 order-lg-2 order-1">
            <div class="s-about-img p-relative  wow fadeInRight  animated" data-animation="fadeInRight"
              data-delay=".4s"> <img class="institution-image" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/for-our-universities.svg" alt="img">
              <!--<div class="light-bg"></div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area  All Removed------
    <section id="services" class="services-area service-laptop-dk pb-150 fix position-relative">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12 pl-0 pr-0">
            <div class="section-title text-center">
              <h2> Our Modus Operandi </h2>
            </div>
            <div class="section-sub-heading">
              <h3 style="color:#fec663">For the Universities</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-lg-block d-none">

            <div class="row">
              <div class="col-lg-3 text-center">
                <div class="number-timeline-one">01</div>
                <div class="circle-blue"></div>
              </div>
              <div class="col-lg-3 text-center">
                <div class="number-timeline-two">02</div>
                <div class="circle-blue"></div>
              </div>
              <div class="col-lg-3 text-center">
                <div class="number-timeline-three">03</div>
                <div class="circle-blue"></div>
              </div>
              <div class="col-lg-3 text-center">
                <div class="number-timeline-four">04</div>
                <div class="circle-blue"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-4">
            <div class="target-box"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/target.svg" class="pic_zoom" alt="">
              <h3> Target Assessment </h3>
              <p>Action Plan is devised as<br>per the University<br>requirement.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-4 mt-3">
            <div class="target-box"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/Brand.svg" class="pic_zoom" alt="">
              <h3> Brand Development </h3>
              <p>Exclusive strategies are<br>designed for frequent<br>promotions. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-4 mt-3">
            <div class="target-box"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/Global.svg" class="pic_zoom" alt="">
              <h3> Global Networking </h3>
              <p>Universities get access to<br>Verified leads from 11+<br>Countries. </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-4 mt-3">
            <div class="target-box"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/CRM.svg" class="pic_zoom" alt="">
              <h3> 24*7 CRM Support </h3>
              <p>Easy application,<br>documentation and Office<br>Space Management. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    services-area-End -->

    <section class="platform-area platform-area-bg fix position-relative">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title platform center-align text-center">
              <h3> For the Agents </h3>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-4 br-bright-brown br-bottom-brown">
            <div class="platform-box">
              <div class="platform-img m-auto"> <img class="img-fluid pic_zoom" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/Portal.svg" alt=""> </div>
              <h3> User-Friendly Portal </h3>
              <p>Creation of the Profile on our easily accessible and navigable portal. </p>
            </div>
          </div>
          <div class="col-lg-4 br-bright-brown br-bottom-brown">
            <div class="platform-box">
              <div class="platform-img m-auto"> <img class="img-fluid pic_zoom" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/Search.svg" alt=""> </div>
              <h3> Requirement-Specific Search </h3>
              <p> Search and Filter options as per Service Required. </p>
            </div>
          </div>
          <div class="col-lg-4 br-bottom-brown">
            <div class="platform-box">
              <div class="platform-img m-auto"> <img class="img-fluid pic_zoom" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/easy.svg" alt=""> </div>
              <h3> Easy Application Procedures </h3>
              <p>Single Integrated Platform for Drivers and Agents.</p>
            </div>
          </div>
        </div>
        <div class="row text-center align-items-center justify-content-center m-auto">
          <div class="col-lg-4 br-bright-brown">
            <div class="platform-box platform-box pt-lg-3 pb-3 pb-lg-0">
              <div class="platform-img m-auto"> <img class="img-fluid pic_zoom" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/visa.svg" alt=""> </div>
              <h3> Complete Agent Profile </h3>
              <p>Assistance during Profile processing to ensure very high success Ratio. </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="platform-box platform-box pt-lg-3 pb-0 pb-lg-0">
              <div class="platform-img m-auto"> <img class="img-fluid pic_zoom" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/Commission.svg" alt=""> </div>
              <h3> Best Commission Structure </h3>
              <p>High Revenue generation with successful enrollment of the student. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Remove-- Testimonial-area --

    <section class="testimonial-area-bg testmonial-mobile pb-150 pt-150 position-relative"
      style=" background-color: #fff;">
      <div class="container ">
        <div class="row">
          <div class="col-lg-4">
            <div class="about-title second-atitle">
              <h2 class="testimonial-heading"> Don’t Just Take Our Word For It </h2>
              <h4 class="pt-15 testimonial-para" style="color: #fec663;">See what they think of us. </h4>
              <div class="slider-btn mt-30 mb-5"> <a href="mailto:admin@gmail.com?subject=Connect with us from Ushine"
        target="_blank" class="btn ss-btn" data-animation="fadeInRight"
                  data-delay=".8s">connect with us</a> </div>
            </div>
          </div>
          <div class="col-lg-8 d-lg-block">
            <div class="tes-box">
              <div class="qt-img" > <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/quote.png" alt="img"> </div>
              <div class="testimonial-active">
                              <div class="single-testimonial"> <img class="img-fluid mb-30"
                    src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/University of Greenwich.png" alt="">
                  <div class="univ-testi">
                    <p>University Testimonial</p>
                  </div>
                  <p>“ I have been working with Crizac over two years now and I have found both he and his team to be very professional, efficient and effective. We have a dedicated member of his staff working on the Regional Office for University of Greenwich and this is proving to be a great way for us to develop the Indian market. The member of staff he has appointed is very professional and represents Greenwich very well. I find Vikash and his team are very responsive in all aspects of their work with very clear and open channels of communication. They also have great market knowledge and many years’ experience working in the education sector in India. All of this combines to create a successful operation for him and also for the Greenwich Regional Office.” </p>
                  <div class="testi-author"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/Christopher Bustin.png" alt="img">
                    <div class="ta-info">
                      <h6>Christopher Bustin</h6>
                     <span>Associate Director (Global Greenwich)<br>
                     University of Greenwich, UK</span>
                    </div>
                  </div>
                </div>
                <div class="single-testimonial"> <img class="img-fluid mb-30"
                    src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/Cranfield University.png" alt="">
                  <div class="univ-testi">
                    <p>University Testimonial</p>
                  </div>
                  <p>“ We decided to setup our university regional office in India last year with Crizac and immediately noticed the positive atmosphere and the importance they brought to our student recruitment. The level of organization, fairness & detail they brought to the recruitment process is commendable. Their commitment to creating a win for all involved is something I like a lot.<br>
The team is very pro-active and knowledgeable and the information given to me enabled us to make informed decisions.  The team works in a collaborative manner, with common goal in mind. I absolutely know I could not have done this number from India without their valuable assistance.”</p>
                  <div class="testi-author"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/Sarah Caine.png" alt="img">
                    <div class="ta-info">
                      <h6>Sarah Caine</h6>
                      <span>Director (Global Engagement)<br>
                      Cranfield University, UK</span>
                    </div>
                  </div>
                </div>
                                <div class="single-testimonial">
                 <img class="img-fluid mb-30" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/no_image.png" alt="">
                  <div class="univ-testi">
                    <p>Agent Testimonial</p>
                  </div>
                  <p>“ We are very satisfied with our association with Crizac. Over the years their error free working methods and dedicated staffs have strengthened the bond even more. Looking forward to many more years of rock solid association.”</p>
                  <div class="testi-author"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/Anurag Lohia_G9-Abroad.png" alt="img">
                    <div class="ta-info">
                      <h6>Anurag Lohia</h6>
                      <span>G9 Abroad Education Consultancy</span>
                    </div>
                  </div>
                </div>
                <div class="single-testimonial">
                <img class="img-fluid mb-30" src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/no_image.png" alt="">
                  <div class="univ-testi">
                    <p>Agent Testimonial</p>
                  </div>
                  <p>“ We are happy with the unconditional support from Crizac. Their experience and presence in most of the countries have helped us immensely to connect with our business partners and students from different parts of the world. The team believes in grow and let grow! Together it has been an amazing journey so far. Looking forward to many more such years!”</p>
                  <div class="testi-author"> <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/testimonial/Samir Burbere_Skillsoft.png" alt="img">
                    <div class="ta-info">
                      <h6>Samir Burbere</h6>
                      <span>Skillsoft Overseas Education</span>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     testimonial-area-end ----End-->

    <!-- eventes-area -->
    <section id="eventes" class="eventes-area event-mobile-section fix pt-150 pb-150 position-relative">
      <div class="container ">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-title center-align text-left mb-50">
              <h2 class="d-lg-block d-none">Our Presence </h2>
              <h2 class="d-lg-none d-block"> Our Presence  </h2>
              <p>Connect with TSIC will help you to connect vast network of Universities & Course. Let’s Explore best Universities & Courses for you!</p>
              <div class="slider-btn mt-30"> <a href="mailto:admin@gmail.com?subject=Connect with us from Ushine"
        target="_blank" class="btn ss-btn d-lg-block d-none"
                  data-animation="fadeInRight" data-delay=".8s">connect with us</a> <a href="mailto:admin@gmail.com?subject=Connect with us from Ushine"
        target="_blank" class="btn ss-btn-get-join d-lg-none d-block" data-animation="fadeInRight" data-delay=".8s">connect
                  with us</a> </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12 pl-120 pr-0">
            <div class="row">
              <div class="col-lg-6 mb-20">
                <div class="counter-block br-bottom-white">
                  <h1 style="color: #fec663;">
                				<span class="counter" >400</span>+
                <p>Universities</p>
                                </h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-20 pr-lg-0">
                <div class="counter-block br-bottom-blue">
                  <h1 style="color: #fec663;">
                  				<span class="counter">1,000</span>+
                                </h1>
                  <p>Colleges</p>
                </div>
              </div>
              <div class="col-lg-6 mb-20 pl-lg-0" style="color: #fec663;">
                <div class="counter-block br-bottom-white">
                  <h1 style="color: #fec663;" >
                				<span class="counter"> 80,000 </span>+
                                </h1>
                  <p>Courses</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 pr-lg-0">
                <div class="counter-block br-bottom-white">
                <h1 style="color: #fec663;">
                				<span class="counter"> 500,000 </span>+
                                </h1>
                  <p>Drivers</p>
                </div>
              </div>
              <div class="col-lg-6 mt-4 mt-lg-0 pl-lg-0">
                <div class="counter-block br-bottom-blue">
                  <h1 style="color: #fec663;"> <span class="counter"> 6 </span>+ </h1>
                  <p>countries</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-blue-1"></div>
    </section>
    <!-- eventes-area-end -->


     <!--
        <section class="global-faq-area mobileFaqGlobalBlock fix pb-150 p-relative d-lg-block d-none">
            <div class="container">
                <div class="col-lg-12 p-0">
                    <div class="section-title platform center-align text-center mb-0">
                        <h2 class="">
                            Frequently Asked Questions (FAQs) </h2>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 m-auto pr-0 pl-0">
                        <div class="faq-content mt-0 mt-lg-4">
                            <div class="accordion" id="accordionExampleone">
                                <div class="card border-0 rounded mb-lg-0">
                                    <a data-toggle="collapse" href="#collapseone"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapseone">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingfifone">

                                            <h6 class="title1 mb-0"> 1. Benefits
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseone" class="collapse" aria-labelledby="headingfifone"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">To avail the services of the Global Catalyst
                                                Program, an institution enters an agreement with Crizac which lays down
                                                the service level agreement for Crizac and the university. This also
                                                includes a set of events to be carried out according to the agreed
                                                schedule and market objectives.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-0">
                                    <a data-toggle="collapse" href="#collapsetwo"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsetwo">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingtwo">
                                            <h6 class="title1 mb-0"> 2. Global Catalyst Program is for
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Any institution from across the globe which has a
                                                reputation towards a diverse student community and also ensures global
                                                acceptance of the programs and certifications offered by them.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-0">
                                    <a data-toggle="collapse" href="#collapsethree"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsethree">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingthree">
                                            <h6 class="title1 mb-0"> 3. Roles & Responsibilities
                                                Global?
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Evangelize about the products and services offered
                                                by Crizac among the peer groups in their institution. Act as a single
                                                point of contact between all the users of the portal from that
                                                institution and Edumpus. Carry out engagement activities within their
                                                institution as advised by Crizac.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-0">
                                    <a data-toggle="collapse" href="#collapsefour"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingfour">
                                            <h6 class="title1 mb-0">
                                                4. Sign-Up Procedure</h6>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Click here to move to the sign-up form and fill the
                                                necessary details. Towards the end of the process, the terms &
                                                conditions are listed which is the online agreement between Crizac and
                                                the Channel Partner.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="global-faq-area mobileFaqGlobalBlock fix pb-120 p-relative d-lg-none d-block">

            <div class="container">
                <div class="col-lg-12 p-0">
                    <div class="section-title platform center-align text-center mb-0">
                        <h2 class="mb-3">
                            Frequently Asked Questions (FAQs) </h2>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 m-auto pr-0 pl-0">
                        <div class="faq-content mt-0 mt-lg-4">
                            <div class="accordion" id="accordionExampleone">
                                <div class="card border-0 rounded mb-lg-3">
                                    <a data-toggle="collapse" href="#collapseone"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapseone">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingfifone">

                                            <h6 class="title1 mb-0"> 1. Benefits
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapseone" class="collapse" aria-labelledby="headingfifone"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">To avail the services of the Global Catalyst
                                                Program, an institution enters an agreement with Crizac which lays down
                                                the service level agreement for Crizac and the university. This also
                                                includes a set of events to be carried out according to the agreed
                                                schedule and market objectives.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-3">
                                    <a data-toggle="collapse" href="#collapsetwo"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsetwo">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingtwo">
                                            <h6 class="title1 mb-0"> 2. Global Catalyst Program is for
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Any institution from across the globe which has a
                                                reputation towards a diverse student community and also ensures global
                                                acceptance of the programs and certifications offered by them.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-3">
                                    <a data-toggle="collapse" href="#collapsethree"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsethree">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingthree">
                                            <h6 class="title1 mb-0"> 3. Roles & Responsibilities
                                                Global?
                                            </h6>
                                        </div>
                                    </a>
                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Evangelize about the products and services offered
                                                by Crizac among the peer groups in their institution. Act as a single
                                                point of contact between all the users of the portal from that
                                                institution and Edumpus. Carry out engagement activities within their
                                                institution as advised by Crizac.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 rounded mb-lg-3">
                                    <a data-toggle="collapse" href="#collapsefour"
                                        class="faq position-relative collapsed" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        <div class="card-header border-0 bg-light py-2 py-4" id="headingfour">
                                            <h6 class="title1 mb-0">
                                                4. Sign-Up Procedure</h6>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordionExampleone" style="">
                                        <div class="card-body py-2 py-4 p-0">
                                            <p class=" mb-3 faq-ans">Click here to move to the sign-up form and fill the
                                                necessary details. Towards the end of the process, the terms &
                                                conditions are listed which is the online agreement between Crizac and
                                                the Channel Partner.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
 -->

  <!-- main-area-end in home.tpl page -->
<script src="https://designslab.net/demo/ushine/js/admin/view/javascript/common.js" type="text/javascript"></script>
<script type="text/javascript">
function buttoncoupon1()
{
	var a = document.getElementById("searchtext").value;
	var url = "&search="+a;
	window.location.href = "/index.php?route=product/manufacturer"+url;
}





function runScript(e) {
    //See notes about 'which' and 'key'
    if (e.keyCode == 13) {
       /* $.ajax({
		url: 'index.php?route=module/html&search='+$('#tab-coupon input[name=\'search\']').val(),
		type: 'post',
		dataType: 'html',
		success: function(html) {
			window.location.href = "/index.php?route=product/search&search="+$('#tab-coupon input[name=\'search\']').val();
		}
	});*/
	var a = $('#tab-coupon input[name=\'search\']').val();
	var b = $('select[name=\'category_id\']').val();
	var c = $('select[name=\'category_id4\']').val();
	var d = $('select[name=\'category_id6\']').val();
	var url = "&search="+a;
	if(b != '0')
	{
		 url += "&category_id="+b;
	}
	if(c != '0')
	{
		 url += "&category_id4="+c;
	}
	if(d != '0')
	{
		 url += "&category_id6="+d;
	}
	window.location.href = "/index.php?route=product/search"+url;
    }
}

//--></script>
 <script type="text/javascript">


$('#button-coupon').on('click', function(e) {
	//alert($('#tab-coupon input[name=\'search\']').val());
	var a = $('#tab-coupon input[name=\'search\']').val();
	var b = $('select[name=\'category_id\']').val();
	var c = $('select[name=\'category_id4\']').val();
	var d = $('select[name=\'category_id6\']').val();
	var url = "&search="+a;
	if(b != '0')
	{
		 url += "&category_id="+b;
	}
	if(c != '0')
	{
		 url += "&category_id4="+c;
	}
	if(d != '0')
	{
		 url += "&category_id6="+d;
	}
	window.location.href = "/index.php?route=product/search"+url;
/* $.ajax({
		url: 'index.php?route=module/html&search='+$('#tab-coupon input[name=\'search\']').val(),
		type: 'post',
		dataType: 'html',
		success: function(html) {
			window.location.href = "/index.php?route=product/search&search="+$('#tab-coupon input[name=\'search\']').val();
		}
	});*/

});



function runScript(e) {
    //See notes about 'which' and 'key'
    if (e.keyCode == 13) {
       /* $.ajax({
		url: 'index.php?route=module/html&search='+$('#tab-coupon input[name=\'search\']').val(),
		type: 'post',
		dataType: 'html',
		success: function(html) {
			window.location.href = "/index.php?route=product/search&search="+$('#tab-coupon input[name=\'search\']').val();
		}
	});*/
	var a = $('#tab-coupon input[name=\'search\']').val();
	var b = $('select[name=\'category_id\']').val();
	var c = $('select[name=\'category_id4\']').val();
	var d = $('select[name=\'category_id6\']').val();
	var url = "&search="+a;
	if(b != '0')
	{
		 url += "&category_id="+b;
	}
	if(c != '0')
	{
		 url += "&category_id4="+c;
	}
	if(d != '0')
	{
		 url += "&category_id6="+d;
	}
	window.location.href = "/index.php?route=product/search"+url;
    }
}


function selectintake()
{
var searchtext = document.getElementById("searchtext").value;
//var category_id = $("#category_id").val();
if(searchtext == "")
{
alert("Please type a course keyword");
}
else
{
$.ajax({
type: "POST",
url: "/https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/template/module/get_intake.php",
data:'searchtext='+searchtext,
success: function(result){

$("#category_id").html(result);
}
});
//---Get University--
$.ajax({
type: "POST",
url: "/https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/template/module/get_univ.php",
data:'searchtext='+searchtext,
success: function(result){

$("#category_id6").html(result);
}
});
//---Get Intake--
$.ajax({
type: "POST",
url: "/https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/template/module/get_type.php",
data:'searchtext='+searchtext,
success: function(result){

$("#category_id4").html(result);
}
});
}
}

function selectunivfilter()
{
	var searchtext = document.getElementById("searchtext").value;
	var category_id = $("#category_id").val();
	$.ajax({
type: "POST",
url: "/https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/template/module/get_univfilter.php",
data:'category_id='+category_id+'&searchtext='+searchtext,
success: function(result){

$("#category_id6").html(result);
}
});
}

function selectfilterintake()
{
	var searchtext = document.getElementById("searchtext").value;
	var category_id = $("#category_id").val();
	$.ajax({
type: "POST",
url: "/https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/template/module/get_univfilterintake.php",
data:'category_id='+category_id+'&searchtext='+searchtext,
success: function(result){

$("#category_id4").html(result);
}
});
}

$('input[name=\'searchtext\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=common/home/autocomplete&searchtext=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['name']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'searchtext\']').val(item['label']);
	}
});
</script>
<br>
      <!--start Blog Section-->
        <!--start Blog Section-->

  </main>
      </div>


</div>



<!--

  $ospans: allow overrides width of columns base on thiers indexs. format array( column-index=>span number ), example array( 1=> 3 )[value from 1->12]

 -->












<footer id="footer" class="nostylingboxs">






  <div id="my-modal" class="modal-opening">
         <div class="close-modal fadeIn"></div>
            <img src="https://ushine.ca/img/comingsoon.png" style="margin:0px auto;" class="hatch img-responsive">
</div>

<link rel="stylesheet" type="text/css" href="https://www.crizac.co.uk/catalog/view/javascript/modal/quickmodal.css">
<link rel="stylesheet" type="text/css" href="https://www.crizac.co.uk/catalog/view/javascript/modal/animations.css">
<script type="text/javascript" src="https://www.crizac.co.uk/catalog/view/javascript/modal/jquery.quick-modal.js"></script>
<script type="text/javascript">
            $(document).ready(function() {
                $('.open-modal').click(function() {
                    $('#my-modal').quickModal('open');
                    return false;
                });

                $('#close-button').click(function() {
                    $('#my-modal').quickModal('close');
                    return false;
                });
            });
</script>







</footer>


</div>

<!-- offcanvas-area -->
<div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <div class="sidebar-box-inner">
            <div class="sidebar-form-header">
                <h2>Have A Query?</h2>
            </div>
            <div class="row"><div class="col-md-12" id="success_message" style="color: green;"></div></div>
            <div class="popupForm">
                <div class="input-group">
                    <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/user.png" alt="">
                    <input class="input--style-4" placeholder="Enter Your Name" onfocus="this.placeholder=''"
                        onblur="this.placeholder='John Doe'" type="text" name="name">
                </div>
                <div class="input-group">
                    <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/at.png" alt="">
                    <input class="input--style-4" placeholder="Enter a valid E-mail Address" type="email"
                        onfocus="this.placeholder=''" onblur="this.placeholder='Enter a valid E-mail Address'"
                        name="email">
                </div>
                <div class="input-group">
                    <img src="https://www.crizac.co.uk/catalog/view/theme/lexus_mayshop/new_design/img/resource/phone-call.png" alt="">
                    <input class="input--style-4" placeholder="Contact Number" type="tel" onfocus="this.placeholder=''" onblur="this.placeholder='Contact Number'" name="contactnumber">
                </div>
                <div class="input-group">
                    <textarea class="form-control" name="enquiry" id="" cols="30" placeholder="Type your enquiry here" rows="10" onfocus="this.placeholder=''" onblur="this.placeholder='Type your enquiry here'"></textarea>
                </div>
                <button name="submit" value="SUBMIT NOW" class="btn ss-btn" onClick="sendMail()">submit</button>

            </div>

            <div class="br-bottom-form"></div>

            <div class="account-block text-center">
                <p>Don’t have an Account?</p>
                <p class="create">Create an account and make your business easy.</p>
                <a href="/affiliate-register" class="btn ss-btn-get-join mt-lg-2 mt-4 mb-4 mb-lg-4"
                    data-animation="fadeInRight" data-delay=".8s">get started</a>
            </div>

        </div>

    </div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-end -->
<script type="text/javascript">
function sendMail()
{
$('input[name="name"]').css("border-color", "");
$('input[name="email"]').css("border-color", "");
$('input[name="contactnumber"]').css("border-color", "");
var name = $('input[name="name"]').val();
var email = $('input[name="email"]').val();
var enquiry = $('textarea[name="enquiry"]').val();
var contactnumber = $('input[name="contactnumber"]').val();
var flag = 1;
$('#success_message').html('');
if(!name)
{
	$('input[name="name"]').css("border-color", "red");
	flag = 0;
}
if(!email)
{
	$('input[name="email"]').css("border-color", "red");
	flag = 0;
}
if(!contactnumber)
{
	$('input[name="contactnumber"]').css("border-color", "red");
	flag = 0;
}
if(!enquiry)
{
	$('textarea[name="enquiry"]').css("border-color", "red");
	flag = 0;
}
if(flag == 1)
{
$.ajax({
		type: "POST",
		url: 'index.php?route=information/contact/askNow',
		data: 'name='+name+'&email='+email+'&contactnumber='+contactnumber+'&enquiry='+enquiry,
		dataType: "html",
		beforeSend: function() {
		$("#overlay").show();
		},
        complete: function() {
		$("#overlay").hide();
        },
        success: function(result) {
		$('#success_message').html('');
		$('#success_message').html(result);
		$('input[name="name"]').val('');
		$('input[name="email"]').val('');
		$('textarea[name="enquiry"]').val('');
		$('input[name="contactnumber"]').val('');
	    },
        error: function(err) {
        alert(err);
        }
      });
}
}
</script>

</div>

<!-- JS here -->

  <!--Start Script for Light Gallery Manufacturer Page-->
  <!--<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.14/js/lightgallery-all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <script type="text/javascript">
        $(document).ready(() => {
            $("#lightgallery").lightGallery({
                pager: false
            });
        });
    </script>-->
    <script>
        (function (window) {
            "use strict";

            function extend(a, b) {
                for (var key in b) {
                    if (b.hasOwnProperty(key)) {
                        a[key] = b[key];
                    }
                }
                return a;
            }

            function CBPFWTabs(el, options) {
                this.el = el;
                this.options = extend({}, this.options);
                extend(this.options, options);
                this._init();
            }

            CBPFWTabs.prototype.options = {
                start: 0
            };

            CBPFWTabs.prototype._init = function () {
                // tabs elems
                this.tabs = [].slice.call(this.el.querySelectorAll("nav > ul > li"));
                // content items
                this.items = [].slice.call(
                    this.el.querySelectorAll("section")
                );
                // current index
                this.current = -1;
                // show current content item
                this._show();
                // init events
                this._initEvents();
            };

            CBPFWTabs.prototype._initEvents = function () {
                var self = this;
                this.tabs.forEach(function (tab, idx) {
                    tab.addEventListener("click", function (ev) {
                        ev.preventDefault();
                        self._show(idx);
                    });
                });
            };

            CBPFWTabs.prototype._show = function (idx) {
                if (this.current >= 0) {
                    this.tabs[this.current].className = this.items[this.current].className =
                        "";
                }
                // change current
                this.current =
                    idx != undefined
                        ? idx
                        : this.options.start >= 0 && this.options.start < this.items.length
                            ? this.options.start
                            : 0;
                this.tabs[this.current].className = "tab-current";
                this.items[this.current].className = "content-current";
            };

            // add to global namespace
            window.CBPFWTabs = CBPFWTabs;
        })(window);

        (function () {
            [].slice.call(document.querySelectorAll(".tabs")).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();

    </script>
    <script>
        $("a[data-scroll]").on("click", function (event) {
            var target = $(this.getAttribute("href"));
            if (target.length) {
                event.preventDefault();
                $("html, body")
                    .stop()
                    .animate({
                        scrollTop: target.offset().top - 150
                    }, 800);
            }
        });
    </script>
  <!--End Script for Manufacturer Page-->
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
  <script>$('.counter').counterUp({
      delay: 10,
      time: 2000
    });
    $('.counter');</script>
  <script>

    (function ($) {
      'use strict';
      /*==================================================================
          [ Daterangepicker ]*/
      try {
        $('.js-datepicker').daterangepicker({
          "singleDatePicker": true,
          "showDropdowns": true,
          "autoUpdateInput": false,
          locale: {
            format: 'DD/MM/YYYY'
          },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click', function () {
          isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker', function (ev, picker) {
          isClick = 0;
          $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click', function (e) {
          e.stopPropagation();

          if (isClick === 1) isClick = 0;
          else if (isClick === 0) isClick = 1;

          if (isClick === 1) {
            myCalendar.focus();
          }
        });

        $(myCalendar).on('click', function (e) {
          e.stopPropagation();
          isClick = 1;
        });

        $('.daterangepicker').on('click', function (e) {
          e.stopPropagation();
        });


      } catch (er) { console.log(er); }
      /*[ Select 2 Config ]
          ===========================================================*/

      try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
          var that = $(this);
          var selectBox = that.find('select');
          var selectDropdown = that.find('.select-dropdown');
          selectBox.select2({
            dropdownParent: selectDropdown
          });
        });

      } catch (err) {
        console.log(err);
      }
    })(jQuery);
  </script>
  <script>
    let dateDropdown = document.getElementById('date-dropdown');

    let currentYear = new Date().getFullYear();
    let earliestYear = 1970;
    while (currentYear >= earliestYear) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear;
      dateOption.value = currentYear;
      dateDropdown.add(dateOption);
      currentYear -= 1;
    }
  </script>
  <script>

    (function () {
      var quotes = $(".quotes"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1000).delay(1000).fadeOut(1000, showNextQuote); }
      showNextQuote();
    })();


    (function () {
      var quotes = $(".quotes2"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1500).delay(1500).fadeOut(1500, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes3"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1250).delay(1250).fadeOut(1250, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes4"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1900).delay(1900).fadeOut(1900, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes5"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1100).delay(1100).fadeOut(1100, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes6"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1900).delay(1900).fadeOut(1900, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes7"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1750).delay(1750).fadeOut(1750, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes8"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1400).delay(1400).fadeOut(1400, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes666"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(2400).delay(2400).fadeOut(2400, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes11"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1000).delay(1000).fadeOut(1000, showNextQuote); }
      showNextQuote();
    })();


    (function () {
      var quotes = $(".quotes22"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1500).delay(1500).fadeOut(1500, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes33"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1250).delay(1250).fadeOut(1250, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes44"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1900).delay(1900).fadeOut(1900, showNextQuote); }
      showNextQuote();
    })();

    (function () {
      var quotes = $(".quotes55"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1100).delay(1100).fadeOut(1100, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes66"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1900).delay(1900).fadeOut(1900, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes77"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1750).delay(1750).fadeOut(1750, showNextQuote); }
      showNextQuote();
    })();
    (function () {
      var quotes = $(".quotes88"); var quoteIndex = -1; function showNextQuote() { ++quoteIndex; quotes.eq(quoteIndex % quotes.length).fadeIn(1400).delay(1400).fadeOut(1400, showNextQuote); }
      showNextQuote();
    })();
  </script>
    <script type="text/javascript">
			$(document).ready(function () {
		  //alert(1);
				var store_id = 1;


				if(store_id == 0)
				{
					$.ajax({
						  url: 'index.php?route=account/logout',
						  success: function(result) {
						 // window.location = result;
							   if (!false) {
								// alert('session');
								} else {
								//  alert('work')
								 location.reload();
								}
						  },
						  error: function(err) {
						  alert(err);
						  }
					  });
					//if(window.location.href.indexOf("logout") > -1)
//					{
//						 alert("your url contains the name franky");
//					}
				//window.location.href = "https://www.crizac.com/logout/";
				}
				});
		  </script>
 <script type="text/javascript">
$(".toggle-password").click(function () {

	$(this).toggleClass("far fa-eye fas fa-eye-slash");
	var input = $($(this).attr("toggle"));
	if (input.attr("type") == "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});</script>
<script>
        $(".toggle-password-enter").click(function () {

            $(this).toggleClass("far fa-eye fas fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });</script>
    <script>
        $(".toggle-password-confirm").click(function () {

            $(this).toggleClass("far fa-eye fas fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });</script>
 <!--Start About Us Page Script-->
 <script type="text/javascript">

        $('.story_slider').slick({

            arrows: false,

            autoplay: true,

            autoplaySpeed: 2000,

            loop: true,

            fade: true,

            cssEase: 'linear',

            speed: 1000,

            autoplaySpeed: 2000,

        });

    </script>
   <!--Script for Page Loader-->
    <script type="text/javascript">
	document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('page').style.visibility="visible";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('loader').style.visibility="hidden";
         document.getElementById('page').style.visibility="visible";
      },1000);
  }
}
</script>

    <script type="text/javascript">

        (function () {

            "use strict";



            // define variables

            var items = document.querySelectorAll(".timeline li");



            // check if an element is in viewport

            // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport

            function isElementInViewport(el) {

                var rect = el.getBoundingClientRect();

                return (

                    rect.top >= 0 &&

                    rect.left >= 0 &&

                    rect.bottom <=

                    (window.innerHeight || document.documentElement.clientHeight) &&

                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)

                );

            }



            function callbackFunc() {

                for (var i = 0; i < items.length; i++) {

                    if (isElementInViewport(items[i])) {

                        items[i].classList.add("in-view");

                    }

                }

            }



            // listen for events

            window.addEventListener("load", callbackFunc);

            window.addEventListener("resize", callbackFunc);

            window.addEventListener("scroll", callbackFunc);

        })();



    </script>
    <!--Start About Us Page Script-->
</body>
<script>
    const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContent = document.querySelector("ul.marquee-content");

root.style.setProperty("--marquee-elements", marqueeContent.children.length);

for(let i=0; i<marqueeElementsDisplayed; i++) {
  marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}
</script>
</html>
