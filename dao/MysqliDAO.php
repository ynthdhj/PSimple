<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MysqliDAO
 *
 * @author Administrator
 */

namespace dao;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}

class MysqliDAO {

	private $conn;

    function __construct() {
        $this->conn = ADONewConnection("mysqli");
        $this->conn->debug = true;
        // ��һ�����ݿ�����
        $this->conn->PConnect(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE);
        $this->conn->Execute('set names GBK');
    }

   
    
    public function tables() {
        $tables = $this->conn->metaTables('TABLES');
        echo DB_DATABASE." ���ݿ�ṹ ��\r\n";
        print_r($tables);
        return $tables;
    }

    public function columns($tablename) {

        $columns = $this->conn->metaColumns($tablename);
       // print_r($columns);
        return $columns;
    }

    public function count($sql, $array) {

        $recordSet = $this->conn->Execute($sql, $array);
        if (!$recordSet) {
            echo("��ѯ����!" . $sql);
            return false;
        } else {
            $count = $recordSet->fields[0];  //�ܼ�¼����
            $recordSet->close();
            return $count;
        }
    }

    public function select($sql,$numrows,$offset, $array, $model) { 
        $models = array();
        $recordSet = $this->conn->SelectLimit($sql,$numrows,$offset,$array);
        if (!$recordSet) {
            echo("��ѯ����!" . $sql);
            return null;
        } else {
            $i = 0;
            while (!$recordSet->EOF) {
                \util\Util::copyProperties($recordSet->fields, $model);
                $models[$i] =clone $model;
                $i++;
                $recordSet->MoveNext();
            }
         return $models;
        }
    }
    public function update($sql, $array) { 
        $isUpdate=$this->conn->Execute($sql,$array); 
        if (!$isUpdate) {
            echo("�޸ĳ���!" . $sql);
            return false;
        } else {
         return true;
        }
    }
}
