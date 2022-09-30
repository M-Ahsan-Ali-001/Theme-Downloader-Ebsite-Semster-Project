<!DOCTYPE html>
<html lang="en">
<head>
<title>Alpha@Themes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, times new roman, roman;
}

/* Style the header */
header {
  background-color: black;
  padding: 25px;
  width:101%;
  text-align: center;
  font-size: 50px;
  color: red;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 600px; /* only for demonstration, should be removed */
  background: grey;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: white;
  height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: black;
  padding: 45px;
  width:101%;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 300%;
    height: auto;
  }
}
div.video
{
  text-align: center;
}

</style>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<header>
  <img src="aplha themes.png" alt="logo" width="700" height="200" />
</header>

<section>
  <nav>
    <style>
.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: orange;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
<center><div class="dropdown">
  <button class="dropbtn">Classic Themes</button>
  <div class="dropdown-content">
    <a href="index1.html">100-$</a>
    <a href="index2.html">50-$</a>
</div></center>
<br><br>
<style>
.dropbtn {
background-color: #152eea;
color: white;
padding: 16px;
font-size: 16px;
border: none;
}

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: orange;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
<center><div class="dropdown">
<button class="dropbtn">Basic Themes</button>
<div class="dropdown-content">
<a href="index3.html">40-$</a>
<a href="index4.html">20-$</a>
</div></center>
<br><br>
<style>
.dropbtn {
background-color: #152eea;
color: white;
padding: 16px;
font-size: 16px;
border: none;
}

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: orange;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
<center><div class="dropdown">
<button class="dropbtn">Free Themes</button>
<div class="dropdown-content">
<a href="index5.html"> Page-1</a></div></center>
<br><br>
<style>
.dropbtn {
background-color: #152eea;
color: white;
padding: 16px;
font-size: 16px;
border: none;
}

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: orange;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
</style>
<center><div class="dropdown">
<button class="dropbtn">About Us</button>
<div class="dropdown-content">
<a href="index6.html"> Contacts Us</a></div></center>
<br><br>
<div class="video">
  <embed type="video/webm" src="videoforhtml.mp4" width="250" height="200">
</div>
</nav>
  <article>
    <center><h1><font color="blue" size="35">Welcome</font></h1>
    <h2> For recomendation:</h2>
      <form>
<input type="text" size="30" onkeyup="showResult(this.value)" placeholder="type here!!!">
<div id="livesearch"></div>
</form>
<br>
<h2><font color ="blue">Our themes</font></h2>
<video autoplay muted loop id="myVideo" width="600" height="300" >
<source src="contvideo.mp4" type="video/mp4">
</video>
    </article>
</section>
<footer>
  <a href="index7.html"><font color="red">Click here for Site-Map</a></font>
</footer>
</body>
</html>
