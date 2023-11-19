<?php
    class crud{
        //private database object
        private $db;
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        //function to insert records
        public function insert($p_name,$p_desc, $p_doc, $user_id,$us,$user_dist){
            try {
                $date=date("Y/m/d");
                $sql= "INSERT INTO courses(p_name,p_desc,p_doc,user_id,add_date,ustate,district) VALUES (:p_name,:p_desc,:p_doc,:user_id,:add_date,:us,:district)";
                $stmt= $this->db->prepare($sql);
                $stmt->bindparam(':add_date',$date);
                $stmt->bindparam(':p_name',$p_name);
                $stmt->bindparam(':p_desc',$p_desc);
                $stmt->bindparam(':p_doc',$p_doc);
                $stmt->bindparam(':user_id',$user_id);
                $stmt->bindparam(':district',$user_dist);
                $stmt->bindparam(':us',$us);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function removeVlog($post_id){
            try {
                $sql= "DELETE FROM courses WHERE post_id=:p_id";
                $stmt= $this->db->prepare($sql);
                $stmt->bindparam(':p_id',$post_id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function insertuser($user_name,$contact, $e_mail, $user_password,$qualification,$user_state,$user_district){
            try {
                $new_password = md5($user_password.$user_name);
                $sql= "INSERT INTO users(user_name,contact,e_mail,user_password,qualification,ustate,district) VALUES (:user_name,:contact,:e_mail,:new_password,:qualification,:ustate,:district)";
                $stmt= $this->db->prepare($sql);
                
                $stmt->bindparam(':user_name',$user_name);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':e_mail',$e_mail);
                $stmt->bindparam(':new_password',$new_password);
                $stmt->bindparam(':qualification',$qualification);
                $stmt->bindparam(':ustate',strtolower($user_state));
                $stmt->bindparam(':district',strtolower($user_district));

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        public function getPosts(){
            $sql = "SELECT * FROM courses ORDER BY add_date DESC";
            $result = $this->db->query($sql);
            return $result;
        }
        public function likeVlog($id){
            $sql = "UPDATE courses SET likes = likes + 1 WHERE post_id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            return true;
        }
        public function gettopPosts(){
            $sql = "SELECT * FROM courses ORDER BY likes DESC";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getPostbyuser($id){
            $sql = "SELECT * FROM courses where user_id=$id";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getusers(){
            $sql = "SELECT * FROM users ORDER BY user_name ASC";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getPostDetails($id){
            $sql = "SELECT * FROM courses where post_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
        public function getAttendees(){
            $sql = "SELECT * FROM users";
            $result = $this->db->query($sql);
            return $result;
        }
        public function getUserDetails($id){
            $sql = "SELECT * FROM users where user_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
        
        public function getVlog($id){
            $sql = "SELECT * FROM courses where post_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }
    }
?>