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
                .box h1{
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
                justify-content: center;
                }
                .flexbox-item{
                    width:400px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .flex-item-1 {
                    min-height: 100px;
                    }

                .flex-item-2 {
                    min-height: 200px;
                    }

                .flex-item-3 {
                    min-height: 300px;
                    }

                .flex-item-4{
                    min-height: 400px;
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
                input[type="checkbox"]{
                  display: none;
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
                #showCouInPerson:checked ~ .container{
                  display: block;
                  z-index: 2;
                }
                #showOrgInPerson:checked ~ .container{
                  display: block;
                  z-index: 2;
                }
                 #showCountryInOrg:checked ~ .container{
                  display: block;
                }
                 #showPersonInOrg:checked ~ .container{
                  display: block;
                }
                #showStockInOrg:checked ~ .container{
                  display: block;
                }
                #showOrgInStock:checked ~ .container{
                  display: block;
                  z-index: 1;
                }
                #showOrgInCountry:checked ~ .container{
                  display: block;
                  z-index: 3;
                }
                #showPersonInCountry:checked ~ .container{
                  display: block;
                  z-index: 3;
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
        </style>
    </head>


    <body bgcolor="5D6D7E">
        
        <div1 align="center">
            <h1 style="background-color:powderblue;" > Βάσεις Δεδομένων  </h1>
            
                <div class="text">
                <p>Eισάγετε/εξάξετε δεδομένα:</p>
                </div>
        </div1>    
           
        <a href = "http://hilon.dit.uop.gr/~db1u08/CreateImport.php" class="button1" style="font-size:15px" >&#8592 Πισω </a><br>
        <br> 
                
        <div1 align="center">
            <form action="InsertDelete.php" method="post" value="NULL"  >  
                   <!-----------------------------------------------------------------STOCK------------------------------------------------------------------>           
                <div class="flex-container" style="display: flex;"> 
                    <div  class="flexbox-item flex-item-1 box" id="stockmarket">
                         <p style=color:powderblue;>Stockmarket</p>                         
                         <br><input type=text name=sec_id1  placeholder=second_id><br>
                         <br><input type=text name=name1  placeholder=name><br>
                         <br><input type=text name=alternativename1  placeholder=alternativename><br>
                         <br><input type=text name=description1  placeholder=description><br>

                        <!-----------------------------Organization in Stock--------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showOrgInStock" >
                            <label for="showOrgInStock" class="show-btn">Organization</label>
                            <div class="container">
                              <p class="text">Organization</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="OrgSecidInStock" ><br>

                                    <label>Name</label>
                                    <input type="text" name="OrgNameInStock" ><br>
                                    
                                    <label>Year of creation</label>
                                    <input type="text" name="OrgYearInStock" ><br>
                                   
                                    <label>URL</label>
                                    <input type="text" name="OrgUrlInStock" ><br>
                                    
                                    <label>Number of employees</label>
                                    <input type="text" name="OrgNumberInStock" ><br>
                                    
                                    
                                     <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkOrgInStock" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showOrgInStock" name="Checkbox[]">
                                    <label for="showOrgInStock" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!----------------------------------------------------------------------------->
                         <p class="span1" >Επιλέξτε λειτουργία (υποχρεωτικό):</p>
                         <label style="color:#89CD5C" >
                           <input type="radio" id="Insert" name="action1" value="Insert" requires>Insert<br>
                         </label>
                         
                         <label style="color: #b30000">
                           <input type="radio" id="Delete" name="action1" value="Delete" requires>Delete<br>
                           <br>
                        </label>
                    </div>
                     <!---------------------------------------------------------------------PERSON------------------------------------------------------------>
                    <div class="flexbox-item flex-item-2 box" id="person">
                         <p style=color:powderblue;>Person</p>
                         <br><input type=text name=sec_id2  placeholder=second_id><br>
                         <br><input type=text name=name2  placeholder=name><br>
                         <br><input type=text name=lastname2  placeholder=last_name><br>
                         <br><input type=text name=sex2  placeholder=sex><br>
                         <br><input type=text name=date_of_birth2  placeholder=date_of_birth><br>
                         <br><input type=text name=professioncode2  placeholder=professioncode><br>
                         
                         <!----------------------------Country in Person---------------------------------->
                         <br>
                           <div2 class="center">
                               <input type="checkbox" name="Checkbox[]" id="showCouInPerson" >
                            <label for="showCouInPerson" class="show-btn">Country</label> <br>
                            <div class="flex-container flexbox-item flex-item-2 container" >
                              <p class="text">Country</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="CountrySecidInPerson" ><br>

                                    <label>Name</label>
                                    <input type="text" name="CountryNameInPerson" ><br>
                                    
                                    <label>Alternativename</label>
                                    <input type="text" name="CountryAlternativenameInPerson" ><br>
                                   
                                    <label>Description</label>
                                      <input type="text" name="CountryDescriptionInPerson" ><br>
                                      
                                      
                                      <label style="color:#89CD5C" >
                                          <input type="radio" id="Insert" name="OkCountryInPerson" value="Insert" requires>Insert<br>
                                    </label>
                                      

                                   <input type="checkbox" id="showCouInPerson" name="Checkbox[]" >
                                    <label for="showCouInPerson" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                        
                           <!-----------------------------Organization in Person--------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showOrgInPerson" >
                            <label for="showOrgInPerson" class="show-btn">Organization</label>
                            <div class="flex-container flexbox-item flex-item-2 container">
                              <p class="text">Organization</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="OrgSecidInPerson" ><br>

                                    <label>Name</label>
                                    <input type="text" name="OrgNameInPerson" ><br>
                                    
                                    <label>Year of creation</label>
                                    <input type="text" name="OrgYearInPerson" ><br>
                                   
                                    <label>URL</label>
                                    <input type="text" name="OrgUrlInPerson" ><br>
                                    
                                    
                                    <label>Number of employees</label>
                                    <input type="text" name="OrgNumberInPerson" ><br>
                                    
                                    
                                    <label>Role</label>
                                    <input type="text" name="OrgRoleInPerson" >
                                    
                                     <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkOrgInPerson" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showOrgInPerson" name="Checkbox[]">
                                    <label for="showOrgInPerson" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!----------------------------------------------------------------------------->

                                <p class="span1">Επιλέξτε λειτουργία (υποχρεωτικό):</p>
                                <label style="color:#89CD5C" >
                                   <input type="radio" id="Insert" name="action2" value="Insert" requires>Insert<br>
                                </label>

                               <label style="color: #b30000">
                                   <input type="radio" id="Delete" name="action2" value="Delete" requires>Delete<br>
                               <br>
                                </label><br>

                         </div>
                    <!---------------------------------------------------------------------------------COUNTRY-------------------------------------------------------------------->
                    <div  class="flexbox-item flex-item-3 box" id="country">
                         <p style=color:powderblue;>Country</p>
                         <br><input type=text name=sec_id3  placeholder=second_id><br>
                         <br><input type=text name=name3  placeholder=name><br>
                         <br><input type=text name=alternativename3  placeholder=alternativename><br>
                         <br><input type=text name=description3  placeholder=description><br>
                         
                         <!-----------------------------Organization in Country--------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showOrgInCountry" >
                            <label for="showOrgInCountry" class="show-btn">Organization</label>
                            <div class="flex-container flexbox-item flex-item-3 container">
                              <p class="text">Organization</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="OrgSecidInCountry" ><br>

                                    <label>Name</label>
                                    <input type="text" name="OrgNameInCountry" ><br>
                                    
                                    <label>Year of creation</label>
                                    <input type="text" name="OrgYearInCountry" ><br>
                                   
                                    <label>URL</label>
                                    <input type="text" name="OrgUrlInCountry" ><br>
                                    
                                    
                                    <label>Number of employees</label>
                                    <input type="text" name="OrgNumberInCountry" ><br>
                                    
                                    
                                     <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkOrgInCountry" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showOrgInCountry" name="Checkbox[]">
                                   <label for="showOrgInCountry" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!------------------------------------------------------------------------------------>
                           <!---------------------------------Person In Country---------------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showPersonInCountry">
                            <label for="showPersonInCountry" class="show-btn">Person</label>
                            <div class="flex-container flexbox-item flex-item-3 container">
                              <p class="text">Person</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="PersonSecidInCountry" ><br>

                                    <label>Name</label>
                                    <input type="text" name="PersonNameInCountry" ><br>
                                    
                                    <label>Last name</label>
                                    <input type="text" name="PersonLastnameInCountry" ><br>
                                   
                                    <label>sex</label>
                                    <input type="text" name="PersonSexInCountry" ><br>
                                    
                                    <label>Date of Birth</label>
                                    <input type="text" name="PersonDateInCountry" ><br>
                                    
                                    <label>Professioncode</label>
                                    <input type="text" name="PersonProfessioncodeInCountry" ><br>
                                     
                                    <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkPersonInCountry" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showPersonInCountry" name="Checkbox[]">
                                   <label for="showPersonInCountry" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!---------------------------------------------------------------------------------------->
                         <p class="span1">Επιλέξτε λειτουργία (υποχρεωτικό):</p>
                         <label style="color:#89CD5C" >
                            <input type="radio" id="Insert" name="action3" value="Insert" requires>Insert<br>
                        </label>
                         
                         <label style="color: #b30000">
                            <input type="radio" id="Delete" name="action3" value="Delete" requires>Delete<br>
                        <br>
                         </label>
                    </div>
                     <!------------------------------------------------------------------------ORGANIZATION--------------------------------------------------------------------------------->
                    <div class="flexbox-item flex-item-4 box"  id="organization">
                         <p style=color:powderblue;>Organization</p>
                         <br><input type=text name=sec_id4  placeholder=second_id><br>
                         <br><input type=text name=name4  placeholder=name><br>
                         <br><input type=text name=year_of_creation4  placeholder=year_of_creation><br>
                         <br><input type=text name=url4  placeholder=url><br>
                         <br><input type=text name=numofemployees4  placeholder=number_of_employees><br>
                         
                         <!--<div class="tooltip" style="color:white">
                             <span class="questiomark"> (Βοήθεια)&#63; </span>
                            <span class="tooltiptext">Εισάγετε ρόλο ατόμου, αν αυτό συνδέται με έαν οργανισμό </span>
                         </div>    
                         <br><input type=text name=role4  placeholder=role><br> -->
                         
                         <!-----------------------------Country In Org--------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showCountryInOrg">
                            <label for="showCountryInOrg" class="show-btn">Country</label>
                            <div class="flex-container flexbox-item flex-item-4 container">
                              <p class="text">Country</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="CountrySecidInOrg" ><br>

                                    <label>Name</label>
                                    <input type="text" name="CountryNameInOrg" ><br>
                                    
                                    <label>Alternativename</label>
                                    <input type="text" name="CountryAtlternativenameInOrg" ><br>
                                   
                                    <label>Description</label>
                                    <input type="text" name="CountryDescriptionInOrg" ><br>
                                    
                                    <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkCountryInOrg" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showCountryInOrg" name="Checkbox[]">
                                   <label for="showCountryInOrg" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!------------------------------------------------------------------------------------>
                            <!--------------------------------------Person In Org-------------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showPersonInOrg">
                            <label for="showPersonInOrg" class="show-btn">Person</label>
                            <div class="flex-container flexbox-item flex-item-4 container">
                              <p class="text">Person</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="PersonSecidInOrg" ><br>

                                    <label>Name</label>
                                    <input type="text" name="PersonNameInOrg" ><br>
                                    
                                    <label>Last name</label>
                                    <input type="text" name="PersonLastnameInOrg" ><br>
                                   
                                    <label>sex</label>
                                    <input type="text" name="PersonSexInOrg" ><br>
                                    
                                    <label>Date of Birth</label>
                                    <input type="text" name="PersonDateInOrg" ><br>
                                    
                                    <label>Professioncode</label>
                                    <input type="text" name="PersonProfessioncodeInOrg" ><br>
                                    
                                    <label>Role</label>
                                    <input type="text" name="PersonRoleInOrg" ><br>
                                    
                                    <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkPersonInOrg" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showPersonInOrg" name="Checkbox[]">
                                   <label for="showPersonInOrg" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!----------------------------------------------------------------------------------->
                         <!---------------------------------------Stock In Org---------------------------------->
                           <br>
                           <div2 class="center">
                               <br><input type="checkbox" name="Checkbox[]" id="showStockInOrg">
                            <label for="showStockInOrg" class="show-btn">Stockmarket</label>
                            <div class="flex-container flexbox-item flex-item-4 container">
                              <p class="text">Stockmarket</p><br>
                               
                                    <label>Second_id</label>
                                    <input type="text" name="StockSecidInOrg" ><br>

                                    <label>Name</label>
                                    <input type="text" name="StockNameInOrg" ><br>
                                    
                                    <label>Alternativename</label>
                                    <input type="text" name="StockAtlternativenameInOrg" ><br>
                                   
                                    <label>Description</label>
                                    <input type="text" name="StockDescriptionInOrg" ><br>
                                    
                                    <label style="color:#89CD5C" >
                                        <input type="radio" id="Insert" name="OkStockInOrg" value="Insert" requires>Insert<br>
                                    </label><br>

                                   <br>
                                   <input type="checkbox" id="showStockInOrg" name="Checkbox[]">
                                   <label for="showStockInOrg" style="margin-left: 150px;" class="show-btn">OK</label>
                              </div>
                           </div2>
                           
                           <br>
                           <!------------------------------------------------------------------------->
                         
                         
                         


                         <p class="span1">Επιλέξτε λειτουργία (υποχρεωτικό):</p>
                         <label style="color:#89CD5C " >
                            <input type="radio" id="Insert" name="action4" value="Insert" requires>Insert<br>
                         </label>
                         
                        <label style="color: #b30000">
                            <input  type="radio" id="Delete" name="action4" value="Delete" requires>Delete<br>
                        <br>
                        
                        
                    </div>
                    
                </div> <br>
                
           
                <br>
                <button class="button"; style="color:black" >Υποβολη</button><br>
                
             </form>
            
               <div style="text-align:center" >
                <div class="text" style="color: #89CD5C">
                    <p>Για να δείτε τις παρουσιάσεις πατήστε το κουμπί:</p>
                 </div>
                 <a href = "http://hilon.dit.uop.gr/~db1u08/Presentation.php" class="button" >ΕΔΩ
                </a>
              </div>
            
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
             //----------------------------------------------------------------------Stockmarket----------------------------------------------------------------
            if(isset($_POST["action1"]))
            {
                $OrgId;
                $StockId;
                if(strcmp($_POST["action1"],"Insert") == 0)
                {
                        if(isset($_POST["OkOrgInStock"]) && strcmp($_POST["OkOrgInStock"],"Insert") == 0)
                        {   
                            $doneOrg=false;
                            $query_exist1 = "SELECT * FROM stockmarket";
                            $query_obj =  pg_query($con, $query_exist1);
                            $result1= pg_fetch_all_columns($query_obj,1);
                            $result2= pg_fetch_all_columns($query_obj,2);
                            if(!in_array($_POST["sec_id1"],$result1,TRUE) && !in_array($_POST["name1"],$result2,TRUE))//----An DEN yparxei to Stock ston pinaka
                            {
                                //-------------------Org------------
                                if(ctype_digit($_POST["OrgYearInStock"]) || ctype_digit($_POST["OrgNumberInPerson"]) )
                                {
                                    if(strcmp($_POST["OrgSecidInStock"],"") == 0){
                                    $_POST["OrgSecidInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgNameInStock"],"") == 0){
                                        $_POST["OrgNameInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgYearInStock"],"")==0 ){
                                        $_POST["OrgYearInStock"]="0";
                                    }                  
                                    if(strcmp($_POST["OrgUrlInStock"],"") == 0){
                                        $_POST["OrgUrlInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgNumberInStock"],"") == 0){
                                        $_POST["OrgNumberInStock"]="0";
                                    }
                                    $query_exist1 = "SELECT * FROM organization";
                                    $query_obj =  pg_query($con, $query_exist1);
                                    $result1= pg_fetch_all_columns($query_obj,1);
                                    $result2= pg_fetch_all_columns($query_obj,2);
                                    if(!in_array($_POST["OrgSecidInStock"],$result1,TRUE) && !in_array($_POST["OrgNameInStock"],$result2,TRUE))//----An DEN yparxei to Org ston pinaka
                                    {
                                        $doneOrg=true;
                                        $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                 . "VALUES('".$_POST["OrgSecidInStock"]."','".$_POST["OrgNameInStock"]."',".$_POST["OrgYearInStock"].",'".$_POST["OrgUrlInStock"]."',".$_POST["OrgNumberInStock"].");" ;   
                                        pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        
                                        $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                        $numrows = pg_numrows($result);
                                        for($ri = 0; $ri < $numrows; $ri++) 
                                        {
                                             $row = pg_fetch_array($result, $ri);
                                             $OrgId=$row["id"];
                                        }
                                    }
                                     //------------------------------------
                                    if(strcmp($_POST["sec_id1"],"") == 0)
                                    {
                                        $_POST["sec_id1"]="NULL";
                                    }
                                    if(strcmp($_POST["name1"],"") == 0)
                                    {
                                        $_POST["name1"]="NULL";
                                    }
                                    if(strcmp($_POST["alternativename1"],"") == 0)
                                    {
                                        $_POST["alternativename1"]="NULL";
                                    }
                                    if(strcmp($_POST["description1"],"") == 0)
                                    {
                                        $_POST["description1"]="NULL";
                                    }

                                    $query = "INSERT INTO stockmarket(sec_id,name,alternativename,description) VALUES('".$_POST["sec_id1"]."','".$_POST["name1"]."','".$_POST["alternativename1"]."','".$_POST["description1"]."');" ;   
                                    pg_query($con, $query) or die("Failed to execute query: $query\n");
                                    
                                    $result = pg_exec($con,"SELECT id FROM stockmarket ORDER BY id DESC LIMIT 1;");
                                        $numrows = pg_numrows($result);
                                        for($ri = 0; $ri < $numrows; $ri++) 
                                        {
                                             $row = pg_fetch_array($result, $ri);
                                             $StockId=$row["id"];
                                        }

                                    if($doneOrg==true)
                                    {
                                        $query = "INSERT INTO connected(stockmarketid,organizationid) VALUES(".$StockId.",".$OrgId.");" ;   
                                        pg_query($con, $query) or die("Failed to execute query: $query\n");
                                    }
                                }
                                else{
                                    echo '<script>alert("Τα πεδία year of creation και number of employees πρέπει να είναι αριθμοί")</script>';
                                }     
                                
                            }
                            else//----------An yparxei to Stock ston pinaka----
                            {
                                //-------------------Org------------
                                if(ctype_digit($_POST["OrgYearInStock"]) || ctype_digit($_POST["OrgNumberInPerson"]) )
                                {
                                    $doneOrg=false;
                                    if(strcmp($_POST["OrgSecidInStock"],"") == 0){
                                    $_POST["OrgSecidInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgNameInStock"],"") == 0){
                                        $_POST["OrgNameInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgYearInStock"],"")==0 ){
                                        $_POST["OrgYearInStock"]="0";
                                    }                  
                                    if(strcmp($_POST["OrgUrlInStock"],"") == 0){
                                        $_POST["OrgUrlInStock"]="NULL";
                                    }
                                    if(strcmp($_POST["OrgNumberInStock"],"")==0){
                                        $_POST["OrgNumberInStock"]="0";
                                    }
                                    $query_exist1 = "SELECT * FROM organization";
                                    $query_obj =  pg_query($con, $query_exist1);
                                    $result1= pg_fetch_all_columns($query_obj,1);
                                    $result2= pg_fetch_all_columns($query_obj,2);
                                    if(!in_array($_POST["OrgSecidInStock"],$result1,TRUE) && !in_array($_POST["OrgNameInStock"],$result2,TRUE))//----An DEN yparxei to Org ston pinaka
                                    {
                                        $doneOrg=true;
                                        $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                 . "VALUES('".$_POST["OrgSecidInStock"]."','".$_POST["OrgNameInStock"]."',".$_POST["OrgYearInStock"].",'".$_POST["OrgUrlInStock"]."',".$_POST["OrgNumberInStock"].");" ;   
                                         pg_query($con, $query) or die("Failed to execute query: $query\n");
                                         
                                         
                                        $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                        $numrows = pg_numrows($result);
                                        for($ri = 0; $ri < $numrows; $ri++) 
                                        {
                                             $row = pg_fetch_array($result, $ri);
                                             $OrgId=$row["id"];
                                        }
                                        
                                        $result = pg_exec($con,"SELECT id FROM stockmarket WHERE sec_id='".$_POST["sec_id1"] ."';");
                                        $numrows = pg_numrows($result);
                                        for($ri = 0; $ri < $numrows; $ri++) 
                                        {
                                            $row = pg_fetch_array($result, $ri);
                                            $StockId=$row["id"];
                                        }
                                    }
                                    else{
                                         echo "<p style=color:red >Ο οργανισμός που εισάγατε με το χρηματιστίριο υπάρχει ήδη </p>";
                                    }
                                }
                                else{
                                    echo '<script>alert("Τα πεδία year of creation και number of employees πρέπει να είναι αριθμοί")</script>';
                                }
                                //------------------------------------  
                                if($doneOrg==true)  
                                {    
                                    $query = "INSERT INTO connected(stockmarketid,organizationid) VALUES(".$StockId.",".$OrgId.");" ;   
                                    pg_query($con, $query) or die("Failed to execute query: $query\n");
                                }
                            }
                        }
                        else
                        {
                            echo '<script>alert("Πρέπει να δώσετε πεδία στο Organization και να πατήσετε την κουκίδα Insert")</script>';
                        }
                }
                else //-----Delete----
                {
                       if(isset($_POST["sec_id1"]) || isset($_POST["name1"]) || isset($_POST["alternativename1"]) || isset($_POST["description1"]))
                        {
                            $result = pg_exec($con,"SELECT id AS id FROM stockmarket WHERE sec_id='".$_POST["sec_id1"] ."';");
                            $numrows = pg_numrows($result);
                            for($ri = 0; $ri < $numrows; $ri++) 
                            {
                                 $row = pg_fetch_array($result, $ri);
                                 $StockId=$row["id"];
                            }
                            
                            
                            $query = "DELETE FROM stockmarket WHERE sec_id='".$_POST["sec_id1"]."' "OR" name='".$_POST["name1"]."' "OR" alternativename='".$_POST["alternativename1"]."' "OR" description='".$_POST["description1"]."';" ;
                            pg_query($con, $query) or die("Failed to execute query: $query\n");

                            

                            $query = "DELETE FROM connected WHERE stockmarketid=".$StockId.";" ;
                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                        }
                }
            }
             //--------------------------------------------------------------------------Person---------------------------------------------------------------------------
             if(isset($_POST["action2"]))
                {
                 $PersonId;
                 $CountryId;
                 $OrgId;
                    if( strcmp($_POST["action2"],"Insert") == 0 )
                    {
                        if(isset($_POST["OkOrgInPerson"]) && strcmp($_POST["OkOrgInPerson"],"Insert") == 0 )//----An ergazetai se Organismo
                        {
                            if(isset($_POST["OkOrgInPerson"]) && strcmp($_POST["OkOrgInPerson"],"Insert") == 0 && isset($_POST["OkCountryInPerson"]) && strcmp($_POST["OkCountryInPerson"],"Insert") == 0 )
                            {
                                   $doneCountry=false;
                                   $doneOrg=false;
                                   $query_exist1 = "SELECT * FROM person";
                                   $query_obj =  pg_query($con, $query_exist1);
                                   $resultPer1= pg_fetch_all_columns($query_obj,1);
                                   if(!in_array($_POST["sec_id2"],$resultPer1,TRUE) )//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo(An DEN yparxei to Person ston pinaka)
                                   {
                                        //--------------Country---------------
                                            if(strcmp($_POST["CountrySecidInPerson"],"") == 0){
                                                $_POST["CountrySecidInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInPerson"],"") == 0){
                                                $_POST["CountryNameInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAlternativenameInPerson"],"") == 0){
                                                $_POST["CountryAlternativenameInPerson"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInPerson"],"") == 0){
                                                $_POST["CountryDescriptionInPerson"]="NULL";
                                            }
                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);

                                            if( !in_array($_POST["CountrySecidInPerson"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInPerson"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInPerson"]."','".$_POST["CountryNameInPerson"]."','".$_POST["CountryAlternativenameInPerson"]."','".$_POST["CountryDescriptionInPerson"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $CountryId=$row["id"];
                                                }
                                            }
                                       //--------------------------------------------
                                       //---------------------Org--------------------
                                        if(ctype_digit($_POST["OrgYearInPerson"]) || ctype_digit($_POST["OrgNumberInPerson"]) )
                                        {  
                                            if(strcmp($_POST["OrgSecidInPerson"],"") == 0){
                                            $_POST["OrgSecidInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgNameInPerson"],"") == 0){
                                                $_POST["OrgNameInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgYearInPerson"],"")==0){
                                                $_POST["OrgYearInPerson"]="0";
                                            }                  
                                            if(strcmp($_POST["OrgUrlInPerson"],"") == 0){
                                                $_POST["OrgUrlInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgNumberInPerson"],"") == 0 ){
                                                $_POST["OrgNumberInPerson"]="0";
                                            }
                                            if(strcmp($_POST["OrgRoleInPerson"],"") == 0){
                                                $_POST["OrgRoleInPerson"]="NULL";
                                            }
                                            $query_exist3 = "SELECT * FROM organization";
                                            $query_obj =  pg_query($con, $query_exist3);
                                            $resultOrg1= pg_fetch_all_columns($query_obj,1);

                                            if( !in_array($_POST["OrgSecidInPerson"],$resultOrg1,TRUE))//---Org---
                                            {
                                                $doneOrg=true;
                                                $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                         . "VALUES('".$_POST["OrgSecidInPerson"]."','".$_POST["OrgNameInPerson"]."',".$_POST["OrgYearInPerson"].",'".$_POST["OrgUrlInPerson"]."',".$_POST["OrgNumberInPerson"].");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }
                                            }
                                        }
                                        else
                                        {
                                            echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                        }
                                        //-----------------------------------------------
                                        if(strcmp($_POST["sec_id2"],"") == 0){
                                        $_POST["sec_id2"]="NULL";
                                        }
                                        if(strcmp($_POST["name2"],"") == 0){
                                            $_POST["name2"]="NULL";
                                        }
                                        if(strcmp($_POST["lastname2"],"") == 0){
                                            $_POST["lastname2"]="NULL";
                                        }
                                        if(strcmp($_POST["sex2"],"") == 0){
                                            $_POST["sex2"]="NULL";
                                        }
                                        if(strcmp($_POST["date_of_birth2"],"") == 0){
                                            $_POST["date_of_birth2"]="NULL";
                                        }
                                        if(strcmp($_POST["professioncode2"],"") == 0){
                                            $_POST["professioncode2"]="NULL";
                                        }
                                        if( $doneCountry==true)
                                        {
                                            $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                     . "VALUES('".$_POST["sec_id2"]."','".$_POST["name2"]."','".$_POST["lastname2"]."','".$_POST["sex2"]."','".$_POST["date_of_birth2"]."','".$_POST["professioncode2"]."');" ;   
                                             pg_query($con, $query) or die("Failed to execute query: $query\n");
                                             
                                            $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                            $numrows = pg_numrows($result);
                                            for($ri = 0; $ri < $numrows; $ri++) 
                                            {
                                                 $row = pg_fetch_array($result, $ri);
                                                 $PersonId=$row["id"];
                                            }
                                            
                                            $query = "INSERT INTO citizen(personid,countryid) "
                                                    . "VALUES(".$PersonId.",".$CountryId.");" ;   
                                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        }
                                        
                                        if($doneOrg==true)
                                        {
                                            $query = "INSERT INTO related(role,personid,organizationid) "
                                                    . "VALUES('".$_POST["OrgRoleInPerson"]."',".$PersonId.",".$OrgId.");" ;   
                                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        }    
                                   }
                                   else
                                   {
                                       //---------------------Org--------------------
                                        if(ctype_digit($_POST["OrgYearInPerson"]) || ctype_digit($_POST["OrgNumberInPerson"]) )
                                        {  
                                            if(strcmp($_POST["OrgSecidInPerson"],"") == 0){
                                            $_POST["OrgSecidInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgNameInPerson"],"") == 0){
                                                $_POST["OrgNameInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgYearInPerson"],"")==0){
                                                $_POST["OrgYearInPerson"]="0";
                                            }                  
                                            if(strcmp($_POST["OrgUrlInPerson"],"") == 0){
                                                $_POST["OrgUrlInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["OrgNumberInPerson"],"") == 0 ){
                                                $_POST["OrgNumberInPerson"]="0";
                                            }
                                            if(strcmp($_POST["OrgRoleInPerson"],"") == 0){
                                                $_POST["OrgRoleInPerson"]="NULL";
                                            }
                                            $query_exist3 = "SELECT * FROM organization";
                                            $query_obj =  pg_query($con, $query_exist3);
                                            $resultOrg1= pg_fetch_all_columns($query_obj,1);

                                            if( !in_array($_POST["OrgSecidInPerson"],$resultOrg1,TRUE))//---Org---
                                            {
                                                $doneOrg=true;
                                                $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                         . "VALUES('".$_POST["OrgSecidInPerson"]."','".$_POST["OrgNameInPerson"]."',".$_POST["OrgYearInPerson"].",'".$_POST["OrgUrlInPerson"]."',".$_POST["OrgNumberInPerson"].");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }
                                            }
                                        }
                                        else
                                        {
                                            echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                        }
                                        
                                        if($doneOrg==true)
                                        {
                                            $result = pg_exec($con,"SELECT id FROM person WHERE sec_id='".$_POST["sec_id2"]."';");
                                            $numrows = pg_numrows($result);
                                            for($ri = 0; $ri < $numrows; $ri++) 
                                            {
                                                 $row = pg_fetch_array($result, $ri);
                                                 $PersonId=$row["id"];
                                            }
                                            $query = "INSERT INTO related(role,personid,organizationid) "
                                                    . "VALUES('".$_POST["OrgRoleInPerson"]."',".$PersonId.",".$OrgId.");" ;   
                                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        }    
                                        //-----------------------------------------------
                                       //echo "<p style=color:red > This person already exists in the relationship 'Person'.</p>";
                                   }
                            }
                            else 
                            {
                              echo '<script>alert("Πρέπει να δώσετε πεδία στο Country και στο Organization και να πατήσετε την κουκίδα Insert")</script>';
                            }
                        }    
                        else{//------------Den Sxetizetai me Organization-----------------------------
                            $doneCountry=false;
                               if(isset($_POST["OkCountryInPerson"]) && strcmp($_POST["OkCountryInPerson"],"Insert") == 0 )
                               {
                                    $query_exist1 = "SELECT * FROM person";
                                    $query_obj =  pg_query($con, $query_exist1);
                                    $resultPer1= pg_fetch_all_columns($query_obj,1);
                                    if(!in_array($_POST["sec_id2"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                    {
                                        //----Country---------
                                            if(strcmp($_POST["CountrySecidInPerson"],"") == 0){
                                                $_POST["CountrySecidInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInPerson"],"") == 0){
                                                $_POST["CountryNameInPerson"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAlternativenameInPerson"],"") == 0){
                                                $_POST["CountryAlternativenameInPerson"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInPerson"],"") == 0){
                                                $_POST["CountryDescriptionInPerson"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);
                                            if(!in_array($_POST["CountrySecidInPerson"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInPerson"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInPerson"]."','".$_POST["CountryNameInPerson"]."','".$_POST["CountryAlternativenameInPerson"]."','".$_POST["CountryDescriptionInPerson"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                    $row = pg_fetch_array($result, $ri);
                                                    $CountryId=$row["id"];
                                                }
                                            }
                                         //---------------------
                                        if(strcmp($_POST["sec_id2"],"") == 0){
                                            $_POST["sec_id2"]="NULL";
                                        }
                                        if(strcmp($_POST["name2"],"") == 0){
                                            $_POST["name2"]="NULL";
                                        }
                                        if(strcmp($_POST["lastname2"],"") == 0){
                                            $_POST["lastname2"]="NULL";
                                        }
                                        if(strcmp($_POST["sex2"],"") == 0){
                                            $_POST["sex2"]="NULL";
                                        }
                                        if(strcmp($_POST["date_of_birth2"],"") == 0){
                                            $_POST["date_of_birth2"]="NULL";
                                        }
                                        if(strcmp($_POST["professioncode2"],"") == 0){
                                            $_POST["professioncode2"]="NULL";
                                        }
                                        if($doneCountry==true)
                                        {
                                            $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                     . "VALUES('".$_POST["sec_id2"]."','".$_POST["name2"]."','".$_POST["lastname2"]."','".$_POST["sex2"]."','".$_POST["date_of_birth2"]."','".$_POST["professioncode2"]."');" ;   
                                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            
                                            
                                            $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                            $numrows = pg_numrows($result);
                                            for($ri = 0; $ri < $numrows; $ri++) 
                                            {
                                                 $row = pg_fetch_array($result, $ri);
                                                 $PersonId=$row["id"];
                                            }
                                                
                                             $query = "INSERT INTO citizen(personid,countryid) "
                                                     . "VALUES(".$PersonId.",".$CountryId.");" ;   
                                            pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        }
                                    }
                                    else{
                                         echo "<p style=color:red > This person already exists in the relationship 'Person' No.</p>";
                                    }
                                }
                                else{
                                    echo '<script>alert("Πρέπει να δώσετε πεδία στο Country και να πατήσετε την κουκίδα Insert")</script>';
                                }
                        }    
                    }
                    else if(strcmp($_POST["action2"],"Delete") == 0)//---------Delete----
                    {
                        if(isset($_POST["sec_id2"]) || isset($_POST["name2"]) || isset($_POST["lastname2"]) || isset($_POST["sex2"]) || isset($_POST["date_of_birth2"]) || isset($_POST["professioncode"]) )
                        {  
                                $result = pg_exec($con,"SELECT id FROM person WHERE sec_id='".$_POST["sec_id2"]."';");
                                $numrows = pg_numrows($result);
                                for($ri = 0; $ri < $numrows; $ri++) 
                                {
                                     $row = pg_fetch_array($result, $ri);
                                     $PersonId=$row["id"];
                                }
                                
                                
                                $query = "DELETE FROM citizen "
                                        . "WHERE personid=".$PersonId.";";
                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                
                                $query = "DELETE FROM person "
                                        . "WHERE sec_id='".$_POST["sec_id2"]."' "OR" name='".$_POST["name2"]."' "OR" lastname='".$_POST["lastname2"]."' "OR" sex='".$_POST["sex2"]."' "OR" date_of_birth='".$_POST["date_of_birth2"]."' "OR" professioncode='".$_POST["professioncode"]."';" ;                        
                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                
                                $query = "DELETE FROM related "
                                        . "WHERE personid=".$PersonId.";";
                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                        }
                    }               
                }
             //------------------------------------------------------------------COUNTRY-------------------------------------------------------------------
            if(isset($_POST["action3"]))
            {
                $OrgId;
                $PersonId;
                $CountryId;
                if(strcmp($_POST["action3"],"Insert") == 0)
                {
                    $doneOrg=false;
                    $donePerson=false;
                            //--------------------------------Org------------------------------
                            $query_exist1 = "SELECT * FROM organization";
                            $query_obj =  pg_query($con, $query_exist1);
                            $result1= pg_fetch_all_columns($query_obj,1);
                            if(isset($_POST["OkOrgInCountry"]) && strcmp($_POST["OkOrgInCountry"],"Insert") == 0 )
                            {        
                                if(!in_array($_POST["OrgSecidInCountry"],$result1,TRUE))//---------An DEN yparxei o Organization ston pinaka Org
                                {
                                    if(ctype_digit($_POST["OrgYearInCountry"]) || ctype_digit($_POST["OrgNumberInCountry"]) )
                                    {
                                        $doneOrg=true;
                                        if(strcmp($_POST["OrgSecidInCountry"],"") == 0)
                                        {
                                            $_POST["OrgSecidInCountry"]="NULL";
                                        }
                                        if(strcmp($_POST["OrgNameInCountry"],"") == 0)
                                        {
                                            $_POST["OrgNameInCountry"]="NULL";
                                        }
                                        if(strcmp($_POST["OrgYearInCountry"],"") == 0)
                                        {
                                            $_POST["OrgYearInCountry"]="0";
                                        }               
                                        if(strcmp($_POST["OrgUrlInCountry"],"") == 0)
                                        {
                                            $_POST["OrgUrlInCountry"]="NULL";
                                        }
                                        if(strcmp($_POST["OrgNumberInCountry"],"") == 0)
                                        {
                                            $_POST["OrgNumberInCountry"]="0";
                                        }
                                        $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                         . "VALUES('".$_POST["OrgSecidInCountry"]."','".$_POST["OrgNameInCountry"]."',".$_POST["OrgYearInCountry"].",'".$_POST["OrgUrlInCountry"]."',".$_POST["OrgNumberInCountry"].");" ;   
                                        pg_query($con, $query) or die("Failed to execute query: $query\n");
                                        
                                        $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                        $numrows = pg_numrows($result);
                                        for($ri = 0; $ri < $numrows; $ri++) 
                                        {
                                             $row = pg_fetch_array($result, $ri);
                                             $OrgId=$row["id"];
                                        }
                                    }
                                    else
                                    {
                                         echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                    }
                                }
                            }    
                            //----------------------------Person---------------------------------------
                            if(isset($_POST["OkPersonInCountry"]) && strcmp($_POST["OkPersonInCountry"],"Insert") == 0 )
                            {
                                if(strcmp($_POST["PersonSecidInCountry"],"") == 0)
                                {
                                    $_POST["PersonSecidInCountry"]="NULL";
                                }
                                if(strcmp($_POST["PersonNameInCountry"],"") == 0)
                                {
                                    $_POST["PersonNameInCountry"]="NULL";
                                }
                                if(strcmp($_POST["PersonLastnameInCountry"],"") == 0)
                                {
                                    $_POST["PersonLastnameInCountry"]="NULL";
                                }                  
                                if(strcmp($_POST["PersonSexInCountry"],"") == 0)
                                {
                                    $_POST["PersonSexInCountry"]="NULL";
                                }
                                if(strcmp($_POST["PersonDateInCountry"],"") == 0)
                                {
                                    $_POST["PersonDateInCountry"]="NULL";
                                }
                                if(strcmp($_POST["PersonProfessioncodeInCountry"],"") == 0)
                                {
                                    $_POST["PersonProfessioncodeInCountry"]="NULL";
                                }
                                $query_exist1 = "SELECT * FROM person";
                                $query_obj =  pg_query($con, $query_exist1);
                                $resultPer1= pg_fetch_all_columns($query_obj,1);
                                if(in_array($_POST["PersonSecidInCountry"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                {
                                    echo "<p style=color:red > This person already exists in the relationship 'Person'.</p>";
                                }
                                else
                                {
                                    $donePerson=true;
                                    $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                             . "VALUES('".$_POST["PersonSecidInCountry"]."','".$_POST["PersonNameInCountry"]."','".$_POST["PersonLastnameInCountry"]."','".$_POST["PersonSexInCountry"]."','".$_POST["PersonDateInCountry"]."','".$_POST["PersonProfessioncodeInCountry"]."');" ;   
                                    pg_query($con, $query) or die("Failed to execute query: $query\n");
                                     
                                    $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                    $numrows = pg_numrows($result);
                                    for($ri = 0; $ri < $numrows; $ri++) 
                                    {
                                        $row = pg_fetch_array($result, $ri);
                                        $PersonId=$row["id"];
                                    }
                                }
                            }
                            if(strcmp($_POST["sec_id3"],"") == 0)
                            {
                                $_POST["sec_id3"]="NULL";
                            }
                            if(strcmp($_POST["name3"],"") == 0)
                            {
                                $_POST["name3"]="NULL";
                            }
                            if(strcmp($_POST["alternativename3"],"") == 0)
                            {
                                $_POST["alternativename3"]="NULL";
                            }                  
                            if(strcmp($_POST["description3"],"") == 0)
                            {
                                $_POST["description3"]="NULL";
                            }
                            
                            //8elei if me flags ??????????????????????????????????
                            $query_exist1 = "SELECT * FROM country";
                            $query_obj =  pg_query($con, $query_exist1);
                            $result1= pg_fetch_all_columns($query_obj,1);
                            if(!in_array($_POST["sec_id3"],$result1,TRUE) /*&& ($doneOrg==true || $donePerson==true) */)    //---------An DEN yparxei h Country ston pinaka--------
                            {
                                
                                $query = "INSERT INTO country(sec_id,name,alternativename,description) VALUES('".$_POST["sec_id3"]."','".$_POST["name3"]."','".$_POST["alternativename3"]."','".$_POST["description3"]."');" ;
                                pg_query($con, $query) or die("Failed to execute query: $query\n"); 
                                
                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                $numrows = pg_numrows($result);
                                for($ri = 0; $ri < $numrows; $ri++) 
                                {
                                     $row = pg_fetch_array($result, $ri);
                                     $CountryId=$row["id"];
                                }
                                
                            }
                            if($doneOrg==true){
                                $result = pg_exec($con,"SELECT id FROM country WHERE sec_id='".$_POST["sec_id3"]."';");
                                $numrows = pg_numrows($result);
                                for($ri = 0; $ri < $numrows; $ri++) 
                                {
                                     $row = pg_fetch_array($result, $ri);
                                     $CountryId=$row["id"];
                                }
                                
                                $query = "INSERT INTO operate(organizationid,countryid) "
                                        . "VALUES(".$OrgId.",".$CountryId.");" ;   
                             pg_query($con, $query) or die("Failed to execute query: $query\n");
                            }

                            if($donePerson==true)
                            {
                                $result = pg_exec($con,"SELECT id FROM country WHERE sec_id='".$_POST["sec_id3"]."';");
                                $numrows = pg_numrows($result);
                                for($ri = 0; $ri < $numrows; $ri++) 
                                {
                                     $row = pg_fetch_array($result, $ri);
                                     $CountryId=$row["id"];
                                }
                                
                                $query = "INSERT INTO citizen(personid,countryid) "
                                                 . "VALUES(".$PersonId.",".$CountryId.");" ;   
                                         pg_query($con, $query) or die("Failed to execute query: $query\n");
                            }
                }
                else //-----Delete----
                {
                       if(isset($_POST["sec_id3"]) || isset($_POST["name3"]) || isset($_POST["alternativename3"]) || isset($_POST["description3"]))
                        {  
                           
                        $result = pg_exec($con,"SELECT id FROM country WHERE sec_id='".$_POST["sec_id3"] ."';");
                        $numrows = pg_numrows($result);
                        for($ri = 0; $ri < $numrows; $ri++) 
                        {
                             $row = pg_fetch_array($result, $ri);
                             $CountryId=$row["id"];
                        }
                        
                        $query = "DELETE FROM country WHERE sec_id='".$_POST["sec_id3"]."' "OR" name='".$_POST["name3"]."' "OR" alternativename='".$_POST["alternativename3"]."' "OR" description='".$_POST["description3"]."';" ;
                        pg_query($con, $query) or die("Failed to execute query: $query\n");
                        
                         $query = "DELETE FROM citizen WHERE countryid=".$CountryId.";";
                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                
                         $query = "DELETE FROM operate WHERE countryid=".$CountryId.";";
                                pg_query($con, $query) or die("Failed to execute query: $query\n");       
                        }
                }
            }
            //--------------------------------------------------------------------Organization----------------------------------------------------------------------------------
            if(isset($_POST["action4"]) )
            {
                $doneCountry=false;
                $donePerson=false;
                $doneStock=false;
                $StockId;
                $OrgId;
                $PersonId;
                $CountryId;
                if(strcmp($_POST["action4"],"Insert") == 0)
                {
                    if(isset($_POST["OkCountryInOrg"]) && strcmp($_POST["OkCountryInOrg"],"Insert") == 0 && isset($_POST["OkPersonInOrg"]) && strcmp($_POST["OkPersonInOrg"],"Insert") == 0 )
                    {        
                        $query_exist3 = "SELECT * FROM organization";
                        $query_obj =  pg_query($con, $query_exist3);
                        $resultOrg1= pg_fetch_all_columns($query_obj,1);
                       if(!in_array($_POST["sec_id4"],$resultOrg1,TRUE))//---------An DEN yparxei o Organismos ston pinaka--------
                       {
                           if(isset($_POST["OkStockInOrg"]) && strcmp($_POST["OkStockInOrg"],"Insert") == 0 )//--------------An einai se kapoio XRHMATISTIRIO
                           {
                                    if(ctype_digit($_POST["year_of_creation4"]) || ctype_digit($_POST["numofemployees4"]) )
                                    {
                                        //------------------------Country--------------------
                                            if(strcmp($_POST["CountrySecidInOrg"],"") == 0){
                                                $_POST["CountrySecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInOrg"],"") == 0){
                                                $_POST["CountryNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAtlternativenameInOrg"],"") == 0){
                                                $_POST["CountryAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInOrg"],"") == 0){
                                                $_POST["CountryDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);

                                            if( !in_array($_POST["CountrySecidInOrg"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInOrg"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInOrg"]."','".$_POST["CountryNameInOrg"]."','".$_POST["CountryAtlternativenameInOrg"]."','".$_POST["CountryDescriptionInOrg"]."');" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                      $CountryId=$row["id"];
                                                }
                                            }
                                        //------------------------------Stock------------------------------
                                            if(strcmp($_POST["StockSecidInOrg"],"") == 0){
                                                $_POST["StockSecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["StockNameInOrg"],"") == 0){
                                                $_POST["StockNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["StockAtlternativenameInOrg"],"") == 0){
                                                $_POST["StockAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["StockDescriptionInOrg"],"") == 0){
                                                $_POST["StockDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM stockmarket";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultSto1= pg_fetch_all_columns($query_obj,1);
                                            $resultSto2= pg_fetch_all_columns($query_obj,2);
                                            if( !(in_array($_POST["StockSecidInOrg"],$resultSto1,TRUE) && !in_array($_POST["StockNameInOrg"],$resultSto2,TRUE)) )//--Country---
                                            {
                                                $doneStock=true;
                                                $query = "INSERT INTO stockmarket(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["StockSecidInOrg"]."','".$_POST["StockNameInOrg"]."','".$_POST["StockAtlternativenameInOrg"]."','".$_POST["StockDescriptionInOrg"]."');" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM stockmarket ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $StockId=$row["id"];
                                                }
                                            }
                                        //-----------------------------------Person---------------------------------------------
                                                $donePerson=true;
                                                if(strcmp($_POST["PersonSecidInOrg"],"") == 0){
                                                $_POST["PersonSecidInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonNameInOrg"],"") == 0){
                                                    $_POST["PersonNameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonLastnameInOrg"],"") == 0){
                                                    $_POST["PersonLastnameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonSexInOrg"],"") == 0){
                                                    $_POST["PersonSexInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonDateInOrg"],"") == 0){
                                                    $_POST["PersonDateInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonProfessioncodeInOrg"],"") == 0){
                                                    $_POST["PersonProfessioncodeInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonRoleInOrg"],"") == 0){
                                                    $_POST["PersonRoleInOrg"]="NULL";
                                                }
                                            $query_exist1 = "SELECT * FROM person";
                                            $query_obj =  pg_query($con, $query_exist1);
                                            $resultPer1= pg_fetch_all_columns($query_obj,1);
                                            if(!in_array($_POST["PersonSecidInOrg"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                            {
                                                $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                         . "VALUES('".$_POST["PersonSecidInOrg"]."','".$_POST["PersonNameInOrg"]."','".$_POST["PersonLastnameInOrg"]."','".$_POST["PersonSexInOrg"]."','".$_POST["PersonDateInOrg"]."','".$_POST["PersonProfessioncodeInOrg"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $PersonId=$row["id"];
                                                }
                                            } 
                                         //--------------------------------------------------------------------------------------------------------   
                                        
                                            if(strcmp($_POST["sec_id4"],"") == 0)
                                            {
                                                $_POST["sec_id4"]="NULL";
                                            }
                                            if(strcmp($_POST["name4"],"") == 0)
                                            {
                                                $_POST["name4"]="NULL";
                                            }
                                            if(strcmp($_POST["year_of_creation4"],"")==0)
                                            {
                                                $_POST["year_of_creation4"]="0";
                                            }                  
                                            if(strcmp($_POST["url4"],"") == 0)
                                            {
                                                $_POST["url4"]="NULL";
                                            }
                                            if(strcmp($_POST["numofemployees4"],"")==0)
                                            {
                                                $_POST["numofemployees4"]="0";
                                            }
                                            if($doneCountry==true && $donePerson==true && $doneStock==true)
                                            { 
                                                $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                         . "VALUES('".$_POST["sec_id4"]."','".$_POST["name4"]."',".$_POST["year_of_creation4"].",'".$_POST["url4"]."',".$_POST["numofemployees4"].");" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }

                                                $query = "INSERT INTO related(role,personid,organizationid) "
                                                             . "VALUES(".$_POST["PersonRoleInOrg"].",".$PersonId.",".$OrgId.");" ;   
                                                     pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                     
                                                 $query = "INSERT INTO operate(organizationid,countryid) "
                                                             . "VALUES(".$OrgId.",".$CountryId.");" ;   
                                                     pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            }
                                            if($doneStock==true)
                                            {
                                                $query = "INSERT INTO connected(stockmarketid,organizationid) "
                                                         . "VALUES(".$StockId.",".$OrgId.");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            } 
                                    }
                                    else{
                                        echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                    }
                           }//-------------An DEN einai se kapoio XRHMATISTIRIO--------
                           else
                           {
                               $doneCountry=false;
                               $donePerson=false;
                                        if(ctype_digit($_POST["year_of_creation4"]) || ctype_digit($_POST["numofemployees4"]) )
                                        {                                       
                                             //----Country---------
                                            if(strcmp($_POST["CountrySecidInOrg"],"") == 0){
                                                $_POST["CountrySecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInOrg"],"") == 0){
                                                $_POST["CountryNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAtlternativenameInOrg"],"") == 0){
                                                $_POST["CountryAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInOrg"],"") == 0){
                                                $_POST["CountryDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);
                                            if( !in_array($_POST["CountrySecidInOrg"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInOrg"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInOrg"]."','".$_POST["CountryNameInOrg"]."','".$_POST["CountryAtlternativenameInOrg"]."','".$_POST["CountryDescriptionInOrg"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $CountryId=$row["id"];
                                                }
                                            }
                                        //-----------------------------------Person---------------------------------------------
                                                if(strcmp($_POST["PersonSecidInOrg"],"") == 0){
                                                $_POST["PersonSecidInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonNameInOrg"],"") == 0){
                                                    $_POST["PersonNameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonLastnameInOrg"],"") == 0){
                                                    $_POST["PersonLastnameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonSexInOrg"],"") == 0){
                                                    $_POST["PersonSexInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonDateInOrg"],"") == 0){
                                                    $_POST["PersonDateInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonProfessioncodeInOrg"],"") == 0){
                                                    $_POST["PersonProfessioncodeInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonRoleInOrg"],"") == 0){
                                                    $_POST["PersonRoleInOrg"]="NULL";
                                                }
                                            $query_exist1 = "SELECT * FROM person";
                                            $query_obj =  pg_query($con, $query_exist1);
                                            $resultPer1= pg_fetch_all_columns($query_obj,1);
                                            if(in_array($_POST["PersonSecidInOrg"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                            {
                                                echo "<p style=color:red > This person already exists in the relationship 'Person'.</p>";
                                            }
                                            else
                                            {
                                                $donePerson=true;
                                                $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                         . "VALUES('".$_POST["PersonSecidInOrg"]."','".$_POST["PersonNameInOrg"]."','".$_POST["PersonLastnameInOrg"]."','".$_POST["PersonSexInOrg"]."','".$_POST["PersonDateInOrg"]."','".$_POST["PersonProfessioncodeInOrg"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                    $row = pg_fetch_array($result, $ri);
                                                    $PersonId=$row["id"];
                                                }
                                            } 
                                        
                                            if(strcmp($_POST["sec_id4"],"") == 0)
                                            {
                                                $_POST["sec_id4"]="NULL";
                                            }
                                            if(strcmp($_POST["name4"],"") == 0)
                                            {
                                                $_POST["name4"]="NULL";
                                            }
                                            if(strcmp($_POST["year_of_creation4"],"")==0)
                                            {
                                                $_POST["year_of_creation4"]="0";
                                            }                  
                                            if(strcmp($_POST["url4"],"") == 0)
                                            {
                                                $_POST["url4"]="NULL";
                                            }
                                            if(strcmp($_POST["numofemployees4"],"")==0)
                                            {
                                                $_POST["numofemployees4"]="0";
                                            }
                                            if($donePerson==true && $doneCountry==true)
                                            {
                                                $query = "INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) "
                                                         . "VALUES('".$_POST["sec_id4"]."','".$_POST["name4"]."',".$_POST["year_of_creation4"].",'".$_POST["url4"]."',".$_POST["numofemployees4"].");" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM organization ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }
                                                
                                                
                                                $query = "INSERT INTO related(role,personid,organizationid) "
                                                         . "VALUES('".$_POST["PersonRoleInOrg"]."',".$PersonId.",".$OrgId.");" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $query = "INSERT INTO operate(organizationid,countryid) "
                                                         . "VALUES(".$OrgId.",".$CountryId.");" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            }
                                        }
                                        else 
                                        {
                                           echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                        }
                           }
                        }//////////////////////////////////////////////////////////////////////An yparxei o Organismos ston pinaka///////////////////////////////////////////////////////////////////////////////////
                        else
                        {
                          if(isset($_POST["OkStockInOrg"]) && strcmp($_POST["OkStockInOrg"],"Insert") == 0 )//--------------An einai se kapoio XRHMATISTIRIO
                           {
                                   if(ctype_digit($_POST["year_of_creation4"]) ||ctype_digit($_POST["numofemployees4"]) )
                                   {
                                        //------------------------Country--------------------
                                            if(strcmp($_POST["CountrySecidInOrg"],"") == 0){
                                                $_POST["CountrySecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInOrg"],"") == 0){
                                                $_POST["CountryNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAtlternativenameInOrg"],"") == 0){
                                                $_POST["CountryAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInOrg"],"") == 0){
                                                $_POST["CountryDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);

                                            if( !in_array($_POST["CountrySecidInOrg"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInOrg"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInOrg"]."','".$_POST["CountryNameInOrg"]."','".$_POST["CountryAtlternativenameInOrg"]."','".$_POST["CountryDescriptionInOrg"]."');" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $CountryId=$row["id"];
                                                }
                                            }
                                        //------------------------------Stock------------------------------
                                            if(strcmp($_POST["StockSecidInOrg"],"") == 0){
                                                $_POST["StockSecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["StockNameInOrg"],"") == 0){
                                                $_POST["StockNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["StockAtlternativenameInOrg"],"") == 0){
                                                $_POST["StockAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["StockDescriptionInOrg"],"") == 0){
                                                $_POST["StockDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM stockmarket";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultSto1= pg_fetch_all_columns($query_obj,1);
                                            $resultSto2= pg_fetch_all_columns($query_obj,2);
                                            if( !in_array($_POST["StockSecidInOrg"],$resultSto1,TRUE) && !in_array($_POST["StockNameInOrg"],$resultSto2,TRUE) )//--Country---
                                            {
                                                $doneStock=true;
                                                $query = "INSERT INTO stockmarket(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["StockSecidInOrg"]."','".$_POST["StockNameInOrg"]."','".$_POST["StockAtlternativenameInOrg"]."','".$_POST["StockDescriptionInOrg"]."');" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM stockmarket ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $StockId=$row["id"];
                                                }
                                            }
                                        //-----------------------------------Person---------------------------------------------
                                                if(strcmp($_POST["PersonSecidInOrg"],"") == 0){
                                                $_POST["PersonSecidInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonNameInOrg"],"") == 0){
                                                    $_POST["PersonNameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonLastnameInOrg"],"") == 0){
                                                    $_POST["PersonLastnameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonSexInOrg"],"") == 0){
                                                    $_POST["PersonSexInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonDateInOrg"],"") == 0){
                                                    $_POST["PersonDateInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonProfessioncodeInOrg"],"") == 0){
                                                    $_POST["PersonProfessioncodeInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonRoleInOrg"],"") == 0){
                                                    $_POST["PersonRoleInOrg"]="NULL";
                                                }
                                            $query_exist1 = "SELECT * FROM person";
                                            $query_obj =  pg_query($con, $query_exist1);
                                            $resultPer1= pg_fetch_all_columns($query_obj,1);
                                            if(!in_array($_POST["PersonSecidInOrg"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                            {
                                                $donePerson=true;
                                                $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                         . "VALUES('".$_POST["PersonSecidInOrg"]."','".$_POST["PersonNameInOrg"]."','".$_POST["PersonLastnameInOrg"]."','".$_POST["PersonSexInOrg"]."','".$_POST["PersonDateInOrg"]."','".$_POST["PersonProfessioncodeInOrg"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                
                                                $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $PersonId=$row["id"];
                                                }
                                            } 
                                         //--------------------------------------------------------------------------------------------------------   
                                        
                                            if(strcmp($_POST["sec_id4"],"") == 0)
                                            {
                                                $_POST["sec_id4"]="NULL";
                                            }
                                            if(strcmp($_POST["name4"],"") == 0)
                                            {
                                                $_POST["name4"]="NULL";
                                            }
                                            if(strcmp($_POST["year_of_creation4"],"")==0)
                                            {
                                                $_POST["year_of_creation4"]="0";
                                            }                  
                                            if(strcmp($_POST["url4"],"") == 0)
                                            {
                                                $_POST["url4"]="NULL";
                                            }
                                            if(strcmp($_POST["numofemployees4"],"")==0)
                                            {
                                                $_POST["numofemployees4"]="0";
                                            }

                                            if($doneCountry==true && $donePerson==true && $doneStock==true)
                                            {
                                                
                                                $result = pg_exec($con,"SELECT id FROM organization WHERE sec_id='".$_POST["sec_id4"]."';");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }
                                                
                                                $query = "INSERT INTO related(role,personid,organizationid) "
                                                         . "VALUES('".$_POST["PersonRoleInOrg"]."',".$PersonId.",".$OrgId.");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");

                                            $query = "INSERT INTO operate(organizationid,countryid) "
                                                     . "VALUES(".$OrgId.",".$CountryId.");" ;   
                                             pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            }
                                            
                                            if($doneStock==true)
                                            {
                                                $result = pg_exec($con,"SELECT id FROM organization WHERE sec_id='".$_POST["sec_id4"]."';");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $OrgId=$row["id"];
                                                }
                                                
                                                $query = "INSERT INTO connected(stockmarketid,organizationid) "
                                                         . "VALUES(".$StockId.",".$OrgId.");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            } 
                                            
                                    }
                                    else{
                                          echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                    }
                           }//-------------An DEN einai se kapoio XRHMATISTIRIO--------
                           else
                           {
                               $doneCountry=false;
                               $donePerson=false; 
                                    if(ctype_digit($_POST["year_of_creation4"]) || ctype_digit($_POST["numofemployees4"]) )
                                    {
                                        //------------------------Country-------------------------------
                                            if(strcmp($_POST["CountrySecidInOrg"],"") == 0){
                                                $_POST["CountrySecidInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryNameInOrg"],"") == 0){
                                                $_POST["CountryNameInOrg"]="NULL";
                                            }
                                            if(strcmp($_POST["CountryAtlternativenameInOrg"],"") == 0){
                                                $_POST["CountryAtlternativenameInOrg"]="NULL";
                                            }                  
                                            if(strcmp($_POST["CountryDescriptionInOrg"],"") == 0){
                                                $_POST["CountryDescriptionInOrg"]="NULL";
                                            }

                                            $query_exist2 = "SELECT * FROM country";
                                            $query_obj =  pg_query($con, $query_exist2);
                                            $resultCou1= pg_fetch_all_columns($query_obj,1);
                                            $resultCou2= pg_fetch_all_columns($query_obj,2);

                                            if( !in_array($_POST["CountrySecidInOrg"],$resultCou1,TRUE) && !in_array($_POST["CountryNameInOrg"],$resultCou2,TRUE) )//--Country---
                                            {
                                                $doneCountry=true;
                                                $query = "INSERT INTO country(sec_id,name,alternativename,description) "
                                                         . "VALUES('".$_POST["CountrySecidInOrg"]."','".$_POST["CountryNameInOrg"]."','".$_POST["CountryAtlternativenameInOrg"]."','".$_POST["CountryDescriptionInOrg"]."');" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM country ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                      $CountryId=$row["id"];
                                                }
                                            }
                                        //-----------------------------------Person---------------------------------------------
                                                
                                                if(strcmp($_POST["PersonSecidInOrg"],"") == 0){
                                                $_POST["PersonSecidInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonNameInOrg"],"") == 0){
                                                    $_POST["PersonNameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonLastnameInOrg"],"") == 0){
                                                    $_POST["PersonLastnameInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonSexInOrg"],"") == 0){
                                                    $_POST["PersonSexInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonDateInOrg"],"") == 0){
                                                    $_POST["PersonDateInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonProfessioncodeInOrg"],"") == 0){
                                                    $_POST["PersonProfessioncodeInOrg"]="NULL";
                                                }
                                                if(strcmp($_POST["PersonRoleInOrg"],"") == 0){
                                                    $_POST["PersonRoleInOrg"]="NULL";
                                                }
                                            $query_exist1 = "SELECT * FROM person";
                                            $query_obj =  pg_query($con, $query_exist1);
                                            $resultPer1= pg_fetch_all_columns($query_obj,1);
                                            if(in_array($_POST["PersonSecidInOrg"],$resultPer1,TRUE))//Borei ena atomo na exei idio onoma-epi8eto.... me ena allo
                                            {
                                                echo "<p style=color:red > This person already exists in the relationship 'Person'.</p>";
                                            }
                                            else
                                            {
                                                $donePerson=true;
                                                 $query = "INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) "
                                                         . "VALUES('".$_POST["PersonSecidInOrg"]."','".$_POST["PersonNameInOrg"]."','".$_POST["PersonLastnameInOrg"]."','".$_POST["PersonSexInOrg"]."','".$_POST["PersonDateInOrg"]."','".$_POST["PersonProfessioncodeInOrg"]."');" ;   
                                                pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                $result = pg_exec($con,"SELECT id FROM person ORDER BY id DESC LIMIT 1;");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                     $row = pg_fetch_array($result, $ri);
                                                     $PersonId=$row["id"];
                                                }
                                            }
                                            
                                            if(strcmp($_POST["sec_id4"],"") == 0)
                                            {
                                                $_POST["sec_id4"]="NULL";
                                            }
                                            if(strcmp($_POST["name4"],"") == 0)
                                            {
                                                $_POST["name4"]="NULL";
                                            }
                                            if(strcmp($_POST["year_of_creation4"],"")==0)
                                            {
                                                $_POST["year_of_creation4"]="0";
                                            }                  
                                            if(strcmp($_POST["url4"],"") == 0)
                                            {
                                                $_POST["url4"]="NULL";
                                            }
                                            if(strcmp($_POST["numofemployees4"],"")==0)
                                            {
                                                $_POST["numofemployees4"]="0";
                                            }
                                            if($donePerson==true && $doneCountry==true)
                                            {
                                                $result = pg_exec($con,"SELECT id FROM organization WHERE sec_id='".$_POST["sec_id4"]."';");
                                                $numrows = pg_numrows($result);
                                                for($ri = 0; $ri < $numrows; $ri++) 
                                                {
                                                    $row = pg_fetch_array($result, $ri);
                                                    $OrgId=$row["id"];
                                                }
                                                
                                                $query = "INSERT INTO related(role,personid,organizationid) "
                                                         . "VALUES('".$_POST["PersonRoleInOrg"]."',".$PersonId.",".$OrgId.");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                 
                                                 $query = "INSERT INTO operate(organizationid,countryid) "
                                                         . "VALUES(".$OrgId.",".$CountryId.");" ;   
                                                 pg_query($con, $query) or die("Failed to execute query: $query\n");
                                            }
                                    }    
                                    else 
                                    {
                                          echo '<script>alert("Τα πεδία year_of_creation και numofemployees πρέπει να είναι αριθμοί")</script>';
                                    }
                           } 
                        }
                    }    
                    else 
                    {
                            echo '<script>alert("Πρέπει να δώσετε υποχρεωτικά πεδία στις σχέσεις Person,Country και να πατήσετε Insert στα αντοίστιχα κουτάκια")</script>';
                    }
                }
                else //--------------------------Delete------------------------------------
                {
                        if(isset($_POST["sec_id4"]) || isset($_POST["name4"]) || isset($_POST["year_of_creation4"]) || isset($_POST["url4"]) || isset($_POST["numofemployees4"]) )
                        {  
                        $result = pg_exec($con,"SELECT id FROM organization WHERE sec_id='".$_POST["sec_id4"]."';");
                        $numrows = pg_numrows($result);
                        for($ri = 0; $ri < $numrows; $ri++) 
                        {
                             $row = pg_fetch_array($result, $ri);
                        }
                        $OrgId=$row["id"];
                        
                        
                        $query = "DELETE FROM organization WHERE sec_id='".$_POST["sec_id4"]."' "OR" name='".$_POST["name4"]."' "OR" year_of_creation='".$_POST["year_of_creation4"]."' "OR" url='".$_POST["url4"]."' "OR" numofemployees='".$_POST["numofemployees4"]."';" ;                        
                        pg_query($con, $query) or die("Failed to execute query: $query\n");
                                                
                        $query = "DELETE FROM connected WHERE organizationid=".$OrgId.";" ;
                         pg_query($con, $query) or die("Failed to execute query: $query\n");


                        $query = "DELETE FROM related WHERE organizationid=".$OrgId.";";
                             pg_query($con, $query) or die("Failed to execute query: $query\n");

                        $query = "DELETE FROM operate WHERE organizationid=".$OrgId.";";
                             pg_query($con, $query) or die("Failed to execute query: $query\n");
                                
                        }
                }
            }
            pg_close($con);
        ?>
        </center>
        <br>
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
