<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client()
    {
        $this->belongsToMany(client::class);
    }
    public function bus ()
    {
        return $this->belongsTo(bus::class,'bus_id','id');
    }
}
