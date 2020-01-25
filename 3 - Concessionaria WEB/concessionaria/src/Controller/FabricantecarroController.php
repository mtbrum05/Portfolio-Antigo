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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $fabricantecarro = $this->paginate($this->Fabricantecarro);

        $this->set(compact('fabricantecarro'));
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

        $this->set('fabricantecarro', $fabricantecarro);
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
                $this->Flash->success(__('The fabricantecarro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricantecarro could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricantecarro'));
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
                $this->Flash->success(__('The fabricantecarro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricantecarro could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricantecarro'));
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
        $this->request->allowMethod(['post', 'delete']);
        $fabricantecarro = $this->Fabricantecarro->get($id);
        if ($this->Fabricantecarro->delete($fabricantecarro)) {
            $this->Flash->success(__('The fabricantecarro has been deleted.'));
        } else {
            $this->Flash->error(__('The fabricantecarro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
