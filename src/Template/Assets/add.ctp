<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asset $asset
 */
?>

<div class="assets form large-9 medium-8 columns content">
    <?= $this->Form->create($asset) ?>
    <h3>Insertar activo</h3>
    <fieldset>
        <?php


            echo $this->Form->input('plaque',array('type' => 'text','label'=>'Placa', 'class' => 'form-control'));    
            echo $this->Form->control('type_id', array('options' => $types,'label'=>'Tipo', 'class' => 'form-control'));
            echo $this->Form->control('brand', array('label'=>'Marca', 'class' => 'form-control'));
            echo $this->Form->control('model' , array('label'=>'Modelo', 'class' => 'form-control'));
            echo $this->Form->control('series', array('label'=>'Serie', 'class' => 'form-control'));
            echo $this->Form->control('description', array('label'=>'Descripcion', 'class' => 'form-control'));
            echo $this->Form->control('state', array('label'=>'Estado', 'class' => 'form-control'));
            echo $this->Form->control('owner_id', array('label'=>'Dueño', 'class' => 'form-control'));
            echo $this->Form->control('responsable_id', array('options' => $users, 'empty' => true,'label'=>'Responsable', 'class' => 'form-control'));
            echo $this->Form->control('location_id',  array('options' => $locations,'label'=>'Ubicacion', 'class' => 'form-control'));
            echo $this->Form->control('sub_location', array('label'=>'Sub-ubicacion', 'class' => 'form-control'));
            echo $this->Form->control('year',  array('label'=>'Año', 'class' => 'form-control'));
            echo $this->Form->control('lendable',  array('label'=>'Prestable', 'class' => 'checkbox'));
            echo $this->Form->control('observations', array('label'=>'Observaciones', 'class' => 'form-control'));
        ?>

<style>
    .btn-primary {
      margin-top: 15px;
      float: right;
    }
</style> 
</div>

<?= $this->Html->link(__('Cancelar'), ['controller' => 'Types', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>

<?= $this->Form->button(__('Aceptar'), ['class' => 'btn btn-primary']) ?>