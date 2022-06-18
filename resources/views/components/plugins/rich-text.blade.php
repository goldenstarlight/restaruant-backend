<div x-data="{value: @entangle($attributes->wire('model'))" , x-ref=" quillEditor" x-init="quill = new Quill($refs.quillEditor, {theme: 'snow'});
        quill.on('text-change', function () {
        $dispatch('input', quill.root.innerHTML);
        });" {{ $attributes->whereDoesntStartWith('wire:model') }} wire:ignore>
    <div id="editor"></div>
</div>
