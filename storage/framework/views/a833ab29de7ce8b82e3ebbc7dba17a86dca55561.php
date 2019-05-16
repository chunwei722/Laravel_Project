<?php $__env->startSection('content'); ?>
    <h1>文章列表</h1>
    <div class="col-sm-12 py-4">
        <a class="btn btn-primary" href="/admin/article/create" role="button">新增文章</a>
    </div>
    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">文章標題</th>
            <th scope="col">圖片</th>
            <th scope="col">更新日期</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($article->title); ?></td>
            <td><img src="/<?php echo e($article->image); ?>" width = 150px height =150px></td>
            <td><?php echo e($article->updated_at); ?></td>
            <td>
                <br>
                 <form action="<?php echo e(route('admin.article.delete', [$article->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?> <!--laravel 內建form安全 每個form都要使用-->
                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-outline-danger">刪除</button>
                </form>
                <br>
                <form action="<?php echo e(route('admin.article.edit', [$article->id])); ?>" method="GET">
                    <button class="btn btn-outline-primary">編輯</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>