<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
        'questions' => 'Hoe print je een document hier op de HZ?',
        'answers' => 'Printen doe je via de site print.hz.nl. Volg vervolgens de instructies die op print.hz.nl staan.'
        ]);

        \DB::table('faqs')->insert([
            'questions' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
            'answers' => 'Verbind je PC met de HZ printer die je nodig hebt. Dit doe je bij instellingen>apparaten>printers & scanners>voeg een printer of scanner toe. Als dat is gelukt kan je je document scannen en selecteer je daarbij dat het naar je computer gestuurd moet worden.'
        ]);
        \DB::table('faqs')->insert([
            'questions' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
            'answers' => 'Als je coronaklachten klachten hebt wordt het sterk aangeraden om zo snel mogelijk een afspraak te maken voor een coronatest. Licht je docenten in over de coronaklachten en zij zorgen ervoor dat de lessen online te volgen zijn in de periode dat jij je corona uitslag afwacht.'
        ]);

        \DB::table('faqs')->insert([
            'questions' => 'Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
            'answers' => 'Als je inlogt op MyHZ kan je via je persoonlijke menu naar je Selfservice Portal. Vanuit je Selfservice Portal kan je een resevering plaatsen. Vervolgens kies je de tijdspan van je reservering.'
        ]);
        \DB::table('faqs')->insert([
            'questions' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
            'answers' => 'Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg. Dit is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct bij het HZ-pand te parkeren. Bij het pand zelf zijn wel twee invalideplaatsen en plekken voor HZ-auto’' .
                's. Let op, parkeer je aan de Poelendaelesingel, dan kun je niet via het tunneltje de HZ bereiken i.v.m. de bouwwerkzaamheden voor het Joint Research Center Zeeland. Je kan via het kruispunt bij de stoplichten oversteken.'
        ]);
    }
}
