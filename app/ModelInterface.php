<?php

namespace App;


interface ModelInterface
{
    public static function tableName();

    public static function find($condition);

    public static function findOne($condition);
}