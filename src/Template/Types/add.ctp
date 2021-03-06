<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>

<div class="types form large-9 medium-8 columns content">
    <?= $this->Form->create($type) ?>
    <h3>Insertar tipo de activo</h3>
    <fieldset>
        <?php
            echo $this->Form->input('type_id', array('type' => 'text', 'label' => 'ID', 'class' => 'form-control'));
            echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control'));
            echo $this->Form->input('description', array('label' => 'Descripción', 'class' => 'form-control'));
        ?>
    </fieldset>

<style>
    .btn-primary {
      margin-top: 15px;
      float: right;
    }
</style> 
</div>

<?= $this->Html->link(__('Cancelar'), ['controller' => 'Types', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>

<?= $this->Form->button(__('Aceptar'), ['class' => 'btn btn-primary']) ?>
    
