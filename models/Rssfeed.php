<?php

namespace vendor\kouosl\rssfeed\models;

use Yii;

/**
 * This is the model class for table "rssfeed".
 *
 * @property int $rss_no
 * @property string $rss_adi
 * @property string $rss_aciklama
 * @property string $rss_link
 */
class Rssfeed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rssfeed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rss_no', 'rss_adi', 'rss_aciklama', 'rss_link'], 'required'],
            [['rss_no'], 'integer'],
            [['rss_aciklama', 'rss_link'], 'string'],
            [['rss_adi'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rss_no' => 'Rss No',
            'rss_adi' => 'Rss Adi',
            'rss_aciklama' => 'Rss Aciklama',
            'rss_link' => 'Rss Link',
        ];
    }
}
