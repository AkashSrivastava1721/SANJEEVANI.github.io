<!DOCTYPE html>
<html>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body
        {
                background-image: url(background.jpg);
                background-position: center;
                background-size: cover;
                font-family: sans-serif;
                margin-top: 80px;
                margin-bottom: 40px;
        }
    body
    .ans
    {
        text-align: center;
        margin:250px;
        background-color:  rgb(0,0,0,0.5);
        color: white;
        font-family: sans-serif;
        padding: 10px 0px 10px 0px;
        border-radius: 15px 15px 15px 15px;
        font-size: 25px;
    }
</style>
<body>
<div class= ans>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
//$mail=$_REQUEST['email'];
//$phno=$_REQUEST['phno'];
//$loc=$_REQUEST['location'];
$temp =$_POST['Body_Temperature'];
$headache = $_POST['Headache'];
$bodypain = $_POST['Body_Pain'];
$easeofsneeze = $_POST['Ease_of_Sneeze'];
$drycough= $_POST['Dry_Cough'];
$throatpain= $_POST['Throat_Pain'];
$suffocation= $_POST['Suffocation'];
$smellpower= $_POST['Smell_Power'];
$tastepower= $_POST['Taste_Power'];
$stomachpain= $_POST['Stomach_Pain'];
$bodyweakness= $_POST['Body_Weakness'];
$mentalweakness= $_POST['Mental_Weakness'];
$skinrash= $_POST['Skin_Rashes'];
$breathinglevel= $_POST['Breathing_Level'];
$usingac= $_POST['Using_AC_at_home'];
$age= $_POST['Age'];
$zone= $_POST['Zone'];
$sleep= $_POST['Sleep'];
$in19= $_POST['in19'];
$healthinput = array($temp,$headache,$bodypain,$easeofsneeze,$drycough,$throatpain,$suffocation,$smellpower,$tastepower,$stomachpain,$bodyweakness,$mentalweakness,
$skinrash,$breathinglevel,$usingac,$age,$zone,$sleep,$in19);
//$personal= array($fname,$lname,$mail,$phno,$loc);
$wt=array(0.052177,0.052421,0.052142,0.052153,0.053012,.0569111,0.052768,0.0525601,0.052003,0.051794,0.052420,0.0518639,0.0512548,0.0536043,0.0523512,0.052629,
0.0530474,0.52577,0.052299);
function answer($healthinput,$wt,$fname,$lname)
{
$sum=0;
$sum1=0;
for ($i=0; $i <19 ; $i++) 
{ 
    $sum=$sum+$wt[$i];
}
for ($i=0; $i <19 ; $i++) 
{ 
    $sum1=$sum1+$wt[$i]*$healthinput[$i];
}
$p= $sum1/$sum*100;
if ($p<=40) 
{
    
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p % <br>";
    echo "You are at safe condition.<br>";
}
if ($p>40 AND $p<=50) 
{
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p % <br>";
    echo "You are safe but it is advisable to hava immunity building stuffs like vitamin c and citric fruits <br>";
}
if ($p>50 AND $p<=60) 
{
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p % <br>";
    echo "According to prediction you have symtoms of flue so consult your nearest hospital/clinic for medicines <br>";
}
if ($p>60 AND $p<=70) 
{
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p %<br>";
    echo "You are at the stage of viral fever and it is recomended that you quarintine yourself for atleast 14 days <br>";
}
if ($p>70 AND $p<=80) 
{
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p %<br>";
    echo "You should test your Covid-19 test within in a week <br>";
}
if ($p>80) 
{
    echo "<h2>Hello $fname $lname</h2>";
    echo "Your Probablity of Covid-19 infection is $p % <br>";
    echo "You are corona infected hence immediately test youself for COVID-19 <br>";
}
}
answer($healthinput,$wt,$fname,$lname);
?>
</div>
</body>

</html>
