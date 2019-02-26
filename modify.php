<?php
$connection=mysqli_connect('localhost','root','','pulp');
if (!$connection)
{
    die("Connection error: ".mysqli_connect_error());
}

$date=$_POST['date'];



 $time1=$_POST['time1']??'';
 $time2=$_POST['time2']??'';
 $time3=$_POST['time3']??'';
 $time4=$_POST['time4']??'';
 $time5=$_POST['time5']??'';
 $time6=$_POST['time6']??'';
 $time7=$_POST['time7']??'';
 $time8=$_POST['time8']??'';
 $time9=$_POST['time9']??'';
 $time10=$_POST['time10']??'';
 $time11=$_POST['time11']??'';
 $time12=$_POST['time12']??'';
 $time13=$_POST['time13']??'';
 $time14=$_POST['time14']??'';
 $time15=$_POST['time15']??'';
 $time16=$_POST['time16']??'';
 $time17=$_POST['time17']??'';
 $time18=$_POST['time18']??'';
 $time19=$_POST['time19']??'';
 $time20=$_POST['time20']??'';
 $time21=$_POST['time21']??'';
 $time22=$_POST['time22']??'';
 $time23=$_POST['time23']??'';
 $time24=$_POST['time24']??'';
  

     $iso1=$_POST['brightnessiso1']??'';
     $iso2=$_POST['brightnessiso2']??'';
     $iso3=$_POST['brightnessiso3']??'';
     $iso4=$_POST['brightnessiso4']??'';
     $iso5=$_POST['brightnessiso5']??'';
     $iso6=$_POST['brightnessiso6']??'';
     $iso7=$_POST['brightnessiso7']??'';
     $iso8=$_POST['brightnessiso8']??'';
     $iso9=$_POST['brightnessiso9']??'';
     $iso10=$_POST['brightnessiso10']??'';
     $iso11=$_POST['brightnessiso11']??'';
     $iso12=$_POST['brightnessiso12']??'';
     $iso13=$_POST['brightnessiso13']??'';
     $iso14=$_POST['brightnessiso14']??'';
     $iso15=$_POST['brightnessiso15']??'';
     $iso16=$_POST['brightnessiso16']??'';
     $iso17=$_POST['brightnessiso17']??'';
     $iso18=$_POST['brightnessiso18']??'';
     $iso19=$_POST['brightnessiso19']??'';
     $iso20=$_POST['brightnessiso20']??'';
     $iso21=$_POST['brightnessiso21']??'';
     $iso22=$_POST['brightnessiso22']??'';
     $iso23=$_POST['brightnessiso23']??'';
     $iso24=$_POST['brightnessiso24']??'';
    

$bnsp11=$_POST['bsp11']??'';
$bnsp12=$_POST['bsp12']??'';
$bnsp13=$_POST['bsp13']??'';
$bnsp14=$_POST['bsp14']??'';
$bnsp15=$_POST['bsp15']??'';
$bnsp16=$_POST['bsp16']??'';
$bnsp17=$_POST['bsp17']??'';
$bnsp18=$_POST['bsp18']??'';
$bnsp19=$_POST['bsp19']??'';
$bnsp110=$_POST['bsp110']??'';
$bnsp111=$_POST['bsp111']??'';
$bnsp112=$_POST['bsp112']??'';
$bnsp113=$_POST['bsp113']??'';
$bnsp114=$_POST['bsp114']??'';
$bnsp115=$_POST['bsp115']??'';
$bnsp116=$_POST['bsp116']??'';
$bnsp117=$_POST['bsp117']??'';
$bnsp118=$_POST['bsp118']??'';
$bnsp119=$_POST['bsp119']??'';
$bnsp120=$_POST['bsp120']??'';
$bnsp121=$_POST['bsp121']??'';
$bnsp122=$_POST['bsp122']??'';
$bnsp123=$_POST['bsp123']??'';
$bnsp124=$_POST['bsp124']??'';


$bnsp31=$_POST['bsp31']??'';
$bnsp32=$_POST['bsp32']??'';
$bnsp33=$_POST['bsp33']??'';
$bnsp34=$_POST['bsp34']??'';
$bnsp35=$_POST['bsp35']??'';
$bnsp36=$_POST['bsp36']??'';
$bnsp37=$_POST['bsp37']??'';
$bnsp38=$_POST['bsp38']??'';
$bnsp39=$_POST['bsp39']??'';
$bnsp310=$_POST['bsp310']??'';
$bnsp311=$_POST['bsp311']??'';
$bnsp312=$_POST['bsp312']??'';
$bnsp313=$_POST['bsp313']??'';
$bnsp314=$_POST['bsp314']??'';
$bnsp315=$_POST['bsp315']??'';
$bnsp316=$_POST['bsp316']??'';
$bnsp317=$_POST['bsp317']??'';
$bnsp318=$_POST['bsp318']??'';
$bnsp319=$_POST['bsp319']??'';
$bnsp320=$_POST['bsp320']??'';
$bnsp321=$_POST['bsp321']??'';
$bnsp322=$_POST['bsp322']??'';
$bnsp323=$_POST['bsp323']??'';
$bnsp324=$_POST['bsp324']??'';


 $ph1=$_POST['ph1']??'';
 $ph2=$_POST['ph2']??'';
 $ph3=$_POST['ph3']??'';
 $ph4=$_POST['ph4']??'';
 $ph5=$_POST['ph5']??'';
 $ph6=$_POST['ph6']??'';
 $ph7=$_POST['ph7']??'';
 $ph8=$_POST['ph8']??'';
 $ph9=$_POST['ph9']??'';
 $ph10=$_POST['ph10']??'';
 $ph11=$_POST['ph11']??'';
 $ph12=$_POST['ph12']??'';
 $ph13=$_POST['ph13']??'';
 $ph14=$_POST['ph14']??'';
$ph15=$_POST['ph15']??'';
 $ph16=$_POST['ph16']??'';
 $ph17=$_POST['ph17']??'';
 $ph18=$_POST['ph18']??'';
 $ph19=$_POST['ph19']??'';
 $ph20=$_POST['ph20']??'';
 $ph21=$_POST['ph21']??'';
 $ph22=$_POST['ph22']??'';
 $ph23=$_POST['ph23']??'';
 $ph24=$_POST['ph24']??'';
 

 $cp1=$_POST['cp1']??'';
 $cp2=$_POST['cp2']??'';
 $cp3=$_POST['cp3']??'';
 $cp4=$_POST['cp4']??'';
 $cp5=$_POST['cp5']??'';
 $cp6=$_POST['cp6']??'';
 $cp7=$_POST['cp7']??'';
 $cp8=$_POST['cp8']??'';
 $cp9=$_POST['cp9']??'';
 $cp10=$_POST['cp10']??'';
 $cp11=$_POST['cp11']??'';
 $cp12=$_POST['cp12']??'';
 $cp13=$_POST['cp13']??'';
 $cp14=$_POST['cp14']??'';
 $cp15=$_POST['cp15']??'';
 $cp16=$_POST['cp16']??'';
 $cp17=$_POST['cp17']??'';
 $cp18=$_POST['cp18']??'';
 $cp19=$_POST['cp19']??'';
 $cp20=$_POST['cp20']??'';
 $cp21=$_POST['cp21']??'';
 $cp22=$_POST['cp22']??'';
 $cp23=$_POST['cp23']??'';
 $cp24=$_POST['cp24']??'';


 $whiteness1=$_POST['berger1']??'';
 $whiteness2=$_POST['berger2']??'';
 $whiteness3=$_POST['berger3']??'';
$whiteness4=$_POST['berger4']??'';
$whiteness5=$_POST['berger5']??'';
 $whiteness6=$_POST['berger6']??'';
 $whiteness7=$_POST['berger7']??'';
 $whiteness8=$_POST['berger8']??'';
 $whiteness9=$_POST['berger9']??'';
 $whiteness10=$_POST['berger10']??'';
 $whiteness11=$_POST['berger11']??'';
$whiteness12=$_POST['berger12']??'';
$whiteness13=$_POST['berger13']??'';
 $whiteness14=$_POST['berger14']??'';
 $whiteness15=$_POST['berger15']??'';
 $whiteness16=$_POST['berger16']??'';
$whiteness17=$_POST['berger17']??'';
 $whiteness18=$_POST['berger18']??'';
 $whiteness19=$_POST['berger19']??'';
$whiteness20=$_POST['berger20']??'';
 $whiteness21=$_POST['berger21']??'';
$whiteness22=$_POST['berger22']??'';
 $whiteness23=$_POST['berger23']??'';
 $whiteness24=$_POST['berger24']??'';




$query1="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time1','$iso1','$bnsp11','$bnsp31','$ph1','$cp1','$whiteness1')";
$run=mysqli_query($connection,$query1)or die('Error');

$query2="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time2','$iso2','$bnsp12','$bnsp32','$ph2','$cp2','$whiteness2')";
$run=mysqli_query($connection,$query2)or die('Error');

$query3="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time3','$iso3','$bnsp13','$bnsp33','$ph3','$cp3','$whiteness3')";
$run=mysqli_query($connection,$query3)or die('Error');

$query4="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time4','$iso4','$bnsp14','$bnsp34','$ph4','$cp4','$whiteness4')";
$run=mysqli_query($connection,$query4)or die('Error');
    
$query5="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time5','$iso5','$bnsp15','$bnsp35','$ph5','$cp5','$whiteness5')";
$run=mysqli_query($connection,$query5)or die('Error');

$query6="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time6','$iso6','$bnsp16','$bnsp36','$ph6','$cp6','$whiteness6')";
$run=mysqli_query($connection,$query6)or die('Error');
    
 $query7="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time7','$iso7','$bnsp17','$bnsp37','$ph7','$cp7','$whiteness7')";
$run=mysqli_query($connection,$query7)or die('Error');

$query8="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time8','$iso8','$bnsp18','$bnsp38','$ph8','$cp8','$whiteness8')";
$run=mysqli_query($connection,$query8)or die('Error');

$query9="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time9','$iso9','$bnsp19','$bnsp39','$ph9','$cp9','$whiteness9')";
$run=mysqli_query($connection,$query9)or die('Error');

$query10="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time10','$iso10','$bnsp110','$bnsp310','$ph10','$cp10','$whiteness10')";
$run=mysqli_query($connection,$query10)or die('Error');

$query11="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time11','$iso11','$bnsp111','$bnsp311','$ph11','$cp11','$whiteness11')";
$run=mysqli_query($connection,$query11)or die('Error');
    
$query12="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time12','$iso12','$bnsp112','$bnsp312','$ph12','$cp12','$whiteness12')";
$run=mysqli_query($connection,$query12)or die('Error');

$query13="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time13','$iso13','$bnsp113','$bnsp313','$ph13','$cp13','$whiteness13')";
$run=mysqli_query($connection,$query13)or die('Error');
    
 $query14="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time14','$iso14','$bnsp114','$bnsp314','$ph14','$cp14','$whiteness14')";
$run=mysqli_query($connection,$query14)or die('Error');





$query15="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time15','$iso15','$bnsp115','$bnsp315','$ph15','$cp15','$whiteness15')";
$run=mysqli_query($connection,$query15)or die('Error');
    
$query16="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time16','$iso16','$bnsp116','$bnsp316','$ph16','$cp16','$whiteness16')";
$run=mysqli_query($connection,$query16)or die('Error');

$query17="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time17','$iso17','$bnsp117','$bnsp317','$ph17','$cp17','$whiteness17')";
$run=mysqli_query($connection,$query17)or die('Error');
    
$query18="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time18','$iso18','$bnsp118','$bnsp318','$ph18','$cp18','$whiteness18')";
$run=mysqli_query($connection,$query18)or die('Error');

$query19="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time19','$iso19','$bnsp119','$bnsp319','$ph19','$cp19','$whiteness19')";
$run=mysqli_query($connection,$query19)or die('Error');
    
 $query20="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time20','$iso20','$bnsp120','$bnsp320','$ph20','$cp20','$whiteness20')";
$run=mysqli_query($connection,$query20)or die('Error');


$query21="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time21','$iso21','$bnsp121','$bnsp321','$ph21','$cp21','$whiteness21')";
$run=mysqli_query($connection,$query21)or die('Error');

$query22="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time22','$iso22','$bnsp122','$bnsp322','$ph22','$cp22','$whiteness22')";
$run=mysqli_query($connection,$query22)or die('Error');
    
 $query23="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time23','$iso23','$bnsp123','$bnsp323','$ph23','$cp23','$whiteness23')";
$run=mysqli_query($connection,$query23)or die('Error');


$query24="insert into pulptime(date,time,brightness,bsp1,bsp3,ph,cp,whiteness)values('$date','$time24','$iso24','$bnsp124','$bnsp324','$ph24','$cp24','$whiteness24')";
$run=mysqli_query($connection,$query24)or die('Error');


?>