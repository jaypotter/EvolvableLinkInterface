<?php

declare(strict_types=1);

namespace Potter\Link\Evolvable;

abstract class AbstractEvolvableLink implements EvolvableLinkInterface
{
    abstract public function withHref(string $href): static;
    abstract public function withRel(string $rel): static;
    abstract public function withoutRel(string $rel): static;
    abstract public function withAttribute(string $attribute, string $value): static;
    abstract public function withoutAttribute(string $attribute): static;
}