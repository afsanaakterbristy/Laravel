<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Longin form</title>
</head>
<body>
    <form action="/student" method="POST">
     @csrf 
   <label for="">name</lavel>
    <input type="text" name="name" id="" class="form-control" placeholder="enter your name"/> <br><br>
    <span class="text-danger">
        @error('name')
        {{$message}}
        @enderror
</span>
<button type="submit">submit</button>
</form>
</body>
</html>