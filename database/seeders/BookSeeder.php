<?php

namespace Database\Seeders;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // HTML Pocket Reference
        Book::insert([
           'name' => 'HTML5 Pocket Reference',
           'author' => 'Jennifer Robbins',
           'publisher' => 'O\'Reilly Media, Inc',
           'ISBN' => '9781449363352',
            'public_price' => '17,00',
            'offered_price' => '16,63',
            'editing_details' => '',
            'cover_path' => 'HTML5PocketReference.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // CSS Pocket Reference
        Book::insert([
            'name' => 'CSS Pocket Reference',
            'author' => 'Eric A. Meyer',
            'publisher' => 'O\'Reilly Media, Inc',
            'ISBN' => '9781492033394',
            'public_price' => '14,58',
            'offered_price' => '14,60',
            'editing_details' => '',
            'cover_path' => 'CSSPocketReference.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Ergonomie Web et UX design
        Book::insert([
            'name' => 'Ergonomie web et UX Design',
            'author' => 'Amélie Boucher',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212132151',
            'public_price' => '32,80',
            'offered_price' => '32,68',
            'editing_details' => '',
            'cover_path' => 'ergonomieWebEtUXDesign.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //Choix typographiques
        Book::insert([
            'name' => 'Choix typographiques',
            'author' => 'Xavier Spirlet',
            'publisher' => 'Petit Poisson',
            'ISBN' => '9782960234510',
            'public_price' => '34,00',
            'offered_price' => '35,00',
            'editing_details' => '',
            'cover_path' => 'choixTypographiques.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Communication et image
        Book::insert([
            'name' => 'Communication et image',
            'author' => 'Xavier Spirlet',
            'publisher' => 'Petit Poisson',
            'ISBN' => '9782960234503',
            'public_price' => '29,00',
            'offered_price' => '30,00',
            'editing_details' => '',
            'cover_path' => 'communicationEtImage.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Lexique des règles typographiques
        Book::insert([
            'name' => 'Lexique des règles typographiques',
            'author' => '/',
            'publisher' => 'Imprimerie nationale',
            'ISBN' => '9782743304829',
            'public_price' => '15,20',
            'offered_price' => '15,20',
            'editing_details' => '',
            'cover_path' => 'lexiqueDesreglesTypographiques.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Mise en page et impression : Notions élémentaires
        Book::insert([
            'name' => 'Mise en page et impression : Notions élémentaires',
            'author' => 'Yves Perrousseaux',
            'publisher' => 'ADVERBUM',
            'ISBN' => '9782911220012',
            'public_price' => '29,00',
            'offered_price' => '28,98',
            'editing_details' => '',
            'cover_path' => 'lexiqueDesreglesTypographiques.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Culture graphique: Une perspective, de Gutenberg à nos jours
        Book::insert([
            'name' => 'Culture graphique: Une perspective, de Gutenberg à nos jours',
            'author' => 'Stéphane Darricau',
            'publisher' => 'Pyramyd',
            'ISBN' => '9782350173177',
            'public_price' => '38,00',
            'offered_price' => '37,53',
            'editing_details' => '',
            'cover_path' => 'cultureGraphique.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // HTML5 Une référence pour le développeur web
        Book::insert([
            'name' => 'HTML5 Une référence pour le développeur web',
            'author' => 'Rodolphe Rimelé',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212143652',
            'public_price' => '37,10',
            'offered_price' => '37,05',
            'editing_details' => '',
            'cover_path' => 'HTML5UneReferencePourLeDeveloppeurWeb.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // CSS3 Flexbox
        Book::insert([
            'name' => 'CSS3 Flexbox',
            'author' => 'Raphaël Goetter',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212143638',
            'public_price' => '19,00',
            'offered_price' => '18,91',
            'editing_details' => '',
            'cover_path' => 'CSS3Flexbox.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // CSS3 Grid Layout
        Book::insert([
            'name' => 'CSS3 Grid Layout',
            'author' => 'Raphaël Goetter',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212676839',
            'public_price' => '19,00',
            'offered_price' => '18,91',
            'editing_details' => '',
            'cover_path' => 'CSS3GridLayout.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Responsive web design
        Book::insert([
            'name' => 'Responsive web design',
            'author' => 'REthan Marcotte',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212673616',
            'public_price' => '11,40',
            'offered_price' => '11,40',
            'editing_details' => '',
            'cover_path' => 'responsiveWebDesign.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Sass pour les web designers
        Book::insert([
            'name' => 'Sass pour les web designers',
            'author' => 'Dan Cederholm',
            'publisher' => 'Eyrolles',
            'ISBN' => '9782212141474',
            'public_price' => '11,40',
            'offered_price' => '11,40',
            'editing_details' => '',
            'cover_path' => 'SassPourLesWebDesigners.jpg',
            'required' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Guide pratique de choix typographique
        Book::insert([
            'name' => 'Guide pratique de choix typographique',
            'author' => 'David Rault',
            'publisher' => 'ADVERBUM',
            'ISBN' => '9782911220937',
            'public_price' => '28,10',
            'offered_price' => '28,03',
            'editing_details' => '',
            'cover_path' => 'guidePratiqueDeChoixTypographique.jpg',
            'required' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Règles de l’écriture typographique du français
        Book::insert([
            'name' => 'Règles de l’écriture typographique du français',
            'author' => 'Yves Perrousseaux',
            'publisher' => 'ADVERBUM',
            'ISBN' => '9782911220289',
            'public_price' => '21,50',
            'offered_price' => '21,38',
            'editing_details' => '',
            'cover_path' => 'reglesEcritureTypographiqueDuFrancais.jpg',
            'required' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Mise en page(s), etc. Fondamentaux, éléments de base, principes de grille, supports, études de cas
        Book::insert([
            'name' => 'Mise en page(s), etc. Fondamentaux, éléments de base, principes de grille, supports, études de cas',
            'author' => 'Damien gautier',
            'publisher' => 'Pyramyd',
            'ISBN' => '9782350171692',
            'public_price' => '47,50',
            'offered_price' => '47,50',
            'editing_details' => '',
            'cover_path' => 'miseEnPageEct.jpg',
            'required' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
