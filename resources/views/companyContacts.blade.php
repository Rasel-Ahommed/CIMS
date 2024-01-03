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
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"
                    id="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"
                    id="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            
            <form action="{{ route('contact', ['id' => $id]) }}" method="POST">
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
                            <input name="name" type="text" value="{{ old('name') }}">
                            @error('name')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>

                        <td>
                            <input name="phone" type="number" value="{{ old('phone') }}">
                            @error('phone')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <select name="designation" id="selectOption" value="{{ old('designation') }}">
                                <option value="" selected disabled>---Select a Option---</option>
                                @foreach ($design as $data)
                                    <option value="{{$data->cont_desig}}">{{$data->cont_desig}}</option>
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
                            <input name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <span style="color:red">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>
                            <select name="category" id="selectOption" value="{{ old('category') }}">
                                <option value="" selected disabled>---Select a Option---</option>
                                @foreach ($categ as $data)
                                    <option value="{{$data->cont_category}}">{{$data->cont_category}}</option>
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
