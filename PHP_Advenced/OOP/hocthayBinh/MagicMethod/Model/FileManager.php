<?php 
class FileManager {

    public function onWriteFile($obj) {
        $myfile = fopen("testfile.txt", "w") or die("File ko ton tai");
        $handle = serialize($obj);
        fwrite($myfile, $handle);
    }
    
    public function onReadFile() {
        $read = file('testfile.txt');
        foreach ($read as $line) {
            echo $line .", ";
        }
    }
}
?>