<?php

return array(

    'name' => 'Capisso',

    'modules' => array(
        'Capisso\\CustomerService' => 'customer-service'
    ),

    'navigation' => array(
        'sidebar' => array(
            array(
                'name' => 'Customers',
                'icon' => 'icon-user',
                'children' => array(
                    array(
                        'href' => 'CustomerController@index',
                        'name' => 'Manage Customers',
                        'icon' => 'icon-double-angle-right'
                    ),
                    array(
                        'href' => 'CustomerController@create',
                        'name' => 'Create Customer',
                        'icon' => 'icon-double-angle-right'
                    )
                )
            )
        )
    )

);