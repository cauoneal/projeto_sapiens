<?php

namespace App\Presenters;

use App\Transformers\MunicipioTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MunicipioPresenter
 *
 * @package namespace App\Presenters;
 */
class MunicipioPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MunicipioTransformer();
    }
}
