<?php
    /**
     * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
     * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
     * @license   http://framework.zend.com/license/new-bsd New BSD License
     */

    namespace Application\Controller;

    use Application\Model\Entity\Prueba;
    use Zend\Db\Adapter\Adapter;
    use Zend\Http\Response;
    use Zend\Mvc\Controller\AbstractRestfulController;

    class IndexController extends AbstractRestfulController
    {
        /** @var Adapter */
        private $dbAdapter;

        /**
         * IndexController constructor.
         * @param $dbAdapter
         */
        public function __construct($dbAdapter)
        {
            $this->dbAdapter = $dbAdapter;
        }

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
            $pruebaModel = new Prueba($this->dbAdapter);
            $data = $pruebaModel->getAllData();

            $ids = '';
            foreach ($data as $d) {
                $ids .= $d['id'] . '-';
            }

            /** @var Response $response */
            $response = $this->getResponse();
            $response->getHeaders()->addHeaders([
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => '*'
            ]);
            $response->setContent(json_encode([
                'content' => 'prueba get list => ' . $ids
            ]));
            $response->setStatusCode(200);
            return $response;
        }

        public function options()
        {
            /** @var Response $response */
            $response = $this->getResponse();
            $response->getHeaders()->addHeaders([
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => '*'
            ]);
            return $response;
        }
    }
