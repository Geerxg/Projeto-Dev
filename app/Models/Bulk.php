<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    use HasFactory;

    public $var1;
    protected $var2;
    private $var3 = "oi";

    protected $fillable = [
        'slug',
        'name'
    ];

    protected $table = 'bulks';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;

}
