<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * Insertable columns
     *
     * @var array
     */
    protected $fillable = [
      'sender_user_id','receiver_user_id','message',
    ];

    /***
     *  Cast
     *
     * @var array
     */
    protected $casts = [
        'sender_user_id' => 'int',
        'receiver_user_id' => 'int',
        'message' => 'string'
    ];

}
