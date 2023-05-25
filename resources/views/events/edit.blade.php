@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Event') }}</div>

                <div class="card-body">
                    <form class="row g-2" action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-md-3">
                            <label>Event Name</label>
                            <input class="form-control mb-3" name="event_name" type="text" placeholder="Event Name" value="{{ $event->event_name }}">
                        </div>

                        <div class="col-md-3">
                            <label>Add Location</label>
                            <input class="form-control mb-3" name="location" type="text" placeholder="Location" value="{{ $event->location }}">
                        </div>

                        <div class="col-md-3">
                            <label>Add Price</label>
                            <input class="form-control mb-3" name="add_price" type="text" placeholder=" Price" value="{{ $event->add_price }}">
                        </div>

                        <div class="col-md-3">
                            <label>Select Type Of Event</label>
                            <select class="form-select mb-3" name="type_of_event" aria-label="Default select example">
                                <option value="">Select</option>
                                <option value="1" {{ $event->type_of_event == 1 ? 'selected' : '' }}>General</option>
                                <option value="2" {{ $event->type_of_event == 2 ? 'selected' : '' }}>College</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Event Date</label>
                            <input class="form-control mb-3" name="event_date" type="date" value="{{ $event->event_date }}">
                        </div>

                        <div class="col-md-3">
                            <label>Event Front Image</label>
                            <input type="file" name="event_front_image" class="form-control mb-3" accept="image/*">
                            @if ($event->event_front_image)
                                <img src="{{ asset('storage/' . $event->event_front_image) }}" width="150" alt="{{ $event->event_name }}">
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label>Event Rule Book</label>
                            <input type="file" name="event_rule_book" class="form-control mb-3" accept="image/*">
                            @if ($event->event_rule_book)
                                <a href="{{ asset('storage/' . $event->event_rule_book) }}" target="_blank">{{ $event->event_name }} Rule Book</a>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label>Description</label>
                            <input class="form-control mb-3" name="description" type="text" placeholder="Description" value="{{ $event->description }}">
                        </div>

                        <div class="col-md-3">
                            <label>Add Schedule Date</label>
                            <input class="form-control mb-3" name="schedule_date" type="date" value="{{ $event->schedule_date }}">
                        </div>

                        <div class="col-md-3">
                            <label>Add Schedule Activity</label>
                            <input class="form-control mb-3" name="schedule_activity" type="text" value="{{ $event->schedule_activity }}">
                        </div>
                        <div class="col-md-2 offset-md-5" style="margin-top: 3.5%;">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
