@extends('layouts.guest')

@section('content')
<div class="m-grid m-grid--hor m-grid--root m-page guest-upload-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="min-height: 100vh; background-image: url(../../../assets/app/media/img//bg/bg-3.jpg);">
        <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type="file" name="avatar" id="avatar" accept=".png, .jpg, .jpeg" />
                            <label for="avatar"></label>
                        </div>
                        <div class="avatar-preview">
                            <div class="avatar_preview" id="avatarPreview">
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger close-file invisible"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="m-login__signin">
                    {{ Form::open(array('url' => 'upload-data', 'class'=>'m-login__form m-form"', 'name' => 'guest_form', 'method' => 'POST')) }}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input" type="text" placeholder="enter id number" name="identification_no" autocomplete="off">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>

                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input" type="text" placeholder="enter firstname" name="firstname" autocomplete="off">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input m-login__form-input--last" type="text" placeholder="enter middlename" name="middlename">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input m-login__form-input--last" type="text" placeholder="enter lastname" name="lastname">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group m-form__group required">
                                    <select name="grade_level" class="text-center form-control m-input selectpicker">
                                        <option value="">select grade Level</option>
                                        <option value="Nursery">Nursery</option>
                                        <option value="Kinder">Kinder</option>
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <option value="Grade 3">Grade 3</option>
                                        <option value="Grade 4">Grade 4</option>
                                        <option value="Grade 5">Grade 5</option>
                                        <option value="Grade 6">Grade 6</option>
                                        <option value="Grade 7">Grade 7</option>
                                        <option value="Grade 8">Grade 8</option>
                                        <option value="Grade 9">Grade 9</option>
                                        <option value="Grade 10">Grade 10</option>
                                        <option value="Grade 11">Grade 11</option>
                                        <option value="Grade 12">Grade 12</option>
                                    </select>
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input" type="text" placeholder="enter section" name="section" autocomplete="off">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input" type="text" placeholder="enter contact no" name="contact_no" autocomplete="off">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input m-login__form-input--last" type="text" placeholder="enter mother's name" name="mothers_name">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group m-form__group required">
                                    <input class="form-control m-input m-login__form-input--last" type="text" placeholder="enter father's Name" name="fathers_name">
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group m-form__group required">
                                    <textarea class="form-control m-input m-login__form-input--last text-center" rows="3" placeholder="enter address" name="address"></textarea>
                                    <span class="m-form__help m--font-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button class="submit-btn btn btn-info m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                Upload Now
                            </button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/forms/guest-upload.js') }}" type="text/javascript"></script>
@endpush