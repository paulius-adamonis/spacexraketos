<?php
	require_once("includes/header.php");
?>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
		<title>SpaceX Raketų Sistema</title>
		<meta content="">
		</head>
<div class="center">
<form   method="post" action="index.php" onSubmit="return validateForm();">
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;font-size : 24px;">Skrydžio atsiliepimo forma</div>
<div style="padding-bottom: 18px;">Atsiliepimą rašantis asmuo<span style="color: red;"> *</span><br/>
<input type="text" id="data_2" name="data_2" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px; ">Kur skridote?<br/>
<select id="data_3" name="data_3" style="width : 450px;" class="form-control"><option></option>
<option>Į Saulę (kaip išgyvenot?)</option>
<option>Į Mėnulį</option>
<option>Į Marsą</option>
<option>Kažkur toli</option>
<option>Nežinau</option>
</select>
</div>
<div style="padding-bottom: 18px;">Įvertinkite<span style="color: red;"> *</span><br/>
<select id="data_4" name="data_4" style="width : 150px;" class="form-control"><option>Išgyvenau</option>
<option>Patiko</option>
<option>Nekartočiau</option>
<option>Skrisiu dar kartą</option>
<option>Prastas vairuotojas</option>
</select>
</div>
<div style="padding-bottom: 18px;">Raketos pavadinimas<span style="color: red;"> *</span><br/>
<input type="text" id="data_5" name="data_5" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Kas patiko<br/>
<textarea id="data_6" false name="data_6" style="width : 450px;" rows="3" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;">Kas nepatiko<br/>
<textarea id="data_7" false name="data_7" style="width : 450px;" rows="3" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;">Komentarai<span style="color: red;"> *</span><br/>
<textarea id="data_8" false name="data_8" style="width : 450px;" rows="9" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;">Ar rekomenduotumėte?<br/>
<span><input type="radio" id="data_9_0" name="data_9" value="Taip"/> Taip</span><br/>
<span><input type="radio" id="data_9_1" name="data_9" value="Ne"/> Ne</span><br/>
<span><input type="radio" id="data_9_2" name="data_9" value="Nežinau"/> Nežinau</span><br/>
</div>
<div  style="padding-bottom: 18px;"><input class="button" name="skip_Submit" value="Pateikti" type="submit"/></div>
<div>
</form>
</div>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_2').value.trim())) {
alert('Asmens vardas reikalingas!');
return false;
}
if (isEmpty(document.getElementById('data_5').value.trim())) {
alert('Raketos pavadinimas reikalingas!');
return false;
}
if (isEmpty(document.getElementById('data_8').value.trim())) {
alert('Komentaras reikalingas!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>


<?php
	require_once("includes/footer.php");
?>