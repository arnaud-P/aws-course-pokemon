<?php

$pokemons = file_get_contents('http://pokeapi.co/api/v2/pokedex/1/');
$pokemons = json_decode($pokemons, true);

$pokemon_entries = $pokemons['pokemon_entries'];

foreach($pokemon_entries as $pokemon_entrie) {
	echo $pokemon_entrie['pokemon_species']['name'] . '</br>';
}

