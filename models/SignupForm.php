<?php

namespace app\models;
use yii\base\Model;

class SignupForm extends Model
{
    public $email;
    public $password;
    public $name;
    public $surname;
    public $patronymic;

    public function rules() {
        return [
            [['email', 'password', 'name', 'surname'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'Почта',
            'password' => 'Пароль',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
        ];
    }
}