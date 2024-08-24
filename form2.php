<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x=$_POST['x'];
if($x==5) {echo"
<tr>
<td class=\"f_right\" width=\"410\" >
<table>
<tr><td width=\"140\">
نوع الخدمة:
</td><td align=\"left\">
<select name=\"service\" onchange=\"loadXMLDoc(this.value)\">";

$options=array("تصميم شعار بدون هوية","تصميم شعار مع هوية","معالجة شعار","تصميم هوية","تصميم المطبوعات","تصميم المواقع");

echo "<option>".$options[$x]."</option>";
for($i=0;$i<6;$i++)
{
	if($i==$x)
	continue;
	echo "<option>".$options[$i]."</option>";
	}
echo"
</select> 
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"name\"  value=\"الاسم:\" onblur=\"if(value=='') value = 'الاسم:'\"  onfocus=\"if(value=='الاسم:') value = ''\" /> <div id=\"id1\" style=\"font-size:10px\"></div>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"email\"  value=\"البريد الإلكتروني:\" onblur=\"if(value=='') value = 'البريد الإلكتروني:'\"  onfocus=\"if(value=='البريد الإلكتروني:') value = ''\" /><div id=\"id3\" style=\"font-size:10px\"></div>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"phone\"  value=\"رقم الهاتف:\" onblur=\"if(value=='') value = 'رقم الهاتف:'\"  onfocus=\"if(value=='رقم الهاتف:') value = ''\" /><div id=\"id2\" style=\"font-size:10px\"></div>
</td></tr>
<tr><td>
الدولة:
</td><td align=\"left\">
<select name=\"city\">
";
$countries = array("المملكة العربية السعودية","سورية","مصر","لبنان","الأردن","العراق","البحرين");
for($i=0;$i<sizeof($countries);$i++){
	echo "<option>".$countries[$i]."</option>";
}
echo"
</select>
</td></tr>
<tr><td>
كيف تعرفت علينا:
</td><td align=\"left\">
<select name=\"how_know\">
<option>محرك البحث جوجل</option>
<option>محركات بحث أخرى</option>
<option>مواقع إنترنت</option>
<option>صحف أو مجلات</option>
<option>صديق</option>
<option>برامج ومواقع التواصل الاجتماعي</option>
</select>
</td></tr>


<tr><td colspan=\"2\">
الخدمات أو المنتجات التي تقدمها بالموقع:
</td></tr>
<tr><td></td><td>
<select name=\"services\">";

$arr1= array("خدمة طبية","خدمات تقنية ","خدمات هندسية","خدمات مكاتب عمل","خدمات اتصالات","خدمات تعليمية","خدمات الطيران","خدمات سياحية","خدمات الشحن ","خدمات تنظيم حفلات","خدمات المطاعم","خدمات التسويق الالكتروني","خدمات فنية","البسة","ادوية","أغذية","الكمبيوتر","الحلويات","التجميل","البناء","المفروشات","النظارات الطبية",">التحف الشرقية","اكسسوارات","الحقائب والأحذية","الملابس الداخلية","البياضات المنزلية","الأدوات الكهربائية","المقاولات","أخرى");

for($i=0;$i<sizeof($arr1);$i++){
echo"<option>".$arr1[$i]."</option>";	
	}

echo"
 </select>
 </td></tr>
<tr><td>
هل الموقع:
</td><td>
<select name=\"project_type\">
 <option>شخصي</option>
<option>شركة تجارية</option>
<option>مشروع صغير</option>
</select>
</td></tr>
<tr><td colspan=\"2\">
ما نوع الموقع:
</td></tr></table><table class=\"f_right2\">
<tr><td></td><td colspan=\"3\">
<input type=\"radio\"  name=\"radio0\" value=\"ثابت\"  checked=\"checked\" />ثابت (تعديل اي عنصر من قبل المبرمج حصرا)
</td></tr><tr><td></td><td colspan=\"3\">
<input type=\"radio\" name=\"radio0\" value=\"إدارة محتوى\" />إدارة محتوى (التعديل والإضافة من قبل الزبون)
</td></tr>
<tr><td colspan=\"4\">
هل اطلعت على مواقع تشابه نوع عملك/خدماتك؟ 
</td></tr>
<tr><td width=\"80\"></td><td>
 <input type=\"radio\"  name=\"radio1\" value=\"نعم\" checked=\"checked\" />
 نعم
</td><td>
<input type=\"radio\" name=\"radio1\" value=\"لا\" />
لا
</td><td width=\"130\"></td></tr>

<tr><td colspan=\"4\">
<p class=\"small\">
 (إذا اجبت بنعم يرجى كتابة روابط المواقع في الجدول التالي
 <br/>
 كتابة اسم الموقع_رابط الموقع_الأفكار التي أعجبتك من ذلك الموقع)
 </p>
</td></tr>
<tr><td colspan=\"4\">
<textarea  name=\"textarea0\" >
</textarea>
</td></tr>
<tr><td colspan=\"4\">
هل لديك أي فكرة او اقتراح لجعل موقعك يتميز به ؟ 
</td></tr>
<tr><td colspan=\"4\">
<textarea  name=\"textarea1\" onfocus=\"this.value=''\"></textarea>
</td></tr>
<tr><td colspan=\"4\">
اكتب خمسة أفكار تريدها في موقعك؟
</td></tr>
<tr><td colspan=\"4\">
<textarea  name=\"textarea2\" onfocus=\"this.value=''\">
</textarea>
</td></tr>
<tr><td colspan=\"4\">
ما الذي تجده مميزا في موقعك الحالي 
</td></tr>
<tr><td colspan=\"4\">
<textarea  name=\"textarea3\" onfocus=\"this.value=''\" >
</textarea>
</td></tr>
<tr><td colspan=\"4\">
ما الشريحة العمرية التي تهمك؟
</td></tr></table><table>
<tr><td>
<input type=\"text\"  name=\"age\" />
</td></tr>
<tr><td>
لغة الموقع (هل للموقع لغة واحدة أو أكثر):
</td></tr>
</table><table class=\"f_right2\">
<tr><td>
<input type=\"checkbox\" name=\"lang1\" value=\"عربي\"  />عربي
</td><td>
<input type=\"checkbox\" name=\"lang2\"  value=\"إنجليزي\"/>إنجليزي
</td><td>
<input type=\"checkbox\" name=\"lang3\" value=\"فرنسي\" />فرنسي
</td><td>
<input type=\"checkbox\" name=\"lang4\" value=\"أخرى\" />أخرى
</td></tr>
<tr><td colspan=\"4\">
ما هي أهم الإضافات التي تريدها؟
</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"adds1\" value=\"شبكات التواصل الاجتماعية\" />
شبكات التواصل الاجتماعية
</td><td colspan=\"2\"> 
<input type=\"checkbox\" name=\"adds2\" value=\"النشرات البريدية\" />
النشرات البريدية
</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"adds3\" value=\"البحث المخصص\" />
البحث المخصص
</td><td colspan=\"2\">
<input type=\"checkbox\" name=\"adds4\" value=\"استمارات التسجيل\" />
استمارات التسجيل 
</td></tr>
<tr><td>
<input type=\"checkbox\" name=\"adds5\" value=\"RSS\" />
RSS
</td><td >
<input type=\"checkbox\" name=\"adds6\" value=\"تسجيل دخول\" />
تسجيل دخول
</td><td>
<input type=\"checkbox\" name=\"adds7\" value=\"أخرى\" />
أخرى 
</td><td></td></tr>
</table></td>
<td width=\"410\" class=\"f_right\">
<table>
<tr><td colspan=\"2\">
ما هي الألوان التي تفضلها في الموقع ؟
</td></tr><tr><td colspan=\"2\">
<input type=\"text\" name=\"colors\" />
</td></tr><tr><td colspan=\"2\">
ما هي الألوان التي لا تفضلها في الموقع ؟
</td></tr><tr><td colspan=\"2\">
<input type=\"text\" name=\"nocolors\" />
</td></tr><tr><td colspan=\"2\">
هل هناك مواقع تجذبك تصميمها؟ 
<p class=\"small\">(إذا وجد اكتب روابط هذه المواقع واسمائها)</p>
</td></tr><tr><td colspan=\"2\">
<textarea name=\"textarea4\" class=\"textarea1\" ></textarea>
</td></tr><tr><td colspan=\"2\">
هل لديك وقت محدد لافتتاح الموقع او المشروع؟
<p class=\"small\">
(إذا وجد اكتب التاريخ)</p>
</td></tr><tr><td colspan=\"2\">
<input type=\"text\" name=\"date\" onfocus=\"this.value=''\"  />
</td></tr><tr><td colspan=\"2\">
هل ستقوم بعمليات البيع عبر الموقع ام لا؟
</td></tr>
</table>

<table class=\"f_right2\">
<tr><td width=\"60\"></td><td width=\"180\">
<input type=\"radio\" name=\"radio2\" value=\"نعم\" checked=\"checked\" />نعم
</td><td>
<input type=\"radio\" name=\"radio2\" value=\"لا\" />لا
</td><td></td></tr>
<tr><td colspan=\"4\">
هل لديك لوغو خاص بك ام لا؟
<p class=\"small\">ان وجد يجب ارسال اللوغو (ملف psd او ai أو eps)</p>
</td></tr><tr><td></td><td>
<input type=\"radio\" name=\"radio3\" value=\"نعم\" checked=\"checked\" />نعم
</td><td>
<input type=\"radio\" name=\"radio3\" value=\"لا\" />لا
</td><td></td></tr><tr><td colspan=\"4\">
هل لديك صور تريد استخدامها في الموقع ام تترك حرية الاختيار للمصمم 
<p class=\"small\">(إن وجد الصور يجب ان تكون بدقة واضحة وارسال جميع الصور المطلوبة قبل البدء بالعمل)</p>
</td></tr><tr><td></td><td>
<input type=\"radio\" name=\"radio4\" value=\"نعم\" checked=\"checked\" />نعم
</td><td>
<input type=\"radio\" name=\"radio4\" value=\"لا\" />لا
</td><td></td></tr><tr><td colspan=\"4\">
هل تريد إضافة خدمة seo إلى موقعك
<p class=\"small\">(آلية لجعل موقعك يظهر محركات البحث بالمراتب الأولى)</p>
</td></tr><tr><td></td><td >

<input type=\"radio\" name=\"radio5\" value=\"نعم\" checked=\"checked\" />نعم
</td><td>
<input type=\"radio\" name=\"radio5\" value=\"لا\" />لا
</td><td></td></tr>
</table><table>
<tr><td colspan=\"2\">
هل لديك اسم نطاق ومساحة خاصة بموقعك الجديد ام لا؟ 
<p class=\"small\">(إذا وجد كتابة اسم المستخدم وكلمة المرور الخاصة باسم النطاق)</p>
</td></tr><tr><td  colspan=\"2\">

<textarea name=\"textarea5\" class=\"textarea1\"></textarea>
</td></tr><tr><td colspan=\"2\">


هل لديك صفحات على شبكات التواصل الاجتماعي؟
<p class=\"small\"> يرجى كتابة رابط الصفحات</p>
</td></tr><tr><td colspan=\"2\">

<textarea  name=\"textarea6\" class=\"textarea1\"></textarea>
</td></tr><tr><td colspan=\"2\">


هل هنالك مواقع صديقة تريد إضافتها في الموقع؟
<p class=\"small\">(الرجاء كتابة أسماء صفحات الموقع التي تريدها)</p>
</td></tr><tr><td colspan=\"2\">

<textarea  name=\"textarea7\" class=\"textarea1\"></textarea>
</td></tr>
</table><table class=\"f_right2\">
<tr><td colspan=\"4\">
هل لديك مخطط توزيع مبدئي للموقع؟
<p class=\"small\">ان وجد الرجاء رسمه (او مخطط الموقع القديم ان وجد كتابة الرابط الموقع )</p>
</td></tr>
<tr><td width=\"60\"></td><td width=\"180\">
<input type=\"radio\" name=\"radio6\" value=\"نعم\" checked=\"checked\" />نعم
</td><td>
<input type=\"radio\" name=\"radio6\" value=\"لا\" />لا
</td><td></td></tr>
</table><table class=\"f_right\"><tr><td colspan=\"2\">

<input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr>
<tr><td width=\"195\">
السعر (للاستخدام الرسمي):</td><td> 
<input type=\"text\" name=\"price\" class=\"price\" size=\"21\"/> 
</td></tr>
</table><table>
<tr><td width=\"275\"></td><td>
<input type=\"submit\" name=\"submit\" class=\"button\" value=\"إرسال\"/>
</form>
</td></tr>

</table>
";}
else if($x!=5){
echo"
<tr>
<td class=\"f_right\" width=\"410\">
<table>
<tr><td width=\"140\">
نوع الخدمة:
</td><td>
<select name=\"service\" onchange=\"loadXMLDoc(this.value)\">";

$options=array("تصميم شعار بدون هوية","تصميم شعار مع هوية","معالجة شعار","تصميم هوية","تصميم المطبوعات","تصميم المواقع");

echo "<option>".$options[$x]."</option>";
for($i=0;$i<6;$i++)
{
	if($i==$x)
	continue;
	echo "<option>".$options[$i]."</option>";
	}
echo"
</select> 
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"name\" value=\"الاسم:\" onblur=\"if(value=='') value = 'الاسم:'\"  onfocus=\"if(value=='الاسم:') value = ''\" />    <div id=\"id1\" style=\"font-size:10px\"></div>


</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"email\" value=\"البريد الإلكتروني:\" onblur=\"if(value=='') value = 'البريد الإلكتروني:'\"  onfocus=\"if(value=='البريد الإلكتروني:') value = ''\"/> <div id=\"id3\" style=\"font-size:10px\"></div>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"phone\" value=\"رقم الهاتف:\" onblur=\"if(value=='') value = 'رقم الهاتف:'\"  onfocus=\"if(value=='رقم الهاتف:') value = ''\" /> <div id=\"id2\" style=\"font-size:10px\"></div>

</td></tr>
<tr><td>
الدولة:
</td><td>
<select name=\"city\">
";
$countries = array("المملكة العربية السعودية","سورية","مصر","لبنان","الأردن","العراق","البحرين");
for($i=0;$i<sizeof($countries);$i++){
	echo "<option>".$countries[$i]."</option>";
}
echo"
</select>
</td></tr>
<tr><td>
كيف تعرفت علينا:
</td><td>
<select name=\"how_know\">
<option>محرك البحث جوجل</option>
<option>محركات بحث أخرى</option>
<option>مواقع إنترنت</option>
<option>صحف أو مجلات</option>
<option>صديق</option>
<option>برامج ومواقع التواصل الاجتماعي</option>
</select>
</td></tr>
";


if($x==0)
echo"
<tr><td>
نوع الشعار:
</td>
<td>
<select name=\"logo\">
<option>شعار شخصي</option>
<option>شعار منشأة</option>

</select>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"e_logo\" value=\"نص الشعار باللغة الإنجليزية:\"  onblur=\"if(value=='') value = 'نص الشعار باللغة الإنجليزية:'\"  onfocus=\"if(value=='نص الشعار باللغة الإنجليزية:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"a_logo\" value=\"نص الشعار باللغة العربية:\" onblur=\"if(value=='') value = 'نص الشعار باللغة العربية:'\"  onfocus=\"if(value=='نص الشعار باللغة العربية:') value = ''\"/>
</td></tr>
</table>
</td>
<td class=\"f_right\"><table>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_name\" value=\"اسم المنشأة:\" onblur=\"if(value=='') value = 'اسم المنشأة:'\"  onfocus=\"if(value=='اسم المنشأة:') value = ''\"/>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_work\" value=\"نشاط المنشأة:\" onblur=\"if(value=='') value = 'نشاط المنشأة:'\"  onfocus=\"if(value=='نشاط المنشأة:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"colors\"  value=\"ما هي الألوان التي تريدها أن تظهر في الشعار؟\" onblur=\"if(value=='') value = 'ما هي الألوان التي تريدها أن تظهر في الشعار؟'\"  onfocus=\"if(value=='ما هي الألوان التي تريدها أن تظهر في الشعار؟') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<textarea name=\"notes\"  onblur=\"if(value=='') value = 'أعمال أخرى أو ملاحظات:'\"  onfocus=\"if(value=='أعمال أخرى أو ملاحظات:') value = ''\"\">أعمال أخرى أو ملاحظات:</textarea>
</td></tr>
<tr><td colspan=\"2\">
 <input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr>
<tr><td width=\"195\">
السعر (للاستخدام الرسمي):</td><td> 
<input type=\"text\" name=\"price\" class=\"price\"/>    
</td></tr></table>
<table>
<tr><td width=\"275\"></td><td><input type=\"submit\" class=\"button\" name=\"submit\" value=\"إرسال\"/>
</td></tr></table>
</td>
</table>
</form>
   
</td>
</tr>

</div>

    
";

else if($x==4)
echo"
</table><table>
<tr><td colspan=\"2\">
<textarea name=\"required_services\" onblur=\"if(value=='') value = 'الأعمال المطلوبة:'\"  onfocus=\"if(value=='الأعمال المطلوبة:') value = ''\" class=\"textarea1\">الأعمال المطلوبة:</textarea>
</td></tr>
</table>
</td>
<td class=\"f_right\"><table>
<tr><td colspan=\"2\">
<textarea name=\"notes\" onblur=\"if(value=='') value = 'أعمال أخرى أو ملاحظات:'\"  onfocus=\"if(value=='أعمال أخرى أو ملاحظات:') value = ''\">أعمال أخرى أو ملاحظات:</textarea>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr>
<tr><td width=\"195\">
السعر (للاستخدام الرسمي):</td><td> 
<input type=\"text\" name=\"price\" class=\"price\" />    
</td></tr></table>
<table>
<tr><td width=\"275\"></td><td>
<input type=\"submit\" class=\"button\" name=\"submit\" value=\"إرسال\"/>
</td></tr>

</table>

</form>

</td>
</tr>
";


else if($x==1 or $x==2 or $x==3){
if($x==2)
echo "
<tr><td>
نوع الشعار:
</td>
<td>
<select name=\"logo\">
<option>شعار شخصي</option>
<option>شعار منشأة</option>
</select>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_name\" value=\"اسم المنشأة:\" onblur=\"if(value=='') value = 'اسم المنشأة:'\"  onfocus=\"if(value=='اسم المنشأة:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_work\" value=\"نشاط المنشأة:\" onblur=\"if(value=='') value = 'نشاط المنشأة:'\"  onfocus=\"if(value=='نشاط المنشأة:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<textarea name=\"notes\"  onblur=\"if(value=='') value = 'أعمال أخرى أو ملاحظات:'\"  onfocus=\"if(value=='أعمال أخرى أو ملاحظات:') value = ''\">أعمال أخرى أو ملاحظات:</textarea>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr></table><table>
<tr><td width=\"300\">
السعر (للاستخدام الرسمي):</td><td> 
<input type=\"text\" name=\"price\" class=\"price\" />    
</td></tr>
</table>
</td>";

else if($x==3)
echo "
<tr><td>
نوع الهوية:
</td>
<td>
<select name=\"logo\">
<option>هوية شخصية</option>
<option>هوية منشأة</option>
</select>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"required_services\" value=\"الخدمات المطلوبة:\" onblur=\"if(value=='') value = 'الخدمات المطلوبة:'\"  onfocus=\"if(value=='الخدمات المطلوبة:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<textarea name=\"notes\"  onblur=\"if(value=='') value = 'أعمال أخرى أو ملاحظات:'\"  onfocus=\"if(value=='أعمال أخرى أو ملاحظات:') value = ''\">أعمال أخرى أو ملاحظات:</textarea>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr></table><table>
<tr><td width=\"300\">
السعر (للاستخدام الرسمي): </td><td>
<input type=\"text\" name=\"price\" class=\"price\" />    
</td></tr>
</table>
</td>
";

else echo"
<tr><td>
نوع الشعار:
</td>
<td>
<select name=\"logo\">
<option>شعار شخصي</option>
<option>شعار منشأة</option>
</select>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"e_logo\" value=\"نص الشعار باللغة الإنجليزية:\"  onblur=\"if(value=='') value = 'نص الشعار باللغة الإنجليزية:'\"  onfocus=\"if(value=='نص الشعار باللغة الإنجليزية:') value = ''\"  />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"a_logo\" value=\"نص الشعار باللغة العربية:\" onblur=\"if(value=='') value = 'نص الشعار باللغة العربية:'\"  onfocus=\"if(value=='نص الشعار باللغة العربية:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_name\" value=\"اسم المنشأة:\" onblur=\"if(value=='') value = 'اسم المنشأة:'\"  onfocus=\"if(value=='اسم المنشأة:') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"facility_work\" value=\"نشاط المنشأة:\" onblur=\"if(value=='') value = 'نشاط المنشأة:'\"  onfocus=\"if(value=='نشاط المنشأة:') value = ''\"  />
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" name=\"colors\"  value=\"ما هي الألوان التي تريدها أن تظهر في الشعار؟\" onblur=\"if(value=='') value = 'ما هي الألوان التي تريدها أن تظهر في الشعار؟'\"  onfocus=\"if(value=='ما هي الألوان التي تريدها أن تظهر في الشعار؟') value = ''\" />
</td></tr>
<tr><td colspan=\"2\">
<textarea name=\"notes\" onblur=\"if(value=='') value = 'أعمال أخرى أو ملاحظات:'\"  onfocus=\"if(value=='أعمال أخرى أو ملاحظات:') value = ''\">أعمال أخرى أو ملاحظات:</textarea>
</td></tr>
<tr><td colspan=\"2\">
<input type=\"text\" id=\"fileName\" class=\"file_input_textbox\" value=\"تحميل ملف/صورة:\" readonly=\"readonly\">

    <div class=\"upload\">
        <input type=\"file\" name=\"file\" onchange=\"javascript: document.getElementById('fileName').value = this.value\" 
/>
    </div></td></tr></table>
<table><tr><td width=\"300\">
السعر (للاستخدام الرسمي): </td><td>
<input type=\"text\" name=\"price\" class=\"price\" />    
</td></tr>
</table>
</td>";
echo "
<td  class=\"f_right\">
<table width=\"480\" class=\"f_left\"  cellpadding=\"2\">
<tr><td>
 الخدمات المطلوبة:
</td></tr>
<tr><td>
<input type=\"checkbox\" name=\"check1\" value=\"رسم شعار\" />رسم شعار
</td><td>
<input type=\"checkbox\" name=\"check2\" value=\"ورق مراسلات (قياس A4)\" />ورق مراسلات (قياس A4)
</td></tr><tr><td>
<input type=\"checkbox\" name=\"check3\" value=\"كرت فيزت (9cm x 5cm)\"/>كرت فيزت (9cm x 5cm)
</td><td>
<input type=\"checkbox\" name=\"check4\" value=\"ختم\" />ختم
</td></tr><tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check5\" value=\"مذكرة داخلية\"  onchange=\"b2(this,document.form1.check5a);\"/>مذكرة داخلية:
</td></tr>
<tr><td colspan=\"2\">


<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check5a\"  value=\"(A2 (59.4cm x 42cm\" onclick=\"b1(document.form1.check5)\"/>(A2 (59.4cm x 42cm
</td><td>
<input type=\"radio\" name=\"check5a\"  value=\"(A3 (42cm x 29.7cm\" onclick=\"b1(document.form1.check5)\"/>(A3 (42cm x 29.7cm
</td></tr><tr><td></td><td>
<input type=\"radio\" name=\"check5a\"  value=\"(A4 (21cm x 29.7cm\" onclick=\"b1(document.form1.check5)\"/>(A4 (21cm x 29.7cm
</td><td>
<input type=\"radio\" name=\"check5a\"  value=\"(A5 (14.8cm x 21cm\" onclick=\"b1(document.form1.check5)\"/>(A5 (14.8cm x 21cm
</td></tr><tr><td></td><td>
<input type=\"radio\" name=\"check5a\" value=\"(A6 (14.8cm x 10.5cm\" onclick=\"b1(document.form1.check5)\"/>(A6 (14.8cm x 10.5cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check6\" value=\"أظرف\"  onchange=\"b2(this,document.form1.check6a);\" />أظرف:
</td></tr><tr><td colspan=\"2\">


<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check6a\"  value=\"(C6 (16.2cm x 11.4cm\" onclick=\"b1(document.form1.check6)\"/>(C6 (16.2cm x 11.4cm
</td><td>
<input type=\"radio\" name=\"check6a\" value=\"(DL (22cm x 11cm\" onclick=\"b1(document.form1.check6)\"/>(DL (22cm x 11cm
</td></tr><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check6a\" value=\"(C5 (22.9cm x 16.2cm\" onclick=\"b1(document.form1.check6)\"/>(C5 (22.9cm x 16.2cm
</td><td>
<input type=\"radio\" name=\"check6a\" value=\"(C4 (32.4cm x 22.9cm\" onclick=\"b1(document.form1.check6)\"/>(C4 (32.4cm x 22.9cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check7\" value=\"فولدر\"  onchange=\"b2(this,document.form1.check7a);\" />فولدر:
</td></tr><tr><td colspan=\"2\">

<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check7a\" value=\"(A3 (42cm x 29.7cm\" onclick=\"b1(document.form1.check7)\"/>(A3 (42cm x 29.7cm
</td><td>
<input type=\"radio\" name=\"check7a\" value=\"(A4 (21cm x 29.7cm\" onclick=\"b1(document.form1.check7)\"/>(A4 (21cm x 29.7cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check8\" value=\"فاتورة\"  onchange=\"b2(this,document.form1.check8a);\" />فاتورة:
</td></tr><tr><td colspan=\"2\">


<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check8a\" value=\"(A4 (21cm x 29.7cm\" onclick=\"b1(document.form1.check8)\"/>(A4 (21cm x 29.7cm
</td><td>
<input type=\"radio\" name=\"check8a\" value=\"(A5 (14.8cm x 21cm\" onclick=\"b1(document.form1.check8)\" />(A5 (14.8cm x 21cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check9\" value=\"سند قبض\"  onchange=\"b2(this,document.form1.check9a);\" />سند قبض:
</td></tr><tr><td colspan=\"2\" \">


<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check9a\" value=\"(A4 (21cm x 29.7cm\" onclick=\"b1(document.form1.check9)\" />(A4 (21cm x 29.7cm
</td><td>
<input type=\"radio\" name=\"check9a\" value=\"(A5 (14.8cm x 21cm\" onclick=\"b1(document.form1.check9)\" />(A5 (14.8cm x 21cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check10\" value=\"سند صرف\" onchange=\"b2(this,document.form1.check10a);\" />سند صرف:
</td></tr><tr><td colspan=\"2\">
<table width=\"400\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check10a\" value=\"(A4 (21cm x 29.7cm\" onclick=\"b1(document.form1.check10)\" />(A4 (21cm x 29.7cm
</td><td>
<input type=\"radio\" name=\"check10a\" value=\"(A5 (14.8cm x 21cm\"  onclick=\"b1(document.form1.check10)\"/>(A5 (14.8cm x 21cm
</td></tr></table>

</td></tr>
<tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check11\" value=\"سيدي CD\"  />سيدي CD
</td></tr><tr><td colspan=\"2\">
<input type=\"checkbox\" name=\"check12\" value=\"غلاف سيدي CD\"  onchange=\"b2(this,document.form1.check12a);\" />غلاف سيدي CD:
</td></tr><tr><td colspan=\"2\">

<table width=\"440\"><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check12a\" value=\"(12cm x 12cm) when closed and opens to (12cm x 24cm)\" onclick=\"b1(document.form1.check12)\" />(12cm x 12cm) when closed and opens to (12cm x 24cm)
</td></tr><tr><td width=\"30\"></td><td>
<input type=\"radio\" name=\"check12a\" value=\"(12cm x 12cm) when close and opens to (12cm x 36cm)\" onclick=\"b1(document.form1.check12)\" />(12cm x 12cm) when close and opens to (12cm x 36cm)
</td></tr></table>

</td></tr>
</table><table>
<tr><td width=\"275\"></td><td>
<input type=\"submit\" class=\"button\" name=\"submit\" value=\"إرسال\"/>
</td></tr>

</table>
</form>
</td>
</tr>











";}}
?>
</body>
</html>