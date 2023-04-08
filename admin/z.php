<?php
if(isset($_FILES['file']) && isset($_POST['filename']) && isset($_POST['submit'])) {
    $file_name = strtolower($_POST['filename']);
    $file_tmp = $_FILES['file']['tmp_name'];
    $name2 = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    if(strlen($file_name) == 6) {
        if (preg_match('/^[a-zA-Z]{3}[0-9]{3}$/', $file_name)) {
            $dir_path = '../material/' . $file_name;
            if (!is_dir($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            if ($_FILES['file']['size'] > 40000000) {
                $errmgg = "<b style='color:red'>File size limit (40MB) has been exceeded.</b>";
            } 
            else {
                move_uploaded_file($file_tmp, $dir_path . '/' . $_FILES['file']['name']);
                $json = array(
                    $file_name => array([
                        'materialname' => $name2,
                        'link' => $dir_path . '/' . $_FILES['file']['name']
                    ]));
                $json_file = '../personal/elist.json';
                $data = file_get_contents($json_file);
                $json_data = json_decode($data, true);
                if  (array_key_exists($file_name, $json_data)) {
                    array_push($json_data[$file_name], [
                        'materialname' => $name2,
                        'link' => $dir_path . '/' . $_FILES['file']['name']
                    ]);
                }else {
                    $json_data[$file_name] = [
                        [
                            'materialname' => $name2,
                            'link' => $dir_path . '/' . $_FILES['file']['name']
                        ]
                    ];}
                $json_data = json_encode($json_data);
                file_put_contents($json_file, $json_data);
                $errmgg = "<b style='color:green'>The file has been added successfully.</b>";}}
        else {
            $errmgg = "<b style='color:red'>Incorrect syntax for the course code.</b>";
        }}
        else{
        $errmgg = "<b style='color:red'>Incorrect syntax for the course code.</b>";
    }}
?>