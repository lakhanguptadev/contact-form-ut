<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Welcome to the Contacts form from packages</h1>
    <form method="POST" action="/contacts">
    @csrf
    <input type="text" placeholder="Please enter your name" name="name"/>
    <input type="email" name="email" placeholder="enter your email"/>
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
    ...
</form>
</body>
</html>