<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    // Allow these attributes to be mass-assigned
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'capacity',
    ];

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
