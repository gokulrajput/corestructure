<section>
<div class="form-row" style="text-align: center; margin-bottom: 35px;">
    <h1>Basic Information</h1>
</div>
<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Project Name *</label>
        <input type="text" name="projectname" id="projectname" class="form-control" required>
    </div>

    <div class="form-holder"> <label for="">&nbsp;</label> Name of the project you want to Create.</div>
</div>  
<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Database Host Name *</label>
        <input type="text" name="dbhost" id="dbhost" value="localhost" class="form-control" required>
    </div>
    <div class="form-holder"><label for="">&nbsp;</label>Default: "localhost".</div>
</div>

<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Database Name *</label>
        <input type="text" class="form-control" id="dbname" name="dbname" required>
    </div>
    <div class="form-holder"><label for="">&nbsp;</label>The name of the database you want to create.</div>
</div>

<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Database User Name *</label>
        <input type="text" name="username" id="username" value="root" class="form-control" required>
    </div> 
    <div class="form-holder"><label for="">&nbsp;</label>Your MySQL User Name. Default : "root".</div>
</div>

<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Database Password</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>
    <div class="form-holder"><label for="">&nbsp;</label>Default set blank.</div>
</div>


<div class="form-row form-group">
    <div class="form-holder">
        <label for="">Table Prefix </label>
        <input type="text" class="form-control" id="tableprefix" value="cs_" name="tableprefix">
    </div>
    <div class="form-holder"><label for="">&nbsp;</label>Prefix for the database tables.</div>
</div> 

</section>