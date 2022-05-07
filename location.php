

<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);
if($result->status=='success'){
    echo "<h3>  <br>Country : ".$result->country.'<br/></h3>';
   
    echo "<h3><br> Region : ".$result->regionName.'<br/></h3> ';
    echo "<h3> <br>City : ".$result->city.'<br/></h3>';
    if(isset($result->lat)&&isset($result->lon)){
        echo "<h3> <br>Lat : ".$result->lat.'<br/></h3>';
        echo  " <br><h3>Lon : ".$result->lon.'<br/></h3>';
    }
    echo "<h3> <br>IP : ".$result->query.'<br/></h3>';
    
    echo "<h3> <br>DATE : ".date("Y/m/d").'</br></h3>';
}
