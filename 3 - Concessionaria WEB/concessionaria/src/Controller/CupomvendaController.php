<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cupomvenda Controller
 *
 * @property \App\Model\Table\CupomvendaTable $Cupomvenda
 *
 * @method \App\Model\Entity\Cupomvenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CupomvendaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cupomvenda = $this->paginate($this->Cupomvenda);

        $this->set(compact('cupomvenda'));
    }

    /**
     * View method
     *
     * @param string|null $id Cupomvenda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cupomvenda = $this->Cupomvenda->get($id, [
            'contain' => [],
        ]);

        $this->set('cupomvenda', $cupomvenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cupomvenda = $this->Cupomvenda->newEntity();
        if ($this->request->is('post')) {
            $cupomvenda = $this->Cupomvenda->patchEntity($cupomvenda, $this->request->getData());
            if ($this->Cupomvenda->save($cupomvenda)) {
                $this->Flash->success(__('The cupomvenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cupomvenda could not be saved. Please, try again.'));
        }
        $this->set(compact('cupomvenda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cupomvenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cupomvenda = $this->Cupomvenda->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cupomvenda = $this->Cupomvenda->patchEntity($cupomvenda, $this->request->getData());
            if ($this->Cupomvenda->save($cupomvenda)) {
                $this->Flash->success(__('The cupomvenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cupomvenda could not be saved. Please, try again.'));
        }
        $this->set(compact('cupomvenda'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cupomvenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cupomvenda = $this->Cupomvenda->get($id);
        if ($this->Cupomvenda->delete($cupomvenda)) {
            $this->Flash->success(__('The cupomvenda has been deleted.'));
        } else {
            $this->Flash->error(__('The cupomvenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
