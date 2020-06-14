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
            'Abrantes', 'Agualva-Cacém', 'Águeda', 'Albufeira', 'Alcácer do Sal', 'Alcobaça', 'Almada', 'Almeirim', 'Alverca do Ribatejo', 'Amadora', 'Amarante', 'Amora', 'Anadia', 'Angra do Heroísmo', 'Aveiro', 'Barcelos', 'Barreiro',
            'Beja', 'Braga', 'Bragança', 'Caldas da Rainha', 'Camara de Lobos', 'Cantanhede', 'Cartaxo', 'Castelo Branco', 'Chaves', 'Coimbra', 'Covilhã', 'Elvas', 'Entroncamento', 'Ermesinde', 'Esmoriz', 'Espinho', 'Esposende', 'Estarreja',
            'Estremoz', 'Évora', 'Fafe', 'Faro', 'Fátima', 'Felgueiras', 'Fiães', 'Figueira da Foz', 'Freamunde', 'Funchal', 'Fundão', 'Gafanha da Nazaré', 'Gondomar', 'Gouveia', 'Guarda', 'Guimarães', 'Horta', 'Ílhavo', 'Lagoa', 'Lagos', 'Lamego',
            'Leiria', 'Lisboa', 'Lixa', 'Loulé', 'Loures', 'Lourosa', 'Macedo de Cavaleiros', 'Machico', 'Maia', 'Mangualde', 'Marco de Canaveses', 'Marinha Grande',
            'Matosinhos', 'Mealhada', 'Miranda do Douro', 'Mirandela', 'Montemor-o-Novo', 'Montijo', 'Moura', 'Odivelas', 'Olhão da Restauração', 'Oliveira de Azeméis', 'Oliveira do Hospital', 'Ourém', 'Ovar', 'Paços de Ferreira',
            'Paredes', 'Penafiel', 'Peniche', 'Peso da Régua', 'Pinhel', 'Pombal', 'Ponta Delgada', 'Ponte de Sor', 'Portalegre', 'Portimão', 'Porto', 'Porto Santo', 'Póvoa de Santa Iria', 'Póvoa de Varzim', 'Quarteira', 'Queluz', 'Ribeira Grande', 'Rio Maior',
            'Rio Tinto', 'Sacavém', 'Santa Comba Dão', 'Santa Cruz', 'Santa Maria da Feira', 'Santana', 'Santarém', 'Santiago do Cacém', 'Santo Tirso',
            'São João da Madeira', 'São Mamede de Infesta', 'Seia', 'Seixal', 'Setúbal', 'Silves', 'Sines', 'Tarouca', 'Tavira', 'Tomar', 'Tondela', 'Torres Novas', 'Torres Vedras', 'Valbom', 'Vale de Cambra', 'Valongo', 'Valpaços', 'Vendas Novas',
            'Viana do Castelo', 'Vila do Conde', 'Vila Franca de Xira', 'Vila Nova de Famalicão', 'Vila Nova de Foz Côa', 'Vila Nova de Gaia', 'Vila Praia da Vitória', 'Vila Real', 'Vila Real de Santo António', 'Viseu', 'Vizela'
        );
        for($i=0;$i<count($cities);$i++) {
            DB::table('cities')->insert([
                'id' => Str::uuid(),
                'name' => $cities[$i]
            ]);
        }
    }
}
