<?php

$navItems = array(
	array(

		'slug'=>'index.php',
		'title'=>'Home'
	),

	array(

		'slug'=>'team.php',
		'title'=>'Team'
	),

	array(

		'slug'=>'menu.php',
		'title'=>'Menu'
	),

	array(

		'slug'=>'contact.php',
		'title'=>'Contact'
	)
);

//team members

	$teamMembers = array(

		array(

			'name'=>'Frankie III',
			'position'=>'Head Cheaf',
			'bio'=>"Frankie is the great-grandson of the original Franklin. He is the main cheaf of Franklin's Fine Dining. He cooks a mean fritatta!",
			'img'=> "frankie.png"
		),

		array(

			'name'=>'Francis',
			'position'=>'General Manager',
			'bio'=>"Francis knows her stuff.The big sister of Frankie himself, she runs the show. Don't miss her Margherita Mondays!",
			'img'=> "francis.png"


		),

		array(

			'name'=>'Carlos',
			'position'=>'Cheaf',
			'bio'=>"Carlos is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; &mdash; You simply can't find a better chef.",
			'img'=> "carlos.png"


		),

	);

//menu items


$menuItems = array(

	"club-sandwich"=> array(

		'title'=> "Club Sandwich",
		'price'=> 11,
		'blurb'=>'A club sandwich, also called a clubhouse sandwich, is a sandwich of bread, sliced cooked poultry, or fried bacon, lettuce, tomato, and mayonnaise. It is often cut into quarters or halves and held together by cocktail sticks',
		'drink'=>'Club Soda'
	),

	"dill-salmon"=> array(

		'title'=> "Lemon &amp; Dill Salmon",
		'price'=> 18,
		'blurb'=>'Place salmon in the baking dish. Mix the butter and lemon juice in a small bowl, and drizzle over the salmon. Season with dill, garlic powder, sea salt, and pepper. Bake 25 minutes in the preheated oven, or until salmon is easily flaked with a fork.',
		'drink'=>'Fancy Wine'
	),


	"super-salad"=> array(

		'title'=> "The Super Salad<sup>&reg;</sup>",
		'price'=> 34,
		'blurb'=>'Souper Salad is an American restaurant chain based in Dallas, Texas. It is an all-you-can-eat buffet restaurant serving fresh salads, made-from-scratch soups, homemade breads, and more. All locations are in the Southwestern United States, with the majority located in Texas.',
		'drink'=>"Jug o' Water"
	),

	"mexican-barbacoa"=> array(

		'title'=> "Maxican Barbacoa",
		'price'=> 23,
		'blurb'=>'Barbacoa is a form of cooking meat that originated in the Caribbean with the Taíno people, from which the term “barbecue” derives.',
		'drink'=>"Beer with a lime"
	),

);

?>