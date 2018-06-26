<?php


include_once ("dbconnect.php");

class class_user
{

    function __construct() {
        $this -> db = new db();
    }

    function Login($email,$password)
    {
        $sql="select * from db_login where userEmail='$email' and userPassword='$password'";
        $r = $this->db->getRow($sql,array($email,$password));
        return $r;

    }

	  function getAllUser()
    {
        $sql = "select * from user_details";
        $r = $this->db->getRows($sql);
		
        return $r;
    }
    function addFuelRecord($subsidiaryID,$vehicleID,$fillType,$litre,$perLitreCost,$user)
    {
        $total= $litre * $perLitreCost;

        $fuelDate=date("Y-m-d G:i:s");
        $sql = "insert into  db_fuelrecord(subsidiaryID,vehicleID,fillType,litre,perLitreCost,total,userID,dateOf) values(?,?,?,?,?,?,?,?)";
        $this -> db -> insertRow($sql, array($subsidiaryID,$vehicleID,$fillType,$litre,$perLitreCost,$total,$user,$fuelDate));

    }

    function UserID()
    {
        $dt = "User_".date('YmdGis');
            return $dt;
    }

    function getSingleUserDetailsByUserID($userCode)
    {
        $sql = "select  * from db_login where userID=?";
        $r = $this->db->getRow($sql,array($userCode));

        return $r;
    }

    function drpUserSubsidiaryDetails($userID)
    {
        $sql = "select * from db_usersubsidiaryrelation where userID=?";
        $r = $this->db->getRows($sql,array($userID));

        return $r;

    }

    function disableUser($userID)
    {
        $sql = "update db_login set status='disable' where userID=?";
        $updaterow = $this -> db -> updateRow($sql, array($userID));

    }

  

    function getAllLevel_2_UserRoleForDropDown()
    {
        $sql = "select * from db_login where roleID=2";
        $r = $this->db->getRows($sql);
        $subList = '<option value="">---select Top-Level Users ---</option>';
        foreach ($r as $row) {
            $subList .= '<option value="' . $row['userID'] . '">' . $row['userSurname']. '</option>';
        }
        return $subList;
    }
    function getAllUserForDropDown()
    {
        $sql = "select * from db_login";
        $r = $this->db->getRows($sql);
        $subList = '<option value="">---Select User ---</option>';
        foreach ($r as $row) {
            $subList .= '<option value="' . $row['userID'] . '">' . $row['userFirstname']." ".$row['userSurname'] . '</option>';
        }
        return $subList;
    }

    function UpdateSpecificUser($fname,$sname,$address,$level,$userID)
    {
        $sql = "update db_login set userFirstname=?,userSurname=?,address=?,roleID=? where userID=?";
        $this -> db -> updateRow($sql, array($fname,$sname,$address,$level,$userID));
        
    }
    
    function registerNewUser($userPermission,$userSurname,$userFirstname,$userEmail,$userPassword,$roleID,$createdBy,$permissions,$userAddress,$createdDate)
    {
        $userID= $this -> UserID();
        $sql = "insert into  db_login(userID,userSurname,userFirstname,userEmail,userPassword,roleID,createdBy,permissions,address,createdDate) values(?,?,?,?,?,?,?,?,?,?)";
        $this -> db -> insertRow($sql, array($userID,$userSurname,$userFirstname,$userEmail,$userPassword,$roleID,$createdBy,$permissions,$userAddress,$createdDate));

        $sql = "insert into  db_loginPermission(userID,	permissions) values(?,?)";
        $this -> db -> insertRow($sql, array($userID,$userPermission));


    }
    function insertloginPermission($userID,$userPermission)
    {

    }

    function getAllUsers()
    {
        $sql = "select db_login.id as id,db_login.userID,db_login.status, db_login.userFirstname,db_login.userSurname,db_login.userEmail,db_login.permissions as per,db_loginpermission.permissions from db_login,db_loginpermission where db_login.userID = db_loginpermission.userID";
        $r = $this->db->getRows($sql);

        return $r;

    }
    function getSpecificUser($sid)
    {
        $sql = "select db_login.id as id,db_login.userID, db_login.userFirstname,db_login.createdDate,db_login.userSurname,db_login.address,db_login.userEmail,db_login.permissions as per,db_loginpermission.permissions from db_login left join db_loginpermission on db_loginpermission.userID =db_login.userID WHERE db_login.userID=?";
        $r = $this->db->getRow($sql,array($sid));

        return $r;

    }
    function assignUserToSubsidiary($userID,$subsidiaryID,$createdBy)
    {
        $createdDate = date("Y-m-d G:i:s");
        $sql = "insert into db_usersubsidiaryrelation(userID,subsidiaryID,createdBy,createdDate) values(?,?,?,?)";
        $this -> db -> insertRow($sql, array($userID,$subsidiaryID,$createdBy,$createdDate));


    }
   // function isSubsidiaryAlreadyAssignedToUser($subsidiaryID,$userID)
    function isSubsidiaryAlreadyAssignedToUser($userID)
    {
      //  $sql = "select count(*) as valueCount from db_usersubsidiaryrelation where subsidiaryID=? or userID=?";
        $sql = "select count(*) as valueCount from db_usersubsidiaryrelation where userID=?";
        //$sql = "select exists(select * from table where subsidiaryID=? or userID=? limit 1)";
       // $r = $this->db->getRow($sql,array($subsidiaryID,$userID));        
        $r = $this->db->getRow($sql,array($userID));

        return $r['valueCount'];

    }

    function changePassword($newPassword,$userID)
    {
        $sql = "update db_login set userPassword=? where userID=?";
        $this -> db -> updateRow($sql, array($newPassword,$userID));
        
    }

}
$userOBJ = new class_user();


?>