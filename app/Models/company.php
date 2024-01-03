<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table = 'company'; 
    protected $fillable = ['company', 'phone', 'email', 'address', 'post'];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'company_id');
    }
}
