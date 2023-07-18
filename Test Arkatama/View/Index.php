<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="../Controller/UserController.php" method="post">
            <div class="mb-3">
                <label for="inputData" class="form-label">Masukkan data (NAMA USIA KOTA):</label>
                <input type="text" class="form-control" id="inputData" name="inputData" required>
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>

