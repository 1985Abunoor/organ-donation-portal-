<?php
$user_id = $_SESSION['user_id'];

if(isset($_POST['register'])){
    // get all the form fields.
    $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $user_type = mysqli_real_escape_string($db, htmlspecialchars($_POST['user_type']));
    $pass = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    // encrpt password to savely store it in the database.
    $password = password_hash($pass, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users(username, email, user_type, password) VALUES('$username', '$email', '$user_type', '$password')";

    if($db->query($sql) == true){
        header("Location: ?p=login");
    } else {
        echo "<div class='text-white bg-danger col-12'>Something went wrong try again.</div>";
    }
}

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = $db->query($sql);

    if($result->num_rows != 0){
        while($row = $result->fetch_assoc()){
            $pass = $row['password'];
            $uid = $row['id'];
            $uname = $row['username'];
            $utype = $row['user_type'];
        }

        if(password_verify($password, $pass) == true){
            $_SESSION['user_id'] = $uid;
            $_SESSION['user_name'] = $uname;
            $_SESSION['user_type'] = $utype;
            
            if(empty(htmlspecialchars($_GET['ref']))){
                header("Location: ?p=home");
            } else {
                header("Location: ?p=".$_GET['ref']);
            }
        } else {
            echo "<div class='text-white bg-danger col-12'>Username or password are incorrect.</div>";
        }
    } else {
        echo "<div class='text-white bg-danger col-12'>Username or password are incorrect.</div>";
    }

}


if(isset($_POST['new_donor'])){
    $name = mysqli_real_escape_string($db, htmlspecialchars($_POST['name']));
    $contact_no = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_no']));
    $birthdate = mysqli_real_escape_string($db, htmlspecialchars($_POST['birthdate']));
    $id_card = mysqli_real_escape_string($db, htmlspecialchars($_POST['id_card']));
    $governate = mysqli_real_escape_string($db, htmlspecialchars($_POST['governate']));
    $address = mysqli_real_escape_string($db, htmlspecialchars($_POST['address']));
    $origin_to_donate = mysqli_real_escape_string($db, htmlspecialchars($_POST['origin_to_donate']));
    $health = mysqli_real_escape_string($db, htmlspecialchars($_POST['health']));
    $blood_type = mysqli_real_escape_string($db, htmlspecialchars($_POST['blood_type']));
    $emergency_contact_name = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_name']));
    $emergency_contact_no = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_no']));
    $emergency_contact_email = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_email']));
    $select_donation_type = mysqli_real_escape_string($db, htmlspecialchars($_POST['select_donation_type']));
    
    if($select_donation_type == 'all'){
        $origin_to_donate = 'all';
    }

    $sql = "INSERT INTO donors(name, contact_no, birthdate, id_card, governate, address, origin_to_donate, health, blood_type, emergency_contact_name, emergency_contact_no, emergency_contact_email, user_id)  VALUES('$name', '$contact_no', '$birthdate', '$id_card', '$governate', '$address', '$origin_to_donate', '$health', '$blood_type', '$emergency_contact_name', '$emergency_contact_no', '$emergency_contact_email', '$user_id')";

    if($db->query($sql) == true){
        header("Location: ?p=thankyou");
    } else {
        echo "<div class='text-white bg-danger col-12'>Something went wrong.</div>";
    }
}


if(isset($_POST['new_patient'])){
    $name = mysqli_real_escape_string($db, htmlspecialchars($_POST['name']));
    $contact_no = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_no']));
    $birthdate = mysqli_real_escape_string($db, htmlspecialchars($_POST['birthdate']));
    $id_card = mysqli_real_escape_string($db, htmlspecialchars($_POST['id_card']));
    $governate = mysqli_real_escape_string($db, htmlspecialchars($_POST['governate']));
    $address = mysqli_real_escape_string($db, htmlspecialchars($_POST['address']));
    $origin_needed = mysqli_real_escape_string($db, htmlspecialchars($_POST['origin_needed']));
    $health = mysqli_real_escape_string($db, htmlspecialchars($_POST['health']));
    $blood_type = mysqli_real_escape_string($db, htmlspecialchars($_POST['blood_type']));
    $emergency_contact_name = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_name']));
    $emergency_contact_no = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_no']));
    $emergency_contact_email = mysqli_real_escape_string($db, htmlspecialchars($_POST['emergency_contact_email']));

    $sql = "INSERT INTO patients(name, contact_no, birthdate, id_card, governate, address, origin_needed, health, blood_type, emergency_contact_name, emergency_contact_no, emergency_contact_email, user_id)  VALUES('$name', '$contact_no', '$birthdate', '$id_card', '$governate', '$address', '$origin_needed', '$health', '$blood_type', '$emergency_contact_name', '$emergency_contact_no', '$emergency_contact_email', '$user_id')";

    if($db->query($sql) == true){
        header("Location: ?p=thankyou");
    } else {
        echo "<div class='text-white bg-danger col-12'>Something went wrong.</div>";
    }
}

if(isset($_POST['contact'])){
    $name = mysqli_real_escape_string($db, htmlspecialchars($_POST['name']));
    $email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
    $subject = mysqli_real_escape_string($db, htmlspecialchars($_POST['subject']));
    $message = mysqli_real_escape_string($db, htmlspecialchars($_POST['message']));

    require_once('assets/PHPMailer/class.phpmailer.php');

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "juelbaruababu@gmail.com";
    $mail->Password = "Juel1234";
    $mail->SetFrom($email);
    //$mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->AltBody = $message;
    $mail->AddAddress('test@gmail.com');

    if(!$mail->Send()) {
        echo "Error while sending your message...<br />";
    } else {
        Location("Location: ?p=thankyou");
    }
}

?>