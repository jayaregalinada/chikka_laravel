@extends('layouts.base')

@section('title', 'Chikka')

@section('content')
    <div class="jumbotron text-center">
        <h1>Text ME</h1>
    </div>
    <div class="container">
        <form action="{{ route('send') }}" method="POST" name="form_chikka">
            <fieldset>
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="639...." required name="mobile" />
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" style="resize:none" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </fieldset>
        </form>
    </div>
@stop
