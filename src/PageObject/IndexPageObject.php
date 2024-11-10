<?php

namespace Forseti\SpaceJeam\PageObject;

use Forseti\SpaceJeam\Enum\Url;

class IndexPageObject extends AbstractPageObject
{
    public function getResposta()
    {
        return $this->request('GET', Url::HTML_INDEX);
    }

    public function getHtml()
    {
        return $this->getResposta()->getBody()->getContents();
    }
}