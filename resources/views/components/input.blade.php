@props(['field', 'label' => '', 'type' => 'text', 'value' => '', 'required' => false])

<div class="form-group">
    <label for="{{ $field }}">{{ ucfirst($label) }} @if ($required)
            <span class="text-danger">*</span>
        @endif </label>
    <input min="-10000" step="0.00000001" type="{{ $type }}" class="form-control" name="{{ $field }}"
        id="{{ $field }}" placeholder="{{ $label }}" value="{{ old($field, $value) }}"
        @if ($required) required @endif>
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
