<?php 

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('corentin.adl@gmail.com'); // Remplacer 'password' par le mot de passe que vous voulez 
        $user->setPassword($this->passwordHasher->hashPassword( $user, 'azerty' )); 
        $user->setRoles(['ROLE_ADMIN']);

        $manager->persist($user);
        $manager->flush();
    }
}

