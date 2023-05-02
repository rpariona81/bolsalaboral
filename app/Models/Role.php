<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Role extends Model
{
    use HasFactory;

    protected $table = 't_roles';
    //protected $dateFormat = 'Ymd H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rolename',
        'slug',
        'description',
        'level'
    ];

    //protected $with = 'menus';
    protected $hidden = [
        'level',
        'created_at',
        'updated_at'
    ];


    //
    public function users(){
        //return $this->belongsToMany('App\Models\User');
        return $this->hasMany(User::class);
    }

    public function menus(){
        return $this
            ->belongsToMany('App\Models\Menu', 't_menu_role', 'role_id', 'menu_id');
            //->belongsToMany('App\Models\Menu', 't_menu_role', 'menu_id', 'role_id');
    }

    
    public function setCreatedAtAttribute( $value ) {
        if (config('database.default') == 'mysql') {
            $this->attributes['created_at'] = (new Carbon($value))->format('Y-m-d H:i:s');
        }elseif(config('database.default') == 'sqlsrv'){
            $this->attributes['created_at'] = (new Carbon($value))->format('Ymd H:i:s');
        }else{
            $this->attributes['created_at'] = (new Carbon($value))->format('Y-m-d H:i:s');
        }
    }

    public function setUpdatedAtAttribute( $value ) {
        if (config('database.default') == 'mysql') {
            $this->attributes['updated_at'] = (new Carbon($value))->format('Y-m-d H:i:s');
        }elseif(config('database.default') == 'sqlsrv'){
            $this->attributes['updated_at'] = (new Carbon($value))->format('Ymd H:i:s');
        }else{
            $this->attributes['updated_at'] = (new Carbon($value))->format('Y-m-d H:i:s');
        }
    }

    public function getMenus(){
        return $this->menus;
    }
}
