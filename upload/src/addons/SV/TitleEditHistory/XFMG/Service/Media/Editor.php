<?php

namespace SV\TitleEditHistory\XFMG\Service\Media;

use SV\TitleEditHistory\Entity\IHistoryTrackedTitle;
use SV\TitleEditHistory\Service\Base\EditorInterface;
use SV\TitleEditHistory\Service\Base\EditorTrait;

/**
 * Class Editor
 *
 * @package SV\TitleEditHistory\XFMG\Service\Media
 */
class Editor extends XFCP_Editor implements EditorInterface
{
    use EditorTrait
    {
        setTitle as setupTitleForEditHistory;
    }

    /**
     * @param string $title
     * @param null   $description
     */
    public function setTitle($title, $description = null)
    {
        $this->setupTitleForEditHistory($title, $description);
    }

    /**
     * @return IHistoryTrackedTitle
     */
    public function getContent()
    {
        return $this->getMediaItem();
    }
}