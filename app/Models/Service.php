<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'serviceType',
        'serviceDescription',
        'serviceValue',
    ];

    public function budget(){
        return $this->belongsToMany(Budget::class, 'budget_service', 'service_id', 'budget_id');
    }
}
