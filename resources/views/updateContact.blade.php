@extends('header')

<style>
    .addCustomerForm {
        padding: 10px;
    }

    .addCustomerForm input {
        padding: 10px;
        width: 100%;
        border: 1px solid;
        border-radius: 5px;
    }

    .submitBox {
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    .submitBox #submit {
        width: auto;
        padding: 15px 40px;
        background: #0897BF;
        color: white;
        border-radius: 10px;
        cursor: pointer;
    }

    #selectOption {
        padding-block: 10px;
        border: 1px solid;
        width: 100%;
        border-radius: 5px;
        text-align: center;
    }
</style>
@section('adminContante')

    <div id="app">

        <section class="is-hero-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <h1 class="title">
                    Add New Contact
                </h1>
                <button class="button light">Button</button>
            </div>
        </section>

        <div class="addCustomerForm">
            <form action="/update_contact/{{ $data->id }}" method="POST">
                @csrf
                <table>
                    {{-- group 1 --}}
                    <tr>
                        <td>
                            <label for="name">Name<span style="color: red">*</span></label>
                        </td>
                        <td>
                            <label for="company name">Phone<span style="color: red">*</span></label>
                        </td>
                        <td>
                            <label for="phone">Designation<span style="color: red">*</span></label>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="name" type="text" value="{{ $data->name }}">
                            @error('name')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>

                        <td>
                            <input name="phone" type="number" value="{{ $data->phone }}">
                            @error('phone')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <select name="designation" id="selectOption">
                                <option value="" disabled>---Select an Option---</option>
                                @foreach ($design as $d)
                                    <option value="{{$d->cont_desig}}" {{$data->category == $d->cont_desig ? 'selected':''}}>{{$d->cont_desig}}</option>
                                @endforeach
                            </select>
                            @error('designation')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>

                    {{-- group 2 --}}
                    <tr>
                        <td>
                            <label for="Email">Email</label>
                        </td>
                        <td>
                            <label for="address">Category<span style="color: red">*</span></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="email" type="email" value="{{ $data->email }}">
                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <select name="category" id="selectOption" value="{{ $data->category }}">
                                <option value="" selected disabled>---Select a Option---</option>
                                @foreach ($categ as $d)
                                    <option value="{{$d->cont_category}}" {{$data->category == $d->cont_category ? 'selected':''}}>{{$d->cont_category}}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                </table>
                <div class="submitBox">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>

            </form>

        </div>
