<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form action="{{url('edit')}}" method="post">
        @crsf
        <input name="name" type="text">
        <input name="email" type="text">
        <input name="password" type="password">
        <input type="submit">
    </form>
</body>

</html>