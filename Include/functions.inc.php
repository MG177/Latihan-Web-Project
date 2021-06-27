<?php

function emptyInputSignup($fname,$lname,$email,$pwd,$repwd){
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd)|| empty($repwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    

    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd,$repwd){
    $result;
    if ($pwd !== $repwd) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function emailExist($conn,$email){
    $sql = "SELECT * FROM users Where userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepere($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_init($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $pwd, $repwd){
    $sql = "INSERT INTO users (firstName,lastName,userEmail,userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepere($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
        exit();
}