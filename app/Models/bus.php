<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bus extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $table = 'bus';


    public function voyage()
    {
        $this->belongsTo(voyage::class);
    }

}
