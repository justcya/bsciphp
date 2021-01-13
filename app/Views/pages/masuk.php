<?php include 'layout/header.php' ?>

<div class="sign">
    <div class="text-center">
        <div class="justify-content-center">
            <form action="/kkncipondoh" class="form-signin">
                <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Masuk</h1>
                <label for="inputUsername" class="sr-only">Email address</label>
                <input type="username" id="inputUsername" class="form-control" placeholder="Username" autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit">Masuk</button>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>