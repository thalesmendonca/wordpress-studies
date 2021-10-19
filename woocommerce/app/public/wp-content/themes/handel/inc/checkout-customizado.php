<?php
    function handel_custom_checkout($fields){
        $fields['billing']['billing_discreta'] = [
            'label' => 'Embalagem Discreta?',
            'required' => true,
            'class' => ['form-row-wide'],
            'clear' => true,
            'type' => 'select',
            'options' => [
                'nao' => 'Não',
                'sim' => 'Sim'
            ]
        ];
        return $fields;
    }
    add_filter('woocommerce_checkout_fields', 'handel_custom_checkout');

    function show_admin_custom_checkout_discreta($order){
        $discreta = get_post_meta($order->get_id(), '_billing_discreta', true);
        echo '<p><strong>Embalagem Discreta: </strong>' . $discreta . '</p>';
    }
    add_action('woocommerce_admin_order_data_after_shipping_address', 'show_admin_custom_checkout_discreta');
?>