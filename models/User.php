<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name å§“å
 * @property string $email é‚®ç®±
 * @property int $is_admin æ˜¯å¦æ˜¯è¶…çº§ç®¡ç†å‘˜ 1è¡¨ç¤ºæ˜¯ 0 è¡¨ç¤ºä¸æ˜¯
 * @property int $status çŠ¶æ€ 1ï¼šæœ‰æ•ˆ 0ï¼šæ— æ•ˆ
 * @property string $updated_time æœ€åŽä¸€æ¬¡æ›´æ–°æ—¶é—´
 * @property string $created_time æ’å…¥æ—¶é—´
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_admin', 'status'], 'integer'],
            [['updated_time', 'created_time'], 'safe'],
            [['name'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'is_admin' => 'Is Admin',
            'status' => 'Status',
            'updated_time' => 'Updated Time',
            'created_time' => 'Created Time',
        ];
    }
}
