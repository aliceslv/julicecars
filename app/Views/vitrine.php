<?php
/**
 * @var array $listadDeCarros
 */?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container"> 
    <h2>Seu novo carro está aqui!</h2>
    <table class="table table-hover table-success">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">marca</th>
      <th scope="col">ano</th>
      <th scope="col">km</th>
      <th scope="col">modelo</th>
      <th scope="col">motor</th>
      <th scope="col">valor</th>
      <th scope="col">cor</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach ($listaDeCarros as $item): 
    ?>
        <tr>
            <th scope="row"><?= $item['id'] ?></th>
            <td><?= $item['marca'] ?></td>
            <td><?= $item['ano'] ?></td>
            <td><?= $item['km'] ?></td>
            <td><?= $item['modelo'] ?></td>
            <td><?= $item['motor'] ?></td>
            <td><?= $item['valor'] ?></td>
            <td><?= $item['cor'] ?></td>
            <td>
              <div class="d-flex gap2">
                <a class="btn btn-sm btn-outline-primary" href ="#"> Editar </a>
                <a class="btn btn-sm btn-outline-danger" href ="#"> Excluir </a>
              </div>
            </td>
        </tr>
        <?php endforeach; ?>
  </tbody>
</table>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
</body>
</html>