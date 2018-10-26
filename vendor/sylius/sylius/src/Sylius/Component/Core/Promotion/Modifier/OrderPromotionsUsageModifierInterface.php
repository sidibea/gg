<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Core\Promotion\Modifier;

use Sylius\Component\Core\Model\OrderInterface;

interface OrderPromotionsUsageModifierInterface
{
    /**
     * @param OrderInterface $order
     */
    public function increment(OrderInterface $order): void;

    /**
     * @param OrderInterface $order
     */
    public function decrement(OrderInterface $order): void;
}
