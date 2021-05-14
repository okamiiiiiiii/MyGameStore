<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Support\CsvReader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $records = (new CsvReader(resource_path('csvs/tags.csv')))->read();

            foreach ($records as $record) {
                $check = Tag::find($record['id']);
                if (!$check) {
                    Tag::create($record);
                    DB::select("SELECT nextval('tags_id_seq')");
                } else {
                    $check->update($record);
                }
            }
        });
    }
}
