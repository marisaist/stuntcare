<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowthRecord extends Model {
    protected $fillable = ['height', 'weight', 'record_date'];

    public function child() {
        return $this->belongsTo(Child::class);
    }
}