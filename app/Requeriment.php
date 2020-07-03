<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Requeriment
 *
 * @property int $id
 * @property int $course_id
 * @property string $requeriment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment whereRequeriment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requeriment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Requeriment extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
