<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property int $id
 * @property string $title æƒé™åç§°
 * @property string $urls json æ•°ç»„
 * @property int $status çŠ¶æ€ 1ï¼šæœ‰æ•ˆ 0ï¼šæ— æ•ˆ
 * @property string $updated_time æœ€åŽä¸€æ¬¡æ›´æ–°æ—¶é—´
 * @property string $created_time æ’å…¥æ—¶é—´
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['updated_time', 'created_time'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['urls'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'urls' => 'Urls',
            'status' => 'Status',
            'updated_time' => 'Updated Time',
            'created_time' => 'Created Time',
        ];
    }
}
