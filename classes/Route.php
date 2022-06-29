<?php
class FormController extends UserAuth{

    public $fullname;
    public $email;
    public $password;
    public $confirmPassword;
    public $country;
    public $gender;

    public function __construct()
    {
        $this->db = new Dbh();
    }

    public function handleForm(){
        
    }


}

?>
