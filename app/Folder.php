<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Task');
        // 省略せずに書くと下記
        // 第一引数が関連するモデル名（名前空間も含む）、第二引数が関連するテーブルが持つ外部キーカラム名、第三引数はモデルに hasMany が定義されている側のテーブルが持つ、外部キーに紐づけられたカラムの名前
        // return $this->hasMany('App\Task', 'folder_id', 'id');
    }
}
