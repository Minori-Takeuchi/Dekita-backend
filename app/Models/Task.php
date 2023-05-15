<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function child()
    {
        return $this->belongsTo(Child::class);
    }
    public function timezone()
    {
        return $this->belongsTo(Timezone::class);
    }
}
