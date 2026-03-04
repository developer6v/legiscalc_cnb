<?php

function atosCalculator () {
    $services = [
        "apostilamento-de-haia" => [
            "Name" => 'Apostila de Haia',
            "Emolumento" => 55.14,
            "FRJ" => 12.53,
            "ISSQN" => 1.65,
            "Total" => 69.32,
        ],
        "atas-notariais" => [
            "Name" => 'Ata Notarial',
            "Emolumento" => 206.79,
            "FRJ" => 47.00,
            "ISSQN" => 6.20,
            "Total" => 259.99,
        ],
        "Autenticação de documento" => [
            "Name" => 'Autenticação de documento',
            "Emolumento" => 5.51,
            "FRJ" => 1.25,
            "ISSQN" => 0.16,
            "Total" => 6.92,
        ],
        "certidoes" => [
            "Name" => 'Certidão',
            "Emolumento" => 15.84,
            "FRJ" => 3.60,
            "ISSQN" => 0.48,
            "Total" => 19.92,
        ],
        "escritura-declaratoria" => [
            "Name" => 'Escritura Declaratória',
            "Emolumento" => 87.65,
            "FRJ" => 19.92,
            "ISSQN" => 2.63,
            "Total" => 110.20,
        ],
        "escritura-emancipacao" => [
            "Name" => 'Escritura Emancipação',
            "Emolumento" => 87.65,
            "FRJ" => 19.92,
            "ISSQN" => 2.63,
            "Total" => 110.20,
        ],
        "escritura-pacto-antenupcial" => [
            "Name" => 'Escritura de Pacto Antenupcial',
            "Emolumento" => 87.65,
            "FRJ" => 19.92,
            "ISSQN" => 2.63,
            "Total" => 110.20,
        ],
        "escritura-uniao-estavel" => [
            "Name" => 'Escritura de União Estável',
            "Emolumento" => 87.65,
            "FRJ" => 19.92,
            "ISSQN" => 2.63,
            "Total" => 110.20,
        ],
        "outras-escrituras" => [
            "Name" => 'Outras Escrituras',
            "Emolumento" => 87.65,
            "FRJ" => 19.92,
            "ISSQN" => 2.63,
            "Total" => 110.20,
        ],
        "Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário de Separação - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 124.07,
            "FRJ" => 28.20,
            "ISSQN" => 3.72,
            "Total" => 155.99,
        ],
        "Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Dissolução de União Estável - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 124.07,
            "FRJ" => 28.20,
            "ISSQN" => 3.72,
            "Total" => 155.99,
        ],
        "Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo" => [
            "Name" => 'Inventário Divórcio - Sem partilha, sem alimentos / Inventário negativo',
            "Emolumento" => 124.07,
            "FRJ" => 28.20,
            "ISSQN" => 3.72,
            "Total" => 155.99,
        ],
        "Reconhecimento de firma" => [
            "Name" => 'Reconhecimento de firma',
            "Emolumento" => 6.59,
            "FRJ" => 1.49,
            "ISSQN" => 0.20,
            "Total" => 8.28,
        ],
        "procuracao-collection" => [
            "Procuração de veículos" => [
                "Name" => 'Procuração de veículos',
                "Emolumento" => 71.71,
                "FRJ" => 16.30,
                "ISSQN" => 2.15,
                "Total" => 90.16,
            ],
            "Procuração para atos negociais" => [
                "Name" => 'Procuração para atos negociais',
                "Emolumento" => 78.57,
                "FRJ" => 17.85,
                "ISSQN" => 2.36,
                "Total" => 98.78,
            ],
            "Procuração para simples representação" => [
                "Name" => 'Procuração para simples representação',
                "Emolumento" => 51.00,
                "FRJ" => 11.59,
                "ISSQN" => 1.53,
                "Total" => 64.12,
            ],
            "Procuração para transacionar bens imóveis" => [
                "Name" => 'Procuração para transacionar bens imóveis',
                "Emolumento" => 162.67,
                "FRJ" => 36.97,
                "ISSQN" => 4.88,
                "Total" => 204.52,
            ],
            "Procuração previdenciária" => [
                "Name" => 'Procuração previdenciária',
                "Emolumento" => 24.81,
                "FRJ" => 5.63,
                "ISSQN" => 0.74,
                "Total" => 31.18,
            ]
        ],
        "testamento-collection" => [
            "Testamento COM especificação patrimonial" => [
                "Name" => 'Testamento COM especificação patrimonial',
                "Emolumento" => 799.62,
                "FRJ" => 181.75,
                "ISSQN" => 23.99,
                "Total" => 1005.36,
            ],
            "Testamento SEM especificação patrimonial" => [
                "Name" => 'Testamento SEM especificação patrimonial',
                "Emolumento" => 261.95,
                "FRJ" => 59.54,
                "ISSQN" => 7.86,
                "Total" => 329.35,
            ]
        ]
    ];
    return $services;
}
?>
