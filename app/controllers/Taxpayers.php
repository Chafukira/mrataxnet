<?php
class Taxpayers extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Taxpayer');
    }

    public function add(){

        $data = [
            'tpin'=> '',
            'businesscert'=> '',
            'tradename'=> '',
            'regdate'=> '',
            'number'=> '',
            'email'=> '',
            'location'=> '',
            'username'=> '',
            'fieldError'=> ''
        ];
    
        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'tpin'=> trim($_POST['tpin']),
                'businesscert'=> trim($_POST['businesscert']),
                'tradename'=> trim($_POST['tradename']),
                'regdate'=>trim($_POST['regdate']) ,
                'number'=> trim($_POST['number']),
                'email'=> trim($_POST['email']),
                'location'=> trim($_POST['location']),
                'username'=> trim($_POST['username']),
                'fieldError'=> ''
            ];

             //Changing the date format to y/m/d from y-m/d

            if (empty($data['tpin']) && empty($data['businesscert']) &&
                empty($data['tradename']) && empty($data['regdate'])&&
                empty($data['number']) && empty($data['email']) && empty($data['location']) &&
                empty($data['username']))
            {
                $data['fieldError'] = 'Taxpayer details can not be empty, Please provide all details';
            }

            else if(!is_numeric($data['tpin'])){
                $data['fieldError'] = 'Please enter a numeric TPIN.';
            }
            //setting the length of TPIN to 8 digits as in the document

            else if(strlen($data['tpin']) !=8){
                $data['fieldError'] = 'Please enter eight(8) characters for TPIN.';
            }

            //     //Validating BusinessCert.
            else if (empty($data['businesscert'])) {
                $data['fieldError'] = 'Business Certificate Number.';
            }
            else if (!preg_match('/MBRS\d{6}/',($data['businesscert']))){
                $data['fieldError'] = 'Business Certificate Number must start with "MBRS and followed by 6 digits".';
            }
    

             //Validating tradename
            else if (empty($data['tradename'])) {
                $data['fieldError'] = 'Please enter the Trading Name.';
            }

            //Business Registration Date Validation 
            else if (empty($data['regdate'])) {
                $data['fieldError'] = 'Please enter the Business Registration Date.';
            }

            //validating mobile number
            else if(!is_numeric($data['number'])){
                $data['fieldError'] = 'Please enter a valid mobile number.';
            }

            else if(strlen($data['number']) !=10){
                $data['fieldError'] = 'Please enter a valid mobile number (10-digits).';
            }
            
            //validating email
            else if(empty($data['email'])){
                $data['fieldError'] = 'Please make sure you enter the email address.';
            }

            else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                 $data['fieldError'] = 'Please enter the correct email address format.';
            }
            
            //validating the physical location
            else if(empty($data['location'])){
                $data['fieldError'] = 'Please make sure you enter the Physical Location.';
            }

            //Validating username, which is the email address of the current user
            //so we validate te email address.
            else if(empty($data['email'])){
                $data['fieldError'] = 'Please make sure you enter the username.';
            }

            else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                 $data['fieldError'] = 'Please enter the correct username format.';
            }
            else if(empty($data['fieldError'])){
                //convertinting date to the required formate as on document. 2021/09/07    
                $data['regdate'] = strtotime($data['regdate']);
                $data['regdate'] = date('Y/m/d',$data['regdate']);

                if($this->userModel->add(
                    $data['tpin'],$data['businesscert'],$data['tradename'],$data['regdate'],
                    $data['number'],$data['email'],$data['location'],$data['username'] ))
                    {
                        $data['fieldError'] = 'Taxpayer added successfully';
                        //$this->view('pages/add',$data);
                    }
                else{
                        $data['fieldError'] = 'Taxpayer already exist';
                        //$this->view('pages/add',$data);
                    }
                
                $this->view('pages/add',$data);       
            }
            else{
                $data['fieldError'] = 'Something is wrong - Taxpayer NOT added.';
                
            }
            $this->view('pages/add',$data);

            
        }    
        
        else{
         
            $data = [
                'tpin'=> '',
                'businesscert'=> '',
                'tradename'=> '',
                'regdate'=> '',
                'number'=> '',
                'email'=> '',
                'location'=> '',
                'username'=> '',
                'fieldError'=> ''
            ];
            $this->view('pages/add', $data);
        }
    }

    public function getAll(){
        //$output=[];

        $result = array('data'=>array());
        $data = $this->userModel->getAll();

        foreach($data as $key =>$vaule){

            $result['data'][$key] = array(
                $vaule['TPIN'],
                $vaule['BusinessCertificateNumber'],
                $vaule['TradingName'],
                $vaule['BusinessRegistrationDate'],
                $vaule['MobileNumber'],
                $vaule['Email'],
                $vaule['PhysicalLocation'],
                $vaule['Username'],
                $vaule['Deleted'],
                $vaule['id']
            );
        }
        $boon = json_encode($result);
        //$allan = json_decode($boon);
        echo'<br>';
        echo'<br>';

        foreach($result as $jessey){
            foreach($jessey as $containner=>$x){
                foreach($x as $index=>$print){
                    //echo $print; echo'     ';
                }
            }
            $display[] = $jessey;
        }


        foreach($display as $key){
            foreach($key as $value){
                foreach($value as $index){
                    echo $index; echo '                  ';
                }
                echo'<br><br>';
            }
        }
       
    }

    public function remove(){
        $data = [
            'tpin'=> '',
            'fieldError'=> ''
        ];

         //Check for post
         if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'tpin'=> trim($_POST['tpin']),
                'fieldError'=> ''
            ];

             //Changing the date format to y/m/d from y-m/d

            if (empty($data['tpin']))
            {
                $data['fieldError'] = 'Please enter the TPIN below';
            }

            else if(!is_numeric($data['tpin'])){
                $data['fieldError'] = 'Please enter a numeric TPIN.';
            }
            //setting the length of TPIN to 8 digits as in the document

            else if(strlen($data['tpin']) !=8){
                $data['fieldError'] = 'Please enter eight(8) characters for TPIN.';
            }
            else if(empty($data['fieldError'])){

                if($this->userModel->remove($data['tpin']))
                    {
                        $data['fieldError'] = 'Taxpayer does not exist';
                        //$this->view('pages/add',$data);
                    }
                else{
                        $data['fieldError'] = 'Taxpayer Deleted';
                        //$this->view('pages/add',$data);
                    }
                
                $this->view('pages/remove',$data);       
            }
            else{
                $data['fieldError'] = 'Something is wrong - Taxpayer NOT deleted.';
                
            }
            $this->view('pages/remove',$data);
         }
        }         
    
}