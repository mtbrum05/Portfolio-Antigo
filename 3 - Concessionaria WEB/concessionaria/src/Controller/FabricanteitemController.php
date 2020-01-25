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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $fabricanteitem = $this->paginate($this->Fabricanteitem);

        $this->set(compact('fabricanteitem'));
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

        $this->set('fabricanteitem', $fabricanteitem);
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
                $this->Flash->success(__('The fabricanteitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricanteitem could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricanteitem'));
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
                $this->Flash->success(__('The fabricanteitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricanteitem could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricanteitem'));
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
        if ($this->Fabricanteitem->delete($fabricanteitem)) {
            $this->Flash->success(__('The fabricanteitem has been deleted.'));
        } else {
            $this->Flash->error(__('The fabricanteitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
