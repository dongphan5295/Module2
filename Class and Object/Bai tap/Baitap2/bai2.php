<?php
class StopWatch{
    private $endTime;
    private $startTime;
    function __construct(){
        $this->startTime = $this->getTime();
        $this->endTime = $this->getTime();
    }
    public function getTime(){
        return time();
    }

    public function startReset(){
       return $this->startTime = $this->getTime();

    }
    public function endReset(){
        return $this->endTime = $this->getTime();

    }
    public function getElapsedTime(){
        return $this->endTime - $this->startTime;

    }      
    
}
$time = new StopWatch();
$time->startReset();
usleep(3000000);
$time->endReset();
$count = $time->getElapsedTime();
echo "Did nothing in $count seconds\n";

