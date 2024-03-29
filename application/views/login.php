<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">
    <!-- Login form -->
    <form class="login-form" action="login" method="POST">
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Login to your account</h5>
                    <span class="d-block text-muted">Enter your credentials below</span>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>


                <div class="form-group form-group-feedback form-group-feedback-left text-center">
                    <span class="d-block text-danger"><?php
                                                        if (@$_GET['login'] === "false") {
                                                            if ($_GET['userExists'] === "false") {
                                                                echo "User not found";
                                                            } else {
                                                                echo "Wrong password";
                                                            }
                                                        }
                                                        ?></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </div>
            </div>
        </div>
    </form>
    <!-- /login form -->

</div>
<!-- /content area -->