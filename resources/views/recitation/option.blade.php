<option value="">আবৃত্তিকারের   নাম</option>
@if(!empty($states))
    @foreach($states as $key => $value)
        <option value="{{ $value }}">{{ $value }}</option>
    @endforeach
@endif