<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

        protected $fillable = [
            'tenant_id',
            'name',
            'description',
            'duration',
            'price',
        ];

        public function tenant()
        {
            return $this->belongsTo(Tenant::class);
        }
}
