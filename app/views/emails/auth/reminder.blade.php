<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Password Reset</h2>

<div class="container">
    <p>
        To reset your password, complete this form:
        <a href="{{ URL::to('password/reset', array($token)) }}">
            <strong>Reset password now</strong></a>
        <br/>
    </p>
    <p> If above link doesn't work, please copy and paste below link:
        <br/>
        {{ URL::to('password/reset', array($token)) }}</p>
    <br/>
    <span>This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.</span>

</div>
</body>
</html>
