<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Icons Link -->
<link
  href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet"
/>

<!-- stylesheet -->
<link
  rel="stylesheet"
  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
/>
 
<!-- script -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
<!-- from node_modules -->
<script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>
 
<!-- from cdn -->
{{-- <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script> --}}
 
<!-- Font Awesome Link -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
  crossorigin="anonymous"
/>
        <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fontawesome/fontawesome-free/css/all.min.css">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>