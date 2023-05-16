<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends modelUmum
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function petugas()
    {
        return $this->hasOne(Petugas::class);
    }

    protected static function booted()
    {
        parent::booted();
    }
}
