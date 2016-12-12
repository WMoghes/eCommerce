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
            'bu_name'           => 'required|min:5|max:100',
            'bu_price'          => 'required|integer',
            'bu_rent'           => 'required|integer',
            'bu_square'         => 'required',
            'bu_small_desc'     => 'required|min:5',
            'bu_meta'           => 'required|min:5',
            'bu_longitude'      => 'required',
            'bu_latitude'       => 'required',
        ];
    }
}
