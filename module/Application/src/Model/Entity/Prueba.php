<?php

    namespace Application\Model\Entity;

    use Zend\Db\TableGateway\TableGateway;

    class Prueba extends TableGateway
    {
        const TABLE_NAME = 'category';

        /**
         * Prueba constructor.
         */
        public function __construct($dbAdapter)
        {
            parent::__construct(self::TABLE_NAME, $dbAdapter);
        }

        public function getAllData()
        {
            return $this->select()->toArray();
        }
    }