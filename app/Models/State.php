<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['pompa', 'mode', 'id_user'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
