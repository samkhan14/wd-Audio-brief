<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebBrief extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'web_briefs';
    
    protected $fillable = [
        'cus_name',
        'cus_email',
        'cus_phone',
        'company_name',
        'industry',
        'industryName',
        'type_of_website',
        'service',
        'data',
    ];

}

