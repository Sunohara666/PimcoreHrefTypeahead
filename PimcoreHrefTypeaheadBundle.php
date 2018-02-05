<?php

namespace PimcoreHrefTypeaheadBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class PimcoreHrefTypeaheadBundle extends AbstractPimcoreBundle
{

    public function getJsPaths()
    {
        return [
            '/bundles/pimcorehreftypeahead/js/pimcore/object/tags/hrefTypeahead.js',
            '/bundles/pimcorehreftypeahead/js/pimcore/object/classes/data/hrefTypeahead.js',
            '/bundles/pimcorehreftypeahead/js/HrefObject.js'
        ];
    }

    public function getCssPaths()
    {
        return [
            '/bundles/pimcorehreftypeahead/css/style.css'
        ];
    }
}
