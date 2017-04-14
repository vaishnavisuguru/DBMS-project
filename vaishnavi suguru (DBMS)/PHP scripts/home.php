<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<script>

function showQ1(str) {
    if (str == "") {
        document.getElementById("txtHint1").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","query1.php?q="+str,true);
        xmlhttp.send();
    }
}

function showQ2(str) {
    if (str == "") {
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","query2.php?q="+str,true);
        xmlhttp.send();
    }
}

function showQ3(str) {
    if (str == "") {
        document.getElementById("txtHint3").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint3").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","query3.php?q="+str,true);
        xmlhttp.send();
    }
}

function showQ4(str) {
    if (str == "") {
        document.getElementById("txtHint4").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint4").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","query4.php?q="+str,true);
        xmlhttp.send();
    }
}

function showQ5(str) {
    if (str == "") {
        document.getElementById("txtHint5").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint5").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","query5.php?q="+str,true);
        xmlhttp.send();
    }
}

function myC1Function() {
	if(document.getElementById("collapsable1").style.display == "none")
	{
		document.getElementById("collapsable1").style.display = "block";
	}
	else {
	document.getElementById("collapsable1").style.display = "block";
	}
	document.getElementById("collapsable2").style.display = "none";
	document.getElementById("collapsable3").style.display = "none";
	document.getElementById("collapsable4").style.display = "none";
	document.getElementById("collapsable5").style.display = "none";
}

function myC2Function() {
	if(document.getElementById("collapsable2").style.display == "none")
	{
		document.getElementById("collapsable2").style.display = "block";
	}
	else {
	document.getElementById("collapsable2").style.display = "block";
	}
	document.getElementById("collapsable1").style.display = "none";
	document.getElementById("collapsable3").style.display = "none";
	document.getElementById("collapsable4").style.display = "none";
	document.getElementById("collapsable5").style.display = "none";
}

function myC3Function() {
	if(document.getElementById("collapsable3").style.display == "none")
	{
		document.getElementById("collapsable3").style.display = "block";
	}
	else {
	document.getElementById("collapsable3").style.display = "block";
	}
	document.getElementById("collapsable1").style.display = "none";
	document.getElementById("collapsable2").style.display = "none";
	document.getElementById("collapsable4").style.display = "none";
	document.getElementById("collapsable5").style.display = "none";
}

function myC4Function() {
	if(document.getElementById("collapsable4").style.display == "none")
	{
		document.getElementById("collapsable4").style.display = "block";
	}
	else {
	document.getElementById("collapsable4").style.display = "block";
	}
	document.getElementById("collapsable1").style.display = "none";
	document.getElementById("collapsable2").style.display = "none";
	document.getElementById("collapsable3").style.display = "none";
	document.getElementById("collapsable5").style.display = "none";
}

function myC5Function() {
	if(document.getElementById("collapsable5").style.display == "none")
	{
		document.getElementById("collapsable5").style.display = "block";
	}
	else {
	document.getElementById("collapsable5").style.display = "block";
	}
	document.getElementById("collapsable1").style.display = "none";
	document.getElementById("collapsable2").style.display = "none";
	document.getElementById("collapsable3").style.display = "none";
	document.getElementById("collapsable4").style.display = "none";
}
</script>

<style type="text/css">

body {
	
	background: #348F50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #56B4D3, #348F50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #56B4D3, #348F50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}


.center1 {
	position: relative;
    top: 0px;
    float: center;
    width: 1200px;
	margin: auto;
    padding: 50px;
    border: 3px solid red;
}

.center2 {
    float: center;
	top:0px;
	right: -50px;
	margin: auto;
    margin-top: 15px;
    height: 450px;
    border: 3px solid red;
	display: none;
}

h1 {
	position: relative;
    top: -70px;
	right: -600px;
	align:center;
}

h3 {
	position: relative;
	width: 72px;
	left: -2px;
    top: -25px;
	background-color: yellow;
}

h4 {
	width: 300px;
	position: relative;
	right: -15px;
	
}

h5 {
	width: 120px;
	position: relative;
	right: -15px;
	
}



#sq1:hover { 
    background-color: yellow;
	cursor: pointer;
}

#sq2:hover { 
    background-color: yellow;
	cursor: pointer;
}

#sq3:hover { 
    background-color: yellow;
	cursor: pointer;
}

#sq4:hover { 
    background-color: yellow;
	cursor: pointer;
}

#sq5:hover { 
    background-color: yellow;
	cursor: pointer;
}

.tftable {
position:relative;
float:left;
top=-100px;
right:-500px;
font-size:12px;
color:#333333;
width:20%;
border-width: 1px;
border-color: #9dcc7a;
border-collapse: collapse;
}
.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
.tftable tr:hover {background-color:#ffff99;}

#sub { 
    background-color: red;
	position: relative;
	width: 210px;
	left: -2px;
    top: -72px;
	font-size: 90%;
}

#sq1 {
	position: relative;
	float:left;
	left: 0px;
    top:  -90px;
	width: 145px;
	margin: 3%;
    padding: 1px;
    border: 3px solid orange;
}

#sq2 {
	position: relative;
	float:left;
	left: 0px;
    top:  -90px;
	width: 145px;
	margin: 3%;
    padding: 1px;
    border: 3px solid orange;
}	

#sq3 {
	position: relative;
	float:left;
	left: 0px;
    top: -90px;
	width: 145px;
	margin: 3%;
    padding: 1px;
    border: 3px solid orange;
}

#sq4 {
	position: relative;
	float:left;
	left: 0px;
    top: -90px;
	width: 145px;
	margin: 3%;
    padding: 1px;
    border: 3px solid orange;
}

#sq5 {
	position: relative;
	float:left;
	left: 0px;
    top: -90px;
	width: 145px;
	margin: 3%;
    padding: 1px;
    border: 3px solid orange;
}

#engQuery1, #engQuery2, #engQuery3, #engQuery4, #engQuery5 {
	position: relative;
	right: -45px;
    top:  -35px;
	width:750px;
	height: 100px;
	font-family: Courier;
	color: green;
	font-size:18px;
	font-weight: bold;
	
}	

</style>

</head>
<body>

<div class="center1"><h1>Welcome</h1>
   <div id="sq1" class="header" onclick="myC1Function()"><h5>Sample Query 1</h5></div>
   <div id="sq2" class="header" onclick="myC2Function()"><h5>Sample Query 2</h5></div>
   <div id="sq3" class="header" onclick="myC3Function()"><h5>Sample Query 3</h5></div>
   <div id="sq4" class="header" onclick="myC4Function()"><h5>Sample Query 4</h5></div>
   <div id="sq5" class="header" onclick="myC5Function()"><h5>Sample Query 5</h5></div>
</div>

<div class="center2" id="collapsable1" >
    <div id="engQuery1"><h4>Query:Find the list of types of cuisines that is offered by various restaurants in the city of 
	<form>
  <select name="users" onchange="showQ1(this.value)">
  <option value="">Select a City:</option>
  <option value="omaha">Omaha</option>
  <option value="hyderabad">Hyderabad</option>
  <option value="kochi">Kochi</option>
  <option value="chicago">Chicago</option>
  <option value="varanasi">Varanasi</option>
  </select>
</form>
	</h4>
	
	<p id="txtHint1"><br><br><b>Info will be listed here...</b></p>
	</div>
	
	
</div>



<div class="center2" id="collapsable2" >
    <div id="engQuery2"><h4>Query:Find the names of all the customers whose name starts with letter
    	<form>
  <select name="users" onchange="showQ2(this.value)">
  <option value="">Letter's:</option>
  <option value="j">J</option>
  <option value="r">R</option>
  <option value="s">S</option>
  <option value="b">B</option>
  <option value="m">M</option>
  </select>
</form>
	</h4>
	
	<p id="txtHint2"><br><br><b>Info will be listed here...</b></p>
	</div>

</div>

<div class="center2" id="collapsable3" >
    <div id="engQuery3"><h4>Query:Find the customer id from customer table where payment type is through 
    <form>
  <select name="users" onchange="showQ3(this.value)">
  <option value="">Payment Type:</option>
  <option value="credit">Credit Card</option>
  <option value="debit">Debit Card</option>
  <option value="cheque">Cheque</option>
  <option value="paypal">Paypal</option>
  </select>
</form>
	</h4>
	
	<p id="txtHint3"><br><br><b>Info will be listed here...</b></p>
	</div>

</div>

<div class="center2" id="collapsable4" >
    <div id="engQuery4"><h4>Query:Find the cuisine type which uses ingredient
<form>
  <select name="users" onchange="showQ4(this.value)">
  <option value="">Ingrediant:</option>
  <option value="fish">Fish</option>
  <option value="beef">Beef</option>
  <option value="panner">Paneer</option>
  <option value="cheese">Cheese</option>
  <option value="chicken">Chicken</option>
  </select>
</form>	
</h4>

<p id="txtHint4"><br><br><b>Info will be listed here...</b></p>
</div>

</div>


<div class="center2" id="collapsable5" >
    <div id="engQuery5"><h4>Query:Find the name of the customers who dines at a restaturent which is having a rating of 
<form>
  <select name="users" onchange="showQ5(this.value)">
  <option value="">Rating:</option>
  <option value="5">5</option>
  <option value="4">4</option>
  <option value="3">3</option>
  <option value="2">2</option>
  <option value="1">1</option>
  </select>
</form>	
</h4>

<p id="txtHint5"><br><br><b>Info will be listed here...</b></p>
</div>
</div>


</body>
</html>