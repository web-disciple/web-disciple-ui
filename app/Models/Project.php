<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    /**
     * Get the pages for the project.
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
