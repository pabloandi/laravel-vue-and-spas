<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel VUE and SPAs </title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto bg-gray-200">
                <header class="py-6 mb-8">
                    <h1>
                        <img src="/img/logo.svg" alt="Tailwindcss" height="29.7px" width="157px">
                    </h1>
                </header>
                <main class="flex">
                    <aside class="w-1/6">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Brand</h5>
                            <ul class="list-reset ">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/">Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/colors">Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/typography">Typography</router-link></li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/loaders">Loaders & Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>
                    <div class="primary bg-red-200 flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
            <hr>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
