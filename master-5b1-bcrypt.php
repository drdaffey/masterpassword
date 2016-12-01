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
if (isset($_POST['site'], $_POST['mastpass']) && $_POST['mastpass']!=NULL && $_POST['length'] > 7 && $_POST['length'] < 20){
$a_ani_1 = array("able","acid","automatic","bright","broken","cheap","chemical","clean","common","complex","conscious","elastic","electric","fat","free","great","happy","hollow","kind","medical","military","new","normal","political","poor","private","probable","quick","quiet","ready","regular","responsible","same","second","serious","sharp","smooth","sticky","strong","sudden","sweet","tired","warm","wise","young");
$a_ani_2 = array("alpaca","bear","bird","camel","cat","cheetah","chicken","chimp","crocodile","deer","dog","dolphin","duck","eagle","elephant","fish","fly","fox","frog","gator","giraffe","goat","goldfish","hamster","horse","kangaroo","kitten","lion","lobster","octopus","owl","panda","pig","rabbit","rat","scorpion","seal","shark","sheep","snake","spider","squirrel","tiger","turtle","zebra");
$a_names_1 = array("ash","brook","corey","dannie","evan","francis","glenn","harper","izzy","jude","kerry","logan","madison","noel","olly","pat","riley","shay","tailor","vic","wesley");
$a_names_2 = array("amney","burke","cull","dodds","ellis","fabian","gledhill","herman","lawson","marsh","nowak","orowski","price","quale","redfern","tuowy","usher","void","whitaker","xano","yates","zayne");

$key = crypt($_POST['site'].$_POST['mastpass'],'$2a$16$'.md5($_POST['gen']));
$length = $_POST['length']-1;
$final = preg_replace('/[^[:alnum:]]/','-',substr($key,"-".$length));

echo '<body style="font-family: courier;">';
$number = preg_match_all('/[0-9]/',$key,$matches);
$_nice = str_split(preg_replace('/[^0-9]+/', '', hash('sha512',htmlspecialchars($_POST['site']) . $number)));
$_nice_first = $_nice[0].$_nice[1];
$_nice_second = $_nice[2].$_nice[3];
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

echo $_POST['gen'],' was used for the generation of ',$_POST['site'],'.';
echo "<br>Username: " . $_words1[$_nice_first-1] . $_words2[$_nice_second-1] . $_nice_third . "<br>Password (" . (strlen($final)+1) . " characters): ";?>
<button class="ui primary button trig" id="button" style="display:none;" data-clipboard-text="<?php echo '-',$final; ?>">To clipboard</button>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.12/dist/clipboard.min.js"></script>
<script>
var clipboard = new Clipboard('.trig');
document.getElementById("button").style.display = "inline";
</script>
<?php die("-".$final);}?>

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
<?php $a_gen=array("Acarnanian","Acastus","Acerifolia","Achilles","Acuminata","Acutissima","Admetus","Adonis","Adrastus","Aesculus","Ailanthus","Alba","Albidum","Albizia","Alexandria","Alleghaniensis","Alnus","Altissima","Amabilis","Amelanchier","Americana","Amphilochus","Amphitrite","Amurense","Anchises","Andromedae","Angkor","Angustifolia","Aphrodite","Apollo","Aquarii","Aquilae","Arborea","Ares","Argonauts","Artemis","Asimina","Astonish","Atlantica","Attica","Aucuparia","Aurigae","Austrinus","Aztec","Babylon","Baccata","Beroe","Beta","Betula","Bicolor","Bignonioides","Biloba","Brandenburgicum","Broussonetia","Bungeana","Buxus","Calleryana","Campestre","Canadensis","Cancri","Capricorni","Caral","Carica","Carinae","Carnus","Caroli","Caromiana","Carpinus","Carthage","Carya","Cassiopeia","Castanea","Catalpa","Cedrus","Cembra","Centauri","Cephei","Cepheus","Cerasifera","Cerberus","Cercidiphyllum","Cercis","Ceti","Chamaecyparis","Chionanthus","Cinerea","Cinaggoga","Cladrastis","Clerodendrum","Coccinea","Columbae","Colurna","Communis","Concolor","Cordata","Cordiformis","Cornus","Coronaria","Corylus","Crataegus","Crateris","Cresphontes","Cronus","Cruciastis","Crus-galli","Cryptomeria","Ctesiphon","Cygni","Cyprus","Daniellii","Decidua","Delphini","Deltoides","Densiflora","Dentata","Denudata","Deodara","Dilatata","Dioicus","Diospyros","Distichum","Draconis","Drummondii","Echinata","Eetion","Egypt","Electryon","Ennomus","Equulei","Erginus","Eridani","Eucommia","Euodia","Euonymus","Europaea","Euqure","Excelsior","Falcata","Ficus","Flava","Flexilis","Floribunda","Floridiana","Fraseri","Fraxinus","Gaia","Geminorum","Ginkgo","Ginnala","Glabra","Glauca","Gleditsia","Glutinosa","Glyptostroboides","Grandidentata","Grandiflora","Grandium","Griseum","Gruis","Gymnocladus","Hades","Halesia","Han","Hatra","Hattusa","Hephaestus","Hera","Herculis","Hippocastanum","Hollandica","Homer","Hupehensis","Hvalsey","Hydrae","Hydri","Ilex","Imbricaria","Incana","Iolcus","Ixion","Jacquemontii","Japonica","Juglans","Julibrissin","Juniperus","Kobus","Koelreuteria","Koraiensis","Kousarae","Laevigata","Laevis","Lantana","Lapiths","Lentandum","Leonis","Leporis","Leto","Libani","Librae","Liquidambar","Liriodendron","Lutea","Lyncis","Lyrae","Maclura","Macrocarpa","Macrophylla","Magnolia","Maiagnum","Malussert","Marilandica","Matsudana","Memphis","Menziesii","Messene","Metasequoia","Michauxii","Mongol","Monnogyna","Montany","Morus","Muehlenbergii","Myrmidons","Mysia","Negundo","Nordmanniana","Norse","Northeast","Nyssa","Obassia","Occidentalis","Octantis","Odysseus","Ophiuchi","Orientalis","Orionis","Ostrya","Ovata","Oxydendrum","Palenque","Palmatum","Palmyra","Palustris","Paniculata","Papyrifera","Paulownia","Pavia","Pavonis","Pegasi","Peleus","Pendula","Penstracca","Pensylvanica","Periphas","Persepolis","Persia","Peucea","Phaenopyrum","Phellodendron","Pherae","Phoenicis","Photinia","Piscium","Pisifera","Platanoides","Platanus","Platyphylla","Plouton","Pomifera","Pompeii","Populifolia","Populii","Procera","Pruinosa","Prunus","Pseudoacacia","Pseudocamellia","Pseudolarix","Pseudoplatanus","Pseudotsuga","Ptelea","Pumila","Quercus","Regia","Resinosa","Reticulata","Retusus","Rhea","Rhus","Rigida","Robinia","Robur","Rome","Rubrum","Saccharinum","Sagittarii","Salix","Sargentii","Sassafras","Scorpii","Secchi","Sempervirens","Serotina","Serpentis","Serrata","Serrulata","Shumardii","Sinensis","Sorbus","Soulangiana","Speciosa","Staphylea","Strobus","Styraciflua","Styrax","Subhirtella","Succulenta","Sukhothai","Sylvatica","Sylvestris","Syringa","Taeda","Tauri","Taxodium","Tegea","Telephus","Tenuifolia","Teotihuacan","Tetraptera","Thracia","Thunbergii","Thyoides","Tikal","Timgad","Tiryns","Tiwanaku","Tomentosa","Tremuloides","Triacanthos","Trianguli","Trichotomum","Trifolia","Triloba","Tripetala","Troy","Tulipifera","Typhina","Ulmoides","Ulmus","Velorum","Velutina","Verbosa","Viburnum","Villosa","Virginis","Viridis","Vulgaris","Vulpeculae","Wallichiana","Yedoensis");
$rand = rand(0,count($a_gen));
echo '<option value="',$a_gen[$rand],'">',$a_gen[$rand],'</option>','<option disabled>---</option>';
foreach($a_gen as $gen) echo '<option value="',$gen,'">',$gen,'</option>'; ?>
</select><br><br>
Random generation string out of <?php echo count($a_gen);?> available. Memorize it if this is your first time using this or select the same string from the dropdown.<br><br>
Enter length:
<select name="length" class="ui primary button">
<option value="8">8</option>
<option value="10">10</option>
<option value="19" selected>19</option>
</select><br><br>
<input type="submit" class="ui primary button" value="Make me some creds!"/><br>
<form><br>
MPW v5b1
