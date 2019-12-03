<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Grid;

/**
 */
interface FilterInterface
{
    /**
     * @return array
     */
    public function render(): array;

    /**
     * @return string
     */
    public function getType(): string;
}
