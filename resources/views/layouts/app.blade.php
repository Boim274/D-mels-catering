<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title','D\'Mels Catering')</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700" rel="stylesheet">

@vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-background-light font-display text-slate-900">

@include('components.navbar')

<main>
@yield('content')
</main>

@include('components.footer')
@include('components.whatsapp')

</body>
</html>