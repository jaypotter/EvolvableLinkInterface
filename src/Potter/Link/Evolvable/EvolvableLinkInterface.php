<?php

declare(strict_types=1);

namespace Potter\Link\Evolvable;

use \Psr\Link\EvolvableLinkInterface as PsrEvolvableLinkInterface, \Stringable;

interface EvolvableLinkInterface extends PsrEvolvableLinkInterface
{
    public function withHref(Stringable|string $href): static;
    public function withRel(string $rel): static;
    public function withoutRel(string $rel): static;
    public function withAttribute(string $attribute, string $value): static;
    public function withoutAttribute(string $attribute): static;
}