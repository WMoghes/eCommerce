<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BuildingRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bu_name'           => 'required',
            'bu_price'          => 'required',
            'bu_rent'           => 'required',
            'bu_square'         => 'required',
            'bu_small_desc'     => 'required',
            'bu_meta'           => 'required',
            'bu_longitude'      => 'required',
            'bu_latitude'       => 'required',
        ];
    }
}
