<html>
<body>
<script>
function alert1() {
alert("exams are near, have you started preparing for?");
}
function confirm1() {
var a = confirm("Exams are near, have you started preparing for?");
if(a == true) {
alert("You pressed ok");
}
else {
alert("You pressed cancel");
}
}
function prompt1() {
var a = prompt("Exams are near, have you started preparing for?");
if(a == null) {
alert("Null");
}
else {
alert(a);
}
}
</script>
<form type = post>
<input type = submit value = alert onclick="alert1()">
<input type = submit value = confirm onclick="confirm1()">
<input type = submit value = prompt onclick="prompt1()" id = "demo">
</form>
</body>
</html>
