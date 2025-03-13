<?php

class User {
private $username;
private $password;

function __construct(string $username, string $password) {
$this->username = $username;
$this->password = password_hash($password, PASSWORD_DEFAULT);
}

public function setUsername(string $username): void {
$this->username = $username;
}

public function getUsername(): string {
return $this->username;
}

public function setPassword(string $password): void {
$this->password = password_hash($password, PASSWORD_DEFAULT);
}

public function getPassword(): string {
return $this->password;
}

}
?>