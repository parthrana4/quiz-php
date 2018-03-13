
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="button.css">
	<script type="text/javascript">
	
	function validateIndex(){
		return false;
	}
	
function validateForm(){


    var isFormPost=false;
	
    if(validatePid() && validateForm1() && validateForm2() && validateForm3() && validateForm4() && validateForm5() && validateForm6() && validateForm7() && validateForm8() &&  validateForm9() && validateForm10())
            isFormPost = true;

    return isFormPost;
}
function validatePid()
{
		if(document.Quiz.pid.value=="")
   {
     alert("pid cannot be empty");
	 return false;
    }
	return true;
}
function validateForm1() {
    var radQue1 = document.getElementsByName("question-1-answers");
    var que1Valid = false;

    var i = 0;
    while (!que1Valid && i < radQue1.length) {
        if (radQue1[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que1Valid) alert("Answer Question-1 !");
    return que1Valid;
}

function validateForm2() {
    var radQue2 = document.getElementsByName("question-2-answers");
    var que2Valid = false;

    var i = 0;
    while (!que2Valid && i < radQue2.length) {
        if (radQue2[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que2Valid) alert("Answer Question-2 !");
    return que2Valid;
}

function validateForm3() {
    var radQue3 = document.getElementsByName("question-3-answers");
    var que3Valid = false;

    var i = 0;
    while (!que3Valid && i < radQue3.length) {
        if (radQue3[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que3Valid) alert("Answer Question-3 !");
    return que3Valid;
}

function validateForm4() {
    var radQue4 = document.getElementsByName("question-4-answers");
    var que4Valid = false;

    var i = 0;
    while (!que4Valid && i < radQue4.length) {
        if (radQue4[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que4Valid) alert("Answer Question-4 !");
    return que4Valid;
}

function validateForm5() {
    var radQue5 = document.getElementsByName("question-5-answers");
    var que5Valid = false;

    var i = 0;
    while (!que5Valid && i < radQue5.length) {
        if (radQue5[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que5Valid) alert("Answer Question-5 !");
    return que5Valid;
}

function validateForm6() {
    var radQue6 = document.getElementsByName("question-6-answers");
    var que6Valid = false;

    var i = 0;
    while (!que6Valid && i < radQue6.length) {
        if (radQue6[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que6Valid) alert("Answer Question-6 !");
    return que6Valid;
}
function validateForm7() {
    var radQue7 = document.getElementsByName("question-7-answers");
    var que7Valid = false;

    var i = 0;
    while (!que7Valid && i < radQue7.length) {
        if (radQue7[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que7Valid) alert("Answer Question-7!");
    return que7Valid;
}
function validateForm8() {
    var radQue8 = document.getElementsByName("question-8-answers");
    var que8Valid = false;

    var i = 0;
    while (!que8Valid && i < radQue8.length) {
        if (radQue8[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que8Valid) alert("Answer Question-8!");
    return que8Valid;
}
function validateForm9() {
    var radQue9 = document.getElementsByName("question-9-answers");
    var que9Valid = false;

    var i = 0;
    while (!que9Valid && i < radQue9.length) {
        if (radQue9[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que9Valid) alert("Answer Question-9!");
    return que9Valid;
}
function validateForm10() {
    var radQue10 = document.getElementsByName("question-10-answers");
    var que10Valid = false;

    var i = 0;
    while (!que10Valid && i < radQue10.length) {
        if (radQue10[i].checked) {
            return true;
            break;
        }
        i++;        
    }

    if (!que10Valid) alert("Answer Question-10!");
    return que10Valid;
}
</script>
</head>

<body>
	<font face="calibri" size="5%" color="white">
	<ul>

  <li><a href="#QUIZ">QUIZ</a></li>


  </li>


</ul>
</font>

			<form name="Quiz" action="grade.php"  method="post" id="quiz">
				<table>
					<tr>
	        <td><font face="calibri" size="5%">Enter PID :</font><input type="number" name="pid" >	
            </tr>
            <tr><td>
            <ol>
            
                <li>
                
                    <h3>The percentage increase in the area of a rectangle, if each of its sides is increased by 20% is?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 13 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)14</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 19</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A shopkeeper sells one transistor for Rs. 840 at a gain of 20% and another for 
					<br>Rs. 960 at a loss of 4%. His total gain or loss percent is:</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 9</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In a 100 m race, A beats B by 10 m and C by 13 m. In a race of 180 m, B will beat C by</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) 5.4m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 6.5m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) 5m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) 7.5m</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How many digits will be there to the right of the decimal point in the product of 95.75 and .02554 ?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) 3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) 4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) 6</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds,is:</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 245m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 200m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 300m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 400m</label>
                    </div>
                
                </li>
            
                </li>
                
                <li>
                
                    <h3>Three times the first of three consecutive odd integers is 3 more than twice the third. The third integer is:</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) 9</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) 13</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) 15</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>3 pumps, working 8 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work to empty the tank in 1 day?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) 9</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) 11</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) 13</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) 12</label>
                    </div>
                
                </li>
					<li>
                
                    <h3>Running at the same constant rate, 6 identical machines can produce a total of 270 bottles per minute.
                    <br>At this rate, how many bottles could 10 such machines produce in 4 minutes?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A)648</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) 1800</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) 2700</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) 300</label>
                    </div>
                
                </li>
					<li>
                
                    <h3>39 persons can repair a road in 12 days, working 5 hours a day. 
					<br>In how many days will 30 persons, working 6 hours a day, complete the work?</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-8-answers-A">A)10</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) 13</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) 14</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) 15</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>A flagstaff 17.5 m high casts a shadow of length 40.25 m. The height of the building, which casts a shadow of length 28.75 m 
					<br>under similar conditions will be:
</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A)10.1m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) 12.5m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) 17.9m</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10answers-D" value="D" />
                        <label for="question-10-answers-D">D) 12.8m</label>
                    </div>
                
                </li>
            </ol>
            </tr>
            <tr>
            <td>
            	<button class="button" style="vertical-align:middle" input type="submit" value="Submit" name="submit" onclick="return validateForm();"><span>SUBMIT QUIZ</span></button></td>
            	<!--<input type="submit" value="submit" onclick="return validateForm();" />-->
		     </tr>
		 </td>
		</table>
		</form>
	
</body>

</html>