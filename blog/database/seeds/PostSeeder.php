<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $link1 = "Deixe-me ir\n
Preciso andar\n
Vou por aí a procurar
Rir pra não chorar
Deixe-me ir
Preciso andar
Vou por aí a procurar
Sorrir pra não chorar
Quero assistir ao sol nascer
Ver as águas dos rios correr
Ouvir os pássaros cantar
Eu quero nascer
Quero viver
Deixe-me ir
Preciso andar
Vou por aí a procurar
Rir pra não chorar
Se alguém por mim perguntar
Diga que eu só vou voltar
Depois que me encontrar
Quero assistir ao sol nascer
Ver as águas dos rios correr
Ouvir os pássaros cantar
Eu quero nascer
Quero viver
Deixe-me ir
Preciso andar
Vou por aí a procurar
Sorrir pra não chorar
(Deixe-me ir preciso andar
Vou por aí a procurar
Sorrir pra não chorar)
Deixe-me ir preciso andar
Vou por aí a procurar
Sorrir pra não chorar
(Deixe-me ir preciso andar
Vou por aí a procurar
Sorrir pra não chorar)";

    $cont = '\'2\', \'Mordekaiser\', \'<p><img src=\"https://www.pcgamesn.com/wp-content/uploads/2019/05/mordekaiser-900x506.jpg\" style=\"width: 678px;\"></p><blockquote class=\"tr_bq\" style=\"margin-top: 7px; margin-bottom: 7px; margin-left: 40px; padding: 0px; color: rgb(68, 68, 68); font-family: Arimo, sans-serif; font-size: 14px;\">\"Twice slain and thrice born, Mordekaiser is a brutal warlord from a foregone epoch who uses his necromantic sorcery to bind souls into an eternity of servitude. Few now remain who remember his earlier conquests, or know the true extent of his powers-- but there are some ancient souls that do, and they fear the day when he may return to claim dominion over both the living and the dead.\"</blockquote><div><br></div>\', \'1\', \'2019-06-12 12:14:50\', \'2019-06-12 12:14:50\'
';

        DB::table('posts')->insert(
            [
                ['titulo' => 'Links Teste', 'conteudo'=>'https://www.youtube.com/watch?v=fUjOfsoBhMY <br> https://cdn.vox-cdn.com/thumbor/yRrY4uPv2Itn1x6IHS4Ux1ynZHM=/0x0:1215x717/1200x800/filters:focal(551x147:745x341)/cdn.vox-cdn.com/uploads/chorus_image/image/63921506/Mordekaiser_Splash_1.0.jpg', 'autor' => 1],

            ]
        );


    }
}
