<?php

namespace chapter3;
require_once 'DataModel.php';
class User extends DataModel
{
    /**
     * @var string
     */
    protected string $tableName = 'userTable';

    /**
     * @return string
     */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     */
    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }



}