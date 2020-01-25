<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funcionario Controller
 *
 * @property \App\Model\Table\FuncionarioTable $Funcionario
 *
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $funcionario = $this->paginate($this->Funcionario);

        $this->set(compact('funcionario'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionario = $this->Funcionario->get($id, [
            'contain' => [],
        ]);

        $this->set('funcionario', $funcionario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionario->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionario->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionario->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionario->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionario->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionario->get($id);
        if ($this->Funcionario->delete($funcionario)) {
            $this->Flash->success(__('The funcionario has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
