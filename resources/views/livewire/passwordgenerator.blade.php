<div>
    <div class="py-8 my-8">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center">
                    <span class="fs-4 text-info ls-md text-uppercase fw-semibold">Password Generator</span>
                    <div class="input-group mb-4 mt-3">
                        <input type="text" id="textInput" class="form-control p-2 fs-2 text-center"
                            wire:model="password" autocomplete="off">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2"
                            wire:click="copyPassword"><i class="fa-regular fa-copy"></i></button>
                    </div>
                    <a href="#" class="btn btn-primary" wire:click="generatePassword">Generate</a>
                </div>
            </div>
        </div>
    </div>
</div>