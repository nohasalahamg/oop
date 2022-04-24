<?php 

  require 'dbClass.php';
  require 'validatorClass.php';

class user{
    
    private $name; 
    private $email; 
    private $password; 

    /**
     * Register Method .....
     * input   >>>> ARRAY CONTAINS INPUTS FROM USER .... 
     * output  >>>> FINAL RESULT 
     *  */  
    public function Register($input){
       
       # Create OBJ FROM VALIDATOR CLASS ..... 
       $validator = new Validator; 

       # Clean &&  ASSIGN INPUTS TO PRO .... 
       $this->name     =  $validator->Clean($input['name']); 
       $this->password =  $validator->Clean($input['password']); 
       $this->email    =  $validator->Clean($input['email']); 


       # VALIDATE INPUTS ..... 
       $Errors = [];
       $result = null;

        # Validate Name .... 
        if (!$validator->validate($this->name, 'required')) {
            $Errors['Name'] = "Field Required";
        }

        # Validate Email .... 
        if (!$validator->validate($this->email, 'required')) {
            $Errors['Email'] = "Field Required";
        } elseif (!$validator->validate($this->email, 'email')) {
            $Errors['Email'] = "Invalid Email Format";
        }


        # Validate Password .... 
        if (!$validator->validate($this->password, 'required')) {
            $Errors['Password'] = "Field Required";
        } elseif (!$validator->validate($this->password, 'min')) {
            $Errors['Password'] = "Length must be >= 6 chars";
        }
         

       # Check Errors ..... 
       if(count($Errors) > 0 ){
           $result = $Errors; 
       }else{

        # DO CODE .....
        
        # HASH PASSWORD .... 
        $this->password = md5($this->password);

        # QUERY .... 
        $sql = "insert into users (name,email,password) values ('$this->name','$this->email','$this->password')"; 

        # DB OBJ ... 
        $dbObj = new db; 

        $op = $dbObj->doQuery($sql);
        
        if($op){
            $result = ["success" => "Raw Inserted"];
        }else{

            $result = ["error" => "Error Try Again"];
        }

       }

       
       return $result; 


    }




    # Display Records .... 

    public function listUsers()
    {

        # DB OBJ ... 
        $dbObj = new db;

        # QUERY .... 
        $sql = "select * from users";

        $op = $dbObj->doQuery($sql);

        return $op;
    } 






}
