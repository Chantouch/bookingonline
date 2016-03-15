<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email activation</title>
</head>
<body>
<p>Thanks for creating an account.</p>
<p>Please follow the link below to confirm your email address.</p>
<p>{{URL::to('actionUsers/activate/'.$confirmation_token)}}</p>
</body>
</html>