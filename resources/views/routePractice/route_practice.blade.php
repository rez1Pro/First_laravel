<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The routing practice</title>
    <link rel="stylesheet" href="">
</head>
<body>
    This is For POST Method
    <form action="data" method="post" accept-charset="utf-8">
        @csrf
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
    <br>
    This is for PUT Method
        <form action="data" method="post" accept-charset="utf-8">
        @csrf
        @method('PUT') <!--- ';' Symbol is not supported---->
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
    <br>
    This is for Patch Method
        <form action="data" method="post" accept-charset="utf-8">
        @csrf
        @method('PATCH') <!--- ';' Symbol is not supported---->
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
    <br>
    This is for Delete Method
        <form action="data" method="post" accept-charset="utf-8">
        @csrf
        @method('DELETE') <!--- ';' Symbol is not supported---->
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
    <br>
    This is for Any Method
    <form action="/any-test" method="post" accept-charset="utf-8">
        @csrf
        @method('DELETE') <!--- ';' Symbol is not supported---->
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
        <br>
    This is for Match Method
    <form action="/any-test" method="post" accept-charset="utf-8">
        @csrf
        @method('DELETE') <!--- ';' Symbol is not supported---->
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> 
</body>
</html>