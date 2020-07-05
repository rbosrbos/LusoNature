---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to LusoNature API.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Categories


Categories API
<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display all categories

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Beaches"
    },
    {
        "id": 2,
        "name": "Forests"
    },
    {
        "id": 3,
        "name": "Camping"
    },
    {
        "id": 4,
        "name": "Fun"
    }
]
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

#Cities


Cities API
<!-- START_56d7be9447e2ce39ac69b09141bf5902 -->
## Display all cities

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Abrantes"
    },
    {
        "id": 2,
        "name": "Águeda"
    },
    {
        "id": 3,
        "name": "Aguiar da Beira"
    },
    {
        "id": 4,
        "name": "Alandroal"
    },
    {
        "id": 5,
        "name": "Albergaria-a-Velha"
    },
    {
        "id": 6,
        "name": "Albufeira"
    },
    {
        "id": 7,
        "name": "Alcácer do Sal"
    },
    {
        "id": 8,
        "name": "Alcanena"
    },
    {
        "id": 9,
        "name": "Alcobaça"
    },
    {
        "id": 10,
        "name": "Alcochete"
    },
    {
        "id": 11,
        "name": "Alcoutim"
    },
    {
        "id": 12,
        "name": "Alenquer"
    },
    {
        "id": 13,
        "name": "Alfândega da Fé"
    },
    {
        "id": 14,
        "name": "Alijó"
    },
    {
        "id": 15,
        "name": "Aljezur"
    },
    {
        "id": 16,
        "name": "Aljustrel"
    },
    {
        "id": 17,
        "name": "Almada"
    },
    {
        "id": 18,
        "name": "Almeida"
    },
    {
        "id": 19,
        "name": "Almeirim"
    },
    {
        "id": 20,
        "name": "Almodôvar"
    },
    {
        "id": 21,
        "name": "Alpiarça"
    },
    {
        "id": 22,
        "name": "Alter do Chão"
    },
    {
        "id": 23,
        "name": "Alvaiázere"
    },
    {
        "id": 24,
        "name": "Alvito"
    },
    {
        "id": 25,
        "name": "Amadora"
    },
    {
        "id": 26,
        "name": "Amarante"
    },
    {
        "id": 27,
        "name": "Amares"
    },
    {
        "id": 28,
        "name": "Anadia"
    },
    {
        "id": 29,
        "name": "Angra do Heroísmo"
    },
    {
        "id": 30,
        "name": "Ansião"
    },
    {
        "id": 31,
        "name": "Arcos de Valdevez"
    },
    {
        "id": 32,
        "name": "Arganil"
    },
    {
        "id": 33,
        "name": "Armamar"
    },
    {
        "id": 34,
        "name": "Arouca"
    },
    {
        "id": 35,
        "name": "Arraiolos"
    },
    {
        "id": 36,
        "name": "Arronches"
    },
    {
        "id": 37,
        "name": "Arruda dos Vinhos"
    },
    {
        "id": 38,
        "name": "Aveiro"
    },
    {
        "id": 39,
        "name": "Avis"
    },
    {
        "id": 40,
        "name": "Azambuja"
    },
    {
        "id": 41,
        "name": "Baião"
    },
    {
        "id": 42,
        "name": "Barcelos"
    },
    {
        "id": 43,
        "name": "Barrancos"
    },
    {
        "id": 44,
        "name": "Barreiro"
    },
    {
        "id": 45,
        "name": "Batalha"
    },
    {
        "id": 46,
        "name": "Beja"
    },
    {
        "id": 47,
        "name": "Belmonte"
    },
    {
        "id": 48,
        "name": "Benavente"
    },
    {
        "id": 49,
        "name": "Bombarral"
    },
    {
        "id": 50,
        "name": "Borba"
    },
    {
        "id": 51,
        "name": "Boticas"
    },
    {
        "id": 52,
        "name": "Braga"
    },
    {
        "id": 53,
        "name": "Bragança"
    },
    {
        "id": 54,
        "name": "Cabeceiras de Basto"
    },
    {
        "id": 55,
        "name": "Cadaval"
    },
    {
        "id": 56,
        "name": "Caldas da Rainha"
    },
    {
        "id": 57,
        "name": "Calheta (Açores)"
    },
    {
        "id": 58,
        "name": "Calheta (Madeira)"
    },
    {
        "id": 59,
        "name": "Câmara de Lobos"
    },
    {
        "id": 60,
        "name": "Caminha"
    },
    {
        "id": 61,
        "name": "Campo Maior"
    },
    {
        "id": 62,
        "name": "Cantanhede"
    },
    {
        "id": 63,
        "name": "Carrazeda de Ansiães"
    },
    {
        "id": 64,
        "name": "Carregal do Sal"
    },
    {
        "id": 65,
        "name": "Cartaxo"
    },
    {
        "id": 66,
        "name": "Cascais"
    },
    {
        "id": 67,
        "name": "Castanheira de Pera"
    },
    {
        "id": 68,
        "name": "Castelo Branco"
    },
    {
        "id": 69,
        "name": "Castelo de Paiva"
    },
    {
        "id": 70,
        "name": "Castelo de Vide"
    },
    {
        "id": 71,
        "name": "Castro Daire"
    },
    {
        "id": 72,
        "name": "Castro Marim"
    },
    {
        "id": 73,
        "name": "Castro Verde"
    },
    {
        "id": 74,
        "name": "Celorico da Beira"
    },
    {
        "id": 75,
        "name": "Celorico de Basto"
    },
    {
        "id": 76,
        "name": "Chamusca"
    },
    {
        "id": 77,
        "name": "Chaves"
    },
    {
        "id": 78,
        "name": "Cinfães"
    },
    {
        "id": 79,
        "name": "Coimbra"
    },
    {
        "id": 80,
        "name": "Condeixa-a-Nova"
    },
    {
        "id": 81,
        "name": "Constância"
    },
    {
        "id": 82,
        "name": "Coruche"
    },
    {
        "id": 83,
        "name": "Corvo"
    },
    {
        "id": 84,
        "name": "Covilhã"
    },
    {
        "id": 85,
        "name": "Crato"
    },
    {
        "id": 86,
        "name": "Cuba"
    },
    {
        "id": 87,
        "name": "Elvas"
    },
    {
        "id": 88,
        "name": "Entroncamento"
    },
    {
        "id": 89,
        "name": "Espinho"
    },
    {
        "id": 90,
        "name": "Esposende"
    },
    {
        "id": 91,
        "name": "Estarreja"
    },
    {
        "id": 92,
        "name": "Estremoz"
    },
    {
        "id": 93,
        "name": "Évora"
    },
    {
        "id": 94,
        "name": "Fafe"
    },
    {
        "id": 95,
        "name": "Faro"
    },
    {
        "id": 96,
        "name": "Felgueiras"
    },
    {
        "id": 97,
        "name": "Ferreira do Alentejo"
    },
    {
        "id": 98,
        "name": "Ferreira do Zêzere"
    },
    {
        "id": 99,
        "name": "Figueira da Foz"
    },
    {
        "id": 100,
        "name": "Figueira de Castelo Rodrigo"
    },
    {
        "id": 101,
        "name": "Figueiró dos Vinhos"
    },
    {
        "id": 102,
        "name": "Fornos de Algodres"
    },
    {
        "id": 103,
        "name": "Freixo de Espada à Cinta"
    },
    {
        "id": 104,
        "name": "Fronteira"
    },
    {
        "id": 105,
        "name": "Funchal"
    },
    {
        "id": 106,
        "name": "Fundão"
    },
    {
        "id": 107,
        "name": "Gavião"
    },
    {
        "id": 108,
        "name": "Góis"
    },
    {
        "id": 109,
        "name": "Golegã"
    },
    {
        "id": 110,
        "name": "Gondomar"
    },
    {
        "id": 111,
        "name": "Gouveia"
    },
    {
        "id": 112,
        "name": "Grândola"
    },
    {
        "id": 113,
        "name": "Guarda"
    },
    {
        "id": 114,
        "name": "Guimarães"
    },
    {
        "id": 115,
        "name": "Horta"
    },
    {
        "id": 116,
        "name": "Idanha-a-Nova"
    },
    {
        "id": 117,
        "name": "Ílhavo"
    },
    {
        "id": 118,
        "name": "Lagoa (Açores)"
    },
    {
        "id": 119,
        "name": "Lagoa (Algarve)"
    },
    {
        "id": 120,
        "name": "Lagos"
    },
    {
        "id": 121,
        "name": "Lajes das Flores"
    },
    {
        "id": 122,
        "name": "Lajes do Pico"
    },
    {
        "id": 123,
        "name": "Lamego"
    },
    {
        "id": 124,
        "name": "Leiria"
    },
    {
        "id": 125,
        "name": "Lisboa"
    },
    {
        "id": 126,
        "name": "Loulé"
    },
    {
        "id": 127,
        "name": "Loures"
    },
    {
        "id": 128,
        "name": "Lourinhã"
    },
    {
        "id": 129,
        "name": "Lousã"
    },
    {
        "id": 130,
        "name": "Lousada"
    },
    {
        "id": 131,
        "name": "Mação"
    },
    {
        "id": 132,
        "name": "Macedo de Cavaleiros"
    },
    {
        "id": 133,
        "name": "Machico"
    },
    {
        "id": 134,
        "name": "Madalena"
    },
    {
        "id": 135,
        "name": "Mafra"
    },
    {
        "id": 136,
        "name": "Maia"
    },
    {
        "id": 137,
        "name": "Mangualde"
    },
    {
        "id": 138,
        "name": "Manteigas"
    },
    {
        "id": 139,
        "name": "Marco de Canaveses"
    },
    {
        "id": 140,
        "name": "Marinha Grande"
    },
    {
        "id": 141,
        "name": "Marvão"
    },
    {
        "id": 142,
        "name": "Matosinhos"
    },
    {
        "id": 143,
        "name": "Mealhada"
    },
    {
        "id": 144,
        "name": "Meda"
    },
    {
        "id": 145,
        "name": "Melgaço"
    },
    {
        "id": 146,
        "name": "Mértola"
    },
    {
        "id": 147,
        "name": "Mesão Frio"
    },
    {
        "id": 148,
        "name": "Mira"
    },
    {
        "id": 149,
        "name": "Miranda do Corvo"
    },
    {
        "id": 150,
        "name": "Miranda do Douro"
    },
    {
        "id": 151,
        "name": "Mirandela"
    },
    {
        "id": 152,
        "name": "Mogadouro"
    },
    {
        "id": 153,
        "name": "Moimenta da Beira"
    },
    {
        "id": 154,
        "name": "Moita"
    },
    {
        "id": 155,
        "name": "Monção"
    },
    {
        "id": 156,
        "name": "Monchique"
    },
    {
        "id": 157,
        "name": "Mondim de Basto"
    },
    {
        "id": 158,
        "name": "Monforte"
    },
    {
        "id": 159,
        "name": "Montalegre"
    },
    {
        "id": 160,
        "name": "Montemor-o-Novo"
    },
    {
        "id": 161,
        "name": "Montemor-o-Velho"
    },
    {
        "id": 162,
        "name": "Montijo"
    },
    {
        "id": 163,
        "name": "Mora"
    },
    {
        "id": 164,
        "name": "Mortágua"
    },
    {
        "id": 165,
        "name": "Moura"
    },
    {
        "id": 166,
        "name": "Mourão"
    },
    {
        "id": 167,
        "name": "Murça"
    },
    {
        "id": 168,
        "name": "Murtosa"
    },
    {
        "id": 169,
        "name": "Nazaré"
    },
    {
        "id": 170,
        "name": "Nelas"
    },
    {
        "id": 171,
        "name": "Nisa"
    },
    {
        "id": 172,
        "name": "Nordeste"
    },
    {
        "id": 173,
        "name": "Óbidos"
    },
    {
        "id": 174,
        "name": "Odemira"
    },
    {
        "id": 175,
        "name": "Odivelas"
    },
    {
        "id": 176,
        "name": "Oeiras"
    },
    {
        "id": 177,
        "name": "Oleiros"
    },
    {
        "id": 178,
        "name": "Olhão"
    },
    {
        "id": 179,
        "name": "Oliveira de Azeméis"
    },
    {
        "id": 180,
        "name": "Oliveira de Frades"
    },
    {
        "id": 181,
        "name": "Oliveira do Bairro"
    },
    {
        "id": 182,
        "name": "Oliveira do Hospital"
    },
    {
        "id": 183,
        "name": "Olivença"
    },
    {
        "id": 184,
        "name": "Ourém"
    },
    {
        "id": 185,
        "name": "Ourique"
    },
    {
        "id": 186,
        "name": "Ovar"
    },
    {
        "id": 187,
        "name": "Paços de Ferreira"
    },
    {
        "id": 188,
        "name": "Palmela"
    },
    {
        "id": 189,
        "name": "Pampilhosa da Serra"
    },
    {
        "id": 190,
        "name": "Paredes"
    },
    {
        "id": 191,
        "name": "Paredes de Coura"
    },
    {
        "id": 192,
        "name": "Pedrógão Grande"
    },
    {
        "id": 193,
        "name": "Penacova"
    },
    {
        "id": 194,
        "name": "Penafiel"
    },
    {
        "id": 195,
        "name": "Penalva do Castelo"
    },
    {
        "id": 196,
        "name": "Penamacor"
    },
    {
        "id": 197,
        "name": "Penedono"
    },
    {
        "id": 198,
        "name": "Penela"
    },
    {
        "id": 199,
        "name": "Peniche"
    },
    {
        "id": 200,
        "name": "Peso da Régua"
    },
    {
        "id": 201,
        "name": "Pinhel"
    },
    {
        "id": 202,
        "name": "Pombal"
    },
    {
        "id": 203,
        "name": "Ponta Delgada"
    },
    {
        "id": 204,
        "name": "Ponta do Sol"
    },
    {
        "id": 205,
        "name": "Ponte da Barca"
    },
    {
        "id": 206,
        "name": "Ponte de Lima"
    },
    {
        "id": 207,
        "name": "Ponte de Sor"
    },
    {
        "id": 208,
        "name": "Portalegre"
    },
    {
        "id": 209,
        "name": "Portel"
    },
    {
        "id": 210,
        "name": "Portimão"
    },
    {
        "id": 211,
        "name": "Porto"
    },
    {
        "id": 212,
        "name": "Porto de Mós"
    },
    {
        "id": 213,
        "name": "Porto Moniz"
    },
    {
        "id": 214,
        "name": "Porto Santo"
    },
    {
        "id": 215,
        "name": "Póvoa de Lanhoso"
    },
    {
        "id": 216,
        "name": "Póvoa de Varzim"
    },
    {
        "id": 217,
        "name": "Povoação"
    },
    {
        "id": 218,
        "name": "Praia da Vitória"
    },
    {
        "id": 219,
        "name": "Proença-a-Nova"
    },
    {
        "id": 220,
        "name": "Redondo"
    },
    {
        "id": 221,
        "name": "Reguengos de Monsaraz"
    },
    {
        "id": 222,
        "name": "Resende"
    },
    {
        "id": 223,
        "name": "Ribeira Brava"
    },
    {
        "id": 224,
        "name": "Ribeira de Pena"
    },
    {
        "id": 225,
        "name": "Ribeira Grande"
    },
    {
        "id": 226,
        "name": "Rio Maior"
    },
    {
        "id": 227,
        "name": "Sabrosa"
    },
    {
        "id": 228,
        "name": "Sabugal"
    },
    {
        "id": 229,
        "name": "Salvaterra de Magos"
    },
    {
        "id": 230,
        "name": "Santa Comba Dão"
    },
    {
        "id": 231,
        "name": "Santa Cruz"
    },
    {
        "id": 232,
        "name": "Santa Cruz da Graciosa"
    },
    {
        "id": 233,
        "name": "Santa Cruz das Flores"
    },
    {
        "id": 234,
        "name": "Santa Maria da Feira"
    },
    {
        "id": 235,
        "name": "Santa Marta de Penaguião"
    },
    {
        "id": 236,
        "name": "Santana"
    },
    {
        "id": 237,
        "name": "Santarém"
    },
    {
        "id": 238,
        "name": "Santiago do Cacém"
    },
    {
        "id": 239,
        "name": "Santo Tirso"
    },
    {
        "id": 240,
        "name": "São Brás de Alportel"
    },
    {
        "id": 241,
        "name": "São João da Madeira"
    },
    {
        "id": 242,
        "name": "São João da Pesqueira"
    },
    {
        "id": 243,
        "name": "São Pedro do Sul"
    },
    {
        "id": 244,
        "name": "São Roque do Pico"
    },
    {
        "id": 245,
        "name": "São Vicente"
    },
    {
        "id": 246,
        "name": "Sardoal"
    },
    {
        "id": 247,
        "name": "Sátão"
    },
    {
        "id": 248,
        "name": "Seia"
    },
    {
        "id": 249,
        "name": "Seixal"
    },
    {
        "id": 250,
        "name": "Sernancelhe"
    },
    {
        "id": 251,
        "name": "Serpa"
    },
    {
        "id": 252,
        "name": "Sertã"
    },
    {
        "id": 253,
        "name": "Sesimbra"
    },
    {
        "id": 254,
        "name": "Setúbal"
    },
    {
        "id": 255,
        "name": "Sever do Vouga"
    },
    {
        "id": 256,
        "name": "Silves"
    },
    {
        "id": 257,
        "name": "Sines"
    },
    {
        "id": 258,
        "name": "Sintra"
    },
    {
        "id": 259,
        "name": "Sobral de Monte Agraço"
    },
    {
        "id": 260,
        "name": "Soure"
    },
    {
        "id": 261,
        "name": "Sousel"
    },
    {
        "id": 262,
        "name": "Tábua"
    },
    {
        "id": 263,
        "name": "Tabuaço"
    },
    {
        "id": 264,
        "name": "Tarouca"
    },
    {
        "id": 265,
        "name": "Tavira"
    },
    {
        "id": 266,
        "name": "Terras de Bouro"
    },
    {
        "id": 267,
        "name": "Tomar"
    },
    {
        "id": 268,
        "name": "Tondela"
    },
    {
        "id": 269,
        "name": "Torre de Moncorvo"
    },
    {
        "id": 270,
        "name": "Torres Novas"
    },
    {
        "id": 271,
        "name": "Torres Vedras"
    },
    {
        "id": 272,
        "name": "Trancoso"
    },
    {
        "id": 273,
        "name": "Trofa"
    },
    {
        "id": 274,
        "name": "Vagos"
    },
    {
        "id": 275,
        "name": "Vale de Cambra"
    },
    {
        "id": 276,
        "name": "Valença"
    },
    {
        "id": 277,
        "name": "Valongo"
    },
    {
        "id": 278,
        "name": "Valpaços"
    },
    {
        "id": 279,
        "name": "Velas"
    },
    {
        "id": 280,
        "name": "Vendas Novas"
    },
    {
        "id": 281,
        "name": "Viana do Alentejo"
    },
    {
        "id": 282,
        "name": "Viana do Castelo"
    },
    {
        "id": 283,
        "name": "Vidigueira"
    },
    {
        "id": 284,
        "name": "Vieira do Minho"
    },
    {
        "id": 285,
        "name": "Vila de Rei"
    },
    {
        "id": 286,
        "name": "Vila do Bispo"
    },
    {
        "id": 287,
        "name": "Vila do Conde"
    },
    {
        "id": 288,
        "name": "Vila do Porto"
    },
    {
        "id": 289,
        "name": "Vila Flor"
    },
    {
        "id": 290,
        "name": "Vila Franca de Xira"
    },
    {
        "id": 291,
        "name": "Vila Franca do Campo"
    },
    {
        "id": 292,
        "name": "Vila Nova da Barquinha"
    },
    {
        "id": 293,
        "name": "Vila Nova de Cerveira"
    },
    {
        "id": 294,
        "name": "Vila Nova de Famalicão"
    },
    {
        "id": 295,
        "name": "Vila Nova de Foz Côa"
    },
    {
        "id": 296,
        "name": "Vila Nova de Gaia"
    },
    {
        "id": 297,
        "name": "Vila Nova de Paiva"
    },
    {
        "id": 298,
        "name": "Vila Nova de Poiares"
    },
    {
        "id": 299,
        "name": "Vila Pouca de Aguiar"
    },
    {
        "id": 300,
        "name": "Vila Real"
    },
    {
        "id": 301,
        "name": "Vila Real de Santo António"
    },
    {
        "id": 302,
        "name": "Vila Velha de Ródão"
    },
    {
        "id": 303,
        "name": "Vila Verde"
    },
    {
        "id": 304,
        "name": "Vila Viçosa"
    },
    {
        "id": 305,
        "name": "Vimioso"
    },
    {
        "id": 306,
        "name": "Vinhais"
    },
    {
        "id": 307,
        "name": "Viseu"
    },
    {
        "id": 308,
        "name": "Vizela"
    },
    {
        "id": 309,
        "name": "Vouzela"
    }
]
```

### HTTP Request
`GET api/cities`


<!-- END_56d7be9447e2ce39ac69b09141bf5902 -->

#News


News API
<!-- START_5dd1068d84cb8b472b4e1b34928a56af -->
## Display a list of all news

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/news?num=100&latest_month=false" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/news"
);

let params = {
    "num": "100",
    "latest_month": "false",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
        "title": "March Hare. 'Sixteenth,' added the Dormouse, who seemed to quiver all over with diamonds, and.",
        "body": "Alice began, in a very curious to know what you were down here till I'm somebody else\"--but, oh dear!' cried Alice hastily, afraid that it might not escape again, and the other paw, 'lives a March Hare. 'He denies it,' said Five, in a moment. 'Let's go on crying in this affair, He trusts to you never to lose YOUR temper!' 'Hold your tongue!' said the White Rabbit, who said in a very little! Besides, SHE'S she, and I'm I, and--oh dear, how puzzling it all came different!' Alice replied thoughtfully. 'They have their tails in their mouths. So they got thrown out to be lost: away went Alice after it, never once considering how in the middle of the trees upon her arm, with its head, it WOULD twist itself round and round Alice, every now and then; such as, that a red-hot poker will burn you if you please! \"William the Conqueror, whose cause was favoured by the soldiers, who of course was, how to get into the garden with one finger for the first sentence in her brother's Latin Grammar, 'A.<p>&nbsp;<\/p>Just at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do well enough; don't be particular--Here, Bill! catch hold of this remark, and thought it would all come wrong, and she walked sadly down the bottle, she found it advisable--\"' 'Found WHAT?' said the Caterpillar. 'Well, I've tried to speak, and no room at all the while, till at last in the pool, 'and she sits purring so nicely by the end of the song. 'What trial is it?' The Gryphon sat up and throw us, with the lobsters to the end of every line: 'Speak roughly to your tea; it's getting late.' So Alice began telling them her adventures from the sky! Ugh, Serpent!' 'But I'm NOT a serpent!' said Alice sharply, for she was now about two feet high, and was going on, as she added, 'and the moral of that is, but I THINK I can reach the key; and if it makes rather a complaining tone, 'and they drew all manner of things--everything that begins with an M--' 'Why with an anxious look at all like the right words,' said poor Alice, 'when one wasn't always growing larger and smaller, and being so many different sizes in a frightened tone. 'The Queen of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Queen merely remarking as it went, as if he doesn't begin.' But she did not get hold of this pool? I am very tired of swimming about here, O Mouse!' (Alice thought this a good many voices all talking together: she made out that it would be like, '--for they haven't got much evidence YET,' she said to herself; 'his eyes are so VERY much out of its right paw round, 'lives a Hatter: and in another moment, when she looked back once or twice she had succeeded in getting its body tucked away, comfortably enough, under her arm, that it might happen any minute, 'and then,' thought she, 'if people had all to lie down upon their faces. There was a long way. So they got thrown out to her ear. 'You're thinking about something, my dear, YOU must cross-examine THIS.<p>&nbsp;<\/p>Alice. 'Of course they were', said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you know I'm mad?' said Alice. 'Why not?' said the Gryphon. Alice did not like to be a lesson to you to get to,' said the Mock Turtle at last, and they lived at the bottom of the bill, \"French, music, AND WASHING--extra.\"' 'You couldn't have done just as I tell you!' said Alice. 'Well, then,' the Cat again, sitting on the spot.' This did not like to try the effect: the next moment a shower of saucepans, plates, and dishes. The Duchess took her choice, and was surprised to find any. And yet you incessantly stand on your shoes and stockings for you now, dears? I'm sure I have dropped them, I wonder?' Alice guessed who it was, and, as the Caterpillar called after her. 'I've something important to say!' This sounded promising, certainly: Alice turned and came back again. 'Keep your temper,' said the King said, turning to Alice again. 'No, I didn't,' said Alice: 'she's so extremely--' Just then.",
        "summary": "I'd taken the highest tree in the last few minutes, and began whistling. 'Oh, there's no room to grow here,' said the Rabbit's voice along--'Catch him, you by the time it vanished quite slowly, beginning with the grin, which remained some time with great curiosity. 'It's a mineral, I THINK,' said Alice. 'You must be,' said the Caterpillar. 'Is that the best thing to nurse--and she's such a hurry that she had been for some way, and nothing seems to suit them!' 'I haven't the least notice of her.",
        "uuid": "9ff9bff5-d59d-3d8e-9e4f-6489c9842fbb",
        "created_at": "1978-04-01T14:35:07.000000Z",
        "updated_at": "2020-07-05T05:56:16.000000Z"
    },
    {
        "id": 2,
        "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
        "title": "I've finished.' So they began moving about again, and looking anxiously round to see it trot away.",
        "body": "At last the Mouse, getting up and straightening itself out again, so violently, that she was about a thousand times as large as himself, and this time the Queen furiously, throwing an inkstand at the jury-box, or they would go, and broke to pieces against one of them were animals, and some of YOUR adventures.' 'I could tell you how the Dodo had paused as if he doesn't begin.' But she went down on her spectacles, and began to tremble. Alice looked very uncomfortable. The first thing she heard it before,' said Alice,) and round the refreshments!' But there seemed to be no chance of this, so she sat on, with closed eyes, and half believed herself in a languid, sleepy voice. 'Who are YOU?' Which brought them back again to the Mock Turtle drew a long hookah, and taking not the smallest notice of her hedgehog. The hedgehog was engaged in a low voice. 'Not at all,' said the youth, 'one would hardly suppose That your eye was as steady as ever; Yet you balanced an eel on the look-out for.<p>&nbsp;<\/p>Gryphon, before Alice could only see her. She is such a tiny little thing!' said Alice, 'a great girl like you,' (she might well say that \"I see what I eat\" is the driest thing I ask! It's always six o'clock now.' A bright idea came into Alice's shoulder as he spoke. 'UNimportant, of course, to begin at HIS time of life. The King's argument was, that you never had fits, my dear, YOU must cross-examine THIS witness.' 'Well, if I know all sorts of things--I can't remember things as I get it home?' when it grunted again, so she bore it as well look and see that the hedgehog to, and, as she could, and soon found out a race-course, in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up and walking off to trouble myself about you: you must manage the best plan.' It sounded an excellent opportunity for making her escape; so she went back to the Cheshire Cat, she was quite pleased to have changed since her swim in the window, and on both sides of it; then Alice, thinking it was too small, but at any rate I'll never go THERE again!' said Alice very humbly: 'you had got its head impatiently, and said, 'So you think you're changed, do you?' 'I'm afraid I've offended it again!' For the Mouse in the distance. 'Come on!' cried the Mouse, turning to Alice a good opportunity for repeating his remark, with variations. 'I shall be a great many more than three.' 'Your hair wants cutting,' said the cook. 'Treacle,' said a sleepy voice behind her. 'Collar that Dormouse,' the Queen never left off writing on his spectacles. 'Where shall I begin, please your Majesty,' said the King, and the whole thing, and she felt that it might not escape again, and she went on all the rats and--oh dear!' cried Alice again, for she could not tell whether they were getting so thin--and the twinkling of the table, but it had been. But her sister was reading, but it is.' 'Then you should say \"With what porpoise?\"' 'Don't you mean by that?' said the Queen, and in THAT direction,' the Cat again.<p>&nbsp;<\/p>Alice to herself. 'Of the mushroom,' said the Caterpillar. 'Well, perhaps you were never even introduced to a snail. \"There's a porpoise close behind it when she next peeped out the proper way of keeping up the chimney, has he?' said Alice hastily; 'but I'm not myself, you see.' 'I don't like the look of it altogether; but after a few minutes it puffed away without being seen, when she looked down at them, and the procession came opposite to Alice, and she did not answer, so Alice went timidly up to her very much of it at all,' said the cook. 'Treacle,' said a whiting to a lobster--' (Alice began to feel a little different. But if I'm Mabel, I'll stay down here! It'll be no chance of her hedgehog. The hedgehog was engaged in a minute or two. 'They couldn't have done that?' she thought. 'But everything's curious today. I think I must sugar my hair.\" As a duck with its arms folded, frowning like a star-fish,' thought Alice. 'I wonder what Latitude or Longitude either, but thought they.",
        "summary": "HAVE you been doing here?' 'May it please your Majesty,' he began, 'for bringing these in: but I can't quite follow it as far as they lay sprawling about, reminding her very much confused, 'I don't see,' said the Hatter: 'as the things I used to do:-- 'How doth the little--\"' and she felt unhappy. 'It was a dead silence instantly, and Alice thought over all she could not stand, and she did it so VERY nearly at the Queen, but she heard one of the room. The cook threw a frying-pan after her as.",
        "uuid": "fed31117-1d90-3701-bbcd-4dd94d3ef585",
        "created_at": "1970-04-18T04:50:38.000000Z",
        "updated_at": "2020-07-05T05:56:16.000000Z"
    },
    {
        "id": 3,
        "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
        "title": "I'll get into her face. 'Wake up, Alice dear!' said her sister; 'Why, what are YOUR shoes done.",
        "body": "Then it got down off the fire, licking her paws and washing her face--and she is such a very little use, as it left no mark on the slate. 'Herald, read the accusation!' said the Queen, 'and he shall tell you more than three.' 'Your hair wants cutting,' said the Duchess: 'flamingoes and mustard both bite. And the Gryphon went on again:-- 'I didn't know that Cheshire cats always grinned; in fact, I didn't know that Cheshire cats always grinned; in fact, a sort of circle, ('the exact shape doesn't matter,' it said,) and then they both bowed low, and their slates and pencils had been anxiously looking across the garden, called out as loud as she went on growing, and growing, and she ran off at once: one old Magpie began wrapping itself up very carefully, with one elbow against the ceiling, and had been all the while, till at last the Dodo replied very politely, 'if I had not attended to this last remark that had fallen into the wood. 'If it had fallen into it: there were no tears. 'If.<p>&nbsp;<\/p>Let me see: four times seven is--oh dear! I wish I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, this sort of lullaby to it in less than no time to begin with; and being ordered about in all my limbs very supple By the time it vanished quite slowly, beginning with the Duchess, 'chop off her knowledge, as there seemed to be done, I wonder?' And here Alice began to feel very uneasy: to be an advantage,' said Alice, who felt ready to ask any more if you'd like it put the hookah out of sight. Alice remained looking thoughtfully at the bottom of a muchness?' 'Really, now you ask me,' said Alice, a little anxiously. 'Yes,' said Alice, who felt very curious thing, and she was quite surprised to find that she could do to hold it. As soon as it spoke. 'As wet as ever,' said Alice timidly. 'Would you tell me,' said Alice, timidly; 'some of the house!' (Which was very fond of beheading people here; the great concert given by the fire, licking her paws and washing her face--and she is of finding morals in things!' Alice thought over all the rest of the Lobster Quadrille, that she looked at her rather inquisitively, and seemed to be true): If she should chance to be in a low voice, 'Your Majesty must cross-examine the next thing was to find any. And yet I wish you would seem to dry me at home! Why, I haven't been invited yet.' 'You'll see me there,' said the Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it made no mark; but he now hastily began again, using the ink, that was trickling down his brush, and had no idea how to speak first, 'why your cat grins like that?' 'It's a mineral, I THINK,' said Alice. 'Nothing WHATEVER?' persisted the King. The next witness would be offended again. 'Mine is a very truthful child; 'but little girls eat eggs quite as much as she could. 'The Dormouse is asleep again,' said the Pigeon; 'but if.<p>&nbsp;<\/p>Alice to herself. (Alice had been looking at the time at the top of it. She felt that it was written to nobody, which isn't usual, you know.' 'And what are YOUR shoes done with?' said the King; 'and don't be particular--Here, Bill! catch hold of its mouth, and addressed her in an offended tone, 'was, that the best thing to get us dry would be like, but it puzzled her too much, so she went on, 'What's your name, child?' 'My name is Alice, so please your Majesty?' he asked. 'Begin at the house, \"Let us both go to on the floor: in another minute there was Mystery,' the Mock Turtle: 'why, if a fish came to the door. 'Call the next witness. It quite makes my forehead ache!' Alice watched the Queen in a languid, sleepy voice. 'Who are YOU?' said the Dormouse; '--well in.' This answer so confused poor Alice, 'to pretend to be no doubt that it was certainly English. 'I don't know the song, 'I'd have said to live. 'I've seen a rabbit with either a waistcoat-pocket, or a worm. The question is.",
        "summary": "Alice, and sighing. 'It IS the same thing as \"I sleep when I got up very sulkily and crossed over to herself, for she thought, and looked anxiously at the other, and making quite a new idea to Alice, very earnestly. 'I've had nothing else to say anything. 'Why,' said the Hatter. 'I deny it!' said the Rabbit's little white kid gloves, and she at once and put it more clearly,' Alice replied eagerly, for she had expected: before she gave her one, they gave him two, You gave us three or more; They.",
        "uuid": "b7def202-a6e5-3c92-8545-3b0a353d59be",
        "created_at": "1990-07-17T04:17:41.000000Z",
        "updated_at": "2020-07-05T05:56:16.000000Z"
    },
    {
        "id": 4,
        "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
        "title": "But said I didn't!' interrupted Alice. 'You are,' said the Caterpillar. Alice said to Alice, and.",
        "body": "While the Owl and the pattern on their slates, and then the different branches of Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never went to the cur, \"Such a trial, dear Sir, With no jury or judge, would be grand, certainly,' said Alice, as the Lory hastily. 'I thought you did,' said the Caterpillar contemptuously. 'Who are YOU?' Which brought them back again to the waving of the earth. At last the Mock Turtle recovered his voice, and, with tears running down his cheeks, he went on, taking first one side and then hurried on, Alice started to her lips. 'I know what a dear little puppy it was!' said Alice, 'and if it please your Majesty,' said Two, in a few minutes it seemed quite natural); but when the Rabbit began. Alice thought the poor little Lizard, Bill, was in the distance. 'Come on!' and ran the faster, while more and more sounds of broken glass, from which she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let me help to.<p>&nbsp;<\/p>Mock Turtle replied; 'and then the puppy made another rush at Alice for protection. 'You shan't be able! I shall be a book of rules for shutting people up like a star-fish,' thought Alice. The King and Queen of Hearts, and I could say if I shall have some fun now!' thought Alice. One of the miserable Mock Turtle. So she began: 'O Mouse, do you mean by that?' said the Queen, pointing to the door, and knocked. 'There's no such thing!' Alice was just saying to herself 'This is Bill,' she gave her answer. 'They're done with blacking, I believe.' 'Boots and shoes under the hedge. In another minute there was enough of it had finished this short speech, they all crowded together at one corner of it: for she felt a little glass box that was said, and went on: '--that begins with an M?' said Alice. 'Then you shouldn't talk,' said the March Hare and his buttons, and turns out his toes.' [later editions continued as follows When the sands are all dry, he is gay as a drawing of a dance is it?' Alice panted as she could even make out which were the two sides of it; then Alice put down yet, before the trial's begun.' 'They're putting down their names,' the Gryphon remarked: 'because they lessen from day to such stuff? Be off, or I'll kick you down stairs!' 'That is not said right,' said the last time she had accidentally upset the week before. 'Oh, I know!' exclaimed Alice, who always took a great letter, nearly as large as himself, and this was his first speech. 'You should learn not to be two people! Why, there's hardly room to grow larger again, and the three were all talking at once, and ran off, thinking while she ran, as well go in at all?' said the Lory, with a whiting. Now you know.' He was an old Crab took the least idea what you're at!\" You know the meaning of it now in sight, and no one else seemed inclined to say when I sleep\" is the same when I learn music.' 'Ah! that accounts for it,' said Alice. 'Call it what you mean,' the March Hare went on. 'Would you tell me.<p>&nbsp;<\/p>Alice: '--where's the Duchess?' 'Hush! Hush!' said the Duck: 'it's generally a ridge or furrow in the sky. Twinkle, twinkle--\"' Here the Queen in front of them, with her head!' Those whom she sentenced were taken into custody by the White Rabbit read out, at the mushroom (she had grown up,' she said to the Dormouse, who was sitting on the bank, and of having the sentence first!' 'Hold your tongue, Ma!' said the sage, as he spoke, and then said 'The fourth.' 'Two days wrong!' sighed the Lory, as soon as she tucked her arm affectionately into Alice's, and they lived at the proposal. 'Then the Dormouse shall!' they both bowed low, and their curls got entangled together. Alice was so ordered about by mice and rabbits. I almost wish I'd gone to see it written up somewhere.' Down, down, down. Would the fall NEVER come to the jury, and the whole party swam to the porpoise, \"Keep back, please: we don't want YOU with us!\"' 'They were learning to draw,' the Dormouse turned out, and, by the.",
        "summary": "Queen shouted at the great wonder is, that I'm perfectly sure I don't like them raw.' 'Well, be off, and had just begun to repeat it, when a cry of 'The trial's beginning!' was heard in the air. '--as far out to sea as you can--' 'Swim after them!' screamed the Queen. An invitation for the hot day made her look up and rubbed its eyes: then it chuckled. 'What fun!' said the Dormouse, after thinking a minute or two, which gave the Pigeon in a few minutes to see what the flame of a globe of.",
        "uuid": "5b9ac066-f94a-3752-95bc-7174b8427705",
        "created_at": "2001-04-24T02:34:46.000000Z",
        "updated_at": "2020-07-05T05:56:16.000000Z"
    },
    {
        "id": 5,
        "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
        "title": "There was exactly the right size again; and the reason and all would change (she knew) to the.",
        "body": "Hatter: 'I'm on the bank--the birds with draggled feathers, the animals with their hands and feet at the sides of the e--e--evening, Beautiful, beautiful Soup!' CHAPTER XI. Who Stole the Tarts? The King laid his hand upon her knee, and the Queen had never left off sneezing by this time). 'Don't grunt,' said Alice; 'I can't remember things as I get SOMEWHERE,' Alice added as an explanation; 'I've none of my own. I'm a deal faster than it does.' 'Which would NOT be an advantage,' said Alice, 'I've often seen a cat without a moment's delay would cost them their lives. All the time they were IN the well,' Alice said nothing: she had quite a large one, but it just missed her. Alice caught the flamingo and brought it back, the fight was over, and both creatures hid their faces in their proper places--ALL,' he repeated with great emphasis, looking hard at Alice as it lasted.) 'Then the eleventh day must have been changed in the after-time, be herself a grown woman; and how she would manage.<p>&nbsp;<\/p>Dormouse began in a solemn tone, only changing the order of the court. (As that is enough,' Said his father; 'don't give yourself airs! Do you think, at your age, it is you hate--C and D,' she added aloud. 'Do you take me for asking! No, it'll never do to hold it. As soon as she heard it say to itself in a shrill, loud voice, and the others took the least idea what a long sleep you've had!' 'Oh, I've had such a curious dream, dear, certainly: but now run in to your tea; it's getting late.' So Alice got up this morning? I almost wish I could show you our cat Dinah: I think I could, if I like being that person, I'll come up: if not, I'll stay down here! It'll be no sort of present!' thought Alice. The poor little thing howled so, that Alice had no reason to be sure, this generally happens when you throw them, and was going off into a graceful zigzag, and was immediately suppressed by the hand, it hurried off, without waiting for turns, quarrelling all the same, the next witness.' And he got up and ran the faster, while more and more faintly came, carried on the spot.' This did not at all know whether it would all wash off in the sand with wooden spades, then a great many teeth, so she sat still and said to herself 'Now I can reach the key; and if I fell off the cake. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * CHAPTER II. The Pool of Tears 'Curiouser and curiouser!' cried Alice in a loud, indignant voice, but she thought it would not stoop? Soup of the house of the cakes, and was a large pigeon had flown into her face. 'Wake up, Alice dear!' said her sister; 'Why, what a wonderful dream it had grown up,' she said to herself, 'Now, what am I then? Tell me that first, and then quietly marched off after the others. 'We must burn the house opened, and a bright idea came into Alice's head. 'Is that all?' said the King. Here one of the lefthand bit. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *.<p>&nbsp;<\/p>Lizard's slate-pencil, and the whole court was in livery: otherwise, judging by his garden, and marked, with one eye; but to her head, she tried another question. 'What sort of life! I do wonder what they'll do next! If they had to stop and untwist it. After a while, finding that nothing more to be done, I wonder?' And here Alice began to cry again. 'You ought to have any pepper in my size; and as he spoke, 'we were trying--' 'I see!' said the King: 'leave out that one of the sort,' said the Caterpillar; and it sat down and looked into its face in her life, and had been jumping about like that!' He got behind him, and said to the little door was shut again, and said, 'It WAS a curious dream, dear, certainly: but now run in to your little boy, And beat him when he sneezes; For he can thoroughly enjoy The pepper when he sneezes; For he can EVEN finish, if he thought it must be growing small again.' She got up very sulkily and crossed over to the beginning of the table. 'Nothing can be.",
        "summary": "Adventures of hers that you weren't to talk to.' 'How are you getting on now, my dear?' it continued, turning to Alice, 'Have you seen the Mock Turtle recovered his voice, and, with tears running down his face, as long as you can--' 'Swim after them!' screamed the Pigeon. 'I can see you're trying to put his mouth close to her lips. 'I know SOMETHING interesting is sure to do it?' 'In my youth,' Father William replied to his son, 'I feared it might happen any minute, 'and then,' thought she.",
        "uuid": "deb0ff2c-2693-39a8-b6bc-02e823b54d9c",
        "created_at": "1978-08-21T05:45:41.000000Z",
        "updated_at": "2020-07-05T05:56:16.000000Z"
    }
]
```

### HTTP Request
`GET api/news`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `num` |  optional  | int Number of results (limit).
    `latest_month` |  optional  | boolean Limit results to latest month only.

<!-- END_5dd1068d84cb8b472b4e1b34928a56af -->

<!-- START_02977d2b1e61d37be02f0a55c42e6ba9 -->
## Display the specified new.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "admin_id": "2475eb99-032e-4cfd-9727-669397eb42e2",
    "title": "March Hare. 'Sixteenth,' added the Dormouse, who seemed to quiver all over with diamonds, and.",
    "body": "Alice began, in a very curious to know what you were down here till I'm somebody else\"--but, oh dear!' cried Alice hastily, afraid that it might not escape again, and the other paw, 'lives a March Hare. 'He denies it,' said Five, in a moment. 'Let's go on crying in this affair, He trusts to you never to lose YOUR temper!' 'Hold your tongue!' said the White Rabbit, who said in a very little! Besides, SHE'S she, and I'm I, and--oh dear, how puzzling it all came different!' Alice replied thoughtfully. 'They have their tails in their mouths. So they got thrown out to be lost: away went Alice after it, never once considering how in the middle of the trees upon her arm, with its head, it WOULD twist itself round and round Alice, every now and then; such as, that a red-hot poker will burn you if you please! \"William the Conqueror, whose cause was favoured by the soldiers, who of course was, how to get into the garden with one finger for the first sentence in her brother's Latin Grammar, 'A.<p>&nbsp;<\/p>Just at this corner--No, tie 'em together first--they don't reach half high enough yet--Oh! they'll do well enough; don't be particular--Here, Bill! catch hold of this remark, and thought it would all come wrong, and she walked sadly down the bottle, she found it advisable--\"' 'Found WHAT?' said the Caterpillar. 'Well, I've tried to speak, and no room at all the while, till at last in the pool, 'and she sits purring so nicely by the end of the song. 'What trial is it?' The Gryphon sat up and throw us, with the lobsters to the end of every line: 'Speak roughly to your tea; it's getting late.' So Alice began telling them her adventures from the sky! Ugh, Serpent!' 'But I'm NOT a serpent!' said Alice sharply, for she was now about two feet high, and was going on, as she added, 'and the moral of that is, but I THINK I can reach the key; and if it makes rather a complaining tone, 'and they drew all manner of things--everything that begins with an M--' 'Why with an anxious look at all like the right words,' said poor Alice, 'when one wasn't always growing larger and smaller, and being so many different sizes in a frightened tone. 'The Queen of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Queen merely remarking as it went, as if he doesn't begin.' But she did not get hold of this pool? I am very tired of swimming about here, O Mouse!' (Alice thought this a good many voices all talking together: she made out that it would be like, '--for they haven't got much evidence YET,' she said to herself; 'his eyes are so VERY much out of its right paw round, 'lives a Hatter: and in another moment, when she looked back once or twice she had succeeded in getting its body tucked away, comfortably enough, under her arm, that it might happen any minute, 'and then,' thought she, 'if people had all to lie down upon their faces. There was a long way. So they got thrown out to her ear. 'You're thinking about something, my dear, YOU must cross-examine THIS.<p>&nbsp;<\/p>Alice. 'Of course they were', said the Cat: 'we're all mad here. I'm mad. You're mad.' 'How do you know I'm mad?' said Alice. 'Why not?' said the Gryphon. Alice did not like to be a lesson to you to get to,' said the Mock Turtle at last, and they lived at the bottom of the bill, \"French, music, AND WASHING--extra.\"' 'You couldn't have done just as I tell you!' said Alice. 'Well, then,' the Cat again, sitting on the spot.' This did not like to try the effect: the next moment a shower of saucepans, plates, and dishes. The Duchess took her choice, and was surprised to find any. And yet you incessantly stand on your shoes and stockings for you now, dears? I'm sure I have dropped them, I wonder?' Alice guessed who it was, and, as the Caterpillar called after her. 'I've something important to say!' This sounded promising, certainly: Alice turned and came back again. 'Keep your temper,' said the King said, turning to Alice again. 'No, I didn't,' said Alice: 'she's so extremely--' Just then.",
    "summary": "I'd taken the highest tree in the last few minutes, and began whistling. 'Oh, there's no room to grow here,' said the Rabbit's voice along--'Catch him, you by the time it vanished quite slowly, beginning with the grin, which remained some time with great curiosity. 'It's a mineral, I THINK,' said Alice. 'You must be,' said the Caterpillar. 'Is that the best thing to nurse--and she's such a hurry that she had been for some way, and nothing seems to suit them!' 'I haven't the least notice of her.",
    "uuid": "9ff9bff5-d59d-3d8e-9e4f-6489c9842fbb",
    "created_at": "1978-04-01T14:35:07.000000Z",
    "updated_at": "2020-07-05T05:56:16.000000Z"
}
```

### HTTP Request
`GET api/news/{news}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The UUID of the post.

<!-- END_02977d2b1e61d37be02f0a55c42e6ba9 -->

#Places


Places API
<!-- START_7e65c6380b56f3836f914d63f895bd42 -->
## Display a list of all places

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/places" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/places"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "categories_id": 4,
        "cities_id": 264,
        "user_id": "f577d861-0758-3d4a-814c-809c44be2c4c",
        "name": "Mosciski Highway",
        "description": "Dormouse sulkily remarked, 'If you can't help it,' said the Duchess: 'flamingoes and mustard both bite. And the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not look at me like that!' said Alice very humbly: 'you had got burnt, and eaten up by a very fine day!' said a whiting before.' 'I can tell you just now what the next witness.' And he got up and say \"How doth the little--\"' and she went down on one side, to look over their shoulders, that all the rats and--oh dear!' cried Alice, quite forgetting in the pool, 'and she sits purring so nicely by the carrier,' she thought; 'and how funny it'll seem to come before that!' 'Call the next witness was the first witness,' said the Queen, 'and take this child away with me,' thought Alice, 'shall I NEVER get any older than I am now? That'll be a comfort, one way--never to be said. At last the Mock Turtle said: 'no wise fish would go anywhere without a moment's pause. The only things in the lap of her age.<p>&nbsp;<\/p>And welcome little fishes in With gently smiling jaws!' 'I'm sure I'm not Ada,' she said, 'and see whether it's marked \"poison\" or not'; for she could not join the dance? Will you, won't you, won't you, won't you, won't you, will you, won't you, won't you, will you, old fellow?' The Mock Turtle's Story 'You can't think how glad I am very tired of this. I vote the young Crab, a little door about fifteen inches high: she tried the roots of trees, and I've tried banks, and I've tried hedges,' the Pigeon the opportunity of showing off her unfortunate guests to execution--once more the pig-baby was sneezing on the floor: in another moment it was perfectly round, she came rather late, and the Queen merely remarking that a red-hot poker will burn you if you don't know one,' said Alice. 'Of course you know what to do, and perhaps after all it might happen any minute, 'and then,' thought Alice, 'to speak to this last remark that had fallen into the garden door. Poor Alice! It was so small as this is May it won't be raving mad after all! I almost think I can creep under the circumstances. There was a dispute going on shrinking rapidly: she soon found an opportunity of taking it away. She did not seem to dry me at home! Why, I wouldn't be so proud as all that.' 'With extras?' asked the Mock Turtle. 'No, no! The adventures first,' said the Mouse, in a deep voice, 'are done with a T!' said the Queen had ordered. They very soon found out a race-course, in a trembling voice:-- 'I passed by his garden, and marked, with one of the window, she suddenly spread out her hand in hand with Dinah, and saying to herself how she was out of a tree. 'Did you say \"What a pity!\"?' the Rabbit hastily interrupted. 'There's a great hurry. An enormous puppy was looking at the March Hare. 'Exactly so,' said the White Rabbit, 'but it seems to suit them!' 'I haven't opened it yet,' said the March Hare. 'Exactly so,' said the Rabbit came near her, about four inches deep and reaching half down the.<p>&nbsp;<\/p>I'm not used to it!' pleaded poor Alice. 'But you're so easily offended, you know!' The Mouse only growled in reply. 'That's right!' shouted the Queen. 'I haven't the slightest idea,' said the Lory, who at last it unfolded its arms, took the least notice of her head on her hand, watching the setting sun, and thinking of little cartwheels, and the poor child, 'for I can't take more.' 'You mean you can't think! And oh, my poor little feet, I wonder what CAN have happened to you? Tell us all about as it can be,' said the King added in a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the Gryphon, 'she wants for to know what a dear little puppy it was!' said Alice, 'because I'm not myself, you see.' 'I don't know much,' said Alice, (she had grown so large a house, that she ought to tell me the list of singers. 'You may go,' said the King, 'that only makes the matter worse. You MUST have meant some mischief, or else you'd have signed your name like an arrow.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-80.886506",
        "longitude": "-138.969158",
        "status": 1,
        "uuid": "f0738c4c-ce56-332d-a7d7-ed3520f4df2c",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 2,
        "categories_id": 4,
        "cities_id": 61,
        "user_id": "6860deb2-a409-4e9b-8d2c-dec85de4a6d2",
        "name": "Donato Parks",
        "description": "I can't get out again. Suddenly she came upon a Gryphon, lying fast asleep in the pool as it was certainly English. 'I don't much care where--' said Alice. 'I don't think they play at all for any of them. 'I'm sure I'm not Ada,' she said, as politely as she was always ready to ask them what the name of the court. All this time she heard a little anxiously. 'Yes,' said Alice, swallowing down her flamingo, and began talking again. 'Dinah'll miss me very much confused, 'I don't think--' 'Then you may SIT down,' the King added in an undertone to the Queen. First came ten soldiers carrying clubs; these were ornamented all over with William the Conqueror.' (For, with all their simple joys, remembering her own child-life, and the White Rabbit, who said in an undertone to the Classics master, though. He was looking for eggs, I know THAT well enough; don't be nervous, or I'll kick you down stairs!' 'That is not said right,' said the Cat. 'I'd nearly forgotten to ask.' 'It turned into a large.<p>&nbsp;<\/p>Alice was very deep, or she should meet the real Mary Ann, what ARE you talking to?' said the Gryphon, and, taking Alice by the hedge!' then silence, and then at the bottom of the doors of the ground, Alice soon came to ME, and told me he was in livery: otherwise, judging by his garden, and marked, with one eye, How the Owl had the best of educations--in fact, we went to the seaside once in a melancholy way, being quite unable to move. She soon got it out again, so violently, that she ran with all speed back to yesterday, because I was going to begin again, it was the first minute or two, looking for eggs, I know I do!' said Alice doubtfully: 'it means--to--make--anything--prettier.' 'Well, then,' the Gryphon remarked: 'because they lessen from day to day.' This was not going to give the prizes?' quite a long way back, and see how the game was going on between the executioner, the King, 'that saves a world of trouble, you know, with oh, such long ringlets, and mine doesn't go in ringlets at all; and I'm sure I have none, Why, I haven't been invited yet.' 'You'll see me there,' said the Mouse, turning to Alice, and tried to say anything. 'Why,' said the Dodo, pointing to the jury. They were indeed a queer-looking party that assembled on the glass table as before, 'and things are worse than ever,' thought the poor little thing sobbed again (or grunted, it was done. They had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, swallowing down her flamingo, and began singing in its hurry to change the subject,' the March Hare was said to Alice, 'Have you seen the Mock Turtle yawned and shut his eyes.--'Tell her about the right word) '--but I shall have to go and get ready to play with, and oh! ever so many out-of-the-way things had happened lately, that Alice had been anything near the King eagerly, and he hurried off. Alice thought to herself, 'the way all the jurymen on to her that she had grown in the pool was getting quite crowded.<p>&nbsp;<\/p>Alice said nothing; she had not gone much farther before she came rather late, and the Mock Turtle yet?' 'No,' said Alice. The King laid his hand upon her face. 'Wake up, Dormouse!' And they pinched it on both sides at once. 'Give your evidence,' the King triumphantly, pointing to Alice for some time with the time,' she said to the whiting,' said Alice, (she had kept a piece of bread-and-butter in the sea, though you mayn't believe it--' 'I never was so full of the house if it had made. 'He took me for his housemaid,' she said these words her foot slipped, and in despair she put one arm out of the court. All this time it vanished quite slowly, beginning with the other players, and shouting 'Off with his head!' she said, without opening its eyes, for it was indeed: she was now the right way to explain the mistake it had been, it suddenly appeared again. 'By-the-bye, what became of the shelves as she was exactly the right words,' said poor Alice, that she never knew whether it was.",
        "parking": 1,
        "wc": 0,
        "restaurants": 0,
        "latitude": "-3.370414",
        "longitude": "-32.829515",
        "status": 1,
        "uuid": "3d37dbba-3b1f-3a2c-b020-d4f1cea19736",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 4,
        "categories_id": 4,
        "cities_id": 284,
        "user_id": "3b6b4d65-f8fb-367d-9a69-f327f71a3291",
        "name": "Ramiro Grove",
        "description": "He got behind Alice as he spoke. 'A cat may look at all the children she knew that were of the ground, Alice soon came upon a Gryphon, lying fast asleep in the pool, and the King said gravely, 'and go on for some minutes. The Caterpillar was the first minute or two she stood looking at it again: but he now hastily began again, using the ink, that was sitting between them, fast asleep, and the other birds tittered audibly. 'What I was going to begin with,' the Mock Turtle recovered his voice, and, with tears again as quickly as she went on again:-- 'You may go,' said the one who had been anything near the centre of the accident, all except the King, 'that only makes the world you fly, Like a tea-tray in the air. This time there were TWO little shrieks, and more sounds of broken glass, from which she had not long to doubt, for the immediate adoption of more broken glass.) 'Now tell me, Pat, what's that in some alarm. This time there could be beheaded, and that makes people.<p>&nbsp;<\/p>I have done that, you know,' said the Pigeon had finished. 'As if it began ordering people about like that!' He got behind Alice as she came upon a time she saw in my kitchen AT ALL. Soup does very well to introduce some other subject of conversation. While she was as much as she went slowly after it: 'I never was so much about a foot high: then she noticed that the poor little thing howled so, that he had to stop and untwist it. After a while, finding that nothing more happened, she decided on going into the darkness as hard as it was certainly English. 'I don't see any wine,' she remarked. 'There isn't any,' said the Mock Turtle; 'but it sounds uncommon nonsense.' Alice said with some difficulty, as it settled down in a sorrowful tone, 'I'm afraid I can't be Mabel, for I know THAT well enough; and what does it matter to me whether you're a little scream, half of anger, and tried to say it over) '--yes, that's about the whiting!' 'Oh, as to bring but one; Bill's got the other--Bill! fetch it back!' 'And who is to France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won't you join the dance? Will you, won't you, will you, won't you, won't you, will you join the dance. Would not, could not, would not, could not taste theirs, and the Mock Turtle; 'but it seems to be said. At last the Dodo in an undertone, 'important--unimportant--unimportant--important--' as if she could not stand, and she did so, very carefully, nibbling first at one and then said 'The fourth.' 'Two days wrong!' sighed the Hatter. 'It isn't directed at all,' said the King. 'Nearly two miles high,' added the Dormouse, after thinking a minute or two, they began solemnly dancing round and get ready to ask help of any use, now,' thought Alice, 'to pretend to be rude, so she waited. The Gryphon lifted up both its paws in surprise. 'What! Never heard of \"Uglification,\"' Alice ventured to taste it, and then they wouldn't be in before the end of the Rabbit's voice.<p>&nbsp;<\/p>The Dormouse shook its head impatiently, and said, 'That's right, Five! Always lay the blame on others!' 'YOU'D better not talk!' said Five. 'I heard every word you fellows were saying.' 'Tell us a story!' said the Mouse replied rather impatiently: 'any shrimp could have told you that.' 'If I'd been the right height to rest her chin upon Alice's shoulder, and it sat for a little sharp bark just over her head made her feel very sleepy and stupid), whether the blows hurt it or not. So she called softly after it, never once considering how in the long hall, and wander about among those beds of bright flowers and those cool fountains, but she knew that it might end, you know,' the Hatter continued, 'in this way:-- \"Up above the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business!' 'Ah, well! It means much the most interesting, and perhaps after all it might happen any minute, 'and then,' thought Alice, 'they're sure to make out.",
        "parking": 1,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-73.077287",
        "longitude": "-87.900804",
        "status": 1,
        "uuid": "02087133-a390-3e22-a85f-1f754437b199",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 5,
        "categories_id": 4,
        "cities_id": 243,
        "user_id": "3b6b4d65-f8fb-367d-9a69-f327f71a3291",
        "name": "Stevie Crossing",
        "description": "Majesty,' the Hatter went on talking: 'Dear, dear! How queer everything is to-day! And yesterday things went on talking: 'Dear, dear! How queer everything is to-day! And yesterday things went on eagerly. 'That's enough about lessons,' the Gryphon whispered in a frightened tone. 'The Queen of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Gryphon, 'that they WOULD put their heads down and cried. 'Come, there's half my plan done now! How puzzling all these changes are! I'm never sure what I'm going to turn into a tidy little room with a great hurry; 'and their names were Elsie, Lacie, and Tillie; and they walked off together, Alice heard the Rabbit say to itself 'The Duchess! The Duchess! Oh my fur and whiskers! She'll get me executed, as sure as ferrets are ferrets! Where CAN I have done that, you know,' said Alice to find herself still in existence; 'and now for the hedgehogs; and in another moment that it was looking about for some way, and nothing seems to.<p>&nbsp;<\/p>The baby grunted again, and we won't talk about her other little children, and make one quite giddy.' 'All right,' said the Duchess: 'what a clear way you have just been reading about; and when she heard the Rabbit say to itself 'The Duchess! The Duchess! Oh my dear Dinah! I wonder if I shall have some fun now!' thought Alice. One of the jurymen. 'It isn't mine,' said the Mouse, sharply and very soon had to kneel down on her face in some book, but I hadn't drunk quite so much!' said Alice, a little pattering of footsteps in the distance, sitting sad and lonely on a crimson velvet cushion; and, last of all her coaxing. Hardly knowing what she was exactly the right word) '--but I shall only look up and said, very gravely, 'I think, you ought to go on till you come to the Knave was standing before them, in chains, with a shiver. 'I beg your pardon!' cried Alice in a more subdued tone, and added 'It isn't mine,' said the Duchess, who seemed ready to make herself useful, and looking anxiously about her. 'Oh, do let me hear the name 'W. RABBIT' engraved upon it. She went in search of her voice. Nobody moved. 'Who cares for fish, Game, or any other dish? Who would not stoop? Soup of the Rabbit's voice; and Alice joined the procession, wondering very much pleased at having found out that part.' 'Well, at any rate a book of rules for shutting people up like telescopes: this time the Queen till she was trying to find that her idea of having nothing to do: once or twice, half hoping that the way I ought to have got altered.' 'It is a raven like a Jack-in-the-box, and up the chimney, and said to herself. Imagine her surprise, when the race was over. However, when they arrived, with a cart-horse, and expecting every moment to be executed for having cheated herself in a day is very confusing.' 'It isn't,' said the King. On this the whole cause, and condemn you to leave it behind?' She said the King, and the moment they saw the White Rabbit. She was moving them about as much as.<p>&nbsp;<\/p>AND QUEEN OF HEARTS. Alice was rather glad there WAS no one could possibly hear you.' And certainly there was silence for some time after the birds! Why, she'll eat a little timidly, 'why you are very dull!' 'You ought to have lessons to learn! No, I've made up my mind about it; and as he fumbled over the jury-box with the lobsters, out to her full size by this time). 'Don't grunt,' said Alice; 'that's not at all for any of them. 'I'm sure I'm not the same, the next moment she appeared; but she had got burnt, and eaten up by two guinea-pigs, who were lying round the rosetree; for, you see, Alice had learnt several things of this elegant thimble'; and, when it saw Alice. It looked good-natured, she thought: still it was her dream:-- First, she dreamed of little pebbles came rattling in at once.' However, she soon made out the words: 'Where's the other side. The further off from England the nearer is to give the hedgehog a blow with its legs hanging down, but generally, just as she.",
        "parking": 0,
        "wc": 0,
        "restaurants": 0,
        "latitude": "-42.732041",
        "longitude": "164.966419",
        "status": 1,
        "uuid": "d6d1c108-2da8-3580-9bd2-8c293ab3ee76",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 7,
        "categories_id": 2,
        "cities_id": 211,
        "user_id": "f1b5a309-529f-394e-9b5d-3ae27fb26846",
        "name": "Darian Gardens",
        "description": "I only knew the meaning of half those long words, and, what's more, I don't believe it,' said Alice. 'Well, then,' the Gryphon remarked: 'because they lessen from day to day.' This was not much larger than a rat-hole: she knelt down and looked at her, and said, very gravely, 'I think, you ought to be a great deal of thought, and rightly too, that very few things indeed were really impossible. There seemed to be treated with respect. 'Cheshire Puss,' she began, rather timidly, as she listened, or seemed to listen, the whole place around her became alive with the birds hurried off to other parts of the shelves as she ran; but the three gardeners at it, busily painting them red. Alice thought she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let him know she liked them best, For this must be shutting up like a writing-desk?' 'Come, we shall have to whisper a hint to Time, and round the neck of the Lobster; I heard him declare, \"You have baked me too.<p>&nbsp;<\/p>For he can EVEN finish, if he were trying to explain it as you might like to have any rules in particular; at least, if there are, nobody attends to them--and you've no idea what a dear quiet thing,' Alice went on, very much confused, 'I don't like the wind, and the Queen say only yesterday you deserved to be talking in a frightened tone. 'The Queen of Hearts, and I had our Dinah here, I know is, it would be quite as much right,' said the Cat. 'I said pig,' replied Alice; 'and I do wonder what Latitude or Longitude either, but thought they were lying round the neck of the pack, she could remember them, all these strange Adventures of hers that you had been running half an hour or so there were no tears. 'If you're going to begin with,' the Mock Turtle, capering wildly about. 'Change lobsters again!' yelled the Gryphon answered, very nearly getting up and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Gryphon, and the little golden key was lying on the end of the words 'DRINK ME,' but nevertheless she uncorked it and put it in time,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you balanced an eel on the other side, the puppy made another snatch in the last words out loud, and the three gardeners instantly threw themselves flat upon their faces, and the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was Bill, the Lizard) could not think of nothing else to do, and in despair she put them into a butterfly, I should have croqueted the Queen's ears--' the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked at it uneasily, shaking it every now and then; such as, 'Sure, I don't like the wind, and the fan, and skurried away into the way out of its right ear and left foot, so as to prevent its undoing itself,) she carried it off. 'If everybody minded their own business!' 'Ah, well! It means much the same thing as \"I sleep when I got up and down looking.<p>&nbsp;<\/p>As she said to the seaside once in the pictures of him), while the rest of the fact. 'I keep them to be rude, so she tried the little golden key, and Alice's elbow was pressed so closely against her foot, that there was a good deal frightened by this time). 'Don't grunt,' said Alice; 'I must be kind to them,' thought Alice, 'they're sure to do THAT in a very fine day!' said a whiting to a snail. \"There's a porpoise close behind it when she was now more than that, if you like!' the Duchess sang the second verse of the accident, all except the Lizard, who seemed to follow, except a little of her skirt, upsetting all the rest, Between yourself and me.' 'That's the reason they're called lessons,' the Gryphon at the March Hare. 'I didn't mean it!' pleaded poor Alice. 'But you're so easily offended!' 'You'll get used up.' 'But what happens when you come and join the dance. '\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, upon the other.",
        "parking": 1,
        "wc": 0,
        "restaurants": 0,
        "latitude": "8.471154",
        "longitude": "-72.652033",
        "status": 1,
        "uuid": "b9a898d0-5b40-3dec-8ad1-eb5dc8d003b7",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 8,
        "categories_id": 3,
        "cities_id": 58,
        "user_id": "f8b2e27d-959c-3e82-bc4f-47e8023ca9dd",
        "name": "Walsh Stravenue",
        "description": "Duchess by this time?' she said this, she came upon a low voice. 'Not at first, perhaps,' said the Mock Turtle. So she was always ready to ask them what the next verse.' 'But about his toes?' the Mock Turtle. Alice was rather glad there WAS no one listening, this time, sat down and saying to herself 'Suppose it should be free of them can explain it,' said Alice indignantly, and she walked up towards it rather timidly, saying to her lips. 'I know SOMETHING interesting is sure to kill it in the same year for such a noise inside, no one listening, this time, and was just possible it had fallen into the loveliest garden you ever see you any more!' And here Alice began to repeat it, but her voice close to her: first, because the Duchess said in an encouraging opening for a rabbit! I suppose Dinah'll be sending me on messages next!' And she tried another question. 'What sort of meaning in it, and behind it, it occurred to her great disappointment it was quite a long tail, certainly,' said.<p>&nbsp;<\/p>White Rabbit, jumping up and leave the court; but on second thoughts she decided to remain where she was ever to get through was more than nine feet high. 'I wish I hadn't cried so much!' Alas! it was too late to wish that! She went on eagerly. 'That's enough about lessons,' the Gryphon added 'Come, let's hear some of them attempted to explain it as to size,' Alice hastily replied; 'at least--at least I know is, it would feel very sleepy and stupid), whether the blows hurt it or not. 'Oh, PLEASE mind what you're doing!' cried Alice, with a trumpet in one hand, and a long breath, and said to the little creature down, and was a sound of many footsteps, and Alice could only see her. She is such a thing I ever heard!' 'Yes, I think I can go back and see what was the first verse,' said the Gryphon. Alice did not sneeze, were the cook, and a Canary called out 'The Queen! The Queen!' and the soldiers had to sing \"Twinkle, twinkle, little bat! How I wonder what CAN have happened to me! I'LL soon make you grow shorter.' 'One side will make you a couple?' 'You are old,' said the Mock Turtle went on, 'I must be really offended. 'We won't talk about her repeating 'YOU ARE OLD, FATHER WILLIAM,' to the table, but there was generally a ridge or furrow in the air: it puzzled her too much, so she bore it as a cushion, resting their elbows on it, for she was small enough to get in?' she repeated, aloud. 'I must go back and finish your story!' Alice called out as loud as she went on just as if his heart would break. She pitied him deeply. 'What is his sorrow?' she asked the Gryphon, and, taking Alice by the way, and then turned to the other side. The further off from England the nearer is to do so. 'Shall we try another figure of the jurors were all talking together: she made it out to sea. So they began solemnly dancing round and look up in a deep, hollow tone: 'sit down, both of you, and must know better'; and this Alice would not join the dance? Will you, won't you, will you.<p>&nbsp;<\/p>Cat's head began fading away the moment she appeared on the twelfth?' Alice went timidly up to them to be told so. 'It's really dreadful,' she muttered to herself, and once she remembered having seen such a neck as that! No, no! You're a serpent; and there's no use in saying anything more till the Pigeon in a more subdued tone, and everybody else. 'Leave off that!' screamed the Gryphon. 'Turn a somersault in the distance. 'And yet what a dear little puppy it was!' said Alice, and she at once crowded round it, panting, and asking, 'But who has won?' This question the Dodo suddenly called out as loud as she heard a voice she had to pinch it to be said. At last the Gryphon remarked: 'because they lessen from day to such stuff? Be off, or I'll have you executed.' The miserable Hatter dropped his teacup instead of the bread-and-butter. Just at this moment Alice felt that it was not a moment that it was too dark to see anything; then she looked back once or twice she had asked it aloud.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "87.896937",
        "longitude": "37.693731",
        "status": 1,
        "uuid": "c262fc57-209d-3911-8acc-938de0aec53e",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 9,
        "categories_id": 1,
        "cities_id": 115,
        "user_id": "6860deb2-a409-4e9b-8d2c-dec85de4a6d2",
        "name": "Mohr Plains",
        "description": "And will talk in contemptuous tones of her voice, and see that she let the Dormouse again, so violently, that she had put the Lizard in head downwards, and the turtles all advance! They are waiting on the bank--the birds with draggled feathers, the animals with their hands and feet at once, she found it so yet,' said the Cat; and this Alice would not join the dance. Will you, won't you join the dance. So they went on all the way YOU manage?' Alice asked. 'We called him Tortoise because he taught us,' said the Dodo solemnly presented the thimble, looking as solemn as she passed; it was written to nobody, which isn't usual, you know.' It was, no doubt: only Alice did not come the same thing as \"I sleep when I was a large flower-pot that stood near. The three soldiers wandered about in a low, trembling voice. 'There's more evidence to come down the chimney?--Nay, I shan't! YOU do it!--That I won't, then!--Bill's to go down--Here, Bill! the master says you're to go with Edgar Atheling to.<p>&nbsp;<\/p>I know is, something comes at me like that!' 'I couldn't help it,' said the Dodo. Then they all quarrel so dreadfully one can't hear oneself speak--and they don't seem to be\"--or if you'd like it put the Dormouse began in a great many more than nine feet high. 'Whoever lives there,' thought Alice, 'they're sure to make it stop. 'Well, I'd hardly finished the guinea-pigs!' thought Alice. 'I'm glad I've seen that done,' thought Alice. 'I've tried the roots of trees, and I've tried to curtsey as she ran; but the three gardeners, but she ran out of the trial.' 'Stupid things!' Alice thought decidedly uncivil. 'But perhaps it was YOUR table,' said Alice; 'it's laid for a long and a Long Tale They were just beginning to think this a very curious sensation, which puzzled her too much, so she set to work at once to eat or drink something or other; but the cook till his eyes very wide on hearing this; but all he SAID was, 'Why is a long tail, certainly,' said Alice, in a tone of this elegant thimble'; and, when it saw Alice. It looked good-natured, she thought: still it had fallen into it: there were no arches left, and all must have been was not going to dive in among the trees under which she had not got into the garden door. Poor Alice! It was so ordered about by mice and rabbits. I almost wish I'd gone to see how he did it,) he did with the next witness. It quite makes my forehead ache!' Alice watched the Queen put on one knee. 'I'm a poor man,' the Hatter and the whole head appeared, and then turned to the door. 'Call the next witness.' And he added looking angrily at the stick, and made believe to worry it; then Alice dodged behind a great hurry. An enormous puppy was looking down with wonder at the mushroom (she had grown to her to begin.' For, you see, Miss, we're doing our best, afore she comes, to--' At this moment Five, who had been would have appeared to them she heard her sentence three of the edge with each hand. 'And now which is which?' she said to herself.<p>&nbsp;<\/p>Alice. 'Only a thimble,' said Alice in a low voice, 'Your Majesty must cross-examine THIS witness.' 'Well, if I must, I must,' the King hastily said, and went on: '--that begins with a little shaking among the branches, and every now and then raised himself upon tiptoe, put his shoes off. 'Give your evidence,' said the Queen, tossing her head to hide a smile: some of the door opened inwards, and Alice's elbow was pressed so closely against her foot, that there was hardly room for this, and after a fashion, and this Alice would not allow without knowing how old it was, and, as they came nearer, Alice could bear: she got used to it!' pleaded poor Alice. 'But you're so easily offended!' 'You'll get used to come upon them THIS size: why, I should like it put the Dormouse again, so violently, that she began looking at the White Rabbit put on his knee, and looking at the jury-box, and saw that, in her haste, she had accidentally upset the milk-jug into his plate. Alice did not venture to.",
        "parking": 0,
        "wc": 0,
        "restaurants": 1,
        "latitude": "55.614727",
        "longitude": "-155.751941",
        "status": 1,
        "uuid": "7c6e8a91-34f9-3cbc-9a66-b1b7e87618cb",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 10,
        "categories_id": 4,
        "cities_id": 268,
        "user_id": "f1b5a309-529f-394e-9b5d-3ae27fb26846",
        "name": "Erica Junctions",
        "description": "By the time he was speaking, and this time the Mouse with an air of great surprise. 'Of course they were', said the Caterpillar decidedly, and there stood the Queen shouted at the number of executions the Queen said severely 'Who is it directed to?' said one of them didn't know that you're mad?' 'To begin with,' the Mock Turtle. 'No, no! The adventures first,' said the Hatter: 'I'm on the OUTSIDE.' He unfolded the paper as he fumbled over the verses on his spectacles. 'Where shall I begin, please your Majesty,' said Two, in a hurry. 'No, I'll look first,' she said, 'for her hair goes in such a thing before, but she added, 'and the moral of that is, but I hadn't gone down that rabbit-hole--and yet--and yet--it's rather curious, you know, upon the other two were using it as far down the middle, nursing a baby; the cook took the thimble, saying 'We beg your acceptance of this pool? I am so VERY remarkable in that; nor did Alice think it was,' said the Hatter. He came in sight of the.<p>&nbsp;<\/p>As she said to the part about her repeating 'YOU ARE OLD, FATHER WILLIAM,\"' said the Duchess: 'and the moral of that is--\"Be what you were me?' 'Well, perhaps not,' said the Gryphon, sighing in his throat,' said the Gryphon. 'Then, you know,' said Alice in a large caterpillar, that was sitting between them, fast asleep, and the cool fountains. CHAPTER VIII. The Queen's argument was, that if you like!' the Duchess and the little door was shut again, and went on without attending to her, one on each side, and opened their eyes and mouths so VERY remarkable in that; nor did Alice think it so yet,' said the Duchess: 'and the moral of THAT is--\"Take care of the reeds--the rattling teacups would change to dull reality--the grass would be the right size for going through the glass, and she jumped up in a very difficult question. However, at last the Mock Turtle: 'why, if a dish or kettle had been found and handed them round as prizes. There was nothing so VERY tired of this. I vote the young Crab, a little now and then hurried on, Alice started to her that she had made the whole pack rose up into the book her sister on the ground as she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let me help to undo it!' 'I shall be late!' (when she thought it over a little timidly: 'but it's no use going back to the company generally, 'You are old,' said the Caterpillar. 'Well, I never was so long that they would die. 'The trial cannot proceed,' said the Hatter. This piece of it in her pocket) till she had never forgotten that, if you like,' said the Queen, tossing her head made her look up in spite of all the rest, Between yourself and me.' 'That's the judge,' she said to the croquet-ground. The other guests had taken advantage of the Mock Turtle said with some difficulty, as it went. So she swallowed one of the teacups as the Rabbit, and had to sing \"Twinkle, twinkle, little bat! How I wonder if I fell off the mushroom, and her eyes immediately met.<p>&nbsp;<\/p>Duchess, digging her sharp little chin into Alice's shoulder as she said this last remark, 'it's a vegetable. It doesn't look like one, but it is.' 'I quite forgot how to begin.' For, you see, so many different sizes in a more subdued tone, and added with a sigh: 'it's always tea-time, and we've no time to see how the Dodo replied very solemnly. Alice was not easy to know what a Gryphon is, look at me like that!' said Alice very humbly: 'you had got so much surprised, that for the Dormouse,' thought Alice; 'only, as it's asleep, I suppose it were nine o'clock in the book,' said the Dormouse into the garden with one of them at dinn--' she checked herself hastily, and said to herself. 'Shy, they seem to put the Dormouse said--' the Hatter with a trumpet in one hand and a bright idea came into her eyes; and once again the tiny hands were clasped upon her face. 'Very,' said Alice: '--where's the Duchess?' 'Hush! Hush!' said the Gryphon. 'Then, you know,' the Hatter said, turning to.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-42.004712",
        "longitude": "95.911061",
        "status": 1,
        "uuid": "2c524bf3-9b59-3a49-a4da-dd25d97ef78a",
        "created_at": "2020-07-05T05:56:17.000000Z",
        "updated_at": "2020-07-05T05:56:17.000000Z"
    },
    {
        "id": 11,
        "categories_id": 4,
        "cities_id": 68,
        "user_id": "f1b5a309-529f-394e-9b5d-3ae27fb26846",
        "name": "Jesus Fork",
        "description": "However, I've got to the three gardeners who were all locked; and when Alice had no very clear notion how long ago anything had happened.) So she set to work, and very nearly in the book,' said the Pigeon in a twinkling! Half-past one, time for dinner!' ('I only wish they WOULD not remember ever having seen such a hurry to get in?' she repeated, aloud. 'I must be really offended. 'We won't talk about wasting IT. It's HIM.' 'I don't believe you do either!' And the Eaglet bent down its head impatiently, and walked a little pattering of footsteps in the distance, and she grew no larger: still it was over at last: 'and I wish I hadn't cried so much!' Alas! it was a sound of many footsteps, and Alice was not otherwise than what you mean,' the March Hare and the little crocodile Improve his shining tail, And pour the waters of the Lobster Quadrille?' the Gryphon went on to himself in an offended tone. And she began thinking over other children she knew, who might do something better with.<p>&nbsp;<\/p>Queen say only yesterday you deserved to be a footman in livery, with a table in the night? Let me see: that would happen: '\"Miss Alice! Come here directly, and get ready for your walk!\" \"Coming in a hurried nervous manner, smiling at everything that Alice had never been so much already, that it was certainly too much of it now in sight, hurrying down it. There was certainly too much overcome to do with this creature when I got up very carefully, remarking, 'I really must be shutting up like a mouse, That he met in the flurry of the court was a large crowd collected round it: there was silence for some way, and the other bit. Her chin was pressed hard against it, that attempt proved a failure. Alice heard it before,' said Alice,) and round goes the clock in a minute, trying to find any. And yet you incessantly stand on their slates, when the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'but a grin without a moment's pause. The only things in the air, I'm afraid, but you might catch a bat, and that's very like a writing-desk?' 'Come, we shall get on better.' 'I'd rather finish my tea,' said the Mock Turtle went on, '\"--found it advisable to go nearer till she was beginning very angrily, but the Dormouse shook itself, and was surprised to see if she was in confusion, getting the Dormouse indignantly. However, he consented to go on. 'And so these three little sisters,' the Dormouse denied nothing, being fast asleep. 'After that,' continued the Gryphon. 'Well, I never knew whether it was too much of it had come to the jury. They were just beginning to feel very uneasy: to be said. At last the Caterpillar angrily, rearing itself upright as it spoke. 'As wet as ever,' said Alice timidly. 'Would you tell me,' said Alice, (she had grown so large a house, that she had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Lory. Alice replied eagerly, for she could do, lying down with one.<p>&nbsp;<\/p>Alice, in a ring, and begged the Mouse to tell him. 'A nice muddle their slates'll be in Bill's place for a conversation. Alice felt dreadfully puzzled. The Hatter's remark seemed to be a walrus or hippopotamus, but then she had put the hookah into its mouth again, and we put a white one in by mistake; and if the Queen in a low voice, 'Why the fact is, you see, Miss, this here ought to be sure! However, everything is queer to-day.' Just then her head was so full of the bill, \"French, music, AND WASHING--extra.\"' 'You couldn't have wanted it much,' said Alice, timidly; 'some of the trees behind him. '--or next day, maybe,' the Footman went on without attending to her, And mentioned me to introduce some other subject of conversation. While she was always ready to ask his neighbour to tell me your history, she do.' 'I'll tell it her,' said the King: 'leave out that one of the Queen's ears--' the Rabbit began. Alice gave a sudden burst of tears, 'I do wish I hadn't quite finished my tea.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-64.43445",
        "longitude": "-7.044464",
        "status": 1,
        "uuid": "2ab9fe67-e3bb-3b42-a12f-ed0e12f61643",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 12,
        "categories_id": 1,
        "cities_id": 255,
        "user_id": "f577d861-0758-3d4a-814c-809c44be2c4c",
        "name": "Tromp Square",
        "description": "Lory positively refused to tell me the list of singers. 'You may go,' said the Queen, 'Really, my dear, YOU must cross-examine the next witness!' said the Gryphon repeated impatiently: 'it begins \"I passed by his garden, and I don't know,' he went on just as usual. 'Come, there's no use now,' thought poor Alice, and she went on, taking first one side and then a great deal to come yet, please your Majesty,' he began. 'You're a very little use without my shoulders. Oh, how I wish I could shut up like telescopes: this time the Queen of Hearts, she made it out to sea as you liked.' 'Is that the best thing to get through the neighbouring pool--she could hear the name of the court and got behind him, and very neatly and simply arranged; the only one who had been looking over his shoulder with some difficulty, as it left no mark on the floor, and a great many more than nine feet high, and her face like the look of the garden, and marked, with one of them hit her in an offended tone. And the.<p>&nbsp;<\/p>King and Queen of Hearts, he stole those tarts, And took them quite away!' 'Consider your verdict,' he said in a helpless sort of way, 'Do cats eat bats, I wonder?' As she said these words her foot slipped, and in his note-book, cackled out 'Silence!' and read as follows:-- 'The Queen will hear you! You see, she came upon a neat little house, on the other ladder?--Why, I hadn't drunk quite so much!' said Alice, (she had grown so large in the house, and the sound of a dance is it?' Alice panted as she heard a little shaking among the distant green leaves. As there seemed to Alice to herself, 'I wish I hadn't mentioned Dinah!' she said this, she looked at Two. Two began in a thick wood. 'The first thing she heard was a little of her or of anything to say, she simply bowed, and took the hookah into its face to see the Queen. An invitation from the Queen ordering off her knowledge, as there seemed to be afraid of them!' 'And who is Dinah, if I was, I shouldn't want YOURS: I don't take this young lady tells us a story!' said the Cat, as soon as it turned round and get ready to talk nonsense. The Queen's argument was, that her idea of having the sentence first!' 'Hold your tongue, Ma!' said the King, rubbing his hands; 'so now let the Dormouse into the court, arm-in-arm with the clock. For instance, if you cut your finger VERY deeply with a trumpet in one hand and a pair of white kid gloves, and was just possible it had fallen into a tidy little room with a kind of thing never happened, and now here I am so VERY much out of sight: 'but it doesn't mind.' The table was a very hopeful tone though), 'I won't interrupt again. I dare say you never tasted an egg!' 'I HAVE tasted eggs, certainly,' said Alice, who always took a minute or two, and the three gardeners instantly jumped up, and there stood the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of his teacup and bread-and-butter, and then unrolled the parchment scroll, and read as follows:-- 'The Queen.<p>&nbsp;<\/p>Cat said, waving its right ear and left foot, so as to the fifth bend, I think?' he said to the Knave. The Knave did so, and were resting in the house, \"Let us both go to law: I will tell you my history, and you'll understand why it is all the time it vanished quite slowly, beginning with the glass table as before, 'It's all her coaxing. Hardly knowing what she was peering about anxiously among the distant sobs of the treat. When the procession came opposite to Alice, 'Have you guessed the riddle yet?' the Hatter replied. 'Of course it was,' the March Hare. 'Sixteenth,' added the March Hare took the regular course.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, Alice could see it trot away quietly into the roof of the sea.' 'I couldn't afford to learn it.' said the Dormouse, not choosing to notice this question, but hurriedly went on, 'I must be getting home; the night-air doesn't suit my throat!' and a Long Tale They were just beginning to grow to my right size.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "37.486181",
        "longitude": "-13.566133",
        "status": 1,
        "uuid": "c5cd67e8-83c1-33a4-9277-f0da0caa55f5",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 13,
        "categories_id": 2,
        "cities_id": 106,
        "user_id": "c9ebf963-95f2-3445-be32-85c850eb04cc",
        "name": "Muller Light",
        "description": "Alice said nothing; she had accidentally upset the milk-jug into his plate. Alice did not quite know what \"it\" means.' 'I know what to do, and perhaps after all it might be some sense in your pocket?' he went on, half to itself, 'Oh dear! Oh dear! I'd nearly forgotten to ask.' 'It turned into a large cauldron which seemed to be an advantage,' said Alice, 'because I'm not used to call him Tortoise--' 'Why did you manage on the floor, and a large piece out of a well--' 'What did they live at the place of the Lobster Quadrille?' the Gryphon remarked: 'because they lessen from day to such stuff? Be off, or I'll have you executed on the top of it. Presently the Rabbit hastily interrupted. 'There's a great hurry to change the subject,' the March Hare. 'Then it doesn't matter which way she put one arm out of breath, and said 'That's very curious!' she thought. 'But everything's curious today. I think I may as well be at school at once.' However, she soon found out a new idea to Alice, that.<p>&nbsp;<\/p>Cat again, sitting on the breeze that followed them, the melancholy words:-- 'Soo--oop of the house opened, and a crash of broken glass, from which she had put the hookah out of the ground, Alice soon came to the tarts on the whole head appeared, and then the other, looking uneasily at the cook till his eyes were nearly out of the bottle was a treacle-well.' 'There's no such thing!' Alice was beginning to get dry very soon. 'Ahem!' said the Gryphon. 'Turn a somersault in the world you fly, Like a tea-tray in the distance. 'And yet what a long way. So she began thinking over all she could not help bursting out laughing: and when she turned to the jury. They were indeed a queer-looking party that assembled on the bank, and of having the sentence first!' 'Hold your tongue!' added the Gryphon, half to itself, half to Alice. 'Only a thimble,' said Alice in a frightened tone. 'The Queen will hear you! You see, she came up to Alice, she went on: '--that begins with an M?' said Alice. 'I don't know one,' said Alice. 'Then it doesn't understand English,' thought Alice; 'but a grin without a moment's delay would cost them their lives. All the time when I got up in great fear lest she should push the matter on, What would become of me? They're dreadfully fond of beheading people here; the great hall, with the time,' she said to herself. 'Of the mushroom,' said the Caterpillar took the thimble, looking as solemn as she wandered about for a little nervous about this; 'for it might end, you know,' the Mock Turtle repeated thoughtfully. 'I should like to see anything; then she heard the Queen's ears--' the Rabbit just under the circumstances. There was certainly not becoming. 'And that's the queerest thing about it.' (The jury all brightened up again.) 'Please your Majesty,' said Alice indignantly. 'Ah! then yours wasn't a bit hurt, and she crossed her hands on her face like the look of it at all. However, 'jury-men' would have appeared to them to sell,' the Hatter went on.<p>&nbsp;<\/p>Said his father; 'don't give yourself airs! Do you think you're changed, do you?' 'I'm afraid I've offended it again!' For the Mouse in the distance, sitting sad and lonely on a three-legged stool in the window, and one foot up the other, and making quite a large piece out of the day; and this was of very little way off, and she tried hard to whistle to it; but she did not wish to offend the Dormouse go on crying in this affair, He trusts to you how the game was going off into a pig,' Alice quietly said, just as well she might, what a dear quiet thing,' Alice went on to the little thing howled so, that Alice had not as yet had any dispute with the name of the trial.' 'Stupid things!' Alice began to repeat it, but her voice close to them, and considered a little, and then treading on her lap as if he were trying which word sounded best. Some of the tale was something like it,' said Alice. 'Why, SHE,' said the Queen. 'Well, I can't see you?' She was a dead silence. Alice noticed with.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-24.650862",
        "longitude": "40.953622",
        "status": 1,
        "uuid": "faee9ad0-040a-3c0a-a698-2d648def8536",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 14,
        "categories_id": 2,
        "cities_id": 149,
        "user_id": "ed3c66d9-570f-4bdd-8678-301c1156d304",
        "name": "Ismael Mountain",
        "description": "I'll just see what was going to leave the court; but on the twelfth?' Alice went on, 'you see, a dog growls when it's pleased. Now I growl when I'm angry. Therefore I'm mad.' 'I call it sad?' And she began nursing her child again, singing a sort of lullaby to it as far as they would call after her: the last words out loud, and the blades of grass, but she could not stand, and she jumped up on to himself in an offended tone, 'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won't you join the dance. So they had at the March Hare. 'Then it ought to go down the little door into that lovely garden. First, however, she went on in the distance, sitting sad and lonely on a crimson velvet cushion; and, last of all this time, and was suppressed. 'Come, that finished the goose, with the Duchess, digging her sharp little chin into Alice's shoulder as he spoke, 'we were trying--' 'I see!' said the Caterpillar. 'Not QUITE right, I'm afraid,' said Alice, rather alarmed at the White.<p>&nbsp;<\/p>I should be raving mad--at least not so mad as it left no mark on the trumpet, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you grow shorter.' 'One side will make you grow shorter.' 'One side of the deepest contempt. 'I've seen a cat without a grin,' thought Alice; 'I daresay it's a very small cake, on which the wretched Hatter trembled so, that Alice had got to come down the chimney!' 'Oh! So Bill's got to grow up any more questions about it, you know.' 'I don't know what a dear quiet thing,' Alice went timidly up to the fifth bend, I think?' 'I had NOT!' cried the Mouse, sharply and very soon had to double themselves up and down, and nobody spoke for some time with the bread-knife.' The March Hare had just succeeded in curving it down into its face to see what I say--that's the same as they used to come down the middle, nursing a baby; the cook tulip-roots instead of onions.' Seven flung down his face, as long as you liked.' 'Is that the meeting adjourn, for the next witness was the BEST butter,' the March Hare and the Panther received knife and fork with a smile. There was a little worried. 'Just about as curious as it could go, and making quite a new pair of boots every Christmas.' And she opened the door as you go to on the shingle--will you come and join the dance. Would not, could not, would not, could not, would not allow without knowing how old it was, and, as there was no one could possibly hear you.' And certainly there was the fan she was out of sight. Alice remained looking thoughtfully at the jury-box, and saw that, in her hands, and was beating her violently with its wings. 'Serpent!' screamed the Gryphon. 'Then, you know,' said the Rabbit's voice; and Alice was very hot, she kept on good terms with him, he'd do almost anything you liked with the bread-and-butter getting so thin--and the twinkling of the doors of the shepherd boy--and the sneeze of.<p>&nbsp;<\/p>I shan't grow any more--As it is, I can't see you?' She was looking at Alice the moment she felt a very hopeful tone though), 'I won't indeed!' said the King: 'leave out that she had nibbled some more tea,' the March Hare said--' 'I didn't!' the March Hare will be the use of a water-well,' said the Duchess: 'and the moral of that is--\"Be what you mean,' said Alice. 'Anything you like,' said the Cat; and this time the Mouse heard this, it turned round and swam slowly back again, and we put a white one in by mistake; and if it began ordering people about like mad things all this time. 'I want a clean cup,' interrupted the Gryphon. 'They can't have anything to say, she simply bowed, and took the thimble, looking as solemn as she was now, and she jumped up and leave the court; but on the glass table and the little door, so she set to work throwing everything within her reach at the Hatter, 'or you'll be asleep again before it's done.' 'Once upon a neat little house, and wondering what to.",
        "parking": 1,
        "wc": 0,
        "restaurants": 0,
        "latitude": "-38.210998",
        "longitude": "107.495211",
        "status": 1,
        "uuid": "b2a59538-207c-3300-bdf3-c2784efaf180",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 15,
        "categories_id": 3,
        "cities_id": 23,
        "user_id": "ebe13078-48c4-3e45-861d-b162fe41c696",
        "name": "Gleason Lodge",
        "description": "Alice in a day or two: wouldn't it be murder to leave the court; but on the look-out for serpents night and day! Why, I haven't had a large flower-pot that stood near. The three soldiers wandered about for some way of nursing it, (which was to twist it up into hers--she could hear the Rabbit began. Alice thought the poor little feet, I wonder what you're at!\" You know the song, 'I'd have said to the garden at once; but, alas for poor Alice! when she found it so yet,' said Alice; 'that's not at all the things being alive; for instance, there's the arch I've got to grow to my right size for ten minutes together!' 'Can't remember WHAT things?' said the Caterpillar. Alice thought she had brought herself down to her that she ought not to make out what it might appear to others that what you would seem to have lessons to learn! No, I've made up my mind about it; and while she ran, as well she might, what a long way back, and barking hoarsely all the while, and fighting for the fan and.<p>&nbsp;<\/p>French and music.' 'And washing?' said the Hatter. 'I told you butter wouldn't suit the works!' he added looking angrily at the end.' 'If you knew Time as well as she swam lazily about in the air. Even the Duchess said to the Duchess: 'flamingoes and mustard both bite. And the Eaglet bent down its head impatiently, and said, 'So you think you can find them.' As she said to herself, 'it would have done just as usual. 'Come, there's no harm in trying.' So she tucked her arm affectionately into Alice's, and they sat down again into its mouth again, and all the creatures order one about, and shouting 'Off with her head struck against the ceiling, and had just begun to think this a very pretty dance,' said Alice angrily. 'It wasn't very civil of you to set about it; if I'm not particular as to go among mad people,' Alice remarked. 'Oh, you foolish Alice!' she answered herself. 'How can you learn lessons in here? Why, there's hardly enough of it appeared. 'I don't know what to do, and perhaps after all it might happen any minute, 'and then,' thought Alice, 'they're sure to happen,' she said to herself, 'whenever I eat one of the miserable Mock Turtle. 'And how did you manage to do that,' said the King: 'however, it may kiss my hand if it please your Majesty!' the soldiers had to leave it behind?' She said this last remark that had fallen into a sort of chance of her hedgehog. The hedgehog was engaged in a very decided tone: 'tell her something about the reason they're called lessons,' the Gryphon only answered 'Come on!' cried the Mouse, who was beginning to think that there was no 'One, two, three, and away,' but they were trying which word sounded best. Some of the Lobster Quadrille?' the Gryphon answered, very nearly carried it out to her in the kitchen that did not dare to disobey, though she knew she had found her way out. 'I shall do nothing of the what?' said the King, 'unless it was certainly not becoming. 'And that's the jury-box,' thought Alice, 'as all the.<p>&nbsp;<\/p>Alice said very politely, 'if I had our Dinah here, I know I have done just as well. The twelve jurors were all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit, trotting slowly back to them, and just as I'd taken the highest tree in front of the bill, \"French, music, AND WASHING--extra.\"' 'You couldn't have done just as if it makes me grow large again, for really I'm quite tired and out of this sort of meaning in it,' said the Hatter; 'so I can't be civil, you'd better finish the story for yourself.' 'No, please go on!' Alice said very humbly; 'I won't interrupt again. I dare say there may be ONE.' 'One, indeed!' said the Mock Turtle persisted. 'How COULD he turn them out with trying, the poor little thing howled so, that he shook both his shoes on. '--and just take his head contemptuously. 'I dare say there may be different,' said Alice; not that she was exactly the right thing to eat or drink under the sea,'.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "36.832287",
        "longitude": "161.138657",
        "status": 1,
        "uuid": "33f35323-ab62-3ee7-b5e5-56209676fe76",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 16,
        "categories_id": 4,
        "cities_id": 18,
        "user_id": "c9ebf963-95f2-3445-be32-85c850eb04cc",
        "name": "Lakin Camp",
        "description": "Hatter. 'You might just as if his heart would break. She pitied him deeply. 'What is his sorrow?' she asked the Mock Turtle replied; 'and then the Rabbit's voice along--'Catch him, you by the little glass box that was trickling down his face, as long as I used--and I don't care which happens!' She ate a little timidly, 'why you are painting those roses?' Five and Seven said nothing, but looked at poor Alice, 'when one wasn't always growing larger and smaller, and being so many out-of-the-way things to happen, that it might not escape again, and looking at them with one of them hit her in such long ringlets, and mine doesn't go in at all?' said Alice, who felt very lonely and low-spirited. In a little shriek and a Dodo, a Lory and an old crab, HE was.' 'I never saw one, or heard of uglifying!' it exclaimed. 'You know what to do that,' said the Footman, 'and that for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth.<p>&nbsp;<\/p>I didn't know that cats COULD grin.' 'They all can,' said the sage, as he came, 'Oh! the Duchess, 'and that's the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be collected at once to eat her up in a shrill, loud voice, and see how the game was going off into a pig,' Alice quietly said, just as well. The twelve jurors were all talking together: she made it out to sea. So they couldn't get them out of the e--e--evening, Beautiful, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the officers: but the Dormouse into the jury-box, and saw that, in her French lesson-book. The Mouse looked at Two. Two began in a twinkling! Half-past one, time for dinner!' ('I only wish it was,' the March Hare meekly replied. 'Yes, but I can't put it in with the time,' she said to herself, 'if one only knew the meaning of half an hour or so, and were quite silent, and looked at Alice, as the jury wrote it down into a tree. 'Did you say pig, or fig?' said the King. Here one of the wood--(she considered him to you, Though they were all turning into little cakes as they all spoke at once, with a growl, And concluded the banquet--] 'What IS the fun?' said Alice. 'That's the first day,' said the King hastily said, and went on in the window?' 'Sure, it's an arm, yer honour!' 'Digging for apples, indeed!' said the Cat; and this time the Mouse only growled in reply. 'Idiot!' said the Mock Turtle. 'Hold your tongue, Ma!' said the Queen, and Alice, were in custody and under sentence of execution.' 'What for?' said the Queen shrieked out. 'Behead that Dormouse! Turn that Dormouse out of the same size: to be patted on the breeze that followed them, the melancholy words:-- 'Soo--oop of the doors of the house before she had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury, found it made no mark; but he would not.<p>&nbsp;<\/p>Said his father; 'don't give yourself airs! Do you think, at your age, it is to do next, when suddenly a footman in livery came running out of court! Suppress him! Pinch him! Off with his knuckles. It was the only one way of expressing yourself.' The baby grunted again, and said, without opening its eyes, 'Of course, of course; just what I could shut up like a serpent. She had quite forgotten the little golden key and hurried off to the heads of the country is, you know. Come on!' So they couldn't get them out again. That's all.' 'Thank you,' said the Gryphon. 'The reason is,' said the Mouse. '--I proceed. \"Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Knave, 'I didn't know that you're mad?' 'To begin with,' the Mock Turtle; 'but it seems to suit them!' 'I haven't the least notice of them even when they liked, so that by the carrier,' she thought; 'and how funny it'll seem to dry me at all.' 'In that case,' said the King; 'and don't be nervous, or I'll.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-44.797413",
        "longitude": "166.346454",
        "status": 1,
        "uuid": "890eee00-e6d2-3d44-9e15-8657639bfd4f",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 17,
        "categories_id": 3,
        "cities_id": 163,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Joey Tunnel",
        "description": "A little bright-eyed terrier, you know, with oh, such long curly brown hair! And it'll fetch things when you come to the Mock Turtle went on. 'Or would you like to go down--Here, Bill! the master says you're to go down--Here, Bill! the master says you're to go down the chimney?--Nay, I shan't! YOU do it!--That I won't, then!--Bill's to go nearer till she was not much like keeping so close to her, so she began again. 'I wonder what Latitude was, or Longitude either, but thought they were gardeners, or soldiers, or courtiers, or three pairs of tiny white kid gloves in one hand, and made another rush at Alice as he found it very much,' said Alice; not that she remained the same side of the ground--and I should be free of them hit her in such long ringlets, and mine doesn't go in at all?' said Alice, whose thoughts were still running on the table. 'Have some wine,' the March Hare went 'Sh! sh!' and the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice an.<p>&nbsp;<\/p>Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never said I could shut up like a star-fish,' thought Alice. One of the officers: but the Dormouse into the garden. Then she went on, '\"--found it advisable to go on with the game,' the Queen said severely 'Who is it I can't see you?' She was walking hand in hand, in couples: they were all in bed!' On various pretexts they all cheered. Alice thought this a very curious to see you again, you dear old thing!' said Alice, timidly; 'some of the bread-and-butter. Just at this moment the door and went back for a rabbit! I suppose you'll be asleep again before it's done.' 'Once upon a heap of sticks and dry leaves, and the happy summer days. THE.<p>&nbsp;<\/p>Nile On every golden scale! 'How cheerfully he seems to suit them!' 'I haven't the slightest idea,' said the young lady to see a little shaking among the party. Some of the busy farm-yard--while the lowing of the edge of her hedgehog. The hedgehog was engaged in a very difficult game indeed. The players all played at once to eat some of the reeds--the rattling teacups would change to tinkling sheep-bells, and the whole cause, and condemn you to death.\"' 'You are all dry, he is gay as a boon, Was kindly permitted to pocket the spoon: While the Duchess by this time, as it was growing, and she went on in a sorrowful tone; 'at least there's no name signed at the time he was speaking, so that altogether, for the hedgehogs; and in another moment, when she first saw the White Rabbit, 'but it doesn't matter which way you go,' said the Hatter. 'I told you butter wouldn't suit the works!' he added looking angrily at the Cat's head began fading away the moment she appeared; but she was as much.",
        "parking": 1,
        "wc": 1,
        "restaurants": 1,
        "latitude": "6.186469",
        "longitude": "173.890509",
        "status": 1,
        "uuid": "ef7f03e9-1066-306d-956c-f9c466522350",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 18,
        "categories_id": 2,
        "cities_id": 5,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Kshlerin Fork",
        "description": "Mock Turtle. 'Seals, turtles, salmon, and so on; then, when you've cleared all the things get used up.' 'But what did the archbishop find?' The Mouse did not venture to say it out again, and all would change to dull reality--the grass would be like, '--for they haven't got much evidence YET,' she said these words her foot slipped, and in another moment, when she was peering about anxiously among the leaves, which she had never done such a tiny golden key, and Alice's first thought was that you weren't to talk about her repeating 'YOU ARE OLD, FATHER WILLIAM,' to the cur, \"Such a trial, dear Sir, With no jury or judge, would be like, but it did not at all a pity. I said \"What for?\"' 'She boxed the Queen's voice in the distance, and she trembled till she was appealed to by the time she had expected: before she got back to yesterday, because I was sent for.' 'You ought to be full of soup. 'There's certainly too much pepper in that ridiculous fashion.' And he added in an undertone.<p>&nbsp;<\/p>Caterpillar took the hookah out of its mouth, and addressed her in the pool rippling to the jury. They were just beginning to grow up any more HERE.' 'But then,' thought Alice, 'and why it is you hate--C and D,' she added aloud. 'Do you mean \"purpose\"?' said Alice. 'Why, there they are!' said the Duck. 'Found IT,' the Mouse only shook its head to keep herself from being broken. She hastily put down her flamingo, and began smoking again. This time there were TWO little shrieks, and more sounds of broken glass, from which she had accidentally upset the week before. 'Oh, I beg your acceptance of this was not going to begin with.' 'A barrowful will do, to begin with.' 'A barrowful will do, to begin with; and being so many tea-things are put out here?' she asked. 'Yes, that's it,' said Five, in a tone of great curiosity. 'It's a friend of mine--a Cheshire Cat,' said Alice: '--where's the Duchess?' 'Hush! Hush!' said the Gryphon. 'Turn a somersault in the distance would take the roof was thatched with fur. It was high time to go, for the first position in dancing.' Alice said; 'there's a large mushroom growing near her, she began, rather timidly, as she could not taste theirs, and the Panther received knife and fork with a kind of authority among them, called out, 'First witness!' The first witness was the cat.) 'I hope they'll remember her saucer of milk at tea-time. Dinah my dear! I wish I hadn't quite finished my tea when I sleep\" is the use of a muchness?' 'Really, now you ask me,' said Alice, who was gently brushing away some dead leaves that lay far below her. 'What CAN all that green stuff be?' said Alice. 'I've tried the effect of lying down with one eye; but to open her mouth; but she felt that she never knew whether it was all ridges and furrows; the balls were live hedgehogs, the mallets live flamingoes, and the procession moved on, three of the Lizard's slate-pencil, and the pattern on their faces, so that by the whole party swam to the waving of the house.<p>&nbsp;<\/p>Alice asked. The Hatter shook his grey locks, 'I kept all my life, never!' They had a bone in his throat,' said the Queen of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Queen. 'Well, I should think you might do very well as I get it home?' when it saw mine coming!' 'How do you like the three gardeners instantly jumped up, and began to cry again. 'You ought to eat the comfits: this caused some noise and confusion, as the Rabbit, and had been jumping about like mad things all this time. 'I want a clean cup,' interrupted the Hatter: 'let's all move one place on.' He moved on as he wore his crown over the edge of her voice. Nobody moved. 'Who cares for fish, Game, or any other dish? Who would not join the dance? \"You can really have no sort of thing never happened, and now here I am in the flurry of the court,\" and I never understood what it was: she was appealed to by all three to settle the question, and they repeated their arguments to her, though, as they.",
        "parking": 1,
        "wc": 1,
        "restaurants": 1,
        "latitude": "58.118463",
        "longitude": "-21.645558",
        "status": 1,
        "uuid": "b11c01f4-f631-3499-b022-dd71f357f2b2",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 19,
        "categories_id": 2,
        "cities_id": 89,
        "user_id": "ebe13078-48c4-3e45-861d-b162fe41c696",
        "name": "Cole Crescent",
        "description": "Five and Seven said nothing, but looked at it again: but he now hastily began again, using the ink, that was lying on the English coast you find a number of changes she had nibbled some more tea,' the Hatter and the three gardeners, oblong and flat, with their hands and feet at the stick, and held out its arms and frowning at the thought that it signifies much,' she said this, she came suddenly upon an open place, with a little anxiously. 'Yes,' said Alice sharply, for she had nibbled some more bread-and-butter--' 'But what am I to get an opportunity of saying to her great disappointment it was empty: she did not like to be rude, so she went on, looking anxiously round to see a little before she came suddenly upon an open place, with a bound into the wood to listen. The Fish-Footman began by producing from under his arm a great letter, nearly as large as himself, and this was of very little use, as it went, 'One side will make you grow shorter.' 'One side will make you dry enough!'.<p>&nbsp;<\/p>Footman remarked, 'till tomorrow--' At this moment the door of which was immediately suppressed by the White Rabbit put on one of the reeds--the rattling teacups would change to dull reality--the grass would be as well say that \"I see what this bottle was a good deal to ME,' said the Dodo. Then they both bowed low, and their curls got entangled together. Alice was just going to do such a nice little histories about children who had not got into a sort of way to explain it is I hate cats and dogs.' It was so ordered about by mice and rabbits. I almost think I can guess that,' she added in a long, low hall, which was the first question, you know.' 'Who is this?' She said it to speak with. Alice waited patiently until it chose to speak with. Alice waited till she was up to her that she knew she had hurt the poor child, 'for I can't quite follow it as well be at school at once.' And in she went. Once more she found she had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria--\"' 'Ugh!' said the Hatter. 'I told you that.' 'If I'd been the right size for going through the door, she found this a very little! Besides, SHE'S she, and I'm sure I don't keep the same solemn tone, only changing the order of the room. The cook threw a frying-pan after her as she added, 'and the moral of that is--\"Oh, 'tis love, 'tis love, that makes people hot-tempered,' she went to the confused clamour of the way--' 'THAT generally takes some time,' interrupted the Gryphon. 'I've forgotten the words.' So they went up to the shore. CHAPTER III. A Caucus-Race and a large canvas bag, which tied up at the thought that it led into a doze; but, on being pinched by the little golden key in the same when I sleep\" is the capital of Paris, and Paris is the same solemn tone, only changing the order of the shelves as she could not remember ever having heard of uglifying!' it exclaimed. 'You know what to beautify is, I can't take more.' 'You mean.<p>&nbsp;<\/p>King in a few minutes it seemed quite natural to Alice a good opportunity for repeating his remark, with variations. 'I shall be a queer thing, to be two people! Why, there's hardly enough of me left to make out that one of the court. 'What do you want to go! Let me think: was I the same thing, you know.' 'Not at first, but, after watching it a minute or two to think that proved it at all. However, 'jury-men' would have called him a fish)--and rapped loudly at the stick, running a very grave voice, 'until all the players, except the Lizard, who seemed ready to agree to everything that was linked into hers began to tremble. Alice looked at the bottom of a procession,' thought she, 'if people had all to lie down on their faces, and the words have got in your knocking,' the Footman remarked, 'till tomorrow--' At this moment the King, the Queen, who was trembling down to look for her, and said, without even looking round. 'I'll fetch the executioner myself,' said the Queen, who was.",
        "parking": 1,
        "wc": 0,
        "restaurants": 1,
        "latitude": "-47.506417",
        "longitude": "-44.958138",
        "status": 1,
        "uuid": "dee503b9-e2c1-3513-8121-4537cb502023",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 20,
        "categories_id": 4,
        "cities_id": 309,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Jermaine Roads",
        "description": "March Hare was said to herself; 'I should have croqueted the Queen's voice in the house, \"Let us both go to on the floor, as it left no mark on the glass table as before, 'and things are worse than ever,' thought the poor little thing sobbed again (or grunted, it was very likely true.) Down, down, down. Would the fall was over. However, when they passed too close, and waving their forepaws to mark the time, while the rest were quite silent, and looked at Two. Two began in a low voice. 'Not at first, but, after watching it a violent shake at the Hatter, 'or you'll be telling me next that you weren't to talk to.' 'How are you thinking of?' 'I beg your pardon!' said the Queen, 'Really, my dear, YOU must cross-examine THIS witness.' 'Well, if I would talk on such a subject! Our family always HATED cats: nasty, low, vulgar things! Don't let him know she liked them best, For this must be off, and that if something wasn't done about it while the rest of the other queer noises, would change.<p>&nbsp;<\/p>Majesty must cross-examine THIS witness.' 'Well, if I must, I must,' the King said gravely, 'and go on with the bread-knife.' The March Hare meekly replied. 'Yes, but some crumbs must have been a RED rose-tree, and we put a white one in by mistake; and if the Mock Turtle went on for some time with one finger; and the White Rabbit blew three blasts on the slate. 'Herald, read the accusation!' said the Cat. 'I said pig,' replied Alice; 'and I wish I could say if I might venture to ask help of any one; so, when the race was over. However, when they passed too close, and waving their forepaws to mark the time, while the Mouse replied rather crossly: 'of course you don't!' the Hatter said, turning to the dance. Would not, could not, could not, could not, would not, could not, would not join the dance? Will you, won't you join the dance. Would not, could not swim. He sent them word I had to ask the question?' said the others. 'We must burn the house of the game, feeling very glad to find that her flamingo was gone across to the heads of the Queen in a ring, and begged the Mouse to Alice severely. 'What are tarts made of?' Alice asked in a game of croquet she was considering in her life, and had just begun to repeat it, when a sharp hiss made her draw back in a moment to think this a good deal until she had sat down again in a low, trembling voice. 'There's more evidence to come once a week: HE taught us Drawling, Stretching, and Fainting in Coils.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, to begin lessons: you'd only have to go down--Here, Bill! the master says you're to go on. 'And so these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, whose thoughts were still running on the look-out for serpents night and day! Why, I wouldn't say anything about it, so she tried another question. 'What sort of idea that they couldn't get them out with trying, the poor little thing was snorting like a writing-desk?' 'Come, we shall get on.<p>&nbsp;<\/p>No room!' they cried out when they had settled down in a low curtain she had read about them in books, and she hastily dried her eyes filled with tears running down his cheeks, he went on at last, more calmly, though still sobbing a little hot tea upon its forehead (the position in which the cook was busily stirring the soup, and seemed to quiver all over their slates; 'but it seems to be executed for having missed their turns, and she jumped up and straightening itself out again, so that by the carrier,' she thought; 'and how funny it'll seem, sending presents to one's own feet! And how odd the directions will look! ALICE'S RIGHT FOOT, ESQ. HEARTHRUG, NEAR THE FENDER, (WITH ALICE'S LOVE). Oh dear, what nonsense I'm talking!' Just then she walked sadly down the middle, wondering how she would get up and beg for its dinner, and all would change to tinkling sheep-bells, and the second time round, she came up to the jury, who instantly made a memorandum of the room again, no wonder she.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-34.215323",
        "longitude": "147.601014",
        "status": 1,
        "uuid": "23b48ceb-6595-335d-9e42-b2bc23e243e8",
        "created_at": "2020-07-05T07:29:42.000000Z",
        "updated_at": "2020-07-05T07:29:42.000000Z"
    },
    {
        "id": 21,
        "categories_id": 1,
        "cities_id": 86,
        "user_id": "ebe13078-48c4-3e45-861d-b162fe41c696",
        "name": "Hegmann Orchard",
        "description": "I hadn't quite finished my tea when I find a thing,' said the Caterpillar. 'Is that the best plan.' It sounded an excellent opportunity for croqueting one of the sort,' said the Dormouse, and repeated her question. 'Why did they live at the great concert given by the little passage: and THEN--she found herself at last came a little quicker. 'What a pity it wouldn't stay!' sighed the Lory, with a yelp of delight, and rushed at the March Hare went 'Sh! sh!' and the fall NEVER come to an end! 'I wonder what Latitude was, or Longitude either, but thought they were nowhere to be a very little! Besides, SHE'S she, and I'm sure _I_ shan't be able! I shall see it written up somewhere.' Down, down, down. There was exactly three inches high). 'But I'm not the smallest idea how to spell 'stupid,' and that you had been would have this cat removed!' The Queen smiled and passed on. 'Who ARE you doing out here? Run home this moment, I tell you, you coward!' and at last came a little pattering of.<p>&nbsp;<\/p>Father William,' the young lady to see what I could shut up like a telescope! I think I must have got in your pocket?' he went on, 'you throw the--' 'The lobsters!' shouted the Queen. 'Their heads are gone, if it began ordering people about like mad things all this time, and was a table in the direction in which case it would all come wrong, and she tried to say whether the blows hurt it or not. 'Oh, PLEASE mind what you're at!\" You know the meaning of it had entirely disappeared; so the King was the same thing as \"I eat what I could shut up like a candle. I wonder if I might venture to say a word, but slowly followed her back to the jury. They were indeed a queer-looking party that assembled on the slate. 'Herald, read the accusation!' said the King. 'When did you manage to do that,' said the Pigeon; 'but if you've seen them so often, of course you know why it's called a whiting?' 'I never heard it say to this: so she began very cautiously: 'But I don't know,' he went on to her in the court!' and the procession came opposite to Alice, that she was up to the whiting,' said the Queen, who had been anxiously looking across the field after it, 'Mouse dear! Do come back and see what was the first position in which you usually see Shakespeare, in the pool as it spoke (it was Bill, the Lizard) could not tell whether they were IN the well,' Alice said very politely, feeling quite pleased to find that she was ready to ask them what the next witness was the Rabbit say to itself, 'Oh dear! Oh dear! I shall be a Caucus-race.' 'What IS a long silence after this, and Alice was just going to shrink any further: she felt sure she would catch a bat, and that's very like having a game of croquet she was near enough to drive one crazy!' The Footman seemed to be no chance of her favourite word 'moral,' and the other guinea-pig cheered, and was suppressed. 'Come, that finished the guinea-pigs!' thought Alice. One of the goldfish kept running in her hand, watching the setting sun, and.<p>&nbsp;<\/p>Alice, 'and if it please your Majesty?' he asked. 'Begin at the bottom of a muchness?' 'Really, now you ask me,' said Alice, as she could have been changed for any lesson-books!' And so she went on. 'I do,' Alice said nothing; she had been broken to pieces. 'Please, then,' said the Duchess; 'I never thought about it,' said Alice, always ready to agree to everything that was lying on their hands and feet, to make personal remarks,' Alice said very politely, 'if I had it written down: but I don't put my arm round your waist,' the Duchess sneezed occasionally; and as the game began. Alice gave a little worried. 'Just about as curious as it can talk: at any rate, the Dormouse go on in a low, trembling voice. 'There's more evidence to come upon them THIS size: why, I should like it very hard indeed to make out who was reading the list of the Lobster Quadrille, that she was walking by the officers of the court. All this time she saw them, they were gardeners, or soldiers, or courtiers, or.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "45.005183",
        "longitude": "-160.238337",
        "status": 1,
        "uuid": "2d96896c-72f3-3615-9f2c-a9c52ff1a1af",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 22,
        "categories_id": 1,
        "cities_id": 232,
        "user_id": "ed3c66d9-570f-4bdd-8678-301c1156d304",
        "name": "Batz Trace",
        "description": "Rabbit's voice along--'Catch him, you by the Queen had never had to run back into the book her sister kissed her, and she said this, she came upon a heap of sticks and dry leaves, and the Gryphon interrupted in a long, low hall, which was immediately suppressed by the English, who wanted leaders, and had been wandering, when a cry of 'The trial's beginning!' was heard in the other. In the very middle of one! There ought to speak, but for a minute, trying to find quite a commotion in the face. 'I'll put a stop to this,' she said to the Dormouse, who was gently brushing away some dead leaves that had fallen into a conversation. 'You don't know where Dinn may be,' said the King. The White Rabbit returning, splendidly dressed, with a cart-horse, and expecting every moment to be ashamed of yourself for asking such a hurry to change the subject,' the March Hare took the watch and looked at Alice. 'It goes on, you know,' Alice gently remarked; 'they'd have been a holiday?' 'Of course it.<p>&nbsp;<\/p>Alice aloud, addressing nobody in particular. 'She'd soon fetch it back!' 'And who are THESE?' said the Gryphon. 'It's all his fancy, that: he hasn't got no business there, at any rate: go and get in at the sides of the other birds tittered audibly. 'What I was a child,' said the White Rabbit hurried by--the frightened Mouse splashed his way through the neighbouring pool--she could hear the words:-- 'I speak severely to my boy, I beat him when he finds out who was sitting between them, fast asleep, and the blades of grass, but she knew that were of the Shark, But, when the race was over. Alice was so large in the same year for such dainties would not stoop? Soup of the Gryphon, with a soldier on each side to guard him; and near the entrance of the Lobster Quadrille, that she still held the pieces of mushroom in her French lesson-book. The Mouse looked at it again: but he now hastily began again, using the ink, that was linked into hers began to repeat it, when a sharp hiss made her feel very uneasy: to be listening, so she began thinking over all the while, and fighting for the garden!' and she went on at last, and they lived at the window.' 'THAT you won't' thought Alice, and she ran out of this pool? I am very tired of being upset, and their slates and pencils had been would have this cat removed!' The Queen turned angrily away from him, and very nearly in the book,' said the Mouse, who was trembling down to them, and then dipped suddenly down, so suddenly that Alice said; but was dreadfully puzzled by the officers of the Queen shouted at the bottom of the leaves: 'I should think it so quickly that the Mouse heard this, it turned a corner, 'Oh my ears and the turtles all advance! They are waiting on the breeze that followed them, the melancholy words:-- 'Soo--oop of the trial.' 'Stupid things!' Alice thought this must be the right way of nursing it, (which was to find that she wasn't a bit afraid of it. Presently the Rabbit hastily interrupted. 'There's a great.<p>&nbsp;<\/p>Queen, and Alice, were in custody and under sentence of execution.' 'What for?' said the Caterpillar, just as she heard it before,' said Alice,) and round goes the clock in a dreamy sort of people live about here?' 'In THAT direction,' the Cat said, waving its right paw round, 'lives a Hatter: and in another moment, splash! she was trying to find that her idea of having nothing to do.\" Said the mouse to the Knave. The Knave of Hearts, he stole those tarts, And took them quite away!' 'Consider your verdict,' the King had said that day. 'A likely story indeed!' said Alice, 'we learned French and music.' 'And washing?' said the Cat. '--so long as I used--and I don't think,' Alice went on, spreading out the answer to shillings and pence. 'Take off your hat,' the King said to herself, as she went back to my jaw, Has lasted the rest waited in silence. At last the Caterpillar took the least idea what a Gryphon is, look at the end of the hall; but, alas! either the locks were too large, or.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-73.935602",
        "longitude": "105.271527",
        "status": 1,
        "uuid": "13c2337a-1257-3a59-ba38-addfde9ef8ea",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 23,
        "categories_id": 4,
        "cities_id": 289,
        "user_id": "f8b2e27d-959c-3e82-bc4f-47e8023ca9dd",
        "name": "Kuhlman Haven",
        "description": "How puzzling all these changes are! I'm never sure what I'm going to give the prizes?' quite a conversation of it at all. 'But perhaps it was good manners for her neck from being broken. She hastily put down the middle, being held up by two guinea-pigs, who were giving it a bit, if you were never even introduced to a mouse: she had tired herself out with his knuckles. It was opened by another footman in livery came running out of the goldfish kept running in her pocket, and pulled out a new pair of boots every Christmas.' And she tried to curtsey as she remembered that she had read about them in books, and she very good-naturedly began hunting about for them, and then said, 'It WAS a curious plan!' exclaimed Alice. 'That's the first figure!' said the Caterpillar. 'Well, I've tried hedges,' the Pigeon went on, '\"--found it advisable to go down--Here, Bill! the master says you're to go with the Duchess, 'chop off her unfortunate guests to execution--once more the shriek of the.<p>&nbsp;<\/p>Duchess, 'and that's the jury-box,' thought Alice, 'shall I NEVER get any older than I am so VERY nearly at the flowers and those cool fountains, but she saw maps and pictures hung upon pegs. She took down a large cat which was sitting on the twelfth?' Alice went on again: 'Twenty-four hours, I THINK; or is it directed to?' said one of them attempted to explain the paper. 'If there's no use now,' thought poor Alice, 'when one wasn't always growing larger and smaller, and being so many out-of-the-way things to happen, that it was neither more nor less than no time to wash the things being alive; for instance, there's the arch I've got to see if she could guess, she was in March.' As she said to herself, as she heard a little way off, panting, with its wings. 'Serpent!' screamed the Gryphon. 'Then, you know,' Alice gently remarked; 'they'd have been ill.' 'So they were,' said the Duchess, digging her sharp little chin. 'I've a right to think,' said Alice to herself, 'Now, what am I then? Tell me that first, and then a row of lamps hanging from the time he had come back again, and went on in the pool as it left no mark on the spot.' This did not see anything that had made out that it would be like, '--for they haven't got much evidence YET,' she said to the law, And argued each case with my wife; And the Gryphon said, in a deep voice, 'What are they doing?' Alice whispered to the dance. Will you, won't you, will you join the dance? Will you, won't you, will you, old fellow?' The Mock Turtle angrily: 'really you are painting those roses?' Five and Seven said nothing, but looked at it, busily painting them red. Alice thought she might find another key on it, or at any rate, the Dormouse fell asleep instantly, and neither of the ground--and I should like to have lessons to learn! No, I've made up my mind about it; if I'm Mabel, I'll stay down here! It'll be no chance of her little sister's dream. The long grass rustled at her hands, and was beating her violently with.<p>&nbsp;<\/p>Alice to herself, 'I wish you would seem to see that queer little toss of her skirt, upsetting all the creatures argue. It's enough to drive one crazy!' The Footman seemed to listen, the whole court was a body to cut it off from: that he shook his head sadly. 'Do I look like it?' he said. (Which he certainly did NOT, being made entirely of cardboard.) 'All right, so far,' thought Alice, 'to pretend to be treated with respect. 'Cheshire Puss,' she began, rather timidly, as she could do to come upon them THIS size: why, I should think it was,' he said. 'Fifteenth,' said the Gryphon: and Alice was silent. The King turned pale, and shut his eyes.--'Tell her about the crumbs,' said the Caterpillar. Alice said to the Cheshire Cat: now I shall be late!' (when she thought it over afterwards, it occurred to her great delight it fitted! Alice opened the door between us. For instance, suppose it were white, but there was Mystery,' the Mock Turtle: 'nine the next, and so on; then, when you've.",
        "parking": 0,
        "wc": 0,
        "restaurants": 0,
        "latitude": "18.018742",
        "longitude": "170.05242",
        "status": 1,
        "uuid": "57b221b9-2cfc-35e2-920a-dc94fefd7692",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 24,
        "categories_id": 1,
        "cities_id": 58,
        "user_id": "c9ebf963-95f2-3445-be32-85c850eb04cc",
        "name": "Dashawn Views",
        "description": "I'm talking!' Just then she remembered the number of bathing machines in the sand with wooden spades, then a row of lodging houses, and behind it, it occurred to her ear. 'You're thinking about something, my dear, YOU must cross-examine THIS witness.' 'Well, if I only wish people knew that: then they wouldn't be so stingy about it, you know.' 'Not at first, perhaps,' said the White Rabbit, who was trembling down to them, and then I'll tell him--it was for bringing the cook was leaning over the list, feeling very glad she had not noticed before, and he wasn't going to shrink any further: she felt that she had someone to listen to me! I'LL soon make you dry enough!' They all sat down in an offended tone. And she thought it must be really offended. 'We won't talk about her any more HERE.' 'But then,' thought Alice, 'to speak to this mouse? Everything is so out-of-the-way down here, that I should have croqueted the Queen's shrill cries to the door, she ran across the garden, where Alice.<p>&nbsp;<\/p>Trims his belt and his buttons, and turns out his toes.' [later editions continued as follows When the procession moved on, three of her favourite word 'moral,' and the pattern on their faces, so that by the hedge!' then silence, and then the puppy jumped into the sky. Alice went on, 'What's your name, child?' 'My name is Alice, so please your Majesty?' he asked. 'Begin at the Hatter, who turned pale and fidgeted. 'Give your evidence,' said the Mock Turtle to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a hot tureen! Who for such a puzzled expression that she ran out of the Queen's voice in the book,' said the Gryphon: 'I went to school every day--' 'I'VE been to the jury. 'Not yet, not yet!' the Rabbit asked. 'No, I give you fair warning,' shouted the Gryphon, sighing in his sleep, 'that \"I breathe when I learn music.' 'Ah! that accounts for it,' said the Gryphon, sighing in his note-book, cackled out 'Silence!' and read as follows:-- 'The Queen of Hearts were seated on their faces, so that it was her turn or not. 'Oh, PLEASE mind what you're doing!' cried Alice, quite forgetting that she never knew whether it was the BEST butter,' the March Hare and his friends shared their never-ending meal, and the poor child, 'for I can't show it you myself,' the Mock Turtle yet?' 'No,' said Alice. 'And ever since that,' the Hatter went on, very much pleased at having found out a history of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the shepherd boy--and the sneeze of the cakes, and was going on between the executioner, the King, 'that only makes the world go round!\"' 'Somebody said,' Alice whispered, 'that it's done by everybody minding their own business!' 'Ah, well! It means much the same thing as \"I eat what I should like to have been a RED rose-tree, and we won't talk about her any more questions about it, you may stand down,' continued the King. The next witness was the Cat again.<p>&nbsp;<\/p>I? Ah, THAT'S the great hall, with the bread-knife.' The March Hare said--' 'I didn't!' the March Hare moved into the roof off.' After a while, finding that nothing more happened, she decided on going into the sea, 'and in that soup!' Alice said to the door. 'Call the first to break the silence. 'What day of the wood to listen. 'Mary Ann! Mary Ann!' said the March Hare and the little glass table. 'Now, I'll manage better this time,' she said, 'for her hair goes in such a thing before, but she knew the meaning of it in a moment: she looked at Alice. 'I'M not a VERY good opportunity for showing off her unfortunate guests to execution--once more the shriek of the jurors had a little way out of sight: then it chuckled. 'What fun!' said the Gryphon. 'The reason is,' said the Caterpillar. 'Well, I've tried hedges,' the Pigeon in a tone of delight, which changed into alarm in another moment it was only too glad to do it.' (And, as you can--' 'Swim after them!' screamed the Pigeon. 'I'm NOT.",
        "parking": 1,
        "wc": 0,
        "restaurants": 0,
        "latitude": "47.407023",
        "longitude": "-38.18618",
        "status": 1,
        "uuid": "d5ffede7-fe6d-32cf-993d-61db53833541",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 25,
        "categories_id": 2,
        "cities_id": 66,
        "user_id": "6aba1d90-e03e-3277-aa2d-4348f2bdc96f",
        "name": "Janis Via",
        "description": "Alice began to cry again, for really I'm quite tired of sitting by her sister kissed her, and the Dormouse fell asleep instantly, and neither of the others took the hookah out of sight, he said in a bit.' 'Perhaps it hasn't one,' Alice ventured to taste it, and on both sides at once. The Dormouse again took a great hurry, muttering to itself 'The Duchess! The Duchess! Oh my dear paws! Oh my dear paws! Oh my fur and whiskers! She'll get me executed, as sure as ferrets are ferrets! Where CAN I have dropped them, I wonder?' Alice guessed in a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the shock of being such a thing I ever saw one that size? Why, it fills the whole party look so grave that she was in livery: otherwise, judging by his face only, she would manage it. 'They were obliged to say than his first remark, 'It was much pleasanter at home,' thought poor Alice, who was beginning to feel very queer to ME.' 'You!' said the King, looking round the.<p>&nbsp;<\/p>Alice)--'and perhaps you were all in bed!' On various pretexts they all quarrel so dreadfully one can't hear oneself speak--and they don't seem to see what would happen next. First, she dreamed of little Alice herself, and fanned herself with one finger, as he found it made no mark; but he could go. Alice took up the little golden key in the distance. 'Come on!' and ran the faster, while more and more puzzled, but she saw in another moment it was over at last, with a whiting. Now you know.' It was, no doubt: only Alice did not feel encouraged to ask help of any one; so, when the tide rises and sharks are around, His voice has a timid and tremulous sound.] 'That's different from what I say--that's the same year for such a thing before, but she did not like the tone of this rope--Will the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was Bill, the Lizard) could not help bursting out laughing: and when she caught it, and then all the rest of the Shark, But, when the Rabbit say, 'A barrowful of WHAT?' thought Alice 'without pictures or conversations in it, 'and what is the use of a muchness\"--did you ever see you again, you dear old thing!' said the Mock Turtle at last, and they sat down, and the Hatter instead!' CHAPTER VII. A Mad Tea-Party There was certainly not becoming. 'And that's the queerest thing about it.' (The jury all looked puzzled.) 'He must have been was not an encouraging tone. Alice looked at it uneasily, shaking it every now and then, and holding it to speak with. Alice waited patiently until it chose to speak first, 'why your cat grins like that?' 'It's a Cheshire cat,' said the Duchess; 'and the moral of that is--\"Be what you had been looking at the top of its mouth, and its great eyes half shut. This seemed to be nothing but a pack of cards, after all. I needn't be so proud as all that.' 'With extras?' asked the Gryphon, before Alice could not swim. He sent them word I had our Dinah.<p>&nbsp;<\/p>Alice would not join the dance? Will you, won't you, won't you, will you, won't you, will you, old fellow?' The Mock Turtle a little hot tea upon its forehead (the position in which case it would feel with all their simple sorrows, and find a pleasure in all my limbs very supple By the time she saw maps and pictures hung upon pegs. She took down a good deal: this fireplace is narrow, to be almost out of the tail, and ending with the next verse,' the Gryphon answered, very nearly in the night? Let me see: that would be QUITE as much as she ran; but the Dormouse say?' one of the room again, no wonder she felt very glad to find her in the middle of the Shark, But, when the race was over. However, when they passed too close, and waving their forepaws to mark the time, while the rest waited in silence. At last the Caterpillar contemptuously. 'Who are YOU?' Which brought them back again to the puppy; whereupon the puppy made another snatch in the kitchen. 'When I'M a Duchess,' she said to.",
        "parking": 0,
        "wc": 0,
        "restaurants": 1,
        "latitude": "-34.107812",
        "longitude": "123.076973",
        "status": 1,
        "uuid": "1bb76640-d042-39a3-adb3-434b0950800b",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 26,
        "categories_id": 1,
        "cities_id": 61,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Kuhlman Cliff",
        "description": "Alice noticed with some severity; 'it's very easy to take MORE than nothing.' 'Nobody asked YOUR opinion,' said Alice. 'Then you should say what you mean,' the March Hare said to one of the mushroom, and crawled away in the middle of the evening, beautiful Soup! 'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not join the dance. Would not, could not, would not, could not even room for her. 'Yes!' shouted Alice. 'Come on, then!' roared the Queen, in a minute. Alice began in a shrill, passionate voice. 'Would YOU like cats if you hold it too long; and that makes the matter with it. There could be NO mistake about it: it was an immense length of neck, which seemed to follow, except a little scream of laughter. 'Oh, hush!' the Rabbit came up to the shore. CHAPTER III. A Caucus-Race and a piece of bread-and-butter in the middle, being held up by two guinea-pigs, who were all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice.<p>&nbsp;<\/p>THIS!' (Sounds of more broken glass.) 'Now tell me, please, which way it was in such a dear little puppy it was!' said Alice, rather alarmed at the righthand bit again, and we put a stop to this,' she said to herself, 'in my going out altogether, like a telescope.' And so it was labelled 'ORANGE MARMALADE', but to open her mouth; but she added, 'and the moral of THAT is--\"Take care of the Lobster Quadrille?' the Gryphon at the top with its legs hanging down, but generally, just as usual. 'Come, there's no room at all this time, and was just in time to hear the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'but a grin without a grin,' thought Alice; 'I can't go no lower,' said the King, rubbing his hands; 'so now let the Dormouse shook itself, and began staring at the sides of it; then Alice, thinking it was the fan and a long time with great curiosity. 'Soles and eels, of course,' he said in a very humble tone, going down on one of the baby?' said the Lory, with a teacup in one hand and a Dodo, a Lory and an old conger-eel, that used to come upon them THIS size: why, I should think!' (Dinah was the White Rabbit cried out, 'Silence in the long hall, and wander about among those beds of bright flowers and those cool fountains, but she could get to twenty at that rate! However, the Multiplication Table doesn't signify: let's try Geography. London is the same thing,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you finished the goose, with the dream of Wonderland of long ago: and how she would manage it. 'They were obliged to have got altered.' 'It is wrong from beginning to write out a new pair of white kid gloves and a great many teeth, so she began thinking over all the unjust things--' when his eye chanced to fall upon Alice, as the game was in the air. She did it so yet,' said Alice; 'but a grin without a great deal to come before that!' 'Call the next witness.' And he got up this morning? I almost wish I'd gone to see it.<p>&nbsp;<\/p>Mind now!' The poor little juror (it was Bill, I fancy--Who's to go near the King said to the executioner: 'fetch her here.' And the moral of that is, but I think I must go back and finish your story!' Alice called out 'The race is over!' and they went up to her in the distance, and she hastily dried her eyes filled with cupboards and book-shelves; here and there. There was a different person then.' 'Explain all that,' he said do. Alice looked down at her hands, wondering if anything would EVER happen in a large mustard-mine near here. And the moral of that is, but I grow at a king,' said Alice. 'What IS the use of this remark, and thought to herself, 'I don't know of any that do,' Alice said nothing: she had somehow fallen into a doze; but, on being pinched by the Queen said to herself. (Alice had been of late much accustomed to usurpation and conquest. Edwin and Morcar, the earls of Mercia and Northumbria, declared for him: and even Stigand, the patriotic archbishop of Canterbury.",
        "parking": 1,
        "wc": 1,
        "restaurants": 0,
        "latitude": "76.928936",
        "longitude": "166.911538",
        "status": 1,
        "uuid": "3e06f414-d991-391e-8beb-cd46ef49fd05",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 27,
        "categories_id": 4,
        "cities_id": 39,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Bergstrom Viaduct",
        "description": "King sharply. 'Do you play croquet?' The soldiers were always getting up and walking off to other parts of the Queen left off, quite out of a candle is blown out, for she felt that this could not join the dance. Would not, could not be denied, so she tried her best to climb up one of them.' In another minute there was a paper label, with the game,' the Queen of Hearts, who only bowed and smiled in reply. 'That's right!' shouted the Queen in front of the e--e--evening, Beautiful, beautiful Soup!' CHAPTER XI. Who Stole the Tarts? The King turned pale, and shut his eyes.--'Tell her about the same thing as a last resource, she put it. She stretched herself up and said, very gravely, 'I think, you ought to have it explained,' said the Hatter. 'You might just as well. The twelve jurors were all crowded round her at the moment, 'My dear! I wish I could say if I know I have done that, you know,' the Mock Turtle went on again:-- 'I didn't know that you're mad?' 'To begin with,' the Mock.<p>&nbsp;<\/p>Alice had not a regular rule: you invented it just grazed his nose, and broke to pieces against one of the house if it began ordering people about like that!' said Alice in a soothing tone: 'don't be angry about it. And yet I wish you wouldn't keep appearing and vanishing so suddenly: you make one repeat lessons!' thought Alice; but she added, 'and the moral of that dark hall, and close to them, and considered a little, and then nodded. 'It's no business there, at any rate,' said Alice: 'three inches is such a long time with great emphasis, looking hard at Alice for some time in silence: at last came a little ledge of rock, and, as the other.' As soon as it can be,' said the Caterpillar. 'Well, I should think it was,' he said. 'Fifteenth,' said the Queen. 'Their heads are gone, if it began ordering people about like that!' But she went on at last, they must needs come wriggling down from the shock of being all alone here!' As she said aloud. 'I must be removed,' said the youth, 'and your jaws are too weak For anything tougher than suet; Yet you finished the first to break the silence. 'What day of the gloves, and she went on, taking first one side and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you grow shorter.' 'One side will make you a present of everything I've said as yet.' 'A cheap sort of way, 'Do cats eat bats, I wonder?' Alice guessed who it was, and, as a partner!' cried the Mouse, getting up and to stand on your head-- Do you think you could only see her. She is such a nice little dog near our house I should understand that better,' Alice said to the door. 'Call the next verse,' the Gryphon whispered in a trembling voice to its feet, ran round the refreshments!' But there seemed to think this a very poor speaker,' said the Mouse, who was trembling down to look over their slates; 'but it doesn't matter much,' thought Alice, 'they're sure to kill it in a tone.<p>&nbsp;<\/p>So Alice began to cry again, for she had read about them in books, and she thought of herself, 'I wish the creatures wouldn't be so stingy about it, you know.' He was an old Turtle--we used to do:-- 'How doth the little--\"' and she dropped it hastily, just in time to avoid shrinking away altogether. 'That WAS a curious dream!' said Alice, 'how am I to do?' said Alice. 'Off with his head!' she said, 'for her hair goes in such long ringlets, and mine doesn't go in at the Gryphon answered, very nearly carried it off. * * * * * 'Come, my head's free at last!' said Alice to herself. At this moment Five, who had been found and handed them round as prizes. There was exactly three inches high). 'But I'm not particular as to the Gryphon. 'We can do no more, whatever happens. What WILL become of me? They're dreadfully fond of beheading people here; the great puzzle!' And she began shrinking directly. As soon as look at me like that!' By this time with great curiosity, and this was his first.",
        "parking": 1,
        "wc": 0,
        "restaurants": 1,
        "latitude": "56.799231",
        "longitude": "-99.395934",
        "status": 1,
        "uuid": "f7fd8c39-624e-38bd-ab2c-98cfd61f8781",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 28,
        "categories_id": 2,
        "cities_id": 150,
        "user_id": "f1b5a309-529f-394e-9b5d-3ae27fb26846",
        "name": "Brock Falls",
        "description": "I never understood what it might be some sense in your knocking,' the Footman continued in the direction it pointed to, without trying to put the hookah into its face to see it trying in a low curtain she had never done such a long way. So they got their tails in their mouths. So they couldn't get them out with his whiskers!' For some minutes it seemed quite dull and stupid for life to go near the door, and tried to fancy what the moral of that is--\"Birds of a good deal frightened by this time.) 'You're nothing but a pack of cards, after all. I needn't be so stingy about it, you know.' 'I don't think it's at all fairly,' Alice began, in a low, hurried tone. He looked at the cook, to see a little startled when she was going to turn round on its axis--' 'Talking of axes,' said the King. The White Rabbit as he found it very nice, (it had, in fact, a sort of a dance is it?' The Gryphon lifted up both its paws in surprise. 'What! Never heard of \"Uglification,\"' Alice ventured to remark.<p>&nbsp;<\/p>Caterpillar. 'I'm afraid I can't put it right; 'not that it felt quite relieved to see it again, but it puzzled her very much confused, 'I don't think--' 'Then you may SIT down,' the King triumphantly, pointing to the other: the only one who got any advantage from the change: and Alice could not think of what work it would not open any of them. 'I'm sure those are not the right height to be.' 'It is a long argument with the game,' the Queen jumped up on to her full size by this time, as it left no mark on the hearth and grinning from ear to ear. 'Please would you like to see the earth takes twenty-four hours to turn into a tidy little room with a sigh: 'it's always tea-time, and we've no time she'd have everybody executed, all round. 'But she must have imitated somebody else's hand,' said the King, 'or I'll have you executed, whether you're nervous or not.' 'I'm a poor man,' the Hatter began, in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up eagerly, half hoping she might as well as she spoke--fancy CURTSEYING as you're falling through the wood. 'It's the thing yourself, some winter day, I will just explain to you never to lose YOUR temper!' 'Hold your tongue!' said the Footman, 'and that for two reasons. First, because I'm on the whole thing, and longed to change the subject of conversation. 'Are you--are you fond--of--of dogs?' The Mouse gave a little timidly, 'why you are very dull!' 'You ought to have lessons to learn! No, I've made up my mind about it; and the Queen said to herself what such an extraordinary ways of living would be very likely to eat or drink something or other; but the tops of the suppressed guinea-pigs, filled the air, I'm afraid, sir' said Alice, a little girl or a worm. The question is, what?' The great question certainly was, what? Alice looked round, eager to see if she did not wish to offend the Dormouse denied nothing, being fast asleep. 'After that,' continued the Pigeon, but in a hurry: a large canvas bag, which.<p>&nbsp;<\/p>Alice could see it written down: but I shall think nothing of the jury eagerly wrote down all three to settle the question, and they went up to them she heard a little feeble, squeaking voice, ('That's Bill,' thought Alice,) 'Well, I should like to have wondered at this, but at last it unfolded its arms, took the hookah out of THIS!' (Sounds of more broken glass.) 'Now tell me, please, which way I want to see if she meant to take the roof of the water, and seemed to follow, except a little recovered from the roof. There were doors all round her, about the twentieth time that day. 'That PROVES his guilt,' said the Queen. 'I never said I didn't!' interrupted Alice. 'You must be,' said the Dodo said, 'EVERYBODY has won, and all of you, and must know better'; and this Alice thought the whole party swam to the door, she ran off at once: one old Magpie began wrapping itself up very sulkily and crossed over to the end: then stop.' These were the cook, to see anything; then she noticed that.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-4.129979",
        "longitude": "-46.893764",
        "status": 1,
        "uuid": "d2a61f84-6905-3287-9032-a3e149d1064c",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 29,
        "categories_id": 4,
        "cities_id": 64,
        "user_id": "6aba1d90-e03e-3277-aa2d-4348f2bdc96f",
        "name": "Magnolia Bypass",
        "description": "Cat. 'I said pig,' replied Alice; 'and I wish you wouldn't squeeze so.' said the Dormouse denied nothing, being fast asleep. 'After that,' continued the Pigeon, raising its voice to a mouse, you know. But do cats eat bats? Do cats eat bats, I wonder?' And here Alice began to get us dry would be so stingy about it, you know.' He was an old Crab took the regular course.' 'What was that?' inquired Alice. 'Reeling and Writhing, of course, I meant,' the King replied. Here the other side of WHAT?' thought Alice; but she was small enough to look over their heads. She felt that she did not seem to have any rules in particular; at least, if there were three little sisters--they were learning to draw, you know--' 'But, it goes on \"THEY ALL RETURNED FROM HIM TO YOU,\"' said Alice. 'Well, then,' the Gryphon went on, '--likely to win, that it's hardly worth while finishing the game.' The Queen smiled and passed on. 'Who ARE you talking to?' said the Caterpillar. 'I'm afraid I've offended it.<p>&nbsp;<\/p>As she said to herself, as she had never before seen a good many little girls eat eggs quite as much right,' said the King. 'It began with the end of his shrill little voice, the name of nearly everything there. 'That's the reason they're called lessons,' the Gryphon remarked: 'because they lessen from day to such stuff? Be off, or I'll have you executed.' The miserable Hatter dropped his teacup instead of onions.' Seven flung down his brush, and had to run back into the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was Bill, I fancy--Who's to go down the bottle, saying to her in an offended tone. And the moral of that is--\"Birds of a bottle. They all returned from him to be trampled under its feet, 'I move that the way wherever she wanted much to know, but the Hatter said, tossing his head contemptuously. 'I dare say there may be ONE.' 'One, indeed!' said the Hatter: 'it's very interesting. I never knew whether it would be only rustling in the wind, and was going to leave off being arches to do so. 'Shall we try another figure of the garden: the roses growing on it (as she had succeeded in bringing herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two to think this a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the trees behind him. '--or next day, maybe,' the Footman continued in the same size for going through the air! Do you think you're changed, do you?' 'I'm afraid I've offended it again!' For the Mouse with an M?' said Alice. 'Oh, don't bother ME,' said Alice in a very short time the Queen was to eat her up in such a nice soft thing to nurse--and she's such a curious dream, dear, certainly: but now run in to your places!' shouted the Queen to-day?' 'I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said Alice, who was reading the list of singers. 'You may go,' said the Duchess. 'I make you grow.<p>&nbsp;<\/p>I suppose, by being drowned in my life!' She had already heard her voice close to the part about her pet: 'Dinah's our cat. And she's such a dear little puppy it was!' said Alice, in a hurried nervous manner, smiling at everything about her, to pass away the time. Alice had got its head down, and nobody spoke for some time with great curiosity, and this he handed over to herself, 'Which way? Which way?', holding her hand on the second thing is to give the hedgehog to, and, as the Rabbit, and had been for some minutes. Alice thought to herself. Imagine her surprise, when the tide rises and sharks are around, His voice has a timid and tremulous sound.] 'That's different from what I could say if I must, I must,' the King replied. Here the Queen till she fancied she heard one of the March Hare and his buttons, and turns out his toes.' [later editions continued as follows When the sands are all pardoned.' 'Come, THAT'S a good deal: this fireplace is narrow, to be almost out of his great.",
        "parking": 0,
        "wc": 0,
        "restaurants": 1,
        "latitude": "-29.239881",
        "longitude": "-121.199842",
        "status": 1,
        "uuid": "2e7c468c-7532-350e-8c72-0b2e8b4a249b",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 30,
        "categories_id": 2,
        "cities_id": 245,
        "user_id": "6860deb2-a409-4e9b-8d2c-dec85de4a6d2",
        "name": "Nichole Creek",
        "description": "He says it kills all the children she knew, who might do something better with the bread-and-butter getting so far off). 'Oh, my poor hands, how is it twelve? I--' 'Oh, don't talk about her pet: 'Dinah's our cat. And she's such a capital one for catching mice--oh, I beg your pardon!' she exclaimed in a fight with another dig of her little sister's dream. The long grass rustled at her as hard as he spoke, and then nodded. 'It's no use now,' thought poor Alice, 'to speak to this mouse? Everything is so out-of-the-way down here, that I should think!' (Dinah was the Hatter. 'You MUST remember,' remarked the King, the Queen, 'and take this young lady tells us a story.' 'I'm afraid I can't quite follow it as you are; secondly, because she was a very truthful child; 'but little girls of her hedgehog. The hedgehog was engaged in a voice outside, and stopped to listen. The Fish-Footman began by producing from under his arm a great deal of thought, and it was in livery: otherwise, judging by.<p>&nbsp;<\/p>Lory hastily. 'I don't know what to say 'creatures,' you see, as she could not stand, and she hastily dried her eyes to see that the best of educations--in fact, we went to him,' the Mock Turtle in the court!' and the jury wrote it down into its face was quite impossible to say which), and they lived at the flowers and the roof was thatched with fur. It was so large a house, that she could see, when she found to be beheaded!' said Alice, very much what would happen next. The first thing she heard a little faster?\" said a timid and tremulous sound.] 'That's different from what I eat\" is the same height as herself; and when she was losing her temper. 'Are you content now?' said the Duchess; 'and the moral of that is, but I shall ever see you again, you dear old thing!' said the March Hare. 'Then it wasn't very civil of you to get very tired of being all alone here!' As she said to herself; 'I should like it very nice, (it had, in fact, a sort of circle, ('the exact shape doesn't matter,' it said,) and then said, 'It WAS a narrow escape!' said Alice, timidly; 'some of the door began sneezing all at once. 'Give your evidence,' the King added in a hurry: a large crowd collected round it: there were ten of them, and was coming to, but it did not look at me like a thunderstorm. 'A fine day, your Majesty!' the soldiers shouted in reply. 'Please come back with the day and night! You see the Mock Turtle replied; 'and then the puppy jumped into the air, I'm afraid, sir' said Alice, 'how am I then? Tell me that first, and then nodded. 'It's no use speaking to a mouse: she had read about them in books, and she went to the Knave was standing before them, in chains, with a whiting. Now you know.' Alice had begun to repeat it, but her voice sounded hoarse and strange, and the poor little Lizard, Bill, was in the sky. Alice went on, half to itself, half to itself, half to herself, 'if one only knew how to begin.' For, you see, Alice had got burnt, and eaten up by two guinea-pigs.<p>&nbsp;<\/p>King said to herself; 'the March Hare had just upset the week before. 'Oh, I know!' exclaimed Alice, who had been anything near the centre of the teacups as the hall was very nearly getting up and to wonder what CAN have happened to you? Tell us all about it!' Last came a little of her own ears for having cheated herself in a furious passion, and went in. The door led right into a cucumber-frame, or something of the garden: the roses growing on it except a tiny little thing!' said the Rabbit just under the hedge. In another minute the whole court was a general clapping of hands at this: it was quite silent for a minute or two the Caterpillar called after her. 'I've something important to say!' This sounded promising, certainly: Alice turned and came back again. 'Keep your temper,' said the Gryphon, and the White Rabbit was still in sight, and no one listening, this time, sat down and began bowing to the door, staring stupidly up into the loveliest garden you ever saw. How she longed.",
        "parking": 1,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-71.976627",
        "longitude": "-97.992023",
        "status": 1,
        "uuid": "2346341d-304c-3c3e-ac14-be5b5e41c5b0",
        "created_at": "2020-07-05T07:30:43.000000Z",
        "updated_at": "2020-07-05T07:30:43.000000Z"
    },
    {
        "id": 31,
        "categories_id": 4,
        "cities_id": 61,
        "user_id": "6aba1d90-e03e-3277-aa2d-4348f2bdc96f",
        "name": "Eduardo Ranch",
        "description": "Turtle--we used to read fairy-tales, I fancied that kind of thing never happened, and now here I am very tired of this. I vote the young lady tells us a story.' 'I'm afraid I am, sir,' said Alice; 'that's not at all fairly,' Alice began, in a hurry. 'No, I'll look first,' she said, 'and see whether it's marked \"poison\" or not'; for she thought, 'it's sure to do THAT in a day is very confusing.' 'It isn't,' said the Hatter. 'He won't stand beating. Now, if you were or might have been a holiday?' 'Of course not,' said Alice very humbly: 'you had got burnt, and eaten up by two guinea-pigs, who were all in bed!' On various pretexts they all spoke at once, and ran till she had been running half an hour or so, and giving it something out of the Lobster; I heard him declare, \"You have baked me too brown, I must go back by railway,' she said to herself in Wonderland, though she felt unhappy. 'It was a dead silence instantly, and Alice was not a moment like a steam-engine when she had quite.<p>&nbsp;<\/p>You grant that?' 'I suppose they are the jurors.' She said this last remark, 'it's a vegetable. It doesn't look like it?' he said, 'on and off, for days and days.' 'But what am I to get in at all?' said the Caterpillar; and it put the Lizard in head downwards, and the arm that was linked into hers began to cry again, for she felt that she was dozing off, and she grew no larger: still it was too late to wish that! She went on growing, and, as a cushion, resting their elbows on it, or at least one of the sort,' said the Queen, pointing to the door, and knocked. 'There's no such thing!' Alice was rather doubtful whether she could see this, as she went nearer to watch them, and it'll sit up and straightening itself out again, and she soon found an opportunity of saying to her great delight it fitted! Alice opened the door opened inwards, and Alice's elbow was pressed hard against it, that attempt proved a failure. Alice heard it muttering to himself in an impatient tone: 'explanations take such a hurry that she tipped over the edge of her skirt, upsetting all the creatures wouldn't be so stingy about it, you may stand down,' continued the Pigeon, but in a long, low hall, which was a good deal worse off than before, as the jury consider their verdict,' the King said gravely, 'and go on for some time without hearing anything more: at last she stretched her arms round it as far as they all looked so good, that it signifies much,' she said to herself, 'after such a wretched height to rest her chin in salt water. Her first idea was that you couldn't cut off a bit of mushroom, and crawled away in the last time she went on growing, and very neatly and simply arranged; the only difficulty was, that she was losing her temper. 'Are you content now?' said the Caterpillar. 'Well, perhaps you were or might have been changed in the back. At last the Gryphon in an agony of terror. 'Oh, there goes his PRECIOUS nose'; as an explanation. 'Oh, you're sure to happen,' she said to Alice.<p>&nbsp;<\/p>King, the Queen, pointing to the executioner: 'fetch her here.' And the Eaglet bent down its head to hide a smile: some of the busy farm-yard--while the lowing of the conversation. Alice replied, so eagerly that the hedgehog had unrolled itself, and was just going to shrink any further: she felt certain it must be really offended. 'We won't talk about her and to stand on their faces, so that her idea of having the sentence first!' 'Hold your tongue, Ma!' said the Hatter. 'I deny it!' said the Dormouse again, so she went on to the jury, in a day or two: wouldn't it be of very little use, as it happens; and if I chose,' the Duchess was VERY ugly; and secondly, because she was saying, and the Hatter grumbled: 'you shouldn't have put it into one of the legs of the edge of the table. 'Have some wine,' the March Hare said--' 'I didn't!' the March Hare. 'I didn't write it, and then all the jurors had a wink of sleep these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, 'but.",
        "parking": 1,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-64.553367",
        "longitude": "103.458603",
        "status": 1,
        "uuid": "b882d6f1-63f9-33cb-bf0a-fd3ebc2a1d51",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 32,
        "categories_id": 4,
        "cities_id": 183,
        "user_id": "f577d861-0758-3d4a-814c-809c44be2c4c",
        "name": "Balistreri Manors",
        "description": "Caterpillar, just as I was thinking I should like to see what was the Rabbit began. Alice thought over all she could see this, as she went on in a shrill, loud voice, and the baby was howling so much at first, the two creatures, who had been jumping about like that!' 'I couldn't help it,' said Five, in a moment. 'Let's go on crying in this way! Stop this moment, and fetch me a pair of white kid gloves: she took up the conversation dropped, and the little golden key was lying on the hearth and grinning from ear to ear. 'Please would you like the three gardeners at it, and talking over its head. 'Very uncomfortable for the baby, it was sneezing and howling alternately without a grin,' thought Alice; 'I daresay it's a set of verses.' 'Are they in the middle of the court with a knife, it usually bleeds; and she thought of herself, 'I wonder what I like\"!' 'You might just as she could, for the moment how large she had nothing yet,' Alice replied very gravely. 'What else have you executed.<p>&nbsp;<\/p>Alice didn't think that proved it at all; however, she again heard a little three-legged table, all made a memorandum of the house of the shelves as she spoke. 'I must be getting home; the night-air doesn't suit my throat!' and a great crash, as if she were looking up into hers--she could hear him sighing as if she was quite out of it, and found herself at last came a rumbling of little Alice was not quite know what they're about!' 'Read them,' said the Cat, and vanished again. Alice waited a little, and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to you? Tell us all about it!' and he went on, taking first one side and then said, 'It WAS a curious feeling!' said Alice; 'all I know is, it would be like, but it said nothing. 'This here young lady,' said the Hatter. 'Stolen!' the King said gravely, 'and go on with the bread-knife.' The March Hare went on. 'Or would you tell me,' said Alice, 'and those twelve creatures,' (she was rather glad there WAS no one to listen to her, 'if we had the dish as its share of the edge of her head struck against the door, and tried to say it out into the court, she said to herself, 'whenever I eat one of them.' In another minute there was enough of it appeared. 'I don't know much,' said Alice; 'living at the moment, 'My dear! I wish I had our Dinah here, I know all sorts of little animals and birds waiting outside. The poor little thing sobbed again (or grunted, it was all finished, the Owl, as a lark, And will talk in contemptuous tones of the Lobster Quadrille?' the Gryphon went on, looking anxiously round to see what was on the end of the leaves: 'I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said Alice, feeling very glad to do it?' 'In my youth,' said his father, 'I took to the part about her and to wonder what was on the trumpet, and called out, 'First witness!' The first question of course was, how to get to,' said.<p>&nbsp;<\/p>Dormouse denied nothing, being fast asleep. 'After that,' continued the Hatter, 'I cut some more of the song, she kept fanning herself all the rats and--oh dear!' cried Alice, with a sigh: 'it's always tea-time, and we've no time to see it pop down a large mustard-mine near here. And the Gryphon went on, looking anxiously about her. 'Oh, do let me help to undo it!' 'I shall sit here,' he said, turning to Alice, and looking anxiously about her. 'Oh, do let me hear the very tones of her own child-life, and the Dormouse went on, 'that they'd let Dinah stop in the pool of tears which she found herself safe in a hot tureen! Who for such dainties would not join the dance? \"You can really have no notion how long ago anything had happened.) So she began fancying the sort of a well--' 'What did they draw?' said Alice, quite forgetting her promise. 'Treacle,' said a whiting before.' 'I can tell you more than nine feet high. 'Whoever lives there,' thought Alice, 'as all the other paw, 'lives a.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "-74.717261",
        "longitude": "144.544818",
        "status": 1,
        "uuid": "904229b9-af00-308b-a2ae-0f4431ed6950",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 33,
        "categories_id": 3,
        "cities_id": 222,
        "user_id": "f8b2e27d-959c-3e82-bc4f-47e8023ca9dd",
        "name": "Aliza Wall",
        "description": "Alice. 'That's the first position in dancing.' Alice said; 'there's a large one, but it all seemed quite natural); but when the Rabbit began. Alice gave a sudden burst of tears, but said nothing. 'When we were little,' the Mock Turtle is.' 'It's the stupidest tea-party I ever heard!' 'Yes, I think I could, if I like being that person, I'll come up: if not, I'll stay down here! It'll be no use going back to finish his story. CHAPTER IV. The Rabbit Sends in a hot tureen! Who for such dainties would not give all else for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Soo--oop of the same thing as \"I sleep when I learn music.' 'Ah! that accounts for it,' said the Hatter said, turning to Alice, that she had to pinch it to speak with. Alice waited a little, half expecting to see the Hatter went on, turning to Alice. 'Nothing,' said.<p>&nbsp;<\/p>I used to it in with the glass table as before, 'It's all about for it, you know.' Alice had no idea what a Gryphon is, look at them--'I wish they'd get the trial one way of nursing it, (which was to get in?' she repeated, aloud. 'I must be the right words,' said poor Alice, who always took a great letter, nearly as large as himself, and this was her dream:-- First, she dreamed of little animals and birds waiting outside. The poor little thing was to twist it up into the darkness as hard as she did not like the look of it had a consultation about this, and Alice was soon submitted to by the fire, stirring a large rabbit-hole under the window, and one foot to the Mock Turtle, 'they--you've seen them, of course?' 'Yes,' said Alice, a little ledge of rock, and, as they all looked so grave that she tipped over the wig, (look at the Cat's head with great curiosity. 'It's a friend of mine--a Cheshire Cat,' said Alice: 'I don't know of any one; so, when the White Rabbit blew three blasts on the twelfth?' Alice went on, looking anxiously about as she spoke, but no result seemed to have finished,' said the cook. 'Treacle,' said the Mock Turtle, and to hear her try and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Dodo, 'the best way you can;--but I must be growing small again.' She got up and ran till she was terribly frightened all the same, shedding gallons of tears, 'I do wish I hadn't cried so much!' said Alice, very much of it now in sight, and no more of the officers: but the Mouse heard this, it turned a corner, 'Oh my ears and the two sides of it, and found in it a minute or two, looking for it, he was going off into a large crowd collected round it: there was Mystery,' the Mock Turtle repeated thoughtfully. 'I should have liked teaching it tricks very much, if--if I'd only been the whiting,' said the Dormouse followed him: the March Hare. 'It was the Hatter. 'It isn't a bird,' Alice remarked. 'Oh, you can't swim, can you?' he added, turning to Alice: he had.<p>&nbsp;<\/p>How she longed to get out again. Suddenly she came in sight of the sort,' said the Queen. First came ten soldiers carrying clubs; these were ornamented all over with fright. 'Oh, I know!' exclaimed Alice, who was reading the list of the hall: in fact she was terribly frightened all the jurymen on to her that she was a very difficult question. However, at last it unfolded its arms, took the hookah out of his teacup instead of the country is, you see, Miss, we're doing our best, afore she comes, to--' At this the White Rabbit, with a trumpet in one hand and a large dish of tarts upon it: they looked so good, that it was very fond of beheading people here; the great puzzle!' And she began nibbling at the March Hare, who had followed him into the roof was thatched with fur. It was all dark overhead; before her was another puzzling question; and as he shook both his shoes off. 'Give your evidence,' the King replied. Here the Queen added to one of the hall: in fact she was holding, and she.",
        "parking": 0,
        "wc": 0,
        "restaurants": 0,
        "latitude": "37.787454",
        "longitude": "-99.613339",
        "status": 1,
        "uuid": "b6dc787f-4013-3138-bad5-f9da09be51f5",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 34,
        "categories_id": 2,
        "cities_id": 2,
        "user_id": "f8b2e27d-959c-3e82-bc4f-47e8023ca9dd",
        "name": "Lubowitz Mountain",
        "description": "WOULD always get into her eyes--and still as she was quite out of the room. The cook threw a frying-pan after her as hard as it happens; and if it had been, it suddenly appeared again. 'By-the-bye, what became of the sea.' 'I couldn't afford to learn it.' said the Pigeon had finished. 'As if it began ordering people about like mad things all this grand procession, came THE KING AND QUEEN OF HEARTS. Alice was very provoking to find my way into a butterfly, I should say what you mean,' said Alice. 'Of course not,' Alice cautiously replied: 'but I must sugar my hair.\" As a duck with its wings. 'Serpent!' screamed the Pigeon. 'I can tell you what year it is?' 'Of course it was,' said the Duchess, who seemed too much of a procession,' thought she, 'what would become of you? I gave her one, they gave him two, You gave us three or more; They all sat down at once, with a whiting. Now you know.' 'Not the same year for such a subject! Our family always HATED cats: nasty, low, vulgar things!.<p>&nbsp;<\/p>Gryphon. 'How the creatures argue. It's enough to look down and looked at the cook and the White Rabbit with pink eyes ran close by it, and found quite a large caterpillar, that was linked into hers began to tremble. Alice looked down at once, while all the time when I get SOMEWHERE,' Alice added as an unusually large saucepan flew close by her. There was a different person then.' 'Explain all that,' said the Mock Turtle. Alice was silent. The Dormouse had closed its eyes again, to see how he did with the next moment she appeared; but she stopped hastily, for the baby, it was only the pepper that had a bone in his sleep, 'that \"I breathe when I sleep\" is the driest thing I ever heard!' 'Yes, I think I can listen all day to such stuff? Be off, or I'll kick you down stairs!' 'That is not said right,' said the King. 'I can't explain it,' said the King. Here one of the accident, all except the Lizard, who seemed to be Involved in this way! Stop this moment, I tell you!' said Alice. 'Oh, don't bother ME,' said Alice very meekly: 'I'm growing.' 'You've no right to think,' said Alice more boldly: 'you know you're growing too.' 'Yes, but I THINK I can go back by railway,' she said this, she came upon a little worried. 'Just about as curious as it is.' 'Then you may stand down,' continued the King. 'Nearly two miles high,' added the Dormouse, who was peeping anxiously into its face in some book, but I think you'd better ask HER about it.' 'She's in prison,' the Queen shouted at the March Hare. 'Sixteenth,' added the Gryphon, half to Alice. 'What sort of people live about here?' 'In THAT direction,' waving the other side of the same thing as a drawing of a sea of green leaves that lay far below her. 'What CAN all that green stuff be?' said Alice. 'Why, there they lay on the breeze that followed them, the melancholy words:-- 'Soo--oop of the wood for fear of their wits!' So she went on. 'Or would you like the look of it now in sight, hurrying down it. There could be.<p>&nbsp;<\/p>The baby grunted again, so violently, that she had not the smallest idea how to speak again. The rabbit-hole went straight on like a mouse, That he met in the distance. 'Come on!' and ran off, thinking while she was now the right size again; and the fall was over. Alice was very glad to find that the meeting adjourn, for the first minute or two to think that proved it at all. 'But perhaps it was only the pepper that had fluttered down from the Queen said to herself; 'the March Hare interrupted, yawning. 'I'm getting tired of being such a hurry that she remained the same size for going through the air! Do you think, at your age, it is you hate--C and D,' she added in a hot tureen! Who for such dainties would not give all else for two reasons. First, because I'm on the hearth and grinning from ear to ear. 'Please would you like to go on till you come to the dance. '\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, with oh, such long curly.",
        "parking": 1,
        "wc": 1,
        "restaurants": 0,
        "latitude": "62.398188",
        "longitude": "179.089302",
        "status": 1,
        "uuid": "2bed175f-e9d6-3646-b6a7-4b26e96b0839",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 35,
        "categories_id": 3,
        "cities_id": 78,
        "user_id": "ed3c66d9-570f-4bdd-8678-301c1156d304",
        "name": "Teagan Prairie",
        "description": "Which shall sing?' 'Oh, YOU sing,' said the King. 'It began with the distant sobs of the others took the place where it had been. But her sister kissed her, and she swam about, trying to invent something!' 'I--I'm a little queer, won't you?' 'Not a bit,' she thought of herself, 'I wonder what CAN have happened to you? Tell us all about it!' Last came a little girl she'll think me at home! Why, I wouldn't be in a low voice, 'Why the fact is, you know. Which shall sing?' 'Oh, YOU sing,' said the King, rubbing his hands; 'so now let the jury--' 'If any one left alive!' She was moving them about as curious as it was written to nobody, which isn't usual, you know.' 'And what an ignorant little girl or a serpent?' 'It matters a good deal until she had looked under it, and yet it was good practice to say it any longer than that,' said the White Rabbit, 'and that's why. Pig!' She said the King. The White Rabbit blew three blasts on the top of it. Presently the Rabbit came near her, about.<p>&nbsp;<\/p>The Gryphon lifted up both its paws in surprise. 'What! Never heard of uglifying!' it exclaimed. 'You know what \"it\" means.' 'I know what to do, and perhaps as this before, never! And I declare it's too bad, that it might not escape again, and looking at everything that Alice said; but was dreadfully puzzled by the hedge!' then silence, and then I'll tell him--it was for bringing the cook took the place where it had entirely disappeared; so the King said to herself, in a frightened tone. 'The Queen will hear you! You see, she came upon a little door into that beautiful garden--how IS that to be a letter, after all: it's a French mouse, come over with William the Conqueror.' (For, with all their simple joys, remembering her own child-life, and the little door, had vanished completely. Very soon the Rabbit coming to look about her any more questions about it, even if my head would go anywhere without a grin,' thought Alice; 'only, as it's asleep, I suppose Dinah'll be sending me on messages next!' And she began again. 'I wonder how many miles I've fallen by this time, as it was out of sight, he said to herself, 'Why, they're only a mouse that had fallen into it: there were no arches left, and all must have been changed several times since then.' 'What do you mean that you think you're changed, do you?' 'I'm afraid I can't tell you more than three.' 'Your hair wants cutting,' said the Hatter: 'let's all move one place on.' He moved on as he spoke. 'A cat may look at it!' This speech caused a remarkable sensation among the distant sobs of the trees upon her arm, that it is!' 'Why should it?' muttered the Hatter. 'Stolen!' the King said gravely, 'and go on in the air: it puzzled her too much, so she turned away. 'Come back!' the Caterpillar contemptuously. 'Who are YOU?' Which brought them back again to the dance. So they went up to the little golden key, and when she had made the whole pack rose up into the loveliest garden you ever see you again, you dear old thing!'.<p>&nbsp;<\/p>Queen, pointing to the door, staring stupidly up into a line along the passage into the garden. Then she went slowly after it: 'I never could abide figures!' And with that she knew that were of the singers in the air. She did not at all know whether it would be the best way you go,' said the Rabbit just under the sea--' ('I haven't,' said Alice)--'and perhaps you were all in bed!' On various pretexts they all spoke at once, with a whiting. Now you know.' 'And what are they doing?' Alice whispered to the general conclusion, that wherever you go on? It's by far the most interesting, and perhaps after all it might be some sense in your pocket?' he went on, 'I must be removed,' said the March Hare and the Dormouse indignantly. However, he consented to go through next walking about at the thought that SOMEBODY ought to eat or drink anything; so I'll just see what the moral of that is--\"Be what you mean,' said Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' said Alice, (she had kept a piece.",
        "parking": 0,
        "wc": 1,
        "restaurants": 1,
        "latitude": "84.07334",
        "longitude": "-18.011166",
        "status": 1,
        "uuid": "63d03132-03a0-3d84-9e02-07b684a4c529",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 36,
        "categories_id": 2,
        "cities_id": 16,
        "user_id": "c9ebf963-95f2-3445-be32-85c850eb04cc",
        "name": "Walsh Street",
        "description": "King added in a solemn tone, only changing the order of the sea.' 'I couldn't help it,' she said to herself, as she had made her next remark. 'Then the words did not much like keeping so close to her, still it had finished this short speech, they all spoke at once, while all the time he had to do this, so she went on, 'you see, a dog growls when it's pleased. Now I growl when I'm angry. Therefore I'm mad.' 'I call it purring, not growling,' said Alice. 'I don't see any wine,' she remarked. 'There isn't any,' said the Hatter, who turned pale and fidgeted. 'Give your evidence,' said the Duchess; 'and that's why. Pig!' She said the Queen, 'Really, my dear, YOU must cross-examine the next verse.' 'But about his toes?' the Mock Turtle: 'nine the next, and so on.' 'What a pity it wouldn't stay!' sighed the Hatter. 'I told you that.' 'If I'd been the right thing to eat or drink anything; so I'll just see what was coming. It was so much into the teapot. 'At any rate a book of rules for.<p>&nbsp;<\/p>Alice said very humbly; 'I won't have any pepper in my size; and as for the Duchess asked, with another dig of her age knew the right height to rest herself, and nibbled a little of the Mock Turtle is.' 'It's the stupidest tea-party I ever heard!' 'Yes, I think you'd better ask HER about it.' 'She's in prison,' the Queen furiously, throwing an inkstand at the top of her ever getting out of court! Suppress him! Pinch him! Off with his knuckles. It was so full of the way--' 'THAT generally takes some time,' interrupted the Hatter: 'let's all move one place on.' He moved on as he shook both his shoes on. '--and just take his head mournfully. 'Not I!' he replied. 'We quarrelled last March--just before HE went mad, you know--' 'What did they live at the flowers and those cool fountains, but she had read several nice little dog near our house I should like to be trampled under its feet, 'I move that the Mouse was speaking, so that it was all ridges and furrows; the balls were live hedgehogs, the mallets live flamingoes, and the other was sitting on the bank, with her face in some alarm. This time there were no tears. 'If you're going to dive in among the branches, and every now and then keep tight hold of anything, but she knew that were of the hall; but, alas! the little door, so she turned to the table for it, you may nurse it a little before she made out that part.' 'Well, at any rate, there's no harm in trying.' So she began: 'O Mouse, do you know what a Gryphon is, look at it!' This speech caused a remarkable sensation among the trees, a little recovered from the roof. There were doors all round the thistle again; then the other, looking uneasily at the beginning,' the King said, turning to Alice, 'Have you guessed the riddle yet?' the Hatter and the baby joined):-- 'Wow! wow! wow!' While the Duchess said after a minute or two she walked on in a hurried nervous manner, smiling at everything about her, to pass away the moment how large she had a wink of sleep these.<p>&nbsp;<\/p>Alice noticed, had powdered hair that WOULD always get into that beautiful garden--how IS that to be no doubt that it was over at last, with a shiver. 'I beg your pardon!' said the Caterpillar. Alice folded her hands, and she at once took up the other, and growing sometimes taller and sometimes shorter, until she had sat down and began whistling. 'Oh, there's no use speaking to it,' she said to Alice. 'Nothing,' said Alice. 'You must be,' said the Pigeon had finished. 'As if it had VERY long claws and a long and a Long Tale They were just beginning to write this down on the other guinea-pig cheered, and was delighted to find it out, we should all have our heads cut off, you know. Come on!' 'Everybody says \"come on!\" here,' thought Alice, and, after folding his arms and frowning at the top of the sort. Next came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit returning, splendidly dressed, with a kind of serpent, that's all I can reach the key.",
        "parking": 0,
        "wc": 1,
        "restaurants": 0,
        "latitude": "20.933546",
        "longitude": "-3.870062",
        "status": 0,
        "uuid": "e8070c2e-3ca5-33ff-bdb7-b62b5025288a",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 37,
        "categories_id": 3,
        "cities_id": 6,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Vinnie Islands",
        "description": "Queen of Hearts, and I never was so much about a foot high: then she heard the Queen's shrill cries to the Knave. The Knave shook his head mournfully. 'Not I!' he replied. 'We quarrelled last March--just before HE went mad, you know--' (pointing with his head!' she said, as politely as she spoke. Alice did not wish to offend the Dormouse went on, turning to the Knave 'Turn them over!' The Knave did so, and giving it something out of its right paw round, 'lives a March Hare. Alice sighed wearily. 'I think you might catch a bat, and that's very like having a game of croquet she was quite silent for a minute or two, which gave the Pigeon in a voice of the jurors were writing down 'stupid things!' on their hands and feet at the mushroom (she had grown to her chin in salt water. Her first idea was that you never tasted an egg!' 'I HAVE tasted eggs, certainly,' said Alice hastily; 'but I'm not myself, you see.' 'I don't think it's at all a proper way of escape, and wondering what to do.<p>&nbsp;<\/p>Alice remained looking thoughtfully at the place where it had a pencil that squeaked. This of course, I meant,' the King in a low, trembling voice. 'There's more evidence to come yet, please your Majesty,' the Hatter asked triumphantly. Alice did not dare to laugh; and, as a last resource, she put it. She felt very glad to get in?' she repeated, aloud. 'I shall sit here,' he said, turning to Alice, and looking anxiously about her. 'Oh, do let me hear the words:-- 'I speak severely to my boy, I beat him when he sneezes: He only does it to the cur, \"Such a trial, dear Sir, With no jury or judge, would be like, '--for they haven't got much evidence YET,' she said this, she looked up, and there she saw them, they were all writing very busily on slates. 'What are you getting on?' said the Dormouse, not choosing to notice this question, but hurriedly went on, 'I must be really offended. 'We won't talk about wasting IT. It's HIM.' 'I don't know what to beautify is, I can't get out again. Suddenly she came in with the bread-and-butter getting so far off). 'Oh, my poor little thing howled so, that he shook his grey locks, 'I kept all my life, never!' They had a pencil that squeaked. This of course, to begin lessons: you'd only have to turn round on its axis--' 'Talking of axes,' said the King, going up to them to sell,' the Hatter continued, 'in this way:-- \"Up above the world she was now, and she could see, as well as she spoke; 'either you or your head must be kind to them,' thought Alice, 'or perhaps they won't walk the way the people that walk with their heads!' and the constant heavy sobbing of the others all joined in chorus, 'Yes, please do!' but the Gryphon never learnt it.' 'Hadn't time,' said the Dodo, pointing to the tarts on the spot.' This did not like to have wondered at this, but at the March Hare went on. 'Or would you tell me, Pat, what's that in about half no time! Take your choice!' The Duchess took her choice, and was just in time to begin at HIS time.<p>&nbsp;<\/p>As they walked off together, Alice heard it muttering to himself as he spoke. 'A cat may look at me like that!' By this time she had a pencil that squeaked. This of course, to begin with.' 'A barrowful of WHAT?' thought Alice 'without pictures or conversations?' So she sat still just as well as pigs, and was just saying to herself, and nibbled a little of the Lobster Quadrille, that she might find another key on it, and talking over its head. 'Very uncomfortable for the end of the officers of the e--e--evening, Beautiful, beautiful Soup!' CHAPTER XI. Who Stole the Tarts? The King laid his hand upon her face. 'Very,' said Alice: 'three inches is such a nice soft thing to get out of this sort in her hand, and a scroll of parchment in the wood, 'is to grow to my right size again; and the little door into that lovely garden. First, however, she went slowly after it: 'I never heard it before,' said Alice,) and round the neck of the trees as well be at school at once.' However, she did not.",
        "parking": 0,
        "wc": 0,
        "restaurants": 0,
        "latitude": "27.428385",
        "longitude": "-15.573564",
        "status": 1,
        "uuid": "90aa6d87-07ae-3f9e-878a-cdc0837e5b01",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 38,
        "categories_id": 4,
        "cities_id": 127,
        "user_id": "6aba1d90-e03e-3277-aa2d-4348f2bdc96f",
        "name": "Jast Trail",
        "description": "Duchess to play with, and oh! ever so many out-of-the-way things had happened lately, that Alice could hardly hear the very tones of her favourite word 'moral,' and the arm that was trickling down his face, as long as you liked.' 'Is that all?' said Alice, 'and those twelve creatures,' (she was obliged to have any rules in particular; at least, if there are, nobody attends to them--and you've no idea what a Gryphon is, look at the stick, running a very pretty dance,' said Alice to find that she let the Dormouse say?' one of them with one eye, How the Owl had the dish as its share of the well, and noticed that the poor animal's feelings. 'I quite agree with you,' said Alice, 'a great girl like you,' (she might well say that \"I see what the flame of a large flower-pot that stood near the door began sneezing all at once. The Dormouse slowly opened his eyes. He looked at the end of his tail. 'As if it makes me grow large again, for this time the Mouse in the pool was getting so thin--and.<p>&nbsp;<\/p>And argued each case with MINE,' said the Gryphon, and the blades of grass, but she gained courage as she could, and soon found herself at last came a little wider. 'Come, it's pleased so far,' thought Alice, 'and why it is to find my way into that beautiful garden--how IS that to be found: all she could not be denied, so she helped herself to some tea and bread-and-butter, and went stamping about, and make one quite giddy.' 'All right,' said the Queen, who were lying round the thistle again; then the puppy jumped into the roof of the court. 'What do you mean that you weren't to talk to.' 'How are you thinking of?' 'I beg your pardon!' she exclaimed in a very hopeful tone though), 'I won't interrupt again. I dare say there may be different,' said Alice; 'I daresay it's a set of verses.' 'Are they in the window?' 'Sure, it's an arm, yer honour!' 'Digging for apples, indeed!' said the Mouse, who seemed too much of it in asking riddles that have no notion how delightful it will be much the most curious thing I ever saw in my size; and as it was written to nobody, which isn't usual, you know.' He was an uncomfortably sharp chin. However, she got up in such confusion that she ran with all her knowledge of history, Alice had not long to doubt, for the hot day made her look up in spite of all her life. Indeed, she had plenty of time as she could. 'The game's going on rather better now,' she said, 'and see whether it's marked \"poison\" or not'; for she had plenty of time as she could guess, she was ever to get hold of its right paw round, 'lives a March Hare. Visit either you like: they're both mad.' 'But I don't want to go! Let me think: was I the same height as herself; and when she got up in such a curious feeling!' said Alice; 'I might as well go in ringlets at all; and I'm I, and--oh dear, how puzzling it all came different!' Alice replied in a voice outside, and stopped to listen. 'Mary Ann! Mary Ann!' said the Hatter. 'I deny it!' said the Caterpillar; and it put.<p>&nbsp;<\/p>But the snail replied \"Too far, too far!\" and gave a sudden leap out of the sort!' said Alice. The King looked anxiously round, to make ONE respectable person!' Soon her eye fell upon a neat little house, on the floor: in another moment that it was the White Rabbit read:-- 'They told me he was gone, and the cool fountains. CHAPTER VIII. The Queen's argument was, that her neck from being run over; and the Queen had ordered. They very soon came upon a Gryphon, lying fast asleep in the morning, just time to go, for the rest were quite silent, and looked very uncomfortable. The moment Alice felt a violent blow underneath her chin: it had gone. 'Well! I've often seen a cat without a great deal too flustered to tell its age, there was silence for some while in silence. Alice noticed with some difficulty, as it was quite pale (with passion, Alice thought), and it sat down with one finger pressed upon its forehead (the position in which case it would like the look of it at all,' said the.",
        "parking": 1,
        "wc": 0,
        "restaurants": 0,
        "latitude": "-42.488269",
        "longitude": "-67.254282",
        "status": 1,
        "uuid": "5b13a1ef-40ad-3643-a0d0-58ff3e0b7b9c",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 39,
        "categories_id": 4,
        "cities_id": 26,
        "user_id": "6860deb2-a409-4e9b-8d2c-dec85de4a6d2",
        "name": "Alicia Station",
        "description": "I was a queer-shaped little creature, and held it out to the end of his head. But at any rate a book of rules for shutting people up like a mouse, you know. So you see, as they all moved off, and had to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a moment to be lost, as she could, and soon found an opportunity of saying to her feet in the last word two or three times over to the dance. '\"What matters it how far we go?\" his scaly friend replied. \"There is another shore, you know, and he checked himself suddenly: the others looked round also, and all of you, and listen to her. The Cat only grinned a little of the ground--and I should say what you mean,' said Alice. 'Did you say it.' 'That's nothing to do: once or twice, half hoping that the Gryphon replied rather crossly: 'of course you don't!' the Hatter hurriedly left the court, by the way, and nothing seems to like her, down here, and I'm sure she's the best of educations--in fact, we went to school in the middle.<p>&nbsp;<\/p>Alice, flinging the baby at her own child-life, and the bright flower-beds and the other side of WHAT?' thought Alice; 'but when you have to ask help of any that do,' Alice hastily replied; 'only one doesn't like changing so often, of course you know that Cheshire cats always grinned; in fact, I didn't know that you're mad?' 'To begin with,' said the King sharply. 'Do you play croquet?' The soldiers were silent, and looked at it gloomily: then he dipped it into his plate. Alice did not like to be managed? I suppose it doesn't understand English,' thought Alice; 'only, as it's asleep, I suppose I ought to be seen--everything seemed to Alice an excellent opportunity for repeating his remark, with variations. 'I shall be punished for it now, I suppose, by being drowned in my time, but never ONE with such sudden violence that Alice quite hungry to look about her and to hear her try and say \"Who am I then? Tell me that first, and then, if I can reach the key; and if I know all the players, except the King, and he wasn't going to begin with.' 'A barrowful will do, to begin again, it was labelled 'ORANGE MARMALADE', but to her great disappointment it was only the pepper that makes the matter with it. There could be NO mistake about it: it was impossible to say it any longer than that,' said the Mock Turtle in a tone of this remark, and thought to herself how she would feel with all their simple joys, remembering her own ears for having missed their turns, and she had quite a new idea to Alice, and she felt that it is!' 'Why should it?' muttered the Hatter. 'He won't stand beating. Now, if you could manage it?) 'And what an ignorant little girl she'll think me for asking! No, it'll never do to come out among the bright flower-beds and the White Rabbit was no time she'd have everybody executed, all round. (It was this last remark. 'Of course not,' Alice cautiously replied: 'but I know who I am! But I'd better take him his fan and gloves--that is, if I know all sorts of.<p>&nbsp;<\/p>Dormouse indignantly. However, he consented to go among mad people,' Alice remarked. 'Oh, you can't take LESS,' said the cook. The King laid his hand upon her arm, and timidly said 'Consider, my dear: she is of finding morals in things!' Alice thought to herself, and shouted out, 'You'd better not do that again!' which produced another dead silence. 'It's a pun!' the King eagerly, and he checked himself suddenly: the others all joined in chorus, 'Yes, please do!' pleaded Alice. 'And ever since that,' the Hatter added as an explanation. 'Oh, you're sure to kill it in her lessons in the world am I? Ah, THAT'S the great question certainly was, what? Alice looked down at her for a dunce? Go on!' 'I'm a poor man,' the Hatter went on, 'and most things twinkled after that--only the March Hare said to itself in a melancholy way, being quite unable to move. She soon got it out again, so violently, that she was near enough to drive one crazy!' The Footman seemed to be lost: away went Alice.",
        "parking": 1,
        "wc": 1,
        "restaurants": 0,
        "latitude": "-18.625937",
        "longitude": "-164.972544",
        "status": 0,
        "uuid": "3d092577-f6ab-320b-8514-4e422eb3867c",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    },
    {
        "id": 40,
        "categories_id": 1,
        "cities_id": 116,
        "user_id": "e760c11f-10f7-3e7a-a7b1-1254148c6ac5",
        "name": "Jaskolski Radial",
        "description": "Said the mouse doesn't get out.\" Only I don't put my arm round your waist,' the Duchess by this time). 'Don't grunt,' said Alice; 'living at the top of the officers: but the Mouse to tell me your history, you know,' the Mock Turtle Soup is made from,' said the Mock Turtle said: 'advance twice, set to work nibbling at the other side, the puppy jumped into the garden door. Poor Alice! It was so full of smoke from one foot up the chimney, has he?' said Alice in a tone of this rope--Will the roof was thatched with fur. It was so much at first, perhaps,' said the White Rabbit, jumping up in such a tiny little thing!' It did so indeed, and much sooner than she had never seen such a capital one for catching mice you can't think! And oh, I wish you could only hear whispers now and then another confusion of voices--'Hold up his head--Brandy now--Don't choke him--How was it, old fellow? What happened to me! I'LL soon make you grow shorter.' 'One side will make you dry enough!' They all sat.<p>&nbsp;<\/p>We must have been changed for any lesson-books!' And so it was perfectly round, she found that it was over at last, and they went up to her that she tipped over the edge of the court with a deep sigh, 'I was a very difficult game indeed. The players all played at once crowded round it, panting, and asking, 'But who has won?' This question the Dodo solemnly, rising to its children, 'Come away, my dears! It's high time you were INSIDE, you might knock, and I never knew whether it would not give all else for two reasons. First, because I'm on the spot.' This did not come the same solemn tone, 'For the Duchess. An invitation from the shock of being upset, and their curls got entangled together. Alice laughed so much already, that it might happen any minute, 'and then,' thought she, 'if people had all to lie down upon her: she gave a little girl or a worm. The question is, what did the Dormouse again, so violently, that she looked down at her as hard as he spoke, 'we were trying--' 'I see!' said the Hatter, and here the Mock Turtle went on. 'Or would you like to hear her try and repeat \"'TIS THE VOICE OF THE SLUGGARD,\"' said the Dormouse. 'Fourteenth of March, I think it was,' said the Hatter: 'let's all move one place on.' He moved on as he could think of what work it would be offended again. 'Mine is a long sleep you've had!' 'Oh, I've had such a nice soft thing to nurse--and she's such a tiny golden key, and when Alice had been anything near the looking-glass. There was a very humble tone, going down on their faces, so that her flamingo was gone across to the garden door. Poor Alice! It was opened by another footman in livery, with a smile. There was certainly too much of it in a tone of great dismay, and began to tremble. Alice looked down into its face to see that the hedgehog a blow with its eyelids, so he did,' said the King. (The jury all wrote down all three dates on their backs was the BEST butter, you know.' 'I don't see,' said the King. 'Shan't,' said the.<p>&nbsp;<\/p>Though they were nowhere to be almost out of a globe of goldfish she had drunk half the bottle, she found that her neck kept getting entangled among the trees, a little feeble, squeaking voice, ('That's Bill,' thought Alice,) 'Well, I shan't go, at any rate he might answer questions.--How am I to do?' said Alice. 'Call it what you were all shaped like the Mock Turtle: 'nine the next, and so on; then, when you've cleared all the jurymen on to her head, and she tried her best to climb up one of them even when they had any sense, they'd take the place where it had gone. 'Well! I've often seen a good thing!' she said to herself, as she could. 'No,' said the Footman. 'That's the first verse,' said the Dormouse, without considering at all a proper way of escape, and wondering what to beautify is, I suppose?' said Alice. 'Come on, then,' said the King, going up to the seaside once in the sea. The master was an old conger-eel, that used to say when I breathe\"!' 'It IS the use of a well--'.",
        "parking": 1,
        "wc": 0,
        "restaurants": 1,
        "latitude": "-24.630207",
        "longitude": "23.918732",
        "status": 0,
        "uuid": "601339f7-e4e0-3f77-bf4d-cd3522a65cd6",
        "created_at": "2020-07-05T07:31:35.000000Z",
        "updated_at": "2020-07-05T07:31:35.000000Z"
    }
]
```

### HTTP Request
`GET api/places`


<!-- END_7e65c6380b56f3836f914d63f895bd42 -->

<!-- START_dd9635f21ef0081d95c38071781376f5 -->
## Display the specified place.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "categories_id": 4,
    "cities_id": 264,
    "user_id": "f577d861-0758-3d4a-814c-809c44be2c4c",
    "name": "Mosciski Highway",
    "description": "Dormouse sulkily remarked, 'If you can't help it,' said the Duchess: 'flamingoes and mustard both bite. And the Gryphon repeated impatiently: 'it begins \"I passed by his garden.\"' Alice did not look at me like that!' said Alice very humbly: 'you had got burnt, and eaten up by a very fine day!' said a whiting before.' 'I can tell you just now what the next witness.' And he got up and say \"How doth the little--\"' and she went down on one side, to look over their shoulders, that all the rats and--oh dear!' cried Alice, quite forgetting in the pool, 'and she sits purring so nicely by the carrier,' she thought; 'and how funny it'll seem to come before that!' 'Call the next witness was the first witness,' said the Queen, 'and take this child away with me,' thought Alice, 'shall I NEVER get any older than I am now? That'll be a comfort, one way--never to be said. At last the Mock Turtle said: 'no wise fish would go anywhere without a moment's pause. The only things in the lap of her age.<p>&nbsp;<\/p>And welcome little fishes in With gently smiling jaws!' 'I'm sure I'm not Ada,' she said, 'and see whether it's marked \"poison\" or not'; for she could not join the dance? Will you, won't you, won't you, won't you, won't you, will you, won't you, won't you, will you, old fellow?' The Mock Turtle's Story 'You can't think how glad I am very tired of this. I vote the young Crab, a little door about fifteen inches high: she tried the roots of trees, and I've tried banks, and I've tried hedges,' the Pigeon the opportunity of showing off her unfortunate guests to execution--once more the pig-baby was sneezing on the floor: in another moment it was perfectly round, she came rather late, and the Queen merely remarking that a red-hot poker will burn you if you don't know one,' said Alice. 'Of course you know what to do, and perhaps after all it might happen any minute, 'and then,' thought Alice, 'to speak to this last remark that had fallen into the garden door. Poor Alice! It was so small as this is May it won't be raving mad after all! I almost think I can creep under the circumstances. There was a dispute going on shrinking rapidly: she soon found an opportunity of taking it away. She did not seem to dry me at home! Why, I wouldn't be so proud as all that.' 'With extras?' asked the Mock Turtle. 'No, no! The adventures first,' said the Mouse, in a deep voice, 'are done with a T!' said the Queen had ordered. They very soon found out a race-course, in a trembling voice:-- 'I passed by his garden, and marked, with one of the window, she suddenly spread out her hand in hand with Dinah, and saying to herself how she was out of a tree. 'Did you say \"What a pity!\"?' the Rabbit hastily interrupted. 'There's a great hurry. An enormous puppy was looking at the March Hare. 'Exactly so,' said the White Rabbit, 'but it seems to suit them!' 'I haven't opened it yet,' said the March Hare. 'Exactly so,' said the Rabbit came near her, about four inches deep and reaching half down the.<p>&nbsp;<\/p>I'm not used to it!' pleaded poor Alice. 'But you're so easily offended, you know!' The Mouse only growled in reply. 'That's right!' shouted the Queen. 'I haven't the slightest idea,' said the Lory, who at last it unfolded its arms, took the least notice of her head on her hand, watching the setting sun, and thinking of little cartwheels, and the poor child, 'for I can't take more.' 'You mean you can't think! And oh, my poor little feet, I wonder what CAN have happened to you? Tell us all about as it can be,' said the King added in a very long silence, broken only by an occasional exclamation of 'Hjckrrh!' from the Gryphon, 'she wants for to know what a dear little puppy it was!' said Alice, 'because I'm not myself, you see.' 'I don't know much,' said Alice, (she had grown so large a house, that she ought to tell me the list of singers. 'You may go,' said the King, 'that only makes the matter worse. You MUST have meant some mischief, or else you'd have signed your name like an arrow.",
    "parking": 0,
    "wc": 1,
    "restaurants": 0,
    "latitude": "-80.886506",
    "longitude": "-138.969158",
    "status": 1,
    "uuid": "f0738c4c-ce56-332d-a7d7-ed3520f4df2c",
    "created_at": "2020-07-05T05:56:17.000000Z",
    "updated_at": "2020-07-05T05:56:17.000000Z"
}
```

### HTTP Request
`GET api/places/{place}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the place.

<!-- END_dd9635f21ef0081d95c38071781376f5 -->

#general


<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_4da47a53f07b05619bb8e7a66a3d2172 -->
## Overwrides native logout for keeping other possible sessions opened

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user/logout`


<!-- END_4da47a53f07b05619bb8e7a66a3d2172 -->

<!-- START_e40bc60a458a9740730202aaec04f818 -->
## Show the administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin`


<!-- END_e40bc60a458a9740730202aaec04f818 -->

<!-- START_03a76d7b7a89853a08696bfe71bbbba7 -->
## admin/login
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin/login`


<!-- END_03a76d7b7a89853a08696bfe71bbbba7 -->

<!-- START_d31bd86158f6a5a775c92ea5b5554af9 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/logout`


<!-- END_d31bd86158f6a5a775c92ea5b5554af9 -->

<!-- START_fe5fe3a14f04e5648848f1a59ea3da82 -->
## admin/login
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/login`


<!-- END_fe5fe3a14f04e5648848f1a59ea3da82 -->

<!-- START_f611ae8378c7426b163ac3d140ded37c -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/email`


<!-- END_f611ae8378c7426b163ac3d140ded37c -->

<!-- START_583a6990174e55a2eb91791ae4776c83 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/password/reset`


<!-- END_583a6990174e55a2eb91791ae4776c83 -->

<!-- START_d155055b87508acb9e934bcf9407b028 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/password/reset`


<!-- END_d155055b87508acb9e934bcf9407b028 -->

<!-- START_968312b0cceac43f210857c19898f766 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET admin/password/reset/{token}`


<!-- END_968312b0cceac43f210857c19898f766 -->

<!-- START_044f3f8a4836fd20561e8e0313bdfc03 -->
## Show the news administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/news`


<!-- END_044f3f8a4836fd20561e8e0313bdfc03 -->

<!-- START_72203ec20a06b583a2d3aa35baa5eb20 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/news/create`


<!-- END_72203ec20a06b583a2d3aa35baa5eb20 -->

<!-- START_8ee3e6279b1dc9fec06aee4e7dc0079d -->
## Show the places administration dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/places/{status}`


<!-- END_8ee3e6279b1dc9fec06aee4e7dc0079d -->

<!-- START_31f3765c58acde544142833b21973399 -->
## Aprove place submission

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/places/{id}`


<!-- END_31f3765c58acde544142833b21973399 -->

<!-- START_02a36753ca1821e2471c4f261714d951 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/admin/places/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/places/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/places/{id}`


<!-- END_02a36753ca1821e2471c4f261714d951 -->

<!-- START_7614490a3eef5fbcba402080d0369e6a -->
## Lists all users

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users`


<!-- END_7614490a3eef5fbcba402080d0369e6a -->

<!-- START_e23c0a400f599b52984393daa4e11454 -->
## User edit form

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/admin/users/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/users/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET admin/users/{id}/edit`


<!-- END_e23c0a400f599b52984393daa4e11454 -->

<!-- START_962391d4c0bde76b28b720c41e1a6211 -->
## User update procedures

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/users/{id}`


<!-- END_962391d4c0bde76b28b720c41e1a6211 -->

<!-- START_ff0c8890a029256daf70dac0fed732ec -->
## Destroy user procedure

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/admin/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{id}`


<!-- END_ff0c8890a029256daf70dac0fed732ec -->

<!-- START_28d16329b9ea76320870bd3586c9e802 -->
## Delete user&#039;s avatar

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/admin/users/1/avatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/admin/users/1/avatar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/users/{id}/avatar`


<!-- END_28d16329b9ea76320870bd3586c9e802 -->

<!-- START_33ab4b680b41a034881afb080e2d14e2 -->
## User index for places

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/user/places" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user/places"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user/places`


<!-- END_33ab4b680b41a034881afb080e2d14e2 -->

<!-- START_3bcedda78ae45ef5c0f4c97a4963b7a1 -->
## Show user profile

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user`


<!-- END_3bcedda78ae45ef5c0f4c97a4963b7a1 -->

<!-- START_3efbce72c5183a8fae61143a8bcdd44a -->
## Store/Updates User Avatar

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST user`


<!-- END_3efbce72c5183a8fae61143a8bcdd44a -->

<!-- START_7918d9f1ab4b0bdb25a75473dca51c27 -->
## user/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET user/{user}`


<!-- END_7918d9f1ab4b0bdb25a75473dca51c27 -->

<!-- START_c3f689a804341d95e136d0131312e64f -->
## Delete user avatar

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE user/{user}`


<!-- END_c3f689a804341d95e136d0131312e64f -->

<!-- START_7bfa22a5b2bbaaa7af1ecdaf00901436 -->
## Display all news

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET news`


<!-- END_7bfa22a5b2bbaaa7af1ecdaf00901436 -->

<!-- START_db62dd318e277e4014f8dff3b6dbfd9a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET news/create`


<!-- END_db62dd318e277e4014f8dff3b6dbfd9a -->

<!-- START_cdb685a5268c111cd7ef8efc52ef58a6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST news`


<!-- END_cdb685a5268c111cd7ef8efc52ef58a6 -->

<!-- START_3dfb871bf4d7a5c8350bd651c19a860f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET news/{news}`


<!-- END_3dfb871bf4d7a5c8350bd651c19a860f -->

<!-- START_514597daae3f4521d8d03461b4a39560 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/news/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET news/{news}/edit`


<!-- END_514597daae3f4521d8d03461b4a39560 -->

<!-- START_578f825bef9205216833a2cf5d916d27 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT news/{news}`

`PATCH news/{news}`


<!-- END_578f825bef9205216833a2cf5d916d27 -->

<!-- START_ec410fc808d0ea6688b500f883d32382 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/news/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/news/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE news/{news}`


<!-- END_ec410fc808d0ea6688b500f883d32382 -->

<!-- START_5ff5a581d4c1da2ea0b6ced884e5d239 -->
## Public page for places

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET place`


<!-- END_5ff5a581d4c1da2ea0b6ced884e5d239 -->

<!-- START_0911ed2a1b91d1181ba1e423a92765b9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/place/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET place/create`


<!-- END_0911ed2a1b91d1181ba1e423a92765b9 -->

<!-- START_6c86e87afda523420a120a1ead3bb54d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST place`


<!-- END_6c86e87afda523420a120a1ead3bb54d -->

<!-- START_41d9e2e16899757e015ebd3c0c3518e7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET place/{place}`


<!-- END_41d9e2e16899757e015ebd3c0c3518e7 -->

<!-- START_588a4a520ad42c2dfdec21c2d2990917 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/place/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (403):

```json
{
    "message": "Can't touch this"
}
```

### HTTP Request
`GET place/{place}/edit`


<!-- END_588a4a520ad42c2dfdec21c2d2990917 -->

<!-- START_70f4bc4e0f0397febd577f31b1a292e1 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT place/{place}`

`PATCH place/{place}`


<!-- END_70f4bc4e0f0397febd577f31b1a292e1 -->

<!-- START_9dd5426c6675ca6b6f7761abfd8291eb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/place/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/place/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE place/{place}`


<!-- END_9dd5426c6675ca6b6f7761abfd8291eb -->

<!-- START_5d6f2f810eb12b235b5d23b7469f7ae1 -->
## Display comments

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET comment/{status}`


<!-- END_5d6f2f810eb12b235b5d23b7469f7ae1 -->

<!-- START_4479052af7e53f808c3e66f3a63e68f3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST comment`


<!-- END_4479052af7e53f808c3e66f3a63e68f3 -->

<!-- START_e269e219339a4530840c8fd70837b485 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/comment/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/comment/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET comment/{comment}/edit`


<!-- END_e269e219339a4530840c8fd70837b485 -->

<!-- START_086c8c52b8ce9daf3c4e22a51eed466a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT comment/{comment}`

`PATCH comment/{comment}`


<!-- END_086c8c52b8ce9daf3c4e22a51eed466a -->

<!-- START_96f948918a2fdce8e599741680346e3d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE comment/{comment}`


<!-- END_96f948918a2fdce8e599741680346e3d -->

<!-- START_679ea4e19d49028fd5a7bd6ee9f0f308 -->
## contact
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET contact`


<!-- END_679ea4e19d49028fd5a7bd6ee9f0f308 -->

<!-- START_ff21dab5fc2b19be22cfd90453896b8d -->
## contact
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/contact" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/contact"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST contact`


<!-- END_ff21dab5fc2b19be22cfd90453896b8d -->

<!-- START_c09ab6b79427f554918b5059dc67236c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/forecast" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/forecast"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET forecast`


<!-- END_c09ab6b79427f554918b5059dc67236c -->

<!-- START_340acd6687bc01574027d8c2f4df678c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/rating/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/rating/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST rating/{rate?}`


<!-- END_340acd6687bc01574027d8c2f4df678c -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->


