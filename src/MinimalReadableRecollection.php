<?php

declare(strict_types=1);

/*
 * This file is part of rekalogika/collections package.
 *
 * (c) Priyadi Iman Nurcahyo <https://rekalogika.dev>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace Rekalogika\Contracts\Collections;

use Rekalogika\Contracts\Collections\Exception\NotFoundException;
use Rekalogika\Contracts\Rekapager\PageableInterface;

/**
 * @template TKey of array-key
 * @template-covariant T
 * @extends PageableInterface<TKey,T>
 */
interface MinimalReadableRecollection extends PageableInterface
{
    /**
     * @template TMaybeContained
     * @param TMaybeContained $element
     * @return (TMaybeContained is T ? bool : false)
     */
    public function contains(mixed $element): bool;

    public function containsKey(mixed $key): bool;

    /**
     * @return T|null
     */
    public function get(mixed $key): mixed;

    /**
     * @return T
     * @throws NotFoundException
     */
    public function fetch(mixed $key): mixed;

    public function refreshCount(): void;
}
