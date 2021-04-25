<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="/css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="/css/animate.css" rel="stylesheet">

    <!-- Custom styles CSS -->
    <link href="/css/style.css" rel="stylesheet" media="screen">

    <script src="/js/modernizr.custom.js"></script>

</head>
<body class="body">

    <main class="main">
          @yield('content')
    </main>

@extends('partials.footer')
</body>