<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            'Abrantes', 'Águeda', 'Aguiar da Beira', 'Alandroal', 'Albergaria-a-Velha', 'Albufeira', 'Alcácer do Sal', 'Alcanena', 'Alcobaça', 'Alcochete', 'Alcoutim', 'Alenquer', 'Alfândega da Fé', 'Alijó', 'Aljezur', 'Aljustrel', 'Almada', 'Almeida', 'Almeirim', 'Almodôvar', 'Alpiarça', 'Alter do Chão', 'Alvaiázere', 'Alvito', 'Amadora', 'Amarante', 'Amares', 'Anadia', 'Angra do Heroísmo', 'Ansião', 'Arcos de Valdevez', 'Arganil', 'Armamar', 'Arouca', 'Arraiolos', 'Arronches', 'Arruda dos Vinhos', 'Aveiro', 'Avis', 'Azambuja', 'Baião', 'Barcelos', 'Barrancos', 'Barreiro', 'Batalha', 'Beja', 'Belmonte', 'Benavente', 'Bombarral', 'Borba', 'Boticas', 'Braga', 'Bragança', 'Cabeceiras de Basto', 'Cadaval', 'Caldas da Rainha', 'Calheta (Açores)', 'Calheta (Madeira)', 'Câmara de Lobos', 'Caminha', 'Campo Maior', 'Cantanhede', 'Carrazeda de Ansiães', 'Carregal do Sal', 'Cartaxo', 'Cascais', 'Castanheira de Pera', 'Castelo Branco', 'Castelo de Paiva', 'Castelo de Vide', 'Castro Daire', 'Castro Marim', 'Castro Verde', 'Celorico da Beira', 'Celorico de Basto', 'Chamusca', 'Chaves', 'Cinfães', 'Coimbra', 'Condeixa-a-Nova', 'Constância', 'Coruche', 'Corvo', 'Covilhã', 'Crato', 'Cuba', 'Elvas', 'Entroncamento', 'Espinho', 'Esposende', 'Estarreja', 'Estremoz', 'Évora', 'Fafe', 'Faro', 'Felgueiras', 'Ferreira do Alentejo', 'Ferreira do Zêzere', 'Figueira da Foz', 'Figueira de Castelo Rodrigo', 'Figueiró dos Vinhos', 'Fornos de Algodres', 'Freixo de Espada à Cinta', 'Fronteira', 'Funchal', 'Fundão', 'Gavião', 'Góis', 'Golegã', 'Gondomar', 'Gouveia', 'Grândola', 'Guarda', 'Guimarães', 'Horta', 'Idanha-a-Nova', 'Ílhavo', 'Lagoa (Açores)', 'Lagoa (Algarve)', 'Lagos', 'Lajes das Flores', 'Lajes do Pico', 'Lamego', 'Leiria', 'Lisboa', 'Loulé', 'Loures', 'Lourinhã', 'Lousã', 'Lousada', 'Mação', 'Macedo de Cavaleiros', 'Machico', 'Madalena', 'Mafra', 'Maia', 'Mangualde', 'Manteigas', 'Marco de Canaveses', 'Marinha Grande', 'Marvão', 'Matosinhos', 'Mealhada', 'Meda', 'Melgaço', 'Mértola', 'Mesão Frio', 'Mira', 'Miranda do Corvo', 'Miranda do Douro', 'Mirandela', 'Mogadouro', 'Moimenta da Beira', 'Moita', 'Monção', 'Monchique', 'Mondim de Basto', 'Monforte', 'Montalegre', 'Montemor-o-Novo', 'Montemor-o-Velho', 'Montijo', 'Mora', 'Mortágua', 'Moura', 'Mourão', 'Murça', 'Murtosa', 'Nazaré', 'Nelas', 'Nisa', 'Nordeste', 'Óbidos', 'Odemira', 'Odivelas', 'Oeiras', 'Oleiros', 'Olhão', 'Oliveira de Azeméis', 'Oliveira de Frades', 'Oliveira do Bairro', 'Oliveira do Hospital', 'Olivença', 'Ourém', 'Ourique', 'Ovar', 'Paços de Ferreira', 'Palmela', 'Pampilhosa da Serra', 'Paredes', 'Paredes de Coura', 'Pedrógão Grande', 'Penacova', 'Penafiel', 'Penalva do Castelo', 'Penamacor', 'Penedono', 'Penela', 'Peniche', 'Peso da Régua', 'Pinhel', 'Pombal', 'Ponta Delgada', 'Ponta do Sol', 'Ponte da Barca', 'Ponte de Lima', 'Ponte de Sor', 'Portalegre', 'Portel', 'Portimão', 'Porto', 'Porto de Mós', 'Porto Moniz', 'Porto Santo', 'Póvoa de Lanhoso', 'Póvoa de Varzim', 'Povoação', 'Praia da Vitória', 'Proença-a-Nova', 'Redondo', 'Reguengos de Monsaraz', 'Resende', 'Ribeira Brava', 'Ribeira de Pena', 'Ribeira Grande', 'Rio Maior', 'Sabrosa', 'Sabugal', 'Salvaterra de Magos', 'Santa Comba Dão', 'Santa Cruz', 'Santa Cruz da Graciosa', 'Santa Cruz das Flores', 'Santa Maria da Feira', 'Santa Marta de Penaguião', 'Santana', 'Santarém', 'Santiago do Cacém', 'Santo Tirso', 'São Brás de Alportel', 'São João da Madeira', 'São João da Pesqueira', 'São Pedro do Sul', 'São Roque do Pico', 'São Vicente', 'Sardoal', 'Sátão', 'Seia', 'Seixal', 'Sernancelhe', 'Serpa', 'Sertã', 'Sesimbra', 'Setúbal', 'Sever do Vouga', 'Silves', 'Sines', 'Sintra', 'Sobral de Monte Agraço', 'Soure', 'Sousel', 'Tábua', 'Tabuaço', 'Tarouca', 'Tavira', 'Terras de Bouro', 'Tomar', 'Tondela', 'Torre de Moncorvo', 'Torres Novas', 'Torres Vedras', 'Trancoso', 'Trofa', 'Vagos', 'Vale de Cambra', 'Valença', 'Valongo', 'Valpaços', 'Velas', 'Vendas Novas', 'Viana do Alentejo', 'Viana do Castelo', 'Vidigueira', 'Vieira do Minho', 'Vila de Rei', 'Vila do Bispo', 'Vila do Conde', 'Vila do Porto', 'Vila Flor', 'Vila Franca de Xira', 'Vila Franca do Campo', 'Vila Nova da Barquinha', 'Vila Nova de Cerveira', 'Vila Nova de Famalicão', 'Vila Nova de Foz Côa', 'Vila Nova de Gaia', 'Vila Nova de Paiva', 'Vila Nova de Poiares', 'Vila Pouca de Aguiar', 'Vila Real', 'Vila Real de Santo António', 'Vila Velha de Ródão', 'Vila Verde', 'Vila Viçosa', 'Vimioso', 'Vinhais', 'Viseu', 'Vizela', 'Vouzela'
        );
        for ($i = 0; $i < count($cities); $i++) {
            DB::table('cities')->insert([
                'id' => Str::uuid(),
                'name' => $cities[$i]
            ]);
        }
    }
}