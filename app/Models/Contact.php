<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'company_contact'; 
    protected $fillable = ['company_id', 'name', 'designation', 'phone', 'email', 'category'];

    public function company()
    {
        return $this->belongsTo(company::class, 'company_id');
    }
}


