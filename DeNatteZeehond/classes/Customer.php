<?php

class customer
{
    public function __construct(
        private int $id,
        private string $name,
        private string $email,
        private string $phone,
        private string $password,
        private string $donation,
        private int $customerStatusId
    ){}
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

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getDonation(): string
    {
        return $this->donation;
    }

    public function getcustomerStatusId(): int
    {
        return $this->customerStatusId;
    }

    public static function checkCustomer(string $name): ?Customer
    {
        $params = array(":name" => $name);
        $sth = DBConn::PDO()->prepare("SELECT `name`, `email`, `phone`, `password`, `donation`, `customer_status_id` FROM `customer` WHERE `name` = :name LIMIT 1;");
        $sth->execute($params);

        if ($row = $sth->fetch()) {
            return new Customer($row["id"], $name, $row["email"], $row["phone"], $row["password"], $row["donation"], $row["customer_status_id"] !=0);
        } else{
            return null;   
        }      
    }

    public static function getSpecificId(int $id): ?Customer
    {
        $params = array(":id" => $id);
        $sth = DBConn::PDO()->prepare("SELECT `name`, `email`, `phone`, `password`, `donation`, `customer_status_id` FROM `customer` = :id LIMIT 1;");
        $sth->execute($params);

        if ($row = $sth->fetch()) {
            return new Customer($id, $row["name"], $row["email"], $row["phone"], $row["password"], $row["donation"], $row["customer_status_id"] !=0);
        } else {
            return null;
        }
    }
    
    public static function getCustomerById($id): ?Customer
    {
        $params = array(":id" => $id);
        $sth = DBConn::PDO()->prepare("SELECT * FROM customer WHERE id = :id");
        $sth->execute($params);
        if($row = $sth->fetch())
            return new customer($row["id"], $row["name"], $row["email"], $row["phone"], $row["password"], $row["donation"], $row["customer_status_id"]);
        return null;
    }

    public static function selectDonastionList()
    {
        $sth = DBConn::PDO()->prepare("SELECT id, name, donation FROM customer WHERE NOT name='Anoniem' AND NOT name='admin' AND NOT email='' ORDER BY donation DESC LIMIT 5");
        $sth->execute();

        return $sth->fetchAll();
    }

    public function deleteCustomerById() : ?int
    {
        $params = array(":id"=>$this->id);
        $sth = DBConn::PDO()->prepare("DELETE FROM customer WHERE id = :id");
        $sth->execute($params);
        return 1;
        
    }

    public static function selectCustomerList()
    {
        $sth = DBConn::PDO()->prepare("SELECT id, name, email, phone, donation FROM customer WHERE NOT name='admin' ");
        $sth->execute();

        return $sth->fetchAll();
    }

    public function updateCustomerById() : ?int
    {
        $params = array(
            ":id"=>$this->id, 
            ":name"=>$this->name, 
            ":email"=>$this->email, 
            ":phone"=>$this->phone, 
            ":password"=>$this->password, 
            ":donation"=>$this->donation, 
            ":customer_status_id"=>$this->customerStatusId);
        $sth = DBConn::PDO()->prepare("UPDATE customer SET name=:name, email=:email, phone=:phone, password=:password, donation=:donation, customer_status_id=:customer_status_id WHERE id = :id");
        $sth->execute($params);
        return $sth->rowcount();
    }

    public static function getCustomerByName($name): ?Customer
    {
        $params = array(":name" => $name);
        $sth = DBConn::PDO()->prepare("SELECT * FROM customer WHERE name = :name");
        $sth->execute($params);
        if($row = $sth->fetch())
            return new customer($row["id"], $row["name"], $row["email"], $row["phone"], $row["password"], $row["donation"], $row["customer_status_id"]);
        return null;
    }
}
?>