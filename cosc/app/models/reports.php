<?php

class reports {

public function reports () {
        $db = db_connect();
        $statement = $db->prepare("SELECT deleted FROM reminders
                                WHERE username =:username;");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function totalUserslogins () {
        $db = db_connect();
        $statement = $db->prepare("SELECT username ,logintype FROM reminders
                                WHERE logintype =1;");
        $_SESSION['usertupe']=$logintype;
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}