<?php

declare(strict_types=1);

use \Psr\Link\EvolvableLinkInterface as PsrEvolvableLinkInterface;

namespace Potter\Link\Evolvable;

interface EvolvableLinkInterface extends PsrEvolvableLinkInterface
{
    public function withHref(string $href): static;
    public function withRel(string $rel): static;
    public function withoutRel(string $rel): static;
    public function withAttribute(string $attribute, string $value): static;
    public function withoutAttribute(string $attribute): static;
}