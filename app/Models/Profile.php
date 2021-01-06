<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $level
 * @property int $experience
 * @property int $gold
 * @property int $ingots
 * @property int $health
 * @property int $gold_recipes
 * @property int $ranking
 * @property int $status
 * @property int $cupboards
 * @property int $warehouses
 * @property int $locks
 * @property int $created_at
 * @property int $updated_at
 */
class Profile extends Model
{
    use HasDateTimeFormatter;
}
