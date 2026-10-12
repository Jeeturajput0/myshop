<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{session('message')}}
    <form action="{{url('category/store')}}" method="post">
        @csrf
        <input type="text" name="name">
        <button type="submit">save</button>
    </form>
</body>
</html>