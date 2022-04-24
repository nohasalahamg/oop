<?php 

  require 'dbClass.php';
  require 'validatorClass.php';

class blog{
    
    private $title; 
    private $content; 
    private $image; 

    /**
     * Register Method .....
     * input   >>>> ARRAY CONTAINS INPUTS FROM USER .... 
     * output  >>>> FINAL RESULT 
     *  */  

    public function Insert($input){
       
       # Create OBJ FROM VALIDATOR CLASS ..... 
       $validator = new Validator; 

       # Clean &&  ASSIGN INPUTS TO PRO .... 
       $this->title    =  $validator->Clean($input['title']); 
       $this->content  =  $validator->Clean($input['content']); 
       $this->image    =  $validator->Clean($input['image']); 


       # VALIDATE INPUTS ..... 
       $Errors = [];
       $result = null;

        # Validate title .... 
        if (!$validator->validate($this->title, 'required')) {
            $Errors['title'] = "Field Required";
        }

        # Validate content .... 
        if (!$validator->validate($this->content, 'required')) {
            $Errors['content'] = "Field Required";
        } elseif (!$validator->validate($this->content, 'min')) {
            $Errors['content'] = "Length must be >= 50 chars";
        }


        # Validate image .... 
     

       # Check Errors ..... 
       if(count($Errors) > 0 ){
           $result = $Errors; 
       }else{

        # DO CODE .....
        
    
        # QUERY .... 
        $sql = "insert into blog (title,content,image) values ('$this->title','$this->content','$this->image')"; 

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

  public function edit($input,$id){
       
       # Create OBJ FROM VALIDATOR CLASS ..... 
       $validator = new Validator; 

       # Clean &&  ASSIGN INPUTS TO PRO .... 
       $this->title    =  $validator->Clean($input['title']); 
       $this->content  =  $validator->Clean($input['content']); 
       $this->image    =  $validator->Clean($input['image']); 


       # VALIDATE INPUTS ..... 
       $Errors = [];
       $result = null;

        # Validate title .... 
        if (!$validator->validate($this->title, 'required')) {
            $Errors['title'] = "Field Required";
        }

        # Validate content .... 
        if (!$validator->validate($this->content, 'required')) {
            $Errors['content'] = "Field Required";
        } elseif (!$validator->validate($this->content, 'min')) {
            $Errors['content'] = "Length must be >= 50 chars";
        }


        # Validate image .... 
        if (!$validator->validate($this->image, 'required')) {
            $Errors['image'] = "Field Required";
        } elseif (!$validator->validate($this->image, 'image')) {
            $Errors['image'] = "InVaild Image";
        }
         

       # Check Errors ..... 
       if(count($Errors) > 0 ){
           $result = $Errors; 
       }else{

        # DO CODE .....
        
    
        # QUERY .... 
        $sql = "Update  blog  SET title='$this->title' ,content='$this->content' ,image ='$this->image' where id =$id"; 

        # DB OBJ ... 
        $dbObj = new db; 

        $op = $dbObj->doQuery($sql);
        
        if($op){
            $result = ["success" => "Raw update"];
        }else{

            $result = ["error" => "Error Try Again"];
        }

       }

       
       return $result; 


    }





    # Display Records .... 

    public function listPosts()
    {

        # DB OBJ ... 
        $dbObj = new db;

        # QUERY .... 
        $sql = "select * from blog";

        $op = $dbObj->doQuery($sql);

        return $op;
    } 
    public function listonepost($id)
    {

        # DB OBJ ... 
        $dbObj = new db;

        # QUERY .... 
        $sql = "select * from blog where id =$id";

        $op = $dbObj->doQuery($sql);

        return $op;
    } 


    public function delete($id)
    {

        # DB OBJ ... 
        $dbObj = new db;

        # QUERY .... 
        $sql = "delete * from blog where id = $id";

        $op = $dbObj->doQuery($sql);

        return $op;
    } 



}
