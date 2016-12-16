<?php

class PokemonTableSeeder extends Seeder {
	public function run()
	{
		$pokemon = new Pokemon();
		$pokemon->name = 'Stegaseed';
		$pokemon->description = 'Tiny Seed';
		$pokemon->type1_id = 10;
		$pokemon->evolve_level = 17;
		$pokemon->entry = 'Stegaseed lives its entire life in search of nutrients';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Stegastalk';
		$pokemon->description = 'Growth';
		$pokemon->type1_id = 10;
		$pokemon->evolve_level = 34;
		$pokemon->entry = 'It is incredibly defensive of the stalk that grows on its back';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Stegaflora';
		$pokemon->description = 'Corrosive Spike';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'If attacked, it will poison its foes with the spikes on its tail';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Immomimus';
		$pokemon->description = 'Ember Lizard';
		$pokemon->type1_id = 7;
		$pokemon->evolve_level = 17;
		$pokemon->entry = 'It uses the embers in its stomach to heat its food';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Velociraser';
		$pokemon->description = 'Ember Raptor';
		$pokemon->type1_id = 7;
		$pokemon->evolve_level = 34;
		$pokemon->entry = 'It stalks its prey in groups, using its fire as a distraction';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Dinonicarson';
		$pokemon->description = 'Arson';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It sets fire to everything in its path and only stops to feed';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Iffin';
		$pokemon->description = 'Tiny Dolphin';
		$pokemon->type1_id = 18;
		$pokemon->evolve_level = 17;
		$pokemon->entry = 'It thrives mostly off of plankton until it evolves';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Ikthio';
		$pokemon->description = 'Jet';
		$pokemon->type1_id = 18;
		$pokemon->evolve_level = 34;
		$pokemon->entry = 'It suffers many injuries by slamming into river banks from swimming too fast.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Ipplesio';
		$pokemon->description = 'Plesiosaurus';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It relies on its psychic powers to determine when predators are too close.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Shrewd';
		$pokemon->description = 'Timid';
		$pokemon->type1_id = 13;
		$pokemon->evolve_level = 20;
		$pokemon->entry = 'It spends its days hiding underground from predators';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Moltified';
		$pokemon->description = 'Cowardly';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'When it senses other life, it immediately burrows underground';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Avioptrix';
		$pokemon->description = 'Bird';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 8;
		$pokemon->evolve_level = 14;
		$pokemon->entry = 'It is not yet capable of flight, so it looks for berries along the ground and uses its wings to dust them off';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Archaetalon';
		$pokemon->description = 'Aggressive Bird';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 8;
		$pokemon->evolve_level = 36;
		$pokemon->entry = 'Archaetalon is extremely aggressive, picking fights with any living being that enters its territory';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Aviopugil';
		$pokemon->description = 'Fighting Bird';
		$pokemon->type1_id = 6;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'Now capable of flight, Aviopugil keeps the sky around its territory clear of other life';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Sampras';
		$pokemon->description = 'Rabbit';
		$pokemon->type1_id = 6;
		$pokemon->evolve_level = 25;
		$pokemon->entry = 'It is protective of its food and will fight to the death at the slightest provocation';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Sammel';
		$pokemon->description = 'Sand Camel';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It camoflauges itself with the surrounding dirt to hide from predators';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Rokkit';
		$pokemon->description = 'Kitten';
		$pokemon->type1_id = 16;
		$pokemon->evolve_level = 16;
		$pokemon->entry = 'It cannot survive in the wild without its pack. It takes shelter in stone cracks';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Stiger';
		$pokemon->description = 'Tiger';
		$pokemon->type1_id = 16;
		$pokemon->evolve_level = 40;
		$pokemon->entry = 'Young Stiger are taken into the wild by Geosabre to learn how to hunt. Only half of the population survive';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Geosabre';
		$pokemon->description = 'Sabre-Toothed Cat';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'One of the most feared predators in the region, its roar can be heard from miles away';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lesterick';
		$pokemon->description = 'Possum';
		$pokemon->type1_id = 14;
		$pokemon->evolve_level = 22;
		$pokemon->entry = 'It poisons its prey with the bacteria in its teeth';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lesterile';
		$pokemon->description = 'Possum';
		$pokemon->type1_id = 14;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It feeds exclusively on garbage, as the poison inside it is so strong that even it cannot digest prey it has poisoned';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Veronish';
		$pokemon->description = 'Goldfish';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'Only females have been seen. They are one of the smaller water types';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Martaqua';
		$pokemon->description = 'Goldfish';
		$pokemon->type1_id = 18;
		$pokemon->entry = 'Only males have been seen. They are known to eat Veronish';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Abzu';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->evolve_level = 10;
		$pokemon->entry = 'It can float on its tail, but prefers to stay dry';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Abzuka';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'It neutralizes attackers using hard jets of water that it produces in its stomach';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Abzukaru';
		$pokemon->description = 'Mouse';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'It can attack prey and enemies alike with the electricity stored in its cheeks';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Simiglist';
		$pokemon->description = 'Ape';
		$pokemon->type1_id = 6;
		$pokemon->evolve_level = 18;
		$pokemon->entry = 'It hangs by its strong forearms from tree branches, waiting for fruit to drop to the ground';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Sapiodo';
		$pokemon->description = 'Fighting Ape';
		$pokemon->type1_id = 6;
		$pokemon->evolve_method = "Ice Stone";
		$pokemon->entry = 'It protects its pack and delivers food to the resident Neanderthawl';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Neanderthawl';
		$pokemon->description = 'Missing Link';
		$pokemon->type1_id = 6;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'It evolves from Sapiodo only when the previous Neanderthawl dies or leaves the pack';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Squidirt';
		$pokemon->description = 'Dirt Squid';
		$pokemon->type1_id = 18;
		$pokemon->evolve_level = 32;
		$pokemon->entry = 'It hides itself under the dirt until prey passes above it';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Contkraken';
		$pokemon->description = 'Tectonic';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It feeds on younger Squidirt, moving the plates beneath the dirt they hide in';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djilarva';
		$pokemon->description = 'Larva';
		$pokemon->type1_id = 1;
		$pokemon->evolve_level = 20;
		$pokemon->entry = 'Djibeetle raise it to evolve in a way that suits the tribe';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djibeetle';
		$pokemon->description = 'Beetle';
		$pokemon->type1_id = 1;
		$pokemon->entry = 'It evolves into one of seventeen types, depending on its tribe';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djishadow';
		$pokemon->description = 'Dark Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'It is trained in stealth and is looked down upon by other Djibeetle sects';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djidrake';
		$pokemon->description = 'Dragon Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'When a Djibeetle has enough discipline to seek out power in the north, it becomes a Djidrake';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djiwatt';
		$pokemon->description = 'Electric Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Djiwatt provide power to Djibeetle colonies and are considered self-sacrificial';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djigleam';
		$pokemon->description = 'Fairy Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 5;
		$pokemon->entry = 'When trained in psychic power, some Djibeetle accidentally become Djigleam';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djidojo';
		$pokemon->description = 'Warrior Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'Djidojo are the warriors of Djibeetle clans and are the most common evolution';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djimmolate';
		$pokemon->description = 'Fire Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 7;
		$pokemon->entry = 'Djimmolate fight alongside Djidojo to defend their colonies. They are typically used as a last resort';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djiavia';
		$pokemon->description = 'Flying Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'It functions as a scout within Djibeetle colonies. Its eyesight is unparalleled among its comrades';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djispectre';
		$pokemon->description = 'Ghost Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'When a Djibeetle dies before evolution, Djisage bring them back to life as Djispectre';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djibotan';
		$pokemon->description = 'Nature Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 10;
		$pokemon->entry = 'It helps food to grow in Djibeetle colonies. When there are fewer Djibotan in a colony, Djibeetle will trade with other colonies.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djiterra';
		$pokemon->description = 'Sand Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Outcasts from Djibeetle colonies, Djiterra ambush prey from underground.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djicelsi';
		$pokemon->description = 'Ice Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Djicelsi are found only in northern colonies. How they survive without food is unknown.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djinull';
		$pokemon->description = 'Plain Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 13;
		$pokemon->entry = 'Djinull specialize in no single task. Instead, they work where they are needed in their colonies';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djitox';
		$pokemon->description = 'Poison Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It works together with Djishadow to sow chaos in Djibeetle colonies';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djisage';
		$pokemon->description = 'Mystic Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'The leader of a Djibeetle colony is always a Djisage. Their psychic power allows them to raise their dead';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djisedi';
		$pokemon->description = 'Stone Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 16;
		$pokemon->entry = 'Unfit for military service due to their slow movement speed, Djisedi act as targets for infantry, never feeling any pain.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djindust';
		$pokemon->description = 'Iron Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'They are able to move faster than Djisedi, and are therefore used as tanks in military engagements';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Djivapor';
		$pokemon->description = 'Water Beetle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'Like Djicelsi, Djivapor have their own colonies deep in the ocean';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chevalittle';
		$pokemon->description = 'Knight';
		$pokemon->type1_id = 17;
		$pokemon->evolve_level = 18;
		$pokemon->entry = 'It is born into a life of constant warfare. It learns combat before it learns how to search for food';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chevaliant';
		$pokemon->description = 'Chevalier';
		$pokemon->type1_id = 17;
		$pokemon->entry = 'Chevaliant were used by ancient kings to defend palaces. Status was determined depending on the number of Chevaliant in the guard';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chevaliaymore';
		$pokemon->description = 'Claymore';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'When a Chevaliant has mastered the art of physical combat, it forms a claymore from its own steel and become a Chevaliaymore';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chevaliarcane';
		$pokemon->description = 'Arcane';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'When a Chevaliant prioritizes its intellect over strength, it obtains psychic power and become a Chevaliarcane';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chevaliarceny';
		$pokemon->description = 'Archer';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'When a Chevaliant trains mostly in speed, it forms a bow from its own steel and becomes a Chevaliarceny';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Slidog';
		$pokemon->description = 'Spare';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 15;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'It uses its psychic powers to stop potential predators in their tracks';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Spiritard';
		$pokemon->description = 'Mystic';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'Legends say it came from space along with Slidog. It uses its psychic powers to avoid being touched';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Miimur';
		$pokemon->description = 'Proud';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 6;
		$pokemon->evolve_level = 16;
		$pokemon->entry = 'It is so sure of its own skill that it will disregard orders from its trainer if it feels it is superior';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Miimurdur';
		$pokemon->description = 'Purebred';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 6;
		$pokemon->evolve_level = 40;
		$pokemon->entry = 'It leads packs of Miimur, training them to eventually lead packs of their own';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Miimacho';
		$pokemon->description = 'Domineering';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'Miimacho will take any chance they get to dominate others. If they feel their sense of superiority is being threatened, they will act decisively';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Bosephus';
		$pokemon->description = 'Black Labrador';
		$pokemon->type1_id = 13;
		$pokemon->entry = 'Bosephus are often kept as pets due to their playful and kind demeanors. When threatened, however, Bosephus defends its family with its powerful jaws';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Glowsephus';
		$pokemon->description = 'Fairy Dog';
		$pokemon->type1_id = 5;
		$pokemon->entry = 'It evolves from Bosephus when it thrives more off of affection than on its sense of duty';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Noisephus';
		$pokemon->description = 'Guard Dog';
		$pokemon->type1_id = 2;
		$pokemon->entry = 'It evolves from Bosephus when its sense of duty is more powerful than affection';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Seedsme';
		$pokemon->description = 'Osmosis Seed';
		$pokemon->type1_id = 10;
		$pokemon->evolve_level = 26;
		$pokemon->entry = 'It absorbs all things smaller than it, growing slightly larger every time it feeds';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Eatrap';
		$pokemon->description = 'Fly Trap';
		$pokemon->type1_id = 10;
		$pokemon->evolve_method = "Leaf Stone";
		$pokemon->entry = 'It uses its jaws to eat passing Skittegg and Skitto. Whenever it feeds, it uses the outer shell of its prey to bolster its defenses';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Hungarden';
		$pokemon->description = 'Engorging';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'It spends its entire day eating. Its thick steel exterior prevents its meals from being interrupted';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Skittegg';
		$pokemon->description = 'Egg';
		$pokemon->type1_id = 1;
		$pokemon->evolve_level = 10;
		$pokemon->entry = 'Only 1/4 of Skittegg survive to become Skitto. They can be found in large groups on lakebeds';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Skitto';
		$pokemon->description = 'Mosquito';
		$pokemon->type1_id = 1;
		$pokemon->evolve_level = 15;
		$pokemon->entry = 'It subsists off of blood. It flies nonstop in search of hosts';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Maskitto';
		$pokemon->description = 'Poison Needle';
		$pokemon->type1_id = 1;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'When it finds a proper host, it poisons the host and uses it as its sole source of blood';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Fearther';
		$pokemon->description = 'Intimidating';
		$pokemon->type1_id = 8;
		$pokemon->evolve_level = 24;
		$pokemon->entry = 'It travels in flocks of ten to twenty. The sight of a flock of Fearther is enough to scare other life from their territory';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pterrordactyl';
		$pokemon->description = 'When a Pterrordactyl takes up residence in an area, other life will sometimes serve it out of fear';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 2;
		$pokemon->entry = '';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Twiburn';
		$pokemon->description = 'Tiny Ember';
		$pokemon->type1_id = 7;
		$pokemon->evolve_level = 25;
		$pokemon->entry = 'Its lifespan is very short. It lives for as long as it can continue to consume its host twig';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Logustion';
		$pokemon->description = 'Brush Fire';
		$pokemon->type1_id = 7;
		$pokemon->evolve_method = "Fire Stone";
		$pokemon->entry = 'When a Twiburn scatters its flames to other twigs, they come together to form a Logustion';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Oakombust';
		$pokemon->description = 'Forest Fire';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'When a Logustion sets a tree ablaze, it evolves into Oakombust. Oakombust can live for thousands of years';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Terrairy';
		$pokemon->description = 'Earth Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 11;
		$pokemon->evolve_level = 21;
		$pokemon->entry = 'It protects the small plots of land it settles on, appeasing attackers if they cannot be defeated';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Extround';
		$pokemon->description = 'Earth Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It will sometimes destroy entire forests to protect the soil it makes its home in';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Sirenvian';
		$pokemon->description = 'Siren';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'It is known for luring sailors to rocks and scavenging ship ruins for shiny baubels. Its song can entrance even the most disciplined minds';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Magholia';
		$pokemon->description = 'Fighting Guinea Pig';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'No enemy is too large for it. It consistently challenges predators many times its own size';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lillianil';
		$pokemon->description = 'Elegant Guinea Pig';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 5;
		$pokemon->entry = 'Kings treasured Lillianil for its flowing skirt. For a kingdom to possess multiple Lillianil was a sign of great wealth';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Mammusk';
		$pokemon->description = 'Mammoth';
		$pokemon->type1_id = 12;
		$pokemon->evolve_level = 20;
		$pokemon->entry = 'They are hunted relentlessly by Geosabre. As a result, many do not survive to adulthood';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Mammonk';
		$pokemon->description = 'Reflective';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 15;
		$pokemon->evolve_level = 45;
		$pokemon->entry = 'As a Mammusk reaches adulthood, it seeks a life of solitude because of the hardships it faced. In its solitude, it gains psychic power.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Mammophant';
		$pokemon->description = 'Respected even among Geosabre, Mommophant live in small groups and use their psychic power to alter the weather and try to save as many Mammusk as they can';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 15;
		$pokemon->entry = '';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Stratust';
		$pokemon->description = 'Cloud';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->evolve_level = 18;
		$pokemon->entry = 'Capable of little more than light showers, Stratust remain close to Nimblast and learn to channel electricity.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Nimblast';
		$pokemon->description = 'Storm Cloud';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->evolve_method = "Thunder Stone";
		$pokemon->entry = 'Nimblast compete amonst themselves to determine which can produce the most energy. When this occurs, massive thunderstorms appear in the region.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Cumulohm';
		$pokemon->description = 'Resistance';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 8;
		$pokemon->entry = 'If a Nimblast causes a natural disaster, it evolves into Cumulohm. It spends the rest of its life storing up its electricty and refuses to release it unless it is absolutely necessary.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Ankloc';
		$pokemon->description = 'Club';
		$pokemon->type1_id = 16;
		$pokemon->evolve_level = 18;
		$pokemon->entry = 'When many gather in one place, they hit trees with their club tails. The sound can be heard for miles.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Anklojitsu';
		$pokemon->description = 'Club Tail';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 6;
		$pokemon->evolve_level = 37;
		$pokemon->entry = 'It uses the club on its tail primarily as a warning to potential predators, but it can also break bones easily';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Anklokussion';
		$pokemon->description = 'Blunt Trauma';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 6;
		$pokemon->entry = "Though it is slow to anger, one swipe from its clubbed tail is enough to break every bone in an organism's body";
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Sedimoan';
		$pokemon->description = 'Rock Spirit';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 11;
		$pokemon->evolve_level = 26;
		$pokemon->entry = 'Legends say it is created when a wandering spirit attaches to a rock burned by lava from a volcanic eruption.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lavenged';
		$pokemon->description = 'Rock Spirit';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'Though it cannot control fire, Lavenged is said to burn its foes through sheer will.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pixitox';
		$pokemon->description = 'Poison Pixie';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 14;
		$pokemon->evolve_level = 25;
		$pokemon->entry = 'It is said that Pixitox was created when a Terrairy attached itself to polluted land.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Chemuse';
		$pokemon->description = 'Poison Pixie';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It corrupts every piece of land it attaches to. It is said that other living things feel sickly just standing outside of its territory.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pyrag';
		$pokemon->description = 'Pyramid';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->evolve_level = 22;
		$pokemon->entry = 'Its area of origin is unknown, but it seems to comprehend human speech flawlessly.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pyragear';
		$pokemon->description = 'Mechanism';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->evolve_level = 33;
		$pokemon->entry = 'Its gears rotate at all hours of the day. The purpose of this activity is unknown.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pyragyro';
		$pokemon->description = 'Generator';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Pyragyro are typically used as sources of power, though the energy it produces is not necessarily electricity.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Dagaclaw';
		$pokemon->description = 'Thief';
		$pokemon->type1_id = 2;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'It uses its hook-like claws to grab eggs. The sight of it causes other organisms to guard their nests.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Dagatail';
		$pokemon->description = 'Dagger Tail';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 6;
		$pokemon->evolve_level = 45;
		$pokemon->entry = 'Its tail is made up of several bones that separate and form a whip-like razor. It can straighten and separate individual bones on its tail at will.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Dagafeather';
		$pokemon->description = 'Assassin';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 6;
		$pokemon->entry = 'It is rarely seen, but its handiwork can always be observed. It eats only small parts of its prey and leaves the rest in a ritualistic assembly.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Potatolon';
		$pokemon->description = 'Mischief Chinchilla';
		$pokemon->type1_id = 17;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'It will go out of its way to bother any living creature in its path. It is known for carrying microscopic everyday items with it.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Hammond';
		$pokemon->description = 'Hammond';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 5;
		$pokemon->entry = "Hello, I'm Hammond!";
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Brontoyal';
		$pokemon->description = 'Long Neck';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'At birth it stands head and shoulders above other life forms.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Diplomicus';
		$pokemon->description = 'Regal';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->evolve_level = 55;
		$pokemon->entry = 'Diplomicus that are not selected to lead their herds sometimes travel as envoys to other herds.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Imperiodicus';
		$pokemon->description = 'Monarch';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'In every herd, a male and female Diplomicus are selected to lead. They then produce the next generation of Brontoyal.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pangolic';
		$pokemon->description = 'Armor';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 14;
		$pokemon->evolve_level = 22;
		$pokemon->entry = 'It produces a weak poison in its nails that can leave predators feeling sick.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pangorrosive';
		$pokemon->description = 'Spiny Armor';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It defends itself by shooting poison from gaps in its armor. Any creature that comes into contact with this poison cannot be cured.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Scaldander';
		$pokemon->description = 'Salamander';
		$pokemon->type1_id = 7;
		$pokemon->entry = 'It adapts to whatever environment it lives in. It is said that it and Djibeetle share a common ancestor.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Scladavolt';
		$pokemon->description = 'Electric Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'In the rare event that a Scaldander is struck by lightning, its body adapts, believing the electricity to be part of its environment.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Scaldabloom';
		$pokemon->description = 'Plant Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 10;
		$pokemon->entry = 'Many Scaldander settle down in forests. These Scaldander grow new life on their bodies, using their heat to give this new life energy.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Scallice';
		$pokemon->description = 'Icy Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Few Scaldander end up settling in the north, but those that do become Scallice. Scallice can survive in any temperature.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Scallent';
		$pokemon->description = 'Water Salamander';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'For Scaldander that settle by rivers and lakes and become Scallent, a protective layer of fat forms around them, protecting their flames.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Frozamie';
		$pokemon->description = 'Snow Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 12;
		$pokemon->evolve_level = 22;
		$pokemon->entry = 'It wanders the icy north, causing plants to groom despite the harsh climate.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Friezamore';
		$pokemon->description = 'Snow Fairy';
		$pokemon->type1_id = 5;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Of the few Mammusk that survive until adulthood, most owe their survival to Friezamore. Friezamore and their Mammophant become lifelong friends.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Cryorganic';
		$pokemon->description = 'Toxic Ice';
		$pokemon->type1_id = 12;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'It blends in with icicles and poisons any potential prey that passes under it.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Telekinizard';
		$pokemon->description = 'Psychic Lizard';
		$pokemon->type1_id = 15;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'It catches Skittegg by holding it in place with its psychic power.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Telekiguana';
		$pokemon->description = 'Psychic Iguana';
		$pokemon->type1_id = 15;
		$pokemon->evolve_level = 55;
		$pokemon->entry = 'It bends the light around it to become invisible to prey. However, it is in this state that it is most vulnerable to attacks by Growbra.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Telekwyrm';
		$pokemon->description = 'Psychic Drake';
		$pokemon->type1_id = 15;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'It feeds on fairy-types, using its psychic power to defend itself from their attacks.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Desegrave';
		$pokemon->description = 'Hallowed';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 9;
		$pokemon->evolve_level = 35;
		$pokemon->entry = 'When a Terrairy dies in defense of its land, it is said that its spirit possesses the land, thus forming Desegrave.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Desequake';
		$pokemon->description = 'Crypt';
		$pokemon->type1_id = 11;
		$pokemon->type2_id = 9;
		$pokemon->entry = 'It absorbs the souls of any living being that enters its territory.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lutapara';
		$pokemon->description = 'Bard';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 17;
		$pokemon->evolve_level = 28;
		$pokemon->entry = 'It sings all day with its pack. If its rough hide were not disliked by predators, the noisse would bring them in droves.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Troubasauralophus';
		$pokemon->description = 'Troubadour';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 17;
		$pokemon->entry = 'Human musicians have tried to mimic its song through the years. Not one musician has proven capable of doing so.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Giftaimen';
		$pokemon->description = 'Caiman';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->evolve_level = 26;
		$pokemon->entry = 'It poisons small fish with its teeth. It is not completely resistant to its own poison yet, so the only Giftaimen that survive are the ones that adapt.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Giftodile';
		$pokemon->description = 'Crocodile';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->evolve_level = 38;
		$pokemon->entry = 'When a Giftaimen builds up a strong enough poison resistance, it evolves and develops a new type of poison. Then the cycle begins again.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Giftogator';
		$pokemon->description = 'Alligator';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 14;
		$pokemon->entry = 'Giftogator can resist any kind of poison. The only Giftogator that exist are ones that survived Giftaimen and Giftodile poison.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Morrigant';
		$pokemon->description = 'Sea Dog';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->evolve_level = 28;
		$pokemon->entry = 'It is celebrated for its beauty, and it is often used as a pet.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Morritide';
		$pokemon->description = 'Sea Labrador';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->evolve_method = "Water Stone";
		$pokemon->entry = 'Waves on nearby bodies of water move in sync with its heartbeat.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Morrimaid';
		$pokemon->description = 'Mermaid';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 18;
		$pokemon->entry = 'It sits by the shore and watches the waves roll by. It does not seek conflict and no creatures seek conflict with it.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Asterint';
		$pokemon->description = 'Comet';
		$pokemon->type1_id = 16;
		$pokemon->evolve_level = 20;
		$pokemon->entry = 'It did not originate on Earth. Every few years, multiple Asterint come to the planet through meteor showers.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Asterthought';
		$pokemon->description = 'Asteroid';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 15;
		$pokemon->evolve_level = 40;
		$pokemon->entry = 'It emits a strange signal that appears to move items in close proximity.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Astermind';
		$pokemon->description = 'Meteor';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 15;
		$pokemon->entry = 'It floats above the ground and seems to wander the Earth with no purpose. Multiple migrations have been observed, but no reason has been discovered yet.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Volcone';
		$pokemon->description = 'Budding Volcano';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->evolve_level = 25;
		$pokemon->entry = 'Very few have been observed because they resemble hills. They are incapable of much more than minor combat.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Volcrater';
		$pokemon->description = 'Volcano';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->evolve_level = 50;
		$pokemon->entry = 'It stores lava in its system. It is theorized that this lava is akin to blood in the human body.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Volcrevice';
		$pokemon->description = 'Volcanic Valley';
		$pokemon->type1_id = 7;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'When angered, it causes a volcanic eruption and causes mile-long lava flows.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Snolar';
		$pokemon->description = 'Cub';
		$pokemon->type1_id = 13;
		$pokemon->type2_id = 12;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'Even in infancy, Snolar are capable of surviving harsh conditions and have no natural predators.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Snivvur';
		$pokemon->description = 'Polar Bear';
		$pokemon->type1_id = 4;
		$pokemon->type2_id = 12;
		$pokemon->entry = 'Its fur generates electricity that it uses as a form of communication with other Snivvur.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Delicare';
		$pokemon->description = 'Sweet';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 5;
		$pokemon->evolve_level = 20;
		$pokemon->entry = 'It will sometimes starve itself by handing all of its food to other organisms in need.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Deliconcern';
		$pokemon->description = 'Caring';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 5;
		$pokemon->evolve_method = "Shiny Stone";
		$pokemon->entry = 'Many venture north wanting to care for Mammusk. None can survive the cold, however, some they settle in the forests bordering the north.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Delimpathy';
		$pokemon->description = 'Empathetic';
		$pokemon->type1_id = 15;
		$pokemon->type2_id = 5;
		$pokemon->entry = 'It can sense the feelings of other organisms. If it senses distress, it will relocate even if the distressed creature is on the other side of the region.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Shotany';
		$pokemon->description = 'Electric Plant';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 4;
		$pokemon->evolve_level = 31;
		$pokemon->entry = 'It converts energy from the sun into electricity, which it uses to survive the winter.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Shotanical';
		$pokemon->description = 'Electric Garden';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 4;
		$pokemon->entry = 'Herbivores in the region learn quickly to distinguish Shotanical from other plants. Anything that touches a Shotanical becomes paralyzed.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Noctmet';
		$pokemon->description = 'Helmet';
		$pokemon->type1_id = 2;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'At night, Noctmet can hold its head down and be practically invisible.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Noctoval';
		$pokemon->description = 'Circular';
		$pokemon->type1_id = 2;
		$pokemon->evolve_level = 55;
		$pokemon->entry = 'It can roll as easily uphill as it can downhill.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Noctagon';
		$pokemon->description = 'Black Dragon';
		$pokemon->type1_id = 2;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'In ancient times, humans would not venture outside at night for fear that a Noctagon might be prowling.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Growbra';
		$pokemon->description = 'Cobra';
		$pokemon->type1_id = 10;
		$pokemon->type2_id = 11;
		$pokemon->entry = 'It blends in both with foliage and with sand. It feasts on Telekiguana, which it can sense even when they are invisible.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Pasgon';
		$pokemon->description = 'Ancient Fledgling';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->evolve_level = 30;
		$pokemon->entry = 'It existed long ago, and is said to have been numerous at the time.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Yeoldra';
		$pokemon->description = 'Ancient Dragon';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->evolve_level = 55;
		$pokemon->entry = 'It is said that all modern dragon-types are descended from Yeoldra.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Anciennevyrn';
		$pokemon->description = 'Ancient Wyvern';
		$pokemon->type1_id = 9;
		$pokemon->type2_id = 3;
		$pokemon->entry = 'The undead husk of an ancient dragon-type said to have once been the evolved form of Yeoldra.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Aerioyal';
		$pokemon->description = 'Pteranodon';
		$pokemon->type1_id = 8;
		$pokemon->type2_id = 12;
		$pokemon->entry = "The largest of all flying-types, Aerioyal's wings can be heard across the region.";
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Tyranizor';
		$pokemon->description = 'Tyrant';
		$pokemon->type1_id = 16;
		$pokemon->type2_id = 10;
		$pokemon->entry = 'It prowls the plains of the region, feasting on whatever life it deems suitable, whether it be meat or plant.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Lioplorodeep';
		$pokemon->description = 'Deep-Sea Terror';
		$pokemon->type1_id = 18;
		$pokemon->type2_id = 2;
		$pokemon->entry = 'Water-types do not dare to venture too deep into the ocean. In the darkness of the deep, Lioplorodeep cannot be seen.';
		$pokemon->save();

		$pokemon = new Pokemon();
		$pokemon->name = 'Wyrmgon';
		$pokemon->description = 'Gold';
		$pokemon->type1_id = 3;
		$pokemon->type2_id = 7;
		$pokemon->entry = 'Only one has even been observed. Its scales appear to be made of solid gold, making it a popular target for hunters, though none have successfully located one.';
		$pokemon->save();
}		

}
?>