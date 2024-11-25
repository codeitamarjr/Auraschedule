<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'tax_id',
        'contact_email',
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
