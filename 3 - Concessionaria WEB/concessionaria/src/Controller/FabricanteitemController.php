<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fabricanteitem Controller
 *
 * @property \App\Model\Table\FabricanteitemTable $Fabricanteitem
 *
 * @method \App\Model\Entity\Fabricanteitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FabricanteitemController extends AppController
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
        $fabricanteitem = $this->paginate($this->Fabricanteitem);

        $this->set([
            'fabricanteitem' => $fabricanteitem,
            '_serialize' => ['fabricanteitem']        
            ]);
    }

    /**
     * View method
     *
     * @param string|null $id Fabricanteitem id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabricanteitem = $this->Fabricanteitem->get($id, [
            'contain' => [],
        ]);

        $this->set([            
            'fabricanteitem' => $fabricanteitem,
            '_serialize' => ['fabricanteitem']
            ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabricanteitem = $this->Fabricanteitem->newEntity();
        if ($this->request->is('post')) {
            $fabricanteitem = $this->Fabricanteitem->patchEntity($fabricanteitem, $this->request->getData());
            if ($this->Fabricanteitem->save($fabricanteitem)) {
                $message = 'Saved';
            } else {
                $message = $fabricanteitem->getErrors();
            }
        }
        $this->set([
            'message' => $message,
            'fabricanteitem' => $fabricanteitem,
            '_serialize' => ['fabricanteitem','message']
        ]); 
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabricanteitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabricanteitem = $this->Fabricanteitem->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabricanteitem = $this->Fabricanteitem->patchEntity($fabricanteitem, $this->request->getData());
            if ($this->Fabricanteitem->save($fabricanteitem)) {
                $message = 'Saved';
            }else {
                $message = $fabricanteitem->getErrors();
            }             
        }
        $this->set([
            'message' => $message,
            'fabricanteitem' => $fabricanteitem,
            '_serialize' => ['fabricanteitem', 'message']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabricanteitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fabricanteitem = $this->Fabricanteitem->get($id);
        $message = 'Deleted';
        if (!$this->Fabricanteitem->delete($fabricanteitem)) {
            $message = $fabricanteitem->getErrors();
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
