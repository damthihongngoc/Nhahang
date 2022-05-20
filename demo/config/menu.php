<?php
return [
    [
        'label' => 'Dashboard',
        'route' => 'admin.dashboard',
        'icon' => 'fa-home'
    ],
    [
        'label' => 'Restaurants Manager',
        'route' => 'restaurants.index',
        'icon' => 'fa-shopping-cart',
        'items' => [
             [
            'label' => 'All restaurant',
            'route' => 'restaurants.index'
        ],
        [   
            'label' => 'Add restaurant',
            'route' => 'restaurants.create'
        ],
        [   
            'label' => 'Edit restaurant',
            'route' => 'restaurants.store'
        ],
        //  [   
        //      'label' => 'Delete restaurant',
        //    'route' => 'restaurants.destroy'
        // ],
        
        ],
        [
            'label' => 'Account Manager',
            'route' => 'account.index',
            'icon' => 'fa-user',
            'items' => [
                 [
                'label' => 'All account',
                'route' => 'account.index'
                 ]
            ]
            
            
        ]   
    ]
]
?>