<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // 授权相关功能
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // HasFactory 模型工程相关功能的引用
    // Notifiable 消息通知相关功能的引用
    use HasFactory, Notifiable;

    // 指定数据表名
    protected $table = 'users';

    /**
     * 允许批量赋值的字段
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * 当我们需要对用户密码或其他敏感信息在用户实例通过数组或 JSON 显示时进行隐藏
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
