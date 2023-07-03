<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <title>Informasi Sekolah</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <section class="header">
        
    @include('partials.navbar')
    
    <div class="container">
        @yield('container')
    </div>
    </section>