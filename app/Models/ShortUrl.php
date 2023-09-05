<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShortUrl
 *
 * @property int $id
 * @property string|null $URl
 * @property string|null $shortURL
 * @property int $countClick
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereCountClick($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereShortURL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereURl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortUrl whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ShortUrl extends Model
{
    use HasFactory;
}
