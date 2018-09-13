<?php
	require_once('conexao.php');

	class validateLoggedUser{

		public function validateUser($user = null){
			if($user == null){
				$loggedUser = null;
			} else {
				if($this->checkForUserInDatabase($user)){
					$loggedUser = $user;
				} else {
					$loggedUser = null;
				}
			}
			return $loggedUser;
		}

		private function checkForUserInDatabase($user){
			$sql = "SELECT * FROM EMPRESA WHERE NOMEEMPRESA = UPPER('$user')";
			$result = $conexao->query($sql);
			$aux = $result->num_rows;
			if($aux != 0){
				return true;
			} else {
				return false;
			}
		}

	}
?>