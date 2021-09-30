<?php

add_action('cmb2_admin_init', 'cmb2_fields_paginas_internas');

function cmb2_fields_paginas_internas() {
  $cmb = new_cmb2_box([
    'id' => 'paginas_internas_box',
    'title' => 'Páginas Internas',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => ['page-sobre.php', 'page-produtos.php', 'page-portfolio.php', 'page-contato.php'],
    ],
  ]);

  $cmb->add_field([
    'name' => 'Subtítulo',
    'id' => 'subtitulo',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Background Interno',
    'id' => 'background_interno',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);
}

?>