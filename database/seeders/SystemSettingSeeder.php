<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SystemSetting;

class SystemSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'app_name',
                'value' => 'Authentication',
            ],
            [
                'key' => 'author',
                'value' => '<a href="https://tarkib.co.uk" target="_blank" rel="noopener noreferrer">Tarkib</a>',
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png',
            ],
        ];

        foreach ($settings as $setting) {
            SystemSetting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
