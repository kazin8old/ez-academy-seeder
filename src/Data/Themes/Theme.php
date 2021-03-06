<?php

namespace App\Data\Themes;

use App\Data\Base;

class Theme extends Base
{
    protected $type = 'themes';

    protected function getAttributesData() : array
    {
        return [
            'name' => $this->faker->sentence(4),
            'img' => $this->faker->uuid
        ];
    }

    protected function getRelationshipsData() : array
    {
        return parent::getRelationshipsData(); // TODO: Change the autogenerated stub
    }
}