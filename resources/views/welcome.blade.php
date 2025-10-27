<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPM Bina Insani Purwokerto</title>

    <!-- Tailwind (browser build) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Inter font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }
    </style>
</head>

<body class="min-h-screen">
    <!-- Background video -->
    <div class="fixed inset-0 -z-10 overflow-hidden" aria-hidden="true">
        <iframe
            class="absolute top-1/2 left-1/2 min-w-full min-h-full w-auto h-auto -translate-x-1/2 -translate-y-1/2 object-cover pointer-events-none"
            width="560" height="315"
            src="https://www.youtube.com/embed/U25zg7m49vo?si=2uzok_BG00EU18UW&controls=0&autoplay=1&mute=1&rel=0&modestbranding=1&loop=1&playlist=U25zg7m49vo&playsinline=1"
            title="Background video" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>

        <!-- Dark overlay above the video -->
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>
    </div>

    <!-- Foreground content -->
    <div class="relative z-10 min-h-screen flex items-center justify-center text-white p-8">
        <img src="{{ asset('images/assets/logo.png') }}" alt="PPM BINA INSANI PURWOKERTO logo"
            class="w-40 h-40 object-contain mr-6" />
        <div>
            <h1 class="text-3xl font-semibold">Sejak 2014</h1>
            <h2 class="text-3xl">PPM BINA INSANI PURWOKERTO</h2>
            <p class="mt-4 text-lg">Membentuk Mubaligh yang Sarjana dan Sarjana Yang Mubaligh</p>
            <a href="{{ route('home') }}"
                class="mt-4 inline-block text-white rounded-2xl border-2 border-white px-6 py-2 text-lg transition">Jelajahi</a>
        </div>
    </div>
</body>

</html>