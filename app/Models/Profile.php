<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function profileImage() {
        return ($this->image)? "/storage/{$this->image}" : 'https://www.windhorsepublications.com/wp-content/uploads/2019/11/image-coming-soon-placeholder-300x300.png';
    }
}
