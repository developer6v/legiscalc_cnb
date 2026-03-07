<?php

function atosCalculator() {
    $services = [
        "apostilamento-de-haia" => [
            "Name" => 'Apostila de Haia',
            "Emolumento" => 52.93,
            "FRJ" => 12.03,
            "Total" => 52.93 + 12.03,
        ],
        
        "atas-notariais" => [
            "Name" => 'Ata Notarial',
            "Emolumento" => 198.50,
            "FRJ" => 45.11,
            "Total" => 198.50 + 45.11,
        ],

        "Autenticação de documento" => [
            "Name" => 'Autenticação de documento',
            "Emolumento" => 5.29,
            "FRJ" => 1.20,
            "Total" => 5.29 + 1.20,
        ],

        "certidoes" => [
            "Name" => 'Certidão',
            "Emolumento" => 15.21,
            "FRJ" => 3.45,
            "Total" => 15.21 + 3.45,
        ],
        "certidao-protesto" => [
            "Name" => 'Certidão Protesto',
            "Emolumento" => 19.84,
            "FRJ" => 4.50,
            "Total" => 19.84 + 4.50,
        ],
        "escritura-declaratoria" => [
            "Name" => 'Escritura Declaratória',
            "Emolumento" => 84.14,
            "FRJ" => 19.12,
            "Total" => 84.14 + 19.12,
        ],
        "escritura-emancipacao" => [
            "Name" => 'Escritura Emancipação',
            "Emolumento" => 84.14,
            "FRJ" => 19.12,
            "Total" => 84.14 + 19.12,
        ],
        "escritura-pacto-antenupcial" => [
            "Name" => 'Escritura de Pacto Antenupcial',
            "Emolumento" => 84.14,
            "FRJ" => 19.12,
            "Total" => 84.14 + 19.12,
        ],
        "escritura-uniao-estavel" => [
            "Name" => 'Escritura de União Estável',
            "Emolumento" => 84.14,
            "FRJ" => 19.12,
            "Total" => 84.14 + 19.12,
        ],
        "outras-escrituras" => [
            "Name" => 'Outras Escrituras',
            "Emolumento" => 84.14,
            "FRJ" => 19.12,
            "Total" => 84.14 + 19.12,
        ],
        "Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 119.10,
            "FRJ" => 27.07,
            "Total" => 119.10 + 27.07,
        ],
        "Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 113.24,
            "FRJ" => 25.74,
            "Total" => 113.24 + 25.74,
        ],
        "Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 119.10,
            "FRJ" => 27.07,
            "Total" => 119.10 + 27.07,
        ],
        "Reconhecimento de firma" => [
            "Name" => 'Reconhecimento de firma',
            "Emolumento" => 6.33,
            "FRJ" => 1.43,
            "Total" => 6.33 + 1.43,
        ],
        "procuracao-collection" => [
            "Procuração de veículos" => [
                "Name" => 'Procuração de veículos',
                "Emolumento" => 75.42,
                "FRJ" => 17.14,
                "Total" => 75.42 + 17.14,
            ],
            "Procuração para atos negociais" => [
                "Name" => 'Procuração para atos negociais',
                "Emolumento" => 75.42,
                "FRJ" => 17.14,
                "Total" => 75.42 + 17.14,
            ],
            "Procuração para simples representação" => [
                "Name" => 'Procuração para simples representação',
                "Emolumento" => 48.96,
                "FRJ" => 5.41,
                "Total" => 48.96 + 5.41,
            ],
            "Procuração para transacionar bens imóveis" => [
                "Name" => 'Procuração para transacionar bens imóveis',
                "Emolumento" => 156.15,
                "FRJ" => 35.49,
                "Total" => 156.15 + 35.49,
            ],
            "Procuração previdenciária" => [
                "Name" => 'Procuração previdenciária',
                "Emolumento" => 23.82,
                "FRJ" => 5.41,
                "Total" => 23.82 + 5.41,
            ]
        ],
        "testamento-collection" => [
            "Testamento COM especificação patrimonial" => [
                "Name" => 'Testamento COM especificação patrimonial',
                "Emolumento" => 767.54,
                "FRJ" => 174.46,
                "Total" => 767.54 + 174.46,
            ],
            "Testamento SEM especificação patrimonial" => [
                "Name" => 'Testamento SEM especificação patrimonial',
                "Emolumento" => 251.44,
                "FRJ" => 57.15,
                "Total" => 251.44 + 57.15,
            ]
        ]
    ];
    return $services;
}
?>