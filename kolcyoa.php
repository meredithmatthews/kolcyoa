<?php

/*
Plugin Name: Choose Your Own Adventure proof of concept
Plugin URI: meredithmatthews.net
Description: converted from http://images.kingdomofloathing.com/cyoa/KoLCYOA.pdf
Version: 1
Author: Meredith Matthews
Author URI: http://meredithmatthews.net
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


// add dashboard widget

add_action('wp_dashboard_setup', 'kol_dashboard_widget');

function kol_dashboard_widget() {

	add_meta_box('kol_PWPDWE_widget', 'Kingdom of Loathing: The Home Game: PWPDWE', 'kol_PWPDWE', 'dashboard', 'normal','core');

}
 
function kol_PWPDWE() {

$kol = (isset($_GET['kol']) ? $_GET['kol'] : null);

switch($kol) {

	case 'home' :

	echo '
	<p>Your head pounds like the largest and most arrhythmic hippy drum circle ever as you slowly regain consciousness. You’re lying in a puddle of vomit in a sleazy backalley somewhere. You don’t know if it’s your own vomit or someone else’s… in fact, you’re not sure of much of anything, up to and including where you are, how you got here, or even -- dun dun dunnnn! -- who you are! </p>

	<p>As you lie there pondering your fate, a half-orc hobo shuffles up to you. “Hey buddy... you got any meat?”</p>

	<p> “Meat?” you ask. “What... why would I be carrying around meat?”</p>

	<p>“Ah, I see,” replies the hobo, grinning toothlessly. “You must have amnesia. That’s common in these situations -- it offers a reasonable context for the large amount of exposition that is necessary to explain the backstory. Meat, you see, is what we use for currency around here. We also use it to smith weapons, fuel our automobiles, and as a sticky paste that can be used to glue objects together. You got any?”</p>

	<p>“Here? Where is here?”</p>

	<p>“Why, this is the Kingdom of Loathing, friend. And by your garb, I can see than an adventurer is you!”</p>

	<p>As the opening theme music starts to play, the following choices present themselves to you:</p>

	<ul>
		<li>To give the hobo some meat, <a href="?kol=53">go to section 53</a><li>
		<li>To leave the Sleazy Back-Alley, <a href="?kol=49">go to section 49</a></li>
		<li>To cross-dress in an effort to get kicked out of the Army, <a href="?kol=8">go to section 8</a>.</li>
		<li>To skip this whole thing and start actually playing Kingdom of Loathing, go to <a href="http://kingdomofloathing.com">kingdomofloathing.com</a> and sign up a free account. It’s free!</li>
	</ul>
	';
	break;

	case '1' :
	echo '
	<p>You are attacked by a spooky vampire! He wants to saaaahhhk your blaaaahd. He’s a terrifying apparition, even though he talks like a cross between Arnold Schwarzenegger and Count Chocula.</p>

	<p>You manage to get the jump on him, but he shrugs off your feeble blows and uses his spooky hypnotic eyes on you to make you smack yourself in the head. Ow! Oof! Argh! </p>

	<p>You lose the fight. You slink away, dejected and humiliated.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a></li>
		<li>If you have no short-term memory, <a href="?kol=1">go to Section 1</a></li>
	</ul>
	';
	break;

	case '2':

	echo '
	<p>You start to sing the very long, very sad song about how hard it is to hold onto a candle when it’s raining in Boozember. The harem girls hold up lit torches and sway back and forth. After about ten minutes, right as you’re about to hit the awesome guitarrr solo, you look around and notice that everyone’s fast asleep.</p>

	<p>You look around for the Plot Device and don’t see it. Now what?</p>

	<ul>
		<li>To go back to the entryway, <a href="?kol=43">go to Section 43</a></li>
		<li>To try a different song, <a href="?kol=28">go to Section 28</a></li>
		<li>To get out of the Knob and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '3':
	echo '
	<p>Are you in possession of a pair of Knob Goblin Harem Girl pants?</p>
	<ul>
		<li>If so, <a href="?kol=60">go to section 60</a></li>
		<li>Otherwise, <a href="?kol=50">go to section 50</a></li>
	</ul>
	';
	break;

	case '4' :

	echo '
	<p>The suspicious-looking guy hands you the bottle. “Excellent, man. You need any more, you just let me know. I’ll hook you up.”</p>

	<p>He disappears into the shadows. <a href="?kol=75">Go to section 75</a></p>
	';
	break;

	case '5' :
	echo '
	<p>“Very well,” Gunther says. “First, you must prove your worth by doing a series of bizarre and menial tasks.”</p>

	<p>Gunther makes you carry a pot of beans across the room, then arm-wrestle the janitor, then eat an entire 72-ounce steak in one sitting. As you sit alternately rubbing your sore muscles and your distended stomach, Gunther gives you a hearty slap on the back. “Well done!” he says. “Let me introduce you to Torg, our trainer. He’ll show you the basics of being a mighty, muscular, ‘mazing Seal Clubber.”</p>

	<p>“Seal Clubber?” you ask. “But I like seals… they’re such cute little animals, especially on Easter and Christmas.”</p>

	<p>“No,” Gunther says, “the seals here are giant, fire-breathing, devilish beasts. If you don’t club them, they’ll eat you alive. Just let Torg give you the basics before you ask stupid questions.”</p>

	<p>Torg takes you into the training room and teaches you the basics of weaponsmithing (as well as weaponjonesing). He also teaches you an attack technique called a “Thrust-Smack,” which involves thrusting your seal clubbing club out and smacking an opponent with it. Which doesn’t sound revolutionary, but somehow you do it better after your lessons.</p>

	<p>“Looks like you’re ready to go, Seal Clubber,” Torg says. “If you haven’t already, you should probably visit the Council and see if they have a quest for you.”</p>

	<ul>
		<li>If you haven’t been given a quest by the Council yet, <a href="?kol=22">go to section 22</a></li>
		<li>Otherwise, <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;

	case '6':

	echo '
	<p>The clanking of weights, the bulging of biceps, and the odor of sweaty people lifting weights and bulging their biceps assaults your senses as you walk into The Brotherhood of the Smackdown. A very large man carrying a very large axe walks up to you, presumably to axe you some questions. “Greetings, adventurer,” he says. He sounds a little like an Austrian bodybuilder with a head cold, but that’s a little tricky to render in text. “My name is Gunther, the Lord of the Smackdown! Are you here to learn the mighty muscular ways of our guild?”</p>

	<ul>
		<li>To join the Brotherhood of the Smackdown, <a href="?kol=15">go to Section 5</a></li>
		<li>To return to the street, <a href="?kol=75">go to Section 75</a></li>
	</ul>
	';
	break;

	case '7' :
	echo '
	<p>As you enter the copse of the Deep Fat Friars, you are ambushed by a W Imp. As imps go, he’s not particularly tough. In fact, he’s not even particularly effectual. He tries to limp-wristedly slap you, but you firm-wristedly block him.</p>

	<p>You start to wind up for a Thrust-Smack, but realize this guy’s totally not worth the trouble, and just thump him on the head with your club instead. He goes out like a light. BAM! SOCK! CRUNCH!</p>

	<p>You win the fight!</p>

	<p>You search, but the Obvious Plot Device isn’t here. Hmph.</p>

	<ul>
		<li>To return to the Distant Woods, <a href="?kol=26">go to section 26</a></li>
		<li>To head somewhere else, <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;



	case '8' :
	echo '
	<p>Er, we were just kidding about that. <a href="?kol=home">Go back to the front and pick something else, okay?</a></p>
	' ;
	break;


	case '9' :
	echo '
	<p>You follow the path for a while, and come upon a rather corpulent man in a brown robe, with his head shaved in a tonsure. He bows to you, and says “Greetings to you, fellow traveller.”</p>

	<p>“Hello,” you reply. “Are you travelling too?”</p>

	<p>“Are we not all travellers upon the pathways of life?” “That’s pretty deep. And you’re pretty fat. You must be one of the Deep Fat Friars.”</p>

	<p>He bows again. “Indeed I am. And I must warn you, our copse has been beset by foul creatures of the netherworld. To continue upon this path could mean your doom.”</p>

	<p>“Your corpse?”</p>

	<p>“No, copse. As in a grove of trees.”</p>

	<p>“Ah.”</p>

	<p>You thank him for the warning, but continue onward anyway. How bad could it be?</p>

	<p>Here’s your chance to find out:
	<ul>
		<li>If you’re a Pastamancer, <a href="?kol=58">go to section 58</a></li>
		<li>If you’re a Disco Bandit, <a href="?kol=34">go to section 34</a></li>
		<li>If you’re a Seal Clubber, <a href="?kol=7">go to section 7</a></li>
		<li>If you don’t have a class, say your prayers and <a href="?kol=16">go to section 16</a></li>
	</ul>
	</p>
	';
	break;

	case '10' :

	echo '
	<p>You are attacked by one of the spookiest mummies you’ve ever seen! Well, that isn’t saying much, though, since you’ve never found mummies to be particularly spooky. I mean, “Oh noes! I’ll have to walk slightly faster if I want to escape!”</p>

	<p>While you’re standing around mocking it, though, it gets the jump (or perhaps shamble) on you. It wraps you up in bandages, then pulls the end of it really fast so you spin around and fall down. And hit your head on a passing rock. Ow! Ouch! Ooh!</p>

	<p>Fortunately, you recall what Torg taught you back in section 5, and you work up a thrust-smack that knocks the Spooky Mummy all the way back to BFE. POW! BAM! SOCKO! </p>

	<p>You win the fight!</p>

	<p>You search around for a while, but can’t find the Obvious Plot Device anywhere. Darn.</p>

	<ul>
		<li>To return to the Distant Woods: <a href="?kol=26">go to section 26</a></li>
		<li>To try your luck somewhere else: <a href="?kol=20">go to section 20</a></li>
	</ul>
	';	
	break;

	case '11' :

	echo '
	<p>You stroll into the Council of Loathing. You see five men behind a curiously large desk regarding you with a series of stares of various degrees of blankness and inscrutability. It kind of looks like a little less than half of Da Vinci’s Last Supper. “Greetings, adventurer,” the Councilman on the left says. “We have a quest for you. Don’t worry, it’s not for fire or anything.”</p>

	<p>He produces a picture of some kind of bizarre conglomeration of gears and levers. “This is obviously a device used for incredibly accurately plotting points on a map. It was stolen from Degrassi Knoll. The Degrassi Gnolls are very eager to have it returned. If you can find it for us, we’ll reward you handsomely. Adventurer, will you help us find The Obvious Plot Device?”</p>

	<ul>
		<li>To accept the quest, <a href="?kol=36">go to section 36</a></li>
		<li>To check out the rest of Seaside Town instead, <a href="?kol=75">go to section 75</a></li>
	</ul>
	';

	break; 

	case '12' :
	echo '
	<p>You stand around in the alley for a while longer. There’s the puddle of unidentified vomit you were lying in. Over in the corner there’s a large pile of miscellaneous trash. And look! Is that… yes! A rat!</p>

	<p>Such a lovely place. It’s a real shame you didn’t bring your camera. At least you’ll have fond memories to share with your grandchildren.</p>

	<ul>
		<li>To leave the alley, <a href="?kol=49">go to section 49</a></li>
		<li>To hang around a little longer, <a href="?kol=12">go to section 12</a></li>
	</ul>
	';
	break;


	case '13' :

	echo '
	<p>You spend a few hours drinking beer and telling jokes with a bunch of Orcish frat boys. They find you funny enough to buy all of your drinks, and they never even come close to realizing that you’re making fun of them.</p>

	<p>Entertaining, but it doesn’t get you any closer to finding the Obvious Plot Device.</p>

	<ul>
		<li>To return to the Distant Woods, <a href="?kol=26">go to section 26</a></li>
		<li>To screw around in the Typical Tavern some more, <a href="?kol=33">return to section 33</a></li>
	</ul>
	';
	break; 

	case '14' :

	echo '
	<p>You enter the Department of Shadowy Arts and Crafts and squint into its dimly lit interior. At first, you think the place is deserted, but as your ears adjust you hear faint rustling noises around you.</p>

	<p>A hand taps you on the left shoulder, and you whip around to find no one there. Then you hear a voice from your right. “Greetings, adventurer,” it says, all oily charm. You turn and see a man wearing a domino mask. “My name is Shifty, the Thief Chief. Chief Thief? I’m never sure which. Anyway, here’s your wallet back. Oh, and your pants. Are you here to learn the moxious arts of the Disco Bandit?</p>

	<ul>
		<li>To join the Department of Shadowy Arts and Crafts, <a href="?kol=42">go to Section 42</a></li>
		<li>To go back to the street, <a href="?kol=75">go to section 75</a></li>
	</ul>
	';
	break; 

	case '15' :
	echo '
	<p>“Tell you what, kid,” you say. “It’s all well and good to face your fears, step up to your rival, and impress the girl. If you’re in a movie, that is. But this  is real life, and in real life you’re going to get stomped unless you cheat. How about I arrange for that frat boy to have a little ‘accident?’”</p>

	<p>“I don’t know… well, what kind of accident?”</p>

	<p>And thus, just as it looks like the poor kid is going to lose the race, his opponent suddenly catches on fire, turns into a frog, gets scurvy, then trips and falls. Oops.</p>

	<ul>
		<li>To go back to the anklehills of Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To experience a glitch in the Matrix, <a href="?kol=70">go to Section 70</a></li>
		<li>To get off the mountain and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '16' :

	echo '
	<p>As you enter the copse of the Deep Fat Friars, a big red ninja with horns appears before you. “I am the Demoninja,” he says. “Allow me to demonstrate the myriad ways in which I can whoop your ass.” He proceeds to slice, dice, and make julienne fries out of your ass, as promised. Ow! Argh! Ouch!</p>

	<p>You lose the fight. You slink away, dejected and humiliated.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a></li>
		<li>If you have no short-term memory, <a href="?kol=16">go to Section 16</a></li>
	</ul>
	';
	break;

	case '17' :
	echo '
	<p>In an effort to impress the ladies (or guys, or whatever you happen to be into), you perform your famous “Levitating Martini” trick. Unfortunately, by the time you’ve shown them the trick enough times to genuinely impress them, you’re also doing your famous “Slurred Speech” trick.</p>

	<p>No smooches for you. Darn it.</p>

	<ul>
		<li>To return to the Distant Woods, <a href="?kol=26">go to section 26</a></li>
		<li>To hang around the Tavern a while longer, <a href="?kol=33">return to 33</a></li>
	</ul>
	';
	break;

	case '18' :
	echo '
	<p>Gorgonzola puts you through the Trials of Admittance, which consist of such tasks as pulling 10 meat out of his ear, and making a sandwich using only the power of your mind. Long story short, you pass. Short story long? Anything by Dickens. Anyway, Gorgonzola smiles benevolently at you. “Welcome to the League of Chef-Magi, adventurer. I sense that you will make an excellent Pastamancer.”</p>

	<p>A female wizard wielding a large pasta-spoon approaches, and Gorgonzola introduces her as Brie, the League’s trainer. Over the next few hours, she teaches you the basics of Noodlecraft, as well as an offensive spell called “Minor Ray of Something”, which will probably come in handy, otherwise we wouldn’t have bothered to tell you about it. She then hands you your official pasta-spoon, and says, “Good luck in your travels, adventurer. If you haven’t already, I suggest you visit the Council of Loathing, as they may have a quest or something for you. They usually do.”</p>

	<ul>
		<li>If you haven’t been given a quest by the Council yet, <a href="?kol=22">go to section 22</a></li>
		<li>Otherwise, <a href="?kol=20">go to section 20</a></li>
	</ul>

	';
	break;

	case '19' :
	echo '
	<p>You decide that quests and adventures aren’t really what you’re looking for. Maybe you’ll just wander around the Kingdom for awhile and see what ha-- WHOOPS! You’ve fallen down an open manhole and been eaten by a manticore. You respawn outside of the council. Maybe you should just accept the damn quest, already. I mean, otherwise, why are you even reading this?</p>

	<p>To accept the quest, <a href="?kol=61">go to section 61</a></p>
	';
	break;

	case '20' :
	echo '
	<p>Standing at the edge of Seaside Town, you pull out your map and consider your options.</p>

	<p>Those options are:
		<ul>
			<li>Journey to Degrassi Knoll, where all the trouble started: <a href="?kol=48">go to section 48</a></li>
			<li>Journey to the mysterious Cobb’s Knob: <a href="?kol=43">go to section 43</a></li>
			<li>Journey to the more-or-less equally mysterious Distant Woods: <a href="?kol=26">go to section 26</a></li>
			<li>Journey to Mt. McLargehuge, which makes up for its lack of mysteriosity with its largeness and hugeness: <a href="?kol=72">go to section 72</a></li>
		</ul>
	</p>
	';
	break;

	case '21' :
	echo '
	<p>You stand up on stage, swivel your hips, and start singing. “It’s completely ordinary / to have someone show affection,” you sing, making your voice as deep and virile as you can. “It’s completely ordinary / to enjoy the company of another person.” For some reason, this whips the harem girls into a frenzy. They start taking off their pants and throwing them at you! You manage to dodge the flying clothing through the rest of the song, then grab a pair of pants in case you need ‘em later.</p>

	<p>You acquire an item: Knob Goblin harem pants. Remember that, because it’s hard to put an inventory screen in a booklet like this.</p>

	<p>While the girls are still swooning, you search the harem for the Plot Device. It’s not here… now what’re you going to do?</p>

	<ul>
		<li>To go back to the entryway, <a href="?kol=43">go to Section 43</a></li>
		<li>To try a different song, <a href="?kol=28">go to Section 28</a></li>
		<li>To get out of the Knob and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	<ul>
	';
	break;

	case '22' :
	echo '
	<p>You stroll into the Council of Loathing. You see five men behind a curiously large desk regarding you with a series of stares of various degrees of blankness and inscrutability. It kind of looks like a little less than half of Da Vinci’s Last Supper. “Greetings, adventurer,” the Councilman on the left says. “Ah, I see you’re not new to the Kingdom. Good to see someone who has a little experience in the world, if you know what I mean. We have a quest for you. Don’t worry, it’s not for fire or anything.”</p>

	<p>He produces a picture of some kind of bizarre conglomeration of gears and levers. “This is obviously a device used for plotting points on a map with incredible accuracy. It was stolen from Degrassi Knoll. The Degrassi Gnolls are very eager to have it returned. If you can find it for us, we’ll reward you handsomely. Adventurer, will you help us find The Obvious Plot Device?”</p> 

	<ul>
		<li>To accept the quest, <a href="?kol=61">go to section 61</a></li>
		<li>To refuse the quest, <a href="?kol=19">go to section 19</a></li>
	</ul>
	';
	break;

	case '23' :
	echo '
	<p>A whirling tornado of blades, chains, and spikes suddenly hurtles toward you from the shadowy corner of the temple. You think maybe there’s a ninja snowman in the middle of all that flashing steel, but it’s hard to tell... if there is, he must have about twelve arms.</p>

	<p>He gets the jump on you and strangles you mercilessly with a length of chain while simultaneously skewering your nipple and your elbow with razor-sharp blades. Oof! Ow! Ouch! Owie!</p> 

	<p>You remember your training and thrust-SMACK with your seal-clubbing club. BIFF! SOCKO! POW! KABLOOIE!</p>

	<p>You wince sympathetically as he accidentally grabs the bladed end of his weapon instead of the handle, and take the opportunity to hit him with another solid thrustsmack! BOOM! WHACK! KERFLUGGEN!</p>

	<p>The snowman falls to the floor, his ridiculously complex weapon smacking him soundly on the noggin.</p>

	<p>You win the fight!</p>

	<p>The rest of the Ninja Snowmen bow to you -- well, as well as someone whose body is three big snowballs can bow. “You have proven yourself in combat, honorable adventurer,” one says. “You may request anything of us that we can provide.”</p>

	<p>“Do you have the Obvious Plot Device?” you ask. “I have been charged with returning it to the Knoll.”</p>

	<p>“It is with great sorrow that I admit that I have it,” another Ninja Snowman says. “I thought it was very neat and shiny, so I stole it from the Knoll. I will return it to you, then commit ritualistic seppuku.” He hands you the Plot Device, then looks for somewhere to plug in a hair-dryer.</p>

	<p>You’ve got the Plot Device! You turn around and skip out of the Ninja Snowman’s lair.</p>

	<p>More specifically, you skip out of the lair and over to Degrassi Knoll, <a href="?kol=48">which is in Section 48</a>.</p>
	';
	break;

	case '24' :
	echo '
	<p>“I don’t have the Plot Device yet,” you say. “I thought I’d search here and see if it was an inside job.”</p>

	<p>“Dummkopf!” the gnoll shouts. “Don’t you think we’ve already searched the entire knoll? We’re the guys who got it stolen from us, not the guys who stole it! Get outta here and don’t come back without it!”</p>

	<p>You think that’s a little rude from someone out whom you’re trying to help, but it’s clear you can’t do anything more here.</p>

	<p>To return to the Seaside Town and pick a new location, <a href="?kol=20">go to Section 20</a>.</p>
	';
	break;

	case '25' :
	echo '
	<p>You cross the bridge over the Orc Chasm, marveling at the Smut Orcs toiling below you. Whatever they’re delivering, you’re sure you don’t want any of it. As you near the end of the bridge, you see hideous creatures skulking, lurking, and sklurking around. It looks like this valley is overrun by the most unpleasant monsters you’ve ever seen.</p>

	<p>At least they’re not rushing up to attack you. No, wait… yes, yes they are.</p>

	<ul>
		<li>If you’re a Seal Clubber, <a href="?kol=66">turn to Section 66</a>.</li>
		<li>If you’re a Pastamancer, <a href="?kol=62">turn to Section 62</a>.</li>
		<li>If you’re a Disco Bandit, <a href="?kol=56">turn to Section 56</a>.</li>
		<li>If you have no class, <a href="?kol=35">turn to Section 35</a>.</li>
	</ul>
	';
	break; 

	case '26' : 
	echo '
	<p>You journey to the Distant Woods (which turn out to be aptly-named, but at least they aren’t called the You Can’t Get There From Here Woods). The breeze is cool, sunlight filters through the canopy of trees, giving it a soothing, ethereal greenish tinge, and all around you, you hear the merry chirping of sparrows and other violent, filthy animals that would no doubt love to tear you limb from limb and feed your bloody carcass to their hellish spawn. All in all, it’s a lovely day.</p>

	<p>You come to a fork in the path, and a rough signpost offers you three choices:

	<ul>
		<li>To follow the path labelled “Spooky Forest”, <a href="?kol=46">go to section 46</a></li>
		<li>To follow the path labelled “Typical Tavern”, <a href="?kol=33">go to section 33</a></li>
		<li>To follow the path labelled “The Deep Fat Friars”, <a href="?kol=9">go to section 9</a></li>
		<li>If you’d prefer to try your luck somewhere completely different, <a href="?kol=20">go back to section 20</a></li>
	</ul>
	</p>
	';
	break;

	case '27' :
	echo '
	<p>You wander into the Treasury and see Knob Goblin Elite Guardsmen standing around piles of meat, while Knob Goblin bean counters furiously count hills of beans (even though they don’t amount to much). As you sneak into the room, the scenery suddenly shifts around you -- looks like you’re entering a combat round!</p>

	<ul>
		<li>If you are a Seal Clubber, <a href="?kol=44">go to Section 44</a></li>
		<li>If you are a Pastamancer, <a href="?kol=30">turn to Section 30</a></li>
		<li>If you are a Disco Bandit, <a href="?kol=55">turn to Section 55</a></li>
		<li>If you have no class, <a href="?kol=51">go to Area 51, you low-life</a></li>.
	</ul>
	';
	break;

	case '28' :
	echo '
	<p>You sneak through the harem, congratulating yourself on your sneaky stealthiness. Your self-back-patting is abruptly cut short when you hear a chorus of girlish squeals behind you and suddenly find yourself surrounded by harem girls.</p>

	<p>“It’s The Bard! It’s The Bard!” They shriek. They carry you on their shoulders into a room with a small stage at one end. Someone shoves an acoustic guitarrr (the favorite instrument of all pirates) into your hands.</p>

	<p>“Play a song! Play a song!” They chant. Since you don’t want to get caught and thrown to the Elite Guardsmen, you’d better play. You try to remember a few of the tunes you used to play before you got complete and total amnesia. (I bet you forgot you had amnesia, didn’t you?)</p>

	<ul>
		<li>To play the classic rock ‘n’ roll song “Boozember Rain,” <a href="?kol=2">go to Section 2</a></li>
		<li>To play the hit crooner song “It’s Completely Ordinary,” <a href="?kol=21">go to Section 21</a></li>
		<li>To play the hit hip-hop tune “My Mistress Is Advanced in the Rear,” <a href="?kol=40">go to Section 40</a></li>
	</ul>
	';
	break;

	case '29' :
	echo '
	<p>Do you have a pair of eXtreme mittens?</p>

	<ul>
		<li>If you do, <a href="?kol=68">go to section 68</a></li>
		<li>Otherwise, <a href="?kol=50">go to section 50</a></li>
	</ul>
	';
	break;

	case '30' :
	echo '
	<p>You’ve been attacked by an Elite Guardsman, among the fiercest and most loyal of the Goblin King’s Guards. He’s so big his plate-mail is actually platter-mail.</p>

	<p>He gets the jump on you and swings his mighty polearm in a whooshing arc, catching you square in the nipple. Ouch! Oof! Ow!</p>

	<p>You concentrate your starchy magic and call forth a Minor Ray of Gene. The Guardsman staggers and looks confused, then walks into a wall. Looks like he was too educated stupid to avoid it.</p>

	<p>You win the fight!</p>

	<p>The other Knob Goblins cower after you defeat one of their own, so you’re free to search the Treasury. It doesn’t look like the Plot Device is here. Great, now what are you gonna do?</p>

	<ul>
	<li>To return to the entryway of Cobb’s Knob, <a href="?kol=43">go to Section 43</a></li>
	<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '31' :
	echo '
	<p>You search deep within your infinite pockets for the Plot device.. You do know you have infinitely large pockets, right? It’s pretty much a given in games like this. You close your hand upon it, and say “Excuse me while I whip this out.” The gnolls all cover their eyes, then relax when you bring out the Device.</p>

	<p>“I do believe this is the little trinket you’ve been looking for,” you say. “And rest assured, I gave the culprits a sound beating -- WHOOP!” Your grip slips and the Device falls from your hands!</p>

	<p>Make a dexterity roll on a d20 against your primary stat.</p>

	<p>Just kidding.</p>

	<p>A Gnollish Crossdresser leaps forward and grabs the Device before it can hit the floor. “Thanks for bringing this back, butterfingers,” he says. “There is one more thing you can help us out with, if you have a mind to. Another of our ridiculously intricate machines has broken down. Can you help fix it?”</p>

	<p>Did you give some meat to the Hobo?</p>

	<ul>
		<li>If so, <a href="?kol=52">go to section 52</a></li>
		<li>Otherwise, <a href="?kol=50">go to section 50</a></li>
	<ul>
	';
	break;

	case '32' :
	echo '
	<p>You wander into the kitchens under Cobb’s Knob. You see many Knob Goblin chefs making tasty dishes out of Knob Sausage and other equally appealing ingredients. As you squint through the steam and your ears adjust to the clanking of spoons on pots, the scenery suddenly shifts around you -- looks like you’re entering a combat round!</p>
	<ul>
		<li>If you are a Seal Clubber, <a href="?kol=38">go to Section 38</a></li>
		<li>If you are a Pastamancer, <a href="?kol=65">turn to Section 65</a></li>
		<li>If you are a Disco Bandit, <a href="?kol=74">turn to Section 74</a></li>
		<li>If you have no class, <a href="?kol=54">go to Section 54. Then go to Detroit</a>.</li>
	</ul>
	';
	break;

	case '33' :
	echo '
	<p>After a short stroll through the Woods, you come to the local wretched hive of scum and villainy that is the Typical Tavern. Well, okay, it’s not all that wretched really, and the Orcish Frat Boys (while they do tend to be dicks) aren’t exactly what you’d call ‘villainous’, and they clean the scum off the glasses regularly every fortnight. So, I guess it’s the local reasonably-decent hive of slight dinginess and, um, drunk frat boys.</p>

	<p>Anyway, so, you’re in a bar. What do you do?</p>

	<ul>
		<li>Belly up to the bar: <a href="?kol=13">go to section 13</a></li>
		<li>Go lookin’ for love in this specific wrong place: <a href="?kol=17">go to section 17</a></li>
		<li>Chat with the mysterious cloaked figure in the corner: <a href="?kol=64">go to section 64</a></li>
		<li>Blow this pop stand: <a href="?kol=26">go to section 26</a></li>
	</ul>
	';
	break;

	case '34' :
	echo '
	<p>As you enter the copse of the Deep Fat Friars, you are ambushed by a P Imp. Lemme tell you, this imp be stylin’. He advances toward you, tossing his cane from hand to hand, and says something about you having his meat.</p>

	<p>He starts to pimpslap you, but you nimbly dodge his blow and counter with a particularly vicious Disco Eye- Poke, proving once again that pimpin’ ain’t easy. POW! BIFF! BLAM!</p>

	<p>You win the fight!</p>

	<p>You make a thorough search of the area, but don’t find the Obvious Plot Device. That figures. It’ll probably be in the last place you look, you know.</p>

	<ul>
		<li>To go back to the Distant Woods, <a href="?kol=26">return to section 26</a></li>
		<li>To try another location entirely, <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;

	case '35' :
	echo '
	<p>You’re fighting an Anime Smiley.</p>

	<p>This innocent combination of Shift+6 and the underscore has somehow mutated into a freakish grinning face. OMG kawaiiiii!!!111! In addition to being evil and cute, it’s also a joke that’s much, much funnier if you’re online, and current in gamer and Japanese culture. You’re definitely not the former, and may or may not be the latter. What I’m trying to say, here, is cut me some slack, okay?</p>

	<p>It gets the jump on you.</p>

	<p>omg it zerg rushes j00 in teh nipple. kekekekeke! Ouch! Ooooof! Yipe yipe yipe!</p>

	<p>You flail madly with your arms and legs, but can’t seem to connect.</p>

	<p>LOL it pwnz0r3d j00!!!!111!!!(one)!!(eleven)</p>

	<p>It appears you’ve lost the fight, if my translation’s correct.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a></li>
		<li>If the little plastic castle is a surprise every time, <a href="?kol=35">go to Section 35</a></li>
	</ul>
	';
	break;

	case '36' :
	echo '
	<p>“Of course,” you say. “This sounds like an adventurous quest, and adventures and quests are what I live for. Er, are the things for which I live.”</p>

	<p>“You should probably pick a guild and talk to them before you go,” the Council says. “Visit the League of Chef-Magi to become a Pastamancer, The Brotherhood of the Smackdown to become a mighty Seal Clubber, and the Department of Shadowy Arts and Crafts to become a moxious Disco Bandit.” One of them hands you a map of the Kingdom and politely pushes you out the door.</p>

	<ul>
		<li>To go to the League of Chef-Magi, <a href="?kol=59">go to section 59</a></li>
		<li>To go to the Brotherhood of the Smack-Down, <a href="?kol=6">go to section 6</a></li>
		<li>To go to the Department of Shadowy Arts and Crafts, <a href="?kol=14">go to section 14</a></li>
		<li>You don’t need no steenking guilds. <a href="?kol=20">Go to section 20</a></li>
	</ul>
	';
	break;

	case '37' :
	echo '
	<p>Lars burst through the doors to the boudoir, his chest heaving, his sword at the ready. He thought he was prepared for whatever he might find there, but he was still taken aback when he parted the heavy curtains around the giant four-post bed. Hilda lay there, her bosoms heaving, her milky-white skin gleaming in the moonlight.</p>

	<p>“Take me Lars,” she said. “You know what you have been searching for all these years. I will offer it to you freely.”</p>

	<p>“But my lady,” Lars stammered, “I am unaccustomed to the ways of women. I am a warrior, and I have always been such. I know only blood and death.”</p>

	<p>“Then come, take my virgin blood, and give me my little death,” Hilda moaned --</p>

	<p>Wait a minute. Where the hell are you? How did you get here? You may ask yourself that.</p>

	<p>I’d strongly suggest you back away slowly -- to oh, <a href="?kol=20">let’s say Section 20</a> -- and tell no one what you saw here.</p>

	';
	break;

	case '38' :
	echo '
	<p>You’re fighting a Knob Goblin Barbecue Team, a deadly combination of a neophyte Knob Goblin Chef and a magically animated barbecue grill. Sometimes these things are friendly, but this one appears to be pretty aggressive. In fact, it gets the jump on you.</p>

	<p>The Chef dips his barbecue tongs into the coals of the grill, then tries to grab your arm with them, but you sidestep with panache. Then you put down the panache.</p>

	<p>You thrust and smack with your seal-clubbing club, just like Torg taught you to. SOCKO! BIFF! KAPOW! BAM!</p>

	<p>You win the fight!</p>

	<p>You gruffly address the rest of the apprentice chefs. “Trip-trap!” you say, then decide to be a little less gruff. “Okay, guys, where’s the Obvious Plot Device?”</p>

	<p>They claim it’s not here, and a quick search reveals that
	they’re telling the truth. Great, now what?</p>

	<ul>
		<li>To return to the entryway of Cobb’s Knob, <a href="?kol=43">go to Section 43</a></li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '39' :
	echo '
	<p>You’re fighting one of the Ninja Snowmen of Mt. McLargeHuge. These ninjas are as cold as ice, and willing to sacrifice your love. And by love, I mean life.</p>

	<p>He gets the jump on you, then focuses his chi and hits you with a chi’s ball. Ow! Oof! Ouch!</p>

	<p>You reach up and poke the Ninja Snowman right in his coal-button eye. BIFF! SOCKO! BAM! KABONG!</p>

	<p>You win the fight!</p>

	<p>The rest of the Ninja Snowmen bow to you -- well, as well as someone whose body is three big snowballs can bow. “You have proven yourself in combat, honorable adventurer,” one says. “You may request anything of us that we can provide.”</p>

	<p>“Do you have the Obvious Plot Device?” you ask. They put their snowy heads together and confer.</p>

	<p>“We regret to inform you that we have not seen it,” one says. “I’m afraid we are not the snowmen you are looking for.” He waves a twiggy arm and you’re convinced he’s telling the truth.</p>

	<ul>
		<li>To return to the anklehills of Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a>.</li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a>.</li>
	</ul>
	';
	break;

	case '40' :
	echo '
	<p>You play a beat on the back of the acoustic guitarrr and speak rapidly over it. “I like ample posteriors and am incapable of prevarication,” you say. “You other goblins can’t dissent -- my mistress is advanced in the rear!”</p>

	<p>The harem girls wave their hands in the air indifferently. Apparently, they just don’t care about the tune -- you probably shouldn’t tell anybody it’s your song. You keep playing as the room slowly clears, then take the opportunity to search for the Plot Device. </p>

	<p>Looks like it isn’t here -- now what’re you gonna do?</p>

	<ul>
		<li>To go back to the entryway, <a href="?kol=43">go to Section 43</a></li>
		<li>To try a different song, <a href="?kol=28">go to Section 28</a></li>
		<li>To get out of the Knob and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '41' :
	echo '
	<p>Roaring mightily, a Wolfman leaps at you from the bushes, and lycanthropes you right in the kidney! Argh! Oof! Ow!</p>

	<p>Realizing that you’ll have to make use of your Disco Bandit skills to have any chance of staying alive, you send him reeling with a Disco Eye-Poke and follow up with a vicious kick to the nards. Yep, Wolfman’s got nards. BAM! POW! BARF!</p>

	<p>You win the fight!</p>

	<p>You grab the half-unconscious wolfman by the scruff of the neck and shake him a bit. “All right, dogbreath! I’m looking for the Obvious Plot Device, and you’re gonna tell me where to find it, see? Don’t make me use this rolled-up newspaper!”</p>

	<p>The wolfman whines and points to a freshly-dug patch of earth under a nearby tree. You grub through it for a minute, turning up a couple of soup bones, a chewed-up tennis ball, some grubs, and… the Obvious Plot Device! Woo-hoo!</p>

	<p>Better get that back to Degrassi Knoll, pronto. <a href="?kol=48">It’s at section 48</a></p>
	';
	break;

	case '42' :
	echo '
	<p>Shifty puts you through a series of trials to gauge howmoxious you are. You steal a wallet from another guild member, swipe a beer from a bar behind a bar (the bar behind the bar growls at you, but you manage to escape), and steal your own pants without alerting yourself. After you finish, Shifty introduces you to a piece of furniture in the corner, which stands up and reveals itself as a very stealthy fellow thief.</p>

	<p>“Greetings, adventurer,” he says. “My name is Lefty.” He shakes your hand with the steel hook he has instead of a right hand. He then trains you in the mixing of flammable beverages, and teaches you the art of the Disco Eye-Poke. You learn that in a fight, a Disco Bandit will strike a pose with one hand pointing straight in the air and the other pointing straight down on the other side, then use the higher hand to viciously poke his (or her) opponent in the eye. That seems like fighting dirty to you, but then you realize that’s exactly the point.</p>

	<p>“Congratulations, Disco Bandit,” Lefty says. “Looks like you’re ready to go. If you haven’t seen the Council yet, you should go talk to them. They might have a quest for you, hint hint.”</p>

	<ul>
		<li>If you haven’t been given a quest by the Council yet, <a href="?kol=22">go to section 22</a></li>
		<li>Otherwise, <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;

	case '43' :
	echo '
	<p>You wander into the curiously unguarded interior of Cobb’s Knob. You note that the place is a lot bigger on the inside than the outside, but it smells just as bad. There’s an empty suit of armor standing in one corner and lit torches spaced around the interior of the entrance cave: you know, all those homey little touches that really make a dirt-walled hovel a home.</p>

	<p>You see three different hallways branching out from the entryway, each with a sign written in the eldritch, ancient runes of the Knob Goblins. Thankfully, for some reason the eldritch, ancient runes of the Knob Goblins look exactly like normal text. It’s even in the same font as the rest of the book you’re reading.</p>

	<ul>
		<li>To follow the sign marked “Treasury,” <a href="?kol=27">go to Section 27</a></li>
		<li>To follow the sign marked “Harem,” <a href="?kol=28">go to Section 28</a></li>
		<li>To follow the sign marked “Kitchens,” <a href="?kol=32">go to Section 32</a></li>
		<li>To try a different location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '44' :
	echo '
	<p>You’re fighting a Knob Goblin Bean Counter, one of the accountants of Cobb’s Knob. They haven’t been as busy since inflation pushed beans out of the Kingdom’s currency. He’s certainly not too busy to get the jump on you.</p>

	<p>He tries to bean you with a sack full of beans, but fails.</p>

	<p>Looks like he’s a has-bean. In response, you thrust and smack with your seal-clubbing club, just like Torg taught you to. SOCKO! BIFF! KAPOW! BAM!</p>

	<p>You win the fight!</p>

	<p>The other Knob Goblins cower after you defeat one of their own, so you’re free to search the Treasury. It doesn’t look like the Plot Device is here. What are we going to do now, man? It’s a bug hunt! A bug hunt!</p>

	<ul>
		<li>To return to the entryway of Cobb’s Knob, <a href="?kol=43">go to Section 43</a></li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '45' :
	echo '
	<p>A hollow voice says, “FOOL.” You know what they say about people who cheat in games they’re playing by themselves, right?</p>

	<p>You get the hose again and <a href="?kol=68">go back to Section 68</a>, where you came from.</p>
	';
	break;

	case '46' :
	echo '
	<p>Although at first you have trouble seeing it because of all the trees, you eventually come to the Spooky Forest. Let me tell you, it doesn’t look like the sort of place that’s likely to be inhabited by gamboling fauns and nymphs. If it ever was, they probably all got eaten, possibly by the trees. You’re not adverse to a little gamboling yourself, but in this place you’d better hedge your bets. And speaking of hedges, that one appears to be concealing something that’s getting ready to pounce at you.</p>

	<p>My mistake, it is pouncing at you.</p>

	<ul>
		<li>If you’re a Pastamancer, <a href="?kol=76">go to section 76</a></li>
		<li>If you’re a Disco Bandit, <a href="?kol=41">go to section 41</a></li>
		<li>If you’re a Seal Clubber, <a href="?kol=10">go to section 10</a></li>
		<li>If haven’t got any class at all, <a href="?kol=1">go to section 1</a></li>
	</ul>
	';
	break;

	case '47' :
	echo '
	<p>“Listen, kid. That frat orc isn’t your rival, this mountain is. And that girl isn’t the love of your life, this mountain is. If you want to win this contest, you’ve got to look this mountain straight in the eye, grab it by the throat, and show it who’s the boss!”</p>

	<p>He looks at you, puzzled. “That doesn’t make any sense whatsoever.”</p>

	<p>“Who’s the boss?”</p>

	<p>“Look, I...”</p>

	<p>“Who’s the boss?”</p>

	<p>“Tony Da-”</p>

	<p>“WHO’S THE BOSS?!”</p>

	<p>“I am! I am!”</p>

	<p>“Damn right you are! Now get up there and prove it! Prove it to your rival, your girl, and your mountain!” The kid grabs his snowboard and heads for the top of the run at top speed, then knocks himself out on one of the support stanchions. After they’ve carried him away on a stretcher, you find his mittens on the ground and pocket them.</p>

	<p>You acquire an item: eXtreme Mittens. We didn’t code an inventory window for this booklet, so you’ll have to remember that for yourself.</p>

	<ul>
		<li>To go back to the anklehills of Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To experience a glitch in the Matrix, <a href="?kol=70">go to Section 70</a></li>
		<li>To get off the mountain and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '48' :
	echo '
	<p>You saunter into Degrassi Knoll. Well, actually it’s more of a mosey, with just a hint of sashay. You should probably work on that. The knoll, though not much more than a series of caves underground, is kept clean and tidy by the knoll gnolls. They’ve even cleaned off the debris from the book depository (where they crowned the King of Cuba) that used to stand atop the knoll.</p>

	<p>Even the toilets are clean, thanks to the Gnollish Plungermasters, who are skilled in that art. They’re very tidy bowl gnolls. Gnolls, in general, are renowned for their handiness with gears and tools of all sorts, as well as their short temper and penchant for theatrics.</p>

	<p>You are accosted by a guard-gnoll who regards you suspiciously. “What are you doing here, adventurer? Have you come to return our Obvious Plot Device?”</p>

	<ul>
		<li>If you have the Plot Device, <a href="?kol=31">go to Section 31</a></li>
		<li>If you don’t have it and want to search the Knoll, <a href="?kol=24">go to section 24</a></li>
		<li>If you don’t have it and you don’t want to search the Knoll, what’re you doing here? <a href="?kol=20">Go back to Section 20</a>. Noob.</li>
	</ul>
	';
	break;

	case '49' :
	echo '
	<p>You step out of the Sleazy Back Alley and into what must be the low-rent district of town (assuming the entire town isn’t low-rent). A suspicious-looking guy comes up to you. “Hey, man. You, uh, you wanna try some goofballs? First bottle’s free, man.”</p>

	<p>“Er, no thanks,” you reply. “Can you tell me where I am?” “Sure, man. This is Seaside Town, capital city of the Kingdom of Loathing. Population: several. Major exports: adventurers. And goofballs.” He rattles a bottle of pills at you. “You sure you don’t want any?”</p>

	<ul>
		<li>To accept the goofballs, <a href="?kol=4">go to section 4</a></li>
		<li>To look around Seaside Town, <a href="?kol=75">go to section 75</a></li>
	</ul>
	';
	break;

	case '50' :
	echo '
	<p>“Oh well,” the Gnollish Crossdresser says. “At least you’ve returned our Plot Device and completed your quest. I mean, that’s a pretty good job you did, there. You should feel good about yourself.” The other gnolls join in with qualified, subdued praise. You emerge into the sunlight with “nice going, man,” and “not bad, dude,” echoing in your ears.</p>

	<p>Congratulations! A quest-finisher is you!</p>

	<p>If you had fun playing around with this, do try <a href="http:// kingdomofloathing.com">http://www.kingdomofloathing.com</a>. It’s a lot like this, only more interactive, has a chat, and is harder to set on fire. And it’s as free as something that doesn’t cost any money!</p>
	';
	break;

	case '51' :
	echo '
	<p>You’re fighting a Knob Goblin Elite Guardsman, who is among the fiercest and most loyal of the Goblin King’s Guards. He’s so big his plate-mail is actually platter-mail.</p>

	<p>He gets the jump on you and throws his shield like a frisbee. It makes a pleasant ringing sound as it caroms off your head. Ouch! Ugh! Ow! Ouch!</p>

	<p>You lose the fight. You slink away, dejected and humiliated.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a></li>
		<li>If you have no short-term memory, <a href="?kol=51">go to Section 51</a>.</li>
	</ul>

	';
	break;

	case '52' :
	echo '
	<p>Did you get the goofballs from the Suspicious-Looking Guy?</p>

	<ul>
		<li>If you did, <a href="?kol=3">go to section 3</a></li>
		<li>If not, <a href="?kol=50">go to section 50</a></li>
	<ul>
	';
	break;

	case '53' :
	echo '
	<p>You search your pockets, and discover that you are in fact carrying a few small slabs of raw meat around with you. You give a couple of them to the hobo, and he favors you with another snaggletoothed grin. “Thanks, buddy! I owe ya one!”</p>

	<p>He shuffles out of the alley (and into the sunset). Perhaps you should follow his example – it really smells terrible in here.</p>

	<ul>
		<li>To leave the alley, <a href="?kol=49">go to section 49</a></li>
		<li>To hang around a little longer, <a href="?kol=12">go to section 12</a></li>
	</ul>
	';
	break;

	case '54' :
	echo '
	<p>You’re fighting a Knob Goblin Chef. He may look harmless, but he wields a mean ladle. He gets the jump on you.</p>

	<p>He whirls around with a ladleful of hot soup and splashes it all over your bung. It hurts more than a ladle bit. Ooof! Ow! Ouch! Ow!</p>

	<p>You flail helplessly with your hands and feet, but can’t seem to connect.</p>

	<p>He whips off his chef ’s hat and smacks you across the face with it. Boy, Are, Dee does it hurt! Argh! Ouch! Ooh! You lose the fight. You slink away, dejected and humiliated.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a></li>
		<li>If you have no short-term memory, <a href="?kol=54">go to Section 54</a></li>
	</ul>
	';
	break;

	case '55' :
	echo '
	<p>You’re fighting a Knob Goblin Bean Counter, one of the accountants of Cobb’s Knob. They haven’t been as busy since inflation pushed beans out of the Kingdom’s currency.</p>

	<p>He gets the jump on you and smacks you upside the noggin with the weird little visor he’s wearing. I’d advise you to avoid that in the future. Oof! Ow! Ouch!</p>

	<p>You remember your Disco Bandit training and viciously poke him in the eye. BAM! SOCKO! BIFF!</p>

	<p>You win the fight!</p>

	<p>The other Knob Goblins cower after you defeat one of their own, so you’re free to search the Treasury. It doesn’t look like the Plot Device is here. So what do you do, hotshot? What do you do?</p>

	<ul>
		<li>To return to the entryway of Cobb’s Knob, <a href="?kol=43">go to Section 43</a></li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '56' :
	echo '
	<p>You’re fighting a XXX Pr0n</p>

	<p>This is a shellfish who has been sucked into the seamy underbelly of adult marine life entertainment. You find yourself hoping his trench coat stays closed.</p>

	<p>He gets the jump on you. Or, y’know, the swim.</p>

	<p>He starts to smack you with his fishtail, but you distract him with a fishy tale, then reach up and poke him right in his eye! His eyestalk goes limp and he scurries away, embarrassed.</p>

	<p>You search the grounds for grounds to suspect that the Plot Device is here, but can’t find anything.</p>

	<p>¿Y ahora, que?</p>

	<ul>
		<li>To return to Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To return to the Seaside Town, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '57' :
	echo '
	<p>You stealthily sneak up the mountain to the not-particularly-secret Lair of the Ninja Snowmen. You see a serene monastery hewn out of the very living rock. Wait, I guess that means the hills are alive after all. My mistake. You sneak inside and see dozens of magically animated snowmen wearing ninja masks. They’re all training, using their twiggy little arms to fling shuriken, juggle nunchuku, and eat sashimi. None of them look likely to turn and shout “HAPPY BIRTHDAY!” or anything. Still, you can’t underestimate the comedic element of something without legs trying to do a roundhouse kick.</p>

	<p>Suddenly, one of the snowmen spots you and raises the alarm! Looks like it’s time to throw down or get downthrown yourself.</p>

	<ul>
		<li>If you are a Seal Clubber, <a href="?kol=23">go to Section 23</a></li>
		<li>If you are a Pastamancer, <a href="?kol=63">turn to Section 63</a></li>
		<li>If you are a Disco Bandit, <a href="?kol=39">turn to Section 39</a></li>
		<li>If you have no class, <a href="?kol=73">go to Section 73</a>. Then see an opera, you plebeian.</li>
	</ul>
	';
	break;

	case '58' :
	echo '
	<p>As you enter the copse of the Deep Fat Friars, you are ambushed by a G Imp, dressed entirely in black leather bondage gear. He giggles in a way you’re not entirely comfortable with. With which you’re not entirely comfortable.</p>

	<p>He gets the jump on you, and pulls out a cat-o-nine tails, but can hit you with nary a tail. He should probably unzip the eyeholes on his mask.</p>

	<p>You concentrate on Brie’s teachings, and call forth a Minor Ray of Gravel, which teaches the Imp the gravity of the situation by putting him in his grave. A grave lesson, indeed. BAM! ZAP! KERPOW!</p>

	<p>You win the fight!</p>

	<p>After much rejoicing (yaaay) you search the area, but you don’t find anything that resembles the Obvious Plot Device. So, uh, now what?</p>

	<ul>
		<li>To return to the Distant Woods, <a href="?kol=26">go to section 26</a></li>
		<li>To choose a different area, <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;

	case '59' :
	echo '
	<p>Your nasal passages are assaulted (and peppered) by the scent of mystical herbs and spices as you enter the League of Chef-Magi. The interior is dimly-lit and filled with the sound of rustling papers and clanking saucepans. A man in wizard’s robes steps up to you. “Hello, I am Gorgonzola, Chief Chef of the League. Are you here to join us, and learn the secrets of the ancient culinary arts?”</p>

	<ul>
		<li>To join the League of Chef-Magi, <a href="?kol=18">go to section 18</a></li>
		<li>To return to the street, <a href="?kol=75">go to section 75</a></li>
	</ul>
	';
	break;

	case '60' : 
	echo '
	<p>Do you have a keychain with the SCFCU’s web address on it?</p>

	<ul>
		<li>If you do, <a href="?kol=29">go to section 29</a></li>
		<li>If you don’t, <a href="?kol=50">go to section 50</a></li>
	</ul>
	';
	break;


	case '61' :
	echo '
	<p>“Of course,” you say. “This sounds like an adventurous quest, and adventures and quests are what I live for. Er, are the things for which I live.”</p>

	<p>“Go forth, then! Or, y’know, first. You seem to be prepared, and you’ve even learned that prepositions are not something to end a sentence with. The Obvious Plot Device might be somewhere in Cobb’s Knob, or it might have been spirited away to the Spooky Forest. Or, it might be somewhere on Mt. McLargehuge. You should start your search at one of those places.” He hands you a map of the Kingdom and politely pushes you out the door.</p>

	<p>Which happens to <a href="?kol=20">lead to section 20</a></p>
	';
	break;

	case '62' :
	echo '
	<p>You’ve been attacked by a Spam Witch! You look into this seductive creature’s eyes and feel as if she can make your sword longer, your bank account bigger, your waist smaller, and show you the secret habits of barnyard animals. You fight to resist her charms . . . and she gets the jump on you. </p>

	<p>She offers you a million meat (which she embezzled from the Council of Loathing) if you’ll hit yourself in the head. You do. Ouch! Ooof! Ow!</p>

	<p>You call forth a Minor Ray of Firewalls. A wall of fire sweeps across the battlefield, burning the witch like she was made of wood (or possibly a duck). BAM! ZAP! ZORCH!</p>

	<p>You win the Fight!</p>

	<p>“Now… tell me where the Plot Device is!” you shout at the ashes of the witch. They don’t respond. Maybe you should ask questions first, then immolate. Even though immolation is the sincerest form of flattery.</p>

	<p>What’ll ya have?</p>

	<ul>
		<li>To return to Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To return to the Seaside Town, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '63' :
	echo '
	<p>In the icy wastes of Mount McLargehuge, where the most elite of ninja snowman assassins are trained, even the guy who mops the dojo floor is fully capable of kicking your ass. And here he is, getting ready to do just that. Try not to bleed everywhere -- you’ll only make him angrier.</p>

	<p>He gets the jump on you and sweeps you off your feet. I mean literally, not in a nice romantic way. Ouch! Ooof! Ow!</p>

	<p>You concentrate and release a Ray of Spilled Milk. The Ninja Snowman starts crying, unadvisedly.</p>

	<p>You win the fight!</p>

	<p>The rest of the Ninja Snowmen bow to you -- well, as well as someone whose body is three big snowballs can bow. “You have proven yourself in combat, honorable adventurer,” one says. “You may request anything of us that we can provide.”</p>

	<p>“Do you have the Obvious Plot Device?” you ask. They put their snowy heads together and confer.</p>

	<p>“We regret to inform you that we have not seen it,” one says. “I’m afraid we are not the snowmen you are looking for.” He waves a twiggy arm and you’re convinced he’s telling the truth.</p>

	<ul>
		<li>To return to the anklehills of Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a>.</li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a>.</li>
	</ul>
	';
	break;

	case '64' :
	echo '
	<p>You saunter (or possibly mosey) over to the shadowy cloaked figure in the corner. “Greetings, adventurer,” he says. “I am Roberto, representative of the Shadowy Cloaked Figure in the Corner Union, Local 523. It is well that you approached me, for I have a tale to tell that will chill your blood, and a quest that will win you unimaginable glory.” </p>

	<p>“Thanks,” you say, “But this booklet isn’t big enough for a lot of complicated digressions, and anyway I’ve got all the quest I can handle right now.”</p>

	<p>“Are you sure? The glory really is totally unimaginable – believe me, I’ve tried.”</p>

	<p>“Sorry, I’ll have to take a raincheck.”</p>

	<p>“Well, all right. If you ever change your mind, you know where to find me. Here, have a souvenir keychain. It’s got the SCFCU’s web address on it.”</p>

	<p>You acquire an item: SCFCU keychain. We don’t have an inventory screen in this book, so it’s up to you to remember that.</p>

	<p>You pocket the keychain and mosey (or saunter) back to the bar.</p>

	<p><a href="?kol=33">Which was at section 33</a>, as you’ll recall.</p>
	';
	break;

	case '65' :
	echo '
	<p>You’re fighting a Knob Goblin Assistant Chef. He proudly wields his set of Neophyte Tongs, and whistles a happy cooking song as he prepares to beat you senseless.</p>

	<p>He gets the jump on you and beats you with those tongs. Those tong, tong, tong tong tongs. Oof! Ow! Ouch!</p>

	<p>You call forth a Minor Ray of Avocados, which buries your opponent in rudimentary guacamole. BIFF! SOCKO! POW! WHACK! BARF!</p>

	<p>He then tries to poke you with his tongs, but you make fun of his silly hat until he starts crying, and then call forth a Minor Ray of Blenders. Your opponent gets frappéd. ZAP! BLAM! BIFF!</p>

	<p>You win the fight!</p>

	<p>You gruffly address the rest of the chefs in the kitchen. “Trip-trap!” you say, then decide that’s maybe too gruff. “Okay, you guys, where did you hide the Obvious Plot Device?” you say, ominously waving your pasta spoon.</p>

	<p>All of the chefs point to one Knob Goblin hiding in the corner. “Dave did it,” they say. Dave disappears behind one of the stoves and reappears holding the Obvious Plot Device!</p>

	<p>“I’m s-sorry,” he says, “but it’s so very pretty and I just wanted to have it for a little while… I swear I was gonna give it back.”</p>

	<p>“That’s okay,” you say. “I think we’ve all learned a valuable lesson today, haven’t we, kids? Mainly, that stealing will cause the maiming of several people near you, while you yourself won’t suffer any consequences. Now you know -- and that’s at least 50% of the battle.”</p>

	<p>You grab the Plot Device and walk out of Cobb’s Knob.</p>

	<p>Specifically, you walk to Degrassi Knoll, <a href="?kol=48">which is over in Section 48</a></p>
	';
	break;

	case '66' :
	echo '
	<p>You’re fighting a Flaming Troll. The smell of brimstone, the hulking body and dragging claws, the sound of “stfu d00d u r teh suk” -- yup, this is definitely not the kind of troll you want to cross, or doublecross.</p>

	<p>It gets the jump on you and flames you in the brainpan with a clever combination of fisticuffs and insults. Ooof! Ow!</p>

	<p>You start to calmly and intelligently counter every argument the troll is making, but then figure a thrustsmack would me much more effective. PAF! BIFF! KASMOOSH!</p>

	<p>You win the fight!</p>

	<p>Though the troll struggles, you pin him to the ground and shout “tell me about the Obvious Plot Device, n00b!” He admits he doesn’t have it, and you finally let him up to run away, shouting insults over his shoulder.</p>

	<p>And now for something completely different!</p>

	<ul>
		<li>To return to Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To return to the Seaside Town, <a href="?kol=20">go to Section 20</a></li>
		<li>If you like reading things twice, if you like reading things twice, <a href="?kol=66">go to Section 66</a>.</li>
	</ul>
	';
	break;

	case '67' :
	echo '
	<p>You follow the Gnollish Crossdresser into a room which is mostly dominated with a complex, inert machine. “We invented this to make breakfast for us,” he says, “because that’s what super-intelligent people do. But we just can’t make it work.”</p>

	<p>You look it over. “Ah, I see,” you say, “this keychain will fit perfectly between the toaster and the chicken. The chicken will attack it, because it’s shiny, and then lay an egg. It’ll fall into this…” you quickly tie the harem pants across two support poles… “and then roll over to the stove. But how to light the stove…”</p>

	<p>“Yes,” the gnoll replies, “if only we had some goofballs… they go up in flame at the slightest application of heat.”</p>

	<p>“Goofballs it is, then!” you put the goofballs under the stove, where a conveyor belt will bring a match after dragging it across an old army boot to light it. “Now, we just need some power.” You notice a bicycle seat and pedals hooked into the machine. “Hold on just one second.”</p>

	<p>You run back to the Seaside Town and grab the friendly hobo, who willingly goes with you because you gave him the meat. “How’d you like a steady job?” you ask him, when you’re both back inside the Knoll.”</p>

	<p>“Well I reckon that’d be all right,” he says. “So I just sit here and pedal? I can do that. S’long as I have full medical and dental benefits.” He pauses, then laughs. “Nah, just kiddin’. Just pay me some meat and the occasional bottle of Mad Train Wine and I’ll be fine.” He rubs his hands together. “Sure is cold in here, though.”</p>

	<p>“Take these mittens!” You give the hobo the eXtreme Mittens. He starts pedaling and the machine cooks up two eggs, sunny-side up, some toast, and a side of angst. “Looks like it needs some fine-tuning,” the gnoll says, “but it works! Thank you, adventurer! Since you helped us so much, I will tell you one of the deep, dark secrets of the knoll.” He leans forward and whispers in your ear: “Osborne acted alone.”</p>

	<p>“What?”</p>

	<p>“Years ago, we found a headless bat outside of our door. People have long speculated that its head was bitten off by two or three people, possibly with the help of the Penguin Mafia. But we know the truth -- Osborne acted alone. It is a secret we only reveal to our closest friends.”</p>

	<p>“Okay … I guess I’ll be going, then.”</p>

	<p>Congratulations! You’ve employed a hobo, found a Plot Device, beat up on some nasty monsters, and completed a quest for the Council! Truly, a choose-your-own-adventurer is you!</p>

	<p>If you had fun playing around with this, do try <a href="http://kingdomofloathing.com">http://www.kingdomofloathing.com</a>. It’s a lot like this, only more interactive, has a chat, and is harder to set on fire. And it’s as free as something that doesn’t cost any money!</p>
	';
	break;

	case '68' :
	echo '
	<p>Did you put the lotion in the basket?</a>
	<ul>
		<li>If you did, <a href="?kol=45">go to section 45</a></li>
		<li>If not, <a href="?kol=67">go to section 67</a></li>
	</ul>
	';
	break;

	case '70' :
	echo '
	<p>You wander around the eXtreme Slope for a while, taking in all of the eXtreme goings-on. You ride a ski-lift to the top of the tallest slope and come across a large group of teenagers milling around and chatting excitedly. One of them is standing off to the side with a snowboard under his arm, looking glum. You ask him what’s up.</p>

	<p>“See that fraternity orc over there?” he says. “He’s my bitter arch-rival. Somehow, I got talked into entering a snowboarding contest against him, even though he’s the three-year state snowboarding champion, and I’ve never ridden one of these things before in my life. And if I lose, I’ll never win the heart of the girl I love.”</p>

	<p>“Tough break,” you nod, sympathetically.</p>

	<p>What you wanna do? Besides being a baller, shot caller, or brawler, that is.</p>
	<ul>
		<li>To give him a pep-talk, <a href="?kol=47">go to Section 47</a>.</li>
		<li>To give him some boarding tips, <a href="?kol=71">go to Section 71</a>.</li>
		<li>To offer to help him cheat, <a href="?kol=15">go to Section 15</a>.</li>
	</ul>
	';
	break;

	case '71' :
	echo '
	<p>You pat the kid on the shoulder.</p>

	<p>“Don’t worry, kid, this slope is easy. Just do some simple tricks at first to build up power, and then as you pass that big tree, jump up, grind the branches, and grab the power-up. Then you can do an Übertrick.”</p>

	<p>“A what?”</p>

	<p>“You know, like break-dancing on the board in mid-air, or spinning around upside-down while hopping on one foot, or something.”</p>

	<p>“I don’t think that’s actually poss...”</p>

	<p>“Trust me, kid, it’s simple. You’ll knock ‘em dead.”</p>

	<p>Unfortunately, he stumbles on his first jump and rolls down the slope, collecting snow and speed as he goes. You dive out of the way as the giant snowball wipes out the crowd.</p>

	<p>“Poor kid,” you think. “If only he hadn’t missed the powerup.”</p>

	<ul>
		<li>To go back to the anklehills of Mt. McLargeHuge, <a href="?kol=72">go to Section 72</a></li>
		<li>To experience a glitch in the Matrix, <a href="?kol=70">go to Section 70</a></li>
		<li>To get off the mountain and search elsewhere, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '72' :
	echo '
	<p>You stride up past the foothills of Mt. McLargehuge. As you leave the foothills and enter the anklehills, you stop and breathe in the fresh mountain air. You feel a brief sensation that the mountain is a living entity, and that it reverberates with musical sounds. Then that passes -- of course the hills aren’t alive, that’s just silly.</p>

	<p>You regard the impressive glaciers and snowy massiveness of Mt. McLargeHuge with trepidation. Then you put down the trepidation (where’d you get that stuff, anyway?) and read the trail guide in front of you. It looks like you have your choice of three equally unlikely places to go -- three will be the number of the places, and the number of the places shall be three. One branch ends at “The Secret Lair of the Ninja Snowmen” (which can’t be all that secret really, since it’s written on the sign), one goes around the calfhills of the mountain, across the Orc Chasm, and into the valley of Rof’Lm’Fao, and one leads to The eXtreme Slope, a popular hangout for all manner of eXTREME people doing eXTREME things.</p>

	<ul>
		<li>To follow the trail to The Lair of the Ninja Snowmen, <a href="?kol=57">go to Section 57.</a></li>
		<li>To follow the trail to Rof’Lm’Fao, <a href="?kol=25">go to Section 25</a></li>
		<li>To follow the trail to The eXtreme Slope, <a href="?kol=70">go to Section 70</a></li>
	</ul>
	';
	break;

	case '73' :
	echo '
	<p>You’re fighting a Ninja Snowman... you seem to have interrupted his lunch break. That’s not a problem though, as he’s perfectly willing to beat you senseless armed with only a rice bowl and a pair of chopsticks. And when I say it’s not a problem, I mean for him. It could very well be a problem for you.</p>

	<p>He gets the jump on you and karate-chops you in the back with his twiggy arms. You get a couple of splinters. And a shredder. Ouch! Ow! Ooooof!</p>

	<p>You flail madly with your arms and legs, but can’t connect.</p>

	<p>He slashes at you with his chopsticks, and you get wasabi in your eye. Aaaaaaaaiiiiiieeeee! Owie! Ooof! Yipe yipe yipe!</p>

	<p>You lose the fight. You slink away, dejected and humiliated.</p>

	<p>You’ve had the crap beaten out of you. You’re going to need some more crap. Well, actually, you’re going to need some skills if you want to beat this guy.</p>

	<ul>
		<li>To join a Guild, <a href="?kol=75">go to Section 75</a>.</li>
		<li>If you have no short-term memory, <a href="?kol=73">go to Section 73</a>.</li>
	</ul>
	';
	break;

	case '74' :
	echo '
	<p>You’re fighting a Knob Goblin Master Chef. He could sauté you, flambé you, or make a roux out of you. You have no idea what any of those words mean, but they all sound pretty unpleasant.</p>

	<p>He gets the jump on you and kicks it up a notch. And by “it,” I mean, “your face.” BAM! Ouch! Ow! Ooof!</p>

	<p>You remember your training and moxiously poke him right in the eye. He shouts “Ay yai yai!” and runs away. You win the fight!</p>

	<p>“All right,” you say to the other cowering chefs. “Which one of you has the Obvious Plot Device? Don’t make me push you around, ‘cause I will. Oh, I will.”</p>

	<p>“I swear, we haven’t seen it,” one of the Chefs says. “We’re just here for the food, man.” You search the kitchens and don’t see the Device anywhere. Now what?</p>

	<ul>
		<li>To return to the entryway of Cobb’s Knob, <a href="?kol=43">go to Section 43</a></li>
		<li>To return to the town and pick a new location, <a href="?kol=20">go to Section 20</a></li>
	</ul>
	';
	break;

	case '75' :
	echo '
	<p>You stroll around Seaside Town for a while, taking in the sights. There’s lots of interesting things to see, but we’ve only got a few pages here, so we’ll stick to some of the highlights.</p>

	<ul>
		<li>To visit the League of Chef-Magi, <a href="?kol=59">go to section 59</a></li>
		<li>To visit the Brotherhood of the Smackdown, <a href="?kol=6">go to section 6</a></li>
		<li>To visit the Department of Shadowy Arts and Crafts, <a href="?kol=14">go to section 14</a></li>
		<li>To visit the Council of Loathing (if you haven’t dealt with them already), <a href="?kol=11">go to section 11</a></li>
	</ul>

	';
	break;

	case '76' :
	echo '
	<p>A triffid rises from the bushes, hissing evilly at you! (For those of you shouting “What the hell is a Triffid?”, it’s a type of horrible ambulatory plant. And you’ll probably need an ambulance after it’s done ambulating all over you.)</p>

	<p>It tries to blind you with its tongue-like appendage, but to no avail, since somebody apparently forgot to tell it that you can only be blinded by science.</p>

	<p>You concentrate your starchy magic and call forth a Minor Ray of Bullets, which shred the foul plant-beast like… well, like bullets through a plant, really. POW! BLAM! ZAP!</p>

	<p>You win the fight!</p>

	<p>You search the area for a while, but don’t find the Obvious Plot Device. Darn.</p>

	<ul>
		<li>To return to the Distant Woods: <a href="?kol=26">go to section 26</a></li>
		<li>To try your luck somewhere else: <a href="?kol=20">go to section 20</a></li>
	</ul>
	';
	break;


	default : 

		echo '
		<h2>Kingdom of Loathing: The Home Game: Pirate WordPress Dashboard Widget Edition.</h2>

		<p>Writing: Josh “Mr. Skullhead” Nite, Nathan “Riff” Conner</p>
		<p>Artwork: Zack “Jick” Johnson (not included in this version)</p>
		<p>Editing & Layout: Nathan “Riff” Conner</p>
		<p>Coding & Conversion: Meredith "Braindouche" Matthews</p>
		<p>All content copyright © 2006,Asymmetric Publications, LLC <a href="http://www.kingdomofloathing.com">http://www.kingdomofloathing.com</a></p>

		<p>Used utterly without permission, but with lots of affection. </p>
		<p><a href="?kol=home">Click here to begin</a></p>
		';
	break;

	}

}

?>
