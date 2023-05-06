    <div class="row pt-5 mt-5">
        <div class="col"></div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <label for="validationCustom01">fist name</label>
                    <!-- < ?= set_value('username') ?>" size="50"> -->
                    <input type="text" class="form-control mt-1" id="fist name" placeholder="fist name" name="fist_name"
                        required>
                    <!--<div class="valid-feedback">
                                </div> -->
                </div>

                <div class="col">
                    <label for="validationCustom01">second name</label>
                    <input type="text" class="form-control mt-1" id="second name" placeholder="second name"
                        name="second_name" required>
                    <!-- <div class="valid-feedback">
                            </div> -->
                </div>
            </div>
            <div class=".col-md-6 .offset-md-3">
                <label for="validationCustom01">CPF</label>
                <input type="password" class="form-control mt-1" id="cpf" minlength="11" placeholder="CPF" name="cpf"
                    required>
                <div class="valid-feedback">
                    Please, Your CPF need 11 caracteres
                </div>
            </div>
            <div class=".col-md-6 .offset-md-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text mt-1" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control rounded mt-1" id="email" placeholder="Email"
                        aria-describedby="inputGroupPrepend" name="email" required>
                    <div class="invalid-feedback">
                        Please choose a Email.
                    </div>
                </div>
            </div>

            <div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class=".col-md-6 .offset-md-3">
                    <input type="password" class="form-control mt-1" minlength="8" id="password" placeholder="Password"
                        name="password" required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>
            </div>
            <div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class=".col-md-6 .offset-md-3">
                    <input type="password" class="form-control mt-1" minlength="8" id="confPassword"
                        placeholder="Confirm Password" name="confPassword" required>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check mb-2">
                    <input required class="form-check-input mt-1" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                        Remember me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input mt-1" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div id="submit">
                    <button class="btn btn-primary" name="submit" href="cadastro__dados.php?pg=1" value="submit"
                        type="submit">Next
                    </button>
                </div>

</div>
</div>
<div class="col"></div>
</div>
