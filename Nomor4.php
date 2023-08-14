<?php
class UserData{
    private $username;
    private $email;

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}

$user = new UserData();
$user->setUsername("Rendra_hafyan");
$user->setEmail("hafyanrendra@gmail.com");

echo "username: ". $user->getUsername(). "<br>";
echo "Email: ". $user->getEmail();
?>