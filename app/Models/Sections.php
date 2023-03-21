<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sections extends Model
{
    use HasFactory;
    protected $table ='sections';
    protected $fillable =[ 'title','article','section','image'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Meal()
    {
        return $this->hasMany(Meals::class);
    }
}