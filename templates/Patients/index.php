<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient[]|\Cake\Collection\CollectionInterface $patients
 */
?>
<div class="patients index content">
    <?= $this->Html->link(__('New Patient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Patients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('street_address') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('zipcode') ?></th>                   
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $patient): ?>
                <tr>
                    <td><?= $this->Number->format($patient->id) ?></td>                    
                    <td><?= h($patient->name) ?></td>
                    <td><?= h($patient->street_address) ?></td>
                    <td><?= h($patient->city) ?></td>
                    <td><?= h($patient->state) ?></td>
                    <td><?= h($patient->zipcode) ?></td>                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $patient->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patient->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
