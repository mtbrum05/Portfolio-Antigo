<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidade Controller
 *
 * @property \App\Model\Table\CidadeTable $Cidade
 *
 * @method \App\Model\Entity\Cidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CidadeController extends AppController
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
        $cidade = $this->paginate($this->Cidade);

        $this->set([
            'cidade' => $cidade,
            '_serialize' => ['cidade']        
            ]);
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => [],
        ]);

        $this->set([            
            'cidade' => $cidade,
            '_serialize' => ['cidade']
            ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidade->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $message = 'Saved';
            } else {
                $message = $cidade->getErrors();
            }
        }
        $this->set([
            'message' => $message,
            'cidade' => $cidade,
            '_serialize' => ['cidade','message']
        ]); 
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $message = 'Saved';
            }else {
                $message = $cidade->getErrors();
            }             
        }
        $this->set([
            'message' => $message,
            'cidade' => $cidade,
            '_serialize' => ['cidade', 'message']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidade->get($id);
        $message = 'Deleted';
        if (!$this->Cidade->delete($cidade)) {
            $message = $cidade->getErrors();
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
