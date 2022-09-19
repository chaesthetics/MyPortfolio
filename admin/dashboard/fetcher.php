<?php 
include "../config.php";

$sqlfname = "SELECT sfirstname FROM usertable WHERE sid1 = 1";
$resultfname = mysqli_query($conn, $sqlfname) or die("query unsuccesful");
if(mysqli_num_rows($resultfname)>0){
    while($rowfname = mysqli_fetch_assoc($resultfname)){
        $_SESSION['currentuser'] = $rowfname['sfirstname'];
    }
}

$sqlabout = "SELECT about FROM userinfo WHERE infoid = 1";
$resultabout = mysqli_query($conn, $sqlabout) or die("query unsuccesful");
if(mysqli_num_rows($resultabout)>0){
    while($rowabout = mysqli_fetch_assoc($resultabout)){
        $_SESSION['about'] = $rowabout['about'];
    }
}

$sqldegree1 = "SELECT degree1 FROM schoolinfo WHERE schoolid = 1";
$resultdegree1 = mysqli_query($conn, $sqldegree1) or die("query unsuccesful");
if(mysqli_num_rows($resultdegree1)>0){
    while($rowdegree1 = mysqli_fetch_assoc($resultdegree1)){
        $_SESSION['degree1'] = $rowdegree1['degree1'];
    }
}

$sqlyear1 = "SELECT year1 FROM schoolinfo WHERE schoolid = 1";
$resultyear1 = mysqli_query($conn, $sqlyear1) or die("query unsuccesful");
if(mysqli_num_rows($resultyear1)>0){
    while($rowyear1 = mysqli_fetch_assoc($resultyear1)){
        $_SESSION['year1'] = $rowyear1['year1'];
    }
}

$sqldescription1 = "SELECT description1 FROM schoolinfo WHERE schoolid = 1";
$resultdescription1 = mysqli_query($conn, $sqldescription1) or die("query unsuccesful");
if(mysqli_num_rows($resultdescription1)>0){
    while($rowdescription1 = mysqli_fetch_assoc($resultdescription1)){
        $_SESSION['description1'] = $rowdescription1['description1'];
    }
}

$sqladdress1 = "SELECT address1 FROM schoolinfo WHERE schoolid = 1";
$resultaddress1 = mysqli_query($conn, $sqladdress1) or die("query unsuccesful");
if(mysqli_num_rows($resultaddress1)>0){
    while($rowaddress1 = mysqli_fetch_assoc($resultaddress1)){
        $_SESSION['address1'] = $rowaddress1['address1'];
    }
}


$sqldegree2 = "SELECT degree2 FROM schoolinfo WHERE schoolid = 1";
$resultdegree2 = mysqli_query($conn, $sqldegree2) or die("query unsuccesful");
if(mysqli_num_rows($resultdegree2)>0){
    while($rowdegree2 = mysqli_fetch_assoc($resultdegree2)){
        $_SESSION['degree2'] = $rowdegree2['degree2'];
    }
}

$sqlyear2 = "SELECT year2 FROM schoolinfo WHERE schoolid = 1";
$resultyear2 = mysqli_query($conn, $sqlyear2) or die("query unsuccesful");
if(mysqli_num_rows($resultyear2)>0){
    while($rowyear2 = mysqli_fetch_assoc($resultyear2)){
        $_SESSION['year2'] = $rowyear2['year2'];
    }
}

$sqldescription2 = "SELECT description2 FROM schoolinfo WHERE schoolid = 1";
$resultdescription2 = mysqli_query($conn, $sqldescription2) or die("query unsuccesful");
if(mysqli_num_rows($resultdescription2)>0){
    while($rowdescription2 = mysqli_fetch_assoc($resultdescription2)){
        $_SESSION['description2'] = $rowdescription2['description2'];
    }
}

$sqladdress2 = "SELECT address2 FROM schoolinfo WHERE schoolid = 1";
$resultaddress2 = mysqli_query($conn, $sqladdress2) or die("query unsuccesful");
if(mysqli_num_rows($resultaddress2)>0){
    while($rowaddress2 = mysqli_fetch_assoc($resultaddress2)){
        $_SESSION['address2'] = $rowaddress2['address2'];
    }
}


$sqldegree3 = "SELECT degree3 FROM schoolinfo WHERE schoolid = 1";
$resultdegree3 = mysqli_query($conn, $sqldegree3) or die("query unsuccesful");
if(mysqli_num_rows($resultdegree3)>0){
    while($rowdegree3 = mysqli_fetch_assoc($resultdegree3)){
        $_SESSION['degree3'] = $rowdegree3['degree3'];
    }
}

$sqlyear3 = "SELECT year3 FROM schoolinfo WHERE schoolid = 1";
$resultyear3 = mysqli_query($conn, $sqlyear3) or die("query unsuccesful");
if(mysqli_num_rows($resultyear3)>0){
    while($rowyear3 = mysqli_fetch_assoc($resultyear3)){
        $_SESSION['year3'] = $rowyear3['year3'];
    }
}

$sqldescription3 = "SELECT description3 FROM schoolinfo WHERE schoolid = 1";
$resultdescription3 = mysqli_query($conn, $sqldescription3) or die("query unsuccesful");
if(mysqli_num_rows($resultdescription3)>0){
    while($rowdescription3 = mysqli_fetch_assoc($resultdescription3)){
        $_SESSION['description3'] = $rowdescription3['description3'];
    }
}

$sqladdress3 = "SELECT address3 FROM schoolinfo WHERE schoolid = 1";
$resultaddress3 = mysqli_query($conn, $sqladdress3) or die("query unsuccesful");
if(mysqli_num_rows($resultaddress3)>0){
    while($rowaddress3 = mysqli_fetch_assoc($resultaddress3)){
        $_SESSION['address3'] = $rowaddress3['address3'];
    }
}

$sqlsfirstname= "SELECT sfirstname FROM usertable WHERE sid1 = 1";
$resultsfirstname = mysqli_query($conn, $sqlsfirstname) or die("query unsuccesful");
if(mysqli_num_rows($resultsfirstname)>0){
    while($rowsfirstname = mysqli_fetch_assoc($resultsfirstname)){
        $_SESSION['sfirstname'] = $rowsfirstname['sfirstname'];
    }
}

$sqlslastname= "SELECT slastname FROM usertable WHERE sid1 = 1";
$resultslastname = mysqli_query($conn, $sqlslastname) or die("query unsuccesful");
if(mysqli_num_rows($resultslastname)>0){
    while($rowslastname = mysqli_fetch_assoc($resultslastname)){
        $_SESSION['slastname'] = $rowslastname['slastname'];
    }
}

$sqlcountry= "SELECT country FROM userinfo WHERE infoid = 1";
$resultcountry = mysqli_query($conn, $sqlcountry) or die("query unsuccesful");
if(mysqli_num_rows($resultcountry)>0){
    while($rowcountry = mysqli_fetch_assoc($resultcountry)){
        $_SESSION['country'] = $rowcountry['country'];
    }
}

$sqlcity= "SELECT city FROM userinfo WHERE infoid = 1";
$resultcity = mysqli_query($conn, $sqlcity) or die("query unsuccesful");
if(mysqli_num_rows($resultcity)>0){
    while($rowcity = mysqli_fetch_assoc($resultcity)){
        $_SESSION['city'] = $rowcity['city'];
    }
}

$sqlsaddress= "SELECT saddress FROM userinfo WHERE infoid = 1";
$resultsaddress = mysqli_query($conn, $sqlsaddress) or die("query unsuccesful");
if(mysqli_num_rows($resultsaddress)>0){
    while($rowsaddress = mysqli_fetch_assoc($resultsaddress)){
        $_SESSION['saddress'] = $rowsaddress['saddress'];
    }
}

$sqlpostalcode= "SELECT postalcode FROM userinfo WHERE infoid = 1";
$resultpostalcode = mysqli_query($conn, $sqlpostalcode) or die("query unsuccesful");
if(mysqli_num_rows($resultpostalcode)>0){
    while($rowpostalcode = mysqli_fetch_assoc($resultpostalcode)){
        $_SESSION['postalcode'] = $rowpostalcode['postalcode'];
    }
}
$sqlsemailadd= "SELECT semailadd FROM usertable WHERE sid1 = 1";
$resultsemailadd = mysqli_query($conn, $sqlsemailadd) or die("query unsuccesful");
if(mysqli_num_rows($resultsemailadd)>0){
    while($rowsemailadd = mysqli_fetch_assoc($resultsemailadd)){
        $_SESSION['semailadd'] = $rowsemailadd['semailadd'];
    }
}
$sqlsnumber= "SELECT snumber FROM userinfo WHERE infoid = 1";
$resultsnumber = mysqli_query($conn, $sqlsnumber) or die("query unsuccesful");
if(mysqli_num_rows($resultsnumber)>0){
    while($rowsnumber = mysqli_fetch_assoc($resultsnumber)){
        $_SESSION['snumber'] = $rowsnumber['snumber'];
    }
}
$sqlsname= "SELECT sname FROM usertable WHERE sid1 = 1";
$resultsname = mysqli_query($conn, $sqlsname) or die("query unsuccesful");
if(mysqli_num_rows($resultsname)>0){
    while($rowsname = mysqli_fetch_assoc($resultsname)){
        $_SESSION['sname'] = $rowsname['sname'];
    }
}

?>