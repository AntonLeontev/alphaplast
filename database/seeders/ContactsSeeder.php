<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::query()->create([
            'address' => 'Московская область, Солнечногорский район, Ленинградское шоссе, деревня Поярково, улица Клушинская 2',
            'primary_phone' => '+7 (495) 504-06-05',
            'secondary_phone' => '+7 (985) 784-93-47',
            'email' => 'plastbox@mail.ru',
        ]);
    }
}
