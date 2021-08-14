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
        <center>
            <h1 style="background-color:powderblue;" > Βάσεις Δεδομένων  </h1>
        </center>    
               
               
        <a href = "http://hilon.dit.uop.gr/~db1u08/InsertDelete.php" class="button1" style="font-size:15px" >&#8592 Πισω </a><br>
       <br>
               
        <center>        
                <div class="text" style="color: #89CD5C">
                    <p>Ερώτημα 4 (για να δείτε τα queries):</p>
                 </div>
                 <a href = "http://hilon.dit.uop.gr/~db1u08/Queries.php" class="button" >ΕΔΩ
                </a>
               </div>
            <br>
            <?php
                $host = "localhost";
                $user = "db1u08";
                $pass = "safel652";
                $db = $user;
                $link = pg_connect("host=$host dbname=$db user=$user password=$pass");
                
                $result4 = pg_exec($link, "SELECT name AS name ,year_of_creation AS year, url AS url,numofemployees AS numberofemployees FROM organization;");
                $numrows4 = pg_numrows($result4);
                
                $resultErwt2 = pg_exec($link,"SELECT stockmarket.name as stock,organization.name AS org FROM connected,stockmarket,organization
                                                WHERE stockmarket.id=connected.stockmarketid and organization.id=connected.organizationid
                                                GROUP by stockmarket.name,organization.name
                                                Order BY stockmarket.name,organization.name;");
                $numrowsErwt2 = pg_numrows($resultErwt2);
                
                $resultErwt3 = pg_exec($link,"SELECT country.name AS country,person.name AS person FROM citizen,country,person
                                            WHERE country.id=citizen.countryid And person.id=citizen.personid
                                            GROUP by country.name,person.name
                                            Order BY country.name,person.name;");
                $numrowsErwt3 = pg_numrows($resultErwt3);
            ?>
         </center>
        
        
        <br>
        <table table class="table" border="1">
            <caption>Organization</caption>
            <tr bgcolor=F7DC6F>
                    <th>name</th>
                    <th>year_of_creation</th>
                    <th>url</th>
                    <th>number_of_employees</th>
            </tr>
            <?php

                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows4; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result4, $ri);
                        echo " <td bgcolor=17A589>", $row["name"], "</td>
                        <td bgcolor=17A589>", $row["year"], "</td>
                        <td bgcolor=17A589>", $row["url"], "</td>
                        <td bgcolor=17A589>", $row["numberofemployees"], "</td>
                    </tr>";
                }
                
            ?>
        </table>
        <br>
        <!---------------------------------Erwt2------------------------------------->
        <table table class="table1" border="1"> <!--Table1 in CSS  -->
            <caption>Stockmarket-Organization</caption>
            <tr bgcolor=F7DC6F>
                    <th>Stockmarket Name</th>
                    <th>Organization Name</th>
            </tr>
            <?php
                $tmp="NULL";
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrowsErwt2; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($resultErwt2, $ri);
                        if($tmp!=$row["stock"])
                        {
                            echo " <td bgcolor=17A589>", $row["stock"], "</td>
                            <td bgcolor=34495e>","", "</td>";
                            echo "<tr bgcolor=17A589>\n "
                                    . " <td bgcolor=34495e>","", "</td>"
                                    . "<td bgcolor=17A589>", $row["org"], "</td>"
                                    . "</tr>";
                            $tmp=$row["stock"];
                        }
                        else{
                            echo " <td bgcolor=34495e>","", "</td>";
                            echo " <td bgcolor=17A589>", $row["org"], "</td>";
                        }
                        
                        
                    echo "</tr>";
                }
                
            ?>
        </table>
        <!-------------------------------Erwt3--------------------------------------->
        <br>.
        <table table class="table1" border="1"> <!--Table1 in CSS  -->
            <caption>Stockmarket-Organization</caption>
            <tr bgcolor=F7DC6F>
                    <th>Country Name</th>
                    <th>Person Name</th>
            </tr>
            <?php
                $tmp="NULL";
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrowsErwt3; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($resultErwt3, $ri);
                        if($tmp!=$row["country"])
                        {
                            echo " <td bgcolor=17A589>", $row["country"], "</td>
                            <td bgcolor=34495e>","", "</td>";
                            echo "<tr bgcolor=17A589>\n "
                                    . " <td bgcolor=34495e>","", "</td>"
                                    . "<td bgcolor=17A589>", $row["person"], "</td>"
                                    . "</tr>";
                            $tmp=$row["country"];
                        }
                        else{
                            echo " <td bgcolor=34495e>","", "</td>";
                            echo " <td bgcolor=17A589>", $row["person"], "</td>";
                        }
                        
                        
                    echo "</tr>";
                }
                
            ?>
        </table>
        <p style="background-color:powderblue; text-align: center;">Κωνσταντίνος Κολοτούρος (2022201800090)</p>
        <p style="background-color:powderblue; text-align: center;">Λάμπρος Γραμματικόπουλος (2022201800038)</p>
    </body>
</html>

