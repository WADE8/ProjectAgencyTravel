<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function voyage ()
    {
        $this->belongsToMany(voyage::class,'reservations','client_id','voyage_id');
    }

    public function reservations ()
    {
        $this->hasMany(Reservation::class);
    }


}
