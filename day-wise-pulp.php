<html>
<head>
    <title>day-wise-pulp-data</title>
<style>
#pulp {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
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
</head>
<body>

<table id="pulp1">
  <tr>
    <th width="25%" colspan="2">Bleach Thickener</th>
     <th width="3%" rowspan="3"  >&nbsp;</th>
    <th colspan="70%">Loose Pulp</th>
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
    
    <table id="pulp2">
    <tr>
        <th columnspan="8">&nbsp;</th>
        </tr>
    </table><br /><br /><br />
    
    <table id="pulp">
    <tr>
    <td width="17%">0700</td>  
    <td width="4%"><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    <td rowspan="33" width="4%" >&nbsp;</td>
    <td width="14.4%"><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td width="14.4%"><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td width="14.4%"><input type="number" id="ph" name="ph"\> </td>  
    <td width="14.4%"><input type="number" id="cp" name="cp"\> </td>
    <td width="14.4%"><input type="number" id="berger" name="berger"\> </td>
     </tr>
    
     <tr>
    <td>0800</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
     <tr>
    <td>0900</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1000</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1100</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1200</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1300</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1400</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1500</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1600</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
   
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1700</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
   
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1800</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>1900</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
  
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>2000</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>2100</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>2200</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>2300</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0000</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0100</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0200</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0300</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0400</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0500</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
 
    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>0600</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    </table><br />
    
    <table id="pulp">
     <tr>
    <td width="17%">AVG</td>  
    <td width="4%"><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>
    <td rowspan="33" width="4%" >&nbsp;</td>     
    <td width="14.4%"><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td width="14.4%"><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td width="14.4%"><input type="number" id="ph" name="ph"\> </td>  
    <td width="14.4%"><input type="number" id="cp" name="cp"\> </td>
    <td width="14.4%"><input type="number" id="berger" name="berger"\> </td>
    </tr>
 
    <tr>
    <td>MIN</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>MAX</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>S.D.</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    <tr>
    <td>%CV</td>  
    <td><input type="number" id="brightnessiso"      name="brightnessiso"\> </td>

    <td><input type="number" id="bsp1" name="bsp1"\>  </td>  
    <td><input type="number" id="bsp3" name="bsp3"\> </td> 
    <td><input type="number" id="ph" name="ph"\> </td>  
    <td><input type="number" id="cp" name="cp"\> </td>
    <td><input type="number" id="berger" name="berger"\> </td>
    </tr>
    
    
    
    </table>

</body> 
</html>