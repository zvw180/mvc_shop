<?php

class dangky extends controller
{
    public mixed $dangky;

    public function __construct()
    {
        $this->dangky = $this->model("dangky_model");
    }

    public function show()
    {
        $this->view("index_view", [
            "page" => "dangky"
        ]);
    }

    public function moidangky()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'aadUsers') {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $address2 = $_POST['address2'];
            $city = $_POST['city'];
            $zip = $_POST['zip'];

            $token = new Token();
            $password1 = $token->generate(10);
            $password = password_hash($password1, PASSWORD_DEFAULT);

            $this->dangky->aadUsers($fname, $lname, $email, $phone, $password, $address, $address2, $city, $zip);
            $subject = "Xác nhận đăng kí thành công";

            $message = '
<html lang="vi" >
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Password</th>
</tr>
<tr>
<td>'.$fname.'</td>
<td>'.$lname.'</td>
<td>'.$password1.'</td>
</tr>
</table>
</body>
</html>';
            $guiemail = new sendEmail();
            $guiemail->sendEmailtb($email, $subject, $message);
        }

    }
}