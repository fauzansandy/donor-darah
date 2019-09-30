<select class="cs-select cs-skin-slide" name="{{ isset($name) ? $name : 'unknown' }}" data-init-plugin="cs-select">
    @if (isset($items))
        @foreach ($items as $value => $item)
            @if ($value == $selected)
                <option value="{{ $value }}" selected>{{ $item }}</option>
            @else
                <option value="{{ $value }}">{{ $item }}</option>
            @endif
        @endforeach
    @endif
</select>
