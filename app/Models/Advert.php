<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    public const HOUSE_TYPE = [
        'apartment'  => 'Квартира (апартаменты)',
        'room'       => 'Номер в отеле',
        'guesthouse' => 'Гостевой дом',
        'house'      => 'Дом',
        'penthouse'  => 'Пентхаус',
        'studio'     => 'Студия'
    ];
}
