<?php

namespace Database\Seeders;

use App\Models\Platform;
use App\Support\CsvReader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $records = (new CsvReader(resource_path('csvs/platforms.csv')))->read();

            foreach ($records as $record) {
                $check = Platform::find($record['id']);
                if (!$check) {
                    Platform::create($record);
                    DB::select("SELECT nextval('platforms_id_seq')");
                } else {
                    $check->update($record);
                }
            }
        });
    }
}
