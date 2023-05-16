<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lainya extends Model
{
    use HasFactory;
    protected $table = 'lainya';
    protected $guarded = ['id'];

    public function usere(){return $this->belongsTo(User::class, 'petugas_id');}
}
