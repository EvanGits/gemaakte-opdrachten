<?php

class user
{
    private function __construct(
        private int $id,
        private string $name,
        private string $email,
        private string $phone,
        private string $birthdate,
        private string $passwordHash,
        private int $member,
    ){
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    public function getMember(): string
    {
        return $this->member;
    }

    public static function check(string $name): ?User
    {
        $params = array(":name" => $name);
        $sth = getPDO()->prepare("SELECT `name`, `email`, `phone`, `birth`, `password_hash`, `member` FROM `user` WHERE `name` = :name LIMIT 1;");
        $sth->execute($params);

        if ($row = $sth->fetch()) {
            return new User($row["id"], $name, $row["email"], $row["phone"], $row["birth"], $row["password_hash"], $row["member"] != 0);
        } else {
            return null;
        }
    }
    public static function get(int $id): ?User
    {
        $params = array(":id" => $id);
        $sth = getPDO()->prepare("SELECT `name`, `email`, `phone`, `birth`, `password_hash`, `member` FROM `user` WHERE `id` = :id LIMIT 1;");
        $sth->execute($params);

        if ($row = $sth->fetch()) {
            return new User($id, $row["name"], $row["email"], $row["phone"], $row["birth"], $row["password_hash"], $row["member"] != 0);
        } else {
            return null;
        }
    }

    public static function register(string $username, string $email, string $phone, string $birthdate, string $password, int $member) :User
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $params = array(
            ":username" => $username,
            ":email" => $email,
            ":phone" => $phone,
            ":birthdate" => $birthdate,
            ":password_hash" => $passwordHash,
            ":member" => $member,
        );

        $sth = getPDO()->prepare("INSERT INTO `user` (`name`, `email`, `phone`, `birth`, `password_hash`, `member`) VALUES (:username, :email, :phone, :birthdate, :password_hash, :member);");
        $sth->execute($params);
        return new User((int)getPDO()->lastInsertId(), $username, $email, $phone, $birthdate, $password, $member);
    }

    public static function login(string $username, string $password): ?User
    {
        $params = array(
            ":username" => $username,
        );

        $sth = getPDO()->prepare("SELECT * FROM `user` WHERE `name` = :username LIMIT 1;");
        $sth->execute($params);
        if ($row = $sth->fetch())
            if (password_verify($password, $row["password_hash"]))
                return new User($row["id"], $row["name"], $row["email"], $row["phone"], $row["birth"], $row["password_hash"], $row["member"] != 0);

        return null;
    }




    public static function updateUser(int $id, string $username, string $email, string $phone, string $birthdate, string $password, int $member): ?User
    {
        $params =  array(
            ":id" => $id,
            ":username" => $username,
            ":email" => $email,
            ":phone" => $phone,
            ":birthdate" => $birthdate,
            ":password_hash" => $password,
            ":member" => $member
        );

        $sth = getPDO()->prepare("UPDATE `user` SET `name` = :username, `email` = :email, `phone` = :phone, `birth` = :birthdate, `password_hash` = :password_hash, `member` = :member WHERE `id` = :id");
        $sth->execute($params);
        
        return Self::get($id);
        
    }
}




