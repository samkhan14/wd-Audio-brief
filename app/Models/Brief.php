<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brief extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'briefs';
    
    protected $fillable = [
        'cus_name',
        'cus_email',
        'cus_phone',
        'company_name',
        'slogan',
        'keyword',
        'industry',
        'data',
    ];

}
