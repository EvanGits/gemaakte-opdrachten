<?php
class Bikes
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
            'fietsnummer' => 'Fiets Nummer',
            'merk' => 'Merk',
            'model' => 'Model',
            'grootte' => 'Grootte',
            'type' => 'Type',
            'conditie' => 'Conditie',
            'prijs' => 'Prijs'
        ];

        return $ordering;
    }
}
