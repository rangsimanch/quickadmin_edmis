<?php

namespace App\Http\Requests;

use App\RfaCommentStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateRfaCommentStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('rfa_comment_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
