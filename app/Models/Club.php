<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'clubs';

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
