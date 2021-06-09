<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rules;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasil';
    protected $guarded = ['id'];
    protected $casts = ['jawaban' => 'array'];

    public function rules() {
        return $this->belongsTo(Rules::class);
    }
}
