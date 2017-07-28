<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name', 'fantasy_name', 'cnpj', 'address', 'state', 'city', 'cep', 'phone', 'logo', 'status'];
}
