<?php
namespace CroudTech\Repositories\TestApp\Models;

use \Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'first_name',
        'last_name',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
