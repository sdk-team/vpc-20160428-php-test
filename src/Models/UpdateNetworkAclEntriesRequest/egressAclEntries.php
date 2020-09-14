<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest;

use AlibabaCloud\Tea\Model;

class egressAclEntries extends Model
{
    /**
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $destinationCidrIp;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $entryType;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'networkAclEntryName' => 'NetworkAclEntryName',
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'policy'              => 'Policy',
        'protocol'            => 'Protocol',
        'destinationCidrIp'   => 'DestinationCidrIp',
        'port'                => 'Port',
        'entryType'           => 'EntryType',
        'description'         => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }
        if (null !== $this->networkAclEntryId) {
            $res['NetworkAclEntryId'] = $this->networkAclEntryId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->destinationCidrIp) {
            $res['DestinationCidrIp'] = $this->destinationCidrIp;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressAclEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }
        if (isset($map['NetworkAclEntryId'])) {
            $model->networkAclEntryId = $map['NetworkAclEntryId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['DestinationCidrIp'])) {
            $model->destinationCidrIp = $map['DestinationCidrIp'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
