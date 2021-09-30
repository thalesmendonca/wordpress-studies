<?php
//Funções da page-home
add_action('cmb2_admin_init','cmb2_fields_home');
function cmb2_fields_home(){
    $title = new_cmb2_box([
        'id' => 'title_box',
        'title' => 'Titulo do site',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
        
    ]);
    $title->add_field([
        'name' => 'Título do Site',
        'id' => 'titulo-site',
        'type' => 'text',
    ]);
    $title->add_field([
        'name' => 'Citação Princiapl',
        'id' => 'citacao',
        'type' => 'text',
    ]);
    $title->add_field([
        'name' => 'Autor da citação pricipal',
        'id' => 'autor',
        'type' => 'text',
    ]);

    $secaoProdutos = new_cmb2_box([
        'id' => 'secaoProdutos_box',
        'title' => 'Seção de Produtos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $secaoProdutos->add_field([
        'name' => 'Chamada pra ação do botão',
        'id' => 'chamada-produtos',
        'type' => 'text',
    ]);

    $secaoPortfolio = new_cmb2_box([
        'id' => 'secaoPortfolio_box',
        'title' => 'Seção de Portfolio',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ]
    ]);
    $secaoPortfolio->add_field([
        'name' => 'Chamada pra ação do botão',
        'id' => 'chamadaPortfolio',
        'type' => 'text',
    ]);
    
}
?>