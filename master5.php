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
if (!empty($_POST['site']) && !empty($_POST['mastpass']) && !empty($_POST['mastpass']) && (int) $_POST['length'] < 20){
$a_ani_1 = array("able","acid","automatic","bright","broken","cheap","chemical","clean","common","complex","conscious","elastic","electric","fat","free","great","happy","hollow","kind","medical","military","new","normal","political","poor","private","probable","quick","quiet","ready","regular","responsible","same","second","serious","sharp","smooth","sticky","strong","sudden","sweet","tired","warm","wise","young");
$a_ani_2 = array("alpaca","bear","bird","camel","cat","cheetah","chicken","chimp","crocodile","deer","dog","dolphin","duck","eagle","elephant","fish","fly","fox","frog","gator","giraffe","goat","goldfish","hamster","horse","kangaroo","kitten","lion","lobster","octopus","owl","panda","pig","rabbit","rat","scorpion","seal","shark","sheep","snake","spider","squirrel","tiger","turtle","zebra");
$a_names_1 = array("ash","brook","corey","dannie","evan","francis","glenn","harper","izzy","jude","kerry","logan","madison","noel","olly","pat","riley","shay","tailor","vic","wesley");
$a_names_2 = array("amney","burke","cull","dodds","ellis","fabian","gledhill","herman","lawson","marsh","nowak","orowski","price","quale","redfern","tuowy","usher","void","whitaker","xano","yates","zayne");


$seed = $_POST['gen'];
$site = $_POST['site'];
$secret = base64_encode($_POST['mastpass']);
$data = $seed.$site;
$length = $_POST['length'];
$number=1;
do{
$c = crypt($data,"\$6\$rounds=$number\$$number$secret");
$number++;
}while(!preg_match('@[a-z]+[0-9]+[A-Z]+\.@',substr($c,'-'.$length)) || strlen($c)<$length);


$final = preg_replace('/[^[:alnum:]]/','-',substr($c,'-'.$length));

$_nice = str_split(crc32(hash('sha512',$site.$secret)));
$_nice_first = $_nice[0].$_nice[1];
$_nice_second = $_nice[2].$_nice[3];
$_nice_third = $_nice[4].$_nice[5].$_nice[6];

$_nice_selector = preg_replace('/[^0-9]+/', '', $_POST['dict']);

switch($_nice_selector){
	case 0: $_words1 = $a_ani_1; $_words2 = $a_ani_2; break;
	case 1: $_words1 = $a_names_1; $_words2 = $a_names_2; break;
	default: $_words1 = $a_ani_1; $_words2 = $a_ani_2; break;
}

// Don't wanna get an empty piece of the username.
if ($_nice_first > count($_words1)) $_nice_first = $_nice[1];
if ($_nice_first-1 < 0) $_nice_first = 1;
if ($_nice_second > count($_words2)) $_nice_second = $_nice[3];
if ($_nice_second-1 < 0) $_nice_second = 1;

echo $salt,' was used for the generation of ',$site,'.';
echo "<br>Username: " . $_words1[$_nice_first-1] . $_words2[$_nice_second-1] . $_nice_third . "<br>Password (" . ($length) . " characters): ";?>
<input type="text" class="hide" value="<?php die($final.'" />');}?>

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
<?php $a_gen=array("aardvark","abandoned","abbreviate","abdomen","abhorrence","abiding","abnormal","abrasion","absorbing","abundant","abyss","academy","accountant","acetone","achiness","acid","acoustics","acquire","acrobat","actress","acuteness","aerosol","aesthetic","affidavit","afloat","afraid","aftershave","again","agency","aggressor","aghast","agitate","agnostic","agonizing","agreeing","aidless","aimlessly","ajar","alarmclock","albatross","alchemy","alfalfa","algae","aliens","alkaline","almanac","alongside","alphabet","already","also","altitude","aluminum","always","amazingly","ambulance","amendment","amiable","ammunition","amnesty","amoeba","amplifier","amuser","anagram","anchor","android","anesthesia","angelfish","animal","anklet","announcer","anonymous","answer","antelope","anxiety","anyplace","aorta","apartment","apnea","apostrophe","apple","apricot","aquamarine","arachnid","arbitrate","ardently","arena","argument","aristocrat","armchair","aromatic","arrowhead","arsonist","artichoke","asbestos","ascend","aseptic","ashamed","asinine","asleep","asocial","asparagus","astronaut","asymmetric","atlas","atmosphere","atom","atrocious","attic","atypical","auctioneer","auditorium","augmented","auspicious","automobile","auxiliary","avalanche","avenue","aviator","avocado","awareness","awhile","awkward","awning","awoke","axially","azalea","babbling","backpack","badass","bagpipe","bakery","balancing","bamboo","banana","barracuda","basket","bathrobe","bazooka","blade","blender","blimp","blouse","blurred","boatyard","bobcat","body","bogusness","bohemian","boiler","bonnet","boots","borough","bossiness","bottle","bouquet","boxlike","breath","briefcase","broom","brushes","bubblegum","buckle","buddhist","buffalo","bullfrog","bunny","busboy","buzzard","cabin","cactus","cadillac","cafeteria","cage","cahoots","cajoling","cakewalk","calculator","camera","canister","capsule","carrot","cashew","cathedral","caucasian","caviar","ceasefire","cedar","celery","cement","census","ceramics","cesspool","chalkboard","cheesecake","chimney","chlorine","chopsticks","chrome","chute","cilantro","cinnamon","circle","cityscape","civilian","clay","clergyman","clipboard","clock","clubhouse","coathanger","cobweb","coconut","codeword","coexistent","coffeecake","cognitive","cohabitate","collarbone","computer","confetti","copier","cornea","cosmetics","cotton","couch","coverless","coyote","coziness","crawfish","crewmember","crib","croissant","crumble","crystal","cubical","cucumber","cuddly","cufflink","cuisine","culprit","cup","curry","cushion","cuticle","cybernetic","cyclist","cylinder","cymbal","cynicism","cypress","cytoplasm","dachshund","daffodil","dagger","dairy","dalmatian","dandelion","dartboard","dastardly","datebook","daughter","dawn","daytime","dazzler","dealer","debris","decal","dedicate","deepness","defrost","degree","dehydrator","deliverer","democrat","dentist","deodorant","depot","deranged","desktop","detergent","device","dexterity","diamond","dibs","dictionary","diffuser","digit","dilated","dimple","dinnerware","dioxide","diploma","directory","dishcloth","ditto","dividers","dizziness","doctor","dodge","doll","dominoes","donut","doorstep","dorsal","double","downstairs","dozed","drainpipe","dresser","driftwood","droppings","drum","dryer","dubiously","duckling","duffel","dugout","dumpster","duplex","durable","dustpan","dutiful","duvet","dwarfism","dwelling","dwindling","dynamite","dyslexia","eagerness","earlobe","easel","eavesdrop","ebook","eccentric","echoless","eclipse","ecosystem","ecstasy","edged","editor","educator","eelworm","eerie","effects","eggnog","egomaniac","ejection","elastic","elbow","elderly","elephant","elfishly","eliminator","elk","elliptical","elongated","elsewhere","elusive","elves","emancipate","embroidery","emcee","emerald","emission","emoticon","emperor","emulate","enactment","enchilada","endorphin","energy","enforcer","engine","enhance","enigmatic","enjoyably","enlarged","enormous","enquirer","enrollment","ensemble","entryway","enunciate","envoy","enzyme","epidemic","equipment","erasable","ergonomic","erratic","eruption","escalator","eskimo","esophagus","espresso","essay","estrogen","etching","eternal","ethics","etiquette","eucalyptus","eulogy","euphemism","euthanize","evacuation","evergreen","evidence","evolution","exam","excerpt","exerciser","exfoliate","exhale","exist","exorcist","explode","exquisite","exterior","exuberant","fabric","factory","faded","failsafe","falcon","family","fanfare","fasten","faucet","favorite","feasibly","february","federal","feedback","feigned","feline","femur","fence","ferret","festival","fettuccine","feudalist","feverish","fiberglass","fictitious","fiddle","figurine","fillet","finalist","fiscally","fixture","flashlight","fleshiness","flight","florist","flypaper","foamless","focus","foggy","folksong","fondue","footpath","fossil","fountain","fox","fragment","freeway","fridge","frosting","fruit","fryingpan","gadget","gainfully","gallstone","gamekeeper","gangway","garlic","gaslight","gathering","gauntlet","gearbox","gecko","gem","generator","geographer","gerbil","gesture","getaway","geyser","ghoulishly","gibberish","giddiness","giftshop","gigabyte","gimmick","giraffe","giveaway","gizmo","glasses","gleeful","glisten","glove","glucose","glycerin","gnarly","gnomish","goatskin","goggles","goldfish","gong","gooey","gorgeous","gosling","gothic","gourmet","governor","grape","greyhound","grill","groundhog","grumbling","guacamole","guerrilla","guitar","gullible","gumdrop","gurgling","gusto","gutless","gymnast","gynecology","gyration","habitat","hacking","haggard","haiku","halogen","hamburger","handgun","happiness","hardhat","hastily","hatchling","haughty","hazelnut","headband","hedgehog","hefty","heinously","helmet","hemoglobin","henceforth","herbs","hesitation","hexagon","hubcap","huddling","huff","hugeness","hullabaloo","human","hunter","hurricane","hushing","hyacinth","hybrid","hydrant","hygienist","hypnotist","ibuprofen","icepack","icing","iconic","identical","idiocy","idly","igloo","ignition","iguana","illuminate","imaging","imbecile","imitator","immigrant","imprint","iodine","ionosphere","ipad","iphone","iridescent","irksome","iron","irrigation","island","isotope","issueless","italicize","itemizer","itinerary","itunes","ivory","jabbering","jackrabbit","jaguar","jailhouse","jalapeno","jamboree","janitor","jarring","jasmine","jaundice","jawbreaker","jaywalker","jazz","jealous","jeep","jelly","jeopardize","jersey","jetski","jezebel","jiffy","jigsaw","jingling","jobholder","jockstrap","jogging","john","joinable","jokingly","journal","jovial","joystick","jubilant","judiciary","juggle","juice","jujitsu","jukebox","jumpiness","junkyard","juror","justifying","juvenile","kabob","kamikaze","kangaroo","karate","kayak","keepsake","kennel","kerosene","ketchup","khaki","kickstand","kilogram","kimono","kingdom","kiosk","kissing","kite","kleenex","knapsack","kneecap","knickers","koala","krypton","laboratory","ladder","lakefront","lantern","laptop","laryngitis","lasagna","latch","laundry","lavender","laxative","lazybones","lecturer","leftover","leggings","leisure","lemon","length","leopard","leprechaun","lettuce","leukemia","levers","lewdness","liability","library","licorice","lifeboat","lightbulb","likewise","lilac","limousine","lint","lioness","lipstick","liquid","listless","litter","liverwurst","lizard","llama","luau","lubricant","lucidity","ludicrous","luggage","lukewarm","lullaby","lumberjack","lunchbox","luridness","luscious","luxurious","lyrics","macaroni","maestro","magazine","mahogany","maimed","majority","makeover","malformed","mammal","mango","mapmaker","marbles","massager","matchstick","maverick","maximum","mayonnaise","moaning","mobilize","moccasin","modify","moisture","molecule","momentum","monastery","moonshine","mortuary","mosquito","motorcycle","mousetrap","movie","mower","mozzarella","muckiness","mudflow","mugshot","mule","mummy","mundane","muppet","mural","mustard","mutation","myriad","myspace","myth","nail","namesake","nanosecond","napkin","narrator","nastiness","natives","nautically","navigate","nearest","nebula","nectar","nefarious","negotiator","neither","nemesis","neoliberal","nephew","nervously","nest","netting","neuron","nevermore","nextdoor","nicotine","niece","nimbleness","nintendo","nirvana","nuclear","nugget","nuisance","nullify","numbing","nuptials","nursery","nutcracker","nylon","oasis","oat","obediently","obituary","object","obliterate","obnoxious","observer","obtain","obvious","occupation","oceanic","octopus","ocular","office","oftentimes","oiliness","ointment","older","olympics","omissible","omnivorous","oncoming","onion","onlooker","onstage","onward","onyx","oomph","opaquely","opera","opium","opossum","opponent","optical","opulently","oscillator","osmosis","ostrich","otherwise","ought","outhouse","ovation","oven","owlish","oxford","oxidize","oxygen","oyster","ozone","pacemaker","padlock","pageant","pajamas","palm","pamphlet","pantyhose","paprika","parakeet","passport","patio","pauper","pavement","payphone","pebble","peculiarly","pedometer","pegboard","pelican","penguin","peony","pepperoni","peroxide","pesticide","petroleum","pewter","pharmacy","pheasant","phonebook","phrasing","physician","plank","pledge","plotted","plug","plywood","pneumonia","podiatrist","poetic","pogo","poison","poking","policeman","poncho","popcorn","porcupine","postcard","poultry","powerboat","prairie","pretzel","princess","propeller","prune","pry","pseudo","psychopath","publisher","pucker","pueblo","pulley","pumpkin","punchbowl","puppy","purse","pushup","putt","puzzle","pyramid","python","quarters","quesadilla","quilt","quote","racoon","radish","ragweed","railroad","rampantly","rancidity","rarity","raspberry","ravishing","rearrange","rebuilt","receipt","reentry","refinery","register","rehydrate","reimburse","rejoicing","rekindle","relic","remote","renovator","reopen","reporter","request","rerun","reservoir","retriever","reunion","revolver","rewrite","rhapsody","rhetoric","rhino","rhubarb","rhyme","ribbon","riches","ridden","rigidness","rimmed","riptide","riskily","ritzy","riverboat","roamer","robe","rocket","romancer","ropelike","rotisserie","roundtable","royal","rubber","rudderless","rugby","ruined","rulebook","rummage","running","rupture","rustproof","sabotage","sacrifice","saddlebag","saffron","sainthood","saltshaker","samurai","sandworm","sapphire","sardine","sassy","satchel","sauna","savage","saxophone","scarf","scenario","schoolbook","scientist","scooter","scrapbook","sculpture","scythe","secretary","sedative","segregator","seismology","selected","semicolon","senator","septum","sequence","serpent","sesame","settler","severely","shack","shelf","shirt","shovel","shrimp","shuttle","shyness","siamese","sibling","siesta","silicon","simmering","singles","sisterhood","sitcom","sixfold","sizable","skateboard","skeleton","skies","skulk","skylight","slapping","sled","slingshot","sloth","slumbering","smartphone","smelliness","smitten","smokestack","smudge","snapshot","sneezing","sniff","snowsuit","snugness","speakers","sphinx","spider","splashing","sponge","sprout","spur","spyglass","squirrel","statue","steamboat","stingray","stopwatch","strawberry","student","stylus","suave","subway","suction","suds","suffocate","sugar","suitcase","sulphur","superstore","surfer","sushi","swan","sweatshirt","swimwear","sword","sycamore","syllable","symphony","synagogue","syringes","systemize","tablespoon","taco","tadpole","taekwondo","tagalong","takeout","tallness","tamale","tanned","tapestry","tarantula","tastebud","tattoo","tavern","thaw","theater","thimble","thorn","throat","thumb","thwarting","tiara","tidbit","tiebreaker","tiger","timid","tinsel","tiptoeing","tirade","tissue","tractor","tree","tripod","trousers","trucks","tryout","tubeless","tuesday","tugboat","tulip","tumbleweed","tupperware","turtle","tusk","tutorial","tuxedo","tweezers","twins","tyrannical","ultrasound","umbrella","umpire","unarmored","unbuttoned","uncle","underwear","unevenness","unflavored","ungloved","unhinge","unicycle","unjustly","unknown","unlocking","unmarked","unnoticed","unopened","unpaved","unquenched","unroll","unscrewing","untied","unusual","unveiled","unwrinkled","unyielding","unzip","upbeat","upcountry","update","upfront","upgrade","upholstery","upkeep","upload","uppercut","upright","upstairs","uptown","upwind","uranium","urban","urchin","urethane","urgent","urologist","username","usher","utensil","utility","utmost","utopia","utterance","vacuum","vagrancy","valuables","vanquished","vaporizer","varied","vaseline","vegetable","vehicle","velcro","vendor","vertebrae","vestibule","veteran","vexingly","vicinity","videogame","viewfinder","vigilante","village","vinegar","violin","viperfish","virus","visor","vitamins","vivacious","vixen","vocalist","vogue","voicemail","volleyball","voucher","voyage","vulnerable","waffle","wagon","wakeup","walrus","wanderer","wasp","water","waving","wheat","whisper","wholesaler","wick","widow","wielder","wifeless","wikipedia","wildcat","windmill","wipeout","wired","wishbone","wizardry","wobbliness","wolverine","womb","woolworker","workbasket","wound","wrangle","wreckage","wristwatch","wrongdoing","xerox","xylophone","yacht","yahoo","yard","yearbook","yesterday","yiddish","yield","yo-yo","yodel","yogurt","yuppie","zealot","zebra","zeppelin","zestfully","zigzagged","zillion","zipping","zirconium","zodiac","zombie","zookeeper","zucchini");
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
MPW v8
