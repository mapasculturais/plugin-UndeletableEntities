# Plugin UndeletableEntities
Plugin que impede a deleção das entidades configuradas.

Útil para evitar a deleção acidental de entidades essenciais para o funcionamento do sistema, como alguns selos ou editais, 
tais como os selos GOV.BR e Cadastro Único, e os editais da Aldir Blanc ou do Cadastro Único.

## Configuração
colocar no array de plugins a entrada abaixo:
```PHP
'UndeletableEntities' => [
    'namespace' => 'UndeletableEntities',
    'config' => [
        'Agent' => [], // ids dos agentes que não podem ser deletados
        'Space' => [], // ids dos espaços que não podem ser deletados
        'Event' => [], // ids dos eventos que não podem ser deletados
        'Project' => [], // ids dos projetos que não podem ser deletados
        '*Opportunity' => [], // ids das oportunidades que não podem ser deletados
        'Seal' => [], // ids dos selos que não podem ser deletados
    ]
]
```
