<?php

namespace AppBundle\DataFixtures\ORM;

use Nelmio\Alice\Loader\NativeLoader;
use Faker\Generator as FakerGenerator;

class AppNativeLoader extends NativeLoader
{
    protected function createFakerGenerator(): FakerGenerator
    {
        $generator = parent::createFakerGenerator();
        $generator->addProvider(new ProductProvider($generator));
        return $generator;
    }
}
