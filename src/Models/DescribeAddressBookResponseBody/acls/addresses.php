<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls;

use AlibabaCloud\Tea\Model;

class addresses extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'address' => 'Address',
        'note'    => 'Note',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}