<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'totalBudget',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function service(){
        return $this->belongsToMany(Service::class);
    }
}
