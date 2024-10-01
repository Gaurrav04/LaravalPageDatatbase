<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $filable =[
        'memberid','spi1','spi2','spi3','spi4','spi5','spi6','cpi'
    ];
}
