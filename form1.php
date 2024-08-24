<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>G.way</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/screen.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script> 
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>  
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/FF-cash.js" type="text/javascript"></script>
</head>
<script>
function loadXMLDoc(opt)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("table1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","form2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
if(opt=="تصميم شعار بدون هوية")
xmlhttp.send("x=0");
else if(opt=="تصميم شعار مع هوية")
xmlhttp.send("x=1");
else if(opt=="معالجة شعار")
xmlhttp.send("x=2");
else if(opt=="تصميم هوية")
xmlhttp.send("x=3");
else if(opt=="تصميم المطبوعات")
xmlhttp.send("x=4");
else xmlhttp.send("x=5");


}

function b1(x) {
	x.checked=true;
	}
	
	function b2(x1,x2){
	if(x1.checked==false){
	for(i=0;i<x2.length;i++){
	x2[i].checked=false;
	}}
	else {
	x2[0].checked=true;
	
	
		}
	}
	
	
	function validateForm() {
    var x = document.forms["form1"]["name"].value;
    var y = document.forms["form1"]["email"].value;
	 var z = document.forms["form1"]["phone"].value;
     var r=isNaN(z);
	 var a; var b ; var c;
	
    if (x == "الاسم:" || x == "") {
        document.getElementById("id1").innerHTML = "الرجاء إدخال الاسم";
		document.forms["form1"]["name"].setAttribute("class","color");
		a=false;        
    }
	else {
				document.forms["form1"]["name"].setAttribute("class","nocolor");
			    document.getElementById("id1").innerHTML = "";
                 a=true;}

if (r && z!="رقم الهاتف:") {
       document.getElementById("id2").innerHTML = "الرجاء إخال رقم هاتف";
	document.forms["form1"]["phone"].setAttribute("class","color");    
		b=false;
		}
else {
	document.getElementById("id2").innerHTML = "";
		document.forms["form1"]["phone"].setAttribute("class","nocolor");
		b=true;}
		
if(y == '' || y != ''){
    var atpos=y.indexOf("@");
    var dotpos=y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length){
document.getElementById("id3").innerHTML = "الرجاء إدخال البريد الإلكتروني بشكل صحيح";
		document.forms["form1"]["email"].setAttribute("class","color");
		    c=false;}

else {
	document.getElementById("id3").innerHTML = "";
		document.forms["form1"]["email"].setAttribute("class","nocolor");
	c=true;
	
	}}
if(!a || !b || !c)
return false;

}
	

</script>
</head>
<?php
if(!isset($_POST['service']))
echo "<body onload=\"loadXMLDoc('تصميم شعار بدون هوية')\">
";
else{
$x=$_POST['service'];
if($x==1) echo"<body onload=\"loadXMLDoc('تصميم شعار بدون هوية')\">
";
else if($x==2) echo"<body onload=\"loadXMLDoc('معالجة شعار')\">
";
else if($x==3) echo"<body onload=\"loadXMLDoc('تصميم هوية')\">
";
else if($x==4) echo"<body onload=\"loadXMLDoc('تصميم المطبوعات')\">
";
else if($x==5) echo"<body onload=\"loadXMLDoc('تصميم المواقع')\">
";
}
?>

 <div id="content">
	<div class="header">
		<div class="logo">
			<img src="images/logo.png"/>
		</div>
		<div class="main_menu">
			<ul>
				<li>
				<a href="#">خدماتنا</a>
				</li>
				<li>
				<a href="#">أعمالنا</a>
				</li>
				<li>
				<a href="#">من نحن</a>
				</li>
				<li>
				<a href="#">اتصل بنا</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="title_form">
	أرجو تعبئة استمارة الطلب
	</div>
	<div class="content_form">
		<form action="" method="post" name="form1" enctype="multipart/form-data" onsubmit="return validateForm()">
			<table align="center" width="800" border="1" id="table1" class="table1">

			</table>
		</form>
	</div>
	<div class="pay">
		<span>طريقة الدفع:</span><br>
		<p>يتم دفع 70 % عند الاتفاق، و 30 % عند تسليم الملفات </p>
		<span>معلومات الحساب: </span><br>
		<p>مؤسسة أعمال حصة للتجارة - مصرف الإنماء <br>
		رقم الحساب: SA1505000068200867776000</p>
	</div>
	<div class="space">
	</div>
<div class="footer">
		<div class="top">
			<img src="images/top_footer.png"/>
		</div>
		<div class="f_content">
			<div class="footer_div" id="f1">
			<h1>روابط صديقة</h1>
			www.hesas.biz <br>
			www.hesas.biz <br>
			www.hesas.biz<br><br>
			<h1>انضم للقائمة البريدية</h1>
			ادخل ايميلك لتصلك عروضنا دائماً
			</div>
			<div class="footer_div" id="f2">
			<h1>اتصل بنا</h1>
			الممكلة العربية السعودية- الرياض <br>
			هاتف: 096612324231 <br>
			فاكس: 096612324231
			</div>
			<div class="footer_div" id="f3">
			<h1>معلومات</h1>
			من نحن <br>
			الخصوصية <br>
			شروط الاستخدام <br>
			خريطة الموقع
			</div>
		</div>
		<div class="b_footer">
		2014 -2015 gway.com, a property of gway.com. All rights reserved
		</div>
	</diV>
 </div>
</body>
</html>


<?php
if(isset ($_POST['submit'])){
	$message="<body dir='rtl' style=\"font-size:16px;\">";
$b="";
$inf="نوع الخدمة: ".$_POST['service']."<br/>";	
$inf.="الاسم: ".$_POST['name']."<br/>";
$inf.="البريد الإلكتروني: ".$_POST['email']."<br/>";
$inf.="رقم الهاتف: ".$_POST['phone']."<br/>";
$inf.="الدولة: ".$_POST['city']."<br/>";
$inf.="كيف تعرفت علينا: ".$_POST['how_know']."<br/>";

if($_POST['service']=="تصميم المواقع"){
$inf.="الخدمات أو المنتجات التي تقدمها بالموقع: ".$_POST['services']."<br/>";
$inf.="هل الموقع: ".$_POST['project_type']."<br/>";	
$inf.="نوع الموقع: ".$_POST['radio0']."<br/>";
$inf.="هل اطلعت على مواقع تشابه نوع عملك/خدماتك؟".$_POST['radio1']."<br/>";
if($_POST['radio1']=="نعم")
	$inf.="اسم ورابط الموقع والأفكار التي أعجبتك: "."<br/>".$_POST['textarea0']."<br/>";
	
else echo"";
$inf.="هل لديك أي فكرة او اقتراح لجعل موقعك يتميز به ؟ "."<br/>".$_POST['textarea1']."<br/>";
$inf.="اكتب خمسة أفكار تريدها في موقعك؟ "."<br/>".$_POST['textarea2']."<br/>";
$inf.="ما الذي تجده مميزا في موقعك الحالي وتريد الاحتفاظ به في موقعك الجديد؟ "."<br/>".$_POST['textarea3']."<br/>";
$inf.="ما الشريحة العمرية التي تهمك؟ ".$_POST['age']."<br/>";
$inf.="لغة الموقع: ";
for($i=1;$i<5;$i++)
{	
$nm="lang".$i;
if(isset($_POST[$nm])){
$inf.=$_POST[$nm]." - ";	
}}
$inf.="<br/>"."ما هي الإضافات التي تريدها؟ "."<br/>";

for($i=1;$i<8;$i++)
{	
$nm1="adds".$i;
if(isset($_POST[$nm1])){
$inf.=$_POST[$nm1]." - ";	
}}
$inf.="<br/>"."ما هي الألوان التي تفضلها في الموقع ؟ ".$_POST['colors']."<br/>";	
$inf.="ما هي الألوان التي لا تفضلها في الموقع ؟ ".$_POST['nocolors']."<br/>";	
$inf.="هل هناك مواقع تجذبك؟ "."<br/>".$_POST['textarea4']."<br/>";	
$inf.="هل لديك وقت محدد لافتتاح الموقع او المشروع؟ ".$_POST['date']."<br/>";
$inf.="هل ستقوم بعمليات البيع عبر الموقع ام لا؟  ".$_POST['radio2']."<br/>";
$inf.="هل لديك لوغو خاص بك ام لا؟ ".$_POST['radio3']."<br/>";
$inf.="هل لديك صور تريد استخدامها في الموقع ام تترك حرية الاختيار للمصمم؟ ".$_POST['radio4']."<br/>";
$inf.="هل تريد إضافة خدمة seo إلى موقعك؟".$_POST['radio5']."<br/>";
$inf.="هل لديك اسم نطاق ومساحة خاصة بموقعك الجديد ام لا؟ "."<br/>".$_POST['textarea5']."<br/>";
$inf.="هل لديك صفحات على شبكات التواصل الاجتماعي؟ "."<br/>".$_POST['textarea6']."<br/>";
$inf.="هل هنالك مواقع صديقة تريد إضافتها في الموقع؟ "."<br/>".$_POST['textarea7']."<br/>";

$inf.="هل لديك مخطط توزيع مبدئي للموقع؟ ".$_POST['radio6']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";

		
	}
	

else if($_POST['service']=="تصميم شعار بدون هوية"){
$inf.="نوع الشعار: ".$_POST['logo']."<br/>";
$inf.="نص الشعار باللغة الإنكليزية: ".$_POST['e_logo']."<br/>";
$inf.="نص الشعار باللغة العربية: ".$_POST['a_logo']."<br/>";
$inf.="اسم المنشأة: ".$_POST['facility_name']."<br/>";
$inf.="نشاط المنشأة: ".$_POST['facility_work']."<br/>";
$inf.="الألوان التي تريدها أن تظهر في الشعار: ".$_POST['colors']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";
}
else if($_POST['service']=="تصميم المطبوعات"){
$inf.="الأعمال المطلوبة: ".$_POST['required_services']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";
}

else if($_POST['service']=="تصميم شعار مع هوية"){
$inf.="نوع الشعار: ".$_POST['logo']."<br/>";
$inf.="نص الشعار باللغة الإنكليزية: ".$_POST['e_logo']."<br/>";
$inf.="نص الشعار باللغة العربية: ".$_POST['a_logo']."<br/>";
$inf.="اسم المنشأة: ".$_POST['facility_name']."<br/>";
$inf.="نشاط المنشأة: ".$_POST['facility_work']."<br/>";
$inf.="الألوان التي تريدها أن تظهر في الشعار: ".$_POST['colors']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";

$b="الخدمات المطلوبة:"."<br/>";
for($i=1;$i<13;$i++)
{	
$nm1="check".$i;
if(isset($_POST[$nm1])){
$b.=$_POST[$nm1]." ";
$nm2=$nm1."a";
	if(isset($_POST[$nm2])){
		$b.=" النوع: ".$_POST[$nm2];
		}
	
			$b.="<br/>";

}
}
}


else if($_POST['service']=="معالجة شعار"){
$inf.="نوع الشعار: ".$_POST['logo']."<br/>";
$inf.="اسم المنشأة: ".$_POST['facility_name']."<br/>";
$inf.="نشاط المنشأة: ".$_POST['facility_work']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";

$b="الخدمات المطلوبة:"."<br/>";
for($i=1;$i<13;$i++)
{	
$nm1="check".$i;
if(isset($_POST[$nm1])){
$b.=$_POST[$nm1]." ";
$nm2=$nm1."a";
	if(isset($_POST[$nm2])){
		$b.=" النوع: ".$_POST[$nm2];
		}
	
			$b.="<br/>";

}
}
}


else if($_POST['service']=="تصميم شعار مع هوية"){
$inf.="نوع الشعار: ".$_POST['logo']."<br/>";
$inf.="نص الشعار باللغة الإنكليزية: ".$_POST['e_logo']."<br/>";
$inf.="نص الشعار باللغة العربية: ".$_POST['a_logo']."<br/>";
$inf.="اسم المنشأة: ".$_POST['facility_name']."<br/>";
$inf.="نشاط المنشأة: ".$_POST['facility_work']."<br/>";
$inf.="الألوان التي تريدها أن تظهر في الشعار: ".$_POST['colors']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";

$b="الخدمات المطلوبة:"."<br/>";
for($i=1;$i<13;$i++)
{	
$nm1="check".$i;
if(isset($_POST[$nm1])){
$b.=$_POST[$nm1]." ";
$nm2=$nm1."a";
	if(isset($_POST[$nm2])){
		$b.=" النوع: ".$_POST[$nm2];
		}
	
			$b.="<br/>";

}
}
}


else if($_POST['service']=="تصميم هوية"){
$inf.="نوع الهوية: ".$_POST['logo']."<br/>";
$inf.="الملاحظات: ".$_POST['notes']."<br/>";
$inf.="السعر: ".$_POST['price']."<br/>";

$b="الخدمات المطلوبة:"."<br/>";
for($i=1;$i<13;$i++)
{	
$nm1="check".$i;
if(isset($_POST[$nm1])){
$b.=$_POST[$nm1]." ";
$nm2=$nm1."a";
	if(isset($_POST[$nm2])){
		$b.=" النوع: ".$_POST[$nm2];
		}
	
			$b.="<br/>";

}
}
}


$message.=$inf.$b;
$name=$_POST['name'];
$type=$_FILES['file']['type'];
if($_FILES['file']['name']){
	if((($type=='image/gif') || ($type=='image/jpeg') || ($type=='image/png') || ($type=='application/zip, application/octet-stream')) && ($_FILES['file']['size']<2000000)){

	$path_part=pathinfo($_FILES['file']['name']);
	$extension=$path_part['extension'];
	$path="uploads/".$name.date('H-i-s').".".$extension;
		if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
			$message.="<a href='http://anoll.org/demo/download.php?file=$path'>تنزيل الملف المرفق</a>";
			}else $message.="فشل تحميل الملف المرفق";
			}else $message.="فشل تحميل الملف المرفق";
	
		}else $message.="لا يوجد ملف مرفق";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail("riham.sarah@gmail.com","form",$message,$headers);
echo"<script type=\"text/javascript\">window.alert('تم إرسال المعلومات بنجاح')</script>";
}

?>

