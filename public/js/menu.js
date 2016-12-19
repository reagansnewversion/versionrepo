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
				$(".pokemon").click(function() {
					changedisplay(".pokemonmenu");
				});
				$("#pokedex").click(function() {
					changedisplay(".pokedexmenu");
				});
				$("#bag").click(function() {
					changedisplay(".bagmenu");
				});
				$("#card").click(function() {
					changedisplay(".cardmenu");
				});
				$("#options").click(function() {
					changedisplay(".optionsmenu");
				});
				$("#save").click(function() {
					changedisplay(".savemenu");
				});
				$(".back").click(function() {
					changedisplay(".menu");
				});
					status = "Open";
				} else {
					$(".menu").css('opacity', 0);
					$("body").css("overflow", "auto");
					status = "Closed";
				}
		}
	});

});