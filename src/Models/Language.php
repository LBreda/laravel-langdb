<?php

namespace LBreda\LaravelLangDb\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Language
 * @package LBreda\LaravelLangDb
 *
 * @property int $id
 * @property string code_639_1
 * @property string code_639_2t
 * @property string code_639_2b
 * @property string code_639_3
 * @property string native_name
 * @property-read string translatable_name
 */
class Language extends Model
{
    use SoftDeletes;

    public $table = 'ldb_languages';
    public $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function getTranslatableNameAttribute(): string
    {
        return "langdb::languages." . ($this->code_639_3 ?? $this->code_639_2b);
    }
}