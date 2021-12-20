<div class="custom-select ">
    <label for="inputtext" class="col-sm-2 col-form-label text">Slots</label>
    <span class="ps-5">
    <select class="form-select" name="slot_id" id="slotId">
    @foreach ($slotList as $key => $value)
            <option value='{{$key}}'>{{$value}}</option>
    @endforeach
    </select>
    </span>
</div>
@if(count($slotList) == 1)
    <span class="text-danger">@lang('No slots are available for this course')</span>
@endif
