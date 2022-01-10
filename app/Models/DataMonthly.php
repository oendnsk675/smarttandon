<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMonthly extends Model
{
    use HasFactory;
    protected $table = 'data_monthlies';
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function getCreatedAtAttribute(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->attributes['created_at'])->format('d-M-y');
    }
}
