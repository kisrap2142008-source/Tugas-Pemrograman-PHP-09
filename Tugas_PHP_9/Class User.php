<?php
class User {
    public $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

$user = new User();
$user->setUsername("bayu_wind");
echo "Username: " . $user->getUsername();
?>
