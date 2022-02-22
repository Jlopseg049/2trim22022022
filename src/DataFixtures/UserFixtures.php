<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends BaseFixture
{

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(10, 'main_users', function($i) {
            $user = new User();
            $user->setId(       $this->faker->id);
            $user->setEmail(    $this->faker->email);
            $user->setUsername( $this->faker->Username);
            $user->setName(     $this->faker->Name);
            $user->setAp1(      $this->faker->Ap1);
            $user->setAp2(      $this->faker->Ap2);
            $user->setPassword( $this->faker->password);

            return $user;
        });

        $manager->flush();
    }
}
