<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCrm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            z-index: 1000;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            border-top: 1px solid #ccc;
            display: flex;
        }
        .bottom-nav a {
            flex: 1;
            text-align: center;
            padding: 10px 0;
            color: inherit;
            text-decoration: none;
            font-size: 14px;
        }
        .bottom-nav a .bi {
            display: block;
            font-size: 1.3em;
        }
        .main-content {
            margin-top: 0;
            margin-bottom: 70px;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        @media (min-width: 768px) {
            .card-img-top {
                height: 350px;
            }
        }
        .social-media {
            padding: 20px 0;
        }

        .social-media a {
            font-size: 1.5em;
            transition: color 0.3s;
        }

        .social-media a:hover {
            color: #007bff; /* yoki boshqa rang */
        }

        .social-media i {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('techer.index') }}"><img src="{{ env('CDN_LINK_TECHER')}}assets/img/logo/logo.png" alt="Logo" height="40"/></a>
    </div>