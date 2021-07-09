<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Post
 *
 * @property int id
 * @property string title
 * @property string body
 * @property int author_id
 * @property DateTime created_at
 * @property DateTime updated_at
 */
class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the authors associated with this model.
     *
     * @return HasMany
     */
    public function authors(): HasMany
    {
        return $this->hasMany(Author::class);
    }
}
