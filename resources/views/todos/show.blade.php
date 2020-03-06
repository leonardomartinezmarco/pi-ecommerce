<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{$todo->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">{{$todo->name}}</h1>
        <p>{{$todo->description}}</p>
        <a href="/todos">Voltar</a>
    </div>
</body>
</html>
