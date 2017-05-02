<?php
namespace Common\Model;
use Think\Model;

class DownloadModel extends Model {
    public function __construct()
    {
        $this->_db->M("Download");
    }
}