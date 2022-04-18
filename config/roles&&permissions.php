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
        ['name' => 'view packages','subject' => 'Packages' , 'action' => 'read'],
        
        // for transporter
        ['name' => 'view transactions','subject' => 'Transactions' , 'action' => 'read'],
        
        ['name' => 'view orders','subject' => 'Orders' , 'action' => 'read'],
        
        // for admin
        ['name' => 'view agencies','subject' => 'Agencies' , 'action' => 'read'],
        ['name' => 'view stocks','subject' => 'Stocks' , 'action' => 'read'],
        ['name' => 'view employees','subject' => 'Employees' , 'action' => 'read'],
        ['name' => 'view marchents','subject' => 'Marchents' , 'action' => 'read'],
        
        
        ['name' => 'add order','subject' => 'addOrder' , 'action' => 'read'],
        ['name' => 'view order','subject' => 'viewOrder' , 'action' => 'read'],

        ['name' => 'view employee agencies','subject' => 'viewEmployeeAgencies' , 'action' => 'read'],
        ['name' => 'view agency','subject' => 'viewAgency' , 'action' => 'read'],
        ['name' => 'add agency','subject' => 'addAgency' , 'action' => 'read'],
        ['name' => 'update agency','subject' => 'updateAgency' , 'action' => 'update'],
        ['name' => 'view stock','subject' => 'viewStock' , 'action' => 'read'],
        ['name' => 'add stock','subject' => 'addStock' , 'action' => 'read'],
        ['name' => 'update stock','subject' => 'updateStock' , 'action' => 'update'],

        ['name' => 'view marchent orders','subject' => 'viewMarchentOrders' , 'action' => 'read'],
        
        
    ],


    'permissions_by_role' => [
        'all_roles' => [
            'view home',
            'view not authorized'
        ],
        'marchent' => [
                'view packages',
                'view orders',
                'add order',
                'view order'
        ],
        'transporter' => [
                'view transactions',
                'view employee agencies',
        ],
        'admin' => [
            'view agencies',
            'view stocks',
            'view employees',
            'view marchents',
            'view orders',
            'view agency',
            'update agency',
            'add agency',
            'view stock',
            'add stock',
            'update stock',
            'view marchent orders'
        ],
        'agency head' => [

            
        ]
    ]


    ];