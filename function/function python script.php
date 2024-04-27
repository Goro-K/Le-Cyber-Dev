<?php 

function python_script($title, $file, $data, $error) {
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST[$title]))
    {
        $command = "python3 ../python_script/$file.py $data";
        $output = [];  // Initialisation du tableau qui contiendra la sortie du script
        $return_var = 0; 
        exec($command, $output, $return_var);
        
        if ($return_var === 0) {
            $result = htmlspecialchars($output[0]);
        } else {
            $result = $error;
        }
    
        return $result;
    }
}
?>