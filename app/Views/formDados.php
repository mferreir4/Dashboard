<div class="row mt-5 pt-5">
    <div class="col"></div>
    <div class="col">
        <div class="form-row">
            <div class=".col-md-6 .offset-md-3">
                <label for="validationCustom03">C.E.P</label>
                <input type="number" minlength="number" minlength="8" class="form-control mt-1" id="cep" name="cep"
                    placeholder="CEP" required>
            </div>
            <div class="row">
                <div class="col">
                    <label for="validationCustom03">logradouro</label>
                    <input type="text" class="form-control mt-1" id="logradouro" name="logradouro"
                        placeholder="logradouro">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="validationCustom03">City</label>
                    <input type="text" class="form-control mt-1" id="cidade" name="cidade" placeholder="City" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-4">
                    <label for="validationCustom03">Bairro</label>
                    <input type="text" class="form-control mt-1" id="bairro" name="bairro" placeholder="Bairro"
                        required>

                </div>
                <div class="col">
                    <label for="inputState">Estado</label>
                    <select id="selectname" name="selectname" class="form-control mt-1">
                        <option>SP</option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SE</option>
                        <option>TO</option>
                </div>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div>

            </div>
            <button class="btn btn-primary" type="submit">Next</button>
            <script>
                            <?php
include_once "alert.php";
$alert = new alerts();

?>
            </script>
        </div>
    </div>
</div>
<div class="col"></div>