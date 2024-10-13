<div class = "row">
    <div class = "col-lg-4">
        <table style="width:100%">  
          <tr>
            <td class="h4" style="background:#876445;">
                {{ $vocabulary->question }}
            </td> 
          </tr>
        </table>
    </div>
    <div class = "col-lg-4 position-relative h-100">
        <table style="width:100%" wire:click = "toggleHidden">
          <tr style="background:#76BA99;">
            <th class="h4">
                {{ $vocabulary->answer }}
            </th>
          </tr>
          @if($hidden)
            <div wire:click = "toggleHidden" class = "position-absolute top-0 end-0 bottom-0 start-0 bg-black"></div>
          @endif
        </table>
    </div>
    <div class = "col-lg-3 position-relative h-100 " wire:click = "toggleHidden">
        {{ $vocabulary->learnt }}
        @if(! $hidden)
        <button  wire:click = "richtig">richtig</button>
        <button wire:click = "falsch">falsch</button>
        @endif
    </div>
    <div class="col-1 text-center">
        <button wire:click="delete" class="btn btn-outline-danger">
            <b>delete</b>
        </button>
    </div>
</div>
