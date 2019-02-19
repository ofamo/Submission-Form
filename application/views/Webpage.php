<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html>
<head>  
        <!--POPup-->
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/css/style.css">
				<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/css/style2.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="description" content ="My website">
	<title>Suggestions</title>
	
</head>
<body>
<div class="banner">
	<img class="img1" src="https://osboha180suggestion.000webhostapp.com/css/logo.png">
</div>

<div dir="rtl"id="timer" class="timer" style="color:black">
		موعد الاغلاق: <?php if(isset($ad)) {echo $ad . "  ";} if(isset($ed)){echo " GMT ".$ed;}  "</br>";
					
		?> 
		</div>

<div class="HP"><div class="HPinsider">
<br>	

<div> <?php if(isset($response)){echo $response	;} ?>	<br></div>
<div class="container">

  <form method='post' action='https://osboha180suggestion.000webhostapp.com/'>

    <table id="table2" width="400px" style="margin-top:50; mragin-left:20px; color:#FFF">
			<tr>
				<td valign="top">
					<label dir="rtl" id="one" for="name">اسم السفير</label>
				</td>
				</tr>
				<tr>
				<td>
				<input dir="rtl" type="text" id="username" name="username" required placeholder="ضع اسمك..." style="margin-bottom:10px"/>
				</td>
			</tr>
			<tr>
			<td>
				<label dir="rtl" id="one" for="catagory">فئة الكتاب</label>
			</td>
			</tr>
			<tr>
			<td>
		<select dir="rtl" id="catagory" name="catagory" required>
		<option value="" selected disabled hidden>  ..اختر فئة الكتاب.. </option>
		<option value="1">كتاب علوم دينية</option>
		<option value="2"> كتاب تنمية بشرية</option>
		<option value="3 ">كتاب علوم فكرية</option>
		<option value="4 ">كتاب علوم اجتماعية</option>
		<option value="5">كتاب علوم تربوية</option>
		<option value="6">كتاب في الأدب</option>
		<option value="7">كتاب في علم الاقتصاد</option>
		<option value="8">كتاب في العلوم العسكرية</option>
		<option value="9 "> كتاب في العلوم السياسية </option>
		<option value="10">كتاب في التاريخ </option>
		<option value="11">كتب السير الذاتية</option>
		<option value="12">كتاب أجنبي</option>
		<option value="13"> غير مصنفة </option>
		</select>
		</td>
		</tr>
		<tr>
		<td>
	 <label dir="rtl" id="one" for="book">اسم الكتاب</label>
		</td>
		<tr>
		<td>
    <input dir="rtl" type="text" id="book" name="book" required placeholder="ضع اسم الكتاب..">
		</td>
		</tr>
		<tr>
		<td>
	<label dir="rtl" id="one" for="publish">دار النشر</label>
		</td>
		</tr>
		<tr>
		<td>
	<input dir="rtl" type="text" id="publish" name="publish" required placeholder="اسم دار النشر..">
		</td>
		</tr>
		<tr>
		<td>
    <label id="one" for="subject" dir="rtl">نبذة عن الكتاب (اكثر من 75 كلمة)</label>
		</td>
		</tr>
		<tr>
		<td>
	<textarea  dir="rtl" name="subject" id="subject"  placeholder="ضع النبذة هنا..." style="height:200px" required ></textarea><span style="color:black" id="wordcounter"></span>
		</td>
		</tr>
		<tr>
		<td>
	 <label for="link">رابط الكتاب </label>
		</td>
		</tr>
		<tr>
		<td>
	<input  dir="rtl" type="text" id="link" name="link" placeholder="رابط الكتاب ان وجد..">
		</td>
		</tr>
		<tr>
		<td>
    <button name="submit" id="sendbtn" type="submit" value="Submit">إرسال</button>
		</td>
		</tr>
		</table>
		</form>
			<table style="di">
            <tr><td><a href="https://osboha180suggestion.000webhostapp.com/control/"><button>Login</button></a></td></td>
			</table>

  
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script> jQuery(document).ready(function($) {
  
  $('#subject').keyup(function() {
    var currentWordCount = $("#subject").val().match(/\S+/g).length;

    if (currentWordCount >= 75) {
	  $('#wordcounter').html( 'جيد' + '<br>');
    } else {
      $('#wordcounter').html( 75 - currentWordCount + ' تبقى ' + '<br>');
    }
  });
});

$( "form" ).submit(function(event) {
	 var currentWordCount = $("#subject").val().match(/\S+/g).length;
	if(currentWordCount < 75){
		alert("ضع اكثر من 75 كلمة");
		event.preventDefault();
	}
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="https://osboha180suggestion.000webhostapp.com/js/timer.js"></script>

</body>
</html>
