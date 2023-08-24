<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model {
    protected $fillable = ['name', 'birthdate'];

    public function growthRecords() {
        return $this->hasMany(GrowthRecord::class);
    }
}