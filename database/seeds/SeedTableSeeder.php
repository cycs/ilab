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
        DB::table('seeds_permacultures')->delete();

        /* Seeds */

        $tomatoes = Seed::create([
            'name' => 'tomate',
            'latin_name' => 'Solanum lycopersicum',
            'variety' => 'coeur de boeuf',
            'type' => 'solanacée',
            'exposure' => 'ensoleillé',
            'water' => '1 l/jour',
            'fertilizer' => '',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2018-10-31',
            'harvest_within_time' => 90,
            'grown_img_url' => '/legumes/tomate.png',
            'seed_img_url' => '/tomate_seed.png',
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
            'exposure' => 'ensoleillé',
            'water' => '1 l/jour',
            'fertilizer' => '',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2018-10-31',
            'harvest_within_time' => 120,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '1.79',
            'difficulty' => 'hard',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'limons fins',
        ]);

        $eggplant = Seed::create([
            'name' => 'aubergine',
            'latin_name' => 'Solanum melongena',
            'variety' => 'Barbentane longue',
            'type' => 'solanacée',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'Phacélie ou épinards',
            'planting_period_start' => '2018-02-28',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-06-01',
            'harvest_period_end' => '2018-09-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'hard',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons fins',
        ]);
        $chili = Seed::create([
            'name' => 'piment',
            'latin_name' => 'Capsicum annuum',
            'variety' => 'Piment d\'Espelette',
            'type' => 'solanacée',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-08-01',
            'harvest_period_end' => '2018-10-31',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '1.79',
            'difficulty' => 'medium',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons fins',
        ]);
        $cabage = Seed::create([
            'name' => 'chou',
            'latin_name' => 'Solanum tuberosum',
            'variety' => 'bintje',
            'type' => 'tubercule',
            'exposure' => 'ensoleillé',
            'water' => '1 l/jour',
            'fertilizer' => '',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2018-10-31',
            'harvest_within_time' => 80,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '1.79',
            'difficulty' => 'hard',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'limons fins',
        ]);
        $leek = Seed::create([
            'name' => 'poireau',
            'latin_name' => 'Allium porrum',
            'variety' => 'Poireau de Liège',
            'type' => 'liliacée',
            'exposure' => 'ensoleillé',
            'water' => 'faible',
            'fertilizer' => 'Ne nécessite aucun engrais',
            'planting_period_start' => '2018-01-15',
            'planting_period_end' => '2018-09-15',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'sables fins',
        ]);

         $salade = Seed::create([
            'name' => 'salade',
            'latin_name' => 'Lactuca sativa',
            'variety' => 'Laitue pommée',
            'type' => 'asteracée',
            'exposure' => 'ensoleillé / mi-ombre',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais',
            'planting_period_start' => '2018-01-01',
            'planting_period_end' => '2018-10-30',
            'harvest_period_start' => '2018-01-01',
            'harvest_period_end' => '2019-12-31',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $haricot = Seed::create([
            'name' => 'haricot',
            'latin_name' => 'Phaseolus vulgaris',
            'variety' => 'Roi des Belges',
            'type' => 'fabacée',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'Seigle ou phacélie',
            'planting_period_start' => '2018-05-01',
            'planting_period_end' => '2018-07-31',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2019-09-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '4.50',
            'difficulty' => 'medium',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'sables fins',
        ]);

        $fraises = Seed::create([
            'name' => 'fraise',
            'latin_name' => 'Fragaria vesca',
            'variety' => 'Gorella',
            'type' => 'rosacée',
            'exposure' => 'ensoleillé / mi-ombre',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais',
            'planting_period_start' => '2018-09-01',
            'planting_period_end' => '2018-09-30',
            'harvest_period_start' => '2018-05-01',
            'harvest_period_end' => '2019-10-31 ',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/fraise.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '4.00',
            'difficulty' => 'medium',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'sables fins',
        ]);

        $courgette = Seed::create([
            'name' => 'courgette',
            'latin_name' => 'Cucurbita pepo',
            'variety' => 'Nimba',
            'type' => 'cucurbitacée',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'Compost ou fumier.',
            'planting_period_start' => '2018-05-01',
            'planting_period_end' => '2018-06-30',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2019-10-31 ',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'sables fins',
        ]);

        $celeri = Seed::create([
            'name' => 'céleri rave',
            'latin_name' => 'Apium graveolens',
            'variety' => 'Monarch',
            'type' => 'apiacée',
            'exposure' => 'ensoleillé',
            'water' => 'abondant',
            'fertilizer' => 'Compost ou fumier.',
            'planting_period_start' => '2018-04-15',
            'planting_period_end' => '2018-06-15',
            'harvest_period_start' => '2018-08-01',
            'harvest_period_end' => '2018-11-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $epinard = Seed::create([
            'name' => 'épinard',
            'latin_name' => 'Spinocia oleracea',
            'variety' => 'Géant d\'hiver',
            'type' => 'amaranthacées',
            'exposure' => 'mi-ombre',
            'water' => 'modéré',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-08-01',
            'planting_period_end' => '2018-09-30',
            'harvest_period_start' => '2018-09-15',
            'harvest_period_end' => '2018-11-15',
            'harvest_within_time' => 45,
            'grown_img_url' => '/legumes/epinard.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $carotte = Seed::create([
            'name' => 'carotte',
            'latin_name' => 'Daucus carota',
            'variety' => 'De la Halle',
            'type' => 'apiacée',
            'exposure' => 'ensoleillé / mi-ombre',
            'water' => 'modéré',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-03-01',
            'planting_period_end' => '2018-07-31',
            'harvest_period_start' => '2018-04-15',
            'harvest_period_end' => '2018-09-15',
            'harvest_within_time' => 45,
            'grown_img_url' => '/legumes/carotte.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'sables fins',
        ]);

        $concombre = Seed::create([
            'name' => 'concombre',
            'latin_name' => 'Cucumis sativus',
            'variety' => 'Généreux',
            'type' => 'cucurbitacée',
            'exposure' => 'ensoleillé',
            'water' => 'abondant',
            'fertilizer' => 'Fumier',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-06-30',
            'harvest_period_start' => '2018-07-15',
            'harvest_period_end' => '2018-09-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $rhubarbe = Seed::create([
            'name' => 'rhubarbe',
            'latin_name' => 'Rheum rhaponticum',
            'variety' => 'Red Champagne',
            'type' => 'polygonacée',
            'exposure' => 'ensolleillé / mi-ombre',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-05-01',
            'harvest_period_end' => '2018-09-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 11,
            'soil_humus_percent'=> 80,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $framboise = Seed::create([
            'name' => 'framboise',
            'latin_name' => 'Rubus idaeus',
            'variety' => 'Lloyd George',
            'type' => 'rosacée',
            'exposure' => 'ensolleillé / mi-ombre',
            'water' => 'faible',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-11-01',
            'planting_period_end' => '2018-03-31',
            'harvest_period_start' => '2018-06-15',
            'harvest_period_end' => '2018-10-15',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/framboise.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $cassis = Seed::create([
            'name' => 'cassis',
            'latin_name' => 'Ribes nigrum',
            'variety' => 'Andega',
            'type' => 'grossulariacées',
            'exposure' => 'mi-ombre',
            'water' => 'faible',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-09-01',
            'planting_period_end' => '2018-11-30',
            'harvest_period_start' => '2018-07-01',
            'harvest_period_end' => '2018-08-30',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/cassis.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $chourouge = Seed::create([
            'name' => 'chou rouge',
            'latin_name' => 'Brassica oleracea ',
            'variety' => 'Tête noire',
            'type' => 'brassicacée',
            'exposure' => 'ensoleillé',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-02-15',
            'planting_period_end' => '2018-03-31',
            'harvest_period_start' => '2018-09-15',
            'harvest_period_end' => '2018-11-30',
            'harvest_within_time' => 0,
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'calcaire',
        ]);

        $persil = Seed::create([
            'name' => 'persil',
            'latin_name' => 'Petroselinum crispum',
            'variety' => 'Persil commun',
            'type' => 'apiacée',
            'exposure' => 'ensoleillé / mi-ombre',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais.',
            'planting_period_start' => '2018-05-01',
            'planting_period_end' => '2018-09-30',
            'harvest_period_start' => '2018-06-01',
            'harvest_period_end' => '2018-10-30',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/persil.png',
            'seed_img_url' => '/tomate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => '',
            'advices' => '',
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'calcaire',
        ]);

        $chives = Seed::create([
            'name' => 'ciboulette',
            'latin_name' => 'Allium schoenoprasum',
            'variety' => 'ciboulette sauvage',
            'type' => 'herbe',
            'exposure' => 'mi-ombre',
            'water' => 'faible',
            'fertilizer' => 'aucun engrais nécessaire',
            'planting_period_start' => '2018-09-01',
            'planting_period_end' => '2018-11-30',
            'harvest_period_start' => '2018-06-01',
            'harvest_period_end' => '2018-11-30',
            'harvest_within_time' => 45,
            'grown_img_url' => '/legumes/ciboulette.png',
            'seed_img_url' => '/ciboulette_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => "1. Tracer des sillons de 1 à 2 cm de profondeur dans la terre. 2. Semer clair en espacant les graines de 5 à 10cm de façon à former des plants différents. 3. Recouvrir de terre fine les semences et tasser. 4. Arroser en pluie fine. 5. Maintenir la terre humide jusqu'a ce que les feuilles apparaissent.",
            'advices' => "1. Couper fréquemment pour stimuler la pousse des feuilles. 2. Couper les fleurs lorsqu'elles apparaissent pour ne pas affaiblir le plant. 3. Couper le bouquet à 5cm de la base lorsqu'il commence à ramolir. "				,
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'all',
        ]);

        $radis = Seed::create([
            'name' => 'radis',
            'latin_name' => 'Raphanus sativus',
            'variety' => 'radis rond écarlate',
            'type' => 'racine',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'aucun engrais nécessaire',
            'planting_period_start' => '2018-01-01',
            'planting_period_end' => '2018-09-01',
            'harvest_period_start' => '2018-02-01',
            'harvest_period_end' => '2018-10-01',
            'harvest_within_time' => 35,
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'easy',
            'tutorial' => "1. Semer à la volée sous abri de janvier à mars. 2. Couvrir d'une fine couche de terreau, environ 1cm. 3. Tasser légèrement le sol. 4. Éclaircir lorsque les premières feuilles apparaissent.\"",
            'advices' => "1. Lorsque le semis sort de terre, retirer les petites feuilles et conservez uniquement les plants plus vigoureux tous les 4-5cm. 2. Maintenir le sol propre en désherbant régulièrement pour faciliter l'écoulement de l'arrosage. 3. Le radis se récolte régulièrement dès qu'il est formé. Mieux vaut récolter un radis trop petit que trop gros. \"			"				,
            'soil_ph'=> 7,
            'soil_humus_percent'=> 5,
            'soil_granulometry'=> 'all',
        ]);

        $potimarron = Seed::create([
            'name' => 'potimarron',
            'latin_name' => 'Cucurbita maxima',
            'variety' => 'Maxima Duch',
            'type' => 'cucurbitacée',
            'exposure' => 'ensoleillé',
            'water' => 'modéré',
            'fertilizer' => 'Compost ou fumier.',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-05-31',
            'harvest_period_start' => '2018-09-01',
            'harvest_period_end' => '2018-11-30',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/potimaron.png',
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'super easy',
            'tutorial' => "1. Enfoncer les graines légèrement pointes vers le bas dans un sol fertile. Penser donc à apporter du compost ou du fumier en plus. 2. Espacer les pieds des plantes de 2m. 3. Arroser 2 fois par semaine en début de culture. 4. Dès l'apparition des premiers fruits, veiller à ne pas laisser sécher la terre. Couvrer le pied avec de la paille pour conserver la fraîcheur du sol.  5. Cesser l'arrosage 10 jours avant la récolte.",
            'advices' => "1. Si les feuilles jaunissent ou que les fruits cessent de grandir c'est que la plante manque d'eau. 2. C'est une plante frileuse, c'est donc très important que le potimarron soit semé (ou repiqué) après tous risques de gelées. 3. Placer de la paille au pied des plantes pour conserver la fraîcheur du sol. Cela sera également utile pour protéger les feuilles de la terre humide et éviter ainsi qu'elle ne pourrissent. 4. Après la récolte, retirer toute la végétation restante qui peut souvent être porteuse de maladies ou de chamignons.",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons grossiers',
        ]);

        $choufleur = Seed::create([
            'name' => 'chou-fleur',
            'latin_name' => 'Brassica oleracea var. botrytis',
            'variety' => 'Flora Blanca',
            'type' => 'brassicacée',
            'exposure' => 'ensoleillé / mi-ombre',
            'water' => 'abondant',
            'fertilizer' => 'Ne nécessite aucun engrais',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-08-01',
            'harvest_period_start' => '2018-10-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'grown_img_url' => '/legumes/choufleur.png',
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => "1. Placer les graines à 1 ou 2cm de profondeur en les espacant de 4cm. 2. Recouvrer de terreau et arrosage. 3. Lorsque le plant a 3-4 feuilles, repiquer les profondément en pleine terre en les espacant de 50 à 70cm. 4. Arroser abondamment.",
            'advices' => "1. Désherber régulièrement afin d'éviter la pousse d'autres plantes car le chou-fleur manque vite d'eau. 2. Été comme hiver, paillez le pied est utile pour la sécheresse mais également pour conserver la chaleur. 3. Éviter d’arroser le feuillage pour les champignons. 4. Lorsqu'il atteint une dizaine de cm de diamètre, protèger le chou-fleur avec les feuilles intérieures du chou.",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons fins',
        ]);

        $basilic = Seed::create([
            'name' => 'basilic',
            'latin_name' => '',
            'variety' => '',
            'type' => '',
            'exposure' => '',
            'water' => '',
            'fertilizer' => '',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-08-01',
            'harvest_period_start' => '2018-10-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => "",
            'advices' => "",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons fins',
        ]);

        $ail = Seed::create([
            'name' => 'ail',
            'latin_name' => '',
            'variety' => '',
            'type' => '',
            'exposure' => '',
            'water' => '',
            'fertilizer' => '',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-08-01',
            'harvest_period_start' => '2018-10-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => "",
            'advices' => "",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons fins',
        ]);

        $capucine = Seed::create([
            'name' => 'capucine',
            'latin_name' => '',
            'variety' => '',
            'type' => '',
            'exposure' => '',
            'water' => '',
            'fertilizer' => '',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-08-01',
            'harvest_period_start' => '2018-10-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => "",
            'advices' => "",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons fins',
        ]);

        $oignon = Seed::create([
            'name' => 'oignon',
            'latin_name' => '',
            'variety' => '',
            'type' => '',
            'exposure' => '',
            'water' => '',
            'fertilizer' => '',
            'planting_period_start' => '2018-04-01',
            'planting_period_end' => '2018-08-01',
            'harvest_period_start' => '2018-10-01',
            'harvest_period_end' => '2019-02-28',
            'harvest_within_time' => 0,
            'seed_img_url' => '/radis_rond_ecarlate_seed.png',
            'price' => '3.00',
            'difficulty' => 'medium',
            'tutorial' => "",
            'advices' => "",
            'soil_ph'=> 7,
            'soil_humus_percent'=> 50,
            'soil_granulometry'=> 'limons fins',
        ]);

        $aneth = Seed::create(['name' => 'aneth', 'tutorial' => '', 'advices' => '']);
        $mais = Seed::create(['name' => 'maïs', 'tutorial' => '', 'advices' => '']);
        $fenouil = Seed::create(['name' => 'fenouil', 'tutorial' => '', 'advices' => '']);
        $asperge = Seed::create(['name' => 'asperge', 'tutorial' => '', 'advices' => '']);
        $phacelie = Seed::create(['name' => 'phacélie', 'tutorial' => '', 'advices' => '']);
        $sauge = Seed::create(['name' => 'sauge', 'tutorial' => '', 'advices' => '']);
        $romarin = Seed::create(['name' => 'romarin', 'tutorial' => '', 'advices' => '']);
        $camomille = Seed::create(['name' => 'camomille', 'tutorial' => '', 'advices' => '']);
        $chou = Seed::create(['name' => 'chou', 'tutorial' => '', 'advices' => '']);
        $artichaud = Seed::create(['name' => 'artichaud', 'tutorial' => '', 'advices' => '']);
        $chourave = Seed::create(['name' => 'chourave', 'tutorial' => '', 'advices' => '']);
        $cerfeuil = Seed::create(['name' => 'cerfeuil', 'tutorial' => '', 'advices' => '']);
        $petitpois = Seed::create(['name' => 'petits pois', 'tutorial' => '', 'advices' => '']);


        /* Illnesses */

        $mildiou = Illness::create([
            'name' => 'mildiou',
            'description' => 'Le mildiou est un champignon qui se propage très facilement dans des conditions humides.',
            'cause' => 'Cette maladie est due à un champignon pathogène, le Phytophtora infestans, se développant principalement par temps humide lorsque la température oscille entre 17 et 20°C. Les alternances d\'épisodes pluvieux et d\'épisodes de chaleur orageuse correspondent aux conditions idéales pour que le mildiou se développe. Par contre, la canicule le stoppe.',
            'consequence' => 'C\'est en atteignant la plante de l’intérieur que le mildiou s’en prend aux végétaux, les faisant alors dépérir. Le mildiou se reconnaît aux petites taches noirâtres et au feutrage blanchâtre qu’il provoque respectivement sur le dessus et le dessous des feuilles. Très vite, les taches vont commencer à brunir, s’étendre aux fruits et à les faire pourrir.',
            'prevention' => 'Sur la vigne, retirer les gourmands pour aérer le feuillage. Dès l\'apparition des premières tâches sur les feuilles de tomates, couper les feuilles atteintes et retirer celles qui traînent au sol. Faites en sorte que vos pieds de tomates soient bien aérés. Les feuilles doivent pouvoir sécher facilement. Dès les premiers signes il est possible de pulvériser de la bouillie bordelaise afin de limiter la dissémination du champignon aux plantes voisines. Poser une toiture au dessus de vos pieds de tomates pour éviter qu\'un excès d\'humidité ne se dépose sur le feuillage.',
            'treatment' => 'Dès l’apparition des premiers symptômes, coupez les parties infectées qui peuvent aller sur le tas de compost, Au tout début de l\'apparition du mildiou, vous pouvez pulvériser une infusion de tanaisie (Tanacetum vulgare) à raison de 100g de fleurs pour 1 litre d\'eau que vous aurez laissé infuser jusqu\'à ce quelle soit froide avant de l\'utiliser pure. Si ce n\'est pas assez puissant, pulvérisez un purin de bardane (feuilles et racines) à raison d\'1kg de plante pour 10 litres d\'eau que vous aurez laissé fermenter 5 à 6 jours avant de le filtrer et de l\'utiliser dilué à 5%. Si la saison est particulièrement pluvieuse, vous pouvez couvrir vos tomates en installant une sorte d\'abri en film plastique.'
        ]);

        $tomatoes->illnesses()->attach($mildiou);
        $potatoes->illnesses()->attach($mildiou);
        $choufleur->illnesses()->attach($mildiou);
        $eggplant->illnesses()->attach($mildiou);


        $pucerons = Illness::create([
            'name' => 'pucerons',
            'description' => 'Les pucerons font partie des insectes les plus communs du potager.',
            'cause' => 'La présence importante d\'insectes comme les fourmis ou les coccinelles.',
            'consequence' => 'Ils affaiblissent les plantes en se nourissant de leur sèves. Les feuilles se crispent et roulent. De plus, une partie de la sève absorbée est rejetée sous forme de miellat qui est responsable de la fumagine, un champignon formant des taches noires.',
            'prevention' => '1. Les capucines attirent les pucerons et permettent donc aux plantations d\'être préservées. 2. Ne pas abuser de l\'utilisation de compost et fumier trop frais. 3. La lavande éloigne également les pucerons.',
            'treatment' => '1. Retirer rapidement et régulièrement les feuilles colonisées. 2. Pulvérisez un mélange de savon noir.'
        ]);
        $potimarron->illnesses()->attach($pucerons);
        $choufleur->illnesses()->attach($pucerons);
        $fraises->illnesses()->attach($pucerons);
        $concombre->illnesses()->attach($pucerons);


        $limaces = Illness::create([
            'name' => 'limaces',
            'description' => 'Les limaces se nourissent des jeunes pousses des cultures.',
            'cause' => 'L\'humidité peut être un facteur de la présence des limaces dans le potager.',
            'consequence' => 'Elles détruisent les cultures.',
            'prevention' => '1. Le fenouil, le thym et la sauge sont des plantes répulsives contre les limaces. 2. Vérifier les endroits humides où elles aiment se cacher. 3. Le cerfeuil réduit également l\'invasion de limaces."',
            'treatment' => '1. Utiliser la bière comme appat pour les noyer. 2. Les plantes comme la bourrache ou la cappucine ne sont pas attractives des limaces. 3. Maintenir la surface du sol sèche.'
        ]);
        $potimarron->illnesses()->attach($limaces);
        $salade->illnesses()->attach($limaces);
        $courgette->illnesses()->attach($limaces);
        $chili->illnesses()->attach($limaces);


        $oidium = Illness::create([
            'name' => 'oïdium',
            'description' => 'L\'oïdium est une maladie causée par des champignons. ',
            'cause' => 'Des filaments s\'installent sur la plante et y développent des suçoirs pour se nourrir. Ils fabriquent des spores infectieuses qui se transmettent par l\'air et contaminent les autres végétaux. Les endroits confinés et l\'humidité sont également propices à son développement.',
            'consequence' => 'Elle provoque l\'apparition de taches circulaires blanches sur les feuilles, les tiges et parfois sur les fleurs et les fruits. Ces taches deviennent brunâtres, la plante s\'affaiblit et les récoltes sont réduites.',
            'prevention' => '1. Privilégier des variétés résistantes. 2. Favoriser l\'espace entre les plantations. 3. Arroser le pied et pas les feuilles de la plante.',
            'treatment' => '1. Retirer rapidement et régulièrement les feuilles infectées. 2. Pulvériser au purin d\'ortie.'
        ]);
        $courgette->illnesses()->attach($oidium);
        $concombre->illnesses()->attach($oidium);
        $cassis->illnesses()->attach($oidium);



        $chenilles = Illness::create([
            'name' => 'chenilles',
            'description' => 'Les limaces se nourissent des feuilles de choux principalement.',
            'cause' => 'Pas de cause paticulière',
            'consequence' => 'Elles détruisent les cultures.',
            'prevention' => '1. Installer des filets pour que les papillons ne viennent pas aux alentours des plantes susceptibles d\'être attaquées. 2. Les branches de genets et les fougères sont des répulsifs contre les papillons. 3. Favoriser et attirer la présence des oiseaux car ils se nourissent des chenilles.',
            'treatment' => '1. Favoriser la rotation des cultures. 2. Mettre un peu de suie sur les premières feuilles dévorées.'
        ]);

        $choufleur->illnesses()->attach($chenilles);
        $chourouge->illnesses()->attach($chenilles);



        /* Permaculture */

        // Tomate
        $tomatoes->permacultures()->attach($radis, ['positive_effect' => true, 'location' => 'before']);
        $tomatoes->permacultures()->attach($salade, ['positive_effect' => true, 'location' => 'before']);
        $tomatoes->permacultures()->attach($epinard, ['positive_effect' => true, 'location' => 'before']);

        $tomatoes->permacultures()->attach($leek, ['positive_effect' => true, 'location' => 'after']);

        $tomatoes->permacultures()->attach($basilic, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($capucine, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($ail, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($oignon, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($celeri, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($asperge, ['positive_effect' => true, 'location' => 'near']);
        $tomatoes->permacultures()->attach($leek, ['positive_effect' => true, 'location' => 'near']);

        $tomatoes->permacultures()->attach($potatoes, ['positive_effect' => false, 'location' => 'near']);
        $tomatoes->permacultures()->attach($concombre, ['positive_effect' => false, 'location' => 'near']);
        $tomatoes->permacultures()->attach($fenouil, ['positive_effect' => false, 'location' => 'near']);
        $tomatoes->permacultures()->attach($mais, ['positive_effect' => false, 'location' => 'near']);
        $tomatoes->permacultures()->attach($haricot, ['positive_effect' => false, 'location' => 'near']);

        // Ciboulette
        $chives->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'near']);
        $chives->permacultures()->attach($concombre, ['positive_effect' => true, 'location' => 'near']);

        $chives->permacultures()->attach($eggplant, ['positive_effect' => true, 'location' => 'before']);
        $chives->permacultures()->attach($tomatoes, ['positive_effect' => true, 'location' => 'before']);
        $chives->permacultures()->attach($leek, ['positive_effect' => true, 'location' => 'before']);
        $chives->permacultures()->attach($chou, ['positive_effect' => true, 'location' => 'before']);

        $chives->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'after']);

        // Radis
        $radis->permacultures()->attach($eggplant, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($artichaud, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($chourave, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($haricot, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($salade, ['positive_effect' => true, 'location' => 'before']);
        $radis->permacultures()->attach($epinard, ['positive_effect' => true, 'location' => 'before']);

        $radis->permacultures()->attach($courgette, ['positive_effect' => false, 'location' => 'near']);
        $radis->permacultures()->attach($concombre, ['positive_effect' => false, 'location' => 'near']);
        $radis->permacultures()->attach($potatoes, ['positive_effect' => false, 'location' => 'near']);
        $radis->permacultures()->attach($cerfeuil, ['positive_effect' => false, 'location' => 'near']);

        $radis->permacultures()->attach($tomatoes, ['positive_effect' => false, 'location' => 'after']);
        $radis->permacultures()->attach($epinard, ['positive_effect' => false, 'location' => 'after']);
        $radis->permacultures()->attach($salade, ['positive_effect' => false, 'location' => 'after']);

        // Potimarron
        $potimarron->permacultures()->attach($mais, ['positive_effect' => true, 'location' => 'near']);
        $potimarron->permacultures()->attach($camomille, ['positive_effect' => true, 'location' => 'near']);

        $potimarron->permacultures()->attach($potatoes, ['positive_effect' => false, 'location' => 'near']);
        $potimarron->permacultures()->attach($chou, ['positive_effect' => false, 'location' => 'near']);

        // Chou-fleur
        $choufleur->permacultures()->attach($haricot, ['positive_effect' => true, 'location' => 'near']);
        $choufleur->permacultures()->attach($romarin, ['positive_effect' => true, 'location' => 'near']);
        $choufleur->permacultures()->attach($sauge, ['positive_effect' => true, 'location' => 'near']);
        $choufleur->permacultures()->attach($celeri, ['positive_effect' => true, 'location' => 'near']);

        $choufleur->permacultures()->attach($chourouge, ['positive_effect' => false, 'location' => 'near']);
        $choufleur->permacultures()->attach($chourave, ['positive_effect' => false, 'location' => 'near']);
        $choufleur->permacultures()->attach($chou, ['positive_effect' => false, 'location' => 'near']);
        $choufleur->permacultures()->attach($fraises, ['positive_effect' => false, 'location' => 'near']);

        $choufleur->permacultures()->attach($oignon, ['positive_effect' => true, 'location' => 'before']);
        $choufleur->permacultures()->attach($ail, ['positive_effect' => true, 'location' => 'before']);
        $choufleur->permacultures()->attach($haricot, ['positive_effect' => true, 'location' => 'before']);

        $choufleur->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'after']);

        // Aubergine
        $eggplant->permacultures()->attach($haricot, ['positive_effect' => true, 'location' => 'near']);

        $eggplant->permacultures()->attach($potatoes, ['positive_effect' => false, 'location' => 'near']);
        $eggplant->permacultures()->attach($courgette, ['positive_effect' => false, 'location' => 'near']);

        $eggplant->permacultures()->attach($epinard, ['positive_effect' => true, 'location' => 'after']);
        $eggplant->permacultures()->attach($phacelie, ['positive_effect' => true, 'location' => 'after']);

        // Poireau
        $leek->permacultures()->attach($fraises, ['positive_effect' => true, 'location' => 'near']);
        $leek->permacultures()->attach($oignon, ['positive_effect' => true, 'location' => 'near']);
        $leek->permacultures()->attach($tomatoes, ['positive_effect' => true, 'location' => 'near']);
        $leek->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'near']);
        $leek->permacultures()->attach($salade, ['positive_effect' => true, 'location' => 'near']);
        $leek->permacultures()->attach($celeri, ['positive_effect' => true, 'location' => 'near']);

        $leek->permacultures()->attach($haricot, ['positive_effect' => false, 'location' => 'near']);
        $leek->permacultures()->attach($petitpois, ['positive_effect' => false, 'location' => 'near']);

        $leek->permacultures()->attach($tomatoes, ['positive_effect' => false, 'location' => 'after']);
        $leek->permacultures()->attach($haricot, ['positive_effect' => false, 'location' => 'after']);
        $leek->permacultures()->attach($carotte, ['positive_effect' => false, 'location' => 'after']);
        $leek->permacultures()->attach($concombre, ['positive_effect' => false, 'location' => 'after']);

        // Salade
        $salade->permacultures()->attach($capucine, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($fraises, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($leek, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($radis, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($romarin, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($choufleur, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($concombre, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($aneth, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'near']);
        $salade->permacultures()->attach($courgette, ['positive_effect' => true, 'location' => 'near']);

        $salade->permacultures()->attach($persil, ['positive_effect' => false, 'location' => 'near']);

        $salade->permacultures()->attach($haricot, ['positive_effect' => true, 'location' => 'before']);

        $salade->permacultures()->attach($radis, ['positive_effect' => true, 'location' => 'after']);
        $salade->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'after']);

        // Haricot
        $haricot->permacultures()->attach($eggplant, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($carotte, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($concombre, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($fraises, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($mais, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($radis, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($potatoes, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($choufleur, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($celeri, ['positive_effect' => true, 'location' => 'near']);
        $haricot->permacultures()->attach($epinard, ['positive_effect' => true, 'location' => 'near']);

        $haricot->permacultures()->attach($ail, ['positive_effect' => false, 'location' => 'near']);
        $haricot->permacultures()->attach($oignon, ['positive_effect' => false, 'location' => 'near']);
        $haricot->permacultures()->attach($leek, ['positive_effect' => false, 'location' => 'near']);

        $haricot->permacultures()->attach($salade, ['positive_effect' => true, 'location' => 'after']);
        $haricot->permacultures()->attach($epinard, ['positive_effect' => true, 'location' => 'after']);
    }
}
