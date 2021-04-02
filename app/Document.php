<?php

namespace App;

use App\Model\Config\Area;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
