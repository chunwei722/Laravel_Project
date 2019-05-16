<?php $__env->startSection('content'); ?>
    <h1>新增文章</h1>

    
    

    
    <?php if(count($errors) > 0): ?>
        <!-- 表單錯誤清單 -->
        <div class="alert alert-danger">
            <strong>哎呀！出了些問題！</strong>
            <br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <!-- 新文章的表單 -->
        <form action="/admin/article" method="POST" class="form-horizontal">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">圖片網址</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="3"></textarea>
            </div>
             <div class="form-group">
                <label for="content">地圖位址</label>
                <textarea name="map" class="form-control" id="map" rows="3"></textarea>
            </div>

            <!-- 增加文章按鈕-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">新增</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>