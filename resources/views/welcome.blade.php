<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="mockup-browser border border-base-300 vh-100">
        {{-- mockup component (window) --}}
        <div class="mockup-browser-toolbar">
            <div class="input border border-base-300">https://kazimarufulislam.com</div>
        </div>
        <div class="flex justify-center px-4 py-16 border-t border-base-300">
            {{-- hero component --}}

            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold"> Under maintenance</h1>
                    <p class="py-6">
                        “The site is currently under maintenance. We will put the site back up soon. Thank you for your
                        patience.”
                    </p>

                </div>
            </div>

        </div>
    </div>
</body>

</html>
