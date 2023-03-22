<?php
if(isset($_FILES['file']) && isset($_POST['filename']) && isset($_POST['submit']) ) {
    $file_name = $_POST['filename'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $name2 = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    // $file_ext = strtolower(end(explode('.',$_FILES['file']['name'])));
    if(strlen($file_name) == 6){
        if (preg_match('/^[a-zA-Z]{3}[0-9]{3}$/', $file_name)) {
    // Create directory
    $dir_path = '/vent/material/' . $file_name;
    if (!is_dir($dir_path)) {
        mkdir($dir_path, 0777, true);
    }    
    // Move file to directory
    move_uploaded_file($file_tmp, $dir_path . '/' . $_FILES['file']['name']);
    // Create JSON object
    

    $json = array(
        $file_name => array([
            'materialname' => $name2,
            'link' => $dir_path . '/' . $_FILES['file']['name']
        ])
    );
    
    // Save JSON object to file
    $json_file = '../personal/elist.json';
    $data = file_get_contents($json_file);
    $json_data = json_decode($data, true);
    // $json_data = array_merge($json_data, $json);

    $json_data[$file_name] = $json[$file_name];
    $json_data = json_encode($json_data);
    file_put_contents($json_file, $json_data);
    
    // Return JSON response
    // header('Content-Type: application/json');
    // echo json_encode($json);
    $errmgg = "<b style='color:red'>The file has been added successfully</b>";

} 
else {
    $errmgg = "<b style='color:red'>Incorrect syntax for the course code</b>";
    }
}
else {
    $errmgg = "<b style='color:red'>Incorrect syntax for the course code</b>";
    }}

?>

