<h1>Content</h1>

<?php 

$sc= new SitoController('home ');
$pizze= $sc->menuPizza();

//var_dump($pizze);

foreach ($pizze as  $pizza) {
    echo '<br>'.$pizza->menu(); // __tostring della pizza
}










?>