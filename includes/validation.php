<?php

require_once('../config.php');

function filterDefaultValue($string, $default) {
    if($string === $default) {
        return '';
    }else{
        return $string;
    }
}

function validateEmail ($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateNum($int){
    if(!ctype_alpha($int)){
        return true;
    }else{
        return false;
    }
}

function validate ($string) {
    if(!empty($string)) {
        return true;
    }else{
        return false;
    }
}

function validateTrick($string){
    if(empty($string)){
        return true;
    }else{
        return false;
    }
}

// establish a connection
try {
    $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $ex){
    die($ex->getMessage());
}

if(
    validate($_POST['Name']) &&
    validateEmail($_POST['Email']) &&
    validateNum($_POST['Cellphone_Number']) &&
    validate($_POST['Date_of_birth']) &&
    validate($_POST['What_is_your_favourite_flavour?']) &&
    validate($_POST['Where_did_you_buy_your_Rooibos_Frutea?']) &&
    validate($_POST['Name_one_unique_feature_of_Rooibos_Frutea'])
){
    $in_use = false;
    
    try {
        $check_cell = $conn->prepare('SELECT Cellphone_Number FROM '.SCHWINN_COMP_LOGS_TBL);
        
        $check_cell->execute();
      
        foreach($check_cell->fetchAll(PDO::FETCH_ASSOC) as $cell) {
            if($cell['Cellphone_Number'] === $_POST['Cellphone_Number']){
                $in_use = true;
            }
            
            break;
        }
        
        if($in_use) {
            die('Sorry this cellphone number is already in use. Each cellphone number may only be entered once.');
        }else{
            try {
                $log_form = $conn->prepare('
                    INSERT INTO '.SCHWINN_COMP_LOGS_TBL.' (
                        Name, 
                        Email, 
                        Cellphone_Number, 
                        Date_of_birth, 
                        What_is_your_favourite_flavour, 
                        Where_did_you_buy_your_Rooibos_Frutea, 
                        Name_one_unique_feature_of_Rooibos_Frutea, 
                        Date, 
                        Unix
                    ) VALUES (
                        :Name, 
                        :Email, 
                        :Cellphone_Number, 
                        :Date_of_birth, 
                        :What_is_your_favourite_flavour, 
                        :Where_did_you_buy_your_Rooibos_Frutea, 
                        :Name_one_unique_feature_of_Rooibos_Frutea, 
                        :Date, 
                        :Unix
                    )
                ');

                $log_form->bindValue(':Name',                                       $_POST['Name']); 
                $log_form->bindValue(':Email',                                      $_POST['Email']);
                $log_form->bindValue(':Cellphone_Number',                           $_POST['Cellphone_Number']);
                $log_form->bindValue(':Date_of_birth',                              $_POST['Date_of_birth']);
                $log_form->bindValue(':What_is_your_favourite_flavour',             $_POST['What_is_your_favourite_flavour?']);
                $log_form->bindValue(':Where_did_you_buy_your_Rooibos_Frutea',      $_POST['Where_did_you_buy_your_Rooibos_Frutea?']);
                $log_form->bindValue(':Name_one_unique_feature_of_Rooibos_Frutea',  $_POST['Name_one_unique_feature_of_Rooibos_Frutea']);
                $log_form->bindValue(':Date',                                       date('d-m-Y'));
                $log_form->bindValue(':Unix',                                       time());

                if($log_form->execute()){
                    include('class.phpmailer.php');

                    $phpmailer = new PHPMailer();

                    $phpmailer->From = $_POST['Email'];
                    $phpmailer->FromName = 'Rooibos Frutea';
                    $phpmailer->AddReplyTo($_POST['Email'], $_POST['Name']);
                    $phpmailer->IsHTML(true);

                    $phpmailer->AddAddress(ADMIN_EMAIL);

                    $phpmailer->Subject = "Vintage bicycle competition entry.";

                    foreach($_POST as $key => $val) {
                        $key = str_replace("_", " ", $key);

                        @$body .= "$key: $val<br />";
                    }

                    $phpmailer->Body = $body;

                    if($phpmailer->Send()){
                        echo 'success';
                    }else{
                        echo 'There was an error';
                    }
                }

            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}else{
    die('Please fill in the required fields.');
}

?>