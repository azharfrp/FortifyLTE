<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUDExampleBaseModel extends Model{
    /*
    || Load 'Eloquent' addon
    */
    use HasFactory;

    /*
    || Table info
    */
    protected $table = 'crud_example_base';
    protected $primaryKey = 'crud_example_base_id';

    /*
    || Table fillable
    */
    protected $fillable = [
        'crud_example_base_name',
    ];

    /*
    || Relationship
    */
    public function baseHasMany(){
        return $this->hasMany('App\Models\CRUDExampleTryModel', 'crud_example_base_id');
    }
}
