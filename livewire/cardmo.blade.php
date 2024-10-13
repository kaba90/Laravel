<div class="ex4">
    <div class="row text-center mt-5">
        <div class="col-12 text-center">
            <div class="card text-center h1 mt-5">
                @if($german)
               <b class="h1 text-danger mt-5">
                    {{$vocabulary->question}}
                </b>
                    <a href="#" class="btn btn-info ms-5 h2" wire:click="ifgerman" style="width:1150px; height:100px; border-radius: 0px;">
                        <b class="h2">Go somewhere</b>
                    </a>
                @else
                <b class="text-primary h1">
                    {{$vocabulary->answer}}
                </b>
                <div class="row mt-5">
                    <div class="col-4">
                        <button class="btn btn-outline-primary border border-5 border-primary h2" wire:click = "richtig" style="border-radius:0px; height:95px; width:210px;">
                            richtig
                        </button>
                    </div>
                    <div class="col-4 text-center">
                        {{ $vocabulary->learnt }}
                    </div>
                    <div class="col-4">
                        <button class="btn btn-outline-danger border border-5 border-danger h2" wire:click = "falsch" style="border-radius: 0px; height:95px; width:210px;">
                            Falsch
                        </button>
                    </div>
                </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">
                        
                    </h5>
                    <p class="card-text">
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
