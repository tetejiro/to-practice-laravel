<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'people_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function person() {
        return $this->belongsTo('App\Models\Person');
    }

    public function getData() {
        return $this->id. ': '. $this->title. '('.$this->person->name. ')';
    }

}
