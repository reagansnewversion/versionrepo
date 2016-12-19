$(document).ready(function() {
	var status = "Closed";
	var changedisplay = function(menuname) {
		var menus = ['.menu', '.pokemonmenu', '.pokedexmenu', '.bagmenu', '.cardmenu', '.optionsmenu', '.savemenu'];
		for(var i = 0; i <= menus.length; i++) {
			if(menus[i] != menuname) {
				$(menus[i]).css('opacity', 0);
				$(menus[i]).css('z-index', 0);
			} else {
				$(menus[i]).css('opacity', 1);
				$(menus[i]).css('z-index', 1);
			}
		}
	};
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
				// $(".menu").css('opacity', 0);
				// $(".menu").css('z-index', 0);
				// $(".pokemonmenu").css("opacity", 1);
				// $(".pokemonmenu").css('z-index', 1);
				// $(".pokedexmenu").css("opacity", 0);
				// $(".bagmenu").css("opacity", 0);
				// $(".cardmenu").css("opacity", 0);
				// $(".optionsmenu").css("opacity", 0);
				// $(".savemenu").css("opacity", 0);
				changedisplay(".pokemonmenu");
			});
			$("#pokedex").click(function() {
				// $(".menu").css('opacity', 0);
				// $(".pokemonmenu").css("opacity", 0);
				// $(".pokedexmenu").css("opacity", 1);
				// $(".bagmenu").css("opacity", 0);
				// $(".cardmenu").css("opacity", 0);
				// $(".optionsmenu").css("opacity", 0);
				// $(".savemenu").css("opacity", 0);
				changedisplay(".pokedexmenu");
			});
			$("#bag").click(function() {
				// $(".menu").css('opacity', 0);
				// $(".pokemonmenu").css("opacity", 0);
				// $(".pokedexmenu").css("opacity", 0);
				// $(".bagmenu").css("opacity", 1);
				// $(".cardmenu").css("opacity", 0);
				// $(".optionsmenu").css("opacity", 0);
				// $(".savemenu").css("opacity", 0);
				changedisplay(".bagmenu");
			});
			$("#card").click(function() {
				// $(".menu").css('opacity', 0);
				// $(".pokemonmenu").css("opacity", 0);
				// $(".pokedexmenu").css("opacity", 0);
				// $(".bagmenu").css("opacity", 0);
				// $(".cardmenu").css("opacity", 1);
				// $(".optionsmenu").css("opacity", 0);
				// $(".savemenu").css("opacity", 0);
				changedisplay(".cardmenu");
			});
			$("#options").click(function() {
				// $(".menu").css('opacity', 0);
				// $(".pokemonmenu").css("opacity", 0);
				// $(".pokedexmenu").css("opacity", 0);
				// $(".bagmenu").css("opacity", 0);
				// $(".cardmenu").css("opacity", 0);
				// $(".optionsmenu").css("opacity", 1);
				// $(".savemenu").css("opacity", 0);
				changedisplay(".optionsmenu");
			});
			$("#save").click(function() {
				// $(".menu").css('opacity', 0);
				// $(".pokemonmenu").css("opacity", 0);
				// $(".pokedexmenu").css("opacity", 0);
				// $(".bagmenu").css("opacity", 0);
				// $(".cardmenu").css("opacity", 0);
				// $(".optionsmenu").css("opacity", 0);
				// $(".savemenu").css("opacity", 1);
				changedisplay(".savemenu");
			});
			// if($(".menu").css('opacity') === 0) {
			// 	console.log("Menu is invisible");
				$(".back").click(function() {
					// $(".menu").css('opacity', 1);
					// $(".pokemonmenu").css("opacity", 0);
					// $(".pokedexmenu").css("opacity", 0);
					// $(".bagmenu").css("opacity", 0);
					// $(".cardmenu").css("opacity", 0);
					// $(".optionsmenu").css("opacity", 0);
					// $(".savemenu").css("opacity", 0);
					changedisplay(".menu");
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