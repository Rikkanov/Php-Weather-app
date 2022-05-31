<?php
function daytime () {
        $hour =date("H");
        if($hour >= 6 && $hour < 12) {
            return "Good Morning";
        }
        elseif($hour >= 12 && $hour < 20) {
            return "Good Afternoon";
        }
        elseif($hour >= 20 && $hour < 6){
            return "Good Evening";
        }
        else{
            return "JA JA GUTE IDEE";
        }
        return $hour;
}