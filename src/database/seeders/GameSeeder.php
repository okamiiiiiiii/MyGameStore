<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Support\CsvReader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $records = (new CsvReader(resource_path('csvs/games.csv')))->read();

            foreach ($records as $record) {
                $check = Game::find($record['id']);
                if (!$check) {
                    Game::create($record);
                    DB::select("SELECT nextval('games_id_seq')");
                } else {
                    $check->update($record);
                }
            }
        });
    }
}
