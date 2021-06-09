<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hasil;

class Rules extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function hasil() {
        return $this->hasMany(Hasil::class);
    }
}
