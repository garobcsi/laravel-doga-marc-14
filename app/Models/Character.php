<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        "name",
        "gender" ,
        "job" ,
        "wand" ,
        "species" ,
        "patronus" ,
        "birth",
        "death",
        "house_id"
    ];
    protected $table = "characters";
    public $timestamps = false;

    public function house() {
        return $this->hasOne(House::class,'id','house_id');
    }
}
