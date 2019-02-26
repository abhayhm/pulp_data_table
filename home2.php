<html>
<head>
    <title>day-wise-pulp-data</title>
<style>
    .button {
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    align-self: center;
    
}
#pulp {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: auto;
    overflow: hidden;
    width: 100%;

}

#pulp td, #pulp th {
    border: 1px solid black;
    padding: 4px;
    text-align: center;
}

#pulp tr:nth-child(even){background-color: #f2f2f2;}

#pulp tr:hover {background-color: #ddd;}

#pulp th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: white;
    color: black;
}
    
    #pulp1 {
    
    position: fixed;    
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
        overflow: hidden;
        height: 20%;
        width: 99%;
}

#pulp1 td, #pulp1 th {
    border: 2px solid black;
    padding: 8px;
    text-align: center;
}

#pulp1 tr:nth-child(even){background-color: #f2f2f2;}

#pulp1 tr:hover {background-color: #ddd;}

#pulp1 th {
    padding-top: 4px;
    padding-bottom: 4px;
    text-align: center;
    background-color: white;
    color: black;
}
    
        #pulp2 {
    
    position: fixed;    
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
        overflow: hidden;
        
        width: 99%;
}

#pulp2 td, #pulp2 th {
    border-top: 2px solid black;
    padding: 8px;
    text-align: center;
}

#pulp2 tr:nth-child(even){background-color: #f2f2f2;}

#pulp2 tr:hover {background-color: #ddd;}

#pulp2 th {
    padding-top: 1px;
    padding-bottom: 1px;
    text-align: center;
    background-color: white;
    color: black;
}
</style>
    
    <?php
   $fe="select time from pulptime where date='$date'";
$fet=mysqli_query($connection,$fe);
$fetc=mysqli_fetch_array($fet);

if($fetc!=NULL){
    header(location:home1.php)
}
        ?>
        <script>
            
            

        function avg(){
        
         brightnessiso1=Number(document.getElementById("brightnessiso1").value);
         brightnessiso2=Number(document.getElementById("brightnessiso2").value);
         brightnessiso3=Number(document.getElementById("brightnessiso3").value);
         brightnessiso4=Number(document.getElementById("brightnessiso4").value);
         brightnessiso5=Number(document.getElementById("brightnessiso5").value);
         brightnessiso6=Number(document.getElementById("brightnessiso6").value);
         brightnessiso7=Number(document.getElementById("brightnessiso7").value);
         brightnessiso8=Number(document.getElementById("brightnessiso8").value);
         brightnessiso9=Number(document.getElementById("brightnessiso9").value);
         brightnessiso10=Number(document.getElementById("brightnessiso10").value);
         brightnessiso11=Number(document.getElementById("brightnessiso11").value);
         brightnessiso12=Number(document.getElementById("brightnessiso12").value);
         brightnessiso13=Number(document.getElementById("brightnessiso13").value);
         brightnessiso14=Number(document.getElementById("brightnessiso14").value);
         brightnessiso15=Number(document.getElementById("brightnessiso15").value);
         brightnessiso16=Number(document.getElementById("brightnessiso16").value);
         brightnessiso17=Number(document.getElementById("brightnessiso17").value);
         brightnessiso18=Number(document.getElementById("brightnessiso18").value);
         brightnessiso19=Number(document.getElementById("brightnessiso19").value);
         brightnessiso20=Number(document.getElementById("brightnessiso20").value);
         brightnessiso21=Number(document.getElementById("brightnessiso21").value);
         brightnessiso22=Number(document.getElementById("brightnessiso22").value);  
         brightnessiso24=Number(document.getElementById("brightnessiso24").value);
         brightnessiso23=Number(document.getElementById("brightnessiso23").value);
            
            
var sum=brightnessiso1+brightnessiso2+brightnessiso3+brightnessiso4+brightnessiso5+brightnessiso6+brightnessiso7+brightnessiso8+brightnessiso9+brightnessiso10+brightnessiso11+brightnessiso12+brightnessiso13+brightnessiso14+brightnessiso15+brightnessiso16+brightnessiso17+brightnessiso18+brightnessiso19+brightnessiso20+brightnessiso21+brightnessiso22+brightnessiso23+brightnessiso24;
  
            
           
                c=sum/24;
            
            document.getElementById('brightnessisoavg').value=c; 
      
            
            document.getElementById('brightnessisomin').value=Math.min(brightnessiso1,brightnessiso2,brightnessiso3,brightnessiso4,brightnessiso5,brightnessiso6,brightnessiso7,brightnessiso8,brightnessiso9,brightnessiso10,brightnessiso11,brightnessiso12,brightnessiso13,brightnessiso14,brightnessiso15,brightnessiso16,brightnessiso17,brightnessiso18,brightnessiso19,brightnessiso20,brightnessiso21,brightnessiso22,brightnessiso23,brightnessiso24);
            
             document.getElementById('brightnessisomax').value=Math.max(brightnessiso1,brightnessiso2,brightnessiso3,brightnessiso4,brightnessiso5,brightnessiso6,brightnessiso7,brightnessiso8,brightnessiso9,brightnessiso10,brightnessiso11,brightnessiso12,brightnessiso13,brightnessiso14,brightnessiso15,brightnessiso16,brightnessiso17,brightnessiso18,brightnessiso19,brightnessiso20,brightnessiso21,brightnessiso22,brightnessiso23,brightnessiso24);
       document.getElementById('brightnessisosd').value=Math.std(brightnessiso1,brightnessiso2,brightnessiso3,brightnessiso4,brightnessiso5,brightnessiso6,brightnessiso7,brightnessiso8,brightnessiso9,brightnessiso10,brightnessiso11,brightnessiso12,brightnessiso13,brightnessiso14,brightnessiso15,brightnessiso16,brightnessiso17,brightnessiso18,brightnessiso19,brightnessiso20,brightnessiso21,brightnessiso22,brightnessiso23,brightnessiso24);
        
        }
        
           function avg1(){
                
         bsp11=Number(document.getElementById("bsp11").value);
         bsp12=Number(document.getElementById("bsp12").value);
         bsp13=Number(document.getElementById("bsp13").value);
         bsp14=Number(document.getElementById("bsp14").value);
         bsp15=Number(document.getElementById("bsp15").value);
         bsp16=Number(document.getElementById("bsp16").value);
         bsp17=Number(document.getElementById("bsp17").value);
         bsp18=Number(document.getElementById("bsp18").value);
         bsp19=Number(document.getElementById("bsp19").value);
         bsp110=Number(document.getElementById("bsp110").value);
         bsp111=Number(document.getElementById("bsp111").value);
         bsp112=Number(document.getElementById("bsp112").value);
         bsp113=Number(document.getElementById("bsp113").value);
         bsp114=Number(document.getElementById("bsp114").value);
         bsp115=Number(document.getElementById("bsp115").value);
         bsp116=Number(document.getElementById("bsp116").value);
         bsp117=Number(document.getElementById("bsp117").value);
         bsp118=Number(document.getElementById("bsp118").value);
         bsp119=Number(document.getElementById("bsp119").value);
         bsp120=Number(document.getElementById("bsp120").value);
         bsp121=Number(document.getElementById("bsp121").value);
         bsp122=Number(document.getElementById("bsp122").value);  
         bsp124=Number(document.getElementById("bsp124").value);
         bsp123=Number(document.getElementById("bsp123").value);
            
            
sum5=bsp11+bsp12+bsp13+bsp14+bsp15+bsp16+bsp17+bsp18+bsp19+bsp110+bsp111+bsp112+bsp113+bsp114+bsp115+bsp116+bsp117+bsp118+bsp119+bsp120+bsp121+bsp122+bsp123+bsp124;
                
                 c5=sum5/24;
            
            document.getElementById('bsp1avg').value=c5;
               
               document.getElementById('bsp1min').value=Math.min(bsp11,bsp12,bsp13,bsp14,bsp15,bsp16,bsp17,bsp18,bsp19,bsp110,bsp111,bsp112,bsp113,bsp114,bsp115,bsp116,bsp117,bsp118,bsp119,bsp120,bsp121,bsp122,bsp123,bsp124);
               document.getElementById('bsp1max').value=Math.max(bsp11,bsp12,bsp13,bsp14,bsp15,bsp16,bsp17,bsp18,bsp19,bsp110,bsp111,bsp112,bsp113,bsp114,bsp115,bsp116,bsp117,bsp118,bsp119,bsp120,bsp121,bsp122,bsp123,bsp124);
            }
            
            
            
            function avg2(){
         bsp31=Number(document.getElementById("bsp31").value);
         bsp32=Number(document.getElementById("bsp32").value);
         bsp33=Number(document.getElementById("bsp33").value);
         bsp34=Number(document.getElementById("bsp34").value);
         bsp35=Number(document.getElementById("bsp35").value);
         bsp36=Number(document.getElementById("bsp36").value);
         bsp37=Number(document.getElementById("bsp37").value);
         bsp38=Number(document.getElementById("bsp38").value);
         bsp39=Number(document.getElementById("bsp39").value);
         bsp310=Number(document.getElementById("bsp310").value);
         bsp311=Number(document.getElementById("bsp311").value);
         bsp312=Number(document.getElementById("bsp312").value);
         bsp313=Number(document.getElementById("bsp313").value);
         bsp314=Number(document.getElementById("bsp314").value);
         bsp315=Number(document.getElementById("bsp315").value);
         bsp316=Number(document.getElementById("bsp316").value);
         bsp317=Number(document.getElementById("bsp317").value);
         bsp318=Number(document.getElementById("bsp318").value);
         bsp319=Number(document.getElementById("bsp319").value);
         bsp320=Number(document.getElementById("bsp320").value);
         bsp321=Number(document.getElementById("bsp321").value);
         bsp322=Number(document.getElementById("bsp322").value);  
         bsp324=Number(document.getElementById("bsp324").value);
         bsp323=Number(document.getElementById("bsp323").value);
            
            
sum1=bsp31+bsp32+bsp33+bsp34+bsp35+bsp36+bsp37+bsp38+bsp39+bsp310+bsp311+bsp312+bsp313+bsp314+bsp315+bsp316+bsp317+bsp318+bsp319+bsp320+bsp321+bsp322+bsp323+bsp324;
                
                 c1=sum1/24;
            
            document.getElementById('bsp3avg').value=c1;
                
                document.getElementById('bsp3min').value=Math.min(bsp31,bsp32,bsp33,bsp34,bsp35,bsp36,bsp37,bsp38,bsp39,bsp310,bsp311,bsp312,bsp313,bsp314,bsp315,bsp316,bsp317,bsp318,bsp319,bsp320,bsp321,bsp322,bsp323,bsp324);
                document.getElementById('bsp3max').value=Math.max(bsp31,bsp32,bsp33,bsp34,bsp35,bsp36,bsp37,bsp38,bsp39,bsp310,bsp311,bsp312,bsp313,bsp314,bsp315,bsp316,bsp317,bsp318,bsp319,bsp320,bsp321,bsp322,bsp323,bsp324);
            
            }
            
            function avg3()
            {
         ph1=Number(document.getElementById("ph1").value);
         ph2=Number(document.getElementById("ph2").value);
         ph3=Number(document.getElementById("ph3").value);
         ph4=Number(document.getElementById("ph4").value);
         ph5=Number(document.getElementById("ph5").value);
         ph6=Number(document.getElementById("ph6").value);
         ph7=Number(document.getElementById("ph7").value);
         ph8=Number(document.getElementById("ph8").value);
         ph9=Number(document.getElementById("ph9").value);
         ph10=Number(document.getElementById("ph10").value);
         ph11=Number(document.getElementById("ph11").value);
         ph12=Number(document.getElementById("ph12").value);
         ph13=Number(document.getElementById("ph13").value);
         ph14=Number(document.getElementById("ph14").value);
         ph15=Number(document.getElementById("ph15").value);
         ph16=Number(document.getElementById("ph16").value);
         ph17=Number(document.getElementById("ph17").value);
         ph18=Number(document.getElementById("ph18").value);
         ph19=Number(document.getElementById("ph19").value);
         ph20=Number(document.getElementById("ph20").value);
         ph21=Number(document.getElementById("ph21").value);
         ph22=Number(document.getElementById("ph22").value);  
         ph24=Number(document.getElementById("ph24").value);
         ph23=Number(document.getElementById("ph23").value);
            
            
sum2=ph1+ph2+ph3+ph4+ph5+ph6+ph7+ph8+ph9+ph10+ph11+ph12+ph13+ph14+ph15+ph16+ph17+ph18+ph19+ph20+ph21+ph22+ph23+ph24;
               c2=sum2/24;
            
            document.getElementById('phavg').value=c2;
            
                 document.getElementById('phmin').value=Math.min(ph1,ph2,ph3,ph4,ph5,ph6,ph7,ph8,ph9,ph10,ph11,ph12,ph13,ph14,ph15,ph16,ph17,ph18,ph19,ph20,ph21,ph22,ph23,ph24);
                document.getElementById('phmax').value=Math.max(ph1,ph2,ph3,ph4,ph5,ph6,ph7,ph8,ph9,ph10,ph11,ph12,ph13,ph14,ph15,ph16,ph17,ph18,ph19,ph20,ph21,ph22,ph23,ph24);
            } 
            
            function avg4(){
                                
                
                

         cp1=Number(document.getElementById("cp1").value);
         cp2=Number(document.getElementById("cp2").value);
         cp3=Number(document.getElementById("cp3").value);
         cp4=Number(document.getElementById("cp4").value);
         cp5=Number(document.getElementById("cp5").value);
         cp6=Number(document.getElementById("cp6").value);
         cp7=Number(document.getElementById("cp7").value);
         cp8=Number(document.getElementById("cp8").value);
         cp9=Number(document.getElementById("cp9").value);
         cp10=Number(document.getElementById("cp10").value);
         cp11=Number(document.getElementById("cp11").value);
         cp12=Number(document.getElementById("cp12").value);
         cp13=Number(document.getElementById("cp13").value);
         cp14=Number(document.getElementById("cp14").value);
         cp15=Number(document.getElementById("cp15").value);
         cp16=Number(document.getElementById("cp16").value);
         cp17=Number(document.getElementById("cp17").value);
         cp18=Number(document.getElementById("cp18").value);
         cp19=Number(document.getElementById("cp19").value);
         cp20=Number(document.getElementById("cp20").value);
         cp21=Number(document.getElementById("cp21").value);
         cp22=Number(document.getElementById("cp22").value);  
         cp24=Number(document.getElementById("cp24").value);
         cp23=Number(document.getElementById("cp23").value);
            
            
sum3=cp1+cp2+cp3+cp4+cp5+cp6+cp7+cp8+cp9+cp10+cp11+cp12+cp13+cp14+cp15+cp16+cp17+cp18+cp19+cp20+cp21+cp22+cp23+cp24;
               c3=sum3/24;
            
            document.getElementById('cpavg').value=c3;
                
                document.getElementById('cpmin').value=Math.min(cp1,cp2,cp3,cp4,cp5,cp6,cp7,cp8,cp9,cp10,cp11,cp12,cp13,cp14,cp15,cp16,cp17,cp18,cp19,cp20,cp21,cp22,cp23,cp24);
                document.getElementById('cpmax').value=Math.max(cp1,cp2,cp3,cp4,cp5,cp6,cp7,cp8,cp9,cp10,cp11,cp12,cp13,cp14,cp15,cp16,cp17,cp18,cp19,cp20,cp21,cp22,cp23,cp24);
            }
            
            function avg5()
            {
            
                      berger1=Number(document.getElementById("berger1").value);
         berger2=Number(document.getElementById("berger2").value);
         berger3=Number(document.getElementById("berger3").value);
         berger4=Number(document.getElementById("berger4").value);
         berger5=Number(document.getElementById("berger5").value);
         berger6=Number(document.getElementById("berger6").value);
         berger7=Number(document.getElementById("berger7").value);
         berger8=Number(document.getElementById("berger8").value);
         berger9=Number(document.getElementById("berger9").value);
         berger10=Number(document.getElementById("berger10").value);
         berger11=Number(document.getElementById("berger11").value);
         berger12=Number(document.getElementById("berger12").value);
         berger13=Number(document.getElementById("berger13").value);
         berger14=Number(document.getElementById("berger14").value);
         berger15=Number(document.getElementById("berger15").value);
         berger16=Number(document.getElementById("berger16").value);
         berger17=Number(document.getElementById("berger17").value);
         berger18=Number(document.getElementById("berger18").value);
         berger19=Number(document.getElementById("berger19").value);
         berger20=Number(document.getElementById("berger20").value);
         berger21=Number(document.getElementById("berger21").value);
         berger22=Number(document.getElementById("berger22").value);  
         berger24=Number(document.getElementById("berger24").value);
         berger23=Number(document.getElementById("berger23").value);
            
            
sum4=berger1+berger2+berger3+berger4+berger5+berger6+berger7+berger8+berger9+berger10+berger11+berger12+berger13+berger14+berger15+berger16+berger17+berger18+berger19+berger20+berger21+berger22+berger23+berger24;
               c4=sum4/24;
            
            document.getElementById('bergeravg').value=c4;  
            
           document.getElementById('bergermin').value=Math.min(berger1,berger2,berger3,berger4,berger5,berger6,berger7,berger8,berger9,berger10,berger11,berger12,berger13,berger14,berger15,berger16,berger17,berger18,berger19,berger20,berger21,berger22,berger23,berger24);
                document.getElementById('bergermax').value=Math.max(berger1,berger2,berger3,berger4,berger5,berger6,berger7,berger8,berger9,berger10,berger11,berger12,berger13,berger14,berger15,berger16,berger17,berger18,berger19,berger20,berger21,berger22,berger23,berger24);
            
            }
            
        
        
             function curdate(){
        
                var d=new Date();
                
                document.getElementById('date').value=d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();
          
            
      }
    </script>
    
  
    </head>

    
    
<body onload="curdate()" >
 <form name="pulpdata" action="update.php" method="post"  >
<table id="pulp1">
  <tr>
    <th width="25%" colspan="2">Bleach Thickener</th>
     <th width="3%" rowspan="3"  >&nbsp;</th>
    <th width="70%" colspan="4">Loose Pulp</th>
      <th><input type="text" id="date" name="date" readonly="readonly"></th>
      
  </tr>
  <tr>
    <th width="12%" rowspan="2">Time</th>
    <th width="14%" rowspan="2">Brightness, % ISO</th>
   
    <th width="28%" colspan="2">%DC</th>
    <th width="14%" rowspan="2">pH</th>
    <th width="14%" rowspan="2">Viscosity cP</th>
    <th width="14%" rowspan="2">Whiteness</th>  
      
  </tr>
  <tr>
      
    <th width="14.4%">BSP 1&2</th>
    <th width="14.4%">BSP 3</th>
    
  </tr>
    </table><br /><br /><br /><br /><br /><br /><br /><br /><br />
   
  
    
    <table id="pulp">
    <tr>
    <td width="12%"><input type="text"id="time1" name="time1"value="0700" readonly="readonly"></td>  
    <td width="14%"><input type="number" id="brightnessiso1"      name="brightnessiso1" onkeyup="avg()"\> </td>
    <td rowspan="33" width="3%" >&nbsp;</td>
    <td width="14.4%"><input type="number" id="bsp11" name="bsp11" onkeyup="avg1()">  </td>  
    <td width="14.4%"><input type="number" id="bsp31" name="bsp31"onkeyup="avg2()"  \> </td> 
    <td width="14.1%"><input type="number" id="ph1" name="ph1"onkeyup="avg3()"\> </td>  
    <td width="14.1%"><input type="number" id="cp1" name="cp1"onkeyup="avg4()"\> </td>
    <td width="14.10%"><input type="number" id="berger1" name="berger1"onkeyup="avg5()" \> </td>
     </tr>
    
     <tr>
    <td><input type="text"id="time2" name="time2"  value="0800" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso2"      name="brightnessiso2" onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp12" name="bsp12" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp32" name="bsp32"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph2" name="ph2"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp2" name="cp2"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger2" name="berger2"onkeyup="avg5()" \> </td>
    </tr>
    
     <tr>
    <td><input type="text"id="time3"  name="time3" value="0900" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso3"      name="brightnessiso3"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp13" name="bsp13" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp33" name="bsp33"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph3" name="ph3"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp3" name="cp3"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger3" name="berger3"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time4" name="time4"value="1000" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso4"      name="brightnessiso4"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp14" name="bsp14" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp34" name="bsp34"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph4" name="ph4"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp4" name="cp4"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger4" name="berger4"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time5" name="time5"value="1100" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso5"      name="brightnessiso5"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp15" name="bsp15" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp35" name="bsp35"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph5" name="ph5"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp5" name="cp5"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger5" name="berger5"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time6" name="time6" value="1200" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso6"      name="brightnessiso6"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp16" name="bsp16" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp36" name="bsp36"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph6" name="ph6"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp6" name="cp6"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger6" name="berger6"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time7"name="time7" value="1300" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso7"      name="brightnessiso7"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp17" name="bsp17" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp37" name="bsp37"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph7" name="ph7"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp7" name="cp7"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger7" name="berger7"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time8"name="time8" value="1400" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso8"      name="brightnessiso8"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp18" name="bsp18" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp38" name="bsp38"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph8" name="ph8"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp8" name="cp8"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger8" name="berger8"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time9"name="time9"value="1500" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso9"      name="brightnessiso9"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp19" name="bsp19" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp39" name="bsp39"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph9" name="ph9"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp9" name="cp9"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger9" name="berger9"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time10"name="time10" value="1600" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso10"      name="brightnessiso10"onkeyup="avg()"\> </td>
   
    <td><input type="number" id="bsp110" name="bsp110" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp310" name="bsp310"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph10" name="ph10"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp10" name="cp10"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger10" name="berger10"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time11"name="time11"value="1700" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso11"      name="brightnessiso11"onkeyup="avg()"\> </td>
   
    <td><input type="number" id="bsp111" name="bsp111" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp311" name="bsp311"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph11" name="ph11"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp11" name="cp11"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger11" name="berger11"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time12"name="time12" value="1800" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso12"      name="brightnessiso12"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp112" name="bsp112" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp312" name="bsp312"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph12" name="ph12"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp12" name="cp12"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger12" name="berger12"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time13"name="time13" value="1900" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso13"      name="brightnessiso13"onkeyup="avg()"\> </td>
  
    <td><input type="number" id="bsp113" name="bsp113" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp313" name="bsp313"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph13" name="ph13"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp13" name="cp13"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger13" name="berger13"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time14"name="time14" value="2000" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso14"      name="brightnessiso14"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp114" name="bsp114" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp314" name="bsp314"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph14" name="ph14"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp14" name="cp14"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger14" name="berger14"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time15"name="time15" value="2100" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso15" name="brightnessiso15" onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp115" name="bsp115" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp315" name="bsp315"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph15" name="ph15"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp15" name="cp15"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger15" name="berger15"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time16" name="time16"value="2200" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso16"      name="brightnessiso16"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp116" name="bsp116" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp316" name="bsp316"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph16" name="ph16"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp16" name="cp16"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger16" name="berger16"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time17" name="time17"value="2300" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso17"      name="brightnessiso17"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp117" name="bsp117" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp317" name="bsp317"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph17" name="ph17"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp17" name="cp17"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger17" name="berger17"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time18"name="time18" value="0000" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso18"      name="brightnessiso18"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp118" name="bsp118" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp318" name="bsp318"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph18" name="ph18"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp18" name="cp18"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger18" name="berger18"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time19"name="time19" value="0100" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso19"      name="brightnessiso19"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp119" name="bsp119" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp319" name="bsp319"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph19" name="ph19"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp19" name="cp19"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger19" name="berger19"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time20" name="time20"value="0200" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso20"      name="brightnessiso20"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp120" name="bsp120" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp320" name="bsp320"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph20" name="ph20"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp20" name="cp20"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger20" name="berger20"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time21"name="time21" value="0300" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso21"      name="brightnessiso21"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp121" name="bsp121" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp321" name="bsp321"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph21" name="ph21"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp21" name="cp21"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger21" name="berger21"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text"id="time22"name="time22" value="0400" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso22"      name="brightnessiso22"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp122" name="bsp122" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp322" name="bsp322"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph22" name="ph22"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp22" name="cp22"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger22" name="berger22"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="test" id="time23" name="time23" value="0500" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso23"      name="brightnessiso23"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp123" name="bsp123" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp323" name="bsp323"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph23" name="ph23"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp23" name="cp23"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger23" name="berger23"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="time24" name="time24"value="0600" readonly="readonly"></td>  
    <td><input type="number" id="brightnessiso24"      name="brightnessiso24" onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp124" name="bsp124" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp324" name="bsp324"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph24" name="ph24"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp24" name="cp24"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger24" name="berger24"onkeyup="avg5()" \> </td>
    </tr>
    
    </table><br />
    
    <table id="pulp">
     <tr>
    <td width="12%"><input type="text" name="timeavg" id="timeavg" value="avg" readonly="readonly"></td>  
    <td width="14%"><input type="text" id="brightnessisoavg"      name="brightnessiso" readonly="readonly" \> </td>
    <td rowspan="33" width="3%" >&nbsp;</td>     
    <td width="14.4%"><input type="text" id="bsp1avg" name="bsp1"  readonly="readonly"\>  </td>  
    <td width="14.4%"><input type="text" id="bsp3avg" name="bsp3" readonly="readonly"\> </td> 
    <td width="14.1%"><input type="text" id="phavg" name="ph" readonly="readonly"\> </td>  
    <td width="14.1%"><input type="text" id="cpavg" name="cp" readonly ="readonly"\> </td>
    <td width="14.10%"><input type="text" id="bergeravg" name="berger" readonly="readonly"\> </td>
    </tr>
 
    <tr>
    <td><input type="text" id="timemin" name="timemin" value="min" readonly="readonly"></td>  
    <td><input type="text" id="brightnessisomin"      name="brightnessiso" readonly="readonly" \> </td>

    <td><input type="text" id="bsp1min" name="bsp1" readonly="readonly" \>  </td>  
    <td><input type="text" id="bsp3min" name="bsp3" readonly="readonly"> </td> 
    <td><input type="text" id="phmin" name="ph" readonly="readonly"\> </td>  
    <td><input type="text" id="cpmin" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergermin" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td><input type="text"  id="timemax"  name="timemax" value="max" readonly="readonly"></td>  
    <td><input type="text" id="brightnessisomax"      name="brightnessiso" readonly="readonly"\> </td>

    <td><input type="text" id="bsp1max" name="bsp1" readonly="readonly"\>  </td>  
    <td><input type="text" id="bsp3max" name="bsp3" readonly="readonly"\> </td> 
    <td><input type="text" id="phmax" name="ph" readonly="readonly"\> </td>  
    <td><input type="text" id="cpmax" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergermax" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="timesd" name="timesd" value="s.d." readonly="readonly"></td>  
    <td><input type="text" id="brightnessisosd"      name="brightnessiso" readonly="readonly"\> </td>

    <td><input type="text" id="bsp1sd" name="bsp1" readonly="readonly"\>  </td>  
    <td><input type="text" id="bsp3sd" name="bsp3" readonly="readonly"\> </td> 
    <td><input type="text" id="phsd" name="ph"readonly="readonly"\> </td>  
    <td><input type="text" id="cpsd" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergersd" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td><input type="text" id="timecv" name="timecv" value="cv%" readonly="readonly"></td>  
    <td><input type="text" id="brightnessisocv"      name="brightnessiso" readonly="readonly"\> </td>

    <td><input type="text" id="bsp1cv" name="bsp1" readonly="readonly"\>  </td>  
    <td><input type="text" id="bsp3cv" name="bsp3" readonly="readonly"\> </td> 
    <td><input type="text" id="phcv" name="ph" readonly="readonly"\> </td>  
    <td><input type="text" id="cpcv" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergercv" name="berger" readonly="readonly"\> </td>
    </tr>
    
    
    
    </table><br />
    
        <center> <button class="Button" action="submit">Update</button></center>
    </form>
        
        <br />
    <form action="date.php" method="get">
    <center> <input type="date" id="update" name="update"></center><br />
    <center> <button class="Button"  onclick="submit">View</button></center>
    </form>
        
        </body> 
</html>