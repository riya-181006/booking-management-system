
<?php $__env->startSection('title','Register'); ?>
<?php $__env->startSection('style'); ?>
<style>
    <?php $__env->startSection('style'); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * { font-family: 'Poppins', sans-serif; }

    body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        min-height: 100vh;
    }

    .card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(41, 182, 246, 0.15);
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.97);
        animation: slideUp 0.5s ease;
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    h5.card-title {
        font-weight: 700;
        font-size: 1.6rem;
        color: #0d1b2a;
    }

    p.card-title {
        color: #6c757d;
        font-size: 0.85rem;
    }

    .form-control {
        border-radius: 10px;
        border: 1.5px solid #e0e0e0;
        padding: 10px 15px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .form-control:focus {
        border-color: #29b6f6;
        box-shadow: 0 0 0 3px rgba(41, 182, 246, 0.2);
    }

    label {
        font-weight: 500;
        font-size: 0.85rem;
        color: #333;
    }

    .btn-primary {
        background: linear-gradient(135deg, #29b6f6, #0277bd);
        border: none;
        border-radius: 10px;
        padding: 10px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #0277bd, #01579b);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(2, 119, 189, 0.4);
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    a { color: #29b6f6; font-weight: 500; }
    a:hover { color: #0277bd; }
</style>
<?php $__env->stopSection(); ?>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card" style="width:25rem">
                <div class="mt-4 mb-2">
                    <img class="mx-auto d-block" src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo" width="60">
                </div>
                <div class="mt-2 mb-2">
                    <h5 class="card-title text-center">Signup</h5>
                </div>
                <div class="mt-2 mb-2">
                    <p class="card-title text-center">Kindly Provide your Information for Registration</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register.post')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                    <p class="mb-0"><?php echo e($error); ?></p>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
                            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Renter Password">
                        </div>
                        <div class="mb-3">                           
                            <button type="submit" class="btn btn-primary mb-3" >Register</button>
                            
                        </div>
                        <div class="mb-3">                           
                            <p class="card-title ">Already have an account? <a href="<?php echo e(route('login')); ?>" style="text-decoration:none">Click to login</a></p>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customjs'); ?>
<script>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.baseview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/Auth/register.blade.php ENDPATH**/ ?>