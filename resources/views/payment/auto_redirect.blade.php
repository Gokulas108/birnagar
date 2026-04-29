<!DOCTYPE html>
<html>

<head>
    <title>Redirecting to Payment Gateway...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ url('/favicon.ico') }}?v={{ filemtime(public_path('images/logo.png')) }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}?v={{ filemtime(public_path('images/logo.png')) }}" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: #f9f9f9;
        }

        .box {
            text-align: center;
        }

        .spinner {
            margin: 20px auto;
            width: 40px;
            height: 40px;
            border: 4px solid #ddd;
            border-top: 4px solid #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="box">
        <h3>Redirecting to secure payment...</h3>
        <div class="spinner"></div>
        <p>Please do not refresh or press back.</p>
    </div>

    <script>
        // 🔥 Critical delay to establish domain context
        setTimeout(function() {
            window.location.href = "{{ $redirectUrl }}";
        }, 500);
    </script>
</body>

</html>