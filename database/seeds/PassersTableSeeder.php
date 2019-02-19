<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passers')->truncate();

        require_once 'simple_html_dom.php';
        $html = file_get_html('http://pshs.edu.ph/nce2018/');
        $html = str_get_html($html);
        $data = [];
        foreach($html->find('div div div') as $ul) {
            foreach ($ul->find('div') as $li) {
                if ($li->innertext != '&nbsp;')
                    $data[] = $li->innertext;
            }
        }

        if(!empty($data)) {
            $x = 4;
            while ($x <= count($data)) {
                $test_data[] = [
                    'id' => isset($data[$x]) ? (int)trim($data[$x]) : 0,
                    'name' => isset($data[$x + 1]) ? trim($data[$x + 1]) : '',
                    'campus_eligibility' => isset($data[$x + 2]) ? trim($data[$x + 2]) : null,
                    'school' => isset($data[$x + 3]) ? trim($data[$x + 3]) : null,
                    'division' => isset($data[$x + 4]) ? trim($data[$x + 4]) : null
                ];
                $x += 5;
            }

            DB::table('passers')->insert($test_data);
        }
    }
}
