<?php

use Illuminate\Database\Seeder;
use App\Seed;
use App\Illness;

class SeedTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seeds')->delete();
        DB::table('illnesses')->delete();
        DB::table('seeds_illnesses')->delete();

        $tomatoes = Seed::create([
            'name' => 'tomate',
            'latin_name' => 'Solanum lycopersicum',
            'variety' => 'coeur de boeuf',
            'type' => 'fruit',
            'exposure' => 'soleil',
            'water' => '1 l/jour',
            'fertilizer' => '',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018_07_01',
            'harvest_period_end' => '2018_10_31',
            'grown_img_url' => '/tomate_fruit.jpg',
            'seed_img_url' => '/tomate_seed.jpg',
            'price' => '1.79',
            'difficulty' => 'hard',
            'tutorial' => 'lorem',
            'advices' => 'lorem'
        ]);

        $potatoes = Seed::create([
                    'name' => 'pomme de terre',
                    'latin_name' => 'Solanum tuberosum',
                    'variety' => 'bintje',
                    'type' => 'tubercule',
                    'exposure' => 'soleil',
                    'water' => '1 l/jour',
                    'fertilizer' => '',
                    'planting_period_start' => '2018-03-01',
                    'planting_period_end' => '2018-05-31',
                    'harvest_period_start' => '2018_07_01',
                    'harvest_period_end' => '2018_10_31',
                    'grown_img_url' => '/tomate_fruit.jpg',
                    'seed_img_url' => '/tomate_seed.jpg',
                    'price' => '1.79',
                    'difficulty' => 'hard',
                    'tutorial' => '',
                    'advices' => '',
                    'soil_ph'=> 7,
                    'soil_humus_percent'=> 5,
                    'soil_granulometry'=> 'limons fins',
        ]);


        $mildiou = Illness::create([
            'name' => 'mildiou',
            'description' => 'Le mildiou est un champignon qui se propage très facilement dans des conditions humides.',
            'cause' => 'Cette maladie est due à un champignon pathogène, le Phytophtora infestans, se développant principalement par temps humide lorsque la température oscille entre 17 et 20°C. Les alternances d\'épisodes pluvieux et d\'épisodes de chaleur orageuse correspondent aux conditions idéales pour que le mildiou se développe. Par contre, la canicule le stoppe.',
            'consequence' => 'C\'est en atteignant la plante de l’intérieur que le mildiou s’en prend aux végétaux, les faisant alors dépérir. Le mildiou se reconnaît aux petites taches noirâtres et au feutrage blanchâtre qu’il provoque respectivement sur le dessus et le dessous des feuilles. Très vite, les taches vont commencer à brunir, s’étendre aux fruits et à les faire pourrir.',
            'prevention' => 'Sur la vigne, retirer les gourmands pour aérer le feuillage. Dès l\'apparition des premières tâches sur les feuilles de tomates, couper les feuilles atteintes et retirer celles qui traînent au sol. Faites en sorte que vos pieds de tomates soient bien aérés. Les feuilles doivent pouvoir sécher facilement. Dès les premiers signes il est possible de pulvériser de la bouillie bordelaise afin de limiter la dissémination du champignon aux plantes voisines. Poser une toiture au dessus de vos pieds de tomates pour éviter qu\'un excès d\'humidité ne se dépose sur le feuillage.',
            'treatment' => 'Dès l’apparition des premiers symptômes, coupez les parties infectées qui peuvent aller sur le tas de compost, Au tout début de l\'apparition du mildiou, vous pouvez pulvériser une infusion de tanaisie (Tanacetum vulgare) à raison de 100g de fleurs pour 1 litre d\'eau que vous aurez laissé infuser jusqu\'à ce quelle soit froide avant de l\'utiliser pure. Si ce n\'est pas assez puissant, pulvérisez un purin de bardane (feuilles et racines) à raison d\'1kg de plante pour 10 litres d\'eau que vous aurez laissé fermenter 5 à 6 jours avant de le filtrer et de l\'utiliser dilué à 5%. Si la saison est particulièrement pluvieuse, vous pouvez couvrir vos tomates en installant une sorte d\'abri en film plastique.'
        ]);

        $tomatoes->illnesses()->attach($mildiou);
    }
}
