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

/**
 * @template TKey of array-key
 * @template-covariant T of object
 * @extends ReadableRecollection<TKey,T>
 */
interface ReadableRepository extends ReadableRecollection
{
    /**
     * @return T
     */
    public function reference(mixed $key): object;
}
