<?php

namespace Librinfo\SeedBatchBundle\Entity;

use AppBundle\Entity\Extension\LibrinfoSeedBatchBundle\SeedFarmExtension;
use Librinfo\OuterExtensionBundle\Entity\Traits\OuterExtensible;

use Librinfo\DoctrineBundle\Entity\Traits\BaseEntity;
use Librinfo\DoctrineBundle\Entity\Traits\Addressable;
use Librinfo\DoctrineBundle\Entity\Traits\Descriptible;
use Librinfo\DoctrineBundle\Entity\Traits\Loggable;
use Librinfo\UserBundle\Entity\Traits\Traceable;

/**
 * SeedFarm
 */
class SeedFarm
{
    use BaseEntity,
        SeedFarmExtension,
        OuterExtensible,
        Addressable,
        Traceable,
        Loggable,
        Descriptible;

    /**
     * @var string
     */
    private $code;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $seedBatches;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seedBatches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return SeedFarm
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add seedBatch
     *
     * @param \Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch
     *
     * @return SeedFarm
     */
    public function addSeedBatch(\Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch)
    {
        $this->seedBatches[] = $seedBatch;

        return $this;
    }

    /**
     * Remove seedBatch
     *
     * @param \Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSeedBatch(\Librinfo\SeedBatchBundle\Entity\SeedBatch $seedBatch)
    {
        return $this->seedBatches->removeElement($seedBatch);
    }

    /**
     * Get seedBatches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeedBatches()
    {
        return $this->seedBatches;
    }
}

