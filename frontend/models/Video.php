<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $video
 * @property integer $views
 * @property integer $likes
 *
 * @property User $user
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'video', 'views', 'likes'], 'required'],
            [['user_id', 'views', 'likes'], 'integer'],
            [['name', 'video'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'video' => 'Video',
            'views' => 'Views',
            'likes' => 'Likes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
        public function getLikes()
    {
        return $this->hasMany(Like::className(), ['id' => 'video_id']);
    }

}
