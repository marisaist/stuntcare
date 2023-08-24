<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionInfo extends Model {
    protected $fillable = ['title', 'content'];

    public function healthyMenus() {
        return $this->hasMany(HealthyMenu::class);
    }
}
