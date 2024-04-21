<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        
        #   $spells = [
        #       ['name' => 'Avada Kedavra', 'description' => 'This is spell 1', 'icon' =>   base64_encode(file_get_contents(database_path('seeds/icons/levioso.png'))), 'power_level' => 1],
        #       // Add more spells as needed
        #   ];
        $spells = [
            ['name' => 'Accio', 'description' => 'Summon a variety of objects and enemies to close range.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Accio.png'))), 'power_level' => 5],
            ['name' => 'Alohomora', 'description' => 'Grants access to a variety of locked rooms and containers throughout the world, but requires magical prowess to perform successfully.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Alohomora.png'))), 'power_level' => 0],
            ['name' => 'Altering Spell', 'description' => 'Alter the physical forms and features of items when cast within the Room of Requirement', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Altering_Spell.png'))), 'power_level' => 0],
            ['name' => 'Ancient Magic', 'description' => 'When at least one segment of your Ancient Magic Meter is full, you can cast devastating Ancient Magic attacks that deal massive damage and break Shield Charms.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Ancient_Magic.png'))), 'power_level' => 0],
            ['name' => 'Ancient Magic Throw', 'description' => 'Summons and then throws special environmental objects at the targeted enemy. Particularly useful for breaking through Shield Charms.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Ancient_Magic_Throw.png'))), 'power_level' => 5],
            ['name' => 'Arresto Momentum', 'description' => 'Slows both object and enemies, giving you extra time to plan your next move.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Arresto_Momentum.png'))), 'power_level' => 16],
            ['name' => 'Avada Kedavra', 'description' => 'Kills enemies instantly', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Avada_Kedavra.png'))), 'power_level' => 22],
            ['name' => 'Basic Cast', 'description' => 'Deals minor damage to enemies and objects.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Basic_Cast.png'))), 'power_level' => 5],
            ['name' => 'Beast Feed', 'description' => 'Food to feed beasts.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Beast_Feed.png'))), 'power_level' => 0],
            ['name' => 'Beast Petting Brush', 'description' => 'A brush that can be used to groom beasts.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Beast_Petting_Brush.png'))), 'power_level' => 0],
            ['name' => 'Bombarda', 'description' => 'Deals heavy damage on impact, accompanied by an explosion that can destroy heavy objects and hit surrounding enemies.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Bombarda.png'))), 'power_level' => 16],
            ['name' => 'Confringo', 'description' => 'A long-range bolt that deals damage on impact, and set enemies on fire.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Confringo.png'))), 'power_level' => 5],
            ['name' => 'Conjuring Spell', 'description' => 'Conjures items into existence when cast within the Room of Requirement', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Conjuring_Spell.png'))), 'power_level' => 0],
            ['name' => 'Crucio', 'description' => 'Causes most enemies to writhe in pain as they take damage over time. Also curses the victim - and cursed enemies take extra damage.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Crucio.png'))), 'power_level' => 16],
            ['name' => 'Depulso', 'description' => 'Repels many types of objects and enemies with considerable force.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Depulso.png'))), 'power_level' => 5],
            ['name' => 'Descendo', 'description' => 'Deals no direct damage, but objects and enemies that are slammed to the ground will suffer considerable impact damage. Airborne enemies will take even greater damage upon hitting the ground.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Descendo.png'))), 'power_level' => 16],
            ['name' => 'Diffindo', 'description' => 'Slashes objects and enemies from afar dealing considerable damage', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Diffindo.png'))), 'power_level' => 5],
            ['name' => 'Disillusionment', 'description' => 'Causes you to blend into your surroundings, making it difficult for others to perceive you. Perfect for sneaking or approaching enemies undetected to be able to cast Petrificus Totalus.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Disillusionment.png'))), 'power_level' => 5],
            ['name' => 'Evanesco', 'description' => 'Vanishes items and returns moonstone when cast within the Room of Requirement', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Evanesco.png'))), 'power_level' => 0],
            ['name' => 'Expelliarmus', 'description' => 'Disarms wands and weapons from most enemies who wield them. Also deals damage to all enemies, even if they do not carry a weapon.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Expelliarmus.png'))), 'power_level' => 5],
            ['name' => 'Flipendo', 'description' => 'Flips objects and enemies upwards and backwards.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Flipendo.png'))), 'power_level' => 5],
            ['name' => 'Glacius', 'description' => 'Freezes enemies, increasing the damage they take from follow-up attacks', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Glacius.png'))), 'power_level' => 16],
            ['name' => 'Imperio', 'description' => 'Temporarily forces enemies to fight as if they were your companion. While under your control, they take reduced damage from other enemies to prolong their allegiance to you. Also curses the victim - and cursed enemies take extra damage.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Imperio.png'))), 'power_level' => 0],
            ['name' => 'Incendio', 'description' => 'Deals significant damage and lights certain objects on fire, but its range is short and requires you to be close to the target.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Incendio.png'))), 'power_level' => 5],
            ['name' => 'Levioso', 'description' => 'Levitates objects and enemies, Useful for solving puzzles and suprising enemies alike.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Levioso.png'))), 'power_level' => 5],
            ['name' => 'Lumos', 'description' => 'Allows you to see in dark areas or solve puzzles that require extra light.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Lumos.png'))), 'power_level' => 0],
            ['name' => 'Nab-Sack', 'description' => 'A charmed bag that can be used to rescue and hold beasts', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Nab-Sack.png'))), 'power_level' => 0],
            ['name' => 'Petrificus Totalus', 'description' => 'Powerful enough to bind most enemies permanently, but more dangerous foes will only take some damage and then quickly break free from the effect.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Petrificus_Totalus.png'))), 'power_level' => 22],
            ['name' => 'Protego', 'description' => 'Protects against a variety of attacks, including spell casts, weapon strikes, and more. Waiting to cast Protego until the last moment before an impact results in a Perfect Protego that damages melee attackers and reflects projectiles back, breaking enemy shields.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Protego.png'))), 'power_level' => 5],
            ['name' => 'Reparo', 'description' => 'Allows you to quickly return certain damaged objects to their former states.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Reparo.png'))), 'power_level' => 0],
            ['name' => 'Revelio', 'description' => 'Highlights a variety of useful and interactive targets in the world, including hidden objects, puzzle items, loot, enemies, and more.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Revelio.png'))), 'power_level' => 16],
            ['name' => 'Stupefy', 'description' => 'Stuns enemies, making them easy targets for follow-up spells. It deals no direct damage, but stunned enemies take extra damage, indicated by gold numbers. It also breaks enemy Shield Charms (except on hard difficulty). When successfully deflecting an incoming attack with Protego, keep the action key held to cast a Stupefy counter-attack at whichever enemy you choose to target.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Stupefy.png'))), 'power_level' => 0],
            ['name' => 'Transformation', 'description' => 'Transforms objects and enemies into alternate forms, whether puzzle solutions or harmless knickknacks.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Transformation.png'))), 'power_level' => 22],
            ['name' => 'Wingardium Leviosa', 'description' => 'Levitates and controls a movable object.', 'icon' => base64_encode(file_get_contents(database_path('seeds/icons/Wingardium_Leviosa.png'))), 'power_level' => 0]
        ];
        DB::table('spells')->insert($spells);

    }
}
