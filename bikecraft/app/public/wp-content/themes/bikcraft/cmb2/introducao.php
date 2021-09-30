<?php
//Funções da page-home
add_action('cmb2_admin_init','cmb2_fields_introducao');
function cmb2_fields_introducao(){
    $cmb = new_cmb2_box([
        'id' => 'title_box',
        'title' => 'Introdução da página',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-home.php', 'page-sobre.php', 'page-produtos.php', 'page-contato.php', 'page-portfolio.php']
        ]
    ]);
    $cmb->add_field([
        'name' => 'Descrição da Página',
        'id' => 'descricao-pagina',
        'type' => 'text',
    ]);
}
?>