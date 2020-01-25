<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modelo Controller
 *
 * @property \App\Model\Table\ModeloTable $Modelo
 *
 * @method \App\Model\Entity\Modelo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModeloController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $modelo = $this->paginate($this->Modelo);

        $this->set(compact('modelo'));
    }

    /**
     * View method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelo = $this->Modelo->get($id, [
            'contain' => [],
        ]);

        $this->set('modelo', $modelo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelo = $this->Modelo->newEntity();
        if ($this->request->is('post')) {
            $modelo = $this->Modelo->patchEntity($modelo, $this->request->getData());
            if ($this->Modelo->save($modelo)) {
                $this->Flash->success(__('The modelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modelo could not be saved. Please, try again.'));
        }
        $this->set(compact('modelo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelo = $this->Modelo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelo = $this->Modelo->patchEntity($modelo, $this->request->getData());
            if ($this->Modelo->save($modelo)) {
                $this->Flash->success(__('The modelo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modelo could not be saved. Please, try again.'));
        }
        $this->set(compact('modelo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modelo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelo = $this->Modelo->get($id);
        if ($this->Modelo->delete($modelo)) {
            $this->Flash->success(__('The modelo has been deleted.'));
        } else {
            $this->Flash->error(__('The modelo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
