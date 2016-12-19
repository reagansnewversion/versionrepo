$(document).ready(function() {
	var status = "Closed";
	$(document).keyup(function(event) {
		var input = event.which;
		if(input == 74) {
			if(status == "Closed") {
				console.log("Menu opened");
				$(".menu").css('opacity', 1);
				$("body").css("overflow", "hidden");

			$(".menu").click(function() {
				console.log("It worked");
			});
			$(".pokemon").click(function() {
				console.log("Pokemon");
				$(".menu").css('opacity', 0);
				$(".menu").css('z-index', 0);
				$(".pokemonmenu").css("opacity", 1);
				$(".pokemonmenu").css('z-index', 1);
				$(".pokedexmenu").css("opacity", 0);
				$(".bagmenu").css("opacity", 0);
				$(".cardmenu").css("opacity", 0);
				$(".optionsmenu").css("opacity", 0);
				$(".savemenu").css("opacity", 0);
					});
			$("#pokedex").click(function() {
				$(".menu").css('opacity', 0);
				$(".pokemonmenu").css("opacity", 0);
				$(".pokedexmenu").css("opacity", 1);
				$(".bagmenu").css("opacity", 0);
				$(".cardmenu").css("opacity", 0);
				$(".optionsmenu").css("opacity", 0);
				$(".savemenu").css("opacity", 0);
			});
			$("#bag").click(function() {
				$(".menu").css('opacity', 0);
				$(".pokemonmenu").css("opacity", 0);
				$(".pokedexmenu").css("opacity", 0);
				$(".bagmenu").css("opacity", 1);
				$(".cardmenu").css("opacity", 0);
				$(".optionsmenu").css("opacity", 0);
				$(".savemenu").css("opacity", 0);
			});
			$("#card").click(function() {
				$(".menu").css('opacity', 0);
				$(".pokemonmenu").css("opacity", 0);
				$(".pokedexmenu").css("opacity", 0);
				$(".bagmenu").css("opacity", 0);
				$(".cardmenu").css("opacity", 1);
				$(".optionsmenu").css("opacity", 0);
				$(".savemenu").css("opacity", 0);
			});
			$("#options").click(function() {
				$(".menu").css('opacity', 0);
				$(".pokemonmenu").css("opacity", 0);
				$(".pokedexmenu").css("opacity", 0);
				$(".bagmenu").css("opacity", 0);
				$(".cardmenu").css("opacity", 0);
				$(".optionsmenu").css("opacity", 1);
				$(".savemenu").css("opacity", 0);
			});
			$("#save").click(function() {
				$(".menu").css('opacity', 0);
				$(".pokemonmenu").css("opacity", 0);
				$(".pokedexmenu").css("opacity", 0);
				$(".bagmenu").css("opacity", 0);
				$(".cardmenu").css("opacity", 0);
				$(".optionsmenu").css("opacity", 0);
				$(".savemenu").css("opacity", 1);
			});
			// if($(".menu").css('opacity') === 0) {
			// 	console.log("Menu is invisible");
				$(".back").click(function() {
					$(".menu").css('opacity', 1);
					$(".pokemonmenu").css("opacity", 0);
					$(".pokedexmenu").css("opacity", 0);
					$(".bagmenu").css("opacity", 0);
					$(".cardmenu").css("opacity", 0);
					$(".optionsmenu").css("opacity", 0);
					$(".savemenu").css("opacity", 0);
				});
			// }
				status = "Open";
			} else {
				$(".menu").css('opacity', 0);
				$("body").css("overflow", "auto");
				status = "Closed";
			}
		}
	});

});