<!DOCTYPE html>
<!--
Κωνσταντίνος Κολοτούρος (2022201800090)
Λάμπρος Γραμματικόπουλος (2022201800038)
-->
<html>
    <head>
            <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
            <style>
                body{           
                    font-family: sans-serif;
                    background: #34495e
                }
                .box{
                    width: 500px;
                    border-radius: 14px;
                    background: #191919;
                    text-align: center; 
                }
                .box2{
                    width: 500px;
                    border-radius: 14px;
                    background: #7F8C8D;
                    text-align:left; 
                }
                .box h1{
                    color: white;
                    text-transform: uppercase;
                    font-weight: 500;
                     }
                .box2 h2{
                    color: white;
                    text-transform: uppercase;
                    font-weight: 500;
                     }     
                .box input[type = "text"],.box input[type = "password"]{
                    border:0;
                    background: none;
                    display: block;
                    margin: 5px auto;
                    text-align: center;
                    border: 2px solid #3498db;
                    padding: 14px 10px;
                    width: 200px;
                    outline: none;
                    color: white;
                    border-radius: 24px;
                    transition: 0.25s;
                }
               .box2 input[type = "text"]{
                   /* border:0;
                    background: none;
                    display: block;
                    margin: 5px auto;
                    text-align:left;
                    border: 2px solid #3498db;
                    padding: 14px 10px;
                    width: 200px;
                    outline: none;
                    color: white;
                    border-radius: 24px;
                    transition: 0.25s;*/
                   text-align: center;
                }
                .box2 input[type = "checkbox"]{
                   /* border:0;
                    background: none;
                    display: block;
                    margin: 5px auto;
                   text-align:left;
                    border: 2px solid #3498db;
                    padding: 14px 10px;
                    width: 200px;
                    outline: none;
                    color: white;
                    border-radius: 24px;
                    transition: 0.25s;*/
                }
                
                .box input[type = "number"],.box input[type = "password"]{
                    border:0;
                    background: none;
                    display: block;
                    margin: 5px auto;
                    text-align: center;
                    border: 2px solid #3498db;
                    padding: 14px 10px;
                    width: 200px;
                    outline: none;
                    color: white;
                    border-radius: 24px;
                    transition: 0.25s;
                }
                .box input[type = "text"]:focus,.box input[type = "password"]:focus{
                    width: 280px;
                    border-color: #2ecc71;
                }
                .box input[type = "number"]:focus,.box input[type = "password"]:focus{
                    width: 280px;
                    border-color: #2ecc71;
                }
                
                caption { 
                  display: table-caption;
                  text-align: center;
                  font-size: 25px;
                  background-color:powderblue;
                }
                .button{
                    border:2px greenyellow;
                    border-radius: 10px;
                    box-shadow:0 0 34px greenyellow inset;
                    color:white;
                    font:lighter 12px Helvetica,sans-serif;
                    margin: 0 auto;
                    padding:10px 6%;
                    text-align:center;
                    text-decoration: none;
                    text-shadow:0 1px 2 px white;
                    text-transform: uppercase;
                    transition: color 0.25s ease-in-out 0s;
                }
                .text{
                    text-align: center;
                    font-size: 24px;
                    font-weight: bold;
                }
                .tabletitle{
                    font-size: 24px;
                    font-weight: bold;
                }
                .table{
                    border: 2px solid red;
                    word-wrap: break-word;
                    table-layout: fixed;
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                }
                .table1{                    /*------ table css for new tables without borders------*/
                    border: 2px #34495e;
                    word-wrap: break-word;
                    table-layout: fixed;
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                    
                    text-align: center;
                    
                    border: 1px solid #34495e;
                    border-collapse: collapse
                        
                }
                .title{
                    text-align:center;
                }
                .span1{
                    background-color: #f18973;
                }
                form{ /*-------------*/
                text-align: center;
                margin: auto;
                padding: auto;
                flex-wrap: wrap;
               }
               flex-container {
                display: flex;
 
                }
                .flexbox-item{
                    width:400px;
                    margin:10px;
                }
                .flex-item-1 {
                    min-height: 100px;
                    flex-shrink: 0;
                    }

                .flex-item-2 {
                    min-height: 200px;
                    flex-grow: 1
                    }   
                .check{
                       color:#3498db; 
                    }
                .tooltip {
                    position: relative;
                    display: inline-block;
                    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
                  }

                  /* Tooltip text */
                  .tooltip .tooltiptext {
                    visibility: hidden;
                    width: 120px;
                    background-color: black;
                    color: #fff;
                    text-align: center;
                    padding: 5px 0;
                    border-radius: 6px;
                    position: absolute;
                    z-index: 1;
                     top: -5px;
                     right: 105%;
                  }
                  .tooltip:hover .tooltiptext {
                    visibility: visible;
                  }
                  .questionmark{ /*---Erwtimatiko---*/
                      content: "\003F";
                  }/*--------------------------------------PopUps--------------------------------------------------*/
                  .show-btn{
                  border-radius: 14px;
                  background:#3498db;
                  padding: 10px 20px;
                  font-size: 20px;
                  font-weight: 500;
                  color:#34495e;
                  cursor: pointer;
                  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
                }
                .show-btn, .container{
                  position: absolute;
                  
                  transform: translate(-50%, -50%);
                }
                
                .container{
                  display: none;
                  /*margin-left: 400px;*/
                  top: 50%;
                  left: 50%;
                  border-radius: 14px;
                  background: #5C696A ;
                  width: 410px;
                  padding: 30px;
                  box-shadow: 0 0 8px rgba(0,0,0,0.1);
                }
                #show:checked ~ .container{
                  display: block;
                }
                
                /*----Den xreiazetai--------*/
                .container .close-btn{
                  position: absolute;
                  right: 20px;
                  top: 15px;
                  font-size: 18px;
                  cursor: pointer;
                }
                .container .close-btn:hover{
                  color: #3498db;
                }
                /*--------------------------*/
                .container .text{
                  font-size: 35px;
                  font-weight: 600;
                  text-align: center;
                }
                .container form{
                  margin-top: -20px;
                }
                .container form .data{
                  height: 45px;
                  width: 100%;
                  margin: 40px 0;
                }
                form .data label{
                  font-size: 18px;
                }
                form .data input{
                  height: 100%;
                  width: 100%;
                  padding-left: 10px;
                  font-size: 17px;
                  border: 1px solid silver;
                }
                form .data input:focus{
                  border-color: #3498db;
                  border-bottom-width: 2px;
                }
                form .btn{
                  margin: 30px 0;
                  height: 45px;
                  width: 100%;
                  position: relative;
                  overflow: hidden;
                }
                form .btn .inner{
                  height: 100%;
                  width: 300%;
                  position: absolute;
                  left: -100%;
                  z-index: -1;
                  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
                  transition: all 0.4s;
                }
                form .btn:hover .inner{
                  left: 0;
                }
                form .btn button{
                  height: 100%;
                  width: 100%;
                  background: none;
                  border: none;
                  color: #fff;
                  font-size: 18px;
                  font-weight: 500;
                  text-transform: uppercase;
                  letter-spacing: 1px;
                  cursor: pointer;
                }
                .form-group, .checkbox{
                    display: inline-block;
                  }
                .button1{
                    border:2px red;
                    border-radius: 10px;
                    box-shadow:0 0 34px red inset;
                    color:white;
                    font:lighter 12px Helvetica,sans-serif;
                    padding:10px 6%;
                    text-align:center;
                    text-decoration: none;
                    text-shadow:0 1px 2 px white;
                    text-transform: uppercase;
                    transition: color 0.25s ease-in-out 0s;
                    margin-right: 85% auto;
                }  
        </style>
    </head>


    <body bgcolor="5D6D7E">
        <div1 align="center">
            <h1 style="background-color:powderblue;" > Βάσεις Δεδομένων  </h1>
        </div1>
    
        <a href = "http://hilon.dit.uop.gr/~db1u08/Presentation.php" class="button1" style="font-size:15px" >&#8592 Πισω </a><br>
           <br>
               
        <div1 align="center">
            <form  action="Queries.php" method="post" value="NULL"  >  
                   <!-----------------------------------------------------------------STOCK------------------------------------------------------------------>           
                <div class="flex-container" style="display: flex;"> 
                    
                     <!---------------------------------------------------------------------PERSON------------------------------------------------------------>
                    <div class="flexbox-item flex-item-2 box2" id="person">
                         <p  style="color:powderblue; text-align: center">Queries</p>
                          
                         <!-----1---->
                            <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert1" requires>1. Παρουσιάστε τα ονόματα των οργανισμών που είναι εγγεγραμμένοι στο χρηματιστήριο με όνομα
                                </div>
                                <div class="form-group">
                                    <br><input type=text name=x1  placeholder=X><br>
                                </div>
                                <br>
                             </label>
                         <br>
                         <!-----2---->
                            <label style="color:#89CD5C" >
                                   <input type="checkbox" name="action[]" value="Insert2" requires>2. Για κάθε οργανισμό παρουσιάστε τον αριθμό των εργαζομένων του και τον αριθμό των χωρών που δραστηριοποιείται.
                                <br>
                            </label>
                         <br>
                         <!-----3---->
                         
                           <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert3" requires>3. Για κάθε επάγγελμα παρουσιάστε το συνολικό πλήθος των εργαζομένων. Στην συνέχεια παρουσιάστε το πλήθος των εργαζομένων ανά επάγγελμα και οργανισμό αλλά μόνο όταν το πλήθος είναι κάτω από.
                                </div>
                               
                                <div2 class="form-group">
                                    <div style="float:left;">
                                    <br><input type=text name=x3  placeholder=X> ή πάνω απο <br>
                                    </div>
                                    
                                    <div style="float:left;">
                                    <br><input type=text name=y3  placeholder=Υ><br>
                                    </div>
                                </div2>
                                <br>
                             </label>         
                         <br>
                         
                         <!-----4---->
                            <label style="color:#89CD5C" >
                                <input type="checkbox"  name="action[]" value="Insert4" requires>4. Να παρουσιάσετε τον πιο δημοφιλή ρόλο με τις εμφανίζεις του μαζί με τον λιγότερο δημοφιλή ρόλο με τις εμφανίσεις του.

                             <br>
                             </label>
                         
                         <br>
                         
                          <!-----5---->
                            <label style="color:#89CD5C" >
                                <input type="checkbox"  name="action[]" value="Insert5" requires>5. Να παρουσιάσετε το όνομα της δεύτερης πιο δημοφιλούς χώρας (σε αριθμό υπηκόων) και τον αριθμό των υπηκόων της.

                             <br>
                             </label>
                          <br>
                         <!-----6---->
                            <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert6" requires>6. Παρουσιάστε τους οργανισμούς που απασχολούν τα περισσότερα άτομα φύλου
                                </div>
                                <div class="form-group">
                                    <br><input type=text name=x6  placeholder=X><br>
                                </div>
                                <br>
                             </label>
                         <br>
                         <!-----7---->
                            <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert7" requires>7. Παρουσιάστε τα ονόματα των ατόμων που εργάζονται σε οργανισμό που είναι εγγεγραμμένος στο χρηματιστήριο
                                </div>
                                <div class="form-group">
                                    <br><input type=text name=x7  placeholder=X><br>
                                </div>
                                <br>
                             </label>
                         <br>   
                         <!-----8---->
                             <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert8" requires>8. Παρουσιάστε τους οργανισμούς που δραστηριοποιούνται σε περισσότερες από 
                                </div>
                               
                                <div2 class="form-group">
                                    <div style="float:left;">
                                    <br><input type=text name=x8  placeholder=X> χώρες και απασχολούν περισσότερους από <br>
                                    </div>
                                    
                                    <div style="float:left;">
                                    <br><input type=text name=y8  placeholder=Υ> εργαζόμενους.<br>
                                    </div>
                                </div2>
                                <br>
                             </label>         
                         <br>
                         <!-----9---->
                           <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert9" requires>9. Παρουσιάστε τα ονόματα των οργανισμών που έχουν δραστηριότητα στις χώρες με όνομα
                                </div>
                               
                                <div2 class="form-group">
                                    <div style="float:left;">
                                    <br><input type=text name=x9  placeholder=X> και <br>
                                    </div>
                                    
                                    <div style="float:left;">
                                    <br><input type=text name=y9 placeholder=Υ><br>
                                    </div>
                                </div2>
                                <br>
                             </label>         
                         <br>
                         <!-----10---->
                           <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert10" requires>10. Παρουσιάστε τα ονόματα των οργανισμών που συνδέονται με το χρηματιστήριο με όνομα
                                </div>
                               
                                <div2 class="form-group">
                                    <div style="float:left;">
                                    <br><input type=text name=x10  placeholder=X> αλλά όχι με το χρηματιστήριο με όνομα <br>
                                    </div>
                                    
                                    <div style="float:left;">
                                    <br><input type=text name=y10 placeholder=Υ><br>
                                    </div>
                                </div2>
                                <br>
                             </label>         
                         <br>
                         <!-----11---->
                            <label style="color:#89CD5C" >
                                <div class="checkbox">
                                   <input type="checkbox" name="action[]" value="Insert11" requires>11. Παρουσιάστε τα ονόματα των εργαζομένων του οργανισμού με όνομα
                                </div>
                                <div class="form-group">
                                    <br><input type=text name=x11  placeholder=X> που δεν είναι υπήκοοι σε χώρες που δραστηριοποιείται ο οργανισμός.<br>
                                </div>
                                <br>
                             </label>
                         <br>     
                          <!-----12---->
                            <label style="color:#89CD5C" >
                                <input type="checkbox" name="action[]" value="Insert12" requires>12. Για κάθε οργανισμό, παρουσιάστε, το όνομά του, το όνομα του χρηματιστηρίου και το όνομα των χώρων που δραστηριοποιείται.
                                <br>
                            </label>
                         <br>
                          <!-----13---->
                            <label style="color:#89CD5C" >
                                   <input type="checkbox" name="action[]" value="Insert13" requires>13. Παρουσιάστε τα άτομα που είναι υπήκοοι σε χώρες που δραστηριοποιούνται οι οργανισμοί που εργάζονται.
                                <br>
                            </label>
                         <br>
                         <!-----14---->
                            <label style="color:#89CD5C" >
                                   <input type="checkbox" name="action[]" value="Insert14" requires>14. Παρουσιάστε την ηλικία του νεώτερου εργαζόμενου σε χρόνια και το πλήθος των εργαζόμενων κάθε εταιρίας ανά χώρα προέλευσης. Ταξινομήστε ανά όνομα οργανισμού και όνομα χώρας.
                                <br>
                            </label>
                         <br>
                    </div>
                    
                        
                        
               </div>  
               <br>
                
           
               <br>
               <button class="button"; style="color:black" >Υποβολη</button><br>
                
            </form>
            
              
            
        </div1>
     <center>
        <?php
            $host = "localhost";
            $user = "db1u08";
            $pass = "safel652";
            $db = $user;
            $con = pg_connect("host=$host dbname=$db user=$user password=$pass")
                    or die ("Could not connect to server\n");
            //--------------------------------------User insertion----------------------------------------
            
            //----------------------------------------Erwtima-1------------------------------------------
            if(isset($_POST['action']) && in_array("Insert1", $_POST['action']))
            {
                if(strcmp($_POST["x1"],"") == 0)
                {
                    $_POST["x1"]="NULL";
                }
                $query_exist1 = "SELECT * FROM stockmarket";
                $query_obj =  pg_query($con, $query_exist1);
                $result1= pg_fetch_all_columns($query_obj,2);
                if(in_array($_POST["x1"],$result1,TRUE) )//----An  yparxei to Stock ston pinaka
                {
                    $resultErwt1 = pg_exec($con,"SELECT organization.name AS org 
                                                    FROM connected,stockmarket,organization
                                                    WHERE stockmarket.id=connected.stockmarketid 
                                                    AND organization.id=connected.organizationid 
                                                    AND stockmarket.name='".$_POST["x1"]."';");
                 $numrowsErwt1 = pg_numrows($resultErwt1);       
                    if($numrowsErwt1!=0)
                    {
                       echo "<br>
                               <table table class=table border=1>
                                   <caption>Query 1</caption>
                                   <tr bgcolor=F7DC6F>
                                           <th>Organization</th> 
                                   </tr>";
                                       // Loop on rows in the result set.
                                       for($ri = 0; $ri < $numrowsErwt1; $ri++) 
                                       {
                                           echo "<tr bgcolor=17A589>\n";
                                               $row = pg_fetch_array($resultErwt1, $ri);
                                                echo " <td bgcolor=17A589>", $row["org"], "</td>";
                                           echo "</tr>";
                                       }

                                       echo "</table>"
                                       . "<br>";
                    }                
                    else
                    {
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για τη μεταβλητή Χ στο ερώτημα 1</p>";
                    }  
                }
                else
                {
                    echo "<p style=color:red > Η μεταβλητή Χ στο ερώτημα 1 δεν υπάρχει στην βάση δεδομέων.</p>";
                    
                }
                
            }
            //-----------------------------------------------Erwtima-2----------------------------------------
            if(isset($_POST['action']) && in_array("Insert2", $_POST['action']))
            {
                
                
                $resultErwt2 = pg_exec($con,"SELECT DISTINCT organization.name AS org, organization.numofemployees AS employees, COUNT(operate.countryid) AS count
                                                FROM operate,organization
                                                WHERE organization.id=operate.organizationid
                                                GROUP BY organization.name,organization.numofemployees;");
                 $numrowsErwt2 = pg_numrows($resultErwt2);
                 
                 if( $numrowsErwt2!=0)
                 {
                    echo "<br>
                            <table table class=table border=1>
                                <caption>Query 2</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Organization</th> 
                                        <th>Number of employees</th> 
                                        <th>Αριθμός χωρών</th>
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt2; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt2, $ri);
                                            echo " <td bgcolor=17A589>", $row["org"], "</td>
                                                <td bgcolor=17A589>", $row["employees"], "</td>
                                                <td bgcolor=17A589>", $row["count"], "</td>" ;
                                        echo "</tr>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                }                    
                else
                {
                    echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 2</p>";
                }                    
            }
            //-----------------------------------------------Erwtima-3----------------------------------------
                                                                                                                        //Kane elegxo gia to ean einai arithmos
            if(isset($_POST['action']) && in_array("Insert3", $_POST['action']))
            {
                if(ctype_digit($_POST["x3"]) && ctype_digit($_POST["y3"]))
                {
                    $resultErwt3 = pg_exec($con,"SELECT DISTINCT professioncode AS code,organization.name AS organization, COUNT(professioncode) as number_of_workers_per_prof_and_org 
                                                FROM person,organization,related
                                                WHERE person.id=related.personid
                                                AND organization.id=related.organizationid
                                                GROUP BY professioncode,organization.name
                                                HAVING count(professioncode)>".$_POST["y3"]." and count(professioncode)<".$_POST["x3"].";");                                  
                    $numrowsErwt3 = pg_numrows($resultErwt3);
                    
                    if($numrowsErwt3!=0)       
                    {
                        echo "<br>
                            <table table class=table border=1>
                                <caption>Query 3</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Professioncode</th> 
                                        <th>Organization</th> 
                                        <th>Counts</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt3; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt3, $ri);
                                            echo " <td bgcolor=17A589>", $row["professioncode"], "</td>";
                                            echo " <td bgcolor=17A589>", $row["organization"], "</td>";
                                            echo " <td bgcolor=17A589>", $row["number_of_workers_per_prof_and_org"], "</td>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 3</p>";
                    }                
                }
                else{
                     echo "<p style=color:red > Η μεταβλητή Χ ή η μεταβλητή Υ στο ερώτημα 3 δεν είναι αριθμοί ακέραιοι.</p>";
                }
                
            }
            //-----------------------------------------------Erwtima-4----------------------------------------
            if(isset($_POST['action']) && in_array("Insert4", $_POST['action']))
            {
                
                
                $resultErwt4 = pg_exec($con,"(SELECT DISTINCT role AS role, COUNT(role) as count
                                                FROM related
                                                GROUP BY role
                                                ORDER BY COUNT(role) DESC
                                                LIMIT 1)
                                                UNION
                                                (SELECT DISTINCT role, COUNT(role)
                                                FROM related
                                                GROUP BY role
                                                ORDER BY COUNT(role) ASC
                                                LIMIT 1);");
                 $numrowsErwt4 = pg_numrows($resultErwt4);
                 
                 if($numrowsErwt4!=0)
                 {    
                    echo "<br>
                            <table table class=table border=1>
                                <caption>Query 4</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Role</th> 
                                        <th>Πλήθος</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt4; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt4, $ri);
                                                echo " <td bgcolor=17A589>", $row["role"], "</td>
                                                    <td bgcolor=17A589>", $row["count"], "</td>";
                                            
                                         echo "</tr>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                }    
                else{
                     echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 4</p>";
                }                    
            }
            //-----------------------------------------------Erwtima-5----------------------------------------
            if(isset($_POST['action']) && in_array("Insert5", $_POST['action']))
            {
                
                
                $resultErwt5 = pg_exec($con,"SELECT DISTINCT country.name AS country, COUNT(personid) AS count
                                            FROM country,citizen,person
                                            WHERE country.id=citizen.countryid AND person.id=citizen.personid
                                            GROUP BY country.name
                                            ORDER BY COUNT(personid) DESC
                                            LIMIT 1
                                            OFFSET 1;");
                 $numrowsErwt5 = pg_numrows($resultErwt5);
                
                if($numrowsErwt5!=0)
                {        
                    echo "<br>
                            <table table class=table border=1>
                                <caption>Query 5</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Country</th> 
                                        <th>Πλήθος υπηκόων</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt5; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                        $row = pg_fetch_array($resultErwt5, $ri);
                                            echo " <td bgcolor=17A589>", $row["country"], "</td>
                                                <td bgcolor=17A589>", $row["count"], "</td>";
                                        echo "</tr>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                }
                else{
                     echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 5</p>";
                }                    
            }
            //-----------------------------------------------Erwtima-6----------------------------------------
            if(isset($_POST['action']) && in_array("Insert6", $_POST['action']))
            {
                if(strcmp($_POST['x6'],"male")==0 || strcmp($_POST['x6'],"female")==0)
                {
                    $resultErwt6 = pg_exec($con,"SELECT DISTINCT organization.name AS org, COUNT(person.sex) AS count
                                                FROM organization,person,related
                                                WHERE organization.id=related.organizationid 
                                                AND person.id=related.personid
                                                GROUP BY organization.name,person.sex
                                                HAVING person.sex='".$_POST['x6']."'
                                                ORDER BY COUNT(person.sex) desc LIMIT 1;");
                     $numrowsErwt6 = pg_numrows($resultErwt6);
                   
                    if($numrowsErwt6!=0)  
                    {    
                        echo "<br>
                                <table table class=table border=1>
                                    <caption>Query 6</caption>
                                    <tr bgcolor=F7DC6F>
                                            <th>Organization</th> 
                                            <th>Genre</th> 
                                    </tr>";
                                        // Loop on rows in the result set.
                                        for($ri = 0; $ri < $numrowsErwt6; $ri++) {
                                            echo "<tr bgcolor=17A589>\n";
                                                $row = pg_fetch_array($resultErwt6, $ri);
                                                echo " <td bgcolor=17A589>", $row["org"], "</td>
                                                    <td bgcolor=17A589>", $row["count"], "</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>"
                                        . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 6</p>";
                    }                    
                }
                else
                {
                    echo "<p style=color:red > Η μεταβλητή Χ στο ερώτημα 6 πρέπει να είναι είτε 'male' είτε 'female'.</p>";
                }
                
            }
             //-----------------------------------------------Erwtima-7 ----------------------------------------
            if(isset($_POST['action']) && in_array("Insert7", $_POST['action']))
            {
                if(strcmp($_POST["x7"],"") == 0)
                {
                    $_POST["x1"]="NULL";
                }
                $query_exist1 = "SELECT * FROM stockmarket";
                $query_obj =  pg_query($con, $query_exist1);
                $result1= pg_fetch_all_columns($query_obj,2);
                if(in_array($_POST["x7"],$result1,TRUE) )//----An  yparxei to Stock ston pinaka
                {
                    $resultErwt7 = pg_exec($con,"SELECT DISTINCT person.name
                                                FROM organization,person,related,stockmarket,connected
                                                WHERE organization.id=related.organizationid 
                                                AND person.id=related.personid
                                                AND stockmarket.id=connected.stockmarketid
                                                AND organization.id=connected.organizationid
                                                AND stockmarket.name='".$_POST["x7"]
                                                ."'GROUP BY person.name;");                                  
                    $numrowsErwt7 = pg_numrows($resultErwt7);
                    
                    if($numrowsErwt7 != 0)        
                    {    
                    echo "<br>
                            <table table class=table border=1>
                                <caption>Query 7</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Person name</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt7; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                        $row = pg_fetch_array($resultErwt7, $ri);
                                        echo " <td bgcolor=17A589>", $row["name"], "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>"
                                    . "<br>";
                    }                
                    else{
                        echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 7</p>";
                    }
               }
                else
                {
                    echo "<p style=color:red > Η μεταβλητή Χ στο ερώτημα 7 δεν υπάρχει στην βάση δεδομέων.</p>";
                    
                }
            }
            //-----------------------------------------------Erwtima-8 ----------------------------------------
            if(isset($_POST['action']) && in_array("Insert8", $_POST['action']))
            {
                if(ctype_digit($_POST["x8"]) && ctype_digit($_POST["y8"]))
                {
                    $resultErwt8 = pg_exec($con,"SELECT DISTINCT organization.name AS name
                                                    FROM organization,person,related,country,operate
                                                    WHERE organization.id=related.organizationid 
                                                    AND person.id=related.personid
                                                    AND country.id=operate.countryid
                                                    AND organization.id=operate.organizationid
                                                    GROUP BY organization.name
                                                    HAVING COUNT(operate.organizationid)>".$_POST["x8"]." AND count(related.personid)>".$_POST["y8"].";");                                  
                     $numrowsErwt8 = pg_numrows($resultErwt8);
                    
                    if($numrowsErwt8 != 0)       
                    {
                        echo "<br>
                            <table table class=table border=1>
                                <caption>Query 8</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Organization</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt8; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt8, $ri);
                                             echo " <td bgcolor=17A589>", $row["name"], "</td>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 8</p>";
                    }                
                }
                else{
                     echo "<p style=color:red > Η μεταβλητή Χ ή η μεταβλητή Υ στο ερώτημα 8 δεν είναι αριθμοί ακέραιοι.</p>";
                }
                
            }
            //-----------------------------------------------Erwtima-9----------------------------------------
            if(isset($_POST['action']) && in_array("Insert9", $_POST['action']))
            {
                if(strcmp($_POST["x9"],"") == 0)
                {
                    $_POST["x9"]="NULL";
                }
                if(strcmp($_POST["y9"],"") == 0)
                {
                    $_POST["y9"]="NULL";
                }
                $query_exist1 = "SELECT * FROM country";
                $query_obj =  pg_query($con, $query_exist1);
                $result1= pg_fetch_all_columns($query_obj,2);
                if(in_array($_POST["x9"],$result1,TRUE) && in_array($_POST["y9"],$result1,TRUE))//----An  yparxei to Country ston pinaka
                {
                    $resultErwt9 = pg_exec($con,"SELECT DISTINCT organization.name AS name1,country.name AS name2
                                                FROM organization,country,operate
                                                WHERE country.id=operate.countryid
                                                AND organization.id=operate.organizationid
                                                AND (country.name='".$_POST["x9"]."' OR country.name='".$_POST["y9"]."')
                                                GROUP BY country.name,organization.name;");                                  
                    $numrowsErwt9 = pg_numrows($resultErwt9);
                   
                    if($numrowsErwt9!=0)       
                    {
                        echo "<br>
                            <table table class=table border=1>
                                <caption>Query 9</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Organization</th>
                                        <th>Country</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt9; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt9, $ri);
                                            echo " <td bgcolor=17A589>", $row["name1"], "</td>";
                                            echo " <td bgcolor=17A589>", $row["name2"], "</td>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 8</p>";
                    }                
                }
                else{
                    echo "<p style=color:red > Η μεταβλητή Χ ή μεταβλητή Υ στο ερώτημα 9 δεν υπάρχει στην βάση δεδομέων.</p>";
                }
                
            }
            //-----------------------------------------------Erwtima-10----------------------------------------
            if(isset($_POST['action']) && in_array("Insert10", $_POST['action']))
            {
                if(strcmp($_POST["x10"],"") == 0)
                {
                    $_POST["x9"]="NULL";
                }
                if(strcmp($_POST["y10"],"") == 0)
                {
                    $_POST["y10"]="NULL";
                }
                $query_exist1 = "SELECT * FROM stockmarket";
                $query_obj =  pg_query($con, $query_exist1);
                $result1= pg_fetch_all_columns($query_obj,2);
                if(in_array($_POST["x10"],$result1,TRUE) && in_array($_POST["y10"],$result1,TRUE))//----An  yparxei to Country ston pinaka
                {
                    $resultErwt10 = pg_exec($con,"SELECT DISTINCT organization.name AS name
                                                    FROM organization,stockmarket,connected
                                                    WHERE stockmarket.id=connected.stockmarketid
                                                    AND organization.id=connected.organizationid
                                                    AND stockmarket.name='".$_POST["x10"]."'
                                                    GROUP BY organization.name
                                                    INTERSECT
                                                    SELECT DISTINCT organization.name
                                                    FROM organization,stockmarket,connected
                                                    WHERE stockmarket.id=connected.stockmarketid
                                                    AND organization.id=connected.organizationid
                                                    AND stockmarket.name!='".$_POST["y10"]."'
                                                    GROUP BY organization.name;");                                  
                    $numrowsErwt10 = pg_numrows($resultErwt10);
                    
                    if($numrowsErwt10 !=0)       
                    {
                        echo "<br>
                            <table table class=table border=1>
                                <caption>Query 10</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Organization</th>
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt10; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt10, $ri);
                                            echo " <td bgcolor=17A589>", $row["name"], "</td>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 10</p>";
                    }                
                }
                else{
                    echo "<p style=color:red > Η μεταβλητή Χ ή μεταβλητή Υ στο ερώτημα 10 δεν υπάρχει στην βάση δεδομέων.</p>";
                }
                
            }
            //-----------------------------------------------Erwtima-11----------------------------------------
            if(isset($_POST['action']) && in_array("Insert11", $_POST['action']))
            {
                if(strcmp($_POST["x11"],"") == 0)
                {
                    $_POST["x11"]="NULL";
                }
                $query_exist1 = "SELECT * FROM organization";
                $query_obj =  pg_query($con, $query_exist1);
                $result1= pg_fetch_all_columns($query_obj,2);
                if(in_array($_POST["x11"],$result1,TRUE) )//----An  yparxei to Country ston pinaka
                {
                    $resultErwt11 = pg_exec($con,"SELECT DISTINCT person.name AS name,person.lastname AS lname
                                                    FROM organization,person,related,operate,country,citizen
                                                    WHERE organization.id=related.organizationid
                                                    AND person.id=related.personid
                                                    AND organization.name='".$_POST["x11"]."'
                                                    AND organization.id=operate.organizationid
                                                    AND person.id=citizen.personid
                                                    AND country.id=citizen.countryid
                                                    AND citizen.countryid!=operate.countryid;");                                  
                    $numrowsErwt11 = pg_numrows($resultErwt11);
                    
                    if($numrowsErwt11!=0)       
                    {
                        echo "<br>
                            <table table class=table border=1>
                                <caption>Query 11</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Name</th>
                                        <th>Last name</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt11; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt11, $ri);
                                            echo " <td bgcolor=17A589>", $row["name"], "</td>";
                                            echo " <td bgcolor=17A589>", $row["lname"], "</td>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                    }
                    else{
                         echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 11</p>";
                    }                
                }
                else{
                    echo "<p style=color:red > Η μεταβλητή Χ στο ερώτημα 11 δεν υπάρχει στην βάση δεδομέων.</p>";
                }
                
            }
            //-----------------------------------------------Erwtima-12----------------------------------------
            if(isset($_POST['action']) && in_array("Insert12", $_POST['action']))
            {
               
                $resultErwt12 = pg_exec($con,"SELECT DISTINCT organization.name AS organization, stockmarket.name AS stockmarket, country.name AS country
                                                FROM organization,stockmarket,connected,operate,country
                                                WHERE organization.id=connected.organizationid
                                                AND stockmarket.id=connected.stockmarketid
                                                AND organization.id=operate.organizationid
                                                AND country.id=operate.countryid
                                                ORDER BY organization.name;");                                  
                $numrowsErwt12 = pg_numrows($resultErwt12);
                
                if($numrowsErwt12!=0)       
                {
                    echo "<br>
                        <table table class=table border=1>
                            <caption>Query 12</caption>
                            <tr bgcolor=F7DC6F>
                                    <th>organization</th>
                                    <th>stockmarket</th> 
                                    <th>country</th> 
                            </tr>";
                                // Loop on rows in the result set.
                                for($ri = 0; $ri < $numrowsErwt12; $ri++) {
                                    echo "<tr bgcolor=17A589>\n";
                                        $row = pg_fetch_array($resultErwt12, $ri);
                                        echo " <td bgcolor=17A589>", $row["organization"], "</td>";
                                        echo " <td bgcolor=17A589>", $row["stockmarket"], "</td>";
                                        echo " <td bgcolor=17A589>", $row["country"], "</td>";
                                }

                                echo "</table>"
                                . "<br>";
                }
                else{
                     echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 12</p>";
                }
            }
            //-----------------------------------------------Erwtima-13----------------------------------------
            if(isset($_POST['action']) && in_array("Insert13", $_POST['action']))
            {
               
                $resultErwt13 = pg_exec($con,"SELECT DISTINCT person.name AS name,person.lastname AS lname
                                                FROM person,country,citizen,organization,operate,related
                                                WHERE person.id=citizen.personid
                                                AND country.id=citizen.countryid
                                                AND organization.id=operate.organizationid
                                                AND country.id=operate.countryid
                                                AND person.id=related.personid
                                                AND organization.id=related.organizationid;");                                  
                $numrowsErwt13 = pg_numrows($resultErwt13);
                
                if($numrowsErwt13!=0)       
                {
                    echo "<br>
                        <table table class=table border=1>
                            <caption>Query 13</caption>
                            <tr bgcolor=F7DC6F>
                                    <th>Name</th>
                                    <th>Last Name</th> 
                            </tr>";
                                // Loop on rows in the result set.
                                for($ri = 0; $ri < $numrowsErwt13; $ri++) {
                                    echo "<tr bgcolor=17A589>\n";
                                        $row = pg_fetch_array($resultErwt13, $ri);
                                        echo " <td bgcolor=17A589>", $row["name"], "</td>";
                                        echo " <td bgcolor=17A589>", $row["lname"], "</td>";
                                }

                                echo "</table>"
                                . "<br>";
                }
                else{
                     echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 13</p>";
                }
            }
             //-----------------------------------------------Erwtima-14----------------------------------------
            if(isset($_POST['action']) && in_array("Insert14", $_POST['action']))
            {
                
                
                $resultErwt14 = pg_exec($con,"SELECT DISTINCT organization.name AS organization, country.name AS country, Count(person.name) AS number_of_employees_per_country
                                                FROM organization,country,person,citizen,related
                                                WHERE organization.id=related.organizationid
                                                AND person.id=related.personid
                                                AND person.id=citizen.personid
                                                AND country.id=citizen.countryid
                                                GROUP BY organization.name,country.name
                                                ORDER BY organization.name,country.name;");
                 $numrowsErwt14 = pg_numrows($resultErwt14);
                 
                 if($numrowsErwt14!=0)
                 {    
                    echo "<br>
                            <table table class=table border=1>
                                <caption>Query 4</caption>
                                <tr bgcolor=F7DC6F>
                                        <th>Orgnanization</th> 
                                        <th>Country</th>
                                        <th>Πλήθος</th> 
                                </tr>";
                                    // Loop on rows in the result set.
                                    for($ri = 0; $ri < $numrowsErwt14; $ri++) {
                                        echo "<tr bgcolor=17A589>\n";
                                            $row = pg_fetch_array($resultErwt14, $ri);
                                                echo " <td bgcolor=17A589>", $row["organization"], "</td>
                                                    <td bgcolor=17A589>", $row["country"], "</td>
                                                    <td bgcolor=17A589>", $row["number_of_employees_per_country"], "</td>";
                                            
                                         echo "</tr>";
                                    }
                                
                                    echo "</table>"
                                    . "<br>";
                }    
                else{
                     echo "<p style=color:red > Δεν υπάρχουν αποτελέσματα για το ερώτημα 14</p>";
                }                    
            }
            pg_close($con);
        ?>
        <br>
        <p style="background-color:powderblue; text-align: center;">Κωνσταντίνος Κολοτούρος (2022201800090)</p>
        <p style="background-color:powderblue; text-align: center;">Λάμπρος Γραμματικόπουλος (2022201800038)</p>
    </body>
</html>
