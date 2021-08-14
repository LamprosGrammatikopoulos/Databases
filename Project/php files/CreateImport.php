<!DOCTYPE html>
<!--
Κωνσταντίνος Κολοτούρος (2022201800090)
Λάμπρος Γραμματικόπουλος (2022201800038)
-->
<html>
    <head>
            <!--<title>File</title>  -->
            <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
            <style>      
                 body{
                    font-family: sans-serif;
                    background: #34495e
                }
                caption { 
                  display: table-caption;
                  text-align: center;
                  font-size: 25px;
                  background-color:powderblue;
                  
                }
                a.button{
                    border:2px greenyellow;
                    border-radius: 10px;
                    box-shadow:0 0 34px yellow inset;
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
                .table{
                    border: 2px solid red;
                    word-wrap: break-word;
                    table-layout: fixed;
                    width: 80%;
                    margin-left: auto;
                    margin-right: auto;
                }
                span {
                        background-color: #f18973;
                      }
                .text{
                    text-align: center;
                    font-size: 24px;
                    font-weight: bold;
                } 
            </style>
    </head>

    <body bgcolor="34495e">
        <h1 style="background-color:powderblue; text-align: center;"> Βάσεις Δεδομένων</h1>
        <div style="text-align:center" >
            <div class="text" style="color: #89CD5C">
                <p>Eισάγετε/εξάξετε δεδομένα:</p>
             </div>
             <a href = "http://hilon.dit.uop.gr/~db1u08/InsertDelete.php" class="button" >ΕΔΩ
            </a>
        </div>
        <?php
            $host = "localhost";
            $user = "db1u08";
            $pass = "safel652";
            $db = $user;
            $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
           //--------------------------------------Creation of final tables----------------------------------------
            $query = "DROP TABLE IF exists stockmarket CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            $query = "CREATE TABLE stockmarket("
                    . "id SERIAL PRIMARY KEY,"
                    . "sec_id VARCHAR(100) UNIQUE,"
                    . "name VARCHAR(100),"
                    . "alternativename VARCHAR(100),"
                    . "description VARCHAR);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists person CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            $query = "CREATE TABLE person("
                    . "id SERIAL PRIMARY KEY,"
                    . "sec_id  VARCHAR(100) UNIQUE,"
                    . "name VARCHAR(100),"
                    . "lastname VARCHAR(100),"
                    . "sex VARCHAR(10),"
                    . "date_of_birth VARCHAR(100),"
                    . "professioncode VARCHAR(100));";  
            pg_query($con, $query) or die("Cannot execute query: $query\n");
            
            
            $query = "DROP TABLE IF exists country CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            $query = "CREATE TABLE country("
                    . "id SERIAL PRIMARY KEY,"
                    . "sec_id VARCHAR(100) UNIQUE,"
                    . "name VARCHAR(100),"
                    . "alternativename VARCHAR(1000),"
                    . "description VARCHAR);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists organization CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            $query = "CREATE TABLE organization("
                    . "id SERIAL PRIMARY KEY,"
                    . "sec_id VARCHAR(100) UNIQUE,"
                    . "name VARCHAR(100),"
                    . "year_of_creation INTEGER,"
                    . "url VARCHAR,"
                    . "numofemployees INTEGER);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists citizen CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n");  
            $query = "CREATE TABLE citizen(
                        id SERIAL PRIMARY KEY,
                        personid INTEGER,
                        countryid INTEGER,
                        FOREIGN KEY(personid) REFERENCES person(id),
                        FOREIGN KEY(countryid) REFERENCES country(id) ON DELETE CASCADE);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists operate CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n");  
            $query = "CREATE TABLE operate(
                        id SERIAL PRIMARY KEY, 
                        organizationid INTEGER,
                        countryid INTEGER,
                        FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE,
                        FOREIGN KEY(countryid) REFERENCES country(id) ON DELETE CASCADE);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists related CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            $query = "CREATE TABLE related(
                        id SERIAL PRIMARY KEY,
                        role VARCHAR(100),
                        personid INTEGER,
                        organizationid INTEGER,
                        FOREIGN KEY(personid) REFERENCES person(id) ON DELETE CASCADE,
                        FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            $query = "DROP TABLE IF exists connected CASCADE;"; 
            pg_query($con, $query) or die("Cannot execute query: $query\n");
            $query = "DROP TABLE IF exists connected CASCADE;
                        CREATE TABLE connected(
                        id SERIAL PRIMARY KEY,
                        stockmarketid INTEGER,
                        organizationid INTEGER,
                        FOREIGN KEY(stockmarketid) REFERENCES stockmarket(id) ON DELETE CASCADE,
                        FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE);";  
            pg_query($con, $query) or die("Cannot execute query: $query\n"); 
            
            
            //--------------------------------------Data insertion from temporary tables----------------------------------------   
            //------StockMarket---------
            $query = "INSERT INTO stockmarket(sec_id,name,alternativename,description) "
                    . "SELECT DISTINCT id,label,aliases,description FROM stock_tmp;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------Person---------
            $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                    . "SELECT DISTINCT per_id,first_name,last_name,sex,date_of_birth,occupation_id FROM per_cou_tmp;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------Country---------
            $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                    . "SELECT DISTINCT cou_id,name,aliases,description FROM per_cou_tmp "
                    . "UNION "
                    . "SELECT DISTINCT cou_id,name_cou,aliases,description FROM org_cou_tmp;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------Organization---------
            $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                    . "SELECT DISTINCT org_id,name_org,year_of_creation,website,number_of_employees FROM org_cou_tmp;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------citizen---------
            $query = "INSERT INTO citizen(personid,countryid) SELECT DISTINCT person.id,country.id FROM per_cou_tmp,country,person
                        WHERE per_id=person.sec_id and cou_id=country.sec_id;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------operate---------
            $query = "INSERT INTO operate(organizationid,countryid) SELECT DISTINCT organization.id,country.id FROM org_cou_tmp,country,organization
                    WHERE org_id=organization.sec_id and cou_id=country.sec_id;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------related---------
            $query = "INSERT INTO related(personid,role,organizationid) SELECT DISTINCT person.id,org_per_tmp.role, organization.id FROM org_per_tmp,organization,person
                    WHERE org_id=organization.sec_id and per_id=person.sec_id ;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            
            //------connected---------
            $query = "INSERT INTO connected(stockmarketid,organizationid) SELECT DISTINCT stockmarket.id,organization.id FROM org_sto_tmp,stockmarket,organization
                    WHERE org_id=organization.sec_id and sto_id=stockmarket.sec_id;";
            pg_query($con, $query) or die("Failed to execute query: $query\n");
            
            pg_close($con);
            
        ?>
        <br>
        <center>
            <?php
                $link = pg_connect("host=$host dbname=$db user=$user password=$pass");
                $result1 = pg_exec($link, "SELECT * FROM stockmarket;");
                $numrows1 = pg_numrows($result1);
                $result2 = pg_exec($link, "SELECT * FROM person;");
                $numrows2 = pg_numrows($result2);
                $result3 = pg_exec($link, "SELECT * FROM country;");
                $numrows3 = pg_numrows($result3);
                $result4 = pg_exec($link, "SELECT * FROM organization;");
                $numrows4 = pg_numrows($result4);
                $result5 = pg_exec($link, "SELECT * FROM citizen;");
                $numrows5 = pg_numrows($result5);
                $result6 = pg_exec($link, "SELECT * FROM operate;");
                $numrows6 = pg_numrows($result6);
                $result7 = pg_exec($link, "SELECT * FROM related;");
                $numrows7 = pg_numrows($result7);
                $result8 = pg_exec($link, "SELECT * FROM connected;");
                $numrows8 = pg_numrows($result8);
                echo "
                    <p>Stockmarket rows: $numrows1</p>
                    <p>Person rows: $numrows2</p>
                    <p>Country rows: $numrows3</p>
                    <p>Organization rows: $numrows4</p>
                    <p>Citizen rows: $numrows5</p>
                    <p>Operate rows: $numrows6</p>
                    <p>Related rows: $numrows7</p>
                    <p>Connected rows: $numrows8</p>
                ";
            ?>
        </center>
        <br>
        <table table class="table" border="1">
            <caption>Stockmarket</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>sec_id</th>
                    <th>name</th>
                    <th>alternativename</th>
                    <th>description</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows1; $ri++) {
                    echo "<tr bgcolor=17A589 >\n";
                        $row = pg_fetch_array($result1, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589 >", $row["sec_id"], "</td>
                        <td bgcolor=17A589 >", $row["name"], "</td>
                        <td bgcolor=17A589 >", $row["alternativename"], "</td>
                        <td bgcolor=17A589 >", $row["description"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>Person</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>sec_id</th>
                    <th>name</th>
                    <th>lastname</th>
                    <th>sex</th>
                    <th>date_of_birth</th>
                    <th>professioncode</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows2; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result2, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["sec_id"], "</td>
                        <td bgcolor=17A589>", $row["name"], "</td>
                        <td bgcolor=17A589>", $row["lastname"], "</td>
                        <td bgcolor=17A589>", $row["sex"], "</td>
                        <td bgcolor=17A589>", $row["date_of_birth"], "</td>
                        <td bgcolor=17A589>", $row["professioncode"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>Country</caption>
            <tr bgcolor=F7DC6F> 
                    <th>id</th>
                    <th>sec_id</th>
                    <th>name</th>
                    <th>alternativename</th>
                    <th>description</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows3; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result3, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["sec_id"], "</td>
                        <td bgcolor=17A589>", $row["name"], "</td>
                        <td bgcolor=17A589>", $row["alternativename"], "</td>
                        <td bgcolor=17A589>", $row["description"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>Organization</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>sec_id</th>
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
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["sec_id"], "</td>
                        <td bgcolor=17A589>", $row["name"], "</td>
                        <td bgcolor=17A589>", $row["year_of_creation"], "</td>
                        <td bgcolor=17A589>", $row["url"], "</td>
                        <td bgcolor=17A589>", $row["numofemployees"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>citizen</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>personid</th>
                    <th>countryid</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows5; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result5, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["personid"], "</td>
                        <td bgcolor=17A589>", $row["countryid"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>operate</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>organizationid</th>
                    <th>countryid</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows6; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result6, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["organizationid"], "</td>
                        <td bgcolor=17A589>", $row["countryid"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>related</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>personid</th>
                    <th>organizationid</th>
                    <th>role</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows7; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result7, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["personid"], "</td>
                        <td bgcolor=17A589>", $row["organizationid"], "</td>
                        <td bgcolor=17A589>", $row["role"], "</td>
                    </tr>";
                }
            ?>
        </table>
        <br>
        <table table class="table" border="1">
            <caption>connected</caption>
            <tr bgcolor=F7DC6F>
                    <th>id</th>
                    <th>stockmarketid</th>
                    <th>organizationid</th>
            </tr>
            <?php
                // Loop on rows in the result set.
                for($ri = 0; $ri < $numrows8; $ri++) {
                    echo "<tr bgcolor=17A589>\n";
                        $row = pg_fetch_array($result8, $ri);
                        echo " <td bgcolor=17A589>", $row["id"], "</td>
                        <td bgcolor=17A589>", $row["stockmarketid"], "</td>
                        <td bgcolor=17A589>", $row["organizationid"], "</td>
                    </tr>";
                }
                pg_close($link);
            ?>
        </table>
        <br>
        <p style="background-color:powderblue; text-align: center;">Κωνσταντίνος Κολοτούρος (2022201800090)</p>
        <p style="background-color:powderblue; text-align: center;">Λάμπρος Γραμματικόπουλος (2022201800038)</p>
    </body>
</html>
