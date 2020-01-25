<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servico Controller
 *
 * @property \App\Model\Table\ServicoTable $Servico
 *
 * @method \App\Model\Entity\Servico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $servico = $this->paginate($this->Servico);

        $this->set(compact('servico'));
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => [],
        ]);

        $this->set('servico', $servico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servico->newEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servico could not be saved. Please, try again.'));
        }
        $this->set(compact('servico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servico->patchEntity($servico, $this->request->getData());
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('The servico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servico could not be saved. Please, try again.'));
        }
        $this->set(compact('servico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servico->get($id);
        if ($this->Servico->delete($servico)) {
            $this->Flash->success(__('The servico has been deleted.'));
        } else {
            $this->Flash->error(__('The servico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
