<div class="pt-4 pb-8">
    {{ $content }}
    <div
                    class="form-textarea w-full"
                    x-data
                    x-init="
                        ClassicEditor.create($refs.myIdentifierHere)
                        .catch( error => {
                            console.error( error );
                        } );
                    "
                    wire:ignore
                    wire:key="myIdentifierHere"
                    x-ref="myIdentifierHere"
                    wire:model.debounce.9999999ms="content"
                >{!! $content !!}</div>
    <button class="btn btn-primary" wire:click="store">Guardar</button>
</div>
