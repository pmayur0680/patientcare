<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarriersFixture
 */
class CarriersFixture extends TestFixture
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
                'carrier_code' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-06-29 19:29:09',
                'modified' => '2022-06-29 19:29:09',
            ],
        ];
        parent::init();
    }
}
