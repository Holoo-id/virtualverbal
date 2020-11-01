<!-- @if (Auth::viaRemember())
    <p> erhsasil</p>
@else
    <p> Gagal </p>
@endif -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Send! if not, click <a href="{{route('verification.send')}}">here</a></p>
</body>
</html>