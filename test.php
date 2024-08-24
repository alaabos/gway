<form action="http://submit.form" id="NewsletterSubscription100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
return true; }
</script>
<table border="0" cellpadding="5" cellspacing="0" style="width: 360px; margin: auto; text-align: left;">
<tr> <td>
<label for="Name">NAME</label><br />
<input name="Name" type="text" maxlength="60" style="width: 340px;" />
</td> </tr> <tr> <td>
<label for="Organization">ORGANIZATION</label><br />
<input name="Organization" type="text" maxlength="60" style="width: 340px;" />
</td> </tr> <tr> <td>
<label for="FromEmailAddress">EMAIL</label><br />
<input name="FromEmailAddress" type="text" maxlength="60" style="width: 340px;" />
</td> </tr> <tr> <td align="center">
<div style="float: right"><a href="http://www.100forms.com" id="lnk100" title="web forms">forms</a></div>
<script src="http://www.100forms.com/js/FORMKEY:SRNN8NMGTZF3/SEND:XXXX@XXXX.com" type="text/javascript"></script>
<input id="skip_Submit" name="skip_Submit" type="submit" value="SUBSCRIBE" />
</td> </tr>
</table>
</form>