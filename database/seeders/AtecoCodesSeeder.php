<?php

namespace Database\Seeders;

use App\Models\AtecoCode;
use Illuminate\Database\Seeder;

class AtecoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $atecoCodes = [
            [
                "parent_code" => null,
                "code"        => "A",
                "name"        => "A - AGRICOLTURA, SILVICOLTURA E PESCA",
            ],
            [
                "parent_code" => "A",
                "code"        => "01",
                "name"        => "01 - COLTIVAZIONI AGRICOLE E PRODUZIONE DI PRODOTTI ANIMALI, CACCIA E SERVIZI CONNESSI",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.1",
                "name"        => "01.1 - COLTIVAZIONE DI COLTURE AGRICOLE NON PERMANENTI",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.11",
                "name"        => "01.11 - Coltivazione di cereali (escluso il riso), legumi da granella e semi oleosi",
            ],
            [
                "parent_code" => "01.11",
                "code"        => "01.11.1",
                "name"        => "01.11.1 - Coltivazione di cereali (escluso il riso)",
            ],
            [
                "parent_code" => "01.11.1",
                "code"        => "01.11.10",
                "name"        => "01.11.10 - Coltivazione di cereali (escluso il riso)",
            ],
            [
                "parent_code" => "01.11",
                "code"        => "01.11.2",
                "name"        => "01.11.2 - Coltivazione di semi oleosi",
            ],
            [
                "parent_code" => "01.11.2",
                "code"        => "01.11.20",
                "name"        => "01.11.20 - Coltivazione di semi oleosi",
            ],
            [
                "parent_code" => "01.11",
                "code"        => "01.11.3",
                "name"        => "01.11.3 - Coltivazione di legumi da granella",
            ],
            [
                "parent_code" => "01.11.3",
                "code"        => "01.11.30",
                "name"        => "01.11.30 - Coltivazione di legumi da granella",
            ],
            [
                "parent_code" => "01.11",
                "code"        => "01.11.4",
                "name"        => "01.11.4 - Coltivazioni miste di cereali, legumi da granella e semi oleosi",
            ],
            [
                "parent_code" => "01.11.4",
                "code"        => "01.11.40",
                "name"        => "01.11.40 - Coltivazioni miste di cereali, legumi da granella e semi oleosi",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.12",
                "name"        => "01.12 - Coltivazione di riso",
            ],
            [
                "parent_code" => "01.12",
                "code"        => "01.12.0",
                "name"        => "01.12.0 - Coltivazione di riso",
            ],
            [
                "parent_code" => "01.12.0",
                "code"        => "01.12.00",
                "name"        => "01.12.00 - Coltivazione di riso",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.13",
                "name"        => "01.13 - Coltivazione di ortaggi e meloni, radici e tuberi",
            ],
            [
                "parent_code" => "01.13",
                "code"        => "01.13.1",
                "name"        => "01.13.1 - Coltivazione di ortaggi (inclusi i meloni) in foglia, a fusto, a frutto, in radici, bulbi e tuberi in piena aria (escluse barbabietola da zucchero e patate)",
            ],
            [
                "parent_code" => "01.13.1",
                "code"        => "01.13.10",
                "name"        => "01.13.10 - Coltivazione di ortaggi (inclusi i meloni) in foglia, a fusto, a frutto, in radici, bulbi e tuberi in piena aria (escluse barbabietola da zucchero e patate)",
            ],
            [
                "parent_code" => "01.13",
                "code"        => "01.13.2",
                "name"        => "01.13.2 - Coltivazione di ortaggi (inclusi i meloni) in foglia, a fusto, a frutto, in radici, bulbi e tuberi in colture protette (escluse barbabietola da zucchero e patate)",
            ],
            [
                "parent_code" => "01.13.2",
                "code"        => "01.13.21",
                "name"        => "01.13.21 - Coltivazione di ortaggi (inclusi i meloni) in foglia, a fusto, a frutto, in radici, bulbi e tuberi in colture protette fuori suolo (escluse barbabietola da zucchero e patate)",
            ],
            [
                "parent_code" => "01.13.2",
                "code"        => "01.13.29",
                "name"        => "01.13.29 - Coltivazione di ortaggi (inclusi i meloni) in foglia, a fusto, a frutto, in radici, bulbi e tuberi in colture protette ad esclusione delle colture fuori suolo (escluse barbabietola da zucchero e patate)",
            ],
            [
                "parent_code" => "01.13",
                "code"        => "01.13.3",
                "name"        => "01.13.3 - Coltivazione di barbabietola da zucchero",
            ],
            [
                "parent_code" => "01.13.3",
                "code"        => "01.13.30",
                "name"        => "01.13.30 - Coltivazione di barbabietola da zucchero",
            ],
            [
                "parent_code" => "01.13",
                "code"        => "01.13.4",
                "name"        => "01.13.4 - Coltivazione di patate",
            ],
            [
                "parent_code" => "01.13.4",
                "code"        => "01.13.40",
                "name"        => "01.13.40 - Coltivazione di patate",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.14",
                "name"        => "01.14 - Coltivazione di canna da zucchero",
            ],
            [
                "parent_code" => "01.14",
                "code"        => "01.14.0",
                "name"        => "01.14.0 - Coltivazione di canna da zucchero",
            ],
            [
                "parent_code" => "01.14.0",
                "code"        => "01.14.00",
                "name"        => "01.14.00 - Coltivazione di canna da zucchero",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.15",
                "name"        => "01.15 - Coltivazione di tabacco",
            ],
            [
                "parent_code" => "01.15",
                "code"        => "01.15.0",
                "name"        => "01.15.0 - Coltivazione di tabacco",
            ],
            [
                "parent_code" => "01.15.0",
                "code"        => "01.15.00",
                "name"        => "01.15.00 - Coltivazione di tabacco",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.16",
                "name"        => "01.16 - Coltivazione di piante tessili",
            ],
            [
                "parent_code" => "01.16",
                "code"        => "01.16.0",
                "name"        => "01.16.0 - Coltivazione di piante per la preparazione di fibre tessili",
            ],
            [
                "parent_code" => "01.16.0",
                "code"        => "01.16.00",
                "name"        => "01.16.00 - Coltivazione di piante per la preparazione di fibre tessili",
            ],
            [
                "parent_code" => "01.1",
                "code"        => "01.19",
                "name"        => "01.19 - Floricoltura e coltivazione di altre colture non permanenti",
            ],
            [
                "parent_code" => "01.19",
                "code"        => "01.19.1",
                "name"        => "01.19.1 - Coltivazione di fiori in piena aria",
            ],
            [
                "parent_code" => "01.19.1",
                "code"        => "01.19.10",
                "name"        => "01.19.10 - Coltivazione di fiori in piena aria",
            ],
            [
                "parent_code" => "01.19",
                "code"        => "01.19.2",
                "name"        => "01.19.2 - Coltivazione di fiori in colture protette",
            ],
            [
                "parent_code" => "01.19.2",
                "code"        => "01.19.21",
                "name"        => "01.19.21 - Coltivazione di fiori in colture protette fuori suolo",
            ],
            [
                "parent_code" => "01.19.2",
                "code"        => "01.19.29",
                "name"        => "01.19.29 - Coltivazione di fiori in colture protette ad esclusione delle colture fuori suolo",
            ],
            [
                "parent_code" => "01.19",
                "code"        => "01.19.9",
                "name"        => "01.19.9 - Coltivazione di piante da foraggio e di altre colture non permanenti",
            ],
            [
                "parent_code" => "01.19.9",
                "code"        => "01.19.90",
                "name"        => "01.19.90 - Coltivazione di piante da foraggio e di altre colture non permanenti",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.2",
                "name"        => "01.2 - COLTIVAZIONE DI COLTURE PERMANENTI",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.21",
                "name"        => "01.21 - Coltivazione di uva",
            ],
            [
                "parent_code" => "01.21",
                "code"        => "01.21.0",
                "name"        => "01.21.0 - Coltivazione di uva",
            ],
            [
                "parent_code" => "01.21.0",
                "code"        => "01.21.00",
                "name"        => "01.21.00 - Coltivazione di uva",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.22",
                "name"        => "01.22 - Coltivazione di frutta di origine tropicale e subtropicale",
            ],
            [
                "parent_code" => "01.22",
                "code"        => "01.22.0",
                "name"        => "01.22.0 - Coltivazione di frutta di origine tropicale e subtropicale",
            ],
            [
                "parent_code" => "01.22.0",
                "code"        => "01.22.00",
                "name"        => "01.22.00 - Coltivazione di frutta di origine tropicale e subtropicale",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.23",
                "name"        => "01.23 - Coltivazione di agrumi",
            ],
            [
                "parent_code" => "01.23",
                "code"        => "01.23.0",
                "name"        => "01.23.0 - Coltivazione di agrumi",
            ],
            [
                "parent_code" => "01.23.0",
                "code"        => "01.23.00",
                "name"        => "01.23.00 - Coltivazione di agrumi",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.24",
                "name"        => "01.24 - Coltivazione di pomacee e frutta a nocciolo",
            ],
            [
                "parent_code" => "01.24",
                "code"        => "01.24.0",
                "name"        => "01.24.0 - Coltivazione di pomacee e frutta a nocciolo",
            ],
            [
                "parent_code" => "01.24.0",
                "code"        => "01.24.00",
                "name"        => "01.24.00 - Coltivazione di pomacee e frutta a nocciolo",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.25",
                "name"        => "01.25 - Coltivazione di altri alberi da frutta, frutti di bosco e in guscio",
            ],
            [
                "parent_code" => "01.25",
                "code"        => "01.25.0",
                "name"        => "01.25.0 - Coltivazione di altri alberi da frutta, frutti di bosco e frutta in guscio",
            ],
            [
                "parent_code" => "01.25.0",
                "code"        => "01.25.00",
                "name"        => "01.25.00 - Coltivazione di altri alberi da frutta, frutti di bosco e frutta in guscio",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.26",
                "name"        => "01.26 - Coltivazione di frutti oleosi",
            ],
            [
                "parent_code" => "01.26",
                "code"        => "01.26.0",
                "name"        => "01.26.0 - Coltivazione di frutti oleosi",
            ],
            [
                "parent_code" => "01.26.0",
                "code"        => "01.26.00",
                "name"        => "01.26.00 - Coltivazione di frutti oleosi",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.27",
                "name"        => "01.27 - Coltivazione di piante per la produzione di bevande",
            ],
            [
                "parent_code" => "01.27",
                "code"        => "01.27.0",
                "name"        => "01.27.0 - Coltivazione di piante per la produzione di bevande",
            ],
            [
                "parent_code" => "01.27.0",
                "code"        => "01.27.00",
                "name"        => "01.27.00 - Coltivazione di piante per la produzione di bevande",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.28",
                "name"        => "01.28 - Coltivazione di spezie, piante aromatiche e farmaceutiche",
            ],
            [
                "parent_code" => "01.28",
                "code"        => "01.28.0",
                "name"        => "01.28.0 - Coltivazione di spezie, piante aromatiche e farmaceutiche",
            ],
            [
                "parent_code" => "01.28.0",
                "code"        => "01.28.00",
                "name"        => "01.28.00 - Coltivazione di spezie, piante aromatiche e farmaceutiche",
            ],
            [
                "parent_code" => "01.2",
                "code"        => "01.29",
                "name"        => "01.29 - Coltivazione di altre colture permanenti (inclusi alberi di Natale)",
            ],
            [
                "parent_code" => "01.29",
                "code"        => "01.29.0",
                "name"        => "01.29.0 - Coltivazione di altre colture permanenti (inclusi alberi di Natale)",
            ],
            [
                "parent_code" => "01.29.0",
                "code"        => "01.29.00",
                "name"        => "01.29.00 - Coltivazione di altre colture permanenti (inclusi alberi di Natale)",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.3",
                "name"        => "01.3 - RIPRODUZIONE DELLE PIANTE",
            ],
            [
                "parent_code" => "01.3",
                "code"        => "01.30",
                "name"        => "01.30 - Riproduzione delle piante",
            ],
            [
                "parent_code" => "01.30",
                "code"        => "01.30.0",
                "name"        => "01.30.0 - Riproduzione delle piante",
            ],
            [
                "parent_code" => "01.30.0",
                "code"        => "01.30.00",
                "name"        => "01.30.00 - Riproduzione delle piante",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.4",
                "name"        => "01.4 - ALLEVAMENTO DI ANIMALI",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.41",
                "name"        => "01.41 - Allevamento di bovini da latte",
            ],
            [
                "parent_code" => "01.41",
                "code"        => "01.41.0",
                "name"        => "01.41.0 - Allevamento di bovini e bufale da latte, produzione di latte crudo",
            ],
            [
                "parent_code" => "01.41.0",
                "code"        => "01.41.00",
                "name"        => "01.41.00 - Allevamento di bovini e bufale da latte, produzione di latte crudo",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.42",
                "name"        => "01.42 - Allevamento di altri bovini e di bufalini",
            ],
            [
                "parent_code" => "01.42",
                "code"        => "01.42.0",
                "name"        => "01.42.0 - Allevamento di bovini e bufalini da carne",
            ],
            [
                "parent_code" => "01.42.0",
                "code"        => "01.42.00",
                "name"        => "01.42.00 - Allevamento di bovini e bufalini da carne",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.43",
                "name"        => "01.43 - Allevamento di cavalli e altri equini",
            ],
            [
                "parent_code" => "01.43",
                "code"        => "01.43.0",
                "name"        => "01.43.0 - Allevamento di cavalli e altri equini",
            ],
            [
                "parent_code" => "01.43.0",
                "code"        => "01.43.00",
                "name"        => "01.43.00 - Allevamento di cavalli e altri equini",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.44",
                "name"        => "01.44 - Allevamento di cammelli e camelidi",
            ],
            [
                "parent_code" => "01.44",
                "code"        => "01.44.0",
                "name"        => "01.44.0 - Allevamento di cammelli e camelidi",
            ],
            [
                "parent_code" => "01.44.0",
                "code"        => "01.44.00",
                "name"        => "01.44.00 - Allevamento di cammelli e camelidi",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.45",
                "name"        => "01.45 - Allevamento di ovini e caprini",
            ],
            [
                "parent_code" => "01.45",
                "code"        => "01.45.0",
                "name"        => "01.45.0 - Allevamento di ovini e caprini",
            ],
            [
                "parent_code" => "01.45.0",
                "code"        => "01.45.00",
                "name"        => "01.45.00 - Allevamento di ovini e caprini",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.46",
                "name"        => "01.46 - Allevamento di suini",
            ],
            [
                "parent_code" => "01.46",
                "code"        => "01.46.0",
                "name"        => "01.46.0 - Allevamento di suini",
            ],
            [
                "parent_code" => "01.46.0",
                "code"        => "01.46.00",
                "name"        => "01.46.00 - Allevamento di suini",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.47",
                "name"        => "01.47 - Allevamento di pollame",
            ],
            [
                "parent_code" => "01.47",
                "code"        => "01.47.0",
                "name"        => "01.47.0 - Allevamento di pollame",
            ],
            [
                "parent_code" => "01.47.0",
                "code"        => "01.47.00",
                "name"        => "01.47.00 - Allevamento di pollame",
            ],
            [
                "parent_code" => "01.4",
                "code"        => "01.49",
                "name"        => "01.49 - Allevamento di altri animali",
            ],
            [
                "parent_code" => "01.49",
                "code"        => "01.49.1",
                "name"        => "01.49.1 - Allevamento di conigli",
            ],
            [
                "parent_code" => "01.49.1",
                "code"        => "01.49.10",
                "name"        => "01.49.10 - Allevamento di conigli",
            ],
            [
                "parent_code" => "01.49",
                "code"        => "01.49.2",
                "name"        => "01.49.2 - Allevamento di animali da pelliccia",
            ],
            [
                "parent_code" => "01.49.2",
                "code"        => "01.49.20",
                "name"        => "01.49.20 - Allevamento di animali da pelliccia",
            ],
            [
                "parent_code" => "01.49",
                "code"        => "01.49.3",
                "name"        => "01.49.3 - Apicoltura",
            ],
            [
                "parent_code" => "01.49.3",
                "code"        => "01.49.30",
                "name"        => "01.49.30 - Apicoltura",
            ],
            [
                "parent_code" => "01.49",
                "code"        => "01.49.4",
                "name"        => "01.49.4 - Bachicoltura",
            ],
            [
                "parent_code" => "01.49.4",
                "code"        => "01.49.40",
                "name"        => "01.49.40 - Bachicoltura",
            ],
            [
                "parent_code" => "01.49",
                "code"        => "01.49.9",
                "name"        => "01.49.9 - Allevamento di altri animali n.c.a.",
            ],
            [
                "parent_code" => "01.49.9",
                "code"        => "01.49.90",
                "name"        => "01.49.90 - Allevamento di altri animali n.c.a.",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.5",
                "name"        => "01.5 - COLTIVAZIONI AGRICOLE ASSOCIATE ALL'ALLEVAMENTO DI ANIMALI: ATTIVITÀ MISTA",
            ],
            [
                "parent_code" => "01.5",
                "code"        => "01.50",
                "name"        => "01.50 - Coltivazioni agricole associate all'allevamento di animali: attività mista",
            ],
            [
                "parent_code" => "01.50",
                "code"        => "01.50.0",
                "name"        => "01.50.0 - Coltivazioni agricole associate all'allevamento di animali: attività mista",
            ],
            [
                "parent_code" => "01.50.0",
                "code"        => "01.50.00",
                "name"        => "01.50.00 - Coltivazioni agricole associate all'allevamento di animali: attività mista",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.6",
                "name"        => "01.6 - ATTIVITÀ DI SUPPORTO ALL'AGRICOLTURA E ATTIVITÀ SUCCESSIVE ALLA RACCOLTA",
            ],
            [
                "parent_code" => "01.6",
                "code"        => "01.61",
                "name"        => "01.61 - Attività di supporto alla produzione vegetale",
            ],
            [
                "parent_code" => "01.61",
                "code"        => "01.61.0",
                "name"        => "01.61.0 - Attività di supporto alla produzione vegetale",
            ],
            [
                "parent_code" => "01.61.0",
                "code"        => "01.61.00",
                "name"        => "01.61.00 - Attività di supporto alla produzione vegetale",
            ],
            [
                "parent_code" => "01.6",
                "code"        => "01.62",
                "name"        => "01.62 - Attività di supporto alla produzione animale",
            ],
            [
                "parent_code" => "01.62",
                "code"        => "01.62.0",
                "name"        => "01.62.0 - Attività di supporto alla produzione animale (esclusi i servizi veterinari)",
            ],
            [
                "parent_code" => "01.62.0",
                "code"        => "01.62.01",
                "name"        => "01.62.01 - Attività dei maniscalchi",
            ],
            [
                "parent_code" => "01.62.0",
                "code"        => "01.62.09",
                "name"        => "01.62.09 - Altre attività di supporto alla produzione animale (esclusi i servizi veterinari)",
            ],
            [
                "parent_code" => "01.6",
                "code"        => "01.63",
                "name"        => "01.63 - Attività successive alla raccolta",
            ],
            [
                "parent_code" => "01.63",
                "code"        => "01.63.0",
                "name"        => "01.63.0 - Attività che seguono la raccolta",
            ],
            [
                "parent_code" => "01.63.0",
                "code"        => "01.63.00",
                "name"        => "01.63.00 - Attività che seguono la raccolta",
            ],
            [
                "parent_code" => "01.6",
                "code"        => "01.64",
                "name"        => "01.64 - Lavorazione delle sementi per la semina",
            ],
            [
                "parent_code" => "01.64",
                "code"        => "01.64.0",
                "name"        => "01.64.0 - Lavorazione delle sementi per la semina",
            ],
            [
                "parent_code" => "01.64.0",
                "code"        => "01.64.01",
                "name"        => "01.64.01 - Pulitura e cernita di semi e granaglie",
            ],
            [
                "parent_code" => "01.64.0",
                "code"        => "01.64.09",
                "name"        => "01.64.09 - Altre lavorazioni delle sementi per la semina",
            ],
            [
                "parent_code" => "01",
                "code"        => "01.7",
                "name"        => "01.7 - CACCIA, CATTURA DI ANIMALI E SERVIZI CONNESSI",
            ],
            [
                "parent_code" => "01.7",
                "code"        => "01.70",
                "name"        => "01.70 - Caccia, cattura di animali e servizi connessi",
            ],
            [
                "parent_code" => "01.70",
                "code"        => "01.70.0",
                "name"        => "01.70.0 - Caccia, cattura di animali e servizi connessi",
            ],
            [
                "parent_code" => "01.70.0",
                "code"        => "01.70.00",
                "name"        => "01.70.00 - Caccia, cattura di animali e servizi connessi",
            ],
            [
                "parent_code" => "A",
                "code"        => "02",
                "name"        => "02 - SILVICOLTURA ED UTILIZZO DI AREE FORESTALI",
            ],
            [
                "parent_code" => "02",
                "code"        => "02.1",
                "name"        => "02.1 - SILVICOLTURA ED ALTRE ATTIVITÀ FORESTALI",
            ],
            [
                "parent_code" => "02.1",
                "code"        => "02.10",
                "name"        => "02.10 - Silvicoltura ed altre attività forestali",
            ],
            [
                "parent_code" => "02.10",
                "code"        => "02.10.0",
                "name"        => "02.10.0 - Silvicoltura e altre attività forestali",
            ],
            [
                "parent_code" => "02.10.0",
                "code"        => "02.10.00",
                "name"        => "02.10.00 - Silvicoltura e altre attività forestali",
            ],
            [
                "parent_code" => "02",
                "code"        => "02.2",
                "name"        => "02.2 - UTILIZZO DI AREE FORESTALI",
            ],
            [
                "parent_code" => "02.2",
                "code"        => "02.20",
                "name"        => "02.20 - Utilizzo di aree forestali",
            ],
            [
                "parent_code" => "02.20",
                "code"        => "02.20.0",
                "name"        => "02.20.0 - Utilizzo di aree forestali",
            ],
            [
                "parent_code" => "02.20.0",
                "code"        => "02.20.00",
                "name"        => "02.20.00 - Utilizzo di aree forestali",
            ],
            [
                "parent_code" => "02",
                "code"        => "02.3",
                "name"        => "02.3 - RACCOLTA DI PRODOTTI SELVATICI NON LEGNOSI",
            ],
            [
                "parent_code" => "02.3",
                "code"        => "02.30",
                "name"        => "02.30 - Raccolta di prodotti selvatici non legnosi",
            ],
            [
                "parent_code" => "02.30",
                "code"        => "02.30.0",
                "name"        => "02.30.0 - Raccolta di prodotti selvatici non legnosi",
            ],
            [
                "parent_code" => "02.30.0",
                "code"        => "02.30.00",
                "name"        => "02.30.00 - Raccolta di prodotti selvatici non legnosi",
            ],
            [
                "parent_code" => "02",
                "code"        => "02.4",
                "name"        => "02.4 - SERVIZI DI SUPPORTO PER LA SILVICOLTURA",
            ],
            [
                "parent_code" => "02.4",
                "code"        => "02.40",
                "name"        => "02.40 - Servizi di supporto per la silvicoltura",
            ],
            [
                "parent_code" => "02.40",
                "code"        => "02.40.0",
                "name"        => "02.40.0 - Servizi di supporto per la silvicoltura",
            ],
            [
                "parent_code" => "02.40.0",
                "code"        => "02.40.00",
                "name"        => "02.40.00 - Servizi di supporto per la silvicoltura",
            ],
            [
                "parent_code" => "A",
                "code"        => "03",
                "name"        => "03 - PESCA E ACQUACOLTURA",
            ],
            [
                "parent_code" => "03",
                "code"        => "03.1",
                "name"        => "03.1 - PESCA",
            ],
            [
                "parent_code" => "03.1",
                "code"        => "03.11",
                "name"        => "03.11 - Pesca marina",
            ],
            [
                "parent_code" => "03.11",
                "code"        => "03.11.0",
                "name"        => "03.11.0 - Pesca in acque marine e lagunari e servizi connessi",
            ],
            [
                "parent_code" => "03.11.0",
                "code"        => "03.11.00",
                "name"        => "03.11.00 - Pesca in acque marine e lagunari e servizi connessi",
            ],
            [
                "parent_code" => "03.1",
                "code"        => "03.12",
                "name"        => "03.12 - Pesca in acque dolci",
            ],
            [
                "parent_code" => "03.12",
                "code"        => "03.12.0",
                "name"        => "03.12.0 - Pesca in acque dolci e servizi connessi",
            ],
            [
                "parent_code" => "03.12.0",
                "code"        => "03.12.00",
                "name"        => "03.12.00 - Pesca in acque dolci e servizi connessi",
            ],
            [
                "parent_code" => "03",
                "code"        => "03.2",
                "name"        => "03.2 - ACQUACOLTURA",
            ],
            [
                "parent_code" => "03.2",
                "code"        => "03.21",
                "name"        => "03.21 - Acquacoltura marina",
            ],
            [
                "parent_code" => "03.21",
                "code"        => "03.21.0",
                "name"        => "03.21.0 - Acquacoltura in acqua di mare, salmastra o lagunare e servizi connessi",
            ],
            [
                "parent_code" => "03.21.0",
                "code"        => "03.21.00",
                "name"        => "03.21.00 - Acquacoltura in acqua di mare, salmastra o lagunare e servizi connessi",
            ],
            [
                "parent_code" => "03.2",
                "code"        => "03.22",
                "name"        => "03.22 - Acquacoltura in acque dolci",
            ],
            [
                "parent_code" => "03.22",
                "code"        => "03.22.0",
                "name"        => "03.22.0 - Acquacoltura in acque dolci e servizi connessi",
            ],
            [
                "parent_code" => "03.22.0",
                "code"        => "03.22.00",
                "name"        => "03.22.00 - Acquacoltura in acque dolci e servizi connessi",
            ],
            [
                "parent_code" => null,
                "code"        => "B",
                "name"        => "B - ESTRAZIONE DI MINERALI DA CAVE E MINIERE",
            ],
            [
                "parent_code" => "B",
                "code"        => "05",
                "name"        => "05 - ESTRAZIONE DI CARBONE (ESCLUSA TORBA)",
            ],
            [
                "parent_code" => "05",
                "code"        => "05.1",
                "name"        => "05.1 - ESTRAZIONE DI ANTRACITE",
            ],
            [
                "parent_code" => "05.1",
                "code"        => "05.10",
                "name"        => "05.10 - Estrazione di antracite",
            ],
            [
                "parent_code" => "05.10",
                "code"        => "05.10.0",
                "name"        => "05.10.0 - Estrazione di antracite e litantrace",
            ],
            [
                "parent_code" => "05.10.0",
                "code"        => "05.10.00",
                "name"        => "05.10.00 - Estrazione di antracite e litantrace",
            ],
            [
                "parent_code" => "05",
                "code"        => "05.2",
                "name"        => "05.2 - ESTRAZIONE DI LIGNITE",
            ],
            [
                "parent_code" => "05.2",
                "code"        => "05.20",
                "name"        => "05.20 - Estrazione di lignite",
            ],
            [
                "parent_code" => "05.20",
                "code"        => "05.20.0",
                "name"        => "05.20.0 - Estrazione di lignite",
            ],
            [
                "parent_code" => "05.20.0",
                "code"        => "05.20.00",
                "name"        => "05.20.00 - Estrazione di lignite",
            ],
            [
                "parent_code" => "B",
                "code"        => "06",
                "name"        => "06 - ESTRAZIONE DI PETROLIO GREGGIO E DI GAS NATURALE",
            ],
            [
                "parent_code" => "06",
                "code"        => "06.1",
                "name"        => "06.1 - ESTRAZIONE DI PETROLIO GREGGIO",
            ],
            [
                "parent_code" => "06.1",
                "code"        => "06.10",
                "name"        => "06.10 - Estrazione di petrolio greggio",
            ],
            [
                "parent_code" => "06.10",
                "code"        => "06.10.0",
                "name"        => "06.10.0 - Estrazione di petrolio greggio",
            ],
            [
                "parent_code" => "06.10.0",
                "code"        => "06.10.00",
                "name"        => "06.10.00 - Estrazione di petrolio greggio",
            ],
            [
                "parent_code" => "06",
                "code"        => "06.2",
                "name"        => "06.2 - ESTRAZIONE DI GAS NATURALE",
            ],
            [
                "parent_code" => "06.2",
                "code"        => "06.20",
                "name"        => "06.20 - Estrazione di gas naturale",
            ],
            [
                "parent_code" => "06.20",
                "code"        => "06.20.0",
                "name"        => "06.20.0 - Estrazione di gas naturale",
            ],
            [
                "parent_code" => "06.20.0",
                "code"        => "06.20.00",
                "name"        => "06.20.00 - Estrazione di gas naturale",
            ],
            [
                "parent_code" => "B",
                "code"        => "07",
                "name"        => "07 - ESTRAZIONE DI MINERALI METALLIFERI",
            ],
            [
                "parent_code" => "07",
                "code"        => "07.1",
                "name"        => "07.1 - ESTRAZIONE DI MINERALI METALLIFERI FERROSI",
            ],
            [
                "parent_code" => "07.1",
                "code"        => "07.10",
                "name"        => "07.10 - Estrazione di minerali metalliferi ferrosi",
            ],
            [
                "parent_code" => "07.10",
                "code"        => "07.10.0",
                "name"        => "07.10.0 - Estrazione di minerali metalliferi ferrosi",
            ],
            [
                "parent_code" => "07.10.0",
                "code"        => "07.10.00",
                "name"        => "07.10.00 - Estrazione di minerali metalliferi ferrosi",
            ],
            [
                "parent_code" => "07",
                "code"        => "07.2",
                "name"        => "07.2 - ESTRAZIONE DI MINERALI METALLIFERI NON FERROSI",
            ],
            [
                "parent_code" => "07.2",
                "code"        => "07.21",
                "name"        => "07.21 - Estrazione di minerali di uranio e di torio",
            ],
            [
                "parent_code" => "07.21",
                "code"        => "07.21.0",
                "name"        => "07.21.0 - Estrazione di minerali di uranio e di torio",
            ],
            [
                "parent_code" => "07.21.0",
                "code"        => "07.21.00",
                "name"        => "07.21.00 - Estrazione di minerali di uranio e di torio",
            ],
            [
                "parent_code" => "07.2",
                "code"        => "07.29",
                "name"        => "07.29 - Estrazione di altri minerali metalliferi non ferrosi",
            ],
            [
                "parent_code" => "07.29",
                "code"        => "07.29.0",
                "name"        => "07.29.0 - Estrazione di altri minerali metalliferi non ferrosi",
            ],
            [
                "parent_code" => "07.29.0",
                "code"        => "07.29.00",
                "name"        => "07.29.00 - Estrazione di altri minerali metalliferi non ferrosi",
            ],
            [
                "parent_code" => "B",
                "code"        => "08",
                "name"        => "08 - ALTRE ATTIVITÀ DI ESTRAZIONE DI MINERALI DA CAVE E MINIERE",
            ],
            [
                "parent_code" => "08",
                "code"        => "08.1",
                "name"        => "08.1 - ESTRAZIONE DI PIETRA, SABBIA E ARGILLA",
            ],
            [
                "parent_code" => "08.1",
                "code"        => "08.11",
                "name"        => "08.11 - Estrazione di pietre ornamentali e da costruzione, calcare, pietra da gesso, creta e ardesia",
            ],
            [
                "parent_code" => "08.11",
                "code"        => "08.11.0",
                "name"        => "08.11.0 - Estrazione di pietre ornamentali e da costruzione, calcare, pietra da gesso, creta e ardesia",
            ],
            [
                "parent_code" => "08.11.0",
                "code"        => "08.11.00",
                "name"        => "08.11.00 - Estrazione di pietre ornamentali e da costruzione, calcare, pietra da gesso, creta e ardesia",
            ],
            [
                "parent_code" => "08.1",
                "code"        => "08.12",
                "name"        => "08.12 - Estrazione di ghiaia e sabbia; estrazione di argille e caolino",
            ],
            [
                "parent_code" => "08.12",
                "code"        => "08.12.0",
                "name"        => "08.12.0 - Estrazione di ghiaia, sabbia; estrazione di argille e caolino",
            ],
            [
                "parent_code" => "08.12.0",
                "code"        => "08.12.00",
                "name"        => "08.12.00 - Estrazione di ghiaia, sabbia; estrazione di argille e caolino",
            ],
            [
                "parent_code" => "08",
                "code"        => "08.9",
                "name"        => "08.9 - ESTRAZIONE DI MINERALI DA CAVE E MINIERE N.C.A.",
            ],
            [
                "parent_code" => "08.9",
                "code"        => "08.91",
                "name"        => "08.91 - Estrazione di minerali per l'industria chimica e per la produzione di fertilizzanti",
            ],
            [
                "parent_code" => "08.91",
                "code"        => "08.91.0",
                "name"        => "08.91.0 - Estrazione di minerali per l'industria chimica e per la produzione di fertilizzanti",
            ],
            [
                "parent_code" => "08.91.0",
                "code"        => "08.91.00",
                "name"        => "08.91.00 - Estrazione di minerali per l'industria chimica e per la produzione di fertilizzanti",
            ],
            [
                "parent_code" => "08.9",
                "code"        => "08.92",
                "name"        => "08.92 - Estrazione di torba",
            ],
            [
                "parent_code" => "08.92",
                "code"        => "08.92.0",
                "name"        => "08.92.0 - Estrazione di torba",
            ],
            [
                "parent_code" => "08.92.0",
                "code"        => "08.92.00",
                "name"        => "08.92.00 - Estrazione di torba",
            ],
            [
                "parent_code" => "08.9",
                "code"        => "08.93",
                "name"        => "08.93 - Estrazione di sale",
            ],
            [
                "parent_code" => "08.93",
                "code"        => "08.93.0",
                "name"        => "08.93.0 - Estrazione di sale",
            ],
            [
                "parent_code" => "08.93.0",
                "code"        => "08.93.00",
                "name"        => "08.93.00 - Estrazione di sale",
            ],
            [
                "parent_code" => "08.9",
                "code"        => "08.99",
                "name"        => "08.99 - Estrazione di altri minerali da cave e miniere n.c.a.",
            ],
            [
                "parent_code" => "08.99",
                "code"        => "08.99.0",
                "name"        => "08.99.0 - Estrazione di altri minerali n.c.a.",
            ],
            [
                "parent_code" => "08.99.0",
                "code"        => "08.99.01",
                "name"        => "08.99.01 - Estrazione di asfalto e bitume naturale",
            ],
            [
                "parent_code" => "08.99.0",
                "code"        => "08.99.09",
                "name"        => "08.99.09 - Estrazione di pomice e di altri minerali n.c.a.",
            ],
            [
                "parent_code" => "B",
                "code"        => "09",
                "name"        => "09 - ATTIVITÀ DEI SERVIZI DI SUPPORTO ALL'ESTRAZIONE",
            ],
            [
                "parent_code" => "09",
                "code"        => "09.1",
                "name"        => "09.1 - ATTIVITÀ DI SUPPORTO ALL'ESTRAZIONE DI PETROLIO E DI GAS NATURALE",
            ],
            [
                "parent_code" => "09.1",
                "code"        => "09.10",
                "name"        => "09.10 - Attività di supporto all'estrazione di petrolio e di gas naturale",
            ],
            [
                "parent_code" => "09.10",
                "code"        => "09.10.0",
                "name"        => "09.10.0 - Attività di supporto all'estrazione di petrolio e di gas naturale",
            ],
            [
                "parent_code" => "09.10.0",
                "code"        => "09.10.00",
                "name"        => "09.10.00 - Attività di supporto all'estrazione di petrolio e di gas naturale",
            ],
            [
                "parent_code" => "09",
                "code"        => "09.9",
                "name"        => "09.9 - ATTIVITÀ DI SUPPORTO PER L'ESTRAZIONE DA CAVE E MINIERE DI ALTRI MINERALI",
            ],
            [
                "parent_code" => "09.9",
                "code"        => "09.90",
                "name"        => "09.90 - Attività di supporto per l'estrazione da cave e miniere di altri minerali",
            ],
            [
                "parent_code" => "09.90",
                "code"        => "09.90.0",
                "name"        => "09.90.0 - Attività di supporto per l'estrazione da cave e miniere di altri minerali",
            ],
            [
                "parent_code" => "09.90.0",
                "code"        => "09.90.01",
                "name"        => "09.90.01 - Attività di supporto all'estrazione di pietre ornamentali, da costruzione, da gesso, di anidrite, per calce e cementi, di dolomite, di ardesia, di ghiaia e sabbia, di argilla, di caolino, di pomice",
            ],
            [
                "parent_code" => "09.90.0",
                "code"        => "09.90.09",
                "name"        => "09.90.09 - Attività di supporto all'estrazione di altri minerali n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "C",
                "name"        => "C - ATTIVITÀ MANIFATTURIERE",
            ],
            [
                "parent_code" => "C",
                "code"        => "10",
                "name"        => "10 - INDUSTRIE ALIMENTARI",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.1",
                "name"        => "10.1 - LAVORAZIONE E CONSERVAZIONE DI CARNE E PRODUZIONE DI PRODOTTI A BASE DI CARNE",
            ],
            [
                "parent_code" => "10.1",
                "code"        => "10.11",
                "name"        => "10.11 - Lavorazione e conservazione di carne (escluso volatili)",
            ],
            [
                "parent_code" => "10.11",
                "code"        => "10.11.0",
                "name"        => "10.11.0 - Produzione di carne non di volatili e di prodotti della macellazione (attività dei mattatoi)",
            ],
            [
                "parent_code" => "10.11.0",
                "code"        => "10.11.00",
                "name"        => "10.11.00 - Produzione di carne non di volatili e di prodotti della macellazione (attività dei mattatoi)",
            ],
            [
                "parent_code" => "10.1",
                "code"        => "10.12",
                "name"        => "10.12 - Lavorazione e conservazione di carne di volatili",
            ],
            [
                "parent_code" => "10.12",
                "code"        => "10.12.0",
                "name"        => "10.12.0 - Produzione di carne di volatili e prodotti della loro macellazione (attività dei mattatoi)",
            ],
            [
                "parent_code" => "10.12.0",
                "code"        => "10.12.00",
                "name"        => "10.12.00 - Produzione di carne di volatili e prodotti della loro macellazione (attività dei mattatoi)",
            ],
            [
                "parent_code" => "10.1",
                "code"        => "10.13",
                "name"        => "10.13 - Produzione di prodotti a base di carne (inclusa la carne di volatili)",
            ],
            [
                "parent_code" => "10.13",
                "code"        => "10.13.0",
                "name"        => "10.13.0 - Produzione di prodotti a base di carne (inclusa la carne di volatili)",
            ],
            [
                "parent_code" => "10.13.0",
                "code"        => "10.13.00",
                "name"        => "10.13.00 - Produzione di prodotti a base di carne (inclusa la carne di volatili)",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.2",
                "name"        => "10.2 - LAVORAZIONE E CONSERVAZIONE DI PESCE, CROSTACEI E MOLLUSCHI",
            ],
            [
                "parent_code" => "10.2",
                "code"        => "10.20",
                "name"        => "10.20 - Lavorazione e conservazione di pesce, crostacei e molluschi",
            ],
            [
                "parent_code" => "10.20",
                "code"        => "10.20.0",
                "name"        => "10.20.0 - Lavorazione e conservazione di pesce, crostacei e molluschi mediante surgelamento, salatura eccetera",
            ],
            [
                "parent_code" => "10.20.0",
                "code"        => "10.20.00",
                "name"        => "10.20.00 - Lavorazione e conservazione di pesce, crostacei e molluschi mediante surgelamento, salatura eccetera",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.3",
                "name"        => "10.3 - LAVORAZIONE E CONSERVAZIONE DI FRUTTA E ORTAGGI",
            ],
            [
                "parent_code" => "10.3",
                "code"        => "10.31",
                "name"        => "10.31 - Lavorazione e conservazione delle patate",
            ],
            [
                "parent_code" => "10.31",
                "code"        => "10.31.0",
                "name"        => "10.31.0 - Lavorazione e conservazione delle patate",
            ],
            [
                "parent_code" => "10.31.0",
                "code"        => "10.31.00",
                "name"        => "10.31.00 - Lavorazione e conservazione delle patate",
            ],
            [
                "parent_code" => "10.3",
                "code"        => "10.32",
                "name"        => "10.32 - Produzione di succhi di frutta e di ortaggi",
            ],
            [
                "parent_code" => "10.32",
                "code"        => "10.32.0",
                "name"        => "10.32.0 - Produzione di succhi di frutta e di ortaggi",
            ],
            [
                "parent_code" => "10.32.0",
                "code"        => "10.32.00",
                "name"        => "10.32.00 - Produzione di succhi di frutta e di ortaggi",
            ],
            [
                "parent_code" => "10.3",
                "code"        => "10.39",
                "name"        => "10.39 - Altra Lavorazione e conservazione di frutta e di ortaggi",
            ],
            [
                "parent_code" => "10.39",
                "code"        => "10.39.0",
                "name"        => "10.39.0 - Lavorazione e conservazione di frutta e di ortaggi (esclusi i succhi di frutta e di ortaggi)",
            ],
            [
                "parent_code" => "10.39.0",
                "code"        => "10.39.00",
                "name"        => "10.39.00 - Lavorazione e conservazione di frutta e di ortaggi (esclusi i succhi di frutta e di ortaggi)",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.4",
                "name"        => "10.4 - PRODUZIONE DI OLI E GRASSI VEGETALI E ANIMALI",
            ],
            [
                "parent_code" => "10.4",
                "code"        => "10.41",
                "name"        => "10.41 - Produzione di oli e grassi",
            ],
            [
                "parent_code" => "10.41",
                "code"        => "10.41.1",
                "name"        => "10.41.1 - Produzione di olio di oliva da olive prevalentemente non di produzione propria",
            ],
            [
                "parent_code" => "10.41.1",
                "code"        => "10.41.10",
                "name"        => "10.41.10 - Produzione di olio di oliva da olive prevalentemente non di produzione propria",
            ],
            [
                "parent_code" => "10.41",
                "code"        => "10.41.2",
                "name"        => "10.41.2 - Produzione di olio raffinato o grezzo da semi oleosi o frutti oleosi prevalentemente non di produzione propria",
            ],
            [
                "parent_code" => "10.41.2",
                "code"        => "10.41.20",
                "name"        => "10.41.20 - Produzione di olio raffinato o grezzo da semi oleosi o frutti oleosi prevalentemente non di produzione propria",
            ],
            [
                "parent_code" => "10.41",
                "code"        => "10.41.3",
                "name"        => "10.41.3 - Produzione di oli e grassi animali grezzi o raffinati",
            ],
            [
                "parent_code" => "10.41.3",
                "code"        => "10.41.30",
                "name"        => "10.41.30 - Produzione di oli e grassi animali grezzi o raffinati",
            ],
            [
                "parent_code" => "10.4",
                "code"        => "10.42",
                "name"        => "10.42 - Produzione di margarina e di grassi commestibili simili",
            ],
            [
                "parent_code" => "10.42",
                "code"        => "10.42.0",
                "name"        => "10.42.0 - Produzione di margarina e di grassi commestibili simili",
            ],
            [
                "parent_code" => "10.42.0",
                "code"        => "10.42.00",
                "name"        => "10.42.00 - Produzione di margarina e di grassi commestibili simili",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.5",
                "name"        => "10.5 - INDUSTRIA LATTIERO-CASEARIA",
            ],
            [
                "parent_code" => "10.5",
                "code"        => "10.51",
                "name"        => "10.51 - Industria lattiero-casearia, trattamento igienico, conservazione del latte",
            ],
            [
                "parent_code" => "10.51",
                "code"        => "10.51.1",
                "name"        => "10.51.1 - Trattamento igienico del latte",
            ],
            [
                "parent_code" => "10.51.1",
                "code"        => "10.51.10",
                "name"        => "10.51.10 - Trattamento igienico del latte",
            ],
            [
                "parent_code" => "10.51",
                "code"        => "10.51.2",
                "name"        => "10.51.2 - Produzione dei derivati del latte",
            ],
            [
                "parent_code" => "10.51.2",
                "code"        => "10.51.20",
                "name"        => "10.51.20 - Produzione dei derivati del latte",
            ],
            [
                "parent_code" => "10.5",
                "code"        => "10.52",
                "name"        => "10.52 - Produzione di gelati",
            ],
            [
                "parent_code" => "10.52",
                "code"        => "10.52.0",
                "name"        => "10.52.0 - Produzione di gelati senza vendita diretta al pubblico",
            ],
            [
                "parent_code" => "10.52.0",
                "code"        => "10.52.00",
                "name"        => "10.52.00 - Produzione di gelati senza vendita diretta al pubblico",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.6",
                "name"        => "10.6 - LAVORAZIONE DELLE GRANAGLIE, PRODUZIONE DI AMIDI E DI PRODOTTI AMIDACEI",
            ],
            [
                "parent_code" => "10.6",
                "code"        => "10.61",
                "name"        => "10.61 - Lavorazione delle granaglie",
            ],
            [
                "parent_code" => "10.61",
                "code"        => "10.61.1",
                "name"        => "10.61.1 - Molitura del frumento",
            ],
            [
                "parent_code" => "10.61.1",
                "code"        => "10.61.10",
                "name"        => "10.61.10 - Molitura del frumento",
            ],
            [
                "parent_code" => "10.61",
                "code"        => "10.61.2",
                "name"        => "10.61.2 - Molitura di altri cereali",
            ],
            [
                "parent_code" => "10.61.2",
                "code"        => "10.61.20",
                "name"        => "10.61.20 - Molitura di altri cereali",
            ],
            [
                "parent_code" => "10.61",
                "code"        => "10.61.3",
                "name"        => "10.61.3 - Lavorazione del riso",
            ],
            [
                "parent_code" => "10.61.3",
                "code"        => "10.61.30",
                "name"        => "10.61.30 - Lavorazione del riso",
            ],
            [
                "parent_code" => "10.61",
                "code"        => "10.61.4",
                "name"        => "10.61.4 - Altre lavorazioni di semi e granaglie",
            ],
            [
                "parent_code" => "10.61.4",
                "code"        => "10.61.40",
                "name"        => "10.61.40 - Altre lavorazioni di semi e granaglie",
            ],
            [
                "parent_code" => "10.6",
                "code"        => "10.62",
                "name"        => "10.62 - Produzione di amidi e di prodotti amidacei",
            ],
            [
                "parent_code" => "10.62",
                "code"        => "10.62.0",
                "name"        => "10.62.0 - Produzione di amidi e di prodotti amidacei (inclusa produzione di olio di mais)",
            ],
            [
                "parent_code" => "10.62.0",
                "code"        => "10.62.00",
                "name"        => "10.62.00 - Produzione di amidi e di prodotti amidacei (inclusa produzione di olio di mais)",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.7",
                "name"        => "10.7 - PRODUZIONE DI PRODOTTI DA FORNO E FARINACEI",
            ],
            [
                "parent_code" => "10.7",
                "code"        => "10.71",
                "name"        => "10.71 - Produzione di pane; prodotti di pasticceria freschi",
            ],
            [
                "parent_code" => "10.71",
                "code"        => "10.71.1",
                "name"        => "10.71.1 - Produzione di prodotti di panetteria freschi",
            ],
            [
                "parent_code" => "10.71.1",
                "code"        => "10.71.10",
                "name"        => "10.71.10 - Produzione di prodotti di panetteria freschi",
            ],
            [
                "parent_code" => "10.71",
                "code"        => "10.71.2",
                "name"        => "10.71.2 - Produzione di pasticceria fresca",
            ],
            [
                "parent_code" => "10.71.2",
                "code"        => "10.71.20",
                "name"        => "10.71.20 - Produzione di pasticceria fresca",
            ],
            [
                "parent_code" => "10.7",
                "code"        => "10.72",
                "name"        => "10.72 - Produzione di fette biscottate e di biscotti; produzione di prodotti di pasticceria conservati",
            ],
            [
                "parent_code" => "10.72",
                "code"        => "10.72.0",
                "name"        => "10.72.0 - Produzione di fette biscottate, biscotti; prodotti di pasticceria conservati",
            ],
            [
                "parent_code" => "10.72.0",
                "code"        => "10.72.00",
                "name"        => "10.72.00 - Produzione di fette biscottate, biscotti; prodotti di pasticceria conservati",
            ],
            [
                "parent_code" => "10.7",
                "code"        => "10.73",
                "name"        => "10.73 - Produzione di paste alimentari, di cuscus e di prodotti farinacei simili",
            ],
            [
                "parent_code" => "10.73",
                "code"        => "10.73.0",
                "name"        => "10.73.0 - Produzione di paste alimentari, di cuscus e di prodotti farinacei simili",
            ],
            [
                "parent_code" => "10.73.0",
                "code"        => "10.73.00",
                "name"        => "10.73.00 - Produzione di paste alimentari, di cuscus e di prodotti farinacei simili",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.8",
                "name"        => "10.8 - PRODUZIONE DI ALTRI PRODOTTI ALIMENTARI",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.81",
                "name"        => "10.81 - Produzione di zucchero",
            ],
            [
                "parent_code" => "10.81",
                "code"        => "10.81.0",
                "name"        => "10.81.0 - Produzione di zucchero",
            ],
            [
                "parent_code" => "10.81.0",
                "code"        => "10.81.00",
                "name"        => "10.81.00 - Produzione di zucchero",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.82",
                "name"        => "10.82 - Produzione di cacao, cioccolato, caramelle e confetterie",
            ],
            [
                "parent_code" => "10.82",
                "code"        => "10.82.0",
                "name"        => "10.82.0 - Produzione di cacao in polvere, cioccolato, caramelle e confetterie",
            ],
            [
                "parent_code" => "10.82.0",
                "code"        => "10.82.00",
                "name"        => "10.82.00 - Produzione di cacao in polvere, cioccolato, caramelle e confetterie",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.83",
                "name"        => "10.83 - Lavorazione del tè e del caffè",
            ],
            [
                "parent_code" => "10.83",
                "code"        => "10.83.0",
                "name"        => "10.83.0 - Lavorazione del tè e del caffè",
            ],
            [
                "parent_code" => "10.83.0",
                "code"        => "10.83.01",
                "name"        => "10.83.01 - Lavorazione del caffè",
            ],
            [
                "parent_code" => "10.83.0",
                "code"        => "10.83.02",
                "name"        => "10.83.02 - Lavorazione del tè e di altri preparati per infusi",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.84",
                "name"        => "10.84 - Produzione di condimenti e spezie",
            ],
            [
                "parent_code" => "10.84",
                "code"        => "10.84.0",
                "name"        => "10.84.0 - Produzione di condimenti e spezie",
            ],
            [
                "parent_code" => "10.84.0",
                "code"        => "10.84.00",
                "name"        => "10.84.00 - Produzione di condimenti e spezie",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.85",
                "name"        => "10.85 - Produzione di pasti e piatti preparati",
            ],
            [
                "parent_code" => "10.85",
                "code"        => "10.85.0",
                "name"        => "10.85.0 - Produzione di pasti e piatti pronti (preparati, conditi, cucinati e confezionati)",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.01",
                "name"        => "10.85.01 - Produzione di piatti pronti a base di carne e pollame",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.02",
                "name"        => "10.85.02 - Produzione di piatti pronti a base di pesce, inclusi fish and chips",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.03",
                "name"        => "10.85.03 - Produzione di piatti pronti a base di ortaggi",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.04",
                "name"        => "10.85.04 - Produzione di pizza confezionata",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.05",
                "name"        => "10.85.05 - Produzione di piatti pronti a base di pasta",
            ],
            [
                "parent_code" => "10.85.0",
                "code"        => "10.85.09",
                "name"        => "10.85.09 - Produzione di pasti e piatti pronti di altri prodotti alimentari",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.86",
                "name"        => "10.86 - Produzione di preparati omogeneizzati e di alimenti dietetici",
            ],
            [
                "parent_code" => "10.86",
                "code"        => "10.86.0",
                "name"        => "10.86.0 - Produzione di preparati omogeneizzati e di alimenti dietetici",
            ],
            [
                "parent_code" => "10.86.0",
                "code"        => "10.86.00",
                "name"        => "10.86.00 - Produzione di preparati omogeneizzati e di alimenti dietetici",
            ],
            [
                "parent_code" => "10.8",
                "code"        => "10.89",
                "name"        => "10.89 - Produzione di prodotti alimentari n.c.a.",
            ],
            [
                "parent_code" => "10.89",
                "code"        => "10.89.0",
                "name"        => "10.89.0 - Produzione di prodotti alimentari n.c.a.",
            ],
            [
                "parent_code" => "10.89.0",
                "code"        => "10.89.01",
                "name"        => "10.89.01 - Produzione di estratti e succhi di carne",
            ],
            [
                "parent_code" => "10.89.0",
                "code"        => "10.89.09",
                "name"        => "10.89.09 - Produzione di altri prodotti alimentari n.c.a.",
            ],
            [
                "parent_code" => "10",
                "code"        => "10.9",
                "name"        => "10.9 - PRODUZIONE DI PRODOTTI PER L'ALIMENTAZIONE DEGLI ANIMALI",
            ],
            [
                "parent_code" => "10.9",
                "code"        => "10.91",
                "name"        => "10.91 - Produzione di mangimi per l'alimentazione degli animali da allevamento",
            ],
            [
                "parent_code" => "10.91",
                "code"        => "10.91.0",
                "name"        => "10.91.0 - Produzione di mangimi per l'alimentazione degli animali da allevamento",
            ],
            [
                "parent_code" => "10.91.0",
                "code"        => "10.91.00",
                "name"        => "10.91.00 - Produzione di mangimi per l'alimentazione degli animali da allevamento",
            ],
            [
                "parent_code" => "10.9",
                "code"        => "10.92",
                "name"        => "10.92 - Produzione di prodotti per l'alimentazione degli animali da compagnia",
            ],
            [
                "parent_code" => "10.92",
                "code"        => "10.92.0",
                "name"        => "10.92.0 - Produzione di prodotti per l'alimentazione degli animali da compagnia",
            ],
            [
                "parent_code" => "10.92.0",
                "code"        => "10.92.00",
                "name"        => "10.92.00 - Produzione di prodotti per l'alimentazione degli animali da compagnia",
            ],
            [
                "parent_code" => "C",
                "code"        => "11",
                "name"        => "11 - INDUSTRIA DELLE BEVANDE",
            ],
            [
                "parent_code" => "11",
                "code"        => "11.0",
                "name"        => "11.0 - INDUSTRIA DELLE BEVANDE",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.01",
                "name"        => "11.01 - Distillazione, rettifica e miscelatura degli alcolici",
            ],
            [
                "parent_code" => "11.01",
                "code"        => "11.01.0",
                "name"        => "11.01.0 - Distillazione, rettifica e miscelatura degli alcolici",
            ],
            [
                "parent_code" => "11.01.0",
                "code"        => "11.01.00",
                "name"        => "11.01.00 - Distillazione, rettifica e miscelatura degli alcolici",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.02",
                "name"        => "11.02 - Produzione di vini da uve",
            ],
            [
                "parent_code" => "11.02",
                "code"        => "11.02.1",
                "name"        => "11.02.1 - Produzione di vini da tavola e v.q.p.r.d.",
            ],
            [
                "parent_code" => "11.02.1",
                "code"        => "11.02.10",
                "name"        => "11.02.10 - Produzione di vini da tavola e v.q.p.r.d.",
            ],
            [
                "parent_code" => "11.02",
                "code"        => "11.02.2",
                "name"        => "11.02.2 - Produzione di vino spumante e altri vini speciali",
            ],
            [
                "parent_code" => "11.02.2",
                "code"        => "11.02.20",
                "name"        => "11.02.20 - Produzione di vino spumante e altri vini speciali",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.03",
                "name"        => "11.03 - Produzione di sidro e di altri vini a base di frutta",
            ],
            [
                "parent_code" => "11.03",
                "code"        => "11.03.0",
                "name"        => "11.03.0 - Produzione di sidro e di altri vini a base di frutta",
            ],
            [
                "parent_code" => "11.03.0",
                "code"        => "11.03.00",
                "name"        => "11.03.00 - Produzione di sidro e di altri vini a base di frutta",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.04",
                "name"        => "11.04 - Produzione di altre bevande fermentate non distillate",
            ],
            [
                "parent_code" => "11.04",
                "code"        => "11.04.0",
                "name"        => "11.04.0 - Produzione di altre bevande fermentate non distillate",
            ],
            [
                "parent_code" => "11.04.0",
                "code"        => "11.04.00",
                "name"        => "11.04.00 - Produzione di altre bevande fermentate non distillate",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.05",
                "name"        => "11.05 - Produzione di birra",
            ],
            [
                "parent_code" => "11.05",
                "code"        => "11.05.0",
                "name"        => "11.05.0 - Produzione di birra",
            ],
            [
                "parent_code" => "11.05.0",
                "code"        => "11.05.00",
                "name"        => "11.05.00 - Produzione di birra",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.06",
                "name"        => "11.06 - Produzione di malto",
            ],
            [
                "parent_code" => "11.06",
                "code"        => "11.06.0",
                "name"        => "11.06.0 - Produzione di malto",
            ],
            [
                "parent_code" => "11.06.0",
                "code"        => "11.06.00",
                "name"        => "11.06.00 - Produzione di malto",
            ],
            [
                "parent_code" => "11.0",
                "code"        => "11.07",
                "name"        => "11.07 - Industria delle bibite analcoliche, delle acque minerali e di altre acque in bottiglia",
            ],
            [
                "parent_code" => "11.07",
                "code"        => "11.07.0",
                "name"        => "11.07.0 - Industria delle bibite analcoliche, delle acque minerali e di altre acque in bottiglia",
            ],
            [
                "parent_code" => "11.07.0",
                "code"        => "11.07.00",
                "name"        => "11.07.00 - Industria delle bibite analcoliche, delle acque minerali e di altre acque in bottiglia",
            ],
            [
                "parent_code" => "C",
                "code"        => "12",
                "name"        => "12 - INDUSTRIA DEL TABACCO",
            ],
            [
                "parent_code" => "12",
                "code"        => "12.0",
                "name"        => "12.0 - INDUSTRIA DEL TABACCO",
            ],
            [
                "parent_code" => "12.0",
                "code"        => "12.00",
                "name"        => "12.00 - Industria del tabacco",
            ],
            [
                "parent_code" => "12.00",
                "code"        => "12.00.0",
                "name"        => "12.00.0 - Industria del tabacco",
            ],
            [
                "parent_code" => "12.00.0",
                "code"        => "12.00.00",
                "name"        => "12.00.00 - Industria del tabacco",
            ],
            [
                "parent_code" => "C",
                "code"        => "13",
                "name"        => "13 - INDUSTRIE TESSILI",
            ],
            [
                "parent_code" => "13",
                "code"        => "13.1",
                "name"        => "13.1 - PREPARAZIONE E FILATURA DI FIBRE TESSILI",
            ],
            [
                "parent_code" => "13.1",
                "code"        => "13.10",
                "name"        => "13.10 - Preparazione e filatura di fibre tessili",
            ],
            [
                "parent_code" => "13.10",
                "code"        => "13.10.0",
                "name"        => "13.10.0 - Preparazione e filatura di fibre tessili",
            ],
            [
                "parent_code" => "13.10.0",
                "code"        => "13.10.00",
                "name"        => "13.10.00 - Preparazione e filatura di fibre tessili",
            ],
            [
                "parent_code" => "13",
                "code"        => "13.2",
                "name"        => "13.2 - TESSITURA",
            ],
            [
                "parent_code" => "13.2",
                "code"        => "13.20",
                "name"        => "13.20 - Tessitura",
            ],
            [
                "parent_code" => "13.20",
                "code"        => "13.20.0",
                "name"        => "13.20.0 - Tessitura",
            ],
            [
                "parent_code" => "13.20.0",
                "code"        => "13.20.00",
                "name"        => "13.20.00 - Tessitura",
            ],
            [
                "parent_code" => "13",
                "code"        => "13.3",
                "name"        => "13.3 - FINISSAGGIO DEI TESSILI",
            ],
            [
                "parent_code" => "13.3",
                "code"        => "13.30",
                "name"        => "13.30 - Finissaggio dei tessili",
            ],
            [
                "parent_code" => "13.30",
                "code"        => "13.30.0",
                "name"        => "13.30.0 - Finissaggio dei tessili, degli articoli di vestiario e attività similari",
            ],
            [
                "parent_code" => "13.30.0",
                "code"        => "13.30.00",
                "name"        => "13.30.00 - Finissaggio dei tessili, degli articoli di vestiario e attività similari",
            ],
            [
                "parent_code" => "13",
                "code"        => "13.9",
                "name"        => "13.9 - ALTRE INDUSTRIE TESSILI",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.91",
                "name"        => "13.91 - Fabbricazione di tessuti a maglia",
            ],
            [
                "parent_code" => "13.91",
                "code"        => "13.91.0",
                "name"        => "13.91.0 - Fabbricazione di tessuti a maglia",
            ],
            [
                "parent_code" => "13.91.0",
                "code"        => "13.91.00",
                "name"        => "13.91.00 - Fabbricazione di tessuti a maglia",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.92",
                "name"        => "13.92 - Confezionamento di articoli tessili (esclusi gli articoli di abbigliamento)",
            ],
            [
                "parent_code" => "13.92",
                "code"        => "13.92.1",
                "name"        => "13.92.1 - Confezionamento di biancheria da letto, da tavola e per l'arredamento",
            ],
            [
                "parent_code" => "13.92.1",
                "code"        => "13.92.10",
                "name"        => "13.92.10 - Confezionamento di biancheria da letto, da tavola e per l'arredamento",
            ],
            [
                "parent_code" => "13.92",
                "code"        => "13.92.2",
                "name"        => "13.92.2 - Fabbricazione di articoli in materie tessili n.c.a.",
            ],
            [
                "parent_code" => "13.92.2",
                "code"        => "13.92.20",
                "name"        => "13.92.20 - Fabbricazione di articoli in materie tessili n.c.a.",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.93",
                "name"        => "13.93 - Fabbricazione di tappeti e moquette",
            ],
            [
                "parent_code" => "13.93",
                "code"        => "13.93.0",
                "name"        => "13.93.0 - Fabbricazione di tappeti e moquette",
            ],
            [
                "parent_code" => "13.93.0",
                "code"        => "13.93.00",
                "name"        => "13.93.00 - Fabbricazione di tappeti e moquette",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.94",
                "name"        => "13.94 - Fabbricazione di spago, corde, funi e reti",
            ],
            [
                "parent_code" => "13.94",
                "code"        => "13.94.0",
                "name"        => "13.94.0 - Fabbricazione di spago, corde, funi e reti",
            ],
            [
                "parent_code" => "13.94.0",
                "code"        => "13.94.00",
                "name"        => "13.94.00 - Fabbricazione di spago, corde, funi e reti",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.95",
                "name"        => "13.95 - Fabbricazione di tessuti non tessuti e di articoli in tali materie (esclusi gli articoli di abbigliamento)",
            ],
            [
                "parent_code" => "13.95",
                "code"        => "13.95.0",
                "name"        => "13.95.0 - Fabbricazione di tessuti non tessuti e di articoli in tali materie (esclusi gli articoli di abbigliamento)",
            ],
            [
                "parent_code" => "13.95.0",
                "code"        => "13.95.00",
                "name"        => "13.95.00 - Fabbricazione di tessuti non tessuti e di articoli in tali materie (esclusi gli articoli di abbigliamento)",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.96",
                "name"        => "13.96 - Fabbricazione di articoli tessili tecnici ed industriali",
            ],
            [
                "parent_code" => "13.96",
                "code"        => "13.96.1",
                "name"        => "13.96.1 - Fabbricazione di nastri, etichette e passamanerie di fibre tessili",
            ],
            [
                "parent_code" => "13.96.1",
                "code"        => "13.96.10",
                "name"        => "13.96.10 - Fabbricazione di nastri, etichette e passamanerie di fibre tessili",
            ],
            [
                "parent_code" => "13.96",
                "code"        => "13.96.2",
                "name"        => "13.96.2 - Fabbricazione di altri articoli tessili tecnici ed industriali",
            ],
            [
                "parent_code" => "13.96.2",
                "code"        => "13.96.20",
                "name"        => "13.96.20 - Fabbricazione di altri articoli tessili tecnici ed industriali",
            ],
            [
                "parent_code" => "13.9",
                "code"        => "13.99",
                "name"        => "13.99 - Fabbricazione di altri prodotti tessili n.c.a.",
            ],
            [
                "parent_code" => "13.99",
                "code"        => "13.99.1",
                "name"        => "13.99.1 - Fabbricazione di ricami",
            ],
            [
                "parent_code" => "13.99.1",
                "code"        => "13.99.10",
                "name"        => "13.99.10 - Fabbricazione di ricami",
            ],
            [
                "parent_code" => "13.99",
                "code"        => "13.99.2",
                "name"        => "13.99.2 - Fabbricazione di tulle, pizzi e merletti",
            ],
            [
                "parent_code" => "13.99.2",
                "code"        => "13.99.20",
                "name"        => "13.99.20 - Fabbricazione di tulle, pizzi e merletti",
            ],
            [
                "parent_code" => "13.99",
                "code"        => "13.99.9",
                "name"        => "13.99.9 - Fabbricazione di feltro e articoli tessili diversi",
            ],
            [
                "parent_code" => "13.99.9",
                "code"        => "13.99.90",
                "name"        => "13.99.90 - Fabbricazione di feltro e articoli tessili diversi",
            ],
            [
                "parent_code" => "C",
                "code"        => "14",
                "name"        => "14 - CONFEZIONE DI ARTICOLI DI ABBIGLIAMENTO; CONFEZIONE DI ARTICOLI IN PELLE E PELLICCIA",
            ],
            [
                "parent_code" => "14",
                "code"        => "14.1",
                "name"        => "14.1 - CONFEZIONE DI ARTICOLI DI ABBIGLIAMENTO (ESCLUSO ABBIGLIAMENTO IN PELLICCIA)",
            ],
            [
                "parent_code" => "14.1",
                "code"        => "14.11",
                "name"        => "14.11 - Confezione di abbigliamento in pelle",
            ],
            [
                "parent_code" => "14.11",
                "code"        => "14.11.0",
                "name"        => "14.11.0 - Confezione di abbigliamento in pelle e similpelle",
            ],
            [
                "parent_code" => "14.11.0",
                "code"        => "14.11.00",
                "name"        => "14.11.00 - Confezione di abbigliamento in pelle e similpelle",
            ],
            [
                "parent_code" => "14.1",
                "code"        => "14.12",
                "name"        => "14.12 - Confezione di indumenti da lavoro",
            ],
            [
                "parent_code" => "14.12",
                "code"        => "14.12.0",
                "name"        => "14.12.0 - Confezione di camici, divise ed altri indumenti da lavoro",
            ],
            [
                "parent_code" => "14.12.0",
                "code"        => "14.12.00",
                "name"        => "14.12.00 - Confezione di camici, divise ed altri indumenti da lavoro",
            ],
            [
                "parent_code" => "14.1",
                "code"        => "14.13",
                "name"        => "14.13 - Confezione di altro abbigliamento esterno",
            ],
            [
                "parent_code" => "14.13",
                "code"        => "14.13.1",
                "name"        => "14.13.1 - Confezione in serie di abbigliamento esterno",
            ],
            [
                "parent_code" => "14.13.1",
                "code"        => "14.13.10",
                "name"        => "14.13.10 - Confezione in serie di abbigliamento esterno",
            ],
            [
                "parent_code" => "14.13",
                "code"        => "14.13.2",
                "name"        => "14.13.2 - Sartoria e confezione su misura di abbigliamento esterno",
            ],
            [
                "parent_code" => "14.13.2",
                "code"        => "14.13.20",
                "name"        => "14.13.20 - Sartoria e confezione su misura di abbigliamento esterno",
            ],
            [
                "parent_code" => "14.1",
                "code"        => "14.14",
                "name"        => "14.14 - Confezione di biancheria intima",
            ],
            [
                "parent_code" => "14.14",
                "code"        => "14.14.0",
                "name"        => "14.14.0 - Confezione di camicie, T-shirt, corsetteria e altra biancheria intima",
            ],
            [
                "parent_code" => "14.14.0",
                "code"        => "14.14.00",
                "name"        => "14.14.00 - Confezione di camicie, T-shirt, corsetteria e altra biancheria intima",
            ],
            [
                "parent_code" => "14.1",
                "code"        => "14.19",
                "name"        => "14.19 - Confezione di altri articoli di abbigliamento ed accessori",
            ],
            [
                "parent_code" => "14.19",
                "code"        => "14.19.1",
                "name"        => "14.19.1 - Confezioni varie e accessori per l'abbigliamento",
            ],
            [
                "parent_code" => "14.19.1",
                "code"        => "14.19.10",
                "name"        => "14.19.10 - Confezioni varie e accessori per l'abbigliamento",
            ],
            [
                "parent_code" => "14.19",
                "code"        => "14.19.2",
                "name"        => "14.19.2 - Confezioni di abbigliamento sportivo o indumenti particolari",
            ],
            [
                "parent_code" => "14.19.2",
                "code"        => "14.19.21",
                "name"        => "14.19.21 - Fabbricazione di calzature realizzate in materiale tessile senza suole applicate",
            ],
            [
                "parent_code" => "14.19.2",
                "code"        => "14.19.29",
                "name"        => "14.19.29 - Confezioni di abbigliamento sportivo o di altri indumenti particolari",
            ],
            [
                "parent_code" => "14",
                "code"        => "14.2",
                "name"        => "14.2 - CONFEZIONE DI ARTICOLI IN PELLICCIA",
            ],
            [
                "parent_code" => "14.2",
                "code"        => "14.20",
                "name"        => "14.20 - Confezione di articoli in pelliccia",
            ],
            [
                "parent_code" => "14.20",
                "code"        => "14.20.0",
                "name"        => "14.20.0 - Confezione di articoli in pelliccia",
            ],
            [
                "parent_code" => "14.20.0",
                "code"        => "14.20.00",
                "name"        => "14.20.00 - Confezione di articoli in pelliccia",
            ],
            [
                "parent_code" => "14",
                "code"        => "14.3",
                "name"        => "14.3 - FABBRICAZIONE DI ARTICOLI DI MAGLIERIA",
            ],
            [
                "parent_code" => "14.3",
                "code"        => "14.31",
                "name"        => "14.31 - Fabbricazione di articoli di calzetteria in maglia",
            ],
            [
                "parent_code" => "14.31",
                "code"        => "14.31.0",
                "name"        => "14.31.0 - Fabbricazione di articoli di calzetteria in maglia",
            ],
            [
                "parent_code" => "14.31.0",
                "code"        => "14.31.00",
                "name"        => "14.31.00 - Fabbricazione di articoli di calzetteria in maglia",
            ],
            [
                "parent_code" => "14.3",
                "code"        => "14.39",
                "name"        => "14.39 - Fabbricazione di altri articoli di maglieria",
            ],
            [
                "parent_code" => "14.39",
                "code"        => "14.39.0",
                "name"        => "14.39.0 - Fabbricazione di pullover, cardigan ed altri articoli simili a maglia",
            ],
            [
                "parent_code" => "14.39.0",
                "code"        => "14.39.00",
                "name"        => "14.39.00 - Fabbricazione di pullover, cardigan ed altri articoli simili a maglia",
            ],
            [
                "parent_code" => "C",
                "code"        => "15",
                "name"        => "15 - FABBRICAZIONE DI ARTICOLI IN PELLE E SIMILI",
            ],
            [
                "parent_code" => "15",
                "code"        => "15.1",
                "name"        => "15.1 - PREPARAZIONE E CONCIA DEL CUOIO; FABBRICAZIONE DI ARTICOLI DA VIAGGIO, BORSE, PELLETTERIA E SELLERIA; PREPARAZIONE E TINTURA DI PELLICCE",
            ],
            [
                "parent_code" => "15.1",
                "code"        => "15.11",
                "name"        => "15.11 - Preparazione e concia del cuoio; preparazione e tintura di pellicce",
            ],
            [
                "parent_code" => "15.11",
                "code"        => "15.11.0",
                "name"        => "15.11.0 - Preparazione e concia del cuoio e pelle; preparazione e tintura di pellicce",
            ],
            [
                "parent_code" => "15.11.0",
                "code"        => "15.11.00",
                "name"        => "15.11.00 - Preparazione e concia del cuoio e pelle; preparazione e tintura di pellicce",
            ],
            [
                "parent_code" => "15.1",
                "code"        => "15.12",
                "name"        => "15.12 - Fabbricazione di articoli da viaggio, borse e simili, pelletteria e selleria",
            ],
            [
                "parent_code" => "15.12",
                "code"        => "15.12.0",
                "name"        => "15.12.0 - Fabbricazione di articoli da viaggio, borse e simili, pelletteria e selleria",
            ],
            [
                "parent_code" => "15.12.0",
                "code"        => "15.12.01",
                "name"        => "15.12.01 - Fabbricazione di frustini e scudisci per equitazione",
            ],
            [
                "parent_code" => "15.12.0",
                "code"        => "15.12.09",
                "name"        => "15.12.09 - Fabbricazione di altri articoli da viaggio, borse e simili, pelletteria e selleria",
            ],
            [
                "parent_code" => "15",
                "code"        => "15.2",
                "name"        => "15.2 - FABBRICAZIONE DI CALZATURE",
            ],
            [
                "parent_code" => "15.2",
                "code"        => "15.20",
                "name"        => "15.20 - Fabbricazione di calzature",
            ],
            [
                "parent_code" => "15.20",
                "code"        => "15.20.1",
                "name"        => "15.20.1 - Fabbricazione di calzature",
            ],
            [
                "parent_code" => "15.20.1",
                "code"        => "15.20.10",
                "name"        => "15.20.10 - Fabbricazione di calzature",
            ],
            [
                "parent_code" => "15.20",
                "code"        => "15.20.2",
                "name"        => "15.20.2 - Fabbricazione di parti in cuoio per calzature",
            ],
            [
                "parent_code" => "15.20.2",
                "code"        => "15.20.20",
                "name"        => "15.20.20 - Fabbricazione di parti in cuoio per calzature",
            ],
            [
                "parent_code" => "C",
                "code"        => "16",
                "name"        => "16 - INDUSTRIA DEL LEGNO E DEI PRODOTTI IN LEGNO E SUGHERO (ESCLUSI I MOBILI); FABBRICAZIONE DI ARTICOLI IN PAGLIA E MATERIALI DA INTRECCIO",
            ],
            [
                "parent_code" => "16",
                "code"        => "16.1",
                "name"        => "16.1 - TAGLIO E PIALLATURA DEL LEGNO",
            ],
            [
                "parent_code" => "16.1",
                "code"        => "16.10",
                "name"        => "16.10 - Taglio e piallatura del legno",
            ],
            [
                "parent_code" => "16.10",
                "code"        => "16.10.0",
                "name"        => "16.10.0 - Taglio e piallatura del legno",
            ],
            [
                "parent_code" => "16.10.0",
                "code"        => "16.10.00",
                "name"        => "16.10.00 - Taglio e piallatura del legno",
            ],
            [
                "parent_code" => "16",
                "code"        => "16.2",
                "name"        => "16.2 - FABBRICAZIONE DI PRODOTTI IN LEGNO, SUGHERO, PAGLIA E MATERIALI DA INTRECCIO",
            ],
            [
                "parent_code" => "16.2",
                "code"        => "16.21",
                "name"        => "16.21 - Fabbricazione di fogli da impiallacciatura e di pannelli a base di legno",
            ],
            [
                "parent_code" => "16.21",
                "code"        => "16.21.0",
                "name"        => "16.21.0 - Fabbricazione di fogli da impiallacciatura e di pannelli a base di legno",
            ],
            [
                "parent_code" => "16.21.0",
                "code"        => "16.21.00",
                "name"        => "16.21.00 - Fabbricazione di fogli da impiallacciatura e di pannelli a base di legno",
            ],
            [
                "parent_code" => "16.2",
                "code"        => "16.22",
                "name"        => "16.22 - Fabbricazione di pavimenti in parquet assemblato",
            ],
            [
                "parent_code" => "16.22",
                "code"        => "16.22.0",
                "name"        => "16.22.0 - Fabbricazione di pavimenti in parquet assemblato",
            ],
            [
                "parent_code" => "16.22.0",
                "code"        => "16.22.00",
                "name"        => "16.22.00 - Fabbricazione di pavimenti in parquet assemblato",
            ],
            [
                "parent_code" => "16.2",
                "code"        => "16.23",
                "name"        => "16.23 - Fabbricazione di altri prodotti di carpenteria in legno e falegnameria per l'edilizia",
            ],
            [
                "parent_code" => "16.23",
                "code"        => "16.23.1",
                "name"        => "16.23.1 - Fabbricazione di porte e finestre in legno (escluse porte blindate)",
            ],
            [
                "parent_code" => "16.23.1",
                "code"        => "16.23.10",
                "name"        => "16.23.10 - Fabbricazione di porte e finestre in legno (escluse porte blindate)",
            ],
            [
                "parent_code" => "16.23",
                "code"        => "16.23.2",
                "name"        => "16.23.2 - Fabbricazione di stand, strutture simili per convegni e fiere e altri elementi in legno e di falegnameria per l'edilizia",
            ],
            [
                "parent_code" => "16.23.2",
                "code"        => "16.23.21",
                "name"        => "16.23.21 - Fabbricazione di stand e altre strutture simili per convegni e fiere prevalentemente in legno",
            ],
            [
                "parent_code" => "16.23.2",
                "code"        => "16.23.22",
                "name"        => "16.23.22 - Fabbricazione di altri elementi in legno e di falegnameria per l'edilizia (esclusi stand e strutture simili per convegni e fiere)",
            ],
            [
                "parent_code" => "16.2",
                "code"        => "16.24",
                "name"        => "16.24 - Fabbricazione di imballaggi in legno",
            ],
            [
                "parent_code" => "16.24",
                "code"        => "16.24.0",
                "name"        => "16.24.0 - Fabbricazione di imballaggi in legno",
            ],
            [
                "parent_code" => "16.24.0",
                "code"        => "16.24.00",
                "name"        => "16.24.00 - Fabbricazione di imballaggi in legno",
            ],
            [
                "parent_code" => "16.2",
                "code"        => "16.29",
                "name"        => "16.29 - Fabbricazione di altri prodotti in legno, sughero, paglia e materiali da intreccio",
            ],
            [
                "parent_code" => "16.29",
                "code"        => "16.29.1",
                "name"        => "16.29.1 - Fabbricazione di prodotti vari in legno (esclusi i mobili)",
            ],
            [
                "parent_code" => "16.29.1",
                "code"        => "16.29.11",
                "name"        => "16.29.11 - Fabbricazione di parti in legno per calzature",
            ],
            [
                "parent_code" => "16.29.1",
                "code"        => "16.29.12",
                "name"        => "16.29.12 - Fabbricazione di manici di ombrelli, bastoni e simili",
            ],
            [
                "parent_code" => "16.29.1",
                "code"        => "16.29.19",
                "name"        => "16.29.19 - Fabbricazione di altri prodotti vari in legno (esclusi i mobili)",
            ],
            [
                "parent_code" => "16.29",
                "code"        => "16.29.2",
                "name"        => "16.29.2 - Fabbricazione dei prodotti della lavorazione del sughero",
            ],
            [
                "parent_code" => "16.29.2",
                "code"        => "16.29.20",
                "name"        => "16.29.20 - Fabbricazione dei prodotti della lavorazione del sughero",
            ],
            [
                "parent_code" => "16.29",
                "code"        => "16.29.3",
                "name"        => "16.29.3 - Fabbricazione di articoli in paglia e materiali da intreccio",
            ],
            [
                "parent_code" => "16.29.3",
                "code"        => "16.29.30",
                "name"        => "16.29.30 - Fabbricazione di articoli in paglia e materiali da intreccio",
            ],
            [
                "parent_code" => "16.29",
                "code"        => "16.29.4",
                "name"        => "16.29.4 - Laboratori di corniciai",
            ],
            [
                "parent_code" => "16.29.4",
                "code"        => "16.29.40",
                "name"        => "16.29.40 - Laboratori di corniciai",
            ],
            [
                "parent_code" => "C",
                "code"        => "17",
                "name"        => "17 - FABBRICAZIONE DI CARTA E DI PRODOTTI DI CARTA",
            ],
            [
                "parent_code" => "17",
                "code"        => "17.1",
                "name"        => "17.1 - FABBRICAZIONE DI PASTA-CARTA, CARTA E CARTONE",
            ],
            [
                "parent_code" => "17.1",
                "code"        => "17.11",
                "name"        => "17.11 - Fabbricazione di pasta-carta",
            ],
            [
                "parent_code" => "17.11",
                "code"        => "17.11.0",
                "name"        => "17.11.0 - Fabbricazione di pasta-carta",
            ],
            [
                "parent_code" => "17.11.0",
                "code"        => "17.11.00",
                "name"        => "17.11.00 - Fabbricazione di pasta-carta",
            ],
            [
                "parent_code" => "17.1",
                "code"        => "17.12",
                "name"        => "17.12 - Fabbricazione di carta e cartone",
            ],
            [
                "parent_code" => "17.12",
                "code"        => "17.12.0",
                "name"        => "17.12.0 - Fabbricazione di carta e cartone",
            ],
            [
                "parent_code" => "17.12.0",
                "code"        => "17.12.00",
                "name"        => "17.12.00 - Fabbricazione di carta e cartone",
            ],
            [
                "parent_code" => "17",
                "code"        => "17.2",
                "name"        => "17.2 - FABBRICAZIONE DI ARTICOLI DI CARTA E CARTONE",
            ],
            [
                "parent_code" => "17.2",
                "code"        => "17.21",
                "name"        => "17.21 - Fabbricazione di carta e cartone ondulato e di imballaggi di carta e cartone",
            ],
            [
                "parent_code" => "17.21",
                "code"        => "17.21.0",
                "name"        => "17.21.0 - Fabbricazione di carta e cartone ondulato e di imballaggi di carta e cartone (esclusi quelli in carta pressata)",
            ],
            [
                "parent_code" => "17.21.0",
                "code"        => "17.21.00",
                "name"        => "17.21.00 - Fabbricazione di carta e cartone ondulato e di imballaggi di carta e cartone (esclusi quelli in carta pressata)",
            ],
            [
                "parent_code" => "17.2",
                "code"        => "17.22",
                "name"        => "17.22 - Fabbricazione di prodotti igienico-sanitari e per uso domestico in carta e ovatta di cellulosa",
            ],
            [
                "parent_code" => "17.22",
                "code"        => "17.22.0",
                "name"        => "17.22.0 - Fabbricazione di prodotti igienico-sanitari e per uso domestico in carta e ovatta di cellulosa",
            ],
            [
                "parent_code" => "17.22.0",
                "code"        => "17.22.00",
                "name"        => "17.22.00 - Fabbricazione di prodotti igienico-sanitari e per uso domestico in carta e ovatta di cellulosa",
            ],
            [
                "parent_code" => "17.2",
                "code"        => "17.23",
                "name"        => "17.23 - Fabbricazione di prodotti cartotecnici",
            ],
            [
                "parent_code" => "17.23",
                "code"        => "17.23.0",
                "name"        => "17.23.0 - Fabbricazione di prodotti cartotecnici",
            ],
            [
                "parent_code" => "17.23.0",
                "code"        => "17.23.01",
                "name"        => "17.23.01 - Fabbricazione di prodotti cartotecnici scolastici e commerciali quando l'attività di stampa non è la principale caratteristica",
            ],
            [
                "parent_code" => "17.23.0",
                "code"        => "17.23.09",
                "name"        => "17.23.09 - Fabbricazione di altri prodotti cartotecnici",
            ],
            [
                "parent_code" => "17.2",
                "code"        => "17.24",
                "name"        => "17.24 - Fabbricazione di carta da parati",
            ],
            [
                "parent_code" => "17.24",
                "code"        => "17.24.0",
                "name"        => "17.24.0 - Fabbricazione di carta da parati",
            ],
            [
                "parent_code" => "17.24.0",
                "code"        => "17.24.00",
                "name"        => "17.24.00 - Fabbricazione di carta da parati",
            ],
            [
                "parent_code" => "17.2",
                "code"        => "17.29",
                "name"        => "17.29 - Fabbricazione di altri articoli di carta e cartone",
            ],
            [
                "parent_code" => "17.29",
                "code"        => "17.29.0",
                "name"        => "17.29.0 - Fabbricazione di altri articoli di carta e cartone",
            ],
            [
                "parent_code" => "17.29.0",
                "code"        => "17.29.00",
                "name"        => "17.29.00 - Fabbricazione di altri articoli di carta e cartone",
            ],
            [
                "parent_code" => "C",
                "code"        => "18",
                "name"        => "18 - STAMPA E RIPRODUZIONE DI SUPPORTI REGISTRATI",
            ],
            [
                "parent_code" => "18",
                "code"        => "18.1",
                "name"        => "18.1 - STAMPA E SERVIZI CONNESSI ALLA STAMPA",
            ],
            [
                "parent_code" => "18.1",
                "code"        => "18.11",
                "name"        => "18.11 - Stampa di giornali",
            ],
            [
                "parent_code" => "18.11",
                "code"        => "18.11.0",
                "name"        => "18.11.0 - Stampa di giornali",
            ],
            [
                "parent_code" => "18.11.0",
                "code"        => "18.11.00",
                "name"        => "18.11.00 - Stampa di giornali",
            ],
            [
                "parent_code" => "18.1",
                "code"        => "18.12",
                "name"        => "18.12 - Altra stampa",
            ],
            [
                "parent_code" => "18.12",
                "code"        => "18.12.0",
                "name"        => "18.12.0 - Altra stampa",
            ],
            [
                "parent_code" => "18.12.0",
                "code"        => "18.12.00",
                "name"        => "18.12.00 - Altra stampa",
            ],
            [
                "parent_code" => "18.1",
                "code"        => "18.13",
                "name"        => "18.13 - Lavorazioni preliminari alla stampa e ai media",
            ],
            [
                "parent_code" => "18.13",
                "code"        => "18.13.0",
                "name"        => "18.13.0 - Lavorazioni preliminari alla stampa e ai media",
            ],
            [
                "parent_code" => "18.13.0",
                "code"        => "18.13.00",
                "name"        => "18.13.00 - Lavorazioni preliminari alla stampa e ai media",
            ],
            [
                "parent_code" => "18.1",
                "code"        => "18.14",
                "name"        => "18.14 - Legatoria e servizi connessi",
            ],
            [
                "parent_code" => "18.14",
                "code"        => "18.14.0",
                "name"        => "18.14.0 - Legatoria e servizi connessi",
            ],
            [
                "parent_code" => "18.14.0",
                "code"        => "18.14.00",
                "name"        => "18.14.00 - Legatoria e servizi connessi",
            ],
            [
                "parent_code" => "18",
                "code"        => "18.2",
                "name"        => "18.2 - RIPRODUZIONE DI SUPPORTI REGISTRATI",
            ],
            [
                "parent_code" => "18.2",
                "code"        => "18.20",
                "name"        => "18.20 - Riproduzione di supporti registrati",
            ],
            [
                "parent_code" => "18.20",
                "code"        => "18.20.0",
                "name"        => "18.20.0 - Riproduzione di supporti registrati",
            ],
            [
                "parent_code" => "18.20.0",
                "code"        => "18.20.00",
                "name"        => "18.20.00 - Riproduzione di supporti registrati",
            ],
            [
                "parent_code" => "C",
                "code"        => "19",
                "name"        => "19 - FABBRICAZIONE DI COKE E PRODOTTI DERIVANTI DALLA RAFFINAZIONE DEL PETROLIO",
            ],
            [
                "parent_code" => "19",
                "code"        => "19.1",
                "name"        => "19.1 - FABBRICAZIONE DI PRODOTTI DI COKERIA",
            ],
            [
                "parent_code" => "19.1",
                "code"        => "19.10",
                "name"        => "19.10 - Fabbricazione di prodotti di cokeria",
            ],
            [
                "parent_code" => "19.10",
                "code"        => "19.10.0",
                "name"        => "19.10.0 - Fabbricazione di prodotti di cokeria",
            ],
            [
                "parent_code" => "19.10.0",
                "code"        => "19.10.01",
                "name"        => "19.10.01 - Fabbricazione di pece e coke di pece",
            ],
            [
                "parent_code" => "19.10.0",
                "code"        => "19.10.09",
                "name"        => "19.10.09 - Fabbricazione di altri prodotti di cokeria",
            ],
            [
                "parent_code" => "19",
                "code"        => "19.2",
                "name"        => "19.2 - FABBRICAZIONE DI PRODOTTI DERIVANTI DALLA RAFFINAZIONE DEL PETROLIO",
            ],
            [
                "parent_code" => "19.2",
                "code"        => "19.20",
                "name"        => "19.20 - Fabbricazione di prodotti derivanti dalla raffinazione del petrolio",
            ],
            [
                "parent_code" => "19.20",
                "code"        => "19.20.1",
                "name"        => "19.20.1 - Raffinerie di petrolio",
            ],
            [
                "parent_code" => "19.20.1",
                "code"        => "19.20.10",
                "name"        => "19.20.10 - Raffinerie di petrolio",
            ],
            [
                "parent_code" => "19.20",
                "code"        => "19.20.2",
                "name"        => "19.20.2 - Preparazione o miscelazione di derivati del petrolio (esclusa la petrolchimica)",
            ],
            [
                "parent_code" => "19.20.2",
                "code"        => "19.20.20",
                "name"        => "19.20.20 - Preparazione o miscelazione di derivati del petrolio (esclusa la petrolchimica)",
            ],
            [
                "parent_code" => "19.20",
                "code"        => "19.20.3",
                "name"        => "19.20.3 - Miscelazione di gas petroliferi liquefatti (GPL) e loro imbottigliamento",
            ],
            [
                "parent_code" => "19.20.3",
                "code"        => "19.20.30",
                "name"        => "19.20.30 - Miscelazione di gas petroliferi liquefatti (GPL) e loro imbottigliamento",
            ],
            [
                "parent_code" => "19.20",
                "code"        => "19.20.4",
                "name"        => "19.20.4 - Fabbricazione di emulsioni di bitume, di catrame e di leganti per uso stradale",
            ],
            [
                "parent_code" => "19.20.4",
                "code"        => "19.20.40",
                "name"        => "19.20.40 - Fabbricazione di emulsioni di bitume, di catrame e di leganti per uso stradale",
            ],
            [
                "parent_code" => "19.20",
                "code"        => "19.20.9",
                "name"        => "19.20.9 - Fabbricazione di altri prodotti petroliferi raffinati",
            ],
            [
                "parent_code" => "19.20.9",
                "code"        => "19.20.90",
                "name"        => "19.20.90 - Fabbricazione di altri prodotti petroliferi raffinati",
            ],
            [
                "parent_code" => "C",
                "code"        => "20",
                "name"        => "20 - FABBRICAZIONE DI PRODOTTI CHIMICI",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.1",
                "name"        => "20.1 - FABBRICAZIONE DI PRODOTTI CHIMICI DI BASE, DI FERTILIZZANTI E COMPOSTI AZOTATI, DI MATERIE PLASTICHE E GOMMA SINTETICA IN FORME PRIMARIE",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.11",
                "name"        => "20.11 - Fabbricazione di gas industriali",
            ],
            [
                "parent_code" => "20.11",
                "code"        => "20.11.0",
                "name"        => "20.11.0 - Fabbricazione di gas industriali",
            ],
            [
                "parent_code" => "20.11.0",
                "code"        => "20.11.00",
                "name"        => "20.11.00 - Fabbricazione di gas industriali",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.12",
                "name"        => "20.12 - Fabbricazione di coloranti e pigmenti",
            ],
            [
                "parent_code" => "20.12",
                "code"        => "20.12.0",
                "name"        => "20.12.0 - Fabbricazione di coloranti e pigmenti",
            ],
            [
                "parent_code" => "20.12.0",
                "code"        => "20.12.00",
                "name"        => "20.12.00 - Fabbricazione di coloranti e pigmenti",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.13",
                "name"        => "20.13 - Fabbricazione di altri prodotti chimici di base inorganici",
            ],
            [
                "parent_code" => "20.13",
                "code"        => "20.13.0",
                "name"        => "20.13.0 - Fabbricazione di altri prodotti chimici di base inorganici",
            ],
            [
                "parent_code" => "20.13.0",
                "code"        => "20.13.01",
                "name"        => "20.13.01 - Fabbricazione di uranio e torio arricchito",
            ],
            [
                "parent_code" => "20.13.0",
                "code"        => "20.13.09",
                "name"        => "20.13.09 - Fabbricazione di altri prodotti chimici di base inorganici",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.14",
                "name"        => "20.14 - Fabbricazione di altri prodotti chimici di base organici",
            ],
            [
                "parent_code" => "20.14",
                "code"        => "20.14.0",
                "name"        => "20.14.0 - Fabbricazione di altri prodotti chimici di base organici",
            ],
            [
                "parent_code" => "20.14.0",
                "code"        => "20.14.01",
                "name"        => "20.14.01 - Fabbricazione di alcol etilico da materiali fermentati",
            ],
            [
                "parent_code" => "20.14.0",
                "code"        => "20.14.09",
                "name"        => "20.14.09 - Fabbricazione di altri prodotti chimici di base organici n.c.a.",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.15",
                "name"        => "20.15 - Fabbricazione di fertilizzanti e composti azotati",
            ],
            [
                "parent_code" => "20.15",
                "code"        => "20.15.0",
                "name"        => "20.15.0 - Fabbricazione di fertilizzanti e composti azotati (esclusa la fabbricazione di compost)",
            ],
            [
                "parent_code" => "20.15.0",
                "code"        => "20.15.00",
                "name"        => "20.15.00 - Fabbricazione di fertilizzanti e composti azotati (esclusa la fabbricazione di compost)",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.16",
                "name"        => "20.16 - Fabbricazione di materie plastiche in forme primarie",
            ],
            [
                "parent_code" => "20.16",
                "code"        => "20.16.0",
                "name"        => "20.16.0 - Fabbricazione di materie plastiche in forme primarie",
            ],
            [
                "parent_code" => "20.16.0",
                "code"        => "20.16.00",
                "name"        => "20.16.00 - Fabbricazione di materie plastiche in forme primarie",
            ],
            [
                "parent_code" => "20.1",
                "code"        => "20.17",
                "name"        => "20.17 - Fabbricazione di gomma sintetica in forme primarie",
            ],
            [
                "parent_code" => "20.17",
                "code"        => "20.17.0",
                "name"        => "20.17.0 - Fabbricazione di gomma sintetica in forme primarie",
            ],
            [
                "parent_code" => "20.17.0",
                "code"        => "20.17.00",
                "name"        => "20.17.00 - Fabbricazione di gomma sintetica in forme primarie",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.2",
                "name"        => "20.2 - FABBRICAZIONE DI AGROFARMACI E DI ALTRI PRODOTTI CHIMICI PER L'AGRICOLTURA",
            ],
            [
                "parent_code" => "20.2",
                "code"        => "20.20",
                "name"        => "20.20 - Fabbricazione di agrofarmaci e di altri prodotti chimici per l'agricoltura",
            ],
            [
                "parent_code" => "20.20",
                "code"        => "20.20.0",
                "name"        => "20.20.0 - Fabbricazione di agrofarmaci e di altri prodotti chimici per l'agricoltura (esclusi i concimi)",
            ],
            [
                "parent_code" => "20.20.0",
                "code"        => "20.20.00",
                "name"        => "20.20.00 - Fabbricazione di agrofarmaci e di altri prodotti chimici per l'agricoltura (esclusi i concimi)",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.3",
                "name"        => "20.3 - FABBRICAZIONE DI PITTURE, VERNICI E SMALTI, INCHIOSTRI DA STAMPA E ADESIVI SINTETICI (MASTICI)",
            ],
            [
                "parent_code" => "20.3",
                "code"        => "20.30",
                "name"        => "20.30 - Fabbricazione di pitture, vernici e smalti, inchiostri da stampa e adesivi sintetici (mastici)",
            ],
            [
                "parent_code" => "20.30",
                "code"        => "20.30.0",
                "name"        => "20.30.0 - Fabbricazione di pitture, vernici e smalti, inchiostri da stampa e adesivi sintetici (mastici)",
            ],
            [
                "parent_code" => "20.30.0",
                "code"        => "20.30.00",
                "name"        => "20.30.00 - Fabbricazione di pitture, vernici e smalti, inchiostri da stampa e adesivi sintetici (mastici)",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.4",
                "name"        => "20.4 - FABBRICAZIONE DI SAPONI E DETERGENTI, DI PRODOTTI PER LA PULIZIA E LA LUCIDATURA, DI PROFUMI E COSMETICI",
            ],
            [
                "parent_code" => "20.4",
                "code"        => "20.41",
                "name"        => "20.41 - Fabbricazione di saponi e detergenti, di prodotti per la pulizia e la lucidatura",
            ],
            [
                "parent_code" => "20.41",
                "code"        => "20.41.1",
                "name"        => "20.41.1 - Fabbricazione di saponi, detergenti e di agenti organici tensioattivi (esclusi i prodotti per toletta)",
            ],
            [
                "parent_code" => "20.41.1",
                "code"        => "20.41.10",
                "name"        => "20.41.10 - Fabbricazione di saponi, detergenti e di agenti organici tensioattivi (esclusi i prodotti per toletta)",
            ],
            [
                "parent_code" => "20.41",
                "code"        => "20.41.2",
                "name"        => "20.41.2 - Fabbricazione di specialità chimiche per uso domestico e per manutenzione",
            ],
            [
                "parent_code" => "20.41.2",
                "code"        => "20.41.20",
                "name"        => "20.41.20 - Fabbricazione di specialità chimiche per uso domestico e per manutenzione",
            ],
            [
                "parent_code" => "20.4",
                "code"        => "20.42",
                "name"        => "20.42 - Fabbricazione di profumi e cosmetici",
            ],
            [
                "parent_code" => "20.42",
                "code"        => "20.42.0",
                "name"        => "20.42.0 - Fabbricazione di prodotti per toletta: profumi, cosmetici, saponi e simili",
            ],
            [
                "parent_code" => "20.42.0",
                "code"        => "20.42.00",
                "name"        => "20.42.00 - Fabbricazione di prodotti per toletta: profumi, cosmetici, saponi e simili",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.5",
                "name"        => "20.5 - FABBRICAZIONE DI ALTRI PRODOTTI CHIMICI",
            ],
            [
                "parent_code" => "20.5",
                "code"        => "20.51",
                "name"        => "20.51 - Fabbricazione di esplosivi",
            ],
            [
                "parent_code" => "20.51",
                "code"        => "20.51.0",
                "name"        => "20.51.0 - Fabbricazione di esplosivi",
            ],
            [
                "parent_code" => "20.51.0",
                "code"        => "20.51.01",
                "name"        => "20.51.01 - Fabbricazione di fiammiferi",
            ],
            [
                "parent_code" => "20.51.0",
                "code"        => "20.51.02",
                "name"        => "20.51.02 - Fabbricazione di articoli esplosivi",
            ],
            [
                "parent_code" => "20.5",
                "code"        => "20.52",
                "name"        => "20.52 - Fabbricazione di colle",
            ],
            [
                "parent_code" => "20.52",
                "code"        => "20.52.0",
                "name"        => "20.52.0 - Fabbricazione di colle",
            ],
            [
                "parent_code" => "20.52.0",
                "code"        => "20.52.00",
                "name"        => "20.52.00 - Fabbricazione di colle",
            ],
            [
                "parent_code" => "20.5",
                "code"        => "20.53",
                "name"        => "20.53 - Fabbricazione di oli essenziali",
            ],
            [
                "parent_code" => "20.53",
                "code"        => "20.53.0",
                "name"        => "20.53.0 - Fabbricazione di oli essenziali",
            ],
            [
                "parent_code" => "20.53.0",
                "code"        => "20.53.00",
                "name"        => "20.53.00 - Fabbricazione di oli essenziali",
            ],
            [
                "parent_code" => "20.5",
                "code"        => "20.59",
                "name"        => "20.59 - Fabbricazione di prodotti chimici n.c.a.",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.1",
                "name"        => "20.59.1 - Fabbricazione di prodotti chimici per uso fotografico",
            ],
            [
                "parent_code" => "20.59.1",
                "code"        => "20.59.10",
                "name"        => "20.59.10 - Fabbricazione di prodotti chimici per uso fotografico",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.2",
                "name"        => "20.59.2 - Fabbricazione di prodotti chimici organici ottenuti da prodotti di base derivati da processi di fermentazione o da materie prime vegetali",
            ],
            [
                "parent_code" => "20.59.2",
                "code"        => "20.59.20",
                "name"        => "20.59.20 - Fabbricazione di prodotti chimici organici ottenuti da prodotti di base derivati da processi di fermentazione o da materie prime vegetali",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.3",
                "name"        => "20.59.3 - Trattamento chimico degli acidi grassi",
            ],
            [
                "parent_code" => "20.59.3",
                "code"        => "20.59.30",
                "name"        => "20.59.30 - Trattamento chimico degli acidi grassi",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.4",
                "name"        => "20.59.4 - Fabbricazione di prodotti chimici vari per uso industriale (inclusi i preparati antidetonanti e antigelo)",
            ],
            [
                "parent_code" => "20.59.4",
                "code"        => "20.59.40",
                "name"        => "20.59.40 - Fabbricazione di prodotti chimici vari per uso industriale (inclusi i preparati antidetonanti e antigelo)",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.5",
                "name"        => "20.59.5 - Fabbricazione di prodotti chimici impiegati per ufficio e per il consumo non industriale",
            ],
            [
                "parent_code" => "20.59.5",
                "code"        => "20.59.50",
                "name"        => "20.59.50 - Fabbricazione di prodotti chimici impiegati per ufficio e per il consumo non industriale",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.6",
                "name"        => "20.59.6 - Fabbricazione di prodotti ausiliari per le industrie tessili e del cuoio",
            ],
            [
                "parent_code" => "20.59.6",
                "code"        => "20.59.60",
                "name"        => "20.59.60 - Fabbricazione di prodotti ausiliari per le industrie tessili e del cuoio",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.7",
                "name"        => "20.59.7 - Fabbricazione di prodotti elettrochimici (esclusa produzione di cloro, soda e potassa) ed elettrotermici",
            ],
            [
                "parent_code" => "20.59.7",
                "code"        => "20.59.70",
                "name"        => "20.59.70 - Fabbricazione di prodotti elettrochimici (esclusa produzione di cloro, soda e potassa) ed elettrotermici",
            ],
            [
                "parent_code" => "20.59",
                "code"        => "20.59.9",
                "name"        => "20.59.9 - Fabbricazione di altri prodotti chimici n.c.a.",
            ],
            [
                "parent_code" => "20.59.9",
                "code"        => "20.59.90",
                "name"        => "20.59.90 - Fabbricazione di altri prodotti chimici n.c.a.",
            ],
            [
                "parent_code" => "20",
                "code"        => "20.6",
                "name"        => "20.6 - FABBRICAZIONE DI FIBRE SINTETICHE E ARTIFICIALI",
            ],
            [
                "parent_code" => "20.6",
                "code"        => "20.60",
                "name"        => "20.60 - Fabbricazione di fibre sintetiche e artificiali",
            ],
            [
                "parent_code" => "20.60",
                "code"        => "20.60.0",
                "name"        => "20.60.0 - Fabbricazione di fibre sintetiche e artificiali",
            ],
            [
                "parent_code" => "20.60.0",
                "code"        => "20.60.00",
                "name"        => "20.60.00 - Fabbricazione di fibre sintetiche e artificiali",
            ],
            [
                "parent_code" => "C",
                "code"        => "21",
                "name"        => "21 - FABBRICAZIONE DI PRODOTTI FARMACEUTICI DI BASE E DI PREPARATI FARMACEUTICI",
            ],
            [
                "parent_code" => "21",
                "code"        => "21.1",
                "name"        => "21.1 - FABBRICAZIONE DI PRODOTTI FARMACEUTICI DI BASE",
            ],
            [
                "parent_code" => "21.1",
                "code"        => "21.10",
                "name"        => "21.10 - Fabbricazione di prodotti farmaceutici di base",
            ],
            [
                "parent_code" => "21.10",
                "code"        => "21.10.0",
                "name"        => "21.10.0 - Fabbricazione di prodotti farmaceutici di base",
            ],
            [
                "parent_code" => "21.10.0",
                "code"        => "21.10.00",
                "name"        => "21.10.00 - Fabbricazione di prodotti farmaceutici di base",
            ],
            [
                "parent_code" => "21",
                "code"        => "21.2",
                "name"        => "21.2 - FABBRICAZIONE DI MEDICINALI E PREPARATI FARMACEUTICI",
            ],
            [
                "parent_code" => "21.2",
                "code"        => "21.20",
                "name"        => "21.20 - Fabbricazione di medicinali e preparati farmaceutici",
            ],
            [
                "parent_code" => "21.20",
                "code"        => "21.20.0",
                "name"        => "21.20.0 - Fabbricazione di medicinali e preparati farmaceutici",
            ],
            [
                "parent_code" => "21.20.0",
                "code"        => "21.20.01",
                "name"        => "21.20.01 - Fabbricazione di sostanze diagnostiche radioattive in vivo",
            ],
            [
                "parent_code" => "21.20.0",
                "code"        => "21.20.09",
                "name"        => "21.20.09 - Fabbricazione di medicinali ed altri preparati farmaceutici",
            ],
            [
                "parent_code" => "C",
                "code"        => "22",
                "name"        => "22 - FABBRICAZIONE DI ARTICOLI IN GOMMA E MATERIE PLASTICHE",
            ],
            [
                "parent_code" => "22",
                "code"        => "22.1",
                "name"        => "22.1 - FABBRICAZIONE DI ARTICOLI IN GOMMA",
            ],
            [
                "parent_code" => "22.1",
                "code"        => "22.11",
                "name"        => "22.11 - Fabbricazione di pneumatici e camere d'aria; rigenerazione e ricostruzione di pneumatici",
            ],
            [
                "parent_code" => "22.11",
                "code"        => "22.11.1",
                "name"        => "22.11.1 - Fabbricazione di pneumatici e di camere d'aria",
            ],
            [
                "parent_code" => "22.11.1",
                "code"        => "22.11.10",
                "name"        => "22.11.10 - Fabbricazione di pneumatici e di camere d'aria",
            ],
            [
                "parent_code" => "22.11",
                "code"        => "22.11.2",
                "name"        => "22.11.2 - Rigenerazione e ricostruzione di pneumatici",
            ],
            [
                "parent_code" => "22.11.2",
                "code"        => "22.11.20",
                "name"        => "22.11.20 - Rigenerazione e ricostruzione di pneumatici",
            ],
            [
                "parent_code" => "22.1",
                "code"        => "22.19",
                "name"        => "22.19 - Fabbricazione di altri prodotti in gomma",
            ],
            [
                "parent_code" => "22.19",
                "code"        => "22.19.0",
                "name"        => "22.19.0 - Fabbricazione di altri prodotti in gomma",
            ],
            [
                "parent_code" => "22.19.0",
                "code"        => "22.19.01",
                "name"        => "22.19.01 - Fabbricazione di suole di gomma e altre parti in gomma per calzature",
            ],
            [
                "parent_code" => "22.19.0",
                "code"        => "22.19.09",
                "name"        => "22.19.09 - Fabbricazione di altri prodotti in gomma n.c.a.",
            ],
            [
                "parent_code" => "22",
                "code"        => "22.2",
                "name"        => "22.2 - FABBRICAZIONE DI ARTICOLI IN MATERIE PLASTICHE",
            ],
            [
                "parent_code" => "22.2",
                "code"        => "22.21",
                "name"        => "22.21 - Fabbricazione di lastre, fogli, tubi e profilati in materie plastiche",
            ],
            [
                "parent_code" => "22.21",
                "code"        => "22.21.0",
                "name"        => "22.21.0 - Fabbricazione di lastre, fogli, tubi e profilati in materie plastiche",
            ],
            [
                "parent_code" => "22.21.0",
                "code"        => "22.21.00",
                "name"        => "22.21.00 - Fabbricazione di lastre, fogli, tubi e profilati in materie plastiche",
            ],
            [
                "parent_code" => "22.2",
                "code"        => "22.22",
                "name"        => "22.22 - Fabbricazione di imballaggi in materie plastiche",
            ],
            [
                "parent_code" => "22.22",
                "code"        => "22.22.0",
                "name"        => "22.22.0 - Fabbricazione di imballaggi in materie plastiche",
            ],
            [
                "parent_code" => "22.22.0",
                "code"        => "22.22.00",
                "name"        => "22.22.00 - Fabbricazione di imballaggi in materie plastiche",
            ],
            [
                "parent_code" => "22.2",
                "code"        => "22.23",
                "name"        => "22.23 - Fabbricazione di articoli in plastica per l'edilizia",
            ],
            [
                "parent_code" => "22.23",
                "code"        => "22.23.0",
                "name"        => "22.23.0 - Fabbricazione di articoli in plastica per l'edilizia",
            ],
            [
                "parent_code" => "22.23.0",
                "code"        => "22.23.01",
                "name"        => "22.23.01 - Fabbricazione di rivestimenti elastici per pavimenti (vinile, linoleum eccetera)",
            ],
            [
                "parent_code" => "22.23.0",
                "code"        => "22.23.02",
                "name"        => "22.23.02 - Fabbricazione di porte, finestre, intelaiature eccetera in plastica per l'edilizia",
            ],
            [
                "parent_code" => "22.23.0",
                "code"        => "22.23.09",
                "name"        => "22.23.09 - Fabbricazione di altri articoli in plastica per l'edilizia",
            ],
            [
                "parent_code" => "22.2",
                "code"        => "22.29",
                "name"        => "22.29 - Fabbricazione di altri articoli in materie plastiche",
            ],
            [
                "parent_code" => "22.29",
                "code"        => "22.29.0",
                "name"        => "22.29.0 - Fabbricazione di altri articoli in materie plastiche",
            ],
            [
                "parent_code" => "22.29.0",
                "code"        => "22.29.01",
                "name"        => "22.29.01 - Fabbricazione di parti in plastica per calzature",
            ],
            [
                "parent_code" => "22.29.0",
                "code"        => "22.29.02",
                "name"        => "22.29.02 - Fabbricazione di oggetti per l'ufficio e la scuola in plastica",
            ],
            [
                "parent_code" => "22.29.0",
                "code"        => "22.29.09",
                "name"        => "22.29.09 - Fabbricazione di altri articoli in materie plastiche n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "23",
                "name"        => "23 - FABBRICAZIONE DI ALTRI PRODOTTI DELLA LAVORAZIONE DI MINERALI NON METALLIFERI",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.1",
                "name"        => "23.1 - FABBRICAZIONE DI VETRO E DI PRODOTTI IN VETRO",
            ],
            [
                "parent_code" => "23.1",
                "code"        => "23.11",
                "name"        => "23.11 - Fabbricazione di vetro piano",
            ],
            [
                "parent_code" => "23.11",
                "code"        => "23.11.0",
                "name"        => "23.11.0 - Fabbricazione di vetro piano",
            ],
            [
                "parent_code" => "23.11.0",
                "code"        => "23.11.00",
                "name"        => "23.11.00 - Fabbricazione di vetro piano",
            ],
            [
                "parent_code" => "23.1",
                "code"        => "23.12",
                "name"        => "23.12 - Lavorazione e trasformazione del vetro piano",
            ],
            [
                "parent_code" => "23.12",
                "code"        => "23.12.0",
                "name"        => "23.12.0 - Lavorazione e trasformazione del vetro piano",
            ],
            [
                "parent_code" => "23.12.0",
                "code"        => "23.12.00",
                "name"        => "23.12.00 - Lavorazione e trasformazione del vetro piano",
            ],
            [
                "parent_code" => "23.1",
                "code"        => "23.13",
                "name"        => "23.13 - Fabbricazione di vetro cavo",
            ],
            [
                "parent_code" => "23.13",
                "code"        => "23.13.0",
                "name"        => "23.13.0 - Fabbricazione di vetro cavo",
            ],
            [
                "parent_code" => "23.13.0",
                "code"        => "23.13.00",
                "name"        => "23.13.00 - Fabbricazione di vetro cavo",
            ],
            [
                "parent_code" => "23.1",
                "code"        => "23.14",
                "name"        => "23.14 - Fabbricazione di fibre di vetro",
            ],
            [
                "parent_code" => "23.14",
                "code"        => "23.14.0",
                "name"        => "23.14.0 - Fabbricazione di fibre di vetro",
            ],
            [
                "parent_code" => "23.14.0",
                "code"        => "23.14.00",
                "name"        => "23.14.00 - Fabbricazione di fibre di vetro",
            ],
            [
                "parent_code" => "23.1",
                "code"        => "23.19",
                "name"        => "23.19 - Fabbricazione e lavorazione di altro vetro (incluso vetro per usi tecnici), lavorazione di vetro cavo",
            ],
            [
                "parent_code" => "23.19",
                "code"        => "23.19.1",
                "name"        => "23.19.1 - Fabbricazione di vetrerie per laboratori, per uso igienico, per farmacia",
            ],
            [
                "parent_code" => "23.19.1",
                "code"        => "23.19.10",
                "name"        => "23.19.10 - Fabbricazione di vetrerie per laboratori, per uso igienico, per farmacia",
            ],
            [
                "parent_code" => "23.19",
                "code"        => "23.19.2",
                "name"        => "23.19.2 - Lavorazione di vetro a mano e a soffio artistico",
            ],
            [
                "parent_code" => "23.19.2",
                "code"        => "23.19.20",
                "name"        => "23.19.20 - Lavorazione di vetro a mano e a soffio artistico",
            ],
            [
                "parent_code" => "23.19",
                "code"        => "23.19.9",
                "name"        => "23.19.9 - Fabbricazione di altri prodotti in vetro (inclusa la vetreria tecnica)",
            ],
            [
                "parent_code" => "23.19.9",
                "code"        => "23.19.90",
                "name"        => "23.19.90 - Fabbricazione di altri prodotti in vetro (inclusa la vetreria tecnica)",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.2",
                "name"        => "23.2 - FABBRICAZIONE DI PRODOTTI REFRATTARI",
            ],
            [
                "parent_code" => "23.2",
                "code"        => "23.20",
                "name"        => "23.20 - Fabbricazione di prodotti refrattari",
            ],
            [
                "parent_code" => "23.20",
                "code"        => "23.20.0",
                "name"        => "23.20.0 - Fabbricazione di prodotti refrattari",
            ],
            [
                "parent_code" => "23.20.0",
                "code"        => "23.20.00",
                "name"        => "23.20.00 - Fabbricazione di prodotti refrattari",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.3",
                "name"        => "23.3 - FABBRICAZIONE DI MATERIALI DA COSTRUZIONE IN TERRACOTTA",
            ],
            [
                "parent_code" => "23.3",
                "code"        => "23.31",
                "name"        => "23.31 - Fabbricazione di piastrelle in ceramica per pavimenti e rivestimenti",
            ],
            [
                "parent_code" => "23.31",
                "code"        => "23.31.0",
                "name"        => "23.31.0 - Fabbricazione di piastrelle in ceramica per pavimenti e rivestimenti",
            ],
            [
                "parent_code" => "23.31.0",
                "code"        => "23.31.00",
                "name"        => "23.31.00 - Fabbricazione di piastrelle in ceramica per pavimenti e rivestimenti",
            ],
            [
                "parent_code" => "23.3",
                "code"        => "23.32",
                "name"        => "23.32 - Fabbricazione di mattoni, tegole ed altri prodotti per l'edilizia in terracotta",
            ],
            [
                "parent_code" => "23.32",
                "code"        => "23.32.0",
                "name"        => "23.32.0 - Fabbricazione di mattoni, tegole ed altri prodotti per l'edilizia in terracotta",
            ],
            [
                "parent_code" => "23.32.0",
                "code"        => "23.32.00",
                "name"        => "23.32.00 - Fabbricazione di mattoni, tegole ed altri prodotti per l'edilizia in terracotta",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.4",
                "name"        => "23.4 - FABBRICAZIONE DI ALTRI PRODOTTI IN PORCELLANA E IN CERAMICA",
            ],
            [
                "parent_code" => "23.4",
                "code"        => "23.41",
                "name"        => "23.41 - Fabbricazione di prodotti in ceramica per usi domestici e ornamentali",
            ],
            [
                "parent_code" => "23.41",
                "code"        => "23.41.0",
                "name"        => "23.41.0 - Fabbricazione di prodotti in ceramica per usi domestici e ornamentali",
            ],
            [
                "parent_code" => "23.41.0",
                "code"        => "23.41.00",
                "name"        => "23.41.00 - Fabbricazione di prodotti in ceramica per usi domestici e ornamentali",
            ],
            [
                "parent_code" => "23.4",
                "code"        => "23.42",
                "name"        => "23.42 - Fabbricazione di articoli sanitari in ceramica",
            ],
            [
                "parent_code" => "23.42",
                "code"        => "23.42.0",
                "name"        => "23.42.0 - Fabbricazione di articoli sanitari in ceramica",
            ],
            [
                "parent_code" => "23.42.0",
                "code"        => "23.42.00",
                "name"        => "23.42.00 - Fabbricazione di articoli sanitari in ceramica",
            ],
            [
                "parent_code" => "23.4",
                "code"        => "23.43",
                "name"        => "23.43 - Fabbricazione di isolatori e di pezzi isolanti in ceramica",
            ],
            [
                "parent_code" => "23.43",
                "code"        => "23.43.0",
                "name"        => "23.43.0 - Fabbricazione di isolatori e di pezzi isolanti in ceramica",
            ],
            [
                "parent_code" => "23.43.0",
                "code"        => "23.43.00",
                "name"        => "23.43.00 - Fabbricazione di isolatori e di pezzi isolanti in ceramica",
            ],
            [
                "parent_code" => "23.4",
                "code"        => "23.44",
                "name"        => "23.44 - Fabbricazione di altri prodotti in ceramica per uso tecnico e industriale",
            ],
            [
                "parent_code" => "23.44",
                "code"        => "23.44.0",
                "name"        => "23.44.0 - Fabbricazione di altri prodotti in ceramica per uso tecnico e industriale",
            ],
            [
                "parent_code" => "23.44.0",
                "code"        => "23.44.00",
                "name"        => "23.44.00 - Fabbricazione di altri prodotti in ceramica per uso tecnico e industriale",
            ],
            [
                "parent_code" => "23.4",
                "code"        => "23.49",
                "name"        => "23.49 - Fabbricazione di altri prodotti in ceramica",
            ],
            [
                "parent_code" => "23.49",
                "code"        => "23.49.0",
                "name"        => "23.49.0 - Fabbricazione di altri prodotti in ceramica",
            ],
            [
                "parent_code" => "23.49.0",
                "code"        => "23.49.00",
                "name"        => "23.49.00 - Fabbricazione di altri prodotti in ceramica",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.5",
                "name"        => "23.5 - PRODUZIONE DI CEMENTO, CALCE E GESSO",
            ],
            [
                "parent_code" => "23.5",
                "code"        => "23.51",
                "name"        => "23.51 - Produzione di cemento",
            ],
            [
                "parent_code" => "23.51",
                "code"        => "23.51.0",
                "name"        => "23.51.0 - Produzione di cemento",
            ],
            [
                "parent_code" => "23.51.0",
                "code"        => "23.51.00",
                "name"        => "23.51.00 - Produzione di cemento",
            ],
            [
                "parent_code" => "23.5",
                "code"        => "23.52",
                "name"        => "23.52 - Produzione di calce e gesso",
            ],
            [
                "parent_code" => "23.52",
                "code"        => "23.52.1",
                "name"        => "23.52.1 - Produzione di calce",
            ],
            [
                "parent_code" => "23.52.1",
                "code"        => "23.52.10",
                "name"        => "23.52.10 - Produzione di calce",
            ],
            [
                "parent_code" => "23.52",
                "code"        => "23.52.2",
                "name"        => "23.52.2 - Produzione di gesso",
            ],
            [
                "parent_code" => "23.52.2",
                "code"        => "23.52.20",
                "name"        => "23.52.20 - Produzione di gesso",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.6",
                "name"        => "23.6 - FABBRICAZIONE DI PRODOTTI IN CALCESTRUZZO, CEMENTO E GESSO",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.61",
                "name"        => "23.61 - Fabbricazione di prodotti in calcestruzzo per l'edilizia",
            ],
            [
                "parent_code" => "23.61",
                "code"        => "23.61.0",
                "name"        => "23.61.0 - Fabbricazione di prodotti in calcestruzzo per l'edilizia",
            ],
            [
                "parent_code" => "23.61.0",
                "code"        => "23.61.00",
                "name"        => "23.61.00 - Fabbricazione di prodotti in calcestruzzo per l'edilizia",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.62",
                "name"        => "23.62 - Fabbricazione di prodotti in gesso per l'edilizia",
            ],
            [
                "parent_code" => "23.62",
                "code"        => "23.62.0",
                "name"        => "23.62.0 - Fabbricazione di prodotti in gesso per l'edilizia",
            ],
            [
                "parent_code" => "23.62.0",
                "code"        => "23.62.00",
                "name"        => "23.62.00 - Fabbricazione di prodotti in gesso per l'edilizia",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.63",
                "name"        => "23.63 - Produzione di calcestruzzo pronto per l'uso",
            ],
            [
                "parent_code" => "23.63",
                "code"        => "23.63.0",
                "name"        => "23.63.0 - Produzione di calcestruzzo pronto per l'uso",
            ],
            [
                "parent_code" => "23.63.0",
                "code"        => "23.63.00",
                "name"        => "23.63.00 - Produzione di calcestruzzo pronto per l'uso",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.64",
                "name"        => "23.64 - Produzione di malta",
            ],
            [
                "parent_code" => "23.64",
                "code"        => "23.64.0",
                "name"        => "23.64.0 - Produzione di malta",
            ],
            [
                "parent_code" => "23.64.0",
                "code"        => "23.64.00",
                "name"        => "23.64.00 - Produzione di malta",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.65",
                "name"        => "23.65 - Fabbricazione di prodotti in fibrocemento",
            ],
            [
                "parent_code" => "23.65",
                "code"        => "23.65.0",
                "name"        => "23.65.0 - Fabbricazione di prodotti in fibrocemento",
            ],
            [
                "parent_code" => "23.65.0",
                "code"        => "23.65.00",
                "name"        => "23.65.00 - Fabbricazione di prodotti in fibrocemento",
            ],
            [
                "parent_code" => "23.6",
                "code"        => "23.69",
                "name"        => "23.69 - Fabbricazione di altri prodotti in calcestruzzo, gesso e cemento",
            ],
            [
                "parent_code" => "23.69",
                "code"        => "23.69.0",
                "name"        => "23.69.0 - Fabbricazione di altri prodotti in calcestruzzo, gesso e cemento",
            ],
            [
                "parent_code" => "23.69.0",
                "code"        => "23.69.00",
                "name"        => "23.69.00 - Fabbricazione di altri prodotti in calcestruzzo, gesso e cemento",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.7",
                "name"        => "23.7 - TAGLIO, MODELLATURA E FINITURA DI PIETRE",
            ],
            [
                "parent_code" => "23.7",
                "code"        => "23.70",
                "name"        => "23.70 - Taglio, modellatura e finitura di pietre",
            ],
            [
                "parent_code" => "23.70",
                "code"        => "23.70.1",
                "name"        => "23.70.1 - Segagione e lavorazione delle pietre e del marmo",
            ],
            [
                "parent_code" => "23.70.1",
                "code"        => "23.70.10",
                "name"        => "23.70.10 - Segagione e lavorazione delle pietre e del marmo",
            ],
            [
                "parent_code" => "23.70",
                "code"        => "23.70.2",
                "name"        => "23.70.2 - Lavorazione artistica del marmo e di altre pietre affini, lavori in mosaico",
            ],
            [
                "parent_code" => "23.70.2",
                "code"        => "23.70.20",
                "name"        => "23.70.20 - Lavorazione artistica del marmo e di altre pietre affini, lavori in mosaico",
            ],
            [
                "parent_code" => "23.70",
                "code"        => "23.70.3",
                "name"        => "23.70.3 - Frantumazione di pietre e minerali vari non in connessione con l'estrazione",
            ],
            [
                "parent_code" => "23.70.3",
                "code"        => "23.70.30",
                "name"        => "23.70.30 - Frantumazione di pietre e minerali vari non in connessione con l'estrazione",
            ],
            [
                "parent_code" => "23",
                "code"        => "23.9",
                "name"        => "23.9 - FABBRICAZIONE DI PRODOTTI ABRASIVI E DI PRODOTTI IN MINERALI NON METALLIFERI N.C.A.",
            ],
            [
                "parent_code" => "23.9",
                "code"        => "23.91",
                "name"        => "23.91 - Produzione di prodotti abrasivi",
            ],
            [
                "parent_code" => "23.91",
                "code"        => "23.91.0",
                "name"        => "23.91.0 - Produzione di prodotti abrasivi",
            ],
            [
                "parent_code" => "23.91.0",
                "code"        => "23.91.00",
                "name"        => "23.91.00 - Produzione di prodotti abrasivi",
            ],
            [
                "parent_code" => "23.9",
                "code"        => "23.99",
                "name"        => "23.99 - Fabbricazione di altri prodotti in minerali non metalliferi n.c.a.",
            ],
            [
                "parent_code" => "23.99",
                "code"        => "23.99.0",
                "name"        => "23.99.0 - Fabbricazione di altri prodotti in minerali non metalliferi n.c.a.",
            ],
            [
                "parent_code" => "23.99.0",
                "code"        => "23.99.00",
                "name"        => "23.99.00 - Fabbricazione di altri prodotti in minerali non metalliferi n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "24",
                "name"        => "24 - METALLURGIA",
            ],
            [
                "parent_code" => "24",
                "code"        => "24.1",
                "name"        => "24.1 - SIDERURGIA",
            ],
            [
                "parent_code" => "24.1",
                "code"        => "24.10",
                "name"        => "24.10 - Siderurgia",
            ],
            [
                "parent_code" => "24.10",
                "code"        => "24.10.0",
                "name"        => "24.10.0 - Siderurgia - Fabbricazione di ferro, acciaio e ferroleghe",
            ],
            [
                "parent_code" => "24.10.0",
                "code"        => "24.10.00",
                "name"        => "24.10.00 - Siderurgia - Fabbricazione di ferro, acciaio e ferroleghe",
            ],
            [
                "parent_code" => "24",
                "code"        => "24.2",
                "name"        => "24.2 - FABBRICAZIONE DI TUBI, CONDOTTI, PROFILATI CAVI E RELATIVI ACCESSORI IN ACCIAIO (ESCLUSI QUELLI IN ACCIAIO COLATO)",
            ],
            [
                "parent_code" => "24.2",
                "code"        => "24.20",
                "name"        => "24.20 - Fabbricazione di tubi, condotti, profilati cavi e relativi accessori in acciaio (esclusi quelli in acciaio colato)",
            ],
            [
                "parent_code" => "24.20",
                "code"        => "24.20.1",
                "name"        => "24.20.1 - Fabbricazione di tubi e condotti senza saldatura",
            ],
            [
                "parent_code" => "24.20.1",
                "code"        => "24.20.10",
                "name"        => "24.20.10 - Fabbricazione di tubi e condotti senza saldatura",
            ],
            [
                "parent_code" => "24.20",
                "code"        => "24.20.2",
                "name"        => "24.20.2 - Fabbricazione di tubi e condotti saldati e simili",
            ],
            [
                "parent_code" => "24.20.2",
                "code"        => "24.20.20",
                "name"        => "24.20.20 - Fabbricazione di tubi e condotti saldati e simili",
            ],
            [
                "parent_code" => "24",
                "code"        => "24.3",
                "name"        => "24.3 - FABBRICAZIONE DI ALTRI PRODOTTI DELLA PRIMA TRASFORMAZIONE DELL'ACCIAIO",
            ],
            [
                "parent_code" => "24.3",
                "code"        => "24.31",
                "name"        => "24.31 - Stiratura a freddo di barre",
            ],
            [
                "parent_code" => "24.31",
                "code"        => "24.31.0",
                "name"        => "24.31.0 - Stiratura a freddo di barre",
            ],
            [
                "parent_code" => "24.31.0",
                "code"        => "24.31.00",
                "name"        => "24.31.00 - Stiratura a freddo di barre",
            ],
            [
                "parent_code" => "24.3",
                "code"        => "24.32",
                "name"        => "24.32 - Laminazione a freddo di nastri",
            ],
            [
                "parent_code" => "24.32",
                "code"        => "24.32.0",
                "name"        => "24.32.0 - Laminazione a freddo di nastri",
            ],
            [
                "parent_code" => "24.32.0",
                "code"        => "24.32.00",
                "name"        => "24.32.00 - Laminazione a freddo di nastri",
            ],
            [
                "parent_code" => "24.3",
                "code"        => "24.33",
                "name"        => "24.33 - Profilatura mediante formatura o piegatura a freddo; fabbricazione di pannelli stratificati in acciaio",
            ],
            [
                "parent_code" => "24.33",
                "code"        => "24.33.0",
                "name"        => "24.33.0 - Profilatura mediante formatura o piegatura a freddo; fabbricazione di pannelli stratificati in acciaio",
            ],
            [
                "parent_code" => "24.33.0",
                "code"        => "24.33.01",
                "name"        => "24.33.01 - Fabbricazione di pannelli stratificati in acciaio",
            ],
            [
                "parent_code" => "24.33.0",
                "code"        => "24.33.02",
                "name"        => "24.33.02 - Profilatura mediante formatura o piegatura a freddo",
            ],
            [
                "parent_code" => "24.33.0",
                "code"        => "24.33.03",
                "name"        => "24.33.03 - Presagomatura dell'acciaio per cemento armato",
            ],
            [
                "parent_code" => "24.3",
                "code"        => "24.34",
                "name"        => "24.34 - Trafilatura a freddo",
            ],
            [
                "parent_code" => "24.34",
                "code"        => "24.34.0",
                "name"        => "24.34.0 - Trafilatura a freddo",
            ],
            [
                "parent_code" => "24.34.0",
                "code"        => "24.34.00",
                "name"        => "24.34.00 - Trafilatura a freddo",
            ],
            [
                "parent_code" => "24",
                "code"        => "24.4",
                "name"        => "24.4 - PRODUZIONE DI METALLI DI BASE PREZIOSI E ALTRI METALLI NON FERROSI, TRATTAMENTO DEI COMBUSTIBILI NUCLEARI",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.41",
                "name"        => "24.41 - Produzione di metalli preziosi",
            ],
            [
                "parent_code" => "24.41",
                "code"        => "24.41.0",
                "name"        => "24.41.0 - Produzione di metalli preziosi e semilavorati",
            ],
            [
                "parent_code" => "24.41.0",
                "code"        => "24.41.00",
                "name"        => "24.41.00 - Produzione di metalli preziosi e semilavorati",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.42",
                "name"        => "24.42 - Produzione di alluminio",
            ],
            [
                "parent_code" => "24.42",
                "code"        => "24.42.0",
                "name"        => "24.42.0 - Produzione di alluminio e semilavorati",
            ],
            [
                "parent_code" => "24.42.0",
                "code"        => "24.42.00",
                "name"        => "24.42.00 - Produzione di alluminio e semilavorati",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.43",
                "name"        => "24.43 - Produzione di piombo, zinco e stagno e semilavorati",
            ],
            [
                "parent_code" => "24.43",
                "code"        => "24.43.0",
                "name"        => "24.43.0 - Produzione di piombo, zinco e stagno e semilavorati",
            ],
            [
                "parent_code" => "24.43.0",
                "code"        => "24.43.00",
                "name"        => "24.43.00 - Produzione di piombo, zinco e stagno e semilavorati",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.44",
                "name"        => "24.44 - Produzione di rame",
            ],
            [
                "parent_code" => "24.44",
                "code"        => "24.44.0",
                "name"        => "24.44.0 - Produzione di rame e semilavorati",
            ],
            [
                "parent_code" => "24.44.0",
                "code"        => "24.44.00",
                "name"        => "24.44.00 - Produzione di rame e semilavorati",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.45",
                "name"        => "24.45 - Produzione di altri metalli non ferrosi",
            ],
            [
                "parent_code" => "24.45",
                "code"        => "24.45.0",
                "name"        => "24.45.0 - Produzione di altri metalli non ferrosi e semilavorati",
            ],
            [
                "parent_code" => "24.45.0",
                "code"        => "24.45.00",
                "name"        => "24.45.00 - Produzione di altri metalli non ferrosi e semilavorati",
            ],
            [
                "parent_code" => "24.4",
                "code"        => "24.46",
                "name"        => "24.46 - Trattamento dei combustibili nucleari",
            ],
            [
                "parent_code" => "24.46",
                "code"        => "24.46.0",
                "name"        => "24.46.0 - Trattamento dei combustibili nucleari (escluso l'arricchimento di uranio e torio)",
            ],
            [
                "parent_code" => "24.46.0",
                "code"        => "24.46.00",
                "name"        => "24.46.00 - Trattamento dei combustibili nucleari (escluso l'arricchimento di uranio e torio)",
            ],
            [
                "parent_code" => "24",
                "code"        => "24.5",
                "name"        => "24.5 - FONDERIE",
            ],
            [
                "parent_code" => "24.5",
                "code"        => "24.51",
                "name"        => "24.51 - Fusione di ghisa",
            ],
            [
                "parent_code" => "24.51",
                "code"        => "24.51.0",
                "name"        => "24.51.0 - Fusione di ghisa e produzione di tubi e raccordi in ghisa",
            ],
            [
                "parent_code" => "24.51.0",
                "code"        => "24.51.00",
                "name"        => "24.51.00 - Fusione di ghisa e produzione di tubi e raccordi in ghisa",
            ],
            [
                "parent_code" => "24.5",
                "code"        => "24.52",
                "name"        => "24.52 - Fusione di acciaio",
            ],
            [
                "parent_code" => "24.52",
                "code"        => "24.52.0",
                "name"        => "24.52.0 - Fusione di acciaio",
            ],
            [
                "parent_code" => "24.52.0",
                "code"        => "24.52.00",
                "name"        => "24.52.00 - Fusione di acciaio",
            ],
            [
                "parent_code" => "24.5",
                "code"        => "24.53",
                "name"        => "24.53 - Fusione di metalli leggeri",
            ],
            [
                "parent_code" => "24.53",
                "code"        => "24.53.0",
                "name"        => "24.53.0 - Fusione di metalli leggeri",
            ],
            [
                "parent_code" => "24.53.0",
                "code"        => "24.53.00",
                "name"        => "24.53.00 - Fusione di metalli leggeri",
            ],
            [
                "parent_code" => "24.5",
                "code"        => "24.54",
                "name"        => "24.54 - Fusione di altri metalli non ferrosi",
            ],
            [
                "parent_code" => "24.54",
                "code"        => "24.54.0",
                "name"        => "24.54.0 - Fusione di altri metalli non ferrosi",
            ],
            [
                "parent_code" => "24.54.0",
                "code"        => "24.54.00",
                "name"        => "24.54.00 - Fusione di altri metalli non ferrosi",
            ],
            [
                "parent_code" => "C",
                "code"        => "25",
                "name"        => "25 - FABBRICAZIONE DI PRODOTTI IN METALLO (ESCLUSI MACCHINARI E ATTREZZATURE)",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.1",
                "name"        => "25.1 - FABBRICAZIONE DI ELEMENTI DA COSTRUZIONE IN METALLO",
            ],
            [
                "parent_code" => "25.1",
                "code"        => "25.11",
                "name"        => "25.11 - Fabbricazione di strutture metalliche e di parti di strutture",
            ],
            [
                "parent_code" => "25.11",
                "code"        => "25.11.0",
                "name"        => "25.11.0 - Fabbricazione di strutture metalliche e parti assemblate di strutture",
            ],
            [
                "parent_code" => "25.11.0",
                "code"        => "25.11.00",
                "name"        => "25.11.00 - Fabbricazione di strutture metalliche e parti assemblate di strutture",
            ],
            [
                "parent_code" => "25.1",
                "code"        => "25.12",
                "name"        => "25.12 - Fabbricazione di porte e finestre in metallo",
            ],
            [
                "parent_code" => "25.12",
                "code"        => "25.12.1",
                "name"        => "25.12.1 - Fabbricazione di porte, finestre e loro telai, imposte e cancelli metallici",
            ],
            [
                "parent_code" => "25.12.1",
                "code"        => "25.12.10",
                "name"        => "25.12.10 - Fabbricazione di porte, finestre e loro telai, imposte e cancelli metallici",
            ],
            [
                "parent_code" => "25.12",
                "code"        => "25.12.2",
                "name"        => "25.12.2 - Fabbricazione di strutture metalliche per tende da sole, tende alla veneziana e simili",
            ],
            [
                "parent_code" => "25.12.2",
                "code"        => "25.12.20",
                "name"        => "25.12.20 - Fabbricazione di strutture metalliche per tende da sole, tende alla veneziana e simili",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.2",
                "name"        => "25.2 - FABBRICAZIONE DI CISTERNE, SERBATOI, RADIATORI E CONTENITORI IN METALLO",
            ],
            [
                "parent_code" => "25.2",
                "code"        => "25.21",
                "name"        => "25.21 - Fabbricazione di radiatori e contenitori in metallo per caldaie per il riscaldamento centrale",
            ],
            [
                "parent_code" => "25.21",
                "code"        => "25.21.0",
                "name"        => "25.21.0 - Fabbricazione di radiatori e contenitori in metallo per caldaie per il riscaldamento centrale",
            ],
            [
                "parent_code" => "25.21.0",
                "code"        => "25.21.00",
                "name"        => "25.21.00 - Fabbricazione di radiatori e contenitori in metallo per caldaie per il riscaldamento centrale",
            ],
            [
                "parent_code" => "25.2",
                "code"        => "25.29",
                "name"        => "25.29 - Fabbricazione di altre cisterne, serbatoi e contenitori in metallo",
            ],
            [
                "parent_code" => "25.29",
                "code"        => "25.29.0",
                "name"        => "25.29.0 - Fabbricazione di cisterne, serbatoi e contenitori in metallo per impieghi di stoccaggio o di produzione",
            ],
            [
                "parent_code" => "25.29.0",
                "code"        => "25.29.00",
                "name"        => "25.29.00 - Fabbricazione di cisterne, serbatoi e contenitori in metallo per impieghi di stoccaggio o di produzione",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.3",
                "name"        => "25.3 - FABBRICAZIONE DI GENERATORI DI VAPORE (ESCLUSI I CONTENITORI IN METALLO PER CALDAIE PER IL RISCALDAMENTO CENTRALE AD ACQUA CALDA)",
            ],
            [
                "parent_code" => "25.3",
                "code"        => "25.30",
                "name"        => "25.30 - Fabbricazione di generatori di vapore (esclusi i contenitori in metallo per caldaie per il riscaldamento centrale ad acqua calda)",
            ],
            [
                "parent_code" => "25.30",
                "code"        => "25.30.0",
                "name"        => "25.30.0 - Fabbricazione di generatori di vapore (esclusi i contenitori in metallo per caldaie per il riscaldamento centrale ad acqua calda)",
            ],
            [
                "parent_code" => "25.30.0",
                "code"        => "25.30.00",
                "name"        => "25.30.00 - Fabbricazione di generatori di vapore (esclusi i contenitori in metallo per caldaie per il riscaldamento centrale ad acqua calda)",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.4",
                "name"        => "25.4 - FABBRICAZIONE DI ARMI E MUNIZIONI",
            ],
            [
                "parent_code" => "25.4",
                "code"        => "25.40",
                "name"        => "25.40 - Fabbricazione di armi e munizioni",
            ],
            [
                "parent_code" => "25.40",
                "code"        => "25.40.0",
                "name"        => "25.40.0 - Fabbricazione di armi e munizioni",
            ],
            [
                "parent_code" => "25.40.0",
                "code"        => "25.40.00",
                "name"        => "25.40.00 - Fabbricazione di armi e munizioni",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.5",
                "name"        => "25.5 - FUCINATURA, IMBUTITURA, STAMPAGGIO E PROFILATURA DEI METALLI; METALLURGIA DELLE POLVERI",
            ],
            [
                "parent_code" => "25.5",
                "code"        => "25.50",
                "name"        => "25.50 - Fucinatura, imbutitura, stampaggio e profilatura dei metalli; metallurgia delle polveri",
            ],
            [
                "parent_code" => "25.50",
                "code"        => "25.50.0",
                "name"        => "25.50.0 - Fucinatura, imbutitura, stampaggio e profilatura dei metalli; metallurgia delle polveri",
            ],
            [
                "parent_code" => "25.50.0",
                "code"        => "25.50.00",
                "name"        => "25.50.00 - Fucinatura, imbutitura, stampaggio e profilatura dei metalli; metallurgia delle polveri",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.6",
                "name"        => "25.6 - TRATTAMENTO E RIVESTIMENTO DEI METALLI; LAVORI DI MECCANICA GENERALE",
            ],
            [
                "parent_code" => "25.6",
                "code"        => "25.61",
                "name"        => "25.61 - Trattamento e rivestimento dei metalli",
            ],
            [
                "parent_code" => "25.61",
                "code"        => "25.61.0",
                "name"        => "25.61.0 - Trattamento e rivestimento dei metalli",
            ],
            [
                "parent_code" => "25.61.0",
                "code"        => "25.61.00",
                "name"        => "25.61.00 - Trattamento e rivestimento dei metalli",
            ],
            [
                "parent_code" => "25.6",
                "code"        => "25.62",
                "name"        => "25.62 - Lavori di meccanica generale",
            ],
            [
                "parent_code" => "25.62",
                "code"        => "25.62.0",
                "name"        => "25.62.0 - Lavori di meccanica generale",
            ],
            [
                "parent_code" => "25.62.0",
                "code"        => "25.62.00",
                "name"        => "25.62.00 - Lavori di meccanica generale",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.7",
                "name"        => "25.7 - FABBRICAZIONE DI ARTICOLI DI COLTELLERIA, UTENSILI E OGGETTI DI FERRAMENTA",
            ],
            [
                "parent_code" => "25.7",
                "code"        => "25.71",
                "name"        => "25.71 - Fabbricazione di articoli di coltelleria e posateria",
            ],
            [
                "parent_code" => "25.71",
                "code"        => "25.71.0",
                "name"        => "25.71.0 - Fabbricazione di articoli di coltelleria, posateria ed armi bianche",
            ],
            [
                "parent_code" => "25.71.0",
                "code"        => "25.71.00",
                "name"        => "25.71.00 - Fabbricazione di articoli di coltelleria, posateria ed armi bianche",
            ],
            [
                "parent_code" => "25.7",
                "code"        => "25.72",
                "name"        => "25.72 - Fabbricazione di serrature e cerniere",
            ],
            [
                "parent_code" => "25.72",
                "code"        => "25.72.0",
                "name"        => "25.72.0 - Fabbricazione di serrature e cerniere e ferramenta simili",
            ],
            [
                "parent_code" => "25.72.0",
                "code"        => "25.72.00",
                "name"        => "25.72.00 - Fabbricazione di serrature e cerniere e ferramenta simili",
            ],
            [
                "parent_code" => "25.7",
                "code"        => "25.73",
                "name"        => "25.73 - Fabbricazione di utensileria",
            ],
            [
                "parent_code" => "25.73",
                "code"        => "25.73.1",
                "name"        => "25.73.1 - Fabbricazione di utensileria ad azionamento manuale; parti intercambiabili per macchine utensili",
            ],
            [
                "parent_code" => "25.73.1",
                "code"        => "25.73.11",
                "name"        => "25.73.11 - Fabbricazione di utensileria ad azionamento manuale",
            ],
            [
                "parent_code" => "25.73.1",
                "code"        => "25.73.12",
                "name"        => "25.73.12 - Fabbricazione di parti intercambiabili per macchine utensili",
            ],
            [
                "parent_code" => "25.73",
                "code"        => "25.73.2",
                "name"        => "25.73.2 - Fabbricazione di stampi, portastampi, sagome, forme per macchine",
            ],
            [
                "parent_code" => "25.73.2",
                "code"        => "25.73.20",
                "name"        => "25.73.20 - Fabbricazione di stampi, portastampi, sagome, forme per macchine",
            ],
            [
                "parent_code" => "25",
                "code"        => "25.9",
                "name"        => "25.9 - FABBRICAZIONE DI ALTRI PRODOTTI IN METALLO",
            ],
            [
                "parent_code" => "25.9",
                "code"        => "25.91",
                "name"        => "25.91 - Fabbricazione di bidoni in acciaio e di contenitori analoghi",
            ],
            [
                "parent_code" => "25.91",
                "code"        => "25.91.0",
                "name"        => "25.91.0 - Fabbricazione di bidoni in acciaio e contenitori analoghi per il trasporto e l'imballaggio",
            ],
            [
                "parent_code" => "25.91.0",
                "code"        => "25.91.00",
                "name"        => "25.91.00 - Fabbricazione di bidoni in acciaio e contenitori analoghi per il trasporto e l'imballaggio",
            ],
            [
                "parent_code" => "25.9",
                "code"        => "25.92",
                "name"        => "25.92 - Fabbricazione di imballaggi leggeri in metallo",
            ],
            [
                "parent_code" => "25.92",
                "code"        => "25.92.0",
                "name"        => "25.92.0 - Fabbricazione di imballaggi leggeri in metallo",
            ],
            [
                "parent_code" => "25.92.0",
                "code"        => "25.92.00",
                "name"        => "25.92.00 - Fabbricazione di imballaggi leggeri in metallo",
            ],
            [
                "parent_code" => "25.9",
                "code"        => "25.93",
                "name"        => "25.93 - Fabbricazione di prodotti fabbricati con fili metallici, catene e molle",
            ],
            [
                "parent_code" => "25.93",
                "code"        => "25.93.1",
                "name"        => "25.93.1 - Fabbricazione di prodotti fabbricati con fili metallici",
            ],
            [
                "parent_code" => "25.93.1",
                "code"        => "25.93.10",
                "name"        => "25.93.10 - Fabbricazione di prodotti fabbricati con fili metallici",
            ],
            [
                "parent_code" => "25.93",
                "code"        => "25.93.2",
                "name"        => "25.93.2 - Fabbricazione di molle",
            ],
            [
                "parent_code" => "25.93.2",
                "code"        => "25.93.20",
                "name"        => "25.93.20 - Fabbricazione di molle",
            ],
            [
                "parent_code" => "25.93",
                "code"        => "25.93.3",
                "name"        => "25.93.3 - Fabbricazione di catene fucinate senza saldatura e stampate",
            ],
            [
                "parent_code" => "25.93.3",
                "code"        => "25.93.30",
                "name"        => "25.93.30 - Fabbricazione di catene fucinate senza saldatura e stampate",
            ],
            [
                "parent_code" => "25.9",
                "code"        => "25.94",
                "name"        => "25.94 - Fabbricazione di articoli di bulloneria",
            ],
            [
                "parent_code" => "25.94",
                "code"        => "25.94.0",
                "name"        => "25.94.0 - Fabbricazione di articoli di bulloneria",
            ],
            [
                "parent_code" => "25.94.0",
                "code"        => "25.94.00",
                "name"        => "25.94.00 - Fabbricazione di articoli di bulloneria",
            ],
            [
                "parent_code" => "25.9",
                "code"        => "25.99",
                "name"        => "25.99 - Fabbricazione di altri prodotti in metallo n.c.a.",
            ],
            [
                "parent_code" => "25.99",
                "code"        => "25.99.1",
                "name"        => "25.99.1 - Fabbricazione di stoviglie, pentolame, vasellame, attrezzi da cucina e accessori casalinghi non elettrici, articoli metallici per l'arredamento di stanze da bagno",
            ],
            [
                "parent_code" => "25.99.1",
                "code"        => "25.99.11",
                "name"        => "25.99.11 - Fabbricazione di caraffe e bottiglie isolate in metallo",
            ],
            [
                "parent_code" => "25.99.1",
                "code"        => "25.99.19",
                "name"        => "25.99.19 - Fabbricazione di stoviglie, pentolame, vasellame, attrezzi da cucina e altri accessori casalinghi non elettrici, articoli metallici per l'arredamento di stanze da bagno",
            ],
            [
                "parent_code" => "25.99",
                "code"        => "25.99.2",
                "name"        => "25.99.2 - Fabbricazione di casseforti, forzieri e porte metalliche blindate",
            ],
            [
                "parent_code" => "25.99.2",
                "code"        => "25.99.20",
                "name"        => "25.99.20 - Fabbricazione di casseforti, forzieri e porte metalliche blindate",
            ],
            [
                "parent_code" => "25.99",
                "code"        => "25.99.3",
                "name"        => "25.99.3 - Fabbricazione di oggetti in ferro, in rame ed altri metalli",
            ],
            [
                "parent_code" => "25.99.3",
                "code"        => "25.99.30",
                "name"        => "25.99.30 - Fabbricazione di oggetti in ferro, in rame ed altri metalli",
            ],
            [
                "parent_code" => "25.99",
                "code"        => "25.99.9",
                "name"        => "25.99.9 - Fabbricazione di altri articoli metallici e minuteria metallica",
            ],
            [
                "parent_code" => "25.99.9",
                "code"        => "25.99.91",
                "name"        => "25.99.91 - Fabbricazione di magneti metallici permanenti",
            ],
            [
                "parent_code" => "25.99.9",
                "code"        => "25.99.99",
                "name"        => "25.99.99 - Fabbricazione di altri articoli metallici e minuteria metallica n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "26",
                "name"        => "26 - FABBRICAZIONE DI COMPUTER E PRODOTTI DI ELETTRONICA E OTTICA; APPARECCHI ELETTROMEDICALI, APPARECCHI DI MISURAZIONE E DI OROLOGI",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.1",
                "name"        => "26.1 - FABBRICAZIONE DI COMPONENTI ELETTRONICI E SCHEDE ELETTRONICHE",
            ],
            [
                "parent_code" => "26.1",
                "code"        => "26.11",
                "name"        => "26.11 - Fabbricazione di componenti elettronici",
            ],
            [
                "parent_code" => "26.11",
                "code"        => "26.11.0",
                "name"        => "26.11.0 - Fabbricazione di componenti elettronici",
            ],
            [
                "parent_code" => "26.11.0",
                "code"        => "26.11.01",
                "name"        => "26.11.01 - Fabbricazione di diodi, transistor e relativi congegni elettronici",
            ],
            [
                "parent_code" => "26.11.0",
                "code"        => "26.11.09",
                "name"        => "26.11.09 - Fabbricazione di altri componenti elettronici",
            ],
            [
                "parent_code" => "26.1",
                "code"        => "26.12",
                "name"        => "26.12 - Fabbricazione di schede elettroniche assemblate",
            ],
            [
                "parent_code" => "26.12",
                "code"        => "26.12.0",
                "name"        => "26.12.0 - Fabbricazione di schede elettroniche assemblate",
            ],
            [
                "parent_code" => "26.12.0",
                "code"        => "26.12.00",
                "name"        => "26.12.00 - Fabbricazione di schede elettroniche assemblate",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.2",
                "name"        => "26.2 - FABBRICAZIONE DI COMPUTER E UNITÀ PERIFERICHE",
            ],
            [
                "parent_code" => "26.2",
                "code"        => "26.20",
                "name"        => "26.20 - Fabbricazione di computer e unità periferiche",
            ],
            [
                "parent_code" => "26.20",
                "code"        => "26.20.0",
                "name"        => "26.20.0 - Fabbricazione di computer e unità periferiche",
            ],
            [
                "parent_code" => "26.20.0",
                "code"        => "26.20.00",
                "name"        => "26.20.00 - Fabbricazione di computer e unità periferiche",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.3",
                "name"        => "26.3 - FABBRICAZIONE DI APPARECCHIATURE PER LE TELECOMUNICAZIONI",
            ],
            [
                "parent_code" => "26.3",
                "code"        => "26.30",
                "name"        => "26.30 - Fabbricazione di apparecchiature per le telecomunicazioni",
            ],
            [
                "parent_code" => "26.30",
                "code"        => "26.30.1",
                "name"        => "26.30.1 - Fabbricazione di apparecchi trasmittenti radiotelevisivi (incluse le telecamere)",
            ],
            [
                "parent_code" => "26.30.1",
                "code"        => "26.30.10",
                "name"        => "26.30.10 - Fabbricazione di apparecchi trasmittenti radiotelevisivi (incluse le telecamere)",
            ],
            [
                "parent_code" => "26.30",
                "code"        => "26.30.2",
                "name"        => "26.30.2 - Fabbricazione di apparecchi elettrici ed elettronici per telecomunicazioni",
            ],
            [
                "parent_code" => "26.30.2",
                "code"        => "26.30.21",
                "name"        => "26.30.21 - Fabbricazione di sistemi antifurto e antincendio",
            ],
            [
                "parent_code" => "26.30.2",
                "code"        => "26.30.29",
                "name"        => "26.30.29 - Fabbricazione di altri apparecchi elettrici ed elettronici per telecomunicazioni",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.4",
                "name"        => "26.4 - FABBRICAZIONE DI PRODOTTI DI ELETTRONICA DI CONSUMO AUDIO E VIDEO",
            ],
            [
                "parent_code" => "26.4",
                "code"        => "26.40",
                "name"        => "26.40 - Fabbricazione di prodotti di elettronica di consumo audio e video",
            ],
            [
                "parent_code" => "26.40",
                "code"        => "26.40.0",
                "name"        => "26.40.0 - Fabbricazione di apparecchi per la riproduzione e registrazione del suono e delle immagini",
            ],
            [
                "parent_code" => "26.40.0",
                "code"        => "26.40.01",
                "name"        => "26.40.01 - Fabbricazione di apparecchi per la riproduzione e registrazione del suono e delle immagini",
            ],
            [
                "parent_code" => "26.40.0",
                "code"        => "26.40.02",
                "name"        => "26.40.02 - Fabbricazione di console per videogiochi (esclusi i giochi elettronici)",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.5",
                "name"        => "26.5 - FABBRICAZIONE DI STRUMENTI E APPARECCHI DI MISURAZIONE, PROVA E NAVIGAZIONE; OROLOGI",
            ],
            [
                "parent_code" => "26.5",
                "code"        => "26.51",
                "name"        => "26.51 - Fabbricazione di strumenti e apparecchi di misurazione, prova e navigazione (esclusi quelli ottici)",
            ],
            [
                "parent_code" => "26.51",
                "code"        => "26.51.1",
                "name"        => "26.51.1 - Fabbricazione di strumenti per navigazione, idrologia, geofisica e meteorologia",
            ],
            [
                "parent_code" => "26.51.1",
                "code"        => "26.51.10",
                "name"        => "26.51.10 - Fabbricazione di strumenti per navigazione, idrologia, geofisica e meteorologia",
            ],
            [
                "parent_code" => "26.51",
                "code"        => "26.51.2",
                "name"        => "26.51.2 - Fabbricazione di contatori di elettricità, gas, acqua ed altri liquidi, di bilance analitiche di precisione, di apparecchi di misura e regolazione (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "26.51.2",
                "code"        => "26.51.21",
                "name"        => "26.51.21 - Fabbricazione di rilevatori di fiamma e combustione, di mine, di movimento, generatori d'impulso e metal detector",
            ],
            [
                "parent_code" => "26.51.2",
                "code"        => "26.51.29",
                "name"        => "26.51.29 - Fabbricazione di altri apparecchi di misura e regolazione, strumenti da disegno, di contatori di elettricità, gas, acqua ed altri liquidi, di bilance analitiche di precisione (incluse parti staccate ed accessori)",
            ],
            [
                "parent_code" => "26.5",
                "code"        => "26.52",
                "name"        => "26.52 - Fabbricazione di orologi",
            ],
            [
                "parent_code" => "26.52",
                "code"        => "26.52.0",
                "name"        => "26.52.0 - Fabbricazione di orologi",
            ],
            [
                "parent_code" => "26.52.0",
                "code"        => "26.52.00",
                "name"        => "26.52.00 - Fabbricazione di orologi",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.6",
                "name"        => "26.6 - FABBRICAZIONE DI STRUMENTI PER IRRADIAZIONE, APPARECCHIATURE ELETTROMEDICALI ED ELETTROTERAPEUTICHE",
            ],
            [
                "parent_code" => "26.6",
                "code"        => "26.60",
                "name"        => "26.60 - Fabbricazione di strumenti per irradiazione, apparecchiature elettromedicali ed elettroterapeutiche",
            ],
            [
                "parent_code" => "26.60",
                "code"        => "26.60.0",
                "name"        => "26.60.0 - Fabbricazione di strumenti per irradiazione, apparecchiature elettromedicali ed elettroterapeutiche",
            ],
            [
                "parent_code" => "26.60.0",
                "code"        => "26.60.01",
                "name"        => "26.60.01 - Fabbricazione di apparecchiature di irradiazione per alimenti e latte",
            ],
            [
                "parent_code" => "26.60.0",
                "code"        => "26.60.02",
                "name"        => "26.60.02 - Fabbricazione di apparecchi elettromedicali (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "26.60.0",
                "code"        => "26.60.09",
                "name"        => "26.60.09 - Fabbricazione di altri strumenti per irradiazione ed altre apparecchiature elettroterapeutiche",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.7",
                "name"        => "26.7 - FABBRICAZIONE DI STRUMENTI OTTICI E ATTREZZATURE FOTOGRAFICHE",
            ],
            [
                "parent_code" => "26.7",
                "code"        => "26.70",
                "name"        => "26.70 - Fabbricazione di strumenti ottici e attrezzature fotografiche",
            ],
            [
                "parent_code" => "26.70",
                "code"        => "26.70.1",
                "name"        => "26.70.1 - Fabbricazione di elementi ottici e strumenti ottici di misura, controllo e precisione",
            ],
            [
                "parent_code" => "26.70.1",
                "code"        => "26.70.11",
                "name"        => "26.70.11 - Fabbricazione di elementi ottici e strumenti ottici di precisione",
            ],
            [
                "parent_code" => "26.70.1",
                "code"        => "26.70.12",
                "name"        => "26.70.12 - Fabbricazione di attrezzature ottiche di misurazione e controllo",
            ],
            [
                "parent_code" => "26.70",
                "code"        => "26.70.2",
                "name"        => "26.70.2 - Fabbricazione di apparecchiature fotografiche e cinematografiche",
            ],
            [
                "parent_code" => "26.70.2",
                "code"        => "26.70.20",
                "name"        => "26.70.20 - Fabbricazione di apparecchiature fotografiche e cinematografiche",
            ],
            [
                "parent_code" => "26",
                "code"        => "26.8",
                "name"        => "26.8 - FABBRICAZIONE DI SUPPORTI MAGNETICI ED OTTICI",
            ],
            [
                "parent_code" => "26.8",
                "code"        => "26.80",
                "name"        => "26.80 - Fabbricazione di supporti magnetici ed ottici",
            ],
            [
                "parent_code" => "26.80",
                "code"        => "26.80.0",
                "name"        => "26.80.0 - Fabbricazione di supporti magnetici ed ottici",
            ],
            [
                "parent_code" => "26.80.0",
                "code"        => "26.80.00",
                "name"        => "26.80.00 - Fabbricazione di supporti magnetici ed ottici",
            ],
            [
                "parent_code" => "C",
                "code"        => "27",
                "name"        => "27 - FABBRICAZIONE DI APPARECCHIATURE ELETTRICHE ED APPARECCHIATURE PER USO DOMESTICO NON ELETTRICHE",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.1",
                "name"        => "27.1 - FABBRICAZIONE DI MOTORI, GENERATORI E TRASFORMATORI ELETTRICI E DI APPARECCHIATURE PER LA DISTRIBUZIONE E IL CONTROLLO DELL'ELETTRICITÀ",
            ],
            [
                "parent_code" => "27.1",
                "code"        => "27.11",
                "name"        => "27.11 - Fabbricazione di motori, generatori e trasformatori elettrici",
            ],
            [
                "parent_code" => "27.11",
                "code"        => "27.11.0",
                "name"        => "27.11.0 - Fabbricazione di motori, generatori e trasformatori elettrici",
            ],
            [
                "parent_code" => "27.11.0",
                "code"        => "27.11.00",
                "name"        => "27.11.00 - Fabbricazione di motori, generatori e trasformatori elettrici",
            ],
            [
                "parent_code" => "27.1",
                "code"        => "27.12",
                "name"        => "27.12 - Fabbricazione di apparecchiature per le reti di distribuzione e il controllo dell'elettricità",
            ],
            [
                "parent_code" => "27.12",
                "code"        => "27.12.0",
                "name"        => "27.12.0 - Fabbricazione di apparecchiature per le reti di distribuzione e il controllo dell'elettricità",
            ],
            [
                "parent_code" => "27.12.0",
                "code"        => "27.12.00",
                "name"        => "27.12.00 - Fabbricazione di apparecchiature per le reti di distribuzione e il controllo dell'elettricità",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.2",
                "name"        => "27.2 - FABBRICAZIONE DI BATTERIE DI PILE ED ACCUMULATORI ELETTRICI",
            ],
            [
                "parent_code" => "27.2",
                "code"        => "27.20",
                "name"        => "27.20 - Fabbricazione di batterie di pile ed accumulatori elettrici",
            ],
            [
                "parent_code" => "27.20",
                "code"        => "27.20.0",
                "name"        => "27.20.0 - Fabbricazione di batterie di pile ed accumulatori elettrici",
            ],
            [
                "parent_code" => "27.20.0",
                "code"        => "27.20.00",
                "name"        => "27.20.00 - Fabbricazione di batterie di pile ed accumulatori elettrici",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.3",
                "name"        => "27.3 - FABBRICAZIONE DI CABLAGGI E APPARECCHIATURE DI CABLAGGIO",
            ],
            [
                "parent_code" => "27.3",
                "code"        => "27.31",
                "name"        => "27.31 - Fabbricazione di cavi a fibra ottica",
            ],
            [
                "parent_code" => "27.31",
                "code"        => "27.31.0",
                "name"        => "27.31.0 - Fabbricazione di cavi a fibra ottica",
            ],
            [
                "parent_code" => "27.31.0",
                "code"        => "27.31.01",
                "name"        => "27.31.01 - Fabbricazione di cavi a fibra ottica per la trasmissione di dati o di immagini",
            ],
            [
                "parent_code" => "27.31.0",
                "code"        => "27.31.02",
                "name"        => "27.31.02 - Fabbricazione di fibre ottiche",
            ],
            [
                "parent_code" => "27.3",
                "code"        => "27.32",
                "name"        => "27.32 - Fabbricazione di altri fili e cavi elettrici ed elettronici",
            ],
            [
                "parent_code" => "27.32",
                "code"        => "27.32.0",
                "name"        => "27.32.0 - Fabbricazione di altri fili e cavi elettrici ed elettronici",
            ],
            [
                "parent_code" => "27.32.0",
                "code"        => "27.32.00",
                "name"        => "27.32.00 - Fabbricazione di altri fili e cavi elettrici ed elettronici",
            ],
            [
                "parent_code" => "27.3",
                "code"        => "27.33",
                "name"        => "27.33 - Fabbricazione di attrezzature per cablaggio",
            ],
            [
                "parent_code" => "27.33",
                "code"        => "27.33.0",
                "name"        => "27.33.0 - Fabbricazione di attrezzature per cablaggio",
            ],
            [
                "parent_code" => "27.33.0",
                "code"        => "27.33.01",
                "name"        => "27.33.01 - Fabbricazione di apparecchiature in plastica non conduttiva",
            ],
            [
                "parent_code" => "27.33.0",
                "code"        => "27.33.09",
                "name"        => "27.33.09 - Fabbricazione di altre attrezzature per cablaggio",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.4",
                "name"        => "27.4 - FABBRICAZIONE DI APPARECCHIATURE PER ILLUMINAZIONE",
            ],
            [
                "parent_code" => "27.4",
                "code"        => "27.40",
                "name"        => "27.40 - Fabbricazione di apparecchiature per illuminazione",
            ],
            [
                "parent_code" => "27.40",
                "code"        => "27.40.0",
                "name"        => "27.40.0 - Fabbricazione di apparecchiature per illuminazione",
            ],
            [
                "parent_code" => "27.40.0",
                "code"        => "27.40.01",
                "name"        => "27.40.01 - Fabbricazione di apparecchiature di illuminazione e segnalazione per mezzi di trasporto",
            ],
            [
                "parent_code" => "27.40.0",
                "code"        => "27.40.02",
                "name"        => "27.40.02 - Fabbricazione di luminarie per feste",
            ],
            [
                "parent_code" => "27.40.0",
                "code"        => "27.40.09",
                "name"        => "27.40.09 - Fabbricazione di altre apparecchiature per illuminazione",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.5",
                "name"        => "27.5 - FABBRICAZIONE DI APPARECCHI PER USO DOMESTICO",
            ],
            [
                "parent_code" => "27.5",
                "code"        => "27.51",
                "name"        => "27.51 - Fabbricazione di elettrodomestici",
            ],
            [
                "parent_code" => "27.51",
                "code"        => "27.51.0",
                "name"        => "27.51.0 - Fabbricazione di elettrodomestici",
            ],
            [
                "parent_code" => "27.51.0",
                "code"        => "27.51.00",
                "name"        => "27.51.00 - Fabbricazione di elettrodomestici",
            ],
            [
                "parent_code" => "27.5",
                "code"        => "27.52",
                "name"        => "27.52 - Fabbricazione di apparecchi per uso domestico non elettrici",
            ],
            [
                "parent_code" => "27.52",
                "code"        => "27.52.0",
                "name"        => "27.52.0 - Fabbricazione di apparecchi per uso domestico non elettrici",
            ],
            [
                "parent_code" => "27.52.0",
                "code"        => "27.52.00",
                "name"        => "27.52.00 - Fabbricazione di apparecchi per uso domestico non elettrici",
            ],
            [
                "parent_code" => "27",
                "code"        => "27.9",
                "name"        => "27.9 - FABBRICAZIONE DI ALTRE APPARECCHIATURE ELETTRICHE",
            ],
            [
                "parent_code" => "27.9",
                "code"        => "27.90",
                "name"        => "27.90 - Fabbricazione di altre apparecchiature elettriche",
            ],
            [
                "parent_code" => "27.90",
                "code"        => "27.90.0",
                "name"        => "27.90.0 - Fabbricazione di altre apparecchiature elettriche",
            ],
            [
                "parent_code" => "27.90.0",
                "code"        => "27.90.01",
                "name"        => "27.90.01 - Fabbricazione di apparecchiature elettriche per saldature e brasature",
            ],
            [
                "parent_code" => "27.90.0",
                "code"        => "27.90.02",
                "name"        => "27.90.02 - Fabbricazione di insegne elettriche e apparecchiature elettriche di segnalazione",
            ],
            [
                "parent_code" => "27.90.0",
                "code"        => "27.90.03",
                "name"        => "27.90.03 - Fabbricazione di capacitori elettrici, resistenze, condensatori e simili, acceleratori",
            ],
            [
                "parent_code" => "27.90.0",
                "code"        => "27.90.09",
                "name"        => "27.90.09 - Fabbricazione di altre apparecchiature elettriche n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "28",
                "name"        => "28 - FABBRICAZIONE DI MACCHINARI ED APPARECCHIATURE N.C.A.",
            ],
            [
                "parent_code" => "28",
                "code"        => "28.1",
                "name"        => "28.1 - FABBRICAZIONE DI MACCHINE DI IMPIEGO GENERALE",
            ],
            [
                "parent_code" => "28.1",
                "code"        => "28.11",
                "name"        => "28.11 - Fabbricazione di motori e turbine (esclusi i motori per aeromobili, veicoli e motocicli)",
            ],
            [
                "parent_code" => "28.11",
                "code"        => "28.11.1",
                "name"        => "28.11.1 - Fabbricazione di motori a combustione interna (incluse parti e accessori ed esclusi i motori destinati ai mezzi di trasporto su strada e ad aeromobili)",
            ],
            [
                "parent_code" => "28.11.1",
                "code"        => "28.11.11",
                "name"        => "28.11.11 - Fabbricazione di motori a combustione interna (esclusi i motori destinati ai mezzi di trasporto su strada e ad aeromobili)",
            ],
            [
                "parent_code" => "28.11.1",
                "code"        => "28.11.12",
                "name"        => "28.11.12 - Fabbricazione di pistoni, fasce elastiche, carburatori e parti simili di motori a combustione interna",
            ],
            [
                "parent_code" => "28.11",
                "code"        => "28.11.2",
                "name"        => "28.11.2 - Fabbricazione di turbine e turboalternatori (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.11.2",
                "code"        => "28.11.20",
                "name"        => "28.11.20 - Fabbricazione di turbine e turboalternatori (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.1",
                "code"        => "28.12",
                "name"        => "28.12 - Fabbricazione di apparecchiature fluidodinamiche",
            ],
            [
                "parent_code" => "28.12",
                "code"        => "28.12.0",
                "name"        => "28.12.0 - Fabbricazione di apparecchiature fluidodinamiche",
            ],
            [
                "parent_code" => "28.12.0",
                "code"        => "28.12.00",
                "name"        => "28.12.00 - Fabbricazione di apparecchiature fluidodinamiche",
            ],
            [
                "parent_code" => "28.1",
                "code"        => "28.13",
                "name"        => "28.13 - Fabbricazione di altre pompe e compressori",
            ],
            [
                "parent_code" => "28.13",
                "code"        => "28.13.0",
                "name"        => "28.13.0 - Fabbricazione di altre pompe e compressori",
            ],
            [
                "parent_code" => "28.13.0",
                "code"        => "28.13.00",
                "name"        => "28.13.00 - Fabbricazione di altre pompe e compressori",
            ],
            [
                "parent_code" => "28.1",
                "code"        => "28.14",
                "name"        => "28.14 - Fabbricazione di altri rubinetti e valvole",
            ],
            [
                "parent_code" => "28.14",
                "code"        => "28.14.0",
                "name"        => "28.14.0 - Fabbricazione di altri rubinetti e valvole",
            ],
            [
                "parent_code" => "28.14.0",
                "code"        => "28.14.00",
                "name"        => "28.14.00 - Fabbricazione di altri rubinetti e valvole",
            ],
            [
                "parent_code" => "28.1",
                "code"        => "28.15",
                "name"        => "28.15 - Fabbricazione di cuscinetti, ingranaggi e organi di trasmissione (esclusi quelli idraulici)",
            ],
            [
                "parent_code" => "28.15",
                "code"        => "28.15.1",
                "name"        => "28.15.1 - Fabbricazione di organi di trasmissione (esclusi quelli idraulici e quelli per autoveicoli, aeromobili e motocicli)",
            ],
            [
                "parent_code" => "28.15.1",
                "code"        => "28.15.10",
                "name"        => "28.15.10 - Fabbricazione di organi di trasmissione (esclusi quelli idraulici e quelli per autoveicoli, aeromobili e motocicli)",
            ],
            [
                "parent_code" => "28.15",
                "code"        => "28.15.2",
                "name"        => "28.15.2 - Fabbricazione di cuscinetti a sfere",
            ],
            [
                "parent_code" => "28.15.2",
                "code"        => "28.15.20",
                "name"        => "28.15.20 - Fabbricazione di cuscinetti a sfere",
            ],
            [
                "parent_code" => "28",
                "code"        => "28.2",
                "name"        => "28.2 - FABBRICAZIONE DI ALTRE MACCHINE DI IMPIEGO GENERALE",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.21",
                "name"        => "28.21 - Fabbricazione di forni, bruciatori e sistemi di riscaldamento",
            ],
            [
                "parent_code" => "28.21",
                "code"        => "28.21.1",
                "name"        => "28.21.1 - Fabbricazione di forni, fornaci e bruciatori",
            ],
            [
                "parent_code" => "28.21.1",
                "code"        => "28.21.10",
                "name"        => "28.21.10 - Fabbricazione di forni, fornaci e bruciatori",
            ],
            [
                "parent_code" => "28.21",
                "code"        => "28.21.2",
                "name"        => "28.21.2 - Fabbricazione di sistemi di riscaldamento",
            ],
            [
                "parent_code" => "28.21.2",
                "code"        => "28.21.21",
                "name"        => "28.21.21 - Fabbricazione di caldaie per riscaldamento",
            ],
            [
                "parent_code" => "28.21.2",
                "code"        => "28.21.29",
                "name"        => "28.21.29 - Fabbricazione di altri sistemi per riscaldamento",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.22",
                "name"        => "28.22 - Fabbricazione di macchine e apparecchi di sollevamento e movimentazione",
            ],
            [
                "parent_code" => "28.22",
                "code"        => "28.22.0",
                "name"        => "28.22.0 - Fabbricazione di macchine e apparecchi di sollevamento e movimentazione",
            ],
            [
                "parent_code" => "28.22.0",
                "code"        => "28.22.01",
                "name"        => "28.22.01 - Fabbricazione di ascensori, montacarichi e scale mobili",
            ],
            [
                "parent_code" => "28.22.0",
                "code"        => "28.22.02",
                "name"        => "28.22.02 - Fabbricazione di gru, argani, verricelli a mano e a motore, carrelli trasbordatori, carrelli elevatori e piattaforme girevoli",
            ],
            [
                "parent_code" => "28.22.0",
                "code"        => "28.22.03",
                "name"        => "28.22.03 - Fabbricazione di carriole",
            ],
            [
                "parent_code" => "28.22.0",
                "code"        => "28.22.09",
                "name"        => "28.22.09 - Fabbricazione di altre macchine e apparecchi di sollevamento e movimentazione",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.23",
                "name"        => "28.23 - Fabbricazione di macchine ed attrezzature per ufficio (esclusi computer e unità periferiche)",
            ],
            [
                "parent_code" => "28.23",
                "code"        => "28.23.0",
                "name"        => "28.23.0 - Fabbricazione di macchine ed attrezzature per ufficio (esclusi computer e unità periferiche)",
            ],
            [
                "parent_code" => "28.23.0",
                "code"        => "28.23.01",
                "name"        => "28.23.01 - Fabbricazione di cartucce toner",
            ],
            [
                "parent_code" => "28.23.0",
                "code"        => "28.23.09",
                "name"        => "28.23.09 - Fabbricazione di macchine ed altre attrezzature per ufficio (esclusi computer e periferiche)",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.24",
                "name"        => "28.24 - Fabbricazione di utensili portatili a motore",
            ],
            [
                "parent_code" => "28.24",
                "code"        => "28.24.0",
                "name"        => "28.24.0 - Fabbricazione di utensili portatili a motore",
            ],
            [
                "parent_code" => "28.24.0",
                "code"        => "28.24.00",
                "name"        => "28.24.00 - Fabbricazione di utensili portatili a motore",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.25",
                "name"        => "28.25 - Fabbricazione di attrezzature di uso non domestico per la refrigerazione e la ventilazione",
            ],
            [
                "parent_code" => "28.25",
                "code"        => "28.25.0",
                "name"        => "28.25.0 - Fabbricazione di attrezzature di uso non domestico per la refrigerazione e la ventilazione; fabbricazione di condizionatori domestici fissi",
            ],
            [
                "parent_code" => "28.25.0",
                "code"        => "28.25.00",
                "name"        => "28.25.00 - Fabbricazione di attrezzature di uso non domestico per la refrigerazione e la ventilazione; fabbricazione di condizionatori domestici fissi",
            ],
            [
                "parent_code" => "28.2",
                "code"        => "28.29",
                "name"        => "28.29 - Fabbricazione di altre macchine di impiego generale n.c.a.",
            ],
            [
                "parent_code" => "28.29",
                "code"        => "28.29.1",
                "name"        => "28.29.1 - Fabbricazione di bilance e di macchine automatiche per la vendita e la distribuzione (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "28.29.1",
                "code"        => "28.29.10",
                "name"        => "28.29.10 - Fabbricazione di bilance e di macchine automatiche per la vendita e la distribuzione (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "28.29",
                "code"        => "28.29.2",
                "name"        => "28.29.2 - Fabbricazione di macchine e apparecchi per le industrie chimiche, petrolchimiche e petrolifere (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.29.2",
                "code"        => "28.29.20",
                "name"        => "28.29.20 - Fabbricazione di macchine e apparecchi per le industrie chimiche, petrolchimiche e petrolifere (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.29",
                "code"        => "28.29.3",
                "name"        => "28.29.3 - Fabbricazione di macchine automatiche per la dosatura, la confezione e per l'imballaggio (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.29.3",
                "code"        => "28.29.30",
                "name"        => "28.29.30 - Fabbricazione di macchine automatiche per la dosatura, la confezione e per l'imballaggio (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.29",
                "code"        => "28.29.9",
                "name"        => "28.29.9 - Fabbricazione di macchine di impiego generale ed altro materiale meccanico n.c.a.",
            ],
            [
                "parent_code" => "28.29.9",
                "code"        => "28.29.91",
                "name"        => "28.29.91 - Fabbricazione di apparecchi per depurare e filtrare liquidi e gas per uso non domestico",
            ],
            [
                "parent_code" => "28.29.9",
                "code"        => "28.29.92",
                "name"        => "28.29.92 - Fabbricazione di macchine per la pulizia (incluse le lavastoviglie) per uso non domestico",
            ],
            [
                "parent_code" => "28.29.9",
                "code"        => "28.29.93",
                "name"        => "28.29.93 - Fabbricazione di livelle, metri doppi a nastro e utensili simili, strumenti di precisione per meccanica (esclusi quelli ottici)",
            ],
            [
                "parent_code" => "28.29.9",
                "code"        => "28.29.99",
                "name"        => "28.29.99 - Fabbricazione di altro materiale meccanico e di altre macchine di impiego generale n.c.a.",
            ],
            [
                "parent_code" => "28",
                "code"        => "28.3",
                "name"        => "28.3 - FABBRICAZIONE DI MACCHINE PER L'AGRICOLTURA E LA SILVICOLTURA",
            ],
            [
                "parent_code" => "28.3",
                "code"        => "28.30",
                "name"        => "28.30 - Fabbricazione di macchine per l'agricoltura e la silvicoltura",
            ],
            [
                "parent_code" => "28.30",
                "code"        => "28.30.1",
                "name"        => "28.30.1 - Fabbricazione di trattori agricoli",
            ],
            [
                "parent_code" => "28.30.1",
                "code"        => "28.30.10",
                "name"        => "28.30.10 - Fabbricazione di trattori agricoli",
            ],
            [
                "parent_code" => "28.30",
                "code"        => "28.30.9",
                "name"        => "28.30.9 - Fabbricazione di altre macchine per l'agricoltura, la silvicoltura e la zootecnia",
            ],
            [
                "parent_code" => "28.30.9",
                "code"        => "28.30.90",
                "name"        => "28.30.90 - Fabbricazione di altre macchine per l'agricoltura, la silvicoltura e la zootecnia",
            ],
            [
                "parent_code" => "28",
                "code"        => "28.4",
                "name"        => "28.4 - FABBRICAZIONE DI MACCHINE PER LA FORMATURA DEI METALLI E DI ALTRE MACCHINE UTENSILI",
            ],
            [
                "parent_code" => "28.4",
                "code"        => "28.41",
                "name"        => "28.41 - Fabbricazione di macchine utensili per la formatura dei metalli",
            ],
            [
                "parent_code" => "28.41",
                "code"        => "28.41.0",
                "name"        => "28.41.0 - Fabbricazione di macchine utensili per la formatura dei metalli (incluse parti e accessori ed escluse le parti intercambiabili)",
            ],
            [
                "parent_code" => "28.41.0",
                "code"        => "28.41.00",
                "name"        => "28.41.00 - Fabbricazione di macchine utensili per la formatura dei metalli (incluse parti e accessori ed escluse le parti intercambiabili)",
            ],
            [
                "parent_code" => "28.4",
                "code"        => "28.49",
                "name"        => "28.49 - Fabbricazione di altre macchine utensili",
            ],
            [
                "parent_code" => "28.49",
                "code"        => "28.49.0",
                "name"        => "28.49.0 - Fabbricazione di altre macchine utensili (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.49.0",
                "code"        => "28.49.01",
                "name"        => "28.49.01 - Fabbricazione di macchine per la galvanostegia",
            ],
            [
                "parent_code" => "28.49.0",
                "code"        => "28.49.09",
                "name"        => "28.49.09 - Fabbricazione di altre macchine utensili (incluse parti e accessori) n.c.a.",
            ],
            [
                "parent_code" => "28",
                "code"        => "28.9",
                "name"        => "28.9 - FABBRICAZIONE DI ALTRE MACCHINE PER IMPIEGHI SPECIALI",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.91",
                "name"        => "28.91 - Fabbricazione di macchine per la metallurgia",
            ],
            [
                "parent_code" => "28.91",
                "code"        => "28.91.0",
                "name"        => "28.91.0 - Fabbricazione di macchine per la metallurgia (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.91.0",
                "code"        => "28.91.00",
                "name"        => "28.91.00 - Fabbricazione di macchine per la metallurgia (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.92",
                "name"        => "28.92 - Fabbricazione di macchine da miniera, cava e cantiere",
            ],
            [
                "parent_code" => "28.92",
                "code"        => "28.92.0",
                "name"        => "28.92.0 - Fabbricazione di macchine da miniera, cava e cantiere (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.92.0",
                "code"        => "28.92.01",
                "name"        => "28.92.01 - Fabbricazione di macchine per il trasporto a cassone ribaltabile per impiego specifico in miniere, cave e cantieri",
            ],
            [
                "parent_code" => "28.92.0",
                "code"        => "28.92.09",
                "name"        => "28.92.09 - Fabbricazione di altre macchine da miniera, cava e cantiere (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.93",
                "name"        => "28.93 - Fabbricazione di macchine per l'industria alimentare, delle bevande e del tabacco",
            ],
            [
                "parent_code" => "28.93",
                "code"        => "28.93.0",
                "name"        => "28.93.0 - Fabbricazione di macchine per l'industria alimentare, delle bevande e del tabacco (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.93.0",
                "code"        => "28.93.00",
                "name"        => "28.93.00 - Fabbricazione di macchine per l'industria alimentare, delle bevande e del tabacco (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.94",
                "name"        => "28.94 - Fabbricazione di macchine per le industrie tessili, dell'abbigliamento e del cuoio (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94",
                "code"        => "28.94.1",
                "name"        => "28.94.1 - Fabbricazione di macchine tessili, di macchine e di impianti per il trattamento ausiliario dei tessili, di macchine per cucire e per maglieria (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94.1",
                "code"        => "28.94.10",
                "name"        => "28.94.10 - Fabbricazione di macchine tessili, di macchine e di impianti per il trattamento ausiliario dei tessili, di macchine per cucire e per maglieria (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94",
                "code"        => "28.94.2",
                "name"        => "28.94.2 - Fabbricazione di macchine e apparecchi per l'industria delle pelli, del cuoio e delle calzature (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94.2",
                "code"        => "28.94.20",
                "name"        => "28.94.20 - Fabbricazione di macchine e apparecchi per l'industria delle pelli, del cuoio e delle calzature (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94",
                "code"        => "28.94.3",
                "name"        => "28.94.3 - Fabbricazione di apparecchiature e di macchine per lavanderie e stirerie (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.94.3",
                "code"        => "28.94.30",
                "name"        => "28.94.30 - Fabbricazione di apparecchiature e di macchine per lavanderie e stirerie (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.95",
                "name"        => "28.95 - Fabbricazione di macchine per l'industria della carta e del cartone (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.95",
                "code"        => "28.95.0",
                "name"        => "28.95.0 - Fabbricazione di macchine per l'industria della carta e del cartone (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.95.0",
                "code"        => "28.95.00",
                "name"        => "28.95.00 - Fabbricazione di macchine per l'industria della carta e del cartone (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.96",
                "name"        => "28.96 - Fabbricazione di macchine per l'industria delle materie plastiche e della gomma (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.96",
                "code"        => "28.96.0",
                "name"        => "28.96.0 - Fabbricazione di macchine per l'industria delle materie plastiche e della gomma (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.96.0",
                "code"        => "28.96.00",
                "name"        => "28.96.00 - Fabbricazione di macchine per l'industria delle materie plastiche e della gomma (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.9",
                "code"        => "28.99",
                "name"        => "28.99 - Fabbricazione di macchine per impieghi speciali n.c.a. (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99",
                "code"        => "28.99.1",
                "name"        => "28.99.1 - Fabbricazione di macchine per la stampa e la legatoria (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99.1",
                "code"        => "28.99.10",
                "name"        => "28.99.10 - Fabbricazione di macchine per la stampa e la legatoria (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99",
                "code"        => "28.99.2",
                "name"        => "28.99.2 - Fabbricazione di robot industriali per usi molteplici (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99.2",
                "code"        => "28.99.20",
                "name"        => "28.99.20 - Fabbricazione di robot industriali per usi molteplici (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99",
                "code"        => "28.99.3",
                "name"        => "28.99.3 - Fabbricazione di apparecchi per istituti di bellezza e centri di benessere",
            ],
            [
                "parent_code" => "28.99.3",
                "code"        => "28.99.30",
                "name"        => "28.99.30 - Fabbricazione di apparecchi per istituti di bellezza e centri di benessere",
            ],
            [
                "parent_code" => "28.99",
                "code"        => "28.99.9",
                "name"        => "28.99.9 - Fabbricazione di altre macchine per impieghi speciali n.c.a. (incluse parti e accessori)",
            ],
            [
                "parent_code" => "28.99.9",
                "code"        => "28.99.91",
                "name"        => "28.99.91 - Fabbricazione di apparecchiature per il lancio di aeromobili, catapulte per portaerei e apparecchiature simili",
            ],
            [
                "parent_code" => "28.99.9",
                "code"        => "28.99.92",
                "name"        => "28.99.92 - Fabbricazione di giostre, altalene ed altre attrezzature per parchi di divertimento",
            ],
            [
                "parent_code" => "28.99.9",
                "code"        => "28.99.93",
                "name"        => "28.99.93 - Fabbricazione di apparecchiature per l'allineamento e il bilanciamento delle ruote; altre apparecchiature per il bilanciamento",
            ],
            [
                "parent_code" => "28.99.9",
                "code"        => "28.99.99",
                "name"        => "28.99.99 - Fabbricazione di altre macchine ed attrezzature per impieghi speciali n.c.a. (incluse parti e accessori)",
            ],
            [
                "parent_code" => "C",
                "code"        => "29",
                "name"        => "29 - FABBRICAZIONE DI AUTOVEICOLI, RIMORCHI E SEMIRIMORCHI",
            ],
            [
                "parent_code" => "29",
                "code"        => "29.1",
                "name"        => "29.1 - FABBRICAZIONE DI AUTOVEICOLI",
            ],
            [
                "parent_code" => "29.1",
                "code"        => "29.10",
                "name"        => "29.10 - Fabbricazione di autoveicoli",
            ],
            [
                "parent_code" => "29.10",
                "code"        => "29.10.0",
                "name"        => "29.10.0 - Fabbricazione di autoveicoli",
            ],
            [
                "parent_code" => "29.10.0",
                "code"        => "29.10.00",
                "name"        => "29.10.00 - Fabbricazione di autoveicoli",
            ],
            [
                "parent_code" => "29",
                "code"        => "29.2",
                "name"        => "29.2 - FABBRICAZIONE DI CARROZZERIE PER AUTOVEICOLI, RIMORCHI E SEMIRIMORCHI",
            ],
            [
                "parent_code" => "29.2",
                "code"        => "29.20",
                "name"        => "29.20 - Fabbricazione di carrozzerie per autoveicoli, rimorchi e semirimorchi",
            ],
            [
                "parent_code" => "29.20",
                "code"        => "29.20.0",
                "name"        => "29.20.0 - Fabbricazione di carrozzerie per autoveicoli, rimorchi e semirimorchi",
            ],
            [
                "parent_code" => "29.20.0",
                "code"        => "29.20.00",
                "name"        => "29.20.00 - Fabbricazione di carrozzerie per autoveicoli, rimorchi e semirimorchi",
            ],
            [
                "parent_code" => "29",
                "code"        => "29.3",
                "name"        => "29.3 - FABBRICAZIONE DI PARTI ED ACCESSORI PER AUTOVEICOLI E LORO MOTORI",
            ],
            [
                "parent_code" => "29.3",
                "code"        => "29.31",
                "name"        => "29.31 - Fabbricazione di apparecchiature elettriche ed elettroniche per autoveicoli e loro motori",
            ],
            [
                "parent_code" => "29.31",
                "code"        => "29.31.0",
                "name"        => "29.31.0 - Fabbricazione di apparecchiature elettriche ed elettroniche per autoveicoli e loro motori",
            ],
            [
                "parent_code" => "29.31.0",
                "code"        => "29.31.00",
                "name"        => "29.31.00 - Fabbricazione di apparecchiature elettriche ed elettroniche per autoveicoli e loro motori",
            ],
            [
                "parent_code" => "29.3",
                "code"        => "29.32",
                "name"        => "29.32 - Fabbricazione di altre parti ed accessori per autoveicoli",
            ],
            [
                "parent_code" => "29.32",
                "code"        => "29.32.0",
                "name"        => "29.32.0 - Fabbricazione di altre parti ed accessori per autoveicoli",
            ],
            [
                "parent_code" => "29.32.0",
                "code"        => "29.32.01",
                "name"        => "29.32.01 - Fabbricazione di sedili per autoveicoli",
            ],
            [
                "parent_code" => "29.32.0",
                "code"        => "29.32.09",
                "name"        => "29.32.09 - Fabbricazione di altre parti ed accessori per autoveicoli e loro motori n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "30",
                "name"        => "30 - FABBRICAZIONE DI ALTRI MEZZI DI TRASPORTO",
            ],
            [
                "parent_code" => "30",
                "code"        => "30.1",
                "name"        => "30.1 - COSTRUZIONE DI NAVI E IMBARCAZIONI",
            ],
            [
                "parent_code" => "30.1",
                "code"        => "30.11",
                "name"        => "30.11 - Costruzione di navi e di strutture galleggianti",
            ],
            [
                "parent_code" => "30.11",
                "code"        => "30.11.0",
                "name"        => "30.11.0 - Cantieri navali per costruzioni metalliche e non metalliche",
            ],
            [
                "parent_code" => "30.11.0",
                "code"        => "30.11.01",
                "name"        => "30.11.01 - Fabbricazione di sedili per navi",
            ],
            [
                "parent_code" => "30.11.0",
                "code"        => "30.11.02",
                "name"        => "30.11.02 - Cantieri navali per costruzioni metalliche e non metalliche (esclusi i sedili per navi)",
            ],
            [
                "parent_code" => "30.1",
                "code"        => "30.12",
                "name"        => "30.12 - Costruzione di imbarcazioni da diporto e sportive",
            ],
            [
                "parent_code" => "30.12",
                "code"        => "30.12.0",
                "name"        => "30.12.0 - Costruzione di imbarcazioni da diporto e sportive",
            ],
            [
                "parent_code" => "30.12.0",
                "code"        => "30.12.00",
                "name"        => "30.12.00 - Costruzione di imbarcazioni da diporto e sportive",
            ],
            [
                "parent_code" => "30",
                "code"        => "30.2",
                "name"        => "30.2 - COSTRUZIONE DI LOCOMOTIVE E DI MATERIALE ROTABILE FERRO-TRANVIARIO",
            ],
            [
                "parent_code" => "30.2",
                "code"        => "30.20",
                "name"        => "30.20 - Costruzione di locomotive e di materiale rotabile ferro-tranviario",
            ],
            [
                "parent_code" => "30.20",
                "code"        => "30.20.0",
                "name"        => "30.20.0 - Costruzione di materiale rotabile ferroviario, tranviario, filoviario, per metropolitane e per miniere",
            ],
            [
                "parent_code" => "30.20.0",
                "code"        => "30.20.01",
                "name"        => "30.20.01 - Fabbricazione di sedili per tram, filovie e metropolitane",
            ],
            [
                "parent_code" => "30.20.0",
                "code"        => "30.20.02",
                "name"        => "30.20.02 - Costruzione di altro materiale rotabile ferroviario, tranviario, filoviario, per metropolitane e per miniere",
            ],
            [
                "parent_code" => "30",
                "code"        => "30.3",
                "name"        => "30.3 - FABBRICAZIONE DI AEROMOBILI, DI VEICOLI SPAZIALI E DEI RELATIVI DISPOSITIVI",
            ],
            [
                "parent_code" => "30.3",
                "code"        => "30.30",
                "name"        => "30.30 - Fabbricazione di aeromobili, di veicoli spaziali e dei relativi dispositivi",
            ],
            [
                "parent_code" => "30.30",
                "code"        => "30.30.0",
                "name"        => "30.30.0 - Fabbricazione di aeromobili, di veicoli spaziali e dei relativi dispositivi",
            ],
            [
                "parent_code" => "30.30.0",
                "code"        => "30.30.01",
                "name"        => "30.30.01 - Fabbricazione di sedili per aeromobili",
            ],
            [
                "parent_code" => "30.30.0",
                "code"        => "30.30.02",
                "name"        => "30.30.02 - Fabbricazione di missili balistici",
            ],
            [
                "parent_code" => "30.30.0",
                "code"        => "30.30.09",
                "name"        => "30.30.09 - Fabbricazione di aeromobili, di veicoli spaziali e dei relativi dispositivi n.c.a.",
            ],
            [
                "parent_code" => "30",
                "code"        => "30.4",
                "name"        => "30.4 - FABBRICAZIONE DI VEICOLI MILITARI DA COMBATTIMENTO",
            ],
            [
                "parent_code" => "30.4",
                "code"        => "30.40",
                "name"        => "30.40 - Fabbricazione di veicoli militari da combattimento",
            ],
            [
                "parent_code" => "30.40",
                "code"        => "30.40.0",
                "name"        => "30.40.0 - Fabbricazione di veicoli militari da combattimento",
            ],
            [
                "parent_code" => "30.40.0",
                "code"        => "30.40.00",
                "name"        => "30.40.00 - Fabbricazione di veicoli militari da combattimento",
            ],
            [
                "parent_code" => "30",
                "code"        => "30.9",
                "name"        => "30.9 - FABBRICAZIONE DI MEZZI DI TRASPORTO N.C.A.",
            ],
            [
                "parent_code" => "30.9",
                "code"        => "30.91",
                "name"        => "30.91 - Fabbricazione di motocicli (inclusi i motori)",
            ],
            [
                "parent_code" => "30.91",
                "code"        => "30.91.1",
                "name"        => "30.91.1 - Fabbricazione di motocicli e motoveicoli (inclusi i motori)",
            ],
            [
                "parent_code" => "30.91.1",
                "code"        => "30.91.11",
                "name"        => "30.91.11 - Fabbricazione di motori per motocicli",
            ],
            [
                "parent_code" => "30.91.1",
                "code"        => "30.91.12",
                "name"        => "30.91.12 - Fabbricazione di motocicli",
            ],
            [
                "parent_code" => "30.91",
                "code"        => "30.91.2",
                "name"        => "30.91.2 - Fabbricazione di accessori e pezzi staccati per motocicli e ciclomotori",
            ],
            [
                "parent_code" => "30.91.2",
                "code"        => "30.91.20",
                "name"        => "30.91.20 - Fabbricazione di accessori e pezzi staccati per motocicli e ciclomotori",
            ],
            [
                "parent_code" => "30.9",
                "code"        => "30.92",
                "name"        => "30.92 - Fabbricazione di biciclette e veicoli per invalidi",
            ],
            [
                "parent_code" => "30.92",
                "code"        => "30.92.1",
                "name"        => "30.92.1 - Fabbricazione e montaggio di biciclette",
            ],
            [
                "parent_code" => "30.92.1",
                "code"        => "30.92.10",
                "name"        => "30.92.10 - Fabbricazione e montaggio di biciclette",
            ],
            [
                "parent_code" => "30.92",
                "code"        => "30.92.2",
                "name"        => "30.92.2 - Fabbricazione di parti ed accessori per biciclette",
            ],
            [
                "parent_code" => "30.92.2",
                "code"        => "30.92.20",
                "name"        => "30.92.20 - Fabbricazione di parti ed accessori per biciclette",
            ],
            [
                "parent_code" => "30.92",
                "code"        => "30.92.3",
                "name"        => "30.92.3 - Fabbricazione di veicoli per invalidi (incluse parti e accessori)",
            ],
            [
                "parent_code" => "30.92.3",
                "code"        => "30.92.30",
                "name"        => "30.92.30 - Fabbricazione di veicoli per invalidi (incluse parti e accessori)",
            ],
            [
                "parent_code" => "30.92",
                "code"        => "30.92.4",
                "name"        => "30.92.4 - Fabbricazione di carrozzine e passeggini per neonati",
            ],
            [
                "parent_code" => "30.92.4",
                "code"        => "30.92.40",
                "name"        => "30.92.40 - Fabbricazione di carrozzine e passeggini per neonati",
            ],
            [
                "parent_code" => "30.9",
                "code"        => "30.99",
                "name"        => "30.99 - Fabbricazione di altri mezzi di trasporto n.c.a.",
            ],
            [
                "parent_code" => "30.99",
                "code"        => "30.99.0",
                "name"        => "30.99.0 - Fabbricazione di veicoli a trazione manuale o animale",
            ],
            [
                "parent_code" => "30.99.0",
                "code"        => "30.99.00",
                "name"        => "30.99.00 - Fabbricazione di veicoli a trazione manuale o animale",
            ],
            [
                "parent_code" => "C",
                "code"        => "31",
                "name"        => "31 - FABBRICAZIONE DI MOBILI",
            ],
            [
                "parent_code" => "31",
                "code"        => "31.0",
                "name"        => "31.0 - FABBRICAZIONE DI MOBILI",
            ],
            [
                "parent_code" => "31.0",
                "code"        => "31.01",
                "name"        => "31.01 - Fabbricazione di mobili per ufficio e negozi",
            ],
            [
                "parent_code" => "31.01",
                "code"        => "31.01.1",
                "name"        => "31.01.1 - Fabbricazione di sedie e poltrone per ufficio e negozi",
            ],
            [
                "parent_code" => "31.01.1",
                "code"        => "31.01.10",
                "name"        => "31.01.10 - Fabbricazione di sedie e poltrone per ufficio e negozi",
            ],
            [
                "parent_code" => "31.01",
                "code"        => "31.01.2",
                "name"        => "31.01.2 - Fabbricazione di altri mobili per ufficio e negozi",
            ],
            [
                "parent_code" => "31.01.2",
                "code"        => "31.01.21",
                "name"        => "31.01.21 - Fabbricazione di altri mobili metallici per ufficio e negozi",
            ],
            [
                "parent_code" => "31.01.2",
                "code"        => "31.01.22",
                "name"        => "31.01.22 - Fabbricazione di altri mobili non metallici per ufficio e negozi",
            ],
            [
                "parent_code" => "31.0",
                "code"        => "31.02",
                "name"        => "31.02 - Fabbricazione di mobili per cucina",
            ],
            [
                "parent_code" => "31.02",
                "code"        => "31.02.0",
                "name"        => "31.02.0 - Fabbricazione di mobili per cucina",
            ],
            [
                "parent_code" => "31.02.0",
                "code"        => "31.02.00",
                "name"        => "31.02.00 - Fabbricazione di mobili per cucina",
            ],
            [
                "parent_code" => "31.0",
                "code"        => "31.03",
                "name"        => "31.03 - Fabbricazione di materassi",
            ],
            [
                "parent_code" => "31.03",
                "code"        => "31.03.0",
                "name"        => "31.03.0 - Fabbricazione di materassi",
            ],
            [
                "parent_code" => "31.03.0",
                "code"        => "31.03.00",
                "name"        => "31.03.00 - Fabbricazione di materassi",
            ],
            [
                "parent_code" => "31.0",
                "code"        => "31.09",
                "name"        => "31.09 - Fabbricazione di altri mobili",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.1",
                "name"        => "31.09.1 - Fabbricazione di mobili per arredo domestico",
            ],
            [
                "parent_code" => "31.09.1",
                "code"        => "31.09.10",
                "name"        => "31.09.10 - Fabbricazione di mobili per arredo domestico",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.2",
                "name"        => "31.09.2 - Fabbricazione di sedie e sedili (esclusi quelli per aeromobili, autoveicoli, navi, treni, ufficio e negozi)",
            ],
            [
                "parent_code" => "31.09.2",
                "code"        => "31.09.20",
                "name"        => "31.09.20 - Fabbricazione di sedie e sedili (esclusi quelli per aeromobili, autoveicoli, navi, treni, ufficio e negozi)",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.3",
                "name"        => "31.09.3 - Fabbricazione di poltrone e divani",
            ],
            [
                "parent_code" => "31.09.3",
                "code"        => "31.09.30",
                "name"        => "31.09.30 - Fabbricazione di poltrone e divani",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.4",
                "name"        => "31.09.4 - Fabbricazione di parti e accessori di mobili",
            ],
            [
                "parent_code" => "31.09.4",
                "code"        => "31.09.40",
                "name"        => "31.09.40 - Fabbricazione di parti e accessori di mobili",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.5",
                "name"        => "31.09.5 - Finitura di mobili",
            ],
            [
                "parent_code" => "31.09.5",
                "code"        => "31.09.50",
                "name"        => "31.09.50 - Finitura di mobili",
            ],
            [
                "parent_code" => "31.09",
                "code"        => "31.09.9",
                "name"        => "31.09.9 - Fabbricazione di altri mobili (inclusi quelli per arredo esterno)",
            ],
            [
                "parent_code" => "31.09.9",
                "code"        => "31.09.90",
                "name"        => "31.09.90 - Fabbricazione di altri mobili (inclusi quelli per arredo esterno)",
            ],
            [
                "parent_code" => "C",
                "code"        => "32",
                "name"        => "32 - ALTRE INDUSTRIE MANIFATTURIERE",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.1",
                "name"        => "32.1 - FABBRICAZIONE DI GIOIELLERIA, BIGIOTTERIA E ARTICOLI CONNESSI; LAVORAZIONE DELLE PIETRE PREZIOSE",
            ],
            [
                "parent_code" => "32.1",
                "code"        => "32.11",
                "name"        => "32.11 - Coniazione di monete",
            ],
            [
                "parent_code" => "32.11",
                "code"        => "32.11.0",
                "name"        => "32.11.0 - Coniazione di monete",
            ],
            [
                "parent_code" => "32.11.0",
                "code"        => "32.11.00",
                "name"        => "32.11.00 - Coniazione di monete",
            ],
            [
                "parent_code" => "32.1",
                "code"        => "32.12",
                "name"        => "32.12 - Fabbricazione di oggetti di gioielleria e oreficeria e articoli connessi",
            ],
            [
                "parent_code" => "32.12",
                "code"        => "32.12.1",
                "name"        => "32.12.1 - Fabbricazione di oggetti di gioielleria ed oreficeria in metalli preziosi o rivestiti di metalli preziosi",
            ],
            [
                "parent_code" => "32.12.1",
                "code"        => "32.12.10",
                "name"        => "32.12.10 - Fabbricazione di oggetti di gioielleria ed oreficeria in metalli preziosi o rivestiti di metalli preziosi",
            ],
            [
                "parent_code" => "32.12",
                "code"        => "32.12.2",
                "name"        => "32.12.2 - Lavorazione di pietre preziose e semipreziose per gioielleria e per uso industriale",
            ],
            [
                "parent_code" => "32.12.2",
                "code"        => "32.12.20",
                "name"        => "32.12.20 - Lavorazione di pietre preziose e semipreziose per gioielleria e per uso industriale",
            ],
            [
                "parent_code" => "32.1",
                "code"        => "32.13",
                "name"        => "32.13 - Fabbricazione di bigiotteria e articoli simili",
            ],
            [
                "parent_code" => "32.13",
                "code"        => "32.13.0",
                "name"        => "32.13.0 - Fabbricazione di bigiotteria e articoli simili",
            ],
            [
                "parent_code" => "32.13.0",
                "code"        => "32.13.01",
                "name"        => "32.13.01 - Fabbricazione di cinturini metallici per orologi (esclusi quelli in metalli preziosi)",
            ],
            [
                "parent_code" => "32.13.0",
                "code"        => "32.13.09",
                "name"        => "32.13.09 - Fabbricazione di bigiotteria e articoli simili n.c.a.",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.2",
                "name"        => "32.2 - FABBRICAZIONE DI STRUMENTI MUSICALI",
            ],
            [
                "parent_code" => "32.2",
                "code"        => "32.20",
                "name"        => "32.20 - Fabbricazione di strumenti musicali",
            ],
            [
                "parent_code" => "32.20",
                "code"        => "32.20.0",
                "name"        => "32.20.0 - Fabbricazione di strumenti musicali (incluse parti e accessori)",
            ],
            [
                "parent_code" => "32.20.0",
                "code"        => "32.20.00",
                "name"        => "32.20.00 - Fabbricazione di strumenti musicali (incluse parti e accessori)",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.3",
                "name"        => "32.3 - FABBRICAZIONE DI ARTICOLI SPORTIVI",
            ],
            [
                "parent_code" => "32.3",
                "code"        => "32.30",
                "name"        => "32.30 - Fabbricazione di articoli sportivi",
            ],
            [
                "parent_code" => "32.30",
                "code"        => "32.30.0",
                "name"        => "32.30.0 - Fabbricazione di articoli sportivi",
            ],
            [
                "parent_code" => "32.30.0",
                "code"        => "32.30.00",
                "name"        => "32.30.00 - Fabbricazione di articoli sportivi",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.4",
                "name"        => "32.4 - FABBRICAZIONE DI GIOCHI E GIOCATTOLI",
            ],
            [
                "parent_code" => "32.4",
                "code"        => "32.40",
                "name"        => "32.40 - Fabbricazione di giochi e giocattoli",
            ],
            [
                "parent_code" => "32.40",
                "code"        => "32.40.1",
                "name"        => "32.40.1 - Fabbricazione di giochi (inclusi i giochi elettronici)",
            ],
            [
                "parent_code" => "32.40.1",
                "code"        => "32.40.10",
                "name"        => "32.40.10 - Fabbricazione di giochi (inclusi i giochi elettronici)",
            ],
            [
                "parent_code" => "32.40",
                "code"        => "32.40.2",
                "name"        => "32.40.2 - Fabbricazione di giocattoli (inclusi i tricicli e gli strumenti musicali giocattolo)",
            ],
            [
                "parent_code" => "32.40.2",
                "code"        => "32.40.20",
                "name"        => "32.40.20 - Fabbricazione di giocattoli (inclusi i tricicli e gli strumenti musicali giocattolo)",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.5",
                "name"        => "32.5 - FABBRICAZIONE DI STRUMENTI E FORNITURE MEDICHE E DENTISTICHE",
            ],
            [
                "parent_code" => "32.5",
                "code"        => "32.50",
                "name"        => "32.50 - Fabbricazione di strumenti e forniture mediche e dentistiche",
            ],
            [
                "parent_code" => "32.50",
                "code"        => "32.50.1",
                "name"        => "32.50.1 - Fabbricazione di mobili per uso medico, apparecchi medicali, di materiale medico-chirurgico e veterinario, di apparecchi e strumenti per odontoiatria (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "32.50.1",
                "code"        => "32.50.11",
                "name"        => "32.50.11 - Fabbricazione di materiale medico-chirurgico e veterinario",
            ],
            [
                "parent_code" => "32.50.1",
                "code"        => "32.50.12",
                "name"        => "32.50.12 - Fabbricazione di apparecchi e strumenti per odontoiatria e di apparecchi medicali (incluse parti staccate e accessori)",
            ],
            [
                "parent_code" => "32.50.1",
                "code"        => "32.50.13",
                "name"        => "32.50.13 - Fabbricazione di mobili per uso medico, chirurgico, odontoiatrico e veterinario",
            ],
            [
                "parent_code" => "32.50.1",
                "code"        => "32.50.14",
                "name"        => "32.50.14 - Fabbricazione di centrifughe per laboratori",
            ],
            [
                "parent_code" => "32.50",
                "code"        => "32.50.2",
                "name"        => "32.50.2 - Fabbricazione di protesi dentarie (inclusa riparazione)",
            ],
            [
                "parent_code" => "32.50.2",
                "code"        => "32.50.20",
                "name"        => "32.50.20 - Fabbricazione di protesi dentarie (inclusa riparazione)",
            ],
            [
                "parent_code" => "32.50",
                "code"        => "32.50.3",
                "name"        => "32.50.3 - Fabbricazione di protesi ortopediche, altre protesi ed ausili (inclusa riparazione)",
            ],
            [
                "parent_code" => "32.50.3",
                "code"        => "32.50.30",
                "name"        => "32.50.30 - Fabbricazione di protesi ortopediche, altre protesi ed ausili (inclusa riparazione)",
            ],
            [
                "parent_code" => "32.50",
                "code"        => "32.50.4",
                "name"        => "32.50.4 - Fabbricazione di lenti oftalmiche",
            ],
            [
                "parent_code" => "32.50.4",
                "code"        => "32.50.40",
                "name"        => "32.50.40 - Fabbricazione di lenti oftalmiche",
            ],
            [
                "parent_code" => "32.50",
                "code"        => "32.50.5",
                "name"        => "32.50.5 - Fabbricazione di armature per occhiali di qualsiasi tipo; montatura in serie di occhiali comuni",
            ],
            [
                "parent_code" => "32.50.5",
                "code"        => "32.50.50",
                "name"        => "32.50.50 - Fabbricazione di armature per occhiali di qualsiasi tipo; montatura in serie di occhiali comuni",
            ],
            [
                "parent_code" => "32",
                "code"        => "32.9",
                "name"        => "32.9 - INDUSTRIE MANIFATTURIERE N.C.A.",
            ],
            [
                "parent_code" => "32.9",
                "code"        => "32.91",
                "name"        => "32.91 - Fabbricazione di scope e spazzole",
            ],
            [
                "parent_code" => "32.91",
                "code"        => "32.91.0",
                "name"        => "32.91.0 - Fabbricazione di scope e spazzole",
            ],
            [
                "parent_code" => "32.91.0",
                "code"        => "32.91.00",
                "name"        => "32.91.00 - Fabbricazione di scope e spazzole",
            ],
            [
                "parent_code" => "32.9",
                "code"        => "32.99",
                "name"        => "32.99 - Altre industrie manifatturiere n.c.a.",
            ],
            [
                "parent_code" => "32.99",
                "code"        => "32.99.1",
                "name"        => "32.99.1 - Fabbricazione di attrezzature ed articoli di vestiario protettivi di sicurezza",
            ],
            [
                "parent_code" => "32.99.1",
                "code"        => "32.99.11",
                "name"        => "32.99.11 - Fabbricazione di articoli di vestiario ignifughi e protettivi di sicurezza",
            ],
            [
                "parent_code" => "32.99.1",
                "code"        => "32.99.12",
                "name"        => "32.99.12 - Fabbricazione di articoli in plastica per la sicurezza personale",
            ],
            [
                "parent_code" => "32.99.1",
                "code"        => "32.99.13",
                "name"        => "32.99.13 - Fabbricazione di articoli in metallo per la sicurezza personale",
            ],
            [
                "parent_code" => "32.99.1",
                "code"        => "32.99.14",
                "name"        => "32.99.14 - Fabbricazione di maschere antigas",
            ],
            [
                "parent_code" => "32.99.1",
                "code"        => "32.99.19",
                "name"        => "32.99.19 - Fabbricazione di altre attrezzature ed altri articoli protettivi di sicurezza",
            ],
            [
                "parent_code" => "32.99",
                "code"        => "32.99.2",
                "name"        => "32.99.2 - Fabbricazione di ombrelli, bottoni, chiusure lampo, parrucche e affini",
            ],
            [
                "parent_code" => "32.99.2",
                "code"        => "32.99.20",
                "name"        => "32.99.20 - Fabbricazione di ombrelli, bottoni, chiusure lampo, parrucche e affini",
            ],
            [
                "parent_code" => "32.99",
                "code"        => "32.99.3",
                "name"        => "32.99.3 - Fabbricazione di oggetti di cancelleria",
            ],
            [
                "parent_code" => "32.99.3",
                "code"        => "32.99.30",
                "name"        => "32.99.30 - Fabbricazione di oggetti di cancelleria",
            ],
            [
                "parent_code" => "32.99",
                "code"        => "32.99.4",
                "name"        => "32.99.4 - Fabbricazione di casse funebri",
            ],
            [
                "parent_code" => "32.99.4",
                "code"        => "32.99.40",
                "name"        => "32.99.40 - Fabbricazione di casse funebri",
            ],
            [
                "parent_code" => "32.99",
                "code"        => "32.99.9",
                "name"        => "32.99.9 - Fabbricazione di altri articoli n.c.a.",
            ],
            [
                "parent_code" => "32.99.9",
                "code"        => "32.99.90",
                "name"        => "32.99.90 - Fabbricazione di altri articoli n.c.a.",
            ],
            [
                "parent_code" => "C",
                "code"        => "33",
                "name"        => "33 - RIPARAZIONE, MANUTENZIONE ED INSTALLAZIONE DI MACCHINE ED APPARECCHIATURE",
            ],
            [
                "parent_code" => "33",
                "code"        => "33.1",
                "name"        => "33.1 - RIPARAZIONE E MANUTENZIONE DI PRODOTTI IN METALLO, MACCHINE ED APPARECCHIATURE",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.11",
                "name"        => "33.11 - Riparazione e manutenzione di prodotti in metallo",
            ],
            [
                "parent_code" => "33.11",
                "code"        => "33.11.0",
                "name"        => "33.11.0 - Riparazione e manutenzione di prodotti in metallo",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.01",
                "name"        => "33.11.01 - Riparazione e manutenzione di stampi, portastampi, sagome, forme per macchine",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.02",
                "name"        => "33.11.02 - Riparazione e manutenzione di utensileria ad azionamento manuale",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.03",
                "name"        => "33.11.03 - Riparazione e manutenzione di armi, sistemi d'arma e munizioni",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.04",
                "name"        => "33.11.04 - Riparazione e manutenzione di casseforti, forzieri, porte metalliche blindate",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.05",
                "name"        => "33.11.05 - Riparazione e manutenzione di armi bianche",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.06",
                "name"        => "33.11.06 - Riparazione e manutenzione di container",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.07",
                "name"        => "33.11.07 - Riparazione e manutenzione di carrelli per la spesa",
            ],
            [
                "parent_code" => "33.11.0",
                "code"        => "33.11.09",
                "name"        => "33.11.09 - Riparazione e manutenzione di altri prodotti in metallo",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.12",
                "name"        => "33.12 - Riparazione e manutenzione di macchinari",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.1",
                "name"        => "33.12.1 - Riparazione e manutenzione di macchine di impiego generale",
            ],
            [
                "parent_code" => "33.12.1",
                "code"        => "33.12.10",
                "name"        => "33.12.10 - Riparazione e manutenzione di macchine di impiego generale",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.2",
                "name"        => "33.12.2 - Riparazione e manutenzione di forni, fornaci e bruciatori",
            ],
            [
                "parent_code" => "33.12.2",
                "code"        => "33.12.20",
                "name"        => "33.12.20 - Riparazione e manutenzione di forni, fornaci e bruciatori",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.3",
                "name"        => "33.12.3 - Riparazione e manutenzione di macchine e apparecchi di sollevamento e movimentazione (esclusi ascensori)",
            ],
            [
                "parent_code" => "33.12.3",
                "code"        => "33.12.30",
                "name"        => "33.12.30 - Riparazione e manutenzione di macchine e apparecchi di sollevamento e movimentazione (esclusi ascensori)",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.4",
                "name"        => "33.12.4 - Riparazione e manutenzione di attrezzature di uso non domestico per la refrigerazione e la ventilazione",
            ],
            [
                "parent_code" => "33.12.4",
                "code"        => "33.12.40",
                "name"        => "33.12.40 - Riparazione e manutenzione di attrezzature di uso non domestico per la refrigerazione e la ventilazione",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.5",
                "name"        => "33.12.5 - Riparazione e manutenzione di altre macchine di impiego generale",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.51",
                "name"        => "33.12.51 - Riparazione e manutenzione di macchine ed attrezzature per ufficio (esclusi computer, periferiche, fax)",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.52",
                "name"        => "33.12.52 - Riparazione e manutenzione di bilance e macchine automatiche per la vendita e la distribuzione",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.53",
                "name"        => "33.12.53 - Riparazione e manutenzione di macchine per le industrie chimiche, petrolchimiche e petrolifere",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.54",
                "name"        => "33.12.54 - Riparazione e manutenzione di macchine per la dosatura, la confezione e l'imballaggio",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.55",
                "name"        => "33.12.55 - Riparazione e manutenzione di estintori (inclusa la ricarica)",
            ],
            [
                "parent_code" => "33.12.5",
                "code"        => "33.12.59",
                "name"        => "33.12.59 - Riparazione e manutenzione di altre macchine di impiego generale n.c.a.",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.6",
                "name"        => "33.12.6 - Riparazione e manutenzione di trattori agricoli",
            ],
            [
                "parent_code" => "33.12.6",
                "code"        => "33.12.60",
                "name"        => "33.12.60 - Riparazione e manutenzione di trattori agricoli",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.7",
                "name"        => "33.12.7 - Riparazione e manutenzione di altre macchine per l'agricoltura, la silvicoltura e la zootecnia",
            ],
            [
                "parent_code" => "33.12.7",
                "code"        => "33.12.70",
                "name"        => "33.12.70 - Riparazione e manutenzione di altre macchine per l'agricoltura, la silvicoltura e la zootecnia",
            ],
            [
                "parent_code" => "33.12",
                "code"        => "33.12.9",
                "name"        => "33.12.9 - Riparazione e manutenzione di altre macchine per impieghi speciali (incluse le macchine utensili)",
            ],
            [
                "parent_code" => "33.12.9",
                "code"        => "33.12.91",
                "name"        => "33.12.91 - Riparazione e manutenzione di parti intercambiabili per macchine utensili",
            ],
            [
                "parent_code" => "33.12.9",
                "code"        => "33.12.92",
                "name"        => "33.12.92 - Riparazione e manutenzione di giostre, altalene, padiglioni da tiro al bersaglio ed altre attrezzature per parchi di divertimento",
            ],
            [
                "parent_code" => "33.12.9",
                "code"        => "33.12.99",
                "name"        => "33.12.99 - Riparazione e manutenzione di altre macchine per impieghi speciali n.c.a. (incluse le macchine utensili)",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.13",
                "name"        => "33.13 - Riparazione e manutenzione di apparecchiature elettroniche ed ottiche",
            ],
            [
                "parent_code" => "33.13",
                "code"        => "33.13.0",
                "name"        => "33.13.0 - Riparazione e manutenzione di apparecchiature elettroniche ed ottiche (escluse quelle per le telecomunicazioni ed i computer)",
            ],
            [
                "parent_code" => "33.13.0",
                "code"        => "33.13.01",
                "name"        => "33.13.01 - Riparazione e manutenzione di apparecchiature ottiche, fotografiche e cinematografiche (escluse videocamere)",
            ],
            [
                "parent_code" => "33.13.0",
                "code"        => "33.13.03",
                "name"        => "33.13.03 - Riparazione e manutenzione di apparecchi elettromedicali, di materiale medico-chirurgico e veterinario, di apparecchi e strumenti per odontoiatria",
            ],
            [
                "parent_code" => "33.13.0",
                "code"        => "33.13.04",
                "name"        => "33.13.04 - Riparazione e manutenzione di apparati di distillazione per laboratori, di centrifughe per laboratori e di macchinari per pulizia ad ultrasuoni per laboratori",
            ],
            [
                "parent_code" => "33.13.0",
                "code"        => "33.13.09",
                "name"        => "33.13.09 - Riparazione e manutenzione di altre apparecchiature elettroniche (escluse quelle per le telecomunicazioni ed i computer)",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.14",
                "name"        => "33.14 - Riparazione e manutenzione di apparecchiature elettriche",
            ],
            [
                "parent_code" => "33.14",
                "code"        => "33.14.0",
                "name"        => "33.14.0 - Riparazione e manutenzione di apparecchiature elettriche (esclusi gli elettrodomestici)",
            ],
            [
                "parent_code" => "33.14.0",
                "code"        => "33.14.00",
                "name"        => "33.14.00 - Riparazione e manutenzione di apparecchiature elettriche (esclusi gli elettrodomestici)",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.15",
                "name"        => "33.15 - Riparazione e manutenzione di navi e imbarcazioni (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.15",
                "code"        => "33.15.0",
                "name"        => "33.15.0 - Riparazione e manutenzione di navi commerciali e imbarcazioni da diporto (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.15.0",
                "code"        => "33.15.00",
                "name"        => "33.15.00 - Riparazione e manutenzione di navi commerciali e imbarcazioni da diporto (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.16",
                "name"        => "33.16 - Riparazione e manutenzione di aeromobili e di veicoli spaziali",
            ],
            [
                "parent_code" => "33.16",
                "code"        => "33.16.0",
                "name"        => "33.16.0 - Riparazione e manutenzione di aeromobili e di veicoli spaziali",
            ],
            [
                "parent_code" => "33.16.0",
                "code"        => "33.16.00",
                "name"        => "33.16.00 - Riparazione e manutenzione di aeromobili e di veicoli spaziali",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.17",
                "name"        => "33.17 - Riparazione e manutenzione di locomotive e di materiale rotabile ferro-tranviario (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.17",
                "code"        => "33.17.0",
                "name"        => "33.17.0 - Riparazione e manutenzione di materiale rotabile ferroviario, tranviario, filoviario e per metropolitane (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.17.0",
                "code"        => "33.17.00",
                "name"        => "33.17.00 - Riparazione e manutenzione di materiale rotabile ferroviario, tranviario, filoviario e per metropolitane (esclusi i loro motori)",
            ],
            [
                "parent_code" => "33.1",
                "code"        => "33.19",
                "name"        => "33.19 - Riparazione di altre apparecchiature",
            ],
            [
                "parent_code" => "33.19",
                "code"        => "33.19.0",
                "name"        => "33.19.0 - Riparazione di altre apparecchiature",
            ],
            [
                "parent_code" => "33.19.0",
                "code"        => "33.19.01",
                "name"        => "33.19.01 - Riparazioni di pallets e contenitori in legno per trasporto",
            ],
            [
                "parent_code" => "33.19.0",
                "code"        => "33.19.02",
                "name"        => "33.19.02 - Riparazione di prodotti in gomma",
            ],
            [
                "parent_code" => "33.19.0",
                "code"        => "33.19.03",
                "name"        => "33.19.03 - Riparazione di articoli in vetro",
            ],
            [
                "parent_code" => "33.19.0",
                "code"        => "33.19.04",
                "name"        => "33.19.04 - Riparazioni di altri prodotti in legno n.c.a.",
            ],
            [
                "parent_code" => "33.19.0",
                "code"        => "33.19.09",
                "name"        => "33.19.09 - Riparazione di altre apparecchiature n.c.a.",
            ],
            [
                "parent_code" => "33",
                "code"        => "33.2",
                "name"        => "33.2 - INSTALLAZIONE DI MACCHINE ED APPARECCHIATURE INDUSTRIALI",
            ],
            [
                "parent_code" => "33.2",
                "code"        => "33.20",
                "name"        => "33.20 - Installazione di macchine ed apparecchiature industriali",
            ],
            [
                "parent_code" => "33.20",
                "code"        => "33.20.0",
                "name"        => "33.20.0 - Installazione di macchine ed apparecchiature industriali",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.01",
                "name"        => "33.20.01 - Installazione di motori, generatori e trasformatori elettrici; di apparecchiature per la distribuzione e il controllo dell'elettricità (esclusa l'installazione all'interno degli edifici)",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.02",
                "name"        => "33.20.02 - Installazione di apparecchi elettrici ed elettronici per telecomunicazioni, di apparecchi trasmittenti radiotelevisivi, di impianti di apparecchiature elettriche ed elettroniche (esclusa l'installazione all'interno degli edifici)",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.03",
                "name"        => "33.20.03 - Installazione di strumenti ed apparecchi di misurazione, controllo, prova, navigazione e simili (incluse le apparecchiature di controllo dei processi industriali)",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.04",
                "name"        => "33.20.04 - Installazione di cisterne, serbatoi e contenitori in metallo",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.05",
                "name"        => "33.20.05 - Installazione di generatori di vapore (escluse le caldaie per il riscaldamento centrale ad acqua calda)",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.06",
                "name"        => "33.20.06 - Installazione di macchine per ufficio, di mainframe e computer simili",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.07",
                "name"        => "33.20.07 - Installazione di apparecchi medicali, di apparecchi e strumenti per odontoiatria",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.08",
                "name"        => "33.20.08 - Installazione di apparecchi elettromedicali",
            ],
            [
                "parent_code" => "33.20.0",
                "code"        => "33.20.09",
                "name"        => "33.20.09 - Installazione di altre macchine ed apparecchiature industriali",
            ],
            [
                "parent_code" => null,
                "code"        => "D",
                "name"        => "D - FORNITURA DI ENERGIA ELETTRICA, GAS, VAPORE E ARIA CONDIZIONATA",
            ],
            [
                "parent_code" => "D",
                "code"        => "35",
                "name"        => "35 - FORNITURA DI ENERGIA ELETTRICA, GAS, VAPORE E ARIA CONDIZIONATA",
            ],
            [
                "parent_code" => "35",
                "code"        => "35.1",
                "name"        => "35.1 - PRODUZIONE, TRASMISSIONE E DISTRIBUZIONE DI ENERGIA ELETTRICA",
            ],
            [
                "parent_code" => "35.1",
                "code"        => "35.11",
                "name"        => "35.11 - Produzione di energia elettrica",
            ],
            [
                "parent_code" => "35.11",
                "code"        => "35.11.0",
                "name"        => "35.11.0 - Produzione di energia elettrica",
            ],
            [
                "parent_code" => "35.11.0",
                "code"        => "35.11.00",
                "name"        => "35.11.00 - Produzione di energia elettrica",
            ],
            [
                "parent_code" => "35.1",
                "code"        => "35.12",
                "name"        => "35.12 - Trasmissione di energia elettrica",
            ],
            [
                "parent_code" => "35.12",
                "code"        => "35.12.0",
                "name"        => "35.12.0 - Trasmissione di energia elettrica",
            ],
            [
                "parent_code" => "35.12.0",
                "code"        => "35.12.00",
                "name"        => "35.12.00 - Trasmissione di energia elettrica",
            ],
            [
                "parent_code" => "35.1",
                "code"        => "35.13",
                "name"        => "35.13 - Distribuzione di energia elettrica",
            ],
            [
                "parent_code" => "35.13",
                "code"        => "35.13.0",
                "name"        => "35.13.0 - Distribuzione di energia elettrica",
            ],
            [
                "parent_code" => "35.13.0",
                "code"        => "35.13.00",
                "name"        => "35.13.00 - Distribuzione di energia elettrica",
            ],
            [
                "parent_code" => "35.1",
                "code"        => "35.14",
                "name"        => "35.14 - Commercio di energia elettrica",
            ],
            [
                "parent_code" => "35.14",
                "code"        => "35.14.0",
                "name"        => "35.14.0 - Commercio di energia elettrica",
            ],
            [
                "parent_code" => "35.14.0",
                "code"        => "35.14.00",
                "name"        => "35.14.00 - Commercio di energia elettrica",
            ],
            [
                "parent_code" => "35",
                "code"        => "35.2",
                "name"        => "35.2 - PRODUZIONE DI GAS; DISTRIBUZIONE DI COMBUSTIBILI GASSOSI MEDIANTE CONDOTTE",
            ],
            [
                "parent_code" => "35.2",
                "code"        => "35.21",
                "name"        => "35.21 - Produzione di gas",
            ],
            [
                "parent_code" => "35.21",
                "code"        => "35.21.0",
                "name"        => "35.21.0 - Produzione di gas",
            ],
            [
                "parent_code" => "35.21.0",
                "code"        => "35.21.00",
                "name"        => "35.21.00 - Produzione di gas",
            ],
            [
                "parent_code" => "35.2",
                "code"        => "35.22",
                "name"        => "35.22 - Distribuzione di combustibili gassosi mediante condotte",
            ],
            [
                "parent_code" => "35.22",
                "code"        => "35.22.0",
                "name"        => "35.22.0 - Distribuzione di combustibili gassosi mediante condotte",
            ],
            [
                "parent_code" => "35.22.0",
                "code"        => "35.22.00",
                "name"        => "35.22.00 - Distribuzione di combustibili gassosi mediante condotte",
            ],
            [
                "parent_code" => "35.2",
                "code"        => "35.23",
                "name"        => "35.23 - Commercio di gas distribuito mediante condotte",
            ],
            [
                "parent_code" => "35.23",
                "code"        => "35.23.0",
                "name"        => "35.23.0 - Commercio di gas distribuito mediante condotte",
            ],
            [
                "parent_code" => "35.23.0",
                "code"        => "35.23.00",
                "name"        => "35.23.00 - Commercio di gas distribuito mediante condotte",
            ],
            [
                "parent_code" => "35",
                "code"        => "35.3",
                "name"        => "35.3 - FORNITURA DI VAPORE E ARIA CONDIZIONATA",
            ],
            [
                "parent_code" => "35.3",
                "code"        => "35.30",
                "name"        => "35.30 - Fornitura di vapore e aria condizionata",
            ],
            [
                "parent_code" => "35.30",
                "code"        => "35.30.0",
                "name"        => "35.30.0 - Fornitura di vapore e aria condizionata",
            ],
            [
                "parent_code" => "35.30.0",
                "code"        => "35.30.00",
                "name"        => "35.30.00 - Fornitura di vapore e aria condizionata",
            ],
            [
                "parent_code" => null,
                "code"        => "E",
                "name"        => "E - FORNITURA DI ACQUA; RETI FOGNARIE, ATTIVITÀ DI GESTIONE DEI RIFIUTI E RISANAMENTO",
            ],
            [
                "parent_code" => "E",
                "code"        => "36",
                "name"        => "36 - RACCOLTA, TRATTAMENTO E FORNITURA DI ACQUA",
            ],
            [
                "parent_code" => "36",
                "code"        => "36.0",
                "name"        => "36.0 - RACCOLTA, TRATTAMENTO E FORNITURA DI ACQUA",
            ],
            [
                "parent_code" => "36.0",
                "code"        => "36.00",
                "name"        => "36.00 - Raccolta, trattamento e fornitura di acqua",
            ],
            [
                "parent_code" => "36.00",
                "code"        => "36.00.0",
                "name"        => "36.00.0 - Raccolta, trattamento e fornitura di acqua",
            ],
            [
                "parent_code" => "36.00.0",
                "code"        => "36.00.00",
                "name"        => "36.00.00 - Raccolta, trattamento e fornitura di acqua",
            ],
            [
                "parent_code" => "E",
                "code"        => "37",
                "name"        => "37 - GESTIONE DELLE RETI FOGNARIE",
            ],
            [
                "parent_code" => "37",
                "code"        => "37.0",
                "name"        => "37.0 - GESTIONE DELLE RETI FOGNARIE",
            ],
            [
                "parent_code" => "37.0",
                "code"        => "37.00",
                "name"        => "37.00 - Gestione delle reti fognarie",
            ],
            [
                "parent_code" => "37.00",
                "code"        => "37.00.0",
                "name"        => "37.00.0 - Raccolta e depurazione delle acque di scarico",
            ],
            [
                "parent_code" => "37.00.0",
                "code"        => "37.00.00",
                "name"        => "37.00.00 - Raccolta e depurazione delle acque di scarico",
            ],
            [
                "parent_code" => "E",
                "code"        => "38",
                "name"        => "38 - ATTIVITÀ DI RACCOLTA, TRATTAMENTO E SMALTIMENTO DEI RIFIUTI; RECUPERO DEI MATERIALI",
            ],
            [
                "parent_code" => "38",
                "code"        => "38.1",
                "name"        => "38.1 - RACCOLTA DEI RIFIUTI",
            ],
            [
                "parent_code" => "38.1",
                "code"        => "38.11",
                "name"        => "38.11 - Raccolta di rifiuti non pericolosi",
            ],
            [
                "parent_code" => "38.11",
                "code"        => "38.11.0",
                "name"        => "38.11.0 - Raccolta di rifiuti solidi non pericolosi",
            ],
            [
                "parent_code" => "38.11.0",
                "code"        => "38.11.00",
                "name"        => "38.11.00 - Raccolta di rifiuti solidi non pericolosi",
            ],
            [
                "parent_code" => "38.1",
                "code"        => "38.12",
                "name"        => "38.12 - Raccolta di rifiuti pericolosi",
            ],
            [
                "parent_code" => "38.12",
                "code"        => "38.12.0",
                "name"        => "38.12.0 - Raccolta di rifiuti pericolosi solidi e non solidi",
            ],
            [
                "parent_code" => "38.12.0",
                "code"        => "38.12.00",
                "name"        => "38.12.00 - Raccolta di rifiuti pericolosi solidi e non solidi",
            ],
            [
                "parent_code" => "38",
                "code"        => "38.2",
                "name"        => "38.2 - TRATTAMENTO E SMALTIMENTO DEI RIFIUTI",
            ],
            [
                "parent_code" => "38.2",
                "code"        => "38.21",
                "name"        => "38.21 - Trattamento e smaltimento di rifiuti non pericolosi",
            ],
            [
                "parent_code" => "38.21",
                "code"        => "38.21.0",
                "name"        => "38.21.0 - Trattamento e smaltimento di rifiuti non pericolosi; produzione di compost",
            ],
            [
                "parent_code" => "38.21.0",
                "code"        => "38.21.01",
                "name"        => "38.21.01 - Produzione di compost",
            ],
            [
                "parent_code" => "38.21.0",
                "code"        => "38.21.09",
                "name"        => "38.21.09 - Trattamento e smaltimento di altri rifiuti non pericolosi",
            ],
            [
                "parent_code" => "38.2",
                "code"        => "38.22",
                "name"        => "38.22 - Trattamento e smaltimento di rifiuti pericolosi",
            ],
            [
                "parent_code" => "38.22",
                "code"        => "38.22.0",
                "name"        => "38.22.0 - Trattamento e smaltimento di rifiuti pericolosi",
            ],
            [
                "parent_code" => "38.22.0",
                "code"        => "38.22.00",
                "name"        => "38.22.00 - Trattamento e smaltimento di rifiuti pericolosi",
            ],
            [
                "parent_code" => "38",
                "code"        => "38.3",
                "name"        => "38.3 - RECUPERO DEI MATERIALI",
            ],
            [
                "parent_code" => "38.3",
                "code"        => "38.31",
                "name"        => "38.31 - Demolizione di carcasse e cantieri di demolizione navali",
            ],
            [
                "parent_code" => "38.31",
                "code"        => "38.31.1",
                "name"        => "38.31.1 - Demolizione di carcasse",
            ],
            [
                "parent_code" => "38.31.1",
                "code"        => "38.31.10",
                "name"        => "38.31.10 - Demolizione di carcasse",
            ],
            [
                "parent_code" => "38.31",
                "code"        => "38.31.2",
                "name"        => "38.31.2 - Cantieri di demolizione navali",
            ],
            [
                "parent_code" => "38.31.2",
                "code"        => "38.31.20",
                "name"        => "38.31.20 - Cantieri di demolizione navali",
            ],
            [
                "parent_code" => "38.3",
                "code"        => "38.32",
                "name"        => "38.32 - Recupero e cernita di materiali",
            ],
            [
                "parent_code" => "38.32",
                "code"        => "38.32.1",
                "name"        => "38.32.1 - Recupero e preparazione per il riciclaggio di cascami e rottami metallici",
            ],
            [
                "parent_code" => "38.32.1",
                "code"        => "38.32.10",
                "name"        => "38.32.10 - Recupero e preparazione per il riciclaggio di cascami e rottami metallici",
            ],
            [
                "parent_code" => "38.32",
                "code"        => "38.32.2",
                "name"        => "38.32.2 - Recupero e preparazione per il riciclaggio di materiale plastico per produzione di materie prime plastiche, resine sintetiche",
            ],
            [
                "parent_code" => "38.32.2",
                "code"        => "38.32.20",
                "name"        => "38.32.20 - Recupero e preparazione per il riciclaggio di materiale plastico per produzione di materie prime plastiche, resine sintetiche",
            ],
            [
                "parent_code" => "38.32",
                "code"        => "38.32.3",
                "name"        => "38.32.3 - Recupero e preparazione per il riciclaggio dei rifiuti solidi urbani, industriali e biomasse",
            ],
            [
                "parent_code" => "38.32.3",
                "code"        => "38.32.30",
                "name"        => "38.32.30 - Recupero e preparazione per il riciclaggio dei rifiuti solidi urbani, industriali e biomasse",
            ],
            [
                "parent_code" => "E",
                "code"        => "39",
                "name"        => "39 - ATTIVITÀ DI RISANAMENTO E ALTRI SERVIZI DI GESTIONE DEI RIFIUTI",
            ],
            [
                "parent_code" => "39",
                "code"        => "39.0",
                "name"        => "39.0 - ATTIVITÀ DI RISANAMENTO E ALTRI SERVIZI DI GESTIONE DEI RIFIUTI",
            ],
            [
                "parent_code" => "39.0",
                "code"        => "39.00",
                "name"        => "39.00 - Attività di risanamento e altri servizi di gestione dei rifiuti",
            ],
            [
                "parent_code" => "39.00",
                "code"        => "39.00.0",
                "name"        => "39.00.0 - Attività di risanamento e altri servizi di gestione dei rifiuti",
            ],
            [
                "parent_code" => "39.00.0",
                "code"        => "39.00.01",
                "name"        => "39.00.01 - Attività di rimozione di strutture ed elementi in amianto specializzata per l'edilizia",
            ],
            [
                "parent_code" => "39.00.0",
                "code"        => "39.00.09",
                "name"        => "39.00.09 - Altre attività di risanamento e altri servizi di gestione dei rifiuti",
            ],
            [
                "parent_code" => null,
                "code"        => "F",
                "name"        => "F - COSTRUZIONI",
            ],
            [
                "parent_code" => "F",
                "code"        => "41",
                "name"        => "41 - COSTRUZIONE DI EDIFICI",
            ],
            [
                "parent_code" => "41",
                "code"        => "41.1",
                "name"        => "41.1 - SVILUPPO DI PROGETTI IMMOBILIARI",
            ],
            [
                "parent_code" => "41.1",
                "code"        => "41.10",
                "name"        => "41.10 - Sviluppo di progetti immobiliari",
            ],
            [
                "parent_code" => "41.10",
                "code"        => "41.10.0",
                "name"        => "41.10.0 - Sviluppo di progetti immobiliari senza costruzione",
            ],
            [
                "parent_code" => "41.10.0",
                "code"        => "41.10.00",
                "name"        => "41.10.00 - Sviluppo di progetti immobiliari senza costruzione",
            ],
            [
                "parent_code" => "41",
                "code"        => "41.2",
                "name"        => "41.2 - COSTRUZIONE DI EDIFICI RESIDENZIALI E NON RESIDENZIALI",
            ],
            [
                "parent_code" => "41.2",
                "code"        => "41.20",
                "name"        => "41.20 - Costruzione di edifici residenziali e non residenziali",
            ],
            [
                "parent_code" => "41.20",
                "code"        => "41.20.0",
                "name"        => "41.20.0 - Costruzione di edifici residenziali e non residenziali",
            ],
            [
                "parent_code" => "41.20.0",
                "code"        => "41.20.00",
                "name"        => "41.20.00 - Costruzione di edifici residenziali e non residenziali",
            ],
            [
                "parent_code" => "F",
                "code"        => "42",
                "name"        => "42 - INGEGNERIA CIVILE",
            ],
            [
                "parent_code" => "42",
                "code"        => "42.1",
                "name"        => "42.1 - COSTRUZIONE DI STRADE E FERROVIE",
            ],
            [
                "parent_code" => "42.1",
                "code"        => "42.11",
                "name"        => "42.11 - Costruzione di strade e autostrade",
            ],
            [
                "parent_code" => "42.11",
                "code"        => "42.11.0",
                "name"        => "42.11.0 - Costruzione di strade, autostrade e piste aeroportuali",
            ],
            [
                "parent_code" => "42.11.0",
                "code"        => "42.11.00",
                "name"        => "42.11.00 - Costruzione di strade, autostrade e piste aeroportuali",
            ],
            [
                "parent_code" => "42.1",
                "code"        => "42.12",
                "name"        => "42.12 - Costruzione di linee ferroviarie e metropolitane",
            ],
            [
                "parent_code" => "42.12",
                "code"        => "42.12.0",
                "name"        => "42.12.0 - Costruzione di linee ferroviarie e metropolitane",
            ],
            [
                "parent_code" => "42.12.0",
                "code"        => "42.12.00",
                "name"        => "42.12.00 - Costruzione di linee ferroviarie e metropolitane",
            ],
            [
                "parent_code" => "42.1",
                "code"        => "42.13",
                "name"        => "42.13 - Costruzione di ponti e gallerie",
            ],
            [
                "parent_code" => "42.13",
                "code"        => "42.13.0",
                "name"        => "42.13.0 - Costruzione di ponti e gallerie",
            ],
            [
                "parent_code" => "42.13.0",
                "code"        => "42.13.00",
                "name"        => "42.13.00 - Costruzione di ponti e gallerie",
            ],
            [
                "parent_code" => "42",
                "code"        => "42.2",
                "name"        => "42.2 - COSTRUZIONE DI OPERE DI PUBBLICA UTILITÀ",
            ],
            [
                "parent_code" => "42.2",
                "code"        => "42.21",
                "name"        => "42.21 - Costruzione di opere di pubblica utilità per il trasporto di fluidi",
            ],
            [
                "parent_code" => "42.21",
                "code"        => "42.21.0",
                "name"        => "42.21.0 - Costruzione di opere di pubblica utilità per il trasporto di fluidi",
            ],
            [
                "parent_code" => "42.21.0",
                "code"        => "42.21.00",
                "name"        => "42.21.00 - Costruzione di opere di pubblica utilità per il trasporto di fluidi",
            ],
            [
                "parent_code" => "42.2",
                "code"        => "42.22",
                "name"        => "42.22 - Costruzione di opere di pubblica utilità per l'energia elettrica e le telecomunicazioni",
            ],
            [
                "parent_code" => "42.22",
                "code"        => "42.22.0",
                "name"        => "42.22.0 - Costruzione di opere di pubblica utilità per l'energia elettrica e le telecomunicazioni",
            ],
            [
                "parent_code" => "42.22.0",
                "code"        => "42.22.00",
                "name"        => "42.22.00 - Costruzione di opere di pubblica utilità per l'energia elettrica e le telecomunicazioni",
            ],
            [
                "parent_code" => "42",
                "code"        => "42.9",
                "name"        => "42.9 - COSTRUZIONE DI ALTRE OPERE DI INGEGNERIA CIVILE",
            ],
            [
                "parent_code" => "42.9",
                "code"        => "42.91",
                "name"        => "42.91 - Costruzione di opere idrauliche",
            ],
            [
                "parent_code" => "42.91",
                "code"        => "42.91.0",
                "name"        => "42.91.0 - Costruzione di opere idrauliche",
            ],
            [
                "parent_code" => "42.91.0",
                "code"        => "42.91.00",
                "name"        => "42.91.00 - Costruzione di opere idrauliche",
            ],
            [
                "parent_code" => "42.9",
                "code"        => "42.99",
                "name"        => "42.99 - Costruzione di altre opere di ingegneria civile n.c.a.",
            ],
            [
                "parent_code" => "42.99",
                "code"        => "42.99.0",
                "name"        => "42.99.0 - Costruzione di altre opere di ingegneria civile n.c.a.",
            ],
            [
                "parent_code" => "42.99.0",
                "code"        => "42.99.01",
                "name"        => "42.99.01 - Lottizzazione dei terreni connessa con l'urbanizzazione",
            ],
            [
                "parent_code" => "42.99.0",
                "code"        => "42.99.09",
                "name"        => "42.99.09 - Altre attività di costruzione di altre opere di ingegneria civile n.c.a.",
            ],
            [
                "parent_code" => "F",
                "code"        => "43",
                "name"        => "43 - LAVORI DI COSTRUZIONE SPECIALIZZATI",
            ],
            [
                "parent_code" => "43",
                "code"        => "43.1",
                "name"        => "43.1 - DEMOLIZIONE E PREPARAZIONE DEL CANTIERE EDILE",
            ],
            [
                "parent_code" => "43.1",
                "code"        => "43.11",
                "name"        => "43.11 - Demolizione",
            ],
            [
                "parent_code" => "43.11",
                "code"        => "43.11.0",
                "name"        => "43.11.0 - Demolizione",
            ],
            [
                "parent_code" => "43.11.0",
                "code"        => "43.11.00",
                "name"        => "43.11.00 - Demolizione",
            ],
            [
                "parent_code" => "43.1",
                "code"        => "43.12",
                "name"        => "43.12 - Preparazione del cantiere edile",
            ],
            [
                "parent_code" => "43.12",
                "code"        => "43.12.0",
                "name"        => "43.12.0 - Preparazione del cantiere edile e sistemazione del terreno",
            ],
            [
                "parent_code" => "43.12.0",
                "code"        => "43.12.00",
                "name"        => "43.12.00 - Preparazione del cantiere edile e sistemazione del terreno",
            ],
            [
                "parent_code" => "43.1",
                "code"        => "43.13",
                "name"        => "43.13 - Trivellazioni e perforazioni",
            ],
            [
                "parent_code" => "43.13",
                "code"        => "43.13.0",
                "name"        => "43.13.0 - Trivellazioni e perforazioni",
            ],
            [
                "parent_code" => "43.13.0",
                "code"        => "43.13.00",
                "name"        => "43.13.00 - Trivellazioni e perforazioni",
            ],
            [
                "parent_code" => "43",
                "code"        => "43.2",
                "name"        => "43.2 - INSTALLAZIONE DI IMPIANTI ELETTRICI, IDRAULICI ED ALTRI LAVORI DI COSTRUZIONE E INSTALLAZIONE",
            ],
            [
                "parent_code" => "43.2",
                "code"        => "43.21",
                "name"        => "43.21 - Installazione di impianti elettrici",
            ],
            [
                "parent_code" => "43.21",
                "code"        => "43.21.0",
                "name"        => "43.21.0 - Installazione di impianti elettrici ed elettronici (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.21.0",
                "code"        => "43.21.01",
                "name"        => "43.21.01 - Installazione di impianti elettrici in edifici o in altre opere di costruzione (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.21.0",
                "code"        => "43.21.02",
                "name"        => "43.21.02 - Installazione di impianti elettronici (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.21.0",
                "code"        => "43.21.03",
                "name"        => "43.21.03 - Installazione di impianti di illuminazione stradale e dispositivi elettrici di segnalazione, illuminazione delle piste degli aeroporti (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.21.0",
                "code"        => "43.21.04",
                "name"        => "43.21.04 - Installazione di insegne elettriche e impianti luce (incluse luminarie per feste)",
            ],
            [
                "parent_code" => "43.2",
                "code"        => "43.22",
                "name"        => "43.22 - Installazione di impianti idraulici, di riscaldamento e di condizionamento dell'aria",
            ],
            [
                "parent_code" => "43.22",
                "code"        => "43.22.0",
                "name"        => "43.22.0 - Installazione di impianti idraulici, di riscaldamento e di condizionamento dell'aria (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.22.0",
                "code"        => "43.22.01",
                "name"        => "43.22.01 - Installazione di impianti idraulici, di riscaldamento e di condizionamento dell'aria (inclusa manutenzione e riparazione) in edifici o in altre opere di costruzione",
            ],
            [
                "parent_code" => "43.22.0",
                "code"        => "43.22.02",
                "name"        => "43.22.02 - Installazione di impianti per la distribuzione del gas (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.22.0",
                "code"        => "43.22.03",
                "name"        => "43.22.03 - Installazione di impianti di spegnimento antincendio (inclusi quelli integrati e la manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.22.0",
                "code"        => "43.22.04",
                "name"        => "43.22.04 - Installazione di impianti di depurazione per piscine (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.22.0",
                "code"        => "43.22.05",
                "name"        => "43.22.05 - Installazione di impianti di irrigazione per giardini (inclusa manutenzione e riparazione)",
            ],
            [
                "parent_code" => "43.2",
                "code"        => "43.29",
                "name"        => "43.29 - Altri lavori di costruzione e installazione",
            ],
            [
                "parent_code" => "43.29",
                "code"        => "43.29.0",
                "name"        => "43.29.0 - Altri lavori di costruzione e installazione",
            ],
            [
                "parent_code" => "43.29.0",
                "code"        => "43.29.01",
                "name"        => "43.29.01 - Installazione, riparazione e manutenzione di ascensori e scale mobili",
            ],
            [
                "parent_code" => "43.29.0",
                "code"        => "43.29.02",
                "name"        => "43.29.02 - Lavori di isolamento termico, acustico o antivibrazioni",
            ],
            [
                "parent_code" => "43.29.0",
                "code"        => "43.29.09",
                "name"        => "43.29.09 - Altri lavori di costruzione e installazione n.c.a.",
            ],
            [
                "parent_code" => "43",
                "code"        => "43.3",
                "name"        => "43.3 - COMPLETAMENTO E FINITURA DI EDIFICI",
            ],
            [
                "parent_code" => "43.3",
                "code"        => "43.31",
                "name"        => "43.31 - Intonacatura",
            ],
            [
                "parent_code" => "43.31",
                "code"        => "43.31.0",
                "name"        => "43.31.0 - Intonacatura e stuccatura",
            ],
            [
                "parent_code" => "43.31.0",
                "code"        => "43.31.00",
                "name"        => "43.31.00 - Intonacatura e stuccatura",
            ],
            [
                "parent_code" => "43.3",
                "code"        => "43.32",
                "name"        => "43.32 - Posa in opera di infissi",
            ],
            [
                "parent_code" => "43.32",
                "code"        => "43.32.0",
                "name"        => "43.32.0 - Posa in opera di infissi, arredi, controsoffitti, pareti mobili e simili",
            ],
            [
                "parent_code" => "43.32.0",
                "code"        => "43.32.01",
                "name"        => "43.32.01 - Posa in opera di casseforti, forzieri, porte blindate",
            ],
            [
                "parent_code" => "43.32.0",
                "code"        => "43.32.02",
                "name"        => "43.32.02 - Posa in opera di infissi, arredi, controsoffitti, pareti mobili e simili",
            ],
            [
                "parent_code" => "43.3",
                "code"        => "43.33",
                "name"        => "43.33 - Rivestimento di pavimenti e di muri",
            ],
            [
                "parent_code" => "43.33",
                "code"        => "43.33.0",
                "name"        => "43.33.0 - Rivestimento di pavimenti e di muri",
            ],
            [
                "parent_code" => "43.33.0",
                "code"        => "43.33.00",
                "name"        => "43.33.00 - Rivestimento di pavimenti e di muri",
            ],
            [
                "parent_code" => "43.3",
                "code"        => "43.34",
                "name"        => "43.34 - Tinteggiatura e posa in opera di vetri",
            ],
            [
                "parent_code" => "43.34",
                "code"        => "43.34.0",
                "name"        => "43.34.0 - Tinteggiatura e posa in opera di vetri",
            ],
            [
                "parent_code" => "43.34.0",
                "code"        => "43.34.00",
                "name"        => "43.34.00 - Tinteggiatura e posa in opera di vetri",
            ],
            [
                "parent_code" => "43.3",
                "code"        => "43.39",
                "name"        => "43.39 - Altri lavori di completamento e di finitura degli edifici",
            ],
            [
                "parent_code" => "43.39",
                "code"        => "43.39.0",
                "name"        => "43.39.0 - Altri lavori di completamento e di finitura degli edifici",
            ],
            [
                "parent_code" => "43.39.0",
                "code"        => "43.39.01",
                "name"        => "43.39.01 - Attività non specializzate di lavori edili (muratori)",
            ],
            [
                "parent_code" => "43.39.0",
                "code"        => "43.39.09",
                "name"        => "43.39.09 - Altri lavori di completamento e di finitura degli edifici n.c.a.",
            ],
            [
                "parent_code" => "43",
                "code"        => "43.9",
                "name"        => "43.9 - ALTRI LAVORI SPECIALIZZATI DI COSTRUZIONE",
            ],
            [
                "parent_code" => "43.9",
                "code"        => "43.91",
                "name"        => "43.91 - Realizzazione di coperture",
            ],
            [
                "parent_code" => "43.91",
                "code"        => "43.91.0",
                "name"        => "43.91.0 - Realizzazione di coperture",
            ],
            [
                "parent_code" => "43.91.0",
                "code"        => "43.91.00",
                "name"        => "43.91.00 - Realizzazione di coperture",
            ],
            [
                "parent_code" => "43.9",
                "code"        => "43.99",
                "name"        => "43.99 - Altri lavori specializzati di costruzione n.c.a.",
            ],
            [
                "parent_code" => "43.99",
                "code"        => "43.99.0",
                "name"        => "43.99.0 - Altri lavori specializzati di costruzione n.c.a.",
            ],
            [
                "parent_code" => "43.99.0",
                "code"        => "43.99.01",
                "name"        => "43.99.01 - Pulizia a vapore, sabbiatura e attività simili per pareti esterne di edifici",
            ],
            [
                "parent_code" => "43.99.0",
                "code"        => "43.99.02",
                "name"        => "43.99.02 - Noleggio di gru ed altre attrezzature con operatore per la costruzione o la demolizione",
            ],
            [
                "parent_code" => "43.99.0",
                "code"        => "43.99.09",
                "name"        => "43.99.09 - Altre attività di lavori specializzati di costruzione n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "G",
                "name"        => "G - COMMERCIO ALL'INGROSSO E AL DETTAGLIO; RIPARAZIONE DI AUTOVEICOLI E MOTOCICLI",
            ],
            [
                "parent_code" => "G",
                "code"        => "45",
                "name"        => "45 - COMMERCIO ALL'INGROSSO E AL DETTAGLIO E RIPARAZIONE DI AUTOVEICOLI E MOTOCICLI",
            ],
            [
                "parent_code" => "45",
                "code"        => "45.1",
                "name"        => "45.1 - COMMERCIO DI AUTOVEICOLI",
            ],
            [
                "parent_code" => "45.1",
                "code"        => "45.11",
                "name"        => "45.11 - Commercio di autovetture e di autoveicoli leggeri",
            ],
            [
                "parent_code" => "45.11",
                "code"        => "45.11.0",
                "name"        => "45.11.0 - Commercio di autovetture e di autoveicoli leggeri",
            ],
            [
                "parent_code" => "45.11.0",
                "code"        => "45.11.01",
                "name"        => "45.11.01 - Commercio all'ingrosso e al dettaglio di autovetture e di autoveicoli leggeri",
            ],
            [
                "parent_code" => "45.11.0",
                "code"        => "45.11.02",
                "name"        => "45.11.02 - Intermediari del commercio di autovetture e di autoveicoli leggeri (incluse le agenzie di compravendita)",
            ],
            [
                "parent_code" => "45.1",
                "code"        => "45.19",
                "name"        => "45.19 - Commercio di altri autoveicoli",
            ],
            [
                "parent_code" => "45.19",
                "code"        => "45.19.0",
                "name"        => "45.19.0 - Commercio di altri autoveicoli",
            ],
            [
                "parent_code" => "45.19.0",
                "code"        => "45.19.01",
                "name"        => "45.19.01 - Commercio all'ingrosso e al dettaglio di altri autoveicoli",
            ],
            [
                "parent_code" => "45.19.0",
                "code"        => "45.19.02",
                "name"        => "45.19.02 - Intermediari del commercio di altri autoveicoli (incluse le agenzie di compravendita)",
            ],
            [
                "parent_code" => "45",
                "code"        => "45.2",
                "name"        => "45.2 - MANUTENZIONE E RIPARAZIONE DI AUTOVEICOLI",
            ],
            [
                "parent_code" => "45.2",
                "code"        => "45.20",
                "name"        => "45.20 - Manutenzione e riparazione di autoveicoli",
            ],
            [
                "parent_code" => "45.20",
                "code"        => "45.20.1",
                "name"        => "45.20.1 - Riparazioni meccaniche di autoveicoli",
            ],
            [
                "parent_code" => "45.20.1",
                "code"        => "45.20.10",
                "name"        => "45.20.10 - Riparazioni meccaniche di autoveicoli",
            ],
            [
                "parent_code" => "45.20",
                "code"        => "45.20.2",
                "name"        => "45.20.2 - Riparazione di carrozzerie di autoveicoli",
            ],
            [
                "parent_code" => "45.20.2",
                "code"        => "45.20.20",
                "name"        => "45.20.20 - Riparazione di carrozzerie di autoveicoli",
            ],
            [
                "parent_code" => "45.20",
                "code"        => "45.20.3",
                "name"        => "45.20.3 - Riparazione di impianti elettrici e di alimentazione per autoveicoli",
            ],
            [
                "parent_code" => "45.20.3",
                "code"        => "45.20.30",
                "name"        => "45.20.30 - Riparazione di impianti elettrici e di alimentazione per autoveicoli",
            ],
            [
                "parent_code" => "45.20",
                "code"        => "45.20.4",
                "name"        => "45.20.4 - Riparazione e sostituzione di pneumatici per autoveicoli",
            ],
            [
                "parent_code" => "45.20.4",
                "code"        => "45.20.40",
                "name"        => "45.20.40 - Riparazione e sostituzione di pneumatici per autoveicoli",
            ],
            [
                "parent_code" => "45.20",
                "code"        => "45.20.9",
                "name"        => "45.20.9 - Autolavaggio e altre attività di manutenzione",
            ],
            [
                "parent_code" => "45.20.9",
                "code"        => "45.20.91",
                "name"        => "45.20.91 - Lavaggio autoveicoli",
            ],
            [
                "parent_code" => "45.20.9",
                "code"        => "45.20.99",
                "name"        => "45.20.99 - Altre attività di manutenzione e di riparazione di autoveicoli",
            ],
            [
                "parent_code" => "45",
                "code"        => "45.3",
                "name"        => "45.3 - COMMERCIO DI PARTI E ACCESSORI DI AUTOVEICOLI",
            ],
            [
                "parent_code" => "45.3",
                "code"        => "45.31",
                "name"        => "45.31 - Commercio all'ingrosso ed intermediazione di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.31",
                "code"        => "45.31.0",
                "name"        => "45.31.0 - Commercio all'ingrosso ed intermediazione di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.31.0",
                "code"        => "45.31.01",
                "name"        => "45.31.01 - Commercio all'ingrosso di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.31.0",
                "code"        => "45.31.02",
                "name"        => "45.31.02 - Intermediari del commercio di parti ed accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.3",
                "code"        => "45.32",
                "name"        => "45.32 - Commercio al dettaglio di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.32",
                "code"        => "45.32.0",
                "name"        => "45.32.0 - Commercio al dettaglio di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45.32.0",
                "code"        => "45.32.00",
                "name"        => "45.32.00 - Commercio al dettaglio di parti e accessori di autoveicoli",
            ],
            [
                "parent_code" => "45",
                "code"        => "45.4",
                "name"        => "45.4 - COMMERCIO, MANUTENZIONE E RIPARAZIONE DI MOTOCICLI E RELATIVE PARTI ED ACCESSORI",
            ],
            [
                "parent_code" => "45.4",
                "code"        => "45.40",
                "name"        => "45.40 - Commercio, manutenzione e riparazione di motocicli e relative parti ed accessori",
            ],
            [
                "parent_code" => "45.40",
                "code"        => "45.40.1",
                "name"        => "45.40.1 - Commercio all'ingrosso e al dettaglio ed intermediazione di motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40.1",
                "code"        => "45.40.11",
                "name"        => "45.40.11 - Commercio all'ingrosso e al dettaglio di motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40.1",
                "code"        => "45.40.12",
                "name"        => "45.40.12 - Intermediari del commercio di motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40",
                "code"        => "45.40.2",
                "name"        => "45.40.2 - Commercio all'ingrosso e al dettaglio ed intermediazione di parti e accessori per motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40.2",
                "code"        => "45.40.21",
                "name"        => "45.40.21 - Commercio all'ingrosso e al dettaglio di parti e accessori per motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40.2",
                "code"        => "45.40.22",
                "name"        => "45.40.22 - Intermediari del commercio di parti ed accessori di motocicli e ciclomotori",
            ],
            [
                "parent_code" => "45.40",
                "code"        => "45.40.3",
                "name"        => "45.40.3 - Manutenzione e riparazione di motocicli e ciclomotori (inclusi i pneumatici)",
            ],
            [
                "parent_code" => "45.40.3",
                "code"        => "45.40.30",
                "name"        => "45.40.30 - Manutenzione e riparazione di motocicli e ciclomotori (inclusi i pneumatici)",
            ],
            [
                "parent_code" => "G",
                "code"        => "46",
                "name"        => "46 - COMMERCIO ALL'INGROSSO (ESCLUSO QUELLO DI AUTOVEICOLI E DI MOTOCICLI)",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.1",
                "name"        => "46.1 - INTERMEDIARI DEL COMMERCIO",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.11",
                "name"        => "46.11 - Intermediari del commercio di materie prime agricole, di animali vivi, di materie prime tessili e di semilavorati",
            ],
            [
                "parent_code" => "46.11",
                "code"        => "46.11.0",
                "name"        => "46.11.0 - Intermediari del commercio di materie prime agricole, di animali vivi, di materie prime tessili e di semilavorati; pelli grezze",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.01",
                "name"        => "46.11.01 - Agenti e rappresentanti di materie prime agricole",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.02",
                "name"        => "46.11.02 - Agenti e rappresentanti di fiori e piante",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.03",
                "name"        => "46.11.03 - Agenti e rappresentanti di animali vivi",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.04",
                "name"        => "46.11.04 - Agenti e rappresentanti di fibre tessili gregge e semilavorate; pelli grezze",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.05",
                "name"        => "46.11.05 - Procacciatori d'affari di materie prime agricole, animali vivi, materie prime e semilavorati tessili; pelli grezze",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.06",
                "name"        => "46.11.06 - Mediatori in materie prime agricole, materie prime e semilavorati tessili; pelli grezze",
            ],
            [
                "parent_code" => "46.11.0",
                "code"        => "46.11.07",
                "name"        => "46.11.07 - Mediatori in animali vivi",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.12",
                "name"        => "46.12 - Intermediari del commercio di combustibili, minerali, metalli e prodotti chimici",
            ],
            [
                "parent_code" => "46.12",
                "code"        => "46.12.0",
                "name"        => "46.12.0 - Intermediari del commercio di combustibili, minerali, metalli e prodotti chimici",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.01",
                "name"        => "46.12.01 - Agenti e rappresentanti di carburanti, gpl, gas in bombole e simili; lubrificanti",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.02",
                "name"        => "46.12.02 - Agenti e rappresentanti di combustibili solidi",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.03",
                "name"        => "46.12.03 - Agenti e rappresentanti di minerali, metalli e prodotti semilavorati",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.04",
                "name"        => "46.12.04 - Agenti e rappresentanti di prodotti chimici per l'industria",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.05",
                "name"        => "46.12.05 - Agenti e rappresentanti di prodotti chimici per l'agricoltura (inclusi i fertilizzanti)",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.06",
                "name"        => "46.12.06 - Procacciatori d'affari di combustibili, minerali, metalli e prodotti chimici",
            ],
            [
                "parent_code" => "46.12.0",
                "code"        => "46.12.07",
                "name"        => "46.12.07 - Mediatori in combustibili, minerali, metalli e prodotti chimici",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.13",
                "name"        => "46.13 - Intermediari del commercio di legname e materiali da costruzione",
            ],
            [
                "parent_code" => "46.13",
                "code"        => "46.13.0",
                "name"        => "46.13.0 - Intermediari del commercio di legname e materiali da costruzione",
            ],
            [
                "parent_code" => "46.13.0",
                "code"        => "46.13.01",
                "name"        => "46.13.01 - Agenti e rappresentanti di legname, semilavorati in legno e legno artificiale",
            ],
            [
                "parent_code" => "46.13.0",
                "code"        => "46.13.02",
                "name"        => "46.13.02 - Agenti e rappresentanti di materiale da costruzione (inclusi gli infissi e gli articoli igienico-sanitari); vetro piano",
            ],
            [
                "parent_code" => "46.13.0",
                "code"        => "46.13.03",
                "name"        => "46.13.03 - Agenti e rappresentanti di apparecchi ed accessori per riscaldamento e condizionamento e altri prodotti similari",
            ],
            [
                "parent_code" => "46.13.0",
                "code"        => "46.13.04",
                "name"        => "46.13.04 - Procacciatori d'affari di legname e materiali da costruzione",
            ],
            [
                "parent_code" => "46.13.0",
                "code"        => "46.13.05",
                "name"        => "46.13.05 - Mediatori in legname e materiali da costruzione",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.14",
                "name"        => "46.14 - Intermediari del commercio di macchinari, impianti industriali, navi e aeromobili",
            ],
            [
                "parent_code" => "46.14",
                "code"        => "46.14.0",
                "name"        => "46.14.0 - Intermediari del commercio di macchinari, impianti industriali, navi e aeromobili, macchine agricole, macchine per ufficio, attrezzature per le telecomunicazioni, computer e loro periferiche",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.01",
                "name"        => "46.14.01 - Agenti e rappresentanti di macchine, attrezzature ed impianti per l'industria ed il commercio; materiale e apparecchi elettrici ed elettronici per uso non domestico",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.02",
                "name"        => "46.14.02 - Agenti e rappresentanti di macchine per costruzioni edili e stradali",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.03",
                "name"        => "46.14.03 - Agenti e rappresentanti di macchine, attrezzature per ufficio, attrezzature per le telecomunicazioni, computer e loro periferiche",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.04",
                "name"        => "46.14.04 - Agenti e rappresentanti di macchine ed attrezzature per uso agricolo (inclusi i trattori)",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.05",
                "name"        => "46.14.05 - Agenti e rappresentanti di navi, aeromobili e altri veicoli (esclusi autoveicoli, motocicli, ciclomotori e biciclette)",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.06",
                "name"        => "46.14.06 - Procacciatori d'affari di macchinari, impianti industriali, navi e aeromobili, macchine agricole, macchine per ufficio, attrezzature per le telecomunicazioni, computer e loro periferiche",
            ],
            [
                "parent_code" => "46.14.0",
                "code"        => "46.14.07",
                "name"        => "46.14.07 - Mediatori in macchinari, impianti industriali, navi e aeromobili, macchine agricole, macchine per ufficio, attrezzature per le telecomunicazioni, computer e loro periferiche",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.15",
                "name"        => "46.15 - Intermediari del commercio di mobili, articoli per la casa e ferramenta",
            ],
            [
                "parent_code" => "46.15",
                "code"        => "46.15.0",
                "name"        => "46.15.0 - Intermediari del commercio di mobili, articoli per la casa e ferramenta",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.01",
                "name"        => "46.15.01 - Agenti e rappresentanti di mobili in legno, metallo e materie plastiche",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.02",
                "name"        => "46.15.02 - Agenti e rappresentanti di articoli di ferramenta e di bricolage",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.03",
                "name"        => "46.15.03 - Agenti e rappresentanti di articoli casalinghi, porcellane, articoli in vetro eccetera",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.04",
                "name"        => "46.15.04 - Agenti e rappresentanti di vernici, carte da parati, stucchi e cornici decorativi",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.05",
                "name"        => "46.15.05 - Agenti e rappresentanti di mobili e oggetti di arredamento per la casa in canna, vimini, giunco, sughero, paglia; scope, spazzole, cesti e simili",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.06",
                "name"        => "46.15.06 - Procacciatori d'affari di mobili, articoli per la casa e ferramenta",
            ],
            [
                "parent_code" => "46.15.0",
                "code"        => "46.15.07",
                "name"        => "46.15.07 - Mediatori in mobili, articoli per la casa e ferramenta",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.16",
                "name"        => "46.16 - Intermediari del commercio di prodotti tessili, abbigliamento, pellicce, calzature e articoli in pelle",
            ],
            [
                "parent_code" => "46.16",
                "code"        => "46.16.0",
                "name"        => "46.16.0 - Intermediari del commercio di prodotti tessili, abbigliamento, pellicce, calzature e articoli in pelle",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.01",
                "name"        => "46.16.01 - Agenti e rappresentanti di vestiario ed accessori di abbigliamento",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.02",
                "name"        => "46.16.02 - Agenti e rappresentanti di pellicce",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.03",
                "name"        => "46.16.03 - Agenti e rappresentanti di tessuti per abbigliamento ed arredamento (incluse merceria e passamaneria)",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.04",
                "name"        => "46.16.04 - Agenti e rappresentanti di camicie, biancheria e maglieria intima",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.05",
                "name"        => "46.16.05 - Agenti e rappresentanti di calzature ed accessori",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.06",
                "name"        => "46.16.06 - Agenti e rappresentanti di pelletteria, valige ed articoli da viaggio",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.07",
                "name"        => "46.16.07 - Agenti e rappresentanti di articoli tessili per la casa, tappeti, stuoie e materassi",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.08",
                "name"        => "46.16.08 - Procacciatori d'affari di prodotti tessili, abbigliamento, pellicce, calzature e articoli in pelle",
            ],
            [
                "parent_code" => "46.16.0",
                "code"        => "46.16.09",
                "name"        => "46.16.09 - Mediatori in prodotti tessili, abbigliamento, pellicce, calzature e articoli in pelle",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.17",
                "name"        => "46.17 - Intermediari del commercio di prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.17",
                "code"        => "46.17.0",
                "name"        => "46.17.0 - Intermediari del commercio di prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.01",
                "name"        => "46.17.01 - Agenti e rappresentanti di prodotti ortofrutticoli freschi, congelati e surgelati",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.02",
                "name"        => "46.17.02 - Agenti e rappresentanti di carni fresche, congelate, surgelate, conservate e secche; salumi",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.03",
                "name"        => "46.17.03 - Agenti e rappresentanti di latte, burro e formaggi",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.04",
                "name"        => "46.17.04 - Agenti e rappresentanti di oli e grassi alimentari: olio d'oliva e di semi, margarina ed altri prodotti similari",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.05",
                "name"        => "46.17.05 - Agenti e rappresentanti di bevande e prodotti similari",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.06",
                "name"        => "46.17.06 - Agenti e rappresentanti di prodotti ittici freschi, congelati, surgelati, conservati e secchi",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.07",
                "name"        => "46.17.07 - Agenti e rappresentanti di altri prodotti alimentari (incluse le uova e gli alimenti per gli animali domestici); tabacco",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.08",
                "name"        => "46.17.08 - Procacciatori d'affari di prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.17.0",
                "code"        => "46.17.09",
                "name"        => "46.17.09 - Mediatori in prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.18",
                "name"        => "46.18 - Intermediari del commercio specializzato in altri prodotti",
            ],
            [
                "parent_code" => "46.18",
                "code"        => "46.18.1",
                "name"        => "46.18.1 - Intermediari del commercio di prodotti di carta, cancelleria, libri",
            ],
            [
                "parent_code" => "46.18.1",
                "code"        => "46.18.11",
                "name"        => "46.18.11 - Agenti e rappresentanti di carta e cartone (esclusi gli imballaggi); articoli di cartoleria e cancelleria",
            ],
            [
                "parent_code" => "46.18.1",
                "code"        => "46.18.12",
                "name"        => "46.18.12 - Agenti e rappresentanti di libri e altre pubblicazioni (incluso i relativi abbonamenti)",
            ],
            [
                "parent_code" => "46.18.1",
                "code"        => "46.18.13",
                "name"        => "46.18.13 - Procacciatori d'affari di prodotti di carta, cancelleria, libri",
            ],
            [
                "parent_code" => "46.18.1",
                "code"        => "46.18.14",
                "name"        => "46.18.14 - Mediatori in prodotti di carta, cancelleria, libri",
            ],
            [
                "parent_code" => "46.18",
                "code"        => "46.18.2",
                "name"        => "46.18.2 - Intermediari del commercio di elettronica di consumo audio e video, materiale elettrico per uso domestico, elettrodomestici",
            ],
            [
                "parent_code" => "46.18.2",
                "code"        => "46.18.21",
                "name"        => "46.18.21 - Agenti e rappresentanti di elettronica di consumo audio e video, materiale elettrico per uso domestico",
            ],
            [
                "parent_code" => "46.18.2",
                "code"        => "46.18.22",
                "name"        => "46.18.22 - Agenti e rappresentanti di apparecchi elettrodomestici",
            ],
            [
                "parent_code" => "46.18.2",
                "code"        => "46.18.23",
                "name"        => "46.18.23 - Procacciatori d'affari di elettronica di consumo audio e video, materiale elettrico per uso domestico, elettrodomestici",
            ],
            [
                "parent_code" => "46.18.2",
                "code"        => "46.18.24",
                "name"        => "46.18.24 - Mediatori in elettronica di consumo audio e video, materiale elettrico per uso domestico, elettrodomestici",
            ],
            [
                "parent_code" => "46.18",
                "code"        => "46.18.3",
                "name"        => "46.18.3 - Intermediari del commercio di prodotti farmaceutici e di cosmetici",
            ],
            [
                "parent_code" => "46.18.3",
                "code"        => "46.18.31",
                "name"        => "46.18.31 - Agenti e rappresentanti di prodotti farmaceutici; prodotti di erboristeria per uso medico",
            ],
            [
                "parent_code" => "46.18.3",
                "code"        => "46.18.32",
                "name"        => "46.18.32 - Agenti e rappresentanti di prodotti sanitari ed apparecchi medicali, chirurgici e ortopedici; apparecchi per centri di estetica",
            ],
            [
                "parent_code" => "46.18.3",
                "code"        => "46.18.33",
                "name"        => "46.18.33 - Agenti e rappresentanti di prodotti di profumeria e di cosmetica (inclusi articoli per parrucchieri); prodotti di erboristeria per uso cosmetico",
            ],
            [
                "parent_code" => "46.18.3",
                "code"        => "46.18.34",
                "name"        => "46.18.34 - Procacciatori d'affari di prodotti farmaceutici e di cosmetici",
            ],
            [
                "parent_code" => "46.18.3",
                "code"        => "46.18.35",
                "name"        => "46.18.35 - Mediatori in prodotti farmaceutici e cosmetici",
            ],
            [
                "parent_code" => "46.18",
                "code"        => "46.18.9",
                "name"        => "46.18.9 - Intermediari del commercio di attrezzature sportive, biciclette e altri prodotti n.c.a.",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.91",
                "name"        => "46.18.91 - Agenti e rappresentanti di attrezzature sportive; biciclette",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.92",
                "name"        => "46.18.92 - Agenti e rappresentanti di orologi, oggetti e semilavorati per gioielleria e oreficeria",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.93",
                "name"        => "46.18.93 - Agenti e rappresentanti di articoli fotografici, ottici e prodotti simili; strumenti scientifici e per laboratori di analisi",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.94",
                "name"        => "46.18.94 - Agenti e rappresentanti di saponi, detersivi, candele e prodotti simili",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.95",
                "name"        => "46.18.95 - Agenti e rappresentanti di giocattoli",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.96",
                "name"        => "46.18.96 - Agenti e rappresentanti di chincaglieria e bigiotteria",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.97",
                "name"        => "46.18.97 - Agenti e rappresentanti di altri prodotti non alimentari n.c.a. (inclusi gli imballaggi e gli articoli antinfortunistici, antincendio e pubblicitari)",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.98",
                "name"        => "46.18.98 - Procacciatori d'affari di attrezzature sportive, biciclette e altri prodotti n.c.a.",
            ],
            [
                "parent_code" => "46.18.9",
                "code"        => "46.18.99",
                "name"        => "46.18.99 - Mediatori in attrezzature sportive, biciclette e altri prodotti n.c.a.",
            ],
            [
                "parent_code" => "46.1",
                "code"        => "46.19",
                "name"        => "46.19 - Intermediari del commercio di vari prodotti senza prevalenza di alcuno",
            ],
            [
                "parent_code" => "46.19",
                "code"        => "46.19.0",
                "name"        => "46.19.0 - Intermediari del commercio di vari prodotti senza prevalenza di alcuno",
            ],
            [
                "parent_code" => "46.19.0",
                "code"        => "46.19.01",
                "name"        => "46.19.01 - Agenti e rappresentanti di vari prodotti senza prevalenza di alcuno",
            ],
            [
                "parent_code" => "46.19.0",
                "code"        => "46.19.02",
                "name"        => "46.19.02 - Procacciatori d'affari di vari prodotti senza prevalenza di alcuno",
            ],
            [
                "parent_code" => "46.19.0",
                "code"        => "46.19.03",
                "name"        => "46.19.03 - Mediatori in vari prodotti senza prevalenza di alcuno",
            ],
            [
                "parent_code" => "46.19.0",
                "code"        => "46.19.04",
                "name"        => "46.19.04 - Gruppi di acquisto; mandatari agli acquisti; buyer",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.2",
                "name"        => "46.2 - COMMERCIO ALL'INGROSSO DI MATERIE PRIME AGRICOLE E DI ANIMALI VIVI",
            ],
            [
                "parent_code" => "46.2",
                "code"        => "46.21",
                "name"        => "46.21 - Commercio all'ingrosso di cereali, tabacco grezzo, sementi e alimenti per il bestiame (mangimi)",
            ],
            [
                "parent_code" => "46.21",
                "code"        => "46.21.1",
                "name"        => "46.21.1 - Commercio all'ingrosso di cereali e legumi secchi",
            ],
            [
                "parent_code" => "46.21.1",
                "code"        => "46.21.10",
                "name"        => "46.21.10 - Commercio all'ingrosso di cereali e legumi secchi",
            ],
            [
                "parent_code" => "46.21",
                "code"        => "46.21.2",
                "name"        => "46.21.2 - Commercio all'ingrosso di sementi e alimenti per il bestiame (mangimi), piante officinali, semi oleosi, patate da semina, tabacco grezzo",
            ],
            [
                "parent_code" => "46.21.2",
                "code"        => "46.21.21",
                "name"        => "46.21.21 - Commercio all'ingrosso di tabacco grezzo",
            ],
            [
                "parent_code" => "46.21.2",
                "code"        => "46.21.22",
                "name"        => "46.21.22 - Commercio all'ingrosso di sementi e alimenti per il bestiame (mangimi), piante officinali, semi oleosi, patate da semina",
            ],
            [
                "parent_code" => "46.2",
                "code"        => "46.22",
                "name"        => "46.22 - Commercio all'ingrosso di fiori e piante",
            ],
            [
                "parent_code" => "46.22",
                "code"        => "46.22.0",
                "name"        => "46.22.0 - Commercio all'ingrosso di fiori e piante",
            ],
            [
                "parent_code" => "46.22.0",
                "code"        => "46.22.00",
                "name"        => "46.22.00 - Commercio all'ingrosso di fiori e piante",
            ],
            [
                "parent_code" => "46.2",
                "code"        => "46.23",
                "name"        => "46.23 - Commercio all'ingrosso di animali vivi",
            ],
            [
                "parent_code" => "46.23",
                "code"        => "46.23.0",
                "name"        => "46.23.0 - Commercio all'ingrosso di animali vivi",
            ],
            [
                "parent_code" => "46.23.0",
                "code"        => "46.23.00",
                "name"        => "46.23.00 - Commercio all'ingrosso di animali vivi",
            ],
            [
                "parent_code" => "46.2",
                "code"        => "46.24",
                "name"        => "46.24 - Commercio all'ingrosso di pelli e cuoio",
            ],
            [
                "parent_code" => "46.24",
                "code"        => "46.24.1",
                "name"        => "46.24.1 - Commercio all'ingrosso di cuoio e pelli gregge e lavorate (escluse le pelli per pellicceria)",
            ],
            [
                "parent_code" => "46.24.1",
                "code"        => "46.24.10",
                "name"        => "46.24.10 - Commercio all'ingrosso di cuoio e pelli gregge e lavorate (escluse le pelli per pellicceria)",
            ],
            [
                "parent_code" => "46.24",
                "code"        => "46.24.2",
                "name"        => "46.24.2 - Commercio all'ingrosso di pelli gregge e lavorate per pellicceria",
            ],
            [
                "parent_code" => "46.24.2",
                "code"        => "46.24.20",
                "name"        => "46.24.20 - Commercio all'ingrosso di pelli gregge e lavorate per pellicceria",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.3",
                "name"        => "46.3 - COMMERCIO ALL'INGROSSO DI PRODOTTI ALIMENTARI, BEVANDE E PRODOTTI DEL TABACCO",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.31",
                "name"        => "46.31 - Commercio all'ingrosso di frutta e ortaggi freschi o conservati",
            ],
            [
                "parent_code" => "46.31",
                "code"        => "46.31.1",
                "name"        => "46.31.1 - Commercio all'ingrosso di frutta e ortaggi freschi",
            ],
            [
                "parent_code" => "46.31.1",
                "code"        => "46.31.10",
                "name"        => "46.31.10 - Commercio all'ingrosso di frutta e ortaggi freschi",
            ],
            [
                "parent_code" => "46.31",
                "code"        => "46.31.2",
                "name"        => "46.31.2 - Commercio all'ingrosso di frutta e ortaggi conservati",
            ],
            [
                "parent_code" => "46.31.2",
                "code"        => "46.31.20",
                "name"        => "46.31.20 - Commercio all'ingrosso di frutta e ortaggi conservati",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.32",
                "name"        => "46.32 - Commercio all'ingrosso di carne e di prodotti a base di carne",
            ],
            [
                "parent_code" => "46.32",
                "code"        => "46.32.1",
                "name"        => "46.32.1 - Commercio all'ingrosso di carne fresca, congelata e surgelata",
            ],
            [
                "parent_code" => "46.32.1",
                "code"        => "46.32.10",
                "name"        => "46.32.10 - Commercio all'ingrosso di carne fresca, congelata e surgelata",
            ],
            [
                "parent_code" => "46.32",
                "code"        => "46.32.2",
                "name"        => "46.32.2 - Commercio all'ingrosso di prodotti di salumeria",
            ],
            [
                "parent_code" => "46.32.2",
                "code"        => "46.32.20",
                "name"        => "46.32.20 - Commercio all'ingrosso di prodotti di salumeria",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.33",
                "name"        => "46.33 - Commercio all'ingrosso di prodotti lattiero-caseari, uova, oli e grassi commestibili",
            ],
            [
                "parent_code" => "46.33",
                "code"        => "46.33.1",
                "name"        => "46.33.1 - Commercio all'ingrosso di prodotti lattiero-caseari e di uova",
            ],
            [
                "parent_code" => "46.33.1",
                "code"        => "46.33.10",
                "name"        => "46.33.10 - Commercio all'ingrosso di prodotti lattiero-caseari e di uova",
            ],
            [
                "parent_code" => "46.33",
                "code"        => "46.33.2",
                "name"        => "46.33.2 - Commercio all'ingrosso di oli e grassi alimentari di origine vegetale o animale",
            ],
            [
                "parent_code" => "46.33.2",
                "code"        => "46.33.20",
                "name"        => "46.33.20 - Commercio all'ingrosso di oli e grassi alimentari di origine vegetale o animale",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.34",
                "name"        => "46.34 - Commercio all'ingrosso di bevande",
            ],
            [
                "parent_code" => "46.34",
                "code"        => "46.34.1",
                "name"        => "46.34.1 - Commercio all'ingrosso di bevande alcoliche",
            ],
            [
                "parent_code" => "46.34.1",
                "code"        => "46.34.10",
                "name"        => "46.34.10 - Commercio all'ingrosso di bevande alcoliche",
            ],
            [
                "parent_code" => "46.34",
                "code"        => "46.34.2",
                "name"        => "46.34.2 - Commercio all'ingrosso di bevande non alcoliche",
            ],
            [
                "parent_code" => "46.34.2",
                "code"        => "46.34.20",
                "name"        => "46.34.20 - Commercio all'ingrosso di bevande non alcoliche",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.35",
                "name"        => "46.35 - Commercio all'ingrosso di prodotti del tabacco",
            ],
            [
                "parent_code" => "46.35",
                "code"        => "46.35.0",
                "name"        => "46.35.0 - Commercio all'ingrosso di prodotti del tabacco",
            ],
            [
                "parent_code" => "46.35.0",
                "code"        => "46.35.00",
                "name"        => "46.35.00 - Commercio all'ingrosso di prodotti del tabacco",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.36",
                "name"        => "46.36 - Commercio all'ingrosso di zucchero, cioccolato, dolciumi e prodotti da forno",
            ],
            [
                "parent_code" => "46.36",
                "code"        => "46.36.0",
                "name"        => "46.36.0 - Commercio all'ingrosso di zucchero, cioccolato, dolciumi e prodotti da forno",
            ],
            [
                "parent_code" => "46.36.0",
                "code"        => "46.36.00",
                "name"        => "46.36.00 - Commercio all'ingrosso di zucchero, cioccolato, dolciumi e prodotti da forno",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.37",
                "name"        => "46.37 - Commercio all'ingrosso di caffè, tè, cacao e spezie",
            ],
            [
                "parent_code" => "46.37",
                "code"        => "46.37.0",
                "name"        => "46.37.0 - Commercio all'ingrosso di caffè, tè, cacao e spezie",
            ],
            [
                "parent_code" => "46.37.0",
                "code"        => "46.37.01",
                "name"        => "46.37.01 - Commercio all'ingrosso di caffè",
            ],
            [
                "parent_code" => "46.37.0",
                "code"        => "46.37.02",
                "name"        => "46.37.02 - Commercio all'ingrosso di tè, cacao e spezie",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.38",
                "name"        => "46.38 - Commercio all'ingrosso di altri prodotti alimentari, inclusi pesci, crostacei e molluschi",
            ],
            [
                "parent_code" => "46.38",
                "code"        => "46.38.1",
                "name"        => "46.38.1 - Commercio all'ingrosso di prodotti della pesca freschi",
            ],
            [
                "parent_code" => "46.38.1",
                "code"        => "46.38.10",
                "name"        => "46.38.10 - Commercio all'ingrosso di prodotti della pesca freschi",
            ],
            [
                "parent_code" => "46.38",
                "code"        => "46.38.2",
                "name"        => "46.38.2 - Commercio all'ingrosso di prodotti della pesca congelati, surgelati, conservati, secchi",
            ],
            [
                "parent_code" => "46.38.2",
                "code"        => "46.38.20",
                "name"        => "46.38.20 - Commercio all'ingrosso di prodotti della pesca congelati, surgelati, conservati, secchi",
            ],
            [
                "parent_code" => "46.38",
                "code"        => "46.38.3",
                "name"        => "46.38.3 - Commercio all'ingrosso di pasti e piatti pronti",
            ],
            [
                "parent_code" => "46.38.3",
                "code"        => "46.38.30",
                "name"        => "46.38.30 - Commercio all'ingrosso di pasti e piatti pronti",
            ],
            [
                "parent_code" => "46.38",
                "code"        => "46.38.9",
                "name"        => "46.38.9 - Commercio all'ingrosso di altri prodotti alimentari",
            ],
            [
                "parent_code" => "46.38.9",
                "code"        => "46.38.90",
                "name"        => "46.38.90 - Commercio all'ingrosso di altri prodotti alimentari",
            ],
            [
                "parent_code" => "46.3",
                "code"        => "46.39",
                "name"        => "46.39 - Commercio all'ingrosso non specializzato di prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.39",
                "code"        => "46.39.1",
                "name"        => "46.39.1 - Commercio all'ingrosso non specializzato di prodotti surgelati",
            ],
            [
                "parent_code" => "46.39.1",
                "code"        => "46.39.10",
                "name"        => "46.39.10 - Commercio all'ingrosso non specializzato di prodotti surgelati",
            ],
            [
                "parent_code" => "46.39",
                "code"        => "46.39.2",
                "name"        => "46.39.2 - Commercio all'ingrosso non specializzato di altri prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46.39.2",
                "code"        => "46.39.20",
                "name"        => "46.39.20 - Commercio all'ingrosso non specializzato di altri prodotti alimentari, bevande e tabacco",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.4",
                "name"        => "46.4 - COMMERCIO ALL'INGROSSO DI BENI DI CONSUMO FINALE",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.41",
                "name"        => "46.41 - Commercio all'ingrosso di prodotti tessili",
            ],
            [
                "parent_code" => "46.41",
                "code"        => "46.41.1",
                "name"        => "46.41.1 - Commercio all'ingrosso di tessuti",
            ],
            [
                "parent_code" => "46.41.1",
                "code"        => "46.41.10",
                "name"        => "46.41.10 - Commercio all'ingrosso di tessuti",
            ],
            [
                "parent_code" => "46.41",
                "code"        => "46.41.2",
                "name"        => "46.41.2 - Commercio all'ingrosso di articoli di merceria, filati e passamaneria",
            ],
            [
                "parent_code" => "46.41.2",
                "code"        => "46.41.20",
                "name"        => "46.41.20 - Commercio all'ingrosso di articoli di merceria, filati e passamaneria",
            ],
            [
                "parent_code" => "46.41",
                "code"        => "46.41.9",
                "name"        => "46.41.9 - Commercio all'ingrosso di altri articoli tessili",
            ],
            [
                "parent_code" => "46.41.9",
                "code"        => "46.41.90",
                "name"        => "46.41.90 - Commercio all'ingrosso di altri articoli tessili",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.42",
                "name"        => "46.42 - Commercio all'ingrosso di abbigliamento e di calzature",
            ],
            [
                "parent_code" => "46.42",
                "code"        => "46.42.1",
                "name"        => "46.42.1 - Commercio all'ingrosso di abbigliamento e accessori",
            ],
            [
                "parent_code" => "46.42.1",
                "code"        => "46.42.10",
                "name"        => "46.42.10 - Commercio all'ingrosso di abbigliamento e accessori",
            ],
            [
                "parent_code" => "46.42",
                "code"        => "46.42.2",
                "name"        => "46.42.2 - Commercio all'ingrosso di articoli in pelliccia",
            ],
            [
                "parent_code" => "46.42.2",
                "code"        => "46.42.20",
                "name"        => "46.42.20 - Commercio all'ingrosso di articoli in pelliccia",
            ],
            [
                "parent_code" => "46.42",
                "code"        => "46.42.3",
                "name"        => "46.42.3 - Commercio all'ingrosso di camicie, biancheria intima, maglieria e simili",
            ],
            [
                "parent_code" => "46.42.3",
                "code"        => "46.42.30",
                "name"        => "46.42.30 - Commercio all'ingrosso di camicie, biancheria intima, maglieria e simili",
            ],
            [
                "parent_code" => "46.42",
                "code"        => "46.42.4",
                "name"        => "46.42.4 - Commercio all'ingrosso di calzature e accessori",
            ],
            [
                "parent_code" => "46.42.4",
                "code"        => "46.42.40",
                "name"        => "46.42.40 - Commercio all'ingrosso di calzature e accessori",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.43",
                "name"        => "46.43 - Commercio all'ingrosso di elettrodomestici, elettronica di consumo audio e video; articoli per fotografia, cinematografia e ottica",
            ],
            [
                "parent_code" => "46.43",
                "code"        => "46.43.1",
                "name"        => "46.43.1 - Commercio all'ingrosso di elettrodomestici, di elettronica di consumo audio e video",
            ],
            [
                "parent_code" => "46.43.1",
                "code"        => "46.43.10",
                "name"        => "46.43.10 - Commercio all'ingrosso di elettrodomestici, di elettronica di consumo audio e video",
            ],
            [
                "parent_code" => "46.43",
                "code"        => "46.43.2",
                "name"        => "46.43.2 - Commercio all'ingrosso di supporti registrati, audio, video (Cd, Dvd e altri supporti)",
            ],
            [
                "parent_code" => "46.43.2",
                "code"        => "46.43.20",
                "name"        => "46.43.20 - Commercio all'ingrosso di supporti registrati, audio, video (Cd, Dvd e altri supporti)",
            ],
            [
                "parent_code" => "46.43",
                "code"        => "46.43.3",
                "name"        => "46.43.3 - Commercio all'ingrosso di articoli per fotografia, cinematografia e ottica",
            ],
            [
                "parent_code" => "46.43.3",
                "code"        => "46.43.30",
                "name"        => "46.43.30 - Commercio all'ingrosso di articoli per fotografia, cinematografia e ottica",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.44",
                "name"        => "46.44 - Commercio all'ingrosso di articoli di porcellana, di vetro e di prodotti per la pulizia",
            ],
            [
                "parent_code" => "46.44",
                "code"        => "46.44.1",
                "name"        => "46.44.1 - Commercio all'ingrosso di vetreria e cristalleria",
            ],
            [
                "parent_code" => "46.44.1",
                "code"        => "46.44.10",
                "name"        => "46.44.10 - Commercio all'ingrosso di vetreria e cristalleria",
            ],
            [
                "parent_code" => "46.44",
                "code"        => "46.44.2",
                "name"        => "46.44.2 - Commercio all'ingrosso di ceramiche e porcellana",
            ],
            [
                "parent_code" => "46.44.2",
                "code"        => "46.44.20",
                "name"        => "46.44.20 - Commercio all'ingrosso di ceramiche e porcellana",
            ],
            [
                "parent_code" => "46.44",
                "code"        => "46.44.3",
                "name"        => "46.44.3 - Commercio all'ingrosso di saponi, detersivi e altri prodotti per la pulizia",
            ],
            [
                "parent_code" => "46.44.3",
                "code"        => "46.44.30",
                "name"        => "46.44.30 - Commercio all'ingrosso di saponi, detersivi e altri prodotti per la pulizia",
            ],
            [
                "parent_code" => "46.44",
                "code"        => "46.44.4",
                "name"        => "46.44.4 - Commercio all'ingrosso di coltelleria, posateria e pentolame",
            ],
            [
                "parent_code" => "46.44.4",
                "code"        => "46.44.40",
                "name"        => "46.44.40 - Commercio all'ingrosso di coltelleria, posateria e pentolame",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.45",
                "name"        => "46.45 - Commercio all'ingrosso di profumi e cosmetici",
            ],
            [
                "parent_code" => "46.45",
                "code"        => "46.45.0",
                "name"        => "46.45.0 - Commercio all'ingrosso di profumi e cosmetici",
            ],
            [
                "parent_code" => "46.45.0",
                "code"        => "46.45.00",
                "name"        => "46.45.00 - Commercio all'ingrosso di profumi e cosmetici",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.46",
                "name"        => "46.46 - Commercio all'ingrosso di prodotti farmaceutici",
            ],
            [
                "parent_code" => "46.46",
                "code"        => "46.46.1",
                "name"        => "46.46.1 - Commercio all'ingrosso di medicinali",
            ],
            [
                "parent_code" => "46.46.1",
                "code"        => "46.46.10",
                "name"        => "46.46.10 - Commercio all'ingrosso di medicinali",
            ],
            [
                "parent_code" => "46.46",
                "code"        => "46.46.2",
                "name"        => "46.46.2 - Commercio all'ingrosso di prodotti botanici per uso farmaceutico",
            ],
            [
                "parent_code" => "46.46.2",
                "code"        => "46.46.20",
                "name"        => "46.46.20 - Commercio all'ingrosso di prodotti botanici per uso farmaceutico",
            ],
            [
                "parent_code" => "46.46",
                "code"        => "46.46.3",
                "name"        => "46.46.3 - Commercio all'ingrosso di articoli medicali ed ortopedici",
            ],
            [
                "parent_code" => "46.46.3",
                "code"        => "46.46.30",
                "name"        => "46.46.30 - Commercio all'ingrosso di articoli medicali ed ortopedici",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.47",
                "name"        => "46.47 - Commercio all'ingrosso di mobili, tappeti e articoli per l'illuminazione",
            ],
            [
                "parent_code" => "46.47",
                "code"        => "46.47.1",
                "name"        => "46.47.1 - Commercio all'ingrosso di mobili di qualsiasi materiale",
            ],
            [
                "parent_code" => "46.47.1",
                "code"        => "46.47.10",
                "name"        => "46.47.10 - Commercio all'ingrosso di mobili di qualsiasi materiale",
            ],
            [
                "parent_code" => "46.47",
                "code"        => "46.47.2",
                "name"        => "46.47.2 - Commercio all'ingrosso di tappeti",
            ],
            [
                "parent_code" => "46.47.2",
                "code"        => "46.47.20",
                "name"        => "46.47.20 - Commercio all'ingrosso di tappeti",
            ],
            [
                "parent_code" => "46.47",
                "code"        => "46.47.3",
                "name"        => "46.47.3 - Commercio all'ingrosso di articoli per l'illuminazione; materiale elettrico vario per uso domestico",
            ],
            [
                "parent_code" => "46.47.3",
                "code"        => "46.47.30",
                "name"        => "46.47.30 - Commercio all'ingrosso di articoli per l'illuminazione; materiale elettrico vario per uso domestico",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.48",
                "name"        => "46.48 - Commercio all'ingrosso di orologi e di gioielleria",
            ],
            [
                "parent_code" => "46.48",
                "code"        => "46.48.0",
                "name"        => "46.48.0 - Commercio all'ingrosso di orologi e di gioielleria",
            ],
            [
                "parent_code" => "46.48.0",
                "code"        => "46.48.00",
                "name"        => "46.48.00 - Commercio all'ingrosso di orologi e di gioielleria",
            ],
            [
                "parent_code" => "46.4",
                "code"        => "46.49",
                "name"        => "46.49 - Commercio all'ingrosso di altri beni di consumo",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.1",
                "name"        => "46.49.1 - Commercio all'ingrosso di carta, cartone e articoli di cartoleria",
            ],
            [
                "parent_code" => "46.49.1",
                "code"        => "46.49.10",
                "name"        => "46.49.10 - Commercio all'ingrosso di carta, cartone e articoli di cartoleria",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.2",
                "name"        => "46.49.2 - Commercio all'ingrosso di libri, riviste e giornali",
            ],
            [
                "parent_code" => "46.49.2",
                "code"        => "46.49.20",
                "name"        => "46.49.20 - Commercio all'ingrosso di libri, riviste e giornali",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.3",
                "name"        => "46.49.3 - Commercio all'ingrosso di giochi e giocattoli",
            ],
            [
                "parent_code" => "46.49.3",
                "code"        => "46.49.30",
                "name"        => "46.49.30 - Commercio all'ingrosso di giochi e giocattoli",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.4",
                "name"        => "46.49.4 - Commercio all'ingrosso di articoli sportivi (incluse le biciclette)",
            ],
            [
                "parent_code" => "46.49.4",
                "code"        => "46.49.40",
                "name"        => "46.49.40 - Commercio all'ingrosso di articoli sportivi (incluse le biciclette)",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.5",
                "name"        => "46.49.5 - Commercio all'ingrosso di articoli in pelle; articoli da viaggio in qualsiasi materiale",
            ],
            [
                "parent_code" => "46.49.5",
                "code"        => "46.49.50",
                "name"        => "46.49.50 - Commercio all'ingrosso di articoli in pelle; articoli da viaggio in qualsiasi materiale",
            ],
            [
                "parent_code" => "46.49",
                "code"        => "46.49.9",
                "name"        => "46.49.9 - Commercio all'ingrosso di vari prodotti di consumo non alimentare n.c.a.",
            ],
            [
                "parent_code" => "46.49.9",
                "code"        => "46.49.90",
                "name"        => "46.49.90 - Commercio all'ingrosso di vari prodotti di consumo non alimentare n.c.a.",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.5",
                "name"        => "46.5 - COMMERCIO ALL'INGROSSO DI APPARECCHIATURE ICT",
            ],
            [
                "parent_code" => "46.5",
                "code"        => "46.51",
                "name"        => "46.51 - Commercio all'ingrosso di computer, apparecchiature informatiche periferiche e di software",
            ],
            [
                "parent_code" => "46.51",
                "code"        => "46.51.0",
                "name"        => "46.51.0 - Commercio all'ingrosso di computer, apparecchiature informatiche periferiche e di software",
            ],
            [
                "parent_code" => "46.51.0",
                "code"        => "46.51.00",
                "name"        => "46.51.00 - Commercio all'ingrosso di computer, apparecchiature informatiche periferiche e di software",
            ],
            [
                "parent_code" => "46.5",
                "code"        => "46.52",
                "name"        => "46.52 - Commercio all'ingrosso di apparecchiature elettroniche per telecomunicazioni e componenti elettronici",
            ],
            [
                "parent_code" => "46.52",
                "code"        => "46.52.0",
                "name"        => "46.52.0 - Commercio all'ingrosso apparecchiature elettroniche per telecomunicazioni e componenti elettronici",
            ],
            [
                "parent_code" => "46.52.0",
                "code"        => "46.52.01",
                "name"        => "46.52.01 - Commercio all'ingrosso di apparecchi e materiali telefonici",
            ],
            [
                "parent_code" => "46.52.0",
                "code"        => "46.52.02",
                "name"        => "46.52.02 - Commercio all'ingrosso di nastri non registrati",
            ],
            [
                "parent_code" => "46.52.0",
                "code"        => "46.52.09",
                "name"        => "46.52.09 - Commercio all'ingrosso di altre apparecchiature elettroniche per telecomunicazioni e di altri componenti elettronici",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.6",
                "name"        => "46.6 - COMMERCIO ALL'INGROSSO DI ALTRI MACCHINARI, ATTREZZATURE E FORNITURE",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.61",
                "name"        => "46.61 - Commercio all'ingrosso di macchinari, attrezzature e forniture agricole",
            ],
            [
                "parent_code" => "46.61",
                "code"        => "46.61.0",
                "name"        => "46.61.0 - Commercio all'ingrosso di macchine, accessori e utensili agricoli, inclusi i trattori",
            ],
            [
                "parent_code" => "46.61.0",
                "code"        => "46.61.00",
                "name"        => "46.61.00 - Commercio all'ingrosso di macchine, accessori e utensili agricoli, inclusi i trattori",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.62",
                "name"        => "46.62 - Commercio all'ingrosso di macchine utensili",
            ],
            [
                "parent_code" => "46.62",
                "code"        => "46.62.0",
                "name"        => "46.62.0 - Commercio all'ingrosso di macchine utensili (incluse le relative parti intercambiabili)",
            ],
            [
                "parent_code" => "46.62.0",
                "code"        => "46.62.00",
                "name"        => "46.62.00 - Commercio all'ingrosso di macchine utensili (incluse le relative parti intercambiabili)",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.63",
                "name"        => "46.63 - Commercio all'ingrosso di macchinari per l'estrazione, l'edilizia e l'ingegneria civile",
            ],
            [
                "parent_code" => "46.63",
                "code"        => "46.63.0",
                "name"        => "46.63.0 - Commercio all'ingrosso di macchine per le miniere, l'edilizia e l'ingegneria civile",
            ],
            [
                "parent_code" => "46.63.0",
                "code"        => "46.63.00",
                "name"        => "46.63.00 - Commercio all'ingrosso di macchine per le miniere, l'edilizia e l'ingegneria civile",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.64",
                "name"        => "46.64 - Commercio all'ingrosso di macchinari per l'industria tessile, di macchine per cucire e per maglieria",
            ],
            [
                "parent_code" => "46.64",
                "code"        => "46.64.0",
                "name"        => "46.64.0 - Commercio all'ingrosso di macchine per l'industria tessile, di macchine per cucire e per maglieria",
            ],
            [
                "parent_code" => "46.64.0",
                "code"        => "46.64.00",
                "name"        => "46.64.00 - Commercio all'ingrosso di macchine per l'industria tessile, di macchine per cucire e per maglieria",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.65",
                "name"        => "46.65 - Commercio all'ingrosso di mobili per ufficio e negozi",
            ],
            [
                "parent_code" => "46.65",
                "code"        => "46.65.0",
                "name"        => "46.65.0 - Commercio all'ingrosso di mobili per ufficio e negozi",
            ],
            [
                "parent_code" => "46.65.0",
                "code"        => "46.65.00",
                "name"        => "46.65.00 - Commercio all'ingrosso di mobili per ufficio e negozi",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.66",
                "name"        => "46.66 - Commercio all'ingrosso di altre macchine e attrezzature per ufficio",
            ],
            [
                "parent_code" => "46.66",
                "code"        => "46.66.0",
                "name"        => "46.66.0 - Commercio all'ingrosso di altre macchine e attrezzature per ufficio",
            ],
            [
                "parent_code" => "46.66.0",
                "code"        => "46.66.00",
                "name"        => "46.66.00 - Commercio all'ingrosso di altre macchine e attrezzature per ufficio",
            ],
            [
                "parent_code" => "46.6",
                "code"        => "46.69",
                "name"        => "46.69 - Commercio all'ingrosso di altri macchinari e attrezzature",
            ],
            [
                "parent_code" => "46.69",
                "code"        => "46.69.1",
                "name"        => "46.69.1 - Commercio all'ingrosso di mezzi ed attrezzature di trasporto",
            ],
            [
                "parent_code" => "46.69.1",
                "code"        => "46.69.11",
                "name"        => "46.69.11 - Commercio all'ingrosso di imbarcazioni da diporto",
            ],
            [
                "parent_code" => "46.69.1",
                "code"        => "46.69.19",
                "name"        => "46.69.19 - Commercio all'ingrosso di altri mezzi ed attrezzature di trasporto",
            ],
            [
                "parent_code" => "46.69",
                "code"        => "46.69.2",
                "name"        => "46.69.2 - Commercio all'ingrosso di materiale elettrico per impianti di uso industriale",
            ],
            [
                "parent_code" => "46.69.2",
                "code"        => "46.69.20",
                "name"        => "46.69.20 - Commercio all'ingrosso di materiale elettrico per impianti di uso industriale",
            ],
            [
                "parent_code" => "46.69",
                "code"        => "46.69.3",
                "name"        => "46.69.3 - Commercio all'ingrosso di apparecchiature per parrucchieri, palestre, solarium e centri estetici",
            ],
            [
                "parent_code" => "46.69.3",
                "code"        => "46.69.30",
                "name"        => "46.69.30 - Commercio all'ingrosso di apparecchiature per parrucchieri, palestre, solarium e centri estetici",
            ],
            [
                "parent_code" => "46.69",
                "code"        => "46.69.9",
                "name"        => "46.69.9 - Commercio all'ingrosso di altre macchine e attrezzature per l'industria, il commercio e la navigazione",
            ],
            [
                "parent_code" => "46.69.9",
                "code"        => "46.69.91",
                "name"        => "46.69.91 - Commercio all'ingrosso di strumenti e attrezzature di misurazione per uso scientifico",
            ],
            [
                "parent_code" => "46.69.9",
                "code"        => "46.69.92",
                "name"        => "46.69.92 - Commercio all'ingrosso di strumenti e attrezzature di misurazione per uso non scientifico",
            ],
            [
                "parent_code" => "46.69.9",
                "code"        => "46.69.93",
                "name"        => "46.69.93 - Commercio all'ingrosso di giochi per luna-park e videogiochi per pubblici esercizi",
            ],
            [
                "parent_code" => "46.69.9",
                "code"        => "46.69.94",
                "name"        => "46.69.94 - Commercio all'ingrosso di articoli antincendio e antinfortunistici",
            ],
            [
                "parent_code" => "46.69.9",
                "code"        => "46.69.99",
                "name"        => "46.69.99 - Commercio all'ingrosso di altre macchine ed attrezzature per l'industria, il commercio e la navigazione n.c.a.",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.7",
                "name"        => "46.7 - COMMERCIO ALL'INGROSSO SPECIALIZZATO DI ALTRI PRODOTTI",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.71",
                "name"        => "46.71 - Commercio all'ingrosso di combustibili solidi, liquidi, gassosi e di prodotti derivati",
            ],
            [
                "parent_code" => "46.71",
                "code"        => "46.71.0",
                "name"        => "46.71.0 - Commercio all'ingrosso di prodotti petroliferi e lubrificanti per autotrazione, di combustibili per riscaldamento",
            ],
            [
                "parent_code" => "46.71.0",
                "code"        => "46.71.00",
                "name"        => "46.71.00 - Commercio all'ingrosso di prodotti petroliferi e lubrificanti per autotrazione, di combustibili per riscaldamento",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.72",
                "name"        => "46.72 - Commercio all'ingrosso di metalli e di minerali metalliferi",
            ],
            [
                "parent_code" => "46.72",
                "code"        => "46.72.1",
                "name"        => "46.72.1 - Commercio all'ingrosso di minerali metalliferi, di metalli ferrosi e prodotti semilavorati",
            ],
            [
                "parent_code" => "46.72.1",
                "code"        => "46.72.10",
                "name"        => "46.72.10 - Commercio all'ingrosso di minerali metalliferi, di metalli ferrosi e prodotti semilavorati",
            ],
            [
                "parent_code" => "46.72",
                "code"        => "46.72.2",
                "name"        => "46.72.2 - Commercio all'ingrosso di metalli non ferrosi e prodotti semilavorati",
            ],
            [
                "parent_code" => "46.72.2",
                "code"        => "46.72.20",
                "name"        => "46.72.20 - Commercio all'ingrosso di metalli non ferrosi e prodotti semilavorati",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.73",
                "name"        => "46.73 - Commercio all'ingrosso di legname e di materiali da costruzione, apparecchi igienico-sanitari, vetro piano, vernici e colori",
            ],
            [
                "parent_code" => "46.73",
                "code"        => "46.73.1",
                "name"        => "46.73.1 - Commercio all'ingrosso di legname, semilavorati in legno e legno artificiale",
            ],
            [
                "parent_code" => "46.73.1",
                "code"        => "46.73.10",
                "name"        => "46.73.10 - Commercio all'ingrosso di legname, semilavorati in legno e legno artificiale",
            ],
            [
                "parent_code" => "46.73",
                "code"        => "46.73.2",
                "name"        => "46.73.2 - Commercio all'ingrosso di materiali da costruzione (inclusi gli apparecchi igienico-sanitari)",
            ],
            [
                "parent_code" => "46.73.2",
                "code"        => "46.73.21",
                "name"        => "46.73.21 - Commercio all'ingrosso di moquette e linoleum",
            ],
            [
                "parent_code" => "46.73.2",
                "code"        => "46.73.22",
                "name"        => "46.73.22 - Commercio all'ingrosso di altri materiali per rivestimenti (inclusi gli apparecchi igienico-sanitari)",
            ],
            [
                "parent_code" => "46.73.2",
                "code"        => "46.73.23",
                "name"        => "46.73.23 - Commercio all'ingrosso di infissi",
            ],
            [
                "parent_code" => "46.73.2",
                "code"        => "46.73.29",
                "name"        => "46.73.29 - Commercio all'ingrosso di altri materiali da costruzione",
            ],
            [
                "parent_code" => "46.73",
                "code"        => "46.73.3",
                "name"        => "46.73.3 - Commercio all'ingrosso di vetro piano",
            ],
            [
                "parent_code" => "46.73.3",
                "code"        => "46.73.30",
                "name"        => "46.73.30 - Commercio all'ingrosso di vetro piano",
            ],
            [
                "parent_code" => "46.73",
                "code"        => "46.73.4",
                "name"        => "46.73.4 - Commercio all'ingrosso di carta da parati, colori e vernici",
            ],
            [
                "parent_code" => "46.73.4",
                "code"        => "46.73.40",
                "name"        => "46.73.40 - Commercio all'ingrosso di carta da parati, colori e vernici",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.74",
                "name"        => "46.74 - Commercio all'ingrosso di ferramenta, di apparecchi e accessori per impianti idraulici e di riscaldamento",
            ],
            [
                "parent_code" => "46.74",
                "code"        => "46.74.1",
                "name"        => "46.74.1 - Commercio all'ingrosso di articoli in ferro e in altri metalli (ferramenta)",
            ],
            [
                "parent_code" => "46.74.1",
                "code"        => "46.74.10",
                "name"        => "46.74.10 - Commercio all'ingrosso di articoli in ferro e in altri metalli (ferramenta)",
            ],
            [
                "parent_code" => "46.74",
                "code"        => "46.74.2",
                "name"        => "46.74.2 - Commercio all'ingrosso di apparecchi e accessori per impianti idraulici, di riscaldamento e di condizionamento",
            ],
            [
                "parent_code" => "46.74.2",
                "code"        => "46.74.20",
                "name"        => "46.74.20 - Commercio all'ingrosso di apparecchi e accessori per impianti idraulici, di riscaldamento e di condizionamento",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.75",
                "name"        => "46.75 - Commercio all'ingrosso di prodotti chimici",
            ],
            [
                "parent_code" => "46.75",
                "code"        => "46.75.0",
                "name"        => "46.75.0 - Commercio all'ingrosso di prodotti chimici",
            ],
            [
                "parent_code" => "46.75.0",
                "code"        => "46.75.01",
                "name"        => "46.75.01 - Commercio all'ingrosso di fertilizzanti e di altri prodotti chimici per l'agricoltura",
            ],
            [
                "parent_code" => "46.75.0",
                "code"        => "46.75.02",
                "name"        => "46.75.02 - Commercio all'ingrosso di prodotti chimici per l'industria",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.76",
                "name"        => "46.76 - Commercio all'ingrosso di altri prodotti intermedi",
            ],
            [
                "parent_code" => "46.76",
                "code"        => "46.76.1",
                "name"        => "46.76.1 - Commercio all'ingrosso di fibre tessili gregge e semilavorate",
            ],
            [
                "parent_code" => "46.76.1",
                "code"        => "46.76.10",
                "name"        => "46.76.10 - Commercio all'ingrosso di fibre tessili gregge e semilavorate",
            ],
            [
                "parent_code" => "46.76",
                "code"        => "46.76.2",
                "name"        => "46.76.2 - Commercio all'ingrosso di gomma greggia, materie plastiche in forme primarie e semilavorati",
            ],
            [
                "parent_code" => "46.76.2",
                "code"        => "46.76.20",
                "name"        => "46.76.20 - Commercio all'ingrosso di gomma greggia, materie plastiche in forme primarie e semilavorati",
            ],
            [
                "parent_code" => "46.76",
                "code"        => "46.76.3",
                "name"        => "46.76.3 - Commercio all'ingrosso di imballaggi",
            ],
            [
                "parent_code" => "46.76.3",
                "code"        => "46.76.30",
                "name"        => "46.76.30 - Commercio all'ingrosso di imballaggi",
            ],
            [
                "parent_code" => "46.76",
                "code"        => "46.76.9",
                "name"        => "46.76.9 - Commercio all'ingrosso di altri prodotti intermedi n.c.a.",
            ],
            [
                "parent_code" => "46.76.9",
                "code"        => "46.76.90",
                "name"        => "46.76.90 - Commercio all'ingrosso di altri prodotti intermedi n.c.a.",
            ],
            [
                "parent_code" => "46.7",
                "code"        => "46.77",
                "name"        => "46.77 - Commercio all'ingrosso di rottami e cascami",
            ],
            [
                "parent_code" => "46.77",
                "code"        => "46.77.1",
                "name"        => "46.77.1 - Commercio all'ingrosso di rottami e sottoprodotti della lavorazione industriale metallici",
            ],
            [
                "parent_code" => "46.77.1",
                "code"        => "46.77.10",
                "name"        => "46.77.10 - Commercio all'ingrosso di rottami e sottoprodotti della lavorazione industriale metallici",
            ],
            [
                "parent_code" => "46.77",
                "code"        => "46.77.2",
                "name"        => "46.77.2 - Commercio all'ingrosso di altri materiali di recupero non metallici (vetro, carta, cartoni eccetera); sottoprodotti non metallici della lavorazione industriale (cascami)",
            ],
            [
                "parent_code" => "46.77.2",
                "code"        => "46.77.20",
                "name"        => "46.77.20 - Commercio all'ingrosso di altri materiali di recupero non metallici (vetro, carta, cartoni eccetera); sottoprodotti non metallici della lavorazione industriale (cascami)",
            ],
            [
                "parent_code" => "46",
                "code"        => "46.9",
                "name"        => "46.9 - COMMERCIO ALL'INGROSSO NON SPECIALIZZATO",
            ],
            [
                "parent_code" => "46.9",
                "code"        => "46.90",
                "name"        => "46.90 - Commercio all'ingrosso non specializzato",
            ],
            [
                "parent_code" => "46.90",
                "code"        => "46.90.0",
                "name"        => "46.90.0 - Commercio all'ingrosso non specializzato",
            ],
            [
                "parent_code" => "46.90.0",
                "code"        => "46.90.00",
                "name"        => "46.90.00 - Commercio all'ingrosso non specializzato",
            ],
            [
                "parent_code" => "G",
                "code"        => "47",
                "name"        => "47 - COMMERCIO AL DETTAGLIO (ESCLUSO QUELLO DI AUTOVEICOLI E DI MOTOCICLI)",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.1",
                "name"        => "47.1 - COMMERCIO AL DETTAGLIO IN ESERCIZI NON SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.1",
                "code"        => "47.11",
                "name"        => "47.11 - Commercio al dettaglio in esercizi non specializzati con prevalenza di prodotti alimentari e bevande",
            ],
            [
                "parent_code" => "47.11",
                "code"        => "47.11.1",
                "name"        => "47.11.1 - Ipermercati",
            ],
            [
                "parent_code" => "47.11.1",
                "code"        => "47.11.10",
                "name"        => "47.11.10 - Ipermercati",
            ],
            [
                "parent_code" => "47.11",
                "code"        => "47.11.2",
                "name"        => "47.11.2 - Supermercati",
            ],
            [
                "parent_code" => "47.11.2",
                "code"        => "47.11.20",
                "name"        => "47.11.20 - Supermercati",
            ],
            [
                "parent_code" => "47.11",
                "code"        => "47.11.3",
                "name"        => "47.11.3 - Discount di alimentari",
            ],
            [
                "parent_code" => "47.11.3",
                "code"        => "47.11.30",
                "name"        => "47.11.30 - Discount di alimentari",
            ],
            [
                "parent_code" => "47.11",
                "code"        => "47.11.4",
                "name"        => "47.11.4 - Minimercati ed altri esercizi non specializzati di alimentari vari",
            ],
            [
                "parent_code" => "47.11.4",
                "code"        => "47.11.40",
                "name"        => "47.11.40 - Minimercati ed altri esercizi non specializzati di alimentari vari",
            ],
            [
                "parent_code" => "47.11",
                "code"        => "47.11.5",
                "name"        => "47.11.5 - Commercio al dettaglio di prodotti surgelati",
            ],
            [
                "parent_code" => "47.11.5",
                "code"        => "47.11.50",
                "name"        => "47.11.50 - Commercio al dettaglio di prodotti surgelati",
            ],
            [
                "parent_code" => "47.1",
                "code"        => "47.19",
                "name"        => "47.19 - Commercio al dettaglio in altri esercizi non specializzati",
            ],
            [
                "parent_code" => "47.19",
                "code"        => "47.19.1",
                "name"        => "47.19.1 - Grandi magazzini",
            ],
            [
                "parent_code" => "47.19.1",
                "code"        => "47.19.10",
                "name"        => "47.19.10 - Grandi magazzini",
            ],
            [
                "parent_code" => "47.19",
                "code"        => "47.19.2",
                "name"        => "47.19.2 - Commercio al dettaglio in esercizi non specializzati di computer, periferiche, attrezzature per le telecomunicazioni, elettronica di consumo audio e video, elettrodomestici",
            ],
            [
                "parent_code" => "47.19.2",
                "code"        => "47.19.20",
                "name"        => "47.19.20 - Commercio al dettaglio in esercizi non specializzati di computer, periferiche, attrezzature per le telecomunicazioni, elettronica di consumo audio e video, elettrodomestici",
            ],
            [
                "parent_code" => "47.19",
                "code"        => "47.19.9",
                "name"        => "47.19.9 - Empori ed altri negozi non specializzati di vari prodotti non alimentari",
            ],
            [
                "parent_code" => "47.19.9",
                "code"        => "47.19.90",
                "name"        => "47.19.90 - Empori ed altri negozi non specializzati di vari prodotti non alimentari",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.2",
                "name"        => "47.2 - COMMERCIO AL DETTAGLIO DI PRODOTTI ALIMENTARI, BEVANDE E TABACCO IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.21",
                "name"        => "47.21 - Commercio al dettaglio di frutta e verdura in esercizi specializzati",
            ],
            [
                "parent_code" => "47.21",
                "code"        => "47.21.0",
                "name"        => "47.21.0 - Commercio al dettaglio di frutta e verdura",
            ],
            [
                "parent_code" => "47.21.0",
                "code"        => "47.21.01",
                "name"        => "47.21.01 - Commercio al dettaglio di frutta e verdura fresca",
            ],
            [
                "parent_code" => "47.21.0",
                "code"        => "47.21.02",
                "name"        => "47.21.02 - Commercio al dettaglio di frutta e verdura preparata e conservata",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.22",
                "name"        => "47.22 - Commercio al dettaglio di carni e di prodotti a base di carne in esercizi specializzati",
            ],
            [
                "parent_code" => "47.22",
                "code"        => "47.22.0",
                "name"        => "47.22.0 - Commercio al dettaglio di carni e di prodotti a base di carne",
            ],
            [
                "parent_code" => "47.22.0",
                "code"        => "47.22.00",
                "name"        => "47.22.00 - Commercio al dettaglio di carni e di prodotti a base di carne",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.23",
                "name"        => "47.23 - Commercio al dettaglio di pesci, crostacei e molluschi in esercizi specializzati",
            ],
            [
                "parent_code" => "47.23",
                "code"        => "47.23.0",
                "name"        => "47.23.0 - Commercio al dettaglio di pesci, crostacei e molluschi",
            ],
            [
                "parent_code" => "47.23.0",
                "code"        => "47.23.00",
                "name"        => "47.23.00 - Commercio al dettaglio di pesci, crostacei e molluschi",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.24",
                "name"        => "47.24 - Commercio al dettaglio di pane, torte, dolciumi e confetteria in esercizi specializzati",
            ],
            [
                "parent_code" => "47.24",
                "code"        => "47.24.1",
                "name"        => "47.24.1 - Commercio al dettaglio di pane",
            ],
            [
                "parent_code" => "47.24.1",
                "code"        => "47.24.10",
                "name"        => "47.24.10 - Commercio al dettaglio di pane",
            ],
            [
                "parent_code" => "47.24",
                "code"        => "47.24.2",
                "name"        => "47.24.2 - Commercio al dettaglio di torte, dolciumi, confetteria",
            ],
            [
                "parent_code" => "47.24.2",
                "code"        => "47.24.20",
                "name"        => "47.24.20 - Commercio al dettaglio di torte, dolciumi, confetteria",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.25",
                "name"        => "47.25 - Commercio al dettaglio di bevande in esercizi specializzati",
            ],
            [
                "parent_code" => "47.25",
                "code"        => "47.25.0",
                "name"        => "47.25.0 - Commercio al dettaglio di bevande",
            ],
            [
                "parent_code" => "47.25.0",
                "code"        => "47.25.00",
                "name"        => "47.25.00 - Commercio al dettaglio di bevande",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.26",
                "name"        => "47.26 - Commercio al dettaglio di prodotti del tabacco in esercizi specializzati",
            ],
            [
                "parent_code" => "47.26",
                "code"        => "47.26.0",
                "name"        => "47.26.0 - Commercio al dettaglio di generi di monopolio (tabaccherie)",
            ],
            [
                "parent_code" => "47.26.0",
                "code"        => "47.26.00",
                "name"        => "47.26.00 - Commercio al dettaglio di generi di monopolio (tabaccherie)",
            ],
            [
                "parent_code" => "47.2",
                "code"        => "47.29",
                "name"        => "47.29 - Commercio al dettaglio di altri prodotti alimentari in esercizi specializzati",
            ],
            [
                "parent_code" => "47.29",
                "code"        => "47.29.1",
                "name"        => "47.29.1 - Commercio al dettaglio di latte e di prodotti lattiero-caseari",
            ],
            [
                "parent_code" => "47.29.1",
                "code"        => "47.29.10",
                "name"        => "47.29.10 - Commercio al dettaglio di latte e di prodotti lattiero-caseari",
            ],
            [
                "parent_code" => "47.29",
                "code"        => "47.29.2",
                "name"        => "47.29.2 - Commercio al dettaglio di caffè torrefatto",
            ],
            [
                "parent_code" => "47.29.2",
                "code"        => "47.29.20",
                "name"        => "47.29.20 - Commercio al dettaglio di caffè torrefatto",
            ],
            [
                "parent_code" => "47.29",
                "code"        => "47.29.3",
                "name"        => "47.29.3 - Commercio al dettaglio di prodotti macrobiotici e dietetici",
            ],
            [
                "parent_code" => "47.29.3",
                "code"        => "47.29.30",
                "name"        => "47.29.30 - Commercio al dettaglio di prodotti macrobiotici e dietetici",
            ],
            [
                "parent_code" => "47.29",
                "code"        => "47.29.9",
                "name"        => "47.29.9 - Commercio al dettaglio di altri prodotti alimentari in esercizi specializzati n.c.a.",
            ],
            [
                "parent_code" => "47.29.9",
                "code"        => "47.29.90",
                "name"        => "47.29.90 - Commercio al dettaglio di altri prodotti alimentari in esercizi specializzati n.c.a.",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.3",
                "name"        => "47.3 - COMMERCIO AL DETTAGLIO DI CARBURANTE PER AUTOTRAZIONE IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.3",
                "code"        => "47.30",
                "name"        => "47.30 - Commercio al dettaglio di carburante per autotrazione in esercizi specializzati",
            ],
            [
                "parent_code" => "47.30",
                "code"        => "47.30.0",
                "name"        => "47.30.0 - Commercio al dettaglio di carburante per autotrazione",
            ],
            [
                "parent_code" => "47.30.0",
                "code"        => "47.30.00",
                "name"        => "47.30.00 - Commercio al dettaglio di carburante per autotrazione",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.4",
                "name"        => "47.4 - COMMERCIO AL DETTAGLIO DI APPARECCHIATURE INFORMATICHE E PER LE TELECOMUNICAZIONI (ICT) IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.4",
                "code"        => "47.41",
                "name"        => "47.41 - Commercio al dettaglio di computer, unità periferiche, software e attrezzature per ufficio in esercizi specializzati",
            ],
            [
                "parent_code" => "47.41",
                "code"        => "47.41.0",
                "name"        => "47.41.0 - Commercio al dettaglio di computer, unità periferiche, software e attrezzature per ufficio in esercizi specializzati",
            ],
            [
                "parent_code" => "47.41.0",
                "code"        => "47.41.00",
                "name"        => "47.41.00 - Commercio al dettaglio di computer, unità periferiche, software e attrezzature per ufficio in esercizi specializzati",
            ],
            [
                "parent_code" => "47.4",
                "code"        => "47.42",
                "name"        => "47.42 - Commercio al dettaglio di apparecchiature per le telecomunicazioni e la telefonia in esercizi specializzati",
            ],
            [
                "parent_code" => "47.42",
                "code"        => "47.42.0",
                "name"        => "47.42.0 - Commercio al dettaglio di apparecchiature per le telecomunicazioni e la telefonia in esercizi specializzati",
            ],
            [
                "parent_code" => "47.42.0",
                "code"        => "47.42.00",
                "name"        => "47.42.00 - Commercio al dettaglio di apparecchiature per le telecomunicazioni e la telefonia in esercizi specializzati",
            ],
            [
                "parent_code" => "47.4",
                "code"        => "47.43",
                "name"        => "47.43 - Commercio al dettaglio di apparecchiature audio e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47.43",
                "code"        => "47.43.0",
                "name"        => "47.43.0 - Commercio al dettaglio di apparecchi audio e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47.43.0",
                "code"        => "47.43.00",
                "name"        => "47.43.00 - Commercio al dettaglio di apparecchi audio e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.5",
                "name"        => "47.5 - COMMERCIO AL DETTAGLIO DI ALTRI PRODOTTI PER USO DOMESTICO IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.5",
                "code"        => "47.51",
                "name"        => "47.51 - Commercio al dettaglio di prodotti tessili in esercizi specializzati",
            ],
            [
                "parent_code" => "47.51",
                "code"        => "47.51.1",
                "name"        => "47.51.1 - Commercio al dettaglio di tessuti per l'abbigliamento, l'arredamento e di biancheria per la casa",
            ],
            [
                "parent_code" => "47.51.1",
                "code"        => "47.51.10",
                "name"        => "47.51.10 - Commercio al dettaglio di tessuti per l'abbigliamento, l'arredamento e di biancheria per la casa",
            ],
            [
                "parent_code" => "47.51",
                "code"        => "47.51.2",
                "name"        => "47.51.2 - Commercio al dettaglio di filati per maglieria e merceria",
            ],
            [
                "parent_code" => "47.51.2",
                "code"        => "47.51.20",
                "name"        => "47.51.20 - Commercio al dettaglio di filati per maglieria e merceria",
            ],
            [
                "parent_code" => "47.5",
                "code"        => "47.52",
                "name"        => "47.52 - Commercio al dettaglio di ferramenta, vernici, vetro piano e materiali da costruzione in esercizi specializzati",
            ],
            [
                "parent_code" => "47.52",
                "code"        => "47.52.1",
                "name"        => "47.52.1 - Commercio al dettaglio di ferramenta, vernici, vetro piano e materiale elettrico e termoidraulico",
            ],
            [
                "parent_code" => "47.52.1",
                "code"        => "47.52.10",
                "name"        => "47.52.10 - Commercio al dettaglio di ferramenta, vernici, vetro piano e materiale elettrico e termoidraulico",
            ],
            [
                "parent_code" => "47.52",
                "code"        => "47.52.2",
                "name"        => "47.52.2 - Commercio al dettaglio di articoli igienico-sanitari",
            ],
            [
                "parent_code" => "47.52.2",
                "code"        => "47.52.20",
                "name"        => "47.52.20 - Commercio al dettaglio di articoli igienico-sanitari",
            ],
            [
                "parent_code" => "47.52",
                "code"        => "47.52.3",
                "name"        => "47.52.3 - Commercio al dettaglio di materiali da costruzione, ceramiche e piastrelle",
            ],
            [
                "parent_code" => "47.52.3",
                "code"        => "47.52.30",
                "name"        => "47.52.30 - Commercio al dettaglio di materiali da costruzione, ceramiche e piastrelle",
            ],
            [
                "parent_code" => "47.52",
                "code"        => "47.52.4",
                "name"        => "47.52.4 - Commercio al dettaglio di macchine, attrezzature e prodotti per l'agricoltura; macchine e attrezzature per il giardinaggio",
            ],
            [
                "parent_code" => "47.52.4",
                "code"        => "47.52.40",
                "name"        => "47.52.40 - Commercio al dettaglio di macchine, attrezzature e prodotti per l'agricoltura; macchine e attrezzature per il giardinaggio",
            ],
            [
                "parent_code" => "47.5",
                "code"        => "47.53",
                "name"        => "47.53 - Commercio al dettaglio di tappeti, scendiletto e rivestimenti per pavimenti e pareti (moquette, linoleum) in esercizi specializzati",
            ],
            [
                "parent_code" => "47.53",
                "code"        => "47.53.1",
                "name"        => "47.53.1 - Commercio al dettaglio di tappeti, tende e tendine",
            ],
            [
                "parent_code" => "47.53.1",
                "code"        => "47.53.11",
                "name"        => "47.53.11 - Commercio al dettaglio di tende e tendine",
            ],
            [
                "parent_code" => "47.53.1",
                "code"        => "47.53.12",
                "name"        => "47.53.12 - Commercio al dettaglio di tappeti",
            ],
            [
                "parent_code" => "47.53",
                "code"        => "47.53.2",
                "name"        => "47.53.2 - Commercio al dettaglio di carta da parati e rivestimenti per pavimenti (moquette e linoleum)",
            ],
            [
                "parent_code" => "47.53.2",
                "code"        => "47.53.20",
                "name"        => "47.53.20 - Commercio al dettaglio di carta da parati e rivestimenti per pavimenti (moquette e linoleum)",
            ],
            [
                "parent_code" => "47.5",
                "code"        => "47.54",
                "name"        => "47.54 - Commercio al dettaglio di elettrodomestici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.54",
                "code"        => "47.54.0",
                "name"        => "47.54.0 - Commercio al dettaglio di elettrodomestici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.54.0",
                "code"        => "47.54.00",
                "name"        => "47.54.00 - Commercio al dettaglio di elettrodomestici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.5",
                "code"        => "47.59",
                "name"        => "47.59 - Commercio al dettaglio di mobili, di articoli per l'illuminazione e altri articoli per la casa in esercizi specializzati",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.1",
                "name"        => "47.59.1 - Commercio al dettaglio di mobili per la casa",
            ],
            [
                "parent_code" => "47.59.1",
                "code"        => "47.59.10",
                "name"        => "47.59.10 - Commercio al dettaglio di mobili per la casa",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.2",
                "name"        => "47.59.2 - Commercio al dettaglio di utensili per la casa, di cristallerie e vasellame",
            ],
            [
                "parent_code" => "47.59.2",
                "code"        => "47.59.20",
                "name"        => "47.59.20 - Commercio al dettaglio di utensili per la casa, di cristallerie e vasellame",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.3",
                "name"        => "47.59.3 - Commercio al dettaglio di articoli per l'illuminazione",
            ],
            [
                "parent_code" => "47.59.3",
                "code"        => "47.59.30",
                "name"        => "47.59.30 - Commercio al dettaglio di articoli per l'illuminazione",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.4",
                "name"        => "47.59.4 - Commercio al dettaglio di macchine per cucire e per maglieria per uso domestico",
            ],
            [
                "parent_code" => "47.59.4",
                "code"        => "47.59.40",
                "name"        => "47.59.40 - Commercio al dettaglio di macchine per cucire e per maglieria per uso domestico",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.5",
                "name"        => "47.59.5 - Commercio al dettaglio di sistemi di sicurezza",
            ],
            [
                "parent_code" => "47.59.5",
                "code"        => "47.59.50",
                "name"        => "47.59.50 - Commercio al dettaglio di sistemi di sicurezza",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.6",
                "name"        => "47.59.6 - Commercio al dettaglio di strumenti musicali e spartiti",
            ],
            [
                "parent_code" => "47.59.6",
                "code"        => "47.59.60",
                "name"        => "47.59.60 - Commercio al dettaglio di strumenti musicali e spartiti",
            ],
            [
                "parent_code" => "47.59",
                "code"        => "47.59.9",
                "name"        => "47.59.9 - Commercio al dettaglio di altri articoli diversi per uso domestico n.c.a.",
            ],
            [
                "parent_code" => "47.59.9",
                "code"        => "47.59.91",
                "name"        => "47.59.91 - Commercio al dettaglio di articoli in legno, sughero, vimini e articoli in plastica per uso domestico",
            ],
            [
                "parent_code" => "47.59.9",
                "code"        => "47.59.99",
                "name"        => "47.59.99 - Commercio al dettaglio di altri articoli per uso domestico n.c.a.",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.6",
                "name"        => "47.6 - COMMERCIO AL DETTAGLIO DI ARTICOLI CULTURALI E RICREATIVI IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.6",
                "code"        => "47.61",
                "name"        => "47.61 - Commercio al dettaglio di libri in esercizi specializzati",
            ],
            [
                "parent_code" => "47.61",
                "code"        => "47.61.0",
                "name"        => "47.61.0 - Commercio al dettaglio di libri nuovi in esercizi specializzati",
            ],
            [
                "parent_code" => "47.61.0",
                "code"        => "47.61.00",
                "name"        => "47.61.00 - Commercio al dettaglio di libri nuovi in esercizi specializzati",
            ],
            [
                "parent_code" => "47.6",
                "code"        => "47.62",
                "name"        => "47.62 - Commercio al dettaglio di giornali e articoli di cartoleria in esercizi specializzati",
            ],
            [
                "parent_code" => "47.62",
                "code"        => "47.62.1",
                "name"        => "47.62.1 - Commercio al dettaglio di giornali, riviste e periodici",
            ],
            [
                "parent_code" => "47.62.1",
                "code"        => "47.62.10",
                "name"        => "47.62.10 - Commercio al dettaglio di giornali, riviste e periodici",
            ],
            [
                "parent_code" => "47.62",
                "code"        => "47.62.2",
                "name"        => "47.62.2 - Commercio al dettaglio di articoli di cartoleria e forniture per ufficio",
            ],
            [
                "parent_code" => "47.62.2",
                "code"        => "47.62.20",
                "name"        => "47.62.20 - Commercio al dettaglio di articoli di cartoleria e forniture per ufficio",
            ],
            [
                "parent_code" => "47.6",
                "code"        => "47.63",
                "name"        => "47.63 - Commercio al dettaglio di registrazioni musicali e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47.63",
                "code"        => "47.63.0",
                "name"        => "47.63.0 - Commercio al dettaglio di registrazioni musicali e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47.63.0",
                "code"        => "47.63.00",
                "name"        => "47.63.00 - Commercio al dettaglio di registrazioni musicali e video in esercizi specializzati",
            ],
            [
                "parent_code" => "47.6",
                "code"        => "47.64",
                "name"        => "47.64 - Commercio al dettaglio di articoli sportivi in esercizi specializzati",
            ],
            [
                "parent_code" => "47.64",
                "code"        => "47.64.1",
                "name"        => "47.64.1 - Commercio al dettaglio di articoli sportivi, biciclette e articoli per il tempo libero",
            ],
            [
                "parent_code" => "47.64.1",
                "code"        => "47.64.10",
                "name"        => "47.64.10 - Commercio al dettaglio di articoli sportivi, biciclette e articoli per il tempo libero",
            ],
            [
                "parent_code" => "47.64",
                "code"        => "47.64.2",
                "name"        => "47.64.2 - Commercio al dettaglio di natanti e accessori",
            ],
            [
                "parent_code" => "47.64.2",
                "code"        => "47.64.20",
                "name"        => "47.64.20 - Commercio al dettaglio di natanti e accessori",
            ],
            [
                "parent_code" => "47.6",
                "code"        => "47.65",
                "name"        => "47.65 - Commercio al dettaglio di giochi e giocattoli in esercizi specializzati",
            ],
            [
                "parent_code" => "47.65",
                "code"        => "47.65.0",
                "name"        => "47.65.0 - Commercio al dettaglio di giochi e giocattoli (inclusi quelli elettronici)",
            ],
            [
                "parent_code" => "47.65.0",
                "code"        => "47.65.00",
                "name"        => "47.65.00 - Commercio al dettaglio di giochi e giocattoli (inclusi quelli elettronici)",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.7",
                "name"        => "47.7 - COMMERCIO AL DETTAGLIO DI ALTRI PRODOTTI IN ESERCIZI SPECIALIZZATI",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.71",
                "name"        => "47.71 - Commercio al dettaglio di articoli di abbigliamento in esercizi specializzati",
            ],
            [
                "parent_code" => "47.71",
                "code"        => "47.71.1",
                "name"        => "47.71.1 - Commercio al dettaglio di confezioni per adulti",
            ],
            [
                "parent_code" => "47.71.1",
                "code"        => "47.71.10",
                "name"        => "47.71.10 - Commercio al dettaglio di confezioni per adulti",
            ],
            [
                "parent_code" => "47.71",
                "code"        => "47.71.2",
                "name"        => "47.71.2 - Commercio al dettaglio di confezioni per bambini e neonati",
            ],
            [
                "parent_code" => "47.71.2",
                "code"        => "47.71.20",
                "name"        => "47.71.20 - Commercio al dettaglio di confezioni per bambini e neonati",
            ],
            [
                "parent_code" => "47.71",
                "code"        => "47.71.3",
                "name"        => "47.71.3 - Commercio al dettaglio di biancheria personale, maglieria, camicie",
            ],
            [
                "parent_code" => "47.71.3",
                "code"        => "47.71.30",
                "name"        => "47.71.30 - Commercio al dettaglio di biancheria personale, maglieria, camicie",
            ],
            [
                "parent_code" => "47.71",
                "code"        => "47.71.4",
                "name"        => "47.71.4 - Commercio al dettaglio di pellicce e di abbigliamento in pelle",
            ],
            [
                "parent_code" => "47.71.4",
                "code"        => "47.71.40",
                "name"        => "47.71.40 - Commercio al dettaglio di pellicce e di abbigliamento in pelle",
            ],
            [
                "parent_code" => "47.71",
                "code"        => "47.71.5",
                "name"        => "47.71.5 - Commercio al dettaglio di cappelli, ombrelli, guanti e cravatte",
            ],
            [
                "parent_code" => "47.71.5",
                "code"        => "47.71.50",
                "name"        => "47.71.50 - Commercio al dettaglio di cappelli, ombrelli, guanti e cravatte",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.72",
                "name"        => "47.72 - Commercio al dettaglio di calzature e articoli in pelle in esercizi specializzati",
            ],
            [
                "parent_code" => "47.72",
                "code"        => "47.72.1",
                "name"        => "47.72.1 - Commercio al dettaglio di calzature e accessori",
            ],
            [
                "parent_code" => "47.72.1",
                "code"        => "47.72.10",
                "name"        => "47.72.10 - Commercio al dettaglio di calzature e accessori",
            ],
            [
                "parent_code" => "47.72",
                "code"        => "47.72.2",
                "name"        => "47.72.2 - Commercio al dettaglio di articoli di pelletteria e da viaggio",
            ],
            [
                "parent_code" => "47.72.2",
                "code"        => "47.72.20",
                "name"        => "47.72.20 - Commercio al dettaglio di articoli di pelletteria e da viaggio",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.73",
                "name"        => "47.73 - Commercio al dettaglio di medicinali in esercizi specializzati",
            ],
            [
                "parent_code" => "47.73",
                "code"        => "47.73.1",
                "name"        => "47.73.1 - Farmacie",
            ],
            [
                "parent_code" => "47.73.1",
                "code"        => "47.73.10",
                "name"        => "47.73.10 - Farmacie",
            ],
            [
                "parent_code" => "47.73",
                "code"        => "47.73.2",
                "name"        => "47.73.2 - Commercio al dettaglio in altri esercizi specializzati di medicinali non soggetti a prescrizione medica",
            ],
            [
                "parent_code" => "47.73.2",
                "code"        => "47.73.20",
                "name"        => "47.73.20 - Commercio al dettaglio in altri esercizi specializzati di medicinali non soggetti a prescrizione medica",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.74",
                "name"        => "47.74 - Commercio al dettaglio di articoli medicali e ortopedici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.74",
                "code"        => "47.74.0",
                "name"        => "47.74.0 - Commercio al dettaglio di articoli medicali e ortopedici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.74.0",
                "code"        => "47.74.00",
                "name"        => "47.74.00 - Commercio al dettaglio di articoli medicali e ortopedici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.75",
                "name"        => "47.75 - Commercio al dettaglio di cosmetici, di articoli di profumeria e di erboristeria in esercizi specializzati",
            ],
            [
                "parent_code" => "47.75",
                "code"        => "47.75.1",
                "name"        => "47.75.1 - Commercio al dettaglio di articoli di profumeria, prodotti per toletta e per l'igiene personale",
            ],
            [
                "parent_code" => "47.75.1",
                "code"        => "47.75.10",
                "name"        => "47.75.10 - Commercio al dettaglio di articoli di profumeria, prodotti per toletta e per l'igiene personale",
            ],
            [
                "parent_code" => "47.75",
                "code"        => "47.75.2",
                "name"        => "47.75.2 - Erboristerie",
            ],
            [
                "parent_code" => "47.75.2",
                "code"        => "47.75.20",
                "name"        => "47.75.20 - Erboristerie",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.76",
                "name"        => "47.76 - Commercio al dettaglio di fiori, piante, semi, fertilizzanti, animali domestici e alimenti per animali domestici in esercizi specializzati",
            ],
            [
                "parent_code" => "47.76",
                "code"        => "47.76.1",
                "name"        => "47.76.1 - Commercio al dettaglio di fiori e piante",
            ],
            [
                "parent_code" => "47.76.1",
                "code"        => "47.76.10",
                "name"        => "47.76.10 - Commercio al dettaglio di fiori e piante",
            ],
            [
                "parent_code" => "47.76",
                "code"        => "47.76.2",
                "name"        => "47.76.2 - Commercio al dettaglio di piccoli animali domestici",
            ],
            [
                "parent_code" => "47.76.2",
                "code"        => "47.76.20",
                "name"        => "47.76.20 - Commercio al dettaglio di piccoli animali domestici",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.77",
                "name"        => "47.77 - Commercio al dettaglio di orologi e articoli di gioielleria in esercizi specializzati",
            ],
            [
                "parent_code" => "47.77",
                "code"        => "47.77.0",
                "name"        => "47.77.0 - Commercio al dettaglio di orologi, articoli di gioielleria e argenteria",
            ],
            [
                "parent_code" => "47.77.0",
                "code"        => "47.77.00",
                "name"        => "47.77.00 - Commercio al dettaglio di orologi, articoli di gioielleria e argenteria",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.78",
                "name"        => "47.78 - Commercio al dettaglio di altri prodotti (esclusi quelli di seconda mano) in esercizi specializzati",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.1",
                "name"        => "47.78.1 - Commercio al dettaglio di mobili per ufficio",
            ],
            [
                "parent_code" => "47.78.1",
                "code"        => "47.78.10",
                "name"        => "47.78.10 - Commercio al dettaglio di mobili per ufficio",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.2",
                "name"        => "47.78.2 - Commercio al dettaglio di materiale per ottica e fotografia",
            ],
            [
                "parent_code" => "47.78.2",
                "code"        => "47.78.20",
                "name"        => "47.78.20 - Commercio al dettaglio di materiale per ottica e fotografia",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.3",
                "name"        => "47.78.3 - Commercio al dettaglio di oggetti d'arte di culto e di decorazione, chincaglieria e bigiotteria",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.31",
                "name"        => "47.78.31 - Commercio al dettaglio di oggetti d'arte (incluse le gallerie d'arte)",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.32",
                "name"        => "47.78.32 - Commercio al dettaglio di oggetti d'artigianato",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.33",
                "name"        => "47.78.33 - Commercio al dettaglio di arredi sacri ed articoli religiosi",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.34",
                "name"        => "47.78.34 - Commercio al dettaglio di articoli da regalo e per fumatori",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.35",
                "name"        => "47.78.35 - Commercio al dettaglio di bomboniere",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.36",
                "name"        => "47.78.36 - Commercio al dettaglio di chincaglieria e bigiotteria (inclusi gli oggetti ricordo e gli articoli di promozione pubblicitaria)",
            ],
            [
                "parent_code" => "47.78.3",
                "code"        => "47.78.37",
                "name"        => "47.78.37 - Commercio al dettaglio di articoli per le belle arti",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.4",
                "name"        => "47.78.4 - Commercio al dettaglio di combustibile per uso domestico e per riscaldamento",
            ],
            [
                "parent_code" => "47.78.4",
                "code"        => "47.78.40",
                "name"        => "47.78.40 - Commercio al dettaglio di combustibile per uso domestico e per riscaldamento",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.5",
                "name"        => "47.78.5 - Commercio al dettaglio di armi e munizioni, articoli militari",
            ],
            [
                "parent_code" => "47.78.5",
                "code"        => "47.78.50",
                "name"        => "47.78.50 - Commercio al dettaglio di armi e munizioni, articoli militari",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.6",
                "name"        => "47.78.6 - Commercio al dettaglio di saponi, detersivi, prodotti per la lucidatura e affini",
            ],
            [
                "parent_code" => "47.78.6",
                "code"        => "47.78.60",
                "name"        => "47.78.60 - Commercio al dettaglio di saponi, detersivi, prodotti per la lucidatura e affini",
            ],
            [
                "parent_code" => "47.78",
                "code"        => "47.78.9",
                "name"        => "47.78.9 - Commercio al dettaglio di altri prodotti non alimentari",
            ],
            [
                "parent_code" => "47.78.9",
                "code"        => "47.78.91",
                "name"        => "47.78.91 - Commercio al dettaglio di filatelia, numismatica e articoli da collezionismo",
            ],
            [
                "parent_code" => "47.78.9",
                "code"        => "47.78.92",
                "name"        => "47.78.92 - Commercio al dettaglio di spaghi, cordami, tele e sacchi di juta e prodotti per l'imballaggio (esclusi quelli in carta e cartone)",
            ],
            [
                "parent_code" => "47.78.9",
                "code"        => "47.78.93",
                "name"        => "47.78.93 - Commercio al dettaglio di articoli funerari e cimiteriali",
            ],
            [
                "parent_code" => "47.78.9",
                "code"        => "47.78.94",
                "name"        => "47.78.94 - Commercio al dettaglio di articoli per adulti (sexy shop)",
            ],
            [
                "parent_code" => "47.78.9",
                "code"        => "47.78.99",
                "name"        => "47.78.99 - Commercio al dettaglio di altri prodotti non alimentari n.c.a.",
            ],
            [
                "parent_code" => "47.7",
                "code"        => "47.79",
                "name"        => "47.79 - Commercio al dettaglio di articoli di seconda mano in negozi",
            ],
            [
                "parent_code" => "47.79",
                "code"        => "47.79.1",
                "name"        => "47.79.1 - Commercio al dettaglio di libri di seconda mano",
            ],
            [
                "parent_code" => "47.79.1",
                "code"        => "47.79.10",
                "name"        => "47.79.10 - Commercio al dettaglio di libri di seconda mano",
            ],
            [
                "parent_code" => "47.79",
                "code"        => "47.79.2",
                "name"        => "47.79.2 - Commercio al dettaglio di mobili usati e oggetti di antiquariato",
            ],
            [
                "parent_code" => "47.79.2",
                "code"        => "47.79.20",
                "name"        => "47.79.20 - Commercio al dettaglio di mobili usati e oggetti di antiquariato",
            ],
            [
                "parent_code" => "47.79",
                "code"        => "47.79.3",
                "name"        => "47.79.3 - Commercio al dettaglio di indumenti e altri oggetti usati",
            ],
            [
                "parent_code" => "47.79.3",
                "code"        => "47.79.30",
                "name"        => "47.79.30 - Commercio al dettaglio di indumenti e altri oggetti usati",
            ],
            [
                "parent_code" => "47.79",
                "code"        => "47.79.4",
                "name"        => "47.79.4 - Case d'asta al dettaglio (escluse aste via internet)",
            ],
            [
                "parent_code" => "47.79.4",
                "code"        => "47.79.40",
                "name"        => "47.79.40 - Case d'asta al dettaglio (escluse aste via internet)",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.8",
                "name"        => "47.8 - COMMERCIO AL DETTAGLIO AMBULANTE",
            ],
            [
                "parent_code" => "47.8",
                "code"        => "47.81",
                "name"        => "47.81 - Commercio al dettaglio ambulante di prodotti alimentari e bevande",
            ],
            [
                "parent_code" => "47.81",
                "code"        => "47.81.0",
                "name"        => "47.81.0 - Commercio al dettaglio ambulante di prodotti alimentari e bevande",
            ],
            [
                "parent_code" => "47.81.0",
                "code"        => "47.81.01",
                "name"        => "47.81.01 - Commercio al dettaglio ambulante di prodotti ortofrutticoli",
            ],
            [
                "parent_code" => "47.81.0",
                "code"        => "47.81.02",
                "name"        => "47.81.02 - Commercio al dettaglio ambulante di prodotti ittici",
            ],
            [
                "parent_code" => "47.81.0",
                "code"        => "47.81.03",
                "name"        => "47.81.03 - Commercio al dettaglio ambulante di carne",
            ],
            [
                "parent_code" => "47.81.0",
                "code"        => "47.81.09",
                "name"        => "47.81.09 - Commercio al dettaglio ambulante di altri prodotti alimentari e bevande n.c.a.",
            ],
            [
                "parent_code" => "47.8",
                "code"        => "47.82",
                "name"        => "47.82 - Commercio al dettaglio ambulante di prodotti tessili, abbigliamento e calzature",
            ],
            [
                "parent_code" => "47.82",
                "code"        => "47.82.0",
                "name"        => "47.82.0 - Commercio al dettaglio ambulante di prodotti tessili, abbigliamento, calzature e pelletterie",
            ],
            [
                "parent_code" => "47.82.0",
                "code"        => "47.82.01",
                "name"        => "47.82.01 - Commercio al dettaglio ambulante di tessuti, articoli tessili per la casa, articoli di abbigliamento",
            ],
            [
                "parent_code" => "47.82.0",
                "code"        => "47.82.02",
                "name"        => "47.82.02 - Commercio al dettaglio ambulante di calzature e pelletterie",
            ],
            [
                "parent_code" => "47.8",
                "code"        => "47.89",
                "name"        => "47.89 - Commercio al dettaglio ambulante di altri prodotti",
            ],
            [
                "parent_code" => "47.89",
                "code"        => "47.89.0",
                "name"        => "47.89.0 - Commercio al dettaglio ambulante di altri prodotti",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.01",
                "name"        => "47.89.01 - Commercio al dettaglio ambulante di fiori, piante, bulbi, semi e fertilizzanti",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.02",
                "name"        => "47.89.02 - Commercio al dettaglio ambulante di macchine, attrezzature e prodotti per l'agricoltura; attrezzature per il giardinaggio",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.03",
                "name"        => "47.89.03 - Commercio al dettaglio ambulante di profumi e cosmetici; saponi, detersivi ed altri detergenti per qualsiasi uso",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.04",
                "name"        => "47.89.04 - Commercio al dettaglio ambulante di chincaglieria e bigiotteria",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.05",
                "name"        => "47.89.05 - Commercio al dettaglio ambulante di arredamenti per giardino; mobili; tappeti e stuoie; articoli casalinghi; elettrodomestici; materiale elettrico",
            ],
            [
                "parent_code" => "47.89.0",
                "code"        => "47.89.09",
                "name"        => "47.89.09 - Commercio al dettaglio ambulante di altri prodotti n.c.a.",
            ],
            [
                "parent_code" => "47",
                "code"        => "47.9",
                "name"        => "47.9 - COMMERCIO AL DETTAGLIO AL DI FUORI DI NEGOZI, BANCHI E MERCATI",
            ],
            [
                "parent_code" => "47.9",
                "code"        => "47.91",
                "name"        => "47.91 - Commercio al dettaglio per corrispondenza o attraverso internet",
            ],
            [
                "parent_code" => "47.91",
                "code"        => "47.91.1",
                "name"        => "47.91.1 - Commercio al dettaglio di qualsiasi tipo di prodotto effettuato via internet",
            ],
            [
                "parent_code" => "47.91.1",
                "code"        => "47.91.10",
                "name"        => "47.91.10 - Commercio al dettaglio di qualsiasi tipo di prodotto effettuato via internet",
            ],
            [
                "parent_code" => "47.91",
                "code"        => "47.91.2",
                "name"        => "47.91.2 - Commercio al dettaglio di qualsiasi tipo di prodotto effettuato per televisione",
            ],
            [
                "parent_code" => "47.91.2",
                "code"        => "47.91.20",
                "name"        => "47.91.20 - Commercio al dettaglio di qualsiasi tipo di prodotto effettuato per televisione",
            ],
            [
                "parent_code" => "47.91",
                "code"        => "47.91.3",
                "name"        => "47.91.3 - Commercio al dettaglio di qualsiasi tipo di prodotto per corrispondenza, radio, telefono",
            ],
            [
                "parent_code" => "47.91.3",
                "code"        => "47.91.30",
                "name"        => "47.91.30 - Commercio al dettaglio di qualsiasi tipo di prodotto per corrispondenza, radio, telefono",
            ],
            [
                "parent_code" => "47.9",
                "code"        => "47.99",
                "name"        => "47.99 - Altro commercio al dettaglio al di fuori di negozi, banchi o mercati",
            ],
            [
                "parent_code" => "47.99",
                "code"        => "47.99.1",
                "name"        => "47.99.1 - Commercio al dettaglio di prodotti vari, mediante l'intervento di un dimostratore o di un incaricato alla vendita (porta a porta)",
            ],
            [
                "parent_code" => "47.99.1",
                "code"        => "47.99.10",
                "name"        => "47.99.10 - Commercio al dettaglio di prodotti vari, mediante l'intervento di un dimostratore o di un incaricato alla vendita (porta a porta)",
            ],
            [
                "parent_code" => "47.99",
                "code"        => "47.99.2",
                "name"        => "47.99.2 - Commercio effettuato per mezzo di distributori automatici",
            ],
            [
                "parent_code" => "47.99.2",
                "code"        => "47.99.20",
                "name"        => "47.99.20 - Commercio effettuato per mezzo di distributori automatici",
            ],
            [
                "parent_code" => null,
                "code"        => "H",
                "name"        => "H - TRASPORTO E MAGAZZINAGGIO",
            ],
            [
                "parent_code" => "H",
                "code"        => "49",
                "name"        => "49 - TRASPORTO TERRESTRE E TRASPORTO MEDIANTE CONDOTTE",
            ],
            [
                "parent_code" => "49",
                "code"        => "49.1",
                "name"        => "49.1 - TRASPORTO FERROVIARIO DI PASSEGGERI (INTERURBANO)",
            ],
            [
                "parent_code" => "49.1",
                "code"        => "49.10",
                "name"        => "49.10 - Trasporto ferroviario di passeggeri (interurbano)",
            ],
            [
                "parent_code" => "49.10",
                "code"        => "49.10.0",
                "name"        => "49.10.0 - Trasporto ferroviario di passeggeri (interurbano)",
            ],
            [
                "parent_code" => "49.10.0",
                "code"        => "49.10.00",
                "name"        => "49.10.00 - Trasporto ferroviario di passeggeri (interurbano)",
            ],
            [
                "parent_code" => "49",
                "code"        => "49.2",
                "name"        => "49.2 - TRASPORTO FERROVIARIO DI MERCI",
            ],
            [
                "parent_code" => "49.2",
                "code"        => "49.20",
                "name"        => "49.20 - Trasporto ferroviario di merci",
            ],
            [
                "parent_code" => "49.20",
                "code"        => "49.20.0",
                "name"        => "49.20.0 - Trasporto ferroviario di merci",
            ],
            [
                "parent_code" => "49.20.0",
                "code"        => "49.20.00",
                "name"        => "49.20.00 - Trasporto ferroviario di merci",
            ],
            [
                "parent_code" => "49",
                "code"        => "49.3",
                "name"        => "49.3 - ALTRI TRASPORTI TERRESTRI DI PASSEGGERI",
            ],
            [
                "parent_code" => "49.3",
                "code"        => "49.31",
                "name"        => "49.31 - Trasporto terrestre di passeggeri in aree urbane e suburbane",
            ],
            [
                "parent_code" => "49.31",
                "code"        => "49.31.0",
                "name"        => "49.31.0 - Trasporto terrestre di passeggeri in aree urbane e suburbane",
            ],
            [
                "parent_code" => "49.31.0",
                "code"        => "49.31.00",
                "name"        => "49.31.00 - Trasporto terrestre di passeggeri in aree urbane e suburbane",
            ],
            [
                "parent_code" => "49.3",
                "code"        => "49.32",
                "name"        => "49.32 - Trasporto con taxi, noleggio di autovetture con conducente",
            ],
            [
                "parent_code" => "49.32",
                "code"        => "49.32.1",
                "name"        => "49.32.1 - Trasporto con taxi",
            ],
            [
                "parent_code" => "49.32.1",
                "code"        => "49.32.10",
                "name"        => "49.32.10 - Trasporto con taxi",
            ],
            [
                "parent_code" => "49.32",
                "code"        => "49.32.2",
                "name"        => "49.32.2 - Trasporto mediante noleggio di autovetture da rimessa con conducente",
            ],
            [
                "parent_code" => "49.32.2",
                "code"        => "49.32.20",
                "name"        => "49.32.20 - Trasporto mediante noleggio di autovetture da rimessa con conducente",
            ],
            [
                "parent_code" => "49.3",
                "code"        => "49.39",
                "name"        => "49.39 - Altri trasporti terrestri di passeggeri n.c.a.",
            ],
            [
                "parent_code" => "49.39",
                "code"        => "49.39.0",
                "name"        => "49.39.0 - Altri trasporti terrestri di passeggeri n.c.a.",
            ],
            [
                "parent_code" => "49.39.0",
                "code"        => "49.39.01",
                "name"        => "49.39.01 - Gestioni di funicolari, ski-lift e seggiovie se non facenti parte dei sistemi di transito urbano o suburbano",
            ],
            [
                "parent_code" => "49.39.0",
                "code"        => "49.39.09",
                "name"        => "49.39.09 - Altre attività di trasporti terrestri di passeggeri n.c.a.",
            ],
            [
                "parent_code" => "49",
                "code"        => "49.4",
                "name"        => "49.4 - TRASPORTO DI MERCI SU STRADA E SERVIZI DI TRASLOCO",
            ],
            [
                "parent_code" => "49.4",
                "code"        => "49.41",
                "name"        => "49.41 - Trasporto di merci su strada",
            ],
            [
                "parent_code" => "49.41",
                "code"        => "49.41.0",
                "name"        => "49.41.0 - Trasporto di merci su strada",
            ],
            [
                "parent_code" => "49.41.0",
                "code"        => "49.41.00",
                "name"        => "49.41.00 - Trasporto di merci su strada",
            ],
            [
                "parent_code" => "49.4",
                "code"        => "49.42",
                "name"        => "49.42 - Servizi di trasloco",
            ],
            [
                "parent_code" => "49.42",
                "code"        => "49.42.0",
                "name"        => "49.42.0 - Servizi di trasloco",
            ],
            [
                "parent_code" => "49.42.0",
                "code"        => "49.42.00",
                "name"        => "49.42.00 - Servizi di trasloco",
            ],
            [
                "parent_code" => "49",
                "code"        => "49.5",
                "name"        => "49.5 - TRASPORTO MEDIANTE CONDOTTE",
            ],
            [
                "parent_code" => "49.5",
                "code"        => "49.50",
                "name"        => "49.50 - Trasporto mediante condotte",
            ],
            [
                "parent_code" => "49.50",
                "code"        => "49.50.1",
                "name"        => "49.50.1 - Trasporto mediante condotte di gas",
            ],
            [
                "parent_code" => "49.50.1",
                "code"        => "49.50.10",
                "name"        => "49.50.10 - Trasporto mediante condotte di gas",
            ],
            [
                "parent_code" => "49.50",
                "code"        => "49.50.2",
                "name"        => "49.50.2 - Trasporto mediante condotte di liquidi",
            ],
            [
                "parent_code" => "49.50.2",
                "code"        => "49.50.20",
                "name"        => "49.50.20 - Trasporto mediante condotte di liquidi",
            ],
            [
                "parent_code" => "H",
                "code"        => "50",
                "name"        => "50 - TRASPORTO MARITTIMO E PER VIE D'ACQUA",
            ],
            [
                "parent_code" => "50",
                "code"        => "50.1",
                "name"        => "50.1 - TRASPORTO MARITTIMO E COSTIERO DI PASSEGGERI",
            ],
            [
                "parent_code" => "50.1",
                "code"        => "50.10",
                "name"        => "50.10 - Trasporto marittimo e costiero di passeggeri",
            ],
            [
                "parent_code" => "50.10",
                "code"        => "50.10.0",
                "name"        => "50.10.0 - Trasporto marittimo e costiero di passeggeri",
            ],
            [
                "parent_code" => "50.10.0",
                "code"        => "50.10.00",
                "name"        => "50.10.00 - Trasporto marittimo e costiero di passeggeri",
            ],
            [
                "parent_code" => "50",
                "code"        => "50.2",
                "name"        => "50.2 - TRASPORTO MARITTIMO E COSTIERO DI MERCI",
            ],
            [
                "parent_code" => "50.2",
                "code"        => "50.20",
                "name"        => "50.20 - Trasporto marittimo e costiero di merci",
            ],
            [
                "parent_code" => "50.20",
                "code"        => "50.20.0",
                "name"        => "50.20.0 - Trasporto marittimo e costiero di merci",
            ],
            [
                "parent_code" => "50.20.0",
                "code"        => "50.20.00",
                "name"        => "50.20.00 - Trasporto marittimo e costiero di merci",
            ],
            [
                "parent_code" => "50",
                "code"        => "50.3",
                "name"        => "50.3 - TRASPORTO DI PASSEGGERI PER VIE D'ACQUA INTERNE",
            ],
            [
                "parent_code" => "50.3",
                "code"        => "50.30",
                "name"        => "50.30 - Trasporto di passeggeri per vie d'acqua interne",
            ],
            [
                "parent_code" => "50.30",
                "code"        => "50.30.0",
                "name"        => "50.30.0 - Trasporto di passeggeri per vie d'acqua interne (inclusi i trasporti lagunari)",
            ],
            [
                "parent_code" => "50.30.0",
                "code"        => "50.30.00",
                "name"        => "50.30.00 - Trasporto di passeggeri per vie d'acqua interne (inclusi i trasporti lagunari)",
            ],
            [
                "parent_code" => "50",
                "code"        => "50.4",
                "name"        => "50.4 - TRASPORTO DI MERCI PER VIE D'ACQUA INTERNE",
            ],
            [
                "parent_code" => "50.4",
                "code"        => "50.40",
                "name"        => "50.40 - Trasporto di merci per vie d'acqua interne",
            ],
            [
                "parent_code" => "50.40",
                "code"        => "50.40.0",
                "name"        => "50.40.0 - Trasporto di merci per vie d'acqua interne",
            ],
            [
                "parent_code" => "50.40.0",
                "code"        => "50.40.00",
                "name"        => "50.40.00 - Trasporto di merci per vie d'acqua interne",
            ],
            [
                "parent_code" => "H",
                "code"        => "51",
                "name"        => "51 - TRASPORTO AEREO",
            ],
            [
                "parent_code" => "51",
                "code"        => "51.1",
                "name"        => "51.1 - TRASPORTO AEREO DI PASSEGGERI",
            ],
            [
                "parent_code" => "51.1",
                "code"        => "51.10",
                "name"        => "51.10 - Trasporto aereo di passeggeri",
            ],
            [
                "parent_code" => "51.10",
                "code"        => "51.10.1",
                "name"        => "51.10.1 - Trasporto aereo di linea di passeggeri",
            ],
            [
                "parent_code" => "51.10.1",
                "code"        => "51.10.10",
                "name"        => "51.10.10 - Trasporto aereo di linea di passeggeri",
            ],
            [
                "parent_code" => "51.10",
                "code"        => "51.10.2",
                "name"        => "51.10.2 - Trasporto aereo non di linea di passeggeri; voli charter",
            ],
            [
                "parent_code" => "51.10.2",
                "code"        => "51.10.20",
                "name"        => "51.10.20 - Trasporto aereo non di linea di passeggeri; voli charter",
            ],
            [
                "parent_code" => "51",
                "code"        => "51.2",
                "name"        => "51.2 - TRASPORTO AEREO DI MERCI E TRASPORTO SPAZIALE",
            ],
            [
                "parent_code" => "51.2",
                "code"        => "51.21",
                "name"        => "51.21 - Trasporto aereo di merci",
            ],
            [
                "parent_code" => "51.21",
                "code"        => "51.21.0",
                "name"        => "51.21.0 - Trasporto aereo di merci",
            ],
            [
                "parent_code" => "51.21.0",
                "code"        => "51.21.00",
                "name"        => "51.21.00 - Trasporto aereo di merci",
            ],
            [
                "parent_code" => "51.2",
                "code"        => "51.22",
                "name"        => "51.22 - Trasporto spaziale",
            ],
            [
                "parent_code" => "51.22",
                "code"        => "51.22.0",
                "name"        => "51.22.0 - Trasporto spaziale",
            ],
            [
                "parent_code" => "51.22.0",
                "code"        => "51.22.00",
                "name"        => "51.22.00 - Trasporto spaziale",
            ],
            [
                "parent_code" => "H",
                "code"        => "52",
                "name"        => "52 - MAGAZZINAGGIO E ATTIVITÀ DI SUPPORTO AI TRASPORTI",
            ],
            [
                "parent_code" => "52",
                "code"        => "52.1",
                "name"        => "52.1 - MAGAZZINAGGIO E CUSTODIA",
            ],
            [
                "parent_code" => "52.1",
                "code"        => "52.10",
                "name"        => "52.10 - Magazzinaggio e custodia",
            ],
            [
                "parent_code" => "52.10",
                "code"        => "52.10.1",
                "name"        => "52.10.1 - Magazzini di custodia e deposito per conto terzi",
            ],
            [
                "parent_code" => "52.10.1",
                "code"        => "52.10.10",
                "name"        => "52.10.10 - Magazzini di custodia e deposito per conto terzi",
            ],
            [
                "parent_code" => "52.10",
                "code"        => "52.10.2",
                "name"        => "52.10.2 - Magazzini frigoriferi per conto terzi",
            ],
            [
                "parent_code" => "52.10.2",
                "code"        => "52.10.20",
                "name"        => "52.10.20 - Magazzini frigoriferi per conto terzi",
            ],
            [
                "parent_code" => "52",
                "code"        => "52.2",
                "name"        => "52.2 - ATTIVITÀ DI SUPPORTO AI TRASPORTI",
            ],
            [
                "parent_code" => "52.2",
                "code"        => "52.21",
                "name"        => "52.21 - Attività dei servizi connessi ai trasporti terrestri",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.1",
                "name"        => "52.21.1 - Gestione di infrastrutture ferroviarie",
            ],
            [
                "parent_code" => "52.21.1",
                "code"        => "52.21.10",
                "name"        => "52.21.10 - Gestione di infrastrutture ferroviarie",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.2",
                "name"        => "52.21.2 - Gestione di strade, ponti, gallerie",
            ],
            [
                "parent_code" => "52.21.2",
                "code"        => "52.21.20",
                "name"        => "52.21.20 - Gestione di strade, ponti, gallerie",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.3",
                "name"        => "52.21.3 - Gestione di stazioni per autobus",
            ],
            [
                "parent_code" => "52.21.3",
                "code"        => "52.21.30",
                "name"        => "52.21.30 - Gestione di stazioni per autobus",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.4",
                "name"        => "52.21.4 - Gestione di centri di movimentazione merci (interporti)",
            ],
            [
                "parent_code" => "52.21.4",
                "code"        => "52.21.40",
                "name"        => "52.21.40 - Gestione di centri di movimentazione merci (interporti)",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.5",
                "name"        => "52.21.5 - Gestione di parcheggi e autorimesse",
            ],
            [
                "parent_code" => "52.21.5",
                "code"        => "52.21.50",
                "name"        => "52.21.50 - Gestione di parcheggi e autorimesse",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.6",
                "name"        => "52.21.6 - Attività di traino e soccorso stradale",
            ],
            [
                "parent_code" => "52.21.6",
                "code"        => "52.21.60",
                "name"        => "52.21.60 - Attività di traino e soccorso stradale",
            ],
            [
                "parent_code" => "52.21",
                "code"        => "52.21.9",
                "name"        => "52.21.9 - Altre attività connesse ai trasporti terrestri n.c.a.",
            ],
            [
                "parent_code" => "52.21.9",
                "code"        => "52.21.90",
                "name"        => "52.21.90 - Altre attività connesse ai trasporti terrestri n.c.a.",
            ],
            [
                "parent_code" => "52.2",
                "code"        => "52.22",
                "name"        => "52.22 - Attività dei servizi connessi al trasporto marittimo e per vie d'acqua",
            ],
            [
                "parent_code" => "52.22",
                "code"        => "52.22.0",
                "name"        => "52.22.0 - Attività dei servizi connessi al trasporto marittimo e per vie d'acqua",
            ],
            [
                "parent_code" => "52.22.0",
                "code"        => "52.22.01",
                "name"        => "52.22.01 - Liquefazione e rigassificazione di gas a scopo di trasporto marittimo e per vie d'acqua effettuata al di fuori del sito di estrazione",
            ],
            [
                "parent_code" => "52.22.0",
                "code"        => "52.22.09",
                "name"        => "52.22.09 - Altre attività dei servizi connessi al trasporto marittimo e per vie d'acqua",
            ],
            [
                "parent_code" => "52.2",
                "code"        => "52.23",
                "name"        => "52.23 - Attività dei servizi connessi al trasporto aereo",
            ],
            [
                "parent_code" => "52.23",
                "code"        => "52.23.0",
                "name"        => "52.23.0 - Attività dei servizi connessi al trasporto aereo",
            ],
            [
                "parent_code" => "52.23.0",
                "code"        => "52.23.00",
                "name"        => "52.23.00 - Attività dei servizi connessi al trasporto aereo",
            ],
            [
                "parent_code" => "52.2",
                "code"        => "52.24",
                "name"        => "52.24 - Movimentazione merci",
            ],
            [
                "parent_code" => "52.24",
                "code"        => "52.24.1",
                "name"        => "52.24.1 - Movimento merci relativo a trasporti aerei",
            ],
            [
                "parent_code" => "52.24.1",
                "code"        => "52.24.10",
                "name"        => "52.24.10 - Movimento merci relativo a trasporti aerei",
            ],
            [
                "parent_code" => "52.24",
                "code"        => "52.24.2",
                "name"        => "52.24.2 - Movimento merci relativo a trasporti marittimi e fluviali",
            ],
            [
                "parent_code" => "52.24.2",
                "code"        => "52.24.20",
                "name"        => "52.24.20 - Movimento merci relativo a trasporti marittimi e fluviali",
            ],
            [
                "parent_code" => "52.24",
                "code"        => "52.24.3",
                "name"        => "52.24.3 - Movimento merci relativo a trasporti ferroviari",
            ],
            [
                "parent_code" => "52.24.3",
                "code"        => "52.24.30",
                "name"        => "52.24.30 - Movimento merci relativo a trasporti ferroviari",
            ],
            [
                "parent_code" => "52.24",
                "code"        => "52.24.4",
                "name"        => "52.24.4 - Movimento merci relativo ad altri trasporti terrestri",
            ],
            [
                "parent_code" => "52.24.4",
                "code"        => "52.24.40",
                "name"        => "52.24.40 - Movimento merci relativo ad altri trasporti terrestri",
            ],
            [
                "parent_code" => "52.2",
                "code"        => "52.29",
                "name"        => "52.29 - Altre attività di supporto connesse ai trasporti",
            ],
            [
                "parent_code" => "52.29",
                "code"        => "52.29.1",
                "name"        => "52.29.1 - Spedizionieri e agenzie di operazioni doganali",
            ],
            [
                "parent_code" => "52.29.1",
                "code"        => "52.29.10",
                "name"        => "52.29.10 - Spedizionieri e agenzie di operazioni doganali",
            ],
            [
                "parent_code" => "52.29",
                "code"        => "52.29.2",
                "name"        => "52.29.2 - Intermediari dei trasporti, servizi logistici",
            ],
            [
                "parent_code" => "52.29.2",
                "code"        => "52.29.21",
                "name"        => "52.29.21 - Intermediari dei trasporti",
            ],
            [
                "parent_code" => "52.29.2",
                "code"        => "52.29.22",
                "name"        => "52.29.22 - Servizi logistici relativi alla distribuzione delle merci",
            ],
            [
                "parent_code" => "H",
                "code"        => "53",
                "name"        => "53 - SERVIZI POSTALI E ATTIVITÀ DI CORRIERE",
            ],
            [
                "parent_code" => "53",
                "code"        => "53.1",
                "name"        => "53.1 - ATTIVITÀ POSTALI CON OBBLIGO DI SERVIZIO UNIVERSALE",
            ],
            [
                "parent_code" => "53.1",
                "code"        => "53.10",
                "name"        => "53.10 - Attività postali con obbligo di servizio universale",
            ],
            [
                "parent_code" => "53.10",
                "code"        => "53.10.0",
                "name"        => "53.10.0 - Attività postali con obbligo di servizio universale",
            ],
            [
                "parent_code" => "53.10.0",
                "code"        => "53.10.00",
                "name"        => "53.10.00 - Attività postali con obbligo di servizio universale",
            ],
            [
                "parent_code" => "53",
                "code"        => "53.2",
                "name"        => "53.2 - ALTRE ATTIVITÀ POSTALI E DI CORRIERE",
            ],
            [
                "parent_code" => "53.2",
                "code"        => "53.20",
                "name"        => "53.20 - Altre attività postali e di corriere senza obbligo di servizio universale",
            ],
            [
                "parent_code" => "53.20",
                "code"        => "53.20.0",
                "name"        => "53.20.0 - Altre attività postali e di corriere senza obbligo di servizio universale",
            ],
            [
                "parent_code" => "53.20.0",
                "code"        => "53.20.00",
                "name"        => "53.20.00 - Altre attività postali e di corriere senza obbligo di servizio universale",
            ],
            [
                "parent_code" => null,
                "code"        => "I",
                "name"        => "I - ATTIVITÀ DEI SERVIZI DI ALLOGGIO E DI RISTORAZIONE",
            ],
            [
                "parent_code" => "I",
                "code"        => "55",
                "name"        => "55 - ALLOGGIO",
            ],
            [
                "parent_code" => "55",
                "code"        => "55.1",
                "name"        => "55.1 - ALBERGHI E STRUTTURE SIMILI",
            ],
            [
                "parent_code" => "55.1",
                "code"        => "55.10",
                "name"        => "55.10 - Alberghi e strutture simili",
            ],
            [
                "parent_code" => "55.10",
                "code"        => "55.10.0",
                "name"        => "55.10.0 - Alberghi",
            ],
            [
                "parent_code" => "55.10.0",
                "code"        => "55.10.00",
                "name"        => "55.10.00 - Alberghi",
            ],
            [
                "parent_code" => "55",
                "code"        => "55.2",
                "name"        => "55.2 - ALLOGGI PER VACANZE E ALTRE STRUTTURE PER BREVI SOGGIORNI",
            ],
            [
                "parent_code" => "55.2",
                "code"        => "55.20",
                "name"        => "55.20 - Alloggi per vacanze e altre strutture per brevi soggiorni",
            ],
            [
                "parent_code" => "55.20",
                "code"        => "55.20.1",
                "name"        => "55.20.1 - Villaggi turistici",
            ],
            [
                "parent_code" => "55.20.1",
                "code"        => "55.20.10",
                "name"        => "55.20.10 - Villaggi turistici",
            ],
            [
                "parent_code" => "55.20",
                "code"        => "55.20.2",
                "name"        => "55.20.2 - Ostelli della gioventù",
            ],
            [
                "parent_code" => "55.20.2",
                "code"        => "55.20.20",
                "name"        => "55.20.20 - Ostelli della gioventù",
            ],
            [
                "parent_code" => "55.20",
                "code"        => "55.20.3",
                "name"        => "55.20.3 - Rifugi di montagna",
            ],
            [
                "parent_code" => "55.20.3",
                "code"        => "55.20.30",
                "name"        => "55.20.30 - Rifugi di montagna",
            ],
            [
                "parent_code" => "55.20",
                "code"        => "55.20.4",
                "name"        => "55.20.4 - Colonie marine e montane",
            ],
            [
                "parent_code" => "55.20.4",
                "code"        => "55.20.40",
                "name"        => "55.20.40 - Colonie marine e montane",
            ],
            [
                "parent_code" => "55.20",
                "code"        => "55.20.5",
                "name"        => "55.20.5 - Affittacamere per brevi soggiorni, case ed appartamenti per vacanze, bed and breakfast, residence, alloggio connesso alle aziende agricole ed ittiche",
            ],
            [
                "parent_code" => "55.20.5",
                "code"        => "55.20.51",
                "name"        => "55.20.51 - Affittacamere per brevi soggiorni, case ed appartamenti per vacanze, bed and breakfast, residence",
            ],
            [
                "parent_code" => "55.20.5",
                "code"        => "55.20.52",
                "name"        => "55.20.52 - Attività di alloggio connesse alle aziende agricole",
            ],
            [
                "parent_code" => "55.20.5",
                "code"        => "55.20.53",
                "name"        => "55.20.53 - Attività di alloggio connesse alle aziende ittiche",
            ],
            [
                "parent_code" => "55",
                "code"        => "55.3",
                "name"        => "55.3 - AREE DI CAMPEGGIO E AREE ATTREZZATE PER CAMPER E ROULOTTE",
            ],
            [
                "parent_code" => "55.3",
                "code"        => "55.30",
                "name"        => "55.30 - Aree di campeggio e aree attrezzate per camper e roulotte",
            ],
            [
                "parent_code" => "55.30",
                "code"        => "55.30.0",
                "name"        => "55.30.0 - Aree di campeggio e aree attrezzate per camper e roulotte",
            ],
            [
                "parent_code" => "55.30.0",
                "code"        => "55.30.00",
                "name"        => "55.30.00 - Aree di campeggio e aree attrezzate per camper e roulotte",
            ],
            [
                "parent_code" => "55",
                "code"        => "55.9",
                "name"        => "55.9 - ALTRI ALLOGGI",
            ],
            [
                "parent_code" => "55.9",
                "code"        => "55.90",
                "name"        => "55.90 - Altri alloggi",
            ],
            [
                "parent_code" => "55.90",
                "code"        => "55.90.1",
                "name"        => "55.90.1 - Gestione di vagoni letto",
            ],
            [
                "parent_code" => "55.90.1",
                "code"        => "55.90.10",
                "name"        => "55.90.10 - Gestione di vagoni letto",
            ],
            [
                "parent_code" => "55.90",
                "code"        => "55.90.2",
                "name"        => "55.90.2 - Alloggi per studenti e lavoratori con servizi accessori di tipo alberghiero",
            ],
            [
                "parent_code" => "55.90.2",
                "code"        => "55.90.20",
                "name"        => "55.90.20 - Alloggi per studenti e lavoratori con servizi accessori di tipo alberghiero",
            ],
            [
                "parent_code" => "I",
                "code"        => "56",
                "name"        => "56 - ATTIVITÀ DEI SERVIZI DI RISTORAZIONE",
            ],
            [
                "parent_code" => "56",
                "code"        => "56.1",
                "name"        => "56.1 - RISTORANTI E ATTIVITÀ DI RISTORAZIONE MOBILE",
            ],
            [
                "parent_code" => "56.1",
                "code"        => "56.10",
                "name"        => "56.10 - Ristoranti e attività di ristorazione mobile",
            ],
            [
                "parent_code" => "56.10",
                "code"        => "56.10.1",
                "name"        => "56.10.1 - Ristorazione con somministrazione; ristorazione connessa alle aziende agricole ed ittiche",
            ],
            [
                "parent_code" => "56.10.1",
                "code"        => "56.10.11",
                "name"        => "56.10.11 - Ristorazione con somministrazione",
            ],
            [
                "parent_code" => "56.10.1",
                "code"        => "56.10.12",
                "name"        => "56.10.12 - Attività di ristorazione connesse alle aziende agricole",
            ],
            [
                "parent_code" => "56.10.1",
                "code"        => "56.10.13",
                "name"        => "56.10.13 - Attività di ristorazione connesse alle aziende ittiche",
            ],
            [
                "parent_code" => "56.10",
                "code"        => "56.10.2",
                "name"        => "56.10.2 - Ristorazione senza somministrazione con preparazione di cibi da asporto",
            ],
            [
                "parent_code" => "56.10.2",
                "code"        => "56.10.20",
                "name"        => "56.10.20 - Ristorazione senza somministrazione con preparazione di cibi da asporto",
            ],
            [
                "parent_code" => "56.10",
                "code"        => "56.10.3",
                "name"        => "56.10.3 - Gelaterie e pasticcerie",
            ],
            [
                "parent_code" => "56.10.3",
                "code"        => "56.10.30",
                "name"        => "56.10.30 - Gelaterie e pasticcerie",
            ],
            [
                "parent_code" => "56.10",
                "code"        => "56.10.4",
                "name"        => "56.10.4 - Ristorazione ambulante e gelaterie ambulanti",
            ],
            [
                "parent_code" => "56.10.4",
                "code"        => "56.10.41",
                "name"        => "56.10.41 - Gelaterie e pasticcerie ambulanti",
            ],
            [
                "parent_code" => "56.10.4",
                "code"        => "56.10.42",
                "name"        => "56.10.42 - Ristorazione ambulante",
            ],
            [
                "parent_code" => "56.10",
                "code"        => "56.10.5",
                "name"        => "56.10.5 - Ristorazione su treni e navi",
            ],
            [
                "parent_code" => "56.10.5",
                "code"        => "56.10.50",
                "name"        => "56.10.50 - Ristorazione su treni e navi",
            ],
            [
                "parent_code" => "56",
                "code"        => "56.2",
                "name"        => "56.2 - FORNITURA DI PASTI PREPARATI (CATERING) E ALTRI SERVIZI DI RISTORAZIONE",
            ],
            [
                "parent_code" => "56.2",
                "code"        => "56.21",
                "name"        => "56.21 - Fornitura di pasti preparati (catering per eventi)",
            ],
            [
                "parent_code" => "56.21",
                "code"        => "56.21.0",
                "name"        => "56.21.0 - Catering per eventi, banqueting",
            ],
            [
                "parent_code" => "56.21.0",
                "code"        => "56.21.00",
                "name"        => "56.21.00 - Catering per eventi, banqueting",
            ],
            [
                "parent_code" => "56.2",
                "code"        => "56.29",
                "name"        => "56.29 - Mense e catering continuativo su base contrattuale",
            ],
            [
                "parent_code" => "56.29",
                "code"        => "56.29.1",
                "name"        => "56.29.1 - Mense",
            ],
            [
                "parent_code" => "56.29.1",
                "code"        => "56.29.10",
                "name"        => "56.29.10 - Mense",
            ],
            [
                "parent_code" => "56.29",
                "code"        => "56.29.2",
                "name"        => "56.29.2 - Catering continuativo su base contrattuale",
            ],
            [
                "parent_code" => "56.29.2",
                "code"        => "56.29.20",
                "name"        => "56.29.20 - Catering continuativo su base contrattuale",
            ],
            [
                "parent_code" => "56",
                "code"        => "56.3",
                "name"        => "56.3 - BAR E ALTRI ESERCIZI SIMILI SENZA CUCINA",
            ],
            [
                "parent_code" => "56.3",
                "code"        => "56.30",
                "name"        => "56.30 - Bar e altri esercizi simili senza cucina",
            ],
            [
                "parent_code" => "56.30",
                "code"        => "56.30.0",
                "name"        => "56.30.0 - Bar e altri esercizi simili senza cucina",
            ],
            [
                "parent_code" => "56.30.0",
                "code"        => "56.30.00",
                "name"        => "56.30.00 - Bar e altri esercizi simili senza cucina",
            ],
            [
                "parent_code" => null,
                "code"        => "J",
                "name"        => "J - SERVIZI DI INFORMAZIONE E COMUNICAZIONE",
            ],
            [
                "parent_code" => "J",
                "code"        => "58",
                "name"        => "58 - ATTIVITÀ EDITORIALI",
            ],
            [
                "parent_code" => "58",
                "code"        => "58.1",
                "name"        => "58.1 - EDIZIONE DI LIBRI, PERIODICI ED ALTRE ATTIVITÀ EDITORIALI",
            ],
            [
                "parent_code" => "58.1",
                "code"        => "58.11",
                "name"        => "58.11 - Edizione di libri",
            ],
            [
                "parent_code" => "58.11",
                "code"        => "58.11.0",
                "name"        => "58.11.0 - Edizione di libri",
            ],
            [
                "parent_code" => "58.11.0",
                "code"        => "58.11.00",
                "name"        => "58.11.00 - Edizione di libri",
            ],
            [
                "parent_code" => "58.1",
                "code"        => "58.12",
                "name"        => "58.12 - Pubblicazione di elenchi e mailing list",
            ],
            [
                "parent_code" => "58.12",
                "code"        => "58.12.0",
                "name"        => "58.12.0 - Pubblicazione di elenchi e mailing list",
            ],
            [
                "parent_code" => "58.12.0",
                "code"        => "58.12.01",
                "name"        => "58.12.01 - Pubblicazione di elenchi",
            ],
            [
                "parent_code" => "58.12.0",
                "code"        => "58.12.02",
                "name"        => "58.12.02 - Pubblicazione di mailing list",
            ],
            [
                "parent_code" => "58.1",
                "code"        => "58.13",
                "name"        => "58.13 - Edizione di quotidiani",
            ],
            [
                "parent_code" => "58.13",
                "code"        => "58.13.0",
                "name"        => "58.13.0 - Edizione di quotidiani",
            ],
            [
                "parent_code" => "58.13.0",
                "code"        => "58.13.00",
                "name"        => "58.13.00 - Edizione di quotidiani",
            ],
            [
                "parent_code" => "58.1",
                "code"        => "58.14",
                "name"        => "58.14 - Edizione di riviste e periodici",
            ],
            [
                "parent_code" => "58.14",
                "code"        => "58.14.0",
                "name"        => "58.14.0 - Edizione di riviste e periodici",
            ],
            [
                "parent_code" => "58.14.0",
                "code"        => "58.14.00",
                "name"        => "58.14.00 - Edizione di riviste e periodici",
            ],
            [
                "parent_code" => "58.1",
                "code"        => "58.19",
                "name"        => "58.19 - Altre attività editoriali",
            ],
            [
                "parent_code" => "58.19",
                "code"        => "58.19.0",
                "name"        => "58.19.0 - Altre attività editoriali",
            ],
            [
                "parent_code" => "58.19.0",
                "code"        => "58.19.00",
                "name"        => "58.19.00 - Altre attività editoriali",
            ],
            [
                "parent_code" => "58",
                "code"        => "58.2",
                "name"        => "58.2 - EDIZIONE DI SOFTWARE",
            ],
            [
                "parent_code" => "58.2",
                "code"        => "58.21",
                "name"        => "58.21 - Edizione di giochi per computer",
            ],
            [
                "parent_code" => "58.21",
                "code"        => "58.21.0",
                "name"        => "58.21.0 - Edizione di giochi per computer",
            ],
            [
                "parent_code" => "58.21.0",
                "code"        => "58.21.00",
                "name"        => "58.21.00 - Edizione di giochi per computer",
            ],
            [
                "parent_code" => "58.2",
                "code"        => "58.29",
                "name"        => "58.29 - Edizione di altri software",
            ],
            [
                "parent_code" => "58.29",
                "code"        => "58.29.0",
                "name"        => "58.29.0 - Edizione di altri software a pacchetto (esclusi giochi per computer)",
            ],
            [
                "parent_code" => "58.29.0",
                "code"        => "58.29.00",
                "name"        => "58.29.00 - Edizione di altri software a pacchetto (esclusi giochi per computer)",
            ],
            [
                "parent_code" => "J",
                "code"        => "59",
                "name"        => "59 - ATTIVITÀ DI PRODUZIONE CINEMATOGRAFICA, DI VIDEO E DI PROGRAMMI TELEVISIVI, DI REGISTRAZIONI MUSICALI E SONORE",
            ],
            [
                "parent_code" => "59",
                "code"        => "59.1",
                "name"        => "59.1 - ATTIVITÀ DI PRODUZIONE, POST-PRODUZIONE E DISTRIBUZIONE CINEMATOGRAFICA, DI VIDEO E DI PROGRAMMI TELEVISIVI",
            ],
            [
                "parent_code" => "59.1",
                "code"        => "59.11",
                "name"        => "59.11 - Attività di produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.11",
                "code"        => "59.11.0",
                "name"        => "59.11.0 - Attività di produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.11.0",
                "code"        => "59.11.00",
                "name"        => "59.11.00 - Attività di produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.1",
                "code"        => "59.12",
                "name"        => "59.12 - Attività di post-produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.12",
                "code"        => "59.12.0",
                "name"        => "59.12.0 - Attività di post-produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.12.0",
                "code"        => "59.12.00",
                "name"        => "59.12.00 - Attività di post-produzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.1",
                "code"        => "59.13",
                "name"        => "59.13 - Attività di distribuzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.13",
                "code"        => "59.13.0",
                "name"        => "59.13.0 - Attività di distribuzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.13.0",
                "code"        => "59.13.00",
                "name"        => "59.13.00 - Attività di distribuzione cinematografica, di video e di programmi televisivi",
            ],
            [
                "parent_code" => "59.1",
                "code"        => "59.14",
                "name"        => "59.14 - Attività di proiezione cinematografica",
            ],
            [
                "parent_code" => "59.14",
                "code"        => "59.14.0",
                "name"        => "59.14.0 - Attività di proiezione cinematografica",
            ],
            [
                "parent_code" => "59.14.0",
                "code"        => "59.14.00",
                "name"        => "59.14.00 - Attività di proiezione cinematografica",
            ],
            [
                "parent_code" => "59",
                "code"        => "59.2",
                "name"        => "59.2 - ATTIVITÀ DI REGISTRAZIONE SONORA E DI EDITORIA MUSICALE",
            ],
            [
                "parent_code" => "59.2",
                "code"        => "59.20",
                "name"        => "59.20 - Attività di registrazione sonora e di editoria musicale",
            ],
            [
                "parent_code" => "59.20",
                "code"        => "59.20.1",
                "name"        => "59.20.1 - Edizione di registrazioni sonore",
            ],
            [
                "parent_code" => "59.20.1",
                "code"        => "59.20.10",
                "name"        => "59.20.10 - Edizione di registrazioni sonore",
            ],
            [
                "parent_code" => "59.20",
                "code"        => "59.20.2",
                "name"        => "59.20.2 - Edizione di musica stampata",
            ],
            [
                "parent_code" => "59.20.2",
                "code"        => "59.20.20",
                "name"        => "59.20.20 - Edizione di musica stampata",
            ],
            [
                "parent_code" => "59.20",
                "code"        => "59.20.3",
                "name"        => "59.20.3 - Studi di registrazione sonora",
            ],
            [
                "parent_code" => "59.20.3",
                "code"        => "59.20.30",
                "name"        => "59.20.30 - Studi di registrazione sonora",
            ],
            [
                "parent_code" => "J",
                "code"        => "60",
                "name"        => "60 - ATTIVITÀ DI PROGRAMMAZIONE E TRASMISSIONE",
            ],
            [
                "parent_code" => "60",
                "code"        => "60.1",
                "name"        => "60.1 - TRASMISSIONI RADIOFONICHE",
            ],
            [
                "parent_code" => "60.1",
                "code"        => "60.10",
                "name"        => "60.10 - Trasmissioni radiofoniche",
            ],
            [
                "parent_code" => "60.10",
                "code"        => "60.10.0",
                "name"        => "60.10.0 - Trasmissioni radiofoniche",
            ],
            [
                "parent_code" => "60.10.0",
                "code"        => "60.10.00",
                "name"        => "60.10.00 - Trasmissioni radiofoniche",
            ],
            [
                "parent_code" => "60",
                "code"        => "60.2",
                "name"        => "60.2 - ATTIVITÀ DI PROGRAMMAZIONE E TRASMISSIONI TELEVISIVE",
            ],
            [
                "parent_code" => "60.2",
                "code"        => "60.20",
                "name"        => "60.20 - Attività di programmazione e trasmissioni televisive",
            ],
            [
                "parent_code" => "60.20",
                "code"        => "60.20.0",
                "name"        => "60.20.0 - Programmazione e trasmissioni televisive",
            ],
            [
                "parent_code" => "60.20.0",
                "code"        => "60.20.00",
                "name"        => "60.20.00 - Programmazione e trasmissioni televisive",
            ],
            [
                "parent_code" => "J",
                "code"        => "61",
                "name"        => "61 - TELECOMUNICAZIONI",
            ],
            [
                "parent_code" => "61",
                "code"        => "61.1",
                "name"        => "61.1 - TELECOMUNICAZIONI FISSE",
            ],
            [
                "parent_code" => "61.1",
                "code"        => "61.10",
                "name"        => "61.10 - Telecomunicazioni fisse",
            ],
            [
                "parent_code" => "61.10",
                "code"        => "61.10.0",
                "name"        => "61.10.0 - Telecomunicazioni fisse",
            ],
            [
                "parent_code" => "61.10.0",
                "code"        => "61.10.00",
                "name"        => "61.10.00 - Telecomunicazioni fisse",
            ],
            [
                "parent_code" => "61",
                "code"        => "61.2",
                "name"        => "61.2 - TELECOMUNICAZIONI MOBILI",
            ],
            [
                "parent_code" => "61.2",
                "code"        => "61.20",
                "name"        => "61.20 - Telecomunicazioni mobili",
            ],
            [
                "parent_code" => "61.20",
                "code"        => "61.20.0",
                "name"        => "61.20.0 - Telecomunicazioni mobili",
            ],
            [
                "parent_code" => "61.20.0",
                "code"        => "61.20.00",
                "name"        => "61.20.00 - Telecomunicazioni mobili",
            ],
            [
                "parent_code" => "61",
                "code"        => "61.3",
                "name"        => "61.3 - TELECOMUNICAZIONI SATELLITARI",
            ],
            [
                "parent_code" => "61.3",
                "code"        => "61.30",
                "name"        => "61.30 - Telecomunicazioni satellitari",
            ],
            [
                "parent_code" => "61.30",
                "code"        => "61.30.0",
                "name"        => "61.30.0 - Telecomunicazioni satellitari",
            ],
            [
                "parent_code" => "61.30.0",
                "code"        => "61.30.00",
                "name"        => "61.30.00 - Telecomunicazioni satellitari",
            ],
            [
                "parent_code" => "61",
                "code"        => "61.9",
                "name"        => "61.9 - ALTRE ATTIVITÀ DI TELECOMUNICAZIONE",
            ],
            [
                "parent_code" => "61.9",
                "code"        => "61.90",
                "name"        => "61.90 - Altre attività di telecomunicazione",
            ],
            [
                "parent_code" => "61.90",
                "code"        => "61.90.1",
                "name"        => "61.90.1 - Erogazione di servizi di accesso ad internet (ISP)",
            ],
            [
                "parent_code" => "61.90.1",
                "code"        => "61.90.10",
                "name"        => "61.90.10 - Erogazione di servizi di accesso ad internet (ISP)",
            ],
            [
                "parent_code" => "61.90",
                "code"        => "61.90.2",
                "name"        => "61.90.2 - Posto telefonico pubblico ed Internet Point",
            ],
            [
                "parent_code" => "61.90.2",
                "code"        => "61.90.20",
                "name"        => "61.90.20 - Posto telefonico pubblico ed Internet Point",
            ],
            [
                "parent_code" => "61.90",
                "code"        => "61.90.9",
                "name"        => "61.90.9 - Altre attività connesse alle telecomunicazioni",
            ],
            [
                "parent_code" => "61.90.9",
                "code"        => "61.90.91",
                "name"        => "61.90.91 - Intermediazione in servizi di telecomunicazione e trasmissione dati",
            ],
            [
                "parent_code" => "61.90.9",
                "code"        => "61.90.99",
                "name"        => "61.90.99 - Altre attività connesse alle telecomunicazioni n.c.a.",
            ],
            [
                "parent_code" => "J",
                "code"        => "62",
                "name"        => "62 - PRODUZIONE DI SOFTWARE, CONSULENZA INFORMATICA E ATTIVITÀ CONNESSE",
            ],
            [
                "parent_code" => "62",
                "code"        => "62.0",
                "name"        => "62.0 - PRODUZIONE DI SOFTWARE, CONSULENZA INFORMATICA E ATTIVITÀ CONNESSE",
            ],
            [
                "parent_code" => "62.0",
                "code"        => "62.01",
                "name"        => "62.01 - Produzione di software non connesso all'edizione",
            ],
            [
                "parent_code" => "62.01",
                "code"        => "62.01.0",
                "name"        => "62.01.0 - Produzione di software non connesso all'edizione",
            ],
            [
                "parent_code" => "62.01.0",
                "code"        => "62.01.00",
                "name"        => "62.01.00 - Produzione di software non connesso all'edizione",
            ],
            [
                "parent_code" => "62.0",
                "code"        => "62.02",
                "name"        => "62.02 - Consulenza nel settore delle tecnologie dell'informatica",
            ],
            [
                "parent_code" => "62.02",
                "code"        => "62.02.0",
                "name"        => "62.02.0 - Consulenza nel settore delle tecnologie dell'informatica",
            ],
            [
                "parent_code" => "62.02.0",
                "code"        => "62.02.00",
                "name"        => "62.02.00 - Consulenza nel settore delle tecnologie dell'informatica",
            ],
            [
                "parent_code" => "62.0",
                "code"        => "62.03",
                "name"        => "62.03 - Gestione di strutture informatizzate",
            ],
            [
                "parent_code" => "62.03",
                "code"        => "62.03.0",
                "name"        => "62.03.0 - Gestione di strutture e apparecchiature informatiche hardware - housing (esclusa la riparazione)",
            ],
            [
                "parent_code" => "62.03.0",
                "code"        => "62.03.00",
                "name"        => "62.03.00 - Gestione di strutture e apparecchiature informatiche hardware - housing (esclusa la riparazione)",
            ],
            [
                "parent_code" => "62.0",
                "code"        => "62.09",
                "name"        => "62.09 - Altre attività dei servizi connessi alle tecnologie dell'informatica",
            ],
            [
                "parent_code" => "62.09",
                "code"        => "62.09.0",
                "name"        => "62.09.0 - Altre attività dei servizi connessi alle tecnologie dell'informatica",
            ],
            [
                "parent_code" => "62.09.0",
                "code"        => "62.09.01",
                "name"        => "62.09.01 - Configurazione di personal computer",
            ],
            [
                "parent_code" => "62.09.0",
                "code"        => "62.09.09",
                "name"        => "62.09.09 - Altre attività dei servizi connessi alle tecnologie dell'informatica n.c.a.",
            ],
            [
                "parent_code" => "J",
                "code"        => "63",
                "name"        => "63 - ATTIVITÀ DEI SERVIZI D'INFORMAZIONE E ALTRI SERVIZI INFORMATICI",
            ],
            [
                "parent_code" => "63",
                "code"        => "63.1",
                "name"        => "63.1 - ELABORAZIONE DEI DATI, HOSTING E ATTIVITÀ CONNESSE; PORTALI WEB",
            ],
            [
                "parent_code" => "63.1",
                "code"        => "63.11",
                "name"        => "63.11 - Elaborazione dei dati, hosting e attività connesse",
            ],
            [
                "parent_code" => "63.11",
                "code"        => "63.11.1",
                "name"        => "63.11.1 - Elaborazione dati",
            ],
            [
                "parent_code" => "63.11.1",
                "code"        => "63.11.11",
                "name"        => "63.11.11 - Elaborazione elettronica di dati contabili (esclusi i Centri di assistenza fiscale - Caf)",
            ],
            [
                "parent_code" => "63.11.1",
                "code"        => "63.11.19",
                "name"        => "63.11.19 - Altre elaborazioni elettroniche di dati",
            ],
            [
                "parent_code" => "63.11",
                "code"        => "63.11.2",
                "name"        => "63.11.2 - Gestione database (attività delle banche dati)",
            ],
            [
                "parent_code" => "63.11.2",
                "code"        => "63.11.20",
                "name"        => "63.11.20 - Gestione database (attività delle banche dati)",
            ],
            [
                "parent_code" => "63.11",
                "code"        => "63.11.3",
                "name"        => "63.11.3 - Hosting e fornitura di servizi applicativi (ASP)",
            ],
            [
                "parent_code" => "63.11.3",
                "code"        => "63.11.30",
                "name"        => "63.11.30 - Hosting e fornitura di servizi applicativi (ASP)",
            ],
            [
                "parent_code" => "63.1",
                "code"        => "63.12",
                "name"        => "63.12 - Portali web",
            ],
            [
                "parent_code" => "63.12",
                "code"        => "63.12.0",
                "name"        => "63.12.0 - Portali web",
            ],
            [
                "parent_code" => "63.12.0",
                "code"        => "63.12.00",
                "name"        => "63.12.00 - Portali web",
            ],
            [
                "parent_code" => "63",
                "code"        => "63.9",
                "name"        => "63.9 - ALTRE ATTIVITÀ DEI SERVIZI D'INFORMAZIONE",
            ],
            [
                "parent_code" => "63.9",
                "code"        => "63.91",
                "name"        => "63.91 - Attività delle agenzie di stampa",
            ],
            [
                "parent_code" => "63.91",
                "code"        => "63.91.0",
                "name"        => "63.91.0 - Attività delle agenzie di stampa",
            ],
            [
                "parent_code" => "63.91.0",
                "code"        => "63.91.00",
                "name"        => "63.91.00 - Attività delle agenzie di stampa",
            ],
            [
                "parent_code" => "63.9",
                "code"        => "63.99",
                "name"        => "63.99 - Altre attività dei servizi di informazione n.c.a.",
            ],
            [
                "parent_code" => "63.99",
                "code"        => "63.99.0",
                "name"        => "63.99.0 - Altre attività dei servizi di informazione n.c.a.",
            ],
            [
                "parent_code" => "63.99.0",
                "code"        => "63.99.00",
                "name"        => "63.99.00 - Altre attività dei servizi di informazione n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "K",
                "name"        => "K - ATTIVITÀ FINANZIARIE E ASSICURATIVE",
            ],
            [
                "parent_code" => "K",
                "code"        => "64",
                "name"        => "64 - ATTIVITÀ DI SERVIZI FINANZIARI (ESCLUSE LE ASSICURAZIONI E I FONDI PENSIONE)",
            ],
            [
                "parent_code" => "64",
                "code"        => "64.1",
                "name"        => "64.1 - INTERMEDIAZIONE MONETARIA",
            ],
            [
                "parent_code" => "64.1",
                "code"        => "64.11",
                "name"        => "64.11 - Attività delle banche centrali",
            ],
            [
                "parent_code" => "64.11",
                "code"        => "64.11.0",
                "name"        => "64.11.0 - Attività della Banca Centrale",
            ],
            [
                "parent_code" => "64.11.0",
                "code"        => "64.11.00",
                "name"        => "64.11.00 - Attività della Banca Centrale",
            ],
            [
                "parent_code" => "64.1",
                "code"        => "64.19",
                "name"        => "64.19 - Altre intermediazioni monetarie",
            ],
            [
                "parent_code" => "64.19",
                "code"        => "64.19.1",
                "name"        => "64.19.1 - Intermediazione monetaria di istituti monetari diverse dalle Banche centrali",
            ],
            [
                "parent_code" => "64.19.1",
                "code"        => "64.19.10",
                "name"        => "64.19.10 - Intermediazione monetaria di istituti monetari diverse dalle Banche centrali",
            ],
            [
                "parent_code" => "64.19",
                "code"        => "64.19.2",
                "name"        => "64.19.2 - Fondi comuni di investimento monetario",
            ],
            [
                "parent_code" => "64.19.2",
                "code"        => "64.19.20",
                "name"        => "64.19.20 - Fondi comuni di investimento monetario",
            ],
            [
                "parent_code" => "64.19",
                "code"        => "64.19.3",
                "name"        => "64.19.3 - Istituti di moneta elettronica (Imel)",
            ],
            [
                "parent_code" => "64.19.3",
                "code"        => "64.19.30",
                "name"        => "64.19.30 - Istituti di moneta elettronica (Imel)",
            ],
            [
                "parent_code" => "64.19",
                "code"        => "64.19.4",
                "name"        => "64.19.4 - Cassa Depositi e Prestiti",
            ],
            [
                "parent_code" => "64.19.4",
                "code"        => "64.19.40",
                "name"        => "64.19.40 - Cassa Depositi e Prestiti",
            ],
            [
                "parent_code" => "64",
                "code"        => "64.2",
                "name"        => "64.2 - ATTIVITÀ DELLE SOCIETÀ DI PARTECIPAZIONE (HOLDING)",
            ],
            [
                "parent_code" => "64.2",
                "code"        => "64.20",
                "name"        => "64.20 - Attività delle società di partecipazione (holding)",
            ],
            [
                "parent_code" => "64.20",
                "code"        => "64.20.0",
                "name"        => "64.20.0 - Attività delle società di partecipazione (holding)",
            ],
            [
                "parent_code" => "64.20.0",
                "code"        => "64.20.00",
                "name"        => "64.20.00 - Attività delle società di partecipazione (holding)",
            ],
            [
                "parent_code" => "64",
                "code"        => "64.3",
                "name"        => "64.3 - SOCIETÀ FIDUCIARIE, FONDI E ALTRE SOCIETÀ SIMILI",
            ],
            [
                "parent_code" => "64.3",
                "code"        => "64.30",
                "name"        => "64.30 - Società fiduciarie, fondi e altre società simili",
            ],
            [
                "parent_code" => "64.30",
                "code"        => "64.30.1",
                "name"        => "64.30.1 - Fondi comuni di investimento (aperti e chiusi, immobiliari, di mercato mobiliare)",
            ],
            [
                "parent_code" => "64.30.1",
                "code"        => "64.30.10",
                "name"        => "64.30.10 - Fondi comuni di investimento (aperti e chiusi, immobiliari, di mercato mobiliare)",
            ],
            [
                "parent_code" => "64.30",
                "code"        => "64.30.2",
                "name"        => "64.30.2 - Sicav (Società di investimento a capitale variabile)",
            ],
            [
                "parent_code" => "64.30.2",
                "code"        => "64.30.20",
                "name"        => "64.30.20 - Sicav (Società di investimento a capitale variabile)",
            ],
            [
                "parent_code" => "64",
                "code"        => "64.9",
                "name"        => "64.9 - ALTRE ATTIVITÀ DI SERVIZI FINANZIARI (ESCLUSE LE ASSICURAZIONI E I FONDI PENSIONE)",
            ],
            [
                "parent_code" => "64.9",
                "code"        => "64.91",
                "name"        => "64.91 - Leasing finanziario",
            ],
            [
                "parent_code" => "64.91",
                "code"        => "64.91.0",
                "name"        => "64.91.0 - Leasing finanziario",
            ],
            [
                "parent_code" => "64.91.0",
                "code"        => "64.91.00",
                "name"        => "64.91.00 - Leasing finanziario",
            ],
            [
                "parent_code" => "64.9",
                "code"        => "64.92",
                "name"        => "64.92 - Altre attività creditizie",
            ],
            [
                "parent_code" => "64.92",
                "code"        => "64.92.0",
                "name"        => "64.92.0 - Altre attività creditizie",
            ],
            [
                "parent_code" => "64.92.0",
                "code"        => "64.92.01",
                "name"        => "64.92.01 - Attività dei consorzi di garanzia collettiva fidi",
            ],
            [
                "parent_code" => "64.92.0",
                "code"        => "64.92.09",
                "name"        => "64.92.09 - Altre attività creditizie n.c.a.",
            ],
            [
                "parent_code" => "64.9",
                "code"        => "64.99",
                "name"        => "64.99 - Altre attività di servizi finanziari n.c.a. (escluse le assicurazioni e i fondi pensione)",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.1",
                "name"        => "64.99.1 - Attività di intermediazione mobiliare",
            ],
            [
                "parent_code" => "64.99.1",
                "code"        => "64.99.10",
                "name"        => "64.99.10 - Attività di intermediazione mobiliare",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.2",
                "name"        => "64.99.2 - Attività di factoring",
            ],
            [
                "parent_code" => "64.99.2",
                "code"        => "64.99.20",
                "name"        => "64.99.20 - Attività di factoring",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.3",
                "name"        => "64.99.3 - Attività di merchant bank",
            ],
            [
                "parent_code" => "64.99.3",
                "code"        => "64.99.30",
                "name"        => "64.99.30 - Attività di merchant bank",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.4",
                "name"        => "64.99.4 - Attività delle società veicolo",
            ],
            [
                "parent_code" => "64.99.4",
                "code"        => "64.99.40",
                "name"        => "64.99.40 - Attività delle società veicolo",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.5",
                "name"        => "64.99.5 - Attività di intermediazione in cambi",
            ],
            [
                "parent_code" => "64.99.5",
                "code"        => "64.99.50",
                "name"        => "64.99.50 - Attività di intermediazione in cambi",
            ],
            [
                "parent_code" => "64.99",
                "code"        => "64.99.6",
                "name"        => "64.99.6 - Altre intermediazioni finanziarie n.c.a.",
            ],
            [
                "parent_code" => "64.99.6",
                "code"        => "64.99.60",
                "name"        => "64.99.60 - Altre intermediazioni finanziarie n.c.a.",
            ],
            [
                "parent_code" => "K",
                "code"        => "65",
                "name"        => "65 - ASSICURAZIONI, RIASSICURAZIONI E FONDI PENSIONE (ESCLUSE LE ASSICURAZIONI SOCIALI OBBLIGATORIE)",
            ],
            [
                "parent_code" => "65",
                "code"        => "65.1",
                "name"        => "65.1 - ASSICURAZIONI",
            ],
            [
                "parent_code" => "65.1",
                "code"        => "65.11",
                "name"        => "65.11 - Assicurazioni sulla vita",
            ],
            [
                "parent_code" => "65.11",
                "code"        => "65.11.0",
                "name"        => "65.11.0 - Assicurazioni sulla vita",
            ],
            [
                "parent_code" => "65.11.0",
                "code"        => "65.11.00",
                "name"        => "65.11.00 - Assicurazioni sulla vita",
            ],
            [
                "parent_code" => "65.1",
                "code"        => "65.12",
                "name"        => "65.12 - Assicurazioni diverse da quelle sulla vita",
            ],
            [
                "parent_code" => "65.12",
                "code"        => "65.12.0",
                "name"        => "65.12.0 - Assicurazioni diverse da quelle sulla vita",
            ],
            [
                "parent_code" => "65.12.0",
                "code"        => "65.12.00",
                "name"        => "65.12.00 - Assicurazioni diverse da quelle sulla vita",
            ],
            [
                "parent_code" => "65",
                "code"        => "65.2",
                "name"        => "65.2 - RIASSICURAZIONI",
            ],
            [
                "parent_code" => "65.2",
                "code"        => "65.20",
                "name"        => "65.20 - Riassicurazioni",
            ],
            [
                "parent_code" => "65.20",
                "code"        => "65.20.0",
                "name"        => "65.20.0 - Attività di riassicurazione",
            ],
            [
                "parent_code" => "65.20.0",
                "code"        => "65.20.00",
                "name"        => "65.20.00 - Attività di riassicurazione",
            ],
            [
                "parent_code" => "65",
                "code"        => "65.3",
                "name"        => "65.3 - FONDI PENSIONE",
            ],
            [
                "parent_code" => "65.3",
                "code"        => "65.30",
                "name"        => "65.30 - Fondi pensione",
            ],
            [
                "parent_code" => "65.30",
                "code"        => "65.30.1",
                "name"        => "65.30.1 - Attività dei fondi pensione aperti",
            ],
            [
                "parent_code" => "65.30.1",
                "code"        => "65.30.10",
                "name"        => "65.30.10 - Attività dei fondi pensione aperti",
            ],
            [
                "parent_code" => "65.30",
                "code"        => "65.30.2",
                "name"        => "65.30.2 - Attività dei fondi pensione negoziali",
            ],
            [
                "parent_code" => "65.30.2",
                "code"        => "65.30.20",
                "name"        => "65.30.20 - Attività dei fondi pensione negoziali",
            ],
            [
                "parent_code" => "65.30",
                "code"        => "65.30.3",
                "name"        => "65.30.3 - Attività dei fondi pensione preesistenti",
            ],
            [
                "parent_code" => "65.30.3",
                "code"        => "65.30.30",
                "name"        => "65.30.30 - Attività dei fondi pensione preesistenti",
            ],
            [
                "parent_code" => "K",
                "code"        => "66",
                "name"        => "66 - ATTIVITÀ AUSILIARIE DEI SERVIZI FINANZIARI E DELLE ATTIVITÀ ASSICURATIVE",
            ],
            [
                "parent_code" => "66",
                "code"        => "66.1",
                "name"        => "66.1 - ATTIVITÀ AUSILIARIE DEI SERVIZI FINANZIARI (ESCLUSE LE ASSICURAZIONI E I FONDI PENSIONE)",
            ],
            [
                "parent_code" => "66.1",
                "code"        => "66.11",
                "name"        => "66.11 - Amministrazione di mercati finanziari",
            ],
            [
                "parent_code" => "66.11",
                "code"        => "66.11.0",
                "name"        => "66.11.0 - Amministrazione di mercati finanziari",
            ],
            [
                "parent_code" => "66.11.0",
                "code"        => "66.11.00",
                "name"        => "66.11.00 - Amministrazione di mercati finanziari",
            ],
            [
                "parent_code" => "66.1",
                "code"        => "66.12",
                "name"        => "66.12 - Attività di negoziazione di contratti relativi a titoli e merci",
            ],
            [
                "parent_code" => "66.12",
                "code"        => "66.12.0",
                "name"        => "66.12.0 - Attività di negoziazione di contratti relativi a titoli e merci",
            ],
            [
                "parent_code" => "66.12.0",
                "code"        => "66.12.00",
                "name"        => "66.12.00 - Attività di negoziazione di contratti relativi a titoli e merci",
            ],
            [
                "parent_code" => "66.1",
                "code"        => "66.19",
                "name"        => "66.19 - Altre attività ausiliarie dei servizi finanziari (escluse le assicurazioni e i fondi pensione)",
            ],
            [
                "parent_code" => "66.19",
                "code"        => "66.19.1",
                "name"        => "66.19.1 - Attività di gestione ed elaborazione di pagamenti tramite carta di credito",
            ],
            [
                "parent_code" => "66.19.1",
                "code"        => "66.19.10",
                "name"        => "66.19.10 - Attività di gestione ed elaborazione di pagamenti tramite carta di credito",
            ],
            [
                "parent_code" => "66.19",
                "code"        => "66.19.2",
                "name"        => "66.19.2 - Attività di consulenti finanziari abilitati all'offerta fuori sede e mediatori finanziari",
            ],
            [
                "parent_code" => "66.19.2",
                "code"        => "66.19.21",
                "name"        => "66.19.21 - Attività di consulenti finanziari abilitati all'offerta fuori sede",
            ],
            [
                "parent_code" => "66.19.2",
                "code"        => "66.19.22",
                "name"        => "66.19.22 - Attività di agenti, mediatori e procacciatori in prodotti finanziari",
            ],
            [
                "parent_code" => "66.19",
                "code"        => "66.19.3",
                "name"        => "66.19.3 - Attività delle società fiduciarie di amministrazione",
            ],
            [
                "parent_code" => "66.19.3",
                "code"        => "66.19.30",
                "name"        => "66.19.30 - Attività delle società fiduciarie di amministrazione",
            ],
            [
                "parent_code" => "66.19",
                "code"        => "66.19.4",
                "name"        => "66.19.4 - Attività di Bancoposta",
            ],
            [
                "parent_code" => "66.19.4",
                "code"        => "66.19.40",
                "name"        => "66.19.40 - Attività di Bancoposta",
            ],
            [
                "parent_code" => "66.19",
                "code"        => "66.19.5",
                "name"        => "66.19.5 - Servizi di trasferimento di denaro (money transfer)",
            ],
            [
                "parent_code" => "66.19.5",
                "code"        => "66.19.50",
                "name"        => "66.19.50 - Servizi di trasferimento di denaro (money transfer)",
            ],
            [
                "parent_code" => "66",
                "code"        => "66.2",
                "name"        => "66.2 - ATTIVITÀ AUSILIARIE DELLE ASSICURAZIONI E DEI FONDI PENSIONE",
            ],
            [
                "parent_code" => "66.2",
                "code"        => "66.21",
                "name"        => "66.21 - Valutazione dei rischi e dei danni",
            ],
            [
                "parent_code" => "66.21",
                "code"        => "66.21.0",
                "name"        => "66.21.0 - Attività dei periti e liquidatori indipendenti delle assicurazioni",
            ],
            [
                "parent_code" => "66.21.0",
                "code"        => "66.21.00",
                "name"        => "66.21.00 - Attività dei periti e liquidatori indipendenti delle assicurazioni",
            ],
            [
                "parent_code" => "66.2",
                "code"        => "66.22",
                "name"        => "66.22 - Attività di agenti e mediatori di assicurazioni",
            ],
            [
                "parent_code" => "66.22",
                "code"        => "66.22.0",
                "name"        => "66.22.0 - Attività degli agenti e broker delle assicurazioni",
            ],
            [
                "parent_code" => "66.22.0",
                "code"        => "66.22.01",
                "name"        => "66.22.01 - Broker di assicurazioni",
            ],
            [
                "parent_code" => "66.22.0",
                "code"        => "66.22.02",
                "name"        => "66.22.02 - Agenti di assicurazioni",
            ],
            [
                "parent_code" => "66.22.0",
                "code"        => "66.22.03",
                "name"        => "66.22.03 - Sub-agenti di assicurazioni",
            ],
            [
                "parent_code" => "66.22.0",
                "code"        => "66.22.04",
                "name"        => "66.22.04 - Produttori, procacciatori ed altri intermediari delle assicurazioni",
            ],
            [
                "parent_code" => "66.2",
                "code"        => "66.29",
                "name"        => "66.29 - Altre attività ausiliarie delle assicurazioni e dei fondi pensione",
            ],
            [
                "parent_code" => "66.29",
                "code"        => "66.29.0",
                "name"        => "66.29.0 - Altre attività ausiliarie delle assicurazioni e dei fondi pensione",
            ],
            [
                "parent_code" => "66.29.0",
                "code"        => "66.29.01",
                "name"        => "66.29.01 - Autorità centrali di vigilanza su assicurazioni e fondi pensione",
            ],
            [
                "parent_code" => "66.29.0",
                "code"        => "66.29.09",
                "name"        => "66.29.09 - Altre attività ausiliarie delle assicurazioni e dei fondi pensione n.c.a.",
            ],
            [
                "parent_code" => "66",
                "code"        => "66.3",
                "name"        => "66.3 - ATTIVITÀ DI GESTIONE DEI FONDI",
            ],
            [
                "parent_code" => "66.3",
                "code"        => "66.30",
                "name"        => "66.30 - Attività di gestione dei fondi",
            ],
            [
                "parent_code" => "66.30",
                "code"        => "66.30.0",
                "name"        => "66.30.0 - Gestione di fondi comuni di investimento e dei fondi pensione",
            ],
            [
                "parent_code" => "66.30.0",
                "code"        => "66.30.00",
                "name"        => "66.30.00 - Gestione di fondi comuni di investimento e dei fondi pensione",
            ],
            [
                "parent_code" => null,
                "code"        => "L",
                "name"        => "L - ATTIVITÀ IMMOBILIARI",
            ],
            [
                "parent_code" => "L",
                "code"        => "68",
                "name"        => "68 - ATTIVITÀ IMMOBILIARI",
            ],
            [
                "parent_code" => "68",
                "code"        => "68.1",
                "name"        => "68.1 - COMPRAVENDITA DI BENI IMMOBILI EFFETTUATA SU BENI PROPRI",
            ],
            [
                "parent_code" => "68.1",
                "code"        => "68.10",
                "name"        => "68.10 - Compravendita di beni immobili effettuata su beni propri",
            ],
            [
                "parent_code" => "68.10",
                "code"        => "68.10.0",
                "name"        => "68.10.0 - Compravendita di beni immobili effettuata su beni propri",
            ],
            [
                "parent_code" => "68.10.0",
                "code"        => "68.10.00",
                "name"        => "68.10.00 - Compravendita di beni immobili effettuata su beni propri",
            ],
            [
                "parent_code" => "68",
                "code"        => "68.2",
                "name"        => "68.2 - AFFITTO E GESTIONE DI IMMOBILI DI PROPRIETÀ O IN LEASING",
            ],
            [
                "parent_code" => "68.2",
                "code"        => "68.20",
                "name"        => "68.20 - Affitto e gestione di immobili di proprietà o in leasing",
            ],
            [
                "parent_code" => "68.20",
                "code"        => "68.20.0",
                "name"        => "68.20.0 - Affitto e gestione di immobili di proprietà o in leasing",
            ],
            [
                "parent_code" => "68.20.0",
                "code"        => "68.20.01",
                "name"        => "68.20.01 - Locazione immobiliare di beni propri o in leasing (affitto)",
            ],
            [
                "parent_code" => "68.20.0",
                "code"        => "68.20.02",
                "name"        => "68.20.02 - Affitto di aziende",
            ],
            [
                "parent_code" => "68",
                "code"        => "68.3",
                "name"        => "68.3 - ATTIVITÀ IMMOBILIARI PER CONTO TERZI",
            ],
            [
                "parent_code" => "68.3",
                "code"        => "68.31",
                "name"        => "68.31 - Attività di mediazione immobiliare",
            ],
            [
                "parent_code" => "68.31",
                "code"        => "68.31.0",
                "name"        => "68.31.0 - Attività di mediazione immobiliare",
            ],
            [
                "parent_code" => "68.31.0",
                "code"        => "68.31.00",
                "name"        => "68.31.00 - Attività di mediazione immobiliare",
            ],
            [
                "parent_code" => "68.3",
                "code"        => "68.32",
                "name"        => "68.32 - Gestione di immobili per conto terzi",
            ],
            [
                "parent_code" => "68.32",
                "code"        => "68.32.0",
                "name"        => "68.32.0 - Amministrazione di condomini e gestione di beni immobili per conto terzi",
            ],
            [
                "parent_code" => "68.32.0",
                "code"        => "68.32.00",
                "name"        => "68.32.00 - Amministrazione di condomini e gestione di beni immobili per conto terzi",
            ],
            [
                "parent_code" => null,
                "code"        => "M",
                "name"        => "M - ATTIVITÀ PROFESSIONALI, SCIENTIFICHE E TECNICHE",
            ],
            [
                "parent_code" => "M",
                "code"        => "69",
                "name"        => "69 - ATTIVITÀ LEGALI E CONTABILITÀ",
            ],
            [
                "parent_code" => "69",
                "code"        => "69.1",
                "name"        => "69.1 - ATTIVITÀ DEGLI STUDI LEGALI",
            ],
            [
                "parent_code" => "69.1",
                "code"        => "69.10",
                "name"        => "69.10 - Attività degli studi legali e notarili",
            ],
            [
                "parent_code" => "69.10",
                "code"        => "69.10.1",
                "name"        => "69.10.1 - Attività degli studi legali",
            ],
            [
                "parent_code" => "69.10.1",
                "code"        => "69.10.10",
                "name"        => "69.10.10 - Attività degli studi legali",
            ],
            [
                "parent_code" => "69.10",
                "code"        => "69.10.2",
                "name"        => "69.10.2 - Attività degli studi notarili",
            ],
            [
                "parent_code" => "69.10.2",
                "code"        => "69.10.20",
                "name"        => "69.10.20 - Attività degli studi notarili",
            ],
            [
                "parent_code" => "69",
                "code"        => "69.2",
                "name"        => "69.2 - CONTABILITÀ, CONTROLLO E REVISIONE CONTABILE, CONSULENZA IN MATERIA FISCALE E DEL LAVORO",
            ],
            [
                "parent_code" => "69.2",
                "code"        => "69.20",
                "name"        => "69.20 - Contabilità, controllo e revisione contabile, consulenza in materia fiscale e del lavoro",
            ],
            [
                "parent_code" => "69.20",
                "code"        => "69.20.1",
                "name"        => "69.20.1 - Attività degli studi commerciali, tributari e revisione contabile",
            ],
            [
                "parent_code" => "69.20.1",
                "code"        => "69.20.11",
                "name"        => "69.20.11 - Servizi forniti da commercialisti",
            ],
            [
                "parent_code" => "69.20.1",
                "code"        => "69.20.12",
                "name"        => "69.20.12 - Servizi forniti da esperti contabili",
            ],
            [
                "parent_code" => "69.20.1",
                "code"        => "69.20.13",
                "name"        => "69.20.13 - Servizi forniti da revisori contabili, periti, consulenti ed altri soggetti che svolgono attività in materia di amministrazione, contabilità e tributi",
            ],
            [
                "parent_code" => "69.20.1",
                "code"        => "69.20.14",
                "name"        => "69.20.14 - Attività svolta dai Centri di assistenza fiscale (Caf)",
            ],
            [
                "parent_code" => "69.20.1",
                "code"        => "69.20.15",
                "name"        => "69.20.15 - Gestione ed amministrazione del personale per conto terzi",
            ],
            [
                "parent_code" => "69.20",
                "code"        => "69.20.2",
                "name"        => "69.20.2 - Attività delle società di revisione e certificazione di bilanci",
            ],
            [
                "parent_code" => "69.20.2",
                "code"        => "69.20.20",
                "name"        => "69.20.20 - Attività delle società di revisione e certificazione di bilanci",
            ],
            [
                "parent_code" => "69.20",
                "code"        => "69.20.3",
                "name"        => "69.20.3 - Attività dei consulenti del lavoro",
            ],
            [
                "parent_code" => "69.20.3",
                "code"        => "69.20.30",
                "name"        => "69.20.30 - Attività dei consulenti del lavoro",
            ],
            [
                "parent_code" => "M",
                "code"        => "70",
                "name"        => "70 - ATTIVITÀ DI DIREZIONE AZIENDALE E DI CONSULENZA GESTIONALE",
            ],
            [
                "parent_code" => "70",
                "code"        => "70.1",
                "name"        => "70.1 - ATTIVITÀ DI DIREZIONE AZIENDALE",
            ],
            [
                "parent_code" => "70.1",
                "code"        => "70.10",
                "name"        => "70.10 - Attività delle holding impegnate nelle attività gestionali (holding operative)",
            ],
            [
                "parent_code" => "70.10",
                "code"        => "70.10.0",
                "name"        => "70.10.0 - Attività delle holding impegnate nelle attività gestionali (holding operative)",
            ],
            [
                "parent_code" => "70.10.0",
                "code"        => "70.10.00",
                "name"        => "70.10.00 - Attività delle holding impegnate nelle attività gestionali (holding operative)",
            ],
            [
                "parent_code" => "70",
                "code"        => "70.2",
                "name"        => "70.2 - ATTIVITÀ DI CONSULENZA GESTIONALE",
            ],
            [
                "parent_code" => "70.2",
                "code"        => "70.21",
                "name"        => "70.21 - Pubbliche relazioni e comunicazione",
            ],
            [
                "parent_code" => "70.21",
                "code"        => "70.21.0",
                "name"        => "70.21.0 - Pubbliche relazioni e comunicazione",
            ],
            [
                "parent_code" => "70.21.0",
                "code"        => "70.21.00",
                "name"        => "70.21.00 - Pubbliche relazioni e comunicazione",
            ],
            [
                "parent_code" => "70.2",
                "code"        => "70.22",
                "name"        => "70.22 - Consulenza imprenditoriale e altra consulenza amministrativo-gestionale",
            ],
            [
                "parent_code" => "70.22",
                "code"        => "70.22.0",
                "name"        => "70.22.0 - Consulenza imprenditoriale e altra consulenza amministrativo-gestionale e pianificazione aziendale",
            ],
            [
                "parent_code" => "70.22.0",
                "code"        => "70.22.01",
                "name"        => "70.22.01 - Attività di consulenza per la gestione della logistica aziendale",
            ],
            [
                "parent_code" => "70.22.0",
                "code"        => "70.22.09",
                "name"        => "70.22.09 - Altre attività di consulenza imprenditoriale e altra consulenza amministrativo-gestionale e pianificazione aziendale",
            ],
            [
                "parent_code" => "M",
                "code"        => "71",
                "name"        => "71 - ATTIVITÀ DEGLI STUDI DI ARCHITETTURA E D'INGEGNERIA; COLLAUDI ED ANALISI TECNICHE",
            ],
            [
                "parent_code" => "71",
                "code"        => "71.1",
                "name"        => "71.1 - ATTIVITÀ DEGLI STUDI DI ARCHITETTURA, INGEGNERIA ED ALTRI STUDI TECNICI",
            ],
            [
                "parent_code" => "71.1",
                "code"        => "71.11",
                "name"        => "71.11 - Attività degli studi di architettura",
            ],
            [
                "parent_code" => "71.11",
                "code"        => "71.11.0",
                "name"        => "71.11.0 - Attività degli studi di architettura",
            ],
            [
                "parent_code" => "71.11.0",
                "code"        => "71.11.00",
                "name"        => "71.11.00 - Attività degli studi di architettura",
            ],
            [
                "parent_code" => "71.1",
                "code"        => "71.12",
                "name"        => "71.12 - Attività degli studi d'ingegneria ed altri studi tecnici",
            ],
            [
                "parent_code" => "71.12",
                "code"        => "71.12.1",
                "name"        => "71.12.1 - Attività degli studi di ingegneria",
            ],
            [
                "parent_code" => "71.12.1",
                "code"        => "71.12.10",
                "name"        => "71.12.10 - Attività degli studi di ingegneria",
            ],
            [
                "parent_code" => "71.12",
                "code"        => "71.12.2",
                "name"        => "71.12.2 - Servizi di progettazione di ingegneria integrata",
            ],
            [
                "parent_code" => "71.12.2",
                "code"        => "71.12.20",
                "name"        => "71.12.20 - Servizi di progettazione di ingegneria integrata",
            ],
            [
                "parent_code" => "71.12",
                "code"        => "71.12.3",
                "name"        => "71.12.3 - Attività tecniche svolte da geometri",
            ],
            [
                "parent_code" => "71.12.3",
                "code"        => "71.12.30",
                "name"        => "71.12.30 - Attività tecniche svolte da geometri",
            ],
            [
                "parent_code" => "71.12",
                "code"        => "71.12.4",
                "name"        => "71.12.4 - Attività di cartografia e aerofotogrammetria",
            ],
            [
                "parent_code" => "71.12.4",
                "code"        => "71.12.40",
                "name"        => "71.12.40 - Attività di cartografia e aerofotogrammetria",
            ],
            [
                "parent_code" => "71.12",
                "code"        => "71.12.5",
                "name"        => "71.12.5 - Attività di studio geologico e di prospezione geognostica e mineraria",
            ],
            [
                "parent_code" => "71.12.5",
                "code"        => "71.12.50",
                "name"        => "71.12.50 - Attività di studio geologico e di prospezione geognostica e mineraria",
            ],
            [
                "parent_code" => "71",
                "code"        => "71.2",
                "name"        => "71.2 - COLLAUDI ED ANALISI TECNICHE",
            ],
            [
                "parent_code" => "71.2",
                "code"        => "71.20",
                "name"        => "71.20 - Collaudi ed analisi tecniche",
            ],
            [
                "parent_code" => "71.20",
                "code"        => "71.20.1",
                "name"        => "71.20.1 - Collaudi ed analisi tecniche di prodotti",
            ],
            [
                "parent_code" => "71.20.1",
                "code"        => "71.20.10",
                "name"        => "71.20.10 - Collaudi e analisi tecniche di prodotti",
            ],
            [
                "parent_code" => "71.20",
                "code"        => "71.20.2",
                "name"        => "71.20.2 - Controllo di qualità e certificazione di prodotti, processi e sistemi",
            ],
            [
                "parent_code" => "71.20.2",
                "code"        => "71.20.21",
                "name"        => "71.20.21 - Controllo di qualità e certificazione di prodotti, processi e sistemi",
            ],
            [
                "parent_code" => "71.20.2",
                "code"        => "71.20.22",
                "name"        => "71.20.22 - Attività per la tutela di beni di produzione controllata",
            ],
            [
                "parent_code" => "71.20.2",
                "code"        => "71.20.23",
                "name"        => "71.20.23 - Revisione periodica a norma di legge dell'idoneità alla circolazione degli autoveicoli e motoveicoli",
            ],
            [
                "parent_code" => "M",
                "code"        => "72",
                "name"        => "72 - RICERCA SCIENTIFICA E SVILUPPO",
            ],
            [
                "parent_code" => "72",
                "code"        => "72.1",
                "name"        => "72.1 - RICERCA E SVILUPPO SPERIMENTALE NEL CAMPO DELLE SCIENZE NATURALI E DELL'INGEGNERIA",
            ],
            [
                "parent_code" => "72.1",
                "code"        => "72.11",
                "name"        => "72.11 - Ricerca e sviluppo sperimentale nel campo delle biotecnologie",
            ],
            [
                "parent_code" => "72.11",
                "code"        => "72.11.0",
                "name"        => "72.11.0 - Ricerca e sviluppo sperimentale nel campo delle biotecnologie",
            ],
            [
                "parent_code" => "72.11.0",
                "code"        => "72.11.00",
                "name"        => "72.11.00 - Ricerca e sviluppo sperimentale nel campo delle biotecnologie",
            ],
            [
                "parent_code" => "72.1",
                "code"        => "72.19",
                "name"        => "72.19 - Altre attività di ricerca e sviluppo sperimentale nel campo delle scienze naturali e dell'ingegneria",
            ],
            [
                "parent_code" => "72.19",
                "code"        => "72.19.0",
                "name"        => "72.19.0 - Altre attività di ricerca e sviluppo sperimentale nel campo delle scienze naturali e dell'ingegneria",
            ],
            [
                "parent_code" => "72.19.0",
                "code"        => "72.19.01",
                "name"        => "72.19.01 - Ricerca e sviluppo sperimentale nel campo della geologia",
            ],
            [
                "parent_code" => "72.19.0",
                "code"        => "72.19.09",
                "name"        => "72.19.09 - Ricerca e sviluppo sperimentale nel campo delle altre scienze naturali e dell'ingegneria",
            ],
            [
                "parent_code" => "72",
                "code"        => "72.2",
                "name"        => "72.2 - RICERCA E SVILUPPO SPERIMENTALE NEL CAMPO DELLE SCIENZE SOCIALI E UMANISTICHE",
            ],
            [
                "parent_code" => "72.2",
                "code"        => "72.20",
                "name"        => "72.20 - Ricerca e sviluppo sperimentale nel campo delle scienze sociali e umanistiche",
            ],
            [
                "parent_code" => "72.20",
                "code"        => "72.20.0",
                "name"        => "72.20.0 - Ricerca e sviluppo sperimentale nel campo delle scienze sociali e umanistiche",
            ],
            [
                "parent_code" => "72.20.0",
                "code"        => "72.20.00",
                "name"        => "72.20.00 - Ricerca e sviluppo sperimentale nel campo delle scienze sociali e umanistiche",
            ],
            [
                "parent_code" => "M",
                "code"        => "73",
                "name"        => "73 - PUBBLICITÀ E RICERCHE DI MERCATO",
            ],
            [
                "parent_code" => "73",
                "code"        => "73.1",
                "name"        => "73.1 - PUBBLICITÀ",
            ],
            [
                "parent_code" => "73.1",
                "code"        => "73.11",
                "name"        => "73.11 - Agenzie pubblicitarie",
            ],
            [
                "parent_code" => "73.11",
                "code"        => "73.11.0",
                "name"        => "73.11.0 - Agenzie pubblicitarie",
            ],
            [
                "parent_code" => "73.11.0",
                "code"        => "73.11.01",
                "name"        => "73.11.01 - Ideazione di campagne pubblicitarie",
            ],
            [
                "parent_code" => "73.11.0",
                "code"        => "73.11.02",
                "name"        => "73.11.02 - Conduzione di campagne di marketing e altri servizi pubblicitari",
            ],
            [
                "parent_code" => "73.1",
                "code"        => "73.12",
                "name"        => "73.12 - Attività delle concessionarie e degli altri intermediari di servizi pubblicitari",
            ],
            [
                "parent_code" => "73.12",
                "code"        => "73.12.0",
                "name"        => "73.12.0 - Attività delle concessionarie e degli altri intermediari di servizi pubblicitari",
            ],
            [
                "parent_code" => "73.12.0",
                "code"        => "73.12.00",
                "name"        => "73.12.00 - Attività delle concessionarie e degli altri intermediari di servizi pubblicitari",
            ],
            [
                "parent_code" => "73",
                "code"        => "73.2",
                "name"        => "73.2 - RICERCHE DI MERCATO E SONDAGGI DI OPINIONE",
            ],
            [
                "parent_code" => "73.2",
                "code"        => "73.20",
                "name"        => "73.20 - Ricerche di mercato e sondaggi di opinione",
            ],
            [
                "parent_code" => "73.20",
                "code"        => "73.20.0",
                "name"        => "73.20.0 - Ricerche di mercato e sondaggi di opinione",
            ],
            [
                "parent_code" => "73.20.0",
                "code"        => "73.20.00",
                "name"        => "73.20.00 - Ricerche di mercato e sondaggi di opinione",
            ],
            [
                "parent_code" => "M",
                "code"        => "74",
                "name"        => "74 - ALTRE ATTIVITÀ PROFESSIONALI, SCIENTIFICHE E TECNICHE",
            ],
            [
                "parent_code" => "74",
                "code"        => "74.1",
                "name"        => "74.1 - ATTIVITÀ DI DESIGN SPECIALIZZATE",
            ],
            [
                "parent_code" => "74.1",
                "code"        => "74.10",
                "name"        => "74.10 - Attività di design specializzate",
            ],
            [
                "parent_code" => "74.10",
                "code"        => "74.10.1",
                "name"        => "74.10.1 - Attività di design di moda e design industriale",
            ],
            [
                "parent_code" => "74.10.1",
                "code"        => "74.10.10",
                "name"        => "74.10.10 - Attività di design di moda e design industriale",
            ],
            [
                "parent_code" => "74.10",
                "code"        => "74.10.2",
                "name"        => "74.10.2 - Attività dei disegnatori grafici",
            ],
            [
                "parent_code" => "74.10.2",
                "code"        => "74.10.21",
                "name"        => "74.10.21 - Attività dei disegnatori grafici di pagine web",
            ],
            [
                "parent_code" => "74.10.2",
                "code"        => "74.10.29",
                "name"        => "74.10.29 - Altre attività dei disegnatori grafici",
            ],
            [
                "parent_code" => "74.10",
                "code"        => "74.10.3",
                "name"        => "74.10.3 - Attività dei disegnatori tecnici",
            ],
            [
                "parent_code" => "74.10.3",
                "code"        => "74.10.30",
                "name"        => "74.10.30 - Attività dei disegnatori tecnici",
            ],
            [
                "parent_code" => "74.10",
                "code"        => "74.10.9",
                "name"        => "74.10.9 - Altre attività di design",
            ],
            [
                "parent_code" => "74.10.9",
                "code"        => "74.10.90",
                "name"        => "74.10.90 - Altre attività di design",
            ],
            [
                "parent_code" => "74",
                "code"        => "74.2",
                "name"        => "74.2 - ATTIVITÀ FOTOGRAFICHE",
            ],
            [
                "parent_code" => "74.2",
                "code"        => "74.20",
                "name"        => "74.20 - Attività fotografiche",
            ],
            [
                "parent_code" => "74.20",
                "code"        => "74.20.1",
                "name"        => "74.20.1 - Attività di riprese fotografiche",
            ],
            [
                "parent_code" => "74.20.1",
                "code"        => "74.20.11",
                "name"        => "74.20.11 - Attività di fotoreporter",
            ],
            [
                "parent_code" => "74.20.1",
                "code"        => "74.20.12",
                "name"        => "74.20.12 - Attività di riprese aeree nel campo della fotografia",
            ],
            [
                "parent_code" => "74.20.1",
                "code"        => "74.20.19",
                "name"        => "74.20.19 - Altre attività di riprese fotografiche",
            ],
            [
                "parent_code" => "74.20",
                "code"        => "74.20.2",
                "name"        => "74.20.2 - Laboratori fotografici per lo sviluppo e la stampa",
            ],
            [
                "parent_code" => "74.20.2",
                "code"        => "74.20.20",
                "name"        => "74.20.20 - Laboratori fotografici per lo sviluppo e la stampa",
            ],
            [
                "parent_code" => "74",
                "code"        => "74.3",
                "name"        => "74.3 - TRADUZIONE E INTERPRETARIATO",
            ],
            [
                "parent_code" => "74.3",
                "code"        => "74.30",
                "name"        => "74.30 - Traduzione e interpretariato",
            ],
            [
                "parent_code" => "74.30",
                "code"        => "74.30.0",
                "name"        => "74.30.0 - Traduzione e interpretariato",
            ],
            [
                "parent_code" => "74.30.0",
                "code"        => "74.30.00",
                "name"        => "74.30.00 - Traduzione e interpretariato",
            ],
            [
                "parent_code" => "74",
                "code"        => "74.9",
                "name"        => "74.9 - ALTRE ATTIVITÀ PROFESSIONALI, SCIENTIFICHE E TECNICHE N.C.A.",
            ],
            [
                "parent_code" => "74.9",
                "code"        => "74.90",
                "name"        => "74.90 - Altre attività professionali, scientifiche e tecniche n.c.a.",
            ],
            [
                "parent_code" => "74.90",
                "code"        => "74.90.1",
                "name"        => "74.90.1 - Consulenza agraria",
            ],
            [
                "parent_code" => "74.90.1",
                "code"        => "74.90.11",
                "name"        => "74.90.11 - Consulenza agraria fornita da agronomi",
            ],
            [
                "parent_code" => "74.90.1",
                "code"        => "74.90.12",
                "name"        => "74.90.12 - Consulenza agraria fornita da agrotecnici",
            ],
            [
                "parent_code" => "74.90.1",
                "code"        => "74.90.13",
                "name"        => "74.90.13 - Consulenza agraria fornita da periti agrari",
            ],
            [
                "parent_code" => "74.90.1",
                "code"        => "74.90.14",
                "name"        => "74.90.14 - Consulenza agraria fornita da altri economisti specializzati in agricoltura",
            ],
            [
                "parent_code" => "74.90",
                "code"        => "74.90.2",
                "name"        => "74.90.2 - Consulenza in materia di sicurezza",
            ],
            [
                "parent_code" => "74.90.2",
                "code"        => "74.90.21",
                "name"        => "74.90.21 - Consulenza sulla sicurezza ed igiene dei posti di lavoro",
            ],
            [
                "parent_code" => "74.90.2",
                "code"        => "74.90.29",
                "name"        => "74.90.29 - Altra attività di consulenza in materia di sicurezza",
            ],
            [
                "parent_code" => "74.90",
                "code"        => "74.90.3",
                "name"        => "74.90.3 - Consulenza ambientale e di risparmio energetico",
            ],
            [
                "parent_code" => "74.90.3",
                "code"        => "74.90.31",
                "name"        => "74.90.31 - Attività di consulenza in materia di prevenzione e riduzione dell'inquinamento di aria, acqua e suolo; consulenza in materia di gestione dei rifiuti",
            ],
            [
                "parent_code" => "74.90.3",
                "code"        => "74.90.32",
                "name"        => "74.90.32 - Attività di consulenza in materia di gestione delle risorse energetiche, energie rinnovabili e efficienza energetica",
            ],
            [
                "parent_code" => "74.90.3",
                "code"        => "74.90.33",
                "name"        => "74.90.33 - Attività di consulenza in materia di gestione delle risorse idriche, minerali e altre risorse naturali usate per finalità diverse da quella energetica",
            ],
            [
                "parent_code" => "74.90",
                "code"        => "74.90.9",
                "name"        => "74.90.9 - Altre attività di assistenza e consulenza professionale, scientifica e tecnica n.c.a.",
            ],
            [
                "parent_code" => "74.90.9",
                "code"        => "74.90.91",
                "name"        => "74.90.91 - Attività tecniche svolte da periti industriali",
            ],
            [
                "parent_code" => "74.90.9",
                "code"        => "74.90.92",
                "name"        => "74.90.92 - Attività riguardanti le previsioni meteorologiche",
            ],
            [
                "parent_code" => "74.90.9",
                "code"        => "74.90.93",
                "name"        => "74.90.93 - Altre attività di consulenza tecnica n.c.a.",
            ],
            [
                "parent_code" => "74.90.9",
                "code"        => "74.90.94",
                "name"        => "74.90.94 - Agenzie ed agenti o procuratori per lo spettacolo e lo sport",
            ],
            [
                "parent_code" => "74.90.9",
                "code"        => "74.90.99",
                "name"        => "74.90.99 - Altre attività professionali n.c.a.",
            ],
            [
                "parent_code" => "M",
                "code"        => "75",
                "name"        => "75 - SERVIZI VETERINARI",
            ],
            [
                "parent_code" => "75",
                "code"        => "75.0",
                "name"        => "75.0 - SERVIZI VETERINARI",
            ],
            [
                "parent_code" => "75.0",
                "code"        => "75.00",
                "name"        => "75.00 - Servizi veterinari",
            ],
            [
                "parent_code" => "75.00",
                "code"        => "75.00.0",
                "name"        => "75.00.0 - Servizi veterinari",
            ],
            [
                "parent_code" => "75.00.0",
                "code"        => "75.00.00",
                "name"        => "75.00.00 - Servizi veterinari",
            ],
            [
                "parent_code" => null,
                "code"        => "N",
                "name"        => "N - NOLEGGIO, AGENZIE DI VIAGGIO, SERVIZI DI SUPPORTO ALLE IMPRESE",
            ],
            [
                "parent_code" => "N",
                "code"        => "77",
                "name"        => "77 - ATTIVITÀ DI NOLEGGIO E LEASING OPERATIVO",
            ],
            [
                "parent_code" => "77",
                "code"        => "77.1",
                "name"        => "77.1 - NOLEGGIO DI AUTOVEICOLI",
            ],
            [
                "parent_code" => "77.1",
                "code"        => "77.11",
                "name"        => "77.11 - Noleggio di autovetture ed autoveicoli leggeri",
            ],
            [
                "parent_code" => "77.11",
                "code"        => "77.11.0",
                "name"        => "77.11.0 - Noleggio di autovetture ed autoveicoli leggeri",
            ],
            [
                "parent_code" => "77.11.0",
                "code"        => "77.11.00",
                "name"        => "77.11.00 - Noleggio di autovetture ed autoveicoli leggeri",
            ],
            [
                "parent_code" => "77.1",
                "code"        => "77.12",
                "name"        => "77.12 - Noleggio di autocarri e di altri veicoli pesanti",
            ],
            [
                "parent_code" => "77.12",
                "code"        => "77.12.0",
                "name"        => "77.12.0 - Noleggio di autocarri e di altri veicoli pesanti",
            ],
            [
                "parent_code" => "77.12.0",
                "code"        => "77.12.00",
                "name"        => "77.12.00 - Noleggio di autocarri e di altri veicoli pesanti",
            ],
            [
                "parent_code" => "77",
                "code"        => "77.2",
                "name"        => "77.2 - NOLEGGIO DI BENI PER USO PERSONALE E PER LA CASA",
            ],
            [
                "parent_code" => "77.2",
                "code"        => "77.21",
                "name"        => "77.21 - Noleggio di attrezzature sportive e ricreative",
            ],
            [
                "parent_code" => "77.21",
                "code"        => "77.21.0",
                "name"        => "77.21.0 - Noleggio di attrezzature sportive e ricreative",
            ],
            [
                "parent_code" => "77.21.0",
                "code"        => "77.21.01",
                "name"        => "77.21.01 - Noleggio di biciclette",
            ],
            [
                "parent_code" => "77.21.0",
                "code"        => "77.21.02",
                "name"        => "77.21.02 - Noleggio senza equipaggio di imbarcazioni da diporto (inclusi i pedalò)",
            ],
            [
                "parent_code" => "77.21.0",
                "code"        => "77.21.09",
                "name"        => "77.21.09 - Noleggio di altre attrezzature sportive e ricreative",
            ],
            [
                "parent_code" => "77.2",
                "code"        => "77.22",
                "name"        => "77.22 - Noleggio di videocassette e dischi",
            ],
            [
                "parent_code" => "77.22",
                "code"        => "77.22.0",
                "name"        => "77.22.0 - Noleggio di videocassette, Cd, Dvd e dischi contenenti audiovisivi o videogame",
            ],
            [
                "parent_code" => "77.22.0",
                "code"        => "77.22.00",
                "name"        => "77.22.00 - Noleggio di videocassette, Cd, Dvd e dischi contenenti audiovisivi o videogame",
            ],
            [
                "parent_code" => "77.2",
                "code"        => "77.29",
                "name"        => "77.29 - Noleggio di altri beni per uso personale e domestico (escluse le attrezzature sportive e ricreative)",
            ],
            [
                "parent_code" => "77.29",
                "code"        => "77.29.1",
                "name"        => "77.29.1 - Noleggio di biancheria da tavola, da letto, da bagno e di articoli di vestiario",
            ],
            [
                "parent_code" => "77.29.1",
                "code"        => "77.29.10",
                "name"        => "77.29.10 - Noleggio di biancheria da tavola, da letto, da bagno e di articoli di vestiario",
            ],
            [
                "parent_code" => "77.29",
                "code"        => "77.29.9",
                "name"        => "77.29.9 - Noleggio di altri beni per uso personale e domestico n.c.a. (escluse le attrezzature sportive e ricreative)",
            ],
            [
                "parent_code" => "77.29.9",
                "code"        => "77.29.90",
                "name"        => "77.29.90 - Noleggio di altri beni per uso personale e domestico n.c.a. (escluse le attrezzature sportive e ricreative)",
            ],
            [
                "parent_code" => "77",
                "code"        => "77.3",
                "name"        => "77.3 - NOLEGGIO DI ALTRE MACCHINE, ATTREZZATURE E BENI MATERIALI",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.31",
                "name"        => "77.31 - Noleggio di macchine e attrezzature agricole",
            ],
            [
                "parent_code" => "77.31",
                "code"        => "77.31.0",
                "name"        => "77.31.0 - Noleggio di macchine e attrezzature agricole",
            ],
            [
                "parent_code" => "77.31.0",
                "code"        => "77.31.00",
                "name"        => "77.31.00 - Noleggio di macchine e attrezzature agricole",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.32",
                "name"        => "77.32 - Noleggio di macchine e attrezzature per lavori edili e di genio civile",
            ],
            [
                "parent_code" => "77.32",
                "code"        => "77.32.0",
                "name"        => "77.32.0 - Noleggio di macchine e attrezzature per lavori edili e di genio civile",
            ],
            [
                "parent_code" => "77.32.0",
                "code"        => "77.32.00",
                "name"        => "77.32.00 - Noleggio di macchine e attrezzature per lavori edili e di genio civile",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.33",
                "name"        => "77.33 - Noleggio di macchine e attrezzature per ufficio (inclusi i computer)",
            ],
            [
                "parent_code" => "77.33",
                "code"        => "77.33.0",
                "name"        => "77.33.0 - Noleggio di macchine e attrezzature per ufficio (inclusi i computer)",
            ],
            [
                "parent_code" => "77.33.0",
                "code"        => "77.33.00",
                "name"        => "77.33.00 - Noleggio di macchine e attrezzature per ufficio (inclusi i computer)",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.34",
                "name"        => "77.34 - Noleggio di mezzi di trasporto marittimo e fluviale",
            ],
            [
                "parent_code" => "77.34",
                "code"        => "77.34.0",
                "name"        => "77.34.0 - Noleggio di mezzi di trasporto marittimo e fluviale",
            ],
            [
                "parent_code" => "77.34.0",
                "code"        => "77.34.00",
                "name"        => "77.34.00 - Noleggio di mezzi di trasporto marittimo e fluviale",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.35",
                "name"        => "77.35 - Noleggio di mezzi di trasporto aereo",
            ],
            [
                "parent_code" => "77.35",
                "code"        => "77.35.0",
                "name"        => "77.35.0 - Noleggio di mezzi di trasporto aereo",
            ],
            [
                "parent_code" => "77.35.0",
                "code"        => "77.35.00",
                "name"        => "77.35.00 - Noleggio di mezzi di trasporto aereo",
            ],
            [
                "parent_code" => "77.3",
                "code"        => "77.39",
                "name"        => "77.39 - Noleggio di altre macchine, attrezzature e beni materiali n.c.a.",
            ],
            [
                "parent_code" => "77.39",
                "code"        => "77.39.1",
                "name"        => "77.39.1 - Noleggio di altri mezzi di trasporto terrestri",
            ],
            [
                "parent_code" => "77.39.1",
                "code"        => "77.39.10",
                "name"        => "77.39.10 - Noleggio di altri mezzi di trasporto terrestri",
            ],
            [
                "parent_code" => "77.39",
                "code"        => "77.39.9",
                "name"        => "77.39.9 - Noleggio di altre macchine e attrezzature",
            ],
            [
                "parent_code" => "77.39.9",
                "code"        => "77.39.91",
                "name"        => "77.39.91 - Noleggio di container adibiti ad alloggi o ad uffici",
            ],
            [
                "parent_code" => "77.39.9",
                "code"        => "77.39.92",
                "name"        => "77.39.92 - Noleggio di container per diverse modalità di trasporto",
            ],
            [
                "parent_code" => "77.39.9",
                "code"        => "77.39.93",
                "name"        => "77.39.93 - Noleggio senza operatore di attrezzature di sollevamento e movimentazione merci: carrelli elevatori, pallet eccetera",
            ],
            [
                "parent_code" => "77.39.9",
                "code"        => "77.39.94",
                "name"        => "77.39.94 - Noleggio di strutture ed attrezzature per manifestazioni e spettacoli: impianti luce ed audio senza operatore, palchi, stand ed addobbi luminosi",
            ],
            [
                "parent_code" => "77.39.9",
                "code"        => "77.39.99",
                "name"        => "77.39.99 - Noleggio senza operatore di altre macchine ed attrezzature n.c.a.",
            ],
            [
                "parent_code" => "77",
                "code"        => "77.4",
                "name"        => "77.4 - CONCESSIONE DEI DIRITTI DI SFRUTTAMENTO DI PROPRIETÀ INTELLETTUALE E PRODOTTI SIMILI (ESCLUSE LE OPERE PROTETTE DAL COPYRIGHT)",
            ],
            [
                "parent_code" => "77.4",
                "code"        => "77.40",
                "name"        => "77.40 - Concessione dei diritti di sfruttamento di proprietà intellettuale e prodotti simili (escluse le opere protette dal copyright)",
            ],
            [
                "parent_code" => "77.40",
                "code"        => "77.40.0",
                "name"        => "77.40.0 - Concessione dei diritti di sfruttamento di proprietà intellettuale e prodotti simili (escluse le opere protette dal copyright)",
            ],
            [
                "parent_code" => "77.40.0",
                "code"        => "77.40.00",
                "name"        => "77.40.00 - Concessione dei diritti di sfruttamento di proprietà intellettuale e prodotti simili (escluse le opere protette dal copyright)",
            ],
            [
                "parent_code" => "N",
                "code"        => "78",
                "name"        => "78 - ATTIVITÀ DI RICERCA, SELEZIONE, FORNITURA DI PERSONALE",
            ],
            [
                "parent_code" => "78",
                "code"        => "78.1",
                "name"        => "78.1 - ATTIVITÀ DI AGENZIE DI COLLOCAMENTO",
            ],
            [
                "parent_code" => "78.1",
                "code"        => "78.10",
                "name"        => "78.10 - Attività di agenzie di collocamento",
            ],
            [
                "parent_code" => "78.10",
                "code"        => "78.10.0",
                "name"        => "78.10.0 - Servizi di ricerca, selezione, collocamento e supporto per il ricollocamento di personale",
            ],
            [
                "parent_code" => "78.10.0",
                "code"        => "78.10.00",
                "name"        => "78.10.00 - Servizi di ricerca, selezione, collocamento e supporto per il ricollocamento di personale",
            ],
            [
                "parent_code" => "78",
                "code"        => "78.2",
                "name"        => "78.2 - ATTIVITÀ DELLE AGENZIE DI LAVORO TEMPORANEO (INTERINALE)",
            ],
            [
                "parent_code" => "78.2",
                "code"        => "78.20",
                "name"        => "78.20 - Attività delle agenzie di lavoro temporaneo (interinale)",
            ],
            [
                "parent_code" => "78.20",
                "code"        => "78.20.0",
                "name"        => "78.20.0 - Attività delle agenzie di fornitura di lavoro temporaneo (interinale)",
            ],
            [
                "parent_code" => "78.20.0",
                "code"        => "78.20.00",
                "name"        => "78.20.00 - Attività delle agenzie di fornitura di lavoro temporaneo (interinale)",
            ],
            [
                "parent_code" => "78",
                "code"        => "78.3",
                "name"        => "78.3 - ALTRE ATTIVITÀ DI FORNITURA E GESTIONE DI RISORSE UMANE",
            ],
            [
                "parent_code" => "78.3",
                "code"        => "78.30",
                "name"        => "78.30 - Altre attività di fornitura e gestione di risorse umane",
            ],
            [
                "parent_code" => "78.30",
                "code"        => "78.30.0",
                "name"        => "78.30.0 - Altre attività di fornitura e gestione di risorse umane (staff leasing)",
            ],
            [
                "parent_code" => "78.30.0",
                "code"        => "78.30.00",
                "name"        => "78.30.00 - Altre attività di fornitura e gestione di risorse umane (staff leasing)",
            ],
            [
                "parent_code" => "N",
                "code"        => "79",
                "name"        => "79 - ATTIVITÀ DEI SERVIZI DELLE AGENZIE DI VIAGGIO, DEI TOUR OPERATOR E SERVIZI DI PRENOTAZIONE E ATTIVITÀ CONNESSE",
            ],
            [
                "parent_code" => "79",
                "code"        => "79.1",
                "name"        => "79.1 - ATTIVITÀ DELLE AGENZIE DI VIAGGIO E DEI TOUR OPERATOR",
            ],
            [
                "parent_code" => "79.1",
                "code"        => "79.11",
                "name"        => "79.11 - Attività delle agenzie di viaggio",
            ],
            [
                "parent_code" => "79.11",
                "code"        => "79.11.0",
                "name"        => "79.11.0 - Attività delle agenzie di viaggio",
            ],
            [
                "parent_code" => "79.11.0",
                "code"        => "79.11.00",
                "name"        => "79.11.00 - Attività delle agenzie di viaggio",
            ],
            [
                "parent_code" => "79.1",
                "code"        => "79.12",
                "name"        => "79.12 - Attività dei tour operator",
            ],
            [
                "parent_code" => "79.12",
                "code"        => "79.12.0",
                "name"        => "79.12.0 - Attività dei tour operator",
            ],
            [
                "parent_code" => "79.12.0",
                "code"        => "79.12.00",
                "name"        => "79.12.00 - Attività dei tour operator",
            ],
            [
                "parent_code" => "79",
                "code"        => "79.9",
                "name"        => "79.9 - ALTRI SERVIZI DI PRENOTAZIONE E ATTIVITÀ CONNESSE",
            ],
            [
                "parent_code" => "79.9",
                "code"        => "79.90",
                "name"        => "79.90 - Altri servizi di prenotazione e altre attività di assistenza turistica non svolte dalle agenzie di viaggio",
            ],
            [
                "parent_code" => "79.90",
                "code"        => "79.90.1",
                "name"        => "79.90.1 - Altri servizi di prenotazione e altre attività di assistenza turistica non svolte dalle agenzie di viaggio",
            ],
            [
                "parent_code" => "79.90.1",
                "code"        => "79.90.11",
                "name"        => "79.90.11 - Servizi di biglietteria per eventi teatrali, sportivi ed altri eventi ricreativi e d'intrattenimento",
            ],
            [
                "parent_code" => "79.90.1",
                "code"        => "79.90.19",
                "name"        => "79.90.19 - Altri servizi di prenotazione e altre attività di assistenza turistica non svolte dalle agenzie di viaggio n.c.a.",
            ],
            [
                "parent_code" => "79.90",
                "code"        => "79.90.2",
                "name"        => "79.90.2 - Attività delle guide e degli accompagnatori turistici",
            ],
            [
                "parent_code" => "79.90.2",
                "code"        => "79.90.20",
                "name"        => "79.90.20 - Attività delle guide e degli accompagnatori turistici",
            ],
            [
                "parent_code" => "N",
                "code"        => "80",
                "name"        => "80 - SERVIZI DI VIGILANZA E INVESTIGAZIONE",
            ],
            [
                "parent_code" => "80",
                "code"        => "80.1",
                "name"        => "80.1 - SERVIZI DI VIGILANZA PRIVATA",
            ],
            [
                "parent_code" => "80.1",
                "code"        => "80.10",
                "name"        => "80.10 - Servizi di vigilanza privata",
            ],
            [
                "parent_code" => "80.10",
                "code"        => "80.10.0",
                "name"        => "80.10.0 - Servizi di vigilanza privata",
            ],
            [
                "parent_code" => "80.10.0",
                "code"        => "80.10.00",
                "name"        => "80.10.00 - Servizi di vigilanza privata",
            ],
            [
                "parent_code" => "80",
                "code"        => "80.2",
                "name"        => "80.2 - SERVIZI CONNESSI AI SISTEMI DI VIGILANZA",
            ],
            [
                "parent_code" => "80.2",
                "code"        => "80.20",
                "name"        => "80.20 - Servizi connessi ai sistemi di vigilanza",
            ],
            [
                "parent_code" => "80.20",
                "code"        => "80.20.0",
                "name"        => "80.20.0 - Servizi connessi ai sistemi di vigilanza",
            ],
            [
                "parent_code" => "80.20.0",
                "code"        => "80.20.00",
                "name"        => "80.20.00 - Servizi connessi ai sistemi di vigilanza",
            ],
            [
                "parent_code" => "80",
                "code"        => "80.3",
                "name"        => "80.3 - SERVIZI INVESTIGATIVI PRIVATI",
            ],
            [
                "parent_code" => "80.3",
                "code"        => "80.30",
                "name"        => "80.30 - Servizi investigativi privati",
            ],
            [
                "parent_code" => "80.30",
                "code"        => "80.30.0",
                "name"        => "80.30.0 - Servizi di investigazione privata",
            ],
            [
                "parent_code" => "80.30.0",
                "code"        => "80.30.00",
                "name"        => "80.30.00 - Servizi di investigazione privata",
            ],
            [
                "parent_code" => "N",
                "code"        => "81",
                "name"        => "81 - ATTIVITÀ DI SERVIZI PER EDIFICI E PAESAGGIO",
            ],
            [
                "parent_code" => "81",
                "code"        => "81.1",
                "name"        => "81.1 - SERVIZI INTEGRATI DI GESTIONE AGLI EDIFICI",
            ],
            [
                "parent_code" => "81.1",
                "code"        => "81.10",
                "name"        => "81.10 - Servizi integrati di gestione agli edifici",
            ],
            [
                "parent_code" => "81.10",
                "code"        => "81.10.0",
                "name"        => "81.10.0 - Servizi integrati di gestione agli edifici",
            ],
            [
                "parent_code" => "81.10.0",
                "code"        => "81.10.00",
                "name"        => "81.10.00 - Servizi integrati di gestione agli edifici",
            ],
            [
                "parent_code" => "81",
                "code"        => "81.2",
                "name"        => "81.2 - ATTIVITÀ DI PULIZIA E DISINFESTAZIONE",
            ],
            [
                "parent_code" => "81.2",
                "code"        => "81.21",
                "name"        => "81.21 - Pulizia generale (non specializzata) di edifici",
            ],
            [
                "parent_code" => "81.21",
                "code"        => "81.21.0",
                "name"        => "81.21.0 - Pulizia generale (non specializzata) di edifici",
            ],
            [
                "parent_code" => "81.21.0",
                "code"        => "81.21.00",
                "name"        => "81.21.00 - Pulizia generale (non specializzata) di edifici",
            ],
            [
                "parent_code" => "81.2",
                "code"        => "81.22",
                "name"        => "81.22 - Attività di pulizia specializzata di edifici e di impianti e macchinari industriali",
            ],
            [
                "parent_code" => "81.22",
                "code"        => "81.22.0",
                "name"        => "81.22.0 - Attività di pulizia specializzata di edifici e di impianti e macchinari industriali",
            ],
            [
                "parent_code" => "81.22.0",
                "code"        => "81.22.01",
                "name"        => "81.22.01 - Attività di sterilizzazione di attrezzature medico sanitarie",
            ],
            [
                "parent_code" => "81.22.0",
                "code"        => "81.22.02",
                "name"        => "81.22.02 - Altre attività di pulizia specializzata di edifici e di impianti e macchinari industriali",
            ],
            [
                "parent_code" => "81.2",
                "code"        => "81.29",
                "name"        => "81.29 - Altre attività di pulizia",
            ],
            [
                "parent_code" => "81.29",
                "code"        => "81.29.1",
                "name"        => "81.29.1 - Servizi di disinfestazione",
            ],
            [
                "parent_code" => "81.29.1",
                "code"        => "81.29.10",
                "name"        => "81.29.10 - Servizi di disinfestazione",
            ],
            [
                "parent_code" => "81.29",
                "code"        => "81.29.9",
                "name"        => "81.29.9 - Attività di pulizia n.c.a.",
            ],
            [
                "parent_code" => "81.29.9",
                "code"        => "81.29.91",
                "name"        => "81.29.91 - Pulizia e lavaggio di aree pubbliche, rimozione di neve e ghiaccio",
            ],
            [
                "parent_code" => "81.29.9",
                "code"        => "81.29.99",
                "name"        => "81.29.99 - Altre attività di pulizia n.c.a.",
            ],
            [
                "parent_code" => "81",
                "code"        => "81.3",
                "name"        => "81.3 - CURA E MANUTENZIONE DEL PAESAGGIO",
            ],
            [
                "parent_code" => "81.3",
                "code"        => "81.30",
                "name"        => "81.30 - Cura e manutenzione del paesaggio",
            ],
            [
                "parent_code" => "81.30",
                "code"        => "81.30.0",
                "name"        => "81.30.0 - Cura e manutenzione del paesaggio (inclusi parchi, giardini e aiuole)",
            ],
            [
                "parent_code" => "81.30.0",
                "code"        => "81.30.00",
                "name"        => "81.30.00 - Cura e manutenzione del paesaggio (inclusi parchi, giardini e aiuole)",
            ],
            [
                "parent_code" => "N",
                "code"        => "82",
                "name"        => "82 - ATTIVITÀ DI SUPPORTO PER LE FUNZIONI D'UFFICIO E ALTRI SERVIZI DI SUPPORTO ALLE IMPRESE",
            ],
            [
                "parent_code" => "82",
                "code"        => "82.1",
                "name"        => "82.1 - ATTIVITÀ DI SUPPORTO PER LE FUNZIONI D'UFFICIO",
            ],
            [
                "parent_code" => "82.1",
                "code"        => "82.11",
                "name"        => "82.11 - Servizi integrati di supporto per le funzioni d'ufficio",
            ],
            [
                "parent_code" => "82.11",
                "code"        => "82.11.0",
                "name"        => "82.11.0 - Servizi integrati di supporto per le funzioni d'ufficio; uffici-residence",
            ],
            [
                "parent_code" => "82.11.0",
                "code"        => "82.11.01",
                "name"        => "82.11.01 - Servizi integrati di supporto per le funzioni d'ufficio",
            ],
            [
                "parent_code" => "82.11.0",
                "code"        => "82.11.02",
                "name"        => "82.11.02 - Gestione di uffici temporanei, uffici residence",
            ],
            [
                "parent_code" => "82.1",
                "code"        => "82.19",
                "name"        => "82.19 - Servizi di fotocopiatura, preparazione di documenti e altre attività di supporto specializzate per le funzioni d'ufficio",
            ],
            [
                "parent_code" => "82.19",
                "code"        => "82.19.0",
                "name"        => "82.19.0 - Servizi di fotocopiatura, preparazione di documenti e altre attività di supporto specializzate per le funzioni d'ufficio",
            ],
            [
                "parent_code" => "82.19.0",
                "code"        => "82.19.01",
                "name"        => "82.19.01 - Spedizione di materiale propagandistico, compilazione e gestione di indirizzi",
            ],
            [
                "parent_code" => "82.19.0",
                "code"        => "82.19.09",
                "name"        => "82.19.09 - Servizi di fotocopiatura, preparazione di documenti e altre attività di supporto specializzate per le funzioni d'ufficio",
            ],
            [
                "parent_code" => "82",
                "code"        => "82.2",
                "name"        => "82.2 - ATTIVITÀ DEI CALL CENTER",
            ],
            [
                "parent_code" => "82.2",
                "code"        => "82.20",
                "name"        => "82.20 - Attività dei call center",
            ],
            [
                "parent_code" => "82.20",
                "code"        => "82.20.0",
                "name"        => "82.20.0 - Attività dei call center",
            ],
            [
                "parent_code" => "82.20.0",
                "code"        => "82.20.00",
                "name"        => "82.20.00 - Attività dei call center",
            ],
            [
                "parent_code" => "82",
                "code"        => "82.3",
                "name"        => "82.3 - ORGANIZZAZIONE DI CONVEGNI E FIERE",
            ],
            [
                "parent_code" => "82.3",
                "code"        => "82.30",
                "name"        => "82.30 - Organizzazione di convegni e fiere",
            ],
            [
                "parent_code" => "82.30",
                "code"        => "82.30.0",
                "name"        => "82.30.0 - Organizzazione di convegni e fiere",
            ],
            [
                "parent_code" => "82.30.0",
                "code"        => "82.30.00",
                "name"        => "82.30.00 - Organizzazione di convegni e fiere",
            ],
            [
                "parent_code" => "82",
                "code"        => "82.9",
                "name"        => "82.9 - SERVIZI DI SUPPORTO ALLE IMPRESE N.C.A.",
            ],
            [
                "parent_code" => "82.9",
                "code"        => "82.91",
                "name"        => "82.91 - Attività di agenzie di recupero crediti; agenzie di informazioni commerciali",
            ],
            [
                "parent_code" => "82.91",
                "code"        => "82.91.1",
                "name"        => "82.91.1 - Attività di agenzie di recupero crediti",
            ],
            [
                "parent_code" => "82.91.1",
                "code"        => "82.91.10",
                "name"        => "82.91.10 - Attività di agenzie di recupero crediti",
            ],
            [
                "parent_code" => "82.91",
                "code"        => "82.91.2",
                "name"        => "82.91.2 - Agenzie di informazioni commerciali",
            ],
            [
                "parent_code" => "82.91.2",
                "code"        => "82.91.20",
                "name"        => "82.91.20 - Agenzie di informazioni commerciali",
            ],
            [
                "parent_code" => "82.9",
                "code"        => "82.92",
                "name"        => "82.92 - Attività di imballaggio e confezionamento per conto terzi",
            ],
            [
                "parent_code" => "82.92",
                "code"        => "82.92.1",
                "name"        => "82.92.1 - Imballaggio e confezionamento di generi alimentari",
            ],
            [
                "parent_code" => "82.92.1",
                "code"        => "82.92.10",
                "name"        => "82.92.10 - Imballaggio e confezionamento di generi alimentari",
            ],
            [
                "parent_code" => "82.92",
                "code"        => "82.92.2",
                "name"        => "82.92.2 - Imballaggio e confezionamento di generi non alimentari",
            ],
            [
                "parent_code" => "82.92.2",
                "code"        => "82.92.20",
                "name"        => "82.92.20 - Imballaggio e confezionamento di generi non alimentari",
            ],
            [
                "parent_code" => "82.9",
                "code"        => "82.99",
                "name"        => "82.99 - Altri servizi di supporto alle imprese n.c.a.",
            ],
            [
                "parent_code" => "82.99",
                "code"        => "82.99.1",
                "name"        => "82.99.1 - Imprese di gestione esattoriale",
            ],
            [
                "parent_code" => "82.99.1",
                "code"        => "82.99.10",
                "name"        => "82.99.10 - Imprese di gestione esattoriale",
            ],
            [
                "parent_code" => "82.99",
                "code"        => "82.99.2",
                "name"        => "82.99.2 - Agenzie di distribuzione di libri, giornali e riviste",
            ],
            [
                "parent_code" => "82.99.2",
                "code"        => "82.99.20",
                "name"        => "82.99.20 - Agenzie di distribuzione di libri, giornali e riviste",
            ],
            [
                "parent_code" => "82.99",
                "code"        => "82.99.3",
                "name"        => "82.99.3 - Servizi di gestione di pubblici mercati e pese pubbliche",
            ],
            [
                "parent_code" => "82.99.3",
                "code"        => "82.99.30",
                "name"        => "82.99.30 - Servizi di gestione di pubblici mercati e pese pubbliche",
            ],
            [
                "parent_code" => "82.99",
                "code"        => "82.99.4",
                "name"        => "82.99.4 - Richiesta certificati e disbrigo pratiche",
            ],
            [
                "parent_code" => "82.99.4",
                "code"        => "82.99.40",
                "name"        => "82.99.40 - Richiesta certificati e disbrigo pratiche",
            ],
            [
                "parent_code" => "82.99",
                "code"        => "82.99.9",
                "name"        => "82.99.9 - Altri servizi di sostegno alle imprese",
            ],
            [
                "parent_code" => "82.99.9",
                "code"        => "82.99.91",
                "name"        => "82.99.91 - Servizi di stenotipia",
            ],
            [
                "parent_code" => "82.99.9",
                "code"        => "82.99.99",
                "name"        => "82.99.99 - Altri servizi di sostegno alle imprese n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "O",
                "name"        => "O - AMMINISTRAZIONE PUBBLICA E DIFESA; ASSICURAZIONE SOCIALE OBBLIGATORIA",
            ],
            [
                "parent_code" => "O",
                "code"        => "84",
                "name"        => "84 - AMMINISTRAZIONE PUBBLICA E DIFESA; ASSICURAZIONE SOCIALE OBBLIGATORIA",
            ],
            [
                "parent_code" => "84",
                "code"        => "84.1",
                "name"        => "84.1 - AMMINISTRAZIONE PUBBLICA: AMMINISTRAZIONE GENERALE, ECONOMICA E SOCIALE",
            ],
            [
                "parent_code" => "84.1",
                "code"        => "84.11",
                "name"        => "84.11 - Attività generali di amministrazione pubblica",
            ],
            [
                "parent_code" => "84.11",
                "code"        => "84.11.1",
                "name"        => "84.11.1 - Attività degli organi legislativi ed esecutivi, centrali e locali; amministrazione finanziaria; amministrazioni regionali, provinciali e comunali",
            ],
            [
                "parent_code" => "84.11.1",
                "code"        => "84.11.10",
                "name"        => "84.11.10 - Attività degli organi legislativi ed esecutivi, centrali e locali; amministrazione finanziaria; amministrazioni regionali, provinciali e comunali",
            ],
            [
                "parent_code" => "84.11",
                "code"        => "84.11.2",
                "name"        => "84.11.2 - Attività di pianificazione generale e servizi statistici generali",
            ],
            [
                "parent_code" => "84.11.2",
                "code"        => "84.11.20",
                "name"        => "84.11.20 - Attività di pianificazione generale e servizi statistici generali",
            ],
            [
                "parent_code" => "84.1",
                "code"        => "84.12",
                "name"        => "84.12 - Regolamentazione delle attività relative alla fornitura di servizi di assistenza sanitaria, dell'istruzione, di servizi culturali e ad altri servizi sociali (esclusa l'assicurazione sociale obbligatoria)",
            ],
            [
                "parent_code" => "84.12",
                "code"        => "84.12.1",
                "name"        => "84.12.1 - Regolamentazione dell'attività degli organismi preposti alla sanità",
            ],
            [
                "parent_code" => "84.12.1",
                "code"        => "84.12.10",
                "name"        => "84.12.10 - Regolamentazione dell'attività degli organismi preposti alla sanità",
            ],
            [
                "parent_code" => "84.12",
                "code"        => "84.12.2",
                "name"        => "84.12.2 - Regolamentazione dell'attività degli organismi preposti all'istruzione",
            ],
            [
                "parent_code" => "84.12.2",
                "code"        => "84.12.20",
                "name"        => "84.12.20 - Regolamentazione dell'attività degli organismi preposti all'istruzione",
            ],
            [
                "parent_code" => "84.12",
                "code"        => "84.12.3",
                "name"        => "84.12.3 - Regolamentazione dell'attività degli organismi preposti alla gestione di progetti per l'edilizia abitativa e l'assetto del territorio e per la tutela dell'ambiente",
            ],
            [
                "parent_code" => "84.12.3",
                "code"        => "84.12.30",
                "name"        => "84.12.30 - Regolamentazione dell'attività degli organismi preposti alla gestione di progetti per l'edilizia abitativa e l'assetto del territorio e per la tutela dell'ambiente",
            ],
            [
                "parent_code" => "84.12",
                "code"        => "84.12.4",
                "name"        => "84.12.4 - Regolamentazione dell'attività degli organismi preposti ai servizi ricreativi, culturali e sociali vari",
            ],
            [
                "parent_code" => "84.12.4",
                "code"        => "84.12.40",
                "name"        => "84.12.40 - Regolamentazione dell'attività degli organismi preposti ai servizi ricreativi, culturali e sociali vari",
            ],
            [
                "parent_code" => "84.1",
                "code"        => "84.13",
                "name"        => "84.13 - Regolamentazione delle attività che contribuiscono ad una più efficiente gestione delle attività economiche",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.1",
                "name"        => "84.13.1 - Regolamentazione degli affari concernenti i combustibili e l'energia",
            ],
            [
                "parent_code" => "84.13.1",
                "code"        => "84.13.10",
                "name"        => "84.13.10 - Regolamentazione degli affari concernenti i combustibili e l'energia",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.2",
                "name"        => "84.13.2 - Regolamentazione degli affari e servizi concernenti l'agricoltura, silvicoltura, caccia e pesca",
            ],
            [
                "parent_code" => "84.13.2",
                "code"        => "84.13.20",
                "name"        => "84.13.20 - Regolamentazione degli affari e servizi concernenti l'agricoltura, silvicoltura, caccia e pesca",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.3",
                "name"        => "84.13.3 - Regolamentazione degli affari e dei servizi concernenti le industrie estrattive e le risorse minerarie (eccetto i combustibili), le industrie manifatturiere, le costruzioni e le opere pubbliche ad eccezione delle strade e opere per la navigazione",
            ],
            [
                "parent_code" => "84.13.3",
                "code"        => "84.13.30",
                "name"        => "84.13.30 - Regolamentazione degli affari e dei servizi concernenti le industrie estrattive e le risorse minerarie (eccetto i combustibili), le industrie manifatturiere, le costruzioni e le opere pubbliche ad eccezione delle strade e opere per la navigazione",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.4",
                "name"        => "84.13.4 - Regolamentazione degli affari e servizi concernenti la costruzione di strade",
            ],
            [
                "parent_code" => "84.13.4",
                "code"        => "84.13.40",
                "name"        => "84.13.40 - Regolamentazione degli affari e servizi concernenti la costruzione di strade",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.5",
                "name"        => "84.13.5 - Regolamentazione degli affari e servizi concernenti la costruzione di opere per la navigazione interna e marittima",
            ],
            [
                "parent_code" => "84.13.5",
                "code"        => "84.13.50",
                "name"        => "84.13.50 - Regolamentazione degli affari e servizi concernenti la costruzione di opere per la navigazione interna e marittima",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.6",
                "name"        => "84.13.6 - Regolamentazione degli affari e servizi concernenti i trasporti e le comunicazioni",
            ],
            [
                "parent_code" => "84.13.6",
                "code"        => "84.13.60",
                "name"        => "84.13.60 - Regolamentazione degli affari e servizi concernenti i trasporti e le comunicazioni",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.7",
                "name"        => "84.13.7 - Regolamentazione degli affari e servizi concernenti il commercio interno",
            ],
            [
                "parent_code" => "84.13.7",
                "code"        => "84.13.70",
                "name"        => "84.13.70 - Regolamentazione degli affari e servizi concernenti il commercio interno",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.8",
                "name"        => "84.13.8 - Regolamentazione degli affari e servizi concernenti il turismo",
            ],
            [
                "parent_code" => "84.13.8",
                "code"        => "84.13.80",
                "name"        => "84.13.80 - Regolamentazione degli affari e servizi concernenti il turismo",
            ],
            [
                "parent_code" => "84.13",
                "code"        => "84.13.9",
                "name"        => "84.13.9 - Regolamentazione di altri affari e servizi economici",
            ],
            [
                "parent_code" => "84.13.9",
                "code"        => "84.13.90",
                "name"        => "84.13.90 - Regolamentazione di altri affari e servizi economici",
            ],
            [
                "parent_code" => "84",
                "code"        => "84.2",
                "name"        => "84.2 - SERVIZI COLLETTIVI DELLE AMMINISTRAZIONI PUBBLICHE",
            ],
            [
                "parent_code" => "84.2",
                "code"        => "84.21",
                "name"        => "84.21 - Affari esteri",
            ],
            [
                "parent_code" => "84.21",
                "code"        => "84.21.0",
                "name"        => "84.21.0 - Affari esteri",
            ],
            [
                "parent_code" => "84.21.0",
                "code"        => "84.21.00",
                "name"        => "84.21.00 - Affari esteri",
            ],
            [
                "parent_code" => "84.2",
                "code"        => "84.22",
                "name"        => "84.22 - Difesa nazionale",
            ],
            [
                "parent_code" => "84.22",
                "code"        => "84.22.0",
                "name"        => "84.22.0 - Difesa nazionale",
            ],
            [
                "parent_code" => "84.22.0",
                "code"        => "84.22.00",
                "name"        => "84.22.00 - Difesa nazionale",
            ],
            [
                "parent_code" => "84.2",
                "code"        => "84.23",
                "name"        => "84.23 - Giustizia ed attività giudiziarie",
            ],
            [
                "parent_code" => "84.23",
                "code"        => "84.23.0",
                "name"        => "84.23.0 - Giustizia ed attività giudiziarie",
            ],
            [
                "parent_code" => "84.23.0",
                "code"        => "84.23.00",
                "name"        => "84.23.00 - Giustizia ed attività giudiziarie",
            ],
            [
                "parent_code" => "84.2",
                "code"        => "84.24",
                "name"        => "84.24 - Ordine pubblico e sicurezza nazionale",
            ],
            [
                "parent_code" => "84.24",
                "code"        => "84.24.0",
                "name"        => "84.24.0 - Ordine pubblico e sicurezza nazionale",
            ],
            [
                "parent_code" => "84.24.0",
                "code"        => "84.24.00",
                "name"        => "84.24.00 - Ordine pubblico e sicurezza nazionale",
            ],
            [
                "parent_code" => "84.2",
                "code"        => "84.25",
                "name"        => "84.25 - Attività dei vigili del fuoco e della protezione civile",
            ],
            [
                "parent_code" => "84.25",
                "code"        => "84.25.1",
                "name"        => "84.25.1 - Attività dei vigili del fuoco",
            ],
            [
                "parent_code" => "84.25.1",
                "code"        => "84.25.10",
                "name"        => "84.25.10 - Attività dei vigili del fuoco",
            ],
            [
                "parent_code" => "84.25",
                "code"        => "84.25.2",
                "name"        => "84.25.2 - Attività di protezione civile",
            ],
            [
                "parent_code" => "84.25.2",
                "code"        => "84.25.20",
                "name"        => "84.25.20 - Attività di protezione civile",
            ],
            [
                "parent_code" => "84",
                "code"        => "84.3",
                "name"        => "84.3 - ASSICURAZIONE SOCIALE OBBLIGATORIA",
            ],
            [
                "parent_code" => "84.3",
                "code"        => "84.30",
                "name"        => "84.30 - Assicurazione sociale obbligatoria",
            ],
            [
                "parent_code" => "84.30",
                "code"        => "84.30.0",
                "name"        => "84.30.0 - Assicurazione sociale obbligatoria",
            ],
            [
                "parent_code" => "84.30.0",
                "code"        => "84.30.00",
                "name"        => "84.30.00 - Assicurazione sociale obbligatoria",
            ],
            [
                "parent_code" => null,
                "code"        => "P",
                "name"        => "P - ISTRUZIONE",
            ],
            [
                "parent_code" => "P",
                "code"        => "85",
                "name"        => "85 - ISTRUZIONE",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.1",
                "name"        => "85.1 - ISTRUZIONE PRESCOLASTICA",
            ],
            [
                "parent_code" => "85.1",
                "code"        => "85.10",
                "name"        => "85.10 - Istruzione prescolastica",
            ],
            [
                "parent_code" => "85.10",
                "code"        => "85.10.0",
                "name"        => "85.10.0 - Istruzione di grado preparatorio: scuole dell'infanzia, scuole speciali collegate a quelle primarie",
            ],
            [
                "parent_code" => "85.10.0",
                "code"        => "85.10.00",
                "name"        => "85.10.00 - Istruzione di grado preparatorio: scuole dell'infanzia, scuole speciali collegate a quelle primarie",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.2",
                "name"        => "85.2 - ISTRUZIONE PRIMARIA",
            ],
            [
                "parent_code" => "85.2",
                "code"        => "85.20",
                "name"        => "85.20 - Istruzione primaria",
            ],
            [
                "parent_code" => "85.20",
                "code"        => "85.20.0",
                "name"        => "85.20.0 - Istruzione primaria: scuole elementari",
            ],
            [
                "parent_code" => "85.20.0",
                "code"        => "85.20.00",
                "name"        => "85.20.00 - Istruzione primaria: scuole elementari",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.3",
                "name"        => "85.3 - ISTRUZIONE SECONDARIA",
            ],
            [
                "parent_code" => "85.3",
                "code"        => "85.31",
                "name"        => "85.31 - Istruzione secondaria di formazione generale",
            ],
            [
                "parent_code" => "85.31",
                "code"        => "85.31.1",
                "name"        => "85.31.1 - Istruzione secondaria di primo grado: scuole medie",
            ],
            [
                "parent_code" => "85.31.1",
                "code"        => "85.31.10",
                "name"        => "85.31.10 - Istruzione secondaria di primo grado: scuole medie",
            ],
            [
                "parent_code" => "85.31",
                "code"        => "85.31.2",
                "name"        => "85.31.2 - Istruzione secondaria di secondo grado di formazione generale: licei",
            ],
            [
                "parent_code" => "85.31.2",
                "code"        => "85.31.20",
                "name"        => "85.31.20 - Istruzione secondaria di secondo grado di formazione generale: licei",
            ],
            [
                "parent_code" => "85.3",
                "code"        => "85.32",
                "name"        => "85.32 - Istruzione secondaria tecnica e professionale",
            ],
            [
                "parent_code" => "85.32",
                "code"        => "85.32.0",
                "name"        => "85.32.0 - Istruzione secondaria di secondo grado di formazione tecnica, professionale e artistica (istituti tecnici, professionali, artistici eccetera)",
            ],
            [
                "parent_code" => "85.32.0",
                "code"        => "85.32.01",
                "name"        => "85.32.01 - Scuole di vela e navigazione che rilasciano brevetti o patenti commerciali",
            ],
            [
                "parent_code" => "85.32.0",
                "code"        => "85.32.02",
                "name"        => "85.32.02 - Scuole di volo che rilasciano brevetti o patenti commerciali",
            ],
            [
                "parent_code" => "85.32.0",
                "code"        => "85.32.03",
                "name"        => "85.32.03 - Scuole di guida professionale per autisti, ad esempio di autocarri, di autobus e di pullman",
            ],
            [
                "parent_code" => "85.32.0",
                "code"        => "85.32.09",
                "name"        => "85.32.09 - Altra istruzione secondaria di secondo grado di formazione tecnica, professionale e artistica",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.4",
                "name"        => "85.4 - ISTRUZIONE POST-SECONDARIA UNIVERSITARIA E NON UNIVERSITARIA",
            ],
            [
                "parent_code" => "85.4",
                "code"        => "85.41",
                "name"        => "85.41 - Istruzione post-secondaria non universitaria",
            ],
            [
                "parent_code" => "85.41",
                "code"        => "85.41.0",
                "name"        => "85.41.0 - Istruzione e formazione tecnica superiore (IFTS)",
            ],
            [
                "parent_code" => "85.41.0",
                "code"        => "85.41.00",
                "name"        => "85.41.00 - Istruzione e formazione tecnica superiore (IFTS)",
            ],
            [
                "parent_code" => "85.4",
                "code"        => "85.42",
                "name"        => "85.42 - Istruzione universitaria e post-universitaria; accademie e conservatori",
            ],
            [
                "parent_code" => "85.42",
                "code"        => "85.42.0",
                "name"        => "85.42.0 - Istruzione universitaria e post-universitaria; accademie e conservatori",
            ],
            [
                "parent_code" => "85.42.0",
                "code"        => "85.42.00",
                "name"        => "85.42.00 - Istruzione universitaria e post-universitaria; accademie e conservatori",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.5",
                "name"        => "85.5 - ALTRI SERVIZI DI ISTRUZIONE",
            ],
            [
                "parent_code" => "85.5",
                "code"        => "85.51",
                "name"        => "85.51 - Corsi sportivi e ricreativi",
            ],
            [
                "parent_code" => "85.51",
                "code"        => "85.51.0",
                "name"        => "85.51.0 - Corsi sportivi e ricreativi",
            ],
            [
                "parent_code" => "85.51.0",
                "code"        => "85.51.00",
                "name"        => "85.51.00 - Corsi sportivi e ricreativi",
            ],
            [
                "parent_code" => "85.5",
                "code"        => "85.52",
                "name"        => "85.52 - Formazione culturale",
            ],
            [
                "parent_code" => "85.52",
                "code"        => "85.52.0",
                "name"        => "85.52.0 - Formazione culturale",
            ],
            [
                "parent_code" => "85.52.0",
                "code"        => "85.52.01",
                "name"        => "85.52.01 - Corsi di danza",
            ],
            [
                "parent_code" => "85.52.0",
                "code"        => "85.52.09",
                "name"        => "85.52.09 - Altra formazione culturale",
            ],
            [
                "parent_code" => "85.5",
                "code"        => "85.53",
                "name"        => "85.53 - Attività delle scuole guida",
            ],
            [
                "parent_code" => "85.53",
                "code"        => "85.53.0",
                "name"        => "85.53.0 - Autoscuole, scuole di pilotaggio e nautiche",
            ],
            [
                "parent_code" => "85.53.0",
                "code"        => "85.53.00",
                "name"        => "85.53.00 - Autoscuole, scuole di pilotaggio e nautiche",
            ],
            [
                "parent_code" => "85.5",
                "code"        => "85.59",
                "name"        => "85.59 - Servizi di istruzione n.c.a.",
            ],
            [
                "parent_code" => "85.59",
                "code"        => "85.59.1",
                "name"        => "85.59.1 - Università popolare",
            ],
            [
                "parent_code" => "85.59.1",
                "code"        => "85.59.10",
                "name"        => "85.59.10 - Università popolare",
            ],
            [
                "parent_code" => "85.59",
                "code"        => "85.59.2",
                "name"        => "85.59.2 - Corsi di formazione e corsi di aggiornamento professionale",
            ],
            [
                "parent_code" => "85.59.2",
                "code"        => "85.59.20",
                "name"        => "85.59.20 - Corsi di formazione e corsi di aggiornamento professionale",
            ],
            [
                "parent_code" => "85.59",
                "code"        => "85.59.3",
                "name"        => "85.59.3 - Scuole e corsi di lingua",
            ],
            [
                "parent_code" => "85.59.3",
                "code"        => "85.59.30",
                "name"        => "85.59.30 - Scuole e corsi di lingua",
            ],
            [
                "parent_code" => "85.59",
                "code"        => "85.59.9",
                "name"        => "85.59.9 - Altri servizi di istruzione n.c.a.",
            ],
            [
                "parent_code" => "85.59.9",
                "code"        => "85.59.90",
                "name"        => "85.59.90 - Altri servizi di istruzione n.c.a.",
            ],
            [
                "parent_code" => "85",
                "code"        => "85.6",
                "name"        => "85.6 - ATTIVITÀ DI SUPPORTO ALL'ISTRUZIONE",
            ],
            [
                "parent_code" => "85.6",
                "code"        => "85.60",
                "name"        => "85.60 - Attività di supporto all'istruzione",
            ],
            [
                "parent_code" => "85.60",
                "code"        => "85.60.0",
                "name"        => "85.60.0 - Attività di supporto all'istruzione",
            ],
            [
                "parent_code" => "85.60.0",
                "code"        => "85.60.01",
                "name"        => "85.60.01 - Consulenza scolastica e servizi di orientamento scolastico",
            ],
            [
                "parent_code" => "85.60.0",
                "code"        => "85.60.09",
                "name"        => "85.60.09 - Altre attività di supporto all'istruzione",
            ],
            [
                "parent_code" => null,
                "code"        => "Q",
                "name"        => "Q - SANITÀ E ASSISTENZA SOCIALE",
            ],
            [
                "parent_code" => "Q",
                "code"        => "86",
                "name"        => "86 - ASSISTENZA SANITARIA",
            ],
            [
                "parent_code" => "86",
                "code"        => "86.1",
                "name"        => "86.1 - SERVIZI OSPEDALIERI",
            ],
            [
                "parent_code" => "86.1",
                "code"        => "86.10",
                "name"        => "86.10 - Servizi ospedalieri",
            ],
            [
                "parent_code" => "86.10",
                "code"        => "86.10.1",
                "name"        => "86.10.1 - Ospedali e case di cura generici",
            ],
            [
                "parent_code" => "86.10.1",
                "code"        => "86.10.10",
                "name"        => "86.10.10 - Ospedali e case di cura generici",
            ],
            [
                "parent_code" => "86.10",
                "code"        => "86.10.2",
                "name"        => "86.10.2 - Ospedali e case di cura specialistici",
            ],
            [
                "parent_code" => "86.10.2",
                "code"        => "86.10.20",
                "name"        => "86.10.20 - Ospedali e case di cura specialistici",
            ],
            [
                "parent_code" => "86.10",
                "code"        => "86.10.3",
                "name"        => "86.10.3 - Istituti, cliniche e policlinici universitari",
            ],
            [
                "parent_code" => "86.10.3",
                "code"        => "86.10.30",
                "name"        => "86.10.30 - Istituti, cliniche e policlinici universitari",
            ],
            [
                "parent_code" => "86.10",
                "code"        => "86.10.4",
                "name"        => "86.10.4 - Ospedali e case di cura per lunga degenza",
            ],
            [
                "parent_code" => "86.10.4",
                "code"        => "86.10.40",
                "name"        => "86.10.40 - Ospedali e case di cura per lunga degenza",
            ],
            [
                "parent_code" => "86",
                "code"        => "86.2",
                "name"        => "86.2 - SERVIZI DEGLI STUDI MEDICI E ODONTOIATRICI",
            ],
            [
                "parent_code" => "86.2",
                "code"        => "86.21",
                "name"        => "86.21 - Servizi degli studi medici di medicina generale",
            ],
            [
                "parent_code" => "86.21",
                "code"        => "86.21.0",
                "name"        => "86.21.0 - Servizi degli studi medici di medicina generale",
            ],
            [
                "parent_code" => "86.21.0",
                "code"        => "86.21.00",
                "name"        => "86.21.00 - Servizi degli studi medici di medicina generale",
            ],
            [
                "parent_code" => "86.2",
                "code"        => "86.22",
                "name"        => "86.22 - Servizi degli studi medici specialistici",
            ],
            [
                "parent_code" => "86.22",
                "code"        => "86.22.0",
                "name"        => "86.22.0 - Studi medici specialistici e poliambulatori",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.01",
                "name"        => "86.22.01 - Prestazioni sanitarie svolte da chirurghi",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.02",
                "name"        => "86.22.02 - Ambulatori e poliambulatori del Servizio Sanitario Nazionale",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.03",
                "name"        => "86.22.03 - Attività dei centri di radioterapia",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.04",
                "name"        => "86.22.04 - Attività dei centri di dialisi",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.05",
                "name"        => "86.22.05 - Studi di omeopatia e di agopuntura",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.06",
                "name"        => "86.22.06 - Centri di medicina estetica",
            ],
            [
                "parent_code" => "86.22.0",
                "code"        => "86.22.09",
                "name"        => "86.22.09 - Altri studi medici specialistici e poliambulatori",
            ],
            [
                "parent_code" => "86.2",
                "code"        => "86.23",
                "name"        => "86.23 - Attività degli studi odontoiatrici",
            ],
            [
                "parent_code" => "86.23",
                "code"        => "86.23.0",
                "name"        => "86.23.0 - Attività degli studi odontoiatrici",
            ],
            [
                "parent_code" => "86.23.0",
                "code"        => "86.23.00",
                "name"        => "86.23.00 - Attività degli studi odontoiatrici",
            ],
            [
                "parent_code" => "86",
                "code"        => "86.9",
                "name"        => "86.9 - ALTRI SERVIZI DI ASSISTENZA SANITARIA",
            ],
            [
                "parent_code" => "86.9",
                "code"        => "86.90",
                "name"        => "86.90 - Altri servizi di assistenza sanitaria",
            ],
            [
                "parent_code" => "86.90",
                "code"        => "86.90.1",
                "name"        => "86.90.1 - Laboratori di analisi cliniche, laboratori radiografici ed altri centri di diagnostica per immagini",
            ],
            [
                "parent_code" => "86.90.1",
                "code"        => "86.90.11",
                "name"        => "86.90.11 - Laboratori radiografici",
            ],
            [
                "parent_code" => "86.90.1",
                "code"        => "86.90.12",
                "name"        => "86.90.12 - Laboratori di analisi cliniche",
            ],
            [
                "parent_code" => "86.90.1",
                "code"        => "86.90.13",
                "name"        => "86.90.13 - Laboratori di igiene e profilassi",
            ],
            [
                "parent_code" => "86.90",
                "code"        => "86.90.2",
                "name"        => "86.90.2 - Attività paramediche indipendenti",
            ],
            [
                "parent_code" => "86.90.2",
                "code"        => "86.90.21",
                "name"        => "86.90.21 - Fisioterapia",
            ],
            [
                "parent_code" => "86.90.2",
                "code"        => "86.90.29",
                "name"        => "86.90.29 - Altre attività paramediche indipendenti n.c.a.",
            ],
            [
                "parent_code" => "86.90",
                "code"        => "86.90.3",
                "name"        => "86.90.3 - Attività svolta da psicologi",
            ],
            [
                "parent_code" => "86.90.3",
                "code"        => "86.90.30",
                "name"        => "86.90.30 - Attività svolta da psicologi",
            ],
            [
                "parent_code" => "86.90",
                "code"        => "86.90.4",
                "name"        => "86.90.4 - Servizi di ambulanza, delle banche del sangue, degli ambulatori tricologici e altri servizi sanitari n.c.a.",
            ],
            [
                "parent_code" => "86.90.4",
                "code"        => "86.90.41",
                "name"        => "86.90.41 - Attività degli ambulatori tricologici",
            ],
            [
                "parent_code" => "86.90.4",
                "code"        => "86.90.42",
                "name"        => "86.90.42 - Servizi di ambulanza, delle banche del sangue e altri servizi sanitari n.c.a.",
            ],
            [
                "parent_code" => "Q",
                "code"        => "87",
                "name"        => "87 - SERVIZI DI ASSISTENZA SOCIALE RESIDENZIALE",
            ],
            [
                "parent_code" => "87",
                "code"        => "87.1",
                "name"        => "87.1 - STRUTTURE DI ASSISTENZA INFERMIERISTICA RESIDENZIALE",
            ],
            [
                "parent_code" => "87.1",
                "code"        => "87.10",
                "name"        => "87.10 - Strutture di assistenza infermieristica residenziale",
            ],
            [
                "parent_code" => "87.10",
                "code"        => "87.10.0",
                "name"        => "87.10.0 - Strutture di assistenza infermieristica residenziale per anziani",
            ],
            [
                "parent_code" => "87.10.0",
                "code"        => "87.10.00",
                "name"        => "87.10.00 - Strutture di assistenza infermieristica residenziale per anziani",
            ],
            [
                "parent_code" => "87",
                "code"        => "87.2",
                "name"        => "87.2 - STRUTTURE DI ASSISTENZA RESIDENZIALE PER PERSONE AFFETTE DA RITARDI MENTALI, DISTURBI MENTALI O CHE ABUSANO DI SOSTANZE STUPEFACENTI",
            ],
            [
                "parent_code" => "87.2",
                "code"        => "87.20",
                "name"        => "87.20 - Strutture di assistenza residenziale per persone affette da ritardi mentali, disturbi mentali o che abusano di sostanze stupefacenti",
            ],
            [
                "parent_code" => "87.20",
                "code"        => "87.20.0",
                "name"        => "87.20.0 - Strutture di assistenza residenziale per persone affette da ritardi mentali, disturbi mentali o che abusano di sostanze stupefacenti",
            ],
            [
                "parent_code" => "87.20.0",
                "code"        => "87.20.00",
                "name"        => "87.20.00 - Strutture di assistenza residenziale per persone affette da ritardi mentali, disturbi mentali o che abusano di sostanze stupefacenti",
            ],
            [
                "parent_code" => "87",
                "code"        => "87.3",
                "name"        => "87.3 - STRUTTURE DI ASSISTENZA RESIDENZIALE PER ANZIANI E DISABILI",
            ],
            [
                "parent_code" => "87.3",
                "code"        => "87.30",
                "name"        => "87.30 - Strutture di assistenza residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "87.30",
                "code"        => "87.30.0",
                "name"        => "87.30.0 - Strutture di assistenza residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "87.30.0",
                "code"        => "87.30.00",
                "name"        => "87.30.00 - Strutture di assistenza residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "87",
                "code"        => "87.9",
                "name"        => "87.9 - ALTRE STRUTTURE DI ASSISTENZA SOCIALE RESIDENZIALE",
            ],
            [
                "parent_code" => "87.9",
                "code"        => "87.90",
                "name"        => "87.90 - Altre strutture di assistenza sociale residenziale",
            ],
            [
                "parent_code" => "87.90",
                "code"        => "87.90.0",
                "name"        => "87.90.0 - Altre strutture di assistenza sociale residenziale",
            ],
            [
                "parent_code" => "87.90.0",
                "code"        => "87.90.00",
                "name"        => "87.90.00 - Altre strutture di assistenza sociale residenziale",
            ],
            [
                "parent_code" => "Q",
                "code"        => "88",
                "name"        => "88 - ASSISTENZA SOCIALE NON RESIDENZIALE",
            ],
            [
                "parent_code" => "88.1",
                "code"        => "88.1",
                "name"        => "88.1  - ASSISTENZA SOCIALE NON RESIDENZIALE PER ANZIANI E DISABILI",
            ],
            [
                "parent_code" => "88.1",
                "code"        => "88.10",
                "name"        => "88.10 - Assistenza sociale non residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "88.10",
                "code"        => "88.10.0",
                "name"        => "88.10.0 - Assistenza sociale non residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "88.10.0",
                "code"        => "88.10.00",
                "name"        => "88.10.00 - Assistenza sociale non residenziale per anziani e disabili",
            ],
            [
                "parent_code" => "88",
                "code"        => "88.9",
                "name"        => "88.9 - ALTRE ATTIVITÀ DI ASSISTENZA SOCIALE NON RESIDENZIALE",
            ],
            [
                "parent_code" => "88.9",
                "code"        => "88.91",
                "name"        => "88.91 - Servizi di asili nido; assistenza diurna per minori disabili",
            ],
            [
                "parent_code" => "88.91",
                "code"        => "88.91.0",
                "name"        => "88.91.0 - Servizi di asili nido; assistenza diurna per minori disabili",
            ],
            [
                "parent_code" => "88.91.0",
                "code"        => "88.91.00",
                "name"        => "88.91.00 - Servizi di asili nido; assistenza diurna per minori disabili",
            ],
            [
                "parent_code" => "88.9",
                "code"        => "88.99",
                "name"        => "88.99 - Altre attività di assistenza sociale non residenziale n.c.a.",
            ],
            [
                "parent_code" => "88.99",
                "code"        => "88.99.0",
                "name"        => "88.99.0 - Altre attività di assistenza sociale non residenziale n.c.a.",
            ],
            [
                "parent_code" => "88.99.0",
                "code"        => "88.99.00",
                "name"        => "88.99.00 - Altre attività di assistenza sociale non residenziale n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "R",
                "name"        => "R - ATTIVITÀ ARTISTICHE, SPORTIVE, DI INTRATTENIMENTO E DIVERTIMENTO",
            ],
            [
                "parent_code" => "R",
                "code"        => "90",
                "name"        => "90 - ATTIVITÀ CREATIVE, ARTISTICHE E DI INTRATTENIMENTO",
            ],
            [
                "parent_code" => "90",
                "code"        => "90.0",
                "name"        => "90.0 - ATTIVITÀ CREATIVE, ARTISTICHE E DI INTRATTENIMENTO",
            ],
            [
                "parent_code" => "90.0",
                "code"        => "90.01",
                "name"        => "90.01 - Rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.01",
                "code"        => "90.01.0",
                "name"        => "90.01.0 - Rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.01.0",
                "code"        => "90.01.01",
                "name"        => "90.01.01 - Attività nel campo della recitazione",
            ],
            [
                "parent_code" => "90.01.0",
                "code"        => "90.01.09",
                "name"        => "90.01.09 - Altre rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.0",
                "code"        => "90.02",
                "name"        => "90.02 - Attività di supporto alle rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.02",
                "code"        => "90.02.0",
                "name"        => "90.02.0 - Attività di supporto alle rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.02.0",
                "code"        => "90.02.01",
                "name"        => "90.02.01 - Noleggio con operatore di strutture ed attrezzature per manifestazioni e spettacoli",
            ],
            [
                "parent_code" => "90.02.0",
                "code"        => "90.02.02",
                "name"        => "90.02.02 - Attività nel campo della regia",
            ],
            [
                "parent_code" => "90.02.0",
                "code"        => "90.02.09",
                "name"        => "90.02.09 - Altre attività di supporto alle rappresentazioni artistiche",
            ],
            [
                "parent_code" => "90.0",
                "code"        => "90.03",
                "name"        => "90.03 - Creazioni artistiche e letterarie",
            ],
            [
                "parent_code" => "90.03",
                "code"        => "90.03.0",
                "name"        => "90.03.0 - Creazioni artistiche e letterarie",
            ],
            [
                "parent_code" => "90.03.0",
                "code"        => "90.03.01",
                "name"        => "90.03.01 - Attività dei giornalisti indipendenti",
            ],
            [
                "parent_code" => "90.03.0",
                "code"        => "90.03.02",
                "name"        => "90.03.02 - Attività di conservazione e restauro di opere d'arte",
            ],
            [
                "parent_code" => "90.03.0",
                "code"        => "90.03.09",
                "name"        => "90.03.09 - Altre creazioni artistiche e letterarie",
            ],
            [
                "parent_code" => "90.0",
                "code"        => "90.04",
                "name"        => "90.04 - Gestione di strutture artistiche",
            ],
            [
                "parent_code" => "90.04",
                "code"        => "90.04.0",
                "name"        => "90.04.0 - Gestione di teatri, sale da concerto e altre strutture artistiche",
            ],
            [
                "parent_code" => "90.04.0",
                "code"        => "90.04.00",
                "name"        => "90.04.00 - Gestione di teatri, sale da concerto e altre strutture artistiche",
            ],
            [
                "parent_code" => "R",
                "code"        => "91",
                "name"        => "91 - ATTIVITÀ DI BIBLIOTECHE, ARCHIVI, MUSEI ED ALTRE ATTIVITÀ CULTURALI",
            ],
            [
                "parent_code" => "91",
                "code"        => "91.0",
                "name"        => "91.0 - ATTIVITÀ DI BIBLIOTECHE, ARCHIVI, MUSEI ED ALTRE ATTIVITÀ CULTURALI",
            ],
            [
                "parent_code" => "91.0",
                "code"        => "91.01",
                "name"        => "91.01 - Attività di biblioteche ed archivi",
            ],
            [
                "parent_code" => "91.01",
                "code"        => "91.01.0",
                "name"        => "91.01.0 - Attività di biblioteche ed archivi",
            ],
            [
                "parent_code" => "91.01.0",
                "code"        => "91.01.00",
                "name"        => "91.01.00 - Attività di biblioteche ed archivi",
            ],
            [
                "parent_code" => "91.0",
                "code"        => "91.02",
                "name"        => "91.02 - Attività di musei",
            ],
            [
                "parent_code" => "91.02",
                "code"        => "91.02.0",
                "name"        => "91.02.0 - Attività di musei",
            ],
            [
                "parent_code" => "91.02.0",
                "code"        => "91.02.00",
                "name"        => "91.02.00 - Attività di musei",
            ],
            [
                "parent_code" => "91.0",
                "code"        => "91.03",
                "name"        => "91.03 - Gestione di luoghi e monumenti storici e attrazioni simili",
            ],
            [
                "parent_code" => "91.03",
                "code"        => "91.03.0",
                "name"        => "91.03.0 - Gestione di luoghi e monumenti storici e attrazioni simili",
            ],
            [
                "parent_code" => "91.03.0",
                "code"        => "91.03.00",
                "name"        => "91.03.00 - Gestione di luoghi e monumenti storici e attrazioni simili",
            ],
            [
                "parent_code" => "91.0",
                "code"        => "91.04",
                "name"        => "91.04 - Attività degli orti botanici, dei giardini zoologici e delle riserve naturali",
            ],
            [
                "parent_code" => "91.04",
                "code"        => "91.04.0",
                "name"        => "91.04.0 - Attività degli orti botanici, dei giardini zoologici e delle riserve naturali",
            ],
            [
                "parent_code" => "91.04.0",
                "code"        => "91.04.00",
                "name"        => "91.04.00 - Attività degli orti botanici, dei giardini zoologici e delle riserve naturali",
            ],
            [
                "parent_code" => "R",
                "code"        => "92",
                "name"        => "92 - ATTIVITÀ RIGUARDANTI LE LOTTERIE, LE SCOMMESSE, LE CASE DA GIOCO",
            ],
            [
                "parent_code" => "92",
                "code"        => "92.0",
                "name"        => "92.0 - ATTIVITÀ RIGUARDANTI LE LOTTERIE, LE SCOMMESSE, LE CASE DA GIOCO",
            ],
            [
                "parent_code" => "92.0",
                "code"        => "92.00",
                "name"        => "92.00 - Attività riguardanti le lotterie, le scommesse, le case da gioco",
            ],
            [
                "parent_code" => "92.00",
                "code"        => "92.00.0",
                "name"        => "92.00.0 - Attività riguardanti le lotterie, le scommesse, le case da gioco",
            ],
            [
                "parent_code" => "92.00.0",
                "code"        => "92.00.01",
                "name"        => "92.00.01 - Ricevitorie del Lotto, SuperEnalotto, Totocalcio eccetera",
            ],
            [
                "parent_code" => "92.00.0",
                "code"        => "92.00.02",
                "name"        => "92.00.02 - Gestione di apparecchi che consentono vincite in denaro funzionanti a moneta o a gettone",
            ],
            [
                "parent_code" => "92.00.0",
                "code"        => "92.00.09",
                "name"        => "92.00.09 - Altre attività connesse con le lotterie e le scommesse",
            ],
            [
                "parent_code" => "R",
                "code"        => "93",
                "name"        => "93 - ATTIVITÀ SPORTIVE, DI INTRATTENIMENTO E DI DIVERTIMENTO",
            ],
            [
                "parent_code" => "93",
                "code"        => "93.1",
                "name"        => "93.1 - ATTIVITÀ SPORTIVE",
            ],
            [
                "parent_code" => "93.1",
                "code"        => "93.11",
                "name"        => "93.11 - Gestione di impianti sportivi",
            ],
            [
                "parent_code" => "93.11",
                "code"        => "93.11.1",
                "name"        => "93.11.1 - Gestione di stadi",
            ],
            [
                "parent_code" => "93.11.1",
                "code"        => "93.11.10",
                "name"        => "93.11.10 - Gestione di stadi",
            ],
            [
                "parent_code" => "93.11",
                "code"        => "93.11.2",
                "name"        => "93.11.2 - Gestione di piscine",
            ],
            [
                "parent_code" => "93.11.2",
                "code"        => "93.11.20",
                "name"        => "93.11.20 - Gestione di piscine",
            ],
            [
                "parent_code" => "93.11",
                "code"        => "93.11.3",
                "name"        => "93.11.3 - Gestione di impianti sportivi polivalenti",
            ],
            [
                "parent_code" => "93.11.3",
                "code"        => "93.11.30",
                "name"        => "93.11.30 - Gestione di impianti sportivi polivalenti",
            ],
            [
                "parent_code" => "93.11",
                "code"        => "93.11.9",
                "name"        => "93.11.9 - Gestione di altri impianti sportivi n.c.a.",
            ],
            [
                "parent_code" => "93.11.9",
                "code"        => "93.11.90",
                "name"        => "93.11.90 - Gestione di altri impianti sportivi n.c.a.",
            ],
            [
                "parent_code" => "93.1",
                "code"        => "93.12",
                "name"        => "93.12 - Attività di club sportivi",
            ],
            [
                "parent_code" => "93.12",
                "code"        => "93.12.0",
                "name"        => "93.12.0 - Attività di club sportivi",
            ],
            [
                "parent_code" => "93.12.0",
                "code"        => "93.12.00",
                "name"        => "93.12.00 - Attività di club sportivi",
            ],
            [
                "parent_code" => "93.1",
                "code"        => "93.13",
                "name"        => "93.13 - Palestre",
            ],
            [
                "parent_code" => "93.13",
                "code"        => "93.13.0",
                "name"        => "93.13.0 - Gestione di palestre",
            ],
            [
                "parent_code" => "93.13.0",
                "code"        => "93.13.00",
                "name"        => "93.13.00 - Gestione di palestre",
            ],
            [
                "parent_code" => "93.1",
                "code"        => "93.19",
                "name"        => "93.19 - Altre attività sportive",
            ],
            [
                "parent_code" => "93.19",
                "code"        => "93.19.1",
                "name"        => "93.19.1 - Enti e organizzazioni sportive, promozione di eventi sportivi",
            ],
            [
                "parent_code" => "93.19.1",
                "code"        => "93.19.10",
                "name"        => "93.19.10 - Enti e organizzazioni sportive, promozione di eventi sportivi",
            ],
            [
                "parent_code" => "93.19",
                "code"        => "93.19.9",
                "name"        => "93.19.9 - Attività sportive n.c.a.",
            ],
            [
                "parent_code" => "93.19.9",
                "code"        => "93.19.91",
                "name"        => "93.19.91 - Ricarica di bombole per attività subacquee",
            ],
            [
                "parent_code" => "93.19.9",
                "code"        => "93.19.92",
                "name"        => "93.19.92 - Attività delle guide alpine",
            ],
            [
                "parent_code" => "93.19.9",
                "code"        => "93.19.99",
                "name"        => "93.19.99 - Altre attività sportive n.c.a.",
            ],
            [
                "parent_code" => "93",
                "code"        => "93.2",
                "name"        => "93.2 - ATTIVITÀ RICREATIVE E DI DIVERTIMENTO",
            ],
            [
                "parent_code" => "93.2",
                "code"        => "93.21",
                "name"        => "93.21 - Parchi di divertimento e parchi tematici",
            ],
            [
                "parent_code" => "93.21",
                "code"        => "93.21.0",
                "name"        => "93.21.0 - Parchi di divertimento e parchi tematici",
            ],
            [
                "parent_code" => "93.21.0",
                "code"        => "93.21.01",
                "name"        => "93.21.01  - Gestione di parchi di divertimento, tematici e acquatici, nei quali sono in genere previsti spettacoli, esibizioni e servizi",
            ],
            [
                "parent_code" => "93.21.0",
                "code"        => "93.21.02",
                "name"        => "93.21.02  - Gestione di attrazioni e attività di spettacolo in forma itinerante (giostre) o di attività dello spettacolo viaggiante svolte con attrezzature smontabili, in spazi pubblici e privati",
            ],
            [
                "parent_code" => "93.2",
                "code"        => "93.29",
                "name"        => "93.29 - Altre attività ricreative e di divertimento",
            ],
            [
                "parent_code" => "93.29",
                "code"        => "93.29.1",
                "name"        => "93.29.1 - Discoteche, sale da ballo night-club e simili",
            ],
            [
                "parent_code" => "93.29.1",
                "code"        => "93.29.10",
                "name"        => "93.29.10 - Discoteche, sale da ballo night-club e simili",
            ],
            [
                "parent_code" => "93.29",
                "code"        => "93.29.2",
                "name"        => "93.29.2 - Gestione di stabilimenti balneari: marittimi, lacuali e fluviali",
            ],
            [
                "parent_code" => "93.29.2",
                "code"        => "93.29.20",
                "name"        => "93.29.20 - Gestione di stabilimenti balneari: marittimi, lacuali e fluviali",
            ],
            [
                "parent_code" => "93.29",
                "code"        => "93.29.3",
                "name"        => "93.29.3 - Gestione di apparecchi che non consentono vincite in denaro funzionanti a moneta o a gettone",
            ],
            [
                "parent_code" => "93.29.3",
                "code"        => "93.29.30",
                "name"        => "93.29.30 - Gestione di apparecchi che non consentono vincite in denaro funzionanti a moneta o a gettone",
            ],
            [
                "parent_code" => "93.29",
                "code"        => "93.29.9",
                "name"        => "93.29.9 - Altre attività di intrattenimento e di divertimento n.c.a.",
            ],
            [
                "parent_code" => "93.29.9",
                "code"        => "93.29.90",
                "name"        => "93.29.90 - Altre attività di intrattenimento e di divertimento n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "S",
                "name"        => "S - ALTRE ATTIVITÀ DI SERVIZI",
            ],
            [
                "parent_code" => "S",
                "code"        => "94",
                "name"        => "94 - ATTIVITÀ DI ORGANIZZAZIONI ASSOCIATIVE",
            ],
            [
                "parent_code" => "94",
                "code"        => "94.1",
                "name"        => "94.1 - ATTIVITÀ DI ORGANIZZAZIONI ECONOMICHE, DI DATORI DI LAVORO E PROFESSIONALI",
            ],
            [
                "parent_code" => "94.1",
                "code"        => "94.11",
                "name"        => "94.11 - Attività di organizzazioni economiche e di datori di lavoro",
            ],
            [
                "parent_code" => "94.11",
                "code"        => "94.11.0",
                "name"        => "94.11.0 - Attività di organizzazione di datori di lavoro, federazioni di industria, commercio, artigianato e servizi, associazioni, unioni, federazioni fra istituzioni",
            ],
            [
                "parent_code" => "94.11.0",
                "code"        => "94.11.00",
                "name"        => "94.11.00 - Attività di organizzazione di datori di lavoro, federazioni di industria, commercio, artigianato e servizi, associazioni, unioni, federazioni fra istituzioni",
            ],
            [
                "parent_code" => "94.1",
                "code"        => "94.12",
                "name"        => "94.12 - Attività di organizzazioni associative professionali",
            ],
            [
                "parent_code" => "94.12",
                "code"        => "94.12.1",
                "name"        => "94.12.1 - Attività di federazioni e consigli di ordini e collegi professionali",
            ],
            [
                "parent_code" => "94.12.1",
                "code"        => "94.12.10",
                "name"        => "94.12.10 - Attività di federazioni e consigli di ordini e collegi professionali",
            ],
            [
                "parent_code" => "94.12",
                "code"        => "94.12.2",
                "name"        => "94.12.2 - Attività di associazioni professionali",
            ],
            [
                "parent_code" => "94.12.2",
                "code"        => "94.12.20",
                "name"        => "94.12.20 - Attività di associazioni professionali",
            ],
            [
                "parent_code" => "94",
                "code"        => "94.2",
                "name"        => "94.2 - ATTIVITÀ DEI SINDACATI DI LAVORATORI DIPENDENTI",
            ],
            [
                "parent_code" => "94.2",
                "code"        => "94.20",
                "name"        => "94.20 - Attività dei sindacati di lavoratori dipendenti",
            ],
            [
                "parent_code" => "94.20",
                "code"        => "94.20.0",
                "name"        => "94.20.0 - Attività dei sindacati di lavoratori dipendenti",
            ],
            [
                "parent_code" => "94.20.0",
                "code"        => "94.20.00",
                "name"        => "94.20.00 - Attività dei sindacati di lavoratori dipendenti",
            ],
            [
                "parent_code" => "94",
                "code"        => "94.9",
                "name"        => "94.9 - ATTIVITÀ DI ALTRE ORGANIZZAZIONI ASSOCIATIVE",
            ],
            [
                "parent_code" => "94.9",
                "code"        => "94.91",
                "name"        => "94.91 - Attività delle organizzazioni religiose nell'esercizio del culto",
            ],
            [
                "parent_code" => "94.91",
                "code"        => "94.91.0",
                "name"        => "94.91.0 - Attività delle organizzazioni religiose nell'esercizio del culto",
            ],
            [
                "parent_code" => "94.91.0",
                "code"        => "94.91.00",
                "name"        => "94.91.00 - Attività delle organizzazioni religiose nell'esercizio del culto",
            ],
            [
                "parent_code" => "94.9",
                "code"        => "94.92",
                "name"        => "94.92 - Attività dei partiti e delle associazioni politiche",
            ],
            [
                "parent_code" => "94.92",
                "code"        => "94.92.0",
                "name"        => "94.92.0 - Attività dei partiti e delle associazioni politiche",
            ],
            [
                "parent_code" => "94.92.0",
                "code"        => "94.92.00",
                "name"        => "94.92.00 - Attività dei partiti e delle associazioni politiche",
            ],
            [
                "parent_code" => "94.9",
                "code"        => "94.99",
                "name"        => "94.99 - Attività di altre organizzazioni associative n.c.a.",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.1",
                "name"        => "94.99.1 - Attività di organizzazioni per la tutela degli interessi e dei diritti dei cittadini",
            ],
            [
                "parent_code" => "94.99.1",
                "code"        => "94.99.10",
                "name"        => "94.99.10 - Attività di organizzazioni per la tutela degli interessi e dei diritti dei cittadini",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.2",
                "name"        => "94.99.2 - Attività di organizzazioni che perseguono fini culturali, ricreativi e la coltivazione di hobby",
            ],
            [
                "parent_code" => "94.99.2",
                "code"        => "94.99.20",
                "name"        => "94.99.20 - Attività di organizzazioni che perseguono fini culturali, ricreativi e la coltivazione di hobby",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.3",
                "name"        => "94.99.3 - Attività di organizzazioni patriottiche e associazioni combattentistiche",
            ],
            [
                "parent_code" => "94.99.3",
                "code"        => "94.99.30",
                "name"        => "94.99.30 - Attività di organizzazioni patriottiche e associazioni combattentistiche",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.4",
                "name"        => "94.99.4 - Attività di organizzazioni per la cooperazione e la solidarietà internazionale",
            ],
            [
                "parent_code" => "94.99.4",
                "code"        => "94.99.40",
                "name"        => "94.99.40 - Attività di organizzazioni per la cooperazione e la solidarietà internazionale",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.5",
                "name"        => "94.99.5 - Attività di organizzazioni per la filantropia",
            ],
            [
                "parent_code" => "94.99.5",
                "code"        => "94.99.50",
                "name"        => "94.99.50 - Attività di organizzazioni per la filantropia",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.6",
                "name"        => "94.99.6 - Attività di organizzazioni per la promozione e la difesa degli animali e dell'ambiente",
            ],
            [
                "parent_code" => "94.99.6",
                "code"        => "94.99.60",
                "name"        => "94.99.60 - Attività di organizzazioni per la promozione e la difesa degli animali e dell'ambiente",
            ],
            [
                "parent_code" => "94.99",
                "code"        => "94.99.9",
                "name"        => "94.99.9 - Attività di altre organizzazioni associative n.c.a.",
            ],
            [
                "parent_code" => "94.99.9",
                "code"        => "94.99.90",
                "name"        => "94.99.90 - Attività di altre organizzazioni associative n.c.a.",
            ],
            [
                "parent_code" => "S",
                "code"        => "95",
                "name"        => "95 - RIPARAZIONE DI COMPUTER E DI BENI PER USO PERSONALE E PER LA CASA",
            ],
            [
                "parent_code" => "95",
                "code"        => "95.1",
                "name"        => "95.1 - RIPARAZIONE DI COMPUTER E DI APPARECCHIATURE PER LE COMUNICAZIONI",
            ],
            [
                "parent_code" => "95.1",
                "code"        => "95.11",
                "name"        => "95.11 - Riparazione di computer e periferiche",
            ],
            [
                "parent_code" => "95.11",
                "code"        => "95.11.0",
                "name"        => "95.11.0 - Riparazione e manutenzione di computer e periferiche",
            ],
            [
                "parent_code" => "95.11.0",
                "code"        => "95.11.00",
                "name"        => "95.11.00 - Riparazione e manutenzione di computer e periferiche",
            ],
            [
                "parent_code" => "95.1",
                "code"        => "95.12",
                "name"        => "95.12 - Riparazione di apparecchiature per le comunicazioni",
            ],
            [
                "parent_code" => "95.12",
                "code"        => "95.12.0",
                "name"        => "95.12.0 - Riparazione e manutenzione di apparecchiature per le comunicazioni",
            ],
            [
                "parent_code" => "95.12.0",
                "code"        => "95.12.01",
                "name"        => "95.12.01 - Riparazione e manutenzione di telefoni fissi, cordless e cellulari",
            ],
            [
                "parent_code" => "95.12.0",
                "code"        => "95.12.09",
                "name"        => "95.12.09 - Riparazione e manutenzione di altre apparecchiature per le comunicazioni",
            ],
            [
                "parent_code" => "95",
                "code"        => "95.2",
                "name"        => "95.2 - RIPARAZIONE DI BENI PER USO PERSONALE E PER LA CASA",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.21",
                "name"        => "95.21 - Riparazione di prodotti elettronici di consumo audio e video",
            ],
            [
                "parent_code" => "95.21",
                "code"        => "95.21.0",
                "name"        => "95.21.0 - Riparazione di prodotti elettronici di consumo audio e video",
            ],
            [
                "parent_code" => "95.21.0",
                "code"        => "95.21.00",
                "name"        => "95.21.00 - Riparazione di prodotti elettronici di consumo audio e video",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.22",
                "name"        => "95.22 - Riparazione di elettrodomestici e di articoli per la casa e il giardinaggio",
            ],
            [
                "parent_code" => "95.22",
                "code"        => "95.22.0",
                "name"        => "95.22.0 - Riparazione di elettrodomestici e di articoli per la casa e il giardinaggio",
            ],
            [
                "parent_code" => "95.22.0",
                "code"        => "95.22.01",
                "name"        => "95.22.01 - Riparazione di elettrodomestici e di articoli per la casa",
            ],
            [
                "parent_code" => "95.22.0",
                "code"        => "95.22.02",
                "name"        => "95.22.02 - Riparazione di articoli per il giardinaggio",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.23",
                "name"        => "95.23 - Riparazione di calzature e articoli da viaggio",
            ],
            [
                "parent_code" => "95.23",
                "code"        => "95.23.0",
                "name"        => "95.23.0 - Riparazione di calzature e articoli da viaggio in pelle, cuoio o in altri materiali simili",
            ],
            [
                "parent_code" => "95.23.0",
                "code"        => "95.23.00",
                "name"        => "95.23.00 - Riparazione di calzature e articoli da viaggio in pelle, cuoio o in altri materiali simili",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.24",
                "name"        => "95.24 - Riparazione di mobili e di oggetti di arredamento; laboratori di tappezzeria",
            ],
            [
                "parent_code" => "95.24",
                "code"        => "95.24.0",
                "name"        => "95.24.0 - Riparazione di mobili e di oggetti di arredamento; laboratori di tappezzeria",
            ],
            [
                "parent_code" => "95.24.0",
                "code"        => "95.24.01",
                "name"        => "95.24.01 - Riparazione di mobili e di oggetti di arredamento",
            ],
            [
                "parent_code" => "95.24.0",
                "code"        => "95.24.02",
                "name"        => "95.24.02 - Laboratori di tappezzeria",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.25",
                "name"        => "95.25 - Riparazione di orologi e di gioielli",
            ],
            [
                "parent_code" => "95.25",
                "code"        => "95.25.0",
                "name"        => "95.25.0 - Riparazione di orologi e di gioielli",
            ],
            [
                "parent_code" => "95.25.0",
                "code"        => "95.25.00",
                "name"        => "95.25.00 - Riparazione di orologi e di gioielli",
            ],
            [
                "parent_code" => "95.2",
                "code"        => "95.29",
                "name"        => "95.29 - Riparazione di altri beni per uso personale e per la casa",
            ],
            [
                "parent_code" => "95.29",
                "code"        => "95.29.0",
                "name"        => "95.29.0 - Riparazione di altri beni per uso personale e per la casa",
            ],
            [
                "parent_code" => "95.29.0",
                "code"        => "95.29.01",
                "name"        => "95.29.01 - Riparazione di strumenti musicali",
            ],
            [
                "parent_code" => "95.29.0",
                "code"        => "95.29.02",
                "name"        => "95.29.02 - Riparazione di articoli sportivi (escluse le armi sportive) e attrezzature da campeggio (incluse le biciclette)",
            ],
            [
                "parent_code" => "95.29.0",
                "code"        => "95.29.03",
                "name"        => "95.29.03 - Modifica e riparazione di articoli di vestiario non effettuate dalle sartorie",
            ],
            [
                "parent_code" => "95.29.0",
                "code"        => "95.29.04",
                "name"        => "95.29.04 - Servizi di riparazioni rapide, duplicazione chiavi, affilatura coltelli, stampa immediata su articoli tessili, incisioni rapide su metallo non prezioso",
            ],
            [
                "parent_code" => "95.29.0",
                "code"        => "95.29.09",
                "name"        => "95.29.09 - Riparazione di altri beni di consumo per uso personale e per la casa n.c.a.",
            ],
            [
                "parent_code" => "S",
                "code"        => "96",
                "name"        => "96 - ALTRE ATTIVITÀ DI SERVIZI PER LA PERSONA",
            ],
            [
                "parent_code" => "96",
                "code"        => "96.0",
                "name"        => "96.0 - ALTRE ATTIVITÀ DI SERVIZI PER LA PERSONA",
            ],
            [
                "parent_code" => "96.0",
                "code"        => "96.01",
                "name"        => "96.01 - Lavanderia e pulitura di articoli tessili e pelliccia",
            ],
            [
                "parent_code" => "96.01",
                "code"        => "96.01.1",
                "name"        => "96.01.1 - Attività delle lavanderie industriali",
            ],
            [
                "parent_code" => "96.01.1",
                "code"        => "96.01.10",
                "name"        => "96.01.10 - Attività delle lavanderie industriali",
            ],
            [
                "parent_code" => "96.01",
                "code"        => "96.01.2",
                "name"        => "96.01.2 - Attività di lavanderie, tintorie tradizionali",
            ],
            [
                "parent_code" => "96.01.2",
                "code"        => "96.01.20",
                "name"        => "96.01.20 - Attività di lavanderie, tintorie tradizionali",
            ],
            [
                "parent_code" => "96.01",
                "code"        => "96.01.3",
                "name"        => "96.01.3 - Attività di lavanderie self-service",
            ],
            [
                "parent_code" => "96.01.3",
                "code"        => "96.01.30",
                "name"        => "96.01.30 - Attività di lavanderie self-service",
            ],
            [
                "parent_code" => "96.0",
                "code"        => "96.02",
                "name"        => "96.02 - Servizi dei parrucchieri e di altri trattamenti estetici",
            ],
            [
                "parent_code" => "96.02",
                "code"        => "96.02.0",
                "name"        => "96.02.0 - Servizi degli acconciatori, manicure, pedicure e trattamenti estetici",
            ],
            [
                "parent_code" => "96.02.0",
                "code"        => "96.02.01",
                "name"        => "96.02.01 - Servizi dei saloni di barbiere e parrucchiere",
            ],
            [
                "parent_code" => "96.02.0",
                "code"        => "96.02.02",
                "name"        => "96.02.02 - Servizi degli istituti di bellezza",
            ],
            [
                "parent_code" => "96.02.0",
                "code"        => "96.02.03",
                "name"        => "96.02.03 - Servizi di manicure e pedicure",
            ],
            [
                "parent_code" => "96.0",
                "code"        => "96.03",
                "name"        => "96.03 - Servizi di pompe funebri e attività connesse",
            ],
            [
                "parent_code" => "96.03",
                "code"        => "96.03.0",
                "name"        => "96.03.0 - Servizi di pompe funebri e attività connesse",
            ],
            [
                "parent_code" => "96.03.0",
                "code"        => "96.03.00",
                "name"        => "96.03.00 - Servizi di pompe funebri e attività connesse",
            ],
            [
                "parent_code" => "96.0",
                "code"        => "96.04",
                "name"        => "96.04 - Servizi dei centri per il benessere fisico",
            ],
            [
                "parent_code" => "96.04",
                "code"        => "96.04.1",
                "name"        => "96.04.1 - Servizi di centri per il benessere fisico (esclusi gli stabilimenti termali)",
            ],
            [
                "parent_code" => "96.04.1",
                "code"        => "96.04.10",
                "name"        => "96.04.10 - Servizi di centri per il benessere fisico (esclusi gli stabilimenti termali)",
            ],
            [
                "parent_code" => "96.04",
                "code"        => "96.04.2",
                "name"        => "96.04.2 - Stabilimenti termali",
            ],
            [
                "parent_code" => "96.04.2",
                "code"        => "96.04.20",
                "name"        => "96.04.20 - Stabilimenti termali",
            ],
            [
                "parent_code" => "96.0",
                "code"        => "96.09",
                "name"        => "96.09 - Attività di servizi per la persona n.c.a.",
            ],
            [
                "parent_code" => "96.09",
                "code"        => "96.09.0",
                "name"        => "96.09.0 - Attività di servizi per la persona n.c.a.",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.01",
                "name"        => "96.09.01 - Attività di sgombero di cantine, solai e garage",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.02",
                "name"        => "96.09.02 - Attività di tatuaggio e piercing",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.03",
                "name"        => "96.09.03 - Agenzie matrimoniali e d'incontro",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.04",
                "name"        => "96.09.04 - Servizi di cura degli animali da compagnia (esclusi i servizi veterinari)",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.05",
                "name"        => "96.09.05 - Organizzazione di feste e cerimonie",
            ],
            [
                "parent_code" => "96.09.0",
                "code"        => "96.09.09",
                "name"        => "96.09.09 - Altre attività di servizi per la persona n.c.a.",
            ],
            [
                "parent_code" => null,
                "code"        => "T",
                "name"        => "T - ATTIVITÀ DI FAMIGLIE E CONVIVENZE COME DATORI DI LAVORO PER PERSONALE DOMESTICO; PRODUZIONE DI BENI E SERVIZI INDIFFERENZIATI PER USO PROPRIO DA PARTE DI FAMIGLIE E CONVIVENZE",
            ],
            [
                "parent_code" => "T",
                "code"        => "97",
                "name"        => "97 - ATTIVITÀ DI FAMIGLIE E CONVIVENZE COME DATORI DI LAVORO PER PERSONALE DOMESTICO",
            ],
            [
                "parent_code" => "97",
                "code"        => "97.0",
                "name"        => "97.0 - ATTIVITÀ DI FAMIGLIE E CONVIVENZE COME DATORI DI LAVORO PER PERSONALE DOMESTICO",
            ],
            [
                "parent_code" => "97.0",
                "code"        => "97.00",
                "name"        => "97.00 - Attività di famiglie e convivenze come datori di lavoro per personale domestico",
            ],
            [
                "parent_code" => "97.00",
                "code"        => "97.00.0",
                "name"        => "97.00.0 - Attività di famiglie e convivenze come datori di lavoro per personale domestico",
            ],
            [
                "parent_code" => "97.00.0",
                "code"        => "97.00.01",
                "name"        => "97.00.01 - Attività di famiglie e convivenze come datori di lavoro per personale domestico (esclusi i condomini)",
            ],
            [
                "parent_code" => "97.00.0",
                "code"        => "97.00.02",
                "name"        => "97.00.02 - Attività di condomini",
            ],
            [
                "parent_code" => "T",
                "code"        => "98",
                "name"        => "98 - PRODUZIONE DI BENI E SERVIZI INDIFFERENZIATI PER USO PROPRIO DA PARTE DI FAMIGLIE E CONVIVENZE",
            ],
            [
                "parent_code" => "98",
                "code"        => "98.1",
                "name"        => "98.1 - PRODUZIONE DI BENI INDIFFERENZIATI PER USO PROPRIO DA PARTE DI FAMIGLIE E CONVIVENZE",
            ],
            [
                "parent_code" => "98.1",
                "code"        => "98.10",
                "name"        => "98.10 - Produzione di beni indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => "98.10",
                "code"        => "98.10.0",
                "name"        => "98.10.0 - Produzione di beni indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => "98.10.0",
                "code"        => "98.10.00",
                "name"        => "98.10.00 - Produzione di beni indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => "98",
                "code"        => "98.2",
                "name"        => "98.2 - PRODUZIONE DI SERVIZI INDIFFERENZIATI PER USO PROPRIO DA PARTE DI FAMIGLIE E CONVIVENZE",
            ],
            [
                "parent_code" => "98.2",
                "code"        => "98.20",
                "name"        => "98.20 - Produzione di servizi indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => "98.20",
                "code"        => "98.20.0",
                "name"        => "98.20.0 - Produzione di servizi indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => "98.20.0",
                "code"        => "98.20.00",
                "name"        => "98.20.00 - Produzione di servizi indifferenziati per uso proprio da parte di famiglie e convivenze",
            ],
            [
                "parent_code" => null,
                "code"        => "U",
                "name"        => "U - ORGANIZZAZIONI ED ORGANISMI EXTRATERRITORIALI",
            ],
            [
                "parent_code" => "U",
                "code"        => "99",
                "name"        => "99 - ORGANIZZAZIONI ED ORGANISMI EXTRATERRITORIALI",
            ],
            [
                "parent_code" => "99",
                "code"        => "99.0",
                "name"        => "99.0 - ORGANIZZAZIONI ED ORGANISMI EXTRATERRITORIALI",
            ],
            [
                "parent_code" => "99.0",
                "code"        => "99.00",
                "name"        => "99.00 - Organizzazioni ed organismi extraterritoriali",
            ],
            [
                "parent_code" => "99.00",
                "code"        => "99.00.0",
                "name"        => "99.00.0 - Organizzazioni ed organismi extraterritoriali",
            ],
            [
                "parent_code" => "99.00.0",
                "code"        => "99.00.00",
                "name"        => "99.00.00 - Organizzazioni ed organismi extraterritoriali",
            ],
        ];

        AtecoCode::truncate();
        AtecoCode::insert($atecoCodes);
    }
}
