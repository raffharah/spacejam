<?php

namespace Forseti\SpaceJeam\Parser;

use Forseti\SpaceJeam\Iterator\SecondIterator;

class SecondParser extends AbstractParser
{
    public function getIterator()
    {
        return new SecondIterator($this->crawler->filterXPath("//html/body/center[1]/table"));
    }
}