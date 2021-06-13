<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" http-equiv="Content-Type" content="text/html; charset=UTF-8 ,width=device-width, initial-scale=1.0">
<title>RACK ESTIMATION</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
<?php
if(isset($_POST["Quality"])){
$radioVal1 = $_POST["Quality"];
$radioVal2 = $_POST["PQuality"];
$radioVal3 = $_POST["wk"];
$height = ((float)$_POST["rh"]/3.25);
$npanels = (float)$_POST["np"];
$pdepth = ((float)$_POST["pd"]/12);
$plength = ((float)$_POST["pl"]/12);

$nuts=$npanels*8;

$kooni=72;

$wp=70;
    
$cost=0;




if($radioVal1 == "Alight")
{
            if($radioVal2 == "Plight")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                        
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if ($radioVal2 == "Pmedium")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if($radioVal2 == "Pheavy")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*41*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
}
else if ($radioVal1 == "Amedium")
{
            if($radioVal2 == "Plight")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*65*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*65*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if ($radioVal2 == "Pmedium")
                {
                    if($radioVal3 == "with")
                    {
                         $cost=($height*65*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$kooni+$wp;
                         //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                         $cost=($height*65*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if($radioVal2 == "Pheavy")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*65*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*65*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
}
else if($radioVal1 == "Aheavy")
{
            if($radioVal2 == "Plight")
                {
                    if($radioVal3 == "with")
                    {
                       $cost=($height*78*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*78*4)+(($npanels*($pdepth*$plength))*46)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if ($radioVal2 == "Pmedium")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*78*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*78*4)+(($npanels*($pdepth*$plength))*54)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
            else if($radioVal2 == "Pheavy")
                {
                    if($radioVal3 == "with")
                    {
                        $cost=($height*78*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$kooni+$wp;
                        //echo($cost);
                    }
                    else if($radioVal3 == "without")
                    {
                        $cost=($height*78*4)+(($npanels*($pdepth*$plength))*72)+($nuts*2)+$wp;
                        //echo($cost);
                    }
                }
}
}
   
?>
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>RACK ESTIMATION</a></h1>
		<form id="form_21914" class="appnitro"  method="POST" action="#">
            <div class="form_description">
			<h2>RACK ESTIMATION</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_6" >
		<label class="description" for="element_6">Quality Angle </label>
		<span>
			<input  name="Quality"  type="radio"   value="Alight" checked="checked"/>
            <label class="choice" for="element_6_1">Light</label>
            <input  name="Quality" type="radio" value="Amedium"/>
            <label class="choice" for="element_6_2">Medium</label>
            <input  name="Quality"  type="radio" value="Aheavy"/>
           <label class="choice" for="element_6_3">Heavy</label>

		</span> 
		</li>	
                <li id="li_9" >
		<label class="description" for="element_9"> Panel Quality </label>
		<span>
			<input  name="PQuality"  type="radio"  checked="checked" value="Plight"/>
            <label class="choice" for="element_9_1">Light</label>
            <input  name="PQuality" type="radio" value="Pmedium"/>
            <label class="choice" for="element_9_2">Medium</label>
            <input  name="PQuality"  type="radio" value="Pheavy"/>
           <label class="choice" for="element_9_3">Heavy</label>

		</span> 
		</li>
	    <li id="li_1" >
		<label class="description" for="element_1">RACK HEIGHT </label>
		<div>
			<input name="rh" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">NUMBER OF PANELS </label>
		<div>
			<input  name="np" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">PANEL DEPTH </label>
		<div>
			<input  name="pd" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">PANEL LENGTH </label>
		<div>
			<input  name="pl" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">CORNERS </label>
		<span>
			<input  name="wk"  type="radio" value="with" checked="checked"/>
<label class="choice" for="element_9_1">WITH CORNER</label>
<input  name="wk"  type="radio" value="without" />
<label class="choice" for="element_9_2">WITHOUT CORNER</label>

		</span> 
		</li>		
        <li id="li_5" >
		<label class="description" for="element_5"><?php if(isset($cost)){echo "<script>alert('Your Costing is: ".$cost."');window.location.replace('index.php'); </script>";} ?></label>
		 
		</li>
			
					<li class="buttons">
			    <button >CALCULATE THE COST</button>
		</li>
			</ul>
            
            <p id="demo"></p>
		</form>	
		<div id="footer">
			Generated by Rishab
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
  
</html>