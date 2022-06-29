<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointmentsFixture
 */
class AppointmentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'patient_id' => 1,
                'doctor_id' => 1,
                'appointment_date' => '2022-06-29 19:29:53',
                'created' => '2022-06-29 19:29:53',
                'modified' => '2022-06-29 19:29:53',
            ],
        ];
        parent::init();
    }
}
