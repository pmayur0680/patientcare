<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoctorsFixture
 */
class DoctorsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'accepting_patients' => 1,
                'created' => '2022-06-29 19:29:39',
                'modified' => '2022-06-29 19:29:39',
            ],
        ];
        parent::init();
    }
}
