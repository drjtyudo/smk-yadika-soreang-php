<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <img src="image/logo.png" class="logo">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4 mt-5"><?= $title?></h3>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('Auth/register') ?>" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control form-control-user" id="email" type="text" placeholder="Email" name="email" value="" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-user" name="name" placeholder="name" value="">
                                        <label for="name">Nama</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control form-control-user" name="password" id="inputPassword" type="password" placeholder="password" autocomplete="off" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control form-control-user" name="pass_confirm" id="inputPasswordConfirm" type="password" placeholder="password" />
                                                <label for="inputPasswordConfirm">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="tombol" value="register">Register</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                            <div class="small">Sudah Memiliki Akun?<a href="<?= base_url('Auth')?>"> Sign in!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
 