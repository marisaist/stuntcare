<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthyMenu extends Model {
    protected $fillable = ['title', 'description', 'ingredients', 'instructions', 'nutrition_info_id'];

    public function nutritionInfo() {
        return $this->belongsTo(NutritionInfo::class);
    }
}
