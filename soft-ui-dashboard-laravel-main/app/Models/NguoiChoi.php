<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class NguoiChoi extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded=[];


    public function luotchois(){
        return $this->hasMany(LuotChoi::class);
    }
}
