<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo, {{$name}}</h1>

    <form action="about"method="post">
        @csrf
        <input type="text" name="name" id="name"><dr><dr>
        <select name="department" id="department">
            @foreach ($departments as $key => $department)
            
            <option value="{{$key}}">{{$department}}</option>
            @endforeach
           
</select><dr><dr>
        <input type="submit" value="send">


    </form>
</body>
</html>