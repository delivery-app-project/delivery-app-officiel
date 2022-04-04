<?php

return [
    'roles' => [
        'marchent',
        'transporter',
        'admin',
        'agency head'
    ],
    'permissions' => [
        // for all roles 
        ['name' => 'view home','subject' => 'Home' , 'action' => 'read'],
        ['name' => 'view not authorized','subject' => 'Not Authorized' , 'action' => 'read'],
        
        // for marchent 
        ['name' => 'view package','subject' => 'Package' , 'action' => 'read'],
        
        // for transporter
        ['name' => 'view transactions','subject' => 'Transactions' , 'action' => 'read'],
        
        ['name' => 'view orders','subject' => 'Orders' , 'action' => 'read'],
        
        // for admin
        ['name' => 'view agencies','subject' => 'Agencies' , 'action' => 'read'],
        ['name' => 'view stocks','subject' => 'Stocks' , 'action' => 'read'],
        ['name' => 'view employees','subject' => 'Employees' , 'action' => 'read'],
        ['name' => 'view marchents','subject' => 'Marchents' , 'action' => 'read'],
        
        
    ],


    'permissions_by_role' => [
        'all_roles' => [
            'view home',
            'view not authorized'
        ],
        'marchent' => [
                'view package',
                'view orders'
        ],
        'transporter' => [
                'view transactions'
        ],
        'admin' => [
            'view agencies',
            'view stocks',
            'view employees',
            'view marchents'
        ]
    ]


    ];