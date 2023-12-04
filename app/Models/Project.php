<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Technology;

class Project extends Model
{

    protected $guarded = ['id'];
    public function technology(){
        return $this->belongsTo(Technology::class);
    }

}
