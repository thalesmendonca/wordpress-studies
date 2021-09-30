<?php

//Funções da page-sobre
add_action('cmb2_admin_init','cmb2_fields_sobre');
function cmb2_fields_sobre(){
    $secaoQualidade = new_cmb2_box([
        'id' => 'secao-qualidade_box',
        'title' => 'Seção Qualidade',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-sobre.php'
        ]
    ]);
    $secaoQualidade->add_field([
        'name' => 'Titulo da seção',
        'id' => 'titulo-qualidade',
        'type' => 'text',
    ]);
    $secaoQualidade->add_field([
        'name' => 'Imagem da seção qualidade',
        'desc'    => 'Envie uma Imagem.',
        'id' => 'img-qualidade',
        'type' => 'file',
        'text' => [
            'add_upload_file_text' => 'Adicionar imagem'
        ],
        'query_args' => [
            'type' => [
                'image/gif',
                'image/jpeg',
                'image/png',
            ],
        ],
        'preview_size' => 'medium',    
    ]);
    $secaoQualidade->add_field([
        'name' => 'Chamada pro botão',
        'id' => 'chamada-sobre',
        'type' => 'text',
    ]);
    $cards_qualidade = $secaoQualidade->add_field([
        'name' => 'Cards Qualidade',
        'id' => 'cards_qualidade',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Card {#}',
            'add_button' => 'Adicionar Card',
            'remove_button' => 'Remover Card',
            'sortable' => true,
        ]
    ]);
    $secaoQualidade->add_group_field($cards_qualidade,[
        'name' => 'Titulo do card',
        'id' => 'titulo-card',
        'type' => 'text',
    ]);
    $secaoQualidade->add_group_field($cards_qualidade,[
        'name' => 'Texto do card',
        'id' => 'texto-card',
        'type' => 'text',
    ]);
}
?>