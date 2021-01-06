<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $name
 * @property int $level
 * @property int $is_branch
 * @property int $oil
 * @property int $oil_capacity
 * @property int $facilities
 * @property int $tables
 * @property int $cockroaches
 * @property int $created_at
 * @property int $updated_at
 */
class Restaurant extends Model
{
    use HasDateTimeFormatter;
}
