<?php
	include "pepper.php";

	class USER {
	    private $db;

			#Parent konstruktor (USER)
	    function __construct($DB_con) {
	      $this->db = $DB_con;
	    }

			#Registrera användare
	    public function register($fname,$lname,$uname,$umail,$upass) {
	       try {
					 	 #Kryptera lösenord
	           $new_password = password_hash($upass, PASSWORD_DEFAULT);

						 #Query -> Lägg till användare
	           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass) VALUES(:uname, :umail, :upass)");

						 #Bind variabler till query
	           $stmt->bindparam(":uname", $uname);
	           $stmt->bindparam(":umail", $umail);
	           $stmt->bindparam(":upass", $new_password);

						 #Execute statement
	           $stmt->execute();

	           return $stmt;

	       } catch(PDOException $e) {
	           echo "Error: " .$e->getMessage();
	       }
	    }

			#Logga in användare
	    public function login($uname,$umail,$upass) {
	       try {
					 	#Query -> Hämta användarnamn
	          $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");

						#Bind variabler till query inom array
	          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));

						#Skapa användar-row genom att hämta från array
	          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

						#Kolla ifall det finns några rows -> verifiera lösenord (dekryptera)
	          if($stmt->rowCount() > 0) {
	             if(password_verify($upass, $userRow['user_pass'])) {
	                $_SESSION['user_session'] = $userRow['user_id'];
	                return true;
	             } else {
	                return false;
	             }
	          }
	       } catch(PDOException $e) {
	           echo "Error: " .$e->getMessage();
	       }
	   }

		 #Kolla inlogg
	   public function is_loggedin() {
	      if(isset($_SESSION['user_session'])) {
	         return true;
	      }
	   }

		 #Redirect användare
	   public function redirect($url) {
	       header("Location: $url");
	   }

		 #Logga ut användare
	   public function logout() {
			 #Avsluta session
			 session_destroy();
	     unset($_SESSION['user_session']);
	     return true;
	   }
	}
?>
