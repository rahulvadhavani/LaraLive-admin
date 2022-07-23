@if(in_array('show',$action))
<button wire:click="$emitTo('{{$component}}', 'view',{{$row->id}})" class="ml-2 btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></button>
@endif
@if(in_array('edit',$action))
<button wire:click="$emitTo('{{$component}}', 'edit',{{$row->id}})" class="ml-2 btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
@endif
@if(in_array('delete',$action))
<button wire:click="delete({{$row->id}})"  class="ml-2 btn btn-outline-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
@endif