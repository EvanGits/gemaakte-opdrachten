<?php
class Login {
    
//    private $conn;
//
////    public function __construct($conn) {
////        $this->conn = $conn;
////    }

    // public function login($email, $password) {
    //     $query = 'SELECT * FROM customer WHERE email = :email AND password = :password';
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute(['email' => $email, 'password' => $password]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    public static function login($email, $password) : ?Customer
    {
        $params = array(":Email" => $email);
        $sth = DBConn::PDO()->prepare("SELECT * FROM `customer` WHERE email = :Email");
        $sth->execute($params);

        if($row = $sth->fetch())

            if ($sth->rowCount() > 0) {
                if (password_verify($password, $row["password"])) {
                    return Customer::getCustomerById($row["id"]);
                }
            }
        return null;
    }

    public static function password()
    {
        if ($sth->rowCount() > 0) {
            if (password_verify($password, $row["password"])) {
                return new Login($row["id"], $row["name"], $row["email"], $row["phone"], $row["password"], $row["customer_status_id"]);
            }
        }
    }

    public function register($name, $email, $phone, $password)
    {
        $params = array(":name" =>$name, ":email"=>$email, ":phone"=>$phone, ":password"=>$password, ":donation"=>0, ":customer_status_id"=>1);
        $sth = DBConn::PDO()->prepare("INSERT INTO customer (name, email, phone, password, donation, customer_status_id) VALUES (:name, :email, :phone, :password, :donation, :customer_status_id)");
        $sth->execute($params);
        return true;
//        $query = 'INSERT INTO users (email, password, name) VALUES (:email, :password, :name)';
//        $sth = $this->conn->prepare($query);
//        $sth->execute(['email' => $email, 'password' => $password, 'name' => $name]);
//        return true;
    }
}
