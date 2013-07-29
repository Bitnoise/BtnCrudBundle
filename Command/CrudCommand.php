<?php
namespace Btn\CrudBundle\Command;

use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

class CrudCommand extends GenerateDoctrineCrudCommand
{
    protected $generator;

    protected function configure()
    {
        parent::configure();

        $this->setName('btn:generate:crud');
        $this->setDescription('Bitnoise version of CRUD generator - twitter bootstrap ready!');
    }

    // protected function getGenerator($bundle = null)
    // {
    //     // if (null === $this->generator) {
    //     //     $this->generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');

    //        if (null === $this->generator) {
    //             $this->generator = $this->createGenerator();
    //             $this->generator->setSkeletonDirs($this->getSkeletonDirs($bundle));
    //         }
    //     // }

    //     return $this->generator;
    // }
    protected function getSkeletonDirs(BundleInterface $bundle = null)
    {
        $skeletonDirs = array();

        if (is_dir($dir = __DIR__.'/../Resources/skeleton/crud')) {
            $skeletonDirs[] = $dir;
        }

        $skeletonDirs[] = __DIR__.'/../Resources/skeleton';
        $skeletonDirs[] = __DIR__.'/../Resources';

        return $skeletonDirs;
    }
}
