<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    protected $table = "menu";
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
