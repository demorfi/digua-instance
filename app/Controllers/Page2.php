<?php declare(strict_types=1);

namespace App\Controllers;

use Digua\Template;
use Digua\Enums\Headers;
use Digua\Exceptions\{
    Path as PathException,
    Abort as AbortException
};
use Digua\Controllers\Base as BaseController;

class Page2 extends BaseController
{
    /**
     * Default action.
     *
     * @return Template
     * @throws PathException
     */
    public function defaultAction(): Template
    {
        $title = 'Page 2';
        return $this->render('page2', compact('title'));
    }

    /**
     * @return void
     * @throws AbortException
     */
    public function listAction(): void
    {
        $this->throwAbort(Headers::UNPROCESSABLE_ENTITY);
    }
}
