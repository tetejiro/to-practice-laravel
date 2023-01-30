<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new ScopePerson);
    }
    use HasFactory;

    public function getData() {
        return $this->id. ': ' .$this->name.' ('.$this->age.')';
    }

    public function scopeNameEqual($query, $str) {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $int) {
        return $query->where('age', '>=', $int);
    }

    public function scopeAgeLessThan($query, $int) {
        return $query->where('age', '<=', $int);
    }
}