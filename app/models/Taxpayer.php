<?php
    class Taxpayer{

        function add($TPIN, $BusinessCertificateNumber,$TradingName, $BusinessRegistrationDate,$MobileNumber,$Email,
        $PhysicalLocation,$Username){
            
            $login_link ='/programming/challenge/webservice/Taxpayers/add';
            $view_link = "/programming/challenge/webservice/Taxpayers/getAll";
            $endpoint = WEB_SERVICE;
    
            //body parameters
            $body_data = [
                'TPIN'=> $TPIN,
                'BusinessCertificateNumber'=> $BusinessCertificateNumber,
                'TradingName'=> $TradingName,
                'BusinessRegistrationDate'=> $BusinessRegistrationDate,
                'MobileNumber'=> $MobileNumber,
                'Email'=> $Email,
                'PhysicalLocation'=> $PhysicalLocation,
                'Username'=> $Username
            ];
    
    
            $headers = HEADERS;
            

            //for us to check if the taxpayer being added is already in the DB,
            //we pull the current taxpayers and compare the TPINs to the given Tpin

            //testing variable
            $feedback = true;

            //curl_init
            $viewer = curl_init($endpoint.$view_link);
            curl_setopt($viewer, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($viewer, CURLOPT_HTTPHEADER, $headers);

            $list= curl_exec($viewer);
            $response = json_decode($list);

            if($feedback){
                //cheching if the TPIN already in DB
                foreach ($response as $key => $object) {
                    if($body_data['TPIN']==$object->TPIN){
                        $feedback = false;
                        break;  
                    }
                }
            }else{
                $feedback = true;
            }

            //adding the TPIN if not found in the DB
            if($feedback == true){
                $adder = curl_init($endpoint.$login_link);
        
                curl_setopt($adder, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($adder, CURLOPT_POST, true);
                curl_setopt($adder, CURLOPT_POSTFIELDS, json_encode($body_data));
                curl_setopt($adder, CURLOPT_HTTPHEADER, $headers);

                curl_exec($adder);
                curl_close($adder);
            }

            curl_close($viewer);
            

            return $feedback;
        
        }

        function remove($TPIN){
            
            $remove_link ='/programming/challenge/webservice/Taxpayers/delete';
            $view_link = "/programming/challenge/webservice/Taxpayers/getAll";
            $endpoint = WEB_SERVICE;
    
            // //body parameters
            // $body_data = [
            //     'TPIN'=> $TPIN,
            //     'BusinessCertificateNumber'=> $BusinessCertificateNumber,
            //     'TradingName'=> $TradingName,
            //     'BusinessRegistrationDate'=> $BusinessRegistrationDate,
            //     'MobileNumber'=> $MobileNumber,
            //     'Email'=> $Email,
            //     'PhysicalLocation'=> $PhysicalLocation,
            //     'Username'=> $Username
            // ];

            $delete_body = array(
                'TPIN' => $TPIN
            );

            $headers = HEADERS;
            

            //for us to delete we need to check if the TPIN provided is in the DB or not
            //for us to check we must get the list first.

            //testing variable
            $feedback = true;

            //curl_init
            $viewer = curl_init($endpoint.$view_link);
            curl_setopt($viewer, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($viewer, CURLOPT_HTTPHEADER, $headers);

            $list= curl_exec($viewer);
            $response = json_decode($list);

            if($feedback){
                //cheching if the TPIN already in DB
                foreach ($response as $key => $object) {
                    if($delete_body['TPIN']==$object->TPIN){
                        $feedback = false;
                        break;  
                    }
                }

            }else{
                $feedback = true;
            }

            //deleting the TPIN from the DB
            if($feedback == false){
                $delete = curl_init($endpoint.$remove_link);
        
                curl_setopt($delete, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($delete, CURLOPT_POSTFIELDS, json_encode($delete_body));
                curl_setopt($delete, CURLOPT_HTTPHEADER, $headers);

                curl_exec($delete);
                curl_close($delete);
            }

            curl_close($delete);
            

            return $feedback;
        
        }

        public function getAll(){
            $get_link ='/programming/challenge/webservice/Taxpayers/getAll';
            $endpoint = WEB_SERVICE;
    
            $headers = HEADERS;
    
            //$ch = curl_init();
            $list = curl_init($endpoint.$get_link);
    
            curl_setopt($list, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($list, CURLOPT_HTTPHEADER, $headers);
    
    
            $preview = curl_exec($list);
            $data = json_decode($preview, true);
    
            curl_close($list);

                // $TPIN = $data->TPIN;
                // $BusinessCertificateNumber= $data->BusinessCertificateNumber;
                // $TradingName= $data->TradingName;
                // $BusinessRegistrationDate= $data->BusinessRegistrationDate;
                // $MobileNumber= $data->MobileNumber;
                // $Email= $data->Email;
                // $PhysicalLocation= $data->PhysicalLocation;
                // $Username= $data->Username;
                // $Deleted= $data->Deleted;
                // $id=$data->id;

            // return array ($TPIN, $BusinessCertificateNumber,$TradingName, $BusinessRegistrationDate,$MobileNumber,$Email,
            // $PhysicalLocation,$Username,$Deleted,$id);

            //return $data;

            //print_r($data);

            //echo"<table>";

            // foreach ($data as $key => $object) {
            //     foreach($object as $k=>$v){
            //         echo $k;
            //     }
            // }
         
        //     foreach ($data as $key => $value) {
        //         foreach ($value as $k => $v) {
        //             echo'<thead>';
        //             echo "<tr>";
        //             echo "<th>$k</th>"; // Get value.
        //             echo "</tr>";
        //             echo'</thead>';
                    
        //             echo "<tr>";
        //             echo "<td>$v</td>"; // Get index.
        //             echo "</tr>";
        //         }
        // }
    
            //echo"</table>";

            //echo'hello';
            return $data;
        }

        
    }