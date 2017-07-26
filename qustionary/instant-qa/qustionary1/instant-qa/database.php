<?php
class question
{
     private static $conn = null;
        public static function connect()
        {
            self::$conn=mysqli_connect("localhost","root","","questionery");
            return self::$conn;
         }
         public static function disconnect()
        {
            self::$conn=mysqli_disconnect();
             self::$conn=null;
         }
    
         public function login($_email,$_pass)
         {
             $conn=question::connect();
            $res=$conn->query("select * from user_tbl where email_id='". $_email ."' and password='". $_pass ."'");
            return $res;
            question::disconnect();
         }
             public function displayque()
         {
             $conn= question::connect();
            $res=$conn->query("select u.*,q.* from user_tbl u,question_tbl q where u.email_id=q.fk_email_id");
            return $res;
             question::disconnect();
         }
           public function viewans($_id)
         {
             $conn= question::connect();
            $res=$conn->query("select q.*,a.* from question_tbl q,answer_tbl a where q.question_id='". $_id ."' and q.question_id = a.fk_question_id");
            return $res;
             question::disconnect();
         }
           public function viewque($_id)
         {
             $conn= question::connect();
            $res=$conn->query("select * from question_tbl where question_id='". $_id ."'");
            return $res;
             question::disconnect();
         }
           public function viewuser($queid,$ansid)
         {
             $conn= question::connect();
            $res=$conn->query("select q.*,a.*,u.* from question_tbl q,answer_tbl a,user_tbl u where q.question_id='". $queid ."' and a.answer_id='". $ansid ."' and q.question_id = a.fk_question_id and u.email_id = a.fk_email_id");
            return $res;
             question::disconnect();
         }
           public function insertans($_ans,$_img,$_qid,$_uid,$_date)
         {
             $conn= question::connect();
            $res=$conn->query("insert into answer_tbl  values('". null ."','". $_ans ."','". $_img ."',". $_qid .",'". $_uid ."','". $_date ."','0')");
            return $res;
             question::disconnect();
         }
            public function displaysub()
         {
             $conn= question::connect();
            $res=$conn->query("select * from subject_tbl");
            return $res;
             question::disconnect();
         }
             public function displaysubque($_subid)
         {
             $conn= question::connect();
            $res=$conn->query("select q.*,s.* from question_tbl q,subject_tbl s  where s.subject_id='". $_subid ."' and s.subject_id = q.fk_sub_id");
            return $res;
             question::disconnect();
         }
          public function displaysubqueuser($_qid)
         {
             $conn= question::connect();
            $res=$conn->query("select u.*,q.* from user_tbl u,question_tbl q where u.email_id=q.fk_email_id and question_id='". $_qid ."'");
            return $res;
             question::disconnect();
         }

}