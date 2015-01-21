<?php

namespace Stripe;

class ApplicationFeeRefund extends ApiResource
{
    /**
     * @return string The API URL for this Stripe refund.
     */
    public function instanceUrl()
    {
        $id = $this['id'];
        $fee = $this['fee'];
        if (!$id) {
            throw new InvalidRequestError(
                "Could not determine which URL to request: " .
                "class instance has invalid ID: $id",
                null
            );
        }
        $id = ApiRequestor::utf8($id);
        $fee = ApiRequestor::utf8($fee);

        $base = ApplicationFee::classUrl();
        $feeExtn = urlencode($fee);
        $extn = urlencode($id);
        return "$base/$feeExtn/refunds/$extn";
    }

    /**
     * @return ApplicationFeeRefund The saved refund.
     */
    public function save()
    {
        return self::_save();
    }
}
