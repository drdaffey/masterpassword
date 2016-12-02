<style>
*:focus {outline-color: #fac847;}
.ui.button {
border-color: #3D444C #2F353B #2C3137;
background-color: #444c55;
border: 1px solid;
border-color: #3D444C #2F353B #2C3137;
box-shadow: 0px 1px 0px 0px rgba(255, 255, 255, 0.2) inset;
color: #ffffff;}
.ui.primary.button {
background-color: #f4cc67;
color: #111111 !important;
border: 1px solid !important;
border-color: #C59F43 #AA8326 #957321 !important;}
.ui.primary.button:hover {
border-color: #C59F43 #AA8326 #957321 !important;
color: #111111 !important;
background-color: #fac847;}
.ui.input:focus {background: rgba(0,0,0,.05);}
</style>
<?php
if (isset($_POST['site'], $_POST['mastpass']) && $_POST['mastpass']!=NULL)
{
	//Set up our dictionaries for the usernames.
$a_ani_1 = array("able","acid","automatic","bright","broken","cheap","chemical","clean","common","complex","conscious","elastic","electric","fat","free","great","happy","hollow","kind","medical","military","new","normal","political","poor","private","probable","quick","quiet","ready","regular","responsible","same","second","serious","sharp","smooth","sticky","strong","sudden","sweet","tired","warm","wise","young");
$a_ani_2 = array("alpaca","bear","bird","camel","cat","cheetah","chicken","chimp","crocodile","deer","dog","dolphin","duck","eagle","elephant","fish","fly","fox","frog","gator","giraffe","goat","goldfish","hamster","horse","kangaroo","kitten","lion","lobster","octopus","owl","panda","pig","rabbit","rat","scorpion","seal","shark","sheep","snake","spider","squirrel","tiger","turtle","zebra");
$a_names_1 = array("ash","brook","corey","dannie","evan","francis","glenn","harper","izzy","jude","kerry","logan","madison","noel","olly","pat","riley","shay","tailor","vic","wesley");
$a_names_2 = array("amney","burke","cull","dodds","ellis","fabian","gledhill","herman","lawson","marsh","nowak","orowski","price","quale","redfern","tuowy","usher","void","whitaker","xano","yates","zayne");

$sitelength = strlen($_POST['site']);
$content = $_POST['site'] . $sitelength . $_POST['site'] . $_POST['gen'] . $_POST['user'];
$key = hash('sha512',$_POST['mastpass']);
$new = hash_hmac('sha512',$content,$key);

if (isset($_POST['length'])) $length = $_POST['length']; else $length=19;
// We want to get the equals sign at the end for a special character. Might substitute that with a different character.
$final = substr(base64_encode($new),"-".$length);
echo '<body style="font-family: courier;">';
$_nice = str_split(preg_replace('/[^0-9]+/', '', md5($key.$_POST['user'].$sitelength.$_POST['site'])));
$_nice_first = $_nice[0].$_nice[1];
$_nice_second = $_nice[1].$_nice[2];
$_nice_third = $_nice[5].$_nice[6].$_nice[7];

$_nice_selector = preg_replace('/[^0-9]+/', '', $_POST['dict']);

switch($_nice_selector){
	case 0: $_words1 = $a_ani_1; $_words2 = $a_ani_2; break;
	case 1: $_words1 = $a_names_1; $_words2 = $a_names_2; break;
	default: $_words1 = $a_ani_1; $_words2 = $a_ani_2; break;
}

// Don't wanna get an empty piece of the username.
if ($_nice_first > count($_words1)) $_nice_first = $_nice[0];
if ($_nice_first-1 < 0) $_nice_first = 1;
if ($_nice_second > count($_words2)) $_nice_second = $_nice[2];
if ($_nice_second-1 < 0) $_nice_second = 1;


if ($_POST['user']!=NULL) echo "Salt was: " . $_POST['user'] . ", "; else echo "No salt, ";
echo "generation " . strtolower($_POST['gen']) . ".";
echo "<br>Username: " . $_words1[$_nice_first-1] . "_" . $_words2[$_nice_second-1] . $_nice_third . "<br>Password (" . strlen($final) . " characters): ";

?>
<button class="ui primary button trig" id="button" style="display:none;" data-clipboard-text="<?php echo $final; ?>">To clipboard</button>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.12/dist/clipboard.min.js"></script>
<script>
var clipboard = new Clipboard('.trig');
document.getElementById("button").style.display = "inline";
</script>
<noscript>
<?php die($final);}?>
</noscript>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<select name="dict" class="ui primary button" >
<option value="0">Animals</option>
<option value="1">Names</option>
</select>
Enter site name:
<input type="text" class="ui input" name="site" autofocus/>
Enter mastpass:
<input type="password" class="ui input" name="mastpass" />
Generation:
<select name="gen" class="ui primary button" >
<?php $a_gen=array("Aztec","Alexandria","Rome","Persepolis","Troy","Beroe","Babylon","Carthage","Sukhothai","Norse","Caral","Han","Pompeii","Timgad","Hatra","Hattusa","Memphis","Persia","Teotihuacan","Tikal","Angkor","Thracia","Egypt","Taxila","Mongol","Palmyra","Ctesiphon","Hvalsey","Palenque","Tiwanaku");
foreach($a_gen as $gen)
echo '<option value="',$gen,'">',$gen,'</option>'; ?>
</select><br><br>
Enter unique salt (Your favourite colour?):
<input type="password" class="ui input" name="user" /><br>
Enter length:
<input type="text" class="ui input" name="length" value="19"/><br><br>
<input type="submit" class="ui primary button" value="Make me some creds!"/><br>
<form><br>
MPW v3.2
