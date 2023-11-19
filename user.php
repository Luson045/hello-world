<?php
    class user{
        
        //private database object
        private $db;
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        public function insertUser($user_name,$contact,$e_mail,$user_password,$qualification){
                try {
                    $result = $this->getUserbyUsername($user_name);
                    if ($result['num']>0){
                        return false;
                    }else{
                    $new_password = md5($user_password.$user_name);
                    $sql= "INSERT INTO users(user_name,contact,e_mail,user_password,qualification) values(:username,:contact,:email,:password,:qualification)";
                    $stmt= $this->db->prepare($sql);
                    
                    $stmt->bindparam(':username',$user_name);
                    $stmt->bindparam(':username',$contact);
                    $stmt->bindparam(':password',$e_mail);
                    $stmt->bindparam(':password',$new_password);
                    $stmt->bindparam(':username',$qualification);

                    $stmt->execute();
                    return true;
                }
             } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                
                }
        }
        public function getUser($user_name,$user_password){
            $sql = "SELECT * FROM users where user_name = :user_name and user_password = :user_password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':user_name',$user_name);
            $stmt->bindparam(':user_password',$user_password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
        public function getUserbyUsername($username){
            $sql = "SELECT count(*) as num FROM users where user_name = :user_name";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':user_name',$user_name);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }


    }
?>