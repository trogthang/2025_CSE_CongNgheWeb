<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'computer_name',
    'version',
    'reporter',
    'reported_at',
    'severity',
    'status'
];

}
