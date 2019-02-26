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
            
            
sum=brightnessiso1+brightnessiso2+brightnessiso3+brightnessiso4+brightnessiso5+brightnessiso6+brightnessiso7+brightnessiso8+brightnessiso9+brightnessiso10+brightnessiso11+brightnessiso12+brightnessiso13+brightnessiso14+brightnessiso15+brightnessiso16+brightnessiso17+brightnessiso18+brightnessiso19+brightnessiso20+brightnessiso21+brightnessiso22+brightnessiso23+brightnessiso24;
  
            
           
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
        
    </script>
    
  
    </head>

<body>

<table id="pulp1">
  <tr>
    <th width="25%" colspan="2">Bleach Thickener</th>
     <th width="3%" rowspan="3"  >&nbsp;</th>
    <th width="70%" colspan="4">Loose Pulp</th>
      <th><p id="date"><?php echo date('d M Y');?></p></th>
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
    </table><br /><br /><br /><br /><br /><br /><br /><br />
    <form name="pulpdata" action="update.php" method="post" >
  
    
    <table id="pulp">
    <tr>
    <td width="12%">0700</td>  
    <td width="14%"><input type="number" id="brightnessiso1"      name="brightnessiso" onkeyup="avg()"\> </td>
    <td rowspan="33" width="3%" >&nbsp;</td>
    <td width="14.4%"><input type="number" id="bsp11" name="bsp1" onkeyup="avg1()">  </td>  
    <td width="14.4%"><input type="number" id="bsp31" name="bsp3"onkeyup="avg2()"  \> </td> 
    <td width="14.4%"><input type="number" id="ph1" name="ph"onkeyup="avg3()"\> </td>  
    <td width="14.4%"><input type="number" id="cp1" name="cp"onkeyup="avg4()"\> </td>
    <td width="14.4%"><input type="number" id="berger1" name="berger"onkeyup="avg5()" \> </td>
     </tr>
    
     <tr>
    <td>0800</td>  
    <td><input type="number" id="brightnessiso2"      name="brightnessiso" onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp12" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp32" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph2" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp2" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger2" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
     <tr>
    <td>0900</td>  
    <td><input type="number" id="brightnessiso3"      name="brightnessiso"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp13" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp33" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph3" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp3" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger3" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1000</td>  
    <td><input type="number" id="brightnessiso4"      name="brightnessiso"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp14" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp34" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph4" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp4" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger4" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1100</td>  
    <td><input type="number" id="brightnessiso5"      name="brightnessiso"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp15" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp35" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph5" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp5" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger5" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1200</td>  
    <td><input type="number" id="brightnessiso6"      name="brightnessiso"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp16" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp36" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph6" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp6" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger6" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1300</td>  
    <td><input type="number" id="brightnessiso7"      name="brightnessiso"onkeyup="avg()"\> </td>
    
    <td><input type="number" id="bsp17" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp37" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph7" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp7" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger7" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1400</td>  
    <td><input type="number" id="brightnessiso8"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp18" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp38" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph8" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp8" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger8" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1500</td>  
    <td><input type="number" id="brightnessiso9"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp19" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp39" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph9" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp9" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger9" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1600</td>  
    <td><input type="number" id="brightnessiso10"      name="brightnessiso"onkeyup="avg()"\> </td>
   
    <td><input type="number" id="bsp110" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp310" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph10" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp10" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger10" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1700</td>  
    <td><input type="number" id="brightnessiso11"      name="brightnessiso"onkeyup="avg()"\> </td>
   
    <td><input type="number" id="bsp111" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp311" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph11" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp11" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger11" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1800</td>  
    <td><input type="number" id="brightnessiso12"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp112" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp312" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph12" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp12" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger12" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>1900</td>  
    <td><input type="number" id="brightnessiso13"      name="brightnessiso"onkeyup="avg()"\> </td>
  
    <td><input type="number" id="bsp113" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp313" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph13" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp13" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger13" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>2000</td>  
    <td><input type="number" id="brightnessiso14"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp114" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp314" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph14" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp14" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger14" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>2100</td>  
    <td><input type="number" id="brightnessiso15"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp115" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp315" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph15" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp15" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger15" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>2200</td>  
    <td><input type="number" id="brightnessiso16"      name="brightnessiso"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp116" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp316" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph16" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp16" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger16" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>2300</td>  
    <td><input type="number" id="brightnessiso17"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp117" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp317" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph17" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp17" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger17" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0000</td>  
    <td><input type="number" id="brightnessiso18"      name="brightnessiso"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp118" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp318" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph18" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp18" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger18" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0100</td>  
    <td><input type="number" id="brightnessiso19"      name="brightnessiso"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp119" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp319" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph19" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp19" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger19" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0200</td>  
    <td><input type="number" id="brightnessiso20"      name="brightnessiso"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp120" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp320" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph20" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp20" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger20" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0300</td>  
    <td><input type="number" id="brightnessiso21"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp121" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp321" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph21" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp21" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger21" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0400</td>  
    <td><input type="number" id="brightnessiso22"      name="brightnessiso"onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp122" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp322" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph22" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp22" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger22" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0500</td>  
    <td><input type="number" id="brightnessiso23"      name="brightnessiso"onkeyup="avg()"\> </td>
 
    <td><input type="number" id="bsp123" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp323" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph23" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp23" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger23" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    <tr>
    <td>0600</td>  
    <td><input type="number" id="brightnessiso24"      name="brightnessiso" onkeyup="avg()"\> </td>

    <td><input type="number" id="bsp124" name="bsp1" onkeyup="avg1()">  </td>  
    <td><input type="number" id="bsp324" name="bsp3"onkeyup="avg2()" \> </td> 
    <td><input type="number" id="ph24" name="ph"onkeyup="avg3()"\> </td>  
    <td><input type="number" id="cp24" name="cp"onkeyup="avg4()"\> </td>
    <td><input type="number" id="berger24" name="berger"onkeyup="avg5()" \> </td>
    </tr>
    
    </table><br />
    
    <table id="pulp">
     <tr>
    <td width="12%">AVG</td>  
    <td width="14%"><input type="text" id="brightnessiso25"      name="brightnessiso" readonly="readonly" \> </td>
    <td rowspan="33" width="3%" >&nbsp;</td>     
    <td width="14.4%"><input type="text" id="bsp1avg" name="bsp1"  readonly="readonly"\>  </td>  
    <td width="14.4%"><input type="text" id="bsp3avg" name="bsp3" readonly="readonly"\> </td> 
    <td width="14.4%"><input type="text" id="phavg" name="ph" readonly="readonly"\> </td>  
    <td width="14.4%"><input type="text" id="cpavg" name="cp" readonly ="readonly"\> </td>
    <td width="14.4%"><input type="text" id="bergeravg" name="berger" readonly="readonly"\> </td>
    </tr>
 
    <tr>
    <td>MIN</td>  
    <td><input type="text" id="brightnessiso26"      name="brightnessiso" readonly="readonly" \> </td>

    <td><input type="text" id="bsp1min" name="bsp1" readonly="readonly" \>  </td>  
    <td><input type="text" id="bsp3min" name="bsp3" readonly="readonly"> </td> 
    <td><input type="text" id="phmin" name="ph" readonly="readonly"\> </td>  
    <td><input type="text" id="cpmin" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergermin" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td>MAX</td>  
    <td><input type="text" id="brightnessisomax"      name="brightnessiso" readonly="readonly"\> </td>

    <td><input type="text" id="bsp1max" name="bsp1" readonly="readonly"\>  </td>  
    <td><input type="text" id="bsp3max" name="bsp3" readonly="readonly"\> </td> 
    <td><input type="text" id="phmax" name="ph" readonly="readonly"\> </td>  
    <td><input type="text" id="cpmax" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergermax" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td>S.D.</td>  
    <td><input type="text" id="brightnessisosd"      name="brightnessiso" readonly="readonly"\> </td>

    <td><input type="text" id="bsp1sd" name="bsp1" readonly="readonly"\>  </td>  
    <td><input type="text" id="bsp3sd" name="bsp3" readonly="readonly"\> </td> 
    <td><input type="text" id="phsd" name="ph"readonly="readonly"\> </td>  
    <td><input type="text" id="cpsd" name="cp" readonly="readonly"\> </td>
    <td><input type="text" id="bergersd" name="berger" readonly="readonly"\> </td>
    </tr>
    
    <tr>
    <td>%CV</td>  
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
    <center> <input type="date" ></center><br />
    <center> <button class="Button"  onclick="submit">View</button></center>
</body> 
</html>