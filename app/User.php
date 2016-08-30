<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

  /* 登录中如果前面字段键值和数据不同，则可以通过下面方法
          $credentials = [
            'user_email' => $request->get('user_email'),
            'password' => $request->get('user_password')
        ];
  public function getAuthPassword()
    {
        return $this->user_pwd;
    }*/

/*    public function getNameAttribute ($value)
    {
        return $value."s";
    }*/

    public function scopeGetBasicField($query) {
        return $query->get(['id as user_id', 'name as user_name', 'email as email']);
    }

    public function ownPost($post){
        return $this->id === $post->user_id;
    }
}
