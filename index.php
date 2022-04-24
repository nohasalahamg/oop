<?php
// oop .... 

// class user{
//     var $name; 
//     var $email; 


//     function  __construct($val1,$val2){
        
//         $this->name  = $val1;
//         $this->email = $val2;

//     }



     
//     // function setName($val){
//     //      $this->name = $val;
//     // }


//     function getName(){
//         return $this->name;
//     }




        
// //     function setEmail($val){
// //         $this->email = $val;
// //    }


//    function getEmail(){
//        return $this->email;
//    }



//     function Message($input){
//         return 'Welcome to OOP , '.$input;
//     }


//     function __destruct()
//     {
//         echo 'Destruct Method';
//     }



// }



// $admin = new user("Root Account","Root@yahoo.com"); 

// //   echo $admin->Message("ADMIN"); 


//      # SET ADMIN NAME .... 
//     //  $admin->setName("Root Account"); 
//      # GET NAME ..... 
//      ECHO  $admin->getName().'<BR>';

//      # set & get email ... 
//     //  $admin->setEmail("root@yahoo.com"); 
//      ECHO $admin->getEmail();


//   echo '<br>';

// $student = new user("Student Accoutn","Student@gmail.com"); 

// //   # SET USER NAME .... 
// //   $student->setName("Student Account"); 
// //   # GET NAME ..... 
//   ECHO  $student->getName().'<br>';

//   ECHO  $student->getEmail();

// echo $student->Message("USER"); 



/*
 admin   [name,email,passowrd] - {Login , Register , AcceptStudent}
 student [name,email,password,level] - {Login,Register,JoinCours} 

*/

// trait Messages {

//     function sendSMS(){
//         echo 'Send SMS TO USER ... ';
//     }

// }




/*    
                      same class         object             extends 
  1- public             true              true               true 
  2- private            true              false              false 
  3- protected          true              false              true 
  

*/



# Parent class || super class 
//  class user {

//     public $name = "account"; 
//     private $email = "test@yahoo" ; 
//     protected $password = "tech123"; 



//     public function setEmail($email){
//         $this->email = $email;
//     }


//     public function getEmail(){
//        return $this->email ;
//     }


//    final  function login()
//     {

//         // email && password 
//         echo 'Login Method .... ';
//     }



//    public function Register(){
//         echo 'Register Method ..... ';

//     }
// }


// ############################################################################## 

// // $user = new user(); 
// // // $user->email = "testaccount@yahoo.com"; 
// // // echo $user->email;

// // // $user->setEmail("test@yahoo");
// // // echo $user->getEmail();

// // $user->password = "1213";
// // echo $user->password;
// // exit(); 



// # sub class , child class , derived class 
//  class admin extends  user {

// //     use Messages; 

//     // function login()
//     // {
//     //     // email && password 
//     //     echo 'Login Method   Admin .... '.$this->password;
//     // }


//     function AcceptStudent(){

//     }


// }


// class student extends user {


//     var $level; 


//     function JoinCours(){
        
//     }


// }



// $admin = new admin; 

// // // $admin->name = "admin account"; 
// // // echo $admin->name;
// $admin->login();

// // // $admin->sendSMS();

// // echo '<br>';

// // $std = new student; 
// // $std -> login();







//   class x{
    
//     private function __construct()
//      {
//             return true; 
//      }
//   }
//   $obj = new x;

//   var_dump($obj);

################################################################################################################## 


// function message();    // header 

// class x{

//     function message();
// }



// interface ntoify{
   
//     function sendSms();
//     function sendEmail();
// }


// interface xx{
//      function x(); 
// }

// class user implements ntoify , xx {

 
//     function x(){

//     }

//     function sendSms(){
//         // code .... 
//     }


//     function sendEmail(){
//         // code.... 
//     }

// }


// abstract class x{
//     private $name = "Root"; 


//     function  getName(){
//         return $this->name;
//     }


//    abstract function sendMessage();
// }




// class y  extends x {

//     function sendMessage(){}
// }



// class user{

//     private static $name = "root"; 

//     static function getName(){

//      return   self :: $name;
//     }


//    static function login(){
//         echo 'Login';
//     }


//    static function register(){
//         echo 'Register';
//     }



// }


// $obj = new user; 
// $obj->login(); 

// user :: login();
 
//   echo  user :: $name;

//echo user :: getName();

?>