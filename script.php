$comment = " ";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (!preg_match("/^[a-z A-Z-´]*$/", $name)){
        $nemeErr = "only letters and white spaces allowed";
    }
    if (empty($_POST["name"])){
        $nameErr="Name is required";
    }
    else {comment_input 
        $name=($_POST["name"]);
        $name = comment_input ($_POST["name"]);
    }
    comment_input($_POST["comment"]);
}
function comment_input($data){
    $data =trim($data);
    $data =$stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
}
?>