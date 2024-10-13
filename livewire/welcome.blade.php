<div>
    <div class="row">
        <div class="col-6">
            <p class="text-dark h1">
                <b>Question</b>
            </p>
        </div>
        <div class="col-6">
            <p class="text-dark h1">
                <b>Answer</b>
            </p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <input class="form-control" wire:model="question">
        </div> 
        <div class="col-lg-6">
            <input class="form-control" wire:model="answer">
        </div> 
        <div class = "col-lg-12 mt-4"> 
                <!-- wire:click können wir clicken auf button Speichern -->
                <button class = "btn btn-info form-control text-white" wire:click = "save">
                    Speichern
                </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <link rel="stylesheet" type="text/css" href="interrogate">
        </div>
    </div>
</div>
