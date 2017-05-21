<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>php form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src=""></script>
</head>
<body>
<div class="container">
<h1>submit form </h1>
<form class="form-horizontal" role-"form" action="recieve.php" method="post">
<div class="form-group">
<label for="name" class="control-label col-sm-2" >Name</label>
<div class="col-sm-5">
<input type="text" id="name" name="name" class="form-control" placeholder="Full Name">
</div>
</div>
<div class="form-group">
<label for="email" class="control-label col-sm-2" >E-mail</label>
<div class="col-sm-5" >
<input type="text" id="email"  name="email" class="form-control" placeholder="email address" required="required">
</div>
</div>
<div class="form-group">
<label for="password" class="control-label col-sm-2" >Password</label>
<div class="col-sm-5">
<input type="password" id="password" name="pass"class="form-control" placeholder="password">
</div>
</div>
<div class="form-group">
<label for="subject" class="control-label col-sm-2" >subject</label>
<div class="col-sm-5">
<input type="text" id="subject" class="form-control" name="subj" placeholder="Subject">
</div>
</div>
<div class="form-group">
<label for="genre" class="control-label col-sm-2"  >Gender</label>
<div class="col-sm-2">
<select class="form-control"name="genre" require>
<option value="">Select your Gender</option>
<option value="male">Male</option>
<option value="Female">Female</option>
<option value="other">Other</option>
</select>
</div>
</div>

<div class="form-group">
<label for="checkbox" class="control-label col-sm-2" >skills</label>
<div class="col-sm-5" name="skills">
            <label class="checkbox-inline"><input type="checkbox" checked="checked">PHP</label>
            <label class="checkbox-inline"><input type="checkbox">java</label>
            <label class="checkbox-inline"><input type="checkbox">c#</label>
            <label class="checkbox-inline"><input type="checkbox">Html</label>
</div>
</div>
<div class="form-group">
<label for="genre" class="control-label col-sm-2"  >Country*</label>
<div class="col-sm-5">
<select class="form-control"na,e="country" required="required" >
<option value="">Select your country</option>
<option value="pakistan">pakistan</option>
<option value="America">America</option>
<option value="other">Other</option>
</select>
</div>
</div>
<div class="form-group">
<label for="comments" class="control-label col-sm-2" >Comments</label>
<div class="col-sm-3" >
<textarea class="form-control my-fixed" rows="8" name="comment"></textarea>

</div>
</div>



<div class="form-group">
<label for="checkbox" class="control-label col-sm-2" ></label>
<div class="col-sm-5">
<input type="submit" class="btn btn-primary" name="submit" ></button>

</div>
</div>


</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>