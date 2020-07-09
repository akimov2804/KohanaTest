<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_action()
	{
		$this->response->body('hello, world!');
	}
    public function action_content()
    {
        $this->response->body('hello, world!');
    }
    public function action_registration()
    {
        if ($post = $this->request->post())
        {
            print_r($post);
            try {
                // Сохраняем пользователя в БД
                $user = ORM::factory('user')->create_user($_POST, array('username','password', 'email'));

                // Выставляем ему роль, роль login означает что пользователь может авторизоваться
                $user->add('roles',ORM::factory('role', array('name'=>'login')));

                // Отправляем письмо пользователю с логином и паролем
                mail($post['email'],'Регистрация на сайте SiteName','Вы были зарегистрированы на сайте SiteName, ваш логин: '.$post['username'].' Ваш пароль: '.$post['password']);

                // Делаем редирект на страницу авторизации
                $this->redirect('login');
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('models');
                // echo Debug::vars($errors);
            }
        }

        // Выводим шаблон регистрации
        $this->response->body(View::factory('registrationView'));
    }
    public function action_login()
    {
        $this->response->body(View::factory('loginView'));
    }
    public function action_logout()
    {
        $this->response->body('hello, world!');
    }
    public function action_forgot()
    {
        $this->response->body('hello, world!');
    }
    public function action_exchangerate()
    {
        $this->response->body('hello, world!');
    }
    public function action_word()
    {
        $this->response->body('hello, world!');
    }
    public function action_words()
    {
        $this->response->body('hello, world!');
    }
    public function action_wordstat()
    {
        $this->response->body('hello, world!');
    }

} // End Ajax
