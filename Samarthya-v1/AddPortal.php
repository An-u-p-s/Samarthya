<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <style>
            .row { margin-bottom:2%;}
        </style>
    </head>
    <body>
        <form action="php/dac.nicportal.php" method="get">
            <input type="hidden" name="action" value="AddUser"/>
        <div class="container">
            <h3 align="center">Add a User to Portal</h3><hr/>
   
            <div class="row">
                <div align="right" class="col-xs-4">
                </div>
                <div align="right" class="col-xs-4">
               <?php if(isset($_GET["result"]) ) echo "User Added Successfully"; ?>
                </div>
            </div>
            <div class="row">
                <div align="right" class="col-xs-4">Username : </div>
                <div class="col-xs-4"><input type="text" name="addUser-userName" class="form-control"/> </div>
            </div>
            
            <div class="row">
                <div align="right" class="col-xs-4">Firstname : </div>
                <div class="col-xs-4"><input type="text"  name="addUser-firstName" class="form-control"/> </div>
            </div>
            
            <div class="row">
                <div align="right" class="col-xs-4">Lastname : </div>
                <div class="col-xs-4"><input type="text"  name="addUser-lastName" class="form-control"/> </div>
            </div>
            
             <div class="row">
                <div align="right" class="col-xs-4">Staff Id : </div>
                <div class="col-xs-4"><input type="text" name="addUser-staffId" class="form-control"/> </div>
            </div>
            
            <div class="row">
                <div align="right" class="col-xs-4">Designation : </div>
                <div class="col-xs-4"><input type="text" name="addUser-designation" class="form-control"/> </div>
            </div>
            
            <div class="row">
                <div align="right" class="col-xs-4">Email Id : </div>
                <div class="col-xs-4"><input type="text" name="addUser-email_Id" class="form-control"/> </div>
            </div>
             
            <div class="row">
                <div align="right" class="col-xs-4">Phone Number : </div>
                <div class="col-xs-4"><input type="text" name="addUser-phoneNumber" class="form-control"/> </div>
            </div>
            
            <div class="row">
                <div class="col-xs-8">
               <input type="submit"  id="submitButton" class="btn btn-primary pull-right" value=" Submit "/>
                </div>
            </div>
            
        </div>
        </form>
    </body>
</html>
