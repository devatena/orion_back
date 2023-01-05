<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'activityBranch',
        'instagram',
        'facebook',
        'twitter',
        'linkedin',
        'whereFoundUs',
        'clerk',
        'contactDate',
        'contractType',
        'value',
        'analysis',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
