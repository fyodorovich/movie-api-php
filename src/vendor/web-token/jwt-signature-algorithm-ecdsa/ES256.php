<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Signature\Algorithm;

final class ES256 extends ECDSA
{
    protected function getHashAlgorithm(): string
    {
        return 'sha256';
    }

    protected function getSignaturePartLength(): int
    {
        return 64;
    }

    public function name(): string
    {
        return 'ES256';
    }
}
