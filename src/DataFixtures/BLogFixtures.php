<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BLogFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1;$i<=10;$i++) {
            $blog = new Blog;
            $blog->setTitle("Blog $i");
            $blog->setAuthor("Quynh Huong");
            $blog->setDate(\DateTime::createFromFormat('Y-m-d','2021-02-25'));
            $blog->setContent("Hello everyone, This is my first Blog.");
            $manager->persist($blog);
        }
        $manager->flush();
    }
}
