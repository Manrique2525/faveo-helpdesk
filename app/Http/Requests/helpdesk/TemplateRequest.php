<?php

namespace App\Http\Requests\helpdesk;

use App\Http\Requests\Request;

/**
 * TemplateRequest.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class TemplateRequest extends Request
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
            //            'name'                  => 'required|unique:template',
            //            'subject'               => 'required',
            'type'    => 'required',
            'message' => 'required',
        ];
    }
}
