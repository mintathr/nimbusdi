<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Situs Dalam Perbaikan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 500px;
            padding: 20px;
        }

        .container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ url('under-construction.jpeg') }}" alt="Under Construction">
        <h1>🚧 We're Working on Something Great</h1>
        <p>Our site is currently undergoing improvements to serve you better. Please check back again soon.</p>
    </div>
</body>
</html>
