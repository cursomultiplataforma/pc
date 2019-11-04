<?php
    /**
     * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
     * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
     * @license   http://framework.zend.com/license/new-bsd New BSD License
     */

    namespace Application\Controller;

    use Zend\Mvc\Controller\AbstractRestfulController;

    class IndexController extends AbstractRestfulController
    {
        public function create($data)
        {
            $this->response->setStatusCode(200);
            return [
                'content' => 'prueba create'
            ];
        }

        public function get($id)
        {
            $this->response->setStatusCode(200);
            return [
                'content' => 'prueba get'
            ];
        }

        public function getList()
        {
            $this->response->setStatusCode(200);
            $this->response->setContent(json_encode([
                'content' => 'prueba get list'
            ]));
            return $this->response;
        }

    }
