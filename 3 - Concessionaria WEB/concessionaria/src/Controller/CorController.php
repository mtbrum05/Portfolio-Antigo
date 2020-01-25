<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cor Controller
 *
 * @property \App\Model\Table\CorTable $Cor
 *
 * @method \App\Model\Entity\Cor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cor = $this->paginate($this->Cor);

        $this->set(compact('cor'));
    }

    /**
     * View method
     *
     * @param string|null $id Cor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cor = $this->Cor->get($id, [
            'contain' => [],
        ]);

        $this->set('cor', $cor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cor = $this->Cor->newEntity();
        if ($this->request->is('post')) {
            $cor = $this->Cor->patchEntity($cor, $this->request->getData());
            if ($this->Cor->save($cor)) {
                $this->Flash->success(__('The cor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cor could not be saved. Please, try again.'));
        }
        $this->set(compact('cor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cor = $this->Cor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cor = $this->Cor->patchEntity($cor, $this->request->getData());
            if ($this->Cor->save($cor)) {
                $this->Flash->success(__('The cor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cor could not be saved. Please, try again.'));
        }
        $this->set(compact('cor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cor = $this->Cor->get($id);
        if ($this->Cor->delete($cor)) {
            $this->Flash->success(__('The cor has been deleted.'));
        } else {
            $this->Flash->error(__('The cor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
