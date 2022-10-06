<?php
class Costumers
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }
    
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'username' => 'Gebruikersnaam',
            'voornaam' => 'Voornaam',
            'achternaam' => 'Voornaam',
            'geslacht' => 'Geslacht',
            'email' => 'Email',
            'created_at' => 'Gemaakt op',
            'updated_at' => 'Bijgewerkt op'
        ];

        return $ordering;
    }
}
