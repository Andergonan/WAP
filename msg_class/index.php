<?php
/* Classes */
class Message {
    public $text;
    public $lvl;

    public function setText($text) {
        $this->text = $text;
    }

    public function setLvl($lvl) {
        $this->lvl = $lvl;
        
    }

    public function sendMess() {
        $messArray = array(($this->text) => ($this->lvl));

        foreach($messArray as $text=>$lvl) {
            
            if ($lvl === "error") {
                echo 
                    "<div style='margin:2em;color:red;'>
                        <span>Mess: " . $text . "<span/>
                        <br>
                        <span>Level: " . $lvl . "<span/>
                <div/>";
            } else if ($lvl === "info") {
                echo
                    "<div style='margin:2em;color:blue;'>
                        <span>Mess: " . $text . "<span/>
                        <br>
                        <span>Level: " . $lvl . "<span/>
                <div/>";
            } else {
                echo
                    "<div style='margin:2em;color:black;'>
                        <span>Mess: " . $text . "<span/>
                        <br>
                        <span>Level: " . $lvl . "<span/>
                <div/>";  
            }
        }
    }
}

/* New messanges */

// Error mess
$mess = new Message();
$mess -> setText('Wrong');
$mess -> setLvl('error');

$mess -> sendMess();

// Info mess
$mess = new Message();
$mess -> setText('Big whale');
$mess -> setLvl('info');

$mess -> sendMess();

// Another mess
$mess = new Message();
$mess -> setText('flew');
$mess -> setLvl('another level');

$mess -> sendMess();
?>