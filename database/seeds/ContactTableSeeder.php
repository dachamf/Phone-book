<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->firstName = "Dalibor";
        $contact->lastName = "Djordjevic";
        $contact->phoneNumber = "0604481375";
        $contact->address = "Kneza Mihajla Obrenovica 44";
        $contact->comment = "This is a comment";
        $contact->save();

        $contact = new Contact();
        $contact->firstName = "Bozidar";
        $contact->lastName = "Djordjevic";
        $contact->phoneNumber = "0603481475";
        $contact->address = "Kneza Mihajla Obrenovica 44";
        $contact->comment = "This is a comment";
        $contact->save();

        $contact = new Contact();
        $contact->firstName = "Ana";
        $contact->lastName = "Djordjevic";
        $contact->phoneNumber = "0664481375";
        $contact->address = "Kneza Mihajla Obrenovica 44";
        $contact->comment = "This is a comment";
        $contact->save();

        $contact = new Contact();
        $contact->firstName = "Branko";
        $contact->lastName = "Pejcic";
        $contact->phoneNumber = "0654487376";
        $contact->address = "Kneza Mihajla Obrenovica 44";
        $contact->comment = "This is a comment";
        $contact->save();
     }
}
