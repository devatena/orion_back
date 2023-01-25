<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'corporate_name',
        'nickname',
        'fantasy_name',
        'cpf',
        'cnpj',
        'rg',
        'issuer',
        'gender',
        'birthday',
        'telephone',
        'cellphone',
        'email',
        'site',
        'cep',
        'street',
        'number',
        'complement',
        'neighborhood',
        'town',
    ];

    public function prospects(){
        return $this->hasMany(prospect::class);
    }
}
