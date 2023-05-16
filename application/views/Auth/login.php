<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <img src="image/logo.png" class="logo">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4 mt-5"><?= $title?></h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message');?>
                                <form class="user" action="<?= base_url('Auth')?>" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control form-control-user" id="inputEmail" type="email" placeholder="email" name="email" value="<?= set_value('email')?>"/>
                                            <?= form_error('email', '<small class"text-danger pl-3">','</small>')?>
                                            <label for="inputEmail">Email</label>
                                        </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control form-control-user" id="inputPassword" type="password" placeholder="password" name="password" />
                                        <?= form_error('password', '<small class"text-danger pl-3">','</small>')?>
                                        <label for="password">Password</label>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="tombol" value="login">Login</button></div>
                                    </div>

                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                    <div class="small">Butuh Akun?<a href="<?= base_url('Auth/register')?>"> Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    