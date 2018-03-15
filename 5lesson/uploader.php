<html>
    <head>
        <title>Uploader</title>
    </head>
    <body>
<?php
$files = $_FILES['files'];         
class Uploader 
{
    protected $filess;
    public $res;
    
    public function __construct ($files)
    {
       $this->filess=$files;
    }
    
    public function isUploader () 
    {
        if (!empty($this->filess['size'])) {
          return true;  }
        
        return false;
    }
    
    public function upload () 
    {
        if ($this->isUploader() and $this->filess['error'] == 0) {
       move_uploaded_file(
            $this->filess['tmp_name'],
            __DIR__.'/images/test.png');
            echo 'FILE LOADED INTO',' ',__DIR__.'/images/';
        } 
        else 
        { echo 'NO FILE'; }
    }
    
}
    $test = new Uploader($files);
    $test->upload();
?>
    
<form action="uploader.php" method="post" enctype="multipart/form-data">
    <input name="files" type="file">
    <input type="submit">
</form>
</body>
</html>