<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
      public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function platform_project()
    {
        return $this->belongsTo(ProjectPlatfrom::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
