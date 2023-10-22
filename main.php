<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-5 mt-5 text-center">
       <form action="form.php" method="get">
            <text class="fs-1 text-success">Calcule sua média final:</text><br>
            <div class="d-block">
                <label for=""  class="d-block mb-3 text-success">Digite seu nome:</label>
                <input type="text" class="form-control" placeholder="Nome do aluno" aria-label="Username" aria-describedby="basic-addon1" name="nome"><br>
                <label for=""  class="d-block mb-3 text-danger">Digite sua nota em matemática:</label>
                <input class="form-control" type="number" name="nota1"><br>
                <label for=""  class="d-block mb-3 text-primary">Digite sua nota em português:</label>
                <input class="form-control" type="number" name="nota2"><br>
                <label for="" class="d-block mb-3 text-info">Digite sua nota em geografia:</label>
                <input class="form-control" type="number" name="nota3"><br>
                <button class="btn btn-success" type="submit">Resultado</button>
            </div>
    </div>
  
</body>
</html>