<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to Payment Gateway...</title>
</head>
<body>
    <p>Redirecting to payment gateway, please wait...</p>

    <form id="gatewayForm" action="{{ $redirectUrl }}" method="POST">
        <!-- If gateway requires POST params, add hidden inputs here -->
        <!-- <input type="hidden" name="param" value="value"> -->
    </form>

    <script>
        document.getElementById('gatewayForm').submit();
    </script>
</body>
</html>