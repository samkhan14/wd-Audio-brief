<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'company_name',
        'businessemail',
        'message',
        'data',
        'status',
      
    ];

    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
