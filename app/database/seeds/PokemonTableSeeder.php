<?php

class PokemonTableSeeder extends Seeder {
	public function run()
	{
		$pokemon = new Pokemon();
		$pokemon->number = 001;
		$pokemon->name = 'Stegaseed';
		$pokemon->description = 'Tiny Seed';
		$pokemon->type1_id = 10;
		$pokemon->entry = 'Stegaseed lives its entire life in search of nutrients';

		$pokemon = new Pokemon();
		$pokemon->number = 002;
		$pokemon->name = 'Stegastalk';
		$pokemon->description = 'Growth';
		$pokemon->type1_id = 10;
		$pokemon->entry = 'It is incredibly defensive of the stalk that grows on its back';

		$pokemon = new Pokemon();
		$pokemon->number = 003;
		$pokemon->name = 'Stegaflora';
		$pokemon->description = 'Corrosive Spike';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'If attacked, it will poison its foes with the spikes on its tail';

		$pokemon = new Pokemon();
		$pokemon->number = 004;
		$pokemon->name = 'Immomimus';
		$pokemon->description = 'Ember Lizard';
		$pokemon->type1_id = 7;
		$pokemon->entry = 'It uses the embers in its stomach to heat its food';

		$pokemon = new Pokemon();
		$pokemon->number = 005;
		$pokemon->name = 'Velociraser';
		$pokemon->description = 'Ember Raptor';
		$pokemon->type1_id = 7;
		$pokemon->entry = 'It stalks its prey in groups, using its fire as a distraction';

		$pokemon = new Pokemon();
		$pokemon->number = 006;
		$pokemon->name = 'Dinonicarson';
		$pokemon->description = 'Arson';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It sets fire to everything in its path and only stops to feed';

		$pokemon = new Pokemon();
		$pokemon->number = 007;
		$pokemon->name = 'Iffin';
		$pokemon->description = 'Tiny Dolphin';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'It thrives mostly off of plankton until it evolves';

		$pokemon = new Pokemon();
		$pokemon->number = 008;
		$pokemon->name = 'Ikthio';
		$pokemon->description = 'Jet';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'It suffers many injuries by slamming into river banks from swimming too fast.';

		$pokemon = new Pokemon();
		$pokemon->number = 009;
		$pokemon->name = 'Ipplesio';
		$pokemon->description = 'Plesiosaurus';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It relies on its psychic powers to determine when predators are too close.';

		$pokemon = new Pokemon();
		$pokemon->number = 010;
		$pokemon->name = 'Shrewd';
		$pokemon->description = 'Timid';
		$pokemon->type1_id = 13;
		$pokemon->entry = 'It spends its days hiding underground from predators';

		$pokemon = new Pokemon();
		$pokemon->number = 011;
		$pokemon->name = 'Moltified';
		$pokemon->description = 'Cowardly';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'When it senses other life, it immediately burrows underground';

		$pokemon = new Pokemon();
		$pokemon->number = 012;
		$pokemon->name = 'Avioptrix';
		$pokemon->description = 'Bird';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'It is not yet capable of flight, so it looks for berries along the ground and uses its wings to dust them off';

		$pokemon = new Pokemon();
		$pokemon->number = 013;
		$pokemon->name = 'Archaetalon';
		$pokemon->description = 'Aggressive Bird';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'Archaetalon is extremely aggressive, picking fights with any living being that enters its territory';

		$pokemon = new Pokemon();
		$pokemon->number = 014;
		$pokemon->name = 'Aviopugil';
		$pokemon->description = 'Fighting Bird';
		$pokemon->type1_id = 6;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'Now capable of flight, Aviopugil keeps the sky around its territory clear of other life';

		$pokemon = new Pokemon();
		$pokemon->number = 015;
		$pokemon->name = 'Sampras';
		$pokemon->description = 'Rabbit';
		$pokemon->type1_id = 6;
		$pokemon->entry = 'It is protective of its food and will fight to the death at the slightest provocation';

		$pokemon = new Pokemon();
		$pokemon->number = 016;
		$pokemon->name = 'Sammel';
		$pokemon->description = 'Sand Camel';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It camoflauges itself with the surrounding dirt to hide from predators';

		$pokemon = new Pokemon();
		$pokemon->number = 017;
		$pokemon->name = 'Rokkit';
		$pokemon->description = 'Kitten';
		$pokemon->type1_id = 16;
		$pokemon->entry = 'It cannot survive in the wild without its pack. It takes shelter in stone cracks';

		$pokemon = new Pokemon();
		$pokemon->number = 018;
		$pokemon->name = 'Stiger';
		$pokemon->description = 'Tiger';
		$pokemon->type1_id = 16;
		$pokemon->entry = 'Young Stiger are taken into the wild by Geosabre to learn how to hunt. Only half of the population survive';

		$pokemon = new Pokemon();
		$pokemon->number = 019;
		$pokemon->name = 'Geosabre';
		$pokemon->description = 'Sabre-Toothed Cat';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'One of the most feared predators in the region, its roar can be heard from miles away';

		$pokemon = new Pokemon();
		$pokemon->number = 020;
		$pokemon->name = 'Lesterick';
		$pokemon->description = 'Possum';
		$pokemon->type1_id = 14;
		$pokemon->entry = 'It poisons its prey with the bacteria in its teeth';

		$pokemon = new Pokemon();
		$pokemon->number = 021;
		$pokemon->name = 'Lesterile';
		$pokemon->description = 'Possum';
		$pokemon->type1_id = 14;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It feeds exclusively on garbage, as the poison inside it is so strong that even it cannot digest prey it has poisoned';

		$pokemon = new Pokemon();
		$pokemon->number = 022;
		$pokemon->name = 'Veronish';
		$pokemon->description = 'Goldfish';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'Only females have been seen. They are one of the smaller water types';

		$pokemon = new Pokemon();
		$pokemon->number = 023;
		$pokemon->name = 'Martaqua';
		$pokemon->description = 'Goldfish';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'Only males have been seen. They are known to eat Veronish';

		$pokemon = new Pokemon();
		$pokemon->number = 024;
		$pokemon->name = 'Abzu';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'It can float on its tail, but prefers to stay dry';

		$pokemon = new Pokemon();
		$pokemon->number = 025;
		$pokemon->name = 'Abzuka';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'It neutralizes attackers using hard jets of water that it produces in its stomach';

		$pokemon = new Pokemon();
		$pokemon->number = 026;
		$pokemon->name = 'Abzukaru';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'It can attack prey and enemies alike with the electricity stored in its cheeks';

		$pokemon = new Pokemon();
		$pokemon->number = 027;
		$pokemon->name = 'Simiglist';
		$pokemon->description = 'Ape';
		$pokemon->type1_id = 6;
		$pokemon->entry = 'It hangs by its strong forearms from tree branches, waiting for fruit to drop to the ground';

		$pokemon = new Pokemon();
		$pokemon->number = 028;
		$pokemon->name = 'Sapiodo';
		$pokemon->description = 'Fighting Ape';
		$pokemon->type1_id = 6;
		$pokemon->entry = 'It protects its pack and delivers food to the resident Neanderthawl';

		$pokemon = new Pokemon();
		$pokemon->number = 029;
		$pokemon->name = 'Neanderthawl';
		$pokemon->description = 'Missing Link';
		$pokemon->type1_id = 6;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'It evolves from Sapiodo only when the previous Neanderthawl dies or leaves the pack';

		$pokemon = new Pokemon();
		$pokemon->number = 030;
		$pokemon->name = 'Squidirt';
		$pokemon->description = 'Dirt Squid';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'It hides itself under the dirt until prey passes above it';

		$pokemon = new Pokemon();
		$pokemon->number = 031;
		$pokemon->name = 'Contkraken';
		$pokemon->description = 'Tectonic';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It feeds on younger Squidirt, moving the plates beneath the dirt they hide in';

		$pokemon = new Pokemon();
		$pokemon->number = 032;
		$pokemon->name = 'Djilarva';
		$pokemon->description = 'Larva';
		$pokemon->type1_id = 1;
		$pokemon->entry = 'Djibeetle raise it to evolve in a way that suits the tribe';

		$pokemon = new Pokemon();
		$pokemon->number = 033;
		$pokemon->name = 'Djibeetle';
		$pokemon->description = 'Beetle';
		$pokemon->type1_id = 1;
		$pokemon->entry = 'It evolves into one of seventeen types, depending on its tribe';

		$pokemon = new Pokemon();
		$pokemon->number = 034;
		$pokemon->name = 'Djishadow';
		$pokemon->description = 'Dark Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It is trained in stealth and is looked down upon by other Djibeetle sects';

		$pokemon = new Pokemon();
		$pokemon->number = 035;
		$pokemon->name = 'Djidrake';
		$pokemon->description = 'Dragon Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'When a Djibeetle has enough discipline to seek out power in the north, it becomes a Djidrake';

		$pokemon = new Pokemon();
		$pokemon->number = 036;
		$pokemon->name = 'Djiwatt';
		$pokemon->description = 'Electric Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Djiwatt provide power to Djibeetle colonies and are considered self-sacrificial';

		$pokemon = new Pokemon();
		$pokemon->number = 037;
		$pokemon->name = 'Djigleam';
		$pokemon->description = 'Fairy Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 5;
		$pokemon->entry = 'When trained in psychic power, some Djibeetle accidentally become Djigleam';

		$pokemon = new Pokemon();
		$pokemon->number = 038;
		$pokemon->name = 'Djidojo';
		$pokemon->description = 'Warrior Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'Djidojo are the warriors of Djibeetle clans and are the most common evolution';

		$pokemon = new Pokemon();
		$pokemon->number = 039;
		$pokemon->name = 'Djimmolate';
		$pokemon->description = 'Fire Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 7;
		$pokemon->entry = 'Djimmolate fight alongside Djidojo to defend their colonies. They are typically used as a last resort';

		$pokemon = new Pokemon();
		$pokemon->number = 040;
		$pokemon->name = 'Djiavia';
		$pokemon->description = 'Flying Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'It functions as a scout within Djibeetle colonies. Its eyesight is unparalleled among its comrades';

		$pokemon = new Pokemon();
		$pokemon->number = 041;
		$pokemon->name = 'Djispectre';
		$pokemon->description = 'Ghost Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'When a Djibeetle dies before evolution, Djisage bring them back to life as Djispectre';

		$pokemon = new Pokemon();
		$pokemon->number = 042;
		$pokemon->name = 'Djibotan';
		$pokemon->description = 'Nature Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 10;
		$pokemon->entry = 'It helps food to grow in Djibeetle colonies. When there are fewer Djibotan in a colony, Djibeetle will trade with other colonies.';

		$pokemon = new Pokemon();
		$pokemon->number = 043;
		$pokemon->name = 'Djiterra';
		$pokemon->description = 'Sand Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Outcasts from Djibeetle colonies, Djiterra ambush prey from underground.';

		$pokemon = new Pokemon();
		$pokemon->number = 044;
		$pokemon->name = 'Djicelsi';
		$pokemon->description = 'Ice Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Djicelsi are found only in northern colonies. How they survive without food is unknown.';

		$pokemon = new Pokemon();
		$pokemon->number = 045;
		$pokemon->name = 'Djinull';
		$pokemon->description = 'Plain Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 13;
		$pokemon->entry = 'Djinull specialize in no single task. Instead, they work where they are needed in their colonies';

		$pokemon = new Pokemon();
		$pokemon->number = 046;
		$pokemon->name = 'Djitox';
		$pokemon->description = 'Poison Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It works together with Djishadow to sow chaos in Djibeetle colonies';

		$pokemon = new Pokemon();
		$pokemon->number = 047;
		$pokemon->name = 'Djisage';
		$pokemon->description = 'Mystic Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'The leader of a Djibeetle colony is always a Djisage. Their psychic power allows them to raise their dead';

		$pokemon = new Pokemon();
		$pokemon->number = 048;
		$pokemon->name = 'Djisedi';
		$pokemon->description = 'Stone Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 16;
		$pokemon->entry = 'Unfit for military service due to their slow movement speed, Djisedi act as targets for infantry, never feeling any pain.';

		$pokemon = new Pokemon();
		$pokemon->number = 049;
		$pokemon->name = 'Djindust';
		$pokemon->description = 'Iron Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'They are able to move faster than Djisedi, and are therefore used as tanks in military engagements';

		$pokemon = new Pokemon();
		$pokemon->number = 050;
		$pokemon->name = 'Djivapor';
		$pokemon->description = 'Water Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'Like Djicelsi, Djivapor have their own colonies deep in the ocean';

		$pokemon = new Pokemon();
		$pokemon->number = 051;
		$pokemon->name = 'Chevalittle';
		$pokemon->description = 'Knight';
		$pokemon->type1_id = 17;
		$pokemon->entry = 'It is born into a life of constant warfare. It learns combat before it learns how to search for food';

		$pokemon = new Pokemon();
		$pokemon->number = 052;
		$pokemon->name = 'Chevaliant';
		$pokemon->description = 'Chevalier';
		$pokemon->type1_id = 17;
		$pokemon->entry = 'Chevaliant were used by ancient kings to defend palaces. Status was determined depending on the number of Chevaliant in the guard';

		$pokemon = new Pokemon();
		$pokemon->number = 053;
		$pokemon->name = 'Chevaliaymore';
		$pokemon->description = 'Claymore';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'When a Chevaliant has mastered the art of physical combat, it forms a claymore from its own steel and become a Chevaliaymore';

		$pokemon = new Pokemon();
		$pokemon->number = 054;
		$pokemon->name = 'Chevaliarcane';
		$pokemon->description = 'Arcane';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'When a Chevaliant prioritizes its intellect over strength, it obtains psychic power and become a Chevaliarcane';

		$pokemon = new Pokemon();
		$pokemon->number = 055;
		$pokemon->name = 'Chevaliarceny';
		$pokemon->description = 'Archer';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'When a Chevaliant trains mostly in speed, it forms a bow from its own steel and becomes a Chevaliarceny';

		$pokemon = new Pokemon();
		$pokemon->number = 056;
		$pokemon->name = 'Slidog';
		$pokemon->description = 'Spare';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It uses its psychic powers to stop potential predators in their tracks';

		$pokemon = new Pokemon();
		$pokemon->number = 057;
		$pokemon->name = 'Spiritard';
		$pokemon->description = 'Mystic';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'Legends say it came from space along with Slidog. It uses its psychic powers to avoid being touched';

		$pokemon = new Pokemon();
		$pokemon->number = 058;
		$pokemon->name = 'Miimur';
		$pokemon->description = 'Proud';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It is so sure of its own skill that it will disregard orders from its trainer if it feels it is superior';

		$pokemon = new Pokemon();
		$pokemon->number = 059;
		$pokemon->name = 'Miimurdur';
		$pokemon->description = 'Purebred';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It leads packs of Miimur, training them to eventually lead packs of their own';

		$pokemon = new Pokemon();
		$pokemon->number = 060;
		$pokemon->name = 'Miimacho';
		$pokemon->description = 'Domineering';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'Miimacho will take any chance they get to dominate others. If they feel their sense of superiority is being threatened, they will act decisively';

		$pokemon = new Pokemon();
		$pokemon->number = 061;
		$pokemon->name = 'Bosephus';
		$pokemon->description = 'Black Labrador';
		$pokemon->type1_id = 13;
		$pokemon->entry = 'Bosephus are often kept as pets due to their playful and kind demeanors. When threatened, however, Bosephus defends its family with its powerful jaws';

		$pokemon = new Pokemon();
		$pokemon->number = 062;
		$pokemon->name = 'Glowsephus';
		$pokemon->description = 'Fairy Dog';
		$pokemon->type1_id = 5;
		$pokemon->entry = 'It evolves from Bosephus when it thrives more off of affection than on its sense of duty';

		$pokemon = new Pokemon();
		$pokemon->number = 063;
		$pokemon->name = 'Noisephus';
		$pokemon->description = 'Guard Dog';
		$pokemon->type1_id = 2;
		$pokemon->entry = 'It evolves from Bosephus when its sense of duty is more powerful than affection';

		$pokemon = new Pokemon();
		$pokemon->number = 064;
		$pokemon->name = 'Seedsme';
		$pokemon->description = 'Osmosis Seed';
		$pokemon->type1_id = 10;
		$pokemon->entry = 'It absorbs all things smaller than it, growing slightly larger every time it feeds';

		$pokemon = new Pokemon();
		$pokemon->number = 065;
		$pokemon->name = 'Eatrap';
		$pokemon->description = 'Fly Trap';
		$pokemon->type1_id = 10;
		$pokemon->entry = 'It uses its jaws to eat passing Skittegg and Skitto. Whenever it feeds, it uses the outer shell of its prey to bolster its defenses';

		$pokemon = new Pokemon();
		$pokemon->number = 066;
		$pokemon->name = 'Hungarden';
		$pokemon->description = 'Engorging';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'It spends its entire day eating. Its thick steel exterior prevents its meals from being interrupted';

		$pokemon = new Pokemon();
		$pokemon->number = 067;
		$pokemon->name = 'Skittegg';
		$pokemon->description = 'Egg';
		$pokemon->type1_id = 1;
		$pokemon->entry = 'Only 1/4 of Skittegg survive to become Skitto. They can be found in large groups on lakebeds';

		$pokemon = new Pokemon();
		$pokemon->number = 068;
		$pokemon->name = 'Skitto';
		$pokemon->description = 'Mosquito';
		$pokemon->type1_id = 1;
		$pokemon->entry = 'It subsists off of blood. It flies nonstop in search of hosts';

		$pokemon = new Pokemon();
		$pokemon->number = 069;
		$pokemon->name = 'Maskitto';
		$pokemon->description = 'Poison Needle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'When it finds a proper host, it poisons the host and uses it as its sole source of blood';

		$pokemon = new Pokemon();
		$pokemon->number = 070;
		$pokemon->name = 'Fearther';
		$pokemon->description = 'Intimidating';
		$pokemon->type1_id = 8;
		$pokemon->entry = 'It travels in flocks of ten to twenty. The sight of a flock of Fearther is enough to scare other life from their territory';

		$pokemon = new Pokemon();
		$pokemon->number = 071;
		$pokemon->name = 'Pterrordactyl';
		$pokemon->description = 'When a Pterrordactyl takes up residence in an area, other life will sometimes serve it out of fear';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 2;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 072;
		$pokemon->name = 'Twiburn';
		$pokemon->description = 'Tiny Ember';
		$pokemon->type1_id = 7;
		$pokemon->entry = 'Its lifespan is very short. It lives for as long as it can continue to consume its host twig';

		$pokemon = new Pokemon();
		$pokemon->number = 073;
		$pokemon->name = 'Logustion';
		$pokemon->description = 'When a Twiburn scatters its flames to other twigs, they come together to form a Logustion';
		$pokemon->type1_id = 7;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 074;
		$pokemon->name = 'Oakombust';
		$pokemon->description = 'When a Logustion sets a tree ablaze, it evolves into Oakombust. Oakombust can live for thousands of years';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 9;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 075;
		$pokemon->name = 'Terrairy';
		$pokemon->description = 'Earth Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It protects the small plots of land it settles on, appeasing attackers if they cannot be defeated';

		$pokemon = new Pokemon();
		$pokemon->number = 076;
		$pokemon->name = 'Extround';
		$pokemon->description = 'Earth Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It will sometimes destroy entire forests to protect the soil it makes its home in';

		$pokemon = new Pokemon();
		$pokemon->number = 077;
		$pokemon->name = 'Sirenvian';
		$pokemon->description = 'Siren';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'It is known for luring sailors to rocks and scavenging ship ruins for shiny baubels. Its song can entrance even the most disciplined minds';

		$pokemon = new Pokemon();
		$pokemon->number = 078;
		$pokemon->name = 'Magholia';
		$pokemon->description = 'Fighting Guinea Pig';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'No enemy is too large for it. It consistently challenges predators many times its own size';

		$pokemon = new Pokemon();
		$pokemon->number = 079;
		$pokemon->name = 'Lillianil';
		$pokemon->description = 'Elegant Guinea Pig';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 5;
		$pokemon->entry = 'Kings treasured Lillianil for its flowing skirt. For a kingdom to possess multiple Lillianil was a sign of great wealth';

		$pokemon = new Pokemon();
		$pokemon->number = 080;
		$pokemon->name = 'Mammusk';
		$pokemon->description = 'Mammoth';
		$pokemon->type1_id = 12;
		$pokemon->entry = 'They are hunted relentlessly by Geosabre. As a result, many do not survive to adulthood';

		$pokemon = new Pokemon();
		$pokemon->number = 081;
		$pokemon->name = 'Mammonk';
		$pokemon->description = 'Reflective';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'As a Mammusk reaches adulthood, it seeks a life of solitude because of the hardships it faced. In its solitude, it gains psychic power.';

		$pokemon = new Pokemon();
		$pokemon->number = 082;
		$pokemon->name = 'Mammophant';
		$pokemon->description = 'Respected even among Geosabre, Mommophant live in small groups and use their psychic power to alter the weather and try to save as many Mammusk as they can';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 15;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 083;
		$pokemon->name = 'Stratust';
		$pokemon->description = 'Cloud';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'Capable of little more than light showers, Stratust remain close to Nimblast and learn to channel electricity.';

		$pokemon = new Pokemon();
		$pokemon->number = 084;
		$pokemon->name = 'Nimblast';
		$pokemon->description = 'Storm Cloud';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'Nimblast compete amonst themselves to determine which can produce the most energy. When this occurs, massive thunderstorms appear in the region.';

		$pokemon = new Pokemon();
		$pokemon->number = 085;
		$pokemon->name = 'Cumulohm';
		$pokemon->description = 'Resistance';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'If a Nimblast causes a natural disaster, it evolves into Cumulohm. It spends the rest of its life storing up its electricty and refuses to release it unless it is absolutely necessary.';

		$pokemon = new Pokemon();
		$pokemon->number = 086;
		$pokemon->name = 'Ankloc';
		$pokemon->description = 'Club';
		$pokemon->type1_id = 16;
		$pokemon->entry = 'When many gather in one place, they hit trees with their club tails. The sound can be heard for miles.';

		$pokemon = new Pokemon();
		$pokemon->number = 087;
		$pokemon->name = 'Anklojitsu';
		$pokemon->description = 'Club Tail';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It uses the club on its tail primarily as a warning to potential predators, but it can also break bones easily';

		$pokemon = new Pokemon();
		$pokemon->number = 088;
		$pokemon->name = 'Anklokussion';
		$pokemon->description = 'Blunt Trauma';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 6;
		$pokemon->entry = "Though it is slow to anger, one swipe from its clubbed tail is enough to break every bone in an organism's body";

		$pokemon = new Pokemon();
		$pokemon->number = 089;
		$pokemon->name = 'Sedimoan';
		$pokemon->description = 'Rock Spirit';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Legends say it is created when a wandering spirit attaches to a rock burned by lava from a volcanic eruption.';

		$pokemon = new Pokemon();
		$pokemon->number = 090;
		$pokemon->name = 'Lavenged';
		$pokemon->description = 'Rock Spirit';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Though it cannot control fire, Lavenged is said to burn its foes through sheer will.';

		$pokemon = new Pokemon();
		$pokemon->number = 091;
		$pokemon->name = 'Pixitox';
		$pokemon->description = 'Poison Pixie';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It is said that Pixitox was created when a Terrairy attached itself to polluted land.';

		$pokemon = new Pokemon();
		$pokemon->number = 092;
		$pokemon->name = 'Chemuse';
		$pokemon->description = 'Poison Pixie';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It corrupts every piece of land it attaches to. It is said that other living things feel sickly just standing outside of its territory.';

		$pokemon = new Pokemon();
		$pokemon->number = 093;
		$pokemon->name = 'Pyrag';
		$pokemon->description = 'Pyramid';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Its area of origin is unknown, but it seems to comprehend human speech flawlessly.';

		$pokemon = new Pokemon();
		$pokemon->number = 094;
		$pokemon->name = 'Pyragear';
		$pokemon->description = 'Mechanism';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Its gears rotate at all hours of the day. The purpose of this activity is unknown.';

		$pokemon = new Pokemon();
		$pokemon->number = 095;
		$pokemon->name = 'Pyragyro';
		$pokemon->description = 'Generator';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Pyragyro are typically used as sources of power, though the energy it produces is not necessarily electricity.';

		$pokemon = new Pokemon();
		$pokemon->number = 096;
		$pokemon->name = 'Dagaclaw';
		$pokemon->description = 'Thief';
		$pokemon->type1_id = 2;
		$pokemon->entry = 'It uses its hook-like claws to grab eggs. The sight of it causes other organisms to guard their nests.';

		$pokemon = new Pokemon();
		$pokemon->number = 097;
		$pokemon->name = 'Dagatail';
		$pokemon->description = 'Dagger Tail';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'Its tail is made up of several bones that separate and form a whip-like razor. It can straighten and separate individual bones on its tail at will.';

		$pokemon = new Pokemon();
		$pokemon->number = 098;
		$pokemon->name = 'Dagafeather';
		$pokemon->description = 'Assassin';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It is rarely seen, but its handiwork can always be observed. It eats only small parts of its prey and leaves the rest in a ritualistic assembly.';

		$pokemon = new Pokemon();
		$pokemon->number = 099;
		$pokemon->name = 'Potatolon';
		$pokemon->description = 'Mischief Chinchilla';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'It will go out of its way to bother any living creature in its path. It is known for carrying microscopic everyday items with it.';

		$pokemon = new Pokemon();
		$pokemon->number = 100;
		$pokemon->name = 'Hammond';
		$pokemon->description = 'Hammond';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 5;
		$pokemon->entry = "Hello, I'm Hammond!";

		$pokemon = new Pokemon();
		$pokemon->number = 101;
		$pokemon->name = 'Brontoyal';
		$pokemon->description = 'Long Neck';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'At birth it stands head and shoulders above other life forms.';

		$pokemon = new Pokemon();
		$pokemon->number = 102;
		$pokemon->name = 'Diplomicus';
		$pokemon->description = 'Regal';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'Diplomicus that are not selected to lead their herds sometimes travel as envoys to other herds.';

		$pokemon = new Pokemon();
		$pokemon->number = 103;
		$pokemon->name = 'Imperiodicus';
		$pokemon->description = 'Monarch';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'In every herd, a male and female Diplomicus are selected to lead. They then produce the next generation of Brontoyal.';

		$pokemon = new Pokemon();
		$pokemon->number = 104;
		$pokemon->name = 'Pangolic';
		$pokemon->description = 'Armor';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It produces a weak poison in its nails that can leave predators feeling sick.';

		$pokemon = new Pokemon();
		$pokemon->number = 105;
		$pokemon->name = 'Pangorrosive';
		$pokemon->description = 'Spiny Armor';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It defends itself by shooting poison from gaps in its armor. Any creature that comes into contact with this poison cannot be cured.';

		$pokemon = new Pokemon();
		$pokemon->number = 106;
		$pokemon->name = 'Scaldander';
		$pokemon->description = 'Salamander';
		$pokemon->type1_id = 7;
		$pokemon->entry = 'It adapts to whatever environment it lives in. It is said that it and Djibeetle share a common ancestor.';

		$pokemon = new Pokemon();
		$pokemon->number = 107;
		$pokemon->name = 'Scladavolt';
		$pokemon->description = 'Electric Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'In the rare event that a Scaldander is struck by lightning, its body adapts, believing the electricity to be part of its environment.';

		$pokemon = new Pokemon();
		$pokemon->number = 108;
		$pokemon->name = 'Scaldabloom';
		$pokemon->description = 'Plant Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 10;
		$pokemon->entry = 'Many Scaldander settle down in forests. These Scaldander grow new life on their bodies, using their heat to give this new life energy.';

		$pokemon = new Pokemon();
		$pokemon->number = 109;
		$pokemon->name = 'Scallice';
		$pokemon->description = 'Icy Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Few Scaldander end up settling in the north, but those that do become Scallice. Scallice can survive in any temperature.';

		$pokemon = new Pokemon();
		$pokemon->number = 110;
		$pokemon->name = 'Scallent';
		$pokemon->description = 'Water Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'For Scaldander that settle by rivers and lakes and become Scallent, a protective layer of fat forms around them, protecting their flames.';

		$pokemon = new Pokemon();
		$pokemon->number = 111;
		$pokemon->name = 'Frozamie';
		$pokemon->description = 'Snow Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'It wanders the icy north, causing plants to groom despite the harsh climate.';

		$pokemon = new Pokemon();
		$pokemon->number = 112;
		$pokemon->name = 'Friezamore';
		$pokemon->description = 'Snow Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Of the few Mammusk that survive until adulthood, most owe their survival to Friezamore. Friezamore and their Mammophant become lifelong friends.';

		$pokemon = new Pokemon();
		$pokemon->number = 113;
		$pokemon->name = 'Cryorganic';
		$pokemon->description = 'Toxic Ice';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It blends in with icicles and poisons any potential prey that passes under it.';

		$pokemon = new Pokemon();
		$pokemon->number = 114;
		$pokemon->name = 'Telekinizard';
		$pokemon->description = 'Psychic Lizard';
		$pokemon->type1_id = 15;
		$pokemon->entry = 'It catches Skittegg by holding it in place with its psychic power.';

		$pokemon = new Pokemon();
		$pokemon->number = 115;
		$pokemon->name = 'Telekiguana';
		$pokemon->description = 'Psychic Iguana';
		$pokemon->type1_id = 15;
		$pokemon->entry = 'It bends the light around it to become invisible to prey. However, it is in this state that it is most vulnerable to attacks by Growbra.';

		$pokemon = new Pokemon();
		$pokemon->number = 116;
		$pokemon->name = 'Telekwyrm';
		$pokemon->description = 'Psychic Drake';
		$pokemon->type1_id = 15;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'It feeds on fairy-types, using its psychic power to defend itself from their attacks.';

		$pokemon = new Pokemon();
		$pokemon->number = 117;
		$pokemon->name = 'Desegrave';
		$pokemon->description = 'Hallowed';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'When a Terrairy dies in defense of its land, it is said that its spirit possesses the land, thus forming Desegrave.';

		$pokemon = new Pokemon();
		$pokemon->number = 118;
		$pokemon->name = 'Desequake';
		$pokemon->description = 'Crypt';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'It absorbs the souls of any living being that enters its territory.';

		$pokemon = new Pokemon();
		$pokemon->number = 119;
		$pokemon->name = 'Lutapara';
		$pokemon->description = 'Bard';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'It sings all day with its pack. If its rough hide were not disliked by predators, the noisse would bring them in droves.';

		$pokemon = new Pokemon();
		$pokemon->number = 120;
		$pokemon->name = 'Troubasauralophus';
		$pokemon->description = 'Troubadour';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'Human musicians have tried to mimic its song through the years. Not one musician has proven capable of doing so.';

		$pokemon = new Pokemon();
		$pokemon->number = 121;
		$pokemon->name = 'Giftaimen';
		$pokemon->description = 'Caiman';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It poisons small fish with its teeth. It is not completely resistant to its own poison yet, so the only Giftaimen that survive are the ones that adapt.';

		$pokemon = new Pokemon();
		$pokemon->number = 122;
		$pokemon->name = 'Giftodile';
		$pokemon->description = 'Crocodile';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'When a Giftaimen builds up a strong enough poison resistance, it evolves and develops a new type of poison. Then the cycle begins again.';

		$pokemon = new Pokemon();
		$pokemon->number = 123;
		$pokemon->name = 'Giftogator';
		$pokemon->description = 'Alligator';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'Giftogator can resist any kind of poison. The only Giftogator that exist are ones that survived Giftaimen and Giftodile poison.';

		$pokemon = new Pokemon();
		$pokemon->number = 124;
		$pokemon->name = 'Morrigant';
		$pokemon->description = 'Sea Dog';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'It is celebrated for its beauty, and it is often used as a pet.';

		$pokemon = new Pokemon();
		$pokemon->number = 125;
		$pokemon->name = 'Morritide';
		$pokemon->description = 'Sea Labrador';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'Waves on nearby bodies of water move in sync with its heartbeat.';

		$pokemon = new Pokemon();
		$pokemon->number = 126;
		$pokemon->name = 'Morrimaid';
		$pokemon->description = 'Mermaid';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'It sits by the shore and watches the waves roll by. It does not seek conflict and no creatures seek conflict with it.';

		$pokemon = new Pokemon();
		$pokemon->number = 127;
		$pokemon->name = 'Asterint';
		$pokemon->description = 'Comet';
		$pokemon->type1_id = 16;
		$pokemon->entry = 'It did not originate on Earth. Every few years, multiple Asterint come to the planet through meteor showers.';

		$pokemon = new Pokemon();
		$pokemon->number = 128;
		$pokemon->name = 'Asterthought';
		$pokemon->description = 'Asteroid';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It emits a strange signal that appears to move items in close proximity.';

		$pokemon = new Pokemon();
		$pokemon->number = 129;
		$pokemon->name = 'Astermind';
		$pokemon->description = 'Meteor';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It floats above the ground and seems to wander the Earth with no purpose. Multiple migrations have been observed, but no reason has been discovered yet.';

		$pokemon = new Pokemon();
		$pokemon->number = 130;
		$pokemon->name = 'Volcone';
		$pokemon->description = 'Budding Volcano';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Very few have been observed because they resemble hills. They are incapable of much more than minor combat.';

		$pokemon = new Pokemon();
		$pokemon->number = 131;
		$pokemon->name = 'Volcrater';
		$pokemon->description = 'Volcano';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It stores lava in its system. It is theorized that this lava is akin to blood in the human body.';

		$pokemon = new Pokemon();
		$pokemon->number = 132;
		$pokemon->name = 'Volcrevice';
		$pokemon->description = 'Volcanic Valley';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'When angered, it causes a volcanic eruption and causes mile-long lava flows.';

		$pokemon = new Pokemon();
		$pokemon->number = 133;
		$pokemon->name = 'Snolar';
		$pokemon->description = 'Cub';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Even in infancy, Snolar are capable of surviving harsh conditions and have no natural predators.';

		$pokemon = new Pokemon();
		$pokemon->number = 134;
		$pokemon->name = 'Snivvur';
		$pokemon->description = 'Polar Bear';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Its fur generates electricity that it uses as a form of communication with other Snivvur.';

		$pokemon = new Pokemon();
		$pokemon->number = 135;
		$pokemon->name = 'Delicare';
		$pokemon->description = '';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 5;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 136;
		$pokemon->name = 'Deliconcern';
		$pokemon->description = '';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 5;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 137;
		$pokemon->name = 'Delimpathy';
		$pokemon->description = '';
		$pokemon->type1_id = 15;
		$pokemon->type2_id = 5;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 138;
		$pokemon->name = 'Shotany';
		$pokemon->description = '';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 4;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 139;
		$pokemon->name = 'Shotanical';
		$pokemon->description = '';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 4;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 140;
		$pokemon->name = 'Noctmet';
		$pokemon->description = '';
		$pokemon->type1_id = 2;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 141;
		$pokemon->name = 'Noctoval';
		$pokemon->description = '';
		$pokemon->type1_id = 2;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 142;
		$pokemon->name = 'Noctagon';
		$pokemon->description = '';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 3;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 143;
		$pokemon->name = 'Growbra';
		$pokemon->description = '';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 11;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 144;
		$pokemon->name = 'Pasgon';
		$pokemon->description = '';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 145;
		$pokemon->name = 'Yeoldra';
		$pokemon->description = '';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 146;
		$pokemon->name = 'Anciennevyrn';
		$pokemon->description = '';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 147;
		$pokemon->name = 'Aerioyal';
		$pokemon->description = '';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 12;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 148;
		$pokemon->name = 'Tyranizor';
		$pokemon->description = '';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 10;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 149;
		$pokemon->name = 'Lioplorodeep';
		$pokemon->description = '';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 2;
		$pokemon->entry = '';

		$pokemon = new Pokemon();
		$pokemon->number = 150;
		$pokemon->name = 'Wyrmgon';
		$pokemon->description = '';
		$pokemon->type1_id = 3;
		$pokemon->type2_id = 7;
		$pokemon->entry = '';
	}
}
?>