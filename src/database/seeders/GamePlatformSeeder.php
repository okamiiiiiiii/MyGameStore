<?php

namespace Database\Seeders;

use App\Models\GamePlatform;
use App\Support\CsvReader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamePlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $records = (new CsvReader(resource_path('csvs/game_platforms.csv')))->read();

            foreach ($records as $record) {
                $check = GamePlatform::find($record['id']);
                if (!$check) {
                    GamePlatform::create($record);
                    DB::select("SELECT nextval('game_platforms_id_seq')");
                } else {
                    $check->update($record);
                }
            }
        });
    }
}
