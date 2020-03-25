<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'Isbn', 'Title', 'Select_id_categorie','Select_id_auteu','Nb_exemplaire','image'
    ];
}
