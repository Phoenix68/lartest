<nav class="navbar navbar-expand-md navbar-dark bg-dark"><!-- fixed-top">-->
    <a class="navbar-brand" href="#"><?php echo e(config('app.name')); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/services">Services</a>
                
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="/posts">Blog</a>
                
            </li>
            <?php if(!Auth::guest()): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="/posts/create">Create</a>
                </li>
            <?php endif; ?>
            
            
            
            
            
            
            
            

        </ul>


        <form class="form-inline m-2">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav mt-2 mt-md-0">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php else: ?>
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="btn btn-secondary nav-link dropdown-toggle" href="#"
                       data-toggle="dropdown" id='logoutdropdown' aria-haspopup="true" aria-expanded="false">
                        
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>


                    
                    <div class="dropdown-menu" aria-labelledby="logoutdropdown">
                        <a href="/dashboard" class="dropdown-item mr-4">Dashboard</a>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: block;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>






















