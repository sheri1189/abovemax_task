<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niche extends Model
{
    use HasFactory;
    protected $fillable=[
        "niche_name",
        "niche_status",
        "user_id",
    ];
}
