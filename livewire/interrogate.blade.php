
<div class="container-fluid">
    <input class = "form-control" wire:model = "status">
    <div class = "row">
        @foreach($vocabularies as $vocabulary)
        <!-- geb mir die nummer was schreibe ich in satatus Größe alls learnt -->
        @if ($vocabulary->learnt > $status )
            @livewire('interrogate-row', ['vocabulary' => $vocabulary], key("vocabulary-" . $vocabulary->id))
        @endif
        @endforeach
   </div>
   <div class="row mt-5">
       <div class="col-12 mt-5">  
            
       </div>
   </div>
</div>
