<?php

function getProducts() {
  $products = array(
    'Portátiles',
    'Computadores',
    'Servidores',
    'Tablets',
    'Apple',
    'Video Beams',
    'Televisores',
    'Sonido',
    'Xbox y PS4',
    'Impresoras',
    'Fotocopiadoras',
    'Scanners',
    'Redes',
    'Internet Móvil',
    'UPS'
  );

  return json_encode($products);
}


?>
