<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Metadata\Resource\Factory;

use ApiPlatform\Metadata\Resource\Factory\AttributesResourceNameCollectionFactory;
use ApiPlatform\Tests\Fixtures\TestBundle\Entity\InstanceOfApiResource;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @author Yoann Brieux <github@brieux.net>
 */
class AttributesResourceNameCollectionFactoryTest extends TestCase
{
    use ProphecyTrait;

    public function testCreateWithInstanceOfApiResource(): void
    {
        $attributesResourceNameCollectionFactory = new AttributesResourceNameCollectionFactory(paths: [__DIR__.'/../../../Fixtures/TestBundle/Entity/']);

        $this->assertContains(InstanceOfApiResource::class, $attributesResourceNameCollectionFactory->create()->getIterator());
    }
}
