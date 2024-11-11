<?php

namespace Forseti\SpaceJeam\PageObject;

use Forseti\SpaceJeam\Enum\Url;
use Forseti\SpaceJeam\Parser\SecondParser;

class SecondPageObject extends AbstractPageObject
{
    public function getResposta()
    {
        return $this->request('GET', Url::HTML_SECOND_PAGE);
    }

    public function getHtml()
    {
        return $this->getResposta()->getBody()->getContents();
    }

    public function getParser()
    {
        return new SecondParser($this->getHtml());
    }
}