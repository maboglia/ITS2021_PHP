<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Param::TITOLO ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?= Param::TITOLO ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach (Param::MENU_HR as $collegamento): ?>  
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=$collegamento[1]?>"><?=$collegamento[0]?></a>
            </li>
        <?php endforeach; ?>

        <?php if (isset($_SESSION['logged'])): ?>

            <li class="nav item">
                <a href="?src=addLibro" class="nav-link">aggiungi libro</a>
            </li>

        <?php endif; ?>  
        
        <li class="nav-item">
            <?php if (!isset($_SESSION['logged'])): ?>
                <a class="btn btn-sm btn-outline-secondary" href="?src=login">Area riservata</a>
            <?php else : ?>
                <a class="btn btn-sm btn-outline-secondary" href="?src=logout"><?= $_SESSION['logged']?> logout</a>
            <?php endif; ?>  
        </li>
    </ul>
        
    </div>
  </div>
</nav>


    <div class="container">