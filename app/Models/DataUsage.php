<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUsage extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'usages', 'cost', 'id_user'];

    protected $casts = [
        'date' => 'date:d-F-Y',
    ];

    protected $table = "data_usages";

    public function getCreatedAtAttribute(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('d-M-y');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    
}
