<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'invoice_number', 'series', 'issued_at', 'total_value', 'items', 'tax_info', 'status'];

    protected $casts = [
        'items' => 'array',
        'tax_info' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}

