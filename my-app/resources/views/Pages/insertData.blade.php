<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>

<body>
    <h1>Insert Data</h1>
    <form action="/saveData" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="category"></input>
        <input type="text" name="heading"></input>
        <input type="text" name="description"></input>
        <input type="file" name="Image"></input>
        <input type="submit" name="submit"></input>
    </form>
</body>

</html>