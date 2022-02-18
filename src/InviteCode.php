<?php
namespace Hinet\Invitecode;

use Hashids;
use Illuminate\Config\Repository;

/**
 * 邀请码生成类
 */
class InviteCode{
    protected $config;
    private $hashIds;

    public function __construct(Repository $config){
        $this->config = $config->get('invite');
        $this->hashIds = new Hashids($this->config['salt'],$this->config['length'],$this->config['char']);
    }
    /**
     * 生成邀请码
     */
    private function enCode($id){
        return $this->hash->encode($id);
    }
    /**
     * 根据邀请码获取用户ID
     */
    private function deCode($code){
        $code = $this->hash->decode($code);
		if(is_array($code)){
			return current($code);
		}else{
			return $code;
		}
    }
}