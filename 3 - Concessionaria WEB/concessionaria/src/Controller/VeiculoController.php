<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Veiculo Controller
 *
 * @property \App\Model\Table\VeiculoTable $Veiculo
 *
 * @method \App\Model\Entity\Veiculo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VeiculoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $veiculo = $this->paginate($this->Veiculo);

        $this->set(compact('veiculo'));
    }

    /**
     * View method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $veiculo = $this->Veiculo->get($id, [
            'contain' => [],
        ]);

        $this->set('veiculo', $veiculo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $veiculo = $this->Veiculo->newEntity();
        if ($this->request->is('post')) {
            $veiculo = $this->Veiculo->patchEntity($veiculo, $this->request->getData());
            if ($this->Veiculo->save($veiculo)) {
                $this->Flash->success(__('The veiculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veiculo could not be saved. Please, try again.'));
        }
        $this->set(compact('veiculo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $veiculo = $this->Veiculo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $veiculo = $this->Veiculo->patchEntity($veiculo, $this->request->getData());
            if ($this->Veiculo->save($veiculo)) {
                $this->Flash->success(__('The veiculo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The veiculo could not be saved. Please, try again.'));
        }
        $this->set(compact('veiculo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Veiculo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $veiculo = $this->Veiculo->get($id);
        if ($this->Veiculo->delete($veiculo)) {
            $this->Flash->success(__('The veiculo has been deleted.'));
        } else {
            $this->Flash->error(__('The veiculo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
