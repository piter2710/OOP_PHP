<?php

class File
{
    public $filename;
    public $fileHandle;

    function __construct($filename)
    {
        $this->filename = $filename;

        if (file_exists($this->filename)) {
            $this->fileHandle = fopen($this->filename, "r");

            if (!$this->fileHandle) {
                echo "Unable to open the file.\n";
            }
        } else {
            echo "File does not exist: $filename\n";
        }
    }

    function getContent()
    {
        if ($this->fileHandle) {
            $content = fread($this->fileHandle, filesize($this->filename));
            return $content;
        } else {
            echo "File is not opened.\n";
            return null; 
        }
    }

    function __destruct()
    {
        if ($this->fileHandle) {
            fclose($this->fileHandle);
            echo "\nFile closed.\n";
        } else {
            echo "File is not opened.\n";
        }
    }
}


$fileObject = new File('1_class/files/example.txt');

if ($fileObject->fileHandle) {
    $content = $fileObject->getContent();
    echo $content;
}

?>
