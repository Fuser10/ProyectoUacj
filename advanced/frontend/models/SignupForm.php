<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nombre;
    public $apellidos;
    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['nombre', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['apellidos', 'required', 'message' => 'Este campo no puede estar vacio'],

            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Este nombre de usuario ya esta siendo utilizado.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['email', 'email', 'message' => 'Este campo no puede estar vacio'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Esta cuenta de correo ya esta siendo utilizada.'],

            ['password', 'required', 'message' => 'Este campo no puede estar vacio'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();

        $user->nombre = $this->nombre;
        $user->apellidos = $this->apellidos;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
