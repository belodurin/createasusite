<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Запуск сидера.
     */
    public function run(): void
    {
        Vacancy::create([
            'title' => 'Инженер по автоматизации',
            'description' => 'Мы ищем инженера по автоматизации для работы над проектами в сфере промышленной автоматизации.',
            'requirements' => 'Опыт работы от 3 лет, знание SCADA-систем, программирование ПЛК.',
            'salary' => 80000.00,
            'location' => 'Челябинск',
        ]);

        Vacancy::create([
            'title' => 'Разработчик SCADA-систем',
            'description' => 'Требуется разработчик SCADA-систем для участия в крупных промышленных проектах.',
            'requirements' => 'Опыт работы с Ignition, WinCC, знание SQL, Python.',
            'salary' => 100000.00,
            'location' => 'Челябинск',
        ]);

        Vacancy::create([
            'title' => 'Специалист по интеграции АСУ ТП',
            'description' => 'Ищем специалиста для интеграции систем АСУ ТП на промышленных объектах.',
            'requirements' => 'Опыт работы с OPC UA, знание сетевых протоколов.',
            'salary' => 90000.00,
            'location' => 'Челябинск',
        ]);

        Vacancy::create([
            'title' => 'Техник по обслуживанию АСУ ТП',
            'description' => 'Требуется техник для обслуживания и ремонта систем автоматизации.',
            'requirements' => 'Опыт работы с промышленным оборудованием, знание основ электротехники.',
            'salary' => 60000.00,
            'location' => 'Челябинск',
        ]);

        Vacancy::create([
            'title' => 'Инженер программист',
            'description' => 'Ищем программиста ПЛК для разработки и внедрения программного обеспечения.',
            'requirements' => 'Опыт работы с Siemens, Allen-Bradley, знание IEC 61131-3.',
            'salary' => 95000.00,
            'location' => 'Челябинск',
        ]);

        Vacancy::create([
            'title' => 'Инженер программист',
            'description' => 'Ищем программиста ПЛК для разработки и внедрения программного обеспечения.',
            'requirements' => 'Опыт работы с Siemens, Allen-Bradley, знание IEC 61131-3.',
            'salary' => 95000.00,
            'location' => 'Челябинск',
        ]);
    }
}
