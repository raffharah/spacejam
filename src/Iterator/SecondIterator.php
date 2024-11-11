<?php

namespace Forseti\SpaceJeam\Iterator;

class SecondIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $objeto = new \stdClass();
        $objeto->descricao = $node->getElementsByTagName("td")->item(2)->textContent;
        return $objeto;
    }
}