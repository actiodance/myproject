<?php

class Auth
{
	public $db;

	public function __construct(QueryBuilder $db)
	{
		$this->db = $db;
	}
	public function register($email, $password)
	{
		$data = [
			'email' => $email,
			'password' => md5($password)
		];
		$this->db->store('users', $data); 
	}

	public function login($email, $password)
	{

		// $user = $this->db->selectUser($email, $password);

		//1. проверить существует ли пользователь в базе
		$sql = "SELECT * FROM users WHERE email=:email AND password=:password LIMIT 1";
		$statement = $this->db->pdo->prepare($sql);
		$statement->bindparam(":email", $email);
		$statement->bindparam(":password", md5($password));
		$statement->execute();
		$user = $statement->fetch(PDO::FETCH_ASSOC);

		//2. если да
			//2.1 записываем в сессию и возвращаем true\пользователя\сессию
		if ($user){
			$_SESSION['user'] = $user;
			return true;
		}
		//3. если нет
			//3.1 возвращаем false
		return false;
	}
	
	public function logout()
	{
		unset($_SESSION['user']);
	}

	public function check()
	{
		if(isset($_SESSION['user'])){
			return true;
		}
			return false;
	}

	public function currentUser()
	{
		if(isset($_SESSION['user'])){
			return $_SESSION['user'];
		}
	}

	//выводит подготовленные данные
	// public function fullName()
	//{
		//$user = $this->currentUser();
	   // return $user['name'] . " " . $user['surname'];
	//} 

}


?>
