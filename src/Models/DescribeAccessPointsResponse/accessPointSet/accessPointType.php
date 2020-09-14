<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse\accessPointSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeAccessPointsResponse\accessPointSet\accessPointType\accessPointFeatureModels;
use AlibabaCloud\Tea\Model;

class accessPointType extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $attachedRegionNo;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $hostOperator;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var accessPointFeatureModels
     */
    public $accessPointFeatureModels;
    protected $_name = [
        'accessPointId'            => 'AccessPointId',
        'status'                   => 'Status',
        'type'                     => 'Type',
        'attachedRegionNo'         => 'AttachedRegionNo',
        'location'                 => 'Location',
        'hostOperator'             => 'HostOperator',
        'name'                     => 'Name',
        'description'              => 'Description',
        'accessPointFeatureModels' => 'AccessPointFeatureModels',
    ];

    public function validate()
    {
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('attachedRegionNo', $this->attachedRegionNo, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('hostOperator', $this->hostOperator, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('accessPointFeatureModels', $this->accessPointFeatureModels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->attachedRegionNo) {
            $res['AttachedRegionNo'] = $this->attachedRegionNo;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->hostOperator) {
            $res['HostOperator'] = $this->hostOperator;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accessPointFeatureModels) {
            $res['AccessPointFeatureModels'] = null !== $this->accessPointFeatureModels ? $this->accessPointFeatureModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPointType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AttachedRegionNo'])) {
            $model->attachedRegionNo = $map['AttachedRegionNo'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['HostOperator'])) {
            $model->hostOperator = $map['HostOperator'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AccessPointFeatureModels'])) {
            $model->accessPointFeatureModels = accessPointFeatureModels::fromMap($map['AccessPointFeatureModels']);
        }

        return $model;
    }
}
