<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Municipio;

/**
 * Class MunicipioTransformer
 * @package namespace App\Transformers;
 */
class MunicipioTransformer extends TransformerAbstract
{

    /**
     * Transform the \Municipio entity
     * @param \Municipio $model
     *
     * @return array
     */
    public function transform(Municipio $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
