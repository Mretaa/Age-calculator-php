<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Age Calculator PHP</title>

    <!----StyleSheet---->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section class="vh-50">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Calculate Age</h3>
                            <?php if (isset($error)) { ?>
                            <div class="alert alert-danger">
                                <h3><?= $error ?> </h3>
                            </div>
                            <?php } ?>
                            <?php if (isset($message)) { ?>
                            <div class="alert alert-success">
                                <h4><?= $message ?> </h4>
                            </div>
                            <?php } ?>
                            <form method="post">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Your name</label>
                                    <input type="text" id="typeEmailX-2" name="name"
                                        class="form-control form-control-lg" placeholder="Your name" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Year of birth</label>
                                    <input type="number" id="typePasswordX-2" name="year"
                                        class="form-control form-control-lg" placeholder="eg. 1975" />
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-success btn-lg btn-block" type="submit" name="calculate">
                                    Calculate
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>