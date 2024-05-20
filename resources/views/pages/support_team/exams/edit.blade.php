@extends('layouts.master')
@section('page_title', 'Экзаменди түзөтүү - '.$ex->name. ' ('.$ex->year.')')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Экзаменди түзөтүү</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ route('exams.update', $ex->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Аталышы <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="name" value="{{ $ex->name }}" required type="text" class="form-control" placeholder="Name of Exam">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="term" class="col-lg-3 col-form-label font-weight-semibold">Чейрек</label>
                            <div class="col-lg-9">
                                <select data-placeholder="Select Teacher" class="form-control select-search" name="term" id="term">
                                    <option {{ $ex->term == 1 ? 'selected' : '' }} value="1">1-Чейрек</option>
                                    <option {{ $ex->term == 2 ? 'selected' : '' }} value="2">2-Чейрек</option>
                                    <option {{ $ex->term == 3 ? 'selected' : '' }} value="3">3-Чейрек</option>
                                    <option {{ $ex->term == 3 ? 'selected' : '' }} value="4">4-Чейрек</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary"> Сактоо<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Class Edit Ends--}}

@endsection
