<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $mobile_number
 * @property string $section
 * @property string $course
 * @property string|null $profile_image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\StudentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCourse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMobileNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereProfileImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 */
class Student extends Model
{
    use HasFactory;

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
