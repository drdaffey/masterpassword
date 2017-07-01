<style>
*{font-family: courier;}
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
input.hide {text-shadow: 0 0 12px black; color: rgba(0,0,0,0); border:none;}
input.hide:focus{text-shadow: none; color: black; outline-color:rgba(0,0,0,0);}
</style>

<?php

$wordlist = array(
	array("able","acid","automatic","bright","broken","cheap","chemical","clean","common","complex","conscious","elastic","electric","fat","free","great","happy","hollow","kind","medical","military","new","normal","political","poor","private","probable","quick","quiet","ready","regular","responsible","same","second","serious","sharp","smooth","sticky","strong","sudden","sweet","tired","warm","wise","young"),
	array("alpaca","bear","bird","camel","cat","cheetah","chicken","chimp","crocodile","deer","dog","dolphin","duck","eagle","elephant","fish","fly","fox","frog","gator","giraffe","goat","goldfish","hamster","horse","kangaroo","kitten","lion","lobster","octopus","owl","panda","pig","rabbit","rat","scorpion","seal","shark","sheep","snake","spider","squirrel","tiger","turtle","zebra"),
	array("ash","brook","corey","dannie","evan","francis","glenn","harper","izzy","jude","kerry","logan","madison","noel","olly","pat","riley","shay","tailor","vic","wesley"),
	array("amney","burke","cull","dodds","ellis","fabian","gledhill","herman","lawson","marsh","nowak","orowski","price","quale","redfern","tuowy","usher","void","whitaker","xano","yates","zayne"),
	array("android","haiku","jersey","cashew","vagrancy","brushes","synagogue","hatchling","jaundice","owlish","reentry","litter","eternal","evergreen","exorcist","coverless","rhyme","shuttle","rehydrate","systemize","huff","spider","ridden","suave","afloat","sibling","waving","timid","dioxide","aorta","dinnerware","rearrange","samurai","netting","shovel","cypress","huddling","nemesis","dachshund","caviar","enhance","renovator","napkin","idly","cyclist","energy","slapping","jetski","dwarfism","augmented","opera","flashlight","backpack","radish","iconic","exist","jailhouse","tarantula","haggard","essay","cylinder","unusual","liability","matchstick","groundhog","digit","umpire","dartboard","sitcom","gadget","exam","nirvana","affidavit","username","anesthesia","anyplace","lioness","wholesaler","wristwatch","cosmetics","mango","kilogram","ultrasound","tractor","cobweb","banana","selected","leprechaun","aviator","lunchbox","reopen","nevermore","joystick","numbing","emperor","suitcase","rewrite","garlic","hubcap","flypaper","satchel","dalmatian","luscious","ibuprofen","wakeup","unmarked","asocial","gathering","jukebox","vehicle","guitar","hunter","ipad","nuclear","dresser","glisten","achiness","spur","feline","rekindle","faucet","gleeful","ointment","goatskin","focus","awkward","unknown","feverish","hydrant","uranium","elderly","postcard","luxurious","sainthood","geyser","enactment","fruit","festival","unzip","acetone","tagalong","wielder","cup","tanned","sauna","sardine","glasses","gecko","cognitive","smartphone","uppercut","ghoulishly","voyage","vivacious","swimwear","crumble","vinegar","jobholder","rejoicing","atmosphere","headband","podiatrist","mozzarella","utensil","evidence","etiquette","sesame","bagpipe","aftershave","happiness","wifeless","awoke","icing","croissant","kayak","throat","pauper","wishbone","briefcase","plug","abbreviate","editor","moccasin","juice","fictitious","dibs","iguana","bunny","goldfish","pry","avocado","imbecile","rummage","italicize","avenue","vitamins","goggles","dastardly","elastic","mortuary","roundtable","generator","thimble","nullify","fountain","gainfully","schoolbook","fryingpan","apostrophe","luau","couch","jigsaw","revolver","kangaroo","aggressor","apricot","juror","lukewarm","kneecap","ebook","tutorial","plywood","clergyman","acuteness","python","tissue","oxford","joinable","malformed","nautically","donut","princess","lettuce","raspberry","cheesecake","aimlessly","zigzagged","sequence","rancidity","depot","vicinity","auctioneer","settler","gosling","cynicism","mugshot","clock","camera","ovation","kissing","policeman","lazybones","chalkboard","whisper","suds","guacamole","pharmacy","crawfish","gauntlet","ionosphere","lubricant","varied","navigate","hurricane","vixen","tiara","balancing","aristocrat","ravishing","pseudo","copier","buzzard","student","busboy","septum","statue","dyslexia","ought","running","opium","seismology","acrobat","oven","nugget","quarters","powerboat","mousetrap","vertebrae","unpaved","maximum","pretzel","erratic","endorphin","lecturer","wound","ropelike","kabob","pebble","feedback","clipboard","pulley","deliverer","silicon","pacemaker","automobile","bouquet","codeword","leggings","maestro","cahoots","haughty","opaquely","otherwise","duckling","senator","faded","dwindling","fridge","cage","hefty","tablespoon","atlas","cajoling","obnoxious","hacking","unroll","vaporizer","xerox","glucose","oceanic","durable","psychopath","yogurt","degree","habitat","canister","onyx","upstairs","sabotage","gnomish","jovial","buffalo","engine","ruined","ecosystem","unscrewing","asleep","coathanger","device","agonizing","zipping","enquirer","splashing","abyss","lucidity","nefarious","lakefront","sniff","chrome","upload","upright","gnarly","dozed","getaway","dexterity","atom","retriever","cathedral","arrowhead","subway","dagger","calculator","greyhound","auspicious","justifying","enjoyably","length","jubilant","strawberry","enchilada","putt","phonebook","folksong","boxlike","mummy","dandelion","hypnotist","ungloved","tinsel","sisterhood","occupation","reservoir","lyrics","liverwurst","wizardry","koala","opulently","wrongdoing","pavement","ambulance","savage","jokingly","drainpipe","cybernetic","altitude","giveaway","ragweed","maimed","skulk","tugboat","tapestry","confetti","civilian","rupture","yesterday","muckiness","onion","cuisine","siesta","stylus","mahogany","anagram","emcee","elk","dryer","oat","itinerary","jaguar","sphinx","abrasion","eelworm","anchor","exquisite","yacht","serpent","narrator","etching","pushup","bubblegum","kennel","scrapbook","upkeep","gumdrop","umbrella","nail","speakers","bogusness","asbestos","sloth","geographer","omnivorous","request","gamekeeper","romancer","thumb","hybrid","identical","astronaut","poultry","twins","wheat","rebuilt","rudderless","jockstrap","cityscape","levers","laptop","optical","crystal","nervously","jackrabbit","sedative","embroidery","underwear","agitate","ammunition","eagerness","lemon","boatyard","announcer","poison","lullaby","aesthetic","acid","tadpole","blimp","easel","pepperoni","luggage","roamer","neuron","eclipse","gyration","liquid","clay","jalapeno","tiptoeing","videogame","gurgling","sacrifice","enigmatic","exhale","eulogy","neoliberal","gigabyte","duplex","fixture","dedicate","elongated","makeover","crewmember","tirade","hesitation","maverick","dictionary","dimple","arsonist","oomph","aidless","dominoes","driftwood","zucchini","imaging","wipeout","flight","dorsal","zeppelin","skies","epidemic","natives","zirconium","chopsticks","unhinge","macaroni","tripod","attic","spyglass","jazz","ajar","unevenness","mural","phrasing","rustproof","circle","cakewalk","double","pelican","nephew","propeller","droppings","sweatshirt","rimmed","zookeeper","osmosis","jamboree","iron","oxidize","uptown","widow","elephant","sapphire","judiciary","mule","skateboard","alkaline","yiddish","lumberjack","bamboo","stopwatch","tattoo","ceramics","boiler","alchemy","karate","purse","gem","nextdoor","fleshiness","zombie","egomaniac","hamburger","lasagna","explode","ecstasy","hedgehog","jabbering","nebula","tiebreaker","gong","elfishly","guerrilla","atrocious","governor","surfer","junkyard","diffuser","already","riptide","swan","acoustics","taco","abandoned","federal","figurine","fragment","bottle","elusive","cytoplasm","olympics","rubber","bohemian","directory","unyielding","jarring","nylon","jasmine","update","nest","heinously","shyness","cadillac","datebook","oncoming","carrot","tubeless","yield","exterior","puzzle","caucasian","sandworm","mustard","urologist","eruption","animal","euthanize","pantyhose","enforcer","ergonomic","oftentimes","scooter","amuser","yahoo","finalist","scientist","imprint","aquamarine","pewter","gimmick"),
	array("windmill","cinnamon","obvious","glycerin","prune","wolverine","namesake","siamese","awareness","outhouse","asparagus","steamboat","amiable","tryout","cactus","womb","elsewhere","wick","moaning","educator","leukemia","mosquito","suction","wasp","leftover","cilantro","jelly","yearbook","daytime","ardently","rarity","enunciate","usher","vexingly","halogen","basket","poetic","syringes","gibberish","mundane","itunes","earlobe","motorcycle","human","azalea","kickstand","reporter","chimney","abhorrence","exfoliate","gangway","ceasefire","unquenched","upholstery","negotiator","sprout","rhino","amnesty","argument","upgrade","vigilante","virus","unbuttoned","buckle","sixfold","anxiety","scarf","neither","absorbing","eskimo","cement","saxophone","pamphlet","emerald","ostrich","rotisserie","jeopardize","failsafe","atypical","cufflink","fettuccine","deepness","rulebook","myth","obtain","hazelnut","superstore","effects","oscillator","jiffy","urethane","awning","dwelling","abnormal","sulphur","freeway","majority","giftshop","voucher","velcro","kleenex","fondue","pajamas","vendor","gutless","enlarged","abiding","florist","daughter","shack","prairie","simmering","nearest","urchin","unwrinkled","cafeteria","igloo","idiocy","body","tree","foggy","squirrel","dumpster","accountant","snowsuit","utmost","agreeing","february","footpath","riskily","bullfrog","imitator","puppy","itemizer","receipt","uncle","object","giddiness","listless","llama","gooey","anklet","eliminator","vogue","apartment","also","gymnast","penguin","pogo","scenario","isotope","fanfare","feasibly","estrogen","janitor","illuminate","riches","dehydrator","hexagon","vocalist","blade","rhubarb","actress","dodge","quesadilla","viewfinder","vestibule","elbow","sizable","evolution","buddhist","movie","saddlebag","dilated","obituary","pneumonia","babbling","yodel","arachnid","badass","debris","borough","decal","urban","nanosecond","blender","hugeness","mammal","espresso","cucumber","unnoticed","scythe","thaw","amplifier","sushi","escalator","auxiliary","tuesday","handgun","esophagus","rugby","saltshaker","modify","dubiously","capsule","bakery","envoy","peroxide","oxygen","deranged","mudflow","yard","wildcat","dynamite","jeep","agency","echoless","jujitsu","daffodil","equipment","likewise","lipstick","skylight","laundry","ozone","abdomen","doll","laboratory","detergent","edged","unveiled","riverboat","pledge","secretary","deodorant","sculpture","breath","henceforth","oiliness","foamless","defrost","pegboard","cuticle","singles","cuddly","hemoglobin","untied","clubhouse","tidbit","eggnog","crib","antelope","quote","iodine","office","trucks","rhapsody","yuppie","dawn","pyramid","gerbil","takeout","symphony","taekwondo","upbeat","nuptials","cohabitate","almanac","blurred","upcountry","wrangle","fasten","sneezing","paprika","upwind","unjustly","family","juggle","marbles","answer","asinine","aardvark","myriad","coyote","punchbowl","emission","femur","moisture","elves","mapmaker","cymbal","laxative","anonymous","john","gusto","skeleton","cushion","gorgeous","pumpkin","hushing","padlock","mutation","aghast","awhile","grape","snugness","avalanche","myspace","curry","cornea","gallstone","veteran","gullible","leisure","racoon","armchair","fiberglass","ensemble","fossil","glove","dazzler","chute","nintendo","feudalist","gynecology","stingray","favorite","aerosol","asymmetric","leopard","diploma","refinery","utility","dishcloth","observer","smokestack","pedometer","academy","blouse","knickers","auditorium","latch","lewdness","aromatic","tamale","payphone","downstairs","duvet","jaywalker","kamikaze","severely","fence","kimono","rerun","poncho","wagon","trousers","sled","axially","magazine","erasable","jealous","pesticide","giraffe","poking","acquire","pheasant","remote","limousine","woolworker","unlocking","pucker","violin","aliens","onward","alarmclock","plank","ocular","bossiness","volleyball","hullabaloo","tweezers","jawbreaker","irksome","ejection","syllable","dividers","emancipate","voicemail","fabric","opossum","shrimp","octopus","tavern","afraid","thorn","amendment","always","saffron","kite","theater","barracuda","abundant","entryway","khaki","eccentric","patio","irrigation","computer","lizard","gothic","vulnerable","snapshot","luridness","oasis","porcupine","vacuum","ribbon","coexistent","water","emulate","railroad","gizmo","rigidness","opponent","unflavored","older","popcorn","slingshot","grill","smitten","apnea","waffle","tumbleweed","doorstep","island","lightbulb","shirt","vegetable","vanquished","quilt","peony","laryngitis","vaseline","publisher","sword","rampantly","viperfish","wired","tallness","culprit","physician","tulip","ascend","alphabet","kiosk","dugout","workbasket","tiger","ludicrous","lavender","gearbox","utopia","palm","dustpan","obediently","census","issueless","helmet","relic","cedar","coconut","lifeboat","dutiful","cubical","emoticon","ashamed","eavesdrop","smudge","thwarting","niece","reimburse","lantern","obliterate","iphone","kingdom","bonnet","arbitrate","ritzy","village","fillet","coziness","mayonnaise","passport","frosting","albatross","wanderer","ladder","nuisance","utterance","herbs","rhetoric","mobilize","jezebel","alfalfa","gaslight","upfront","factory","jogging","molecule","agnostic","fiddle","lint","icepack","zestfully","arena","journal","ferret","semicolon","peculiarly","hyacinth","fiscally","xylophone","wikipedia","jumpiness","angelfish","licorice","exuberant","zealot","tastebud","aluminum","fox","sponge","evacuation","robe","cotton","pageant","shelf","jingling","tuxedo","desktop","hardhat","ketchup","segregator","democrat","parakeet","rocket","pueblo","urgent","gourmet","aseptic","duffel","oyster","iridescent","falcon","dizziness","cabin","eerie","algae","massager","tupperware","hastily","exerciser","library","cesspool","nursery","ditto","yo-yo","hygienist","elliptical","ivory","reunion","immigrant","smelliness","diamond","keepsake","euphemism","lilac","artichoke","omissible","unicycle","nutcracker","kerosene","muppet","celery","sugar","nimbleness","sassy","dentist","excerpt","turtle","visor","plotted","bazooka","suffocate","moonshine","feigned","collarbone","dealer","broom","amoeba","grumbling","nectar","zillion","bobcat","nastiness","unopened","ethics","royal","apple","enrollment","zodiac","petroleum","tusk","sycamore","monastery","unarmored","again","momentum","amazingly","walrus","enormous","tyrannical","enzyme","bathrobe","nicotine","drum","slumbering","boots","coffeecake","mower","eucalyptus","zebra","juvenile","register","doctor","onlooker","knapsack","chlorine","onstage","alongside","wreckage","ignition","gesture","dairy","wobbliness","krypton","valuables")
);

function nice($nice){
	
	global $wordlist;	
	$nice = str_split($nice);
	$magic[0] = $nice[1].$nice[2];
	$magic[1] = $nice[3].$nice[4];
	$magic[2] = $nice[5].$nice[6].$nice[7];
	
	$j=0;
	for($i=0; $i<count($wordlist); $i+=2){
		if ($magic[0] > count($wordlist[$i])) $magic[0] = $nice[2];
		if ($magic[0]-1 < 0) $magic[0] = 1;
		if ($magic[1] > count($wordlist[$i+1])) $magic[1] = $nice[4];
		if ($magic[1]-1 < 0) $magic[1] = 1;

		$result[$j] = $wordlist[$i][$magic[0]-1] . $wordlist[$i+1][$magic[1]-1] . $magic[2];
		$j++;
	}

	return $result;
}

if (isset($_POST['site'], $_POST['mastpass']) && $_POST['mastpass']!=NULL){
if ($_POST['cgen']!=NULL)
	$seed = $_POST['cgen'];
else
	$seed = $_POST['gen'];
$site = $_POST['site'];
$secret = $_POST['mastpass'];
$site64 = base64_encode($_POST['site']);
$secret64 = base64_encode($_POST['mastpass']);
$length = ['8','10','19'];
$cr=1;

$numberV7 = preg_replace('/[^0-9]+/', '',hexdec(hash('sha512',$secret . $site)));
$numberV8 = crc32($site64.$secret64); //crc-32 dec of base64 site and mastpass for username gen

$c = crypt($site.$secret,'$2a$13$'.md5($numberV7.$seed));
for($i=0;$i<count($length);$i++)
$passwdV7[$i] = '-' . preg_replace('/[^[:alnum:]]/','-',substr($c,"-".($length[$i]-1)));

for($i=0;$i<count($length);$i++){
	$data = $seed.$site.$length[$i];
	do {
		$c = crypt($data,"\$6\$rounds=$cr\$$cr$secret64");
		$cr++;
	} while(!preg_match('@[a-z]+[0-9]+[A-Z]+\.@',substr($c,'-'.$length[$i])) || strlen($c)<$length[$i]);
	$passwdV8[$i] = preg_replace('/[^[:alnum:]]/','-',substr($c,'-'.$length[$i]));
}

$usernamesV7 = nice($numberV7);
$usernamesV8 = nice($numberV8);

echo $seed,' was used for the generation of ',$site,'.';
echo '<br><br>Usernames include:<br>MPW v7 ';
	foreach($usernamesV7 as $uname) echo "$uname ";
	echo '<br>MPW v8 ';
	foreach($usernamesV8 as $uname) echo "$uname ";

	echo '<br><br>Passwords include: <br>MPW v7: ';
	for($i=0;$i<count($passwdV7);$i++)
	echo "($length[$i])" . '<input type="text" class="hide" value="' . $passwdV7[$i] .'" />';
	echo '<br>MPW v8: ';
	for($i=0;$i<count($passwdV8);$i++)
	echo "($length[$i])" . '<input type="text" class="hide" value="' . $passwdV8[$i] . '" />'; 
	die();
}?>	


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter site name:
<input type="text" class="ui input" name="site" autofocus/>
Enter mastpass:
<input type="password" class="ui input" name="mastpass" />
Seed:
<select name="gen" class="ui primary button" >
<?php $a_gen=array_merge($wordlist[4],$wordlist[5]);
$rand = rand(0,count($a_gen));
echo '<option value="',$a_gen[$rand],'">',$a_gen[$rand],'</option>','<option disabled>---</option>';
foreach($a_gen as $gen) echo '<option value="',$gen,'">',$gen,'</option>'; ?>
</select><br><br>
Random seed string out of <?php echo count($a_gen);?> available. Memorize it if this is your first time using this or select the same string from the dropdown.<br><br>
Or use a custom seed:
<input type="text" class="ui input" name="cgen" />
<br><br>
<input type="submit" class="ui primary button" value="Make me some creds!"/><br>
<form><br>
MPW v8 + v7
