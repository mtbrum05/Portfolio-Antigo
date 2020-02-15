<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fabricantecarro Controller
 *
 * @property \App\Model\Table\FabricantecarroTable $Fabricantecarro
 *
 * @method \App\Model\Entity\Fabricantecarro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FabricantecarroController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->RequestHandler->ext = 'json';
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $fabricantecarro = $this->paginate($this->Fabricantecarro);

        $this->set([            
            'fabricantecarro' => $fabricantecarro,
            '_serialize' => ['fabricantecarro']
            
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Fabricantecarro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabricantecarro = $this->Fabricantecarro->get($id, [
            'contain' => [],
        ]);

        $this->set([
            'fabricantecarro' => $fabricantecarro,
            '_serialize' => ['fabricantecarro']        
            ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabricantecarro = $this->Fabricantecarro->newEntity();
        if ($this->request->is('post')) {
            $fabricantecarro = $this->Fabricantecarro->patchEntity($fabricantecarro, $this->request->getData());
            if ($this->Fabricantecarro->save($fabricantecarro)) {
                $message = 'Saved';
            } else {
                $message = $fabricantecarro->getErrors();
            }
        }
        $this->set([
            'message' => $message,
            'fabricantecarro' => $fabricantecarro,
            '_serialize' => ['fabricantecarro','message']
        ]); 
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabricantecarro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabricantecarro = $this->Fabricantecarro->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabricantecarro = $this->Fabricantecarro->patchEntity($fabricantecarro, $this->request->getData());
            if ($this->Fabricantecarro->save($fabricantecarro)) {
                $message = 'Saved';
            }else {
                $message = $fabricantecarro->getErrors();
            }             
        }
        $this->set([
            'message' => $message,
            'fabricantecarro' => $fabricantecarro,
            '_serialize' => ['fabricantecarro', 'message']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabricantecarro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post','delete','options']);
        $fabricantecarro = $this->Fabricantecarro->get($id);
        $message = 'Deleted';
        if (!$this->Fabricantecarro->delete($fabricantecarro)) {
            $message = $fabricantecarro->getErrors();
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
