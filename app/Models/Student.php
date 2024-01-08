<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile_number',
        'section',
        'course',
        'profile_image',
    ];

    protected $keyType = 'string';

    public function get_image_url()
    {
        if ($this->profile_image) {
            return url('storage/' . $this->profile_image);
        } else {
            return "https://ui-avatars.com/api/?name=" . $this->name;
        }
    }
}
