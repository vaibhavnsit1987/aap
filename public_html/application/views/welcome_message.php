<html>
<head>
<style>
body{
  background-color: blue;
}

.test
{
  margin: 100px;
  width: 60%;
  border: 3px solid  gray;
  padding: 50px 50px 50px 50px;
  background-color: #add8e6;
}

.row
{
  margin: auto
}


.title
{
  text-align: center;
  margin-bottom: 20px
}

label
{
 margin: 50px;  
}

input
{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.login
{
  margin-left : 200px;
  margin-top: 30px
}
</style>




</head>
<body>
<div class = "test">

<form>
<div class = "title">
<label>AAP Verification form</label>
  </div>
<br/>


<div class = "row">
<label>Email/ Mobile</label>
  <input type = text id = "email" name = "email" placeholder="Email/Mobile"/>
  </div>
<br/>

<div class = "row">
<label style = "margin-right: 80px">
  Password
</label>
<input type = password  id = "password" name="password" placeholder = "password"/>
</div>

<div class = "row login">
  <input type = submit  id = "login" name = "login" />
  </div>
</form>
</div>

</body>

</html>
