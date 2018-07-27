<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "names".
 *
 * @property string $a
 * @property int $b
 * @property int $c
 * @property int $d
 * @property string $asd
 * @property string $ng
 */
class Names extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'names';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['a', 'b', 'c', 'd', 'asd', 'ng'], 'required'],
            [['b', 'c', 'd'], 'integer'],
            [['a'], 'string', 'max' => 11],
            [['asd'], 'string', 'max' => 128],
            [['ng'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
            'asd' => 'Asd',
            'ng' => 'Ng',
        ];
    }
}
