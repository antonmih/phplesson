<?php
class GuestBook
{
    protected $files;
    public $text;
    public $res;
    public function __construct ($files)
    {
        $this->files=$files;  
        }
    
    public function getData() 
    {
        $this->res = file($this->files);
        foreach ($this->res as $name) 
        {
          echo  $name; 
        }
    }
    
    public function append ($text) 
    {
        $this->text=$text;
       
    }
    public function save() 
    {
        $str = implode ("\n", $this->res);
       file_put_contents($this->files, $this->text, FILE_APPEND);  
    }
   }  

$book1 = new GuestBook(__DIR__.'/Quest.txt');
$book1->getData();
$book1->append('ANTON');
$book1->save();

?>


