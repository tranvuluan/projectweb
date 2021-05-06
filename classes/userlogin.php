<?php
$filepath = realpath(dirname(__FILE__));
include($filepath . '/../lib/session.php');
include($filepath . '/../lib/database.php');
include($filepath . '/../helpers/format.php');
Session::init();

?>
<?php
class userlogin
{

    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function login_user($username, $password)
    {
        $username = $this->fm->validation($username);
        $password = $this->fm->validation($password);

        $username = mysqli_real_escape_string($this->db->link, $username);
        $password = mysqli_real_escape_string($this->db->link, $password);

        $query = "SELECT * FROM `tbl_useraccount` WHERE `username` = '$username' AND `userpassword` = '$password' LIMIT 1";
        $result = $this->db->select($query);
        if ($result != false) {
            $value = $result->fetch_assoc();
            Session::set('userLogin', true);
            Session::set('id_user', $value['id_user']);
            Session::set('username', $value['username']);
            Session::set('fullname', $this->fm->textShorten($value['fullname'],15));
            Session::set('password', $value['userpassword']);
            return true;
            
        } 
        return false;
    }

    public function user_check()
    {
    }

    public function user_detroy()
    {
    }
}
?>