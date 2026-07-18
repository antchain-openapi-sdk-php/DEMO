<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\DEMO\Models;

use AlibabaCloud\Tea\Model;

class QueryTestContentTypeRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'data' => 'data',
        'datax' => 'datax',
        'datay' => 'datay',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->datax) {
            $res['datax'] = $this->datax;
        }
        if (null !== $this->datay) {
            $res['datay'] = $this->datay;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryTestContentTypeRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['datax'])){
            $model->datax = $map['datax'];
        }
        if(isset($map['datay'])){
            $model->datay = $map['datay'];
        }
        return $model;
    }
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 查询输入
    /**
     * @var string
     */
    public $data;

    // datax
    /**
     * @var string
     */
    public $datax;

    // y的描述
    /**
     * @var bool
     */
    public $datay;

}
