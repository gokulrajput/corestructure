<?php $__env->startSection('content'); ?>


<form action="">
    <div id='create_header' class="create_header">
        <h1>Administration Section Creator</h1>
        <p>Welcome to Project Manager program. Before getting started, Kindly read the steps and fill required information. You will get 60% code of your project's Admin section in just few minutes.</p>
    </div>
    <div id="wizard">
        <!-- SECTION 1 -->
        <h4>Step 1</h4>
        <?php echo $__env->make('project.basic_info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- SECTION 2 -->
        <h4>Step 2</h4>
        <?php echo $__env->make('project.framework', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
        <!-- SECTION 3 -->
        <h4>Step 3</h4>
        <?php echo $__env->make('project.admin_setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

       <!-- SECTION 4 -->
       <h4>Step 4</h4>
        <?php echo $__env->make('project.modules', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                    

        <!-- SECTION 5 -->
        <h4>Step 5</h4>
        <?php echo $__env->make('project.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
        
        <h4>Step 6</h4>
        <?php echo $__env->make('project.dblayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>               
       
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>