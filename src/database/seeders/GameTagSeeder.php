<?php

namespace Database\Seeders;

use App\Models\GameTag;
use App\Support\CsvReader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $records = (new CsvReader(resource_path('csvs/game_tags.csv')))->read();

            foreach ($records as $record) {
                $check = GameTag::find($record['id']);
                if (!$check) {
                    GameTag::create($record);
                    DB::select("SELECT nextval('game_tags_id_seq')");
                } else {
                    $check->update($record);
                }
            }
        });
    }
}
