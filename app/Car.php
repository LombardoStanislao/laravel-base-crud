<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable = ['casa_produttrice', 'modello', 'anno', 'cilindrata', 'prezzo'];

}
