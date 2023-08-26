<?php

function breadcrumbs($sep = '', $home = 'Home') {
$bc     =   '<ul class="breadcrumb m-0 bg-white">';
//Get the server http address
$site   =   'http://'.$_SERVER['HTTP_HOST'];
//Get all vars en skip the empty ones
$crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
//Create the homepage breadcrumb
$bc    .=   '<li class="breadcrumb-item"><a href="'.$site.'">'.$home.'</a>'.$sep.'</li>';
//Count all not empty breadcrumbs
$nm     =   count($crumbs);
$i      =   1;
//Loop through the crumbs
foreach($crumbs as $crumb){
//grab the last crumb
$last_piece = end($crumbs);

    //Make the link look nice
    $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
       
    //Loose the last seperator
    $sep     =  $i==$nm?'':$sep;
    //Add crumbs to the root
    $site   .=  '/'.$crumb;
    //Check if last crumb
    if ($last_piece!==$crumb){
    //Make the next crumb
    $bc     .= ' <li class="breadcrumb-item"><a href="'.$site.'">'.$link.'</a> '.$sep.'</li>';
    } else {
    //Last crumb, do not make it a link
    $bc     .= '<li class="breadcrumb-item active">'.ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$last_piece)).'</li>';
    }
    $i++;
}
$bc .=  '</ul>';
//Return the result
return $bc;
}

function random_name(){
	$random_names =[
	"Acorn", "Alvin", "Firulais", "Asia", "Audi", "Bagel", "Balou", "Barclay", "Barney", "Beck", "Bellatrix", "Bianca", "Biloxi", "Birdie", "Biscuit", "Blanca", "Bobbafett", "Bodie", "Bono", "
	Booboo", "Bootsie", "Bordeaux", "Brandy", "Bren", "Bronco", "Bruin", "Bubbles", "Buffy", "Burt", "Butler", "Button", "Calvin", "Candy", "Carter", "Cece", "Cessa", "Chandler", "
	Chaucer", "Chevy", "China", "Choochoo", "Cisco", "Claire", "Cleopatra", "Clooney", "Coco(nut)", "Connor", "Cosmo", "Crosby", "Cupcake", "Daisy", "Dallas", "Daphne", "Delilah", "
	Diva", "Doc", "Domino", "Donna", "Donovan", "Dulus", "Dutch", "Ebony", "Ed", "Elton", "Elwood", "Ernie", "Faith", "Faya", "Felix", "Fig", "Fiona", "Foxy", "Fritz", "Fuse", "Giblet", "
	Gibson", "Gingi", "Goofy", "Graysen", "Greystoke", "Guinness", "Hershey", "Holly", "Honey", "Huck Finn", "Hudson", "Hutch", "Ike", "Indira", "Iris", "Ivory", "Jade", "Jasmine", "
	Jasper", "Jazzy", "Jeeves", "Jenna", "Jenne", "Joy", "Kai", "Kalua", "Kaly", "Kassie", "Kaya", "Keanna", "Keesha", "Keiko", "Kiefer", "Kingston", "Koby", "Kona", "Laguna", "Landon", "
	Larissa", "Lefty", "Leia", "Lexi", "Lil’bit", "Lilypie", "Linus", "Logan", "Lola", "Luca", "Lucy", "Luke", "Madonna", "Malble", "Malibu", "Margo", "Marshmellow", "Marti", "Max", "
	Maya", "Meadow", "Mercedes", "Merlot", "Merry", "Mia", "Midnight", "Midori", "Mika", "Milan", "Mira", "Mischa", "Mitzi", "Moby", "Mochi", "Monet", "Monkey", "Mooshie", "Mozart", "
	Mr Big", "Muggles", "Mulder", "Mulligan", "Murphy", "Mylo", "Nanda", "Nate", "Nell", "Niana", "Nico", "Noodle", "Nugget", "Olive", "Onyx", "Otis", "Owen", "Ozzie", "Paddington", "
	Paisley", "Paris", "Parker", "Paulie", "Pazzo", "Peanut", "Pearl", "Pepper", "Persia", "Pesci", "Phoenix", "Picasso", "Pinot", "Pipsie", "Pixie", "Porche", "Quattro", "Ramona", "
	Redford", "Reece", "Rico", "Robin Hood", "Rocco", "Rocky", "Romeo", "Roxie", "Rufus", "Rusty", "Scotty", "Scout", "Shadow", "Shaggy", "Shane", "Shaq", "Sheba", "Silas", "Skip", "
	Skitty", "Skyler", "Smitty", "Snooky", "Snoopy", "Sookie", "Spark", "Sprite", "Stitch", "Strsky", "Sugar", "Summer", "Sunny", "Sushi", "Sweetpea", "Syrah", "Tallulah", "Tango", "
	Tank", "Tanner", "Tatertot", "Theo", "Tibbs", "Timber", "Tink", "Toast", "Toffee", "Tonka", "Vegas", "Wednesday", "Wilbur", "Willow", "Winnie", "Wolfie", "Yoshiko", "Zach", "Zara", "
	Zeke", "Zelda", "Zeppelin", "ZsaZsa"
	];
	return $random_names[array_rand($random_names)];
}

function random_text($long){
	$length = $long;
	$characters = '01 234 56789a bcdef ghij klmn opqrs tuvw xyzABCD EFGH IJKL MNOP QRSTUV WXYZ ';
	$charactersLength = strlen($characters);
	
	$rand_text ='';
	$space_lapse = 0;
	for ($i = 0; $i < $length; $i++) {
		$new_character = $characters[rand(0, $charactersLength - 1)];
		if($new_character == ' '){
			$space_lapse = 0;
		} else {
			$space_lapse++;
		}
		
		if($space_lapse > 9){
			$new_character = " ";
			$space_lapse = 0;
		}
		$rand_text .= $new_character;
	}
	
	return $rand_text;
}


?>