<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Gambar;

class Villa extends Model
{
    protected $table = 'villa';

    public function gambar()
    {
        return $this->hasMany(Gambar::class);
    }
}
