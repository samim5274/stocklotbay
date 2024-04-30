<?php
include 'config.php';

//================ user registration code start ===========================//

if(isset($_POST['btnregister']))
{
    $fullname = $_POST['txtfirstname'].' '.$_POST['txtlastname'];
    $phone = $_POST['txtphone'];
    $username = $_POST['txtusername'];
    $email = $_POST['txtemail'];
    $pass1 = $_POST['txtpassword'];
    $pass2 = $_POST['txtcpassword'];
    
    if($username || $email || $pass1 || $pass2)
    {
        $sqlusernamesearch = "SELECT * FROM `table_users`";
        $sqlusernamesearchresult = mysqli_query($conn, $sqlusernamesearch);

        while($row = mysqli_fetch_array($sqlusernamesearchresult))
        {
            $uname = $row['username'];
            $umail = $row['email'];
        }

        if($username == $uname)
        {
            $ex="Username already taken. Please try to different username.";
            header("Location: myAccount.php?error=$ex");
        }
        else
        {
            if($email == $umail)
            {
                $ex="User email already taken. Please try to different email.";
                header("Location: myAccount.php?error=$ex");
            }
            else
            {
                if($pass1 != $pass2)
                {
                    $ex="User password are not same. Please insert same password and try again!";
                    header("Location: myAccount.php?error=$ex");
                }
                else
                {
                    echo "Main Insert code here";
                }
            }
        }
    }
}

//================ user registration code end ===========================//

?>