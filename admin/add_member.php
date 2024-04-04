<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
<div class="container">
    <div class="margin-top">
        <div class="row">    
            <div class="span12">   
                <div class="alert alert-info">Add Member</div>
                <p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
                <div class="addstudent">
                    <div class="details">Please Enter Details Below</div>      
                    <form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
                        
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Firstname:</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" name="firstname"  placeholder="Firstname" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Lastname:</label>
                            <div class="controls">
                                <input type="text" id="inputPassword" name="lastname"  placeholder="Lastname" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Gender:</label>
                            <div class="controls">
                                <select name="gender" required>
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Address:</label>
                            <div class="controls">
                                <input type="text" id="inputPassword" name="address"  placeholder="Address" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Cellphone Number:</label>
                            <div class="controls">
                                <input type='tel'  pattern="[0-9]{10}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" title="eg:0131234567">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Email:</label>
                            <div class="controls">
                                <input type="email" id="inputPassword" name="email"  placeholder="Email" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Type:</label>
                            <div class="controls">
                                <select name="type" required>
                                    <option></option>
                                    <option>Student</option>
                                    <option>Teacher</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Year Level:</label>
                            <div class="controls">
                                <select name="year_level">
                                    <option></option>
                                    <option>First Year</option>
                                    <option>Second Year</option>
                                    <option>Third Year</option>
                                    <option>Fourth Year</option>
                                    <option>Faculty</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Username:</label>
                            <div class="controls">
                                <input type="text" id="inputPassword" name="username"  placeholder="Username" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password:</label>
                            <div class="controls">
                                <input type="text" id="inputPassword" name="password"  placeholder="Password" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                            </div>
                        </div>
                        
                    </form>                 
                </div>      
            </div>      
        </div>
    </div>
</div>
<?php include('footer.php') ?>
