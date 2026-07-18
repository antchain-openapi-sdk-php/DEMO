<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\DEMO\Models;

use AlibabaCloud\Tea\Model;

use AntChain\DEMO\Models\TestObject;
use AntChain\DEMO\Models\TestAPIObject;
use AntChain\DEMO\Models\A;
use AntChain\DEMO\Models\Map;
use AntChain\DEMO\Models\NestModel;
use AntChain\DEMO\Models\AnotherClass;

class ACreateStructRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'structa' => 'structa',
        'structb' => 'structb',
        'structc' => 'structc',
        'structd' => 'structd',
        'structe' => 'structe',
        'timeout' => 'timeout',
        'anotherClass' => 'another_class',
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
        if (null !== $this->structa) {
            $res['structa'] = null !== $this->structa ? $this->structa->toMap() : null;
        }
        if (null !== $this->structb) {
            $res['structb'] = null !== $this->structb ? $this->structb->toMap() : null;
        }
        if (null !== $this->structc) {
            $res['structc'] = null !== $this->structc ? $this->structc->toMap() : null;
        }
        if (null !== $this->structd) {
            $res['structd'] = null !== $this->structd ? $this->structd->toMap() : null;
        }
        if (null !== $this->structe) {
            $res['structe'] = null !== $this->structe ? $this->structe->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->anotherClass) {
            $res['another_class'] = null !== $this->anotherClass ? $this->anotherClass->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ACreateStructRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['structa'])){
            $model->structa = TestObject::fromMap($map['structa']);
        }
        if(isset($map['structb'])){
            $model->structb = TestAPIObject::fromMap($map['structb']);
        }
        if(isset($map['structc'])){
            $model->structc = A::fromMap($map['structc']);
        }
        if(isset($map['structd'])){
            $model->structd = Map::fromMap($map['structd']);
        }
        if(isset($map['structe'])){
            $model->structe = NestModel::fromMap($map['structe']);
        }
        if(isset($map['timeout'])){
            $model->timeout = $map['timeout'];
        }
        if(isset($map['another_class'])){
            $model->anotherClass = AnotherClass::fromMap($map['another_class']);
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

    // TestObject
    /**
     * @var TestObject
     */
    public $structa;

    // TestAPIObject
    /**
     * @var TestAPIObject
     */
    public $structb;

    // A
    /**
     * @var A
     */
    public $structc;

    // Map
    /**
     * @var Map
     */
    public $structd;

    // NestModel
    /**
     * @var NestModel
     */
    public $structe;

    // 超时时间
    /**
     * @var string
     */
    public $timeout;

    // 新增结构体
    /**
     * @var AnotherClass
     */
    public $anotherClass;

}
