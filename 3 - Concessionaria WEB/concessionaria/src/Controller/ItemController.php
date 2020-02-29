<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Item Controller
 *
 * @property \App\Model\Table\ItemTable $Item
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemController extends AppController
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
        $item = $this->paginate($this->Item);

        $this->set([
            'item' => $item,
            '_serialize' => ['item']        
            ]);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Item->get($id, [
            'contain' => [],
        ]);

        $this->set([            
            'item' => $item,
            '_serialize' => ['item']
            ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Item->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Item->patchEntity($item, $this->request->getData());
            if ($this->Item->save($item)) {
                $message = 'Saved';
            } else {
                $message = $item->getErrors();
            }
        }
        $this->set([
            'message' => $message,
            'item' => $item,
            '_serialize' => ['item','message']
        ]); 
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Item->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Item->patchEntity($item, $this->request->getData());
            if ($this->Item->save($item)) {
                $message = 'Saved';
            }else {
                $message = $item->getErrors();
            }             
        }
        $this->set([
            'message' => $message,
            'item' => $item,
            '_serialize' => ['item', 'message']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Item->get($id);
        $message = 'Deleted';
        if (!$this->Item->delete($item)) {
            $message = $item->getErrors();
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}