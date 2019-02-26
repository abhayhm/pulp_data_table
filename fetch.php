<?php
     $connection=mysqli_connect('localhost','root','','pulp');
if (!$connection)
{
die();
}

 $update=$_POST['date'];
 $ttime1='0700';
 $ttime2='0800';
 $ttime3='0900';
 $ttime4='1000';
 $ttime5='1100';
 $ttime6='1200';
 $ttime7='1300';
 $ttime8='1400'; 
 $ttime9='1500';
 $ttime10='1600';
 $ttime11='1700';
 $ttime12='1800';
 $ttime13='1900';
 $ttime14='2000';
 $ttime15='2100';
 $ttime16='2200';
 $ttime17='2300';
 $ttime18='0000';
 $ttime19='0100';
 $ttime20='0200'; 
 $ttime21='0300';
 $ttime22='0400';
 $ttime23='0500';
 $ttime24='0600';

$fe="select time from pulptime where date='$update'";
$fet=mysqli_query($connection,$fe);
$fetc=mysqli_fetch_array($fet);

if($fetc!=NULL)
{
    

    $query="select * from pulptime where date='$update' and time='$ttime1'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso1=$fetch[2] $bbsp11=fetch[3] $bbsp31=fetch[4] $pph1=fetch[5] $ccp1=fetch[6] $wwhiteness1=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime2'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso2=$fetch[2] $bbsp12=fetch[3] $bbsp32=fetch[4] $pph2=fetch[5] $ccp2=fetch[6] $wwhiteness2=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime3'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso3=$fetch[2] $bbsp13=fetch[3] $bbsp33=fetch[4] $pph3=fetch[5] $ccp3=fetch[6] $wwhiteness3=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime4'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso4=$fetch[2] $bbsp14=fetch[3] $bbsp34=fetch[4] $pph4=fetch[5] $ccp4=fetch[6] $wwhiteness4=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime5'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso5=$fetch[2] $bbsp15=fetch[3] $bbsp35=fetch[4] $pph5=fetch[5] $ccp5=fetch[6] $wwhiteness5=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime6'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso6=$fetch[2] $bbsp16=fetch[3] $bbsp36=fetch[4] $pph6=fetch[5] $ccp6=fetch[6] $wwhiteness6=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime7'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso7=$fetch[2] $bbsp17=fetch[3] $bbsp37=fetch[4] $pph7=fetch[5] $ccp7=fetch[6] $wwhiteness7=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime8'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso8=$fetch[2] $bbsp18=fetch[3] $bbsp38=fetch[4] $pph8=fetch[5] $ccp8=fetch[6] $wwhiteness8=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime9'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso9=$fetch[2] $bbsp19=fetch[3] $bbsp39=fetch[4] $pph9=fetch[5] $ccp9=fetch[6] $wwhiteness9=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime10'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso10=$fetch[2] $bbsp110=fetch[3] $bbsp310=fetch[4] $pph10=fetch[5] $ccp10=fetch[6] $wwhiteness10=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime11'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso11=$fetch[2] $bbsp111=fetch[3] $bbsp311=fetch[4] $pph11=fetch[5] $ccp11=fetch[6] $wwhiteness11=fetch[7]
    
        
   
  $query="select * from pulptime where date='$update' and time='$ttime12'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso12=$fetch[2] $bbsp112=fetch[3] $bbsp312=fetch[4] $pph12=fetch[5] $ccp12=fetch[6] $wwhiteness12=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime13'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso13=$fetch[2] $bbsp113=fetch[3] $bbsp313=fetch[4] $pph13=fetch[5] $ccp13=fetch[6] $wwhiteness13=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime14'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso14=$fetch[2] $bbsp114=fetch[3] $bbsp314=fetch[4] $pph14=fetch[5] $ccp14=fetch[6] $wwhiteness14=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime15'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso15=$fetch[2] $bbsp115=fetch[3] $bbsp315=fetch[4] $pph15=fetch[5] $ccp15=fetch[6] $wwhiteness15=fetch[7]
    
    
        
    $query="select * from pulptime where date='$update' and time='$ttime16'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso16=$fetch[2] $bbsp116=fetch[3] $bbsp316=fetch[4] $pph16=fetch[5] $ccp16=fetch[6] $wwhiteness16=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime17'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso17=$fetch[2] $bbsp117=fetch[3] $bbsp317=fetch[4] $pph17=fetch[5] $ccp17=fetch[6] $wwhiteness17=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime18'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso18=$fetch[2] $bbsp118=fetch[3] $bbsp318=fetch[4] $pph18=fetch[5] $ccp18=fetch[6] $wwhiteness18=fetch[7]
        
        
    $query="select * from pulptime where date='$update' and time='$ttime19'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso19=$fetch[2] $bbsp119=fetch[3] $bbsp319=fetch[4] $pph19=fetch[5] $ccp19=fetch[6] $wwhiteness19=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime20'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso20=$fetch[2] $bbsp120=fetch[3] $bbsp320=fetch[4] $pph20=fetch[5] $ccp20=fetch[6] $wwhiteness20=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime21'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso21=$fetch[2] $bbsp121=fetch[3] $bbsp321=fetch[4] $pph21=fetch[5] $ccp21=fetch[6] $wwhiteness21=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime22'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso22=$fetch[2] $bbsp122=fetch[3] $bbsp322=fetch[4] $pph22=fetch[5] $ccp22=fetch[6] $wwhiteness22=fetch[7]
        
    $query="select * from pulptime where date='$update' and time='$ttime23'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso23=$fetch[2] $bbsp123=fetch[3] $bbsp323=fetch[4] $pph23=fetch[5] $ccp23=fetch[6] $wwhiteness23=fetch[7]
    
        
    $query="select * from pulptime where date='$update' and time='$ttime24'";
    $run=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($run);
    $iiso24=$fetch[2] $bbsp124=fetch[3] $bbsp324=fetch[4] $pph24=fetch[5] $ccp24=fetch[6] $wwhiteness24=fetch[7]

header("location:home1.php");

}
else{
    header("location:home2.php");
}