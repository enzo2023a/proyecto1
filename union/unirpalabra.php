<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>ejercicio</h2>
  <form method="post" action="funcionunirpalabra.php">
    <div class="mb-3 mt-3">
      <label for="ee">primera palabra:</label>
      <input type="string" class="form-control" id="" placeholder="ingrese palabra" name="palabra1">
    </div>
    <div class="mb-3">
      <label for="ee">palabra2:</label>
      <input type="string" class="form-control" id="" placeholder="ingrese palabra" name="palabra2">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
