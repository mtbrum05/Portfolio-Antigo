<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estado Controller
 *
 * @property \App\Model\Table\EstadoTable $Estado
 *
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadoController extends AppController
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
        $estado = $this->paginate($this->Estado);

        $this->set([
            'estado' => $estado,
            '_serialize' => ['estado']        
            ]);
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => [],
        ]);

        $this->set([            
            'estado' => $estado,
            '_serialize' => ['estado']
            
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estado = $this->Estado->newEntity();
        if ($this->request->is('post')) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $message = 'Saved';
            } else {
                $message = $estado->getErrors();
            }
        }
        $this->set([
            'message' => $message,
            'estado' => $estado,
            '_serialize' => ['estado','message']
        ]); 
        }
    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estado = $this->Estado->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estado->patchEntity($estado, $this->request->getData());
            if ($this->Estado->save($estado)) {
                $message = 'Saved';
            }else {
                $message = $estado->getErrors();
            }             
        }
        $this->set([
            'message' => $message,
            'estado' => $estado,
            '_serialize' => ['estado', 'message']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estado = $this->Estado->get($id);
        $message = 'Deleted';
        if (!$this->Estado->delete($estado)) {
            $message = $estado->getErrors();
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
