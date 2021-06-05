<!DOCTYPE html>
<html lang="en"><head>

<title>JavaScript registration form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />

<h1>Registration Form</h1>
<table style="width:100%">
  <tr>
<ul>
<li><label for="FullName">Full Name:</label> <input type="text" name="FullName" size="12" /></li>
<li><label for="email">Email:</label><input type="text" name="email" size="12" /></li>
<li><label for="passid">Password:</label> <input type="password" name="passid" size="12" /></li>
<li><label for="comment">Comment:</label> <textarea name="comment" id="comment"></textarea></li>
<li><label id="gender">Sex:</label> <input type="radio" name="malesex" value="Male" /><span>Male</span> <input type="radio" name="femalesex" value="Female" /><span>Female</span> <input type="radio" name="othersex" value="Other" /><span>Other</span></li>
<li><label>Please choose a Hobby:</label> <input type="checkbox" name="singing" value="singing" checked /><span>Singing</span> <input type="checkbox" name="dancing" value="dancing" /><span>Dancing</span> <input type="checkbox" name="reading" value="reading" /><span>Reading</span></li>
<label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit"> <input type="reset" name="reset" value="Reset" /></li>
</ul>
</form>
</body>
</html>