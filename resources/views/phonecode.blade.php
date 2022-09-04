<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::phoneNumber('+212642386556')
 !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
            {!! QrCode::SMS('555-555-5555', 'Body of the message')
 !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>wifi QR Code</h2>
            </div>
            <div class="card-body">
            {!! QrCode::wiFi([
    'ssid' => 'home',
    'encryption' => 'WPA',
    'password' => '0642386556@othman'
]);
 !!}
            </div>
        </div>
    </div>
</body>

</html>