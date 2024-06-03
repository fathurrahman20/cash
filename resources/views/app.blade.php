<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Web App untuk mengatur kas">
  <meta name="keywords" content="studi kasus kas">
  <meta name="author" content="kas">
  <meta name="robots" content="index, follow">
  <!-- Penambahan tag Open Graph untuk media sosial -->
  <meta property="og:title" content="belajar laravel dengan metode studi kasus aplikasi kas">
  <meta property="og:description" content="belajar laravel">
  <meta property="og:image" content="URL gambar thumbnail untuk tampilan di media sosial">
  <meta name="google-site-verification" content="q_5TEbHUcVKk_pjSKvTLk0Sw73YQeaC_oKJFGK-UP0M" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">
  <link rel="shortcut icon" href="{{ asset('/assets/images/logo.png') }}" />
  @viteReactRefresh
  @vite('resources/js/app.jsx')
  @inertiaHead
</head>
<body class="hold-transition sidebar-mini" style="background-color:#fefeff!important;  overflow-x: hidden">

    @inertia
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

