<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'age' => 1,
                'country' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1669365372,
                'updated_at' => 1669365372,
            ],
        ];
        parent::init();
    }
}
