<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\DEMO\Models;

use AlibabaCloud\Tea\Model;

class NameBean extends Model {
    protected $_name = [
        'name' => 'name',
        'noNum' => 'no_num',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->noNum) {
            $res['no_num'] = $this->noNum;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return NameBean
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['no_num'])){
            $model->noNum = $map['no_num'];
        }
        return $model;
    }
    // 名称
    /**
     * @example 张三
     * @var string
     */
    public $name;

    // 编号
    /**
     * @example 23
     * @var int
     */
    public $noNum;

}
