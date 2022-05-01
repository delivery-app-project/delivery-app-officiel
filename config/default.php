
<?php

use App\Entities\Agency;
use App\Entities\Stock;
// problem in 49 + wilaya thy have 2 type of document tation for nmber
return [
        "general" => [
                "agency" => [
                    "seed" => [
                        [
                            "name" => "Central",
                            "type" => Agency::class
                        ],
                        [
                            "name" => "Secondary", 
                            "type" => Agency::class
                        ]
                    ]

                        ],
                    'stock' => [
                        'seed' => [
                            [
                                'name' => "Central",
                                'type' => Stock::class
                            ],
                            [
                                "name" => "Secondary", 
                                "type" => Stock::class
                            ]
                         ]
                            ],
                    'user' => [
                        'seed' => [
                            'status' => [
                                [
                                    'name' => 'active',
                                    'type' => 'UserStatus'
                                ],
                                [
                                    'name' => 'deactivate',
                                    'type' => 'UserStatus'
                                ],
                                [
                                    'name' => 'pending',
                                    'type' => 'UserStatus'
                                ]
                                ],
                            
                        ]
                    ],
                    'marchent' => [
                                'seed' => [
                                    'trade_type' => [
                                        [
                                            'name' => 'private',
                                            'type' => 'TradeType'
                                        ],
                                        [
                                            'name' => 'public',
                                            'type' => 'TradeType'
                                        ],
                                    ]
                                ]
                    ],
                    'order' => [
                                'seed' => [
                                    'etat' => [
                                        [
                                            'name' => 'glass',
                                            'type' => 'OrderEtat'
                                        ],
                                        [
                                            'name' => 'solid',
                                            'type' => 'OrderEtat'
                                        ],
                                        [
                                            'name' => 'liquid',
                                            'type' => 'OrderEtat'
                                        ],
                                    ],
                                    'receiver_type' => [
                                        [
                                            'name' => 'trader',
                                            'type' => 'OrderReceiverType'
                                        ],
                                        [
                                            'name' => 'company',
                                            'type' => 'OrderReceiverType'
                                        ],
                                    ]
                                ]
                                    ],
                    'transaction' => [
                            'seed' => [
                                'etat' => [
                                    [
                                        'name' => 'Accepted',
                                        'type' => 'TransactionEtat'
                                    ],
                                    [
                                        'name' => 'Denied',
                                        'type' => 'TransactionEtat'
                                    ],
                                    [
                                        'name' => 'Pending',
                                        'type' => 'TransactionEtat'
                                    ],
                                    [
                                        'name' => 'Delivered',
                                        'type' => 'TransactionEtat'
                                    ],
                                ]
                            ]
                    ]                          
        ] ,
        "wilayas" => [
                // wilaya 1
            [
                "name" => [
                    "ar" => "أدرار",
                    "en" => "Adrar",
                    "fr" => "Adrar"
                ],
                "code_postal" => "01000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "أدرار",
                            "en" => "Adrar",
                            "fr" => "Adrar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أدرار",
                                    "en" => "Adrar",
                                    "fr" => "Adrar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بودة",
                                    "en" => "Bouda",
                                    "fr" => "Bouda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد أحمد التامي",
                                    "en" => "Ouled Ahmed Tammi",
                                    "fr" => "Ouled Ahmed Tammi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أوليف",
                            "en" => "Aoulef",
                            "fr" => "Aoulef"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "اقبلي",
                                    "en" => "Akabli",
                                    "fr" => "Akabli"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اولف",
                                    "en" => "Aoulef",
                                    "fr" => "Aoulef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تامكتن",
                                    "en" => "Tamekten",
                                    "fr" => "Tamekten"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيط",
                                    "en" => "Tit",
                                    "fr" => "Tit"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أدرارديرة دوغروت",
                            "en" => "Daira d'Aougrout",
                            "fr" => "Daïra d'Aougrout"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أوغروت",
                                    "en" => "Augrout",
                                    "fr" => "Aougrout"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "دلدول",
                                    "en" => "Deldoul",
                                    "fr" => "Deldoul"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مطرفة",
                                    "en" => "Metarfa",
                                    "fr" => "Metarfa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "برج باجي مختار",
                            "en" => "Bordj Badji Mokhtar",
                            "fr" => "Bordj Badji Mokhtar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "برج باجي مختار",
                                    "en" => "Bordj Badji Mokhtar",
                                    "fr" => "Bordj Badji Mokhtar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيمياوين",
                                    "en" => "Timiaouine",
                                    "fr" => "Timiaouine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "شاروين",
                            "en" => "Charouin",
                            "fr" => "Charouine"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "شاروين",
                                    "en" => "Charouine",
                                    "fr" => "Charouine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ولاد عيسى",
                                    "en" => "Ouled Aïssa",
                                    "fr" => "Ouled Aïssa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تلمين",
                                    "en" => "Talmine",
                                    "fr" => "Talmine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "الفينوجيل",
                            "en" => "Fenoughil",
                            "fr" => "Fenoughil"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "فينوجيل",
                                    "en" => "Fenoughil",
                                    "fr" => "Fenoughil"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تامانتيت",
                                    "en" => "Tamantit",
                                    "fr" => "Tamantit"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تامست",
                                    "en" => "Tamest",
                                    "fr" => "Tamest"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "ريغان",
                            "en" => "Reggan",
                            "fr" => "Reggane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "رقان",
                                    "en" => "Reggane",
                                    "fr" => "Reggane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سالي",
                                    "en" => "Sali",
                                    "fr" => "Sali"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "تيميمون",
                            "en" => "Timimoun",
                            "fr" => "Timimoun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تميمون",
                                    "en" => "Timimoun",
                                    "fr" => "Timimoun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ولاد سعيد",
                                    "en" => "Ouled Said",
                                    "fr" => "Ouled Said"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "تنركوك",
                            "en" => "Tinerkuk",
                            "fr" => "Tinerkouk"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تنركوك",
                                    "en" => "Tinerkouk",
                                    "fr" => "Tinerkouk"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قصر قدور",
                                    "en" => "Ksar Kaddour",
                                    "fr" => "Ksar Kaddour"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "تسابيت",
                            "en" => "Tsabit",
                            "fr" => "Tsabit"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "السبع",
                                    "en" => "Sebaa",
                                    "fr" => "Sebaa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تسابيت",
                                    "en" => "Tsabit",
                                    "fr" => "Tsabit"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],[
                        "name" => [
                            "ar" => "زاوية كونتا",
                            "en" => "Zaouiet Kounta",
                            "fr" => "Zaouiet Kounta"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "زاوية كونتا",
                                    "en" => "Zaouiet Kounta",
                                    "fr" => "Zaouiet Kounta"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "في زغمير",
                                    "en" => "In Zghmir",
                                    "fr" => "In Zghmir"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "الشلف",
                    "en" => "Chlef",
                    "fr" => "Chlef"
                ],
                "code_postal" => "02000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "الشلف",
                            "en" => "Chlef",
                            "fr" => "Chlef"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الشلف",
                                    "en" => "Chlef",
                                    "fr" => "Chlef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سندجاس",
                                    "en" => "Sendjas",
                                    "fr" => "Sendjas"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أم درو",
                                    "en" => "Oum Drou",
                                    "fr" => "Oum Drou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ابو الحسن",
                            "en" => "Abu El Hassan",
                            "fr" => "Abou El Hassan"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ابو الحسن",
                                    "en" => "Abou El Hassan",
                                    "fr" => "Abou El Hassan"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تلاسة",
                                    "en" => "Talassa",
                                    "fr" => "Talassa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاجين",
                                    "en" => "Tadjena",
                                    "fr" => "Tadjena"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الكريمية",
                            "en" => "El-Karimia",
                            "fr" => "El Karimia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الكريمية",
                                    "en" => "El Karimia",
                                    "fr" => "El Karimia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حرشون ",
                                    "en" => "Harchoun",
                                    "fr" => "Harchoun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني بواتب",
                                    "en" => "Beni Bouateb",
                                    "fr" => "Beni Bouateb"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بني حوا",
                            "en" => "Beni Haoua",
                            "fr" => "Beni Haoua"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بني حوا ",
                                    "en" => "Beni Haoua",
                                    "fr" => "Beni Haoua"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بريرا",
                                    "en" => "Breira ",
                                    "fr" => "Breira"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "واد قسين",
                                    "en" => "Oued Goussine",
                                    "fr" => "Oued Goussine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أولاد فارس",
                            "en" => "Ouled Fares",
                            "fr" => "Ouled Fares"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ولاد فارس",
                                    "en" => "Ouled Fares",
                                    "fr" => "Ouled Fares"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تشيتيا",
                                    "en" => "Chettia",
                                    "fr" => "Chettia "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لابيود مدججا",
                                    "en" => "Labiod Medjadja",
                                    "fr" => "Labiod Medjadja"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "المرسى",
                            "en" => "El Marsa",
                            "fr" => "El Marsa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "المرسى",
                                    "en" => "El Marsa",
                                    "fr" => "El Marsa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مصدق",
                                    "en" => "Moussadek",
                                    "fr" => "Moussadek"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تاوجريت",
                            "en" => "Taougrite",
                            "fr" => "Taougrite"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تاوجريت",
                                    "en" => "Taougrite",
                                    "fr" => "Taougrite"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الظاهرة",
                                    "en" => "Dahra",
                                    "fr" => "Dahra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "وادي فودة",
                            "en" => "Oued Fodda",
                            "fr" => "Oued Fodda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "واد فودة",
                                    "en" => "Oued Fodda",
                                    "fr" => "Oued Fodda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني راشد",
                                    "en" => "Beni Rached",
                                    "fr" => "Beni Rached"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ولاد عباس",
                                    "en" => "Ouled Abbes",
                                    "fr" => "Ouled Abbes"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تينيس",
                            "en" => "Ténès",
                            "fr" => "Ténès"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تينس",
                                    "en" => "Ténès",
                                    "fr" => "Ténès"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي عكاشة",
                                    "en" => "Sidi Akkacha",
                                    "fr" => "Sidi Akkacha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي عبد الرحمن",
                                    "en" => "Sidi Abderrahmane",
                                    "fr" => "Sidi Abderrahmane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ولاد بن عبد القادر",
                            "en" => "Ouled Ben Abdelkader",
                            "fr" => "Ouled Ben Abdelkader"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ولاد بن عبد القادر",
                                    "en" => "Ouled Ben Abdelkader",
                                    "fr" => "Ouled Ben Abdelkader"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحجاج",
                                    "en" => "El Hadjadj",
                                    "fr" => "El Hadjadj"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين ميران",
                            "en" => "Aïn Merane",
                            "fr" => "Aïn Merane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين ميران",
                                    "en" => "Aïn Merane",
                                    "fr" => "Aïn Merane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حرنفة",
                                    "en" => "Harenfa",
                                    "fr" => "Harenfa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوقادر",
                            "en" => "Boukadir",
                            "fr" => "Boukadir"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بوقادير",
                                    "en" => "Boukadir",
                                    "fr" => "Boukadir"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "واد صلي",
                                    "en" => "Oued Sly",
                                    "fr" => "Oued Sly"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "صبحا",
                                    "en" => "Sobha",
                                    "fr" => "Sobha"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "زبوجة",
                            "en" => "Zeboudja",
                            "fr" => "Zeboudja"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "زبوجة",
                                    "en" => "Zeboudja",
                                    "fr" => "Zeboudja"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "البنايرية",
                                    "en" => "Bénairia",
                                    "fr" => "Bénairia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوزغايه",
                                    "en" => "Bouzeghaia",
                                    "fr" => "Bouzeghaia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "الأغواط",
                    "en" => "Laghouat",
                    "fr" => "Laghouat"
                ],
                "code_postal" => "03000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "أفلو",
                            "en" => "Aflou",
                            "fr" => "Aflou"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "أفلو",
                                    "en" => "Aflou",
                                    "fr" => "Aflou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سبجاج",
                                    "en" => "Sebgag ",
                                    "fr" => "Sebgag "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي بوزيد",
                                    "en" => "Sidi Bouzid",
                                    "fr" => "Sidi Bouzid"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين ماضي",
                            "en" => "Ain Madhi",
                            "fr" => "Ain Madhi"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "عين ماضي",
                                    "en" => "Aïn Madhi",
                                    "fr" => "Aïn Madhi"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تجيموت",
                                    "en" => "Tadjemout",
                                    "fr" => "Tadjemout"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاجرون",
                                    "en" => "Tadjrouna",
                                    "fr" => "Tadjrouna"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الخنغ",
                                    "en" => "Kheneg	",
                                    "fr" => "Kheneg	"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => " الحويطة",
                                    "en" => "El Houaita",
                                    "fr" => "El Houaita"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بريدة",
                            "en" => "Brida",
                            "fr" => "Brida"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بريدة",
                                    "en" => "Brida",
                                    "fr" => "Brida"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الطويالة",
                                    "en" => "Taouiala",
                                    "fr" => "Taouiala"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الغيشة",
                            "en" => "El Ghicha",
                            "fr" => "El Ghicha"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الغيشة",
                                    "en" => "El Ghicha",
                                    "fr" => "El Ghicha"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "",
                            "fr" => ""
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "كلتة سيدي سعد",
                                    "en" => "Gueltet Sidi Saâd",
                                    "fr" => "Gueltet Sidi Saâd"
                                ],

                                // true or false
                                "active" => false,
                            ],

                            [
                                "name" => [
                                    "ar" => "عين سيدي علي",
                                    "en" => "Aïn Sidi Ali",
                                    "fr" => "Aïn Sidi Ali"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حاج مشري",
                                    "en" => "Hadj Mechri ",
                                    "fr" => "Hadj Mechri "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "البيضا",
                                    "en" => "Beidha",
                                    "fr" => "Beidha"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "حاسي الرمل",
                            "en" => "Hassi R'Mel",
                            "fr" => "Hassi R'Mel"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "حاسي الرمل",
                                    "en" => "Hassi R'Mel",
                                    "fr" => "Hassi R'Mel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حاسي دلاء",
                                    "en" => "Hassi Delaa",
                                    "fr" => "Hassi Delaa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "قصر الحيران",
                            "en" => "Ksar El Hirane",
                            "fr" => "Ksar El Hirane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "قصر الحيران",
                                    "en" => "Ksar El Hirane",
                                    "fr" => "Ksar El Hirane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بن ناصر بنشهرة",
                                    "en" => "Bennasser Benchohra",
                                    "fr" => "Bennasser Benchohra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الأغواط ",
                            "en" => "Laghouat",
                            "fr" => "Laghouat"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الأغواط ",
                                    "en" => "Laghouat",
                                    "fr" => "Laghouat"
                                ],

                                // true or false
                                "active" => false,
                                ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "واد مرة",
                            "en" => "Oued Morra",
                            "fr" => "Oued Morra"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "واد مرة",
                                    "en" => "Oued Morra",
                                    "fr" => "Oued Morra"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادي مزى",
                                    "en" => "Oued M'Zi",
                                    "fr" => "Oued M'Zi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي مخلوف",
                            "en" => "Sidi Makhlouf",
                            "fr" => "Sidi Makhlouf"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "سيدي مخلوف",
                                    "en" => "Sidi Makhlouf",
                                    "fr" => "Sidi Makhlouf"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "العسافية",
                                    "en" => "El Assafia",
                                    "fr" => "El Assafia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "أم البواقي",
                    "en" => "Oum El Bouaghi",
                    "fr" => "Oum El Bouaghi"
                ],
                "code_postal" => "04000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "عين بابوش",
                            "en" => "Aïn Babouche",
                            "fr" => "Aïn Babouche"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين الديس",
                                    "en" => "Aïn Diss",
                                    "fr" => "Aïn Diss"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين بابوش",
                                    "en" => "Aïn Babouche",
                                    "fr" => "Aïn Babouche"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين البيضا",
                            "en" => "Aïn Beïda",
                            "fr" => "Aïn Beïda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين البيضا",
                                    "en" => "Aïn Beïda",
                                    "fr" => "Aïn Beïda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الزورج",
                                    "en" => "Zorg",
                                    "fr" => "Zorg"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بريش",
                                    "en" => "Berriche",
                                    "fr" => "Berriche"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين فكرون",
                            "en" => "Aïn Fakroun",
                            "fr" => "Aïn Fakroun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين فكرون",
                                    "en" => "Aïn Fakroun",
                                    "fr" => "Aïn Fakroun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الفجوج بوغرارة سعودي",
                                    "en" => "El Fedjouz Boughrara Saoudi",
                                    "fr" => "El Fedjouz Boughrara Saoudi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين كرشة",
                            "en" => "Aïn Kercha",
                            "fr" => "Aïn Kercha"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين كرشة",
                                    "en" => "Aïn Kercha",
                                    "fr" => "Aïn Kercha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الهرمية",
                                    "en" => "El Harmilia ",
                                    "fr" => "El Harmilia "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حنشير تومغاني",
                                    "en" => "Hanchir Toumghani	",
                                    "fr" => "Hanchir Toumghani	"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين مليلة",
                            "en" => "Aïn M’lila",
                            "fr" => "Aïn M’lila"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين مليلة",
                                    "en" => "Aïn M’lila",
                                    "fr" => "Aïn M’lila"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => " ولاد قاسم",
                                    "en" => "Ouled Gacem",
                                    "fr" => "Ouled Gacem"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ولاد حملة",
                                    "en" => "Ouled Hamla",
                                    "fr" => "Ouled Hamla"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الضلع",
                            "en" => "Dhalaa",
                            "fr" => "Dhalaa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الضلع",
                                    "en" => "Dhalaa",
                                    "fr" => "Dhalaa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الجازية",
                                    "en" => "El Djazia",
                                    "fr" => "El Djazia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "فكيرينا",
                            "en" => "Fkirina",
                            "fr" => "Fkirina"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "فكيرينا",
                                    "en" => "Fkirina",
                                    "fr" => "Fkirina"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "واد نيني",
                                    "en" => "Oued Nini",
                                    "fr" => "Oued Nini"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "قصر صباحي",
                            "en" => "Ksar Sbahi",
                            "fr" => "Ksar Sbahi"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "قصر صباحي",
                                    "en" => "Ksar Sbahi",
                                    "fr" => "Ksar Sbahi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مسكيانة",
                            "en" => "Meskiana",
                            "fr" => "Meskiana"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مسكيانة",
                                    "en" => "Meskiana",
                                    "fr" => "Meskiana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بحير شرڨي",
                                    "en" => "Behir Chergui",
                                    "fr" => "Behir Chergui"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "البلالة",
                                    "en" => "El Belala",
                                    "fr" => "El Belala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "راحية",
                                    "en" => "Rahia",
                                    "fr" => "Rahia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "",
                            "fr" => ""
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "",
                                    "fr" => ""
                                ],

                                // true or false
                                "active" => false,
                                ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أم البواقي",
                            "en" => "Oum El Bouaghi	",
                            "fr" => "Oum El Bouaghi	"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أم الـبـواقي",
                                    "en" => "Oum El Bouaghi",
                                    "fr" => "Oum El Bouaghi"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الزيتون",
                                    "en" => "Aïn Zitoun",
                                    "fr" => "Aïn Zitoun"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيجوس",
                            "en" => "Sigus",
                            "fr" => "Sigus"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سيجوس",
                                    "en" => "Sigus",
                                    "fr" => "Sigus"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "العامرية",
                                    "en" => "El Amiria",
                                    "fr" => "El Amiria"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سوق نعمان",
                            "en" => "Souk Naamane",
                            "fr" => "Souk Naamane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سوق نعمان",
                                    "en" => "Souk Naamane",
                                    "fr" => "Souk Naamane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بير الشهداء",
                                    "en" => "Bir Chouhada ",
                                    "fr" => "Bir Chouhada "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اولاد زواي",
                                    "en" => "Ouled Zouaï",
                                    "fr" => "Ouled Zouaï"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "باتنة",
                    "en" => "Batna",
                    "fr" => "Batna"
                ],
                "code_postal" => "05000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "عين جاسر",
                            "en" => "Aïn Djasser",
                            "fr" => "Aïn Djasser"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الحاسي",
                                    "en" => "El Hassi",
                                    "fr" => "El Hassi"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين جاسر",
                                    "en" => "Aïn Djasser",
                                    "fr" => "Aïn Djasser"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين توتة",
                            "en" => "Aïn Touta",
                            "fr" => "Aïn Touta"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين توتة",
                                    "en" => "Aïn Touta",
                                    "fr" => "Aïn Touta"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنى فضالة الحقانية",
                                    "en" => "Ben Foudhala El Hakania ",
                                    "fr" => "Ben Foudhala El Hakania "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مافا",
                                    "en" => "Maafa ",
                                    "fr" => "Maafa "
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد عوف",
                                    "en" => "Ouled Aouf",
                                    "fr" => "Ouled Aouf"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "العريس",
                            "en" => "Arris",
                            "fr" => "Arris"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "العريس",
                                    "en" => "Arris",
                                    "fr" => "Arris"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيغانمين",
                                    "en" => "Tighanimine",
                                    "fr" => "Tighanimine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بريكة",
                            "en" => "Barika",
                            "fr" => "Barika"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بريكة",
                                    "en" => "Barika",
                                    "fr" => "Barika"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أمدوكال",
                                    "en" => "M'doukel",
                                    "fr" => "M'doukel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بيطام",
                                    "en" => "Bitam",
                                    "fr" => "Bitam"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "باتنة",
                            "en" => "Batna",
                            "fr" => "Batna"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "باتنة",
                                    "en" => "Batna",
                                    "fr" => "Batna"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فاسدي",
                                    "en" => "Fesdis",
                                    "fr" => "Fesdis"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادى الشعبة",
                                    "en" => "Oued Chaaba",
                                    "fr" => "Oued Chaaba"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوزينة",
                            "en" => "Bouzina",
                            "fr" => "Bouzina"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بوزينة",
                                    "en" => "Bouzina",
                                    "fr" => "Bouzina"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لارباع",
                                    "en" => "Larbaâ",
                                    "fr" => "Larbaâ"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تشيمورا",
                            "en" => "Chemora",
                            "fr" => "Chemora"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تشيمورا",
                                    "en" => "Chemora",
                                    "fr" => "Chemora"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوالحيلات",
                                    "en" => "Boulhilat",
                                    "fr" => "Boulhilat"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "جزار",
                            "en" => "Djezzar",
                            "fr" => "Djezzar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city

                            [
                                "name" => [
                                    "ar" => "جزار",
                                    "en" => "Djezzar",
                                    "fr" => "Djezzar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد عمار",
                                    "en" => "Ouled Ammar",
                                    "fr" => "Ouled Ammar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عبد القادر أزيل",
                                    "en" => "Abdelkader Azil",
                                    "fr" => "Abdelkader Azil"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الظاهر",
                            "en" => "El Madher",
                            "fr" => "El Madher"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الظاهر",
                                    "en" => "El Madher",
                                    "fr" => "El Madher"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين ياقوت",
                                    "en" => "Aïn Yagout",
                                    "fr" => "Aïn Yagout"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوميا ",
                                    "en" => "Boumia",
                                    "fr" => "Boumia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "جرمة",
                                    "en" => "Djerma",
                                    "fr" => "Djerma"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "اشمول",
                            "en" => "Ichmoul",
                            "fr" => "Ichmoul"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "اشمول",
                                    "en" => "Ichmoul",
                                    "fr" => "Ichmoul"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فوم توب",
                                    "en" => "Foum Toub",
                                    "fr" => "Foum Toub"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اينوغيسن",
                                    "en" => "Inoughissen",
                                    "fr" => "Inoughissen"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "منعة",
                            "en" => "Menaa",
                            "fr" => "Menaa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "منعة",
                                    "en" => "Menaa",
                                    "fr" => "Menaa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تغرغار",
                                    "en" => "Tigherghar",
                                    "fr" => "Tigherghar"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مروانة",
                            "en" => "Merouana",
                            "fr" => "Merouana"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مروانة",
                                    "en" => "Merouana",
                                    "fr" => "Merouana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادي الماء",
                                    "en" => "Oued El Ma",
                                    "fr" => "Oued El Ma"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قصر بللزما ",
                                    "en" => "Ksar Bellezma",
                                    "fr" => "Ksar Bellezma"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حدوسة",
                                    "en" => "Hidoussa",
                                    "fr" => "Hidoussa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "نجاوس",
                            "en" => "N'Gaous",
                            "fr" => "N'Gaous"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "نجاوس",
                                    "en" => "N'Gaous",
                                    "fr" => "N'Gaous"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بومقر",
                                    "en" => "Boumagueur",
                                    "fr" => "Boumagueur"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سفيان",
                                    "en" => "Sefiane",
                                    "fr" => "Sefiane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أولاد سي سليمان",
                            "en" => "Ouled Si Slimane",
                            "fr" => "Ouled Si Slimane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أولاد سي سليمان",
                                    "en" => "Ouled Si Slimane",
                                    "fr" => "Ouled Si Slimane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاكسلانت",
                                    "en" => "Taxlent",
                                    "fr" => "Taxlent"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لمسان",
                                    "en" => "Lemsane",
                                    "fr" => "Lemsane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "رأس العيون",
                            "en" => "Ras El Aioun",
                            "fr" => "Ras El Aioun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "رأس العيون",
                                    "en" => "Ras El Aioun",
                                    "fr" => "Ras El Aioun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الڨصبات",
                                    "en" => "Gosbat",
                                    "fr" => "Gosbat"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الڨيڨبة",
                                    "en" => "Guigba",
                                    "fr" => "Guigba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تالخمت",
                                    "en" => "Talkhamt",
                                    "fr" => "Talkhamt"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الرحبات",
                                    "en" => "Rahbat",
                                    "fr" => "Rahbat"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد سلام",
                                    "en" => "Ouled Sellam",
                                    "fr" => "Ouled Sellam"
                                ],

                                // true or false
                                "active" => false,
                            ],
                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سڨانة",
                            "en" => "Seggana",
                            "fr" => "Seggana"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سڨانة",
                                    "en" => "Seggana",
                                    "fr" => "Seggana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيلاطو",
                                    "en" => "Tilatou",
                                    "fr" => "Tilatou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سريانا",
                            "en" => "Seriana",
                            "fr" => "Seriana"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سريانا",
                                    "en" => "Seriana",
                                    "fr" => "Seriana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لازرو",
                                    "en" => "Lazrou",
                                    "fr" => "Lazrou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زانة البيضاء",
                                    "en" => "Zana El Beida",
                                    "fr" => "Zana El Beida"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تازولت",
                            "en" => "Tazoult",
                            "fr" => "Tazoult"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تازولت",
                                    "en" => "Tazoult",
                                    "fr" => "Tazoult"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عيون العصافير",
                                    "en" => "Ouyoun El Assafir",
                                    "fr" => "Ouyoun El Assafir"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ثنية العابد",
                            "en" => "Teniet El Abed",
                            "fr" => "Teniet El Abed"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ثنية العابد",
                                    "en" => "Teniet El Abed",
                                    "fr" => "Teniet El Abed"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادي الطاقة",
                                    "en" => "Oued Taga",
                                    "fr" => "Oued Taga"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "شير",
                                    "en" => "Chir",
                                    "fr" => "Chir"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "Timgad",
                            "fr" => "Timgad"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تيمڨاد",
                                    "en" => "Timgad",
                                    "fr" => "Timgad"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد فاضل",
                                    "en" => "Ouled Fadel",
                                    "fr" => "Ouled Fadel"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تكوت",
                            "en" => "T'kout",
                            "fr" => "T'kout"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                                [
                                    "name" => [
                                        "ar" => "تكوت",
                                        "en" => "T'kout",
                                        "fr" => "T'kout"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                            [
                                "name" => [
                                    "ar" => "كيمل",
                                    "en" => "Kimmel",
                                    "fr" => "Kimmel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "غسيرة",
                                    "en" => "Ghassira",
                                    "fr" => "Ghassira"
                                ],

                                // true or false
                                "active" => false,
                            ],


                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "بجاية",
                    "en" => "Béjaïa",
                    "fr" => "Béjaïa"
                ],
                "code_postal" => "06000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "اذكار",
                            "en" => "Adekar",
                            "fr" => "Adekar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "اذكار",
                                    "en" => "Adekar",
                                    "fr" => "Adekar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاوريرت إغيل",
                                    "en" => "Taourirt Ighil",
                                    "fr" => "Taourirt Ighil"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني كسيلة",
                                    "en" => "Beni Ksila",
                                    "fr" => "Beni Ksila"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "اقبو",
                            "en" => "Akbou",
                            "fr" => "Akbou"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "اقبو",
                                    "en" => "Akbou",
                                    "fr" => "Akbou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "شلاطة",
                                    "en" => "Chellata",
                                    "fr" => "Chellata"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "إغرم",
                                    "en" => "Ighram",
                                    "fr" => "Ighram"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تمقرة",
                                    "en" => "Tamokra",
                                    "fr" => "Tamokra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أميزور",
                            "en" => "Amizour",
                            "fr" => "Amizour"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أميزور",
                                    "en" => "Amizour",
                                    "fr" => "Amizour"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني جليل",
                                    "en" => "Beni Djellil",
                                    "fr" => "Beni Djellil"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سمعون",
                                    "en" => "Smaoun",
                                    "fr" => "Smaoun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فرعون",
                                    "en" => "Feraoun",
                                    "fr" => "Feraoun"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أوقاس",
                            "en" => "Aokas",
                            "fr" => "Aokas"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أوقاس",
                                    "en" => "Aokas",
                                    "fr" => "Aokas"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيزى نبربر",
                                    "en" => "Tizi N'Berber",
                                    "fr" => "Tizi N'Berber"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "",
                            "fr" => ""
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "",
                                    "fr" => ""
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "برباشة",
                            "en" => "Barbacha",
                            "fr" => "Barbacha"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "برباشة",
                                    "en" => "Barbacha",
                                    "fr" => "Barbacha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "كنديرة",
                                    "en" => "Kendira",
                                    "fr" => "Kendira"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بجاية",
                            "en" => "Béjaïa",
                            "fr" => "Béjaïa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بجاية",
                                    "en" => "Béjaïa",
                                    "fr" => "Béjaïa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادى غير",
                                    "en" => "Oued Ghir",
                                    "fr" => "Oued Ghir"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بني معوش",
                            "en" => "Beni Maouche",
                            "fr" => "Beni Maouche"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بني معوش",
                                    "en" => "Beni Maouche",
                                    "fr" => "Beni Maouche"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "شميني",
                            "en" => "Chemini",
                            "fr" => "Chemini"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "شميني",
                                    "en" => "Chemini",
                                    "fr" => "Chemini"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "طيبان",
                                    "en" => "Tibane",
                                    "fr" => "Tibane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "السوق أوفلا",
                                    "en" => "Souk Oufella",
                                    "fr" => "Souk Oufella"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اكفادو",
                                    "en" => "Akfadou",
                                    "fr" => "Akfadou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "درقينة",
                            "en" => "Darguina",
                            "fr" => "Darguina"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "درقينة",
                                    "en" => "Darguina",
                                    "fr" => "Darguina"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ايت اسماعيل",
                                    "en" => "Aït-Smail",
                                    "fr" => "Aït-Smail"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاسكريوت",
                                    "en" => "Taskriout",
                                    "fr" => "Taskriout"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "القصر",
                            "en" => "El Kseur",
                            "fr" => "El Kseur"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "القصر",
                                    "en" => "El Kseur",
                                    "fr" => "El Kseur"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "افناين",
                                    "en" => "FENAIA IL MATEN",
                                    "fr" => "FENAIA IL MATEN"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "توجة",
                                    "en" => "Toudja",
                                    "fr" => "Toudja"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "إغيل على",
                            "en" => "Ighil Ali",
                            "fr" => "Ighil Ali"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "إغيل على",
                                    "en" => "Ighil Ali",
                                    "fr" => "Ighil Ali"
                                ],

                                // true or false
                                "active" => false,
                            ],
                             [
                                "name" => [
                                    "ar" => "آيت أرزين",
                                    "en" => "Aït R'zine",
                                    "fr" => "Aït R'zine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "خراطة",
                            "en" => "Kherrata",
                            "fr" => "Kherrata"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "خراطة",
                                    "en" => "Kherrata",
                                    "fr" => "Kherrata"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ذراع القايد",
                                    "en" => "Draâ El-Kaïd",
                                    "fr" => "Draâ El-Kaïd"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أوزلاقن",
                            "en" => "Ouzellaguen",
                            "fr" => "Ouzellaguen"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أوزلاقن",
                                    "en" => "Ouzellaguen",
                                    "fr" => "Ouzellaguen"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "صدوق",
                            "en" => "Seddouk",
                            "fr" => "Seddouk"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "صدوق",
                                    "en" => "Seddouk",
                                    "fr" => "Seddouk"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "امالو",
                                    "en" => "Amalou",
                                    "fr" => "Amalou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مسيسنة",
                                    "en" => "M'cisna",
                                    "fr" => "M'cisna"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوحمزة",
                                    "en" => "Bouhamza",
                                    "fr" => "Bouhamza"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي عيش",
                            "en" => "Sidi-Aïch",
                            "fr" => "Sidi-Aïch"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سيدي عيش",
                                    "en" => "Sidi-Aïch",
                                    "fr" => "Sidi-Aïch"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لفلاى",
                                    "en" => "Leflaye",
                                    "fr" => "Leflaye"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تينبذار",
                                    "en" => "Tinebdar",
                                    "fr" => "Tinebdar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيفرة",
                                    "en" => "Tifra",
                                    "fr" => "Tifra"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سِيْدِي عَيَّاد",
                                    "en" => "Sidi Ayad",
                                    "fr" => "Sidi Ayad"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ﺳﻮق اﻻﺛﻨﻴﻦ",
                            "en" => "Souk El-Ténine",
                            "fr" => "Souk El-Ténine"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ﺳﻮق اﻻﺛﻨﻴﻦ",
                                    "en" => "Souk El-Ténine",
                                    "fr" => "Souk El-Ténine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ملبو",
                                    "en" => "Melbou",
                                    "fr" => "Melbou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تامريجت",
                                    "en" => "Tamridjet",
                                    "fr" => "Tamridjet"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ثزمالت",
                            "en" => "Tazmalt",
                            "fr" => "Tazmalt"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ثزمالت",
                                    "en" => "Tazmalt",
                                    "fr" => "Tazmalt"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنى مليكش",
                                    "en" => "Beni Mellikeche",
                                    "fr" => "Beni Mellikeche"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوجليل",
                                    "en" => "Boudjellil",
                                    "fr" => "Boudjellil"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيشي",
                            "en" => "Tichy",
                            "fr" => "Tichy"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تيشي",
                                    "en" => "Tichy",
                                    "fr" => "Tichy"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوخليفة",
                                    "en" => "Boukhelifa",
                                    "fr" => "Boukhelifa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ثالة حمزة",
                                    "en" => "Tala Hamza",
                                    "fr" => "Tala Hamza"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيمزريت",
                            "en" => "Timezrit",
                            "fr" => "Timezrit"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "تيمزريت",
                                    "en" => "Timezrit",
                                    "fr" => "Timezrit"
                                ],

                                // true or false
                                "active" => false,
                                ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "بسكرة",
                    "en" => "Biskra",
                    "fr" => "Biskra"
                ],
                "code_postal" => "07000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "بسكرة",
                            "en" => "Biskra",
                            "fr" => "Biskra"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بسكرة",
                                    "en" => "Biskra",
                                    "fr" => "Biskra"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحاجب",
                                    "en" => "El Hadjeb",
                                    "fr" => "El Hadjeb"
                                ],

                                // true or false
                                "active" => false,
                            ],


                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "جمورة",
                            "en" => "Djemorah",
                            "fr" => "Djemorah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "جمورة",
                                    "en" => "Djemorah",
                                    "fr" => "Djemorah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "برانيس",
                                    "en" => "Branis",
                                    "fr" => "Branis"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "القنطرة",
                            "en" => "El Kantara",
                            "fr" => "El Kantara"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "القنطرة",
                                    "en" => "El Kantara",
                                    "fr" => "El Kantara"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين زعطوط",
                                    "en" => "Ain Zaatout",
                                    "fr" => "Ain Zaatout"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مشونش",
                            "en" => "M'chouneche",
                            "fr" => "M'chouneche"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مشونش",
                                    "en" => "M'chouneche",
                                    "fr" => "M'chouneche"
                                ],

                                // true or false
                                "active" => false,
                                ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي عقبة",
                            "en" => "Sidi Okba",
                            "fr" => "Sidi Okba"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سيدي عقبة",
                                    "en" => "Sidi Okba",
                                    "fr" => "Sidi Okba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "شتمة",
                                    "en" => "Chetma",
                                    "fr" => "Chetma"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحوش",
                                    "en" => "El Haouche",
                                    "fr" => "El Haouche"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الناڨة",
                                    "en" => "Aïn Naga",
                                    "fr" => "Aïn Naga"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "زربية الوادى",
                            "en" => "Zeribet El Oued",
                            "fr" => "Zeribet El Oued"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "زربية الوادى",
                                    "en" => "Zeribet El Oued",
                                    "fr" => "Zeribet El Oued"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المزيرعة",
                                    "en" => "El Mizaraa",
                                    "fr" => "El Mizaraa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الفيض",
                                    "en" => "El Feidh",
                                    "fr" => "El Feidh"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "خنقة سيدي ناجى",
                                    "en" => "Khenguet Sidi Nadji",
                                    "fr" => "Khenguet Sidi Nadji"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أورلال",
                            "en" => "Ourlal",
                            "fr" => "Ourlal"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أورلال",
                                    "en" => "Ourlal",
                                    "fr" => "Ourlal"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ليوة",
                                    "en" => "Lioua",
                                    "fr" => "Lioua"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أوماش",
                                    "en" => "Oumache",
                                    "fr" => "Oumache"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مخادمة",
                                    "en" => "Mekhadma",
                                    "fr" => "Mekhadma"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مليلى",
                                    "en" => "M'Lili",
                                    "fr" => "M'Lili"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "طولڨة",
                            "en" => "Tolga",
                            "fr" => "Tolga"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "طولڨة",
                                    "en" => "Tolga",
                                    "fr" => "Tolga"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوشڨرون",
                                    "en" => "Bouchagroune",
                                    "fr" => "Bouchagroune"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "برج بن عزوز",
                                    "en" => "Bordj Ben Azzouz",
                                    "fr" => "Bordj Ben Azzouz"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "لشانة",
                                    "en" => "Lichana",
                                    "fr" => "Lichana"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أولاد جلال",
                            "en" => "Ouled Djellal",
                            "fr" => "Ouled Djellal"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أولاد جلال",
                                    "en" => "Ouled Djellal",
                                    "fr" => "Ouled Djellal"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد رحمة",
                                    "en" => "Ech Chaïba",
                                    "fr" => "Ech Chaïba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الدوسن",
                                    "en" => "Doucen",
                                    "fr" => "Doucen"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي خالد",
                            "en" => "Sidi Khaled",
                            "fr" => "Sidi Khaled"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سيدي خالد",
                                    "en" => "Sidi Khaled",
                                    "fr" => "Sidi Khaled"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بسبس",
                                    "en" => "Besbes",
                                    "fr" => "Besbes"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "راس الميعاد",
                                    "en" => "Ras El Miaad",
                                    "fr" => "Ras El Miaad"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "فوغالة",
                            "en" => "Foughala",
                            "fr" => "Foughala"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "فوغالة",
                                    "en" => "Foughala",
                                    "fr" => "Foughala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الغروس",
                                    "en" => "El Ghrous",
                                    "fr" => "El Ghrous"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الوطاية",
                            "en" => "El Outaya",
                            "fr" => "El Outaya"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الوطاية",
                                    "en" => "El Outaya",
                                    "fr" => "El Outaya"
                                ],

                                // true or false
                                "active" => false,
                                ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "بشار",
                    "en" => "Béchar",
                    "fr" => "Béchar"
                ],
                "code_postal" => "08000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "بشار",
                            "en" => "Béchar",
                            "fr" => "Béchar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بشار",
                                    "en" => "Béchar",
                                    "fr" => "Béchar"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بنى ونيف",
                            "en" => "Beni Ounif",
                            "fr" => "Beni Ounif"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بنى ونيف",
                                    "en" => "Beni Ounif",
                                    "fr" => "Beni Ounif"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الاحمر",
                            "en" => "Lahmar",
                            "fr" => "Lahmar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الاحمر",
                                    "en" => "Lahmar",
                                    "fr" => "Lahmar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "موغل",
                                    "en" => "Mougheul",
                                    "fr" => "Mougheul"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوقايس",
                                    "en" => "Boukaïs",
                                    "fr" => "Boukaïs"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "قنادسة",
                            "en" => "Kenadsa",
                            "fr" => "Kenadsa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "قنادسة",
                                    "en" => "Kenadsa",
                                    "fr" => "Kenadsa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مريجة",
                                    "en" => "Meridja",
                                    "fr" => "Meridja"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تاغيت",
                            "en" => "Taghit",
                            "fr" => "Taghit"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تاغيت",
                                    "en" => "Taghit",
                                    "fr" => "Taghit"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "العبادلة",
                            "en" => "Abadla",
                            "fr" => "Abadla"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "العبادلة",
                                    "en" => "Abadla",
                                    "fr" => "Abadla"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عرق فراج",
                                    "en" => "Erg Ferradj",
                                    "fr" => "Erg Ferradj"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مشرع ھوارى بومدين",
                                    "en" => "Mechraa Houari Boumedienne",
                                    "fr" => "Mechraa Houari Boumedienne"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تبلبالة",
                            "en" => "Tabelbala",
                            "fr" => "Tabelbala"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تبلبالة",
                                    "en" => "Tabelbala",
                                    "fr" => "Tabelbala"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "إڨلي",
                            "en" => "Igli",
                            "fr" => "Igli"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "إڨلي",
                                    "en" => "Igli",
                                    "fr" => "Igli"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بني عباس",
                            "en" => "Beni Abbes",
                            "fr" => "Beni Abbes"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بني عباس",
                                    "en" => "Beni Abbes",
                                    "fr" => "Beni Abbes"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تامترت",
                                    "en" => "Tamtert",
                                    "fr" => "Tamtert"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الواتة",
                            "en" => "El Ouata",
                            "fr" => "El Ouata"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الواتة",
                                    "en" => "El Ouata",
                                    "fr" => "El Ouata"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "كرزاز",
                            "en" => "Kerzaz",
                            "fr" => "Kerzaz"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "كرزاز",
                                    "en" => "Kerzaz",
                                    "fr" => "Kerzaz"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنى يخلف",
                                    "en" => "Beni Ikhlef",
                                    "fr" => "Beni Ikhlef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيمودى",
                                    "en" => "Timoudi",
                                    "fr" => "Timoudi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أولاد خدير",
                            "en" => "Ouled Khoudir",
                            "fr" => "Ouled Khoudir"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "أولاد خدير",
                                    "en" => "Ouled Khoudir",
                                    "fr" => "Ouled Khoudir"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قصابى",
                                    "en" => "Ksabi",
                                    "fr" => "Ksabi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "البليدة",
                    "en" => "Blida",
                    "fr" => "Blida"
                ],
                "code_postal" => "09000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "البليدة",
                            "en" => "Blida",
                            "fr" => "Blida"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "البليدة",
                                    "en" => "Blida",
                                    "fr" => "Blida"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوعرفة",
                                    "en" => "Bouarfa",
                                    "fr" => "Bouarfa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوفاريك",
                            "en" => "Boufarik",
                            "fr" => "Boufarik"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بوفاريك",
                                    "en" => "Boufarik",
                                    "fr" => "Boufarik"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "صومعة",
                                    "en" => "Soumaa",
                                    "fr" => "Soumaa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ڨرواو",
                                    "en" => "Guerouaou",
                                    "fr" => "Guerouaou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوڨرة",
                            "en" => "Bougara",
                            "fr" => "Bougara"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بوڨرة",
                                    "en" => "Bougara",
                                    "fr" => "Bougara"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حمام ملوان",
                                    "en" => "Hammam Melouane",
                                    "fr" => "Hammam Melouane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد سلامة",
                                    "en" => "Ouled Slama",
                                    "fr" => "Ouled Slama"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوينان",
                            "en" => "Bouinan",
                            "fr" => "Bouinan"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بوينان",
                                    "en" => "Bouinan",
                                    "fr" => "Bouinan"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الشبلي",
                                    "en" => "Chebli",
                                    "fr" => "Chebli"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "العفرون",
                            "en" => "El Affroun",
                            "fr" => "El Affroun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "العفرون",
                                    "en" => "El Affroun",
                                    "fr" => "El Affroun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادى جر",
                                    "en" => "Oued Djer",
                                    "fr" => "Oued Djer"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الأربعاء",
                            "en" => "Larbaa",
                            "fr" => "Larbaa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الأربعاء",
                                    "en" => "Larbaa",
                                    "fr" => "Larbaa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "صوحان",
                                    "en" => "Souhane",
                                    "fr" => "Souhane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مفتاح",
                            "en" => "Meftah",
                            "fr" => "Meftah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مفتاح",
                                    "en" => "Meftah",
                                    "fr" => "Meftah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "جبابرة",
                                    "en" => "Djebabra",
                                    "fr" => "Djebabra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "موزاية",
                            "en" => "Mouzaïa",
                            "fr" => "Mouzaïa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "موزاية",
                                    "en" => "Mouzaïa",
                                    "fr" => "Mouzaïa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الرمانة",
                                    "en" => "Aïn Romana",
                                    "fr" => "Aïn Romana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الشفة",
                                    "en" => "Chiffa",
                                    "fr" => "Chiffa"
                                ],

                                // true or false
                                "active" => false,
                            ],


                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "وادى العلايق",
                            "en" => "Oued Alleug",
                            "fr" => "Oued Alleug"
                        ],

                        // true or false
                        "active" => false,
                        "cities" =>
                        [
                                // city
                            [
                                "name" => [
                                    "ar" => "وادى العلايق",
                                    "en" => "Oued Alleug",
                                    "fr" => "Oued Alleug"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني تامو",
                                    "en" => "Beni Tamou",
                                    "fr" => "Beni Tamou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بن خليل",
                                    "en" => "Benkhelil",
                                    "fr" => "Benkhelil"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ولاد يعيش",
                            "en" => "Ouled Yaich",
                            "fr" => "Ouled Yaich"
                        ],

                        // true or false
                        "active" => false,
                        "cities" =>
                        [
                                // city
                            [
                                "name" => [
                                    "ar" => "ولاد يعيش",
                                    "en" => "Ouled Yaich",
                                    "fr" => "Ouled Yaich"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الشريعة",
                                    "en" => "Chréa",
                                    "fr" => "Chréa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني مراد",
                                    "en" => "Beni Mered",
                                    "fr" => "Beni Mered"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "البويرة",
                    "en" => "Bouïra",
                    "fr" => "Bouira"
                ],
                "code_postal" => "10000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "البويرة",
                            "en" => "Bouira",
                            "fr" => "Bouira"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "البويرة",
                                    "en" => "Bouira",
                                    "fr" => "Bouira"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عيْن التُرْكْ",
                                    "en" => "Aïn El Turc",
                                    "fr" => "Aïn El Turc"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت لعزيز",
                                    "en" => "Aït Laziz",
                                    "fr" => "Aït Laziz"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الحيزر",
                            "en" => "Haizer",
                            "fr" => "Haizer"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الحيزر",
                                    "en" => "Haizer",
                                    "fr" => "Haizer"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تغزوت",
                                    "en" => "Taghzout",
                                    "fr" => "Taghzout"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "Bechloul",
                            "fr" => "Bechloul"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بشلول",
                                    "en" => "Bechloul",
                                    "fr" => "Bechloul"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الأصنام",
                                    "en" => "El Asnam",
                                    "fr" => "El Asnam"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أھل القصر",
                                    "en" => "Ahl El Ksar",
                                    "fr" => "Ahl El Ksar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أدجيفا",
                                    "en" => "El-Adjiba",
                                    "fr" => "El-Adjiba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد راشد",
                                    "en" => "Ouled Rached",
                                    "fr" => "Ouled Rached"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مشدالة",
                            "en" => "M'Chedallah",
                            "fr" => "M'Chedallah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مشدالة",
                                    "en" => "M'Chedallah",
                                    "fr" => "M'Chedallah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "صحاريج",
                                    "en" => "Saharidj",
                                    "fr" => "Saharidj"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الشرفة",
                                    "en" => "Chorfa",
                                    "fr" => "Chorfa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "احنيف",
                                    "en" => "Ahnif",
                                    "fr" => "Ahnif"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أغبالو",
                                    "en" => "Aghbalou",
                                    "fr" => "Aghbalou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آث منصور",
                                    "en" => "Ath Mansour",
                                    "fr" => "Ath Mansour"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "قادرية",
                            "en" => "Kadiria",
                            "fr" => "Kadiria"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "قادرية",
                                    "en" => "Kadiria",
                                    "fr" => "Kadiria"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عمر",
                                    "en" => "Aomar",
                                    "fr" => "Aomar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الجباحية",
                                    "en" => "Djebahia",
                                    "fr" => "Djebahia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الأخضرية",
                            "en" => "Lakhdaria",
                            "fr" => "Lakhdaria"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الأخضرية",
                                    "en" => "Lakhdaria",
                                    "fr" => "Lakhdaria"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوكرام",
                                    "en" => "Boukram",
                                    "fr" => "Boukram"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "معالة",
                                    "en" => "Maala",
                                    "fr" => "Maala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بودربالة",
                                    "en" => "Bouderbala",
                                    "fr" => "Bouderbala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زبربر",
                                    "en" => "Zbarbar",
                                    "fr" => "Zbarbar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ڨرومة",
                                    "en" => "Guerrouma",
                                    "fr" => "Guerrouma"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بئر غبالو",
                            "en" => "Bir Ghbalou",
                            "fr" => "Bir Ghbalou"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بئر غبالو",
                                    "en" => "Bir Ghbalou",
                                    "fr" => "Bir Ghbalou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الروراوة",
                                    "en" => "Raouraoua",
                                    "fr" => "Raouraoua"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الخبوزية",
                                    "en" => "El Khabouzia",
                                    "fr" => "El Khabouzia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "Aïn Bessem",
                            "fr" => "Aïn Bessem"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين بسام",
                                    "en" => "Aïn Bessem",
                                    "fr" => "Aïn Bessem"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الحجر",
                                    "en" => "Aïn El Hadjar",
                                    "fr" => "Aïn El Hadjar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين العلوى",
                                    "en" => "Aïn Laloui",
                                    "fr" => "Aïn Laloui"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سوق الخميس",
                            "en" => "Souk El Khemis",
                            "fr" => "Souk El Khemis"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سوق الخميس",
                                    "en" => "Souk El Khemis",
                                    "fr" => "Souk El Khemis"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المقراني",
                                    "en" => "El Mokrani",
                                    "fr" => "El Mokrani"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الھاشمية",
                            "en" => "El Hachimia",
                            "fr" => "El Hachimia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "الھاشمية",
                                    "en" => "El Hachimia",
                                    "fr" => "El Hachimia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادى البردي",
                                    "en" => "Oued El Berdi",
                                    "fr" => "Oued El Berdi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سور الغزلان",
                            "en" => "Sour El-Ghozlane",
                            "fr" => "Sour El-Ghozlane"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "سور الغزلان",
                                    "en" => "Sour El-Ghozlane",
                                    "fr" => "Sour El-Ghozlane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المعمورة",
                                    "en" => "Maamora",
                                    "fr" => "Maamora"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ريدان",
                                    "en" => "Ridane",
                                    "fr" => "Ridane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحاكمية",
                                    "en" => "El Hakimia",
                                    "fr" => "El Hakimia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الدشمية",
                                    "en" => "Dechmia",
                                    "fr" => "Dechmia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ديرة",
                                    "en" => "Dirah",
                                    "fr" => "Dirah"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "برج أوخريص",
                            "en" => "Bordj Okhriss",
                            "fr" => "Bordj Okhriss"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "برج أوخريص",
                                    "en" => "Bordj Okhriss",
                                    "fr" => "Bordj Okhriss"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مزدور",
                                    "en" => "Mezdour",
                                    "fr" => "Mezdour"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاقديت",
                                    "en" => "Taguedit",
                                    "fr" => "Taguedit"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحجرة الزرقاء",
                                    "en" => "Hadjera Zerga",
                                    "fr" => "Hadjera Zerga"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "تمنراست",
                    "en" => "Tamanrasset",
                    "fr" => "Tamanrasset"
                ],
                "code_postal" => "11000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "بالسا",
                            "en" => "Abalessa",
                            "fr" => "Abalessa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "بالسا",
                                    "en" => "Abalessa",
                                    "fr" => "Abalessa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "إين غار",
                            "en" => "In Ghar ",
                            "fr" => "In Ghar "
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "إين غار",
                                    "en" => "In Ghar ",
                                    "fr" => "In Ghar "
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "In Guezzam",
                            "fr" => "In Guezzam"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "إن ڨزام",
                                    "en" => "In Guezzam",
                                    "fr" => "In Guezzam"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ان صالح",
                            "en" => "In Salah",
                            "fr" => "In Salah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "ان صالح",
                                    "en" => "In Salah",
                                    "fr" => "In Salah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فقارة الزوى",
                                    "en" => "Foggaret Ezzoua",
                                    "fr" => "Foggaret Ezzoua"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تاظروك",
                            "en" => "Tazrouk",
                            "fr" => "Tazrouk"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تاظروك",
                                    "en" => "Tazrouk",
                                    "fr" => "Tazrouk"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أدلس",
                                    "en" => "Idles",
                                    "fr" => "Idles"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تمنراست",
                            "en" => "Tamanrasset",
                            "fr" => "Tamanrasset"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تمنراست",
                                    "en" => "Tamanrasset",
                                    "fr" => "Tamanrasset"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين أمقل",
                                    "en" => "In Amguel",
                                    "fr" => "In Amguel"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تين زاوتين",
                            "en" => "Tinzaouten.",
                            "fr" => "Tinzaouten."
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تين زاوتين",
                                    "en" => "Tinzaouten.",
                                    "fr" => "Tinzaouten."
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "تبسة",
                    "en" => "Tébessa",
                    "fr" => "Tébessa"
                ],
                "code_postal" => "12000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira
                    [
                        "name" => [
                            "ar" => "تبسة",
                            "en" => "Tébessa",
                            "fr" => "Tébessa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تبسة",
                                    "en" => "Tébessa",
                                    "fr" => "Tébessa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الكويف",
                            "en" => "El Kouif",
                            "fr" => "El Kouif"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الكويف",
                                    "en" => "El Kouif",
                                    "fr" => "El Kouif"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بكارية",
                                    "en" => "Bekkaria",
                                    "fr" => "Bekkaria"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بولحاف الدير",
                                    "en" => "Boulhaf Dir",
                                    "fr" => "Boulhaf Dir"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مرسط",
                            "en" => "Morsott",
                            "fr" => "Morsott"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "مرسط",
                                    "en" => "Morsott",
                                    "fr" => "Morsott"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بٔير الذھب",
                                    "en" => "Bir Dheb",
                                    "fr" => "Bir Dheb"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الماء الابيض",
                            "en" => "El Ma Labiodh",
                            "fr" => "El Ma Labiodh"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الماء الابيض",
                                    "en" => "El Ma Labiodh",
                                    "fr" => "El Ma Labiodh"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحويجبات",
                                    "en" => "El Houidjbet",
                                    "fr" => "El Houidjbet"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "العوينات",
                            "en" => "El Aouinet",
                            "fr" => "El Aouinet"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "العوينات",
                                    "en" => "El Aouinet",
                                    "fr" => "El Aouinet"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوخضرة",
                                    "en" => "Boukhadra",
                                    "fr" => "Boukhadra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الونزة",
                            "en" => "Ouenza",
                            "fr" => "Ouenza"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الونزة",
                                    "en" => "Ouenza",
                                    "fr" => "Ouenza"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الزرقاء",
                                    "en" => "Aïn Zerga",
                                    "fr" => "Aïn Zerga"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المريج",
                                    "en" => "El Meridj",
                                    "fr" => "El Meridj"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بٔير المقدم",
                            "en" => "Bir Mokkadem",
                            "fr" => "Bir Mokkadem"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بٔير المقدم",
                                    "en" => "Bir Mokkadem	",
                                    "fr" => "Bir Mokkadem	"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحمامات",
                                    "en" => "Hammamet",
                                    "fr" => "Hammamet"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قوريقر",
                                    "en" => "Guorriguer",
                                    "fr" => "Guorriguer"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بئر العاتر",
                            "en" => "Bir el-Ater",
                            "fr" => "Bir el-Ater"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بئر العاتر",
                                    "en" => "Bir el-Ater",
                                    "fr" => "Bir el-Ater"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "العقلة المالحة",
                                    "en" => "Ogla Melha",
                                    "fr" => "Ogla Melha"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "العقلة",
                            "en" => "El Ogla",
                            "fr" => "El Ogla"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "العقلة",
                                    "en" => "El Ogla",
                                    "fr" => "El Ogla"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المزرعة",
                                    "en" => "El Mezeraa",
                                    "fr" => "El Mezeraa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بجن",
                                    "en" => "Bedjene",
                                    "fr" => "Bedjene"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سطح قنطيس",
                                    "en" => "Stah Guentis",
                                    "fr" => "Stah Guentis"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أم على",
                            "en" => "Oum Ali",
                            "fr" => "Oum Ali"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "أم على",
                                    "en" => "Oum Ali",
                                    "fr" => "Oum Ali"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "صفصاف الوسرة",
                                    "en" => "Safsaf El Ouesra",
                                    "fr" => "Safsaf El Ouesra"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "نقرين",
                            "en" => "Negrine",
                            "fr" => "Negrine"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "نقرين",
                                    "en" => "Negrine",
                                    "fr" => "Negrine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فركان",
                                    "en" => "Ferkane",
                                    "fr" => "Ferkane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الشريعة",
                            "en" => "Cheria",
                            "fr" => "Cheria"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الشريعة",
                                    "en" => "Cheria",
                                    "fr" => "Cheria"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ثليجان",
                                    "en" => "Tlidjène",
                                    "fr" => "Tlidjène"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "تلمسان",
                    "en" => "Tlemcen",
                    "fr" => "Tlemcen"
                ],
                "code_postal" => "13000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "",
                            "fr" => ""
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "",
                                    "fr" => ""
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "تيارت",
                    "en" => "Tiaret",
                    "fr" => "Tiaret"
                ],
                "code_postal" => "14000",
                // true or false
                "active" => false,

                "dairas" =>
                [
                        // daira
                    [
                        "name" => [
                            "ar" => "عين الذهب",
                            "en" => "Aïn Deheb",
                            "fr" => "Aïn Deheb"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين الذهب",
                                    "en" => "Aïn Deheb",
                                    "fr" => "Aïn Deheb"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "شحيمة",
                                    "en" => "Chehaima",
                                    "fr" => "Chehaima"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "النعيمة",
                                    "en" => "Naima",
                                    "fr" => "Naima"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين كرمس",
                            "en" => "Aïn Kermes",
                            "fr" => "Aïn Kermes"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "عين كرمس",
                                    "en" => "Aïn Kermes",
                                    "fr" => "Aïn Kermes"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مادنة",
                                    "en" => "Madna",
                                    "fr" => "Madna"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مدريسة",
                                    "en" => "Medrissa",
                                    "fr" => "Medrissa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "جبيلات الرصفة",
                                    "en" => "Djebilet Rosfa",
                                    "fr" => "Djebilet Rosfa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي عبد الرحمان",
                                    "en" => "Sidi Abderrahmane",
                                    "fr" => "Sidi Abderrahmane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "دھمونى",
                            "en" => "Dahmouni",
                            "fr" => "Dahmouni"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "دھمونى",
                                    "en" => "Dahmouni",
                                    "fr" => "Dahmouni"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين بوشقيف",
                                    "en" => "Aïn Bouchekif",
                                    "fr" => "Aïn Bouchekif"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "فرندة",
                            "en" => "Frenda",
                            "fr" => "Frenda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "فرندة",
                                    "en" => "Frenda",
                                    "fr" => "Frenda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الحديد",
                                    "en" => "Aïn El Hadid",
                                    "fr" => "Aïn El Hadid"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاخمرت",
                                    "en" => "Takhemaret",
                                    "fr" => "Takhemaret"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "حمادية",
                            "en" => "Hamadia",
                            "fr" => "Hamadia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "حمادية",
                                    "en" => "Hamadia",
                                    "fr" => "Hamadia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوقرة",
                                    "en" => "Bougara",
                                    "fr" => "Bougara"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الرشايقة",
                                    "en" => "Rechaïga",
                                    "fr" => "Rechaïga"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "قصر الشلالة",
                            "en" => "Ksar Chellala",
                            "fr" => "Ksar Chellala"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "قصر الشلالة",
                                    "en" => "Ksar Chellala",
                                    "fr" => "Ksar Chellala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سرغين",
                                    "en" => "Serghine",
                                    "fr" => "Serghine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زمالة الأمير عبد القادر",
                                    "en" => "Zmalet El Emir Abdelkader",
                                    "fr" => "Zmalet El Emir Abdelkader"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "المھدية",
                            "en" => "Mahdia",
                            "fr" => "Mahdia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "المھدية",
                                    "en" => "Mahdia",
                                    "fr" => "Mahdia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين دزاريت",
                                    "en" => "Aïn Dzarit",
                                    "fr" => "Aïn Dzarit"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الناظورة",
                                    "en" => "Nadorah",
                                    "fr" => "Nadorah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سبعين",
                                    "en" => "Sebaïne",
                                    "fr" => "Sebaïne"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مشرع الصفاء",
                            "en" => "Mechraa Safa",
                            "fr" => "Mechraa Safa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مشرع الصفاء",
                                    "en" => "Mechraa Safa",
                                    "fr" => "Mechraa Safa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "جيلالي بن عمار",
                                    "en" => "Djillali Ben Amar",
                                    "fr" => "Djillali Ben Amar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاڨدمت",
                                    "en" => "Tagdemt",
                                    "fr" => "Tagdemt"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مدروسة",
                            "en" => "Medroussa",
                            "fr" => "Medroussa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مدروسة",
                                    "en" => "Medroussa",
                                    "fr" => "Medroussa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي بختي",
                                    "en" => "Sidi Bakhti",
                                    "fr" => "Sidi Bakhti"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ملاكو",
                                    "en" => "Mellakou",
                                    "fr" => "Mellakou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مغيلة",
                            "en" => "Meghila",
                            "fr" => "Meghila"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "مغيلة",
                                    "en" => "Meghila",
                                    "fr" => "Meghila"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "السبت",
                                    "en" => "Sebt",
                                    "fr" => "Sebt"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي الحسني",
                                    "en" => "Sidi Hosni",
                                    "fr" => "Sidi Hosni"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "وادى ليلى",
                            "en" => "Oued Lilli",
                            "fr" => "Oued Lilli"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "وادى ليلى",
                                    "en" => "Oued Lilli",
                                    "fr" => "Oued Lilli"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي علي ملال",
                                    "en" => "Sidi Ali Mellal",
                                    "fr" => "Sidi Ali Mellal"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيدة",
                                    "en" => "Tidda",
                                    "fr" => "Tidda"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "رحوية",
                            "en" => "Rahouia",
                            "fr" => "Rahouia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "رحوية",
                                    "en" => "Rahouia",
                                    "fr" => "Rahouia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قرطوفة",
                                    "en" => "Guertoufa",
                                    "fr" => "Guertoufa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "",
                            "en" => "Sougueur",
                            "fr" => "Sougueur"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "السوقر",
                                    "en" => "Sougueur",
                                    "fr" => "Sougueur"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الفايجة",
                                    "en" => "Faidja",
                                    "fr" => "Faidja"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي عبد الغني",
                                    "en" => "Si Abdelghani",
                                    "fr" => "Si Abdelghani"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "توسنينة",
                                    "en" => "Tousnina",
                                    "fr" => "Tousnina"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيارت",
                            "en" => "Tiaret",
                            "fr" => "Tiaret"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city
                            [
                                "name" => [
                                    "ar" => "تيارت",
                                    "en" => "Tiaret",
                                    "fr" => "Tiaret"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "تيزي وزو",
                    "en" => "Tizi Ouzou",
                    "fr" => "Tizi Ouzou"
                ],
                "code_postal" => "15000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "عين الحمام",
                            "en" => "Ain El Hammam",
                            "fr" => "Ain El Hammam"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "عين الحمام",
                                    "en" => "Aïn El Hammam",
                                    "fr" => "Aïn El Hammam"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أبى يوسف",
                                    "en" => "Abi Youcef",
                                    "fr" => "Abi Youcef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت يحيى",
                                    "en" => "Aït Yahia",
                                    "fr" => "Aït Yahia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اكبيل",
                                    "en" => "Akbil",
                                    "fr" => "Akbil"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عزازقة",
                            "en" => "Azazga",
                            "fr" => "Azazga"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "عزازقة",
                                    "en" => "Azazga",
                                    "fr" => "Azazga"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فريحة",
                                    "en" => "Freha",
                                    "fr" => "Freha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ايفيغاء",
                                    "en" => "Ifigha",
                                    "fr" => "Ifigha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اعكورن",
                                    "en" => "Yakouren",
                                    "fr" => "Yakouren"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زكري",
                                    "en" => "Zekri",
                                    "fr" => "Zekri"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أزفون",
                            "en" => "Azeffoun",
                            "fr" => "Azeffoun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "أزفون",
                                    "en" => "Azeffoun",
                                    "fr" => "Azeffoun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أغريب",
                                    "en" => "Aghribs",
                                    "fr" => "Aghribs"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أيت شافع",
                                    "en" => "Aït Chafâa",
                                    "fr" => "Aït Chafâa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أقرو",
                                    "en" => "Akerrou",
                                    "fr" => "Akerrou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بني دوالة",
                            "en" => "Beni Douala",
                            "fr" => "Beni Douala"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بني دوالة",
                                    "en" => "Beni Douala",
                                    "fr" => "Beni Douala"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني زمنزر",
                                    "en" => "Beni Zmenzer",
                                    "fr" => "Beni Zmenzer"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنى عيسى",
                                    "en" => "Aït Aïssi",
                                    "fr" => "Aït Aïssi"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أيت محمود",
                                    "en" => "Aït Mahmoud",
                                    "fr" => "Aït Mahmoud"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "أث يني",
                            "en" => "Beni Yenni",
                            "fr" => "Beni Yenni"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "أث يني",
                                    "en" => "Beni Yenni",
                                    "fr" => "Beni Yenni"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "إبودرارن",
                                    "en" => "Iboudraren",
                                    "fr" => "Iboudraren"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "يطافن",
                                    "en" => "Yatafen",
                                    "fr" => "Yatafen"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوغني",
                            "en" => "Boghni",
                            "fr" => "Boghni"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بوغني",
                                    "en" => "Boghni",
                                    "fr" => "Boghni"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أسى يوسف",
                                    "en" => "Assi Youcef",
                                    "fr" => "Assi Youcef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بونوح",
                                    "en" => "Bounouh",
                                    "fr" => "Bounouh"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مشتراس",
                                    "en" => "Mechtras",
                                    "fr" => "Mechtras"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوزڨن",
                            "en" => "Bouzeguène",
                            "fr" => "Bouzeguène"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بوزڨن",
                                    "en" => "Bouzeguène",
                                    "fr" => "Bouzeguène"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني زيكي",
                                    "en" => "Beni Zikki",
                                    "fr" => "Beni Zikki"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آجر",
                                    "en" => "Idjeur",
                                    "fr" => "Idjeur"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ايلولا أوما لو",
                                    "en" => "Illoula Oumalou",
                                    "fr" => "Illoula Oumalou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "درعة بن خدة",
                            "en" => "Draâ Ben Khedda",
                            "fr" => "Draâ Ben Khedda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "درعة بن خدة",
                                    "en" => "Draâ Ben Khedda",
                                    "fr" => "Draâ Ben Khedda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي نعمان",
                                    "en" => "Sidi Namane-Sidi",
                                    "fr" => "Sidi Namane-Sidi"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تادمايت ",
                                    "en" => "Tadmaït",
                                    "fr" => "Tadmaït"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "ترميتين",
                                    "en" => "Tirmitine",
                                    "fr" => "Tirmitine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ذراع الميزان",
                            "en" => "Draâ El Mizan",
                            "fr" => "Draâ El Mizan"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "ذراع الميزان",
                                    "en" => "Draâ El Mizan",
                                    "fr" => "Draâ El Mizan"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "فريقات",
                                    "en" => "Frikat",
                                    "fr" => "Frikat"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت يحيى موسى",
                                    "en" => "Aït Yahia Moussa",
                                    "fr" => "Aït Yahia Moussa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الزاوية",
                                    "en" => "Aïn Zaouia",
                                    "fr" => "Aïn Zaouia"
                                ],

                                // true or false
                                "active" => false,
                            ]

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "افرحونن",
                            "en" => "Iferhounène",
                            "fr" => "Iferhounène"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "افرحونن",
                                    "en" => "Iferhounène",
                                    "fr" => "Iferhounène"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "اليلتين",
                                    "en" => "Illilten",
                                    "fr" => "Illilten"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أمسوحال",
                                    "en" => "Imsouhel",
                                    "fr" => "Imsouhel"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الاربعاء نايت ايراتن",
                            "en" => "Larbaâ Nath Irathen",
                            "fr" => "Larbaâ Nath Irathen"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الاربعاء نايت ايراتن",
                                    "en" => "Larbaâ Nath Irathen",
                                    "fr" => "Larbaâ Nath Irathen"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المفتش العام ارجين",
                                    "en" => "Irdjen",
                                    "fr" => "Irdjen"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت أقواشة",
                                    "en" => "Aït Aggouacha",
                                    "fr" => "Aït Aggouacha"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "المعاتقة",
                            "en" => "Mâatkas",
                            "fr" => "Mâatkas"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "المعاتقة",
                                    "en" => "Mâatkas",
                                    "fr" => "Mâatkas"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سوق الاثنين",
                                    "en" => "Souk El Thenine",
                                    "fr" => "Souk El Thenine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "ماكودة",
                            "en" => "Makouda",
                            "fr" => "Makouda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "ماكودة",
                                    "en" => "Makouda",
                                    "fr" => "Makouda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوجيما",
                                    "en" => "Boudjima",
                                    "fr" => "Boudjima"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مقلع",
                            "en" => "Mekla",
                            "fr" => "Mekla"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "مقلع",
                                    "en" => "Mekla",
                                    "fr" => "Mekla"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سوامع",
                                    "en" => "Souamaâ",
                                    "fr" => "Souamaâ"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أيت خليلي",
                                    "en" => "Aït Khellili",
                                    "fr" => "Aït Khellili"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "واسيف",
                            "en" => "At Wasif",
                            "fr" => "At Wasif"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "واسيف",
                                    "en" => "At Wasif",
                                    "fr" => "At Wasif"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت تودرت",
                                    "en" => "Aït Toudert",
                                    "fr" => "Aït Toudert"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت بومھدى",
                                    "en" => "Aït Boumahdi",
                                    "fr" => "Aït Boumahdi"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "واضية",
                            "en" => "Ouadhia",
                            "fr" => "Ouadhia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "واضية",
                                    "en" => "Ouadhia",
                                    "fr" => "Ouadhia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيزى نثلاثة",
                                    "en" => "Tizi N'Tleta",
                                    "fr" => "Tizi N'Tleta"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أيت بوادو",
                                    "en" => "Aït Bouaddou",
                                    "fr" => "Aït Bouaddou"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آقنى قغران",
                                    "en" => "Agouni Gueghrane",
                                    "fr" => "Agouni Gueghrane"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "واغنون",
                            "en" => "Ouaguenoun",
                            "fr" => "Ouaguenoun"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "واغنون",
                                    "en" => "Ouaguenoun",
                                    "fr" => "Ouaguenoun"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيمزارت",
                                    "en" => "Timizart",
                                    "fr" => "Timizart"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت عيسى ميمون",
                                    "en" => "Aït Aïssa Mimoun",
                                    "fr" => "Aït Aïssa Mimoun"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تقزيرت",
                            "en" => "Tigzirt",
                            "fr" => "Tigzirt"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "تقزيرت",
                                    "en" => "Tigzirt",
                                    "fr" => "Tigzirt"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مزرانة",
                                    "en" => "Mizrana",
                                    "fr" => "Mizrana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "افليسن",
                                    "en" => "Iflissen",
                                    "fr" => "Iflissen"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيزى غنيف",
                            "en" => "Tizi Gheniff",
                            "fr" => "Tizi Gheniff"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "تيزى غنيف",
                                    "en" => "Tizi Gheniff",
                                    "fr" => "Tizi Gheniff"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "مكيرة",
                                    "en" => "M'Kira",
                                    "fr" => "M'Kira"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيزي وزو",
                            "en" => "Tizi Ouzou",
                            "fr" => "Tizi Ouzou"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "تيزي وزو",
                                    "en" => "Tizi Ouzou",
                                    "fr" => "Tizi Ouzou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "تيزى راشد",
                            "en" => "Tizi Rached",
                            "fr" => "Tizi Rached"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "تيزى راشد",
                                    "en" => "Tizi Rached",
                                    "fr" => "Tizi Rached"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "آيت أومالو",
                                    "en" => "Aït Oumalou ",
                                    "fr" => "Aït Oumalou "
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "الجزائر",
                    "en" => "Algiers",
                    "fr" => "Alger"
                ],
                "code_postal" => "16000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "باب الوادى",
                            "en" => "Bab El Oued",
                            "fr" => "Bab El Oued"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "باب الوادى",
                                    "en" => "Bab El Oued",
                                    "fr" => "Bab El Oued"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "القصبة",
                                    "en" => "Casbah",
                                    "fr" => "Casbah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بولوغين",
                                    "en" => "Bologhine",
                                    "fr" => "Bologhine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادي قريش",
                                    "en" => "Oued Koriche",
                                    "fr" => "Oued Koriche"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الرايس حميدو",
                                    "en" => "Raïs Hamidou",
                                    "fr" => "Raïs Hamidou"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "براقي",
                            "en" => "Baraki",
                            "fr" => "Baraki"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "براقي",
                                    "en" => "Baraki",
                                    "fr" => "Baraki"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الكليتوس",
                                    "en" => "Les Eucalyptus",
                                    "fr" => "Eucalyptus"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "موسى",
                                    "en" => "Sidi Moussa",
                                    "fr" => "Sidi Moussa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بئر مراد رايس",
                            "en" => "Bir Mourad Raïs",
                            "fr" => "Bir Mourad Raïs"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بئر مراد رايس",
                                    "en" => "Bir Mourad Raïs",
                                    "fr" => "Bir Mourad Raïs"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بئر خادم",
                                    "en" => "Bir Khadem",
                                    "fr" => "Bir Khadem"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "جسر قسنطينة",
                                    "en" => "Djasr Kasentina",
                                    "fr" => "Djasr Kasentina"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حيدرة",
                                    "en" => "Hydra",
                                    "fr" => "Hydra"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سحاولة",
                                    "en" => "Saoula",
                                    "fr" => "Saoula"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بئر توتة",
                            "en" => "Birtouta",
                            "fr" => "Birtouta"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بئر توتة",
                                    "en" => "Birtouta",
                                    "fr" => "Birtouta"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد شبل",
                                    "en" => "Ouled Chebel",
                                    "fr" => "Ouled Chebel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تسالة المرجة",
                                    "en" => "Tessala El Merdja",
                                    "fr" => "Tessala El Merdja"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بوزريعة",
                            "en" => "Bouzareah",
                            "fr" => "Bouzareah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بوزريعة",
                                    "en" => "Bouzareah",
                                    "fr" => "Bouzareah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الأبيار",
                                    "en" => "El Biar",
                                    "fr" => "El Biar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بني مسوس",
                                    "en" => "Beni Messous",
                                    "fr" => "Beni Messous"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بن عكنون",
                                    "en" => "Ben Aknoun",
                                    "fr" => "Ben Aknoun"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "شراڤة",
                            "en" => "Chéraga",
                            "fr" => "Chéraga"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "شراڤة",
                                    "en" => "Chéraga",
                                    "fr" => "Chéraga"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "دلي إبراهيم",
                                    "en" => "Dely Ibrahim",
                                    "fr" => "Dely Ibrahim"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد فايت",
                                    "en" => "Ouled Fayet",
                                    "fr" => "Ouled Fayet"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الحمامات الرومانية",
                                    "en" => "El Hammamet",
                                    "fr" => "El Hammamet"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين بنيان",
                                    "en" => "Aïn Benian",
                                    "fr" => "Aïn Benian"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الدار البيضاء",
                            "en" => "Dar El Beïda",
                            "fr" => "Dar El Beïda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الدار البيضاء",
                                    "en" => "Dar El Beïda",
                                    "fr" => "Dar El Beïda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين طايه",
                                    "en" => "Aïn Taya",
                                    "fr" => "Aïn Taya"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "باب الزوار",
                                    "en" => "Bab Ezzouar",
                                    "fr" => "Bab Ezzouar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "برج البحري",
                                    "en" => "Bordj el Bahri",
                                    "fr" => "Bordj el Bahri"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "برج الكيفان",
                                    "en" => "Bordj El Kiffan",
                                    "fr" => "Bordj El Kiffan"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المرسى",
                                    "en" => "El Marsa",
                                    "fr" => "El Marsa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "محمدية",
                                    "en" => "Mohammadia",
                                    "fr" => "Mohammadia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "درارية",
                            "en" => "Draria",
                            "fr" => "Draria"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "درارية",
                                    "en" => "Draria",
                                    "fr" => "Draria"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "دويرة",
                                    "en" => "Douera",
                                    "fr" => "Douera"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بابا حسن",
                                    "en" => "Baba Hassen",
                                    "fr" => "Baba Hassen"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "العاشور",
                                    "en" => "El Achour",
                                    "fr" => "El Achour"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الخرايسية",
                                    "en" => "Khraicia",
                                    "fr" => "Khraicia"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الحراش",
                            "en" => "El Harrach",
                            "fr" => "El Harrach"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الحراش",
                                    "en" => "El Harrach",
                                    "fr" => "El Harrach"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "وادي سمار",
                                    "en" => "Oued Smar",
                                    "fr" => "Oued Smar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بوروبة",
                                    "en" => "Bourouba",
                                    "fr" => "Bourouba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "باش جراح",
                                    "en" => "Bachdjerrah",
                                    "fr" => "Bachdjerrah"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "حسين داي",
                            "en" => "Hussein Dey",
                            "fr" => "Hussein Dey"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "حسين داي",
                                    "en" => "Hussein Dey",
                                    "fr" => "Hussein Dey"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "القبة",
                                    "en" => "Kouba",
                                    "fr" => "Kouba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المقرية",
                                    "en" => "El Magharia",
                                    "fr" => "El Magharia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بلوزداد",
                                    "en" => "Belouizdad",
                                    "fr" => "Belouizdad"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الرويبة",
                            "en" => "Rouïba",
                            "fr" => "Rouïba"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الرويبة",
                                    "en" => "Rouïba",
                                    "fr" => "Rouïba"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الرغاية",
                                    "en" => "Réghaïa",
                                    "fr" => "Réghaïa"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الهراوة",
                                    "en" => "H'raoua",
                                    "fr" => "H'raoua"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي امحمد",
                            "en" => "Sidi M'Hamed",
                            "fr" => "Sidi M'Hamed"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "سيدي امحمد",
                                    "en" => "Sidi M'Hamed",
                                    "fr" => "Sidi M'Hamed"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المرادية",
                                    "en" => "El Mouradia",
                                    "fr" => "El Mouradia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المدنية",
                                    "en" => "El Madania",
                                    "fr" => "El Madania"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الجزائر الوسطى",
                                    "en" => "Alger-Centre",
                                    "fr" => "Alger-Centre"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "زرالدة",
                            "en" => "Zéralda",
                            "fr" => "Zéralda"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "زرالدة",
                                    "en" => "Zéralda",
                                    "fr" => "Zéralda"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سطاوالي",
                                    "en" => "Staoueli",
                                    "fr" => "Staoueli"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سويدانية",
                                    "en" => "Souidania",
                                    "fr" => "Souidania"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الرحمانية",
                                    "en" => "Rahmania",
                                    "fr" => "Rahmania"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "معالمة",
                                    "en" => "Mahelma",
                                    "fr" => "Mahelma"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                "name" => [
                    "ar" => "الجلفة",
                    "en" => "Djelfa",
                    "fr" => "Djelfa"
                ],
                "code_postal" => "17000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "الجلفة",
                            "en" => "Djelfa",
                            "fr" => "Djelfa"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الجلفة",
                                    "en" => "Djelfa",
                                    "fr" => "Djelfa"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين الابل",
                            "en" => "Aïn El Ibel",
                            "fr" => "Aïn El Ibel"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "عين الابل",
                                    "en" => "Aïn El Ibel",
                                    "fr" => "Aïn El Ibel"
                                ],

                                // true or false
                                "active" => false,
                            ],

                            [
                                "name" => [
                                    "ar" => "مجبرة",
                                    "en" => "Aïn El Ibel",
                                    "fr" => "Aïn El Ibel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تاعضميت",
                                    "en" => "Tadmit",
                                    "fr" => "Tadmit"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زكار",
                                    "en" => "Zaccar",
                                    "fr" => "Zaccar"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "عين وسارة",
                            "en" => "Aïn Oussara",
                            "fr" => "Aïn Oussara"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "عين وسارة",
                                    "en" => "Aïn Oussara",
                                    "fr" => "Aïn Oussara"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قرنيني",
                                    "en" => "Guernini",
                                    "fr" => "Guernini"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "بيرين",
                            "en" => "Birine",
                            "fr" => "Birine"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "بيرين",
                                    "en" => "Birine",
                                    "fr" => "Birine"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنھار",
                                    "en" => "Benhar",
                                    "fr" => "Benhar"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الشارف",
                            "en" => "Charef",
                            "fr" => "Charef"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الشارف",
                                    "en" => "Charef",
                                    "fr" => "Charef"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "القديد",
                                    "en" => "El Guedid",
                                    "fr" => "El Guedid"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بنى يعقوب",
                                    "en" => "Beni Yagoub",
                                    "fr" => "Beni Yagoub"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "دار الشيوخ",
                            "en" => "Dar Chioukh",
                            "fr" => "Dar Chioukh"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "دار الشيوخ",
                                    "en" => "Dar Chioukh",
                                    "fr" => "Dar Chioukh"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "المليليحة",
                                    "en" => "M'Liliha",
                                    "fr" => "M'Liliha"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي بايزيد",
                                    "en" => "Sidi Baizid",
                                    "fr" => "Sidi Baizid"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "الإدريسية",
                            "en" => "El Idrissia",
                            "fr" => "El Idrissia"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "الإدريسية",
                                    "en" => "El Idrissia",
                                    "fr" => "El Idrissia"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "دويس",
                                    "en" => "Douis",
                                    "fr" => "Douis"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين الشھداء",
                                    "en" => "Aïn Chouhada",
                                    "fr" => "Aïn Chouhada"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "فيض البطمة",
                            "en" => "Faidh El Botma",
                            "fr" => "Faidh El Botma"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "فيض البطمة",
                                    "en" => "Faidh El Botma",
                                    "fr" => "Faidh El Botma"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عمورة",
                                    "en" => "Amourah",
                                    "fr" => "Amourah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "أم العظام",
                                    "en" => "Oum Laadham",
                                    "fr" => "Oum Laadham"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "حد الصحارى",
                            "en" => "Had-Sahary",
                            "fr" => "Had-Sahary"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "حد الصحارى",
                                    "en" => "Had-Sahary",
                                    "fr" => "Had-Sahary"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "بويرة الأحداب",
                                    "en" => "Bouira Lahdab",
                                    "fr" => "Bouira Lahdab"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين افقه",
                                    "en" => "Aïn Feka",
                                    "fr" => "Aïn Feka"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "حاسي بحبح",
                            "en" => "Hassi Bahbah",
                            "fr" => "Hassi Bahbah"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "حاسي بحبح",
                                    "en" => "Hassi Bahbah",
                                    "fr" => "Hassi Bahbah"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "زعفران",
                                    "en" => "Zaafrane",
                                    "fr" => "Zaafrane"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حاسى العش",
                                    "en" => "Hassi El Euch",
                                    "fr" => "Hassi El Euch"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "عين معبد",
                                    "en" => "Aïn Maabed",
                                    "fr" => "Aïn Maabed"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "مسعد",
                            "en" => "Messaad",
                            "fr" => "Messaad"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "مسعد",
                                    "en" => "Messaad",
                                    "fr" => "Messaad"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "دلدول",
                                    "en" => "Deldoul",
                                    "fr" => "Deldoul"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سلمانة",
                                    "en" => "Selmana",
                                    "fr" => "Selmana"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "سد رحال",
                                    "en" => "Sed Rahal",
                                    "fr" => "Sed Rahal"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "قطارة",
                                    "en" => "Guettara",
                                    "fr" => "Guettara"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                    [
                        "name" => [
                            "ar" => "سيدي لعجال",
                            "en" => "Sidi Ladjel",
                            "fr" => "Sidi Ladjel"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "سيدي لعجال",
                                    "en" => "Sidi Ladjel",
                                    "fr" => "Sidi Ladjel"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "الخميس",
                                    "en" => "El Khemis",
                                    "fr" => "El Khemis"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "حاسى فدول",
                                    "en" => "Hassi Fedoul",
                                    "fr" => "Hassi Fedoul"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                    ],
                ]

            ],
            [
                    "name" => [
                        "ar" => "جيجل",
                        "en" => "Jijel",
                        "fr" => "Jijel"
                    ],
                    "code_postal" => "18000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "الشقفة",
                                "en" => "Chekfa",
                                "fr" => "Chekfa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الشقفة",
                                        "en" => "Chekfa",
                                        "fr" => "Chekfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "برج الطهر",
                                        "en" => "Bordj Tahar",
                                        "fr" => "Bordj Tahar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "القنار نشفي",
                                        "en" => "El Kennar Nouchfi",
                                        "fr" => "El Kennar Nouchfi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عبد العزيز",
                                        "en" => "Sidi Abdelaziz",
                                        "fr" => "Sidi Abdelaziz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جيملة",
                                "en" => "Djimla",
                                "fr" => "Djimla"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بودريعة بن ياجيس",
                                        "en" => "Boudriaa Ben Yadjis",
                                        "fr" => "Boudriaa Ben Yadjis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "جيملة",
                                        "en" => "Djimla",
                                        "fr" => "Djimla"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "العنصر",
                                "en" => "El Ancer",
                                "fr" => "El Ancer"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "العنصر",
                                        "en" => "El Ancer",
                                        "fr" => "El Ancer"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الجمعة بنى حبيبى",
                                        "en" => "Djemaa Beni Habibi",
                                        "fr" => "Djemaa Beni Habibi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوراوى بلهادف",
                                        "en" => "Bouraoui Belhadef",
                                        "fr" => "Bouraoui Belhadef"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خيري وادي عجول",
                                        "en" => "Kheiri Oued Adjoul",
                                        "fr" => "Kheiri Oued Adjoul"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "العوانة",
                                "en" => "El Aouana",
                                "fr" => "El Aouana"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "العوانة",
                                        "en" => "El Aouana",
                                        "fr" => "El Aouana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سلمى بن زيادة",
                                        "en" => "Selma Benziada",
                                        "fr" => "Selma Benziada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الميلية",
                                "en" => "El Milia",
                                "fr" => "El Milia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الميلية",
                                        "en" => "El Milia",
                                        "fr" => "El Milia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد يحيى خدروش",
                                        "en" => "Ouled Yahia Khedrouche",
                                        "fr" => "Ouled Yahia Khedrouche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جيجل",
                                "en" => "Jijel",
                                "fr" => "Jijel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "جيجل",
                                        "en" => "Jijel",
                                        "fr" => "Jijel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "السطارة",
                                "en" => "Settara",
                                "fr" => "Settara"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "السطارة",
                                        "en" => "Settara",
                                        "fr" => "Settara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "غبالة",
                                        "en" => "Ghebala",
                                        "fr" => "Ghebala"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي معروف",
                                "en" => "Sidi Maarouf",
                                "fr" => "Sidi Maarouf"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي معروف",
                                        "en" => "Sidi Maarouf",
                                        "fr" => "Sidi Maarouf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد رابح",
                                        "en" => "Ouled Rabah",
                                        "fr" => "Ouled Rabah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الطاهير",
                                "en" => "Taher",
                                "fr" => "Taher"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الطاهير",
                                        "en" => "Taher",
                                        "fr" => "Taher"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوسيف أولاد عسكر",
                                        "en" => "Boucif Ouled Askeur",
                                        "fr" => "Boucif Ouled Askeur"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "شحنة",
                                        "en" => "Chahna",
                                        "fr" => "Chahna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الامير عبد القادر",
                                        "en" => "Emir Abdelkader",
                                        "fr" => "Emir Abdelkader"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وجانة",
                                        "en" => "Oudjana",
                                        "fr" => "Oudjana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تاكسنة",
                                "en" => "Texenna",
                                "fr" => "Texenna"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تاكسنة",
                                        "en" => "Texenna",
                                        "fr" => "Texenna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "قاوس",
                                        "en" => "Kaous",
                                        "fr" => "Kaous"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "زيامة منصورية",
                                "en" => "Ziama Mansouriah",
                                "fr" => "Ziama Mansouriah"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "زيامة منصورية",
                                        "en" => "Ziama Mansouriah",
                                        "fr" => "Ziama Mansouriah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "إراڨن",
                                        "en" => "Erraguene",
                                        "fr" => "Erraguene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],

                    ]

            ],
            [
                    "name" => [
                        "ar" => "سطيف",
                        "en" => "Sétif",
                        "fr" => "Sétif"
                    ],
                    "code_postal" => "19000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "عين أرنات",
                                "en" => "Aïn Arnat",
                                "fr" => "Aïn Arnat"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين أرنات",
                                        "en" => "Aïn Arnat",
                                        "fr" => "Aïn Arnat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "",
                                        "en" => "",
                                        "fr" => ""
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين عباسة",
                                        "en" => "Aïn Abessa",
                                        "fr" => "Aïn Abessa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الوريسية",
                                        "en" => "El Ouricia",
                                        "fr" => "El Ouricia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "",
                                "fr" => ""
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مزلوڨ",
                                        "en" => "Mezloug",
                                        "fr" => "Mezloug"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين ازال",
                                "en" => "Aïn Azel",
                                "fr" => "Aïn Azel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين ازال",
                                        "en" => "Aïn Azel",
                                        "fr" => "Aïn Azel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الحجر",
                                        "en" => "Aïn Lahdjar",
                                        "fr" => "Aïn Lahdjar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بيضاء برج",
                                        "en" => "Beidha Bordj",
                                        "fr" => "Beidha Bordj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بئر حدادة",
                                        "en" => "Bir Haddada",
                                        "fr" => "Bir Haddada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين الكبيرة",
                                "en" => "Aïn El Kebira",
                                "fr" => "Aïn El Kebira"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين الكبيرة",
                                        "en" => "Aïn El Kebira",
                                        "fr" => "Aïn El Kebira"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الدھامشة",
                                        "en" => "Dehamcha",
                                        "fr" => "Dehamcha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد عدوان",
                                        "en" => "Ouled Addouane",
                                        "fr" => "Ouled Addouane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين ٔاولمان",
                                "en" => "Aïn Oulmene",
                                "fr" => "Aïn Oulmene"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين ٔاولمان",
                                        "en" => "Aïn Oulmene",
                                        "fr" => "Aïn Oulmene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ڨلال",
                                        "en" => "Guellal",
                                        "fr" => "Guellal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "قصر الأبطال",
                                        "en" => "Ksar El Abtal",
                                        "fr" => "Ksar El Abtal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد سي أحمد",
                                        "en" => "Ouled Si Ahmed",
                                        "fr" => "Ouled Si Ahmed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عموشة",
                                "en" => "Amoucha",
                                "fr" => "Amoucha"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عموشة",
                                        "en" => "Amoucha",
                                        "fr" => "Amoucha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي البارد",
                                        "en" => "Oued El Barad",
                                        "fr" => "Oued El Barad"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تيزى نبشار",
                                        "en" => "Tizi N'Bechar",
                                        "fr" => "Tizi N'Bechar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بابور",
                                "en" => "Babor",
                                "fr" => "Babor"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بابور",
                                        "en" => "Babor",
                                        "fr" => "Babor"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سرج الغول",
                                        "en" => "Serdj El Ghoul",
                                        "fr" => "Serdj El Ghoul"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بني عزيز",
                                "en" => "Beni Aziz",
                                "fr" => "Beni Aziz"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بني عزيز",
                                        "en" => "Beni Aziz",
                                        "fr" => "Beni Aziz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين السبت",
                                        "en" => "Aïn Sebt",
                                        "fr" => "Aïn Sebt"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "معاوية",
                                        "en" => "Maaouia",
                                        "fr" => "Maaouia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بنى شبانة",
                                "en" => "Beni Ourtilane",
                                "fr" => "Beni Ourtilane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بنى شبانة",
                                        "en" => "Beni Chebana",
                                        "fr" => "Beni Chebana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى ورثيلان",
                                        "en" => "Beni Ourtilane",
                                        "fr" => "Beni Ourtilane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين لقراج",
                                        "en" => "Aïn Legradj",
                                        "fr" => "Aïn Legradj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بني محلي",
                                        "en" => "Beni Mouhli ",
                                        "fr" => "Beni Mouhli "
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بئر العرش",
                                "en" => "Bir El Arch",
                                "fr" => "Bir El Arch"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بئر العرش",
                                        "en" => "Bir El Arch",
                                        "fr" => "Bir El Arch"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بلاعة",
                                        "en" => "Belaa",
                                        "fr" => "Belaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الولجة",
                                        "en" => "El Ouldja",
                                        "fr" => "El Ouldja"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تاشودة",
                                        "en" => "Tachouda",
                                        "fr" => "Tachouda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوعنداس",
                                "en" => "Bouandas",
                                "fr" => "Bouandas"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوعنداس",
                                        "en" => "Bouandas",
                                        "fr" => "Bouandas"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "آيت نوال مزادة",
                                        "en" => "Aït Noual M'Zada",
                                        "fr" => "Aït Noual M'Zada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "آيت تيزي",
                                        "en" => "Aït Tizi",
                                        "fr" => "Aït Tizi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوسلام",
                                        "en" => "Bousselam",
                                        "fr" => "Bousselam"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوقاعة",
                                "en" => "Bougaa",
                                "fr" => "Bougaa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوقاعة",
                                        "en" => "Bougaa",
                                        "fr" => "Bougaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الروى",
                                        "en" => "Aïn Roua",
                                        "fr" => "Aïn Roua"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى حسين",
                                        "en" => "Beni Hocine",
                                        "fr" => "Beni Hocine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جميلة",
                                "en" => "Djemila",
                                "fr" => "Djemila"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "جميلة",
                                        "en" => "Djemila",
                                        "fr" => "Djemila"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى فودة",
                                        "en" => "Beni Fouda",
                                        "fr" => "Beni Fouda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "العلمة",
                                "en" => "El Eulma",
                                "fr" => "El Eulma"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "العلمة",
                                        "en" => "El Eulma",
                                        "fr" => "El Eulma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بازر الصخرة",
                                        "en" => "Bazer Sakhra",
                                        "fr" => "Bazer Sakhra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الڨلتة الزرقاء",
                                        "en" => "Guelta Zerka",
                                        "fr" => "Guelta Zerka"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "قجال",
                                "en" => "Guidjel",
                                "fr" => "Guidjel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قجال",
                                        "en" => "Guidjel",
                                        "fr" => "Guidjel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد صابر",
                                        "en" => "Ouled Sabor",
                                        "fr" => "Ouled Sabor"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "قنزات",
                                "en" => "Guenzet",
                                "fr" => "Guenzet"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قنزات",
                                        "en" => "Guenzet",
                                        "fr" => "Guenzet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حربيل",
                                        "en" => "Harbil",
                                        "fr" => "Harbil"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "حمام قرقور",
                                "en" => "Hammam Guergour",
                                "fr" => "Hammam Guergour"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حمام قرقور",
                                        "en" => "Hammam Guergour",
                                        "fr" => "Hammam Guergour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ذراع قبيلة",
                                        "en" => "Draa Kebila",
                                        "fr" => "Draa Kebila"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "حمام السخنة",
                                "en" => "Hammam Soukhna",
                                "fr" => "Hammam Soukhna"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حمام السخنة",
                                        "en" => "Hammam Soukhna",
                                        "fr" => "Hammam Soukhna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الطاية",
                                        "en" => "Taya",
                                        "fr" => "Taya"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "التلة",
                                        "en" => "Tella",
                                        "fr" => "Tella"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ماوكلان",
                                "en" => "Maoklane",
                                "fr" => "Maoklane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ماوكلان",
                                        "en" => "Maoklane",
                                        "fr" => "Maoklane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تالة إيفاسن",
                                        "en" => "Talaifacene",
                                        "fr" => "Talaifacene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "صالح باي",
                                "en" => "Salah Bey",
                                "fr" => "Salah Bey"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "صالح باي",
                                        "en" => "Salah Bey",
                                        "fr" => "Salah Bey"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوطالب",
                                        "en" => "Boutaleb",
                                        "fr" => "Boutaleb"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحامة",
                                        "en" => "Hamma",
                                        "fr" => "Hamma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد تبان",
                                        "en" => "Ouled Tebben",
                                        "fr" => "Ouled Tebben"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الرصفة",
                                        "en" => "Rasfa",
                                        "fr" => "Rasfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سطيف",
                                "en" => "Sétif",
                                "fr" => "Sétif"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سطيف",
                                        "en" => "Sétif",
                                        "fr" => "Sétif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],

                    ]

            ],
            [
                    "name" => [
                        "ar" => "سعيدة",
                        "en" => "Saïda",
                        "fr" => "Saïda"
                    ],
                    "code_postal" => "20000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "سعيدة",
                                "en" => "Saïda",
                                "fr" => "Saïda"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سعيدة",
                                        "en" => "Saïda",
                                        "fr" => "Saïda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين الحجر",
                                "en" => "Aïn El Hadjar",
                                "fr" => "Aïn El Hadjar"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين الحجر",
                                        "en" => "Aïn El Hadjar",
                                        "fr" => "Aïn El Hadjar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مولاي العربي",
                                        "en" => "Moulay Larbi",
                                        "fr" => "Moulay Larbi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي أحمد",
                                        "en" => "Sidi Ahmed",
                                        "fr" => "Sidi Ahmed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي بوبكر",
                                "en" => "Sidi Boubekeur",
                                "fr" => "Sidi Boubekeur	"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي بوبكر",
                                        "en" => "Sidi Boubekeur",
                                        "fr" => "Sidi Boubekeur"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد خالد",
                                        "en" => "Ouled Khaled",
                                        "fr" => "Ouled Khaled"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عمار",
                                        "en" => "Sidi Amar",
                                        "fr" => "Sidi Amar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "هونت",
                                        "en" => "Hounet",
                                        "fr" => "Hounet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الحساسنة",
                                "en" => "El Hassasna",
                                "fr" => "El Hassasna"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الحساسنة",
                                        "en" => "El Hassasna",
                                        "fr" => "El Hassasna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العين السخونة",
                                        "en" => "Aïn Sekhouna",
                                        "fr" => "Aïn Sekhouna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المعمورة",
                                        "en" => "Maamora",
                                        "fr" => "Maamora"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أولاد ابراھيم",
                                "en" => "Ouled Brahim",
                                "fr" => "Ouled Brahim"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أولاد ابراھيم",
                                        "en" => "Ouled Brahim",
                                        "fr" => "Ouled Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تيرسين",
                                        "en" => "Tircine",
                                        "fr" => "Tircine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين السلطان",
                                        "en" => "Aïn Soltane",
                                        "fr" => "Aïn Soltane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "يوب",
                                "en" => "Youb",
                                "fr" => "Youb"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "يوب",
                                        "en" => "Youb",
                                        "fr" => "Youb"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "دوى ثابت",
                                        "en" => "Doui Thabet",
                                        "fr" => "Doui Thabet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "سكيكدة",
                        "en" => "Skikda",
                        "fr" => "Skikda"
                    ],
                    "code_postal" => "21000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "عين قشرة",
                                "en" => "Aïn Kechra",
                                "fr" => "Aïn Kechra"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين قشرة",
                                        "en" => "Aïn Kechra",
                                        "fr" => "Aïn Kechra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الولجة بو البلوط",
                                        "en" => "Ouldja Boulballout",
                                        "fr" => "Ouldja Boulballout"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عزابة",
                                "en" => "Azzaba",
                                "fr" => "Azzaba"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عزابة",
                                        "en" => "Azzaba",
                                        "fr" => "Azzaba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين شرشار",
                                        "en" => "Aïn Charchar",
                                        "fr" => "Aïn Charchar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "جندل السعدي محمد",
                                        "en" => "Djendel Saadi Mohamed",
                                        "fr" => "Djendel Saadi Mohamed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الغدير",
                                        "en" => "El Ghedir",
                                        "fr" => "El Ghedir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "السبت",
                                        "en" => "Es Sebt",
                                        "fr" => "Es Sebt"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بن عزوز",
                                "en" => "Ben Azzouz",
                                "fr" => "Ben Azzouz"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بن عزوز",
                                        "en" => "Ben Azzouz",
                                        "fr" => "Ben Azzouz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بكوش الأخضر",
                                        "en" => "Bekkouche Lakhdar",
                                        "fr" => "Bekkouche Lakhdar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المرسى",
                                        "en" => "El Marsa",
                                        "fr" => "El Marsa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "القل",
                                "en" => "Collo",
                                "fr" => "Collo"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "القل",
                                        "en" => "Collo",
                                        "fr" => "Collo"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى زيد",
                                        "en" => "Beni Zid",
                                        "fr" => "Beni Zid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الشرائع",
                                        "en" => "Cheraïa",
                                        "fr" => "Cheraïa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين زويت",
                                "en" => "El Hadaiek",
                                "fr" => "El Hadaiek"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين زويت",
                                        "en" => "El Hadaiek",
                                        "fr" => "El Hadaiek"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوشطاطة",
                                        "en" => "Bouchtata",
                                        "fr" => "Bouchtata"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحدائق",
                                        "en" => "El Hadaiek",
                                        "fr" => "El Hadaiek"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الحروش",
                                "en" => "El Harrouch",
                                "fr" => "El Harrouch"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الحروش",
                                        "en" => "El Harrouch",
                                        "fr" => "El Harrouch"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مجاز الدشيش",
                                        "en" => "Emdjez Edchich",
                                        "fr" => "Emdjez Edchich"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد حبابة",
                                        "en" => "Ouled Hbaba",
                                        "fr" => "Ouled Hbaba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "صالح بو الشعور",
                                        "en" => "Salah Bouchaour",
                                        "fr" => "Salah Bouchaour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "زردازة",
                                        "en" => "Zerdaza",
                                        "fr" => "Zerdaza"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أولاد عطية",
                                "en" => "Ouled Attia",
                                "fr" => "Ouled Attia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أولاد عطية",
                                        "en" => "Ouled Attia",
                                        "fr" => "Ouled Attia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي اازهور",
                                        "en" => "Oued Zehour",
                                        "fr" => "Oued Zehour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خنق مايوم",
                                        "en" => "Kheneg Mayoum",
                                        "fr" => "Kheneg Mayoum"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أم الطوب",
                                "en" => "Oum Toub",
                                "fr" => "Oum Toub"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أم الطوب",
                                        "en" => "Oum Toub",
                                        "fr" => "Oum Toub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "رمضان جمال",
                                "en" => "Ramdane Djamel",
                                "fr" => "Ramdane Djamel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "رمضان جمال",
                                        "en" => "Ramdane Djamel",
                                        "fr" => "Ramdane Djamel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى بشير",
                                        "en" => "Beni Bechir",
                                        "fr" => "Beni Bechir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي مزغيش",
                                "en" => "Sidi Mezghiche",
                                "fr" => "Sidi Mezghiche"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي مزغيش",
                                        "en" => "Sidi Mezghiche",
                                        "fr" => "Sidi Mezghiche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى ولبان",
                                        "en" => "Beni Oulbane",
                                        "fr" => "Beni Oulbane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين بوزيان",
                                        "en" => "Aïn Bouziane",
                                        "fr" => "Aïn Bouziane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سكيكدة",
                                "en" => "Skikda",
                                "fr" => "Skikda"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سكيكدة",
                                        "en" => "Skikda",
                                        "fr" => "Skikda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حمادى كرومة",
                                        "en" => "Hamadi Krouma",
                                        "fr" => "Hamadi Krouma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "فلفلة",
                                        "en" => "Filfila",
                                        "fr" => "Filfila"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تمالوس",
                                "en" => "Tamalous",
                                "fr" => "Tamalous"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تمالوس",
                                        "en" => "Tamalous",
                                        "fr" => "Tamalous"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الكركرة",
                                        "en" => "Kerkera",
                                        "fr" => "Kerkera"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بين الويدان",
                                        "en" => "Bin El Ouiden",
                                        "fr" => "Bin El Ouiden"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الزيتونة",
                                "en" => "Zitouna",
                                "fr" => "Zitouna"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الزيتونة",
                                        "en" => "Zitouna",
                                        "fr" => "Zitouna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "قنوع",
                                        "en" => "Kanoua",
                                        "fr" => "Kanoua"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "سيدي بلعباس",
                        "en" => "Sidi Bel Abbès",
                        "fr" => "Sidi Bel Abbès"
                    ],
                    "code_postal" => "22000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "سيدي بلعباس",
                                "en" => "Sidi Bel Abbès",
                                "fr" => "Sidi Bel Abbès"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي بلعباس",
                                        "en" => "Sidi Bel Abbès",
                                        "fr" => "Sidi Bel Abbès"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين البرد",
                                "en" => "Aïn el Berd",
                                "fr" => "Aïn el Berd"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين البرد",
                                        "en" => "Aïn el Berd",
                                        "fr" => "Aïn el Berd"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي ابراھيم",
                                        "en" => "Sidi Brahim",
                                        "fr" => "Sidi Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مقدرة",
                                        "en" => "Makedra",
                                        "fr" => "Makedra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي حمادوش",
                                        "en" => "Sidi Hamadouche",
                                        "fr" => "Sidi Hamadouche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ابن باديس",
                                "en" => "Ben Badis",
                                "fr" => "Ben Badis"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ابن باديس",
                                        "en" => "Ben Badis",
                                        "fr" => "Ben Badis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بضرابين المقرانى",
                                        "en" => "Bedrabine El Mokrani",
                                        "fr" => "Bedrabine El Mokrani"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسى زھانة",
                                        "en" => "Hassi Zehana",
                                        "fr" => "Hassi Zehana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "شتوان بلايلة",
                                        "en" => "Chettouane Belaila",
                                        "fr" => "Chettouane Belaila"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مرحوم",
                                "en" => "Marhoum",
                                "fr" => "Marhoum"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مرحوم",
                                        "en" => "Marhoum",
                                        "fr" => "Marhoum"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي شعيب",
                                        "en" => "Sidi Chaib",
                                        "fr" => "Sidi Chaib"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بئر الحمام",
                                        "en" => "Bir El Hammam",
                                        "fr" => "Bir El Hammam"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مرين",
                                "en" => "Merine",
                                "fr" => "Merine"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مرين",
                                        "en" => "Merine",
                                        "fr" => "Merine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تفسور",
                                        "en" => "Tafissour",
                                        "fr" => "Tafissour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادى تاوريرة",
                                        "en" => "Oued Taourira",
                                        "fr" => "Oued Taourira"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تاودموت",
                                        "en" => "Taoudmout",
                                        "fr" => "Taoudmout"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مصطفى بن ابراھيم",
                                "en" => "Mostefa Ben Brahim",
                                "fr" => "Mostefa Ben Brahim"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مصطفى بن ابراھيم",
                                        "en" => "Mostefa Ben Brahim",
                                        "fr" => "Mostefa Ben Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تلمونى",
                                        "en" => "Tilmouni",
                                        "fr" => "Tilmouni"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "زروالة",
                                        "en" => "Zerouala",
                                        "fr" => "Zerouala"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بلعربى",
                                        "en" => "Belarbi",
                                        "fr" => "Belarbi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مولاى سليسن",
                                "en" => "Moulay Slissen",
                                "fr" => "Moulay Slissen"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مولاى سليسن",
                                        "en" => "Moulay Slissen",
                                        "fr" => "Moulay Slissen"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحصيبة",
                                        "en" => "El Haçaiba",
                                        "fr" => "El Haçaiba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين تندمين",
                                        "en" => "Aïn Tindamine",
                                        "fr" => "Aïn Tindamine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "رأس الماء",
                                "en" => "Ras El Ma",
                                "fr" => "Ras El Ma"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "رأس الماء",
                                        "en" => "Ras El Ma",
                                        "fr" => "Ras El Ma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادى السبع",
                                        "en" => "Oued Sebaa",
                                        "fr" => "Oued Sebaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "رجم دموش",
                                        "en" => "Redjem Demouche",
                                        "fr" => "Redjem Demouche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سفيزف",
                                "en" => "Sfisef",
                                "fr" => "Sfisef"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سفيزف",
                                        "en" => "Sfisef",
                                        "fr" => "Sfisef"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مسيد",
                                        "en" => "M'Cid",
                                        "fr" => "M'Cid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين آدن",
                                        "en" => "Aïn Adden",
                                        "fr" => "Aïn Adden"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوجبهة البرج",
                                        "en" => "Boudjebha El Bordj",
                                        "fr" => "Boudjebha El Bordj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي على بن يوب",
                                "en" => "Sidi Ali Benyoub",
                                "fr" => "Sidi Ali Benyoub"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي على بن يوب",
                                        "en" => "Sidi Ali Benyoub",
                                        "fr" => "Sidi Ali Benyoub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بو خنيفيس",
                                        "en" => "Boukhanéfis",
                                        "fr" => "Boukhanéfis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "طابية",
                                        "en" => "Tabia ",
                                        "fr" => "Tabia "
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي على بوسيدى",
                                "en" => "Sidi Ali Boussidi",
                                "fr" => "Sidi Ali Boussidi"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي على بوسيدى",
                                        "en" => "Sidi Ali Boussidi",
                                        "fr" => "Sidi Ali Boussidi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين قادة",
                                        "en" => "Aïn Kada",
                                        "fr" => "Aïn Kada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                                [
                                    "name" => [
                                        "ar" => "لمطار",
                                        "en" => "Lamtar",
                                        "fr" => "Lamtar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                                [
                                    "name" => [
                                        "ar" => "سيدي دحو الزاير",
                                        "en" => "Sidi Daho des Zairs",
                                        "fr" => "Sidi Daho des Zairs"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],


                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي لحسن",
                                "en" => "Sidi Lahcene",
                                "fr" => "Sidi Lahcene"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي لحسن",
                                        "en" => "Sidi Lahcene",
                                        "fr" => "Sidi Lahcene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العمارنة",
                                        "en" => "Amarnas",
                                        "fr" => "Amarnas"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي خالد",
                                        "en" => "Sidi Khaled",
                                        "fr" => "Sidi Khaled"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي يعقوب",
                                        "en" => "Sidi Yacoub",
                                        "fr" => "Sidi Yacoub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تلاغ",
                                "en" => "Telagh",
                                "fr" => "Telagh"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تلاغ",
                                        "en" => "Telagh",
                                        "fr" => "Telagh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مزاورو",
                                        "en" => "Mezaourou",
                                        "fr" => "Mezaourou"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الضاية",
                                        "en" => "Dhaya",
                                        "fr" => "Dhaya"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تغاليمت",
                                        "en" => "Teghalimet",
                                        "fr" => "Teghalimet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تنيرة",
                                "en" => "Tenira",
                                "fr" => "Tenira"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تنيرة",
                                        "en" => "Tenira",
                                        "fr" => "Tenira"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادى سفيون",
                                        "en" => "Oued Sefioun",
                                        "fr" => "Oued Sefioun"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن عشيبة الشلية",
                                        "en" => "Benachiba Chelia",
                                        "fr" => "Benachiba Chelia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسى دحو",
                                        "en" => "Hassi Dahou",
                                        "fr" => "Hassi Dahou"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تسالة",
                                "en" => "Tessala",
                                "fr" => "Tessala"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تسالة",
                                        "en" => "Tessala",
                                        "fr" => "Tessala"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الثريد",
                                        "en" => "Aïn Thrid",
                                        "fr" => "Aïn Thrid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سهالة ثاورة",
                                        "en" => "Sehala Thaoura",
                                        "fr" => "Sehala Thaoura"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "عنابة",
                        "en" => "Annaba",
                        "fr" => "Annaba"
                    ],
                    "code_postal" => "23000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "عنابة",
                                "en" => "Annaba",
                                "fr" => "Annaba"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عنابة",
                                        "en" => "Annaba",
                                        "fr" => "Annaba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سرايدي",
                                        "en" => "Seraïdi",
                                        "fr" => "Seraïdi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين الباردة",
                                "en" => "Aïn Berda",
                                "fr" => "Aïn Berda"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين الباردة",
                                        "en" => "Aïn Berda",
                                        "fr" => "Aïn Berda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الشرفة",
                                        "en" => "Cheurfa",
                                        "fr" => "Cheurfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العلمة",
                                        "en" => "Eulma",
                                        "fr" => "Eulma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الحجار",
                                "en" => "El Hadjar",
                                "fr" => "El Hadjar"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الحجار",
                                        "en" => "El Hadjar",
                                        "fr" => "El Hadjar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عمار",
                                        "en" => "Sidi Amar",
                                        "fr" => "Sidi Amar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "برحال",
                                "en" => "Berrahal",
                                "fr" => "Berrahal"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "برحال",
                                        "en" => "Berrahal",
                                        "fr" => "Berrahal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي العنب",
                                        "en" => "Oued El Aneb",
                                        "fr" => "Oued El Aneb"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "التريعات",
                                        "en" => "Treat",
                                        "fr" => "Treat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "شطايبي",
                                "en" => "Chetaïbi",
                                "fr" => "Chetaïbi"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "شطايبي",
                                        "en" => "Chetaïbi",
                                        "fr" => "Chetaïbi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "البوني",
                                "en" => "El Bouni",
                                "fr" => "El Bouni"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "البوني",
                                        "en" => "El Bouni",
                                        "fr" => "El Bouni"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "قالمة",
                        "en" => "Guelma",
                        "fr" => "Guelma"
                    ],
                    "code_postal" => "24000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "قالمة",
                                "en" => "Guelma",
                                "fr" => "Guelma"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قالمة",
                                        "en" => "Guelma",
                                        "fr" => "Guelma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن جراح",
                                        "en" => "Ben Djerrah",
                                        "fr" => "Ben Djerrah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Khezarra",
                                "fr" => "Khezarra"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "خزارة",
                                        "en" => "Khezarra",
                                        "fr" => "Khezarra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوحشانة",
                                        "en" => "Bou Hachana",
                                        "fr" => "Bou Hachana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين صاندل",
                                        "en" => "Aïn Sandel",
                                        "fr" => "Aïn Sandel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "قلعة بو سبع",
                                "en" => "Guelaât Bou Sbaâ",
                                "fr" => "Guelaât Bou Sbaâ"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قلعة بو سبع",
                                        "en" => "Guelaât Bou Sbaâ",
                                        "fr" => "Guelaât Bou Sbaâ"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "نشماية",
                                        "en" => "Nechmaya",
                                        "fr" => "Nechmaya"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "جبالة الخميسى",
                                        "en" => "Djeballah Khemissi",
                                        "fr" => "Djeballah Khemissi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بومهرة أحمد",
                                        "en" => "Boumahra Ahmed",
                                        "fr" => "Boumahra Ahmed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى مزلين",
                                        "en" => "Beni Mezline",
                                        "fr" => "Beni Mezline"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بلخير",
                                        "en" => "Belkheir",
                                        "fr" => "Belkheir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ھيليوبوليس",
                                "en" => "Héliopolis",
                                "fr" => "Héliopolis"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الفجوج",
                                        "en" => "El Fedjoudj",
                                        "fr" => "El Fedjoudj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوعاتي محمود",
                                        "en" => "Bouati Mahmoud",
                                        "fr" => "Bouati Mahmoud"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "وادي زناتي",
                                "en" => "Oued Zenati",
                                "fr" => "Oued Zenati"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "وادي زناتي",
                                        "en" => "Oued Zenati",
                                        "fr" => "Oued Zenati"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "برج صباط",
                                        "en" => "Bordj Sabat",
                                        "fr" => "Bordj Sabat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين رقادة",
                                        "en" => "Aïn Reggada",
                                        "fr" => "Aïn Reggada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين مخلوف",
                                "en" => "Ain Makhlouf",
                                "fr" => "Ain Makhlouf"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين مخلوف",
                                        "en" => "Ain Makhlouf",
                                        "fr" => "Ain Makhlouf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين العربى",
                                        "en" => "Aïn Larbi",
                                        "fr" => "Aïn Larbi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تاملوكة",
                                        "en" => "Tamlouka",
                                        "fr" => "Tamlouka"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "همام دباغ",
                                "en" => "Hammam Debagh",
                                "fr" => "Hammam Debagh"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "همام دباغ",
                                        "en" => "Hammam Debagh",
                                        "fr" => "Hammam Debagh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الركنية",
                                        "en" => "Roknia",
                                        "fr" => "Roknia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوحمدان",
                                        "en" => "Bou Hamdane",
                                        "fr" => "Bou Hamdane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوشڨوف",
                                "en" => "Bouchegouf",
                                "fr" => "Bouchegouf"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوشڨوف",
                                        "en" => "Bouchegouf",
                                        "fr" => "Bouchegouf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين بن بيضاء",
                                        "en" => "Aïn Ben Beida",
                                        "fr" => "Aïn Ben Beida"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مجاز الصفاء",
                                        "en" => "Medjez Sfa",
                                        "fr" => "Medjez Sfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي فراغة",
                                        "en" => "Oued Fragha",
                                        "fr" => "Oued Fragha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "همام نبيلز",
                                "en" => "Hammam N’Bails",
                                "fr" => "Hammam N’Bails"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "همام نبيلز",
                                        "en" => "Hammam N’Bails",
                                        "fr" => "Hammam N’Bails"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "واد شهام",
                                        "en" => "Oued Cheham",
                                        "fr" => "Oued Cheham"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الدهوارة",
                                        "en" => "Dahouara",
                                        "fr" => "Dahouara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "هواري بومدين",
                                "en" => "Houari Boumédiène",
                                "fr" => "Houari Boumédiène"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "هواري بومدين",
                                        "en" => "Houari Boumédiène",
                                        "fr" => "Houari Boumédiène"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مجاز عمار",
                                        "en" => "Medjez Amar",
                                        "fr" => "Medjez Amar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "راس العقبة",
                                        "en" => "Ras El Agba",
                                        "fr" => "Ras El Agba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سلاوة عنونة",
                                        "en" => "Sellaoua Announa",
                                        "fr" => "Sellaoua Announa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "قسنطينة",
                        "en" => "Constantine",
                        "fr" => "Constantine"
                    ],
                    "code_postal" => "25000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "قسنطينة",
                                "en" => "Constantine",
                                "fr" => "Constantine"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قسنطينة",
                                        "en" => "Constantine",
                                        "fr" => "Constantine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الخروب",
                                "en" => "El Khroub",
                                "fr" => "El Khroub"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الخروب",
                                        "en" => "El Khroub",
                                        "fr" => "El Khroub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين سمارة",
                                        "en" => "Aïn Smara",
                                        "fr" => "Aïn Smara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد رحمون",
                                        "en" => "Ouled Rahmoune",
                                        "fr" => "Ouled Rahmoune"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين عبيد",
                                "en" => "Aïn Abid",
                                "fr" => "Aïn Abid"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين عبيد",
                                        "en" => "Aïn Abid",
                                        "fr" => "Aïn Abid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ابن باديس",
                                        "en" => "Ibn Badis",
                                        "fr" => "Ibn Badis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "زيغوت يوسف",
                                "en" => "Zighoud Youcef",
                                "fr" => "Zighoud Youcef"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "زيغوت يوسف",
                                        "en" => "Zighoud Youcef",
                                        "fr" => "Zighoud Youcef"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى حميدان",
                                        "en" => "Beni Hamiden",
                                        "fr" => "Beni Hamiden"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "حامة بوزيان",
                                "en" => "Hamma Bouziane",
                                "fr" => "Hamma Bouziane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حامة بوزيان",
                                        "en" => "Hamma Bouziane",
                                        "fr" => "Hamma Bouziane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ديدوش مراد",
                                        "en" => "Didouche Mourad",
                                        "fr" => "Didouche Mourad"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ابن زياد",
                                "en" => "Ibn Ziad",
                                "fr" => "Ibn Ziad"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ابن زياد",
                                        "en" => "Ibn Ziad",
                                        "fr" => "Ibn Ziad"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مسعود بوجريو",
                                        "en" => "Messaoud Boudjriou",
                                        "fr" => "Messaoud Boudjriou"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "المدية",
                        "en" => "Médéa",
                        "fr" => "Médéa"
                    ],
                    "code_postal" => "26000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "عين بوسيف",
                                "en" => "Aïn Boucif",
                                "fr" => "Aïn Boucif"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين بوسيف",
                                        "en" => "Aïn Boucif",
                                        "fr" => "Aïn Boucif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الكاف الاخضر",
                                        "en" => "Kef Lakhdar",
                                        "fr" => "Kef Lakhdar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد معرف",
                                        "en" => "Ouled Maaref",
                                        "fr" => "Ouled Maaref"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي دامد",
                                        "en" => "Sidi Damed",
                                        "fr" => "Sidi Damed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العوينات",
                                        "en" => "El Ouinet",
                                        "fr" => "El Ouinet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عزيز",
                                "en" => "Aziz",
                                "fr" => "Aziz"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عزيز",
                                        "en" => "Aziz",
                                        "fr" => "Aziz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ام الجليل",
                                        "en" => "Oum El Djalil",
                                        "fr" => "Oum El Djalil"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "دراڨ",
                                        "en" => "Derrag",
                                        "fr" => "Derrag"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بنى سليمان",
                                "en" => "Beni Slimane",
                                "fr" => "Beni Slimane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بنى سليمان",
                                        "en" => "Beni Slimane",
                                        "fr" => "Beni Slimane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي الربيع",
                                        "en" => "Sidi Errabia",
                                        "fr" => "Sidi Errabia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوسكن",
                                        "en" => "Bouskene",
                                        "fr" => "Bouskene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "البرواقية",
                                "en" => "Berrouaghia",
                                "fr" => "Berrouaghia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "البرواقية",
                                        "en" => "Berrouaghia",
                                        "fr" => "Berrouaghia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الربعية",
                                        "en" => "Rebaia",
                                        "fr" => "Rebaia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اولاد دايد",
                                        "en" => "Ouled Deide",
                                        "fr" => "Ouled Deide"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الشهبونية",
                                "en" => "Chahbounia",
                                "fr" => "Chahbounia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الشهبونية",
                                        "en" => "Chahbounia",
                                        "fr" => "Chahbounia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوغزول",
                                        "en" => "Boughezoul",
                                        "fr" => "Boughezoul"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوعيش",
                                        "en" => "Bou Aiche",
                                        "fr" => "Bou Aiche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "شلالة العذاورة",
                                "en" => "Chellalet El Adhaoura",
                                "fr" => "Chellalet El Adhaoura"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "شلالة العذاورة",
                                        "en" => "Chellalet El Adhaoura",
                                        "fr" => "Chellalet El Adhaoura"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "شنيقل",
                                        "en" => "Cheniguel",
                                        "fr" => "Cheniguel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تافراوت",
                                        "en" => "Tafraout",
                                        "fr" => "Tafraout"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين القصير",
                                        "en" => "Aïn Ouksir",
                                        "fr" => "Aïn Ouksir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "العزيزية",
                                "en" => "El Azizia",
                                "fr" => "El Azizia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "العزيزية",
                                        "en" => "El Azizia",
                                        "fr" => "El Azizia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مغراوة",
                                        "en" => "Maghraoua",
                                        "fr" => "Maghraoua"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ميهوب",
                                        "en" => "Mihoub",
                                        "fr" => "Mihoub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "القلب الكبير",
                                "en" => "El Guelb El Kebir",
                                "fr" => "El Guelb El Kebir"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "القلب الكبير",
                                        "en" => "El Guelb El Kebir",
                                        "fr" => "El Guelb El Kebir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "السدراية",
                                        "en" => "Sedraia",
                                        "fr" => "Sedraia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بئر بن عابد",
                                        "en" => "Bir Ben Abed",
                                        "fr" => "Bir Ben Abed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "العمرية",
                                "en" => "El Omaria",
                                "fr" => "El Omaria"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "العمرية",
                                        "en" => "El Omaria",
                                        "fr" => "El Omaria"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بعطة",
                                        "en" => "Baata",
                                        "fr" => "Baata"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اولاد ابراهيم",
                                        "en" => "Ouled Brahim",
                                        "fr" => "Ouled Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "قصر البخاري",
                                "en" => "Ksar Boukhari",
                                "fr" => "Ksar Boukhari"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "قصر البخاري",
                                        "en" => "Ksar Boukhari",
                                        "fr" => "Ksar Boukhari"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المفاتحة",
                                        "en" => "M'Fatha",
                                        "fr" => "M'Fatha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سانڨ",
                                        "en" => "Saneg",
                                        "fr" => "Saneg"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "المدية",
                                "en" => "Médéa",
                                "fr" => "Médéa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "المدية",
                                        "en" => "Médéa",
                                        "fr" => "Médéa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ذراع السمار",
                                        "en" => "Draa Essamar",
                                        "fr" => "Draa Essamar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تامسڨيدة",
                                        "en" => "Tamesguida",
                                        "fr" => "Tamesguida"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "وامرى",
                                "en" => "Ouamri",
                                "fr" => "Ouamri"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "وامرى",
                                        "en" => "Ouamri",
                                        "fr" => "Ouamri"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادى حربيل",
                                        "en" => "Oued Harbil",
                                        "fr" => "Oued Harbil"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حناشة",
                                        "en" => "Hannacha",
                                        "fr" => "Hannacha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "اولاد عنتر",
                                "en" => "Ouled Antar",
                                "fr" => "Ouled Antar"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "اولاد عنتر",
                                        "en" => "Ouled Antar",
                                        "fr" => "Ouled Antar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوغار",
                                        "en" => "Boughar",
                                        "fr" => "Boughar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اولاد هلال",
                                        "en" => "Ouled Hellal",
                                        "fr" => "Ouled Hellal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "وزرة",
                                "en" => "Ouzera",
                                "fr" => "Ouzera"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "وزرة",
                                        "en" => "Ouzera",
                                        "fr" => "Ouzera"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تيزي المهدي",
                                        "en" => "Tizi Mahdi",
                                        "fr" => "Tizi Mahdi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحمدانية",
                                        "en" => "El Hamdania",
                                        "fr" => "El Hamdania"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن شكاو",
                                        "en" => "Benchicao",
                                        "fr" => "Benchicao"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سغوان",
                                "en" => "Seghouane",
                                "fr" => "Seghouane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سغوان",
                                        "en" => "Seghouane",
                                        "fr" => "Seghouane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الزبيرية",
                                        "en" => "Zoubiria",
                                        "fr" => "Zoubiria"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مجبر",
                                        "en" => "Moudjbar",
                                        "fr" => "Moudjbar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ثلاثة الدوائر",
                                        "en" => "Tlatet Eddouar",
                                        "fr" => "Tlatet Eddouar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي نعمان",
                                "en" => "Sidi Naamane",
                                "fr" => "Sidi Naamane"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي نعمان",
                                        "en" => "Sidi Naamane",
                                        "fr" => "Sidi Naamane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خمس جوامع",
                                        "en" => "Khams Djouamaa",
                                        "fr" => "Khams Djouamaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوشراحيل",
                                        "en" => "Bouchrahil",
                                        "fr" => "Bouchrahil"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سى المحجوب",
                                "en" => "Si Mahdjoub",
                                "fr" => "Si Mahdjoub"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سى المحجوب",
                                        "en" => "Si Mahdjoub",
                                        "fr" => "Si Mahdjoub"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اولاد بوعشرة",
                                        "en" => "Ouled Bouachra",
                                        "fr" => "Ouled Bouachra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوعيشون",
                                        "en" => "Bouaichoune",
                                        "fr" => "Bouaichoune"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "السواقى",
                                "en" => "Souagui",
                                "fr" => "Souagui"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "السواقى",
                                        "en" => "Souagui",
                                        "fr" => "Souagui"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "جواب",
                                        "en" => "Djouab",
                                        "fr" => "Djouab"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي زهار",
                                        "en" => "Sidi Zahar",
                                        "fr" => "Sidi Zahar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي زيان",
                                        "en" => "Sidi Ziane",
                                        "fr" => "Sidi Ziane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تابلاط",
                                "en" => "Tablat",
                                "fr" => "Tablat"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تابلاط",
                                        "en" => "Tablat",
                                        "fr" => "Tablat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحوضان",
                                        "en" => "Deux Bassins",
                                        "fr" => "Two Basins"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العيساوية",
                                        "en" => "Aissaouia",
                                        "fr" => "Aissaouia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مزغنة",
                                        "en" => "Mezerana",
                                        "fr" => "Mezerana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "مستغانم",
                        "en" => "Mostaganem",
                        "fr" => "Mostaganem"
                    ],
                    "code_postal" => "27000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "مستغانم",
                                "en" => "Mostaganem",
                                "fr" => "Mostaganem"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مستغانم",
                                        "en" => "Mostaganem",
                                        "fr" => "Mostaganem"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "حاسي مماش",
                                "en" => "Hassi Maameche",
                                "fr" => "Hassi Maameche"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حاسي مماش",
                                        "en" => "Hassi Mameche",
                                        "fr" => "Hassi Mameche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مزغران",
                                        "en" => "Mazagran",
                                        "fr" => "Mazagran"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ستيدية",
                                        "en" => "Stidia",
                                        "fr" => "Stidia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين تادلس",
                                "en" => "Aïn Tedles",
                                "fr" => "Aïn Tedles"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين تادلس",
                                        "en" => "Aïn Tedles",
                                        "fr" => "Aïn Tedles"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "صور",
                                        "en" => "Sour",
                                        "fr" => "Sour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي بلعطار",
                                        "en" => "Sidi Belattar",
                                        "fr" => "Sidi Belattar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي الخير",
                                        "en" => "Oued El Kheir",
                                        "fr" => "Oued El Kheir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوقيراط",
                                "en" => "Bouguirat",
                                "fr" => "Bouguirat"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوقيراط",
                                        "en" => "Bouguirat",
                                        "fr" => "Bouguirat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "صفصاف",
                                        "en" => "Safsaf",
                                        "fr" => "Safsaf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيرات",
                                        "en" => "Sirat",
                                        "fr" => "Sirat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "Souaflia",
                                        "en" => "السوافلية",
                                        "fr" => "السوافلية"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي على",
                                "en" => "Sidi Ali",
                                "fr" => "Sidi Ali"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي على",
                                        "en" => "Sidi Ali",
                                        "fr" => "Sidi Ali"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اولاد معالة",
                                        "en" => "Ouled Maallah",
                                        "fr" => "Ouled Maallah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تزقايت",
                                        "en" => "Tazgait",
                                        "fr" => "Tazgait"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Achaacha",
                                "fr" => "Achaacha"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عَشْعَاشَة",
                                        "en" => "Achaacha",
                                        "fr" => "Achaacha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خضراء",
                                        "en" => "Khadra",
                                        "fr" => "Khadra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "نقمارية",
                                        "en" => "Nekmaria",
                                        "fr" => "Nekmaria"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد بوغالم",
                                        "en" => "Ouled Boughalem",
                                        "fr" => "Ouled Boughalem"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين نويسي",
                                "en" => "Aïn Nouïssy",
                                "fr" => "Aïn Nouïssy"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين نويسي",
                                        "en" => "Aïn Nouïssy",
                                        "fr" => "Aïn Nouïssy"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحسيان",
                                        "en" => "El Hassiane",
                                        "fr" => "El Hassiane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "فرناكة",
                                        "en" => "Fornaka",
                                        "fr" => "Fornaka"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ماسرى",
                                "en" => "Mesra",
                                "fr" => "Mesra"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ماسرى",
                                        "en" => "Mesra",
                                        "fr" => "Mesra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين سيدي شريف",
                                        "en" => "Aïn Sidi Cherif",
                                        "fr" => "Aïn Sidi Cherif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حي المنصورة",
                                        "en" => "Mansoura district",
                                        "fr" => "Quartier de Mansourah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الطواھرية",
                                        "en" => "Touahria",
                                        "fr" => "Touahria"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي لخضر",
                                "en" => "Sidi Lakhdar",
                                "fr" => "Sidi Lakhdar"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي لخضر",
                                        "en" => "Sidi Lakhdar",
                                        "fr" => "Sidi Lakhdar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حجاج",
                                        "en" => "Hadjaj",
                                        "fr" => "Hadjadj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عبد المالك رمضان",
                                        "en" => "Abdelmalek Ramdane",
                                        "fr" => "Abdelmalek Ramdane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Kheireddine",
                                "fr" => "Kheireddine"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "خير الدين",
                                        "en" => "Kheireddine",
                                        "fr" => "Kheireddine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين بودينار",
                                        "en" => "Aïn Boudinar",
                                        "fr" => "Aïn Boudinar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "صيادة",
                                        "en" => "Sayada",
                                        "fr" => "Sayada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "المسيلة",
                        "en" => "M'Sila",
                        "fr" => "M'Sila"
                    ],
                    "code_postal" => "28000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "المسيلة",
                                "en" => "M'Sila",
                                "fr" => "M'Sila"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "المسيلة",
                                        "en" => "M'Sila",
                                        "fr" => "M'Sila"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Hammam Dalaa",
                                "fr" => "Hammam Dalaa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حمام الضلعة",
                                        "en" => "Hammam Dalaa",
                                        "fr" => "Hammam Dalaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تارمونت",
                                        "en" => "Tarmount",
                                        "fr" => "Tarmount"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد منصور",
                                        "en" => "Ouled Mansour",
                                        "fr" => "Ouled Mansour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ونوغة",
                                        "en" => "Ouanougha",
                                        "fr" => "Ouanougha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أولاد دراج",
                                "en" => "Ouled Derradj",
                                "fr" => "Ouled Derradj"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أولاد دراج",
                                        "en" => "Ouled Derradj",
                                        "fr" => "Ouled Derradj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المعاضيد",
                                        "en" => "Maadid",
                                        "fr" => "Maadid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المطارفة",
                                        "en" => "M'Tarfa",
                                        "fr" => "M'Tarfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد عدى القبالة",
                                        "en" => "Ouled Addi Guébala",
                                        "fr" => "Ouled Addi Guebala"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "السوامع",
                                        "en" => "Souamaa",
                                        "fr" => "Souamaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Sidi Aissa",
                                "fr" => "Sidi Aissa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي عيسى",
                                        "en" => "Sidi Aissa",
                                        "fr" => "Sidi Aissa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوطى السايح",
                                        "en" => "Bouti Sayah",
                                        "fr" => "Bouti Sayah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنى يلمان",
                                        "en" => "Beni Ilmane",
                                        "fr" => "Beni Ilmane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين الملح",
                                "en" => "Ain El Melh",
                                "fr" => "Aïn El Melh"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين الملح",
                                        "en" => "Ain El Melh",
                                        "fr" => "Aïn El Melh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بير الفضة",
                                        "en" => "Bir Foda",
                                        "fr" => "Bir Foda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين فارس",
                                        "en" => "Ain Fares",
                                        "fr" => "Aïn Fares"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي محمد",
                                        "en" => "Sidi M'Hamed",
                                        "fr" => "Sidi M'Hamed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الريش",
                                        "en" => "Ain Errich",
                                        "fr" => "Aïn Errich"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بن سرور",
                                "en" => "Ben Srour",
                                "fr" => "Ben Srour"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بن سرور",
                                        "en" => "Ben Srour",
                                        "fr" => "Ben Srour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد سليمان",
                                        "en" => "Ouled Slimane",
                                        "fr" => "Ouled Slimane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الزرزور",
                                        "en" => "Zarzour",
                                        "fr" => "Zarzour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "محمد بوضياف",
                                        "en" => "Mohammed Boudiaf",
                                        "fr" => "Mohammed Boudiaf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوسعادة",
                                "en" => "Bou Saada",
                                "fr" => "Bou Saada"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوسعادة",
                                        "en" => "Bou Saada",
                                        "fr" => "Bou Saada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الھامل",
                                        "en" => "El Hamel",
                                        "fr" => "El Hamel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ولتام",
                                        "en" => "Oultene",
                                        "fr" => "Oultene"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أولاد سيدي ابراھيم",
                                "en" => "Ouled sidi Brahim",
                                "fr" => "Ouled sidi Brahim"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أولاد سيدي ابراھيم",
                                        "en" => "Ouled sidi Brahim",
                                        "fr" => "Ouled sidi Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن الزوه",
                                        "en" => "Benzouh",
                                        "fr" => "Benzouh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي عامر",
                                "en" => "Sidi Ameur",
                                "fr" => "Sidi Ameur"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي عامر",
                                        "en" => "Sidi Ameur",
                                        "fr" => "Sidi Ameur"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تامسة",
                                        "en" => "Tamsa",
                                        "fr" => "Tamsa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مڨرة",
                                "en" => "Magra",
                                "fr" => "Magra"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مڨرة",
                                        "en" => "Magra",
                                        "fr" => "Magra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "برهوم",
                                        "en" => "Berhoum",
                                        "fr" => "Berhoum"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين خضراء",
                                        "en" => "Ain Khadra",
                                        "fr" => "Aïn Khadra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "دھاھنة",
                                        "en" => "Dehahna",
                                        "fr" => "Dehahna"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بلعايبة",
                                        "en" => "Belaiba",
                                        "fr" => "Belaiba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Chellal",
                                "fr" => "Chellal"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "شلال",
                                        "en" => "Chellal",
                                        "fr" => "Chellal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد ماضى",
                                        "en" => "Ouled Madhi",
                                        "fr" => "Ouled Madhi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خطوطي سد الجير",
                                        "en" => "Khettouti Sed El Djir",
                                        "fr" => "Khettouti Sed El Djir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المعاريف",
                                        "en" => "Maarif",
                                        "fr" => "Maarif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "خبانة",
                                "en" => "Khoubana",
                                "fr" => "Khoubana"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "خبانة",
                                        "en" => "Khoubana",
                                        "fr" => "Khoubana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مسيف",
                                        "en" => "M'Cif",
                                        "fr" => "M'Cif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحوامد",
                                        "en" => "El Houamed",
                                        "fr" => "El Houamed"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مجدل",
                                "en" => "Medjedel",
                                "fr" => "Medjedel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مجدل",
                                        "en" => "Medjedel",
                                        "fr" => "Medjedel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد عطية",
                                        "en" => "Ouled Atia",
                                        "fr" => "Ouled Atia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين الحجل",
                                "en" => "Ain El Hadjel",
                                "fr" => "Aïn El Hadjel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي ھجرس",
                                        "en" => "Sidi Hadjeres",
                                        "fr" => "Sidi Hadjeres"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الحجل",
                                        "en" => "Ain El Hadjel",
                                        "fr" => "Aïn El Hadjel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جبل امساعد",
                                "en" => "Jebel Messaad",
                                "fr" => "Djebel Messaad"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "جبل امساعد",
                                        "en" => "Jebel Messaad",
                                        "fr" => "Djebel Messaad"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سليم",
                                        "en" => "Slim",
                                        "fr" => "Slim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],

                    ]

            ],
            [
                    "name" => [
                        "ar" => "معسكر",
                        "en" => "Mascara",
                        "fr" => "Mascara"
                    ],
                    "code_postal" => "29000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "عين فارس",
                                "en" => "Ain Fares",
                                "fr" => "Aïn Fares"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين فارس",
                                        "en" => "Ain Fares",
                                        "fr" => "Aïn Fares"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المامونية",
                                        "en" => "Mamounia",
                                        "fr" => "Mamounia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين فكان",
                                "en" => "Ain Fekan",
                                "fr" => "Aïn Fekan"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين فكان",
                                        "en" => "Ain Fekan",
                                        "fr" => "Aïn Fekan"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين افرص",
                                        "en" => "Ain Fras",
                                        "fr" => "Aïn Fras"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عوف",
                                "en" => "Aouf",
                                "fr" => "Aouf"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عوف",
                                        "en" => "Aouf",
                                        "fr" => "Aouf"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "غروس",
                                        "en" => "Gharrous",
                                        "fr" => "Gharrous"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بنيان",
                                        "en" => "Beniane",
                                        "fr" => "Beniane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Bou Hanifia",
                                "fr" => "Bou Hanifia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوحنيفية",
                                        "en" => "Bou Hanifia",
                                        "fr" => "Bou Hanifia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "القيطنة",
                                        "en" => "El Guettana",
                                        "fr" => "El Guettana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حسين",
                                        "en" => "Hacine",
                                        "fr" => "Hacine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "البرج",
                                "en" => "El Bordj",
                                "fr" => "El Bordj"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "البرج",
                                        "en" => "El Bordj",
                                        "fr" => "El Bordj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خلوية",
                                        "en" => "Khalouia",
                                        "fr" => "Khalouia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المناور",
                                        "en" => "El Menaouer",
                                        "fr" => "El Menaouer"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "غريس",
                                "en" => "Ghriss",
                                "fr" => "Ghriss"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "غريس",
                                        "en" => "Ghriss",
                                        "fr" => "Ghriss"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مطمور",
                                        "en" => "Matemore",
                                        "fr" => "Matemore"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي بوسعيد",
                                        "en" => "Sidi Boussaid",
                                        "fr" => "Sidi Boussaid"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ماوسة",
                                        "en" => "Maoussa",
                                        "fr" => "Maoussa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ماقضة",
                                        "en" => "Makdha",
                                        "fr" => "Makdha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الهاشم",
                                "en" => "Hachem",
                                "fr" => "Hachem"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الهاشم",
                                        "en" => "Hachem",
                                        "fr" => "Hachem"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "زلماطة",
                                        "en" => "Zelmata",
                                        "fr" => "Zelmata"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "نسموط",
                                        "en" => "Nesmoth",
                                        "fr" => "Nesmoth"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مـعـسـكـر",
                                "en" => "Mascara",
                                "fr" => "Mascara"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مـعـسـكـر",
                                        "en" => "Mascara",
                                        "fr" => "Mascara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "المحمدية",
                                "en" => "Mohammadia",
                                "fr" => "Mohammadia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "المحمدية",
                                        "en" => "Mohammadia",
                                        "fr" => "Mohammadia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الغمري",
                                        "en" => "El Ghomri",
                                        "fr" => "El Ghomri"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "فرقيق",
                                        "en" => "Ferraguig",
                                        "fr" => "Ferraguig"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مقطع الدوز",
                                        "en" => "Mocta Douz",
                                        "fr" => "Mocta Douz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سجرارة",
                                        "en" => "Sedjerara",
                                        "fr" => "Sedjerara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عبد المومن",
                                        "en" => "Sidi Abdelmoumen",
                                        "fr" => "Sidi Abdelmoumen"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عقاز",
                                "en" => "Oggaz",
                                "fr" => "Oggaz"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عقاز",
                                        "en" => "Oggaz",
                                        "fr" => "Oggaz"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العلايمية",
                                        "en" => "Alaimia",
                                        "fr" => "Alaïmia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "رأس العين عميروش",
                                        "en" => "Ras El Aïn Amirouche",
                                        "fr" => "Ras El Ain Amirouche"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "واد الأبطال",
                                "en" => "Oued El Abtal",
                                "fr" => "Oued El Abtal"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "واد الأبطال",
                                        "en" => "Oued El Abtal",
                                        "fr" => "Oued El Abtal"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين فراح",
                                        "en" => "Ain Ferah",
                                        "fr" => "Aïn Ferah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عبد الجبار",
                                        "en" => "Sidi Abdeldjebar",
                                        "fr" => "Sidi Abdeldjebar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Oued Taria",
                                "fr" => "Oued Taria"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "واد التاغية",
                                        "en" => "Oued Taria",
                                        "fr" => "Oued Taria"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ڤرجوم",
                                        "en" => "Guerdjoum",
                                        "fr" => "Guerdjoum"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيڨ",
                                "en" => "Sig",
                                "fr" => "Sig"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيڨ",
                                        "en" => "Sig",
                                        "fr" => "Sig"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الشرفة",
                                        "en" => "Chorfa",
                                        "fr" => "Chorfa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوهني",
                                        "en" => "Bou Henni",
                                        "fr" => "Bou Henni"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تيغنيف",
                                "en" => "Tighennif",
                                "fr" => "Tighennif"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تيغنيف",
                                        "en" => "Tighennif",
                                        "fr" => "Tighennif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي قادة",
                                        "en" => "Sidi Kada",
                                        "fr" => "Sidi Kada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سهايلية",
                                        "en" => "Sehailia",
                                        "fr" => "Sehailia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تيزي",
                                "en" => "Tizi",
                                "fr" => "Tizi"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تيزي",
                                        "en" => "Tizi",
                                        "fr" => "Tizi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "فروحة",
                                        "en" => "Froha",
                                        "fr" => "Froha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الكرط",
                                        "en" => "El Keurt",
                                        "fr" => "El Keurt"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "زھانة",
                                "en" => "Zahana",
                                "fr" => "Zahana"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "زھانة",
                                        "en" => "Zahana",
                                        "fr" => "Zahana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "القعدة",
                                        "en" => "El Gaada",
                                        "fr" => "El Gaada"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "ورقلة",
                        "en" => "Ouargla",
                        "fr" => "Ouargla"
                    ],
                    "code_postal" => "30000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "البرمة",
                                "en" => "El Borma",
                                "fr" => "El Borma"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "البرمة",
                                        "en" => "El Borma",
                                        "fr" => "El Borma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الحجيرة",
                                "en" => "El Hadjira",
                                "fr" => "El Hadjira"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الحجيرة",
                                        "en" => "El Hadjira",
                                        "fr" => "El Hadjira"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العالية",
                                        "en" => "El Allia",
                                        "fr" => "El Allia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],[
                            "name" => [
                                "ar" => "حاسي مسعود",
                                "en" => "Hassi Messaoud",
                                "fr" => "Hassi Messaoud"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "حاسي مسعود",
                                        "en" => "Hassi Messaoud",
                                        "fr" => "Hassi Messaoud"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "المقارين",
                                "en" => "Megarine",
                                "fr" => "Megarine"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي سليمان",
                                        "en" => "Sidi Slimane",
                                        "fr" => "Sidi Slimane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "",
                                        "en" => "Megarine",
                                        "fr" => "Megarine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "نڨوسة",
                                "en" => "N'Goussa",
                                "fr" => "N'Goussa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "نڨوسة",
                                        "en" => "N'Goussa",
                                        "fr" => "N'Goussa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ورڨلة",
                                "en" => "Ouargla",
                                "fr" => "Ouargla"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ورڨلة",
                                        "en" => "Ouargla",
                                        "fr" => "Ouargla"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الرويسات",
                                        "en" => "Rouissat",
                                        "fr" => "Rouissat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "سيدي خويلد",
                                "en" => "Sidi Khouiled",
                                "fr" => "Sidi Khouiled"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "سيدي خويلد",
                                        "en" => "Sidi Khouiled",
                                        "fr" => "Sidi Khouiled"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين البيضاء",
                                        "en" => "Ain Beida",
                                        "fr" => "Aïn Beida"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسي بن عبد ﷲ",
                                        "en" => "Hassi Ben Abdellah",
                                        "fr" => "Hassi Ben Abdellah"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الطيبات",
                                "en" => "Taibet",
                                "fr" => "Taibet"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الطيبات",
                                        "en" => "Taibet",
                                        "fr" => "Taibet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المنقر",
                                        "en" => "M'Naguer",
                                        "fr" => "M'Naguer"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن ناصر",
                                        "en" => "Benaceur",
                                        "fr" => "Benaceur"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تماسين",
                                "en" => "Tamacine",
                                "fr" => "Tamacine"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تماسين",
                                        "en" => "Tamacine",
                                        "fr" => "Tamacine"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بليدة عامر",
                                        "en" => "Blidet Amor",
                                        "fr" => "Blidet Amor"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],


                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "تڨرت",
                                "en" => "Touggourt",
                                "fr" => "Touggourt"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "تڨرت",
                                        "en" => "Touggourt",
                                        "fr" => "Touggourt"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الزاوية العابدية",
                                        "en" => "Zaouia El Abidia",
                                        "fr" => "Zaouia El Abidia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تبسبست",
                                        "en" => "Tebesbest",
                                        "fr" => "Tebesbest"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "النزلة",
                                        "en" => "Nezla",
                                        "fr" => "Nezla"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "وهران",
                        "en" => "Oran",
                        "fr" => "Oran"
                    ],
                    "code_postal" => "31000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "وهران",
                                "en" => "Oran",
                                "fr" => "Oran"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "وهران",
                                        "en" => "Oran",
                                        "fr" => "Oran"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عيْن التُرْكْ",
                                "en" => "Ain El Turk",
                                "fr" => "Aïn El Turk"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عيْن التُرْكْ",
                                        "en" => "Ain El Turk",
                                        "fr" => "Aïn El Turk"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوسفر",
                                        "en" => "Bousfer",
                                        "fr" => "Bousfer"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العنصر",
                                        "en" => "El Ançor",
                                        "fr" => "El Ançor"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المرسى الكبير",
                                        "en" => "Mers el-Kébir",
                                        "fr" => "Mers el-Kébir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "أرزيو",
                                "en" => "Arzew",
                                "fr" => "Arzew"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "أرزيو",
                                        "en" => "Arzew",
                                        "fr" => "Arzew"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي بن يبقى",
                                        "en" => "Sidi Benyebka",
                                        "fr" => "Sidi Benyebka"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ﺑﻃﻴﻭة",
                                "en" => "Bethioua",
                                "fr" => "Bethioua"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ﺑﻃﻴﻭة",
                                        "en" => "Bethioua",
                                        "fr" => "Bethioua"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين البية",
                                        "en" => "Ain El Bia",
                                        "fr" => "Aïn El Bia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مَرس ألحَجَاج",
                                        "en" => "Marsat El Hadjadj",
                                        "fr" => "Marsat El Hadjadj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "السانية",
                                "en" => "Es Senia",
                                "fr" => "Es Senia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "السانية",
                                        "en" => "Es Senia",
                                        "fr" => "Es Senia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الكرمة",
                                        "en" => "El Kerma",
                                        "fr" => "El Kerma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي الشحمي",
                                        "en" => "Sidi Chahmi",
                                        "fr" => "Sidi Chahmi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بئر الجير",
                                "en" => "Bir El Djir",
                                "fr" => "Bir El Djir"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بئر الجير",
                                        "en" => "Bir El Djir",
                                        "fr" => "Bir El Djir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسي بن عقبة",
                                        "en" => "Hassi Ben Okba",
                                        "fr" => "Hassi Ben Okba"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسيْ بُونِيف",
                                        "en" => "Hassi Bounif",
                                        "fr" => "Hassi Bounif"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوتليليس",
                                "en" => "Boutlélis",
                                "fr" => "Boutlélis"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوتليليس",
                                        "en" => "Boutlélis",
                                        "fr" => "Boutlélis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "مسرغين",
                                        "en" => "Misserghin",
                                        "fr" => "Misserghin"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين الكرمة",
                                        "en" => "Ain El Kerma",
                                        "fr" => "Aïn El Kerma"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "وادى تليلات",
                                "en" => "Oued Tlelat",
                                "fr" => "Oued Tlelat"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "وادى تليلات",
                                        "en" => "Oued Tlelat",
                                        "fr" => "Oued Tlelat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بوفاطيس",
                                        "en" => "Boufatis",
                                        "fr" => "Boufatis"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ألبْرَيَ",
                                        "en" => "El Braya",
                                        "fr" => "El Braya"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "طفراوي",
                                        "en" => "Tafraoui",
                                        "fr" => "Tafraoui"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "ڨديل",
                                "en" => "Gdyel",
                                "fr" => "Gdyel"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "ڨديل",
                                        "en" => "Gdyel",
                                        "fr" => "Gdyel"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن فريحة",
                                        "en" => "Ben Freha",
                                        "fr" => "Ben Freha"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حاسي مفسوخ",
                                        "en" => "Hassi Mefsoukh",
                                        "fr" => "Hassi Mefsoukh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "البيض",
                        "en" => "El Bayadh",
                        "fr" => "El Bayadh"
                    ],
                    "code_postal" => "32000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "الـبـيـض",
                                "en" => "El Bayadh",
                                "fr" => "El Bayadh"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الـبـيـض",
                                        "en" => "El Bayadh",
                                        "fr" => "El Bayadh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الرقاصة",
                                "en" => "Rogassa",
                                "fr" => "Rogassa"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الرقاصة",
                                        "en" => "Rogassa",
                                        "fr" => "Rogassa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الشقيق",
                                        "en" => "Cheguig",
                                        "fr" => "Cheguig"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الكاف الاحمر",
                                        "en" => "Kef El Ahmar",
                                        "fr" => "Kef El Ahmar"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بريزينة",
                                "en" => "Brezina",
                                "fr" => "Brezina"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بريزينة",
                                        "en" => "Brezina",
                                        "fr" => "Brezina"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "كراكدة",
                                        "en" => "Kraakda",
                                        "fr" => "Kraakda"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "غسول",
                                        "en" => "Ghassoul",
                                        "fr" => "Ghassoul"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الابيض سيدي الشيخ",
                                "en" => "El Abiodh Sidi Cheikh",
                                "fr" => "El Abiodh Sidi Cheikh"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الابيض سيدي الشيخ",
                                        "en" => "El Abiodh Sidi Cheikh",
                                        "fr" => "El Abiodh Sidi Cheikh"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "البنود",
                                        "en" => "El Bnoud",
                                        "fr" => "El Bnoud"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أربوات",
                                        "en" => "Arbaouat",
                                        "fr" => "Arbaouat"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين العراك",
                                        "en" => "Ain El Orak",
                                        "fr" => "Aïn El Orak"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوقطب",
                                "en" => "Bougtob",
                                "fr" => "Bougtob"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوقطب",
                                        "en" => "Bougtob",
                                        "fr" => "Bougtob"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الخيثر",
                                        "en" => "El Kheiter",
                                        "fr" => "El Kheiter"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "توسمولين",
                                        "en" => "Tousmouline",
                                        "fr" => "Tousmouline"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "شلالة",
                                "en" => "Chellala",
                                "fr" => "Chellala"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "شلالة",
                                        "en" => "Chellala",
                                        "fr" => "Chellala"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المحرة",
                                        "en" => "El Mehara",
                                        "fr" => "El Mehara"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "",
                                "en" => "Boussemghoun",
                                "fr" => "Boussemghoun"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوسمغون",
                                        "en" => "Boussemghoun",
                                        "fr" => "Boussemghoun"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بوعلام",
                                "en" => "Boualem",
                                "fr" => "Boualem"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بوعلام",
                                        "en" => "Boualem",
                                        "fr" => "Boualem"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي عامر",
                                        "en" => "Sidi Ameur",
                                        "fr" => "Sidi Ameur"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي سليمان",
                                        "en" => "Sidi Slimane",
                                        "fr" => "Sidi Slimane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي طيفور",
                                        "en" => "Sidi Tifour",
                                        "fr" => "Sidi Tifour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ستيتين",
                                        "en" => "Stitten",
                                        "fr" => "Stitten"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],


                    ]

            ],
            [
                    "name" => [
                        "ar" => "اليزي",
                        "en" => "Illizi",
                        "fr" => "Illizi"
                    ],
                    "code_postal" => "33000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "إلـيـزي",
                                "en" => "Illizi",
                                "fr" => "Illizi"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "إلـيـزي",
                                        "en" => "Illizi",
                                        "fr" => "Illizi"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جانت",
                                "en" => "Djanet",
                                "fr" => "Djanet"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "جانت",
                                        "en" => "Djanet",
                                        "fr" => "Djanet"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "برج الحواس",
                                        "en" => "Bordj El Haouas",
                                        "fr" => "Bordj El Haouas"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "إن أميناس",
                                "en" => "In Amenas",
                                "fr" => "In Amenas"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "إن أميناس",
                                        "en" => "In Amenas",
                                        "fr" => "In Amenas"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "برج عمر ادريس",
                                        "en" => "Bordj Omar Driss",
                                        "fr" => "Bordj Omar Driss"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "دبداب",
                                        "en" => "Debdeb",
                                        "fr" => "Debdeb"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                    "name" => [
                        "ar" => "برج بوعريريج",
                        "en" => "Bordj Bou Arréridj",
                        "fr" => "Bordj Bou Arreridj"
                    ],
                    "code_postal" => "34000",
                    // true or false
                    "active" => false,

                    "dairas" => [
                            // daira 1
                        [
                            "name" => [
                                "ar" => "برج بوعريريج",
                                "en" => "Bordj Bou Arreridj",
                                "fr" => "Bordj Bou Arreridj"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "برج بوعريريج",
                                        "en" => "Bordj Bou Arreridj",
                                        "fr" => "Bordj Bou Arreridj"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "عين تاغروت",
                                "en" => "Ain Taghrout",
                                "fr" => "Aïn Taghrout"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "عين تاغروت",
                                        "en" => "Ain Taghrout",
                                        "fr" => "Aïn Taghrout"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تقصطر",
                                        "en" => "Tixter",
                                        "fr" => "Tixter"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "رأس الوادي",
                                "en" => "Ras El Oued",
                                "fr" => "Ras El Oued"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "رأس الوادي",
                                        "en" => "Ras El Oued",
                                        "fr" => "Ras El Oued"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد ابراھم",
                                        "en" => "Ouled Brahem",
                                        "fr" => "Ouled Brahem"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "عين تسرة",
                                        "en" => "Ain Tesra",
                                        "fr" => "Aïn Tesra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "برج الغدير",
                                "en" => "Bordj Ghedir",
                                "fr" => "Bordj Ghedir"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "برج الغدير",
                                        "en" => "Bordj Ghedir",
                                        "fr" => "Bordj Ghedir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بليمور",
                                        "en" => "Belimour",
                                        "fr" => "Belimour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تاقلعيت",
                                        "en" => "Taglait",
                                        "fr" => "Taglait"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العناصر",
                                        "en" => "El Anasser",
                                        "fr" => "El Anasser"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "غيلاسة",
                                        "en" => "Ghilassa",
                                        "fr" => "Ghilassa"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "بئر قصد علي",
                                "en" => "Bir Kasd Ali",
                                "fr" => "Bir Kasd Ali"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "بئر قصد علي",
                                        "en" => "Bir Kasd Ali",
                                        "fr" => "Bir Kasd Ali"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "خليل",
                                        "en" => "Khelil",
                                        "fr" => "Khelil"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي مبارك",
                                        "en" => "Sidi Embarek",
                                        "fr" => "Sidi Embarek"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "الحمادية",
                                "en" => "El Hamadia",
                                "fr" => "El Hamadia"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "الحمادية",
                                        "en" => "El Hamadia",
                                        "fr" => "El Hamadia"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "القصور",
                                        "en" => "Ksour",
                                        "fr" => "Ksour"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الرابطة",
                                        "en" => "Rabta",
                                        "fr" => "Rabta"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "العش",
                                        "en" => "El Ach",
                                        "fr" => "El Ach"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "منصورة",
                                "en" => "Mansoura",
                                "fr" => "Mansoura"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "منصورة",
                                        "en" => "Mansoura",
                                        "fr" => "Mansoura"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "بن داود",
                                        "en" => "BenDaoud",
                                        "fr" => "BenDaoud"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "المھير",
                                        "en" => "El M'hir",
                                        "fr" => "El M'hir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "الحرازة",
                                        "en" => "Haraza",
                                        "fr" => "Haraza"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "آث سيذى پراهم",
                                        "en" => "Ouled Sidi Brahim",
                                        "fr" => "Ouled Sidi Brahim"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "مجانة",
                                "en" => "Medjana",
                                "fr" => "Medjana"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "مجانة",
                                        "en" => "Medjana",
                                        "fr" => "Medjana"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "حسناوة",
                                        "en" => "Hasnaoua",
                                        "fr" => "Hasnaoua"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "اليشير",
                                        "en" => "El Achir",
                                        "fr" => "El Achir"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "ثنية النصر",
                                        "en" => "Teniet En Nasr",
                                        "fr" => "Teniet En Nasr"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "برج زمورة",
                                "en" => "Bordj Zemoura",
                                "fr" => "Bordj Zemoura"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "برج زمورة",
                                        "en" => "Bordj Zemoura",
                                        "fr" => "Bordj Zemoura"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "أولاد دحمان",
                                        "en" => "Ouled Dahmane",
                                        "fr" => "Ouled Dahmane"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تسمارت",
                                        "en" => "Tassameurt",
                                        "fr" => "Tassameurt"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                        [
                            "name" => [
                                "ar" => "جعافرة",
                                "en" => "Djaafra",
                                "fr" => "Djaafra"
                            ],

                            // true or false
                            "active" => false,
                            "cities" => [
                                    // city 1
                                [
                                    "name" => [
                                        "ar" => "جعافرة",
                                        "en" => "Djaafra",
                                        "fr" => "Djaafra"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "إلماين",
                                        "en" => "El-Main",
                                        "fr" => "El-Maïn"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "تفرڨ",
                                        "en" => "Tefreg",
                                        "fr" => "Tefreg"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],
                                [
                                    "name" => [
                                        "ar" => "كولا",
                                        "en" => "Colla",
                                        "fr" => "Colla"
                                    ],

                                    // true or false
                                    "active" => false,
                                ],

                            ]

                        ],
                    ]

            ],
            [
                        "name" => [
                            "ar" => "بومرداس",
                            "en" => "Boumerdès",
                            "fr" => "Boumerdès"
                        ],
                        "code_postal" => "35000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "بغلية",
                                    "en" => "Baghlia",
                                    "fr" => "Baghlia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بغلية",
                                            "en" => "Baghlia",
                                            "fr" => "Baghlia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي داود",
                                            "en" => "Sidi Daoud",
                                            "fr" => "Sidi Daoud"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تاورقة",
                                            "en" => "Taourga",
                                            "fr" => "Taourga"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بودواو",
                                    "en" => "Boudouaou",
                                    "fr" => "Boudouaou"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بودواو",
                                            "en" => "Boudouaou",
                                            "fr" => "Boudouaou"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بودواو البحري",
                                            "en" => "Boudouaou El Bahri",
                                            "fr" => "Boudouaou El Bahri"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الخروبة",
                                            "en" => "El Kharrouba",
                                            "fr" => "El Kharrouba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوزقزة قدارة",
                                            "en" => "Bouzegza Keddara",
                                            "fr" => "Bouzegza Keddara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد ھداج",
                                            "en" => "Ouled Hedadj",
                                            "fr" => "Ouled Hedadj"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "برج منايل",
                                    "en" => "Bordj Ménaiel",
                                    "fr" => "Bordj Ménaiel"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "برج منايل",
                                            "en" => "Bordj Ménaiel",
                                            "fr" => "Bordj Ménaiel"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "زموري",
                                            "en" => "Zemmouri",
                                            "fr" => "Zemmouri"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "لقاطة",
                                            "en" => "Leghata",
                                            "fr" => "Leghata"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "جنات",
                                            "en" => "Djinet",
                                            "fr" => "Djinet"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بومرداس",
                                    "en" => "Boumerdès",
                                    "fr" => "Boumerdès"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بومرداس",
                                            "en" => "Boumerdès",
                                            "fr" => "Boumerdès"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "قورصو",
                                            "en" => "Corso",
                                            "fr" => "Corso"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "قورصو",
                                            "en" => "Tidjelabine",
                                            "fr" => "Tidjelabine"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "دلس",
                                    "en" => "Dellys",
                                    "fr" => "Dellys"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "دلس",
                                            "en" => "Dellys",
                                            "fr" => "Dellys"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أفير",
                                            "en" => "Afir",
                                            "fr" => "Afir"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بن شود",
                                            "en" => "Ben Choud",
                                            "fr" => "Ben Choud"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "خميس الخشنة",
                                    "en" => "Khemis El Khechna",
                                    "fr" => "Khemis El Khechna"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "خميس الخشنة",
                                            "en" => "Khemis El Khechna",
                                            "fr" => "Khemis El Khechna"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد موسى",
                                            "en" => "Ouled Moussa",
                                            "fr" => "Ouled Moussa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الأربعطاش",
                                            "en" => "Larbatache",
                                            "fr" => "Larbatache"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حمادى",
                                            "en" => "Hammedi",
                                            "fr" => "Hammedi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "إيسر",
                                    "en" => "Isser",
                                    "fr" => "Isser"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "إيسر",
                                            "en" => "Isser",
                                            "fr" => "Isser"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سي مصطفى",
                                            "en" => "Si Mustapha",
                                            "fr" => "Si Mustapha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تيمزريت",
                                            "en" => "Timezrit",
                                            "fr" => "Timezrit"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شعبة العامر",
                                            "en" => "Chabet-El-Ameur",
                                            "fr" => "Chabet-El-Ameur"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الناصرية",
                                    "en" => "Naciria",
                                    "fr" => "Naciria"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الناصرية",
                                            "en" => "Naciria",
                                            "fr" => "Naciria"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد عيسى",
                                            "en" => "Ouled Aissa",
                                            "fr" => "Ouled Aïssa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "Thénia",
                                    "fr" => "Thénia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الثنية",
                                            "en" => "Thénia",
                                            "fr" => "Thénia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سوق الحد",
                                            "en" => "Souk El Had",
                                            "fr" => "Souk El Had"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بنى عمران",
                                            "en" => "Beni Amrane",
                                            "fr" => "Beni Amrane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عمال",
                                            "en" => "Ammal",
                                            "fr" => "Ammal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "الطارف",
                            "en" => "El Tarf",
                            "fr" => "El Tarf"
                        ],
                        "code_postal" => "36000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "الطارف",
                                    "en" => "El Tarf",
                                    "fr" => "El Tarf"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الطارف",
                                            "en" => "El Tarf",
                                            "fr" => "El Tarf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين العسل",
                                            "en" => "Ain El Assel",
                                            "fr" => "Aïn El Assel"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوقوس",
                                            "en" => "Bougous",
                                            "fr" => "Bougous"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الزيتونة",
                                            "en" => "Zitouna",
                                            "fr" => "Zitouna"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "القالة",
                                    "en" => "El Kala",
                                    "fr" => "El Kala"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "القالة",
                                            "en" => "El Kala",
                                            "fr" => "El Kala"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "السوارخ",
                                            "en" => "Souarekh",
                                            "fr" => "Souarekh"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "رمل سوق",
                                            "en" => "Raml Souk",
                                            "fr" => "Raml Souk"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "العيون",
                                            "en" => "El Aioun",
                                            "fr" => "El Aïoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بن مهيدى",
                                    "en" => "Ben Mehidi",
                                    "fr" => "Ben Mehidi"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بن مهيدى",
                                            "en" => "Ben Mehidi",
                                            "fr" => "Ben Mehidi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الشط",
                                            "en" => "Echatt",
                                            "fr" => "Echatt"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "برحان",
                                            "en" => "Berrihane",
                                            "fr" => "Berrihane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بسبس",
                                    "en" => "Besbes",
                                    "fr" => "Besbes"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بسبس",
                                            "en" => "Besbes",
                                            "fr" => "Besbes"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عصفور",
                                            "en" => "Asfour",
                                            "fr" => "Asfour"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "زريزر",
                                            "en" => "Zerizer",
                                            "fr" => "Zerizer"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الذرعان",
                                    "en" => "Dréan",
                                    "fr" => "Dréan"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الذرعان",
                                            "en" => "Dréan",
                                            "fr" => "Dréan"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شبيطة مختار",
                                            "en" => "Chebaita Mokhtar",
                                            "fr" => "Chebaita Mokhtar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شهانى",
                                            "en" => "Chihani",
                                            "fr" => "Chihani"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بوحجار",
                                    "en" => "Bouhadjar",
                                    "fr" => "Bouhadjar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بوحجار",
                                            "en" => "Bouhadjar",
                                            "fr" => "Bouhadjar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين الكرمة",
                                            "en" => "Ain Kerma",
                                            "fr" => "Aïn Kerma"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى الزيتون",
                                            "en" => "Oued Zitoun",
                                            "fr" => "Oued Zitoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حمام بنى صالح",
                                            "en" => "Hammam Beni Salah",
                                            "fr" => "Hammam Beni Salah"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بوثلجة",
                                    "en" => "Bouteldja",
                                    "fr" => "Bouteldja"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بوثلجة",
                                            "en" => "Bouteldja",
                                            "fr" => "Bouteldja"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بحيرة الطيور",
                                            "en" => "Bird Lake",
                                            "fr" => "Lac des Oiseaux"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الشافية",
                                            "en" => "Cheffia",
                                            "fr" => "Cheffia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "تندوف",
                            "en" => "Tindouf",
                            "fr" => "Tindouf"
                        ],
                        "code_postal" => "37000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "تندوف",
                                    "en" => "Tindouf",
                                    "fr" => "Tindouf"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "أم العسل",
                                            "en" => "Oum el Assel",
                                            "fr" => "Oum el Assel"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "",
                                            "en" => "",
                                            "fr" => ""
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "تسمسيلت",
                            "en" => "Tissemsilt",
                            "fr" => "Tissemsilt"
                        ],
                        "code_postal" => "38000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "عمارى",
                                    "en" => "Ammari",
                                    "fr" => "Ammari"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عمارى",
                                            "en" => "Ammari",
                                            "fr" => "Ammari"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "المعاصم",
                                            "en" => "Maacem",
                                            "fr" => "Maacem"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي عابد",
                                            "en" => "Sidi Abed",
                                            "fr" => "Sidi Abed"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "Bordj Bou Naama",
                                    "fr" => "Bordj Bou Naama"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "برج بونعامة",
                                            "en" => "Bordj Bou Naama",
                                            "fr" => "Bordj Bou Naama"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بنى شعيب",
                                            "en" => "Beni Chaib",
                                            "fr" => "Beni Chaib"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بنى لحسن",
                                            "en" => "Beni Lahcene",
                                            "fr" => "Beni Lahcene"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي سليمان",
                                            "en" => "Sidi Slimane",
                                            "fr" => "Sidi Slimane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "برج الامير عبد القادر",
                                    "en" => "Bordj El Emir Abdelkader",
                                    "fr" => "Bordj El Emir Abdelkader"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "برج الامير عبد القادر",
                                            "en" => "Bordj El Emir Abdelkader",
                                            "fr" => "Bordj El Emir Abdelkader"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "اليوسفية",
                                            "en" => "Youssoufia",
                                            "fr" => "Youssoufia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "خميستى",
                                    "en" => "Khemisti",
                                    "fr" => "Khemisti"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "خميستى",
                                            "en" => "Khemisti",
                                            "fr" => "Khemisti"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "العيون",
                                            "en" => "Layoune",
                                            "fr" => "Layoune"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "Lardjem",
                                    "fr" => "Lardjem"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "لرجام",
                                            "en" => "Lardjem",
                                            "fr" => "Lardjem"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "ملعب",
                                            "en" => "Melaab",
                                            "fr" => "Melaab"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي العنترى",
                                            "en" => "Sidi Lantri",
                                            "fr" => "Sidi Lantri"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تاملاحت",
                                            "en" => "Tamalaht",
                                            "fr" => "Tamalaht"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الازھرية",
                                    "en" => "Lazharia",
                                    "fr" => "Lazharia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الازھرية",
                                            "en" => "Lazharia",
                                            "fr" => "Lazharia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوقايد",
                                            "en" => "Boucaid",
                                            "fr" => "Boucaid"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الاربعاء",
                                            "en" => "Larbaa",
                                            "fr" => "Larbaa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ثنية الاحد",
                                    "en" => "Theniet El Had",
                                    "fr" => "Theniet El Had"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ثنية الاحد",
                                            "en" => "Theniet El Had",
                                            "fr" => "Theniet El Had"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي بوتوشنت",
                                            "en" => "Sidi Boutouchent",
                                            "fr" => "Sidi Boutouchent"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "تيسمسيلت",
                                    "en" => "Tissemsilt",
                                    "fr" => "Tissemsilt"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تيسمسيلت",
                                            "en" => "Tissemsilt",
                                            "fr" => "Tissemsilt"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد بسام",
                                            "en" => "Ouled Bessem",
                                            "fr" => "Ouled Bessem"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "الوادي",
                            "en" => "El Oued",
                            "fr" => "El Oued"
                        ],
                        "code_postal" => "39000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "البياضة",
                                    "en" => "Bayadha",
                                    "fr" => "Bayadha"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "البياضة",
                                            "en" => "Bayadha",
                                            "fr" => "Bayadha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الدبيلة",
                                    "en" => "Debila",
                                    "fr" => "Debila"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الدبيلة",
                                            "en" => "Debila",
                                            "fr" => "Debila"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حساني عبد الكريم",
                                            "en" => "Hassani Abdelkrim",
                                            "fr" => "Hassani Abdelkrim"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الوادي",
                                    "en" => "El Oued",
                                    "fr" => "El Oued"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الوادي",
                                            "en" => "El Oued",
                                            "fr" => "El Oued"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "كوينين",
                                            "en" => "Kouinine",
                                            "fr" => "Kouinine"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ڨمار",
                                    "en" => "Guemar",
                                    "fr" => "Guemar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ڨمار",
                                            "en" => "Guemar",
                                            "fr" => "Guemar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أورماس",
                                            "en" => "Ourmas",
                                            "fr" => "Ourmas"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تغزوت",
                                            "en" => "Taghzout",
                                            "fr" => "Taghzout"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "حاسى خليفة",
                                    "en" => "Hassi Khalifa",
                                    "fr" => "Hassi Khalifa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "حاسى خليفة",
                                            "en" => "Hassi Khalifa",
                                            "fr" => "Hassi Khalifa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الطريفاوي",
                                            "en" => "Trifaoui",
                                            "fr" => "Trifaoui"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "المڨرن",
                                    "en" => "Magrane",
                                    "fr" => "Magrane"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المڨرن",
                                            "en" => "Magrane",
                                            "fr" => "Magrane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي عون",
                                            "en" => "Sidi Aoun",
                                            "fr" => "Sidi Aoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "اميه ونسة",
                                    "en" => "Mih Ouansa",
                                    "fr" => "Mih Ouansa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "وادى العلندة",
                                            "en" => "Oued El Alenda",
                                            "fr" => "Oued El Alenda"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الرڨيبة",
                                    "en" => "Reguiba",
                                    "fr" => "Reguiba"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الرڨيبة",
                                            "en" => "Reguiba",
                                            "fr" => "Reguiba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحمراية",
                                            "en" => "Hamraia",
                                            "fr" => "Hamraïa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الرباح",
                                    "en" => "Robbah",
                                    "fr" => "Robbah"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الرباح",
                                            "en" => "Robbah",
                                            "fr" => "Robbah"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "العقلة",
                                            "en" => "El Ogla",
                                            "fr" => "El Ogla"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "النخلة",
                                            "en" => "Nakhla",
                                            "fr" => "Nakhla"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "طالب العربي",
                                    "en" => "Taleb Larbi",
                                    "fr" => "Taleb Larbi"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "طالب العربي",
                                            "en" => "Taleb Larbi",
                                            "fr" => "Taleb Larbi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "دوار الماء",
                                            "en" => "Douar El Ma",
                                            "fr" => "Douar El Ma"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بن ڨشة",
                                            "en" => "Ben Guecha",
                                            "fr" => "Ben Guecha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "خنشلة",
                            "en" => "Khenchela",
                            "fr" => "Khenchela"
                        ],
                        "code_postal" => "40000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "خنشلة",
                                    "en" => "Khenchela",
                                    "fr" => "Khenchela"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "خنشلة",
                                            "en" => "Khenchela",
                                            "fr" => "Khenchela"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بابار",
                                    "en" => "Babar",
                                    "fr" => "Babar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بابار",
                                            "en" => "Babar",
                                            "fr" => "Babar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بوحمامة",
                                    "en" => "Bouhmama",
                                    "fr" => "Bouhmama"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بوحمامة",
                                            "en" => "Bouhmama",
                                            "fr" => "Bouhmama"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شلية",
                                            "en" => "Chélia",
                                            "fr" => "Chélia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أمصارة",
                                            "en" => "M'Sara",
                                            "fr" => "M'Sara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "يابوس",
                                            "en" => "Yabous",
                                            "fr" => "Yabous"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ششار",
                                    "en" => "Chechar",
                                    "fr" => "Chechar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ششار",
                                            "en" => "Chechar",
                                            "fr" => "Chechar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "جلال",
                                            "en" => "Djellal",
                                            "fr" => "Djellal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الولجة",
                                            "en" => "El Oueldja",
                                            "fr" => "El Oueldja"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "خيران",
                                            "en" => "Khirane",
                                            "fr" => "Khirane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الحامة",
                                    "en" => "El Hamma",
                                    "fr" => "El Hamma"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الحامة",
                                            "en" => "El Hamma",
                                            "fr" => "El Hamma"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "انسيغة",
                                            "en" => "Ensigha",
                                            "fr" => "Ensigha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "طامزة",
                                            "en" => "Tamza",
                                            "fr" => "Tamza"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بغاي",
                                            "en" => "Baghai",
                                            "fr" => "Baghai"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "قايس",
                                    "en" => "Kais",
                                    "fr" => "Kais"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "قايس",
                                            "en" => "Kais",
                                            "fr" => "Kais"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الرميلة",
                                            "en" => "Remila",
                                            "fr" => "Remila"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تاوزيانت",
                                            "en" => "Taouzient",
                                            "fr" => "Taouzient"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد رشاش",
                                    "en" => "Ouled Rechache",
                                    "fr" => "Ouled Rechache"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "أولاد رشاش",
                                            "en" => "Ouled Rechache",
                                            "fr" => "Ouled Rechache"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "المحمل",
                                            "en" => "El Mahmal",
                                            "fr" => "El Mahmal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عين الطويلة",
                                    "en" => "Ain Touila",
                                    "fr" => "Aïn Touila"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "متوسة",
                                            "en" => "M'Toussa",
                                            "fr" => "M'Toussa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "سوق أهراس",
                            "en" => "Souk Ahras",
                            "fr" => "Souk Ahras"
                        ],
                        "code_postal" => "41000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "بئر بوحوش",
                                    "en" => "Bir Bou Haouch",
                                    "fr" => "Bir Bou Haouch"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بئر بوحوش",
                                            "en" => "Bir Bou Haouch",
                                            "fr" => "Bir Bou Haouch"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سافل الويدان",
                                            "en" => "Safel El Ouiden",
                                            "fr" => "Safel El Ouiden"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الزوابى",
                                            "en" => "Zouabi",
                                            "fr" => "Zouabi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الحدادة",
                                    "en" => "Heddada",
                                    "fr" => "Heddada"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الحدادة",
                                            "en" => "Heddada",
                                            "fr" => "Heddada"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "لخضارة",
                                            "en" => "Khedara",
                                            "fr" => "Khedara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد مؤمن",
                                            "en" => "Ouled Moumen",
                                            "fr" => "Ouled Moumen"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "مداوروش",
                                    "en" => "M'daourouch",
                                    "fr" => "M'daourouch"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "مداوروش",
                                            "en" => "M'daourouch",
                                            "fr" => "M'daourouch"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تيفاش",
                                            "en" => "Tiffech",
                                            "fr" => "Tiffech"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الرقوبة",
                                            "en" => "Ragouba",
                                            "fr" => "Ragouba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "المشروحة",
                                    "en" => "Mechroha",
                                    "fr" => "Mechroha"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المشروحة",
                                            "en" => "Mechroha",
                                            "fr" => "Mechroha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحنانشة",
                                            "en" => "Hanancha",
                                            "fr" => "Hanancha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],


                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "المراهنة",
                                    "en" => "Merahna",
                                    "fr" => "Merahna"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المراهنة",
                                            "en" => "Merahna",
                                            "fr" => "Merahna"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "ويلان",
                                            "en" => "Ouillen",
                                            "fr" => "Ouillen"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي فرج",
                                            "en" => "Sidi Fredj",
                                            "fr" => "Sidi Fredj"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "أولاد ادريس",
                                    "en" => "Ouled Driss",
                                    "fr" => "Ouled Driss"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "أولاد ادريس",
                                            "en" => "Ouled Driss",
                                            "fr" => "Ouled Driss"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين الزانة",
                                            "en" => "Ain Zana",
                                            "fr" => "Aïn Zana"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "أم العظائم",
                                    "en" => "Oum El Adhaim",
                                    "fr" => "Oum El Adhaim"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "أم العظائم",
                                            "en" => "Oum El Adhaim",
                                            "fr" => "Oum El Adhaim"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "ترقالت",
                                            "en" => "Terraguelt",
                                            "fr" => "Terraguelt"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى الكبريت",
                                            "en" => "Oued Keberit",
                                            "fr" => "Oued Keberit"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "سدراتة",
                                    "en" => "Sedrata",
                                    "fr" => "Sedrata"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "سدراتة",
                                            "en" => "Sedrata",
                                            "fr" => "Sedrata"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "خميسة",
                                            "en" => "Khemissa",
                                            "fr" => "Khemissa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين السلطان",
                                            "en" => "Ain Soltane",
                                            "fr" => "Aïn Soltane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "سوق أهراس",
                                    "en" => "Souk Ahras",
                                    "fr" => "Souk Ahras"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "سوق أهراس",
                                            "en" => "Souk Ahras",
                                            "fr" => "Souk Ahras"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "Taoura",
                                    "fr" => "Taoura"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تاورة",
                                            "en" => "Taoura",
                                            "fr" => "Taoura"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الدريعة",
                                            "en" => "Dréa",
                                            "fr" => "Dréa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الزعرورية",
                                            "en" => "Zaarouria",
                                            "fr" => "Zaarouria"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "تيبازة",
                            "en" => "Tipaza",
                            "fr" => "Tipaza"
                        ],
                        "code_postal" => "42000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "تيبازة",
                                    "en" => "Tipaza",
                                    "fr" => "Tipaza"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تيبازة",
                                            "en" => "Tipaza",
                                            "fr" => "Tipaza"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "أحمر العين",
                                    "en" => "Ahmar El Ain",
                                    "fr" => "Ahmar El Ain"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "أحمر العين",
                                            "en" => "Ahmar El Ain",
                                            "fr" => "Ahmar El Ain"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بورقيقة",
                                            "en" => "Bourkika",
                                            "fr" => "Bourkika"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي راشد",
                                            "en" => "Sidi Rached",
                                            "fr" => "Sidi Rached"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بو اسماعيل",
                                    "en" => "Bou Ismail",
                                    "fr" => "Bou Ismail"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بو اسماعيل",
                                            "en" => "Bou Ismail",
                                            "fr" => "Bou Ismail"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين تڨورايت",
                                            "en" => "Aïn Tagourait",
                                            "fr" => "Aïn Tagourait"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوهارون",
                                            "en" => "Bouharoun",
                                            "fr" => "Bouharoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "خميستي",
                                            "en" => "Khemisti",
                                            "fr" => "Khemisti"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "شرشال",
                                    "en" => "Cherchell",
                                    "fr" => "Cherchell"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "شرشال",
                                            "en" => "Cherchell",
                                            "fr" => "Cherchell"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي غيلاس",
                                            "en" => "Sidi Ghiles",
                                            "fr" => "Sidi Ghiles"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حجرة النص",
                                            "en" => "Hadjret Ennous",
                                            "fr" => "Hadjret Ennous"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي سميان",
                                            "en" => "Sidi Semiane",
                                            "fr" => "Sidi Semiane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الداموس",
                                    "en" => "Damous",
                                    "fr" => "Damous"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الداموس",
                                            "en" => "Damous",
                                            "fr" => "Damous"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الأرهاط",
                                            "en" => "Larhat",
                                            "fr" => "Larhat"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بني ميلك",
                                            "en" => "Beni Milleuk",
                                            "fr" => "Beni Milleuk"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "فوكة",
                                    "en" => "Fouka",
                                    "fr" => "Fouka"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "فوكة",
                                            "en" => "Fouka",
                                            "fr" => "Fouka"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "دواودة",
                                            "en" => "Douaouda",
                                            "fr" => "Douaouda"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ڨورايا",
                                    "en" => "Gouraya",
                                    "fr" => "Gouraya"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ڨورايا",
                                            "en" => "Gouraya",
                                            "fr" => "Gouraya"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أغبال",
                                            "en" => "Aghbal",
                                            "fr" => "Aghbal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "مسلمون",
                                            "en" => "Messelmoun",
                                            "fr" => "Messelmoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "حجوط",
                                    "en" => "Hadjout",
                                    "fr" => "Hadjout"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "حجوط",
                                            "en" => "Hadjout",
                                            "fr" => "Hadjout"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "مراد",
                                            "en" => "Merad",
                                            "fr" => "Merad"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "القليعة",
                                    "en" => "Koléa",
                                    "fr" => "Koléa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "القليعة",
                                            "en" => "Koléa",
                                            "fr" => "Koléa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الشعيبة",
                                            "en" => "Chaiba",
                                            "fr" => "Chaiba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحطاطبة",
                                            "en" => "Attatba",
                                            "fr" => "Attatba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي عمر",
                                    "en" => "Sidi Amar",
                                    "fr" => "Sidi Amar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "سيدي عمر",
                                            "en" => "Sidi Amar",
                                            "fr" => "Sidi Amar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الناظور",
                                            "en" => "Nador",
                                            "fr" => "Nador"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "مناصر",
                                            "en" => "Menaceur",
                                            "fr" => "Menaceur"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "ميلة",
                            "en" => "Mila",
                            "fr" => "Mila"
                        ],
                        "code_postal" => "43000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "ميلة",
                                    "en" => "Mila",
                                    "fr" => "Mila"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ميلة",
                                            "en" => "Mila",
                                            "fr" => "Mila"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي خليفة",
                                            "en" => "Sidi Khelifa",
                                            "fr" => "Sidi Khelifa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين التين",
                                            "en" => "Ain Tinn",
                                            "fr" => "Aïn Tinn"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "شلغوم العيد",
                                    "en" => "Chelghoum Laid",
                                    "fr" => "Chelghoum Laïd"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "شلغوم العيد",
                                            "en" => "Chelghoum Laid",
                                            "fr" => "Chelghoum Laïd"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين ملوك",
                                            "en" => "Ain Mellouk",
                                            "fr" => "Aïn Mellouk"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادي العثمانية",
                                            "en" => "Oued Athmania",
                                            "fr" => "Oued Athmania"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "فرجيوة",
                                    "en" => "Ferdjioua",
                                    "fr" => "Ferdjioua"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "فرجيوة",
                                            "en" => "Ferdjioua",
                                            "fr" => "Ferdjioua"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "يحيى بنى قشة",
                                            "en" => "Yahia Beni Guecha",
                                            "fr" => "Yahia Beni Guecha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "القرارم قوقة",
                                    "en" => "Grarem Gouga",
                                    "fr" => "Grarem Gouga"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "القرارم قوقة",
                                            "en" => "Grarem Gouga",
                                            "fr" => "Grarem Gouga"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حمالة",
                                            "en" => "Hamala",
                                            "fr" => "Hamala"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "وادى النجاء",
                                    "en" => "Oued Endja",
                                    "fr" => "Oued Endja"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "وادى النجاء",
                                            "en" => "Oued Endja",
                                            "fr" => "Oued Endja"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "زغاية",
                                            "en" => "Zeghaïa",
                                            "fr" => "Zeghaïa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أحمد راشدي",
                                            "en" => "Ahmed Rachedi",
                                            "fr" => "Ahmed Rachedi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "رواشد",
                                    "en" => "Rouached",
                                    "fr" => "Rouached"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "رواشد",
                                            "en" => "Rouached",
                                            "fr" => "Rouached"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تيبرقنت",
                                            "en" => "Tiberguent",
                                            "fr" => "Tiberguent"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ترعى بينان",
                                    "en" => "Terrai Bainen",
                                    "fr" => "Terrai Bainen"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ترعى بينان",
                                            "en" => "Terrai Bainen",
                                            "fr" => "Terrai Bainen"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عميرة أراس",
                                            "en" => "Amira Arrès",
                                            "fr" => "Amira Arrès"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تسالة لمطاعي",
                                            "en" => "Tessala Lemtai",
                                            "fr" => "Tessala Lemtaï"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "تسدان حدادة",
                                    "en" => "Tassadane Haddada",
                                    "fr" => "Tassadane Haddada"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تسدان حدادة",
                                            "en" => "Tassadane Haddada",
                                            "fr" => "Tassadane Haddada"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "مينار زارزة",
                                            "en" => "Minar Zarza",
                                            "fr" => "Minar Zarza"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عين البيضاء حريش",
                                    "en" => "Ain Beida Harriche",
                                    "fr" => "Aïn Beida Harriche"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين البيضاء حريش",
                                            "en" => "Ain Beida Harriche",
                                            "fr" => "Aïn Beida Harriche"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "العياضى برباس",
                                            "en" => "Elayadi Barbes",
                                            "fr" => "Elayadi Barbes"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "سيدي مروان",
                                    "en" => "Sidi Merouane",
                                    "fr" => "Sidi Merouane"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "سيدي مروان",
                                            "en" => "Sidi Merouane",
                                            "fr" => "Sidi Merouane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الشيقارة",
                                            "en" => "Chigara",
                                            "fr" => "Chigara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "تلاغمة",
                                    "en" => "Teleghma",
                                    "fr" => "Teleghma"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تلاغمة",
                                            "en" => "Teleghma",
                                            "fr" => "Teleghma"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى سقان",
                                            "en" => "Oued Seguen",
                                            "fr" => "Oued Seguen"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "المشيرة",
                                            "en" => "El Mechira",
                                            "fr" => "El Mechira"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بوحاتم",
                                    "en" => "Bouhatem",
                                    "fr" => "Bouhatem"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بوحاتم",
                                            "en" => "Bouhatem",
                                            "fr" => "Bouhatem"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "دراحي بوصلاح",
                                            "en" => "Derrahi Bousselah",
                                            "fr" => "Derrahi Bousselah"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],


                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "تاجنانت",
                                    "en" => "Tadjenanet",
                                    "fr" => "Tadjenanet"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "تاجنانت",
                                            "en" => "Tadjenanet",
                                            "fr" => "Tadjenanet"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بن يحيى عبد الرحمان",
                                            "en" => "Benyahia Abderrahmane",
                                            "fr" => "Benyahia Abderrahmane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد خلوف",
                                            "en" => "Ouled Khalouf",
                                            "fr" => "Ouled Khalouf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "عين الدفلى",
                            "en" => "Ain Defla",
                            "fr" => "Aïn Defla"
                        ],
                        "code_postal" => "44000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "عين الدفلى",
                                    "en" => "Ain Defla",
                                    "fr" => "Ain Defla"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين الدفلى",
                                            "en" => "Ain Defla",
                                            "fr" => "Ain Defla"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عين االشياخ",
                                    "en" => "Ain Lechiekh",
                                    "fr" => "Aïn Lechiekh"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين االشياخ",
                                            "en" => "Ain Lechiekh",
                                            "fr" => "Aïn Lechiekh"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين السلطان",
                                            "en" => "Ain Soltane",
                                            "fr" => "Aïn Soltane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى جمعة",
                                            "en" => "Oued Djemaa",
                                            "fr" => "Oued Djemaa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بطحية",
                                    "en" => "Bathia",
                                    "fr" => "Bathia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بطحية",
                                            "en" => "Bathia",
                                            "fr" => "Bathia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحسنية",
                                            "en" => "El Hassania",
                                            "fr" => "El Hassania"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بالعاص",
                                            "en" => "Bellas",
                                            "fr" => "Bellas"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "برج الأمير خالد",
                                    "en" => "Bordj Emir Khaled",
                                    "fr" => "Bordj Emir Khaled"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "برج الأمير خالد",
                                            "en" => "Bordj Emir Khaled",
                                            "fr" => "Bordj Emir Khaled"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بئر ولد خليفة",
                                            "en" => "Bir Ould Khelifa",
                                            "fr" => "Bir Ould Khelifa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "طارق بن زياد",
                                            "en" => "Tarik Ibn Ziad",
                                            "fr" => "Tarik Ibn Ziad"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بومدفع",
                                    "en" => "Boumedfaa",
                                    "fr" => "Boumedfaa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بومدفع",
                                            "en" => "Boumedfaa",
                                            "fr" => "Boumedfaa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حسينية",
                                            "en" => "Hoceinia",
                                            "fr" => "Hoceinia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "جليدة",
                                    "en" => "Djelida",
                                    "fr" => "Djelida"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "جليدة",
                                            "en" => "Djelida",
                                            "fr" => "Djelida"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوراشد",
                                            "en" => "Bourached",
                                            "fr" => "Bourached"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "جمعة أولاد الشيخ",
                                            "en" => "Djemaa Ouled Cheikh",
                                            "fr" => "Djemaa Ouled Cheikh"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "جندل",
                                    "en" => "Djendel",
                                    "fr" => "Djendel"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "جندل",
                                            "en" => "Djendel",
                                            "fr" => "Djendel"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بربوش",
                                            "en" => "Birbouche",
                                            "fr" => "Birbouche"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى الشرفاء",
                                            "en" => "Oued Chorfa",
                                            "fr" => "Oued Chorfa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "العبادية",
                                    "en" => "El Abadia",
                                    "fr" => "El Abadia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "العبادية",
                                            "en" => "El Abadia",
                                            "fr" => "El Abadia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين بويحى",
                                            "en" => "Ain Bouyahia",
                                            "fr" => "Aïn Bouyahia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تاشتة زقاغة",
                                            "en" => "Tacheta Zougagha",
                                            "fr" => "Tacheta Zougagha"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "العامرة",
                                    "en" => "El Amra",
                                    "fr" => "El Amra"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "العامرة",
                                            "en" => "El Amra",
                                            "fr" => "El Amra"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عريب",
                                            "en" => "Arib",
                                            "fr" => "Arib"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "المخاطرية",
                                            "en" => "Mekhatria",
                                            "fr" => "Mekhatria"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "العطاف",
                                    "en" => "El Attaf",
                                    "fr" => "El Attaf"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "العطاف",
                                            "en" => "El Attaf",
                                            "fr" => "El Attaf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تبركانين",
                                            "en" => "Tiberkanine",
                                            "fr" => "Tiberkanine"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "حمام ريغة",
                                    "en" => "Hammam Righa",
                                    "fr" => "Hammam Righa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "حمام ريغة",
                                            "en" => "Hammam Righa",
                                            "fr" => "Hammam Righa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين البنيان",
                                            "en" => "Ain Benian",
                                            "fr" => "Aïn Benian"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين التركى",
                                            "en" => "Ain Torki",
                                            "fr" => "Aïn Torki"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "خميس مليانة",
                                    "en" => "Khemis Miliana",
                                    "fr" => "Khemis Miliana"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "خميس مليانة",
                                            "en" => "Khemis Miliana",
                                            "fr" => "Khemis Miliana"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي لخضر",
                                            "en" => "Sidi Lakhdar",
                                            "fr" => "Sidi Lakhdar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "مليانة",
                                    "en" => "Miliana",
                                    "fr" => "Miliana"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "مليانة",
                                            "en" => "Miliana",
                                            "fr" => "Miliana"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بن علال",
                                            "en" => "Ben Allal",
                                            "fr" => "Ben Allal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "روينة",
                                    "en" => "Rouina",
                                    "fr" => "Rouina"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "روينة",
                                            "en" => "Rouina",
                                            "fr" => "Rouina"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الماين",
                                            "en" => "El Maine",
                                            "fr" => "El Maine"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "زدين",
                                            "en" => "Zeddine",
                                            "fr" => "Zeddine"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "النعامة",
                            "en" => "Naama",
                            "fr" => "Naâma"
                        ],
                        "code_postal" => "45000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "النعامة",
                                    "en" => "Naama",
                                    "fr" => "Naâma"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "النعامة",
                                            "en" => "Naama",
                                            "fr" => "Naâma"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عين الصفراء",
                                    "en" => "Ain Sefra",
                                    "fr" => "Aïn Sefra"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين الصفراء",
                                            "en" => "Ain Sefra",
                                            "fr" => "Aïn Sefra"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تيوت",
                                            "en" => "Tiout",
                                            "fr" => "Tiout"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عسلة",
                                    "en" => "Assela",
                                    "fr" => "Assela"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عسلة",
                                            "en" => "Assela",
                                            "fr" => "Assela"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "مكمن بن عمر",
                                    "en" => "Makman Ben Amer",
                                    "fr" => "Makman Ben Amer"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "مكمن بن عمر",
                                            "en" => "Makman Ben Amer",
                                            "fr" => "Makman Ben Amer"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "قصدير",
                                            "en" => "Kasdir",
                                            "fr" => "Kasdir"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "المشرية",
                                    "en" => "Mecheria",
                                    "fr" => "Mecheria"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المشرية",
                                            "en" => "Mecheria",
                                            "fr" => "Mecheria"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين بن خليل",
                                            "en" => "Ain Ben Khelil",
                                            "fr" => "Aïn Ben Khelil"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "البيوض",
                                            "en" => "El Biod",
                                            "fr" => "El Biod"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "مغرار",
                                    "en" => "Moghrar",
                                    "fr" => "Moghrar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "مغرار",
                                            "en" => "Moghrar",
                                            "fr" => "Moghrar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "جنين بورزق",
                                            "en" => "Djeniene Bourezg",
                                            "fr" => "Djeniene Bourezg"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "صفيصيفة",
                                    "en" => "Sfissifa",
                                    "fr" => "Sfissifa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "صفيصيفة",
                                            "en" => "Sfissifa",
                                            "fr" => "Sfissifa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "عين تموشنت",
                            "en" => "Aïn Témouchent",
                            "fr" => "Aïn Témouchent"
                        ],
                        "code_postal" => "46000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "عين الاربعاء",
                                    "en" => "Ain El Arbaa",
                                    "fr" => "Aïn El Arbaa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين الاربعاء",
                                            "en" => "Ain El Arbaa",
                                            "fr" => "Ain El Arbaa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تامزوغة",
                                            "en" => "Tamzoura",
                                            "fr" => "Tamzoura"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي بومدين",
                                            "en" => "Sidi Boumedienne",
                                            "fr" => "Sidi Boumedienne"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى الصباح",
                                            "en" => "Oued Sabah",
                                            "fr" => "Oued Sabah"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "Ain Kihal",
                                    "fr" => "Aïn Kihal"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين الكيحل",
                                            "en" => "Ain Kihal",
                                            "fr" => "Aïn Kihal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أغلال",
                                            "en" => "Aghlal",
                                            "fr" => "Aghlal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عقب الليل",
                                            "en" => "Aoubellil",
                                            "fr" => "Aoubellil"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "عين الطلبة",
                                            "en" => "Ain Tolba",
                                            "fr" => "Aïn Tolba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "عين تموشنت",
                                    "en" => "Ain Témouchent",
                                    "fr" => "Aïn Témouchent"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "عين تموشنت",
                                            "en" => "Ain Témouchent",
                                            "fr" => "Aïn Témouchent"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي بن عدة",
                                            "en" => "Sidi Ben Adda",
                                            "fr" => "Sidi Ben Adda"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بني صاف",
                                    "en" => "Beni Saf",
                                    "fr" => "Beni Saf"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بني صاف",
                                            "en" => "Beni Saf",
                                            "fr" => "Beni Saf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي الصافي",
                                            "en" => "Sidi Safi",
                                            "fr" => "Sidi Safi"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الأمير عبد القادر",
                                            "en" => "El Emir Abdelkader",
                                            "fr" => "El Emir Abdelkader"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "العامرية",
                                    "en" => "El Amria",
                                    "fr" => "El Amria"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "العامرية",
                                            "en" => "El Amria",
                                            "fr" => "El Amria"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "بوزجار",
                                            "en" => "Bouzedjar",
                                            "fr" => "Bouzedjar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حاسى الغلة",
                                            "en" => "Hassi El Ghella",
                                            "fr" => "Hassi El Ghella"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد بوجمعة",
                                            "en" => "Ouled Boudjemaa",
                                            "fr" => "Ouled Boudjemaa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "المساعيد",
                                            "en" => "El Messaid",
                                            "fr" => "El Messaid"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "",
                                    "en" => "El Malah",
                                    "fr" => "El Malah"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المالح",
                                            "en" => "El Malah",
                                            "fr" => "El Malah"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تارقة",
                                            "en" => "Terga",
                                            "fr" => "Terga"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شعبة اللحم",
                                            "en" => "Chaabat El Leham",
                                            "fr" => "Chaabat El Leham"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد الكيحل",
                                            "en" => "Ouled Kihal",
                                            "fr" => "Ouled Kihal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "حمام بو حجر",
                                    "en" => "Hammam Bou Hadjar",
                                    "fr" => "Hammam Bou Hadjar"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "حمام بو حجر",
                                            "en" => "Hammam Bou Hadjar",
                                            "fr" => "Hammam Bou Hadjar"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "وادى برقش",
                                            "en" => "Oued Berkeche",
                                            "fr" => "Oued Berkeche"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شنتوف",
                                            "en" => "Chentouf",
                                            "fr" => "Chentouf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحساسنة",
                                            "en" => "Hassasna",
                                            "fr" => "Hassasna"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ولهاصة الغرابة",
                                    "en" => "Oulhaça El Gheraba",
                                    "fr" => "Oulhaça El Gheraba"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ولهاصة الغرابة",
                                            "en" => "Oulhaça El Gheraba",
                                            "fr" => "Oulhaça El Gheraba"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سيدي وريلش",
                                            "en" => "Sidi Ouriache",
                                            "fr" => "Sidi Ouriache"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                        "name" => [
                            "ar" => "غرداية",
                            "en" => "Ghardaia",
                            "fr" => "Ghardaïa"
                        ],
                        "code_postal" => "47000",
                        // true or false
                        "active" => false,

                        "dairas" => [
                                // daira 1
                            [
                                "name" => [
                                    "ar" => "غرداية",
                                    "en" => "Ghardaia",
                                    "fr" => "Ghardaïa"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "غرداية",
                                            "en" => "Ghardaia",
                                            "fr" => "Ghardaïa"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "المنيعة",
                                    "en" => "El Menia",
                                    "fr" => "El Menia"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "المنيعة",
                                            "en" => "El Menia",
                                            "fr" => "El Menia"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حاسي قارة",
                                            "en" => "Hassi Gara",
                                            "fr" => "Hassi Gara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "متليلي",
                                    "en" => " Metlili",
                                    "fr" => " Metlili"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "متليلي",
                                            "en" => "Metlili",
                                            "fr" => "Metlili"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "سبسب",
                                            "en" => "Sebseb",
                                            "fr" => "Sebseb"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بريان",
                                    "en" => "Berriane",
                                    "fr" => "Berriane"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بريان",
                                            "en" => "Berriane",
                                            "fr" => "Berriane"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "ضاية بن ضحوة",
                                    "en" => "Dhayet Bendhahoua",
                                    "fr" => "Dhayet Bendhahoua"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "ضاية بن ضحوة",
                                            "en" => "Dhayet Bendhahoua",
                                            "fr" => "Dhayet Bendhahoua"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "منصورة",
                                    "en" => "Mansoura",
                                    "fr" => "Mansoura"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "منصورة",
                                            "en" => "Mansoura",
                                            "fr" => "Mansoura"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "حاسي الفحل",
                                            "en" => "Hassi F'hal",
                                            "fr" => "Hassi F'hal"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "زلفانة",
                                    "en" => "Zelfana",
                                    "fr" => "Zelfana"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "زلفانة",
                                            "en" => "Zelfana",
                                            "fr" => "Zelfana"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "الڨرارة",
                                    "en" => "El Guerrara",
                                    "fr" => "El Guerrara"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "الڨرارة",
                                            "en" => "El Guerrara",
                                            "fr" => "El Guerrara"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                            [
                                "name" => [
                                    "ar" => "بونورة",
                                    "en" => "Bounoura",
                                    "fr" => "Bounoura"
                                ],

                                // true or false
                                "active" => false,
                                "cities" => [
                                        // city 1
                                    [
                                        "name" => [
                                            "ar" => "بونورة",
                                            "en" => "Bounoura",
                                            "fr" => "Bounoura"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],
                                    [
                                        "name" => [
                                            "ar" => "العطف",
                                            "en" => "El Atteuf",
                                            "fr" => "El Atteuf"
                                        ],

                                        // true or false
                                        "active" => false,
                                    ],

                                ]

                            ],
                        ]

            ],
            [
                            "name" => [
                                "ar" => "غليزان",
                                "en" => "Relizane",
                                "fr" => "Relizane"
                            ],
                            "code_postal" => "48000",
                            // true or false
                            "active" => false,

                            "dairas" => [
                                    // daira 1
                                [
                                    "name" => [
                                        "ar" => "عين طارق",
                                        "en" => "Ain Tarek",
                                        "fr" => "Aïn Tarek"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "عين طارق",
                                                "en" => "Ain Tarek",
                                                "fr" => "Aïn Tarek"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "حد الشقالة",
                                                "en" => "Had Echkalla",
                                                "fr" => "Had Echkalla"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "عمي موسى",
                                        "en" => "Ammi Moussa",
                                        "fr" => "Ammi Moussa"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "عمي موسى",
                                                "en" => "Ammi Moussa",
                                                "fr" => "Ammi Moussa"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "الحاسى",
                                                "en" => "El Hassi",
                                                "fr" => "El Hassi"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "الولجة",
                                                "en" => "El Ouldja",
                                                "fr" => "El Ouldja"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "أولاد يعيش",
                                                "en" => "Ouled Aiche",
                                                "fr" => "Ouled Aiche"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "جيديوة",
                                        "en" => "Djidiouia",
                                        "fr" => "Djidiouia"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "جيديوة",
                                                "en" => "Djidiouia",
                                                "fr" => "Djidiouia"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "الحمري",
                                                "en" => "Hamri",
                                                "fr" => "Hamri"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "أولاد سيدي ميهوب",
                                                "en" => "Ouled Sidi Mihoub",
                                                "fr" => "Ouled Sidi Mihoub"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "الحمادنة",
                                        "en" => "El Hamadna",
                                        "fr" => "El Hamadna"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "الحمادنة",
                                                "en" => "El Hamadna",
                                                "fr" => "El Hamadna"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "وادى الجمعة",
                                                "en" => "Oued El Djemaa",
                                                "fr" => "Oued El Djemaa"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "المطمار",
                                        "en" => "El Matmar",
                                        "fr" => "El Matmar"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "المطمار",
                                                "en" => "El Matmar",
                                                "fr" => "El Matmar"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "بلعسل بوزڨزة",
                                                "en" => "Belassel Bouzegza",
                                                "fr" => "Belassel Bouzegza"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي خطاب",
                                                "en" => "Sidi Khettab",
                                                "fr" => "Sidi Khettab"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي بن عودة",
                                                "en" => "Sidi Benaouda",
                                                "fr" => "Sidi Benaouda"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "مازونة",
                                        "en" => "Mazouna",
                                        "fr" => "Mazouna"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "مازونة",
                                                "en" => "Mazouna",
                                                "fr" => "Mazouna"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "القطارة",
                                                "en" => "El Guettar",
                                                "fr" => "El Guettar"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "مندس",
                                        "en" => "Mendes",
                                        "fr" => "Mendes"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "مندس",
                                                "en" => "Mendes",
                                                "fr" => "Mendes"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "وادي السلام",
                                                "en" => "Oued Essalem",
                                                "fr" => "Oued Essalem"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي الأزرق",
                                                "en" => "Sidi Lazreg",
                                                "fr" => "Sidi Lazreg"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "وادي رهيو",
                                        "en" => "Oued Rhiou",
                                        "fr" => "Oued Rhiou"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "وادي رهيو",
                                                "en" => "Oued Rhiou",
                                                "fr" => "Oued Rhiou"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "مرجة سيدي عابد",
                                                "en" => "Merdja Sidi Abed",
                                                "fr" => "Merdja Sidi Abed"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "ﻭﺍﺭﻳﺯﺍﻥ",
                                                "en" => "Ouarizane",
                                                "fr" => "Ouarizane"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "لحلاف",
                                                "en" => "Lahlef",
                                                "fr" => "Lahlef"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "رمكة",
                                        "en" => "Ramka",
                                        "fr" => "Ramka"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "رمكة",
                                                "en" => "Ramka",
                                                "fr" => "Ramka"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سوق الحد",
                                                "en" => "Souk El Had",
                                                "fr" => "Souk El Had"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "غليزان",
                                        "en" => "Relizane",
                                        "fr" => "Relizane"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "غليزان",
                                                "en" => "Relizane",
                                                "fr" => "Relizane"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "بن داود",
                                                "en" => "Bendaoud",
                                                "fr" => "Bendaoud"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "سيدي امحمد بن علي",
                                        "en" => "Sidi M'Hamed Ben Ali",
                                        "fr" => "Sidi M'Hamed Ben Ali"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "سيدي امحمد بن علي",
                                                "en" => "Sidi M'Hamed Ben Ali",
                                                "fr" => "Sidi M'Hamed Ben Ali"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "بني زنتيس",
                                                "en" => "Beni Zentis",
                                                "fr" => "Beni Zentis"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "مديونة",
                                                "en" => "Mediouna",
                                                "fr" => "Mediouna"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "يلل",
                                        "en" => "Yellel",
                                        "fr" => "Yellel"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "يلل",
                                                "en" => "Yellel",
                                                "fr" => "Yellel"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "عين الرحمة",
                                                "en" => "Ain Rahma",
                                                "fr" => "Aïn Rahma"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "قلعة",
                                                "en" => "Kalaa",
                                                "fr" => "Kalaa"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي سعادة",
                                                "en" => "Sidi Saada",
                                                "fr" => "Sidi Saada"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "زمورة",
                                        "en" => "Zemmora",
                                        "fr" => "Zemmora"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "زمورة",
                                                "en" => "Zemmora",
                                                "fr" => "Zemmora"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "بني درقن",
                                                "en" => "Beni Dergoun",
                                                "fr" => "Beni Dergoun"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "دار بن عبد الله",
                                                "en" => "Dar Ben Abdellah",
                                                "fr" => "Dar Ben Abdellah"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                            ]

            ],
            [
                            "name" => [
                                "ar" => "المغير",
                                "en" => "El M'Ghair",
                                "fr" => "El M'Ghair"
                            ],
                            "code_postal" => "49000",
                            // true or false
                            "active" => false,

                            "dairas" => [
                                    // daira 1
                                [
                                    "name" => [
                                        "ar" => "المغير",
                                        "en" => "El M'Ghair",
                                        "fr" => "El M'Ghair"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "المغير",
                                                "en" => "El M'Ghair",
                                                "fr" => "El M'Ghair"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "أم الطيور",
                                                "en" => "Oum Thiour",
                                                "fr" => "Oum Thiour"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي خليل",
                                                "en" => "Sidi Khellil",
                                                "fr" => "Sidi Khellil"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سطيل",
                                                "en" => "Still",
                                                "fr" => "Still"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                                [
                                    "name" => [
                                        "ar" => "جامعة",
                                        "en" => "Djamaa",
                                        "fr" => "Djamaa"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "جامعة",
                                                "en" => "Djamaa",
                                                "fr" => "Djamaa"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "مرارة",
                                                "en" => "M'Rara",
                                                "fr" => "M'Rara"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "سيدي عمران",
                                                "en" => "Sidi Amrane",
                                                "fr" => "Sidi Amrane"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "تندلة",
                                                "en" => "Tendla",
                                                "fr" => "Tendla"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                            ]

            ],
            [
                            "name" => [
                                "ar" => "المنيعة",
                                "en" => "El Menia",
                                "fr" => "El Menia"
                            ],
                            "code_postal" => "50000",
                            // true or false
                            "active" => false,

                            "dairas" => [
                                    // daira 1
                                [
                                    "name" => [
                                        "ar" => "المنيعة",
                                        "en" => "El Menia",
                                        "fr" => "El Menia"
                                    ],

                                    // true or false
                                    "active" => false,
                                    "cities" => [
                                            // city 1
                                        [
                                            "name" => [
                                                "ar" => "المنيعة",
                                                "en" => "El Menia",
                                                "fr" => "El Menia"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "حاسي الفحل",
                                                "en" => "Hassi F'hal",
                                                "fr" => "Hassi F'hal"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],
                                        [
                                            "name" => [
                                                "ar" => "حاسي قارة",
                                                "en" => "Hassi Gara",
                                                "fr" => "Hassi Gara"
                                            ],

                                            // true or false
                                            "active" => false,
                                        ],

                                    ]

                                ],
                            ]

            ],
            [
                                "name" => [
                                    "ar" => "أولاد جلال",
                                    "en" => "Ouled Djellal",
                                    "fr" => "Ouled Djellal"
                                ],
                                "code_postal" => "51000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "أولاد جلال",
                                            "en" => "Ouled Djellal",
                                            "fr" => "Ouled Djellal"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "أولاد جلال",
                                                    "en" => "Ouled Djellal",
                                                    "fr" => "Ouled Djellal"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "الدوسن",
                                                    "en" => "Doucen",
                                                    "fr" => "Doucen"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "أولاد رحمة",
                                                    "en" => "Ech Chaïba",
                                                    "fr" => "Ech Chaïba"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "بسبس",
                                                    "en" => "Besbes",
                                                    "fr" => "Besbes"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "سيدي خالد",
                                                    "en" => "Sidi Khaled",
                                                    "fr" => "Sidi Khaled"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "راس الميعاد",
                                                    "en" => "Ras El Miaad",
                                                    "fr" => "Ras El Miaad"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                "name" => [
                    "ar" => "برج باجى مختار",
                    "en" => "Bordj Badji Mokhtar",
                    "fr" => "Bordj Badji Mokhtar"
                ],
                "code_postal" => "52000",
                // true or false
                "active" => false,

                "dairas" => [
                        // daira 1
                    [
                        "name" => [
                            "ar" => "برج باجى مختار",
                            "en" => "Bordj Badji Mokhtar",
                            "fr" => "Bordj Badji Mokhtar"
                        ],

                        // true or false
                        "active" => false,
                        "cities" => [
                                // city 1
                            [
                                "name" => [
                                    "ar" => "برج باجى مختار",
                                    "en" => "Bordj Badji Mokhtar",
                                    "fr" => "Bordj Badji Mokhtar"
                                ],

                                // true or false
                                "active" => false,
                            ],
                            [
                                "name" => [
                                    "ar" => "تيمياوين",
                                    "en" => "Timiaouine",
                                    "fr" => "Timiaouine"
                                ],

                                // true or false
                                "active" => false,
                            ],

                        ]

                                ],
                ]

            ],
            [
                                "name" => [
                                    "ar" => "بني عباس",
                                    "en" => "Béni Abbès",
                                    "fr" => "Béni Abbès"
                                ],
                                "code_postal" => "53000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "بني عباس",
                                            "en" => "Béni Abbès",
                                            "fr" => "Béni Abbès"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "بني عباس",
                                                    "en" => "Béni Abbès",
                                                    "fr" => "Béni Abbès"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "تامترت",
                                                    "en" => "Tamtert",
                                                    "fr" => "Tamtert"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "كرزاز",
                                            "en" => "Kerzaz",
                                            "fr" => "Kerzaz"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "كرزاز",
                                                    "en" => "Kerzaz",
                                                    "fr" => "Kerzaz"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "بنى يخلف",
                                                    "en" => "Beni Ikhlef",
                                                    "fr" => "Beni Ikhlef"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "تيمودى",
                                                    "en" => "Timoudi",
                                                    "fr" => "Timoudi"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الواتة",
                                            "en" => "El Ouata",
                                            "fr" => "El Ouata"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "الواتة",
                                                    "en" => "El Ouata",
                                                    "fr" => "El Ouata"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "",
                                            "en" => "Tabelbala",
                                            "fr" => "Tabelbala"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تبلبالة",
                                                    "en" => "Tabelbala",
                                                    "fr" => "Tabelbala"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أولاد خدير",
                                            "en" => "Ouled Khoudir",
                                            "fr" => "Ouled Khoudir"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "أولاد خدير",
                                                    "en" => "Ouled Khoudir",
                                                    "fr" => "Ouled Khoudir"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "قصابى",
                                                    "en" => "Ksabi",
                                                    "fr" => "Ksabi"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "إڨلي",
                                            "en" => "Igli",
                                            "fr" => "Igli"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "إڨلي",
                                                    "en" => "Igli",
                                                    "fr" => "Igli"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                                "name" => [
                                    "ar" => "تيميمون",
                                    "en" => "Timimoun",
                                    "fr" => "Timimoun"
                                ],
                                "code_postal" => "54000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "تيميمون",
                                            "en" => "Timimoun",
                                            "fr" => "Timimoun"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تيميمون",
                                                    "en" => "Timimoun",
                                                    "fr" => "Timimoun"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "أولاد سعيد",
                                                    "en" => "Ouled Said",
                                                    "fr" => "Ouled Saïd"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "أوڨروت",
                                            "en" => "Aougrout",
                                            "fr" => "Aougrout"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "أوڨروت",
                                                    "en" => "Aougrout",
                                                    "fr" => "Aougrout"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "المطارفة",
                                                    "en" => "Metarfa",
                                                    "fr" => "Metarfa"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "دلدول",
                                                    "en" => "Deldoul",
                                                    "fr" => "Deldoul"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تينركوك",
                                            "en" => "Tinerkouk",
                                            "fr" => "Tinerkouk"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تينركوك",
                                                    "en" => "Tinerkouk",
                                                    "fr" => "Tinerkouk"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "قصر قدور",
                                                    "en" => "Ksar Kaddour",
                                                    "fr" => "Ksar Kaddour"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "شروين",
                                            "en" => "Charouine",
                                            "fr" => "Charouine"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "شروين",
                                                    "en" => "Charouine",
                                                    "fr" => "Charouine"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "طالمين",
                                                    "en" => "Talmine",
                                                    "fr" => "Talmine"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "أولاد عيسى",
                                                    "en" => "Ouled Aissa",
                                                    "fr" => "Ouled Aïssa"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                                "name" => [
                                    "ar" => "تقرت",
                                    "en" => "Touggourt",
                                    "fr" => "Touggourt"
                                ],
                                "code_postal" => "55000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "تقرت",
                                            "en" => "Touggourt",
                                            "fr" => "Touggourt"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تقرت",
                                                    "en" => "Touggourt",
                                                    "fr" => "Touggourt"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "الزاوية العابدية",
                                                    "en" => "Zaouia El Abidia",
                                                    "fr" => "Zaouia El Abidia"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "النزلة",
                                                    "en" => "Nezla",
                                                    "fr" => "Nezla"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "تبسبست",
                                                    "en" => "Tebesbest",
                                                    "fr" => "Tebesbest"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تماسين",
                                            "en" => "Tamacine",
                                            "fr" => "Tamacine"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تماسين",
                                                    "en" => "Tamacine",
                                                    "fr" => "Tamacine"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "بلدة عمر",
                                                    "en" => "Blidet Amor",
                                                    "fr" => "Blidet Amor"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "مقارين",
                                            "en" => "Megarine",
                                            "fr" => "Megarine"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "مقارين",
                                                    "en" => "Megarine",
                                                    "fr" => "Megarine"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "سيدي سليمان",
                                                    "en" => "Sidi Slimane",
                                                    "fr" => "Sidi Slimane"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الطيبات",
                                            "en" => "Taibet",
                                            "fr" => "Taibet"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "الطيبات",
                                                    "en" => "Taibet",
                                                    "fr" => "Taibet"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "بن ناصر",
                                                    "en" => "Benaceur",
                                                    "fr" => "Benaceur"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "المنقر",
                                                    "en" => "M'Naguer",
                                                    "fr" => "M'Naguer"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "الحجيرة",
                                            "en" => "El Hadjira",
                                            "fr" => "El Hadjira"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "الحجيرة",
                                                    "en" => "El Hadjira",
                                                    "fr" => "El Hadjira"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "العالية",
                                                    "en" => "El Allia",
                                                    "fr" => "El Allia"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "البرمة",
                                            "en" => "El- Birma",
                                            "fr" => "El- Birma"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "البرمة",
                                                    "en" => "El- Birma",
                                                    "fr" => "El- Birma"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                                "name" => [
                                    "ar" => "جانت",
                                    "en" => "Djanet",
                                    "fr" => "Djanet"
                                ],
                                "code_postal" => "56000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "جانت",
                                            "en" => "Djanet",
                                            "fr" => "Djanet"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "جانت",
                                                    "en" => "Djanet",
                                                    "fr" => "Djanet"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "برج الحواس",
                                                    "en" => "Borj El Hawass",
                                                    "fr" => "Borj El Hawass"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                                "name" => [
                                    "ar" => "عين صالح",
                                    "en" => "In Salah",
                                    "fr" => "In Salah"
                                ],
                                "code_postal" => "57000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "عين صالح",
                                            "en" => "In Salah",
                                            "fr" => "In Salah"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "عين صالح",
                                                    "en" => "In Salah",
                                                    "fr" => "In Salah"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],
                                            [
                                                "name" => [
                                                    "ar" => "فقارة الزاوية",
                                                    "en" => "Faqara Al-Zawiya",
                                                    "fr" => "Faqara Al-Zawiya"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "إن غار",
                                            "en" => "In Ghar",
                                            "fr" => "In Ghar"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "إن غار",
                                                    "en" => "In Ghar",
                                                    "fr" => "In Ghar"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],
            [
                                "name" => [
                                    "ar" => "عين قزّام",
                                    "en" => "In Guezzam",
                                    "fr" => "In Guezzam"
                                ],
                                "code_postal" => "58000",
                                // true or false
                                "active" => false,

                                "dairas" => [
                                        // daira 1
                                    [
                                        "name" => [
                                            "ar" => "عين قزّام",
                                            "en" => "In Guezzam",
                                            "fr" => "In Guezzam"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "عين قزّام",
                                                    "en" => "In Guezzam",
                                                    "fr" => "In Guezzam"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                    [
                                        "name" => [
                                            "ar" => "تين زاوتين",
                                            "en" => "Tin Zaouatine",
                                            "fr" => "Tin Zaouatine"
                                        ],

                                        // true or false
                                        "active" => false,
                                        "cities" => [
                                                // city 1
                                            [
                                                "name" => [
                                                    "ar" => "تين زاوتين",
                                                    "en" => "Tin Zaouatine",
                                                    "fr" => "Tin Zaouatine"
                                                ],

                                                // true or false
                                                "active" => false,
                                            ],

                                        ]

                                    ],
                                ]

            ],



        ]

];
