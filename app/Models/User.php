<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['company_id', 'cpf', 'name', 'email', 'password', 'phone', 'is_verified', 'role'];

    protected $hidden = ['password'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
