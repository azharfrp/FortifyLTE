<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUDExampleTryModel extends Model{
    /*
    || Load 'Eloquent' addon
    */
    use HasFactory;

    /*
    || Table info
    */
    protected $table = 'crud_example_try';
    protected $primaryKey = 'crud_example_try_id';

    /*
    || Table fillable
    */
    protected $fillable = [
        'crud_example_base_id', 'crud_example_try_photo', 'crud_example_try_string', 'crud_example_try_textarea', 'crud_example_try_number',
    ];

    /*
    || Relationship
    */
    public function tryBelongsTo(){
        return $this->belongsTo('App\Models\CRUDExampleBaseModel', 'crud_example_base_id');
    }
}
