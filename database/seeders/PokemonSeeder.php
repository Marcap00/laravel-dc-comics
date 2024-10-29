<?php

namespace Database\Seeders;

use App\Helpers\FileHelper;
use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = FileHelper::getCsv(__DIR__ . "/files/pokemon.csv");

        foreach ($arr as $index => $row) {
            if ($index !== 0) {
                $newPokemon = new Pokemon();
                $newPokemon->name = $row[0];
                $newPokemon->category = $row[1];
                $newPokemon->type = $row[2];
                $newPokemon->ability = $row[3];
                $newPokemon->stage_of_evolution = $row[4];
                $newPokemon->height = $row[5];
                $newPokemon->weight = $row[6];
                $newPokemon->image = $row[7];
                $newPokemon->save();
            }
        }
    }
}