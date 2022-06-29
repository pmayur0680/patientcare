<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicesFixture
 */
class InvoicesFixture extends TestFixture
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
                'amount' => 1.5,
                'services' => 'Lorem ipsum dolor sit amet',
                'due' => '2022-06-29',
                'created' => '2022-06-29 19:30:06',
                'modified' => '2022-06-29 19:30:06',
            ],
        ];
        parent::init();
    }
}
